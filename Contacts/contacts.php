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
<div class="container" style="position:fixed">
  <div class="row">
    <!-- Team Member 1 -->
    <div style="width:100%">
      <div class="card" id="Prezcard" style="background:url(joke.jpg)">
		<h2 id="Prez" style="color:white; margin-top:2%;margin-left:5%"> Julien Guinot </h2>
		<h4 id="Prez2" style="color:white;margin-left:5%"> Président </h4>
		<br>
        <br>
		<br>
		<br>
		<br>
		
		<br>
        <ul class="fa-ul" id="text" style="color:white">
			<i><span class="fa fa-li fa-phone fa-lg" aria-hidden="true" ></span>06 82 07 01 17</i><br>
			<i><span class="fa fa-li fa-envelope" aria-hidden="true" id="lettre"></span>julien.guinot@ecl18.ec-lyon.fr </i>
		</ul>
        <div class="card-body text-center">
          <div class="card-text text-black-50"></div>
        </div>
      </div>
    </div>
    <!-- Team Member 2 -->
    <div style="width:100%; text-align:right; margin-right:10px; width:170%">
      <div class="card" style="background:url(tchekoh.jpg); ">
		<h2 style="color:Black; margin-top:2%;margin-right:2%;color:white"> Paul Flagel </h2>
		<h4 style="color:Black;margin-right:2%;color:white"> Secrétaire Général Matos </h4>		
		<br>
		<br>
        <br>
		<br>
		<br>
		<br>
		<br>
        <ul class="fa-ul" id="text2" style="color:white; text-align:right" >

			<i><span class="fa fa-li fa-phone fa-lg" aria-hidden="true" ></span>00 00 00 00 00</i><br>
			<i><span class="fa fa-li fa-envelope" aria-hidden="true" id="lettre"></span>paul.flager@ecl18.ec-lyon.fr </i>
		</ul>
        <div class="card-body text-center">
          <div class="card-text text-black-50"></div>
        </div>
      </div>
    </div>
   </div>
  </div>

   	</body>
	
	
	
	</body>
</html>