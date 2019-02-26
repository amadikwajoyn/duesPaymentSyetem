
<?php
	include_once('include/header.php')
?>						<div class="outter-wp">
								<!--custom-widgets-->
												<div class="custom-widgets">
												   <div class="row-one">
														<div class="col-md-3 widget">
															<div class="stats-left ">
																<h5>Today</h5>
																<h4> Users</h4>
															</div>
															<div class="stats-right">
																<label>90</label>
															</div>
															<div class="clearfix"> </div>	
														</div>
														<div class="col-md-3 widget states-mdl">
															<div class="stats-left">
																<h5>Today</h5>
																<h4>Visitors</h4>
															</div>
															<div class="stats-right">
																<label> 85</label>
															</div>
															<div class="clearfix"> </div>	
														</div>
														<div class="col-md-3 widget states-thrd">
															<div class="stats-left">
																<h5>Today</h5>
																<h4>Tasks</h4>
															</div>
															<div class="stats-right">
																<label>51</label>
															</div>
															<div class="clearfix"> </div>	
														</div>
														<div class="col-md-3 widget states-last">
															<div class="stats-left">
																<h5>Today</h5>
																<h4>Alerts</h4>
															</div>
															<div class="stats-right">
																<label>30</label>
															</div>
															<div class="clearfix"> </div>	
														</div>
														<div class="clearfix"> </div>	
													</div>
												</div>
												<!--//custom-widgets-->
												<!--/candile-->
													<div class="candile">  
															<div class="candile-inner">
																
															    <div id="center"><div id="fig">
															    		
															    		<div class="image-slider">
						<!-- Slideshow 1 -->
					   														 <ul class="rslides" id="slider1">
					    														<li><img src="images/slide1.jpg" width='100%' height="20%"></li>
					     														<li><img src="images/slide1.jpg" alt=""></li>
					      														<li><img src="images/slide2.png" alt=""></li>
					      														<li><img src="images/slide3.jpg" alt=""></li>
					    													</ul>
						 <!-- Slideshow 2 -->
																		</div>
					<!--End-image-slider---->
																
												
										<!--/bottom-grids-->		 
									<?php
										include_once('include/bottom_grid.php');
									?>
									<!--//bottom-grids-->
									
									</div>
									<!--/charts-inner-->
									</div>
										<!--//outer-wp-->
									</div>
									<?php
										include_once('include/footer.php');
									?>
								</div>
							</div>
							
							<?php
								include_once('include/sidebar.php');
							?>


							  <div class="clearfix"></div>		
							</div>
							<script>
							var toggle = true;
										
							$(".sidebar-icon").click(function() {                
							  if (toggle)
							  {
								$(".page-container").addClass("sidebar-collapsed").removeClass("sidebar-collapsed-back");
								$("#menu span").css({"position":"absolute"});
							  }
							  else
							  {
								$(".page-container").removeClass("sidebar-collapsed").addClass("sidebar-collapsed-back");
								setTimeout(function() {
								  $("#menu span").css({"position":"relative"});
								}, 400);
							  }
											
											toggle = !toggle;
										});
							</script>
<!--js -->
<link rel="stylesheet" href="css/vroom.css">
<script type="text/javascript" src="js/vroom.js"></script>
<script type="text/javascript" src="js/TweenLite.min.js"></script>
<script type="text/javascript" src="js/CSSPlugin.min.js"></script>
<script src="js/jquery.nicescroll.js"></script>
<script src="js/scripts.js"></script>

<!-- Bootstrap Core JavaScript -->
   <script src="js/bootstrap.min.js"></script>
</body>
</html>