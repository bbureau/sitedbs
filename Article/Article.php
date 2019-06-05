<!DOCTYPE html>
<html>

	<head>
		<meta charset="utf-8" />
		<title> Article </title>
		<link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
		<script src="../Calendrier_Dispo/jquery.js"></script>
		<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
		


<!-- Une fonction utile permettant de créer des bulles -->

<link rel="stylesheet" href="bulle.css">

<script>
function GetId(id)
{
return document.getElementById(id);
}
var i=false; // La variable i nous dit si la bulle est visible ou non
 
function move(e) {
  if(i) {  // Si la bulle est visible, on calcul en temps reel sa position ideale
    if (navigator.appName!="Microsoft Internet Explorer") { // Si on est pas sous IE
    GetId("curseur").style.left=e.pageX + 5+"px";
    GetId("curseur").style.top=e.pageY + 10+"px";
    }
    else { // Modif proposé par TeDeum, merci à  lui
    if(document.documentElement.clientWidth>0) {
GetId("curseur").style.left=20+event.x+document.documentElement.scrollLeft+"px";
GetId("curseur").style.top=10+event.y+document.documentElement.scrollTop+"px";
    } else {
GetId("curseur").style.left=20+event.x+document.body.scrollLeft+"px";
GetId("curseur").style.top=10+event.y+document.body.scrollTop+"px";
         }
    }
  }
}
 
function montre(text) {
  if(i==false) {
  GetId("curseur").style.visibility="visible"; // Si il est cacher (la verif n'est qu'une securité) on le rend visible.
  GetId("curseur").innerHTML = text; // on copie notre texte dans l'élément html
  i=true;
  }
}
function cache() {
if(i==true) {
GetId("curseur").style.visibility="hidden"; // Si la bulle est visible on la cache
i=false;
}
}
document.onmousemove=move; // dès que la souris bouge, on appelle la fonction move pour mettre à jour la position de la bulle.
//-->
</script>


<div id="curseur" class="infobulle"></div>


<!-- Fonction définissant le slider-->

		<script>
  $( function() {
    $( "#slider-range" ).slider({
      range: true,
      min: 0,
      max: 500,
      values: [ 0, 500 ],
      slide: function( event, ui ) {
        $( "#amount" ).val( "$" + ui.values[ 0 ] + " - $" + ui.values[ 1 ] );
        var min = $( "#slider-range" ).slider( "values", 0 );
      	var max = $( "#slider-range" ).slider( "values", 1 );
    document.getElementById("affichage_prix").textContent = min +"€ - " + max  +"€";},

        change: function( event, ui ) {
      	var min = $( "#slider-range" ).slider( "values", 0 );
      	var max = $( "#slider-range" ).slider( "values", 1 );
      	
      	query = document.querySelectorAll("#Micro");
        //si la case est cochée
		if (query[0].checked) 
		{
			for (var i = 1; i < query.length; i++)
			{	if (Prix_Micro[i-1] <= max && Prix_Micro[i-1] >= min) 
				{query[i].style.display="inline-block";}
				else 
				{query[i].style.display="none";}// on affiche tout
			}}
		else //sinon
		{
			for (var i = 1; i < query.length; i++)
			{
				query[i].style.display="none"; // on cache tout
			}
      }
query = document.querySelectorAll("#Ampli");
        //si la case est cochée
		if (query[0].checked) 
		{
			for (var i = 1; i < query.length; i++)
			{	if (Prix_Ampli[i-1] <= max && Prix_Ampli[i-1] >= min) 
				{query[i].style.display="inline-block";}
				else 
				{query[i].style.display="none";}// on affiche tout
			}}
		else //sinon
		{
			for (var i = 1; i < query.length; i++)
			{
				query[i].style.display="none"; // on cache tout
			}
      }

query = document.querySelectorAll("#TableDeMixage");
        //si la case est cochée
		if (query[0].checked) 
		{
			for (var i = 1; i < query.length; i++)
			{	if (Prix_TableDeMixage[i-1] <= max && Prix_TableDeMixage[i-1] >= min) 
				{query[i].style.display="inline-block";}
				else 
				{query[i].style.display="none";}// on affiche tout
			}}
		else //sinon
		{
			for (var i = 1; i < query.length; i++)
			{
				query[i].style.display="none"; // on cache tout
			}
      }

query = document.querySelectorAll("#Effects");
        //si la case est cochée
		if (query[0].checked) 
		{
			for (var i = 1; i < query.length; i++)
			{	if (Prix_Effects[i-1] <= max && Prix_Effects[i-1] >= min) 
				{query[i].style.display="inline-block";}
				else 
				{query[i].style.display="none";}// on affiche tout
			}}
		else //sinon
		{
			for (var i = 1; i < query.length; i++)
			{
				query[i].style.display="none"; // on cache tout
			}
      }

query = document.querySelectorAll("#Enceintes");
        //si la case est cochée
		if (query[0].checked) 
		{
			for (var i = 1; i < query.length; i++)
			{	if (Prix_Enceintes[i-1] <= max && Prix_Enceintes[i-1] >= min) 
				{query[i].style.display="inline-block";}
				else 
				{query[i].style.display="none";}// on affiche tout
			}}
		else //sinon
		{
			for (var i = 1; i < query.length; i++)
			{
				query[i].style.display="none"; // on cache tout
			}
      }
query = document.querySelectorAll("#Lumieres");
        //si la case est cochée
		if (query[0].checked) 
		{
			for (var i = 1; i < query.length; i++)
			{	if (Prix_Lumieres[i-1] <= max && Prix_Lumieres[i-1] >= min) 
				{query[i].style.display="inline-block";}
				else 
				{query[i].style.display="none";}// on affiche tout
			}}
		else //sinon
		{
			for (var i = 1; i < query.length; i++)
			{
				query[i].style.display="none"; // on cache tout
			}
      }
  query = document.querySelectorAll("#Cable");
        //si la case est cochée
		if (query[0].checked) 
		{
			for (var i = 1; i < query.length; i++)
			{	if (Prix_Cable[i-1] <= max && Prix_Cable[i-1] >= min) 
				{query[i].style.display="inline-block";}
				else 
				{query[i].style.display="none";}// on affiche tout
			}}
		else //sinon
		{
			for (var i = 1; i < query.length; i++)
			{
				query[i].style.display="none"; // on cache tout
			}
      }

  }
   });
    $( "#amount" ).val( "$" + $( "#slider-range" ).slider( "values", 0 ) +
      " - $" + $( "#slider-range" ).slider( "values", 1 ) );
   } );
  </script>
	</head>
	<body>
	  <?php // include("../Header/header.php"); ?>  <!-- inclus les liens visibles partout-->

	
	
	
	<!-- Récupérons les articles de la base de données-->
	<?php
