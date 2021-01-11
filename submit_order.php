<?php
session_start();
require_once('config.php');


function getGUID(){
    if (function_exists('com_create_guid')){
        return com_create_guid();
    }
    else {
        mt_srand((double)microtime()*10000);//optional for php 4.2.0 and up.
        $charid = strtoupper(md5(uniqid(rand(), true)));
        $hyphen = chr(45);// "-"
        $uuid = chr(123)// "{"
            .substr($charid, 0, 8).$hyphen
            .substr($charid, 8, 4).$hyphen
            .substr($charid,12, 4).$hyphen
            .substr($charid,16, 4).$hyphen
            .substr($charid,20,12)
            .chr(125);// "}"
        return $uuid;
    }
};
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

if(isset($_POST)){
	
	$conn = createConnection();
	$fname = ($_POST['fname']);
	$email = ($_POST['email']);
	$adr = ($_POST['adr']);
	$city = ($_POST['city']);
	$state = ($_POST['state']);
	$zip = ($_POST['zip']);		
	$sql = "Insert into addresses(fname,userId,adr,city,state,zip) values ('$fname','$userId','$adr','$city','$state','$zip')";
	
	if($conn->query( $sql ) === TRUE) {
		echo "New record created successfully in users table";
	} else {
		echo "Error: " . $sql . "<br>" .$conn->error;
	}
	
	$conn->close();
}
else{
	echo 'No data';
}
	
	
	// save the order details
	foreach ($_SESSION["cart_products"] as $cart_itm)
	{
		
		$productCode = $cart_itm["product_code"];
		$quantity = $cart_itm["product_qty"];
		
			
		try {
			$sql2 = "Insert into orders(orderId, productCode,quantity,userId) values ('$orderId','$productCode','$quantity','$userId') ";
			
			if (mysqli_query($db, $sql2)) {
			} else {
				echo "Error: " . $sql2 . "<br>";
			}
		} catch (Exception $e) {
			echo 'Caught exception: ',  $e->getMessage(), "\n";
		}			
	}

	unset($_SESSION["cart_products"]); //unset array item
	echo "<SCRIPT type='text/javascript'> //not showing me this
				alert('Comanda ta a fost plasata cu succes!');
				window.location='PrimaPagina.html'
			</SCRIPT>";

?>