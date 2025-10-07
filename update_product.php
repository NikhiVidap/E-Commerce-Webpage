<?php 
require_once"registration_connection.php";


    
    
    // $img_data=file_get_contents($_FILES['images']['name']);
    echo"
  



              <form action='update_product.php' method='post' role='form'>
            <label class='mt-4'>Product Id</label>
    <input type='text' name='pr_id' class='form-control w-25' required>
             <select class='form-control w-25' name='category' id='category' required>
     <option>Select Option</option>
        <option value='fruits'>Fruits</option>
        <option  value='vegetables'>Vegetables</option>
     </select>
              <input type='submit' value='Get Product'  name='get' class='btn btn-primary mt-3'>
              
              </form>";
            if(isset($_POST['get']))
            {
        $pr_id=$_POST['pr_id'];
        $category=$_POST['category'];
        if($category==="fruits")
        {

$sql="SELECT * FROM `fruit_product` WHERE fruit_product.Product_Id=$pr_id";
    $data=mysqli_query($connect,$sql);
    $datas=array();
    if(mysqli_num_rows($data)>0)
    {
       while($ans=mysqli_fetch_assoc($data))
       {
          
           $datas[]=$ans;
          
       }
    }
        }
        else if($category==="vegetables"){
        $sql="SELECT * FROM `vegetables_product` WHERE vegetables_product.Product_Id=$pr_id";
    $data=mysqli_query($connect,$sql);
    $datas=array();
    if(mysqli_num_rows($data)>0)
    {
       while($ans=mysqli_fetch_assoc($data))
       {
          
           $datas[]=$ans;
          
       }
    }
        }


            }

echo"
<html>
    <head>
        <title>Organic Vegetables</title>
        <link rel='stylesheet' type='text/css' href='style.css'>
        <link rel='styleshee' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css' />
        <link href='https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/css/bootstrap.min.css' rel='stylesheet' integrity='sha384-4Q6Gf2aSP4eDXB8Miphtr37CMZZQ5oXLH2yaXMJ2w8e2ZtHTl7GptT4jmndRuHDT' crossorigin='anonymous'>

        <script src='Js/jquery.js'></script>
        <script src='Dashboard.js' type='text/javascript'></script>
    </head>
    <body>";
         
          foreach($data as $sol)
         {
                    
          echo"   
        <form action='update_product.php' role='form' method='post' enctype='multipart/form-data' autocomplete='on'>
 <div class='form-group d-flex flex-column'>
    <label class='mt-3'>Product Id</label>
                <input type='hidden' name='id' class='form-control w-25'value=$sol[Id] required>

            <input type='text' name='pr_id' class='form-control w-25'value=$sol[Product_Id] required>
    <label class='mt-3'>Product Name</label>

            <input type='text' name='names' class='form-control w-25'  value=$sol[Name] required>
   <label class='mt-3'>Product Original Price</label>
            <input type='text' name='org_prices' class='form-control w-25' value=$sol[Original_Price] required placeholder='&#8377'>
    <label class='mt-3'>Product Discount Price</label>
            <input type='text' name='dis_prices' class='form-control w-25' value=$sol[Discount_Price] required placeholder='&#8377'>
    <label class='mt-3'>Product Image</label>
     <input type='file' name='images'  class='form-control w-25'>
     <img src='$sol[Image]' width='90' height='90'><br>
     <label class='mt-4'>Product Category </label>
     <select class='form-control w-25' name='category' id='category' required>
     <option>Select Option</option>
        <option value='fruits'>Fruits</option>
        <option  value='vegetables'>Vegetables</option>
     </select>
 </div>
        
        <input type='submit' value='Update Product'  name='update' class='btn btn-Primary mt-3'>

                
</form>
 
 
</body>
</html>";}?>




<?php
if(isset($_POST['pr_id'])){
    $img_name=$_FILES['images']['name'];
    echo"
    <script>
        alert(isset($_POST[pr_id]));
    </script>";
    // $img_data=file_get_contents($_FILES['images']['name']);
    
    
// $id=$_POST['id'];
$product_id=$_POST['pr_id'];
$name=$_POST['names'];
$org_price=$_POST['org_prices'];
$dis_price=$_POST['dis_prices'];
$category=$_POST['category'];


if($category==="fruits")
{
$sql="UPDATE `fruit_product` SET `Name`='$name',Original_Price=$org_price,`Discount_Price`=$dis_price,Image='$img_name' WHERE Product_Id=$product_id";
                $data=mysqli_query($connect,$sql);
    
echo"
    <script>
        alert($product_id);
    </script>";
}

else if($category==="vegetables")
{
$sql="UPDATE `vegetables_product` SET `Name`='$name',Original_Price=$org_price,`Discount_Price`=$dis_price WHERE Product_Id=$product_id";
                   $data=mysqli_query($connect,$sql);

}

    }



?>