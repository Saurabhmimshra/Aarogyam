<??>


<!DOCTYPE html>
<html>
  <head>
    <META HTTP-EQUIV="Content-type" CONTENT="text/html; charset=UTF-8">   <!-- salesforce linkage -->
           <META charset="utf-8">

     <META HTTP-EQUIV="Content-type" CONTENT="text/html; charset=UTF-8">
      <!-- <link rel="stylesheet" href="home.css"> -->
      <!-- <link rel="stylesheet" href="contact.css"> -->
<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"
      rel="stylesheet">
      <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"
      rel="stylesheet">
        <title></title>
  </head>
  <body>
<div class="container">
	<h3>Patient Registration</h3>
	
	<div class="row">	
		<div class="col-sm-3"></div>
			<div class="col-sm-6">
				 <form> 
		              <label for="first_name">Name</label><input  id="first_name" class="form-control" maxlength="40" name="name" size="20" type="text" required /><br>

		              <label for="last_name">DOB</label><input  id="last_name"  class="form-control" maxlength="80" name="dob" size="20" type="text" required/><br>

		              <label for="Sex">Sex</label>
		              <select id="Sex" class="form-control">
		                <option value="Male">Male</option>
		                <option value="Female">Female</option>
		                <option value="Others">Others</option>
		              </select><br>

		              <label for="phone">Phone</label><input  id="phone" maxlength="40"  class="form-control" name="phone" size="20" type="number" required/><br>
		              
		              <label for="email">Email</label><input  id="email" maxlength="80" class="form-control"  name="email" size="20" type="email" required /><br>
		              <label for="pta">Address</label><input  id="pta" maxlength="40" class="form-control"  name="address" size="20" type="text" required/><br>


		              <label for="city">City</label><input  id="city" maxlength="40" class="form-control"  name="city" size="20" type="text" required/><br>

		              <label for="state">State</label><input  id="state" maxlength="20" class="form-control"  name="state" size="20" type="text" required /><br>

		              <!-- <label for="country">Country</label><input  id="country" maxlength="40" class="form-control"  name="country" size="20" type="text" required /><br> -->

		              <label for="zip">Zip</label><input  id="zip" maxlength="20" name="zip"  class="form-control" size="20" type="number" required/><br>

		              <label for="aadhar">UDAI</label><input  id="aadhar" class="form-control" name="udai" type="text" required><br>

		              



		            <input type="submit"  class="form-control btn btn-success" name="submit" required>

		          </form>
				</div>
			<div class="col-sm-3"></div>
	</div>
</div>



  </body>
</html>