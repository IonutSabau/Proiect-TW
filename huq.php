<?php
session_start();
require_once('config.php');
$current_url = urlencode($url="http://".$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI']);

?>



<html>
<head>
	<title>Shop - Husqvarna OEM</title>
	<link rel="shortcut icon" href="mx.png" sizes="32x32">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css"/>

<style type="text/css">
body{
	margin: 0;
	background-image: url("imagi.jpg");
   	}
#logo{
	padding-top: 0.7%;			
	
	background-image: url("husky.jpg");
	width: 14%;
	height: 13%;
	float: left;
	position: fixed;
		}
#navbar ul {
    list-style-type: none;
    margin: 0;
    padding: 0;
    overflow: hidden;
	background-image: url("imagi.jpg");
    margin-left: 14.3%;
	height: 12%;
    font-size: 16px;
}

#navbar li {
    float: left;
    display: inline-block;
}

#navbar li a {
    display: block;
    color: white;
    text-align: center;
    padding: 20px 4.5em;
    text-decoration: none;
}

#navbar a:hover:not(.active) {
    background-color: #66b3ff;
}

#navbar li a.active {
   background-color: #66b3ff;
}


.content{
	margin-left: 15%;
	margin-top: 1%;	
	
}

.box img{
	width: 100px;
    height:50px;
	padding: 1em;
}

.box{
	margin-top: 5px;
}

p{
	text-align: center;
	font-size: 1.5em;
}

.purchase{	
	width: 40%;	
	margin-left: 30%;
}


.row{
	margin-top: 1%;
    
}

.box{
	border-style: solid;
	border-color: black;
}

/* FOOTER STARTS */

footer{
	font-size: 12px;
	padding: 20px 0;
}

footer .col-sm-6{
	display: flex;
	justify-content: flex-end;
}

footer ul{
	list-style: none;
}

footer li img{
	width: 32px;
	height: 32px;
}

/* FOOTER ENDS */



.container .row .col-sm-4 .box:hover img {

}

.container .row .col-sm-3 .box:hover img {
	-webkit-transform: scale(1.3);
	transform: scale(1.3);
}

.container h3{
	background-image: url("husky.jpg");
}
.container h4{
	background-image: url("husky.jpg");
}
/* BACK TO TOP STARTS */

a.back-to-top{
	width: 60px;
	height: 60px;
	text-indent: -9999px;
	position: fixed;
	z-index: 999;
	right: 20px;
	bottom: 20px;
	background: url("up-arrow.png") no-repeat center 43%;
	-webkit-border-radius: 30px;
	-moz-border-radius: 30px;
	border-radius: 30px;
}

/* BACK TO TOP ENDS */

/* ADD TO CART BUTTON STARTS */
#myButton{
	-moz-box-shadow: 0px 0px 8px 2px #00ffff;
	-webkit-box-shadow: 0px 0px 8px 2px #00ffff;
	box-shadow: 0px 0px 8px 2px #00ffff;
	background-color:black;
	-moz-border-radius:28px;
	-webkit-border-radius:28px;
	border-radius:28px;
	border:1px solid black;
	display:inline-block;
	cursor:pointer;
	color:#00ffff;
	font-family:Trebuchet MS;
	font-size:17px;
	padding:3px 0px;
	text-decoration:none;
	text-shadow:0px 1px 0px #00ffff;
	margin-bottom:10px;
	width: 35%;
}


#myButton:hover {
	background-color: #0073e6;
	position:relative;
	top:5px;
}

/* ADD TO CART BUTTON ENDS */
#sidebar ul {    
    margin: 0;
    padding: 0;
    width: 14%;
   background-image: url("husky.jpg");
    position: fixed;
    height: 100%;    
    font-size: 15px;
    margin-top: 5%;
}

#sidebar li {
    display: block;
    color: #000;
    padding: 8px 8px;
    text-decoration: none;
}

#sidebar li a {
    display: block;
    color: #000;
    padding: 8px 0px;
    text-decoration: none;
}

