<?php 
require_once"registration_connection.php";

if(isset($_POST['id']))
           {  

              $value=boolval(0);

                       $id=$_POST['id']; 
                
                $query="DELETE FROM `orders` WHERE Id=$id";
                $data=mysqli_query($connect,$query);
                 
          }
       else         
          {
          
             $value=boolval(1);
             
          }
 
       
       
    
    
    if($value==boolval(0))
    {
       echo"
    
       <script>
       alert('Succcessfully product is deleted');
       window.location= 'index.php';
       </script>
       ";
       
    }
    elseif($value==boolval(0))
    {
       echo"
       <script>
       
       alert('Wrong Id');
       </script>
       ";
 
    }


   echo"
    <script>
        window.location='product_cart.php';
    </script>
    ";

    ?>