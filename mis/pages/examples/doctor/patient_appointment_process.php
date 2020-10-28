<?php
include '../connect.php';
session_start();
$apid = $_POST['apid'];
//$date = $_POST['date'];
$cal_date = $_POST['date'];
$date = date('Y-m-d',strtotime($cal_date));
$cal_time = $_POST['time'];
$time = date("G:i", strtotime($cal_time));
$status = $_POST['status'];
$seen = $_POST['seen'];

echo "apid ".$apid . " date ".$date." time ".$time." status ".$status." seen ".$seen;
if ($result = $mysqli->query("update appointment set dt = '".$date."' ,time = '".$time."', status = ".$status.", seen = ".$seen." where apid = ".$apid.";")){
	echo "Appointment updated";
	header("refresh:0; url=dashboard.php");
}
else{
  echo "Error : ".mysql_error();
}
?>