<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8" />
		<title> Pack </title>
		<link id ="css" rel="stylesheet" media="screen, print, handheld" type="text/css" href="calendrier_pack.css" />
    	<script src="../Calendrier_Dispo/jquery.js"></script>
    	<script type="text/javascript" src="calendrier_pack.js"></script>
	</head>
	<body>
	<?php include("../Header/header.php"); ?> <!-- inclus les liens visibles partout-->
	<link id ="css" rel="stylesheet" media="screen, print, handheld" type="text/css" href="Pack.css" />
		<!-- Connectons nous à la BDD-->
	<?php
	
try
{
	$bdd = new PDO('mysql:host=localhost;dbname=Database;charset=utf8', 'root', 'root');
}
catch(Exception $e)
{
        die('Erreur : '.$e->getMessage());
}
?>


<!-- Récupérons les infos sur locations -->

<?php

$req = $bdd->query('SELECT ID, Debut, Fin FROM Locations');

$info_loca = $req->fetch();

echo '<script> var IDLoc ="'. $info_loca[ID] .'" ;
var Loca_Debut = "'. $info_loca[Debut].'";
var Loca_Fin = "'. $info_loca[Fin].'";
var Loca= [IDLoc, Loca_Debut,Loca_Fin];</script>';
while ($info_loca = $req->fetch())
{
 
echo '<script> var IDLoc ="'. $info_loca[ID] .'" ;
var Loca_Debut = "'. $info_loca[Debut].'";
var Loca_Fin = "'. $info_loca[Fin].'";
Loca.push(IDLoc);
Loca.push(Loca_Debut);
Loca.push(Loca_Fin);
</script>';

}
foreach($_SESSION['Locations'] as $Article)
{
	
		echo '<script>
			var IDLoc ="'. $Article[0] .'" ;
			var Loca_Debut = "'. $Article[1].'";
			var Loca_Fin = "'. $Article[2] .'";
			Loca.push(IDLoc);
			Loca.push(Loca_Debut);
			Loca.push(Loca_Fin);
			</script>';
}

$req->closeCursor();

?>

<!-- Récupérons les infos sur les packs-->
<?php 
	$req_pack = $bdd->query('SELECT * FROM Packs');


//Créons les formulaires pour ces packs
	while($info_pack = $req_pack->fetch())
	{
		echo '<div id =' . $info_pack['IDPack'] . '>' . $info_pack['Nom'] . ': ' . $info_pack['Prix'] . '€</br>';
		$req_correspondance = $bdd->prepare('SELECT ID, Quantite FROM Correspack WHERE IDPack=?');
		$req_correspondance->execute(array($info_pack['IDPack']));
		echo '<script>var compo_pack = []; </script>';
		while($correspondance = $req_correspondance->fetch())
		{	
			$req_article = $bdd->prepare('SELECT Nom, Marque, Caution, Etat, Quantite, Categorie, Disponible, Prix, ID FROM BaseDeDonnee WHERE ID = ? ');
			$req_article->execute(array($correspondance['ID']));
			$article = $req_article->fetch();
			//préparation au calendrier
			echo '<script>
			var ID= "'.$correspondance['ID'].'";
			
			var quantite ="'.$correspondance['Quantite'].'";
			
			var dispo_article = "'.$article['Quantite'].'";
			compo_pack.push(ID);
			compo_pack.push(quantite);
			compo_pack.push(dispo_article);
			</script>';
			//1)on récupère le fichier correspondant
			$trans = array("0" => "", "1" => "", "2" => "", "3" => "", "4" => "", "5" => "", "6" => "", "7" => "", "8" => "", "9" => "");
			$dossier = strtr($article['ID'],$trans);
			for($i=0; $i<$correspondance['Quantite']; $i++)
// 2)on affiche le nom du produit 
	{echo '<div class=articlePack> '. $article['Nom'] .  '<br />' 
	//3) Sn image
	. '<img src ="../ressources/Materiel/' . $dossier . '/' .$article['ID'] . '/' . $article['ID'] . '.jpeg" height="120" width="120" alt = "Image du produit: ' . $article['Nom'] . '" /> </div>'; }
 //height et width définisse une taille standard pour les images

		}
	
	echo '</br>';

//Ajoutons le calendrier de disponibilitées
	
	echo '<div class="Conteneur"><div id="calendar'.$info_pack['IDPack'].'" class="calendar'.$info_pack['IDPack'].'"><script>new Calendar(\'#calendar'.$info_pack['IDPack'].'\', compo_pack, Loca);</script></div>';

	// Ajoutons maintenant un formulaire de réservation

	echo '<div class="Formulaire"><form method = "post" action = "Pack.php?ID_Pack='. $info_pack['IDPack'] .'">
<label for= "Date_Debut"> Date de début de réservation </label> : <input type = "date" name="Date_Debut" id = "Date_Debut" placeholder="jj/mm/aaaa" required/>
<label for= "Date_Fin"> Date de fin de réservation </label> : <input type = "date" name="Date_Fin" id = "Date_Fin" placeholder="jj/mm/aaaa" required/>
<input type="submit" class="AjoutPanier" value="AJOUTER AU PANIER" />
	</form>';

	echo '</div></div></div>';

	}

