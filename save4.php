<?php
include("dbconn.php");
if($_GET['submit'])
{
	 $ProductName=$_GET['ProductName'];
	 $SupplierName = $_GET['SupplierName'];
     $Price= $_GET['Price'];
     $Stock = $_GET['Stock']; 
     $total= $_GET['total']; 
    
	$prodquery="update product set ProductName='$ProductName' , Price='$Price' , Stock='$Stock' , total='$total' where SupplierName='$SupplierName'";
	mysqli_query($con,$prodquery);

	$garima=mysqli_affected_rows($con);
    
	
		header("location:Product_list.php?f=$garima");
	}

	?>