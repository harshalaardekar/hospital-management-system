<!DOCTYPE html>
<html>
<head>
<title>Meals</title>
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
  <h1><font color="#b71c1c">Meals</font></h1>
  <p><h4>The vegetarian meals/snacks cooked in the state of art kitchen under proper hygienic conditions are provided free of cost to all the patients and also to the attendants at the nominal charges.<h4></p>
  <h2>The timings are:</h2>
<br>
<table class="table table-bordered">
  <thead class="thead-light">
    <tr>
      <th scope="col">Regular schedule</th>
      <th scope="col">Timing</th>
</tr>
  </thead>

  <tbody>
    <tr>
      <td>Morning tea with snacks</td>
      <td>8:00 am (IST)</td> 
    </tr>
    <tr>
      <td>Soup</td>
      <td>10:00 am (IST)</td>
    </tr>
    <tr>
      <td>Lunch</td>
      <td>12:00 noon (IST)</td>
    </tr>
<tr>
      <td>Evening tea with snacks</td>
      <td>3:30 pm (IST)</td> 
    </tr>
    <tr>
      <td>Dinner</td>
      <td>7:30 pm (IST)</td>
    </tr>
    <tr>
      <td>Milk</td>
      <td>9:00 pm (IST)</td>
    </tr>
  </tbody>
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