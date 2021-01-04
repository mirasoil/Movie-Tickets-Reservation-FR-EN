
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
   $language ="engleza";
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
                        <span class="first-letter">B</span>ook now
                    </h2>
                    <h1 class="headline headline-dark">movie tickets</h1>
                    <div class="asterisk"><i class="fas fa-film"></i></div>
                </div>
                <p class="desprega">                   
Allows booking and buying seats for shows in the program directly from the application. It presents details about the movies that run in the cinema, it offers the possibility to view the trailers and the recommendation of the week. The "Today in cinema" menu allows you to easily choose the movie you can go to depending on the current time. Reservations can be added to the phone's calendar for alerting or notifications can be sent to friends, through social networks, directly from the application.
                </p>
                <p class="despregal">
                    
"I avoided standing in line at the cashier's office. <br>Simple and efficient "
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