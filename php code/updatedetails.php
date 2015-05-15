<?php
require('core/init.php');
$response = array();

if(isset($_POST['pid']) && isset($_POST['name']) && isset($_POST['email'])){
$pid = $_POST['pid'];
$name = $_POST['name'];
$email = $_POST['email'];
$result = $users->updateetails($pid , $name , $email);
if($result){
	$response['success'] = 1;
	$response['message'] = "updated";
	echo json_encode($response);

}
else
{
}
}
else
{
	$response['success'] = 0;
	$response['message'] = "not filled";
	echo json_encode($response);
}

?>