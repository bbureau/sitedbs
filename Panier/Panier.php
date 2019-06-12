<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8" />
		<title> Panier </title>
		<link id ="css" rel="stylesheet" media="screen, print, handheld" type="text/css" href="Panier.css" />
	</head>
	<body>
	<?php include("../Header/header.php"); ?> <!-- inclus les liens visibles partout-->


	<div style="background-color:lightblue">
		<ul>
			<li><a href="../confirmation/confirmation.php"> Confirmation de commande </a></li>
		</ul>
	</div>
	
	<?php 


//Connection à la base de données
try
{
	$bdd = new PDO('mysql:host=localhost;dbname=Database;charset=utf8', 'root', 'root');
}
catch(Exception $e)
{
        die('Erreur : '.$e->getMessage());
}


if(isset($_GET['compteur']))
{	
	array_splice($_SESSION['Locations'], $_GET['compteur'], 1);
}
echo "<div class='Conteneur'>";

//On affiche les différents articles
$compteur = 0;
foreach($_SESSION['Locations'] as $Article)
{
	$req = $bdd->prepare('SELECT Nom, Marque, Caution, Etat, Quantite, Categorie, Disponible, Prix, ID FROM BaseDeDonnee WHERE ID = ? ');
$req->execute(array($Article[0]));
$donnees = $req->fetch();
//on crée la page

//1)on récupère le fichier correspondant
	$trans = array("0" => "", "1" => "", "2" => "", "3" => "", "4" => "", "5" => "", "6" => "", "7" => "", "8" => "", "9" => "");
	$dossier = strtr($donnees['ID'],$trans);
	
// 2)on affiche le nom du produit 
	echo '<div classe="article" style="font-family:Helvetica"> '. $donnees['Nom'] .  '<br />' 
	//3) Sn image
	. '<img src ="../ressources/Materiel/' . $dossier . '/' .$donnees['ID'] . '/' . $donnees['ID'] . '.jpeg" height="120" width="120" alt = "Image du produit: ' . $donnees['Nom'] . '" /> <br />' 
 //height et width définisse une taille standard pour les images

//4 les autre éléments
	. 'Categorie: ' . $donnees['Categorie'] . '<br />'
	. 'Marque :' . $donnees['Marque'] . '<br />'
	. 'Etat: ' . $donnees['Etat'] . '<br />'
	. 'Caution: ' .$donnees['Caution'] . '€ <br />'
	. 'Debut de location: ' .$Article['1'] . ' <br />'
	. 'Fin de location: ' .$Article['2'] . '<br /> 
	<form method = "post" action = "Panier.php?compteur='.$compteur.'">
	<input type="submit" class="bouton" value="SUPPRIMER" />
	</form></div>' ;

$compteur = $compteur + 1;
}

	?>
</div>
<div class="Formulaire">
<form method = "post" action = "../confirmation/confirmation.php">
<label for= "Nom" style="font-family:Helvetica"> Nom </label> : <input type = "text" name="Nom" id = "Nom" required/>
<label for= "Prenom" style="font-family:Helvetica"> Prénom </label> : <input type = "text" name="Prenom" id = "Prenom" required />
<label for= "Mail" style="font-family:Helvetica"> Email </label> : <input type = "email" name="Mail" id = "Mail" required/>
<input type="submit" style="font-family:Helvetica" class = "bouton" value="RESERVER" />
</form>
</div>
	
	</body>
</html>