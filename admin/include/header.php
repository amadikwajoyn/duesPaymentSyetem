<?php

if (isset($_SESSION['role'])) {
$role2 = $_SESSION['role'];
if ($role2 != "Admin") {
	header('Location: admin_login.php');
}
}

if (isset($_GET['role'])) {
	$role2 = $_GET['role'];
	if ($role2 != "Admin") {
	header('Location: admin_login.php');
}
}


?>
<!DOCTYPE HTML>
<html>
<head>
<title>Departmental Payment System an Admin Panel | Home :: 16h/0037/cs</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Augment Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
 <!-- Bootstrap Core CSS -->
<link href="css/bootstrap.min.css" rel='stylesheet' type='text/css' />
<!-- Custom CSS -->
<link href="css/style.css" rel='stylesheet' type='text/css' />
<!-- Graph CSS -->
<link href="css/font-awesome.css" rel="stylesheet"> 
<!-- jQuery -->
<link href='//fonts.googleapis.com/css?family=Roboto:700,500,300,100italic,100,400' rel='stylesheet' type='text/css'>
<!-- lined-icons -->
<link rel="stylesheet" href="css/icon-font.min.css" type='text/css' />
<!-- //lined-icons -->
<script src="js/jquery-1.10.2.min.js"></script>
<script src="js/amcharts.js"></script>	
<script src="js/serial.js"></script>	
<script src="js/light.js"></script>	
<script src="js/radar.js"></script>	
<link href="css/barChart.css" rel='stylesheet' type='text/css' />
<link href="css/fabochart.css" rel='stylesheet' type='text/css' />
<!--clock init-->
<script src="js/css3clock.js"></script>
<!--Easy Pie Chart-->
<!--skycons-icons-->
<script src="js/skycons.js"></script>

<script src="js/jquery.easydropdown.js"></script>

<!--//skycons-icons-->
</head> 

<body>
   <div class="page-container">
   <!--/content-inner-->
	<div class="left-content">
	   <div class="inner-content">
		<!-- header-starts -->
			<div class="header-section">
						<!--menu-right-->
						<div class="top_menu">
						        <div class="main-search">
											<form>
											   <input type="text" value="Search" onFocus="this.value = '';" onBlur="if (this.value == '') {this.value = 'Search';}" class="text"/>
												<input type="submit" value="">
											</form>
									<div class="close"><img src="images/cross.png" /></div>
								</div>
									<div class="srch"><button></button></div>
									<script type="text/javascript">
										 $('.main-search').hide();
										$('button').click(function (){
											$('.main-search').show();
											$('.main-search text').focus();
										}
										);
										$('.close').click(function(){
											$('.main-search').hide();
										});
									</script>
							<!--/profile_details-->
								<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
											<ul class="nav navbar-nav navbar-right">
           <li><a href="">Welcome: <i class="fa fa-user"></i> </a></li>
            <li><a href="add_payments.php"><i class="fa fa-plus-square"></i> Add Post</a></li>
            
            <li><a href="add_user.php"><i class="fa fa-user-plus"></i> Add User</a></li>
            
            <li><a href="profile.php"><i class="fa fa-user"></i> Profile</a></li>

            <li><a href="..\index.php"><i class="fa fa-user"></i> Home</a></li>
            <li><a href="logout.php"><i class="fa fa-power-off"></i> Logout</a></li>
          </ul>
								   							   		
							<div class="clearfix"></div>	
								
							</div>
  
         
        </div>






							<div class="clearfix"></div>	
							<!--//profile_details-->
						</div>
						<!--//menu-right-->
					<div class="clearfix"></div>
				</div>
					<!-- //header-ends -->