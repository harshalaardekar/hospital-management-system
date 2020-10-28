<?php
include '../connect.php';
session_start();
$apid = $_GET['apid'];

if ($result = $mysqli->query("update appointment set status = 1 where apid = ".$apid.";")){
	echo "Appointment deleted";
	header("refresh:0; url=dashboard.php");
}
else{
  echo "Error : ".mysql_error();
}
?>