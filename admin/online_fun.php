<?php

include "shopping_dbconfig.php";

function error422($message){

	$data=[

 		'status'=>422,

		'message'=>$message,

	];

	header("HTTP/1.0 422 Unprocessable Entity ");

	echo json_encode($data);

	exit();

}

function stock($stockInput){
	
	global $conn;

	$product_name=mysqli_real_escape_string($conn,$stockInput['pro_name']);

	$id=mysqli_real_escape_string($conn,$stockInput['id']);

	$quantity=mysqli_real_escape_string($conn,$stockInput['quantity']);

	$sales_rate=mysqli_real_escape_string($conn,$stockInput['sales_rate']);

	$mrp=mysqli_real_escape_string($conn,$stockInput['mrp']);

	$img1=mysqli_real_escape_string($conn,$_FILES['img1']['name']);

	$img2=mysqli_real_escape_string($conn,$_FILES['img2']['name']);

	$description=mysqli_real_escape_string($conn,$stockInput['description']);

	$size=mysqli_real_escape_string($conn,$stockInput['size']);

	$category=mysqli_real_escape_string($conn,$stockInput['category']);

	$discount=mysqli_real_escape_string($conn,$stockInput['discount']);

	$offer=mysqli_real_escape_string($conn,$stockInput['offer']);


	if (empty(trim($product_name))) {
	
		return error422('Enter product name');
	
	}elseif (empty(trim($id))) {
	
		return error422('Enter id');
	
	}elseif (empty(trim($quantity))) {
	
		return error422('Enter your quantity');
	
	}elseif (empty(trim($sales_rate))) {
	
		return error422('Enter your sales_rate');
	
	}elseif (empty(trim($mrp))) {
	
		return error422('Enter mrp');
	
	}elseif (empty(trim($img1))) {
	
		return error422('img1');
	
	}elseif (empty(trim($img2))) {
	
		return error422('img2');
	
	}elseif (empty(trim($description))) {
	
		return error422('Enter description');
	
	}elseif (empty(trim($size))) {
	
		return error422('Enter size');
	
	}elseif (empty(trim($category))) {
	
		return error422('Enter category');
		
	}elseif (empty(trim($discount))) {
	
		return error422('Enter discount');
	
	}elseif (empty(trim($offer))) {
	
		return error422('Enter offer');
	
	}


	else{

		$folder="../fold/".$img1;
		$folder1="../fold/".$img2;
		$tempname=$_FILES['img1']['tmp_name'];
		$tempname1=$_FILES['img2']['tmp_name'];
		move_uploaded_file($tempname,$folder);
		move_uploaded_file($tempname1,$folder1);
		$query="INSERT INTO stock(product_name,id,quantity,sales_rate,mrp,image1,image2,description,size,category,discount,offers)values('$product_name','$id','$quantity','$sales_rate','$mrp','$img1','$img2','$description','$size','$category','$discount','$offer')";
	// echo "$query";
	$result = mysqli_query($conn,$query);

	if ($result) {
		
		$data = [ 
			'status'=>201,

			'message'=>"Stock crated successfully ",
		];

		header("HTTP/1.0 201 created");

		return json_encode($data);
		}
		else{

			$data=[
	
				'status'=>500,
	
				'message'=>"Internal Server Error",
			];
	
			header("HTTP/1.0 500 Internal Server Error");
	
			return json_encode($data);

		}
	}
	
}
function getStock($stockparams){

 global $conn;

 if ($stockparams['id']==null) {
 	
 	return error422('Enter your stockId');
 }

 $stockId=mysqli_real_escape_string($conn,$stockparams['id']);

 $query="Select * from data where id='$stockId' LIMIT 1";

  $result=mysqli_query($conn,$query);
 
  if ($result) {
  	
  	if (mysqli_num_rows($result)==1) {
 
  		$res=mysqli_fetch_assoc($result);

  		 $data=[

		'status'=>200,

		'message'=>"Stock Fetched Successfully",

		'data'=>$res

	];
			header("HTTP/1.0 500 Internal Server Error");

			return json_encode($data);	

		
  	}else{
  		 $data=[

		'status'=>404,

		'message'=>"No Stock Found ",

	];

			header("HTTP/1.0 404 No Stock Found ");

			return json_encode($data);	
  	}

  }else{

  	  $data=[

		'status'=>500,

		'message'=>"Internal Server Error",

	];
			header("HTTP/1.0 500 Internal Server Error");

			return json_encode($data);	
	
  }

}


