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
    <title>Admin Pharmacy List</title>
    <link rel="shortcut icon" href="img/Graphicloads-Medical-Health-Medicine-box-2.ico">
    <link rel="stylesheet" type="text/css" href="css/font-awesome.min.css" media="all" />
    <link rel="stylesheet" type="text/css" href="css/normalize.css" media="all" />
    <link rel="stylesheet" type="text/css" href="css/bootstrap.css" media="all" />
    <link rel="stylesheet" type="text/css" href="style.css" media="all" />

    <script type="text/javascript" src="js/modernizr.js"></script>
    <script type="text/javascript" src="js/jquery.js"></script>
    <script type="text/javascript" src="js/bootstrap.js"></script>
    

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

    <div class="main-area" style="margin-top:90px;">




        <div class="login">
            <form class="col-md-4 col-sm-offset-4 text-center" style="margin: 2%;background-color: #97caef;border: 1px #e3e8ef;border-radius: 5%; opacity:0.6;filter: alpha(opacity=60);text-align: center;margin-left: 35%;padding-top: 2%;padding-bottom: 2%;box-shadow: 5px 10px #989ba0;">
                <h2>Pharmacy List</h2>

                <br>
                <br>
                <table style="background:white;border:1px solid black;" class="table table-striped text-center">
                <thead>
                    <tr style="padding-left: 10px;">
                        <th style="border:1px solid black">Pharmacy ID</th>
                        <th style="border:1px solid black">Pharmacy Name</th>
                        <th style="border:1px solid black">Pharmacy Mobile</th>
                        <th style="border:1px solid black">Pharmacy Address</th>
                        <th style="border:1px solid black">Pharmacy Region</th>
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

                        $resul = mysqli_query($con,"SELECT * FROM pharmacy;") or die("Failed to fetch".mysql_error());
                    
                    while( $row = mysqli_fetch_assoc( $resul) ){
                                    echo "<tr><td>{$row['pId']}</td><td>{$row['pName']}</td><td>{$row['phMobile']}</td><td>{$row['phAddress']}</td><td>{$row['pRegion']}</td></tr>\n";
                                        }
                    ?>
                  </tbody>
                </table>
            </form>

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
