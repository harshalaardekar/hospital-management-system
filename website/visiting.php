<!DOCTYPE html>
<html>
<head>
<title>Visiting Hours</title>
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
  <h1><font color="#b71c1c">Visiting Hours</font></h1>  <table class="table table-bordered">
    <br><br>
  <thead class="thead-light">
    <tr>
      <th scope="col">Regular schedule</th>
      <th scope="col">Timing</th>
</tr>
  </thead>
 <tbody>
    <tr>
      <td>Nursing Home Section</td>
      <td>4:00 pm to 7:00 pm (IST)</td> 
    </tr>
    <tr>
      <td>General Ward</td>
      <td>4:00 pm to 7:00 pm (IST)</td>
    </tr>
    <tr>
</tbody>
</table>
<p>&nbsp;</p>
<p><h3>Children are allowed only between 6:00 pm to 7:00 pm (IST)</h3></p>
</tr>
</thead>
</table>

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