<style>
	body{
	background-image: url("imagi.jpg");
	background-attachment: fixed;
	background-size: cover;
	color: white;	
}

h1 {
	color: #005c99;
	font-family: 'Bree Serif',"Lucida Console", 'serif';
	padding-bottom: 0px;
	padding-top: 1em;
	font-size: 3em;
	text-shadow: 3px 3px 3px blue;
}


#login{
	padding-top: 3em;
	padding-left: 12em;
	float: left;
}

#signup{
	padding-top: 3em;
	padding-right: 8em;
	float: right;
}

/*
.signin{
	padding: 3em;
	float: bottom;
}
*/

input { 
	width: 100%; 
	margin-bottom: 10px; 
	background: rgba(0,0,0,0.3);
	border: none;
	outline: none;
	padding: 10px;
	font-size: 13px;
	color: #005c99;
	text-shadow: 1px 1px 1px rgba(0,0,0,0.3);
	border: 1px solid rgba(0,0,0,0.3);
	border-radius: 4px;
}

.click{
	border: 1px solid #005c99;
	background-color: blue;
}

.header-icon
{
	margin-top: 5vh;
	size: 20vh;
}

#sidebar ul {    
    margin: 0;
    padding: 0;
    width: 14%;    
    position: fixed;
    height: 100%;    
    font-size: 15px;
    margin-top: 5%;
}

#sidebar li {
    display: block;
    color: #005c99;
    padding: 8px 8px;
    text-decoration: none;
}

#sidebar li a {
    display: block;
    color: #005c99;
    padding: 8px 0px;
    text-decoration: none;
}



#sidebar li a.active {
    background-color: #005c99;
    color: white;
}

#sidebar li a:hover:not(.active) {
  
    background-color:#005c99;
    color: white;
}

#navbar ul {
    list-style-type: none;
    margin: 0;
    padding: 0;
    overflow: hidden;
    background-color: #0099ff;   
    margin-left: 14.3%;
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
    background-color: #005c99;
}

#navbar li a.active {
    background-color:#005c99;
}
.content{
	margin-left: 13%;
	margin-top: 2%;	
	
}

.box img{
	width: 350px;
    height:300px;
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
	margin-top: 1.5%;
    
}

.box{
	border-style: solid;
	border-color: #00cc99;
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
	color:  #005c99;
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
	-moz-box-shadow: 0px 0px 8px 2px #3dc21b;
	-webkit-box-shadow: 0px 0px 8px 2px #3dc21b;
	box-shadow: 0px 0px 8px 2px #3dc21b;
	background-color:#44c767;
	-moz-border-radius:28px;
	-webkit-border-radius:28px;
	border-radius:28px;
	border:1px solid #18ab29;
	display:inline-block;
	cursor:pointer;
	color:#ffffff;
	font-family:Trebuchet MS;
	font-size:17px;
	padding:3px 0px;
	text-decoration:none;
	text-shadow:0px 1px 0px #2f6627;
	margin-bottom:10px;
	width: 35%;
}


#myButton:hover {
	background-color:#5cbf2a;
	position:relative;
	top:5px;
}

/* ADD TO CART BUTTON ENDS */
	</style>

<?php
session_start();
include_once("config.php");
//current URL of the Page. cart_update.php redirects back to this URL
$current_url = urlencode($url="http://".$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI']);
?>

<html>
<head>
	<title>Inventar | Online Shopping</title>
	<link rel="icon" href="mx.png" sizes="25x25">

	<!--BOOTSTRAP-->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css"/>

	<style type="text/css">
		
		#logo{
			padding-top: 0.7%;						
			width: 30%;
			height: 62px;
			float: left;	
			position: fixed;		
		}
		td{
			padding: 5px;
		}

		th{
			padding: 5px;
			font-size: 20px;
			text-align: center;
		}


	</style>
	
</head>

<body style="background-color:;">

<div id="logo">
	<a href="admin.php">
		<img src="mx.png" width="25%">
	</a>
</div>

<div id="sidebar">
	<ul>
				
		<li>
			<a href="logout.php"> 
			<table><tr><td><img src="ul.jpg" width="30"/></td>
			<td style="color:white">Logout</td></tr></table></a>
		</li>

		<li>&nbsp;</li>
		
	</ul>
</div>

<div id="navbar">
	<ul>
		<li><a class="active" href="inventory.php">Inventar</a></li>
		<li><a href="add_product.php">Adaugă produs</a></li>
	</ul>
</div>


<!-- BACK TO TOP-->
<a href="#" class="back-to-top">Back To Top </a>

<!--CONTENT-->

<div class="content">
	<section class="container">

	<?php
	function createConnectionn2() 
	{
		$db_user = "root";
		$serverName = "localhost";
		$db_pass = '';
		$db_name = "users";
		
		$con= mysqli_connect($serverName, $db_user, $db_pass, $db_name);
		
		if( $con->connect_error ) {
			die("Connection failed: " . $con->connect_error);
		}
		
		return $con;
	}
	if(isset($_POST))
	{
		$con1 = createConnectionn2();
		$results = $con1->query("SELECT * FROM produse");
if($results)
{ 
$products_item = '<table border="1" bordercolor="white" style="color:white;"><th>Product Code</th><th>Category</th><th>Product Name</th><th>Price</th><th>Product Quantity</th>';//fetch results set as object and output HTML
while($obj = $results->fetch_object())
{

	$products_item .= <<<EOT
	<tr>
    <td><p align="center">{$obj->product_code}</p></td>
	<td><p align="center">{$obj->category}</p></td>
	<td><p align="center">{$obj->product_name}</p></td>
    <td><p align="center">{$currency}{$obj->price}</p></td>
	<td><p align="center">{$obj->product_qty}</p></td>
	<form method = "post" , action="delete.php">
	<td><p align="center"><button class="btn btn-primary" name="product_code" type="submit" value ="$obj->product_code">Delete</button>
	</form></p></td>
	<form method = "post" , action="modify_product.php">	 
	<td><p align="center"><button class="btn btn-primary" name="product_code" type="submit" value ="$obj->product_code">Modifica</button>
	</form></p></td>						
	</tr>
	
		
EOT;
}
$products_item .= '</table>';
echo $products_item;
$con1->close();
}
}

?>    
</div>




</section>
</div>






</body>
</html>
</html>