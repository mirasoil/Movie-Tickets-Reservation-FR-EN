
<?php session_start(); ?>
<!DOCTYPE html>
<html>
<head>
	<title>Smart Shop</title>
	<meta charset="utf-8">
	<link rel="stylesheet" href="styles/main.css" type="text/css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
	
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  

<body>
<?php 
$language ="franceza";
  include "sections/nav.sec.php"; 

?>

<script src="main.js"></script>

<!-- hero ends -->
<a name="galerie"></a>
<section class="discover-our-story">
    <div class="container">
        <div class="restaurant-info">

            <div class="restaurant-description padding-right animate-left">
                <div class="global-headline">
                    <h2 class="sub-headline">
                        <span class="first-letter">R</span>éserver
                    </h2>
                    <h1 class="headline headline-dark">billets de cinéma </h1>
                    <div class="asterisk"><i class="fas fa-film"></i></div>
                </div>
                <p class="desprega">
                    Permet de réserver et d'acheter des places pour les spectacles du programme directement depuis l'application. Il présente des détails sur les films qui tournent au cinéma, il offre la possibilité de visionner les bandes-annonces et la recommandation de la semaine. Le menu «Aujourd'hui au cinéma» vous permet de choisir facilement le film auquel vous pouvez vous rendre en fonction de l'heure actuelle. Les réservations peuvent être ajoutées au calendrier du téléphone pour l'alerte ou des notifications peuvent être envoyées à des amis, via les réseaux sociaux, directement depuis l'application.
                </p>
                <p class="despregal">
                    "J'ai évité de faire la queue à la caisse. <br>Simple et efficace."
                </p>
                <p class="despregale">
                    Simple client--
                </p>

            </div>

            <div class="restaurant-info-img animate-right">
                <div class="image-group padding-right animate-left">

                    <img src="img/ss1.jpg" alt="app screenshot" class="img1">
                    <img src="img/ss2.jpg" alt="app screenshot" class="img1">
                    <img src="img/ss3.jpg" alt="app screenshot" class="img1">
                    <img src="img/ss4.jpg" alt="app screenshot" class="img1">
                </div>
            </div>
        </div>
    </div>

</section>
<!-- Discover our story -->


<?php include "sections/footer.sec.php" ?>
</body>
</head>