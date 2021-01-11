<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<!-- <style>
a  {
  color:white;
}
</style> -->

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="styles/styles.css">
    <link rel="stylesheet" href="styles/main.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">

  	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>Horaire Films</title>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
</head>


<?php require "controllerFilme.php";
$language = "franceza";
include 'sections/nav.sec.php';
?>
<body>
    <div class="schedule-section">
        <h1>Horaire</h1>
        <div class="schedule-dates">
            <div class="schedule-item" > 10 Mars,2021</a></div>
            <div class="schedule-item ">11 Mars,2021</div>
            <div class="schedule-item">12 Mars,2021</div>
            <div class="schedule-item">13 Mars,2021</div>
            <div class="schedule-item">14 Mars,2021</div>
        </div>
        <div class="schedule-table">
            <table>
              <?php
              $filme = new filme();
              $query = "SELECT * FROM filme";
              $product_array = $filme->getAllMovies($query);

              if(!empty($product_array)){
           			//var_dump($product_array);

           			foreach($product_array as $key => $value){ ?>
                <tr>
                    <th>FILMS</th>
                    <th>HORAIRE DANS LE CINEMA</th>
                </tr>
                <tr class="fade-scroll">
                    <td>
                      <img style="width:250px; height:300px;" src="<?php echo $product_array[$key]['image'];?> "></img>
                        <h2 > <?php echo $product_array[$key]['nom'];?> </h2>
                        <i class="far fa-clock"></i> <?php echo $product_array[$key]['durata'];?><i class="fas fa-desktop"></i> IMAX
                        <h3 >Description</h3>
                        <p><?php echo $product_array[$key]['descriere_fr'];?> </p>
                        <a href="pagefr.php?page=productfr&id=<?php echo $product_array[$key]['id']?>" style="text-decoration:none; color:white; text-align:center;"> 
                        <div class="schedule-item"> DÉTAILS
                        </div></a>
                        
                    </td>
                    <td>
                        <div class="hall-type">
                            <h3> Main Hall</h3>
                            <div>
                                <div class="schedule-item"><i class="far fa-clock"></i></div>
                                <div class="schedule-item">09:00 AM</div>
                                <div class="schedule-item">11:30 AM</div>
                                <div class="schedule-item">06:00 PM</div>
                            </div>
                        </div>
                        <div class="hall-type">
                            <h3>VIP Hall - Bientôt </h3>
                            <div>
                                <div class="schedule-item"><i class="far fa-clock"></i></div>
                                <div class="schedule-item">09:00 AM</div>
                                <div class="schedule-item">11:30 AM</div>
                                <div class="schedule-item">06:00 PM</div>
                            </div>
                        </div>
                        <div class="hall-type">
                            <h3>Private Hall - Bientôt</h3>
                            <div>
                                <div class="schedule-item"><i class="far fa-clock"></i></div>
                                <div class="schedule-item">09:00 AM</div>
                                <div class="schedule-item">11:30 AM</div>
                                <div class="schedule-item">06:00 PM</div>
                            </div>
                        </div>
                    </td>
                </tr>


                <?php


                 			}
                 		}

                 	 ?>

            </table>
        </div>


    </div>

    <script src="scripts/jquery-3.3.1.min.js "></script>
    <script src="scripts/owl.carousel.min.js "></script>
    <script src="scripts/script.js "></script>
</body>

</html>