try
{
	$bdd = new PDO('mysql:host=localhost;dbname=Database;charset=utf8', 'root', 'root');
}
catch(Exception $e)
{
        die('Erreur : '.$e->getMessage());
}

$reponse = $bdd->query('SELECT Nom, ID, Categorie, Prix FROM BaseDeDonnee');
?>

<!-- Mettons en place le formulaire  de tri -->

<script type="text/javascript">
	

      function fonctionCategorie(Cat) {
      	var min = $( "#slider-range" ).slider( "values", 0 );
      	var max = $( "#slider-range" ).slider( "values", 1 );
      	
      	query = document.querySelectorAll("#Micro");
        //si la case est cochée
		if (query[0].checked) 
		{
			for (var i = 1; i < query.length; i++)
			{	if (Prix_Micro[i-1] <= max && Prix_Micro[i-1] >= min) 
				{query[i].style.display="inline-block";}
				else 
				{query[i].style.display="none";}// on affiche tout
			}}
		else //sinon
		{
			for (var i = 1; i < query.length; i++)
			{
				query[i].style.display="none"; // on cache tout
			}
      }
query = document.querySelectorAll("#Ampli");
        //si la case est cochée
		if (query[0].checked) 
		{
			for (var i = 1; i < query.length; i++)
			{	if (Prix_Ampli[i-1] <= max && Prix_Ampli[i-1] >= min) 
				{query[i].style.display="inline-block";}
				else 
				{query[i].style.display="none";}// on affiche tout
			}}
		else //sinon
		{
			for (var i = 1; i < query.length; i++)
			{
				query[i].style.display="none"; // on cache tout
			}
      }

query = document.querySelectorAll("#TableDeMixage");
        //si la case est cochée
		if (query[0].checked) 
		{
			for (var i = 1; i < query.length; i++)
			{	if (Prix_TableDeMixage[i-1] <= max && Prix_TableDeMixage[i-1] >= min) 
				{query[i].style.display="inline-block";}
				else 
				{query[i].style.display="none";}// on affiche tout
			}}
		else //sinon
		{
			for (var i = 1; i < query.length; i++)
			{
				query[i].style.display="none"; // on cache tout
			}
      }

query = document.querySelectorAll("#Effects");
        //si la case est cochée
		if (query[0].checked) 
		{
			for (var i = 1; i < query.length; i++)
			{	if (Prix_Effects[i-1] <= max && Prix_Effects[i-1] >= min) 
				{query[i].style.display="inline-block";}
				else 
				{query[i].style.display="none";}// on affiche tout
			}}
		else //sinon
		{
			for (var i = 1; i < query.length; i++)
			{
				query[i].style.display="none"; // on cache tout
			}
      }

query = document.querySelectorAll("#Enceintes");
        //si la case est cochée
		if (query[0].checked) 
		{
			for (var i = 1; i < query.length; i++)
			{	if (Prix_Enceintes[i-1] <= max && Prix_Enceintes[i-1] >= min) 
				{query[i].style.display="inline-block";}
				else 
				{query[i].style.display="none";}// on affiche tout
			}}
		else //sinon
		{
			for (var i = 1; i < query.length; i++)
			{
				query[i].style.display="none"; // on cache tout
			}
      }
query = document.querySelectorAll("#Lumieres");
        //si la case est cochée
		if (query[0].checked) 
		{
			for (var i = 1; i < query.length; i++)
			{	if (Prix_Lumieres[i-1] <= max && Prix_Lumieres[i-1] >= min) 
				{query[i].style.display="inline-block";}
				else 
				{query[i].style.display="none";}// on affiche tout
			}}
		else //sinon
		{
			for (var i = 1; i < query.length; i++)
			{
				query[i].style.display="none"; // on cache tout
			}
      }
  query = document.querySelectorAll("#Cable");
        //si la case est cochée
		if (query[0].checked) 
		{
			for (var i = 1; i < query.length; i++)
			{	if (Prix_Cable[i-1] <= max && Prix_Cable[i-1] >= min) 
				{query[i].style.display="inline-block";}
				else 
				{query[i].style.display="none";}// on affiche tout
			}}
		else //sinon
		{
			for (var i = 1; i < query.length; i++)
			{
				query[i].style.display="none"; // on cache tout
			}
      }

  }
    </script>
