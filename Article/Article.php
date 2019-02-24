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
	
	<!-- Récupérons les articles de la base de données-->
	<?php
try
{
	$bdd = new PDO('mysql:host=localhost;dbname=Database;charset=utf8', 'root', 'root');
}
catch(Exception $e)
{
        die('Erreur : '.$e->getMessage());
}

$reponse = $bdd->query('SELECT Nom, ID, Categorie FROM BaseDeDonnee');
?>

<!-- Mettons en place le formulaire  de tri -->
<script type="text/javascript">
      function fonctionCategorie(Cat) {
        query = document.querySelectorAll("#" + Cat);
		if (query[0].checked) 
		{
			for (var i = 1; i < query.length; i++)
			{
				query[i].style.display="block";
			}}
		else
		{
			for (var i = 1; i < query.length; i++)
			{
				query[i].style.display="none";
			}
      }
  }
    </script>
<form>
	<p>
       Catégorie: <br />
       <input type="checkbox" name="Micro" id="Micro" checked onchange="fonctionCategorie('Micro');" /> <label for="Micro">Micro</label><br />
       <input type="checkbox" name="Ampli" id="Ampli" checked onchange="fonctionCategorie('Ampli');"/> <label for="Ampli">Amplifiacteur</label><br />
       <input type="checkbox" name="TableDeMixage" id="TableDeMixage" checked onchange="fonctionCategorie('TableDeMixage');"/> <label for="TableDeMixage">Table de mixage</label><br />
       <input type="checkbox" name="Effects" id="Effects" checked onchange="fonctionCategorie('Effects');"/> <label for="Effects">Effects</label><br />
       <input type="checkbox" name="Enceintes" id="Enceintes" checked onchange="fonctionCategorie('Enceintes');"/> <label for="Enceintes">Enceintes</label><br />
       <input type="checkbox" name="Lumieres" id="Lumieres" checked onchange="fonctionCategorie('Lumieres');"/> <label for="Lumieres">Lumieres</label><br />
       <input type="checkbox" name="Cable" id="Cable" checked onchange="fonctionCategorie('Cable');"/> <label for="Cable">Lumieres</label>
   </p>
</form>
<?php


while ($donnees = $reponse->fetch())
{  //on récupère le fichier correspondant
	$trans = array("0" => "", "1" => "", "2" => "", "3" => "", "4" => "", "5" => "", "6" => "", "7" => "", "8" => "", "9" => "");
	$dossier = strtr($donnees['ID'],$trans);
	
// on affiche le nom du produit, le nom est un lien vesr la page décrivant le produit
	echo '<div id ="' . $donnees['Categorie'] . '"><a href="../PageArticle/PageArticle.php?ID=' . $donnees['ID'] . '">' . $donnees['Nom'] . '</a> <br />';
	// on affiche l'image correspondante 
	echo '<img src ="../ressources/Materiel/' . $dossier . '/' .$donnees['ID'] . '/' .$donnees['ID'] . '.jpeg" height="120" width="120" alt = "Image du produit: ' . $donnees['Nom'] . '" />  </div>' ;
//height et width définisse une taille standard pour les images




} 
$reponse->closeCursor();

?>



	</body>

</html>