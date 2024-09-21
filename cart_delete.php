<?php
include "admin/shopping_dbconfig.php";
$did=$_GET['id'];
$qr="DELETE FROM cart where id='$did'";
echo $qr;
$del=mysqli_query($conn,$qr);
header('location:viewCart.php');
?> 
