<!doctype html>
<html>
<head>
<title>Donate a little !</title>
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" type="text/css" rel="stylesheet" />
    <meta name="author" content="Harshita Raj">

	<!-- Mobile Specific Meta -->
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- favicon --> 
	<link rel="shortcut icon" href="images/favicon.png">
</head>
<body>

<br><br><br><br><br><br>
<!--<div style="background-image: url('images/bg1.jpg'); background-size: cover">-->
<div class="container" >
    <div class="col-xs-6 col-xs-offset-3">
        <div class="panel panel-default">
            <div class="panel-heading" class="single_input wow fadeInUp" data-wow-duration="1s" style="background-color:#f39c12;">
            
           <h3 class="text-center" style="color:black;">Donate to Heal :)</h3>
            </div>
            <div class="panel-body">
            <form action="payment.php" method="post">
                <div class="form-group" >
                    <input type="text" class="form-control"  name="Name" size="20" maxlength="50" autocomplete="off" tabindex="1" placeholder="Your Name" required>
                </div>
                
                <div class="form-group">
                    <input type="Email" class="form-control"  name="Email" maxlength="255" size="12"  autocomplete="off" tabindex="3" placeholder=" Your Email" required >
                </div>
                <div class="form-group">
                    <input type="number" class="form-control" name="phone" autocomplete="off" tabindex="5"  placeholder=" Your Phone Number" required>
                </div>
               
                <div class="form-group">
                    <input type="number" class="form-control" name="Amount" autocomplete="off" tabindex="5"  placeholder="Amount to Donate" required>
                </div>
                <div class="form-group">
                    <input type="submit" name="submit" value=" Click here to Pay" class="btn btn-success btn-lg">
                </div>
            </form>
            </div>
        </div>
    </div>
</div>

</body>
</html>