function getStockList(){

 global $conn;

 $query="select * from stock";

 $query_run=mysqli_query($conn,$query);

if ($query_run) {

	if (mysqli_num_rows($query_run)>0) {
		
		$res=mysqli_fetch_all($query_run,MYSQLI_ASSOC);

		$data=[

 		'status'=>200,

		'message'=>"Stock List Fetch Successfully",

		'data'=>$res

	];

header("HTTP/1.0 200 OK");

return json_encode($data);

	}else{

		$data=[

		'status'=>404,

		'message'=>"No Stock Found",

	];

header("HTTP/1.0 404 No Stock Found");

echo json_encode($data);
	}

}else{

	$data=[

		'status'=>500,

		'message'=>"Internal Server Error",

	];

header("HTTP/1.0 500 Internal Server Error");


return json_encode($data);

}

}

function deleteStock($stockParams){

    global $conn;

    if(!isset($stockParams['id'])){

        return error422('Stock id is not found');

    }elseif($stockParams['id']==null){

        return error422('Enter  id');

    }

    $stockid=mysqli_real_escape_string($conn,$stockParams['id']);

    $query="DELETE FROM stock WHERE id='$stockid' LIMIT 1";

    $result=mysqli_query($conn,$query);

    if($result){

        $data=[

            'status'=>201,

            'message'=>"DELETED SUCCESSFULLY",

        ];

        header("HTTP/1.0 201 SUCCESS");

        return json_encode($data);

    }else{

        $data=[

            'status'=>500,

            'message'=>"Internal Server Error",

        ];


        header("HTTP/1.0 500 Internal Server Error");

        return json_encode($data);

    }

}

function offer($offerInput)

{
	global $conn;

	$product_id=mysqli_real_escape_string($conn,$offerInput['pro_id']);

	$offername=mysqli_real_escape_string($conn,$offerInput['offername']);

	$validto=mysqli_real_escape_string($conn,$offerInput['validto']);

	$Validfrom=mysqli_real_escape_string($conn,$offerInput['Validfrom']);

	$discount=mysqli_real_escape_string($conn,$offerInput['discount']);

	$img1=mysqli_real_escape_string($conn,$_FILES['img1']['name']);

	if (empty(trim($product_id))) {
	
		return error422('Enter product id');
	
	}elseif (empty(trim($offername))) {
	
		return error422('Enter offername');
	
	}
		// elseif (empty(trim($validto))) {
		
		// 	return error422('Enter validto');
		
		// }elseif (empty(trim($validfrom))) {
		
		// 	return error422('Enter validfrom');
		
		// }
	elseif (empty(trim($discount))) {
	
		return error422('Enter discount');
	
	}elseif (empty(trim($img1))) {
	
		return error422('Selct image');
	
	}

	else{

		$folder="../fold/".$img1;
		$tempname=$_FILES['img1']['tmp_name'];
		move_uploaded_file($tempname,$folder);
				// move_uploaded_file($tempname1,$folder1);
	$query="INSERT INTO `offer`(`id`,`offername`,`validto`,`validfrom`,`discount`,`promoimage`)Values('$product_id','$offername','$validto','$Validfrom','$discount','$img1')";

	// echo $query;

	$result = mysqli_query($conn,$query);

	if ($result) {
		
		$data = [ 
			'status'=>201,

			'message'=>"offer crated successfully ",
		];

		header("HTTP/1.0 201 created");

		return json_encode($data);
		}
		else{

			$data=[
	
				'status'=>500,
	
				'message'=>"Internal Server Error",
			];
	
			header("HTTP/1.0 500 Internal Server Error");
	
			return json_encode($data);

		}
	}
	
}


function getoffer($offerparams){

 global $conn;

 if ($offerparams['id']==null) {
 	
 	return error422('Enter your stockId');
 }

 $offerId=mysqli_real_escape_string($conn,$offerparams['id']);

 $query="Select * from offer where id='$offerId' LIMIT 1";

  $result=mysqli_query($conn,$query);
 
  if ($result) {
  	
  	if (mysqli_num_rows($result)==1) {
 
  		$res=mysqli_fetch_assoc($result);

  		 $data=[

		'status'=>200,

		'message'=>"Stock Fetched Successfully",

		'data'=>$res

	];
			header("HTTP/1.0 500 Internal Server Error");

			return json_encode($data);	

		
  	}else{
  		 $data=[

		'status'=>404,

		'message'=>"No Stock Found ",

	];

			header("HTTP/1.0 404 No Stock Found ");

			return json_encode($data);	
  	}

  }else{

  	  $data=[

		'status'=>500,

		'message'=>"Internal Server Error",

	];
			header("HTTP/1.0 500 Internal Server Error");

			return json_encode($data);	
	
  }

}


