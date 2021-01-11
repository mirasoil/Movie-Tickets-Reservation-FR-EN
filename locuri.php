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
require "controllerFilme.php";
   $language ="engleza";
  include "sections/nav.sec.php"; 
//echo $_SESSION['code'];
$filme = new filme();
?>
<img src="img/locuri.png" style="margin-top: -50px;margin-left: 25%;" />
<form style="text-align: center;margin: 20px;" action="order.php" method="POST">
  <label for="movie">Choose a rand:</label>
  <select name="rand" id="rand">
    <option value="A">A</option>
    <option value="B">B</option>
    <option value="C">C</option>
    <option value="D">D</option>
    <option value="E">E</option>
    <option value="F">F</option>
    <option value="G">G</option>
    <option value="H">H</option>
    <option value="J">J</option>
    <option value="K">K</option>
    <option value="AA">AA</option>
    <option value=BB>BB</option>
    <option value="CC">CC</option>
    <option value="DD">DD</option>

  </select>
    <label for="movie">Choose a loc:</label>
  <select name="loc" id="loc">
    <option value="1">1</option>
    <option value="2">2</option>
    <option value="3">3</option>
    <option value="4">4</option>
    <option value="5">5</option>
    <option value="6">6</option>
    <option value="7">7</option>
    <option value="8">8</option>
    <option value="9">9</option>
    <option value="10">10</option>
    <option value="11">11</option>
    <option value="12">12</option>
    <option value="13">13</option>
    <option value="14">14</option>
    <option value="15">15</option>
    <option value="16">16</option>
    <option value="17">17</option>
    <option value="18">18</option>
    <option value="19">19</option>
    <option value="20">20</option>
    <option value="21">21</option>
    <option value="22">22</option>
  </select>
   <select name="data" required>
                        <option value="" disabled selected>DATE</option>
                        <option value="12:00">March 12,2020</option>
                        <option value="13:00">March 13,2020</option>
                        <option value="14:00">March 14,2020</option>
                        <option value="15:00">March 15,2020</option>
                        <option value="16:00">March 16,2020</option>
                    </select>
  <br><br>
  <input type="submit" name="seatSelecter" value="Select">
</form>
<h3 style="text-align: center;"><a href="order.php">CHECKOUT</a></h3>
<h3 style="text-align: center;"></h3>
<br>
<br>




<?php include "sections/footer.sec.php" ?>
</body>
</head>