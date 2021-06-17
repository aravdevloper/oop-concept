<?php
	/*
	require "classes/first.php";
	require "classes/second.php";
	*/
	function __autoload($class){
	 	require "classes/" . $class . "php";

	 }

	 $new = new first();


	





?>