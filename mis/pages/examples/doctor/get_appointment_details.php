<?php
include '../connect.php';
//echo "Search ".$_REQUEST['search'];
if($_GET["apid"]){
$apid = $_GET["apid"];
$data = array();
if($result = $mysqli->query("select a.apid as apid, p.fname as pfname, p.lname as plname, d.fname as dfname, d.lname as dlname, DATE_FORMAT(a.dt,'%m/%d/%Y') as date, DATE_FORMAT(a.time,'%r') as time, a.status as status, a.seen as seen from appointment a left outer join doctor_details d on a.did = d.did left outer join patient_details p on a.pid = p.pid where a.apid =".$apid.";")){
	if($result->num_rows > 0){
		while ($row = $result->fetch_assoc()) {
      $data = $row;          
	  }
  echo json_encode($data);
  }
}
}
else 
{
   echo 0;  
}
?>