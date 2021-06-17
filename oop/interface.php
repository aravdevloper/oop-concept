<?php
	interface A{

	public  function hi();// declare
	}

	interface B{
     public  function hello();
	}

	interface C{
	public function by();
	}

	class D implements A,B,C{

		public function hi(){  // define
			echo "hi ankit <br>";
		}

		public function hello(){
			echo "hello ankit <br>";
		}

		public function by(){
			echo "by ankit <br>";
		}
	}

	$obj = new D();
	$obj->hi();
	$obj->hello();
	$obj->by();





?>