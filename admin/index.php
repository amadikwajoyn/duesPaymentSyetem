<?php
session_start();
require_once('../include/db.php');
$_SESSION['username'] - 1;

?>

<?php
	include_once('include/header.php');
?>
						<div class="outter-wp">
								<!--custom-widgets-->
												<div class="custom-widgets">
												   <div class="row-one">
														<div class="col-md-3 widget">
															<div class="panel panel-primary">
              												  <div class="panel-heading">
                											    <div class="row">
                        											<div class="col-xs-3">
                           												 <i class="fa fa-comments fa-5x"></i>
                        											</div>
                        											<div class="col-xs-9">
                           					 							<div class="text-right huge"></div>
                            											<div class="text-right">New Comments</div>
                       		 										</div>
                    											</div>
                										   	   </div>
                												<a href="comments.php">
                  												<div class="panel-footer">
                        											<span class="pull-left">View All Comments</span>
                        											<span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                        											<div class="clearfix"></div>
                    											</div>
                												</a>
            												</div>	
														</div>

														<div class="col-md-3 widget states-mdl">
															<div class="panel panel-primary">
               													<div class="panel-heading">
                    												<div class="row">
                        												<div class="col-xs-3">
                            												<i class="fa fa-comments fa-5x"></i>
                        												</div>
                        												<div class="col-xs-9">
                            												<div class="text-right huge"><?php ?></div>
                            												<div class="text-right">All Users</div>
                        												</div>
                    												</div>
                												</div>
                												<a href="users.php">
                    												<div class="panel-footer">
                       	 
                       													<span class="pull-left">View All Users</span>
                        												<span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                        												<div class="clearfix"></div>
                    												</div>
                												</a>
            												</div>	
														</div>
														<div class="col-md-3 widget states-thrd">
            <div class="panel panel-primary">
                <div class="panel-heading">
                    <div class="row">
                        <div class="col-xs-3">
                            <i class="fa fa-file-text fa-5x"></i>
                        </div>
                        <div class="col-xs-9">
                            <div class="text-right huge"><? ?></div>
                            <div class="text-right">All Payments</div>
                        </div>
                    </div>
                </div>
                <a href="payments.php">
                    <div class="panel-footer">
                        <span class="pull-left">View All Payments</span>
                        <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                        <div class="clearfix"></div>
                    </div>
                </a>
            </div>
        </div>
														<div class="col-md-3 widget states-last">
            <div class="panel panel-primary">
                <div class="panel-heading">
                    <div class="row">
                        <div class="col-xs-3">
                            <i class="fa fa-file-text fa-5x"></i>
                        </div>
                        <div class="col-xs-9">
                            <div class="text-right huge"><? ?></div>
                            <div class="text-right">All Categories</div>
                        </div>
                    </div>
                </div>
                <a href="categories.php">
                    <div class="panel-footer">
                        <span class="pull-left">View All Categories</span>
                        <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                        <div class="clearfix"></div>
                    </div>
                </a>
            </div>
        </div>	
														</div>
														<div class="clearfix"> </div>	
													</div>
												</div>
												<!--//custom-widgets-->
												<!--/candile-->
													<div class="candile" width="100%"> 
															<div class="candile-inner">
																	<h3 class="sub-tittle">ADMIN DASHBOARD </h3>
															    <div id="center"><div id="fig">
															    	<img src="images/p4.jpg">	
												<!--/float-charts-->
																<div class="clearfix"> </div>
														</div>
												<div class="area">
																<div class="clearfix"></div>
												</div>
													
										<?php
											include_once('include/bottom_grid.php');
										?>
									</div>
									<!--/charts-inner-->
									</div>
										<!--//outer-wp-->
									</div>
									 <?php 
									 	include_once('include/footer.php');
									 ?>
									 <?php
									 	include_once('include/sidebar.php');
									 ?>
							</div>
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