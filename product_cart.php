<html>
    <head>
        <title>Organic Vegetables</title>
        <link rel="stylesheet" type="text/css" href="style.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" />
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4Q6Gf2aSP4eDXB8Miphtr37CMZZQ5oXLH2yaXMJ2w8e2ZtHTl7GptT4jmndRuHDT" crossorigin="anonymous">

        <script src="Js/jquery.js"></script>
        <script src="Dashboard.js" type="text/javascript"></script>
    </head>

<?php 
require'registration_connection.php';
//vegetables data
$query="SELECT orders.Id,orders.Product_Id,orders.Name,orders.QTY,orders.Price,vegetables_product.Product_Id,vegetables_product.Image FROM orders,vegetables_product  WHERE orders.Product_Id=vegetables_product.Product_Id";
$data=mysqli_query($connect,$query);
    
 
    $datas=array();
    if(mysqli_num_rows($data)>0)
    {
       while($ans=mysqli_fetch_assoc($data))
       {
          
           $datas[]=$ans;
          
       }
    }
 foreach($data as $sol)
                    echo"
                    
                        <form action='product_remove.php' method='post'>
                        
                    
                        <div class='oranged'>
                            <input type='hidden' name='id' value=$sol[Id]>
                             <input type='hidden' name='pr_id' value=$sol[Product_Id]>
                             <input type='hidden' name='names' value=$sol[Name]> 
                             <input type='hidden' name='prices' value=$sol[Price]>
                             <img src='$sol[Image]' width='90' height='90'>
                           
                             <label>$sol[Name]</label>
                              
                            <label style='color:green'>&#8377 $sol[Price]</label><label style='font-family: Arial;'>&nbsp &nbsp;Per Kg</label><br>  <label style='font-size: larger; color:green'>Qty</label>
                                    <input type='text'class='form-control' style='width:40px' id='vqty' name='qty' value='$sol[QTY]'> <br><br>
                             <input type='submit' name='buy' value='Buy' class='btn btn-success'> 
                             <input type='submit' name='remove' value='Remove' class='btn btn-danger'> <br><br>

                             
                             </div>
                             
                
                        </form>
                    </div> ";?>
                    
                    
<?php
//fruits data
$sql="SELECT orders.Id,orders.Product_Id,orders.Name,orders.QTY,orders.Price,fruit_product.Product_Id,fruit_product.Image FROM orders,fruit_product  WHERE orders.Product_Id=fruit_product.Product_Id";
$fruit_data=mysqli_query($connect,$sql);
    
 
    $fruit_datas=array();
    if(mysqli_num_rows($fruit_data)>0)
    {
       while($fruit_ans=mysqli_fetch_assoc($fruit_data))
       {
          
           $fruit_datas[]=$fruit_ans;
          
       }
    }
 foreach($fruit_data as $soln)
                    echo"
                    
                        <form action='product_remove.php' method='post'>
                        
                    
                        <div class='oranged'>
                            <input type='hidden' name='id' value=$soln[Id]>
                             <input type='hidden' name='pr_id' value=$soln[Product_Id]>
                             <input type='hidden' name='names' value=$soln[Name]> 
                             <input type='hidden' name='prices' value=$soln[Price]>
                             <img src='$soln[Image]' width='90' height='90'>
                           
                             <label>$soln[Name]</label>
                            <label style='color:green'>&#8377 $soln[Price]</label><label style='font-family: Arial;'>&nbsp &nbsp;Per Kg</label><br> <label style='font-size: larger; color:green'>Qty</label>
                                <input type='text'class='form-control' style='width:40px' id='vqty' name='qty' value='$soln[QTY]'> <br><br>
                             
                            <input type='submit' name='buy' value='Buy' class='btn btn-success'> 
                             <input type='submit' name='remove' value='Remove' class='btn btn-danger'> <br><br>

                             
                             </div>
                             
                
                        </form>
                    </div> ";?>

</html>