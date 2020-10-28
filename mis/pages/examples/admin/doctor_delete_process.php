<?php
include '../connect.php';
session_start();
$did = $_GET['did'];
if ($result = $mysqli->query('UPDATE doctor_details SET  available = 0 where did=\''.$did.'\'')){
  echo "Doctor Deleted!";
  header("refresh:0; url=dashboard.php");
}
else{
  echo "Error : ".mysql_error();
}
?>