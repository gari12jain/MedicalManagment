<?php
include("dbconn.php");
if(isset($_GET['del']))
{
	$name=$_GET['del'];
	
	$delete="delete from customer where name='".$name."'";
	$res=mysqli_query($con,$delete);
	$c=mysqli_affected_rows($con);
     header("location:manage_user.php?res=$c");
	}
?>