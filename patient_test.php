<!DOCTYPE html>
<html>
  <head>
    <META HTTP-EQUIV="Content-type" CONTENT="text/html; charset=UTF-8">   <!-- salesforce linkage -->

     <META HTTP-EQUIV="Content-type" CONTENT="text/html; charset=UTF-8">
      <link rel="stylesheet" href="home.css">
      <link rel="stylesheet" href="contact.css">
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
        <meta charset="utf-8">
        <title></title>
  </head>
  <body>
<div class="container">

  <center><label><h3>Registration Type</h3></label><br></center>
  <div>
  <div class="col-sm-6">
    <button type="button" name="New" class="form-control" onclick="new_user()">New Birth</button>
      </div>
      <div class="col-sm-6">
        <button type="button" name="Existing" class="form-control" onclick="existing_user()">Existing Human</button>
          </div>
    </div>
    <br>
    <br>
    <div id="form">

    </div>
</div>


<footer style="padding: 20px; border-top: 1px solid #eee; margin-top: 25px;">
  <div class="container">
  <div class="text-muted text-center">
    Copyright © Sanchit Aggarwal<br><center>#9560766238</center>
  </div>
    </div>
</footer>
  </body>
  <script type="text/javascript">
  function new_user() {
    document.getElementById("form").innerHTML='<label for="first_name">Name</label><input id="first_name" class="form-control" maxlength="40" name="name" size="20" type="text" required /><br><label for="father_name">Father Name</label><input id="father_name" class="form-control" maxlength="40" name="name" size="20" type="text" required /><br><label for="mother_name">Mother Name</label><input id="mother_name" class="form-control" maxlength="40" name="name" size="20" type="text" required /><br><label for="aarogyam">Father Aarogyam ID</label><input id="father_name" class="form-control" maxlength="40" name="name" size="20" type="text" required /><br> <label for="last_name">DOB</label><input id="last_name" class="form-control" maxlength="80" name="dob" size="20" type="text" required/><br> <label for="Sex">Sex</label> <select id="Sex" class="form-control"> <option value="Male">Male</option> <option value="Female">Female</option> <option value="Others">Others</option> </select><br> <label for="phone">Father Phone</label><input id="phone" maxlength="40" class="form-control" name="phone" size="20" type="number" required/><br> <label for="email">Father Email</label><input id="email" maxlength="80" class="form-control" name="email" size="20" type="email" required /><br> <label for="pta">Father Address</label><input id="pta" maxlength="40" class="form-control" name="address" size="20" type="text" required/><br> <label for="city">City</label><input id="city" maxlength="40" class="form-control" name="city" size="20" type="text" required/><br> <label for="state">State</label><input id="state" maxlength="20" class="form-control" name="state" size="20" type="text" required /><br> <!-- <label for="country">Country</label><input id="country" maxlength="40" class="form-control" name="country" size="20" type="text" required /><br> --> <label for="zip">Zip</label><input id="zip" maxlength="20" name="zip" class="form-control" size="20" type="number" required/><br> <label for="aadhar">Father UDAI</label><input id="aadhar" class="form-control" name="udai" type="text" required><br> <input type="submit" class="form-control btn btn-success" name="submit" required>';
  }
  function existing_user() {
    document.getElementById("form").innerHTML='<label for="first_name">Name</label><input id="first_name" class="form-control" maxlength="40" name="name" size="20" type="text" required /><br> <label for="last_name">DOB</label><input id="last_name" class="form-control" maxlength="80" name="dob" size="20" type="text" required/><br> <label for="Sex">Sex</label> <select id="Sex" class="form-control"> <option value="Male">Male</option> <option value="Female">Female</option> <option value="Others">Others</option> </select><br> <label for="phone">Phone</label><input id="phone" maxlength="40" class="form-control" name="phone" size="20" type="number" required/><br> <label for="email">Email</label><input id="email" maxlength="80" class="form-control" name="email" size="20" type="email" required /><br> <label for="pta">Address</label><input id="pta" maxlength="40" class="form-control" name="address" size="20" type="text" required/><br> <label for="city">City</label><input id="city" maxlength="40" class="form-control" name="city" size="20" type="text" required/><br> <label for="state">State</label><input id="state" maxlength="20" class="form-control" name="state" size="20" type="text" required /><br> <!-- <label for="country">Country</label><input id="country" maxlength="40" class="form-control" name="country" size="20" type="text" required /><br> --> <label for="zip">Zip</label><input id="zip" maxlength="20" name="zip" class="form-control" size="20" type="number" required/><br> <label for="aadhar">UDAI</label><input id="aadhar" class="form-control" name="udai" type="text" required><br> <input type="submit" class="form-control btn btn-success" name="submit" required>';
  }

  </script>
</html>
