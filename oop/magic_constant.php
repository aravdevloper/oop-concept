<?php

namespace first;


trait one{
      public function getTrait(){
      	return __TRAIT__;
      }
}

echo "this line number is ".__LINE__."<br>";
echo "this is file is".__FILE__."<br>";;

echo "this folder is".__DIR__."<br>";

class A{


		use one;
		
	    public function show(){
	    /*
	  	echo "function name is ".__function__."<br>";;
	  	echo "Class name is ".__CLASS__."<br>";
	  	echo "Method name is ".__method__."<br>";
	  	*/
	  	echo "TRAIT name is ".__TRAIT__."<br>";
	  	

	  }
}

  $obj = new A();
  echo $obj->getTrait();

echo "namespace is ".__namespace__."<br>";

trait two{
	public function get(){
		return __TRAIT__;
	}
}

class student{
	use two;
}

 $obj1 = new student();
 $obj1->get();














?>