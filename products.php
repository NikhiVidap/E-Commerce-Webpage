
<html>
    <head>
        <title>Organic Vegetables</title>
        <link rel="stylesheet" type="text/css" href="style.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" />
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4Q6Gf2aSP4eDXB8Miphtr37CMZZQ5oXLH2yaXMJ2w8e2ZtHTl7GptT4jmndRuHDT" crossorigin="anonymous">

        <script src="Js/jquery.js"></script>
        <script src="Dashboard.js" type="text/javascript"></script>
    </head>
    <body>
        
             
        <form action='add_product.php' role='form' method='post' enctype='multipart/form-data' autocomplete='on'>
 <div class='form-group d-flex flex-column'>
    <label class='mt-3'>Product Id</label>
                <input type='hidden' name='id' class='form-control w-25' required>

            <input type='text' name='pr_id' class='form-control w-25' required>
    <label class='mt-3'>Product Name</label>

            <input type='text' name='names' class='form-control w-25'   required>
   <label class='mt-3'>Product Original Price</label>
            <input type='text' name='org_prices' class='form-control w-25'  required placeholder='&#8377'>
    <label class='mt-3'>Product Discount Price</label>
            <input type='text' name='dis_prices' class='form-control w-25' required placeholder='&#8377'>
    <label class='mt-3'>Product Image</label>
     <input type='file' name='images' require class='form-control w-25'>
    
     <label class='mt-4'>Product Category </label>
     <select class='form-control w-25' name='category' id='category' required>
     <option>Select Option</option>
        <option value='fruits'>Fruits</option>
        <option  value='vegetables'>Vegetables</option>
     </select>
 </div>
        <input type='submit' value='Add Product'  name='prod' class='btn btn-success mt-3'>
        

                
</form>
 
 
</body>
</html>


