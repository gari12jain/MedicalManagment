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
	.product_gallary{
		
		display:block;
		margin-left: 25%;
		margin-top: 0%;
		list-style: none;
		width:100%;
	}
	.product_gallary li {
		float:left;
		width:200px;
		margin-right: 50px;
		border:1 px solid #999;
	}
    .product_gallary li img {
    	width: 200px;
    	height: 200px;
    }	
    .product_description
    {
    	background:white;
    	
    	width:200px;
    	height:200px;
    }

    .product_information {
    	height:30px;
    	background:blue;
    	width:100%;
    	float:left;
    }
    .product_information h4{
    	float:left;
    	color:white;
    	width:70%;
    	margin: 10px;
    }
    .product_information span {
    	float:right;
    	color:black;
    	margin: 2px;
    	font-size: 15px;
    }
   .buy_now {
   background: blue;
   color:white;
   width: 100px;
   font-size: 20px;
   font-weight: bold;
   text-align: center;
   text-decoration: none;
   float: center;
   height: 20px;
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
			 echo "welcome"." ".$_SESSION['name']; 
			
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
			<h3>ALL CATEGORY</h3>
			<ul id="menu1">
				<li><a href="viewprofile.php">Medicines</a></li>
				<li><a href="anti.php">Antisecptics</a></li>
				<li><a href="baby.php">Baby Products</a></li>
				<li><a href="body.php">Body Lotion</a></li>
				<li><a href="daily.php">Daily Products</a></li>
				<li><a href="#" class="active">Shampoo</a></li>
				<li><a href="personalcare.php">PersonalCare</a></li>
				
			</ul>
		</nav>
        <div id="">
            <center>
            <input type="text" name="text">
            <input type="button" name="search" value="SEARCH">
        </center>
        </div>
		<div id="fo">
			
			<ul class="product_gallary">
				<li>
                 <img src="images/budecort-400-rotacap.jpg"/>
                 <div class="product_information">
                 	<h4>Budecort</h4>
                 	<span>Rs.70</span>
                 </div>
                 <div class="product_description">
                 	<p>This is used for the treatment of asthama.This is of highly reactive medicine.</p>
                 	<a href='book.php' class="buy_now">Buy now</a>
                 </div>
				</li>

				<li>
                 <img src="images/crosin.jpg"/>
                 <div class="product_information">
                 	<h4>Crocin</h4>
                 	<span>Rs.40</span>
                 </div>
                 <div class="product_description">
                 	<p>This is used for the treatment of asthama.This is of highly reactive medicine.</p>
                 	<a href='book.php class="buy_now">Buy now</a>
                 </div>
				</li>


				<li>
                 <img src="images/lanol.jpg"/>
                 <div class="product_information">
                 	<h4>Lanol</h4>
                 	<span>Rs.35</span>
                 </div>
                 <div class="product_description">
                 	<p>This is used for the treatment of asthama.This is of highly reactive medicine.</p>
                 	<a href='book.php?rn=$arr[id]' class="buy_now">Buy now</a>
                 </div>
				</li>


				<li>
                 <img src="images/calpol.jpg"/>
                 <div class="product_information">
                 	<h4>Calpol</h4>
                 	<span>Rs.10</span>
                 </div>
                 <div class="product_description">
                 	<p>This is used for the treatment of asthama.This is of highly reactive medicine.</p>
                 	<a href='book.php?rn=$arr[id]' class="buy_now">Buy now</a>
                 </div>
				</li>



				<li>
                 <img src="images/odizox.jpg"/>
                 <div class="product_information">
                 	<h4>Odizox</h4>
                 	<span>Rs.120</span>
                 </div>
                 <div class="product_description">
                 	<p>This is used for the treatment of asthama.This is of highly reactive medicine.</p>
                 	<a href='book.php?rn=$arr[id]' class="buy_now">Buy now</a>
                 </div>
				</li>


				<li>
                 <img src="images/e.jpg"/>
                 <div class="product_information">
                 	<h4>Rubesee-D</h4>
                 	<span>Rs.70</span>
                 </div>
                 <div class="product_description">
                 	<p>This is used for the treatment of asthama.This is of highly reactive medicine.</p>
                 	<a href='book.php?rn=$arr[id]' class="buy_now">Buy now</a>
                 </div>
				</li>



				<li>
                 <img src="images/paracetamol.jpg"/>
                 <div class="product_information">
                 	<h4>Paracetamol</h4>
                 	<span>Rs.70</span>
                 </div>
                 <div class="product_description">
                 	<p>This is used for the treatment of asthama.This is of highly reactive medicine.</p>
                 	<a href='book.php?rn=$arr[id]' class="buy_now">Buy now</a>
                 </div>
				</li>

				<li>
                 <img src="images/cepixime.jpg"/>
                 <div class="product_information">
                 	<h4>Cepixime</h4>
                 	<span>Rs.70</span>
                 </div>
                 <div class="product_description">
                 	<p>This is used for the treatment of asthama.This is of highly reactive medicine.</p>
                 	<a href='book.php?rn=$arr[id]' class="buy_now">Buy now</a>
                 </div>
				</li>


				<li>
                 <img src="images/nimucil.jpg"/>
                 <div class="product_information">
                 	<h4> Nimuceil</h4>
                 	<span>Rs.70</span>
                 </div>
                 <div class="product_description">
                 	<p>This is used for the treatment of asthama.This is of highly reactive medicine.</p>
                 	<a href='book.php?rn=$arr[id]' class="buy_now">Buy now</a>
                 </div>
				</li>
				
         </ul>
				
				
				              
        
	</body>
	</html>