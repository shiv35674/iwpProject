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
	<title>MediCare</title>
	<link rel="stylesheet" type="text/css" href="css/font-awesome.min.css" media="all" />
	<!-- <link rel="stylesheet" type="text/css" href="css/normalize.css" media="all" /> -->
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css" media="all" />
	<!-- <link rel="stylesheet" type="text/css" href="style.css" media="all" /> -->
	<link rel="shortcut icon" href="img/Graphicloads-Medical-Health-Medicine-box-2.ico">
	<script type="text/javascript" src="js/modernizr.js"></script>
	<script type="text/javascript" src="js/jquery.js"></script>
	<script type="text/javascript" src="js/bootstrap.js"></script>
  <style>
    /* .container1{
      justify-content: center;
    } */
    .parts1{
      justify-content: center;
      margin: 25px auto;
      padding: 10px;
      background-color: white;
      /* border-radius: 10px; */
      /* box-shadow: 0 0 6px; */
      /* style="margin-top:30px;padding-bottom:30px; background:#EAEAEAE6;width: 101%;" */
    }
    nav.circle ul li a {
  position: relative;
  overflow: hidden;
  z-index: 1;
}
nav.circle ul li a:after {
  display: block;
  position: absolute;
  margin: 0;
  top: 0;
  bottom: 0;
  left: 0;
  right: 0;
  content: '.';
  color: transparent;
  width: 1px;
  height: 1px;
  border-radius: 50%;
  background: transparent;
}
nav.circle ul li a:hover:after {
  -webkit-animation: circle 1.5s ease-in forwards;
}
    /* .parts2{
      text-align: center;
      justify-content: space-between;
    } */
  </style>
</head>


<body >
		
		<!-- < class="header-area" style="background-color: lightgreen;">  -->
<!--            <img src="img/client-1295901_960_720.png" style="max-height: 5%;max-width: 5%;margin-left: 48%;opacity:1.0;"> <h1 style="text-align: center;color: black">Medicine Guide</h1>-->
			<div class="container2" style="display:flex;justify-content:space-between;"> 
				<!-- //class="logo col-md-3" -->
        
					<h1 style="padding:3px;color: green;margin: 15px 30px;font-weight:bold;">MediCare</h1>
				
          <!-- //class="menu col-md-7"  -->
          
          <nav class="circle">
					<ul class="list-inline" style="margin-top:30px;justify-content:space-between;margin-right:30px;">
						<li ><a href="cussignup.php" style="color:green;">Customer SignUp</a></li>
						<li ><a href="pharsignup.php" style="color:green;">Pharmacy SignUp</a></li>
						<li ><a href="login.php" style="color:green;">Login</a></li>
						
					</ul>
          </nav>
          
				</div>
				
			<!-- </div> -->
		
		
		
    
    
    
    
    
    
    
    <div class="slider" style="margin:auto;">
<!--  <h2></h2>  -->
  <div id="myCarousel" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
      <li data-target="#myCarousel" data-slide-to="2"></li>
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner">
      <div class="item active">
        <img src="images/20.jpg" alt="" style="width:100%;">
          <div class="carousel-caption">
          <h3 style="color:#312B35">Medicine Guide</h3>
          <p style="color: #312B35;">For your health care!!</p>
        </div>
      </div>

      <div class="item">
        <img src="images/21.jpg" alt="Chicago" style="width:100%;">
          <div class="carousel-caption">
          <h3>Browse Medicine</h3>
          <p>Find Your Medicine and Get Home Delivery !!</p>
        </div>
      </div>
    
      <div class="item">
        <img src="images/17.jpg" alt="New york" style="width: 100%;">
          <div class="carousel-caption">
          <h3>Call Ambulance</h3>
          <p>Call Ambulance of Any Hospital !!</p>
        </div>
      </div>
    </div>

    <!-- Left and right controls -->
    <a class="left carousel-control" href="#myCarousel" data-slide="prev">
        <div style="margin-top:280px;font-size:250%;"><<</div>
      </a>
      <a class="right carousel-control" href="#myCarousel" data-slide="next">

        <div style="margin-top:280px;font-size:250%;">>></div>

      </a>
  </div>
</div>
    
    
    
    <div class="container1">
