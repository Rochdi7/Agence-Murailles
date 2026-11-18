<?php
/**
 * Template Name: Half Map
 * Direct conversion from half-map.html
 */
get_header();
?>

			<div class="home-map-banner half-map">
				
				<div class="fs-left-map-box">
					<div class="home-map fl-wrap">
						<div class="hm-map-container fw-map">
							<div id="map"></div>
						</div>
					</div>
				</div>
				
				<div class="fs-inner-container">
					<div class="fs-content">
					
						<div class="row">
							<div class="col-lg-12 col-md-12">
								<div class="_mp_filter mb-3">
									<div class="_mp_filter_first">
										<h4>Where to Say?</h4>
										<div class="input-group">
										  <input type="text" class="form-control" placeholder="Neighborhood, City etc.">
											<div class="input-group-append">
												<button type="submit" class="input-group-text"><i class="fas fa-search"></i></submit>
											</div>
										</div>
									</div>
									<div class="_mp_filter_last">
										<a class="map_filter" data-bs-toggle="collapse" href="#filtermap" role="button" aria-expanded="false" aria-controls="filtermap"><i class="fa fa-sliders-h mr-2"></i>Filter</a>
									</div>
								</div>
							</div>
							<div class="col-lg-12 col-md-12 mt-4">
								<div class="collapse" id="filtermap">
									<div class="row">
							
										<div class="col-lg-6 col-md-6 col-sm-12">
											<div class="form-group">
												<div class="simple-input">
													<select id="ptypes" class="form-control">
														<option value="">&nbsp;</option>
														<option value="1">Apartment</option>
														<option value="2">Condo</option>
														<option value="3">Family</option>
														<option value="4">Houses</option>
														<option value="5">Villa</option>
													</select>
												</div>
											</div>
										</div>
											
										<div class="col-lg-6 col-md-6 col-sm-12">
											<div class="form-group">
												<div class="simple-input">
													<select id="status" class="form-control">
														<option value="">&nbsp;</option>
														<option value="1">Active</option>
														<option value="2">Expired</option>
													</select>
												</div>
											</div>
										</div>
										
										<div class="col-lg-6 col-md-6 col-sm-12">
											<div class="form-group">
												<div class="simple-input">
													<select id="bedrooms" class="form-control">
														<option value="">&nbsp;</option>
														<option value="1">1</option>
														<option value="2">2</option>
														<option value="3">3</option>
														<option value="4">4</option>
														<option value="5">5</option>
													</select>
												</div>
											</div>
										</div>
										
										<div class="col-lg-6 col-md-6 col-sm-12">
											<div class="simple-input">
												<select id="bathrooms" class="form-control">
													<option value="">&nbsp;</option>
													<option value="1">1</option>
													<option value="2">2</option>
													<option value="3">3</option>
													<option value="4">4</option>
													<option value="5">5</option>
												</select>
											</div>
										</div>
										
										<div class="col-lg-12 col-md-12 col-sm-12 pt-4 pb-4">
											<h6>Choose Price</h6>
											<div class="rg-slider">
												 <input type="text" class="js-range-slider" name="my_range" value="" />
											</div>
										</div>
										
										<div class="col-lg-12 col-md-12 col-sm-12">
											<h6>Advance Features</h6>
											<ul class="row p-0 m-0">
												<li class="col-xl-4 col-lg-6 col-md-6 p-0">
													<div class="form-check">
														<input id="a-1" class="form-check-input" name="a-1" type="checkbox">
														<label for="a-1" class="form-check-label">Air Condition</label>
													</div>
												</li>
												<li class="col-xl-4 col-lg-6 col-md-6 p-0">
													<div class="form-check">
														<input id="a-2" class="form-check-input" name="a-2" type="checkbox">
														<label for="a-2" class="form-check-label">Bedding</label>
													</div>
												</li>
												<li class="col-xl-4 col-lg-6 col-md-6 p-0">
													<div class="form-check">
														<input id="a-3" class="form-check-input" name="a-3" type="checkbox">
														<label for="a-3" class="form-check-label">Heating</label>
													</div>
												</li>
												<li class="col-xl-4 col-lg-6 col-md-6 p-0">
													<div class="form-check">
														<input id="a-4" class="form-check-input" name="a-4" type="checkbox">
														<label for="a-4" class="form-check-label">Internet</label>
													</div>
												</li>
												<li class="col-xl-4 col-lg-6 col-md-6 p-0">
													<div class="form-check">
														<input id="a-5" class="form-check-input" name="a-5" type="checkbox">
														<label for="a-5" class="form-check-label">Microwave</label>
													</div>
												</li>
												<li class="col-xl-4 col-lg-6 col-md-6 p-0">
													<div class="form-check">
														<input id="a-6" class="form-check-input" name="a-6" type="checkbox">
														<label for="a-6" class="form-check-label">Smoking Allow</label>
													</div>
												</li>
												<li class="col-xl-4 col-lg-6 col-md-6 p-0">
													<div class="form-check">
														<input id="a-7" class="form-check-input" name="a-7" type="checkbox">
														<label for="a-7" class="form-check-label">Terrace</label>
													</div>
												</li>
												<li class="col-xl-4 col-lg-6 col-md-6 p-0">
													<div class="form-check">
														<input id="a-8" class="form-check-input" name="a-8" type="checkbox">
														<label for="a-8" class="form-check-label">Balcony</label>
													</div>
												</li>
												<li class="col-xl-4 col-lg-6 col-md-6 p-0">
													<div class="form-check">
														<input id="a-9" class="form-check-input" name="a-9" type="checkbox">
														<label for="a-9" class="form-check-label">Icon</label>
													</div>
												</li>
											</ul>
										</div>
										
										<div class="col-lg-12 col-md-12 col-sm-12 mb-4 mt-4">
											<div class="elgio_filter">
												<div class="elgio_ft_first">
													<button class="btn btn-dark">
														Reset<span class="reset_counter">3</span>
													</button>
												</div>
												<div class="elgio_ft_last">
													<button class="btn btn-gray mr-2">Cancel</button>
													<button class="btn btn-main mr-2">See 76 Properties</button>
												</div>
											</div>
										</div>
									
									</div>
								</div>
							</div>
						</div>
						
						<!--- All List -->
						<div class="row justify-content-center list-layout">

							<!-- Single Property Start -->
							<div class="col-xl-12 col-lg-12 col-md-12">
								<div class="property-listing property-1 border bg-white p-2 rounded">
										
									<div class="listing-img-wrapper">
										<a href="<?php echo home_url('/single-property-2/'); ?>">
											<img src="<?php echo get_template_directory_uri(); ?>/assets/img/p-1.jpg" class="img-fluid mx-auto rounded" alt="" />
										</a>
									</div>
									
									<div class="listing-content">
									
										<div class="listing-detail-wrapper-box">
											<div class="listing-detail-wrapper d-flex align-items-center justify-content-between">
												<div class="listing-short-detail">
													<span class="label for-sale d-inline-flex mb-1">For Sale</span>
													<h4 class="listing-name mb-0"><a href="<?php echo home_url('/single-property-2/'); ?>">Adobe Property Advisors</a></h4>
													<div class="fr-can-rating">
														<i class="fas fa-star fs-xs filled"></i>
														<i class="fas fa-star fs-xs filled"></i>
														<i class="fas fa-star fs-xs filled"></i>
														<i class="fas fa-star fs-xs filled"></i>
														<i class="fas fa-star fs-xs"></i>
														<span class="reviews_text fs-sm text-muted ms-2">(42 Reviews)</span>
													</div>
													
												</div>
												<div class="list-price">
													<h6 class="listing-card-info-price text-main">$120M</h6>
												</div>
											</div>
										</div>
										
										<div class="price-features-wrapper">
											<div class="list-fx-features d-flex align-items-center justify-content-between mt-3 mb-1">
												<div class="listing-card d-flex align-items-center">
													<div class="square--25 text-muted-2 fs-sm circle gray-simple me-1"><i class="fa-solid fa-building-shield fs-xs"></i></div><span class="text-muted-2 fs-sm">3BHK</span>
												</div>
												<div class="listing-card d-flex align-items-center">
													<div class="square--25 text-muted-2 fs-sm circle gray-simple me-1"><i class="fa-solid fa-bed fs-xs"></i></div><span class="text-muted-2 fs-sm">3 Beds</span>
												</div>
												<div class="listing-card d-flex align-items-center">
													<div class="square--25 text-muted-2 fs-sm circle gray-simple me-1"><i class="fa-solid fa-clone fs-xs"></i></div><span class="text-muted-2 fs-sm">1800 SQFT</span>
												</div>
											</div>
										</div>
									
										<div class="listing-footer-wrapper">
											<div class="listing-locate">
												<span class="listing-location text-muted-2"><i class="fa-solid fa-location-pin me-1"></i>Quice Market, Canada</span>
											</div>
											<div class="listing-detail-btn">
												<a href="<?php echo home_url('/single-property-2/'); ?>" class="btn btn-sm px-4 fw-medium btn-main">View</a>
											</div>
										</div>
										
									</div>
									
								</div>
							</div>
							<!-- Single Property End -->
							
							<!-- Single Property Start -->
							<div class="col-xl-12 col-lg-12 col-md-12">
								<div class="property-listing property-1 border bg-white p-2 rounded">
										
									<div class="listing-img-wrapper">
										<a href="<?php echo home_url('/single-property-2/'); ?>">
											<img src="<?php echo get_template_directory_uri(); ?>/assets/img/p-2.jpg" class="img-fluid mx-auto rounded" alt="" />
										</a>
									</div>
									
									<div class="listing-content">
									
										<div class="listing-detail-wrapper-box">
											<div class="listing-detail-wrapper d-flex align-items-center justify-content-between">
												<div class="listing-short-detail">
													<span class="label for-sale d-inline-flex mb-1">For Sale</span>
													<h4 class="listing-name mb-0"><a href="<?php echo home_url('/single-property-2/'); ?>">Agile Real Estate Group</a></h4>
													<div class="fr-can-rating">
														<i class="fas fa-star fs-xs filled"></i>
														<i class="fas fa-star fs-xs filled"></i>
														<i class="fas fa-star fs-xs filled"></i>
														<i class="fas fa-star fs-xs filled"></i>
														<i class="fas fa-star fs-xs"></i>
														<span class="reviews_text fs-sm text-muted ms-2">(34 Reviews)</span>
													</div>
													
												</div>
												<div class="list-price">
													<h6 class="listing-card-info-price text-main">$132M</h6>
												</div>
											</div>
										</div>
										
										<div class="price-features-wrapper">
											<div class="list-fx-features d-flex align-items-center justify-content-between mt-3 mb-1">
												<div class="listing-card d-flex align-items-center">
													<div class="square--25 text-muted-2 fs-sm circle gray-simple me-1"><i class="fa-solid fa-building-shield fs-xs"></i></div><span class="text-muted-2 fs-sm">3BHK</span>
												</div>
												<div class="listing-card d-flex align-items-center">
													<div class="square--25 text-muted-2 fs-sm circle gray-simple me-1"><i class="fa-solid fa-bed fs-xs"></i></div><span class="text-muted-2 fs-sm">3 Beds</span>
												</div>
												<div class="listing-card d-flex align-items-center">
													<div class="square--25 text-muted-2 fs-sm circle gray-simple me-1"><i class="fa-solid fa-clone fs-xs"></i></div><span class="text-muted-2 fs-sm">1800 SQFT</span>
												</div>
											</div>
										</div>
									
										<div class="listing-footer-wrapper">
											<div class="listing-locate">
												<span class="listing-location text-muted-2"><i class="fa-solid fa-location-pin me-1"></i>Quice Market, Canada</span>
											</div>
											<div class="listing-detail-btn">
												<a href="<?php echo home_url('/single-property-2/'); ?>" class="btn btn-sm px-4 fw-medium btn-main">View</a>
											</div>
										</div>
										
									</div>
									
								</div>
							</div>
							<!-- Single Property End -->

							<!-- Single Property Start -->
							<div class="col-xl-12 col-lg-12 col-md-12">
								<div class="property-listing property-1 border bg-white p-2 rounded">
										
									<div class="listing-img-wrapper">
										<a href="<?php echo home_url('/single-property-2/'); ?>">
											<img src="<?php echo get_template_directory_uri(); ?>/assets/img/p-3.jpg" class="img-fluid mx-auto rounded" alt="" />
										</a>
									</div>
									
									<div class="listing-content">
									
										<div class="listing-detail-wrapper-box">
											<div class="listing-detail-wrapper d-flex align-items-center justify-content-between">
												<div class="listing-short-detail">
													<span class="label for-sale d-inline-flex mb-1">For Sale</span>
													<h4 class="listing-name mb-0"><a href="<?php echo home_url('/single-property-2/'); ?>">Bluebell Real Estate</a></h4>
													<div class="fr-can-rating">
														<i class="fas fa-star fs-xs filled"></i>
														<i class="fas fa-star fs-xs filled"></i>
														<i class="fas fa-star fs-xs filled"></i>
														<i class="fas fa-star fs-xs filled"></i>
														<i class="fas fa-star fs-xs"></i>
														<span class="reviews_text fs-sm text-muted ms-2">(124 Reviews)</span>
													</div>
													
												</div>
												<div class="list-price">
													<h6 class="listing-card-info-price text-main">$127M</h6>
												</div>
											</div>
										</div>
										
										<div class="price-features-wrapper">
											<div class="list-fx-features d-flex align-items-center justify-content-between mt-3 mb-1">
												<div class="listing-card d-flex align-items-center">
													<div class="square--25 text-muted-2 fs-sm circle gray-simple me-1"><i class="fa-solid fa-building-shield fs-xs"></i></div><span class="text-muted-2 fs-sm">3BHK</span>
												</div>
												<div class="listing-card d-flex align-items-center">
													<div class="square--25 text-muted-2 fs-sm circle gray-simple me-1"><i class="fa-solid fa-bed fs-xs"></i></div><span class="text-muted-2 fs-sm">3 Beds</span>
												</div>
												<div class="listing-card d-flex align-items-center">
													<div class="square--25 text-muted-2 fs-sm circle gray-simple me-1"><i class="fa-solid fa-clone fs-xs"></i></div><span class="text-muted-2 fs-sm">1800 SQFT</span>
												</div>
											</div>
										</div>
									
										<div class="listing-footer-wrapper">
											<div class="listing-locate">
												<span class="listing-location text-muted-2"><i class="fa-solid fa-location-pin me-1"></i>Quice Market, Canada</span>
											</div>
											<div class="listing-detail-btn">
												<a href="<?php echo home_url('/single-property-2/'); ?>" class="btn btn-sm px-4 fw-medium btn-main">View</a>
											</div>
										</div>
										
									</div>
									
								</div>
							</div>
							<!-- Single Property End -->

							<!-- Single Property Start -->
							<div class="col-xl-12 col-lg-12 col-md-12">
								<div class="property-listing property-1 border bg-white p-2 rounded">
										
									<div class="listing-img-wrapper">
										<a href="<?php echo home_url('/single-property-2/'); ?>">
											<img src="<?php echo get_template_directory_uri(); ?>/assets/img/p-4.jpg" class="img-fluid mx-auto rounded" alt="" />
										</a>
									</div>
									
									<div class="listing-content">
									
										<div class="listing-detail-wrapper-box">
											<div class="listing-detail-wrapper d-flex align-items-center justify-content-between">
												<div class="listing-short-detail">
													<span class="label for-sale d-inline-flex mb-1">For Sale</span>
													<h4 class="listing-name mb-0"><a href="<?php echo home_url('/single-property-2/'); ?>">Strive Partners Realty</a></h4>
													<div class="fr-can-rating">
														<i class="fas fa-star fs-xs filled"></i>
														<i class="fas fa-star fs-xs filled"></i>
														<i class="fas fa-star fs-xs filled"></i>
														<i class="fas fa-star fs-xs filled"></i>
														<i class="fas fa-star fs-xs filled"></i>
														<span class="reviews_text fs-sm text-muted ms-2">(56 Reviews)</span>
													</div>
													
												</div>
												<div class="list-price">
													<h6 class="listing-card-info-price text-main">$132M</h6>
												</div>
											</div>
										</div>
										
										<div class="price-features-wrapper">
											<div class="list-fx-features d-flex align-items-center justify-content-between mt-3 mb-1">
												<div class="listing-card d-flex align-items-center">
													<div class="square--25 text-muted-2 fs-sm circle gray-simple me-1"><i class="fa-solid fa-building-shield fs-xs"></i></div><span class="text-muted-2 fs-sm">3BHK</span>
												</div>
												<div class="listing-card d-flex align-items-center">
													<div class="square--25 text-muted-2 fs-sm circle gray-simple me-1"><i class="fa-solid fa-bed fs-xs"></i></div><span class="text-muted-2 fs-sm">3 Beds</span>
												</div>
												<div class="listing-card d-flex align-items-center">
													<div class="square--25 text-muted-2 fs-sm circle gray-simple me-1"><i class="fa-solid fa-clone fs-xs"></i></div><span class="text-muted-2 fs-sm">1800 SQFT</span>
												</div>
											</div>
										</div>
									
										<div class="listing-footer-wrapper">
											<div class="listing-locate">
												<span class="listing-location text-muted-2"><i class="fa-solid fa-location-pin me-1"></i>Quice Market, Canada</span>
											</div>
											<div class="listing-detail-btn">
												<a href="<?php echo home_url('/single-property-2/'); ?>" class="btn btn-sm px-4 fw-medium btn-main">View</a>
											</div>
										</div>
										
									</div>
									
								</div>
							</div>
							<!-- Single Property End -->				
							
							
							<!-- Single Property Start -->
							<div class="col-xl-12 col-lg-12 col-md-12">
								<div class="property-listing property-1 border bg-white p-2 rounded">
										
									<div class="listing-img-wrapper">
										<a href="<?php echo home_url('/single-property-2/'); ?>">
											<img src="<?php echo get_template_directory_uri(); ?>/assets/img/p-14.jpg" class="img-fluid mx-auto rounded" alt="" />
										</a>
									</div>
									
									<div class="listing-content">
									
										<div class="listing-detail-wrapper-box">
											<div class="listing-detail-wrapper d-flex align-items-center justify-content-between">
												<div class="listing-short-detail">
													<span class="label for-sale d-inline-flex mb-1">For Sale</span>
													<h4 class="listing-name mb-0"><a href="<?php echo home_url('/single-property-2/'); ?>">Agile Real Estate Group</a></h4>
													<div class="fr-can-rating">
														<i class="fas fa-star fs-xs filled"></i>
														<i class="fas fa-star fs-xs filled"></i>
														<i class="fas fa-star fs-xs filled"></i>
														<i class="fas fa-star fs-xs filled"></i>
														<i class="fas fa-star fs-xs filled"></i>
														<span class="reviews_text fs-sm text-muted ms-2">(16 Reviews)</span>
													</div>
													
												</div>
												<div class="list-price">
													<h6 class="listing-card-info-price text-main">$117M</h6>
												</div>
											</div>
										</div>
										
										<div class="price-features-wrapper">
											<div class="list-fx-features d-flex align-items-center justify-content-between mt-3 mb-1">
												<div class="listing-card d-flex align-items-center">
													<div class="square--25 text-muted-2 fs-sm circle gray-simple me-1"><i class="fa-solid fa-building-shield fs-xs"></i></div><span class="text-muted-2 fs-sm">3BHK</span>
												</div>
												<div class="listing-card d-flex align-items-center">
													<div class="square--25 text-muted-2 fs-sm circle gray-simple me-1"><i class="fa-solid fa-bed fs-xs"></i></div><span class="text-muted-2 fs-sm">3 Beds</span>
												</div>
												<div class="listing-card d-flex align-items-center">
													<div class="square--25 text-muted-2 fs-sm circle gray-simple me-1"><i class="fa-solid fa-clone fs-xs"></i></div><span class="text-muted-2 fs-sm">1800 SQFT</span>
												</div>
											</div>
										</div>
									
										<div class="listing-footer-wrapper">
											<div class="listing-locate">
												<span class="listing-location text-muted-2"><i class="fa-solid fa-location-pin me-1"></i>Quice Market, Canada</span>
											</div>
											<div class="listing-detail-btn">
												<a href="<?php echo home_url('/single-property-2/'); ?>" class="btn btn-sm px-4 fw-medium btn-main">View</a>
											</div>
										</div>
										
									</div>
									
								</div>
							</div>
							<!-- Single Property End -->
							
							<!-- Single Property Start -->
							<div class="col-xl-12 col-lg-12 col-md-12">
								<div class="property-listing property-1 border bg-white p-2 rounded">
										
									<div class="listing-img-wrapper">
										<a href="<?php echo home_url('/single-property-2/'); ?>">
											<img src="<?php echo get_template_directory_uri(); ?>/assets/img/p-18.jpg" class="img-fluid mx-auto rounded" alt="" />
										</a>
									</div>
									
									<div class="listing-content">
									
										<div class="listing-detail-wrapper-box">
											<div class="listing-detail-wrapper d-flex align-items-center justify-content-between">
												<div class="listing-short-detail">
													<span class="label for-rent d-inline-flex mb-1">For Rent</span>
													<h4 class="listing-name mb-0"><a href="<?php echo home_url('/single-property-2/'); ?>">Nestled Real Estate</a></h4>
													<div class="fr-can-rating">
														<i class="fas fa-star fs-xs filled"></i>
														<i class="fas fa-star fs-xs filled"></i>
														<i class="fas fa-star fs-xs filled"></i>
														<i class="fas fa-star fs-xs filled"></i>
														<i class="fas fa-star fs-xs filled"></i>
														<span class="reviews_text fs-sm text-muted ms-2">(123 Reviews)</span>
													</div>
													
												</div>
												<div class="list-price">
													<h6 class="listing-card-info-price text-main">$7,500</h6>
												</div>
											</div>
										</div>
										
										<div class="price-features-wrapper">
											<div class="list-fx-features d-flex align-items-center justify-content-between mt-3 mb-1">
												<div class="listing-card d-flex align-items-center">
													<div class="square--25 text-muted-2 fs-sm circle gray-simple me-1"><i class="fa-solid fa-building-shield fs-xs"></i></div><span class="text-muted-2 fs-sm">3BHK</span>
												</div>
												<div class="listing-card d-flex align-items-center">
													<div class="square--25 text-muted-2 fs-sm circle gray-simple me-1"><i class="fa-solid fa-bed fs-xs"></i></div><span class="text-muted-2 fs-sm">3 Beds</span>
												</div>
												<div class="listing-card d-flex align-items-center">
													<div class="square--25 text-muted-2 fs-sm circle gray-simple me-1"><i class="fa-solid fa-clone fs-xs"></i></div><span class="text-muted-2 fs-sm">1800 SQFT</span>
												</div>
											</div>
										</div>
									
										<div class="listing-footer-wrapper">
											<div class="listing-locate">
												<span class="listing-location text-muted-2"><i class="fa-solid fa-location-pin me-1"></i>Quice Market, Canada</span>
											</div>
											<div class="listing-detail-btn">
												<a href="<?php echo home_url('/single-property-2/'); ?>" class="btn btn-sm px-4 fw-medium btn-main">View</a>
											</div>
										</div>
										
									</div>
									
								</div>
							</div>
							<!-- Single Property End -->
							
							<!-- Single Property Start -->
							<div class="col-xl-12 col-lg-12 col-md-12">
								<div class="property-listing property-1 border bg-white p-2 rounded">
										
									<div class="listing-img-wrapper">
										<a href="<?php echo home_url('/single-property-2/'); ?>">
											<img src="<?php echo get_template_directory_uri(); ?>/assets/img/p-16.jpg" class="img-fluid mx-auto rounded" alt="" />
										</a>
									</div>
									
									<div class="listing-content">
									
										<div class="listing-detail-wrapper-box">
											<div class="listing-detail-wrapper d-flex align-items-center justify-content-between">
												<div class="listing-short-detail">
													<span class="label for-sale d-inline-flex mb-1">For Sale</span>
													<h4 class="listing-name mb-0"><a href="<?php echo home_url('/single-property-2/'); ?>">Flow Group Real Estate</a></h4>
													<div class="fr-can-rating">
														<i class="fas fa-star fs-xs filled"></i>
														<i class="fas fa-star fs-xs filled"></i>
														<i class="fas fa-star fs-xs filled"></i>
														<i class="fas fa-star fs-xs filled"></i>
														<i class="fas fa-star fs-xs filled"></i>
														<span class="reviews_text fs-sm text-muted ms-2">(42 Reviews)</span>
													</div>
													
												</div>
												<div class="list-price">
													<h6 class="listing-card-info-price text-main">$112M</h6>
												</div>
											</div>
										</div>
										
										<div class="price-features-wrapper">
											<div class="list-fx-features d-flex align-items-center justify-content-between mt-3 mb-1">
												<div class="listing-card d-flex align-items-center">
													<div class="square--25 text-muted-2 fs-sm circle gray-simple me-1"><i class="fa-solid fa-building-shield fs-xs"></i></div><span class="text-muted-2 fs-sm">3BHK</span>
												</div>
												<div class="listing-card d-flex align-items-center">
													<div class="square--25 text-muted-2 fs-sm circle gray-simple me-1"><i class="fa-solid fa-bed fs-xs"></i></div><span class="text-muted-2 fs-sm">3 Beds</span>
												</div>
												<div class="listing-card d-flex align-items-center">
													<div class="square--25 text-muted-2 fs-sm circle gray-simple me-1"><i class="fa-solid fa-clone fs-xs"></i></div><span class="text-muted-2 fs-sm">1800 SQFT</span>
												</div>
											</div>
										</div>
									
										<div class="listing-footer-wrapper">
											<div class="listing-locate">
												<span class="listing-location text-muted-2"><i class="fa-solid fa-location-pin me-1"></i>Quice Market, Canada</span>
											</div>
											<div class="listing-detail-btn">
												<a href="<?php echo home_url('/single-property-2/'); ?>" class="btn btn-sm px-4 fw-medium btn-main">View</a>
											</div>
										</div>
										
									</div>
									
								</div>
							</div>
							<!-- Single Property End -->
							
						</div>
						
						<!-- Pagination -->
						<div class="row">
							<div class="col-lg-12 col-md-12 col-sm-12">
								<ul class="pagination p-center">
									<li class="page-item">
									  <a class="page-link" href="#" aria-label="Previous">
										<i class="fa-solid fa-arrow-left-long"></i>
										<span class="sr-only">Previous</span>
									  </a>
									</li>
									<li class="page-item"><a class="page-link" href="#">1</a></li>
									<li class="page-item"><a class="page-link" href="#">2</a></li>
									<li class="page-item active"><a class="page-link" href="#">3</a></li>
									<li class="page-item"><a class="page-link" href="#">...</a></li>
									<li class="page-item"><a class="page-link" href="#">18</a></li>
									<li class="page-item">
									  <a class="page-link" href="#" aria-label="Next">
										<i class="fa-solid fa-arrow-right-long"></i>
										<span class="sr-only">Next</span>
									  </a>
									</li>
								</ul>
							</div>
						</div>
						
					</div>
				</div>
				
			</div>
			<div class="clearfix"></div>
			<!-- ============================ Hero Banner End ================================== -->
			
			
			<!-- Log In Modal -->
			<div class="modal fade" id="login" tabindex="-1" role="dialog" aria-labelledby="registermodal" aria-hidden="true">
				<div class="modal-dialog modal-dialog-centered login-pop-form" role="document">
					<div class="modal-content" id="registermodal">
						<span class="mod-close" data-bs-dismiss="modal" aria-hidden="true">
							<span class="svg-icon text-main svg-icon-2hx">
								<svg width="32" height="32" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
									<rect opacity="0.3" x="2" y="2" width="20" height="20" rx="10" fill="currentColor"/>
									<rect x="7" y="15.3137" width="12" height="2" rx="1" transform="rotate(-45 7 15.3137)" fill="currentColor"/>
									<rect x="8.41422" y="7" width="12" height="2" rx="1" transform="rotate(45 8.41422 7)" fill="currentColor"/>
								</svg>
							</span>
						</span>
						<div class="modal-body">
							<h4 class="modal-header-title">Log In</h4>
							<div class="d-flex align-items-center justify-content-center mb-3">
								<span class="svg-icon text-main svg-icon-2hx">
									<svg width="80" height="80" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
										<path d="M15.8797 15.375C15.9797 15.075 15.9797 14.775 15.9797 14.475C15.9797 13.775 15.7797 13.075 15.4797 12.475C14.7797 11.275 13.4797 10.475 11.9797 10.475C11.7797 10.475 11.5797 10.475 11.3797 10.575C7.37971 11.075 4.67971 14.575 2.57971 18.075L10.8797 3.675C11.3797 2.775 12.5797 2.775 13.0797 3.675C13.1797 3.875 13.2797 3.975 13.3797 4.175C15.2797 7.575 16.9797 11.675 15.8797 15.375Z" fill="currentColor"/>
										<path opacity="0.3" d="M20.6797 20.6749C16.7797 20.6749 12.3797 20.275 9.57972 17.575C10.2797 18.075 11.0797 18.375 11.9797 18.375C13.4797 18.375 14.7797 17.5749 15.4797 16.2749C15.6797 15.9749 15.7797 15.675 15.7797 15.375V15.2749C16.8797 11.5749 15.2797 7.47495 13.2797 4.07495L21.6797 18.6749C22.2797 19.5749 21.6797 20.6749 20.6797 20.6749ZM8.67972 18.6749C8.17972 17.8749 7.97972 16.975 7.77972 15.975C7.37972 13.575 8.67972 10.775 11.3797 10.375C7.37972 10.875 4.67972 14.375 2.57972 17.875C2.47972 18.075 2.27972 18.375 2.17972 18.575C1.67972 19.475 2.27972 20.475 3.27972 20.475H10.3797C9.67972 20.175 9.07972 19.3749 8.67972 18.6749Z" fill="currentColor"/>
									</svg>
								</span>
							</div>
							<div class="login-form">
								<form>
								
									<div class="form-floating mb-3">
										<input type="email" class="form-control" placeholder="name@example.com">
										<label>Email address</label>
									</div>
									
									<div class="form-floating mb-3">
									  <input type="password" class="form-control" placeholder="Password">
									  <label>Password</label>
									</div>
									
									<div class="form-group mb-3">
										<div class="d-flex align-items-center justify-content-between">
											<div class="flex-shrink-0 flex-first">
												<div class="form-check form-check-inline">
													<input class="form-check-input" type="checkbox" id="save-pass" value="option1">
													<label class="form-check-label" for="save-pass">Save Password</label>
												</div>	
											</div>
											<div class="flex-shrink-0 flex-first">
												<a href="#" class="link fw-medium">Forgot Password?</a>	
											</div>
										</div>
									</div>
									
									<div class="form-group">
										<button type="button" class="btn btn-lg btn-main fw-medium full-width rounded-2">LogIn</button>
									</div>
								
								</form>
							</div>
							<div class="modal-divider"><span>Or login via</span></div>
							<div class="social-login mb-3">
								<ul>
									<li><a href="#" class="btn connect-fb"><i class="bi bi-facebook"></i>Facebook</a></li>
									<li><a href="#" class="btn connect-google"><i class="bi bi-google"></i>Google+</a></li>
								</ul>
							</div>
							<div class="text-center">
								<p class="mt-4">Have't Any Account? <a href="create-account.html" class="link fw-medium">Acreate An Account</a></p>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!-- End Modal -->
			
			<a id="back2Top" class="top-scroll" title="Back to top" href="#"><i class="ti-arrow-up"></i></a>
			

		</div>
		<!-- ============================================================== -->
		<!-- End Wrapper -->
		<!-- ============================================================== -->


		<!-- ============================================================== -->
		<!-- All Jquery -->
		<!-- ============================================================== -->
		<script src="<?php echo get_template_directory_uri(); ?>/assets/js/jquery.min.html"></script>
		<script src="<?php echo get_template_directory_uri(); ?>/assets/js/popper.min.html"></script>
		<script src="<?php echo get_template_directory_uri(); ?>/assets/js/bootstrap.min.html"></script>
		<script src="<?php echo get_template_directory_uri(); ?>/assets/js/rangeslider.html"></script>
		<script src="<?php echo get_template_directory_uri(); ?>/assets/js/select2.min.html"></script>
		<script src="<?php echo get_template_directory_uri(); ?>/assets/js/jquery.magnific-popup.min.html"></script>
		<script src="<?php echo get_template_directory_uri(); ?>/assets/js/slick.html"></script>
		<script src="<?php echo get_template_directory_uri(); ?>/assets/js/slider-bg.html"></script>
		<script src="<?php echo get_template_directory_uri(); ?>/assets/js/lightbox.html"></script> 
		<script src="<?php echo get_template_directory_uri(); ?>/assets/js/imagesloaded.html"></script>
		 
		<script src="<?php echo get_template_directory_uri(); ?>/assets/js/custom.html"></script>
		
		<!-- Map -->
		<script src="https://maps.google.com/maps/api/js?key="></script>
		<script src="<?php echo get_template_directory_uri(); ?>/assets/js/map_infobox.html"></script>
		<script src="<?php echo get_template_directory_uri(); ?>/assets/js/markerclusterer.html"></script> 
		<script src="<?php echo get_template_directory_uri(); ?>/assets/js/map.html"></script>
		<!-- ============================================================== -->
		<!-- This page plugins -->

<?php get_footer(); ?>
