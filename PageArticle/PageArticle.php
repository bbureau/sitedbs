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

$req->closeCursor();

?>

<div id="calendar" class="calendar"><script>new Calendar('#calendar', Loca, nb_dispo);</script></div>
<!--  Maintenant passons au formulaire de réservation -->

<?php echo '<form method = "post" action = "PageArticle.php?ID=' . $donnees['ID'] .'">' ?>
<label for= "Nom"> Nom </label> : <input type = "text" name="Nom" id = "Nom" required/>
<label for= "Prenom"> Prénom </label> : <input type = "text" name="Prenom" id = "Prenom" required />
<label for= "Date_Debut"> Date de début de réservation </label> : <input type = "date" name="Date_Debut" id = "Date_Debut" placeholder="jj/mm/aaaa" required/>
<label for= "Date_Fin"> Date de fin de réservation </label> : <input type = "date" name="Date_Fin" id = "Date_Fin" placeholder="jj/mm/aaaa" required/>
<label for= "Mail"> Email </label> : <input type = "email" name="Mail" id = "Mail" required/>
<input type="submit" value="RESERVER" />
</form>

<!-- Dans le cas où les variables existent (=on a cliqué sur résever), on envoie le mail et on en informe l'utilisateur -->

<?php 

if (isset($_POST['Nom'], $_POST['Prenom'], $_POST['Date_Debut'], $_POST['Date_Fin'], $_POST['Mail'])) 
{ // Il s'agit alors de vérifier si le matériel est disponible
//Pour cela on regarde combien d'exemplaire du matériel est loué durant cette période
	$req2 = $bdd->prepare('SELECT ID, Debut, Fin FROM Locations WHERE ID = ? ');
	$req2->execute(array($_GET['ID']));
	$compteur = 0;
	//il faut mettre les dates aux bons format
	$trans = array("/" => "-");
	$DateD = strtr($_POST['Date_Debut'], $trans);
	$DateF = strtr($_POST['Date_Fin'], $trans);
	
	
	while ($donnees2 = $req2->fetch())
	{  
		if(  ((new Datetime($DateD) >= new Datetime($donnees2['Debut'])) AND (new Datetime($DateD) <= new Datetime($donnees2['Fin'])))
			OR ((new Datetime($DateF) >= new Datetime($donnees2['Debut'])) AND (new Datetime($DateF) <= new Datetime($donnees2['Fin'])))
			OR (new Datetime($DateD) <= new Datetime($donnees2['Debut'])) AND (new Datetime($DateF) >= new Datetime($donnees2['Fin'])))
		{
			$compteur = $compteur + 1;

		}
		
	}
	$req2->closeCursor();
	if (($compteur < $donnees['Quantite']) AND (new Datetime($DateD) <= new Datetime($DateF)))
		{ //on envoie alors le mail de réservation
 
    	$to = "pe26decibel@gmail.com";
 
    	$subject = "Réservation" . $donnees['Nom'];
 
    	$message = $_POST['Prenom'] ." " . $_POST['Nom'] . " souhaite résever " . $donnees['Nom'] . " du " . $_POST['Date_Debut'] . " au " . ['Date_Fin'];
 
    	$header = "From: \"" . $_POST['Prenom'] ." " . $_POST['Nom'] ."\"<". $_POST['Mail']. ">"."\n";
		$header .= "Reply-to: \"" . $_POST['Prenom'] ." " . $_POST['Nom'] ."\"<". $_POST['Mail']. ">";
 
    	if(mail($to,$subject,$message, $headers)) 
    	{echo " <script> 
    	alert('L\'email a été envoyé !'');
    	</script>";}
 
    	else {
    		echo "<script>
    		alert('L\'email n\'a pas été envoyé !');
    		</script>";
	//ATTENTION: la suite de ce code sera à déplacer dans le cas où le mail a bien été envoyé lorsque l'on passera sur le serveur en ligne
	//La demande étant possible on actualise la base de données comptenant les locations
    		$req3 = $bdd ->prepare("INSERT INTO Locations(ID, Locataire, Debut, Fin, Caution, Prix) VALUES(:ID, :Locataire, :Debut, :Fin, :Caution, :Prix)");
    		$req3 ->execute(array(
    			'ID' => $donnees['ID'],
    			'Locataire' => $_POST['Nom'] . " " . $_POST['Prenom'],
    		'Debut' => $DateD,
    		'Fin' => $DateF,
    		'Caution' => $donnees['Caution'],
    		'Prix' => $donnees['Prix']
										));

			}


		}
	else {
		echo "<script>
		alert('Veuillez choisir des dates valides');
		</script>";
	}	


} 

 ?>

	</body>

</html>