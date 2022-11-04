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
	<title>Order Details</title>
	<link rel="stylesheet" type="text/css" href="css/font-awesome.min.css" media="all" />
	<link rel="stylesheet" type="text/css" href="css/normalize.css" media="all" />
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css" media="all" />
	<link rel="stylesheet" type="text/css" href="style.css" media="all" />
	<link rel="shortcut icon" href="img/Graphicloads-Medical-Health-Medicine-box-2.ico">
	<script type="text/javascript" src="js/modernizr.js"></script>
	<script type="text/javascript" src="js/jquery.js"></script>
	<script type="text/javascript" src="js/bootstrap.js"></script>
    
    <style type="text/css">
    body{ 
  background-color: alice; 
  /* -webkit-background-size: cover;
  -moz-background-size: cover;
  -o-background-size: cover;
  background-size: cover; */
  }
    </style>
</head>


<body class="login" style="background-color:#f1f1f2;">
    
<div class="header-area" style="margin:auto;"> 
		<div class="header-top"> 
			<div class="container" style="display:flex;"> 
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
		
		
		
		
		<div class="login" style="margin-left:18%;margin-right:20%"> 
			<form class="text-center">
            <h2>Order Details</h2>
            <hr style="border-top: 1px solid black;">
			  <table class="table table-striped text-center">
                <thead>
                    <tr class="table-info">
                        <th >Order ID</th>
                        <th >Medicine Name</th>
                        <th >Medicine Quantity</th>
                        <th >Medicine Price</th>
                        <th >Total Price</th>
                        <th >Customer Name</th>
                        <th >Customer Mobile</th>
                        <th >Customer Address</th>
                        <th >Customer Region</th>
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

                        $resul = mysqli_query($con,"SELECT * FROM medicineorder WHERE orderregion='Uttara';") or die("Failed to fetch".mysql_error());
                    
                    while( $row = mysqli_fetch_assoc( $resul) ){
                                    echo "<tr><td>{$row['orderId']}</td><td>{$row['medicinename']}</td><td>{$row['medquantity']}</td><td>{$row['medprice']}</td><td>{$row['totalprice']}</td><td>{$row['ordercusname']}</td><td>{$row['orderphone']}</td><td>{$row['orderaddress']}</td><td>{$row['orderregion']}</td></tr>\n";
                                        }
                    ?>
                  </tbody>
                </table>
			</form> 
			<br>
			
		
		<!--
		<div class="signup col-sm-offset-8 col-md-8"> 
			<p>Not a registered user. Please Sign Up...</p>
			<button type="submit" class="btn btn-success">  </button>
			<button type="submit" class="btn btn-success"></button>
			<a href="cussignup.html">As Customer</a>
			
		</div>
		-->
		
        </div>
		
        </div>	
		
		
		
		
		
		
	
	
	
</body>
</html>