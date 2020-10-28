<?php
include '../connect.php';
session_start();
$rm = $_POST['rm'];
$pid = $_POST['pid'];
$did = $_POST['did'];
echo "RM ".$rm." PID".$pid." DID".$did;
if ($result = $mysqli->query('select quantity from room_details where rm = '.$rm)){
	$object = $result->fetch_object();
	if($object->quantity > 0){
		$query = 'insert into admit(rm,pid,did,admit_dt,admit_time,disharge_dt,discharge_time) values('.$rm.','.$pid.','.$did.',NOW(),NOW(),NULL,NULL)';
		if($result1 = $mysqli->query($query)){
			$query1 = 'update room_details set quantity = '.($object->quantity-1).' where rm = '.$rm;
			if($result2 = $mysqli->query($query1)){
				$query2 = 'update patient_details set admit = 1 where pid = '.$pid;
				if($result3 = $mysqli->query($query2)){
					echo "Patient Admitted!";
	  				header("refresh:2; url=dashboard.php");
  				}
			}
		}
		else{
			echo "Error : ".mysql_error();
		}
	}
	else{
		echo "quantity !>0";
	}
}
else{
  echo "Error : ".mysql_error();
}
?>