<?php

   


   $servername = "localhost";
   $username = "root";
   $password = "";
   $DBNAME = "oop";

   // make connection with database.............................................
   $conn = new mysqli($servername,$username,$password,$DBNAME);

   if($conn->connect_error){
   	die("connection failed ".$conn->connect_error);
   }

   $sql = "SELECT * FROM students";
   $fire = $conn->query($sql);

   if($fire->num_rows > 0 ){
   	while($row = $fire->fetch_assoc()){
   		echo "id: {$row['id']} - name: {$row['student_name']}- age: {$row['age']} city: {$row['city']} <br>";
   		
   	}
   	
   }else{
   	  echo "No Result Found";
   }

   $conn->close()





?>