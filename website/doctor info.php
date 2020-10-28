<!DOCTYPE html>
<html>
<head>
<title>Doctor's Info.</title>
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

<style>
.card-img-top
{
  height:150px;
  width:150px;
}

.card
{
  width:450px;
    background: linear-gradient(to bottom, #90caf9 0%, #e3f2fd 100%)
}
</style>

<body>

<header>


  <?php include 'header.php'; ?>
</header>
<main>

  <?php include 'app.php'; ?>
<!--find your doctor-->

<div class="container" style="width:100%;height:300px;background: linear-gradient(to bottom, #fafafa 0%, #b71c1c 60%);margin-top: 240px;">
  <div class="row">
    <div class="col-md-9">
      <br>
  <center><font size="6px">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Panel of Consutants</font></center>
  <br><br>
  <h2>Provides information for Doctors and various Specialties</h2><br>
  <form class="form-inline my-2 my-lg-0">
      <select  class="form-control" name="docfind" required>
              <option value="" >choose...</option>
              <option value="Dr. Siddhi Khivansara">Dr. Siddhi Khivansara</option>
              <option value="Dr.Sana Mehra">Dr.Sana Mehra</option>
              <option value="Dr.Sofia Khan">Dr.Sofia Khan</option>
              <option value="Dr.Robin Montherio">Dr.Robin Montherio</option>
              <option value="Dr.Maira Sabnis">Dr.Maira Sabnis</option>
              <option value="Dr.Rajesh Nair">Dr.Rajesh Nair</option>
              </select>
      &nbsp;&nbsp;
      <a href="doctor info.html"><button class="btn btn-primary my-2 my-sm-0" type="submit"><font size="4px">Search</font></button></a>
  </form>
</div>
  <div class="col-md-3">
    <image src="images/doctor1.png" style="height:300px;width:230px;">
    </image>
  </div>
</div>
</div>

<br>
<!--cards-->
    <div class="container" style="background-image:url(images/wall.jpg);">
  <div class="row justify-content-center align-items-center">
  <div class="row">
  <div class="col-md-6"><br><br>
    <div class="card">
      <center>
    <div class="card-body">
      <center>

    <img class="card-img-top" src="images/d1.jpg" alt="Card image"><br><br>
    <h4 class="card-title">Dr. Siddhi Khivansara </h4>
  <table class="table table-borderless">
  <tbody>
    <tr>
      <th scope="col">Days & Timing</th>
      <th scope="col">Mon-Sat:9am-11am</th>
    </tr>
    <tr>
      <td>Consulting Rooms</td>
      <td>Dental Dept.-OPD</td>
    </tr>
    <tr>
      <td>Speciality</td>
      <td>OPD</td>
    </tr>
  </tbody>
</table>
      <a href="#" class="btn btn-primary">See Profile</a>
    </div>
  </center>
    </div>
  </div>

  <div class="col-md-6"><br><br>
    <div class="card">
      <br>
      <center>
    <img class="card-img-top" src="images/d3.jpg" alt="Card image">
    <div class="card-body">
      <center><h4 class="card-title">Dr.Sana Mehra</h4><table class="table table-borderless">
  <tbody>
    <tr>
      <th scope="col">Days & Timing</th>
      <th scope="col">Tue-Fri: 2pm-5pm</th>
    </tr>
    <tr>
      <td>Consulting Rooms</td>
      <td>General Dept.-OPD</td>
    </tr>
    <tr>
      <td>Speciality</td>
      <td>Physician</td>
    </tr>
  </tbody>
</table>
      <a href="#" class="btn btn-primary">See Profile</a>
    </div>
  </center>
    </div>
  </div>
</div>
<br>
  <div class="row">
  <div class="col-md-6"><br><br>
    <div class="card">
      <br>
      <center>
    <img class="card-img-top" src="images/d6.jpg" alt="Card image">
    <div class="card-body">
      <center><h4 class="card-title">Dr.Sofia Khan</h4><table class="table table-borderless">
  <tbody>
    <tr>
      <th scope="col">Days & Timing</th>
      <th scope="col">Thu-Sat: 11am-4pm</th>
    </tr>
    <tr>
      <td>Consulting Rooms</td>
      <td>Gynecologist Dept.-OPD</td>
    </tr>
    <tr>
      <td>Speciality</td>
      <td>Gynecologist</td>
    </tr>
  </tbody>
</table>
      <a href="#" class="btn btn-primary">See Profile</a>
    </div>
  </center>
</div>
  </div>
  <div class="col-md-6"><br><br>
    <div class="card">
      <br>
      <center>
    <img class="card-img-top" src="images/d4.png" alt="Card image">
    <div class="card-body">
      <center><h4 class="card-title">Dr.Robin Montherio</h4><table class="table table-borderless">
  <tbody>
    <tr>
      <th scope="col">Days & Timing</th>
      <th scope="col">Thu-Fri: 11am-3pm</th>
    </tr>
    <tr>
      <td>Consulting Rooms</td>
      <td>Surgery Dept.-OPD</td>
    </tr>
    <tr>
      <td>Speciality</td>
      <td>Surgerian</td>
    </tr>
  </tbody>
</table>
      <a href="#" class="btn btn-primary">See Profile</a>
    </div>
  </center>
  </div>
  </div>
</div>
<div class="row">
  <div class="col-md-6"><br><br>
    <div class="card">
      <br>
<center>
    <img class="card-img-top" src="images/d5.jpg" alt="Card image">
    <div class="card-body">
      <center><h4 class="card-title">Dr.Maira Sabnis</h4><table class="table table-borderless">
  <tbody>
    <tr>
      <th scope="col">Days & Timing</th>
      <th scope="col">Mon-Fri: 2pm-5pm</th>
    </tr>
    <tr>
      <td>Consulting Rooms</td>
      <td>General Dept.-OPD</td>
    </tr>
    <tr>
      <td>Speciality</td>
      <td>Psychiatrist</td>
    </tr>
  </tbody>
</table>
      <a href="#" class="btn btn-primary">See Profile</a>
    </div>
  </center>      
</div>
  </div>
  <div class="col-md-6"><br><br>
    <div class="card">
      <br>
  <center>
    <img class="card-img-top" src="images/d2.jpg" alt="Card image">
    <div class="card-body">
      <center><h4 class="card-title">Dr.Rajesh Nair</h4><table class="table table-borderless">
  <tbody>
    <tr>
      <th scope="col">Days & Timing</th>
      <th scope="col">Mon-Sat: 9am-1pm</th>
    </tr>
    <tr>
      <td>Consulting Rooms</td>
      <td>Dermatology Dept.-OPD</td>
    </tr>
    <tr>
      <td>Speciality</td>
      <td>Dermatogist</td>
    </tr>
  </tbody>
</table>
      <a href="#" class="btn btn-primary">See Profile</a>
    </div>
  </center>
    </div>
  </div>
</div>
</div>
<br><br>
</div>

<!--Footer-->

  <?php include 'footer.php'; ?>
</main>
</body>
</html>