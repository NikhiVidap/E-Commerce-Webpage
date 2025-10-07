<?php  
require_once"registration_connection.php";
if(isset($_FILES["images"])&& $_FILES["images"]["error"]==0 ){
    $img_name=$_FILES['images']['name'];
    
    // $img_data=file_get_contents($_FILES['images']['name']);
    
    

$product_id=$_POST['pr_id'];
$name=$_POST['names'];
$org_price=$_POST['org_prices'];
$dis_price=$_POST['dis_prices'];
$category=$_POST['category'];


if($category==="fruits")
{
$sql="INSERT INTO `fruit_product`(`Product_Id`, `Name`,`Original_Price`, `Discount_Price`, `Image`) VALUES (?,?,?,?,?)";
    $stmtinsert=$db->prepare($sql);
    $result=$stmtinsert->execute([$product_id,$name,$org_price,$dis_price,$img_name]);
}

if($category==="vegetables")
{
$sql="INSERT INTO `vegetables_product`(`Product_Id`, `Name`,`Original_Price`, `Discount_Price`, `Image`) VALUES (?,?,?,?,?)";
    $stmtinsert=$db->prepare($sql);
    $result=$stmtinsert->execute([$product_id,$name,$org_price,$dis_price,$img_name]);

}

}


echo"
    <script>
        window.location='products.php';
    </script>
    ";
?>

