<?php
include '../connect.php';
session_start();
$lid = $_SESSION['lid'];
if ($result = $mysqli->query("SELECT did,fname,lname,dob, TIMESTAMPDIFF(YEAR, dob, CURDATE()) AS age, gender,yoe, qualification,cid FROM doctor_details WHERE lid='".$lid."'")) {
  while ($object = $result->fetch_object()) {
    $fname = $object->fname;
    $lname = $object->lname;
    $dob = $object->dob;
    $age = $object->age;
    $gender = $object->gender;
    $yoe = $object->yoe;
    $did = $object->did;
    $cid = $object->cid;
    $qualification = $object->qualification;
    if ($object->gender == 1) {
      $gender = 'Male';
    }
    else{
      $gender = 'Female';
    }
  }
}
?>
<header class="main-header">
        <!-- Logo -->
        <a href="#" class="logo">
          <!-- mini logo for sidebar mini 50x50 pixels -->
          <span class="logo-mini"><b>H</b>E</span>
          <!-- logo for regular state and mobile devices -->
          <span class="logo-lg"><b>Health</b>Care</span>
        </a>
        <!-- Header Navbar: style can be found in header.less -->
        <nav class="navbar navbar-static-top">
          <!-- Sidebar toggle button-->
          <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </a>
          <?php
          if ($result = $mysqli->query("SELECT * FROM appointment WHERE did =".$did." AND seen = 0")) {
          $notification = $result->num_rows;
          }
          ?>
          <div class="navbar-custom-menu">
            <ul class="nav navbar-nav">
            <li class="dropdown notifications-menu">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                <i class="fa fa-bell-o"></i>
                <span class="label label-warning"><?php echo $notification;?></span>
              </a>
              <ul class="dropdown-menu">
                <li class="header">You have <?php echo $notification;?> notifications</li>
                <li>
                  <!-- inner menu: contains the actual data -->
                  <ul class="menu">
                    <?php
                    if ($result = $mysqli->query("SELECT dt,time,booking FROM appointment WHERE did =".$did." AND seen = 0")) {
                      while ($object = $result->fetch_object()) {
                        $dt = $object->dt;
                        $booking = $object->booking;

                        if ($booking == 0) {
                          $booking = 'Assistant';
                          $faicon = 'fa fa-warning text-yellow';
                        }
                        else {
                          $booking = 'Self';
                          $faicon = 'fa fa-user text-red';
                        }
                        echo '
                        <li class="schedule" value="'.$did.'" style="padding : 1em;">
                          
                            <i class="'.$faicon.'"></i>Your Schedule is appointed by '.$booking.'</br> and Date - '.$dt.' Time - '.$object->time.'                        
                        </li>
                    ';
                      }
                    }
                    ?>
                  </ul>
                </li>
                <!-- <li class="footer"><a href="#">View all</a></li> -->
              </ul>
            </li>
              <!-- User Account: style can be found in dropdown.less -->
              <li class="dropdown user user-menu">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                  <img src="../icons/avatars/png/assistant.png" class="user-image" alt="User Image">
                  <span class="hidden-xs">Doctor</span>
                </a>
                <ul class="dropdown-menu">
                  <!-- User image -->
                  <li class="user-header">
                    <img src="../icons/avatars/png/assistant.png" class="img-circle" alt="User Image">
                    <?php
                    echo "<p>".$fname."&nbsp ".$lname."
                      <small>".$gender." &nbsp ".$age."</small>
                    </p>";
                    ?>
                  </li>
                  <!-- Menu Footer-->
                  <li class="user-footer">
                    <div class="pull-left">
                      <!-- <a href="#" class="btn btn-default btn-flat">Profile</a> -->
                    </div>
                    <div class="pull-right">
                      <a href="../logout.php" class="btn btn-default btn-flat">Sign out</a>
                    </div>
                  </li>
                </ul>
              </li>
            </ul>
          </div>
        </nav>
      </header>
<script type="text/javascript">
$(function(){
  $('.schedule').on('click',function(){
   var id = $(this).val();
   var dataString = 'pid='+ id;
   window.alert(dataString);
   
    })
});
</script>