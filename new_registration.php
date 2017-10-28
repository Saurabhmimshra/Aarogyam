<?
	require 'connect.inc.php';
?>
<!DOCTYPE html>
<html>
<head>
	<title>Successful</title>

	<META HTTP-EQUIV="Content-type" CONTENT="text/html; charset=UTF-8">   <!-- salesforce linkage -->

    <META HTTP-EQUIV="Content-type" CONTENT="text/html; charset=UTF-8">
    <link rel="stylesheet" href="home.css">
    <link rel="stylesheet" href="contact.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <meta charset="utf-8">

</head>
<body style="text-align: center;">
	<?php
	require 'navbar.php';
	?>
	<div class="row">
		<div class="col-sm-3"></div>
		<div class="col-sm-6">

		<?
			if(isset($_POST['name']) &&
				isset($_POST['father_name']) &&
				isset($_POST['mother_name']) &&
				isset($_POST['father_rid']) &&
				isset($_POST['mother_rid']) &&
				isset($_POST['dob']) &&
				isset($_POST['sex']) &&
				isset($_POST['phone']) &&
				isset($_POST['email']) &&
				isset($_POST['address']) &&
				isset($_POST['city']) &&
				isset($_POST['state']) &&
				isset($_POST['zip']) &&
				isset($_POST['uidai'])
				){

				$name = $_POST['name'];
				$father_name = $_POST['father_name'];
				$mother_name = $_POST['mother_name'];
				$father_rid = $_POST['father_rid'];
				$mother_rid = $_POST['mother_rid'];
				$dob = $_POST['dob'];
				$sex = $_POST['sex'];
				$phone = $_POST['phone'];
				$email = $_POST['email'];
				$address = $_POST['address'];
				$city = $_POST['city'];
				$state = $_POST['state'];
				$zip = $_POST['zip'];
				$uidai = $_POST['uidai'];
				$password = uniqid();
				$query = "INSERT INTO `patient`(`arid`, `fname`, `mname`, `frid`, `mrid`, `name`, `dob`, `sex`, `phone`, `email`, `address`, `city`, `state`, `zip`, `uidai`, `password`) VALUES ('','" . $name . "','". $father_name ."','" . $mother_name . "','". $father_rid ."','". $mother_rid ."','". $dob ."','". $sex ."','". $phone ."','". $email ."','". $address ."','" . $city . "','". $state ."','". $zip ."','". $uidai ."', '" . $password . "')";
				$result = mysqli_query($con, $query);
				if($err = mysqli_error($con)){
					die($err);
				}else{
					$query = 'select MAX(`arid`) from `patient`';
					$result = mysqli_query($con, $query);
					while($row = mysqli_fetch_assoc($result)){
						// print_r($row);
						echo '<div class="alert alert-success"><strong>Rgistration Successful!</strong></div><br>
						<div class="alert alert-success"><strong>Aarogyam Id : '. $row['MAX(`arid`)'] . ' And Password : '. $password .'</strong></div>';
					}
				}
			}

		?>

			<a href="patient_registration.php">Another Registstration</a>
		</div>
		<div class="col-sm-3"></div>
	</div>
	<?php
	require 'footer.php';
	?>
</body>
</html>
