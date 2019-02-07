<!DOCTYPE html>
<html>

	<head>
		<meta charset="utf-8" />
		<title> Article </title>
	</head>
	<body>
	<?php include("header.php"); ?> <!-- inclus les liens visibles partout-->

	
	<div style="background-color:lightblue">
		<ul>
			<li><a href="tous-les-articles.php"> Tous les articles </a></li>
		</ul>
	</div>
	
	<!-- Affichons les articles de la base de données-->
	<?php
try
{
	$bdd = new PDO('mysql:host=localhost;dbname=Database;charset=utf8', 'root', 'root');
}
catch(Exception $e)
{
        die('Erreur : '.$e->getMessage());
}

$reponse = $bdd->query('SELECT Nom, ID FROM BaseDeDonnee');


while ($donnees = $reponse->fetch())
{  //on récupère le fichier correspondant
	$dossier = substr($donnes['ID'], 0, 1);
// on affiche le nom du produit et son image
	echo $donnees['Nom'] .  '<br />' . '<img src ="Materiel/' . $dossier . '/' .$donnes['ID'] . '/' .$donnes['ID'] . '.png" alt = "Image du produit: ' . $donnes['Nom'] . '"/> <br />' ;
}

$reponse->closeCursor();

?>
	</body>

</html>