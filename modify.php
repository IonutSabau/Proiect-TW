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
$nume = $_POST["product_name"]; //nume vechi
$pret = $_POST['price'];
$qty = $_POST['product_qty'];

$sql = "UPDATE produse SET product_name='$nume', price='$pret', product_qty='$qty' WHERE product_code='$product_code'";

if($conn->query( $sql ) === TRUE) {
    echo "S-a modificat cu succes";
    header("location: inventory.php");
} else {
    echo "Error: " . $sql . "<br>" .$conn->error;
}

$conn->close();
}else{
echo 'No data';
}

?>