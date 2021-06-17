<?php
include 'database.php';
$obj = new database();


if(isset($_GET['id'])) {
  $del_id = $_GET['id'];

  $obj->delete('users', $del_id   );
  //print_r($obj->getresult());
  header("Location: users.php");
}



?>