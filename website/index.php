<!DOCTYPE html>
<html>
<head>
<title>HealthCare Hospital</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="stylesheets/index.css">

</head>
<body>

<header>
 
  <?php include 'header.php'; ?>
</header>
<main>


  <?php include 'app.php'; ?>


<div class="container" style="margin-top: 140px">

<div class="slideshow-container"><br>
<div class="mySlides fade">
  <div class="numbertext">1 / 5</div>
  <image class="img1" src="images/1.jpg">
  <div class="text-block">
    <br>
    <p>Premier Hospital in India<br> with 750 Beds, which <br>is one of the Largest<br> in the Private Sector</p>
    <center><a href="#"><button type="button" class="btn btn-light">More...</button></a></center>
    <br>
  </div>
</div>
  <div class="mySlides fade">
  <div class="numbertext">2 / 5</div>
  <image class="img1" src="images/2.jpg">
  <div class="text-block">
    <br>
    <p>Bombay Hospital College of<br> Nursing for B.Sc and<br> M.Sc Courses Affiliated<br> to MUHS and Recognized by<br> MNC and INC</p>
    <center><a href="#"><button type="button" class="btn btn-light">More...</button></a></center>
    <br>
  </div>
</div>

<div class="mySlides fade">
  <div class="numbertext">3 / 5</div>
  <image class="img1" src="images/5.jpg">
  <div class="text-block">
    <br>
    <p>All Medical Facilities<br> Under One Roof, <br>Providing Patient Care<br> as Per International Standards</p>
    <center><a href="#"><button type="button" class="btn btn-light">More...</button></a></center>
    <br>
  </div>
</div>

<div class="mySlides fade">
  <div class="numbertext">4 / 5</div>
  <image class="img1" src="images/3.jpg">
  <div class="text-block">
    <br>
    <p>25 Operation Theatres and <br>all Diagnostic Departments,<br> Equipped with Latest<br> State-of-the-art <br>Cutting Edge Technology</p>
    <center><a href="#"><button type="button" class="btn btn-light">More...</button></a></center>
    <br>
  </div>
</div>

<div class="mySlides fade">
  <div class="numbertext">5 / 5</div>
  <image class="img1" src="images/4.jpg">
  <div class="text-block">
    <br>
    <p>4 Buildings with 6,00,000 <br>sq.ft. Built up Area</p>
    <center><a href="#"><button type="button" class="btn btn-light">More...</button></a></center>
    <br>
  </div>
</div>

<a class="prev" onclick="plusSlides(-1)">&#10094;</a>
<a class="next" onclick="plusSlides(1)">&#10095;</a>
</div>

<br>

<div style="text-align:center">
  <span class="dot" onclick="currentSlide(1)"></span> 
  <span class="dot" onclick="currentSlide(2)"></span> 
  <span class="dot" onclick="currentSlide(3)"></span> 
  <span class="dot" onclick="currentSlide(4)"></span> 
  <span class="dot" onclick="currentSlide(5)"></span>
</div>
  </main>
<script>
var slideIndex = 1;
showSlides(slideIndex);

function plusSlides(n) {
  showSlides(slideIndex += n);
}

function currentSlide(n) {
  showSlides(slideIndex = n);
}

