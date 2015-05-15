<?php
require('core/init.php');
$response = array();

if(isset($_POST['pid'])){

	$pid = $_POST['pid'];
	$result = $users->deletedetails($pid);
	if($result){
		$response['success'] = 1;
	$response['message'] = "Details are deleted";
	echo json_encode($response);
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