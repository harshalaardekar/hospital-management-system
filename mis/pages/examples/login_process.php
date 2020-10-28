<?php
include 'connect.php';
session_start();
if(isset($_POST['submit'])){
  $email = $_POST['email'];
  $password = $_POST['epassword']; 
  $email = mysqli_real_escape_string($mysqli,$email);
  $password = mysqli_real_escape_string($mysqli,md5($password));

  //echo $email;

  if ($result = $mysqli->query('select * from login_details where email =\''.$email.'\' and epassword = \''.$password.'\'')){
      //printf("Select returned %d rows.\n", $result->num_rows);
      if ($result->num_rows == 1) {
        //echo "Login Sucessfull...";
        $object = $result->fetch_object();
        $_SESSION['lid'] = $object->lid;
        $_SESSION['currentuser'] = $email;
        $_SESSION['login'] = 1;
        $_SESSION['category'] = $object->category;

        echo "Your email id is ".$email.",id is ".$_SESSION['lid'].", category is ".$_SESSION['category'];
        if($object->category == 0){
            header("refresh:0; url=admin/dashboard.php");
            //admin login
        }
        else if ($object->category == 1) {
          # code... doctor login
          header("refresh:0; url=doctor/dashboard.php");
        }
        elseif ($object->category == 2) {
          # code... patient login
          header("refresh:0; url=patient/dashboard.php");
        }
        else {
          # code... 
          echo "Category unknown";
        }
    /* free result set */
      }
  }else{
    echo "Error : ".mysql_error();
  }
}else{
  echo "POST is not set!";
}
?>