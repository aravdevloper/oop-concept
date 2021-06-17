<?php
	/*
	class A{
		private  $name = "ankit";

		public function show(){

		         echo "my name is".$this->name;
		}
		
		function __get($property){
			echo "you can't use private poperty or non exsisting property ".($property);
		}

	}


	$obj = new A();
    $obj->name;
    */


    class A{

    	private $data = ["name" => "ankit", "class"=>"B.A", "hobbies"=>"cricket"];

    	public function __get($key){
    		if(array_key_exists($key, $this->data)){
    			return  $this->data[$key];
    		}else{
    		  return "you can't use non exsisting property ".($key);
    		}
    	}
    }

    $obj = new A();
    echo $obj->sports;



?>