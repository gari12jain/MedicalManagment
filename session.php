<?php
include('dbconn.php');
session_start();

$user_check=$_SESSION['login_user'];

$query="select name from user where name='$user_check'";
$res_sql=mysqli_query($con,$query);
$row=mysqli_fetch_assoc($res_sql);
$login_session=$row['$name'];

if(!isset($login_session)){

	
	header("location:viewprofile.php");
}

?>