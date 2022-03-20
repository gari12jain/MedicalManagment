<?php
    
    
 
   $ProdName= $_POST['ProductName'];
    $tmpPath = $_FILES['image']['tmp_name'];
     $fname = $_FILES['image']['ProdName'];
     $a = explode(".",$fname);
       $text = $a[count($a)-1];
        $newName = time() . "." .  $text;
         $uploadPath = "upload/$newName";
         $c = move_uploaded_file($tmpPath,$uploadPath);
        
         
include("dbconn.php");
  $result = addProduct($_POST);
 if($result>0)
   {
      echo "Connection Done";
          // echo "Save ...........";
   }
   else
   {
      echo "connection failed...";
   }
   
   header("location:Product_list.php?$c=$result");

?>