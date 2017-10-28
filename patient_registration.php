
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
    <?php
    require 'navbar.php';
    ?>
<div class="container">

  <center><label><h3>New Registration</h3></label><br></center>
  <div>
  <div class="col-sm-6">

    </div>
    <br>
    <br>
    <div id="form">
        <form method="POST" action="new_registration.php">
            <label for="first_name">Name</label>
            <input id="first_name" class="form-control" maxlength="40" name="name" size="20" type="text" required />
            <br>
            <label for="father">Father's Name</label>
            <input id="father_name" class="form-control" maxlength="40" name="father_name" size="20" type="text" required /><br>

            <label for="mother_name">Mother's Name</label>
            <input id="mother_name" class="form-control" maxlength="40" name="mother_name" size="20" type="text" required />
            <br>
            <label for="aarogyam">Father's Aarogyam ID</label>
            <input id="father_name" class="form-control" maxlength="40" name="father_rid" size="20" type="text" required />
            <br>
            <label for="aarogyam">Mother's Aarogyam ID</label>
            <input id="mothers_name" class="form-control" maxlength="40" name="mother_rid" size="20" type="text" required />

            <br>
            <label for="last_name">DOB</label>
            <input id="last_name" class="form-control" maxlength="80" name="dob" size="20" type="text" required/>
            <br>
            <label for="Sex">Sex</label>
            <select id="Sex" name="sex" class="form-control">
               <option value="Male">Male</option>
               <option value="Female">Female</option>
               <option value="Others">Others</option>
            </select>

            <br>

            <label for="phone">Phone</label>
            <input id="phone" maxlength="40" class="form-control" name="phone" size="20" type="number" required/><br>

             <label for="email">Email</label>
             <input id="email" maxlength="80" class="form-control" name="email" size="20" type="email" required /><br>

             <label for="pta">Address</label>
             <input id="pta" maxlength="40" class="form-control" name="address" size="20" type="text" required/><br>

             <label for="city">City</label>
             <input id="city" maxlength="40" class="form-control" name="city" size="20" type="text" required/>
             <br>
             <label for="state">State</label>
             <input id="state" maxlength="20" class="form-control" name="state" size="20" type="text" required />
             <br>
             <!-- <label for="country">Country</label><input id="country" maxlength="40" class="form-control" name="country" size="20" type="text" required /><br> -->

             <label for="zip">Zip</label>
             <input id="zip" maxlength="20" name="zip" class="form-control" size="20" type="number" required/><br>

             <label for="aadhar">UDAI</label>
             <input id="aadhar" class="form-control" name="uidai" type="text" required><br>

             <input type="submit" class="form-control btn btn-success" name="submit" required>
      <form/>
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

</html>
