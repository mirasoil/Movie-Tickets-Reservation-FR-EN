<?php 
session_start();
include 'adminController.php';

$admin = new Admin();
$id = $_POST['product-id'];
if (isset($_POST['delete-product'])) {
//butonul delete 
	$admin->deleteMovie($id);
	header("Location:controlPanel.php?delete=Succes");
} else if (isset($_POST['edit-product'])) {
//butonul edit
	$admin->editMovie($id, $_POST['product-name'], $_POST['product-code'], "img/".$_POST['product-image'], $_POST['product-price'],htmlspecialchars($_POST['product-desc']));
	header("Location:controlPanel.php?edit=Succes");
} 
else {
	echo "No action was selected";
	header("Location:controlPanel.php?error=noAction");
}




 ?>