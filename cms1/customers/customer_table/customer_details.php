<!DOCTYPE html>
<html lang="en">
    
<head>
	<title>Customer Table</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
	<link rel="icon" type="image/png" href="images/icons/favicon.ico"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/perfect-scrollbar/perfect-scrollbar.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
<!--===============================================================================================-->
</head>
<?php //include "./includes/db1.php"; ?>
<?php include "../cus_function.php"; ?>
<body>
	
	<div class="limiter">
		<div class="container-table100">
			<div class="wrap-table100">
				<div class="table100">
					<table>
						<thead>
							<tr class="table100-head">
								<th class="column1">Customer ID</th>
								<th class="column2">Customer Name</th>
								<th class="column3">Sex</th>
								<th class="column4">Address</th>
								<th class="column5">Phone</th>
								<th class="column6">Grades</th>
							</tr>
						</thead>
                        <tbody>
                         <?php

// Create connection
$conn = mysqli_connect('localhost','root','pobitro_mon16','marketing');
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$sql = "SELECT * FROM customer";
$result = mysqli_query($conn, $sql);
if (mysqli_num_rows($result) > 0) {
    // output data of each row
    while($row = mysqli_fetch_assoc($result)) {
            echo "<tr>";
            echo "<td class='column1'>".$row["CUS_ID"]."</td>";
            echo "<td class='column2'>".$row["CUS_NAME"]."</td>";
            echo "<td class='column3'>".$row["SEX"]."</td>";
            echo "<td class='column4'>".$row["ADDRESS"]."</td>";
            echo "<td class='column5'>".$row["PHONE"]."</td>";
            echo "<td class='column6'>".$row["GRADES"]."</td>";
            //echo "<td><a href='categories.php?delete={$CUS_ID}'>Delete</a></td>";
            //echo "<td><a href='categories.php?edit={$CUS_ID}'>Edit</a></td>";
            echo "</tr>";
    }
} else {
    echo "0 results";
}
mysqli_close($conn);
?> 

						</tbody>
					</table>
				</div>
			</div>
		</div>
	</div>


	

<!--===============================================================================================-->	
	<script src="vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/bootstrap/js/popper.js"></script>
	<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="js/main.js"></script>

</body>
</html>