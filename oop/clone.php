<?php
    /*
    class A{


    	public $name;
    	public $course;

    	public function __construct($n){
    	 $this->name = $n;

    	}
    }

    $obj = new A("ankit");
    $obj1 = clone $obj; // clone do copy by value...............
    
   	$obj1->name = "vikas";
   	echo $obj->name."<br>";
    //echo  $obj1->name;
    */

    // __clone() method....................................................

    class A{


        public $name;
        public $course;

        public function __construct($n){
         $this->name = $n;
        }
        public function setcourse(course $c){
            $this->course = $c;
        }
        public function __clone(){
         $this->course = clone $this->course ;
        }
    }

    class course{
        public $cname;

        public function __construct($n){
            $this->cname = $n;

        }
    }

    $obj = new A("ankit");

    $course1 = new course("php");

    $obj->setcourse($course1);
    
    $obj1 = clone $obj; 
    
    $obj1->name = "vikas";
    $obj1->course->cname = "Python";
    
    print_r($obj);
    echo "<br>";
    print_r($obj1);
    /*
    echo $obj->name."<br>";
    
    echo  $obj1->name;
    */
   

?>