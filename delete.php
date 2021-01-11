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
    $sql = "DELETE FROM produse WHERE product_code='".$product_code."'"; 

	if($conn->query( $sql ) === TRUE) {
		echo "S-a sters cu succes";
		header("location: inventory.php");
	} else {
		echo "Error: " . $sql . "<br>" .$conn->error;
	}
	
	$conn->close();
}else{
	echo 'No data';
}

?>
		