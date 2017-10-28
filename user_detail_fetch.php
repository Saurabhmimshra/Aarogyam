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
				 <div class="box-with-text-stripped">h1. Bootstrap heading</div>

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


     <form  method="POST" action="user_detail_fetch_redirect.php">
      	<label for="id">Aarogyam ID</label>
      	<input  id="id" class="form-control" maxlength="40" name="id" size="20" type="text" required /><br>
			
		<label for="password">Enter Password</label>
		<input  id="password" class="form-control" maxlength="40" name="password" size="20" type="text" required /><br>

		<input class="form-control" type="submit" value="Fetch user Details">
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

</html>
