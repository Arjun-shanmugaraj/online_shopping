<?php 
  include "admin/shopping_dbconfig.php";
  session_start();
  $mobile=$_SESSION['mobile'];
  $name=$_SESSION['name'];
  $email=$_SESSION['email'];
  $orderno=$_SESSION['orderno'];
?>
<!DOCTYPE html>
<html>
<head>
      <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
  <link href="https://fonts.googleapis.com/css?family=Titillium+Web&display=swap" rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="css/style.css">
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
  table th,td{
    width: 20%;
   text-align: center;
    margin:20px;
  }
  *{
    font-family: roman;
  }
  #footer{
    margin-top: 20px;
  }
  h4{
    padding: 10px;
    border: ;
    margin-top: 26px;
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
                          <a href="order_details.php">Track Order</a><span>•</span><a href="logout_user.php">Logout</a>
                      </div>
                  </div>
              </div> <!-- top -->
              
              <div id="believe-nav"> <!-- Nav -->
                  <div class="container">
                      <div class="min-marg">
                          <nav class="navbar navbar-default">
                              <!-- <div class="container-fluid"> -->
                                  <!-- Brand and toggle get grouped for better mobile display -->
                                  <div class="navbar-header">
                                      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                                          <span class="sr-only">Toggle navigation</span>
                                          <span class="icon-bar"></span>
                                          <span class="icon-bar"></span>
                                          <span class="icon-bar"></span>
                                      </button>
                                      <a class="navbar-brand" href="product.php"><img src="images/logo.png" alt=""></a>
                                  </div>

                                  <!-- Collect the nav links, forms, and other content for toggling -->
                                  <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                                      <ul class="nav navbar-nav">
                                          <li class="active"><a href="product.php">Home <span class="sr-only">(current)</span></a></li>
                                          <li><a href="blog.php">Blog</a></li>
                                          <li><a href="blog-detail.php">Blog Post</a></li>
                                          <li><a href="contact.php">Contact</a></li>
                                          <li><a href="#">Buy Pro Version</a></li>
                                      </ul>
                                     
                                      
                                     
                                  </div><!-- /.navbar-collapse -->
                              <!--</div> -->
                              
                          </nav>
                      </div>
                      <div class="srch-form">
                          <form class="side-search">
                              <div class="input-group">
                                  <input type="text" class="form-control search-wid" placeholder="Search Here" aria-describedby="basic-addon2">
                                  <a href="" class="input-group-addon btn-side-serach" id="basic-addon2"><i class="fa fa-search"></i></a>
                              </div>
                          </form>
                      </div>
                  </div>
              </div> <!-- Nav -->               
              <div id="cat-nav">
              <div class="container">
                  <nav class="navbar navbar-default">
                      <!-- <div class="container-fluid"> -->
                      <!-- Brand and toggle get grouped for better mobile display -->
                      <div class="navbar-header">
                          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#cat-nav-mega">
                              <span class="sr-only">Toggle navigation</span>
                              <span class="icon-bar"></span>
                              <span class="icon-bar"></span>
                              <span class="icon-bar"></span>
                          </button>
                      </div>

                      <!-- Collect the nav links, forms, and other content for toggling -->
                      <div class="collapse navbar-collapse" id="cat-nav-mega">
                          <ul class="nav navbar-nav">
                              <li class="active"><a href="electronics.php">ELECTRONICS</a></li>
                              <li><a href="men.php" >MEN </a>
                              <li><a href="women.php">WOMEN </a></li>
                              <li><a href="baby.php">BABY & KIDS </a></li>
                              <li><a href="books.php">BOOKS & MEDIA </a></li>
                              <li><a href="home.php">HOME & KITCHEN </a></li>
                              <li><a href="product.php">MORE STORES </a></li>
                              <!-- <li><a href="contact.php">OFFERS ZONE </a></li> -->
                              <!-- <li class="cat-img-off"><img src="images/offers.png" alt="off"></li> -->
                          </ul>
                           
                      </div><!-- /.navbar-collapse -->
                      <!--</div> -->
                  </nav>
              </div>
              </div>      
          </div> <!-- header -->          <!-- <div id="content">
              <h1>Payment Details</h1>
              <table class="table">
                  <tr>
                      <th>id</th>
                      <th>Name</th>
                      <th>Price</th>
                      <th></th>
                  </tr>
                  <tr>
                    <td></td>
                  </tr>
              </table>
          </div>
 -->
  
<div class="container">
    <div class="row">
      <table>
        <tr>
      <td><h1>Payment Details </h1></td>
        </tr>
      <tr>
      <td><h4>Mobile:<?php echo $mobile;?></h4></td>
      <td><h4>Name:<?php echo $name;?></h4></td>
      <td><h4>Email:<?php echo $email;?></h4></td>
      <td><h4>Order No:<?php echo $orderno;?></h4></td>

   </tr>
    </table>
    </div>
  </div>
  <div class="container">
      <hr>
      <a href='product.php'>Home</a>
      <table class='table'> 
        <tr>
          <th>Id</th>
          <th>Item Name</th>
          <th>Qty</th>
          <th>Price</th>
          <th>Total</th>
        </tr>
        <div class="shopping">
            <div class="shopright">
              <?php
                include "admin/shopping_dbconfig.php";

                $sql="select * from cart where mobile=$mobile ";
      $res=mysqli_query($conn,$sql);
        while($row=mysqli_fetch_array($res)){
              ?>
            <tr>
              <td id="id"><?php echo$row['id']; ?></td>
              <td id="name"><?php echo$row['name']; ?></td>
              <td hidden id="description"><?php echo$row['description']; ?></td>
              <td  id="quantity"><?php echo$row['quantity']; ?></td>
              <td id="price"><?php echo$row['price']; ?></td>
              <td class="tot" >
            <?php
            $total=0;
            $total=$row["quantity"]*$row["price"];
            echo $total;
             ?>
              </td>
            </tr>


            <?php 
}
?>
<tr>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td>Grant Total</td>
                        <td id="data">
                          
                        </td>
                      </tr>
      </table>
             <a href="success.php"> <button class="btn btn-primary">Order</button></a>
            </div>
          </div>      
  </div>
</div>


                    <div id="footer"><!-- Footer -->
              <div class="footer-widget">
                  <div class="container">
                      <div class="row">
                          <div class="col-md-3">
                              <div class="text-widget">
                                  <div class="wid-title">Welcome to</div>
                                  <img src="images/logo-white.png" alt="ft-logo">
                                  <p>
                                      Believe isCommerce WordPress theme. It has<br/>everything you need to start selling today! <a href="">Get this theme on ThemeForest!</a>
                                  </p>
                                  <ul class="ft-soc clearfix">
                                      <li><a href=""><i class="fa fa-facebook-square"></i></a></li>
                                      <li><a href=""><i class="fa fa-twitter"></i></a></li>
                                      <li><a href=""><i class="fa fa-google-plus-square"></i></a></li>
                                      <li><a href=""><i class="fa fa-instagram"></i></a></li>
                                      <li><a href=""><i class="fa fa-pinterest"></i></a></li>
                                  </ul>
                                  <div class="clearfix"></div>
                              </div>
                          </div>
                          <div class="col-md-2">
                              <div class="quick-links">
                                  <div class="wid-title">Quick Links</div>
                                  <ul>
                                      <li><a href="index.php">Home</a></li>
                                      <li><a href="#">About US</a></li>
                                      <li><a href="contact.php">contact US</a></li>
                                      <li><a href="#">deals</a></li>
                                      <li><a href="blog.php">blog</a></li>
                                      <li><a href="#">help</a></li>
                                  </ul>
                              </div>
                          </div>
                          <div class="col-md-2">
                              <div class="term">
                                  <div class="wid-title">&nbsp;</div>
                                  <p>
                                      <a href="#">Tearms & condition</a><br/>
                                      <a href="#">FAQs</a><br/>
                                      <a href="#">Privacy Policy</a><br/>
                                      <a href="#">Legal Desclaimer</a><br/>
                                  </p>
                              </div>
                          </div>
                          <div class="col-md-2">
                              <div class="quick-links">
                                  <div class="wid-title">My Account</div>
                                  
                                  <ul>
                                      <li><a href="#">My Account</a></li>
                                      <li><a href="#">Personal Information</a></li>
                                      <li><a href="#">Addresses</a></li>
                                      <li><a href="#">Orders</a></li>
                                      <li><a href="#">Wishlist</a></li>
                                      <li><a href="#">track order</a></li>
                                  </ul>
                              </div>
                          </div>
                          <div class="col-md-3">
                              <div class="subscribe">
                                  <div class="wid-title">Subscribe for OFFERS & UPDATES</div>
                                  <p>
                                      Enter your email and we'll send you a coupon
                                      with 10% off your next order. Add any text here
                                  </p>
                                  <form>
                                      <div class="form-group">
                                          <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Enter email">
                                      </div>
                                      <button type="submit" class="btn btn-default">Subscribe Now</button>
                                  </form>
                              </div>
                          </div>
                      </div>
                  </div>
              </div>
              <div class="footer-text">
                  <div class="container">
                      <p>Copyright 2018 All Rights Reserved by Believe. Designed and Developed by <a href="https://bootstrapmart.com/">BootstrapMart </a></p>
                  </div>
              </div>
          </div><!-- Footer -->
</body>
<script type="text/javascript">
  $(document).ready(function(){
    $sum=0;
  $('.tot').each(function(){
  $sum =$sum + parseInt(($(this).text()));
  });






  document.getElementById('data').innerHTML=$sum;
  $(".btn").click(function(){
    // console.log("btn click"+$sum);
    var id=$("#id").text();
    var name=$("#name").text();
    var quantity=$("#quantity").text();
    var price=$("#price").text();
    var description=$("#description").text();
    var sum=$sum;
    alert(sum);
    $.ajax({
                url: 'user_insert.php',
                type: 'GET',
                data: {
                id: id,
                sum:sum,
             },
                success: function(response) {
                  alert("ajax working");
                    $('#response').html(response);
                }
            });
    // alert(tot);
  });
  });
</script>
</html>


  

