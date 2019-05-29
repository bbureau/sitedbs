<!DOCTYPE html>
<html>
<HEAD>
<?php session_start(); ?> <!-- Session pour utiliser des variables globales -->
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link href="/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">



<link rel="stylesheet" type="text/css" href="../Header/header.css" />
<link rel="stylesheet" media="screen" href="https://fontlibrary.org/face/handelgothic-tl-kirillica" type="text/css"/>

<title>Hello world with Bootstrap</title>
</HEAD>

<nav class="navbar fixed-top navbar-expand-sm "style="background-color: #000137;">
  <a class="navbar-brand" href="../accueil/accueil.php" id="image"><img  src="../Header/LogodBs.png" width="200" height="100" id="image"/></a>
	
  <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav ">
	 <li  class="nav-item ">
		<a class="nav-link" href="../catalogue/catalogue.php">Catalogue</a>
	  </li>
	<div class="btn-group">
	<button type="button" class="btn dropdown-toggle dropdown-toggle-split text-primary" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" >
    <span class="sr-only ">Toggle Dropdown</span>
	</button>
      
      <li class="nav-item">
        <a class="nav-link" href="../Contacts/contacts.php">Page de contacts</a>
      </li>
<!--      <li class="nav-item">
        <a class="nav-link" href="../Mentions-legales/Mentions-legales.php">Mentions légales</a>
      </li> -->
	  <li class="nav-item">
		<a class="nav-link" href="../Galerie/Galerie.php">Galerie</a>
		</li>
      <li class="nav-item">
        <a class="nav-link " href="../Calendrier/Calendrier.php">Calendrier</a>
      </li>
	  
	  <li class="nav-item">
        <a class="nav-link " href="../Panier/Panier.php">Panier</a>
      </li>
	   <!-- groupe de boutons -->
	 
	
	<div class="dropdown-menu" id="catalogue">
		<a class="dropdown-item" href="../Article/Article.php">Articles</a>
		<a class="dropdown-item" href="../Pack/Pack.php">Packs</a>
		<a class="dropdown-item" href="../Prestation/Prestation">Prestation</a>
	</div>
	</div>
	
		
			
		
      
    </ul>
	
  </div>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
  <script src="/bootstrap/dist/js/bootstrap.min.js"></script>
</nav>


<body>
<!--<header>

	


	
	
	<img  src="../Header/LogodBsnoir.png" width="200" height="100"  style="float:left;margin:0 10px 0 20px;"/>
	
	<div  id="recherche">
		<ul>
			<li><a href="../accueil/accueil.php">Page d'accueil</a></li>
			
			<li><a href="../contacts/contacts.php">Page de contacts</a></li>
			
			<li><a href="../Mentions-legales/Mentions-legales.php">Mentions légales</a></li>
			<li><a href="../Calendrier/Calendrier.php">calendrier</a></li>
			<li><a href="../Panier/Panier.php">Panier</a></li>
				
			<li><a href="../Catalogue/Catalogue.php">Catalogue</a>
				<div class="sousmenu">
				<ul>
					<li ><a href= "../Article/Article.php"> Articles </a></li>
					<li><a href="../Pack/Pack.php"> Pack </a></li>
					<li><a href="../Prestation/Prestation"> Prestations </a></li>
				</ul>
				</div>
			</li>
		</ul>
	</div>
	
	
	
	
	
	

</header> 
-->



<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
<script src="bootstrap/js/bootstrap.min.js"></script>





</body>

</html>