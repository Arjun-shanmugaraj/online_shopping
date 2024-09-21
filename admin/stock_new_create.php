<?php
// error_reporting(0);
header('Access-Control-Allow-Origin:*');
header('Content-Type:application/json');
header('Access-Control-Allow-Method:POST');
header('Access-Control-Allow-Headers:Content-Type,Access-Control-Allow-Headers,Authorization,X-Request-With');

include ('online_fun.php');

$rest=$_SERVER["REQUEST_METHOD"];

if ($rest=='POST') {

	$inputData=json_decode(file_get_contents("php://input"),true); 			//read a file into a string 
	if (empty($inputData)) {
		$stock=stock($_POST);
	}
	else{
		$stock=stock($inputData);
	}
	echo $stock;
}
else{
	$data=[
		'status'=>405,
		'message'=>$rest."Method Not Allowed",
	];
	header("HTTP/1.0 405 Method Not Allowed");
	echo json_encode($data);
}
header('location:stock_new_display.php');
?> 