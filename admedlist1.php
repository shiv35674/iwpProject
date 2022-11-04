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
	<title>List of Medicines</title>
    <link rel="shortcut icon" href="img/Graphicloads-Medical-Health-Medicine-box-2.ico">
	<link rel="stylesheet" type="text/css" href="css/font-awesome.min.css" media="all" />
	<link rel="stylesheet" type="text/css" href="css/normalize.css" media="all" />
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css" media="all" />
	<link rel="stylesheet" type="text/css" href="style.css" media="all" />
	
	<script type="text/javascript" src="js/modernizr.js"></script>
	<script type="text/javascript" src="js/jquery.js"></script>
	<script type="text/javascript" src="js/bootstrap.js"></script>
    
</head>


<body class="">
    
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
	
		
		
		
		
		<div class=""> 
		<div class="br"> 
			<div class="br-top text-center"> 
				<div class="container" style="margin-top:15px;"> 
					<h2 style="margin-top:25px;font-weight:bold;font-size:45px;">Browse Medicine</h2>
				</div>
			</div>
			<hr style="border-top: 1px solid black;width:550px">
            
			
                </div>
                
            
            
            <br>
 

            <?php
            
                        
    ?>
    
		
		<div class="result_table" style="margin-left: 2%;text-align: center">
            <br>
            <br>
            
            
            
           
            
            
            
            
            
            
            <br>
            <br>
            <table style="background:white;border:1px solid black;margin-left:55px;" class="text-center">
                <thead>
                    <tr style="padding-left: 10px;">
                        <th style="border:1px solid black">Name</th>
                        <th style="border:1px solid black">Scientefic Name</th>
                        <th style="border:1px solid black">Disease Category</th>
                        <th style="border:1px solid black">Price</th>
						<th style="border:1px solid black">Quantity</th>
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

                        $resul = mysqli_query($con,"SELECT * FROM medicine;") or die("Failed to fetch".mysql_error());
                    
                    while( $row = mysqli_fetch_assoc( $resul) ){
                                    echo "<tr><td>{$row['medName']}</td><td>{$row['scienteficName']}</td><td>{$row['diseaseCategory']}</td><td>{$row['price']}</td><td>{$row['quantity']}</td></tr>\n";
                                        }
            
                        
                           
                        
                        
                ?>
                
                </tbody>
            </table>
		
		<br>
		
<!--		<button type="submit" class="btn btn-success">Checkout</button>-->
		
		</div>
		</div>
			
			
		
    
		
<!--
		<div class="signup col-sm-offset-8 col-md-8"> 
			<p>Not a registered user. Please Sign Up...</p>
			<button type="submit" class="btn btn-success">  </button>
			<button type="submit" class="btn btn-success"></button>
			<a href="cussignup.html">As Customer</a>
			
		</div>
-->
		
		
		
		
		
		
		
		
		
		
		
	
	
	
</body>
</html>