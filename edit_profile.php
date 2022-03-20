<?php
          $con = mysqli_connect("localhost","root","root","medico");
        $result =mysqli_query($con,"select * from upload");
/*$arr=mysqli_fetch_assoc($result);
print_r($arr);*/
?>
<html>
<style>
        .img{
                height:100px;
                width:100px;
                border-radius:20px;
        }
</style>
<body>
                <form action="save3.php" method="post" enctype="multipart/form-data">
                
                <input type="text" name="unm" placeholder="Name"/>
                <br>
                <input type="file" name="img"/>
                <br>
                <input type="submit" value="Save User">
                
                </form>
                
                <hr/>
                
             <center> <h1>All User</h1></center>
                <table align="center" cellpadding="20" cellspacing="20">
                          <tr>
                                <th>Name</th>
                                <th>Pic</th>                                
                          </tr>   
                          <?php
                                while($arr=mysqli_fetch_assoc($result)):
                          ?>   
                          <tr>
                                <th><?php echo $arr['name'];?></th>
                                <th><img class="img" src="<?php echo $arr['img'];?>"></th>                                
                          </tr>  
                          <?php endwhile; ?>
                          
                </table>
                      
      </body>
   </html>             
