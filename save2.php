<?php
include("dbconn.php");
if($_GET['submit'])
{
	 $SupplierName = $_GET['SupplierName'];
     $Company= $_GET['Company'];
     $Email = $_GET['Email']; 
     $Address= $_GET['Address']; 
     $Contact = $_GET['Contact']; 

	$query="update addsupplier set Company='$Company' , Email='$Email' , Address='$Address' , Contact='$Contact' where SupplierName='$SupplierName'";
	mysqli_query($con,$query);

	$resu=mysqli_affected_rows($con);
    
	
		header("location:update.php?c=$resu");
	}

	?>