#sidebar li a.active {
   background-color: #0073e6;
    color: white;
}

#sidebar li a:hover:not(.active) {
    background-color: #555;
    color: white;
}
	</style>
	
</head>

<body>
<div id="sidebar">

<div id="logo">
	<a href="PrimaPagina.html">
		<img src="mx.png" width="40%">
	</a>
</div>

	<ul>
		
		<li><a href="#palete" > <table><tr><td><img src="husvarnalogo.png" width="60%" /></td>
		<td><i><b><p style="color:white">Husqvarna</p></b></i></td></tr></table></a></li>

		<li><a href="#acc"><table><tr><td><img src="husvarnalogo.png" width="60%"  /></td>
		<td><i><b><p style="color:white">&nbsp;Accesorii</p></b></i/></td></tr></table></a></li>

	
		<li><a href="#cart"><table><tr><td><img src="white.png" width="60%"/></td>
			<td><p style="color:white">&nbsp;Coș de cumpărături</p></td></tr></table></a></li>
		

	
		<li>&nbsp;</li>		
	</ul>
</div>


<div id="navbar">
<span>
	<ul>	
		<li style="float:right;">
			<a href="logout.php"> 
			<table><tr><td><img src="ul.jpg" style="width:40px;height:40px;"></td>
			<td><b><p style="color:white;">&nbsp;Logout<p></b></td></tr></table></a>
				</span>
		</li>
		
		<li style="float:right;">
		<a href="view_cart.php"><table><tr><td><img src="white.png"  style="width:40px;height:40px;" /></td>
		<td><b><p style="color:white;">&nbsp;Checkout&nbsp;</p></b></td></tr></table></a>
			
		</li>
		
		
	</ul>
	

</div>



<!-- BACK TO TOP-->
<a href="#" class="back-to-top">Back To Top </a>



<div class="content">
	<section class="container">
	
<div id="cart">
<?php

if(isset($_SESSION["cart_products"]) && count($_SESSION["cart_products"])>0)
{
	
	echo '<h3 style="color:white;">Coșul tău de cumpărături</h3>';
	echo '<form method="post" action="cart_update.php">';
	echo '<table width="100%"  cellpadding="6" cellspacing="0">';
	echo '<thead><tr><th>Cantitate</th><th>Categorie</th><th>Nume</th><th>Șterge</th></tr></thead>';
	echo '<tbody>';


	$total =0;
	$b = 0;


	foreach ($_SESSION["cart_products"] as $cart_itm)
	{
		$fandom = $cart_itm["fandom"];
		$category = $cart_itm["category"];
		$product_name = $cart_itm["product_name"];
		$product_qty = $cart_itm["product_qty"];
		$product_price = $cart_itm["product_price"];
		$product_code = $cart_itm["product_code"];
		
		$bg_color = ($b++%2==1) ? 'odd' : 'even'; //zebra stripe	

		

		echo '<tr class="'.$bg_color.'">';
		echo '<td><input type="text" size="2" maxlength="2" name="product_qty['.$product_code.']" value="'.$product_qty.'" /></td>';
		echo '<td>'.$category.'</td>';
		echo '<td>'.$product_name.'</td>';
		echo '<td><input type="checkbox" name="remove_code[]" value="'.$product_code.'" /> Șterge</td>';
		echo '</tr>';
		$subtotal = ($product_price * $product_qty);
		$total = ($total + $subtotal);
	}

	echo '<tr><td>&nbsp;</td></tr>';
	echo '<tr>';
	
	echo '<td>&nbsp;</td>';
	echo '<td>';
	echo '<button type="submit" id="myButton">Update</button></td>';


	echo '<td><a href="view_cart.php" id="myButton" style="width: 26%; padding-left: 8px;">Finalizare</a>';
	echo '</td>';
	echo '</tr>';
	echo '</tbody>';
	echo '</table>';
	
	$current_url = urlencode($url="http://".$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI']);
	echo '<input type="hidden" name="return_url" value="'.$current_url.'" />';
	echo '</form>';
	

}

?>
</div>

<h3><center><b><p style="color:white">Husqvarna OEM</p></b></center></h3>
<div class="row" id="palete">

<?php
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
$sql="SELECT product_code, product_name, product_img_name, price FROM produse WHERE category='huq' AND fandom='huq'";
$results = $conn->query($sql);
if($results){ 

//fetch results set as object and output HTML
while($obj = $results->fetch_object())
{
 echo <<< EOT
	
	<div class="col-sm-4">
	<div class="box">
	<li class="product">
	<form method="post" action="cart_update.php">	
	<center><b><img src="{$obj->product_img_name}"style="width:200px;height:200px;"></b></center>
	 <a href="detalii.php"><p align="center" style="color:black"><b>{$obj->product_name}</b></p></a>
	<p align="center" style="color:black"style="font-size: 1.2em;"><b>{$currency}{$obj->price}</b> </p>
    <input type="hidden" name="product_code" value="{$obj->product_code}" /></a>
	<input type="hidden" name="type" value="add" />
	<input type="hidden" name="return_url" value="{$current_url}" />
	<div align="center">
	<label>Quantity: </label>
	<input type="text" size="2" maxlength="2" name="product_qty" value="1"/>&nbsp;&nbsp;
	<button type="submit" class="add_to_cart" id="myButton">Add to cart</button> 
	</div>
	</form>
	</li>
	</div>
	</div>
	
EOT;
}
$conn->close();

}
}
?>    
</div>