//Traitons le cas où un formulaire a été envoyé
	if (isset($_POST['Date_Debut'], $_POST['Date_Fin']))
{	//On met les dates au bon format pour la suite
	$trans = array("/" => "-");
	$DateD = strtr($_POST['Date_Debut'], $trans);
	$DateF = strtr($_POST['Date_Fin'], $trans);
	$test_formatD = True;
	$test_formatF = True;
	
	
	if(ctype_digit(substr($DateD, 0,3)))
	{	
		
		$split = explode("-", $DateD);
		$DateD = $split[2] . "-" . $split[1] . "-" . $split[0];
	}
	
	if(ctype_digit(substr($DateF, 0,3)))
	{
		$split = explode("-", $DateF);
		$DateF = $split[2] . "-" . $split[1] . "-" . $split[0];
	}

	//On vérifie la disponibilité des articles les articles
	$dispo = True;
	$req_correspondance = $bdd->prepare('SELECT ID, Quantite FROM Correspack WHERE IDPack=?');
	$req_correspondance->execute(array($_GET['ID_Pack']));
	while($correspondance = $req_correspondance->fetch())
		{	
			$req_article = $bdd->prepare('SELECT Nom, Marque, Caution, Etat, Quantite, Categorie, Disponible, Prix, ID FROM BaseDeDonnee WHERE ID = ? ');
			$req_article->execute(array($correspondance['ID']));
			$article = $req_article->fetch();
			$req_location = $bdd->prepare('SELECT Debut, Fin FROM Locations WHERE ID=?');
			$req_location->execute(array($article['ID']));
			$compteur = 0;
			while($locations = $req_location->fetch()) 
			{
				if(  ((new Datetime($DateD) >= new Datetime($locations['Debut'])) AND (new Datetime($DateD) <= new Datetime($locations['Fin'])))
			OR ((new Datetime($DateF) >= new Datetime($locations['Debut'])) AND (new Datetime($DateF) <= new Datetime($locations['Fin'])))
			OR (new Datetime($DateD) <= new Datetime($locations['Debut'])) AND (new Datetime($DateF) >= new Datetime($locations['Fin'])))
				{
					$compteur = $compteur + 1;

				}
			}
		
			foreach($_SESSION['Locations'] as $locations)
			{
				if($locations[0]==$article['ID'])
				{
					if(  ((new Datetime($DateD) >= new Datetime($locations[1])) AND (new Datetime($DateD) <= new Datetime($locations[2])))
					OR ((new Datetime($DateF) >= new Datetime($locations[1])) AND (new Datetime($DateF) <= new Datetime($locations[2])))
					OR (new Datetime($DateD) <= new Datetime($locations[1])) AND (new Datetime($DateF) >= new Datetime($locations[2])))
					{
						$compteur = $compteur + 1;

					}
				}

			}
		echo $compteur . '</br>';
		if($compteur + $correspondance['Quantite']> $article['Quantite'])
		{
			$dispo= False;

		}
	
		}
//Si disponible on ajoute tout au Panier
		if($dispo)
		{
			//Si disponible on ajoute tout au Panier
			$req_correspondance = $bdd->prepare('SELECT ID, Quantite FROM Correspack WHERE IDPack=?');
			$req_correspondance->execute(array($_GET['ID_Pack']));
			while($correspondance = $req_correspondance->fetch())
				{	
					for($i=1; $i<=$correspondance['Quantite']; $i++)
					{
						$req_article = $bdd->prepare('SELECT Nom, Marque, Caution, Etat, Quantite, Categorie, Disponible, Prix, ID FROM BaseDeDonnee WHERE ID = ? ');
						$req_article->execute(array($correspondance['ID']));
						$article = $req_article->fetch();
						$_SESSION['Locations'][] = array($article['ID'],$DateD,$DateF);
						
					}
				}
				echo '<script>
    					alert("Le pack a bien été ajouté au panier");
    			 	</script>';

		}
		else
		{
			echo "<script>alert('Pas disponible pour ces dates') </script>";
		}





}
?>
	
	
	</body>
</html>