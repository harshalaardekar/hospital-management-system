<!DOCTYPE html>
<html>
<head>
<title>History</title>
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
  <h1><font color="#b71c1c">History</font></h1>
  <p><h2>Bombay Hospital and Medical Research Centre<h2></p>
  <h3>– an institution in itself</h3>

  <br>
  <font size="3px">
  <img src="images/historyimage.gif" alt="alt text" style="float: right;height: 200px;width:200px;">
  <p>Mumbai, the centre for quality medical care not only across India, but also the South Asia. A city that has a rich medical history. Situated in South Mumbai is the Bombay Hospital and Medical Research Centre, the medical hub of India’s biggest metropolis.</p>

  <p>Established over five decades ago, in 1952, The Bombay Hospital was the result of the enormous philanthropy displayed by Shri Rameshwardas Birla, Founder Chairman of the Bombay Hospital Trust. It began as a 440 bed hospital whose objective was, in its founder’s words, “to render the same level of service to the poor that the rich would get in a good hospital.”</p>

  <p>Today, the hospital has grown to house over 830 beds, some of the country’s most advanced diagnostic & surgical equipment, and offers a comprehensive range of specialised medical services. The objective however, remains unchanged. Which is why 33% of the patients treated are in the general ward and pay only for their medicines and consumables. The free OPD at the hospital successfully treats in excess of 1,00,000 patients each year.</p>

  <p>Ever since it was established in 1952, the Bombay Hospital has instilled in its patients a sense of genuine trust. Trust that has been built by combining superior medical treatment with a caringly humane attitude. Which is why, in excess of two lakh people confidently walk through its hallowed doors every year, year after year.</p>

<p>It is on this sound foundation that the hospital has based its pursuit of excellence in every field of medical specialisation. This has seen fruition in the form of the Medical Research Centre now known as the M P Birla Medical Centre.</p>

<p>The Bombay Hospital presently ranks among the finest multi-speciality tertiary level medical centres in the country. The internationally renowned panel of doctors and consultants in every field of specialisation have, at their disposal, cutting-edge equipment. Supported by a highly trained and professional nursing staff. Little wonder then, that the Bombay Hospital attracts patients from every strata of society. Be it a factory worker from rural India, a high-flying executive from a multi-national company or the likes of former Prime Minister and Governor of Maharashtra.</p>

  </font> 

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
      <button class="btn btn-primary my-2 my-sm-0"><href="doctor info.html"><font size="4px">Search</font></a></button>
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