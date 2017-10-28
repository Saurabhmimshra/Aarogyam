<?
	require 'connect.inc.php';

	if (isset($_GET['q'])) {
		$id = $_GET['q'];
		if(!empty($id)){
			$query = "select * from `patient` where `arid` = " . $id ."";
			$result=mysqli_query($con,$query);
			while ($row = mysqli_fetch_assoc($result)) {
				 echo '
	<form name="diagnose" method="POST" action="patient.php">
	<label for="first_name">Name</label>
	<input  id="first_name" class="form-control" maxlength="40" name="first_name" value = "' . $row['name'] . '" size="20" type="text" required /><br>

      <label for="age">Date Of Birth</label>
      <input  id="age" maxlength="40" value = "' . $row['dob'] .  '" class="form-control" name="dob" size="20" type="text"/><br>

      <label for="sex">Sex</label>
      <input  class="form-control"  id="sex" name="sex" type="text" value="' . $row['sex'] .'">
      <br>

      <label for="diagnostic">Diagnostic Info</label>
      <textarea  class="form-control" name="diagnostic" required></textarea><br>

      <label for="prescription">Prescription</label>
      <textarea  class="form-control" name="prescription" required></textarea><br>

      <label for="duration">Duration</label>
      <input  id="duration" maxlength="20" name="duration"  class="form-control" size="20" type="number" required/><br>

      <label for="next_appointment">Next Appointment Date</label>
      <input  id="next_appointment" maxlength="40" class="form-control"  name="next_appointment" size="20" type="text" required/><br>

      <label for="special">Special Care</label>
      <textarea  class="form-control" name="special" ></textarea><br>

      <label for="do">Date</label>
      <input  id="do" maxlength="20" name="date"  class="form-control" size="20" type="date" /><br>

      <label for="die">Disease</label>
      <select id="die" name="disease" class="form-control">'
               <option value="Male">Male</option>
               <option value="Female">Female</option>
               <option value="Others">Others</option>
     echo ' </select>


      <input value="'.  $id .'" type="text" name="rid" hidden/>
      
      <input type="submit"  value= "Submit" class="form-control" name="submit">
      </form>';
			}
		}
	}

	
?>