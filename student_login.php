<?php
session_start();
include('include/db.php');

if(isset($_POST['submit'])){
    $username = $_POST['username'];
    $password = $_POST['password'];
    
    $check_username_query = "SELECT * FROM users WHERE username = '$username'";
    $check_username_run = mysqli_query($con, $check_username_query);
    if(mysqli_num_rows($check_username_run) > 0){
        $row = mysqli_fetch_array($check_username_run);
        
        $db_username = $row['username'];
        $db_password = $row['password'];
        $db_role = $row['role'];
        $db_id = $row['id'];
        
        if($username == $db_username && $password == $db_password){
            $_SESSION['username'] = $db_username;
            $_SESSION['role'] = $db_role;
            $_SESSION['id'] = $db_id;
            header('Location: student_dashboard.php');
            
        }
        else{
            $error = "Wrong Username or Password";
        }
    }
    else{
        $error = "Wrong Username or Password";
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
<!--clock init-->
</head> 
<body>
								<!--/login-->
								
									   <div class="error_page">
												<!--/login-top-->
												
													<div class="error-top">
													<h2 class="inner-tittle page">Departmental Payment</h2>
													    <div class="login">
														<h3 class="inner-tittle t-inner">Login</h3>
																<div class="buttons login">
																			<ul>
																				<li><a href="#" class="hvr-sweep-to-right">Facebook</a></li>
																				<li class="lost"><a href="#" class="hvr-sweep-to-left">Twitter</a> </li>
																				<div class="clearfix"></div>
																				<?php
																				if (isset($error)) {
																					echo '<p style="color: red">'.$error.'</p>';
																			}
																			?>
																			</ul>
																		</div>
																<form action="" method="post">
																		<input type="text" class="text"  name="username" placeholder="Reg. Number" required>
																		<input type="password"  name="password" placeholder="Password" required>
																		<div class="submit"><input type="submit" name="submit" value="Login"></div>
																		<div class="clearfix"></div>
																		
																		<div class="new">
																			<p><label class="checkbox11"><input type="checkbox" name="checkbox"><i> </i>Forgot Password ?</label></p>
																			<p class="sign">Do not have an account ? <a href="register.php">Register</a></p>
																			<div class="clearfix"></div>
																		</div>
																	</form>
																	
														</div>

														
													</div>
													
													
												<!--//login-top-->
										   </div>
						
										  	<!--//login-->
										    <!--footer section start-->
										<div class="footer">
				 								<div class="error-btn">
															<a class="read fourth" href="index.php?role=Student">Return to Home</a>
															</div>
										   <p>&copy 2017 Departmental Payment. All Rights Reserved | Design by Amadikwa Joy N. 16h/0037/cs.</a></p>
										</div>
									<!--footer section end-->
									<!--/404-->
<!--js -->
<script src="js/jquery.nicescroll.js"></script>
<script src="js/scripts.js"></script>
<!-- Bootstrap Core JavaScript -->
   <script src="js/bootstrap.min.js"></script>
</body>
</html>