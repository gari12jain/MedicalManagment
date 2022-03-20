<?php
    include("dbconn.php");
    
   $res = addUser($_POST);
   if($res>0)
   {
      echo "Connection Done";
   }
   else
   {
      echo "connection failed...";
   }
   
   header("location:Supp_list.php?$c=$res");
?>