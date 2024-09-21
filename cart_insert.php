  <?php 
  include "admin/shopping_dbconfig.php";
  session_start();
  $mobile=$_SESSION['mobile'];
  $_SESSION['orderno']=$_GET['bno'];
  include 'admin\shopping_dbconfig.php';
    $bno = $_GET['bno'];
    $name = $_GET['name'];
    $rate = $_GET['rate'];
    $quantity=$_GET['quantity'];
    $description=$_GET['description'];
    $sql = "INSERT INTO cart(orderno,name,price,quantity,mobile,description) VALUES ('$bno','$name', '$rate','$quantity','$mobile','$description')";
    echo $sql;
    $res=mysqli_query($conn,$sql);

    if ($res){
  echo "<h3> Successfully!</h3>";
} else {
  echo "<h2>Failed</h2>";
}
  
?>
