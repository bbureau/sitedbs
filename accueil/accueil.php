<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8" />
		<title> Page d'accueil </title>
		<link rel="stylesheet" type="text/css" href="acceuil.css" />
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	</head>
	
	<body>
	<?php include("../Header/header.php"); ?> <!-- inclus les liens visibles partout-->
	

	
    <div class="hovereffect">
        <img class="img-responsive" src="../Header/fete1.jpg" alt="">
            <div class="overlay">
                <h2 id="titre">"La vie sans musique est tout simplement une erreur, une fatigue, un exil."</h2>
                <p class="set1">
                    <a class="col col-lg-2">
                        <button type="button" class="btn btn-light bouton" id="bouton1">Galerie</button>
                    </a>
				
				
                    <a href="#">
                        <button type="button" class="btn btn-light bouton" id="bouton2">Calendrier</button>
                    </a>
                </p>
                <hr>
                <hr>
                <p class="set2">
                    <a href="#">
                        <button type="button" class="btn btn-light bouton" id="bouton3">L'&eacutequipe</button>
                    </a>
                    <a href="#">
                        <button type="button" class="btn btn-light bouton" id="bouton4">Contacts</button>
                    </a>
                </p>
            </div>
    </div>
	

	</body>
</html>