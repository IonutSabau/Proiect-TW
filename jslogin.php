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
		if($username=='ionutadmin@yahoo.com' && $password=='admin' )
		{
		 $_SESSION['userlogin'] = $user;
		 echo'Te-ai logat ca ADMIN!';
		}
		else
	{
		$_SESSION['userlogin'] = $user;
		
		$sql2 = "SELECT 'Nume si Prenume' FROM users WHERE email = ? LIMIT 1";
		$stmtselect2  = $db->prepare($sql2);
		$result = $stmtselect2->execute([$username]);
		
		echo "Te-ai logat ca si cumparator!";
		

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