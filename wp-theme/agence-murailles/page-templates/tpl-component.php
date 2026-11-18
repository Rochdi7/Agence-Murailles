<?php
/**
 * Template Name: Component
 * Direct conversion from component.html
 *
 * @package Agence_Murailles
 */
get_header();
?>

<div class="page-title">
				<div class="container">
					<div class="row">
						<div class="col-lg-12 col-md-12">
							
							<h2 class="ipt-title">Components</h2>
							<span class="ipn-subtitle">Lists of all used components</span>
							
						</div>
					</div>
				</div>
			</div>
			<!-- ============================ Page Title End ================================== -->
			
			<!-- ============================ Agency List Start ================================== -->
			<section>
			
				<div class="container">

					<!-- row Start -->
					<div class="row mt-4">
					
						<div class="col-lg-6 col-md-12 col-sm-12">
							<h4>Typography</h4>
							 <h1>Heading One</h1>
                            <h2>Heading Two</h2>
                            <h3>Heading Three</h3>
                            <h4>Heading Four</h4>
                            <h5>Heading Five</h5>
                            <h6>Heading Six</h6>
						</div>
						
						<div class="col-lg-6 col-md-12 col-sm-12">
							<h4>Buttons</h4>
							<button type="submit" class="btn btn-main">Simple button</button></br>
							<button type="submit" class="btn btn-light-main btn-rounded">Simple button</button>
							<button type="submit" class="btn btn-success btn-md">Midium Button</button></br>
							<button type="submit" class="btn btn-danger btn-lg">Large Button</button>
							<button type="submit" class="btn btn-outline-main">Outline Button</button></br></br>
							<a href="#" class="btn btn-info rounded-pill">Simple button</a></br>
							<a href="#" class="btn btn-light-main rounded-pill">Simple button</a>
						</div>
						
					</div>
					<!-- /row -->	

					<!-- row Start -->
					<div class="row mt-4">
					
						<div class="col-lg-6 col-md-12 col-sm-12">
							<h4>Shadow & Simple Inputbox</h4>
							
							<div class="form-group">
								<div class="input-with-icon">
									<input type="text" class="form-control" placeholder="Neighborhood">
									<i class="fa-solid fa-magnifying-glass"></i>
								</div>
							</div>
							<div class="form-group">
								<label>Name</label>
								<input type="text" class="form-control simple">
							</div>
						</div>
						
						<div class="col-lg-6 col-md-12 col-sm-12">
							<h4>Checkbox & Radio buttons</h4>
							<ul class="no-ul-list">
								<li>
									<input id="a-1" class="form-check-input" name="a-1" type="checkbox">
									<label for="a-1" class="form-check-label">Air Condition</label>
								</li>
								<li>
									<input id="a-2" class="form-check-input" name="a-2" type="checkbox">
									<label for="a-2" class="form-check-label">Bedding</label>
								</li>
								
							</ul>
							
							<ul class="no-ul-list">
								<li>
									<input id="a-p" class="form-check-input" name="a-p" type="radio">
									<label for="a-p" class="form-check-label">Air Condition</label>
								</li>
								<li>
									<input id="a-c" class="form-check-input" name="a-c" type="radio">
									<label for="a-c" class="form-check-label">Bedding</label>
								</li>
								
							</ul>
						</div>
						
					</div>
					<!-- /row -->					
					
				</div>
						
			</section>
			<!-- ============================ Agency List End ================================== -->
			
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
