<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
<html lang="en-US">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="keywords" content="..........................................................................." />
	<meta name="description" content="........................................................................" />
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
	<link rel="shortcut icon" type="image/x-icon" href="favicon.ico..........................................." />
	<link rel="apple-touch-icon" type="image/x-icon" href="apple-touch-icon.png..............................." />
	<title>Customer Signup</title>
	<link rel="stylesheet" type="text/css" href="css/font-awesome.min.css" media="all" />
	<link rel="stylesheet" type="text/css" href="css/normalize.css" media="all" />
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css" media="all" />
	<link rel="stylesheet" type="text/css" href="style.css" media="all" />
	<link rel="shortcut icon" href="img/Graphicloads-Medical-Health-Medicine-box-2.ico">
	<script type="text/javascript" src="js/modernizr.js"></script>
	<script type="text/javascript" src="js/jquery.js"></script>
	<script type="text/javascript" src="js/bootstrap.js"></script>
</head>


<body class="">
	<div class="container2" style="display:flex;justify-content:space-between;margin-bottom:50px;"> 
				<!-- //class="logo col-md-3" -->
        
					<h1 style="padding:3px;color: black;margin: 15px 30px;font-weight:bold;">MediCare</h1>
				
          <!-- //class="menu col-md-7"  -->
					<ul class=" list-inline pull-right" style="margin-top:30px;justify-content:space-between;margin-right:55px;">
						<li><a href="pharsignup.php" style="color:black;font-size:25px;margin-right:15px;">Pharmacy SignUp</a></li>
						<li><a href="login.php" style="color:black;font-size:25px;">Login</a></li>
						
					</ul>
				</div>
	
	<div class="main-area"> 
		
		
		
		
		<div class=""> 
			<form class="col-md-4 col-sm-offset-4 text-center" style="margin: 2%;background-color: #97caef;border: 1px #e3e8ef;border-radius: 5%; opacity:0.9;filter: alpha(opacity=60);text-align: center;margin-left: 35%;padding-top: 2%;padding-bottom: 2%;box-shadow: 0px 0px 10px #989ba0;margin-top: 4%" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post" >
			  <div class="form-group center">
				<label for="user" style="font-weight: bold;color: #000000;">Username:</label>
				<input type="text" class="form-control" id="user" name="uname" style="width:50%;margin-left: 24%" required>
			  </div>
			  <div class="form-group center">
				<label for="email" style="font-weight: bold;color: #000000;">Email:</label>
				<input type="email" class="form-control" id="email" name="uemail" style="width:50%;margin-left: 24%" required>
			  </div>
			  <div class="form-group">
				<label for="pwd" style="font-weight: bold;color: #000000;">Password:</label>
				<input type="password" class="form-control" id="pwd" name="upass" style="width:50%;margin-left: 24%" required>
			  </div>
			  <div class="form-group">
				<label for="mbl" style="font-weight: bold;color: #000000;">Mobile:</label>
				<input type="text" class="form-control" id="mbl" name="umobile" style="width:50%;margin-left: 24%" required>
			  </div>
			  <div class="form-group">
				<label for="adrs" style="font-weight: bold;color: #000000;">Address:</label>
				<input type="text" class="form-control" id="adrs" name="uaddress" style="width:50%;margin-left: 24%" required>
			  </div>
			  
			  <button type="submit" class="btn btn-default">Sign Up!</button>
                <br>
                <br>
                <a href="index.php" style="font-weight: bold;color: black;">Go back to Login!</a>
			</form> 
			
			<?php
            if ($_SERVER["REQUEST_METHOD"] == "POST"){
                $cuName=$_POST["uname"];
	            $cuPassword=$_POST["upass"];
	            $cuEmail=$_POST["uemail"];
	            $cuMobile=$_POST["umobile"];
	            $cuAddress=$_POST["uaddress"];
	            $conn=mysqli_connect("localhost","root","","medicineguide");
	               if(!$conn){
		              die("Connection failed: ".mysqli_connect_error);
	               }
	               else
		              //echo "Connected successfully <br>";
	
	           $sql="insert into customerlogin(cuUserName,cuPassword) values('".$cuName."', '".$cuPassword."')";
               $sql1="insert into customer(cuEmail,cuMobile,cuAddress,cuName,cuId) values('".$cuEmail."', '".$cuMobile."','".$cuAddress."', '".$cuName."', LAST_INSERT_ID())";
	           $result= mysqli_query($conn,$sql)or die(mysqli_error($conn));
               $result1= mysqli_query($conn,$sql1)or die(mysqli_error($conn));
	                   if($result && $result1){
		                  
                           $message = "Successfully registered!";
                            echo "<script type='text/javascript'>alert('$message');</script>";
                           //header("Location:index.php");
	                   }
	                   else
	                   {
                          
                           $message = "Registration Unsuccessful!";
                            echo "<script type='text/javascript'>alert('$message');</script>";
	                   }
            }
            ?>
		</div>
		
		<div class="signup col-sm-offset-8 col-md-8"> 
			
			
		</div>
		
		
		
		
		
		
		
		
		
		
		
	</div>
	
	
</body>
</html>