function getOfferList(){

 global $conn;

 $query="select * from offer";

 $query_run=mysqli_query($conn,$query);

if ($query_run) {

	if (mysqli_num_rows($query_run)>0) {
		
		$res=mysqli_fetch_all($query_run,MYSQLI_ASSOC);

		$data=[

 		'status'=>200,

		'message'=>"Stock List Fetch Successfully",

		'data'=>$res

	];

header("HTTP/1.0 200 OK");

return json_encode($data);

	}else{

		$data=[

		'status'=>404,

		'message'=>"No Stock Found",

	];

header("HTTP/1.0 404 No Stock Found");

echo json_encode($data);
	}

}else{

	$data=[

		'status'=>500,

		'message'=>"Internal Server Error",

	];

header("HTTP/1.0 500 Internal Server Error");


return json_encode($data);

}

}

function deleteOffer($offerParams){

    global $conn;

    if(!isset($offerParams['id'])){

        return error422('Stock id is not found');

    }elseif($offerParams['id']==null){

        return error422('Enter  id');

    }

    $stockid=mysqli_real_escape_string($conn,$offerParams['id']);

    $query="DELETE FROM offer WHERE id='$stockid' LIMIT 1";

    $result=mysqli_query($conn,$query);

    if($result){

        $data=[

            'status'=>201,

            'message'=>"DELETED SUCCESSFULLY",

        ];

        header("HTTP/1.0 201 SUCCESS");

        return json_encode($data);

    }else{

        $data=[

            'status'=>500,

            'message'=>"Internal Server Error",

        ];


        header("HTTP/1.0 500 Internal Server Error");

        return json_encode($data);

    }

}


function getuser($stockparams){

 global $conn;

 if ($stockparams['orderno']==null) {
 	
 	return error422('Enter your orderno');
 }

 $orderno=mysqli_real_escape_string($conn,$stockparams['orderno']);

 $query="Select * from user where orderno='$orderno' LIMIT 1";

  $result=mysqli_query($conn,$query);
 
  if ($result) {
  	
  	if (mysqli_num_rows($result)==1) {
 
  		$res=mysqli_fetch_assoc($result);

  		 $data=[

		'status'=>200,

		'message'=>"Stock Fetched Successfully",

		'data'=>$res

	];
			header("HTTP/1.0 500 Internal Server Error");

			return json_encode($data);	

		
  	}else{
  		 $data=[

		'status'=>404,

		'message'=>"No Stock Found ",

	];

			header("HTTP/1.0 404 No Stock Found ");

			return json_encode($data);	
  	}

  }else{

  	  $data=[

		'status'=>500,

		'message'=>"Internal Server Error",

	];
			header("HTTP/1.0 500 Internal Server Error");

			return json_encode($data);	
	
  }

}


function getUserList(){

 global $conn;

 $query="select * from user";

 $query_run=mysqli_query($conn,$query);

if ($query_run) {

	if (mysqli_num_rows($query_run)>0) {
		
		$res=mysqli_fetch_all($query_run,MYSQLI_ASSOC);

		$data=[

 		'status'=>200,

		'message'=>"Stock List Fetch Successfully",

		'data'=>$res

	];

header("HTTP/1.0 200 OK");

return json_encode($data);

	}else{

		$data=[

		'status'=>404,

		'message'=>"No Stock Found",

	];

header("HTTP/1.0 404 No Stock Found");

echo json_encode($data);
	}

}else{

	$data=[

		'status'=>500,

		'message'=>"Internal Server Error",

	];

header("HTTP/1.0 500 Internal Server Error");


return json_encode($data);

}

}

function contact($offerInput)

{
	global $conn;

	$name=mysqli_real_escape_string($conn,$offerInput['name']);

	$email=mysqli_real_escape_string($conn,$offerInput['email']);

	$subject=mysqli_real_escape_string($conn,$offerInput['subject']);

	$message=mysqli_real_escape_string($conn,$offerInput['message']);


	if (empty(trim($name))) {
	
		return error422('enter name');
	
	}elseif (empty(trim($email))) {
	
		return error422('enter email');
	
	}elseif (empty(trim($subject))) {
	
		return error422('Enter subject');
	
	}elseif (empty(trim($message))) {
	
		return error422('enter message');
	
	}

	else{

	$query="INSERT INTO `contact`(`name`,`email`,`subject`,`message`)Values('$name','$email','$subject','$message')";

	// echo $query;

	$result = mysqli_query($conn,$query);

	if ($result) {
		
		$data = [ 
			'status'=>201,

			'message'=>"contact submitted successfully ",
		];

		header("HTTP/1.0 201 created");

		return json_encode($data);
		}
		else{

			$data=[
	
				'status'=>500,
	
				'message'=>"Internal Server Error",
			];
	
			header("HTTP/1.0 500 Internal Server Error");
	
			return json_encode($data);

		}
	}
	
}




