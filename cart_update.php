<?php
session_start();
include_once('config.php');


function createConnection() {
	$db_user = "root";
	$serverName = "localhost";
    $db_pass = '';
    $db_name = "users";
	
	$conn = mysqli_connect($serverName, $db_user, $db_pass, $db_name);
	
	if( $conn->connect_error ) {
		die("Connection failed: " . $conn->connect_error);
	}
	
	return $conn;
}

//add product to session or create new one
if(isset($_POST["type"]) && $_POST["type"]=='add')
{
	foreach($_POST as $key => $value){ //add all post vars to new_product array
		$new_product[$key] = filter_var($value, FILTER_SANITIZE_STRING);
    }
	//remove unecessary vars
	unset($new_product['type']);
	unset($new_product['return_url']); 

	  //we need to get product name and price from database.
	  
    // $statement = $db->prepare("SELECT  fandom, category, product_name, price FROM produse WHERE product_code=? LIMIT 1");
    // $statement->bindParam('s', $new_product['product_code']);
    // $statement->execute(['product_code']);
	// $exist=$statement->fetchColumn();

	$conn = createConnection();
	$product_code = $new_product['product_code'];
	$sql = "SELECT  fandom, category, product_name, price FROM produse WHERE product_code='$product_code'";
	$result = $conn->query( $sql );

	if( $result->num_rows > 0 ) {
		while($row = $result->fetch_assoc())
	{
		
		//fetch product name, price from db and add to new_product array
		$new_product["fandom"] = $row["fandom"];
		$new_product["category"] =  $row["category"];
        $new_product["product_name"] =  $row["product_name"]; 
        $new_product["product_price"] = $row["price"];
		
	
        
        if(isset($_SESSION["cart_products"]))
		{  //if session var already exist
            if(isset($_SESSION["cart_products"][$new_product['product_code']])) //check item exist in products array
            {
                unset($_SESSION["cart_products"][$new_product['product_code']]); //unset old array item
            }           
        }
        $_SESSION["cart_products"][$new_product['product_code']] = $new_product; //update or create product session with new item  
	    
	} 
	}
	
}



//update or remove items 
if(isset($_POST["product_qty"]) || isset($_POST["remove_code"]))
{
	//update item quantity in product session
	if(isset($_POST["product_qty"]) && is_array($_POST["product_qty"])){
		foreach($_POST["product_qty"] as $key => $value){

			if(isset($_POST["size"]))
			{
				$_SESSION["cart_products"][$key]["size"] = $_POST["size"];
			}
			
			if(is_numeric($value)){
				$_SESSION["cart_products"][$key]["product_qty"] = $value;
			}
		}
	}
	//remove an item from product session
	if(isset($_POST["remove_code"]) && is_array($_POST["remove_code"])){
		foreach($_POST["remove_code"] as $key){
			unset($_SESSION["cart_products"][$key]);
		}	
	}
}

//back to return url
$return_url = (isset($_POST["return_url"]))?urldecode($_POST["return_url"]):''; //return url
header('Location:'.$return_url);

?>