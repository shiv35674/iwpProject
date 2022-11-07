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
	<title>Add Ambulance</title>
	<link rel="stylesheet" type="text/css" href="css/font-awesome.min.css" media="all" />
	<link rel="stylesheet" type="text/css" href="css/normalize.css" media="all" />
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css" media="all" />
	<link rel="stylesheet" type="text/css" href="style.css" media="all" />
	<link rel="shortcut icon" href="img/Graphicloads-Medical-Health-Medicine-box-2.ico">
	<script type="text/javascript" src="js/modernizr.js"></script>
	<script type="text/javascript" src="js/jquery.js"></script>
	<script type="text/javascript" src="js/bootstrap.js"></script>
    

</head>


<body class="login">
    
	<div class="header-area" style="margin:auto;margin-bottom:65px;"> 
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
			<form class="col-md-4 col-sm-offset-4 text-center" style="margin: 2%;background-color: #97caef;border: 1px #e3e8ef;border-radius: 5%; opacity:0.6;filter: alpha(opacity=60);text-align: center;margin-left: 35%;padding-top: 2%;padding-bottom: 2%;box-shadow: 0px 0px 10px #989ba0;" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post" >
            <h1 style="margin-left: 5%;font-weight: bold;font-size:45px;margin-bottom:25px;">Add Ambulance</h1>
					<hr style="border-top: 1px solid black;">       
			  <div class="form-group center">
				<label for="text">Hospital Name:</label>
				<input type="text" class="form-control" id="hospitalName" name="hName"  style="width:50%;margin-left: 24%">
			  </div>
                <div class="form-group center">
				    <label for="text">Hospital Address:</label>
				    <input type="text" class="form-control" id="hospitalAddress" name="hAddress" style="width:50%;margin-left: 24%">
			  </div>
			  <div class="form-group center">
				    <label for="text">Ambulance Number:</label>
				    <input type="tel" class="form-control" id="hospitalAddress" name="hnum" style="width:50%;margin-left: 24%">
			  </div>
                <div class="form-group center">
				    <label>Region:</label>
                    <br>
                    <select name="Region">
                        <option value="Uttara">Uttara</option>
                        <option value="Banani">Banani</option>
                        <option value="Mirpur">Mirpur</option>
                        <option value="Malibag">Malibag</option>
                    </select>
			  </div>
			  
			  <hr>
			  <button type="submit" class="btn btn-default" style="width: 37%">Add Ambulance</button>
			  <br>
            <br>
			  <a href="adminambulancelist.php">Check Ambulance List</a>
			  
			  <br>
			</form>
            <?php
            
            if ($_SERVER["REQUEST_METHOD"] == "POST"){
                $hName=$_POST["hName"];
	            $hAddress=$_POST["hAddress"];
				$hnum=$_POST["hnum"];
                $selected_val = $_POST['Region'];  // Storing Selected Value In Variable
                
	            $conn=mysqli_connect("localhost","root","","medicineguide");
	               if(!$conn){
		              die("Connection failed: ".mysqli_connect_error);
	               }
	               else
		              //echo "Connected successfully <br>";
	
	           $sql="insert into ambulance(hospitalAddress,amRegion,hospitalName,number) values('".$hAddress."', '".$selected_val."', '".$hName."','".$hnum"');";
	           $result= mysqli_query($conn,$sql)or die(mysqli_error($conn));
	                   if($result){
		                  //header("Location:index.php");
                           $message = "Successfully registered an ambulance!";
                            echo "<script type='text/javascript'>alert('$message');</script>";
                           
	                   }
	                   else
	                   {
                          
                           $message = "Registration Unsuccessful!";
                            echo "<script type='text/javascript'>alert('$message');</script>";
	                   }
            }
            ?>
			<br>
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