<?php
	/*
	class Ankit{

	}
     
     class A extends Ankit{

     	public function __construct(){
     		echo "class name is".get_class($this)."<br>";
     		echo "Parentclass name is ".get_parent_class($this)."<br>";

     		print_r(get_class_methods("A"));
     		echo "<br>";



     	}

     	public function show(){
     		

     	}

     	private function show1(){
     		

     	}
     }

     $obj = new A();

     //check out side tha class............
     echo get_class($obj);
     $method =  get_class_methods("A");// we can see only public method..........................
     print_r($method);

     */

     /*
     class A{
     	public $var1;
     	public $var2 = "hello";
     	public $var3 = 100;
     	private $var4;

     	public function __construct(){
     		$this->var1 = "ankit";
     		$this->var2 = 200;
     		$var1 =	get_class_vars(__class__);
     		print_r($var1);
     		echo "<pre>";
     	}


     }


     $obj = new A();
     $var =  get_class_vars(get_class($obj));
     print_r($obj);
     */


     /*

     class ABC{

     public static function show(){
     var_dump(get_called_class());//get_called_class() this function tel that call function for whic class................
     		echo "<br>";
     	}
	 }

	 class XYZ extends ABC{

	 }
	 ABC::show();
	 XYZ::show();
	 print_r(get_declared_classes());// this function get all classes or by default class.............
	*/

	 /*
	trait XYZ{

	}

	trait JKL{

	}


	 interface ABC{

	 }

	 class A{
	    use XYZ;
	 	use JKL;

	 }
	 print_r(get_declared_interfaces());// this function tell all interface or by default interface.....
	 echo "<pre>";
	 print_r(get_declared_traits());// this function tell all train in page or class...........
	 */

	 class ankit{
	 	public $name;

	 }

	 class_alias("ankit","A");
	 $obj = new ankit();
	 $obj1 = new A();
	 $obj->name = "vikas";
	 echo $obj1->name;




?>