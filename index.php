<?php 
require'registration_connection.php';


    $query="select * from fruit_product";
   $data=mysqli_query($connect,$query);
    
 
    $datas=array();
    if(mysqli_num_rows($data)>0)
    {
       while($ans=mysqli_fetch_assoc($data))
       {
          
           $datas[]=$ans;
          
       }
    }




    
    $sql="select * from vegetables_product";
    $datasval=mysqli_query($connect,$sql);
    
 
    $pr_datas=array();
    if(mysqli_num_rows($datasval)>0)
    {
       while($answ=mysqli_fetch_assoc($datasval))
       {
          
           $pr_datas[]=$answ;
          
       }
    }

?>

<html>
    <head>
        <title>Organic Vegetables</title>
        <link rel="stylesheet" type="text/css" href="style.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" />
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4Q6Gf2aSP4eDXB8Miphtr37CMZZQ5oXLH2yaXMJ2w8e2ZtHTl7GptT4jmndRuHDT" crossorigin="anonymous">

        <script src="Js/jquery.js"></script>
        <script src="Dashboard.js" type="text/javascript"></script>
        <style>
    .star-input{
    display: none;
}
.star{
    color: gold;
}
.star-input:checked + .star ~ .star{
    color: white;
}
            </style>
    </head>
    <body>
        <!-- <br><br><div id="cart" style="margin-top: 10%;"> -->
        <form action="product_data.php" role="form" method="post" enctype="multipart/form-data" autocomplete="on">
                        
            <label id="org">Mel</label><label id="nic">ody</label>
            <a href="product_cart.php">
            <i class="fa-solid fa-cart-shopping fa-xl" id="cart" onclick="slidedown()"></i>
            </a>

            <span id="navbar">
                &nbsp &nbsp;<i class="fa-solid fa-magnifying-glass fa-xl" id="icsearch" onclick="searchicons()"></i>
                
                <input type="search" placeholder="Search.." style="visibility:hidden" id="mySearch" onclick="searchbar()" onkeyup="myFunction()">
                <i class="fa-solid fa-xmark fa-2xl" style="visibility: hidden;" id="solidcross" onclick="searchbarup()"></i>
                <ul id="myMenu"style="visibility: hidden;">
                    
                    <li><a href="#orasearch" style="text-decoration: none;color: black ;" >Orange</a></li>
                    <li><a href="#limsearch"style="text-decoration: none;color: black ;">Lime</a></li>
                    <li><a href="#strawberrysearch" style="text-decoration: none;color: black ;" >Strawberry</a></li>
                    <li><a href="#pomagranatesearch" style="text-decoration: none;color: black ;" >Pomagranate</a></li>
                    <li><a href="#broccolisearch"style="text-decoration: none;color: black ;">Broccoli</a></li>
                    <li><a href="#spinachsearch"style="text-decoration: none;color: black ;">Spinach</a></li>
                    <li><a href="#lettucesearch"style="text-decoration: none;color: black ;">Lettuce</a></li>
                    <li><a href="#onionsearch"style="text-decoration: none;color: black ;">Onion</a></li>
                  </ul>
        

            </span>
        <!-- cart Dashboard -->
       
            
               <div id="service" style="margin-top: -7%;">
            <i class="fa-solid fa-truck fa-xl" style="margin-left: 20%;margin-top: 1%;" id="sericon1"></i><h2 style="margin-left: 26%;margin-top: -2.5%;color: white;">Free Delivery</h2>
            <i class="fa-regular fa-credit-card fa-xl" style="margin-left: 40%;margin-top: -3%;" id="sericon2"></i><h2 style="margin-left: 46%;margin-top: -3%;color: white;">Safe Payment</h2>
            <i class="fa-solid fa-headset fa-xl" style="margin-left: 60%;margin-top: -3.5%;" id="sericon3"></i><h2 style="margin-left: 66%;margin-top: -3.2%;color: white;">24/7 Support</h2>
        </div>
<div class="banner">
            
            <h2 class="title">
                Qualityful <span class="span">organic</span><br>
                fruit & <span class="span">vegetables.</span>
              </h2>            
              <img src="banner.png" width="30%" height="80%" id="bimg">
        </div>
        <br>
        
        <!-- fruir head -->
    
            <h1 id="fheading">&nbsp;<i class="fa-solid fa-apple-whole"></i>&nbsp;Fresh Fruits</h1>


  

<!-- orange -->
<script type="text/javascript">
    const form=document.getElementById('starr');
    form.addEventListener('submin',event=>{
        const formData= new FormData(event.target);
        const rating=formData.get('raiting');
        console.log(rating);
        event.preventDefault();
    });
    </script>

   
<?php
foreach($datas as $soln)
{
    echo"


    <form action='product_data.php' method='post'>
 <div class='oranged' id='orasearch'>
            <img src='$soln[Image]'  width='189' height='189' id='orange'><br>
            <h2 style='margin-left:25%'>$soln[Name]</h2>
                <input type='hidden' name='pr_id' id=$soln[Product_Id] value=$soln[Product_Id]>
                <input type='hidden' name='names' value=$soln[Name]>
                <input type='hidden' name='prices' value=$soln[Discount_Price]>

            <label id='oprize'>&#8377 $soln[Original_Price]</label> <label style='font-size: larger; color:green'>&#8377 $soln[Discount_Price]</label><label style='font-family: Arial;'>&nbsp &nbsp;Per Kg</label>
            <div align='center'>    
                <label style='font-size: larger; color:green'>Qty</label>        
                <input type='text'class='form-control' style='width:40px' id='fqty' name='qty' value='0'>
        
            </div>
            <a href='#orashow'> 
            <input type='submit' value='Add to cart' class='mt-3' name='cart' onclick='orangeshow()'  id='oadd'></a>
        </div>
        </form>
";} ?> 

    
        <!-- head vegetables -->
        <h1 id="vheading"><img src="fruit head.png" width="35">Fresh Vegetables</h1>

        <?php
foreach($pr_datas as $sol)
{
    echo"

    
    <form action='product_data.php' method='post'>
 <div class='oranged' id='orasearch'>
            <img src='$sol[Image]'  width='189' height='189' id='orange'><br>
            



            <h2 style='margin-left:25%'>$sol[Name]</h2>
                <input type='hidden' name='pr_id' value=$sol[Product_Id]>
                <input type='hidden' name='names' value=$sol[Name]>
                <input type='hidden' name='prices' value=$sol[Discount_Price]>

            <label id='oprize'>&#8377 $sol[Original_Price]</label> <label style='font-size: larger; color:green'>&#8377 $sol[Discount_Price]</label><label style='font-family: Arial;'>&nbsp &nbsp;Per Kg</label>
            <div align='center'>    
               <label style='font-size: larger; color:green'>Qty</label>
                <input type='text'class='form-control' style='width:40px' id='vqty' name='qty' value='0'>
            </div>
            <a href='#orashow'> 
            <input type='submit' value='Add to cart' name='cart' class='mt-3' onclick='orangeshow()' id='oadd'></a>
        </div>
        </form>
";} ?>
        
</form>
    </body>
</html> 