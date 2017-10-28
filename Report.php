<!DOCTYPE html>
<html>
<head>
	<title>footer</title>

	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta charset="UTF-8">
	<script src="https://canvasjs.com/assets/script/canvasjs.min.js"></script>

	<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css">
	<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js">
	<link rel="stylesheet" type="text/css" href="css/team_style.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.4.1/css/mdb.min.css">
		<link href="https://fonts.googleapis.com/css?family=Saira+Extra+Condensed" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Ubuntu" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Merriweather" rel="stylesheet">
	<script src="https://unpkg.com/scrollreveal/dist/scrollreveal.min.js"></script>
</head>
<body>
<div class="rough" style="background-color: white">

	<nav class="navbar navbar-inverse" style="background-color:#f8f8f8;">
	<div class="container-fluid">
	<div class="navbar-header">
		<a class="navbar-brand" href="home.php">AAROGYAM</a>
	</div>
	<ul class="nav navbar-nav">
		<li ><a href="#">Home</a></li>
		<li><a href="home.php#about">About Us</a></li>
		<li ><a href="appointment.php">Book Appointment</a></li>
		<li><a href="user_detail_fetch.php">Aarogyam Details</a></li>
		<li><a href="home.php#contact">Contact Us</a></li>
		<li class="active"><a href="report.php">Report Generation</a></li>


	</ul>
	<ul class="nav navbar-nav navbar-right">
		<li><a href="patient_registration.php"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
		<li><a href="user_DETAIL_FETCH_REDIRECT.PHP"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
	</ul>
	</div>
</nav>

<div class="example hoverable">
</div>
<div class="page_head"><h1><br><br>Welcome To Report Generation Portal</div><br></h1>



<div class="text container example hoverable">
	<div class="heads"><p class="head1"><h2>Leading india to a healthier Tomorrow</p><h2></div>
<p class="head2">
<h3>Our report generator tool is extremely effective in digging out what diseases are whide-spread in a locality/Country.<br><br><br>

It makes use of existing user database to evaluate upon and dig out important results.<br><br><br><br>
Results can be seen both countrywise and Statewise which gives an in depth overview of the current scenario.
Using this data awareness can be spread amongst people and corrective and need of hour measures can easily be taken by the government.</p></div><h3><br>
<span class="sub_head"><p><center>Graph Generator</center></p></span><br>



<div class="container-fluid">
	<div class="row-fluid">

<div class="team_member example hoverable view hm-zoom">
		<div id="chartContainer" style="height: 370px; width: 100%;"></div>
</div>
</div>
</div>
<br><br>
<div class="container-fluid">
<span class="sub_head"><p><center>State Wise Graph Generation</center></p></span><br>
<form class="" action="index.html" method="post">
	<label for="state">Select a State</label>
	<select class="form-control" id="state" >
		<option value="">--Kindly Select a State--</option>
		<option value="Male">india</option>
		<option value="Female">pak</option>
		<option value="Others">china</option>
	</select>
	<button type="button" style="PADDING-BOTTOM: 5%;" class="form-control" name="button" onclick="chart2()"><h4>Click to Generate Graph</h4></button></form>
	<div id="statechart">

	</div>

</div>






	<div class="footer">
		<div class="container">
			<div class="footer-heading">
				<p><span id="footer-logo">S.P.I.</span>Special Project Initiative</p>
			</div>
				<div class="social">
					<ul class="social-list">
						<li class="icon-footer"><a href="#"><i class="fa fa-facebook-square"></i></a></li>
						<li class="icon-footer" ><a href="#"><i  class="fa fa-google-plus-square"></i></a></li>
					</ul>
				</div>
			<div class="line"></div>
			<div class="pow">
				<p>Powered by Teamspi.in</p>
			</div>

		</div>

	</div>

</body>

<script type="text/javascript" src ></script>

</html>
<script>
function chart2()
{
	document.getElementById("statechart").innerHTML='<div id="chartContainer2" style="height: 370px; width: 100%;"></div>';

	var chart = new CanvasJS.Chart("chartContainer2", {
		animationEnabled: true,

		title:{
			text:"Top Five Diseases Widespread"
		},
		axisX:{
			interval: 1
		},
		axisY2:{
			interlacedColor: "rgba(1,77,101,.2)",
			gridColor: "rgba(1,77,101,.1)",
			title: "Number of People Affected"
		},
		data: [{
			type: "bar",
			name: "Diseases",
			axisYType: "secondary",
			color: "#014D65",
			dataPoints: [
				{ y: 28, label: "Malaria" },
				{ y: 29, label: "Dengue" },
				{ y: 52, label: "Chicken Gunia" },
				{ y: 103, label: "Arthritis" },
				{ y: 134, label: "AIDS" }
			]
		}]
	});
	chart.render();
	}
window.onload = function () {

var chart = new CanvasJS.Chart("chartContainer", {
	animationEnabled: true,

	title:{
		text:"Top Five Diseases Widespread"
	},
	axisX:{
		interval: 1
	},
	axisY2:{
		interlacedColor: "rgba(1,77,101,.2)",
		gridColor: "rgba(1,77,101,.1)",
		title: "Number of People Affected"
	},
	data: [{
		type: "bar",
		name: "Diseases",
		axisYType: "secondary",
		color: "#014D65",
		dataPoints: [
			{ y: 28, label: "Malaria" },
			{ y: 29, label: "Dengue" },
			{ y: 52, label: "Chicken Gunia" },
			{ y: 103, label: "Arthritis" },
			{ y: 134, label: "AIDS" }
		]
	}]
});
chart.render();

}
</script>

<script src="https://unpkg.com/scrollreveal/dist/scrollreveal.min.js"></script>
<script type="text/javascript">

window.sr = ScrollReveal();
sr.reveal('.text', {duration : 1000, origin : 'bottom'});
sr.reveal('.heads', {duration : 1000, origin : 'bottom'});
sr.reveal('.team_member', {duration : 1000, origin : 'left' });
sr.reveal('.footer-heading', {duration : 1000, origin : 'left'});
sr.reveal('.social', {duration : 1000, origin : 'right' });
</script>
