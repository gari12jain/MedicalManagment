<?php
  $con  = mysqli_connect("localhost","root","root","medico") or die("<h1>Connection Problem </h1>"); 
 if(isset($_GET['del']))
{
	$SupplierName=$_GET['del'];
	
	$query = "delete from addsupplier where SupplierName = '$SupplierName'";
	$res = mysqli_query($con, $query);
	$c = mysqli_affected_rows($con);
	
		header("location:update.php?res=$c");
	
     
}

?>
