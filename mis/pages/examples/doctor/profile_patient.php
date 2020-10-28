<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Profile | HealthCare</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <!-- Bootstrap 3.3.7 -->
    <link rel="stylesheet" href="../../../bower_components/bootstrap/dist/css/bootstrap.min.css">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="../../../bower_components/font-awesome/css/font-awesome.min.css">
    <!-- Ionicons -->
    <link rel="stylesheet" href="../../../bower_components/Ionicons/css/ionicons.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="../../../dist/css/AdminLTE.min.css">
    <!-- AdminLTE Skins. Choose a skin from the css/skins
    folder instead of downloading all of them to reduce the load. -->
    <link rel="stylesheet" href="../../../dist/css/skins/_all-skins.min.css">
    <!-- Morris chart -->
    <link rel="stylesheet" href="../../../bower_components/morris.js/morris.css">
    <!-- jvectormap -->
    <link rel="stylesheet" href="../../../bower_components/jvectormap/jquery-jvectormap.css">
    <!-- Date Picker -->
    <link rel="stylesheet" href="../../../bower_components/bootstrap-datepicker/dist/css/bootstrap-datepicker.min.css">
    <!-- Daterange picker -->
    <link rel="stylesheet" href="../../../bower_components/bootstrap-daterangepicker/daterangepicker.css">
    <!-- bootstrap wysihtml5 - text editor -->
    <link rel="stylesheet" href="../../../plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css">
    <link rel="stylesheet" href="../../../plugins/timepicker/bootstrap-timepicker.min.css">
    <!-- bootstrap datepicker -->
  <link rel="stylesheet" href="../../../bower_components/bootstrap-datepicker/dist/css/bootstrap-datepicker.min.css">
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
      <?php include 'header.php'; ?>
      <!-- =============================================== -->
      <!-- Left side column. contains the sidebar -->
      <aside class="main-sidebar">
        <!-- sidebar: style can be found in sidebar.less -->
        <?php include 'sidebar.php';?>
        <!-- /.sidebar -->
      </aside>
      <!-- =============================================== -->
      <!-- Content Wrapper. Contains page content -->
      <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
          
          <ol class="breadcrumb">
            <li><a href="dashboard.php"><i class="fa fa-dashboard"></i> Home</a></li>
            <li class="active">My Profile</li>
          </ol>
        </section>
        <!-- Main content -->
        <section class="content">
          <!-- Default box -->
          <div class="row">
            <div class="col-md-12 col-xs-12">
              <div class="box">
                <div class="box-header with-border">
                  <h3 class="box-title">My Profile</h3>
                </div>
                <!-- /.box-header -->
                <div class="box-body">
                  <form id="my-form" method = "post">
                  <div class="box-body">
                    <input type="hidden" name="apid" value="<?php echo $_GET['apid'] ?>">
                    <?php
