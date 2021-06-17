<?php

  abstract class A{


  protected abstract function get($a,$b);

  }

  class B extends A{

  	  public function get($a,$b){

  	  	 echo $a + $b;
  	  }
  }

  $obj = new B();
  $obj->get(10,15);




?>