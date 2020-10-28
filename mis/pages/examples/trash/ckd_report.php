<?php
$food = new mysqli("localhost", "root", "root", "foods");
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>CKD Report | HealthEase</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <!-- Bootstrap 3.3.7 -->
    <link rel="stylesheet" href="../../bower_components/bootstrap/dist/css/bootstrap.min.css">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="../../bower_components/font-awesome/css/font-awesome.min.css">
    <!-- Ionicons -->
    <link rel="stylesheet" href="../../bower_components/Ionicons/css/ionicons.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="../../dist/css/AdminLTE.min.css">
    <!-- AdminLTE Skins. Choose a skin from the css/skins
    folder instead of downloading all of them to reduce the load. -->
    <link rel="stylesheet" href="../../dist/css/skins/_all-skins.min.css">
    <!-- Morris chart -->
    <link rel="stylesheet" href="../../bower_components/morris.js/morris.css">
    <!-- jvectormap -->
    <link rel="stylesheet" href="../../bower_components/jvectormap/jquery-jvectormap.css">
    <!-- Date Picker -->
    <link rel="stylesheet" href="../../bower_components/bootstrap-datepicker/dist/css/bootstrap-datepicker.min.css">
    <!-- Daterange picker -->
    <link rel="stylesheet" href="../../bower_components/bootstrap-daterangepicker/daterangepicker.css">
    <!-- bootstrap wysihtml5 - text editor -->
    <link rel="stylesheet" href="../../plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css">
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
      <?php include 'patient_header.php'; ?>
      <!-- =============================================== -->
      <!-- Left side column. contains the sidebar -->
      <aside class="main-sidebar">
        <!-- sidebar: style can be found in sidebar.less -->
        <?php include 'patient_sidebar.php';?>
        <!-- /.sidebar -->
      </aside>
      <!-- =============================================== -->
      <!-- Content Wrapper. Contains page content -->
      <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
          <h1>
          CKD Report
          </h1>
          <ol class="breadcrumb">
            <li><a href="Patient_dashboard.php"><i class="fa fa-dashboard"></i> Home</a></li>
            <li><a href="active"><i class="fa fa-book"></i> CKD Report</a></li>
          </ol>
        </section>
        <div class="pad margin no-print">
          <div class="callout callout-info" style="margin-bottom: 0!important;">
            <h4><i class="fa fa-info"></i> Note:</h4>
            This page has been enhanced for printing. Click the print button at the bottom of the Page to Download PDF.
          </div>
        </div>
        <!-- Main content -->
        <section class="invoice">
          <!-- title row -->
          <div class="row">
            <div class="col-xs-12">
              <h2 class="page-header">
              <!--               <i class="fa fa-globe"></i> Chronic Kidney Disease Report.-->
              <a class="logo">
                <!-- logo for regular state and mobile devices -->
                <h1><span class="logo-lg"><b>Health</b>Ease</span></h1>
              </a>
              <medium><i>Chronic Kidney Disease Report</i></medium>
              <medium class="pull-right"><i>Date: <?php echo date("Y-m-d"); ?></i></medium>
              </h2>
            </div>
            <!-- /.col -->
          </div>
          <!-- info row -->
          <div class="row invoice-info">
            <!-- /.col -->
            <div class="col-sm-4 invoice-col">
              <b>Patient Information</b>
              <address>
                Patient Name - <?php echo $fname." ".$lname; ?><br>
                Patient ID - #<?php echo $pid; ?>
              </address>
            </div>
            <div class="col-sm-4 invoice-col">
              <?php
                if ($report = $mysqli->query('SELECT * FROM reports WHERE pid = '.$pid)) {
                  while ($reportobject = $report->fetch_object()){
                    $reportdate = $reportobject->timestamp;
                    $reportid = $reportobject->rid;
                    $bp = $reportobject->bp;
                    $sg = $reportobject->sg;
                    $al = $reportobject->al;
                    $su = $reportobject->su;
                    $rbc = $reportobject->rbc;
                    if ($rbc != '') {
                      if ($rbc == 0) {
                        $rbc = 'Abnormal';
                      }
                      elseif ($rbc == 1) {
                        $rbc = 'Nornmal';
                      }
                      else{
                        $rbc = 'No Entry';
                      }
                    }
                    $pc = $reportobject->pc;
                    if ($pc != '') {
                      if ($pc == 1) {
                        $pc = 'Nornmal';
                      }
                      elseif($pc == 0) {
                        $pc = 'Abnornmal';
                      }
                      else{
                        $pc = 'No Entry';
                      }
                    }
                    $pcc = $reportobject->pcc;
                    if ($pcc !='') {
                      if ($pcc == 1) {
                        $pcc = 'Present';
                      }
                      else {
                        $pcc ='Not Present';
                      }
                    }
                    $ba = $reportobject->ba;
                    if ($ba !='') {
                      if ($ba == 1) {
                        $ba = 'Present';
                      }
                      else {
                        $ba ='Not Present';
                      }
                    }
                    $bgr = $reportobject->bgr;
                    $bu = $reportobject->bu;
                    $sc = $reportobject->sc;
                    $sod = $reportobject->sod;
                    $pot = $reportobject->pot;
                    $hemo = $reportobject->hemo;
                    $pcv = $reportobject->pcv;
                    $wbcc = $reportobject->wbcc;
                    $rbcc = $reportobject->rbcc;
                    $htn = $reportobject->htn;
                    if ($htn !='') {
                      if ($htn == 1) {
                        $htn = 'Yes';
                      }
                      else {
                        $htn ='No';
                      }
                    }
                    $dm = $reportobject->dm;
                    if ($dm !='') {
                      if ($dm == 1) {
                        $dm = 'Yes';
                      }
                      else {
                        $dm ='No';
                      }
                    }
                    $cad = $reportobject->cad;
                    if ($cad !='') {
                      if ($cad == 1) {
                        $cad = 'Yes';
                      }
                      else {
                        $cad ='No';
                      }
                    }
                    $appet = $reportobject->appet;
                    if ($appet !='') {
                      if ($appet == 1) {
                        $appet = 'Good';
                      }
                      else {
                        $appet ='Bad';
                      }
                    }
                    $pe = $reportobject->pe;
                    if ($pe !='') {
                      if ($pe == 1) {
                        $pe = 'Yes';
                      }
                      else {
                        $pe ='No';
                      }
                    }
                    $ane = $reportobject->ane;
                    if ($ane !='') {
                      if ($ane == 1) {
                        $ane = 'Yes';
                      }
                      else {
                        $ane ='No';
                      }
                    }
                  }
                }
              ?>
              <b>CKD Report - #<?php echo $reportid ?></b><br>
              Patient DOB - <?php echo $dob; ?><br>
              Report Date - <?php echo $reportdate; ?>
            </div>
            <!-- /.col -->
            <div class="col-sm-4 invoice-col">
              <b>Assistant Information</b>
              <?php
              if ($result = $mysqli->query('SELECT * FROM hierarchy_ass_pat WHERE pid = '.$pid.'')) {
                while ($object = $result->fetch_object()){
                  $aid = $object->aid;
                  if ($result1 = $mysqli->query('SELECT * FROM assistant_details WHERE aid='.$aid)) {
                    while ($object1 = $result1->fetch_object()){
                      $afname = $object1->fname;
                      $alname = $object1->lname;
                    }
                  }
                }
              }
              ?>
              <address>
                Assistant Name - <?php echo $afname." ".$alname; ?><br>
                Assistant ID - #<?php echo $aid; ?>
              </address>
            </div>
            <!-- /.col -->
          </div>
          <!-- /.row -->
          <!-- Table row -->
          <div class="row">
            <div class="col-md-6 col-xs-12 table-responsive">
              <div class="header">
                <h4 class="box-title" style="color: #21618C;">Laboratory Findings</h4>
              </div>
              <!-- /.box-header -->
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                  <tr>
                    <th>BP</th>
                    <td><?php echo $bp; ?> <small>(mm/Hg)</small></td>
                  </tr>
                  <tr>
                    <th>SG</th>
                    <td><?php echo $sg; ?></td>
                  </tr>
                  <tr>
                    <th>AL</th>
                    <td><?php echo $al; ?></td>
                  </tr>
                  <tr>
                    <th>SU</th>
                    <td><?php echo $su; ?></td>
                  </tr>
                  <tr>
                    <th>RBC</th>
                    <td><?php echo $rbc; ?></td>
                  </tr>
                  <tr>
                    <th>PC</th>
                    <td><?php echo $pc; ?></td>
                  </tr>
                  <tr>
                    <th>PCC</th>
                    <td><?php echo $pcc; ?></td>
                  </tr>
                  <tr>
                    <th>Ba</th>
                    <td><?php echo $ba; ?></td>
                  </tr>
                  <tr>
                    <th>BGR</th>
                    <td><?php echo $bgr; ?> <small>(mgs/dl)</small></td>
                  </tr>
                  <tr>
                    <th>BU</th>
                    <td><?php echo $bu; ?> <small>(mgs/dl)</small></td>
                  </tr>
                  <tr>
                    <th>SC</th>
                    <td><?php echo $sc; ?> <small>(mgs/dl)</small></td>
                  </tr>
                  <tr>
                    <th>SOD</th>
                    <td><?php echo $sod; ?> <small>(mEq/L)</small></td>
                  </tr>
                </thead>
              </table>
            </div>
            <!-- /.col -->
            <div class="col-md-6 col-xs-12 table-responsive">
              <div class="header">
                <h4 class="box-title" style="color: #21618C;" >Laboratory Finding</h4>
              </div>
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                  <tr>
                    <th>POT</th>
                    <td><?php echo $pot; ?> <small>(mEq/L)</small></td>
                  </tr>
                  <tr>
                    <th>HEMO</th>
                    <td><?php echo $hemo; ?> <small>(gms)</small></td>
                  </tr>
                  <tr>
                    <th>PCV</th>
                    <td><?php echo $pcv; ?></td>
                  </tr>
                  <tr>
                    <th>WBCC</th>
                    <td><?php echo $wbcc; ?> <small>(cells/cumm)</small></td>
                  </tr>
                  <tr>
                    <th>RBCC</th>
                    <td><?php echo $rbcc; ?> <small>(millions/cmm)</small></td>
                  </tr>
                  <tr>
                    <th>HTN</th>
                    <td><?php echo $htn; ?></td>
                  </tr>
                  <tr>
                    <th>DM</th>
                    <td><?php echo $dm; ?></td>
                  </tr>
                  <tr>
                    <th>CAD</th>
                    <td><?php echo $cad; ?></td>
                  </tr>
                  <tr>
                    <th>APPET</th>
                    <td><?php echo $appet; ?></td>
                  </tr>
                  <tr>
                    <th>PE</th>
                    <td><?php echo $pe; ?></td>
                  </tr>
                  <tr>
                    <th>ANE</th>
                    <td><?php echo $ane; ?></td>
                  </tr>
                </thead>
              </table>
            </div>
            <!-- /.col -->
          </div>
          <!-- /.row -->
          <div class="row">
            <!-- accepted payments column -->
            <div class="col-md-4 col-xs-12">
              <h4 style="color: #21618C;">Physical Examination:</h4>
              Blood Pressure: <?php echo $bp; ?> <small>(mm/Hg)</small><br>
              Albumin: <?php echo $al; ?><br>
              Sugar: <?php echo $su; ?><br>
              Bacteria: <?php echo $ba; ?><br>
              Hemoglobin: <?php echo $hemo; ?><br>
              Hypertension: <?php echo $htn; ?><br>
              Anemia: <?php echo $ane; ?><br>
            </div>
            <div class="col-md-4 col-xs-12">
              <h4 style="color: #21618C;">Initial Problem List</h4><?php echo $initial_problem; ?>
            </div>
            <!-- <div class="col-md-4 col-xs-12">
              <h4 style="color: #21618C;">Revised Problem List</h4>
            </div> -->
            <!-- /.col -->
          </div>
          <!-- /.row -->
          <div class="row">
            <div class="col-md-12 col-xs-12">
              <div class="header">
                <h4 class="box-title" style="color: #21618C;">HealthEase System Report:</h4>
              </div>
              <p>From all the laboratory reports and patient symptoms, the system has detected that Patient is having CHRONIC KIDNEY DISEASE.</p>
            </div>
          </div>
          <div class="row">
            <div class="col-md-6 col-xs-12">
              <div class="header">
                <h4 class="box-title" style="color: #21618C;">Glomerular Filtration Rate(GFR):</h4>
              </div>
              <div class="demo">
                <center><input class="knob" data-min="0" data-displayPrevious=true data-max="1000" value="" data-fgColor="#f56954" readonly><br>
                <?php
                if ($stageresult = $mysqli->query('SELECT * FROM stage WHERE pid ='.$pid)) {
                  while ($stageobject = $stageresult->fetch_object()){
                    $gfr = $stageobject->gfr;
                    $stage = $stageobject->stage;
                  }
                }
                ?>
                <label><h3>Patient is detected with Stage<?php echo $stage; ?></h3></label></center>
              </div>
            </div>
            <div class="col-md-6 col-xs-12">
              <div class="header">
                <h4 class="box-title" style="color: #21618C;">Recommended Diet:</h4>
                <?php
                if ($bid = $food->query('SELECT item_id FROM todays_breakfast WHERE user_id='.$pid)) {
                  while ($bidobject = $bid->fetch_object()){
                    $bitem_id = $bidobject->item_id;
                  }
                  if ($breakfast = $food->query('SELECT item_id,recipe_name,recipe_url FROM breakfast WHERE item_id ='.$bitem_id)) {
                    while ($breakfastobject = $breakfast->fetch_object()) {
                      $item_id = $breakfastobject->item_id;
                      $recipe_name = $breakfastobject->recipe_name;
                      $recipe_url = $breakfastobject->recipe_url;
                    }
                  }
                }
                ?>
                  <b>BreakFast</b> :</br><?php echo $recipe_name; ?> (<a href="<?php echo $recipe_url; ?>">Recipe Here</a>)</br>
                  <b>Lunch</b> : </br>
                  <?php
                  if ($lid = $food->query('SELECT salad_id,meal1_id, meal2_id FROM todays_lunch WHERE user_id='.$pid)) {
                    while ($lidobject = $lid->fetch_object()){
                    $lsalad_id = $lidobject->salad_id;
                    $lmeal1_id = $lidobject->meal1_id;
                    $lmeal2_id = $lidobject->meal2_id;
                    //echo 'Salad ID is '.$lsalad_id.' Meal1 ID is '.$lmeal1_id.' Meal2 ID is '.$lmeal2_id.'</br>';
                  }
                  if ($lsalad_id != -1) {
                    if ($rlsalad = $food->query('SELECT item_id,recipe_name,recipe_url FROM meal WHERE item_id ='.$lsalad_id)) {
                      while ($rlsaladobject = $rlsalad->fetch_object()) {
                        $slitem_id = $rlsaladobject->item_id;
                        $slrecipe_name = $rlsaladobject->recipe_name;
                        $slrecipe_url = $rlsaladobject->recipe_url; 
                      }
                      echo 'Salad - '.$slrecipe_name.' (<a href="'.$slrecipe_url.'">Recipe Here</a>)</br>';
                    }
                  }
                  if ($lmeal1_id != -1) {
                    if ($rlmeal1 = $food->query('SELECT item_id,recipe_name,recipe_url FROM meal WHERE item_id ='.$lmeal1_id)) {
                      while ($rlmeal1object = $rlmeal1->fetch_object()) {
                        $m1litem_id = $rlmeal1object->item_id;
                        $m1lrecipe_name = $rlmeal1object->recipe_name;
                        $m1lrecipe_url = $rlmeal1object->recipe_url; 
                      }
                      echo 'Meal1 - '.$m1lrecipe_name.' (<a href="'.$m1lrecipe_url.'">Recipe Here</a>)</br>';
                    }
                  }
                  if ($lmeal2_id != -1) {
                    if ($rlmeal2 = $food->query('SELECT item_id,recipe_name,recipe_url FROM meal WHERE item_id ='.$lmeal2_id)) {
                      while ($rlmeal2object = $rlmeal2->fetch_object()) {
                        $m2litem_id = $rlmeal2object->item_id;
                        $m2lrecipe_name = $rlmeal2object->recipe_name;
                        $m2lrecipe_url = $rlmeal2object->recipe_url; 
                      }
                      echo 'Meal2 - '.$m2lrecipe_name.' (<a href="'.$m2lrecipe_url.'">Recipe Here</a>)</br>';
                    }
                  }
                  }
                  ?>
                   <!-- - Indian Pickle</br>Curried Spinach with Fresh Cheese</br> -->
                  <b>Dinner</b> :</br>
                  <?php
                  if ($did = $food->query('SELECT salad_id,meal1_id, meal2_id FROM todays_dinner WHERE user_id='.$pid)) {
                    while ($didobject = $did->fetch_object()){
                    $dsalad_id = $didobject->salad_id;
                    $dmeal1_id = $didobject->meal1_id;
                    $dmeal2_id = $didobject->meal2_id;
                    //echo 'Salad ID is '.$dsalad_id.' Meal1 ID is '.$dmeal1_id.' Meal2 ID is '.$dmeal2_id.'</br>';
                  }
                  if ($dsalad_id != -1) {
                    if ($rdsalad = $food->query('SELECT item_id,recipe_name,recipe_url FROM meal WHERE item_id ='.$dsalad_id)) {
                      while ($rdsaladobject = $rdsalad->fetch_object()) {
                        $sditem_id = $rdsaladobject->item_id;
                        $sdrecipe_name = $rdsaladobject->recipe_name;
                        $sdrecipe_url = $rdsaladobject->recipe_url; 
                      }
                      echo 'Salad - '.$sdrecipe_name.' (<a href="'.$sdrecipe_url.'">Recipe Here</a>)</br>';
                    }
                  }
                  if ($dmeal1_id != -1) {
                    if ($rdmeal1 = $food->query('SELECT item_id,recipe_name,recipe_url FROM meal WHERE item_id ='.$dmeal1_id)) {
                      while ($rdmeal1object = $rdmeal1->fetch_object()) {
                        $m1ditem_id = $rdmeal1object->item_id;
                        $m1drecipe_name = $rdmeal1object->recipe_name;
                        $m1drecipe_url = $rdmeal1object->recipe_url; 
                      }
                      echo 'Meal1 - '.$m1drecipe_name.' (<a href="'.$m1drecipe_url.'">Recipe Here</a>)</br>';
                    }
                  }
                  if ($dmeal2_id != -1) {
                    if ($rdmeal2 = $food->query('SELECT item_id,recipe_name,recipe_url FROM meal WHERE item_id ='.$dmeal2_id)) {
                      while ($rdmeal2object = $rdmeal2->fetch_object()) {
                        $m2ditem_id = $rdmeal2object->item_id;
                        $m2drecipe_name = $rdmeal2object->recipe_name;
                        $m2drecipe_url = $rdmeal2object->recipe_url; 
                      }
                      echo 'Meal2 - '.$m2drecipe_name.' (<a href="'.$m2drecipe_url.'">Recipe Here</a>)</br>';
                    }
                  }
                  }
                  ?>
              </div>
              
            </div>
          </div>
          <!-- this row will not appear when printing -->
          <div class="row no-print">
            <div class="col-xs-12">
              <a href="ckd_report_print.php" class="btn btn-primary pull-right"><i class="fa fa-print"></i> Print</a>
              <!-- <button type="button" class="btn btn-success pull-right"><i class="fa fa-credit-card"></i> Submit Payment
              </button> -->
              <!-- <button type="button" class="btn btn-primary pull-right" style="margin-right: 5px;"> -->
              <!-- <i class="fa fa-download"></i> Generate PDF -->
              </button>
            </div>
          </div>
        </section>
        <!-- /.content -->
        <div class="clearfix"></div>
      </div>
      <!-- /.content-wrapper -->
      <footer class="main-footer">
        <div class="pull-right hidden-xs">
          <b></b>
        </div>
        <strong>Copyright &copy; 2018-2020 HealthEase<strong> All rights
        reserved.
      </footer>
      <!-- Control Sidebar -->
      <div class="control-sidebar-bg"></div>
    </div>
    <!-- ./wrapper -->
    <!-- jQuery 3 -->
    <script src="../../bower_components/jquery/dist/jquery.min.js"></script>
    <!-- Bootstrap 3.3.7 -->
    <script src="../../bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
    <!-- FastClick -->
    <script src="../../bower_components/fastclick/lib/fastclick.js"></script>
    <!-- AdminLTE App -->
    <script src="../../dist/js/adminlte.min.js"></script>
    <!-- AdminLTE for demo purposes -->
    <script src="../../dist/js/demo.js"></script>
    <!-- jQuery Knob -->
    <script src="../../bower_components/jquery-knob/js/jquery.knob.js"></script>
    <!-- Sparkline -->
    <script src="../../bower_components/jquery-sparkline/dist/jquery.sparkline.min.js"></script>
    <script>
    $(function() {
    $('.knob').knob();
    });
    var initval = "<?php echo $gfr; ?>";
    $({value: 0}).animate({value: initval}, {
    duration: 1000,
    easing:'swing',
    step: function()
    {
    $('.knob').val(this.value).trigger('change');
    $('#preval').val(initval);
    }
    });
    </script>
  </body>
</html>