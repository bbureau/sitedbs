<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8" />
		<link rel="stylesheet" type="text/css" href="Galerie.css" />
		
		
		
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
		<title> Galerie </title>
	</head>
	<body>

	<<?php include("../Header/header.php"); ?> <!-- inclus les liens visibles partout-->
<!-- Grid row -->
<div class="row">

  <!-- Grid column -->
  <div class="col-md-12 d-flex justify-content-center mb-5">

    <button type="button" class="btn btn-outline-black waves-effect filter" data-rel="all">All</button>
    <button type="button" class="btn btn-outline-black waves-effect filter" data-rel="1">Mountains</button>
    <button type="button" class="btn btn-outline-black waves-effect filter" data-rel="2">Sea</button>

 </div>
 
<!-- Grid row -->
<div class="gallery" id="gallery">

  <!-- Grid column -->
  <div class="mb-3 pics animation all 2">
    <img class="img-fluid" src="dj.jpg" alt="Card image cap">
  </div>
  <!-- Grid column -->

  <!-- Grid column -->
  <div class="mb-3 pics animation all 1">
    <img class="img-fluid" src="dj1.jpg" alt="Card image cap">
  </div>
  <!-- Grid column -->

  <!-- Grid column -->
  <div class="mb-3 pics animation all 1">
    <img class="img-fluid" src="dj2.jpg" alt="Card image cap">
  </div>
  <!-- Grid column -->

  <!-- Grid column -->
  <div class="mb-3 pics animation all 2">
    <img class="img-fluid" src="dj3.jpg" alt="Card image cap">
  </div>
  <!-- Grid column -->
<div class="mb-3 pics animation all 2">
    	<img class="img-fluid" src="party.jpg" alt="Card image cap">
  	</div>
  <!-- Grid column -->
  <div class="mb-3 pics animation all 2">
    <img class="img-fluid" src="party.jpg" alt="Card image cap">
  </div>
  <!-- Grid column -->
	<div class="mb-3 pics animation all 2">
    	<img class="img-fluid" src="party.jpg" alt="Card image cap">
  	</div>
  <!-- Grid column -->
  <div class="mb-3 pics animation all 1">
    <img class="img-fluid" src="party2.jpg" alt="Card image cap">
  </div>
  <!-- Grid column -->
  <div class="mb-3 pics animation all 2">
    	<img class="img-fluid" src="party.jpg" alt="Card image cap">
  	</div>

</div>
<!-- Grid row --> 

		
	
	
	
	
	
	</body>

	<footer>
		<?php include("../footer/footer.php"); ?>
	</footer>
</html>