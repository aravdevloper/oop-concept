<?php

	include "database.php";
	$obj = new database();

	//print_r($_POST);
	$sname = $_POST['sname'];
	$sage = $_POST['sage'];
	$scity = $_POST['scity'];

	$value = ["name"=>$sname, "age"=>$sage, "city"=>$scity];

	if($obj->insert("students",$value)){
		echo "data has been successfull into database";
		
	}else{
		echo "data has been not successfull into database";
	}





?>