<div class="parts1 parts row" > 
				<div class="col-md-4 text-center" style="margin-top:60px;padding-bottom:30px;"> 
					<img src="images/31.png" alt="" />
                    <h2>Same Day Delivery</h2>
                    <p>We deliver your medicine on the same day you order. Customer satisfaction is our main goal!</p>
				</div>
				<div class="col-md-4 text-center" style="margin-top:60px;padding-bottom:30px;"> 
					<img src="images/32.png" alt="" />
                    <h2>Nearest Pharmacy</h2>
                    <p>Find the nearest pharmacy around your home.</p>
				</div>
				<div class="col-md-4 text-center" style="margin-top:60px;padding-bottom:30px;">  
					<img src="images/33.png" alt="" />
                    <h2>Quality Medicine</h2>
                    <p>We deliver the best medicines for the customers for better results to both customers and ourselves.</p>
				</div>
				
				
			</div>
      </div>
    
    
    <div class="container2" style="justify-content: center;">
    <div class="parts2 parts container row" style="margin: auto;padding-bottom:30px; background-color:#f2f2f2;border-radius: 10px;box-shadow:0 0 3px;"> 
        <div class="row">
				<div class="col-md-6 text-center" style="margin-left:60px;margin-top: 60px; padding-bottom:30px;"> 
					<img src="images/15.jpg" alt="" width="450" height="350"/>
                    
				</div>
				<div class="col-md-4 text-center" style="margin-top:130px;padding-bottom:30px; border:2px solid white;background-color: white; border-radius:5px; box-shadow: 0 0 3px;"> 
					
                    <h3>Our Stock</h3>
                    <p style="font-size: 18px;">We stock all kind of medicine, even we have same medicine from different companies. We tend to serve every customer with their medical needs.</p>
				</div>
            
            </div>
            <hr style="border-top: 1px solid black; margin-bottom: 45px;">
        
                <div class="row" style="justify-content: space-between;">
				<div class="col-md-6 text-center" style="margin-left:60px;margin-top:60px;padding-bottom:30px; border:2px solid white;background-color: white; border-radius:5px; box-shadow: 0 0 3px;"> 
					
                    <h3>Extra Fast Delivery</h3>
                    <p style="font-size: 18px;">We deliver your medicine as soon as soon possible. We know people don't place order for medicine for fantacy. We believe, just a tiny bit of dely of the delivery can cost someones' life. So, our goal is to deliver the medicine to the doorstep as soon as possible to ensure better customer satisfaction.</p>
				</div>
        
                <div class="col-md-4 text-center" style="margin-left:15px;margin-right:40px;padding-bottom:30px;"> 
                
					<img src="images/18.jpg" alt="" width="450" height="350"/>
                    
				</div>
        </div>
        <hr style="border-top: 1px solid black; margin-bottom: 5px;">
        <div class="row">
                <div class="col-md-6 text-center" style="margin-top:60px;padding-bottom:30px;margin-left:60px;"> 
					<img src="images/15a.jpg" alt="" width="450" height="350"/>
                    
				</div>
        
				<div class="col-md-4 text-center" style="margin-top:100px;margin-left:15px; padding-bottom:30px; border:2px solid white;background-color: white; border-radius:5px; box-shadow: 0 0 3px;"> 
					
                    <h3>Quality Medicine</h3>
                    <p style="font-size: 18px;">Medicine is a deligate object. If not taken proper care, the quality of the medicine might jeopardize. We carefully maintain the products as instructed by the medicine company. We DO NOT KEEP expired medicine.</p>
                    
				</div>
        </div>
        
  </div>
        <!-- <hr style="border-top: 1px solid black; margin-bottom: 25px;"> -->
        
        
        
				
				
				
			</div>
        
        <div class="container row sgn" style="margin-top:30px;padding-bottom:30px; width: 100%;background-image:'images\25.jpg';"> 
				<div class="col-md-14 text-center" style="margin-top:60px;padding-bottom:30px;margin-left:85px;"> 
					<img src="images/32.png" alt="" />
                    <h3>Sign Up today</h3> <br>
                    
                    <a href="cussignup.php" style="background:lightgreen; color: black; padding: 10px; border-radius:5px;">As Customer</a>
                    
                    <a href="pharsignup.php" style="background:lightgreen; color: black; padding: 10px;border-radius:5px;margin-left:15px;">As Pharmacist</a> 
                    <br>
                    <br>
                    <p style="font-weight: bold; font-size: 15px;">Sign Up to get access all the medicine and order !!</p>
				</div>
        
        
        
        </div>
        </div>
      
    <div class="container row" style="width: 100%; background: white; margin-top: -30px;"> 
				<div class="col-md-8 text-center" style="margin-top:30px;padding-bottom:20px;"> 
          
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