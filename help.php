<?php session_start(); ?>
<!DOCTYPE html>
<html>
<head>
	<title>Help</title>
	<meta charset="utf-8">
	<link rel="stylesheet" href="styles/main.css" type="text/css">
    <link rel="stylesheet" href="styles/search.css" type="text/css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
	
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    
  

<body>
<?php 
  $language = "romana";
  include "sections/nav.sec.php"; 

?>
<div class="container">
<h1>Cu ce te putem ajuta?</h1>


<ul class="list-group">
    <label>Pentru crearea unui cont se executa pasii urmatori:</label>
  <li class="list-group-item">Se apasa butonul de "inregistrare" din pagina principala.</li>
  <li class="list-group-item">Se completeaza input-urile cu credentialele corespunzatoare.</li>
  <li class="list-group-item">Se apasa pe inregistrare.</li>
  <li class="list-group-item">In urma inregistrarii, pe adresa de mail introdusa veti primi un mail de validare al contului. Urmati pasii de acolo. </li>
  <li class="list-group-item">Daca ati intampinat dificultati pe parcursul inregistrarii, va rugam sa ne <a href="despre.php" style="text-decoration:none;">contactati.</a></li>
</ul>
<ul class="list-group">
    <label>Pentru rezervarea unui bilet la film:</label>
  <li class="list-group-item">Din sectiunea filme se selecteaza filmul dorit.</li>
  <li class="list-group-item">Se adauga cantitatea de bilete dorite in cos si se navigheaza pe pagina corespunzatoare.</li>
  <li class="list-group-item">Daca informatiile din cos sunt cele dorite, se selecteaza butonul de "Alege locurile".</li>
  <li class="list-group-item">Se selecteaza locurile dorite din lista de locuri disponibile.</li>
  <li class="list-group-item">In urma selectarii locurile dorite, procesam comanda cu ajutorul link-ului de check-out.</li>
  <li class="list-group-item">Daca ati intampinat dificultati pe parcursul inregistrarii, va rugam sa ne <a href="despre.php" style="text-decoration:none;">contactati.</a></li>
</ul>
</div>
<script src="main.js"></script>


<?php include "sections/footer.sec.php"; ?>
</body>
</html>