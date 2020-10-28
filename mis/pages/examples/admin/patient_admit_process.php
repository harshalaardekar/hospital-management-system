<?php
include '../connect.php';
session_start();
$rm = $_POST['rm'];
$pid = $_POST['pid'];
$did = $_POST['did'];
echo "RM ".$rm." PID".$pid." DID".$did;
if ($result = $mysqli->query('select quantity from room_details where rm = '.$rm)){
	$object = $result->fetch_object();
	$quantity = $object->quantity;
	echo $quantity."<br>";
	if($quantity>0){
		if($result1 = $mysqli->query('insert into admit(rm,pid,did,admit_dt,admit_time,admit) values('.$rm.','.$pid.','.$did.',NOW(),NOW(),1)')){
		echo "Admit Done! <br>";
		//header("refresh:0; url=dashboard.php");
		$quantity = $quantity - 1; 
			if($result2=$mysqli->query('update room_details set quantity = '.$quantity.' where rm = '.$rm)){
				if($result3=$mysqli->query('update patient_details set admit = 1 where pid = '.$pid)){
					echo "Patient Admitted! <br>";
					header("refresh:2; url=dashboard.php");
				}
				else{
					echo "Error in patient_details : ".mysql_error();
				}
			}
			else{
				echo "Error in room_details : ".mysql_error();
			}
		}
		else{
			echo "Error in Admit : ".mysql_error();
		}
	}
	else{
		echo "Quantity is 0";
	}
}
else{
  echo "Error : ".mysql_error();
}
?>