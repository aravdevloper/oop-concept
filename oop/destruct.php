<?php

class A{


	 public function __construct(){
	 	    echo "this is from construct <br>";
	 }
   

     public function name(){
     	    echo "this is from name function <br>";
     }

     public function __destruct(){
     	echo "this is from destruct method";
     }

 }
     $obj = new A();
     $obj->name();






?>