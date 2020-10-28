<?php
include '../connect.php';
session_start();
$did = $_GET['did'];
if ($result = $mysqli->query('delete from doctor_details where did=\''.$did.'\'')){
  echo "Doctor Deleted!";
  header("refresh:2; url=dashboard.php");
}
else{
  echo "Error : ".mysql_error();
}
?>