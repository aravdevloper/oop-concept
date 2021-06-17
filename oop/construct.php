<?php

// Constuct................................


	
	class person{
		     public $name = "no name";// no name is default value.........
		     public $name1 = "no name";
		     function __construct($n,$m){
		     	$this->name = $n;
		     	$this->name1 = $m;
		     	
		     }

		     function show(){
		     	echo "my name is ".$this->name." ".$this->name1;
		     }
			}

	   $p1 = new person("ankit","kumar");
	   $p1->show();



?>