<?php
include("dbconn.php");
$ord=getOrder1();
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
	 margin-bottom: 52px;
	 height: 40px;
	 line-height: 52px;
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
.container {
  margin: 50px auto;
  width: 640px;
  text-align: center;
  padding-right: 15px;
  padding-left: 15px;
  margin-right: auto;
  margin-left: auto;
}
.row {
  margin-right: -15px;
  margin-left: -15px;
}
.copy-rights{color: #34b091;font-family: 'source_sans_proregular'; background: #454855; padding: 35px 0;}
.copy-rights a{color: #34b091;font-size: 14px; font-family: 'source_sans_proregular'; text-decoration: none;}
.copy-rights a:hover{color: #fff;}

.col-mad-6
{
  position: relative;
  min-height: 1px;
  padding-right: 15px;
  padding-left: 15px;
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
			<h1>MEDICAL STORE MANAGMENT SYSTEM</h1>
			 
		</div>
		<br><br>
		<div id="navbar">
			    <a href="index.php" id="linkref">Home</a>
				<a href="admin.php" id="linkref">Add Supplier</a>
				<a href="Supp_list.php" id="linkref">Supplier list</a>
				<a href="add_product.php" id="linkref">Add Product</a>
				<a href="order_history.php" id="linkref">Order History</a>
				<a href="manage_user.php" id="linkref">Manage User</a>
				
				
				<a href="logout.php" id="linkref">Log Out</a>
		
				
			</div>
			
			<form id="contact-form"   method="post" enctype="multipart/form-data">
         <div class="m">
          
        <table border="4" cellspacing="10" cellpadding="10";>
         <thead>
            <th>Name</th>
            <th>Prod_name</th>
            <th>Address</th>
            <th>Email</th>
            <th>Cost</th>
            <th>Quantity</th>
			<th>Total</th>
			
            
         </thead>
         <?php
                while($arr=mysqli_fetch_assoc($ord))
                {
                      $name = $arr['name'];
                      $ProductName=$arr['prod_name'];
                      $address= $arr['address']; 
                      $email = $arr['email']; 
                      $cost= $arr['cost'];
                        $add_quantity = $arr['add_quantity']; 
                        $subtotal=$arr['subtotal'];
               ?>
         
                <tr> 
                   <td><?php echo $name;?></td>
                   <td><?php echo $ProductName; ?></td>
                   <td><?php echo $address;?></td>

                   <td><?php echo $email;?></td>
                   <td><?php echo $cost;?></td>
                   <td><?php echo $add_quantity;?></td>
                   <td><?php echo $subtotal; ?>
                   
               </tr>
          <?php
                }
                ?>
     </table>
	 </div>
              </div>
            </div>	
          
        </form>
      </article>
    </div>
  </div>