<!DOCTYPE html>
<html>
<head>
  <META HTTP-EQUIV="Content-type" CONTENT="text/html; charset=UTF-8">   <!-- salesforce linkage -->
<link rel="stylesheet" href="appointment.css">
   <META HTTP-EQUIV="Content-type" CONTENT="text/html; charset=UTF-8">

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
      <meta charset="utf-8">
      <title></title>
</head>

  <body>
    <nav class="navbar navbar-inverse" style="background-color:#f8f8f8;">
    <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="home.php">AAROGYAM</a>
    </div>
    <ul class="nav navbar-nav">
      <li ><a href="#">Home</a></li>
      <li><a href="home.php#about">About Us</a></li>
      <li class="active"><a href="appointment.php">Book Appointment</a></li>
      <li><a href="patient.php">Aarogyam Details</a></li>
      <li><a href="home.php#contact">Contact Us</a></li>


    </ul>
    <ul class="nav navbar-nav navbar-right">
      <li><a href="patient_registration.php"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
      <li><a href="user_DETAIL_FETCH_REDIRECT.PHP"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
    </ul>
    </div>
  </nav>

    <div class="greener">
    <img src="appointment.png" height="300vw%" width="100%vw" alt="appointment"><br><br>

  <div class="flexer container">
    <div class="col-md-3"><label for="hospital"><h4><strong>Select Hospital</strong><h4></label><select id="hospital" class="form-control"> <option value="Male">Male</option> <option value="Female">Female</option> <option value="Others">Others</option> </select>
    </div>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
    <div class="col-md-1"></div>
    <div class="col-md-3"><label for="department"><h4><strong>Select Department</strong><h4></label><select id="hospital" class="form-control"> <option value="Male">Male</option> <option value="Female">Female</option> <option value="Others">Others</option> </select>
    </div>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
    <div class="col-md-1"></div>
    <div class="col-md-3"><label for="doctor"><h4><strong>Select Doctor</strong><h4></label><select id="hospital" class="form-control"> <option value="Male">Male</option> <option value="Female">Female</option> <option value="Others">Others</option> </select>
    </div>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
    <div class="col-md-1"></div>

  </div>
  <div class="container">
    <label for="aar_id">Enter your Aarogyam ID</label><input id="first_name" class="form-control" maxlength="40" name="name" size="20" type="text" required />
    <label for="date">Date of appointment</label><input id="first_name" class="form-control" maxlength="40" name="name" size="20" type="date" required />
<br>
    <button type="Book" name="button" class="form-control" onclick="">Confirm Appointment</button>

  </div>
  </div>
  <?php
  require 'footer.php';
  ?>
    </body>
</html>
