<?php   
session_start(); //to ensure you are using same session
session_destroy(); //destroy the session
header("location:/Online_shopping/login_user.php"); //to redirect back to "index.php" after logging out
exit();
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>ONLINE | LOGOUT</title>

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
    *{
      font-family: roman;
    }
.a2{
  height:120px;
  width:120px;
}
.btn{
  margin-top: 10px;
}
.foot{
      border:2px solid black;
      margin-top:90px;
      color: white;
      height: 96px;
      background-color: black;
    }
    .a5{
  border-radius: 10px;
  width: 40%;
  height: 200px;
  padding: 30px;
  border:none;
  margin-top:7% ;
  box-shadow: rgba(100, 100, 111, 0.2) 0px 7px 29px 0px;
  margin-left: 26%;
  box-sizing: content-box;
}

</style>
  <body>

      <div id="wrapper" class="homepage-1"> <!-- wrapper -->
          <div id="header"> <!-- header -->
              <div class="top"> <!-- top -->
                  <div class="container">
                      <ul class="top-support"> 
                          <li><i class="fa fa-phone-square"></i><span>(+800) 123 456 7890</span></li>
                          <li><a href="mailto:arjun@gmail.com"><i class="fa fa-envelope-square"></i><span>info@arjun.com</span></a></li>
                      </ul>
                      
                      <div class="top-control">
                          <a href="">Track Order</a><span>•</span><a href="registration_user.php">Register</a><span>•</span><a href="login_user.php">Login</a><span>
                      </div>
                  </div>
              </div> <!-- top -->
              
              <center class="a5">
            <div class="container">
                <div class="row">
                    <div class="col-xs-6">
                        <div class="panel panel-primary">
                            <div class="panel-heading"></div>
                            <div class="panel-body">
                                <p>You have been logged out. <a href="login_user.php">Login again.</a></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
          </center>
            <footer class="foot">
               <div class="container">
               <center>
                   <p>Copyright &copy Online shopping. All Rights Reserved. | Contact Us: +91 1234567890</p>
                   <p>This website is developed by Arjun</p>
               </center>
               </div>
           </footer>
        </div>
    </body>
</html>
