<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8" />
		<title> Panier </title>
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

//On affiche les différents articles

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
	echo '<div> '. $donnees['Nom'] .  '<br />' 
	//3) Sn image
	. '<img src ="../ressources/Materiel/' . $dossier . '/' .$donnees['ID'] . '/' . $donnees['ID'] . '.jpeg" height="120" width="120" alt = "Image du produit: ' . $donnees['Nom'] . '" /> <br />' 
 //height et width définisse une taille standard pour les images

//4 les autre éléments
	. 'Categorie: ' . $donnees['Categorie'] . '<br />'
	. 'Marque :' . $donnees['Marque'] . '<br />'
	. 'Etat: ' . $donnees['Etat'] . '<br />'
	. 'Caution: ' .$donnees['Caution'] . '€ <br />'
	. 'Debut de location: ' .$Article['1'] . ' <br />'
	. 'Fin de location: ' .$Article['2'] . '<br /> </div>' ;


}

	?>
<form method = "post" action = "../confirmation/confirmation.php">
<label for= "Nom"> Nom </label> : <input type = "text" name="Nom" id = "Nom" required/>
<label for= "Prenom"> Prénom </label> : <input type = "text" name="Prenom" id = "Prenom" required />
<label for= "Mail"> Email </label> : <input type = "email" name="Mail" id = "Mail" required/>
<input type="submit" value="RESERVER" />
</form>

	
	</body>
</html>