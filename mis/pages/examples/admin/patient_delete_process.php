<?php
include '../connect.php';
session_start();
$pid = $_GET['pid'];
if ($result = $mysqli->query('delete from patient_details where pid=\''.$pid.'\'')){
  echo "Patient Deleted!";
  header("refresh:0; url=dashboard.php");
}
else{
  echo "Error : ".mysql_error();
}
?>