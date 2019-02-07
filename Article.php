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
	$trans = array("0" => "", "1" => "", "2" => "", "3" => "", "4" => "", "5" => "", "6" => "", "7" => "", "8" => "", "9" => "");
	$dossier = strtr($donnees['ID'],$trans);
	
// on affiche le nom du produit et son image
	echo $donnees['Nom'] .  '<br />' . '<img src ="ressources/Materiel/' . $dossier . '/' .$donnees['ID'] . '/' .$donnees['ID'] . '.jpg" alt = "Image du produit: ' . $donnees['Nom'] . '"/> <br />' ;
}

$reponse->closeCursor();

?>
	</body>

</html>