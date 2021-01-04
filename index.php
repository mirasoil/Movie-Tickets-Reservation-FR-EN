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
  session_start();
  $language = "romana";
  include "sections/nav.sec.php"; 

?>

<script src="main.js"></script>
<!-- header ends -->

<!-- hero ends -->
<a name="galerie"></a>
<section class="discover-our-story">
    <div class="container">
        <div class="restaurant-info">

            <div class="restaurant-description padding-right animate-left">
                <div class="global-headline">
                    <h2 class="sub-headline">
                        <span class="first-letter">R</span>ezerva acum
                    </h2>
                    <h1 class="headline headline-dark">bilete la film</h1>
                    <div class="asterisk"><i class="fas fa-film"></i></div>
                </div>
                <p class="desprega">
                    Permite rezervarea si cumpararea de locuri pentru spectacolele din program direct din aplicatie. Prezinta detalii despre filmele care ruleaza in cinematograf, ofera posibilitatea de a vizualiza trailerele si recomandarea saptamanii. Meniul "Astazi in cinema" va permite sa alegeti cu usurinta filmul la care puteti merge in functie de ora curenta. Rezervarile pot fi adaugate in calendarul telefonului in vederea alertarii sau pot fi trimise notificari prietenilor, prin retelele de socializare, direct din aplicatie.
                </p>
                <p class="despregal">
                    „Am evitat orele de stat la coada la casierie 
                    <br>Simplu si eficient.”
                </p>
                <p class="despregale">
                    Simplu client--
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


<script src="main.js"></script>


<?php include "sections/footer.sec.php"; ?>
</body>
</html>