<?php

	class student{


		private static function hello($ram){
			echo "my name is $ram";
		}

		public static function __callStatic($method,$args){
		     if (method_exists(__class__, $method)){
		     	call_user_func_array([__class__, $method],$args);
		     	
		     }else{
		     	echo "method does not exsist";
		     }
		}
	}

	student::hello("ram");
?>