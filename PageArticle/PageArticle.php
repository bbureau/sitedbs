<!DOCTYPE html>
<html>

	<head>
		<meta charset="utf-8" />
		<title> PageArticle </title>
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

$req = $bdd->prepare('SELECT Nom, Marque, Caution, Etat, Categorie, ID FROM BaseDeDonnee WHERE ID = ? ');
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
<!--  Maintenant passons au formulaire de réservation -->

<?php echo '<form method = "post" action = "PageArticle.php?ID=' . $donnees['ID'] .'">' ?>
<label for= "Nom"> Nom </label> : <input type = "text" name="Nom" id = "Nom" required/>
<label for= "Prenom"> Prénom </label> : <input type = "text" name="Prenom" id = "Prenom" required />
<label for= "Date_Debut"> Date de début de réservation </label> : <input type = "date" name="Date_Debut" id = "Date_Debut" placeholder="jj/mm/aaaa" required/>
<label for= "Date_Fin"> Date de fin de réservation </label> : <input type = "date" name="Date_Fin" id = "Date_Fin" placeholder="jj/mm/aaaa" required/>
<label for= "Mail"> Email </label> : <input type = "email" name="Mail" id = "Mail" required/>
<input type="submit" value="RESERVER" />
</form>

<!-- Dans le cas où les variables existent (=on a cliquer sur résever), on envoie le mail et on en informe l'utilisateur -->

	</body>

</html>