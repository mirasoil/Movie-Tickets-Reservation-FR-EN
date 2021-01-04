<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<link rel="stylesheet" href="styles/main.css" type="text/css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
	
	
</head>
<body>


<?php 
require_once 'controllerFilme.php';
include 'sections/nav.sec.php';

$filme = new filme();

if(isset($_GET['id'])) { //daca in link este setat id-ul il preluam si pe baza lui afisam datele produsului
	
	$query = 'SELECT * FROM filme WHERE id=?';
	//definim query-ul care va cauta produsul in baza de date dupa id-ul introdus
	$product_array = $filme->getMovieById($_GET['id']);
	//in variabila $product_array apelam functia getProductById definita in shoppingCart.php

	if(!empty($product_array)){
		//daca produsul cu id-ul introdus exista il afisam
		
		foreach ($product_array as $key => $value) {
		
		?>
			<div class="product content-wrapper">
			 <img src="<?php echo $product_array[$key]['image']?>" width="300" height="300" style="display: block; margin: 0 auto;" alt="<?php echo $product_array[$key]['name']?>">
				 <div>
					 <h1 class="name" style="text-align: center;"><?php echo $product_array[$key]['name']?></h1>
					 <label><h3 style="text-align: center;">Price</label>
					 <span class="price">
					 <?php echo $product_array[$key]['price_eu']."\xE2\x82\xAc"?>
					 </span></h3>
					 
				<div class="description">
					 <?php echo $product_array[$key]['descriere_en']?>
				</div>
			<form method="POST" action="cos.php?action=add&id=<?php echo $product_array[$key]["id"];?>">
				<div class="cart-action" >
					<input type="text" name="quantity" value="1" size="2"/>
					<input type="submit"  value="Buy tickets" class="btnAddToCart"/>
					<input type="hidden" name="id_film" value="<?php $id_film=$_GET['id']; ?>">
				</div>
			</form>
				<div style="text-align: center; margin-bottom: 30px;">
					<a href="movies.php"><button>See movies</button></a>
				</div>
			</div>
		</label>
	</div>
		<?php
		}
	}else {
		echo 'nimic :(';
	}
}

?>

<?php
include 'sections/footer.sec.php';
 ?>
 </body>
</html>