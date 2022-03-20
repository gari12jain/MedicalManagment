<?php
 session_start();
 include("dbconn.php");

$_GET['rn'];
$_GET['cs'];
$_GET['er'];
$_GET['as'];
$_GET['yh'];
$_GET['mh'];
$_GET['jh'];

 ?>

<!DOCTYPE html>
<html>
<head>
	<title>MEDICAL STORE MANAGMENT SYSTEM</title>
	<style>
	body {
       margin: 0px;
       background-color: white;

	}
	.header {
		overflow: hidden; text-align: center; background: #fff; padding-top: 60px; padding-bottom: 40px;
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
nav a:hover {
    color: #888888; background: none;
}
#content {
	width:100%;
	padding:15px 0 50px;
	
	
}
.main {
	width:960px;
	padding:0;
	margin:-52px auto;
	font-size:13px;
	line-height:25px;
}
.wrapper {
	width:100%;
	overflow:hidden;
}
.col-2 {
	float:left;
}
.p1 {
	margin-bottom:15px;
	color:red;
}
#contact-form {
	display:block;
	width:100%;
	height:61%;
}
#contact-form label {
	display:block;
	height:40px;
	overflow:hidden;
	color: blue;
	padding:15px;
}
#contact-form input {
	float:left;
	width:232px;
	font-size:12px;
	line-height:1.25em;
	color:blue;
	padding:2px 10px;
	margin:0;
	font-family:Arial, Helvetica, sans-serif;
	border:1px solid #ededed;
	background:#fff;
	outline:none;
}
.text-form {
	float:left;
	display:block;
	line-height:20px;
	width:120px;
	font-size:15px;
}
.buttons {
	padding:10px 0 0 0;
	text-align:right;
}
.buttons a {
	margin-left:6px;
	padding:12px 35px;
}


    </style>
	</head>
	<body>
		<div class="header">
			<div class="site-name">
			<h1>MEDICAL STORE MANAGMENT SYSTEM</h1>
			 <h2>
			 
		     </div>
		      <br><br>
		      <center>
		     <div id="navbar">
			
				<a href="index.php" id="linkref">HOME</a>
				<a href="" id="linkref">VIEW</a>
				<a href="about.php" id="linkref">ABOUT US</a>
                <a href="profile.php" id="linkref">PROFILE</a>
				<a href="search.php" id="linkref">SEARCH</a>
				<a href="contact.php" id="linkref">CONTACT US</a>
				<a href="login.php" id="linkref">LOGOUT</a>
			
		     </div>

		      </center>
	    </div>

	    <div class="main">
    <div class="wrapper">
         	
         	<h3 class="p1">Bill</h3>
        <form id="contact-form" action="" method="GET" enctype="multipart/form-data">
          <fieldset onsubmit="return false" oninput="total.value= Math.round(Price.value * Stock.value);">
          	
		   <label><span class="text-form">Name:</span>
              <input name="name" type="text" value="<?php
			 echo $_GET['rn']; ?>"></label>
               <label><span class="text-form">Prod_name:</span>
              <input name="prod_name" type="text"  value="<?php echo $_GET['cs'];?>"></label>
            <label><span class="text-form">Address:</span>
              <input name="address" type="test" value="<?php echo $_GET['er'];?>" required />
            </label>
            <label><span class="text-form">Email:</span>
              <input name="email" type="email" value="<?php echo $_GET['as'];?>" required />
            </label>
             <label><span class="text-form">Cost:</span>
              <input name="cost" type="text" id="pri" value="<?php echo $_GET['yh'];?>" required /></label>
              <label><span class="text-form">Add_quantity:</span>
              <input name="add_quantity" type="text" value="<?php echo $_GET['mh'];?>" required/></label>
           
			  <label><span class="text-form">Subtotal:</span>
              <input name="subtotal" type="text"  value="<?php echo $_GET['jh'];?>" required/>
            </label>

         	 <a href="login.php"><input type="submit" name="ok" value="ok"></a>
              </div>
         </div>
     </fieldset>
 </form>
</div>
</div>