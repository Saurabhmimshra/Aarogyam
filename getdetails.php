<?
	 echo '
	<form name="diagnose" method="POST" action="patient.php">
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
      </form>';

      echo $_GET['q'];
?>