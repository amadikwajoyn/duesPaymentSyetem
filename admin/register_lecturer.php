<?php 
include_once('include/db.php');
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
														 <?php
                    if(isset($_POST['submit'])){
                        $date = time();
                        $name = mysqli_real_escape_string($con,$_POST['name']);                        
                        $email = mysqli_real_escape_string($con,$_POST['email']);
                        $phone = mysqli_real_escape_string($con,$_POST['phone']);                        
                        $address = mysqli_real_escape_string($con,$_POST['address']);
                        $username = mysqli_real_escape_string($con,strtolower($_POST['username']));
                        $username_trim = preg_replace('/\s+/','',$username);
                        $password = mysqli_real_escape_string($con,$_POST['password']);
                        $role = "Admin";
                        
                        $check_query = "SELECT * FROM users WHERE username = '$username' or email = '$email'";
                        $check_run = mysqli_query($con, $check_query);
                        
                       
                        
                        if(empty($name) or empty($email) or empty($phone) or empty($address) or empty($username) or empty($password)){
                            $error = "All (*) feilds are Required";
                        }
                        else if($username != $username_trim){
                            $error = "Don't Use spaces in Username";
                        }
                        else if(mysqli_num_rows($check_run) > 0){
                            $error = "Username or Email Already Exist";
                        }
                        else{
                            $insert_query = "INSERT INTO `users` (`id`, `name`, `email`, `phone`, `address`, `username`, `password`, `role`) VALUES (NULL, '$name', '$email', '$phone', '$address', '$username', '$password', '$role')";
                            if(mysqli_query($con,$insert_query)){
                                $msg = "User Has Been Added";
                                $image_check = "SELECT * FROM users ORDER BY id DESC LIMIT 1";
                                
                                $name = "";
                                $phone = "";
                                $email = "";
                                $username = "";
                            }
                            else
                            {
                                $error = "User Has Not Been Added";
                            }
                        }
                    }
                    ?>
													<h2 class="inner-tittle page">Departmental Payment</h2>
													    <div class="login">
														<h3 class="inner-tittle t-inner">Register As A Staff</h3>
														<h6 class="checkbox11" > <a href="../register.php">Register As A Student</a></h6>
																<form id="register" action="" method="post">
																		<input type="text" class="text" name="name" placeholder="Full Name" required>
																		<input type="text" class="text"  placeholder="E-mail" name="email" required>
																		<input type="text" class="text" name="phone"  placeholder="Phone Number" required>
																		<input type="text" class="text" name="address" placeholder="Address" required>
																		<input type="text" class="text" name="username" placeholder="Username" required>
																		<input type="password"  name="password" placeholder="Password" required>
																		<input type="password"  name="password" placeholder="Confirm Password" required>
																		<div class="sign-up">
																					<input type="reset" value="Reset">
																					<input type="submit" name="submit" value="Register">
																			
																		</div>
																		<div class="clearfix"></div>
																		
																		<div class="new">
																			<p><label class="checkbox11"><input type="checkbox" name="checkbox" required><i> </i>I agree with the terms</label></p>
																			<p class="sign">Already register ? <a href="admin_login.php">Login</a></p>
																			<div class="clearfix"></div>
																		</div>
																	</form>
														</div>
														
													</div>
													 </div>
												<!--//login-top-->
										  
										  	<!--//login-->
										    <!--footer section start-->
										<div class="footer">
										          <div class="error-btn">
															<a class="read fourth" href="index.php">Return to Home</a>
															</div>
										  <?php include_once('include/footer.php'); ?>
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