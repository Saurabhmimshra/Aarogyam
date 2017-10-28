<?
	require 'connect.inc.php';
?>

<!DOCTYPE html>
<html lang="fr"><head>
<meta http-equiv="content-type" content="text/html; charset=UTF-8">
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" href="cv/animation.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">


<title>Aarogyam Details</title>


<link rel="stylesheet" href="cv/reset.css">
<link rel="stylesheet" media="screen and (max-width:480px)" href="cv/mobile.css">
<link rel="stylesheet" media="screen and (min-width:481px)" href="cv/cv.css">
<link rel="stylesheet" media="print" href="cv/print.css">
</head>
<body>

	<header role="banner">
		<!-- <div class="container_16"> -->
				<!-- <hgroup> -->
					<center><h1>Welcome to Project Aarogyam</h1>
					<h2>Details Fetch Module</h2>
					</center>
					<h1>
				 <!-- <div class="box-with-text-stripped">h1. Bootstrap heading</div> -->

					 </h1>
				<!-- </hgroup> -->
</div>

				<!-- <figure>
					<img src="cv/avatar.jpg" alt="Image">
				</figure> -->
		</div>
	</header>

	<div class="container">
  <div class="row">

    <br>
    <br><div class="col-md-3"></div>
    <div id="form" class="col-md-6">

<?
	$id = 0;
  if(isset($_POST['id']) && isset($_POST['password'])){
  	$id = $_POST['id'];
	// echo $id;
	$password = $_POST['password'];
	// echo $password;

	$query = "select `arid`,`dob`, `sex` , `name` from `patient` where `arid` = '". $id ."' AND `password` = '" . $password . "'" ;	
	$result = mysqli_query($con, $query);
	// echo mysqli_error($con);
	$id = 0;
	while ($row = mysqli_fetch_assoc($result)) {
	 	$id =  $row['arid']; 	
	
?>

<h4>Name:</h4><div  id="first_name"/><? echo $row['name'];?></div><br>
 <h4>DOB:</h4><div  id="age" ><? echo $row['dob'];?></div><br>
 <h4>Sex:</h4><div  id="sex" name="sex"><? echo $row['sex'];?></div>
  
 <h4>Prescriptions:</h4>
<?
 }  	

  }

  $query = "select `prescription`, `date` from `diagnose` where '".$id."' = `arid` order by `date`";
  $result = mysqli_query($con, $query);
  echo mysqli_error($con);
  while ($row = mysqli_fetch_assoc($result)) {
  	echo '<div  id="prescription" >
	  	<p><strong>Checkup Date: '. $row['date'] .'</strong></p> 
	  	<p>'.$row['prescription'].'</p>
  	</div><br>';
  }
?>

<?	
	$query = "select `next_appointment`, `special` from `diagnose` where `arid` = '". $id ."' order by `diagid` desc";

	$result = mysqli_query($con, $query);
		echo mysqli_error($con);
	while ($row = mysqli_fetch_assoc($result)) {
		echo '<h4>Next Appointment Date:</h4>
		<div  id="next_appointment">'. $row['next_appointment'] .'</div>
		<br>
 		<h4>Special Care:</h4>
 		<div id="special">'. $row['special'] .'</div><br>';
		break;
	}

?>
 

    </div>
</div>
<style type="text/css">
	h4{
		color: #33A4C9;
	}
</style>


<footer style="padding: 20px; border-top: 1px solid #eee; margin-top: 25px;">
  <div class="container">
  <div class="text-muted text-center">

  </div>
    </div>
</footer>


</body>

</html>
