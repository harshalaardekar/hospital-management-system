<?php
include '../connect.php';
session_start();
$rm= $_GET['rm'];
$adid = $_GET['adid'];
$pid = $_GET['pid'];
echo "RM ".$rm." PID".$pid." ADID".$adid;
if ($result0 = $mysqli->query('select quantity from room_details where rmno = '.$rm)){
	$object = $result0->fetch_object();
	$quantity = $object->quantity;
	echo "Quantity - ".$quantity."<br>";
	$quantity = $quantity + 1;
	if($result1=$mysqli->query('update admit set discharge_dt = NOW(), discharge_time= NOW(), admit = 0 where adid = '.$adid)){
		if($result2=$mysqli->query('update room_details set quantity = '.$quantity.' where rmno = '.$rm)){
			if($result3=$mysqli->query('update patient_details set admit = 0 where pid = '.$pid)){
				echo "Patient Dicharged! <br>";
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
else{
  echo "Error : ".mysql_error();
}
?>