include '../connect.php';
$pid = $_GET['pid'];
if ($result = $mysqli->query("SELECT pid,fname,lname,dob, height, weight, TIMESTAMPDIFF(YEAR, dob, CURDATE()) AS age, gender,address FROM patient_details WHERE pid='".$pid."'")) {
  while ($object = $result->fetch_object()) {
    $fname = $object->fname;
    $lname = $object->lname;
    $dob = $object->dob;
    $age = $object->age;
    $gender = $object->gender;
    $height = $object->height;
    $weight = $object->weight;
    $address = $object->address;
    $pid = $object->pid;
    if ($object->gender == 1) {
      $gender = 'Male';
    }
    else{
      $gender = 'Female';
    }
  }
}
?>
                    <div class="form-group col-md-12">
                      <label>First Name:</label>
                      <input type="text" name="fname" id="fname" class="form-control" value="<?php echo $fname; ?>" readonly>    
                    </div>
                    <div class="form-group col-md-12">
                      <label>Last Name:</label>
                      <input type="text" name="lname" id="lname" class="form-control" value="<?php echo $lname; ?>" readonly>    
                    </div>

                    <div class="form-group col-md-12">
                      <label>DOB:</label>
                      <input type="text" name="dob" id="dob" value="<?php echo $dob; ?>" class="form-control" readonly>    
                    </div>

                    <div class="form-group col-md-12">
                      <label>Gender:</label>
                      <input type="text" name="gender" id="gender" value="<?php echo $gender; ?>" class="form-control" readonly>    
                    </div>

                    <div class="form-group col-md-12">
                      <label>Height:</label>
                      <input type="text" name="height" id="height" value="<?php echo $height; ?>" class="form-control" readonly>    
                    </div>

                    <div class="form-group col-md-12">
                      <label>Weight:</label>
                      <input type="text" name="weight" id="weight" value="<?php echo $weight; ?>" class="form-control" readonly>    
                    </div>
                    
                    <div class="form-group col-md-12">
                      <label>Address:</label>
                      <input type="text" name="address" id="address" value="<?php echo $address; ?>" class="form-control" readonly>    
                    </div>
                <!-- /.form group -->
                  </div>
                    </div>
                  </div>
                </form>
                </div>
              </div>
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
        <strong>Copyright &copy; 2018-2020 HealthCare<strong> All rights
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
    <!-- SlimScroll -->
    <script src="../../../bower_components/jquery-slimscroll/jquery.slimscroll.min.js"></script>
    <!-- FastClick -->
    <script src="../../../bower_components/fastclick/lib/fastclick.js"></script>
    <!-- AdminLTE App -->
    <script src="../../../dist/js/adminlte.min.js"></script>
    <!-- AdminLTE for demo purposes -->
    <script src="../../../dist/js/demo.js"></script>
    <!-- jQuery 3 -->
    <script src="../../../bower_components/jquery/dist/jquery.min.js"></script>
    <!-- jQuery UI 1.11.4 -->
    <script src="../../../bower_components/jquery-ui/jquery-ui.min.js"></script>
    <!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
    <script>
    $.widget.bridge('uibutton', $.ui.button);
    </script>
    <!-- Morris.js charts -->
    <script src="../../../bower_components/raphael/raphael.min.js"></script>
    <script src="../../../bower_components/morris.js/morris.min.js"></script>
    <!-- Sparkline -->
    <script src="../../../bower_components/jquery-sparkline/dist/jquery.sparkline.min.js"></script>
    <!-- jvectormap -->
    <script src="../../../plugins/jvectormap/jquery-jvectormap-1.2.2.min.js"></script>
    <script src="../../../plugins/jvectormap/jquery-jvectormap-world-mill-en.js"></script>
    <!-- jQuery Knob Chart -->
    <script src="../../../bower_components/jquery-knob/dist/jquery.knob.min.js"></script>
    <!-- daterangepicker -->
    <script src="../../../bower_components/moment/min/moment.min.js"></script>
    <script src="../../../bower_components/bootstrap-daterangepicker/daterangepicker.js"></script>
    <!-- datepicker -->
    <script src="../../../bower_components/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js"></script>
    <!-- Bootstrap WYSIHTML5 -->
    <script src="../../../plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js"></script>
    <!-- AdminLTE dashboard demo (This is only for demo purposes) -->
    <script src="../../../dist/js/pages/dashboard.js"></script>
    <script src="../../../plugins/timepicker/bootstrap-timepicker.min.js"></script>
    <script src="../../../bower_components/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js"></script>
    <!-- AdminLTE for demo purposes -->
    <script src="../../../dist/js/demo.js"></script>
    <script>
    $(document).ready(function () {
    $('.sidebar-menu').tree()
    })
    </script>
    <script type="text/javascript">
      $(function(){

        //Timepicker
    $('.timepicker').timepicker({
      showInputs: false
    })
    //Date picker
    $('#datepicker').datepicker({
      autoclose: true
    })
      })
    </script>
    <script type="text/javascript">
      $(window).on("load",function(){
        var APID = <?php echo $_GET['apid']; ?>;
        //alert(APID);
        $.ajax({
              url:"get_appointment_details.php",
              dataType:"json",
              data: {apid:APID},
              success:function(data)
              {
                $('#dname').val(data.dfname+" "+data.dlname);
                $('#pname').val(data.pfname+" "+data.plname);
                $('#time').val(data.time);
                $('#datepicker').val(data.date);
                $('#status').val(data.status);
                $('#seen').val(data.seen);
              },
              error: function(jqXHR, textStatus, errorThrown){
                console.log('error');
                console.log(textStatus);
                console.log(data);
              }
            });
      });
    </script>
  </body>
</html>