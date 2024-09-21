<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>STOCK | NEW
     </title>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
</head>
<style type="text/css">
    label{
        margin-right: 450px;
    }
 body{
    font-family: serif;
    background-color: white;
    padding:50px;
    font-weight: bolder;
}
.container{
    max-width: 600px;
    border-radius:10px ;
    background-color: rgba(100, 100, 100, 0.3);
    margin-top: -3%;
    padding:50px;
    box-shadow: rgba(100, 100, 111, 0.2) 0px 7px 29px 0px;
}

.btn{
    
    width: 100px;
    margin-top: 10px;
    background-color: blue;
    margin-left: 10px;
}
.btn:hover{
    background-color:#0009;
}
</style>
<body>
<center>
<form action="http://localhost/Online_shopping/admin/stock_new_create.php" method="POST" enctype="multipart/form-data">
    <div class="container">
        <center><h2>New Stock</h2> </center>
        <div class="mb-3">
            <label for="pro_name"  class="form-label">Product Name</label>
            <input type="text" class="form-control" name="pro_name"  placeholder="Enter Product Name ">
        </div>
        <div class="mb-3">
            <?php
include"shopping_dbconfig.php";
$qr=mysqli_query($conn,"select count(id)as temp_id from stock");
while($dt=mysqli_fetch_array($qr)){
$count=$dt['temp_id']+1;
$id = str_pad($count,4,"0001",STR_PAD_LEFT);
}
?>
            <label for="id"  class="form-label">id: </label>
            <input type="text" name="id"  class="form-control"  readonly value='<?php echo $id; ?>'>
        </div>
        <div class="mb-3">
            <label for="quantity"  class="form-label">Quantity: </label>
            <input type="text" class="form-control" name="quantity"  placeholder="Enter Quantity ">
        </div>
        <div class="mb-3">
            <label for="sales_rate"  class="form-label">Sales Rate : </label>
            <input type="text" class="form-control" name="sales_rate"  placeholder="Enter Sales Rate ">
        </div>
        <div class="mb-3">
            <label for="mrp"  class="form-label">MRP : </label>
            <input type="text" class="form-control" name="mrp"  placeholder="Enter mrp ">
        </div>
        <div class="mb-3">
            <label for="img1"  class="form-label">Image 1 </label>
            <input type="file" class="form-control" name="img1"  >
        </div>
        <div class="mb-3">
            <label for="img2"  class="form-label">Image 2 </label>
            <input type="file" class="form-control" name="img2"  >
        </div>
        <div class="mb-3">
            <label for="description"  class="form-label">Description: </label>
            <textarea class="form-control" rows="3" cols="25" name="description"></textarea>
        </div>
        <div class="mb-3">
            <label for="Size"  class="form-label">Size: </label>
            <input type="text" class="form-control" name="size"  placeholder="Enter Size ">
        </div>
        <div class="mb-3">
            <label for="category"  class="form-label">category: </label>
            <input type="text" class="form-control" name="category"  placeholder="Enter Category ">
        </div>
        <div class="mb-3">
            <label for="discount" class="form-label">Discount: </label>
            <input type="text" class="form-control"name="discount"   placeholder="Enter Discount %">
        </div>
        <div class="mb-3">
            <label for="offer" class="form-label">Offer:</label>
            <input type="text" class="form-control" name="offer"    placeholder="Enter Offer">
        </div>
        <center><button type="submit" class="btn btn-primary">Insert</button></center>
    </div>
</form>
</center>
</body>
</html>