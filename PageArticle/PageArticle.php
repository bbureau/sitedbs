<!DOCTYPE html>
<html>

	<head>
		<meta charset="utf-8" />
		<title> PageArticle </title>
		<link id ="css" rel="stylesheet" media="screen, print, handheld" type="text/css" href="../Calendrier_Dispo/calendrier_dispo.css" />
    <script src="../Calendrier_Dispo/jquery.js"></script>
    <script type="text/javascript" src="../Calendrier_Dispo/calendrier_dispo.js"></script>
	</head>
	<body>
	<?php include("../Header/header.php"); ?> <!-- inclus les liens visibles partout-->


 	
	<?php
	
try
{
	$bdd = new PDO('mysql:host=localhost;dbname=Database;charset=utf8', 'root', 'root');
}
catch(Exception $e)
{
        die('Erreur : '.$e->getMessage());
}
//on récupère les infos qui nous intéresse

$req = $bdd->prepare('SELECT Nom, Marque, Caution, Etat, Quantite, Categorie, Disponible, Prix, ID FROM BaseDeDonnee WHERE ID = ? ');
$req->execute(array($_GET['ID']));
$donnees = $req->fetch();
//on crée la page

//1)on récupère le fichier correspondant
	$trans = array("0" => "", "1" => "", "2" => "", "3" => "", "4" => "", "5" => "", "6" => "", "7" => "", "8" => "", "9" => "");
	$dossier = strtr($donnees['ID'],$trans);
	
// 2)on affiche le nom du produit 
	echo $donnees['Nom'] .  '<br />' 
	//3) Sn image
	. '<img src ="../ressources/Materiel/' . $dossier . '/' .$donnees['ID'] . '/' . $donnees['ID'] . '.jpeg" height="120" width="120" alt = "Image du produit: ' . $donnees['Nom'] . '" /> <br />' 
 //height et width définisse une taille standard pour les images

//4 les autre éléments
	. 'Categorie: ' . $donnees['Categorie'] . '<br />'
	. 'Marque :' . $donnees['Marque'] . '<br />'
	. 'Etat: ' . $donnees['Etat'] . '<br />'
	. 'Caution: ' .$donnees['Caution'] . '€ <br />' ;

?>

<!-- récupérons le fichier txt associé -->
<?php
$fp = fopen ('../ressources/Materiel/' . $dossier . '/' .$donnees['ID'] . '/' . $donnees['ID'] . '.txt', "r");
while (!feof($fp))
	{
		/*On lit la ligne courante*/
		$ligne = fgets($fp);
		/*On l'affiche*/
		echo $ligne;
	}
	/*On ferme le fichier*/

fclose ($fp);
?>


<?php 

if (isset($_POST['Date_Debut'], $_POST['Date_Fin']))
{
	$trans = array("/" => "-");
	$DateD = strtr($_POST['Date_Debut'], $trans);
	$DateF = strtr($_POST['Date_Fin'], $trans);
	$_SESSION['Locations'][] = array($_GET['ID'],$DateD,$DateF);
	echo '<script>
    		alert("L\'article a bien été ajouté au panier");
    	 </script>';

}


?>





<!--affichons un calendrier des disponibilité -->


<!--Pour cela récupérons les dates de locations -->
<?php

$req = $bdd->prepare('SELECT Debut, Fin FROM Locations WHERE ID = ? ');
$req->execute(array($_GET['ID']));
$info_loca = $req->fetch();

echo '<script> var nb_dispo =parseInt('.$donnees[Quantite].',10);
var Loca_Debut = "'. $info_loca[Debut].'";
var Loca_Fin = "'. $info_loca[Fin].'";
var Loca= [Loca_Debut,Loca_Fin];</script>';
while ($info_loca = $req->fetch())
{
 
echo '<script>
var Loca_Debut = "'. $info_loca[Debut].'";
var Loca_Fin = "'. $info_loca[Fin].'";
Loca.push(Loca_Debut);
Loca.push(Loca_Fin);
</script>';

}
foreach($_SESSION['Locations'] as $Article)
{
	if($Article[0] == $_GET['ID'])
	{
		echo '<script>
			var Loca_Debut = "'. $Article[1].'";
			var Loca_Fin = "'. $Article[2] .'";
			Loca.push(Loca_Debut);
			Loca.push(Loca_Fin);
			</script>';
	}
}

$req->closeCursor();

?>

<div id="calendar" class="calendar"><script>new Calendar('#calendar', Loca, nb_dispo);</script></div>
<!--  Maintenant passons au formulaire de réservation -->

<?php echo '<form method = "post" action = "PageArticle.php?ID=' . $donnees['ID'] .'">' ?>
<label for= "Date_Debut"> Date de début de réservation </label> : <input type = "date" name="Date_Debut" id = "Date_Debut" placeholder="jj/mm/aaaa" required/>
<label for= "Date_Fin"> Date de fin de réservation </label> : <input type = "date" name="Date_Fin" id = "Date_Fin" placeholder="jj/mm/aaaa" required/>
<input type="submit" value="AJOUTER AU PANIER" />
</form>



	</body>

</html>