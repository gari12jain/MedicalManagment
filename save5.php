<?php
include("dbconn.php");
if(isset($_POST['confirm']))
{
	
	$n=$_POST['name'];
	$f=$_POST['prod_name'];
	
     $d=$_POST['address'];
	$a=$_POST['email'];
$b=$_POST['cost'];
$m=$_POST['add_quantity'];
$g=$_POST['subtotal'];



$que="insert into order1(name,prod_name,address,email,cost,add_quantity,subtotal) values('$n','$f','$d','$a','$b','$m','$g')";

$data=mysqli_query($con,$que);

$number=mysqli_affected_rows($con);

if($number==1)
{
	
	echo "book successfully";
	header("location:billing.php?res=$number & rn=$n & cs=$f & er=$d & as=$a & yh=$b & mh=$m & jh=$g");
	
}
else 
{
	header("location:book.php?c=$number");
}

}

     

?>