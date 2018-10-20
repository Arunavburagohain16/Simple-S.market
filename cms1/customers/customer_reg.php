<!DOCTYPE html>
<html>
<head>
<title>Customer Register Form</title>
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:300" type="text/css" />
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
    <?php include "../includes/navigation.php"; ?>
<!-- Custom Theme files -->
<link href="style.css" rel="stylesheet" type="text/css" media="all" />
<!-- //Custom Theme files -->
<!-- web font -->
<link href="//fonts.googleapis.com/css?family=Roboto:300,300i,400,400i,700,700i" rel="stylesheet">
<!-- //web font -->
<?php //include "./includes/db1.php"; ?>
<?php include "cus_function.php"; ?>
<?php createDATA(); ?>
</head>
<body>
    
	<!-- main -->
	<div class="main-w3layouts wrapper">
		<h1>Customer Registration Form</h1>
		<div class="main-agileinfo">
			<div class="agileits-top">
				<form action="#" method="post">
					<input class="text" type="text" name="CUS_NAME" placeholder="Name" required="">
					<input class="text" type="text" name="SEX" placeholder="Gender" required="">
					<input class="text" type="text" name="ADDRESS" placeholder="Address" required="">
					<input class="text" type="tel" name="PHONE" placeholder="Phone number" required="">
					<input class="text" type="text" name="GRADES" placeholder="Grades" required="">
					<div class="wthree-text">
						<div class="clear"> </div>
					</div>
					<input type="submit" name="submit" value="SIGNUP">
				</form>
			</div>
        </div>
    </div>
	<!-- //main -->
</body>
</html>