
 <?php
     $con  = mysqli_connect("localhost","root","root","medico") or die("<h1>Connection Problem </h1>"); 
     
     
    function addUser($arr)
     {
         global $con;
                     $SupplierName = $arr['SupplierName'];
                      $Company= $arr['Company'];
                      $Email = $arr['Email']; 
                       $Address= $arr['Address']; 
                        $Contact = $arr['Contact']; 
        $sql = "Insert into addsupplier(SupplierName,Company,Email,Address,Contact) values('$SupplierName','$Company','$Email','$Address','$Contact')";
        mysqli_query($con,$sql);
       $res = mysqli_affected_rows($con);
       
        return $res;
     }

     function addProduct($ar)
     {
         global $con;
                      $ProductName= $ar['ProductName'];
                     $SupplierName = $ar['SupplierName'];
                      
                      $Price = $ar['Price']; 
                       $Stock= $ar['Stock']; 
                        $total = $ar['total']; 
                         $image=$ar['image'];
        $sq = "Insert into product(ProductName,SupplierName,Price,Stock,total,image) values('$ProductName','$SupplierName','$Price','$Stock','$total','$uploadPath')";
        mysqli_query($con,$sq);
       $result = mysqli_affected_rows($con);
       
        return $result;
     }

     function getUser()
     {
           global $con;    
           $qu = "select * from addsupplier";              
           $rs = mysqli_query($con,$qu);
           return $rs; 
     }
     function getUser1()
     {
           global $con;    
           $query = "select * from customer";              
           $rsu = mysqli_query($con,$query);
           return $rsu; 
     }
 
	function getProduct()
     {
           global $con;    
           $pquery = "select * from product";              
           $ans = mysqli_query($con,$pquery);
           return $ans; 
     }
	  function getOrder1()
    {
      global $con;
      $oquery="select * from order1";
      $ord=mysqli_query($con, $oquery);
      return $ord;
    }
	  
	 ?>
	 
