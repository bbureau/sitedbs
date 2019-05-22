<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8" />
		<link rel="stylesheet" type="text/css" href="contacts.css" />
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

		<title> Page de contacts </title>
	</head>

	<body>
	<?php include("../Header/header.php"); ?> <!-- inclus les liens visibles partout-->



		<!-- Page Content -->
<div class="container">
  <div class="row">
    <!-- Team Member 1 -->
    <div class="col-xl-12 col-md-6 mb-6">
      <div class="card">
        <img src="Prez_DBS.jpg" class="card-img-top " alt="..." id="image1">
		
		<ul class="fa-ul" id="text">
			<i><span class="fa-li fa fa-phone fa-lg" aria-hidden="true" ></span>Telephone:xxxxxxxxxx</i><br>
			<i><span class="fa-li fa fa-envelope" aria-hidden="true" id="lettre"></span>Adresse mail: xxxxxxxxxxx </i>
		</ul>
		
        <div class="card-body text-center">
          <h5 class="card-title mb-0">Président</h5>
          <div class="card-text text-black-50"></div>
        </div>
      </div>
    </div>
    <!-- Team Member 2 -->
    <div class="col-xl-12 col-md-6 mb-6">
      <div class="card border-0 shadow">
        <img src="SG_DBS.png" class="card-img-top" alt="..." id="image2">
        <ul class="fa-ul" id="text">
			<i><span class="fa fa-li fa-phone fa-lg" aria-hidden="true" ></span>Telephone:xxxxxxxxxx</i><br>
			<i><span class="fa fa-li fa-envelope" aria-hidden="true" id="lettre"></span>Adresse mail: xxxxxxxxxxx </i>
		</ul>
        <div class="card-body text-center">
          <h5 class="card-title mb-0">Secrétaire Général</h5>
          <div class="card-text text-black-50"></div>
        </div>
      </div>
    </div>
   </div>
  </div>

   	</body>
	
	
	
	</body>
</html>