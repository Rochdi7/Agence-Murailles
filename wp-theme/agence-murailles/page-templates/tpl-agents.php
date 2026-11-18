<?php
/**
 * Template Name: Agents
 * Direct conversion from agents.html
 *
 * @package Agence_Murailles
 */
get_header();
?>

<section class="bg-main position-relative">
				<div class="position-absolute start-0 top-0 w-25 h-15 bg-light rounded-end-pill opacity-25 mt-4"></div>
				<div class="position-absolute start-0 bottom-0 w-15 h-20 bg-light rounded-top-pill opacity-25 ms-4"></div>
				<div class="position-absolute end-0 top-0 w-15 h-25 bg-light rounded-bottom-pill opacity-25 me-4"></div>
				<div class="position-absolute end-0 bottom-0 w-25 h-15 bg-light rounded-start-pill opacity-25 mb-4"></div>
				<div class="ht-30"></div>
				<div class="container">
					<div class="row">
						<div class="col-lg-12 col-md-12">
							
							<h2 class="ipt-title text-light">All Agents</h2>
							<span class="ipn-subtitle">Lists of our all expert agents</span>
							
						</div>
					</div>
				</div>
				<div class="ht-30"></div>
			</section>
			<!-- ============================ Page Title End ================================== -->
			
			<!-- ============================ Search Form End ================================== -->
			<section class="gray-simple p-0">
				<div class="container">
					<!-- row Start -->
					<div class="row justify-content-center">
						<div class="col-lg-10 col-md-12">
							<div class="full-search-2 eclip-search italian-search hero-search-radius shadow-hard overlio-40">
								<div class="hero-search-content">
									<div class="row">

										<div class="col-lg-10 col-md-9 col-sm-12">
											<div class="form-group">
												<div class="position-relative">
													<input type="text" class="form-control border-0 ps-5" placeholder="Search for a location">
													<div class="position-absolute top-50 start-0 translate-middle-y ms-2">
														<span class="svg-icon text-main svg-icon-2hx">
															<svg width="25" height="25" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
																<path opacity="0.3" d="M18.0624 15.3453L13.1624 20.7453C12.5624 21.4453 11.5624 21.4453 10.9624 20.7453L6.06242 15.3453C4.56242 13.6453 3.76242 11.4453 4.06242 8.94534C4.56242 5.34534 7.46242 2.44534 11.0624 2.04534C15.8624 1.54534 19.9624 5.24534 19.9624 9.94534C20.0624 12.0453 19.2624 13.9453 18.0624 15.3453Z" fill="currentColor"/>
																<path d="M12.0624 13.0453C13.7193 13.0453 15.0624 11.7022 15.0624 10.0453C15.0624 8.38849 13.7193 7.04535 12.0624 7.04535C10.4056 7.04535 9.06241 8.38849 9.06241 10.0453C9.06241 11.7022 10.4056 13.0453 12.0624 13.0453Z" fill="currentColor"/>
															</svg>
														</span>
													</div>
												</div>
											</div>
										</div>
										
										<div class="col-lg-2 col-md-3 col-sm-12">
											<div class="form-group">
												<a href="#" class="btn btn-dark full-width">Search</a>
											</div>
										</div>
												
									</div>
								</div>
							</div>
						</div>
					</div>
					<!-- /row -->
				</div>
			</section>
			<!-- ============================ Search Form End ================================== -->
			
			<!-- ============================ Agent List Start ================================== -->
			<section class="gray-simple">
				<div class="container">
				
					<div class="row justify-content-center g-lg-3 g-4">
						
						<!-- Single Agent -->
						<div class="col-xl-3 col-lg-4 col-md-6 col-sm-12">
							<div class="agents-grid card rounded-3 border p-4">
								<div class="agents-grid-wrap mb-4">
									<div class="fr-grid-thumb mx-auto text-center mt-4 mb-3">
										<a href="<?php echo home_url('/agent-page/'); ?>" class="d-inline-flex p-1 circle border">
											<img src="<?php echo get_template_directory_uri(); ?>/assets/img/user-1.jpg" class="img-fluid circle" width="100" alt="" />
										</a>
									</div>
									<div class="fr-grid-deatil text-center">
										<div class="rating-wrap d-block">
											<div class="d-flex align-items-center justify-content-center gap-2">
												<span class="text-warning"><i class="bi bi-star-fill"></i></span>
												<span class="text-dark fw-semibold">4.8</span>
												<span class="text-muted fw-medium text-sm">(1.12k)</span>
											</div>
										</div>
										<div class="fr-grid-deatil-flex">
											<h5 class="fr-can-name lh-base mb-0"><a href="#">James N. Green</a></h5>
											<span class="agent-location text-muted"><i class="bi bi-geo-alt me-2"></i>San Francisco</span>
										</div>
									</div>
								</div>
								
								<div class="fr-grid-info d-flex align-items-center justify-content-center">
									<a href="#" class="btn btn-outline-gray rounded-pill border-2 w-100">View Profile<i class="bi bi-arrow-up-right ms-2"></i></a>
								</div>
								
							</div>
						</div>
						
						<!-- Single Agent -->
						<div class="col-xl-3 col-lg-4 col-md-6 col-sm-12">
							<div class="agents-grid card rounded-3 border p-4">
								
								<div class="superAgent position-absolute top-0 end-0 mt-3 me-3">
									<div class="d-flex align-items-end justify-content-end gap-2">
										<span class="label rounded-pill bg-green">Super Agent</span>
									</div>
								</div>
								<div class="agents-grid-wrap mb-4">
									<div class="fr-grid-thumb mx-auto text-center mt-4 mb-3">
										<a href="<?php echo home_url('/agent-page/'); ?>" class="d-inline-flex p-1 circle border">
											<img src="<?php echo get_template_directory_uri(); ?>/assets/img/user-1.jpg" class="img-fluid circle" width="100" alt="" />
										</a>
									</div>
									<div class="fr-grid-deatil text-center">
										<div class="rating-wrap d-block">
											<div class="d-flex align-items-center justify-content-center gap-2">
												<span class="text-warning"><i class="bi bi-star-fill"></i></span>
												<span class="text-dark fw-semibold">4.9</span>
												<span class="text-muted fw-medium text-sm">(1.62k)</span>
											</div>
										</div>
										<div class="fr-grid-deatil-flex">
											<h5 class="fr-can-name lh-base mb-0"><a href="#">Seema Gauranki</a></h5>
											<span class="agent-location text-muted"><i class="bi bi-geo-alt me-2"></i>San Diego</span>
										</div>
									</div>
								</div>
								
								<div class="fr-grid-info d-flex align-items-center justify-content-center">
									<a href="#" class="btn btn-outline-gray rounded-pill border-2 w-100">View Profile<i class="bi bi-arrow-up-right ms-2"></i></a>
								</div>
								
							</div>
						</div>
						
						<!-- Single Agent -->
						<div class="col-xl-3 col-lg-4 col-md-6 col-sm-12">
							<div class="agents-grid card rounded-3 border p-4">
								
								<div class="superAgent position-absolute top-0 end-0 mt-3 me-3">
									<div class="d-flex align-items-end justify-content-end gap-2">
										<span class="label rounded-pill bg-green">Super Agent</span>
									</div>
								</div>
								<div class="agents-grid-wrap mb-4">
									<div class="fr-grid-thumb mx-auto text-center mt-4 mb-3">
										<a href="<?php echo home_url('/agent-page/'); ?>" class="d-inline-flex p-1 circle border">
											<img src="<?php echo get_template_directory_uri(); ?>/assets/img/user-7.jpg" class="img-fluid circle" width="100" alt="" />
										</a>
									</div>
									<div class="fr-grid-deatil text-center">
										<div class="rating-wrap d-block">
											<div class="d-flex align-items-center justify-content-center gap-2">
												<span class="text-warning"><i class="bi bi-star-fill"></i></span>
												<span class="text-dark fw-semibold">4.8</span>
												<span class="text-muted fw-medium text-sm">(1.17k)</span>
											</div>
										</div>
										<div class="fr-grid-deatil-flex">
											<h5 class="fr-can-name lh-base mb-0"><a href="#">Grack Chappel</a></h5>
											<span class="agent-location text-muted"><i class="bi bi-geo-alt me-2"></i>Jacksonville</span>
										</div>
									</div>
								</div>
								
								<div class="fr-grid-info d-flex align-items-center justify-content-center">
									<a href="#" class="btn btn-outline-gray rounded-pill border-2 w-100">View Profile<i class="bi bi-arrow-up-right ms-2"></i></a>
								</div>
								
							</div>
						</div>
						
						<!-- Single Agent -->
						<div class="col-xl-3 col-lg-4 col-md-6 col-sm-12">
							<div class="agents-grid card rounded-3 border p-4">
								<div class="agents-grid-wrap mb-4">
									<div class="fr-grid-thumb mx-auto text-center mt-3 mb-3">
										<a href="<?php echo home_url('/agent-page/'); ?>" class="d-inline-flex p-1 circle border">
											<img src="<?php echo get_template_directory_uri(); ?>/assets/img/user-8.jpg" class="img-fluid circle" width="100" alt="" />
										</a>
									</div>
									<div class="fr-grid-deatil text-center">
										<div class="rating-wrap d-block">
											<div class="d-flex align-items-center justify-content-center gap-2">
												<span class="text-warning"><i class="bi bi-star-fill"></i></span>
												<span class="text-dark fw-semibold">4.9</span>
												<span class="text-muted fw-medium text-sm">(2.22k)</span>
											</div>
										</div>
										<div class="fr-grid-deatil-flex">
											<h5 class="fr-can-name lh-base mb-0"><a href="#">Nikita Rajaswi</a></h5>
											<span class="agent-location text-muted"><i class="bi bi-geo-alt me-2"></i>Long Beach</span>
										</div>
									</div>
								</div>
								
								<div class="fr-grid-info d-flex align-items-center justify-content-center">
									<a href="#" class="btn btn-outline-gray rounded-pill border-2 w-100">View Profile<i class="bi bi-arrow-up-right ms-2"></i></a>
								</div>
								
							</div>
						</div>
						
						<!-- Single Agent -->
						<div class="col-xl-3 col-lg-4 col-md-6 col-sm-12">
							<div class="agents-grid card rounded-3 border p-4">
								<div class="agents-grid-wrap mb-4">
									<div class="fr-grid-thumb mx-auto text-center mt-4 mb-3">
										<a href="<?php echo home_url('/agent-page/'); ?>" class="d-inline-flex p-1 circle border">
											<img src="<?php echo get_template_directory_uri(); ?>/assets/img/user-1.jpg" class="img-fluid circle" width="100" alt="" />
										</a>
									</div>
									<div class="fr-grid-deatil text-center">
										<div class="rating-wrap d-block">
											<div class="d-flex align-items-center justify-content-center gap-2">
												<span class="text-warning"><i class="bi bi-star-fill"></i></span>
												<span class="text-dark fw-semibold">4.7</span>
												<span class="text-muted fw-medium text-sm">(2.14k)</span>
											</div>
										</div>
										<div class="fr-grid-deatil-flex">
											<h5 class="fr-can-name lh-base mb-0"><a href="#">Adam Walcorn</a></h5>
											<span class="agent-location text-muted"><i class="bi bi-geo-alt me-2"></i>San Antonio</span>
										</div>
									</div>
								</div>
								
								<div class="fr-grid-info d-flex align-items-center justify-content-center">
									<a href="#" class="btn btn-outline-gray rounded-pill border-2 w-100">View Profile<i class="bi bi-arrow-up-right ms-2"></i></a>
								</div>
								
							</div>
						</div>
						
						<!-- Single Agent -->
						<div class="col-xl-3 col-lg-4 col-md-6 col-sm-12">
							<div class="agents-grid card rounded-3 border p-4">
								
								<div class="hotAgent position-absolute top-0 end-0 mt-3 me-3">
									<div class="d-flex align-items-end justify-content-end gap-2">
										<span class="label rounded-pill bg-dark">Hot</span>
									</div>
								</div>
								<div class="agents-grid-wrap mb-4">
									<div class="fr-grid-thumb mx-auto text-center mt-4 mb-3">
										<a href="<?php echo home_url('/agent-page/'); ?>" class="d-inline-flex p-1 circle border">
											<img src="<?php echo get_template_directory_uri(); ?>/assets/img/user-4.jpg" class="img-fluid circle" width="100" alt="" />
										</a>
									</div>
									<div class="fr-grid-deatil text-center">
										<div class="rating-wrap d-block">
											<div class="d-flex align-items-center justify-content-center gap-2">
												<span class="text-warning"><i class="bi bi-star-fill"></i></span>
												<span class="text-dark fw-semibold">4.8</span>
												<span class="text-muted fw-medium text-sm">(1.63k)</span>
											</div>
										</div>
										<div class="fr-grid-deatil-flex">
											<h5 class="fr-can-name lh-base mb-0"><a href="#">Jasmin Khatri</a></h5>
											<span class="agent-location text-muted"><i class="bi bi-geo-alt me-2"></i>Los Angeles</span>
										</div>
									</div>
								</div>
								
								<div class="fr-grid-info d-flex align-items-center justify-content-center">
									<a href="#" class="btn btn-outline-gray rounded-pill border-2 w-100">View Profile<i class="bi bi-arrow-up-right ms-2"></i></a>
								</div>
								
							</div>
						</div>
						
						<!-- Single Agent -->
						<div class="col-xl-3 col-lg-4 col-md-6 col-sm-12">
							<div class="agents-grid card rounded-3 border p-4">
								
								<div class="hotAgent position-absolute top-0 end-0 mt-4 me-3">
									<div class="d-flex align-items-end justify-content-end gap-2">
										<span class="label rounded-pill bg-dark">Hot</span>
									</div>
								</div>
								<div class="agents-grid-wrap mb-4">
									<div class="fr-grid-thumb mx-auto text-center mt-3 mb-3">
										<a href="<?php echo home_url('/agent-page/'); ?>" class="d-inline-flex p-1 circle border">
											<img src="<?php echo get_template_directory_uri(); ?>/assets/img/user-5.jpg" class="img-fluid circle" width="100" alt="" />
										</a>
									</div>
									<div class="fr-grid-deatil text-center">
										<div class="rating-wrap d-block">
											<div class="d-flex align-items-center justify-content-center gap-2">
												<span class="text-warning"><i class="bi bi-star-fill"></i></span>
												<span class="text-dark fw-semibold">4.9</span>
												<span class="text-muted fw-medium text-sm">(1.35k)</span>
											</div>
										</div>
										<div class="fr-grid-deatil-flex">
											<h5 class="fr-can-name lh-base mb-0"><a href="#">Rudra K. Mathan</a></h5>
											<span class="agent-location text-muted"><i class="bi bi-geo-alt me-2"></i>Kansas City</span>
										</div>
									</div>
								</div>
								
								<div class="fr-grid-info d-flex align-items-center justify-content-center">
									<a href="#" class="btn btn-outline-gray rounded-pill border-2 w-100">View Profile<i class="bi bi-arrow-up-right ms-2"></i></a>
								</div>
								
							</div>
						</div>
						
						<!-- Single Agent -->
						<div class="col-xl-3 col-lg-4 col-md-6 col-sm-12">
							<div class="agents-grid card rounded-3 border p-4">
								
								<div class="agents-grid-wrap mb-4">
									<div class="fr-grid-thumb mx-auto text-center mt-4 mb-3">
										<a href="<?php echo home_url('/agent-page/'); ?>" class="d-inline-flex p-1 circle border">
											<img src="<?php echo get_template_directory_uri(); ?>/assets/img/user-6.jpg" class="img-fluid circle" width="100" alt="" />
										</a>
									</div>
									<div class="fr-grid-deatil text-center">
										<div class="rating-wrap d-block">
											<div class="d-flex align-items-center justify-content-center gap-2">
												<span class="text-warning"><i class="bi bi-star-fill"></i></span>
												<span class="text-dark fw-semibold">4.7</span>
												<span class="text-muted fw-medium text-sm">(453)</span>
											</div>
										</div>
										<div class="fr-grid-deatil-flex">
											<h5 class="fr-can-name lh-base mb-0"><a href="#">Niharika Muthurk</a></h5>
											<span class="agent-location text-muted"><i class="bi bi-geo-alt me-2"></i>New Orleans</span>
										</div>
									</div>
								</div>
								
								<div class="fr-grid-info d-flex align-items-center justify-content-center">
									<a href="#" class="btn btn-outline-gray rounded-pill border-2 w-100">View Profile<i class="bi bi-arrow-up-right ms-2"></i></a>
								</div>
								
							</div>
						</div>
						
						<!-- Single Agent -->
						<div class="col-xl-3 col-lg-4 col-md-6 col-sm-12">
							<div class="agents-grid card rounded-3 border p-4">
								
								<div class="superAgent position-absolute top-0 end-0 mt-3 me-3">
									<div class="d-flex align-items-end justify-content-end gap-2">
										<span class="label rounded-pill bg-green">Super Agent</span>
									</div>
								</div>
								<div class="agents-grid-wrap mb-4">
									<div class="fr-grid-thumb mx-auto text-center mt-4 mb-3">
										<a href="<?php echo home_url('/agent-page/'); ?>" class="d-inline-flex p-1 circle border">
											<img src="<?php echo get_template_directory_uri(); ?>/assets/img/user-7.jpg" class="img-fluid circle" width="100" alt="" />
										</a>
									</div>
									<div class="fr-grid-deatil text-center">
										<div class="rating-wrap d-block">
											<div class="d-flex align-items-center justify-content-center gap-2">
												<span class="text-warning"><i class="bi bi-star-fill"></i></span>
												<span class="text-dark fw-semibold">4.8</span>
												<span class="text-muted fw-medium text-sm">(1.17k)</span>
											</div>
										</div>
										<div class="fr-grid-deatil-flex">
											<h5 class="fr-can-name lh-base mb-0"><a href="#">Grack Chappel</a></h5>
											<span class="agent-location text-muted"><i class="bi bi-geo-alt me-2"></i>Jacksonville</span>
										</div>
									</div>
								</div>
								
								<div class="fr-grid-info d-flex align-items-center justify-content-center">
									<a href="#" class="btn btn-outline-gray rounded-pill border-2 w-100">View Profile<i class="bi bi-arrow-up-right ms-2"></i></a>
								</div>
								
							</div>
						</div>
						
						<!-- Single Agent -->
						<div class="col-xl-3 col-lg-4 col-md-6 col-sm-12">
							<div class="agents-grid card rounded-3 border p-4">
								<div class="agents-grid-wrap mb-4">
									<div class="fr-grid-thumb mx-auto text-center mt-3 mb-3">
										<a href="<?php echo home_url('/agent-page/'); ?>" class="d-inline-flex p-1 circle border">
											<img src="<?php echo get_template_directory_uri(); ?>/assets/img/user-8.jpg" class="img-fluid circle" width="100" alt="" />
										</a>
									</div>
									<div class="fr-grid-deatil text-center">
										<div class="rating-wrap d-block">
											<div class="d-flex align-items-center justify-content-center gap-2">
												<span class="text-warning"><i class="bi bi-star-fill"></i></span>
												<span class="text-dark fw-semibold">4.9</span>
												<span class="text-muted fw-medium text-sm">(2.22k)</span>
											</div>
										</div>
										<div class="fr-grid-deatil-flex">
											<h5 class="fr-can-name lh-base mb-0"><a href="#">Nikita Rajaswi</a></h5>
											<span class="agent-location text-muted"><i class="bi bi-geo-alt me-2"></i>Long Beach</span>
										</div>
									</div>
								</div>
								
								<div class="fr-grid-info d-flex align-items-center justify-content-center">
									<a href="#" class="btn btn-outline-gray rounded-pill border-2 w-100">View Profile<i class="bi bi-arrow-up-right ms-2"></i></a>
								</div>
								
							</div>
						</div>
						
						<!-- Single Agent -->
						<div class="col-xl-3 col-lg-4 col-md-6 col-sm-12">
							<div class="agents-grid card rounded-3 border p-4">
								<div class="agents-grid-wrap mb-4">
									<div class="fr-grid-thumb mx-auto text-center mt-4 mb-3">
										<a href="<?php echo home_url('/agent-page/'); ?>" class="d-inline-flex p-1 circle border">
											<img src="<?php echo get_template_directory_uri(); ?>/assets/img/user-1.jpg" class="img-fluid circle" width="100" alt="" />
										</a>
									</div>
									<div class="fr-grid-deatil text-center">
										<div class="rating-wrap d-block">
											<div class="d-flex align-items-center justify-content-center gap-2">
												<span class="text-warning"><i class="bi bi-star-fill"></i></span>
												<span class="text-dark fw-semibold">4.8</span>
												<span class="text-muted fw-medium text-sm">(1.12k)</span>
											</div>
										</div>
										<div class="fr-grid-deatil-flex">
											<h5 class="fr-can-name lh-base mb-0"><a href="#">James N. Green</a></h5>
											<span class="agent-location text-muted"><i class="bi bi-geo-alt me-2"></i>San Francisco</span>
										</div>
									</div>
								</div>
								
								<div class="fr-grid-info d-flex align-items-center justify-content-center">
									<a href="#" class="btn btn-outline-gray rounded-pill border-2 w-100">View Profile<i class="bi bi-arrow-up-right ms-2"></i></a>
								</div>
								
							</div>
						</div>
						
						<!-- Single Agent -->
						<div class="col-xl-3 col-lg-4 col-md-6 col-sm-12">
							<div class="agents-grid card rounded-3 border p-4">
								
								<div class="superAgent position-absolute top-0 end-0 mt-3 me-3">
									<div class="d-flex align-items-end justify-content-end gap-2">
										<span class="label rounded-pill bg-green">Super Agent</span>
									</div>
								</div>
								<div class="agents-grid-wrap mb-4">
									<div class="fr-grid-thumb mx-auto text-center mt-4 mb-3">
										<a href="<?php echo home_url('/agent-page/'); ?>" class="d-inline-flex p-1 circle border">
											<img src="<?php echo get_template_directory_uri(); ?>/assets/img/user-1.jpg" class="img-fluid circle" width="100" alt="" />
										</a>
									</div>
									<div class="fr-grid-deatil text-center">
										<div class="rating-wrap d-block">
											<div class="d-flex align-items-center justify-content-center gap-2">
												<span class="text-warning"><i class="bi bi-star-fill"></i></span>
												<span class="text-dark fw-semibold">4.9</span>
												<span class="text-muted fw-medium text-sm">(1.62k)</span>
											</div>
										</div>
										<div class="fr-grid-deatil-flex">
											<h5 class="fr-can-name lh-base mb-0"><a href="#">Seema Gauranki</a></h5>
											<span class="agent-location text-muted"><i class="bi bi-geo-alt me-2"></i>San Diego</span>
										</div>
									</div>
								</div>
								
								<div class="fr-grid-info d-flex align-items-center justify-content-center">
									<a href="#" class="btn btn-outline-gray rounded-pill border-2 w-100">View Profile<i class="bi bi-arrow-up-right ms-2"></i></a>
								</div>
								
							</div>
						</div>
						
					</div>
					
					<!-- Pagination -->
					<div class="row">
						<div class="col-lg-12 col-md-12 col-sm-12 text-center mt-5">
							<a href="listings-list-with-sidebar.html" class="btn btn-main px-lg-5 rounded">Explore More Agents</a>
						</div>
					</div>
					
				</div>	
			</section>
			<!-- ============================ Agent List End ================================== -->
			
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
