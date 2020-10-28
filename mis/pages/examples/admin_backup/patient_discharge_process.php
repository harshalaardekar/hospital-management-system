<?php
include '../connect.php';
session_start();
$rm = $_GET['rm'];
$pid = $_GET['pid'];
echo "RM ".$rm." PID ".$pid;
if ($result = $mysqli->query('select * from room_details where rm = '.$rm)){
	$object = $result->fetch_object();
	if(1){
		$query = 'update admit set discharge_dt = NOW(), discharge_time = NOW() where rm = '.$rm;
		if($result1 = $mysqli->query($query)){
			$query1 = 'update room_details set quantity = '.($object->quantity+1).' where rm = '.$rm;
			if($result2 = $mysqli->query($query1)){
				$query2 = 'update patient_details set admit = 0 where pid = '.$pid;
				if($result3 = $mysqli->query($query2)){
					echo "Patient Dicharged!";
	  				header("refresh:2; url=dashboard.php");
  				}
  				else{
  					echo "Error : ".mysql_error();
  				}
			}
			else{
				echo "Error : ".mysql_error();
			}
		}
		else{
			echo "Error : ".mysql_error();
		}
	}
}
else{
  echo "Error : ".mysql_error();
}
?>