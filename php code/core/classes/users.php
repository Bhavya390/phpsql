<?php

class Users{
 
 private $db;

 public function __construct($database){
  
   $this->db=$database;

}

public function adddetails($pid , $name ,$email)
{	
	$query = $this->db->prepare("INSERT INTO `details`( `pid`, `name`, `email`) VALUES ('$pid','$name','$email')");
	try{
		
		$query->execute();
		//$data = $query->fetch();
		//$stored_accesskey = $data['AccessKey'];
		//$id = $data['Id'];
		return $query;
		}catch(PDOException $e){
 
		die($e->getMessage());
	}
}
public function deletedetails($id)
{
	$query = $this->db->prepare("DELETE FROM details WHERE pid ='$id'");
	try{
		return $query->execute();
	}catch(PDOException $e){
		die($e->getMessage());
	}
}
public function showdetails($pid)
{
	$query = $this->db->prepare("SELECT * FROM details WHERE pid ='$pid'");
	$query->bindValue(1,$admin_id);
	try{
		
		$query->execute();
		$data = $query->fetchAll();
		//$stored_accesskey = $data['AccessKey'];
		//$id = $data['Id'];
		return $data;
		}catch(PDOException $e){
 
		die($e->getMessage());
	}
}
public function showdetailsall($pid)
{
	$query = $this->db->prepare("SELECT * FROM details");
	$query->bindValue(1,$admin_id);
	try{
		
		$query->execute();
		$data = $query->fetchAll();
		//$stored_accesskey = $data['AccessKey'];
		//$id = $data['Id'];
		return $data;
		}catch(PDOException $e){
 
		die($e->getMessage());
	}
}
public function updatedetails($pid , $name ,$email)
{
	$query = $this->db->prepare("UPDATE `details` SET `name`='$name',`email`='$email' WHERE `pid`='$pid'");
	try{
		return $query->execute();
	}catch(PDOException $e){
		die($e->getMessage());
		}
}
}
?>
