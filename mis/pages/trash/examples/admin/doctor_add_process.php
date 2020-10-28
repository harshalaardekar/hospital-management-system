<?php
include '../connect.php';
session_start();
if(isset($_POST['submit'])){
  $email = $_POST['email'];
  $epassword = $_POST['epassword']; 
  $email = mysqli_real_escape_string($mysqli,$email);
  $epassword = mysqli_real_escape_string($mysqli,md5($epassword));
  if ($email != '' && $epassword != '') {
    # code...
  
  if ($result = $mysqli->query('select * from login_details where email =\''.$email.'\'')){
      //printf("Select returned %d rows.\n", $result->num_rows);
      if ($result->num_rows < 0) {
        echo "Email ID alreaady exists...";
      }
      else{

        if($result1 = $mysqli->query('insert into login_details(email,epassword,category) values(\''.$email.'\',\''.$epassword.'\',1);')){
          $fname = $_POST['fname'];
          $lname = $_POST['lname'];
          $dob = $_POST['dob'];
          $gender = $_POST['gender'];
          $qualification = $_POST['qualification'];
          $yoe = $_POST['yoe'];
          $bio = $_POST['bio'];
          $cid = $_POST['category'];

          if($fname != '' && $lname != '' && $dob != '' && $gender != '' && $qualification != '' && $yoe != '' && $bio != '' && $cid != ''){
          if($result2 = $mysqli->query('insert into doctor_details(lid,fname,lname,dob,gender,qualification,yoe,bio,cid) values(LAST_INSERT_ID(),\''.$fname.'\',\''.$lname.'\',\''.$dob.'\','.$gender.',\''.$qualification.'\','.$yoe.',\''.$bio.'\','.$cid.');')){
            echo "Doctor Added!";
            header("refresh:2; url=dashboard.php");
          }
          }else{
            echo "Fill the inner details";
          }
        }
        else{
          echo "Error : ".mysql_error();
          echo "<br> Insert into login_details failed!";
        }
      }
  }else{
    echo "Error : ".mysql_error();
  }
  }else{
    echo "Fill the details";
  }
}else{
  echo "POST is not set!";
}
?>