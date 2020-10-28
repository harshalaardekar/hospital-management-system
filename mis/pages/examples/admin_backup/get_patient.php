<?php
include '../connect.php';
//echo "Search ".$_REQUEST['search'];
if($_REQUEST["value"]){
$val = $_REQUEST["value"];
$output = "";
?>
<!DOCTYPE html>
<html>
<body>
                    <div class="col-md-12 col-xs-12">
              
                <!-- /.box-header -->
                  <table id="example2" class="table table-bordered">
                    <tbody>
                    <thead>
                      <tr>
                      <th>ID</th>
                      <th>Name</th>
                      <th>Gender</th>
                      <th>UID</th>
                      </tr>
                    </thead>
                    
</body>
</html>
       
<?php
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
                      <td>".$object->pid."</td>
                      <td>".$object->fname." ".$object->lname."</td>
                      <td>".$gender."</td>
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