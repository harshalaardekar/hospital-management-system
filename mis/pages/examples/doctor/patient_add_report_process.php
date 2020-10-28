<?php
include '../connect.php';
//echo "Search ".$_REQUEST['search'];
$did = $_POST['did'];
$pid = $_POST['pname'];
error_reporting(0);
//echo "DID ".$did." PID ".$pid;
$dir = $pid;

if( is_dir($dir) === false )
{
    mkdir("uploads/".$dir);
}

$uploaddir = 'uploads/'.$dir.'/';
$uploadfile = $uploaddir . basename($_FILES['userfile']['name']);
$newfilename= date('dmY_His_').str_replace(" ", "", basename($_FILES["userfile"]["name"]));

//echo '<pre>';
if (move_uploaded_file($_FILES['userfile']['tmp_name'],$uploaddir . $newfilename)) {
    //echo "File is valid, and was successfully uploaded.\n";
    if($result = $mysqli->query('insert into reports(pid,did,name) values('.$pid.','.$did.',"'.$newfilename.'");')){
    	echo "Report Uploaded";
		header("refresh:0; url=view_report.php");
    }
    else{
    	echo "Error : ".mysqli_error();
    }
} else {
    echo "Possible file upload attack!\n";
}

//echo 'Here is some more debugging info:';
//print_r($_FILES);

//print "</pre>";
?>