<form>
	<p>
       Catégorie: <br />
       <input type="checkbox" name="Micro" id="Micro" checked onchange="fonctionCategorie('Micro');" /> <label for="Micro">Micro</label><br />
       <!-- On appel dans le cas d'un changement de case la fonction définie auparavant -->
       <input type="checkbox" name="Ampli" id="Ampli" checked onchange="fonctionCategorie('Ampli');"/> <label for="Ampli">Amplifiacteur</label><br />
       <input type="checkbox" name="TableDeMixage" id="TableDeMixage" checked onchange="fonctionCategorie('TableDeMixage');"/> <label for="TableDeMixage">Table de mixage</label><br />
       <input type="checkbox" name="Effects" id="Effects" checked onchange="fonctionCategorie('Effects');"/> <label for="Effects">Effects</label><br />
       <input type="checkbox" name="Enceintes" id="Enceintes" checked onchange="fonctionCategorie('Enceintes');"/> <label for="Enceintes">Enceintes</label><br />
       <input type="checkbox" name="Lumieres" id="Lumieres" checked onchange="fonctionCategorie('Lumieres');"/> <label for="Lumieres">Lumieres</label><br />
       <input type="checkbox" name="Cable" id="Cable" checked onchange="fonctionCategorie('Cable');"/> <label for="Cable">Cables</label><br />
       
   </p>
</form>
<div id="affichage_prix">0€ - 500€</div>
<div id ="slider-range"></div>
<?php
$donnees = $reponse->fetch();
// Mise en place de variable retenant les prix des articles pour l'option de trix par prix
echo "<script>var Prix_Micro = [];
var Prix_Ampli = [];
var Prix_TableDeMixage = [];
var Prix_Effects = [];
var Prix_Enceintes = [];
var Prix_Lumieres = [];
var Prix_Cable = [];


</script>";
while ($donnees = $reponse->fetch())
{  //on récupère le fichier correspondant
	$trans = array("0" => "", "1" => "", "2" => "", "3" => "", "4" => "", "5" => "", "6" => "", "7" => "", "8" => "", "9" => "");
	$dossier = strtr($donnees['ID'],$trans);
	echo "<script>
Prix_".$donnees['Categorie'].".push(".$donnees['Prix'].");


	</script>";

// on affiche le nom du produit, le nom est un lien vesr la page décrivant le produit
// onmouseover et onmouseout permettent d'afficher une bulle d'information au passage de la souris 
	echo '<div id ="' . $donnees['Categorie'] . '"><a href="../PageArticle/PageArticle.php?ID=' . $donnees['ID'] . '" onmouseover = montre(\''.$donnees['Prix'].'€\');
	 onmouseout=cache(); >' . $donnees['Nom'] . '</a> <br />';
	// on affiche l'image correspondante 
	echo '<img src ="../ressources/Materiel/' . $dossier . '/' .$donnees['ID'] . '/' .$donnees['ID'] . '.jpeg" height="120" width="120" alt = "Image du produit: ' . $donnees['Nom'] . '" onmouseover = "montre(\''.$donnees['Prix'].'€\');"
	 onmouseout="cache()";/>  </div>' ;
//height et width définisse une taille standard pour les images




} 
$reponse->closeCursor();

?>



	</body>

</html>