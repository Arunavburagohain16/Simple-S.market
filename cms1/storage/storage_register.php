<!DOCTYPE html>
<html>
<head>
<title>Add Stock</title>
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
<?php include "storage_function.php"; ?>
<?php createDATA(); ?>
</head>
<body>
	<!-- main -->
	<div class="main-w3layouts wrapper">
		<h1>Add Stock</h1>
		<div class="main-agileinfo">
			<div class="agileits-top">
				<form action="#" method="post">
					<input class="text" type="number" name="ITEM_ID" placeholder="Item ID" required="">
					<input class="text" type="number" name="ITEM_AVAILABLE" placeholder="Item Available" required="">
					<div class="wthree-text">
						<div class="clear"> </div>
					</div>
					<input type="submit" name="submit" value="Add Item">
				</form>
			</div>
        </div>
    </div>
	<!-- //main -->
</body>
</html>