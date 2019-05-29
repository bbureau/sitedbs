<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8" />
		<title> confirmation de commande </title>
	</head>
	<body>
	<?php include("../Header/header.php"); ?> <!-- inclus les liens visibles partout-->
	
		<?php
		// Connection à la base de données
try
{
	$bdd = new PDO('mysql:host=localhost;dbname=Database;charset=utf8', 'root', 'root');
}
catch(Exception $e)
{
        die('Erreur : '.$e->getMessage());
}

		//On prépare le mail
	    $to = "pe26decibel@gmail.com";
 
    	$subject = "Réservation" . $_POST['Nom'];
 
    	$message = $_POST['Prenom'] ." " . $_POST['Nom'] . " souhaite résever: ";
    	foreach($_SESSION['Locations'] as $Article)
		{
			$req = $bdd->prepare('SELECT Nom FROM BaseDeDonnee WHERE ID = ? ');
			$req->execute(array($Article[0]));
			$donnees = $req->fetch();
			$message .= $donnees['Nom'] . " Du " . $Article[1] . " Au " . $Article[2] . " / \n ";

		}
 
    	$header = "From: \"" . $_POST['Prenom'] ." " . $_POST['Nom'] ."\"<". $_POST['Mail']. ">"."\n";
		$header .= "Reply-to: \"" . $_POST['Prenom'] ." " . $_POST['Nom'] ."\"<". $_POST['Mail']. ">";
	  	if(mail($to,$subject,$message, $headers)) 
    	{echo " <script> 
    	alert('L\'email a été envoyé !'');
    	</script>";}
 
    	else {
    			echo "<script>
    			alert('L'email n'a pas été envoyé);
    			</script><a href='../Panier/Panier.php'>Retour au Panier</a>";
	//ATTENTION: la suite de ce code sera à déplacer dans le cas où le mail a bien été envoyé lorsque l'on passera sur le serveur en ligne
	//La demande étant possible on actualise la base de données comptenant les locations
    		
    			foreach($_SESSION['Locations'] as $Article)
					{	$req = $bdd->prepare('SELECT Caution, Prix FROM BaseDeDonnee WHERE ID = ? ');
						$req->execute(array($Article[0]));
						$donnees = $req->fetch();
    					$req3 = $bdd ->prepare("INSERT INTO Locations(ID, Locataire, Debut, Fin, Caution, Prix) VALUES(:ID, :Locataire, :Debut, :Fin, :Caution, :Prix)");
    					$req3 ->execute(array(
    					'ID' => $Article[0],
    					'Locataire' => $_POST['Nom'] . " " . $_POST['Prenom'],
    					'Debut' => $Article[1],
    					'Fin' => $Article[2],
    					'Caution' => $donnees['Caution'],
    					'Prix' => $donnees['Prix']
										)); 
	    			}
	    //Puis on efface le Panier
	    		session_destroy();
	    	}
	 ?>
	</body>
</html>