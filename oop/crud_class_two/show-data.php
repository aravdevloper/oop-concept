<?php

include("database.php");


$obj = new database();
$colname = "students.id,students.name,students.age,scity.cname";
$join = "scity ON students.city = scity.cid";
$limit = 3;


$obj->select('students',"*",$join,null,null,$limit);
echo "select data result is  ";
$result = $obj->getresult();

echo "<table border='1' width='500'>
		<tr>
		<th>Id</td>
		<th>Students Name</td>
		<th>Age</td>
		<th>City</td>
		</tr>";

	
foreach ($result as list("id"=> $id, "name"=> $name, "age" => $age, "cname"=> $city)){

	echo "<tr><td>$id </td><td>$name </td><td> $age </td><td> $city</td></tr> <br>";
	
}

echo "</teble>";
$obj->pagination('students',null,null,2);



?>