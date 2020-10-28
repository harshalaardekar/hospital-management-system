<?php
include '../connect.php';
session_start();
$pid = $_POST['pid'];
$did = $_POST['did'];
//$date = $_POST['date'];
$cal_date = $_POST['date'];
$date = date('Y-m-d',strtotime($cal_date));
$time = $_POST['time'];
echo " PID".$pid." DID".$did;
if ($result = $mysqli->query("insert into appointment(pid,did,dt,time,booking,booking_by) values (".$pid.",".$did.",'".$date."','".$time."',".$_SESSION['category'].",".$_SESSION['lid'].");")){
	echo "Appointment booked";
	header("refresh:0; url=dashboard.php");
}
else{
  echo "Error : ".mysql_error();
}
?>