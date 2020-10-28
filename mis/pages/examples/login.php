
<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<style type="text/css">
#ab1:hover{cursor:pointer;}
</style>
</head>
<body style="background:url('iwall.jpeg') no-repeat; background-size:cover;">

<div class="container" style="width:450px;margin-top: 80px">
<div class="card">
<img src="index.jpeg" class="card-img-top">
<div class="card-body">
  <form class="form" method="post" action="login_process.php">
      <br>
      <div class="message" id="message" style="margin: auto;"></div>
      <div class="form-group has-feedback">
        <input type="email" name="email" id="email" class="form-control" placeholder="Email">
        <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
      </div>
      <div class="form-group has-feedback">
        <input type="password" name="epassword" id="epassword" class="form-control" placeholder="Password">
        <span class="glyphicon glyphicon-lock form-control-feedback"></span>
      </div>
      <div class="row">
        <div class="col-xs-8">
          <div class="checkbox icheck">
            
          </div>
        </div>
        <!-- /.col -->
        <div class="col-xs-4">
          <center><button type="submit" name="submit" id="submit"  class="btn btn-primary btn-block">Sign In</button></center>
        </div>
        <!-- /.col -->
      </div>
    </form>
 
</div>
</div>
</div>





  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>