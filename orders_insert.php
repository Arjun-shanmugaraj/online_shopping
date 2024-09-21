  <?php
  session_start();
  $mobile=$_SESSION['mobile'];
  // echo "$mobile";
  $orderno=$_SESSION['orderno'];
  include 'admin\shopping_dbconfig.php';
    $id = $_GET['id'];
    $name = $_GET['name'];
    $quantity=$_GET['quantity'];
    $price=$_GET['price'];
    $description=$_GET['description'];
    $sql = "INSERT INTO orders(id,orderno,name,mobile,quantity,price,description) VALUES ('$id','$orderno','$name','$mobile','$quantity','$price','$description')";
    echo $sql;
    $res=mysqli_query($conn,$sql);

    if ($res){
  echo "<h3> Successfully!</h3>";
} else {
  echo "<h2>Failed</h2>";
}
  
?>
