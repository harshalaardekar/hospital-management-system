<?php
include '../connect.php';
session_start();
if(isset($_POST['submit'])){
  $cname = $_POST['cname'];
  $cdetails = $_POST['cdetails']; 
  //alert('Cname : '.$cname.' Cdetails : '.$cdetails);
  if ($cname != '' && $cdetails != '') {
      if ($result = $mysqli->query('insert into doctor_category(cname,cdetails) values (\''.$cname.'\',\''.$cdetails.'\');')){
        echo "Category Added";
        header("refresh:0; url=dashboard.php");
      }else{
                echo "Fill the details";
      }
  }else{
       echo "Error : ".mysql_error();
       echo "<br> Insert into login_details failed!";
  }
}else{
  echo "POST is not set!";
}
?>