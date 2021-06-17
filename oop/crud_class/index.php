<?php

 include "database.php";
 $obj = new database();
 /*
 $obj->insert('students',['student_name' => 'manisha', 'age' => '22', 'city' => 'bhopal']);
 echo "insert result is";
 print_r($obj->getresult());
 */

 //$obj->update('students',['student_name' => 'akku', 'age' => '30', 'city' => 'noida'],'id="1"');
 /*
 $obj->update('students',['city'=>'mathura'], 'city = "agra"'); 
 echo "update result is";
 print_r($obj->getresult());
 */
 /*
 $obj->delete('students','id= "6"');

 echo "Delete result is";

 print_r($obj->getresult());
 */
/*
 $obj->sql('SELECT * FROM students WHERE age = "20"');
 echo "data result is";
 print_r($obj->getresult());
 */
 $obj->select('students','*',null,'city="noida"',null,2);
 echo "<br>select result is :";
 echo "<pre>";
 print_r($obj->getresult());
 echo "</pre>";

 $obj->pagination('students',null,'city="noida"',2);

?>