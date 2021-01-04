<?php 
require_once "DBController.php";
//operatii CRUD pe tabela 

class filme extends DBController{
	function getAllMovies(){
		//functie ce returneaza toate produsele din tabela
		$query = "SELECT * FROM filme";

		$productResult = $this->getDBResult($query); //in variabila productResult stocam rezultatul query-ului aplicat in tbl_product
		return $productResult;
	}



	function getMovieById($id){
		//returneaza produsul in functie de id-ul introdus, trimis ca referinta (GET)
		$query = "SELECT * FROM filme WHERE id=?";

		$params = array(
			array(
				"param_type" => "i",
				"param_value" => $id
			)
		);

		$productResult = $this->getDBResult($query, $params);
		return $productResult;
	}
	function getUserCartItem($user_id){
		//returneaza produsul adaugat in cos de utilizatorul care este logat la momentul respectiv
		$query = "SELECT filme.*, tbl_cart.id as cart_id, tbl_cart.quantity, tbl_cart.product_id FROM filme, tbl_cart WHERE filme.id=tbl_cart.product_id AND tbl_cart.user_id=?";
		//selecteaza din tabela produse tot, din tbl_cart doar id-ul, cantitatea si product_id-ul pentru conditia: id-ul produsului din tabela produse trebuie sa corespunda cu id-ul produsului din tabela cos si id-ul utilizatorului sa fie acelasi cu cel din sesiune

		$params = array(
			array(
				"param_type" => "i",
				"param_value" => $user_id
			)
		);

		$cartResult = $this->getDBResult($query, $params);
		return $cartResult;
	}
	function getMovieByCode($product_code){
		//returneaza produsul in functie de codul introdus, trimis ca referinta (GET)
		$query = "SELECT * FROM filme WHERE code=?";

		$params = array(
			array(
				"param_type" => "s",
				"param_value" => $product_code
			)
		);

		$productResult = $this->getDBResult($query, $params);
		return $productResult;
	}


	function getCartItemByProduct($product_id, $user_id){
		//returneaza produsele in functie deid-ul produsului si id-ul user-ului
		$query = "SELECT * FROM tbl_cart WHERE product_id=? AND user_id=?";

		$params = array(
			array(
				"param_type" => "i",
				"param_value" => $product_id
			),
			array(
				"param_type" => "i",
				"param_value" => $user_id
			)
		);

		$cartResult = $this->getDBResult($query, $params);
		return $cartResult;
	}


	function addToCart($product_id, $quantity, $user_id){
		//adauga produsele in cos pentru utilizatorul cu id-ul curent
		$query = "INSERT INTO tbl_cart(product_id, quantity, user_id) VALUES (?, ?, ?)";

		$params = array(
			array(
				"param_type" => "i",
				"param_value" => $product_id
			),
			array(
				"param_type" => "i",
				"param_value" => $quantity
			),
			array(
				"param_type" => "i",
				"param_value" => $user_id
			)
		);

		$this->updateDB($query, $params);
	}


	function updateCartQuantity($quantity, $cart_id){
		$query = "UPDATE tbl_cart SET quantity=? WHERE id=?";

		$params = array(
			array(
				"param_type" => "i",
				"param_value" => $quantity 
			),
			array(
				"param_type" => "i",
				"param_value" => $cart_id
			)
		);

		$this->updateDB($query, $params);
	}


	function deleteCartItem($cart_id){
		$query = "DELETE FROM tbl_cart WHERE id=?";

		$params = array(
			array(
				"param_type" => "i",
				"param_value" => $cart_id
			)
		);

		$this->updateDB($query, $params);
	}


	function emptyCart($user_id){
		$query = "DELETE FROM tbl_cart WHERE user_id=?";

		$params = array(
			array(
				"param_type" => "i",
				"param_value" => $user_id
			)
		);

		$this->updateDB($query, $params);
	}
}



 ?>