function getElectronicsList(){

 global $conn;

 $query="select * from stock where category='electronics'";

 $query_run=mysqli_query($conn,$query);

if ($query_run) {

	if (mysqli_num_rows($query_run)>0) {
		
		$res=mysqli_fetch_all($query_run,MYSQLI_ASSOC);

		$data=[

 		'status'=>200,

		'message'=>"category List Fetch Successfully",

		'data'=>$res

	];

header("HTTP/1.0 200 OK");

return json_encode($data);

	}else{

		$data=[

		'status'=>404,

		'message'=>"No Stock Found",

	];

header("HTTP/1.0 404 No Stock Found");

echo json_encode($data);
	}

}else{

	$data=[

		'status'=>500,

		'message'=>"Internal Server Error",

	];

header("HTTP/1.0 500 Internal Server Error");


return json_encode($data);

}

}

function getMensList(){

 global $conn;

 $query="select * from stock where category='men'";

 $query_run=mysqli_query($conn,$query);

if ($query_run) {

	if (mysqli_num_rows($query_run)>0) {
		
		$res=mysqli_fetch_all($query_run,MYSQLI_ASSOC);

		$data=[

 		'status'=>200,

		'message'=>"category List Fetch Successfully",

		'data'=>$res

	];

header("HTTP/1.0 200 OK");

return json_encode($data);

	}else{

		$data=[

		'status'=>404,

		'message'=>"No Stock Found",

	];

header("HTTP/1.0 404 No Stock Found");

echo json_encode($data);
	}

}else{

	$data=[

		'status'=>500,

		'message'=>"Internal Server Error",

	];

header("HTTP/1.0 500 Internal Server Error");


return json_encode($data);

}

}

function getWomensList(){

 global $conn;

 $query="select * from stock where category='women'";

 $query_run=mysqli_query($conn,$query);

if ($query_run) {

	if (mysqli_num_rows($query_run)>0) {
		
		$res=mysqli_fetch_all($query_run,MYSQLI_ASSOC);

		$data=[

 		'status'=>200,

		'message'=>"category List Fetch Successfully",

		'data'=>$res

	];

header("HTTP/1.0 200 OK");

return json_encode($data);

	}else{

		$data=[

		'status'=>404,

		'message'=>"No Stock Found",

	];

header("HTTP/1.0 404 No Stock Found");

echo json_encode($data);
	}

}else{

	$data=[

		'status'=>500,

		'message'=>"Internal Server Error",

	];

header("HTTP/1.0 500 Internal Server Error");


return json_encode($data);

}

}

function getBabyList(){

 global $conn;

 $query="select * from stock where category='baby'";

 $query_run=mysqli_query($conn,$query);

if ($query_run) {

	if (mysqli_num_rows($query_run)>0) {
		
		$res=mysqli_fetch_all($query_run,MYSQLI_ASSOC);

		$data=[

 		'status'=>200,

		'message'=>"baby List Fetch Successfully",

		'data'=>$res

	];

header("HTTP/1.0 200 OK");

return json_encode($data);

	}else{

		$data=[

		'status'=>404,

		'message'=>"No Stock Found",

	];

header("HTTP/1.0 404 No Stock Found");

echo json_encode($data);
	}

}else{

	$data=[

		'status'=>500,

		'message'=>"Internal Server Error",

	];

header("HTTP/1.0 500 Internal Server Error");


return json_encode($data);

}

}

function getBookList(){

 global $conn;

 $query="select * from stock where category='book' OR category='media'";

 $query_run=mysqli_query($conn,$query);

if ($query_run) {

	if (mysqli_num_rows($query_run)>0) {
		
		$res=mysqli_fetch_all($query_run,MYSQLI_ASSOC);

		$data=[

 		'status'=>200,

		'message'=>"book List Fetch Successfully",

		'data'=>$res

	];

header("HTTP/1.0 200 OK");

return json_encode($data);

	}else{

		$data=[

		'status'=>404,

		'message'=>"No Stock Found",

	];

header("HTTP/1.0 404 No Stock Found");

echo json_encode($data);
	}

}else{

	$data=[

		'status'=>500,

		'message'=>"Internal Server Error",

	];

header("HTTP/1.0 500 Internal Server Error");


return json_encode($data);

}

}

function getHomeList(){

 global $conn;

 $query="select * from stock where category='home'";

 $query_run=mysqli_query($conn,$query);

if ($query_run) {

	if (mysqli_num_rows($query_run)>0) {
		
		$res=mysqli_fetch_all($query_run,MYSQLI_ASSOC);

		$data=[

 		'status'=>200,

		'message'=>"home List Fetch Successfully",

		'data'=>$res

	];

header("HTTP/1.0 200 OK");

return json_encode($data);

	}else{

		$data=[

		'status'=>404,

		'message'=>"No Stock Found",

	];

header("HTTP/1.0 404 No Stock Found");

echo json_encode($data);
	}

}else{

	$data=[

		'status'=>500,

		'message'=>"Internal Server Error",

	];

header("HTTP/1.0 500 Internal Server Error");


return json_encode($data);

}

}
?>