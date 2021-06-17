<?php

    




    class calculate{  // this is class
   	public $a,$b,$c;//------> this is properties
        function sum(){
        $this->c = $this->a + $this->b;
        return $this->c;
		}

        function sub(){
        $this->c = $this->a - $this->b;
        return $this->c;
        }

		}

       $first = new calculate();//---------------> this is object.
       $first->a = 10;
       $first->b = 20;
       echo $first->sum().'<br>';
       echo $first->sub().'<br>';

       $two = new calculate();//---------------> this is object.
       $two->a = 100;
       $two->b = 100;
       echo $two->sum().'<br>';
       echo $two->sub().'<br>';






?>