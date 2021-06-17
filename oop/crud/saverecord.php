<?php

include 'database.php';
$obj = new database();

$name = $_POST['name'];
$email = $_POST['email'];
$phone = $_POST['phone'];

$value = ["name"=>$name, "email"=>$email, "phone"=>$phone];

if($obj->insert("users",$value)){
  //echo "data has been successfull into database";
  header("Location: users.php");

  
}else{
		echo "data has been not successfull into database";
	}



?>