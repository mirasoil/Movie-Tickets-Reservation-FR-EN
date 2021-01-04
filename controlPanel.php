<!DOCTYPE html>
<html>
<head>
	<title>
		Admin - CRUD
	</title>
	<meta charset="utf-8">
	<link rel="stylesheet" href="styles/main.css" type="text/css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
	
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  	 <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
</head>

<body>
<?php 
session_start();
$language="engleza";
//Includem meniul
include 'sections/nav.sec.php';

//includem adminController pentru a putea folosi functia getAllProducts
include 'adminController.php';

//daca loggedin si accountType nu sunt setate redirectionam spre login.html
if(isset($_SESSION['loggedin']) && isset($_SESSION['accountType'])){//daca sunt setate
	if(!($_SESSION['loggedin'] == TRUE && $_SESSION['accountType'] == 'admin')){
	//ai acces doar daca esti logat si tip cont = admin
	header('Location:login.html');
	}
} else {
	header('Location:login.html');
}


 ?>
<div class="container" style="padding-bottom: 3rem;">
	
<button onclick="showDiv('lista')">See all products</button>

<!---div-ul pentru crearea unui produs nou---->
<div id="lista" >
	<button onclick="showDiv('new-product')" class="create-product">
		Add a new movie
	</button>
	<div id="new-product">
	<form action="addMovie.php" method="post">
		<label for="product-name">
		</label>
		<input type="text" name="product-name" placeholder="Product Name" id="product-name" required><br>
		<label for="product-code">
		</label>
		<input type="product-code" name="product-code" placeholder="Code" id="product-code" required><br>
		<label for="product-image">
		</label>
		<input type="product-image" name="product-image" placeholder="Image URL" id="product-code" required><br>
		<label for="product-price">
		</label>
		<input type="product-price" name="product-price" placeholder="Price" id="product-code" required><br>
		<div id="desc-div"></div>
		<label for="product-desc">
		</label>
		<input type="product-desc" name="product-desc" placeholder="Description" id="product-desc" required><br>
		<div id="desc-div"></div>
		<button type="submit">Add Movie </button>
		</form>
</div>
	<?php 
	$admin = new Admin();
	//afisarea propriu-zisa a tuturor produselor
	$admin->getAllMovies(); 
	?>
</div>
</div>

<?php include 'sections/footer.sec.php'; ?>

<script>
//functie apelata intern pentru a face vizibil un div rezervat
	function showDiv(id){
		
		if (document.getElementById(id).style.display === 'none') {
			document.getElementById(id).style.display = 'block';
		} else {
			document.getElementById(id).style.display = 'none';
		}
	}

</script>

</body>
</html>


