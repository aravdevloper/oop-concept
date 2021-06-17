<?php

    /**
     * 
     */
    class employe
    {	
    	public $name;
    	public $age;
    	public $salery;
    	
    	function __construct($n,$a,$s)
    	{
    		$this->n = $n;
    		$this->a = $a;
    		$this->s = $s;
    	}

    	 function info(){
    	 	echo "this is employe profile <br>";
    	 	echo "name is ".$this->n.'<br>';
    	 	echo "age is ".$this->a.'<br>';
    	 	echo "salery is ".$this->s.'<br>';
    	 }

    }

    class manager extends employe{

    	     public $ta = 200;
    	     public $phone = 500;
    	     public $totalsalery;
       
       function	info(){

       	    $this->totalsalery = $this->s + $this->ta + $this->phone;
       	    echo "this is manager profile <br>";
    	 	echo "manager name is ".$this->n.'<br>';
    	 	echo "manager age is ".$this->a.'<br>';
    	 	echo "manager salery is ".$this->totalsalery;

       }
       

	 }

	 
	 $e1 = new employe("yahoo",35,18000);
	 $e1->info();

	 $e2 = new manager("ankit",18,10000);
	 $e2->info();

    





?>