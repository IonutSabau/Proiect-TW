<?php
session_start();
require_once('config.php');

$username = $_POST['username'];
$password = $_POST['password'];

$sql = "SELECT * FROM users WHERE email = ? AND parola = ? LIMIT 1";
$stmtselect  = $db->prepare($sql);
$result = $stmtselect->execute([$username, $password]);
if($result)
{
	$user = $stmtselect->fetch(PDO::FETCH_ASSOC);
	if($stmtselect->rowCount() > 0)
	{ 
		if($username=='admin.ionut@yahoo.com' && $password=='ionut' )
		{
		 $_SESSION['userlogin'] = $user;
		   echo'1';
		}
		else
	{
		$_SESSION['userlogin'] = $user;
		   echo'0';
		

	}
	}
	else{
		echo 'Nu exista acest user';	
	}
}
	else{
	echo 'Eroare';
}

?>