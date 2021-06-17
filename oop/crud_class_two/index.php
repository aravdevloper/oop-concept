<?php

include("database.php");


$obj = new database();
$colname = "students.id,students.name,students.age,scity.cname";
$join = "scity ON students.city = scity.cid";
$limit = 3;


$obj->select('students',$colname,$join,null,null,$limit);
echo "select data result is  ";
echo "<pre>";
print_r($obj->getresult());
echo "</pre>";

$obj->pagination('students',null,null,2);

/*
$obj->insert('students',['name'=> 'abhishek','age'=>'25','city'=>'punjab']);
echo "Insert result is ";
print_r($obj->getresult());
*/

//$obj->update('students',['name'=> 'ankur','age'=>'22','city'=>'gaziyabad'], 'id = "1"');
/*
$obj->update('students',['city'=>'jaipur'], 'city="punjab"');
echo "update result is ";
print_r($obj->getresult());
*/
/*
$obj->delete('students','city = "noida"');
echo "Delete result is ";
print_r($obj->getresult());
*/
/*
$obj->sql(' SELECT * FROM students WHERE id = "3" ');
echo "sql data result is ";
echo "<pre>";
print_r($obj->getresult());
echo "</pre>";
*/





?>