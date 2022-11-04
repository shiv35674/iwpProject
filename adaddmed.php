<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!-->
<html class="no-js">
<!--<![endif]-->
<html lang="en-US">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="keywords" content="..........................................................................." />
	<meta name="description" content="........................................................................" />
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
	<link rel="shortcut icon" type="image/x-icon" href="favicon.ico..........................................." />
	<link rel="apple-touch-icon" type="image/x-icon" href="apple-touch-icon.png..............................." />
	<title>Add Medicine</title>
	<link rel="stylesheet" type="text/css" href="css/font-awesome.min.css" media="all" />
	<link rel="stylesheet" type="text/css" href="css/normalize.css" media="all" />
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css" media="all" />
	<link rel="stylesheet" type="text/css" href="style.css" media="all" />
	<link rel="shortcut icon" href="img/Graphicloads-Medical-Health-Medicine-box-2.ico">
	<script type="text/javascript" src="js/modernizr.js"></script>
	<script type="text/javascript" src="js/jquery.js"></script>
	<script type="text/javascript" src="js/bootstrap.js"></script>

	<style type="text/css">
		/* body{
      background-image: url("img/bg4.jpg");
      background-height:100%;
      background-size: cover;
      background-repeat: no-repeat;
    } */
	</style>
</head>


<body class="login">

	<div class="header-area" style="margin:auto;">
		<div class="header-top">
			<div class="" style="display:flex;">
				<a href="#"><img src="img/admin.png" style="max-height: 60px;max-width: 60px;margin-left: 50%;opacity:1.0;"></a>
				<div class="menu" style="margin-left: auto;margin-right:25px;margin-top: 1.5%;">
					<ul class="list-unstyled list-inline pull-right">
						<li><a href="#"><span style="font-size:25px;background-color:#a1d6e2;padding:10px;border-radius:15px;color:black;">Home</span></a></li>
						<li><a href="index.php"><span style="font-size:25px;background-color:#a1d6e2;padding:10px;border-radius:15px;color:black;">Logout</span></a></li>

					</ul>
				</div>

			</div>
		</div>


	</div>

	<div class="main-area">




		<div class="login">


			<div class="" style="margin-top:48px">
				<form class="col-md-4 col-sm-offset-4 text-center" style="margin: 2%;background-color: #97caef;border: 1px #e3e8ef;border-radius: 5%; opacity:0.9;filter: alpha(opacity=60);text-align: center;margin-left: 35%;padding-top: 2%;padding-bottom: 2%;box-shadow: 0px 0px 10px #989ba0;" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
					<h2>Add Medicine</h2>
					<hr style="border-top: 1px solid black;">
					<div class="form-group center">
						<label for="user" style="font-weight: bold;color: #000000;">Name:</label>
						<input type="text" class="form-control" id="user" name="mname" style="width:50%;margin-left: 24%" required>
					</div>
					<div class="form-group center">
						<label for="email" style="font-weight: bold;color: #000000;">Scientefic Name:</label>
						<input type="text" class="form-control" id="email" name="msname" style="width:50%;margin-left: 24%" required>
					</div>
					<div class="form-group">
						<label for="pwd" style="font-weight: bold;color: #000000;">Price:</label>
						<input type="number" class="form-control" id="pwd" name="mprice" style="width:50%;margin-left: 24%" required>
					</div>
					<div class="form-group">
						<label for="mbl" style="font-weight: bold;color: #000000;">Disease Category:</label>
						<select style="width: 50%;margin-left:24%;" class="form-control" name="mdisease" id="mbl"><option disabled selected value> -- select an option -- </option><?php
																													$con = mysqli_connect("localhost", "root", "");
																													// Make sure we connected successfully
																													if (!$con) {
																														die('Connection Failed' . mysql_error());
																													}
																													mysqli_select_db($con, 'medicineguide');

																													$resul = mysqli_query($con, "SELECT * FROM medicine;") or die("Failed to fetch" . mysql_error());

																													while ($row = mysqli_fetch_assoc($resul)) {
																														echo "<option>{$row['medName']}</td><td>{$row['diseaseCategory']}</option>\n";
																													}





																													?></select>
						<div class="form-group">
							<label for="pwd" style="font-weight: bold;color: #000000;">Quantity</label>
							<input type="number" class="form-control" id="pwd" name="mquantity" style="width:50%;margin-left: 24%" required>
						</div>

					</div>


					<button type="submit" class="btn btn-default">Add Medicine</button>
					<br>
					<br>
					<a href="admedlist1.php">See List of medicines</a>
				</form>
				<?php

				if ($_SERVER["REQUEST_METHOD"] == "POST") {
					$medName = $_POST["mname"];
					$scienteficName = $_POST["msname"];
					$price = $_POST["mprice"];
					$diseaseCategory = $_POST["mdisease"];
					$quantity = $_POST['mquantity'];
					$conn = mysqli_connect("localhost", "root", "", "medicineguide");
					if (!$conn) {
						die("Connection failed: " . mysqli_connect_error);
					} else
						//echo "Connected successfully <br>";

						$sql = "insert into medicine(medName,scienteficName,price,diseaseCategory,quantity) values('" . $medName . "', '" . $scienteficName . "', '" . $price . "', '" . $diseaseCategory . "','" . $quantity . "')";
					$result = mysqli_query($conn, $sql) or die(mysqli_error($conn));
					if ($result) {
						//header("Location:index.php");
						$message = "Successfully entered a medicine!";
						echo "<script type='text/javascript'>alert('$message');</script>";
					} else {

						$message = "Registration Unsuccessful!";
						echo "<script type='text/javascript'>alert('$message');</script>";
					}
				}
				?>

			</div>

			<br>

		</div>
		<!--
		<div class="signup col-sm-offset-8 col-md-8"> 
			<p>Not a registered user. Please Sign Up...</p>
			<button type="submit" class="btn btn-success">  </button>
			<button type="submit" class="btn btn-success"></button>
			<a href="cussignup.html">As Customer</a>
			
		</div>
		-->










	</div>


</body>

</html>