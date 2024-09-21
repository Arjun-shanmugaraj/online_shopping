<?php 
	include "admin/shopping_dbconfig.php";
	session_start();
	$mobile=$_SESSION['mobile'];
	$orderno=$_SESSION['orderno'];
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Php Cart</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
  <link href="https://fonts.googleapis.com/css?family=Titillium+Web&display=swap" rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<style type="text/css">
	button{

		margin-top: 2%;
	}
</style>
<body>
  
<div class="container">
  <div class="row">
			<h1>Cart Items</h1><hr>
			<!-- <h3>Mobile No :<?php echo "$mobile"; ?></h3> -->
						<h3>Order No :<?php echo "$orderno"; ?></h3>
			<a href='product.php'>Home</a>
			<table class='table'>	
				<tr>
					<th>Id</th>
					<th>Item Name</th>
					<th>Qty</th>
					<th>Price</th>
					<th>Total</th>
					<th>Remove</th>		
				</tr>
				<div class="shopping">
						<div class="shopright">
							<?php
								$sql="select * from cart where mobile=$mobile";
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
						<td><a onclick="return confirm('Are you Sure to Delete!')" href="cart_delete.php?id=<?php echo $row['id']; ?>">Remove</a></td>
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
							<a href="payment.php?mobile=<?php echo$row['mobile']; ?>"><button class="btn btn-primary">Payment</button></a>
						</div>
					</div>			
  </div>
</div>
</body>

<script type="text/javascript">
	$(document).ready(function(){
		$sum=0;
	$('.tot').each(function(){
	$sum =$sum + parseInt(($(this).text()));

	});
	document.getElementById('data').innerHTML=$sum;

	$(".btn").click(function(){
		var id=$("#id").text();
		var name=$("#name").text();
		var quantity=$("#quantity").text();
		var price=$("#price").text();
		var description=$("#description").text();
		// alert(name);
		$.ajax({
                url: 'orders_insert.php',
                type: 'GET',
                data: {
                id: id,
                 name: name,
                 quantity:quantity,
                 price:price,
                 description:description
             },
                success: function(response) {
                	// alert("ajax working");
                    $('#response').html(response);
                }
            });
		// alert(tot);
	});
	});
</script>
</html>
