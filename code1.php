<?php

      $mydata= $_GET['data'];
      $qu = "select * from product where ProductName LIKE '$mydata%'";
       $con = mysqli_connect("localhost","root","root","medico");
        
        $rs = mysqli_query($con,$qu);
        
        $count=mysqli_affected_rows($con);
       if($count==0)
       {
                echo $count;
        }
        else
        {
            $data = "<tr>
                                <th>ProductName</th>
                                <th>SupplierName</th>         
                                <th>Price</th>
                                <th>Stock</th>
                                <th>total</th>

                                </tr>";  
                          while($arr=mysqli_fetch_assoc($rs))            
                          {
                                $ProductName= $arr['ProductName'];
                                $SupplierName= $arr['SupplierName'];
                                $Price= $arr['Price'];
                                $Stock= $arr['Stock'];
                                $total= $arr['total'];                                                                
                                 $data = $data . "<tr>
                                <td>$ProductName</td>
                                <td>$SupplierName</td>
                                <td>$Price</td>  
                                 <td>$Stock</td>                                                                
                                  <td>$total</td>  
                                </tr>";  
                          }
                          echo $data;
        }        
?>
