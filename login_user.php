<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Form</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
     <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Believe</title>

    <!-- fonts -->
    <link href='http://fonts.googleapis.com/css?family=Raleway:400,300,500,600,700' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Roboto+Slab:400,700,300' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Playfair+Display:400,700' rel='stylesheet' type='text/css'>
    <link href='font-awesome/css/font-awesome.css' rel='stylesheet' type='text/css'>
      
    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    
    <!-- main css -->
    <link href="style.css" rel="stylesheet">
    <link href="responsive.css" rel="stylesheet">
    
    <!-- Slider -->
    <link href="css/owl.carousel.css" rel="stylesheet">
    <link href="css/owl.theme.css" rel="stylesheet">
    <link href="css/owl.transitions.css" rel="stylesheet"> 
      
    <!-- lightbox -->
    <link href="css/prettyPhoto.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<style type="text/css">
     body{
    font-family: serif;
    background-color: whitesmoke;
/*    padding:50px;*/
}
.container1{
    border-radius:10px ;
    background-color:rgba(0, 0, 0, .5);
/*    margin-left:10% ;*/
    margin:20px auto;
    align-items: center;
    padding:50px;
    width: fit-content;
    box-shadow: rgba(100, 100, 111, 0.2) 0px 7px 29px 0px;
}
.form-group{
    margin-bottom:30px;
}
.btn{
    width: 150px;
    margin-top: 10px;
    border-radius: 20px 0px 20px 0px;
    background-color: blue;
}
.btn:hover{
    background-color:#0009;
}
h4{
    color:maroon;
    width: 200px;
    background-color: transparent;

}
.top{
    margin-right:300px;
    width: 100%;
}
.forgot-password {
        text-decoration: none;
        width: 150px;
        padding:10px;
        margin-top: 10px;
        border-radius:10px;
        background-color: blue;
    }

    .forgot-password:hover {
        border-color: #aaa; /* lighter grey color on hover */
    }
</style>
<body>
    <div class="container1">
        <?php
// Create connection
require_once "admin/shopping_dbconfig.php";

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST["email"];
    $password = $_POST["password"];

    // Query to retrieve user information
    $sql = "SELECT password FROM login WHERE email='$email'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        $hashed_password = $row["password"];

        // Verify password
        if (password_verify($password, $hashed_password)) {
            // Start session
            session_start();    
            $_SESSION["email"] = $email;
            // Redirect to protected page
            header("Location:product.php");
            exit;
        } else {
            echo "Invalid password";
        }
    } else {
        echo "email not found";
    }
}
?>
        <h4>LOGIN</h4>
      <form action="login_user.php" method="post">
        <div class="form-group">
            <input type="email" placeholder="Enter Email:"  name="email" class="form-control">
        </div>
        <div class="form-group">
            <input type="password" placeholder="Enter Password:"  name="password" class="form-control">
        </div>
        <div class="row">
            <div class="col-6">
            <input type="submit" value="Login" name="login" class="btn btn-primary">
            </div>
            <div class="col-6">
                <a href="forget_password.php" class="btn btn-primary">Forgot Password</a></div>
            </div>
        </form>
     <div class="mt-4">
        <p>Not registered yet <a href="registration_user.php" style="color: blue;">Register Here</a></p></div>
    </div>
</body>
</html>