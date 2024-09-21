<?php
header('Access-Control-Allow-Origin:*'); //allo everything
header('Content-Type:application/json'); //whatever data send  from backend only json format   
header('Access-Control-Allow-Method:GET'); // read.php only access get method not post,delete
header('Access-Control-Allow-Headers:Content-Type,Access-Control-Allow-Headers,Autherization,X-Request-With');

include 'online_fun.php';

$requestMethod=$_SERVER["REQUEST_METHOD"];

if ($requestMethod == 'GET') {
if (isset($_GET['id'])) {
	$Stock=getStock($_GET);
	echo $Stock;
}else{
	$StockList=getStockList();
	echo $StockList;
 }

}

else{
	$data=[
		'status'=>405,
		'message'=>$requestMethod ."Method not Allowed",
	];
header("HTTP/1.0 405 Method not Allowed");
echo json_encode($data);
}
?>