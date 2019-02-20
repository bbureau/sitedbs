<!DOCTYPE html>
<html>

	<head>
		<meta charset="utf-8" />
		<title> Article </title>
	</head>
	<body>
	<?php include("../Header/header.php"); ?> <!-- inclus les liens visibles partout-->

	
	<div style="background-color:lightblue">
		<ul>
			<li><a href="../tous-les-articles/tous-les-articles.php"> Tous les articles </a></li>
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
	
// on affiche le nom du produit, le nom est un lien vesr la page décrivant le produit
	echo '<a href="../PageArticle/PageArticle.php?ID=' . $donnees['ID'] . '">' . $donnees['Nom'] . '</a> <br />';
	// on affiche l'image correspondante 
	echo '<img src ="../ressources/Materiel/' . $dossier . '/' .$donnees['ID'] . '/' .$donnees['ID'] . '.jpeg" height="120" width="120" alt = "Image du produit: ' . $donnees['Nom'] . '" /> <br />' ;
} //height et width définisse une taille standard pour les images

$reponse->closeCursor();

?>



	</body>

</html>