<h4><center><b><p style="color:white">Accesorii</p></b></center></h4>
<div class="row" id="acc">

<?php
function createConnectionn() {
	$db_user = "root";
	$serverName = "localhost";
    $db_pass = '';
    $db_name = "users";
	
	$con = mysqli_connect($serverName, $db_user, $db_pass, $db_name);
	
	if( $con->connect_error ) {
		die("Connection failed: " . $con->connect_error);
	}
	
	return $con;
}
if(isset($_POST))
{
$con = createConnectionn();
$sql="SELECT product_code, product_name, product_img_name, price FROM produse WHERE category='acc' AND fandom='acc'";
$results = $con->query($sql);
if($results){ 
$products_item = '<ul style="list-style-type: none;">';
//fetch results set as object and output HTML
while($obj = $results->fetch_object())
{
 echo <<< EOT
	
	<div class="col-sm-4">
	<div class="box">
	<li class="product">
	<form method="post" action="cart_update.php">	
	<center><img src="{$obj->product_img_name}"style="width:200px;height:200px;"></center>
	<p align="center"><b>{$obj->product_name}</b></p>
	<p align="center" style="font-size: 1.2em;">{$currency}{$obj->price} </p>
	<input type="hidden" name="product_code" value="{$obj->product_code}" />
	<input type="hidden" name="type" value="add" />
	<input type="hidden" name="return_url" value="{$current_url}" />
	<div align="center">
	<label>Quantity: </label>
	<input type="text" size="2" maxlength="2" name="product_qty" value="1"/>&nbsp;&nbsp;
	<button type="submit" class="add_to_cart" id="myButton">Add to cart</button>
	</div>
	</form>
	</li>
	</div>
	</div>
	
EOT;
}
$con->close();

}
}
?>    
</div>
</section>
</div>




<footer class="container">
	<div class="row">	
		<p class="col-sm-6">
			&copy; <b>MX Stuff4You</b>
		</p>

		<ul class="col-sm-6">
			
			<li class="col-sm-1">
				<a href="https://www.facebook.com/Official.KTM/" target="_blank">
					<img src="facebook.png">
				</a>
			<li class="col-sm-1">
				<a href="https://www.instagram.com/ktm_official/" target="_blank">
					<img src="instagram.png">
				</a>
			</li>
			<li class="col-sm-1">
			<a href="https://www.youtube.com/watch?v=i7RB6dBOfTU" target="_blank">
				<img src="youtube.png">
				</a>
			</li>
		</ul>
	</div>
</footer>

</body>
</html>
