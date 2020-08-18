<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="images/favicon.png">
    <meta name="author" content="Harshita Raj">

	<!-- Mobile Specific Meta -->
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<!-- Modernizr js -->
	<script src="assets/js/modernizr-2.8.0.min.js"></script>

	<!-- Bootstrap  -->
	<link href="assets/css/bootstrap.min.css" rel="stylesheet">

	<!-- icon fonts font Awesome -->
	<link href="assets/css/font-awesome.min.css" rel="stylesheet">

	<!-- icon fonts linecons -->
	<link href="assets/css/linecons-font-style.css" rel="stylesheet">

	<!-- Custom Styles -->
	<link href="assets/css/style.css" rel="stylesheet">

	<!-- Responsive Styles -->
	<link href="assets/css/responsive.css" rel="stylesheet">


    <title>Thank You For Your Support !!</title>

<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
  </head>

  <body>
      <!-- Main Menu -->
		<div class="main-menu-container navbar-fixed-top">
			<div id="main-menu" class="navbar navbar-default" role="navigation">
				<div class="container">
					
					<div class="navbar-header">
						<!-- responsive navigation -->
						<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
							<span class="sr-only">Toggle navigation</span>
							<i class="fa fa-bars"></i>
						</button> <!-- /.navbar-toggle -->
						
					</div> <!-- /.navbar-header -->

					<nav class="collapse navbar-collapse">
						<!-- Main navigation -->
						<a href="donation.php" class="donate pull-right">Donate <i class="fa fa-heart"></i></a>
						<ul id="headernavigation" class="nav navbar-nav pull-right">
							<li><a href="index.php">About</a></li>
							<li><a href="index.php">Service</a></li>
							<li><a href="index.php">Causes</a></li>
							<li><a href="index.php">Contact</a></li>
						</ul> <!-- /.nav .navbar-nav -->
					</nav> <!-- /.navbar-collapse  -->
				</div> <!-- /.container -->
			</div><!-- /#main-menu -->
		</div><!-- /.main-menu-container -->
		<!-- Main Menu End -->
    <div class="container">

      <div class="page-header">
        
        <p class="lead" style=color:blue>Thank you for your donation to Heal Charity Fund by Harshita.</p>
      </div>

      <strong><h3 style="color:#6da552">Thank You!! Payment Done Sucessfully!!</h3> </strong>
   
    <p> Keep supporting our Charity work with your donations. Your valuable gift is helping us provide long-term support to children as well as poor people.
</p>
<p>Note : Check Your Email For Transaction Details</p>
 <?php

include 'instamojo/Instamojo.php';

$api = new Instamojo\Instamojo('test_53bc6d7170db23939cecc646a1c', 'test_dc3334672085dc9b9d454c6af0b','https://test.instamojo.com/api/1.1/');

$payid = $_GET["payment_request_id"];


try {
    $response = $api->paymentRequestStatus($payid);

    ?>
     <h2>Payment Details :</h2>
    <br>
<table class="table table-bordered">
    <tr>
    <th><h4>Payment ID: </h4></th>
    <td><?= $response['payments'][0]['payment_id']; ?></td> 
    </tr>
    <tr>
    <th><h4>Amount: </h4></th>
    <td><?= $response['payments'][0]['amount']; ?></td>
    </tr>
    <tr>
    <th><h4> Name: </h4></th>
     <td><?= $response['payments'][0]['buyer_name']; ?></td>
    </tr>
    <tr>
    <th><h4> Email: </h4></th>
    <td><?= $response['payments'][0]['buyer_email']; ?></td>
    </tr>
</table>
    

    <?php
}
catch (Exception $e) {
    print('Error: ' . $e->getMessage());
}

 ?>
 </div> <!-- /container -->
<br><br><br>
<!-- Footer Section -->
		<footer id="footer-section">
			<div class="footer-section">
				<div class="container">
					<div class="footer-social-btn pull-right">
						<a href="#" class="twitter-btn"><i class="fa fa-twitter"></i></a>
						<a href="#" class="facebook-btn"><i class="fa fa-facebook"></i></a>
						<a href="https://github.com/Harshita248" class="github-btn"><i class="fa fa-github-alt"></i></a>
						<a href="#" class="youtube-btn"><i class="fa fa-youtube"></i></a>
						<a href="linkedin.com/in/harshita-raj" class="linkedin-btn"><i class="fa fa-linkedin"></i></a>
					</div><!-- /.footer-social-btn -->
					<div class="copyrights pull-left">
						&copy; <a href="index.php">Heal</a> 2020, Developed by <a href="#">Harshita Raj</a>
					</div><!-- /.copyrights -->

					
				</div><!-- /.container -->
			</div><!-- /.footer-section -->
		</footer>
		<!-- Footer Section End -->
</body>
</html>
