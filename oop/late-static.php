<?php
		/*
	    class A{


	    	protected static $name = "ankit";

	    	public static function show(){
	    		echo static::$name; // 

	    	}
	    }

	    class B extends A{
	    	protected static $name = "arav";


	    }

	    $obj = new B();
	    $obj::show();
	    */

	    class A{


	    	protected static $name = "ankit";

	    	public static function one(){
	    		 echo "this is chilld class function";
	    	}

	    	public static function show(){
	    		echo static::$name."<br>"; // 
	    		echo static::one();

	    	}
	    }

	    class B extends A{
	    	protected static $name = "arav";

	    	public static function one(){
	    		 echo "this is parent class function";
	    	}


	    }

	    $obj = new B();
	    $obj::show();




?>