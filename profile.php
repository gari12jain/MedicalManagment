<?php
 session_start();
 include("dbconn.php");

 ?>

<!DOCTYPE html>
<html>
<head>
	<title>MEDICAL STORE MANAGMENT SYSTEM</title>
	<style>
	body {
       margin: 0;
       background-color: white;

	}
	.header {
		overflow: hidden; text-align: center; background: #fff; padding-top: 46px; 
	}
	.site-name{display: inline-block;}
.site-name h1{margin: 0; font-size: 44px; color: #34b091; font-family: 'source_sans_probold'; text-transform: uppercase; letter-spacing: 2px;}
.site-name h2{font-size: 18px; line-height: 24px; color: #cac8c8; font-family: 'source_sans_prolight';}

#navbar {
	width: 100%;
	overflow: auto;
	background-color: #34b091; 
	display: inline-block;
	 margin-bottom: 50px;
	 height: 52px;
	 line-height: 50px;
}
#linkref
{
	color:white;
	text-decoration: none;
	padding: 15px 0px; 
	padding-right: 40px;
	margin-top: 5px;
	font-size: 16px;
}

nav , footer
{
	box-sizing: border-box;
}
nav
{
	width:20%;
	background: #FFF;
	box-shadow: 0 1px 2px #ccc;
	height : 60px;
}
#new {
	display: block;
	background: #34b091;
	padding: 5px;
	text-align: center;
	text-decoration : none;
	font-weight: 500;
}
ul#menu1
{
	text-align: left;
	list-style-type: none;
	padding: 0;
	margin: 30px 0; 
	text-decoration : none;
	color:pink;
}
ul#menu1 li{
      display: block;
}
    ul#menu1 li  a{
      	display: block;
      	padding: 10px 0;
      	text-decoration: none;
      	color: red;
      	padding-left: 20px;
      }
	img {
		width:200px;
		height:200px;
		margin-left: 0;


	}
	h1 {
	  padding: 5px;
	text-align: center;
		color: red;
	font-family:source_sans_prolight;
	}
	
   #fo
   {
    margin-top: 32px;

   }


    </style>
	</head>
	<body>
		<div class="header">
			<div class="site-name">
			<h1>MEDICAL STORE MANAGMENT SYSTEM</h1>
			 <h2>
			 <?php
			 echo "hello"." ".$_SESSION['name']; 
			
			?>!!!</h2>
		     </div>
		      <center>
		     <div id="navbar">
			
				<a href="index.php" id="linkref">HOME</a>
				<a href="" id="linkref">VIEW</a>
				<a href="about.php" id="linkref">ABOUT US</a>
                <a href="profile.php" id="linkref">PROFILE</a>
				
				<a href="contact.php" id="linkref">CONTACT US</a>
				<a href="login.php" id="linkref">LOGOUT</a>
			
		     </div>

		      </center>
	    </div>
	    <nav id="new">
			<h3><a href="edit_profile.php">EDIT PROFILE</a></h3>
			<ul id="menu1">
				 <img src="images/budecort-400-rotacap.jpg"/>
				 <br><h1>
			 <?php
			 echo ""." ".$_SESSION['name']; 
			
			?></h1>