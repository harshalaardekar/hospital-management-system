<?php
include '../connect.php';
//echo "Search ".$_REQUEST['search'];
if($_REQUEST["value"]){
$val = $_REQUEST["value"];
$output = "";
if($result = $mysqli->query("select pid,fname,lname,gender,uid from patient_details where fname LIKE '%".$val."%' OR lname LIKE '%".$val."%';")){
	if($result->num_rows > 0){
		while ($object = $result->fetch_object()) {
                    if($object->gender == 0){
                      $gender = "Female";
                    }
                    else{
                      $gender = "Male";
                    }
                    $output .= "<tr>
                      <td>".$object->pid." </td>&nbsp;
                      <td>".$object->fname." ".$object->lname." </td>&nbsp;
                      <td>".$gender." </td>&nbsp;
                      <td>".$object->uid."</td>
                    </tr>";
                    }
                    echo $output;
	}
	else{
		echo "Data not found";
	}
}
else 
{
	echo 0;	
}
}
?>