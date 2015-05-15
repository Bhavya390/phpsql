<?php
require('core/init.php');
$response = array();

if(isset($_POST['pid'])){

	$pid = $_POST['pid'];
	$data = $users->showdetails($pid);
	if($data){
	foreach($data as $reach)
	{
		$product = array();
		$product['name'] = $reach['name'] 	   	
		$product['email'] = $reach['email'];

		$product['pid'] = $reach['pid'];
		$response['success'] = 1;
		$response['product'] = array();
		array_push($response['product'], $product);

		echo json_encode($response);

	}	
	}
	else
	{
		$response['success'] = 0;
		$response['message'] = "Details not found";
		echo json_encode($response);
	}
	}
	else
	{
	$response['success'] = 0;
	$response['message'] = "not filled";
	echo json_encode($response);
	}
	
?>