<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title></title>
</head>
<style>
  body {
    font-family: Arial, sans-serif;
    background-color: #f2f2f2;
  }

  form {
    border-radius:10px ;
    background-color:rgba(0, 0, 0, .5);
/*    margin-left:10% ;*/
    margin:20px auto;
    align-items: center;
    padding:50px;
    width: fit-content;
    box-shadow: rgba(100, 100, 111, 0.2) 0px 7px 29px 0px;

  }
  label {
    display: block;
    margin-bottom: 10px;
  }
  input[type="email"] {
    width: 100%;
    height: 40px;
    margin-bottom: 20px;
    border: 1px solid #ccc;
    border-radius: 5px;
    font-size:20px;
  }
  button[type="submit"] {
    width: 100%;
    height: 40px;
    background-color: #4CAF50;
    color: #fff;
    padding: 10px;
    border: none;
    border-radius: 5px;
    cursor: pointer;
  }
  button[type="submit"]:hover {
    background-color: #3e8e41;
  }
  .container{
    margin:auto;
    width:fit-content;
  }
</style>
<body>

<?php
session_start();


// Configuration
$db_host = 'localhost';
$db_username = 'root';
$db_password = '';
$db_name = 'online_shopping';

// Connect to database
$conn = mysqli_connect($db_host, $db_username, $db_password, $db_name);

use phpmailer\phpmailer\PHPMailer;
use phpmailer\phpmailer\SMTP;
use phpmailer\phpmailer\Exception;

require 'vendor\phpmailer\phpmailer\src\Exception.php';
require 'vendor\phpmailer\phpmailer\src\SMTP.php';
require 'vendor\phpmailer\phpmailer\src\PHPMailer.php';
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// Function to generate OTP
function generateOTP() {
    $otp = rand(100000, 999999);
    return $otp;
}

// Check if form is submitted
if (isset($_POST['email'])) {
    $email = $_POST['email'];
    $_SESSION["email"] = $email;

    // Check if email exists in database
    $query = "SELECT * FROM login WHERE email = '$email'";
    $result = mysqli_query($conn, $query);
    $num_rows = mysqli_num_rows($result);

    if ($num_rows > 0) {
        // Generate OTP
        $otp = rand(100000, 999999);
    echo "$email"."and".$otp;

        // Update user's OTP in database
        $query = "UPDATE login SET otp = '$otp' WHERE email = '$email'";
        mysqli_query($conn, $query);

        // Send OTP to user's email address using PHPMailer
        $mail = new PHPMailer();
        $mail->isSMTP();
        $mail->Host = 'smtp.gmail.com';
        $mail->SMTPAuth = true;
        $mail->Username = 'arjunengineer404@gmail.com';
        $mail->Password = 'idhx egxp hqnp swgi';
        $mail->SMTPSecure=PHPMailer::ENCRYPTION_SMTPS;          //Enable implicit TLS enctyption
        $mail->Port = 465;
        $mail->setFrom('arjunengineer404@gmail.com', 'Arjun');
        $mail->addAddress($email, 'Arjuns');
        $mail->Subject = 'Forgot Password OTP';
        $mail->Body = 'Your OTP is: ' . $otp;
        $mail->send();

        // Display success message
        echo "<script>alert('OTP sent successfully! Please enter the OTP below.'); window.location.href='validate_otp.php';</script>";

    } else {
        echo "<script>alert('Email address not found');</script>";
    }
}

?>
<div class="container">
    
<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
  <label for="email">Email:</label>
  <input type="email" id="email" class="form-control" name="email" required>
  <button type="submit">Send OTP</button>
</form>

</div>
</body>
</html>