function showSlides(n) {
  var i;
  var slides = document.getElementsByClassName("mySlides");
  var dots = document.getElementsByClassName("dot");
  if (n > slides.length) {slideIndex = 1}    
  if (n < 1) {slideIndex = slides.length}
  for (i = 0; i < slides.length; i++) {
      slides[i].style.display = "none";  
  }
  for (i = 0; i < dots.length; i++) {
      dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block";  
  dots[slideIndex-1].className += " active";
}
</script>

 <div class="row justify-content-center align-items-center">
  <div class="row">
  <div class="col-md-4"><br><br>
    <div class="card">
      <div class="card-body">
    <img class="card-img-top" src="images/alarm.png" alt="Card image">
      <center>
      <center><h2 class="card-title">Working Hours</h2>
  <table class="table table-borderless">
  <tbody>
    <tr>
      <td>Mon-Fri</td>
      <td>8:00 Am-9:00 pm</td>
    </tr>
    
    <tr>
      <td>Saturday</td>
      <td>8:00 Am-7:00 pm</td>
    </tr>
    <tr>
      <td>Sunday</td>
      <td>8:00Am-12:00pm</td>
    </tr>
  </tbody>
</table>
    </div>
  </center>
    </div>
  </div>

  <div class="col-md-4"><br><br>
    <div class="card">
      <div class="card-body">
    <img class="card-img-top" src="images/telephone.png" alt="Card image">
    
      <center><h2 class="card-title">Appointments</h2>
        <table class="table table-borderless">
  <tbody>
    <tr>
      <td>Mon-Fri</td>
      <td>8:00 Am-9:00 pm</td>
    </tr>
    <tr>
      <td>Saturday</td>
      <td>8:00 Am-7:00 pm</td>
    </tr>
    <tr>
      <td>Sunday</td>
      <td>8:00Am-12:00 pm</td>
    </tr>
  </tbody>
</table>
    </div>
  </center>
    </div>
  </div>
<br>
 
  <div class="col-md-4"><br><br>
    <div class="card">
         <div class="card-body">
    <img class="card-img-top" src="images/bell.png" alt="Card image">
      <center><h2 class="card-title">Emergency Cases</h2><br>
        <h3>+56 273 45678 235</h3><br>
        <p style="font-size: 15px">In case of emergency, please contact this number</p>
  </center>
    </div>
  </div>
</div>
</div>


<!-- collapsible images of services-->
<div class="container">
<div class="row justify-content-center align-items-center">
<div>
  <br><br>
  <h1>Services</h1>
<p>Bombay Hospital is a tertiary care hospital with all specialities and super specialities under one roof performing entire range of diagnostic, therapeutic and interventional procedures</p><br>
</div>
</div>
</div>

<div class="row justify-content-center align-items-center">
  <center>
  <button type="button" class="btn btn-outline-primary" style="background-color: white">
    <image class="img" src="images/r1.png" data-toggle="collapse" data-target="#demo"><br><br><br><br><br><br><br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Diagnostics</image></button>
  <div id="demo" class="collapse">
    <table class="table table-borderless">
  <tbody>
    <tr>
      <td>Blood Transfusion Service</td>
      <td>Cath Lab</td>
      <td>ECG, Echo/Stress & Holter</td>
    </tr>
    <tr>
      <td>EEG & EMG</td>
      <td>Histopathology</td>
      <td>MRI & CT Scan</td>
    </tr>
    <tr>
      <td>Nuclear Medicine</td>
      <td>Pathology</td>
      <td>Gynecologist</td>
    </tr>
    <tr>
      <td>PET-Scan</td>
      <td>Pulmonary Function Lab</td>
      <td>Tissue Typing Lab</td>
    </tr>
    <tr>
      <td>Ultrasound</td>
      <td>Urodynamics</td>
      <td>Voice Clinic</td>
    </tr>
    <tr>
      <td>X’RAY, Mammography & DSA</td>
    </tr>
  </tbody>
</table>
  </div>

  <button type="button" class="btn btn-outline-none" style="background-color: white">
    <image class="img" src="images/r2.png" data-toggle="collapse" data-target="#demo"><br><br><br><br><br><br><br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Medical</image></button>
  <div id="demo" class="collapse">
    <table class="table table-borderless">
  <tbody>
    <tr>
      <td>Cardiology</td>
      <td>Chest Medicine</td>
      <td>Dermatology and Venereology</td>
    </tr>
    <tr>
      <td>Diabetology</td>
      <td>Gastroentrology</td>
      <td>General / Internal Medicine</td>
    </tr>
    <tr>
      <td>Nephrology</td>
      <td>Neurology</td>
      <td>Neonatology and Intensive Pediatrics</td>
    </tr>
    <tr>
      <td>Paediatrics</td>
      <td>Surgical Oncology / Medical Oncology</td>
    </tr>
  </tbody>
</table>
  </div>

  <button type="button" class="btn btn-outline-none" style="background-color: white">
    <image class="img" src="images/r3.png" data-toggle="collapse" data-target="#demo"><br><br><br><br><br><br><br>&nbsp;&nbsp;&nbsp;Round The Clock</image></button>
  <div id="demo" class="collapse">
    <table class="table table-borderless">
  <tbody>
    <tr>
      <td>Admissions</td>
    </tr>
    <tr>
      <td>ECG & X-Ray</td>
    </tr>
    <tr>
      <td>Emergency & Casualty</td>
    </tr>
    <tr>
      <td>Path Lab</td>
    </tr>
    <tr>
      <td>Pharmacy</td>    
    </tr>
  </tbody>
</table>
</div>
  <button type="button" class="btn btn-outline-none" style="background-color: white">
    <image class="img" src="images/r4.png" data-toggle="collapse" data-target="#demo"><br><br><br><br><br><br><br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Support</image></button>
  <div id="demo" class="collapse">
    <table class="table table-borderless">
  <tbody>
    <tr>
      <td>
Bombay Hospital Institute of Medical Sciences (BHIMS)</td>
    </tr>
    <tr>
      <td>Kitchen Services</td>
      <td>The M P Birla Library</td>
    </tr>
    <tr>
      <td>
The Birla Matushree Sabhaghar</td>
      <td>The Museum</td>
    </tr>
    <tr>
      <td>The S P Jain Auditorium</td>
    </tr>
  </tbody>
</table>
</div>

  <button type="button" class="btn btn-outline-none" style="background-color: white">
    <image class="img" src="images/r5.png" data-toggle="collapse" data-target="#demo"><br><br><br><br><br><br><br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Surgical</image></button>
  <div id="demo" class="collapse">
    <table class="table table-borderless">
  <tbody>
    <tr>
      <td>Cardiovascular And Thoracic Surgery</td>
      <td>Ear / Nose / Throat (ENT)</td>
    </tr>
    <tr>
      <td>General Surgery</td>
      <td>Neuro-Surgery</td>
    </tr>
    <tr>
      <td>Obstetrics and Gynaecology Surgery</td>
      <td>Ophthalmology</td>
    </tr>
    <tr>
      <td>Orthopaedics</td>
      <td>Paediatric and Neonatal Surgery</td>
    </tr>
    <tr>
      <td>Plastic Surgery</td>
      <td>
Surgical Oncology / Medical Oncology</td>
    </tr>
  </tbody>
</table>
</div>

  <button type="button" class="btn btn-outline-none" style="background-color: white">
    <image class="img" src="images/r6.png" data-toggle="collapse" data-target="#demo"><br><br><br><br><br><br><br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Therapeutic</image></button>
  <div id="demo" class="collapse">
    <table class="table table-borderless">
  <tbody>
    <tr>
      <td>Diabetic Clinic</td>
      <td>Dialysis Unit (Artifical Kidney Unit)</td>
    </tr>
    <tr>
      <td>Dietician</td>
      <td>Lithotripsy</td>
    </tr>
    <tr>
      <td>Ozone Therapy</td>
      <td>Physiotherapy Department</td>
    </tr>
    <tr>
      <td>Preventive Health Check-Up (EHS)</td>
      <td>Radiation Therapy</td>
    </tr>
  </tbody>
</table>
</div>
</div>
</center>
</div>
<br><br><br>

</div>



<!--Footer-->
 
  <?php include 'footer.php'; ?>
</main>
</body>
</html>