<?php
//public,protected,private;

       
	/*
       class A{
       		public $name;
       		public $age;

       	   public function show(){
       	   		echo "<h3>This is parent class.</h3><br>";
       	   	    echo "my name is ".$this->name."<br>";
       	   	    echo "my age is ".$this->age."<br>";
       	   }

           }


          class B extends A{
          	public function get(){
          		// we can use property of derived class............
          		echo "<h3>This is chilld class.</h3><br>";
       	   	    echo "my name is ".$this->name."<br>";
       	   	    echo "my age is ".$this->age."<br>";
       	   }


          }
          // first class
          
           $a1 = new A();
           $a1->name = "ankit";
           $a1->age = 25;// in public case we can assign value to property from out side the class.
           $a1->show(); // we can call method from out side the class
           

           $a2 = new B();
           $a2->name = "ram";
           $a2->age = 22;
           $a2->get();

  */


           class A{
       		protected $name;
       		protected $age;

       	   protected function show($n,$a){
       	   		echo "<h3>This is parent class.</h3><br>";
       	   	    echo "my name is ".$this->name = $n."<br>";
       	   	    echo "my age is ".$this->age = $a."<br>";
       	   }

           }

           class B extends A{
          	public function show($n,$a){
          		// we can use property of derived class............
          		echo "<h3>This is chilld class.</h3><br>";
       	   	    echo "my name is ".$this->name = $n."<br>";
       	   	    echo "my age is ".$this->age = $a."<br>";
       	   }
       	}

       	   $a2 = new B();
           $a2->show("ankit",30); 



         
          // first class
          /*
           $a1 = new A;
           $a1->show("ankit",30); 

          */
           



           


?>