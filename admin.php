<?php
session_start();
/*if($_SESSION['username']==0){
	header("Location: pagina.html");
}*/
?>
<style>
body{
	background-image: url("roz.jpg");
	background-attachment: fixed;
	background-size: cover;
	color: white;	
}

#header{
position: relative;
top: 0px;
font-family:'Bree Serif','Agency FB';
font-size: 60px;
padding-left: 30%;
}

#website{
width:800px;
height:150px;
background-color: #ffc0cb;
border-radius: 15px;
font-family: 'Gloria Hallelujah', 'Verdana', cursive;
font-size:40px;
text-align:center;
margin-top: 20px;
margin-bottom:20px;
margin-left: 170px;
opacity: 0.9;
}

#inventory{
width:800px;
height:150px;
background-color: #00bfff;
border-radius: 15px;
font-family: 'Gloria Hallelujah', 'Verdana', cursive;
font-size:40px;
text-align:center;
margin-top: 20px;
margin-bottom:20px;
margin-left: 170px;
opacity: 0.9;
}

p{
	color: #36842b;
}

/* LOGOUT BUTTON STARTS */
#logoutButton{
	background-color: #00CC99;
	min-width: 100px;
	border: none;
	padding: 10px;
	display: inline-block;
	text-align: center;
	cursor: pointer;
	text-decoration: none;
	color: #FFF;
	min-height: 15px;
	font: 12px/15px Arial, Helvetica, sans-serif;
	text-shadow: 1px 1px 1px rgba(0, 0, 0, 0.26);
	border-radius: 3px;
}
#logoutButton:hover{
	background-color:#44c767;
	position:relative;
	top:5px;
}

/* LOGOUT BUTTON ENDS */
</style>
<!DOCTYPE html>
<html>
<head>
<link rel="shortcut icon" href="makeup.png" sizes="32x32">
<link href="https://fonts.googleapis.com/css?family=Bree+Serif" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Gloria+Hallelujah" rel="stylesheet">
<title>Admin | Make-up Shop</title>
<style type="text/css">
		#logo{			
			width: 20.1%;
			float: left;
		}
		body{
			margin-top: 3em;
			margin-left: 3em;
		}
	</style>
</head>
<body bgcolor=black>
<div id="logo">
	<img src="makeup.png" width="25%">
</div>

<div id=login style="float: right;">
	<a href="logout.php"><span id="logoutButton">Log Out</span></a><br><br>
</div>
<br>

<div id="header" style="color:black;"> <strong>Selectează opțiunea dorită</strong> </div>

<table cellspacing="30px" cellpadding="5px">
<tr>
<td>
<div id="website">
	<table>
	<tr>
	<td>
	<a href="FirstPage.html" target="_blank" style="text-decoration: none;">&nbsp;
	<img src="makeup.png" width="25%"></a>
	</td>

	<td>
	<a href="FirstPage.html" target="_blank" style="text-decoration: none;">
	<p><strong>&nbsp;&nbsp;&nbsp;&nbsp;Vizitează site-ul</strong></p>
	</a>
	</td>

	<td>
	<a href="FirstPage.html" target="_blank" style="text-decoration: none;">&nbsp;
	</td>


	</tr>
	</table>
</div>
</td>
</tr>

<tr>
<td>
<div id="inventory">
	<table>
	<tr>
	<td>
	<a href="inventory.php" style="text-decoration: none;">&nbsp;
	<img src="body3.jpg" width="15%"></a>	
	</td>
	<td>
	<a href="inventory.php" style="text-decoration: none;">
	<p><strong>Inventarul</strong></p>
	</a>
	</td></tr>
	</table>
</div>
</td>

</tr>
</table>

</body>
</html>