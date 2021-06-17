<?php
 include "database.php";
 $obj = new database();


?>



<!DOCTYPE html>
<html>
<head>
	<title>php oop</title>
</head>
<body>

	<form method="post" action="savedata.php">
		<label>Name</label>
		<input type="test" name="sname"><br><br>

		<label>Age</label>
		<input type="test" name="sage"><br><br>

		<label>City</label>
		<select name="scity" id="">
		<?php
		$obj->select('scity');
		$result = $obj->getresult();

		foreach ($result as list("cid"=>$cid, "cname"=>$cname)){
			echo "<option value='$cid'>$cname</option>";
		}


		?>
			
	    </select>
	    <br><br>
	    <input type="submit" value="save">

	</form>

</body>
</html>