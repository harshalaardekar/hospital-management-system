<!DOCTYPE html>
<html>
<head>
<title>Hospital Location</title>
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
    <h2><font color="#b71c1c">About Us</font></h2> 

    <a class="dropdown-item" href="founder.html"><font size="4px">Founders</font></a>
    <a class="dropdown-item" href="history.html"><font size="4px">History</font></a>
    <a class="dropdown-item" href="location.html"><font size="4px">Location</font></a>
   <a class="dropdown-item" href="mgmt.html"><font size="4px">Mgmt. Board</font></a>
    <a class="dropdown-item" href="awards.html"><font size="4px">Awards</font></a>
    <a class="dropdown-item" href="phylosophy.html"><font size="4px">Phylosophy</font></a>
    <a class="dropdown-item" href="feature.html"><font size="4px">Silent Features</font></a>
   <a class="dropdown-item" href="doctor info.html"><font size="4px">Doctor's info.</font></a>
  </div>

  <div class="col-sm-9">
  <h1><font color="#b71c1c">Location</font></h1>
  <br>
  <img src="images/loc1.jpg" width="800px" height="300px">
  <br><br><br>
  <img src="images/loc2.png" width="800px" height="300px">
<br>
<br>

  </div>


</div>

<!--split div close-->
</div>

<div class="container" style="width:100%;height:300px;background: linear-gradient(to bottom, #fafafa 0%, #b71c1c 60%);margin-top: 50px;">
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

<!--container close-->
</div>


<br><br>


<!--Footer-->

  <?php include 'footer.php'; ?>
</main>
</body>
</html>