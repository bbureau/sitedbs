<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8" />
		<title> Calendrier </title>
		<link id ="css" rel="stylesheet" media="screen, print, handheld" type="text/css" href="calendrier_event.css" />
    <script src="../Calendrier_Dispo/jquery.js"></script>
    <script type="text/javascript" src="calendrier_event.js"></script>
	</head>
	<body>
	<?php include("../Header/header.php"); ?> <!-- inclus les liens visibles partout-->
	
	</br>
	</br>
	</br>
	</br>
	</br>
	</br>

	<?php
//Récupérons les évènements de la base de donnes	
try
{
	$bdd = new PDO('mysql:host=localhost;dbname=Database;charset=utf8', 'root', 'root');
}
catch(Exception $e)
{
        die('Erreur : '.$e->getMessage());
} 
echo '<script> var Evenement =[];</script>';
$req_events = $bdd->query('SELECT Nom, Date_Event, Billeterie FROM Events');
while($events = $req_events->fetch())
{echo '<script>
var Nom ="'. $events['Nom'] . '";
var Date_Event ="'. $events['Date_Event'] .'";
var Billeterie ="'. $events['Billeterie'] .'";
Evenement.push(Date_Event);
Evenement.push(Nom);
Evenement.push(Billeterie);
</script>';

}

?>
	<div id="calendar" class="calendar"><script>
	new Calendar('#calendar', Evenement);</script></div>
	
	</body>
</html>