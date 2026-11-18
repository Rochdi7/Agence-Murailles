<?php
/**
 * Template Name: Change Password
 * Direct conversion from change-password.html
 */
get_header();
?>

			<div class="page-title">
				<div class="container">
					<div class="row">
						<div class="col-lg-12 col-md-12">
							
							<h2 class="ipt-title">Welcome!</h2>
							<span class="ipn-subtitle">Welcome To Your Account</span>
							
						</div>
					</div>
				</div>
			</div>
			<!-- ============================ Page Title End ================================== -->
			
			<!-- ============================ User Dashboard ================================== -->
			<section class="bg-light">
				<div class="container-fluid">
				
					<div class="row">
						<div class="col-lg-12 col-md-12">
							<div class="filter_search_opt">
								<a href="javascript:void(0);" onclick="openFilterSearch()" class="btn btn-dark full-width mb-4">Dashboard Navigation<i class="fa-solid fa-bars ms-2"></i></a>
							</div>
						</div>
					</div>
								
					<div class="row">
						
						<div class="col-lg-3 col-md-12 pe-xl-4">
							
							<div class="simple-sidebar sm-sidebar" id="filter_search">
								
								<div class="search-sidebar_header">
									<h4 class="ssh_heading">Close Filter</h4>
									<button onclick="closeFilterSearch()" class="w3-bar-item w3-button w3-large"><i class="fa-regular fa-circle-xmark fs-5 text-muted-2"></i></button>
								</div>
								
								<div class="sidebar-widgets">
									<div class="dashboard-navbar">
										
										<div class="d-user-avater">
											<img src="<?php echo get_template_directory_uri(); ?>/assets/img/team-1.jpg" class="img-fluid avater" alt="">
											<h4>Adam Harshvardhan</h4>
											<span>Canada USA</span>
										</div>
										
										<div class="d-navigation">
											<ul>
												<li><a href="<?php echo home_url('/dashboard/'); ?>"><i class="bi bi-speedometer me-2"></i>Dashboard</a></li>
												<li><a href="<?php echo home_url('/my-profile/'); ?>"><i class="bi bi-person-bounding-box me-2"></i>My Profile</a></li>                               
												<li><a href="<?php echo home_url('/my-property/'); ?>"><i class="bi bi-house-door me-2"></i>My Listings</a></li>
												<li><a href="<?php echo home_url('/bookmark-list/'); ?>"><i class="bi bi-suit-heart me-2"></i>Bookmarked Property</a></li>
												<li><a href="submit-property-dashboard.html"><i class="bi bi-patch-plus me-2"></i>Submit Property</a></li>        
												<li class="active"><a href="<?php echo home_url('/change-password/'); ?>"><i class="bi bi-gear me-2"></i>Settings</a></li>
												<li><a href="<?php echo home_url('/'); ?>"><i class="bi bi-power me-2"></i>Log Out</a></li>
											</ul>
										</div>
										
									</div>
								</div>
								
							</div>
						</div>
						
						<div class="col-lg-9 col-md-12">
							<div class="dashboard-wraper">
							
								<!-- Basic Information -->
								<div class="form-submit">	
									<h4>Change Your Password</h4>
									<div class="submit-section">
										<div class="row">
										
											<div class="form-group col-lg-12 col-md-6">
												<label>Old Password</label>
												<input type="password" class="form-control">
											</div>
											
											<div class="form-group col-md-6">
												<label>New Password</label>
												<input type="password" class="form-control">
											</div>
											
											<div class="form-group col-md-6">
												<label>Confirm password</label>
												<input type="password" class="form-control">
											</div>
											
											<div class="form-group col-lg-12 col-md-12">
												<button class="btn btn-main px-5 rounded" type="submit">Save Changes</button>
											</div>
											
										</div>
									</div>
								</div>
								
							</div>
						</div>
						
					</div>
				</div>
			</section>
			<!-- ============================ User Dashboard End ================================== -->
			<!-- ============================ Call To Action ================================== -->
			<section class="bg-main call-to-act-wrap">
				<div class="container">
					<div class="row">
						<div class="col-lg-12">
							
							<div class="call-to-act">
								<div class="call-to-act-head">
									<h3>Want to Become a Real Estate Agent?</h3>
									<span>We'll help you to grow your career and growth.</span>
								</div>
								<a href="#" class="btn btn-call-to-act">SignUp Today</a>
							</div>
							
						</div>
					</div>
				</div>
			</section>
			<!-- ============================ Call To Action End ================================== -->
			
			<!-- ============================ Footer Start ================================== -->

<?php get_footer(); ?>
