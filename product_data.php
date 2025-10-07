<?php
     require_once"registration_connection.php" ;
    
    //   $sql="SELECT Product_Id from products ;";
    // $Product_Data=mysqli_query($connect,$sql);
    // //  require_once"registration_connection.php" ;
    
 
    // $pr_datas=array();
    // if(mysqli_num_rows($Product_Data)>0)
    // {
    //    while($answer=mysqli_fetch_assoc($Product_Data))
    //    {
          
    //        $pr_datas[]=$answer;
          
    //    }
    // }

    
    
            

       
if($_POST['pr_id']) 
{
echo"<script>
    alert($_POST[pr_id]);
</script>";
   
    
            $pr_id=$_POST['pr_id'];
            $qty=$_POST['qty'];
            $name=$_POST['names'];   
            $price=$_POST['prices']*$qty;
    
   

$sql="INSERT INTO orders (Product_Id,Name,QTY,Price) VALUES (?,?,?,?)";
    $stmtinsert=$db->prepare($sql);
    $result=$stmtinsert->execute([$pr_id ,$name,$qty,$price]);
} 

echo"
    <script>
        window.location='index.php';
    </script>
    ";

    ?>
    <?php
// if(isset($_POST['remove']))
// {

//     $id=$_POST['ids'];
//  $query="SELECT Id FROM `orders`";
//     $data=mysqli_query($connect,$query);
    
 
//     $datas=array();
//     if(mysqli_num_rows($data)>0)
//     {
//        while($ans=mysqli_fetch_assoc($data))
//        {
          
//            $datas[]=$ans;
          
//        }
//     }

    
// foreach($datas as $sol)
//     {  
          
   
       


// }

?>