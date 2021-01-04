<?php 
require_once "controllerFilme.php";
$language = "franceza";
session_start();
 ?>

 <!DOCTYPE html>
 <html>
 <head>
 	<title>CINEMA</title>
 	<link rel="stylesheet" type="text/css" href="styles/main.css">
 	
 	<meta charset="utf-8">
	<link rel="stylesheet" href="styles/main.css" type="text/css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">

 </head>
 <body>
 	<!--Bara denavigatie --->
 	<?php 

 	include "sections/nav.sec.php"; ?> 
 	
 <div id="product-grid">
 	<div class="smart-products">
 		<h1>Films</h1>
 	</div>

 	<?php 
 		$filme = new filme();
 		$query = "SELECT * FROM filme";
 		$product_array = $filme->getAllMovies($query);

 		if(!empty($product_array)){
 			//var_dump($product_array);

 			foreach($product_array as $key => $value){
?>
<!--Daca utilizatorul doreste sa stie mai multe despre produs, va face click pe nume sau poza acestuia si va fi redirectionat pe pagina product.php?code=... -->
		 <div class="product-item">
			<form method="POST" action="cos.php?action=add&code=<?php echo $product_array[$key]["code"];?>">
				<div class="product-title">
					
						<strong>
						 <a href="pagefr.php?page=productfr&id=<?php echo $product_array[$key]['id']?>" class="product"><?php echo $product_array[$key]["nom"]; ?></a></strong>
					
				</div>
				<div class="product-image">
					<a href="pagefr.php?page=productfr&id=<?php echo $product_array[$key]['id']?>" class="product">
						<img src="<?php echo $product_array[$key]["image"]; ?>" class="product-image">
					</a>
				</div>
				

				<div class="product-price">
					<strong><?php echo $product_array[$key]["price_eu"]."\xE2\x82\xAc"; ?></strong>
				</div>
				<div class="cart-action">
				<input type="text" name="quantity" value="1" size="2"/>
				

				<input type="submit"  value="Réserve" class="btnAddAction" style="margin-right: 15px;" />
		
			</div>
			</form>
		</div>


<?php


 			}
 		}

 	 ?>

 </div>
 <div class="container"> <!--ca sa functioneze footer-ul -->
</div>
<?php include 'sections/footer.sec.php'; ?>
 </body>
 </html>






