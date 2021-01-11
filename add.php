

<?php
session_start();
include_once("config.php");

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
	$product_code = $_POST['product_code'];
	$category = $_POST['category'];
	$fandom	= $_POST['fandom'];
	$product_name = $_POST['product_name'];
	$price=$_POST['price'];
	$product_qty=$_POST['product_qty'];
	$sql = "INSERT INTO produse(product_code,fandom,category,product_name,price,product_qty) VALUES ('$product_code','$fandom','$category','$product_name','$price','$product_qty')";
	
	if($conn->query( $sql ) === TRUE) {
		echo "New record created successfully in produse table";
		header("location: inventory.php");
	} else {
		echo "Error: " . $sql . "<br>" .$conn->error;
	}
	
	$conn->close();
}else{
	echo 'No data';
}

?>