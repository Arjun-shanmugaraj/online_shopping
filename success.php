<?php
session_start();
    $mobile=$_SESSION['mobile'];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration Form</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <!-- <link rel="stylesheet" href="style.css"> -->
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
    max-width: 600px;
    border-radius:10px ;
    background-color:lightgrey;
    margin-left:28%;
    margin-top:4%;
    padding:50px;
    box-shadow: rgba(100, 100, 111, 0.2) 0px 7px 29px 0px;
}
.form-group{
    margin-bottom:30px;
}
.btn{
    width: 100px;
    margin-top: 10px;
    background-color: blue;
    margin-left: 180px;
}
.btn:hover{
    background-color:#0009;
}
h2{
    margin-top: -10px;
    color: white;
    width: 200px;
    border-radius: 10px;
    margin-bottom: 20px;
    background-color: blue;
}
.top{
    margin-right:300px;
    width: 100%;
}
</style>
<body>
                  <div id="header"> <!-- header -->
              <div class="top"> <!-- top -->
                  <div class="container">
                      <ul class="top-support"> 
                          <li><i class="fa fa-phone-square"></i><span>(+800) 123 456 7890</span></li>
                          <li><a href="mailto:arjun@gmail.com"><i class="fa fa-envelope-square"></i><span>info@arjun.com</span></a></li>
                          <li style="margin-left:200px; font-size: 2rem;">ONLINE SHOPPING</li>
                      </ul>
                      <div class="top-offers">
                          
                      </div>
                                            <div class="top-control">
                          <a href="order_details.php">Track Order</a><span>•</span><a href="registration_user.php">Register</a><span>•</span><a href="login_user.php">Login</a>
                      </div>
                      
              </div> <!-- top -->
          </div> <!-- header -->
    <div class="container1">

       <center><h2>Success</h2></center>
        
        <div>
        <div>
        <p>Thanks for Purchase.Receive your order Successfully. We will contact you soon with delivery details. Here is your order details....<a href="order_details.php" style="color: blue;">Visit Here...</a></p>
        </div>
      </div>
    </div>
</body>
</html>