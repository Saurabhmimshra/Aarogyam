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
  <div class="row">

  <!-- <center><label><h3>Appointment Type</h3></label><br></center>
  <div>
  <div class="col-sm-6">
    <button type="button" name="New_Appointment" class="form-control" onclick="new_user()">New Appointment</button>
      </div>
      <div class="col-sm-6">
        <button type="button" name="Existing_Appointment" class="form-control" onclick="existing_user()">Existing Appointment</button>
          </div>
    </div>
    <br>
    <br> --><div class="col-md-3"></div>
    <div id="form" class="col-md-6">
      <form>
      <label for="id">Aarogyam ID</label><input  id="id" class="form-control" maxlength="40" name="id" size="20" type="text" required /><br>

      <button type="button" class="form-control" name="load_info">Fetch Information</button>


      <label for="first_name">Name</label><input  id="first_name" class="form-control" maxlength="40" name="first_name" size="20" type="text" required /><br>
      <label for="age">Age</label><input  id="age" maxlength="40"  class="form-control" name="age" size="20" type="number"/><br>
      <label for="sex">Sex</label><select  class="form-control"  id="sex" name="sex"><option value="">--None--</option><option value="Male">Male</option>
      <option value="Female">Female</option>
      <option value="Others">Others</option>
      </select>
      <label for="diagnostic">Diagnostic Info</label><textarea  class="form-control" name="diagnostic" required></textarea><br>
      <label for="prescription">Prescription</label><textarea  class="form-control" name="prescription" required></textarea><br>
      <label for="duration">Duration</label><input  id="duration" maxlength="20" name="duration"  class="form-control" size="20" type="number" required/><br>
      <label for="next_appointment">Next Appointment Date</label><input  id="next_appointment" maxlength="40" class="form-control"  name="next_appointment" size="20" type="text" required/><br>
      <label for="special">Special Care</label><textarea  class="form-control" name="special" required></textarea><br>
      <input type="submit"  class="form-control" name="submit" required>
      </form>

    </div>
</div>



<footer style="padding: 20px; border-top: 1px solid #eee; margin-top: 25px;">
  <div class="container">
  <div class="text-muted text-center">
    
  </div>
    </div>
</footer>
  </body>
  <!-- <script type="text/javascript">
  function new_user() {
    document.getElementById("form").innerHTML='<form><label for="id">Aarogyam ID</label><input id="id" class="form-control" maxlength="40" name="id" size="20" type="text" required /><br><label for="first_name">Name</label><input id="first_name" class="form-control" maxlength="40" name="first_name" size="20" type="text" required /><br><label for="age">Age</label><input id="age" maxlength="40" class="form-control" name="age" size="20" type="number"/><br><label for="sex">Sex</label><select class="form-control" id="sex" name="sex"><option value="">--None--</option><option value="Male">Male</option><option value="Female">Female</option><option value="Others">Others</option></select><label for="diagnostic">Diagnostic Info</label><textarea class="form-control" name="diagnostic" required></textarea><br><label for="prescription">Prescription</label><textarea class="form-control" name="prescription" required></textarea><br><label for="duration">Duration</label><input id="duration" maxlength="20" name="duration" class="form-control" size="20" type="number" required/><br><label for="next_appointment">Next Appointment Date</label><input id="next_appointment" maxlength="40" class="form-control" name="next_appointment" size="20" type="text" required/><br><label for="special">Special Care</label><textarea class="form-control" name="special" required></textarea><br><input type="submit" class="form-control" name="submit" required></form>';
  }
  function existing_user() {
    document.getElementById("form").innerHTML='<form><label for="id">Aarogyam ID</label><input id="id" class="form-control" maxlength="40" name="id" size="20" type="text" required /><br><button type="button" class="form-control" name="load_info">Fetch Information</button><br><label for="first_name">Name</label><input id="first_name" class="form-control" maxlength="40" name="first_name" size="20" type="text" required /><br><label for="age">Age</label><input id="age" maxlength="40" class="form-control" name="age" size="20" type="number"/><br><label for="sex">Sex</label><select class="form-control" id="sex" name="sex"><option value="">--None--</option><option value="Male">Male</option><option value="Female">Female</option><option value="Others">Others</option></select><label for="diagnostic">Diagnostic Info</label><textarea class="form-control" name="diagnostic" required></textarea><br><label for="prescription">Prescription</label><textarea class="form-control" name="prescription" required></textarea><br><label for="duration">Duration</label><input id="duration" maxlength="20" name="duration" class="form-control" size="20" type="number" required/><br><label for="next_appointment">Next Appointment Date</label><input id="next_appointment" maxlength="40" class="form-control" name="next_appointment" size="20" type="text" required/><br><label for="special">Special Care</label><textarea class="form-control" name="special" required></textarea><br><input type="submit" class="form-control" name="submit" required></form>';
  }

  </script> -->
</html>