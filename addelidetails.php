<?php
session_start();
?>
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
	<title>Delivery Guy Details</title>
	<link rel="stylesheet" type="text/css" href="css/font-awesome.min.css" media="all" />
	<link rel="stylesheet" type="text/css" href="css/normalize.css" media="all" />
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css" media="all" />
	<link rel="stylesheet" type="text/css" href="style.css" media="all" />
	<link rel="shortcut icon" href="img/Graphicloads-Medical-Health-Medicine-box-2.ico">
	<script type="text/javascript" src="js/modernizr.js"></script>
	<script type="text/javascript" src="js/jquery.js"></script>
	<script type="text/javascript" src="js/bootstrap.js"></script>
    
    <style type="text/css">
    html { 
  background: url() no-repeat center center fixed; 
  -webkit-background-size: cover;
  -moz-background-size: cover;
  -o-background-size: cover;
  background-size: cover;
  }
    </style>
</head>


<body class="login">
    
<div class="header-area" style="margin:auto;"> 
		<div class="header-top"> 
			<div class="" style="display:flex;"> 
                <a href="#"><img src="img/admin.png" style="max-height: 60px;max-width: 60px;margin-left: 50%;opacity:1.0;"></a>
				<div class="home" style="margin-left: auto;margin-right:25px;margin-top: 1.5%;"> 
					<ul class="list-unstyled list-inline pull-right">
						<li><a href="#"><span style="font-size:15px;background:#4cb5f5;border-radius:55px;">Home</span></a></li>
						<li><a href="index.php"><span style="font-size:15px;background:#4cb5f5;border-radius:55px;">Logout</span></a></li>
						
					</ul>
				</div>
				
			</div>
		</div>
		
		
	</div>
	
	<div class="main-area"> 
		
		
		
		
		<div class="login" style="margin-left:`0%">
            
			<form class="col-md-4 col-sm-offset-4 text-center"  method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" >
            <h2><b>Delivery Guy Details</b></h2>
                <a href="addelivery.php"><h5>Add delivery guy</h5></a>
                <br>
                
                
                <br>
                
                <table class="table table-striped text-center">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Name</th>
                        <th>Password</th>
                        <th>Mobile</th>
                        <th>Region</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $con=mysqli_connect("localhost","root","");
                        // Make sure we connected successfully
                        if(! $con)
                        {
                            die('Connection Failed'.mysql_error());
                        }
                    mysqli_select_db($con,'medicineguide');

                        $resul = mysqli_query($con,"SELECT * FROM delivery;") or die("Failed to fetch".mysql_error());
                    
                    while( $row = mysqli_fetch_assoc( $resul) ){
                                    echo "<tr><td>{$row['deId']}</td><td>{$row['deName']}</td><td>{$row['dePass']}</td><td>{$row['deMobile']}</td><td>{$row['deRegion']}</td><td><a href='editdeli.php' ><h5>Edit</h5></a></td></tr>\n";
                                        }
                    
                    ?>
                  </tbody>
                </table>
                <br>
                <br>
                <br>
                <input type="text" name="del" placeholder="enter id or name">
                <button type="submit">Delete a delivery guy</button>
			  
			  <br>
			</form>
            <?php
            if ($_SERVER["REQUEST_METHOD"] == "POST"){
                $del=$_POST["del"];
                // Connect to the database
                    $con=mysqli_connect("localhost","root","");
                    // Make sure we connected successfully
                    if(! $con)
                    {
                        die('Connection Failed'.mysql_error());
                    }

                    // Select the database to use
                    mysqli_select_db($con,'medicineguide');

                    $sql="DELETE FROM delivery where deName='".$del."' or deId='".$del."';";

                    $result= mysqli_query($con,$sql)or die(mysqli_error($con));
                        if($result){
		                  
                           $message = "Successfully deleted!";
                            echo "<script type='text/javascript'>alert('$message');</script>";
                            
                           
	                   }
	                   else
	                   {
                          
                           $message = "Deletion unsuccessful!";
                            echo "<script type='text/javascript'>alert('$message');</script>";
	                   }
                    
                
            }

                    




                    ?>
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