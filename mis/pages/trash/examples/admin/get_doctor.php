<?php
include '../connect.php';
//echo "Search ".$_REQUEST['search'];
if($_REQUEST["value"]){
$val = $_REQUEST["value"];
$output = "";
if($result = $mysqli->query("select did,fname,lname,gender,qualification from doctor_details where fname LIKE '%".$val."%' OR lname LIKE '%".$val."%';")){
	if($result->num_rows > 0){
		while ($object = $result->fetch_object()) {
                    if($object->gender == 0){
                      $gender = "Female";
                    }
                    else{
                      $gender = "Male";
                    }
                    $output .= "<tr>
                      <td>".$object->did."</td>
                      <td>".$object->fname." ".$object->lname."</td>
                      <td>".$gender."</td>
                      <td>".$object->qualification."</td>
                     
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