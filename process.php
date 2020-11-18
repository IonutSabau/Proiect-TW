<?php

require_once('config.php');

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
	$name = $_POST['name'];
	$telefon = $_POST['telefon'];
	$email = $_POST['email'];
	$parola	= $_POST['parola'];
	$type = $_POST['type'];
	
	$sql = "INSERT INTO users (`Nume si Prenume`, Telefon, Email, Parola, Type) VALUES ('$name', $telefon, '$email', '$parola', '$type')";
	
	
	if($conn->query( $sql ) == TRUE) {
		echo "New record created successfully in users table";
	} 
	else {
		echo "Error: " . $sql . "<br>" .$conn->error;
	}
	
	$conn->close();
}
else{
		echo 'No data';
	}