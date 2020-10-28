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

        if($result1 = $mysqli->query('insert into login_details(email,epassword,category) values(\''.$email.'\',\''.$epassword.'\',2);')){
          $fname = $_POST['fname'];
          $lname = $_POST['lname'];
          $dob = $_POST['dob'];
          $gender = $_POST['gender'];
          $height = $_POST['height'];
          $weight = $_POST['weight'];
          $address = $_POST['address'];
          $uid = $_POST['uid'];

          if($fname != '' && $lname != '' && $dob != '' && $gender != '' && $height != '' && $weight != '' && $address != '' && $uid != ''){
          if($result2 = $mysqli->query('insert into patient_details(lid,fname,lname,dob,gender,height,weight,address,uid) values(LAST_INSERT_ID(),\''.$fname.'\',\''.$lname.'\',\''.$dob.'\','.$gender.',\''.$height.'\','.$weight.',\''.$address.'\','.$uid.');')){
            echo "Patient Added!";
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