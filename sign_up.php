<?php
session_start();
error_reporting(0);
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
	
	
	background:#fff;
	
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
			<h1>WELCOME TO MEDICAL STORE MANAGMENT SYSTEM</h1>
			 <h2>Here to Sign_up</h2>
		</div>
		
		<div id="navbar">
			
				<a href="#" id="linkref">HOME</a>
				<a href="#" id="linkref">VIEW</a>
				<a href="#" id="linkref">ABOUT US</a>
				
				<a href="#" id="linkref">CONTACT US</a>
				<a href="login.php" id="linkref">LOGOUT</a>
			
		</div>
		 <section id="content">
  <div class="main">
    <div class="wrapper">
         	
         	<h3 class="p1">SIGN UP</h3>
        <form id="contact-form"  method="post">
          <fieldset>
          	
		   <label><span class="text-form" >Name:</span>
              <input name="name" type="text" required /></label>
            <label><span class="text-form">Address:</span>
              <input name="address" type="text" required />
            </label>
            <label><span class="text-form">Email:</span>
              <input name="email" type="email" required /></label>
			  <label><span class="text-form">Password:</span>
              <input name="password" type="password" required />
            </label>
             <label><span class="text-form">Phone_no:</span>
              <input name="mobile" type="number" required />
            </label>

         	 <input type="submit" name="signup" value="signup">
              </div>
         </div>

        
         
        
      
	</body>
	</html>

	<?php
	include('dbconn.php');
	if(isset($_POST['signup']))
{
	
	$n=$_POST['name'];
     $d=$_POST['address'];
	$a=$_POST['email'];
$b=$_POST['password'];
$m=$_POST['mobile'];

echo $n;
echo $d;
echo $a;
echo $b;
echo $m;

$que="insert into customer(name,address,email,password,phone_no) values('$n','$d','$a','$b','$m')";

$data=mysqli_query($con,$que);


$number=mysqli_affected_rows($con);

if($number==1)
{
	
	echo"sign_up successfully";
	header("location:login.php?res=$number");
	
}
else 
{
	
		echo"filled password";
		header("location:sign_up.php?r=$number");
	
}

}

     

?>