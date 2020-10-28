<aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- Sidebar user panel -->
      <div class="user-panel">
        <div class="pull-left image">
          <img src="../icons/avatars/png/assistant.png" class="img-circle" alt="User Image">
        </div>
        <div class="pull-left info">
          <?php
              echo "<p>".$fname."&nbsp ".$lname."
              </br><small>".$qualification."&nbsp (Age : ".$age."yrs)</small></p>";
              ?>
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
            <i class="fa fa-user"></i> <span>Doctor</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="doctor_add.php"><i class="fa fa-circle-o"></i> Add Doctor</a></li>
            <li><a href="doctor_search.php"><i class="fa fa-circle-o"></i> Search Doctor</a></li>
            <li><a href="doctor_delete.php"><i class="fa fa-circle-o"></i> Delete Doctor</a>
              <li><a href="category_add.php"><i class="fa fa-circle-o"></i> Add Doctor's Category</a></li>
          </ul>
        </li>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-users"></i> <span>Patient</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="patient_add.php"><i class="fa fa-circle-o"></i> Add Patient</a></li>
            <li><a href="patient_search.php"><i class="fa fa-circle-o"></i> Search Patient</a></li>
            <!--<li><a href="patient_delete.php"><i class="fa fa-circle-o"></i> Delete Patient</a>-->
          </ul>
        </li>
        <li>
          <a href="view_room.php">
            <i class="fa fa-bar-chart"></i> <span>View Room</span>
          </a>
        </li>
        <li>
          <a href="patient_admit.php">
            <i class="fa fa-user-plus"></i> <span>Admit Patient</span>
          </a>
        </li>
        <li>
          <a href="patient_discharge.php">
            <i class="fa fa-user-times"></i> <span>Discharge Patient</span>
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
            <li><a href="make_appointment.php"><i class="fa fa-circle-o"></i> Make Appointment</a></li>
            <li><a href="view_appointment.php"><i class="fa fa-circle-o"></i> View Appointment</a></li>
          </ul>
        </li>

      </ul>
    </section>
    <!-- /.sidebar -->
  </aside>