<?php 
	session_start();
	if(isset($_SESSION['userlogin'])){
		header("Location: index1.php");
	}
?>
<button><a href ="pagina.html">Go to login</a></button>