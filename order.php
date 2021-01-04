<!DOCTYPE html>
<html>
<head>
	<title>Order Confirmation Page</title>
	<meta charset="utf-8">
	<link rel="stylesheet" href="styles/main.css" type="text/css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
	
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <style>

.test {
	width: 100%;
  border-collapse: separate;
  border-spacing: 50px;
  *border-collapse: separate;
}
</style>
</head>
<body>
	<?php 
	require "controllerFilme.php";
	session_start();
	$language = "engleza";
include 'sections/nav.sec.php';
$filme = new filme();
	$movieName = $filme->getMovieName($_SESSION['code']);
	
?>
<div id='order'>
	<h1>Awesome!</h1>
	<br>
	<h4>You successfully created your booking !</h4>
	<br>
	<h4>Booking information: </h4>
	  <table cellpadding="10" cellspacing="1" class="test">
	 <tbody>
	 <tr>
		 <th style="text-align: left;"><strong>Name</strong></th>
		 <th style="text-align: left;"><strong>Row</strong></th>
		 <th style="text-align: right;"><strong>Seat</strong></th>
		 <th style="text-align: right;"><strong>Start Date</strong></th>
		 <th style="text-align: center;"><strong>Total</strong></th>
	 </tr>	
	 <tr>
		 <td style="text-align: left; border-bottom: #F0F0F0 1px solid;"><h3><?php echo $movieName[0]['name']; ?></h3></td>
		 <td style="text-align: left; border-bottom: #F0F0F0 1px solid;"><h3><?php echo $_SESSION['rand']; ?></h3></td>
		 <td style="text-align: right; border-bottom: #F0F0F0 1px solid;"><h3><?php echo $_SESSION['loc']; ?></h3></td>
		 <td style="text-align: right; border-bottom: #F0F0F0 1px solid;"><h3><?php echo $_SESSION['data_film']; ?><h3></td>
		 <td><h3>
		 	<?php echo $_SESSION['pret_total']." \xE2\x82\xAc" ?> </h3>
		 </td>
		 </td>
 	</tr>
 	</tbody>
 </table>
<h3>Thank you !</h3>

 <div style="padding-top: 50px;"><button><a href="movies.php" style="text-decoration: none; font-size: 20px; ">Make another reservation</a></button></div>

</div>


<div class="container"></div>
<?php 
include 'sections/footer.sec.php';

?>
</body>
</html>