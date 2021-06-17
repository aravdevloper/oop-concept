<?php

	class A{


		public function hello(){
			echo "hello ankit <br>";
			return $this;
		}

		public function hye(){
			echo "hye ankit <br>";
			return $this;
		}

		public function by(){
			echo "by ankit <br>";
			$this;
		}
	}

	
	//normal way
	$obj = new A();
	/*
	$obj->hello();
	$obj->hye();
	$obj->by();
	*/
	$obj->hello()->hye()->by();
	






?>