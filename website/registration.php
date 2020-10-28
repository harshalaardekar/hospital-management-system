<!DOCTYPE html>
<html>
<head>
<title>Registration</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="stylesheets/index1.css">

</head>


<body>

<header>


  <?php include 'header.php'; ?>
</header>

<main>


  <?php include 'app.php'; ?>
  <br><br><br><br><br><br><br><br><br>

<div class="container" style="background-image: url(images/wall.jpg);">
<div class="row">
  <div class="col-sm-3" style="background-color: white">
    <h2><font color="#b71c1c">In-Patient Guide</font></h2>
          <a class="dropdown-item" href="admission.html"><font size="4px">Admission</font></a>
          <a class="dropdown-item" href="emergency.html"><font size="3px">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Emergency</font></a>
          <a class="dropdown-item" href="routine.html"><font size="3px">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Routine</font></a>

          <a class="dropdown-item" href="billing.html"><font size="4px">Billing</font></a>
          <a class="dropdown-item" href="telephone.html"><font size="4px">Imp. Tel. No.</font></a>
          <a class="dropdown-item" href="medicines.html"><font size="4px">Insurance/Mediclaim</font></a>
          <a class="dropdown-item" href="meals.html"><font size="4px">Meals</font></a>
          <a class="dropdown-item" href="registration.html"><font size="4px">Registration</font></a>
          <a class="dropdown-item" href="room.html"><font size="4px">Rooms</font></a>
          <a class="dropdown-item" href="visiting.html"><font size="4px">Visiting Hours</font></a>
  </div>

  <div class="col-sm-9">
  <h1><font color="#b71c1c">Registration</font></h1>
  <ul>
    <font size="3">
    <li>
    Registration counter is on the 1st floor MRC. The registration timings and telephone numbers are given below.
  </li>
  <li>
Registration is done for the planned admissions based on Doctors Admission Note. The patient class is mutually decided by the treating doctor and the patient.
</li>
<li>
For further information, kindly contact 91 22 2067676 ext 314 / 255 / 370 / 470 (inquiry counters).
</li>
</font>
  </ul>
<br>
<table class="table table-bordered">
  <thead class="thead-light">
    <tr>
      <th scope="col">Days</th>
      <th scope="col">Timing (IST)</th>
      <th scope="col">Telephone no.</th>
</tr>
  </thead>
 <tbody>
    <tr>
      <td>Monday to Saturday</td>
      <td>10.00 am to 2.30 pm<br />
          3.30 pm to 8.00 pm</td> 
      <td>91 22 2067676 ext 477</td>
    </tr>
</tbody>
</table>
<br>
<h3><u><b>For Routine and Planned Admission contact</u></b></h3>
<p>C.M.O of MRC Building, 1st floor,<br />
<strong>Tel No.:</strong> 22067676 - <strong>Ext:</strong> 433</p>
<p>(Monday to Saturday : Timings : 8:00 am to 6.00 pm)</p><br>
<p><strong>Note:</strong><br />
For Routine and Planned Admission after 6.00 pm and on Sundays Contact <strong>C.M.O of B.H Building ground floor</strong></p>
<hr/>
<h3><u><b>For Emergency Admission contact</u></b></h3>
<p>C.M.O of B.H Building ground floor,<br />
<strong>Tel No.:</strong> 22067676 - <strong>Ext:</strong> 260</p>


  </div>


</div>

<!--split div close-->
</div>
<!--container close-->
</div>
<br><br>

<!--Footer-->

  <?php include 'footer.php'; ?>
</main>
</body>
</html>