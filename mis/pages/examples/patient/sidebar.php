<?php

?>
<section class="sidebar">
          <!-- Sidebar user panel -->
          <div class="user-panel">
            <div class="pull-left image">
              <img src="../icons/avatars/png/assistant.png" class="img-circle" alt="User Image">
            </div>
            <div class="pull-left info">
              <?php echo "<p>".$fname."&nbsp ".$lname."</br>
                      <small>".$address."</small></p>"; ?>
            </div>
          </div>
          <!-- sidebar menu: : style can be found in sidebar.less -->
          <ul class="sidebar-menu" data-widget="tree">
            <li class="header">MAIN NAVIGATION</li>
            <li>
              <a href="dashboard.php">
                <i class="fa fa-dashboard"></i> <span> Dashboard</span>
              </a>
            </li>
            <li class="treeview">
              <a href="#">
                <i class="fa fa-phone"></i> <span>Appointment</span>
                <span class="pull-right-container">
                  <i class="fa fa-angle-left pull-right"></i>
                </span>
              </a>
              <ul class="treeview-menu">
                <li><a href="patient_appointment.php?pid=<?php echo $pid; ?>"><i class="fa fa-circle-o"></i> Add Appointment</a></li>
                <li><a href="view_appointment.php"><i class="fa fa-circle-o"></i> View Status</a></li>
              </ul>
            </li>
            <li>
              <a href="view_report.php">
                <i class="fa fa-file"></i> <span> Lab Reports</span>
              </a>
            </li>
            <li>
              <a href="profile.php">
                <i class="fa fa-user"></i> <span>Profile</span>
              </a>
            </li>
            
            
          </ul>
</section>