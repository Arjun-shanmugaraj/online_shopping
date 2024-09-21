<?php 
	include "admin/shopping_dbconfig.php";
	session_start();
  $mobile=$_SESSION['mobile'];
?>
<!DOCTYPE html>
<html lang="en">
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
  *{
    font-family: roman;

  }
  #not{
    display: none;
  }
  #img{
    width: 100px;
    height: 100px;
    margin-left: 75px;
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
                      <div class="top-offers">
                          
                      </div>
                      <div class="top-control">
                          <a href="">Track Order</a><span>•</span><a href="logout_user.php">Logout</a>
                      </div>
                      <div class="clearfix"></div>
                      <div class="top-offers show-mobile">
                          <div class="alert alert-warning alert-dismissible fade in offers" role="alert">
                              <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true"><i class="fa fa-times-circle"></i></span></button>
                              Free Shipping <a href="">on All Orders Over</a> $75!
                          </div>
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
          </div> <!-- header -->  
          <?php
include"admin/shopping_dbconfig.php";
$qr=mysqli_query($conn,"select count(orderno)as temp_id from cart");
while($dt=mysqli_fetch_array($qr)){
$count=$dt['temp_id']+1;
// $str="AIM";
$bno = str_pad($count,7,"10010",STR_PAD_LEFT);
}
?>
<div class="container">
  <div class="row">
			 <br>
      <a href='viewCart.php'>View Cart</a>
      <!-- <h3 style="text-align: center;"><?php  echo "Mobile No :".$_SESSION['mobile'];?></h3> -->
      Order No :<h3 id="bno"><?php echo $bno ?></h3>
<input type="text"name="idno" id="not" class="form-control" value='<?php echo $bno; ?>'>
			<?php 
			$sql="select * from stock where id='{$_GET["id"]}'";
			$res=mysqli_query($conn,$sql);
			if(mysqli_num_rows($res)>0)

			{
				echo '<form action="viewCart.php" method="post">';
				if($row=mysqli_fetch_assoc($res))
				{
          ?>
			<div class="col-sm-4 col-lg-3 col-md-3 text-center">    
     <img id="img" src="./fold/<?php echo $row['image2'];?>" alt="" class="img-responsive" >
     <p id="id" hidden><strong><?php echo $row['id'];?></a></strong></p>
     <p id="name"><strong><?php echo $row['product_name'];?></a></strong></p>
     <h4 class="text-danger" id="rate"><?php echo $row['sales_rate'];?></h4>
     <p id="mrp">MRP : <?php echo $row['mrp'];?> </p>
     Description :<h4 id="description"><?php echo $row['description'] ;?></h4>
     <h4 id="size">size : <?php echo $row['size'];?></h4>
		<p><input type="text" id="quantity"  placeholder="Enter quantity" name="quantity"  class="form-control"></p>
	<p><button  type="button"  name="upload" class="btn btn-primary">Add to cart</button></p>
   </div>
				</form>
   <?php 
				}
			}
			?>
			
  </div>
</div>
</body>
<script>
  $(document).ready(function(){
    $(".btn").click(function(){
      var id=$("#id").text();
      var bno=$("#bno").text();
      var name=$("#name").text();
      var rate=$("#rate").text();
      var mrp=$("#mrp").text();
      var description=$("#description").text();
      var quantity=$("#quantity").val();
      console.log(name);
      $.ajax({
                url: 'cart_insert.php',
                type: 'GET',
                data: {
                id:id,
                bno,bno,
                name: name,
                 rate: rate,
                 quantity:quantity,
                 description:description
             },
                success: function(response) {
                  // alert("ajax working");
  window.location.href="viewCart.php";
                    $('#response').html(response);
                }
            });
    
  });
  });
</script>
</html>
