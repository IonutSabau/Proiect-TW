<?php
session_start();
include_once("config.php");


//current URL of the Page. cart_update.php redirects back to this URL
$current_url = urlencode($url="http://".$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI']);
?>
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
<!DOCTYPE html>
<html>
<head>
	<title>Adaugă Produs</title>
	<link rel="shortcut icon" href="ms.png" sizes="32x32">
	<!--BOOTSTRAP-->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css"/>

	<style type="text/css">
		body{
			margin: 0;	
			background-image: url("imagi.jpg");
		}
		#logo{
			padding-top: 0.7%;						
			width: 30%;
			height: 62px;
			float: left;	
			position: fixed;		
		}
		#addForm{
			padding-top: 10px;
			padding-left: 30px;
		}
	</style>
	
</head>

<body style="background-color:;">

<div id="logo">
	<a href="admin.php">
		<img src="mx.png" width="25%">
	</a>
</div>

<div id="navbar">
	<ul>
		
		<li><a class="active" href="add_product.php">Add Product</a></li>
		<li><a href="inventory.php">Inventory</a></li>
	</ul>
</div>



<div id="register">
<form name="productForm" method="post" action="add.php">
<table width="45%"> 
<tr>
	<td>&nbsp;</td>
	<td>&nbsp;</td>
	<td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
</tr>
<tr>
	<td style="color:white">
		<label>Product Code &nbsp;&nbsp;</label>	
	</td>
	<td colspan="2">
		<input type="text" name="product_code" required>
	</td>
</tr>

<tr>
	<td style="color:white">
		<label>Fandom &nbsp;&nbsp;</label>	
	</td>
	<td colspan="2">
		<input type="text" name="fandom" required>
	</td>
</tr>

<tr>
	<td style="color:white">
		<label>Category &nbsp;&nbsp;</label>	
	</td>
	<td colspan="2">
		<input type="text" name="category" required>
	</td>
</tr>


<tr>
	<td style="color:white">
		<label>Product Name &nbsp;&nbsp;</label>	
	</td>
	<td colspan="2">
		<input type="text" name="product_name" required>
	</td>
</tr>

<tr>
	<td style="color:white">
		<label>Price &nbsp;&nbsp;</label>	
	</td>
	<td colspan="2">
		<input type="text" name="price" required>
	</td>
</tr>

<tr>
	<td style="color:white">
		<label>Quantity &nbsp;&nbsp;</label>	
	</td>
	<td colspan="2">
		<input type="text" name="product_qty" required>
	</td>
</tr>
<tr>
	<td colspan="3">&nbsp;</td>
</tr>


<tr>
<td>&nbsp;</td>
<td>
	<input type="submit" name="addproduct" value="Add Product" class="click">
</td>
<td>&nbsp;</td>
</tr>

</table>
</form>
</div>


</section>
</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@8"></script>
<script type="text/javascript">
	$(function(){
		$('#register').click(function(e){
			var valid = this.form.checkValidity();
			if(valid){
			var procut_code	= $('#product_code').val();
			var fandom = $('#fandom').val();
			var  category= $('#category').val();
			var product_name = $('#product_name').val();
			var price = $('#price').val();
			var product_qty=$('#product_qty').val();

			
				e.preventDefault();	
				$.ajax({
					type: 'POST',
					url: 'add.php',
					data: {product_code: product_code,fandom: fandom,category: category, product_name: product_name, price:price,product_qty: product_qty},
					success: function(data){
					Swal.fire({
								'title': 'Succes',
								'text': 'YEEEY',
								'type': 'succes'
								})
							
					},
					error: function(data){
						Swal.fire({
								'title': 'Errors',
								'text': 'Au aparut niste erori la salvarea datelor.',
								'type': 'error'
								})
					}
				});
				
			}else{
				
			}
			
		});		
		
	});
	
</script>
</body>
</html>