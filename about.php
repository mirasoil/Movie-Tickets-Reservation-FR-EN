<!DOCTYPE html>
<html>
<head>
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<link rel="stylesheet" href="styles/main.css" type="text/css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
	
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.min.css">
    <!--Scroll reveal CDN-->
    <script src="https://unpkg.com/scrollreveal"></script>
    <link rel="stylesheet" href="styles.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
 
</head>
<body>
<?php 
  session_start();
  $language = "engleza";
  include "sections/nav.sec.php"; 
?>
<section class="discover-our-story">
    <div class="container">
        <div class="restaurant-info">
            <div class="restaurant-description padding-right animate-left">
                <div class="global-headline">
                    <h2 class="sub-headline">
                        <span class="first-letter">I</span>nformatii
                    </h2>
                    <h1 class="headline headline-dark">Aceasta aplicatie este destinata tuturor utilizatorilor windows</h1>
                    <div class="asterisk"><i class="fas fa-film"></i></div>
                </div>
               
                <div>
                    <div class="infos">
                        <h2>Informatii suplimentare</h2>
                    </div>
                    <div class="actualizare">
                        Ultima actualizare
                    </div>
                    <div class="actualizare">16.11.2020</div>
                    <div class="dimensiune">Dimensiune</div>
                    <div class="dimensiune">350Mb</div>
                    <div class="versiune">Versiunea actuala</div>
                    <div class="versiune">2.5.0</div>
                    <div class="versiune">Necesita Windows 10</div>
                    <div class="instalari">Instalari</div>
                    <div class="instalari">10.000</div>
                </div>
            </div>

            <section class="echipa">
                <div class="restaurant-info-img animate-right">
                    <div class="card-wrapper">
                        <div class="card">
                            <img src="img/bg-photo.jpg" alt="card background" class="card-img">
                            <img src="img/profile.jpg" alt="profile image" class="profile-img">
                            <h1> Cinema X </h1>
                            <p class="job-title">Reservation App</p>
                            <p class="about">
                                Programe filme, rezervari, totul in doar 2 pasi simpli !
                            </p>
                            <a class="btnn"onclick="window.open('SpecsPDF.pdf', '_blank', 'fullscreen=yes'); return false;">Specs</a>
                            

                        </div>
                    </div>
                </div>

        </div>
</section>

<?php 
  include "sections/footer.sec.php"; 
?>

</body>
</html>