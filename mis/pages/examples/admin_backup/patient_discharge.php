<?php
include '../connect.php';
//session_start();
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Patient Admit | HMS</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <!-- Bootstrap 3.3.7 -->
    <link rel="stylesheet" href="../../../bower_components/bootstrap/dist/css/bootstrap.min.css">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="../../../bower_components/font-awesome/css/font-awesome.min.css">
    <!-- DataTables -->
    <link rel="stylesheet" href="../../../bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css">
    <!-- Ionicons -->
    <link rel="stylesheet" href="../../../bower_components/Ionicons/css/ionicons.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="../../../dist/css/AdminLTE.min.css">
    <!-- AdminLTE Skins. Choose a skin from the css/skins
    folder instead of downloading all of them to reduce the load. -->
    <link rel="stylesheet" href="../../../dist/css/skins/_all-skins.min.css">
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    <!-- Google Font -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
  </head>
  <body class="hold-transition skin-blue sidebar-mini">
    <!-- Site wrapper -->
    <div class="wrapper">
      <?php include 'header.php';?>
      <!-- =============================================== -->
      <!-- Left side column. contains the sidebar -->
      <?php include 'sidebar.php'; ?>
      <!-- =============================================== -->
      <!-- Content Wrapper. Contains page content -->
      <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
          <h1>
          Dashboard
          <!-- <small>it all starts here</small> -->
          </h1>
          <ol class="breadcrumb">
            <li><a href="dashboard.php"><i class="fa fa-dashboard"></i> Home</a></li>
          </ol>
        </section>
        <!-- Main content -->
        <section class="content">
          <div class="row">
            <div class="col-lg-3 col-xs-6">
              <!-- small box -->
              <div class="small-box bg-aqua">
                <div class="inner">
                  <?php
                  $result = $mysqli->query('select sum(quantity) as sum from room_details left outer join ward_type_details on room_details.wid = ward_type_details.wid left outer join room_type_details on room_details.rid = room_type_details.rid left outer join room_service_type on room_details.rsid = room_service_type.rsid where quantity > 0;');
                  if ($result) {
                  $data=mysqli_fetch_assoc($result);
                  echo "<h3>".$data['sum']."</h3>";
                  }
                  ?>
                  <p>Total Beds Rooms</p>
                </div>
                <div class="icon">
                  <i class="ion ion-person-add"></i>
                </div>
              </div>
            </div>
            <!-- ./col -->
            <div class="col-lg-3 col-xs-6">
              <!-- small box -->
              <div class="small-box bg-green">
                <div class="inner">
                  <?php
                  $result = $mysqli->query('select sum(quantity) as sum from room_details where quantity > 0 and rsid = 0;');
                  if ($result) {
                  $data=mysqli_fetch_assoc($result);
                  echo "<h3>".$data['sum']."</h3>";
                  }
                  ?>
                  <p>AC Beds Available</p>
                </div>
                <div class="icon">
                  <i class="ion ion-stats-bars"></i>
                </div>
              </div>
            </div>
            <!-- ./col -->
            <div class="col-lg-3 col-xs-6">
              <!-- small box -->
              <div class="small-box bg-yellow">
                <div class="inner">
                  <?php
                  $result = $mysqli->query('select count(*) as total from login_details where category = 2');
                  if ($result) {
                  $data=mysqli_fetch_assoc($result);
                  echo "<h3>".$data['total']."</h3>";
                  }
                  ?>
                  <p>Patients</p>
                </div>
                <div class="icon">
                  <i class="ion ion-person"></i>
                </div>
              </div>
            </div>
            <!-- ./col -->
            <div class="col-lg-3 col-xs-6">
              <!-- small box -->
              <div class="small-box bg-red">
                <div class="inner">
                  <?php
                  $result = $mysqli->query('select count(*) as total from login_details where category != 0');
                  if ($result) {
                  $data=mysqli_fetch_assoc($result);
                  echo "<h3>".$data['total']."</h3>";
                  }
                  ?>
                  <p>Website Visitors</p>
                </div>
                <div class="icon">
                  <i class="ion ion-pie-graph"></i>
                </div>
              </div>
            </div>
            <!-- ./col -->
          </div><br>
          <!-- Default box -->
          <div class="row">
            <div class="col-md-12 col-xs-12">
              <div class="box">
                <div class="box-header">
                  <h3 class="box-title">All Patients</h3>
                </div>
                <!-- /.box-header -->
                <div class="box-body table-responsive">
                  <table id="example1" class="table table-bordered table-striped">
                    <thead>
                      <tr>
                        <th>Room No</th>
                        <th>PID</th>
                        <th>DID</th>
                        <th>Admit Date</th>
                        <th>Admit Time</th>
                        <th>--</th>
                      </tr>
                    </thead>
                    <tbody>
                      <?php
                      $result  = $mysqli->query('select * from admit left outer join patient_details on admit.pid = patient_details.pid left outer join doctor_details on admit.did = doctor_details.did left outer join room_details on admit.rm = room_details.rm where admit = 1;');
                      if ($result) {
                      while ($object = $result->fetch_object()) {
                      /*$status;
                      if ($object->status == 'approved') {
                      $status = '<span class="label label-success">Approved</span>';
                      }
                      if ($object->status == 'pending') {
                      $status = '<span class="label label-warning">Pending</span>';
                      }
                      if ($object->status == 'denied') {
                      $status = '<span class="label label-danger">Denied</span>';
                      }
                      else{
                      $status = '<span class="label label-warning">Not Available</span>';
                      }*/
                      echo "<tr>
                        <td>".$object->rmno."</td>
                        <td>".$object->pid."</td>
                        <td>".$object->did."</td>
                        <td>".$object->admit_dt."</td>
                        <td>".$object->admit_time."</td>
                        <td> <a href='patient_discharge_process.php?rm=".$object->adid."&pid=".$object->pid."'>Discharge</a>
                      </tr>";
                      }
                      }
                      else {
                      echo "Error : ".mysqli_error();
                      }
                      ?>
                    </tbody>
                    <tfoot>
                    
                    </tfoot>
                  </table>
                </div>
                <!-- /.box-body -->
              </div>
              <!-- /.box -->
            </div>
          </div>
        </section>
        <!-- /.content -->
      </div>
      <!-- /.content-wrapper -->
      <footer class="main-footer">
        <div class="pull-right hidden-xs">
          <b></b>
        </div>
        <strong>Copyright &copy; 2018-2020 HMS<strong> All rights
        reserved.
      </footer>
      <!-- Add the sidebar's background. This div must be placed
      immediately after the control sidebar -->
      <div class="control-sidebar-bg"></div>
    </div>
    <!-- ./wrapper -->
    <!-- jQuery 3 -->
    <script src="../../../bower_components/jquery/dist/jquery.min.js"></script>
    <!-- Bootstrap 3.3.7 -->
    <script src="../../../bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
    <!-- DataTables -->
    <script src="../../../bower_components/datatables.net/js/jquery.dataTables.min.js"></script>
    <script src="../../../bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js"></script>
    <!-- SlimScroll -->
    <script src="../../../bower_components/jquery-slimscroll/jquery.slimscroll.min.js"></script>
    <!-- FastClick -->
    <script src="../../../bower_components/fastclick/lib/fastclick.js"></script>
    <!-- AdminLTE App -->
    <script src="../../../dist/js/adminlte.min.js"></script>
    <!-- AdminLTE for demo purposes -->
    <script src="../../../dist/js/demo.js"></script>
    <script>
    $(document).ready(function () {
    $('.sidebar-menu').tree()
    })
    $(function () {
    $('#example1').DataTable({
    'paging'      : true,
    'lengthChange': false,
    'searching'   : false,
    'ordering'    : true,
    'info'        : true,
    'autoWidth'   : false
    })
    $('#example2').DataTable({
    'paging'      : true,
    'lengthChange': false,
    'searching'   : false,
    'ordering'    : true,
    'info'        : true,
    'autoWidth'   : false
    })
    })
    </script>
  </body>
</html>