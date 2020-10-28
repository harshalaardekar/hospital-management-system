<?php
include '../connect.php';
//session_start();
$rm = $_GET['rm'];
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Home | HMS</title>
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
          Search Patient
          <!-- <small>it all starts here</small> -->
          </h1>
          <ol class="breadcrumb">
            <li><a href="dashboard.php"><i class="fa fa-dashboard"></i> Home</a></li>
            <li class="active">Add Patient</li>
          </ol>
        </section>
        <!-- Main content -->
        <section class="content">
          <!-- Default box -->
          <div class="row">
            <div class="col-md-12 col-xs-12">
              <div class="box">
                <div class="box-header with-border">
                  <h3 class="box-title">Searched Patient</h3>
                </div>
                <!-- /.box-header -->
                <div class="box-body">
                  <form id="my-form" action = "patient_admit_process.php" method = "post">
                  <div class="box-body">
                    <input type="hidden" name="rm" value="<?php echo $rm ?>">
                    <div class="form-group col-md-12">
                      <label>Patient Name:</label>
                      <select name="pid" id="pid" class="form-control">
                        <option value="" selected="selected">Select Patient</option>
                        <?php
                          $result = $mysqli->query('select * from patient_details where admit = 0');
                          if ($result) {
                             while ($object = $result->fetch_object()){
                              echo '<option value="'.$object->pid.'">'.$object->fname.' '.$object->lname.'</option>';
                             }
                          }
                        ?>
                      </select>
                    </div>
                    <div class="form-group col-md-12">
                      <label>Doctor Name:</label>
                      <select name="did" id="did" class="form-control">
                        <option value="" selected="selected">Select Doctor</option>
                        <?php
                          $result = $mysqli->query('select * from doctor_details');
                          if ($result) {
                             while ($object = $result->fetch_object()){
                              echo '<option value="'.$object->did.'">'.$object->fname.' '.$object->lname.'</option>';
                             }
                          }
                        ?>
                      </select>
                    </div>
                    <div class="box-footer">
                      <center><button type="submit" class="btn btn-primary" value="submit">Admit</button></center>
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
    <script type="text/javascript">
      $(document).ready(function(){
        $('#fname').keyup(function() {
           var txt = $(this).val();
           var dataString = txt;
           if (txt != '') {
            $.ajax({
              url:"patient_select_process.php",
              dataType:"text",
              data: {value:dataString},
              success:function(data)
              {
                $('#table_result').html(data);
              },
              error: function(jqXHR, textStatus, errorThrown){
                console.log('error');
                console.log(textStatus);
                console.log(data);
              }
            });
           }
           else{
            $('#table_result').html('');
           }
        });
      });
    </script>
  </body>
</html>