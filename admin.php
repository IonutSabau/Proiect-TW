<?php
session_start();
/*if($_SESSION['username']==0){
	header("Location: pagina.html");
}*/
?>
<style>
body{
	background-image: url("contact.png");
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
width:600px;
height:50px;
background-color:#33bbff;
border-radius: 15px;
font: 12px/15px Arial, Helvetica, sans-serif;
font-size:10px;
text-align:center;
margin-top: 10px;
margin-bottom:20px;
margin-left: 170px;
text-shadow: 1px 1px 1px rgba(0, 0, 0, 0.26);
border-radius: 3px;
 padding: 20px;
 background: rgba(0, 0, 0, 0.6);
 color: #fff;
 font: 18px Arial, sans-serif;
}

#inventory{
width:600px;
height:50px;
background-color: #33bbff;
border-radius: 15px;
font-family: 'Gloria Hallelujah', 'Verdana', cursive;
font-size:40px;
text-align:center;
margin-top: 20px;
margin-bottom:20px;
margin-left: 170px;
text-shadow: 1px 1px 1px rgba(0, 0, 0, 0.26);
border-radius: 3px;
 padding: 20px;
 background: rgba(0, 0, 0, 0.6);
 color: #fff;
 font: 18px Arial, sans-serif;
}

p{
	color: #36842b;
}

/* LOGOUT BUTTON STARTS */
#logoutButton{
	background-color: #33bbff;
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
	background-color:#0088cc;
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
<title>Admin | Online Shop</title>
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
	<img src="mx.png" width="25%">
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
	<a href="PrimaPagina.html" target="_blank" style="text-decoration: none;">&nbsp;
	<img src="mx.png" width="25%"></a>
	</td>

	<td>
	<a href="PrimaPagina.html" target="_blank" style="text-decoration: none;">
	<p style="color:white"><b><strong><font size="+2">Vizitează site-ul</font></strong></b></p>
	</a>
	</td>

	<td>
	<a href="PrimaPagina.html" target="_blank" style="text-decoration: none;">&nbsp;
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
	<img src="mx.png" width="25%"></a>	
	</td>
	<td>
	<a href="inventory.php" style="text-decoration: none;">
	<p style="color:white"><strong><font size="+2">Inventarul</font></strong></p>
	</a>
	</td></tr>
	</table>
</div>
</td>

</tr>
</table>

</body>
</html>