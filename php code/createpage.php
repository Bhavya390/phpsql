<?php
require('core/init.php');
$response = array();

if(isset($_POST['pid']) && isset($_POST['name']) && isset($_POST['email'])){
$pid = $_POST['pid'];
$name = $_POST['name'];
$email = $_POST['email'];
$result = $users->adddetails($pid , $name , $email);
if($result){
	$response['success'] = 1;
	$response['message'] = "registered";
	echo json_encode($response);

}
else
{
	$response['success'] = 0;
	$response['message'] = "Something went wrong";


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