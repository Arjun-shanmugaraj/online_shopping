  <?php
  session_start();
  $mobile=$_SESSION['mobile'];
  $name=$_SESSION['name'];
  $email=$_SESSION['email'];
  $orderno=$_SESSION['orderno'];
  include 'admin\shopping_dbconfig.php';
    $id = $_GET['id'];
    $sum=$_GET['sum'];
     $sql = "INSERT INTO user(id,orderno,name,mobile,email,total) VALUES ('$id','$orderno', '$name','$mobile','$email','$sum')";
    echo $sql;
    $res=mysqli_query($conn,$sql);

    if ($res){
  echo "<h3> Successfully!</h3>";
} else {
  echo "<h2>Failed</h2>";
}
  
?>
