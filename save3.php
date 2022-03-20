<?php
     $name= $_POST['unm'];
     
    //   echo "<pre>";
     //  print_r($_FILES['img']);
      $tmpPath = $_FILES['img']['tmp_name'];
      
     // print_r($tmpPath);
    //  echo "<hr/>";
      
       $fname = $_FILES['img']['name'];
      //  print_r($fname);
      //  echo "<hr>";
        
        $a = explode(".",$fname);
      //  print_r($a);
      //  echo "<hr/>";
        
         $text = $a[count($a)-1];
       //  print_r($text);
       //  echo "<hr>";
         
         $newName = time() . "." .  $text;
       //  print_r($newName);
      //   echo "<hr>";
         
         $uploadPath = "upload/$newName";
     //    print_r($uploadPath);
      //   echo"<hr/>";
         
         $c = move_uploaded_file($tmpPath,$uploadPath);
         
          if($c==1)
      {
          $con = mysqli_connect("localhost","root","root","medico");
          mysqli_query($con,"insert into upload values('$name','$uploadPath')");
         // echo "Save ...........";
        header("location:edit_profile.php");
      }
         
?>
