<?php
include "admin/shopping_dbconfig.php";
session_start();
$mobile=$_SESSION['mobile'];
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Orders</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<style type="text/css">
    table {
  table-layout: fixed;
  text-align: center;
  width: 100%;
  border-collapse: collapse;
  border: 3px solid purple;
}
*{
    font-family: roman;
}
h2{
    background-color: blue;
    font-size:2rem;
    padding: 4px;
    width: 25%;
    border-radius: 10px;
    margin-top:10px;
    margin-bottom: 20px;
}
table th{
    font-weight: bolder;
    font-size: 1.2rem;
}
</style>
<body>
    <div class="container">
        <center><h2>Your Order Details</h2></center>
                    <a href='product.php'>Home</a>
        <table class="table table-hover">
            <tr>
                <th>Order No</th>
                <th>Product Name</th>
                <th>Quantity</th>
                <th>Price</th>
                <th>Date</th>
            </tr>
            <?php
            $sql="select * from orders where mobile=$mobile";
            $res=mysqli_query($conn,$sql);
            while($row=mysqli_fetch_array($res)){
                ?>
                <tr>
                    <td><?php echo $row['id'];?></td>
                    <td><?php echo $row['name']; ?></td>
                    <td><?php echo $row['quantity']; ?></td>
                    <td><?php echo $row['price'];?></td>
                    <td><?php echo ($row['tdate']); ?></td>

                </tr>
            <?php 
            }
            ?>
        </table>

 </div>
</body>
</html>