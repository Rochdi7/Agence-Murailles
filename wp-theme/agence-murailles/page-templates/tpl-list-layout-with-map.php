<?php
/**
 * Template Name: List Layout With Map
 * Direct conversion from list-layout-with-map.html
 *
 * @package Agence_Murailles
 */
get_header();
?>

<section class="bg-light">
			
				<div class="container">
					
					<div class="row">
						<div class="col-lg-12 col-md-12">
							<div class="filter_search_opt">
								<a href="javascript:void(0);" class="btn btn-dark full-width mb-4" onclick="openFilterSearch()">
									<span class="svg-icon text-light svg-icon-2hx me-2">
										<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
											<path d="M19.0759 3H4.72777C3.95892 3 3.47768 3.83148 3.86067 4.49814L8.56967 12.6949C9.17923 13.7559 9.5 14.9582 9.5 16.1819V19.5072C9.5 20.2189 10.2223 20.7028 10.8805 20.432L13.8805 19.1977C14.2553 19.0435 14.5 18.6783 14.5 18.273V13.8372C14.5 12.8089 14.8171 11.8056 15.408 10.964L19.8943 4.57465C20.3596 3.912 19.8856 3 19.0759 3Z" fill="currentColor"/>
										</svg>
									</span>Open Filter Option
								</a>
							</div>
						</div>
					</div>
					
					<div class="row">
					
						<!-- property Sidebar -->
						<div class="col-lg-4 col-md-12 col-sm-12">
							<div class="simple-sidebar sm-sidebar" id="filter_search"  style="left:0;">							
							
								<div class="search-sidebar_header">
									<h4 class="ssh_heading">Close Filter</h4>
									<button onclick="closeFilterSearch()" class="w3-bar-item w3-button w3-large"><i class="fa-regular fa-circle-xmark fs-5 text-muted-2"></i></button>
								</div>
								
								<!-- Find New Property -->
								<div class="sidebar-widgets">
									
									<!-- Find New Property -->
									<div class="sidebar-widgets">
										
										<div class="form-group simple">
											<div class="input-with-icon">
												<input type="text" class="form-control" placeholder="Neighborhood">
												<i class="fa-solid fa-magnifying-glass"></i>
											</div>
										</div>
										
										<div class="form-group simple">
											<div class="input-with-icon">
												<input type="text" class="form-control" placeholder="Location">
												<i class="fa-solid fa-location-dot"></i>
											</div>
										</div>
										
										<div class="form-group simple">
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
										
										<div class="form-group simple">
											<div class="simple-input">
												<select id="status" class="form-control">
													<option value="">&nbsp;</option>
													<option value="1">For Rent</option>
													<option value="2">For Buy</option>
													<option value="3">For Sale</option>
												</select>
											</div>
										</div>
										
										<div class="form-group simple">
											<div class="simple-input">
												<select id="minprice" class="form-control">
													<option value="">&nbsp;</option>
													<option value="1">Less Then $1000</option>
													<option value="2">$1000 - $2000</option>
													<option value="3">$2000 - $3000</option>
													<option value="4">$3000 - $4000</option>
													<option value="5">Above $5000</option>
												</select>
											</div>
										</div>
										
										<div class="form-group simple">
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
										
										<div class="form-group simple">
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
										
										<div class="form-group simple">
											<div class="simple-input">
												<select id="garage" class="form-control">
													<option value="">&nbsp;</option>
													<option value="1">Any Type</option>
													<option value="2">Yes</option>
													<option value="3">No</option>
												</select>
											</div>
										</div>
										
										<div class="form-group simple">
											<div class="simple-input">
												<select id="built" class="form-control">
													<option value="">&nbsp;</option>
													<option value="1">2010</option>
													<option value="2">2011</option>
													<option value="3">2012</option>
													<option value="4">2013</option>
													<option value="5">2014</option>
													<option value="6">2015</option>
													<option value="7">2016</option>
												</select>
											</div>
										</div>
										
										<div class="row">
											<div class="col-lg-6 col-md-6 col-sm-6">
												<div class="form-group">
													<div class="simple-input">
														<input type="text" class="form-control" placeholder="Min Area">
													</div>
												</div>
											</div>
											<div class="col-lg-6 col-md-6 col-sm-6">
												<div class="form-group">
													<div class="simple-input">
														<input type="text" class="form-control" placeholder="Max Area">
													</div>
												</div>
											</div>
										</div>
										
										<div class="row">
											<div class="col-lg-12 col-md-12 col-sm-12 pt-4 pb-4">
												<h6>Choose Price</h6>
												<div class="rg-slider">
													 <input type="text" class="js-range-slider" name="my_range" value="" />
												</div>
											</div>
										</div>									

										<div class="ameneties-features">
											<div class="form-group" id="module">
												<a role="button" class="" data-bs-toggle="collapse" href="#advance-search" aria-expanded="true" aria-controls="advance-search"></a>
											</div>
											<div class="collapse" id="advance-search" aria-expanded="false" role="banner">
												<ul class="no-ul-list">
													<li>
														<div class="form-check">
															<input id="a-1" class="form-check-input" name="a-1" type="checkbox">
															<label for="a-1" class="form-check-label">Air Condition</label>
														</div>	
													</li>
													<li>
														<div class="form-check">
															<input id="a-2" class="form-check-input" name="a-2" type="checkbox">
															<label for="a-2" class="form-check-label">Bedding</label>
														</div>
													</li>
													<li>
														<div class="form-check">
															<input id="a-3" class="form-check-input" name="a-3" type="checkbox">
															<label for="a-3" class="form-check-label">Heating</label>
														</div>
													</li>
													<li>
														<div class="form-check">
															<input id="a-4" class="form-check-input" name="a-4" type="checkbox">
															<label for="a-4" class="form-check-label">Internet</label>
														</div>
													</li>
													<li>
														<div class="form-check">
															<input id="a-5" class="form-check-input" name="a-5" type="checkbox">
															<label for="a-5" class="form-check-label">Microwave</label>
														</div>
													</li>
													<li>
														<div class="form-check">
															<input id="a-6" class="form-check-input" name="a-6" type="checkbox">
															<label for="a-6" class="form-check-label">Smoking Allow</label>
														</div>
													</li>
													<li>
														<div class="form-check">
															<input id="a-7" class="form-check-input" name="a-7" type="checkbox">
															<label for="a-7" class="form-check-label">Terrace</label>
														</div>
													</li>
													<li>
														<div class="form-check">
															<input id="a-8" class="form-check-input" name="a-8" type="checkbox">
															<label for="a-8" class="form-check-label">Balcony</label>
														</div>
													</li>
													<li>
														<div class="form-check">
															<input id="a-9" class="form-check-input" name="a-9" type="checkbox">
															<label for="a-9" class="form-check-label">Icon</label>
														</div>
													</li>
												</ul>
											</div>
											
											<button class="btn btn-primary fw-medium rounded full-width">Find New Home</button>
										
										</div>
									
									</div>							
								</div>
							</div>
							<!-- Sidebar End -->
						
						</div>
						
						<div class="col-lg-8 col-md-12 list-layout">
							
							<div class="row justify-content-center">
								<div class="col-lg-12 col-md-12">
									<div class="item-shorting-box">
										<div class="item-shorting clearfix">
											<div class="left-column pull-left"><h4 class="fs-6 m-0">Found 1-10 of 142 Results</h4></div>
										</div>
										<div class="item-shorting-box-right">
											<div class="shorting-by">
												<select id="shorty" class="form-control">
													<option value="">&nbsp;</option>
													<option value="1">Low Price</option>
													<option value="2">High Price</option>
													<option value="3">Most Popular</option>
												</select>
											</div>
											<ul class="shorting-list">
												<li>
													<a href="<?php echo home_url('/grid-layout-with-sidebar/'); ?>" class="w-12 h-12">
														<span class="svg-icon text-muted-2 svg-icon-2hx">
															<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
																<rect x="2" y="2" width="9" height="9" rx="2" fill="currentColor"/>
																<rect opacity="0.3" x="13" y="2" width="9" height="9" rx="2" fill="currentColor"/>
																<rect opacity="0.3" x="13" y="13" width="9" height="9" rx="2" fill="currentColor"/>
																<rect opacity="0.3" x="2" y="13" width="9" height="9" rx="2" fill="currentColor"/>
															</svg>
														</span>
													</a>
												</li>
												<li>
													<a href="listings-list-with-sidebar.html" class="active w-12 h-12">
														<span class="svg-icon text-seegreen svg-icon-2hx">
															<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
																<path opacity="0.3" d="M14 10V20C14 20.6 13.6 21 13 21H10C9.4 21 9 20.6 9 20V10C9 9.4 9.4 9 10 9H13C13.6 9 14 9.4 14 10ZM20 9H17C16.4 9 16 9.4 16 10V20C16 20.6 16.4 21 17 21H20C20.6 21 21 20.6 21 20V10C21 9.4 20.6 9 20 9Z" fill="currentColor"/>
																<path d="M7 10V20C7 20.6 6.6 21 6 21H3C2.4 21 2 20.6 2 20V10C2 9.4 2.4 9 3 9H6C6.6 9 7 9.4 7 10ZM21 6V3C21 2.4 20.6 2 20 2H3C2.4 2 2 2.4 2 3V6C2 6.6 2.4 7 3 7H20C20.6 7 21 6.6 21 6Z" fill="currentColor"/>
															</svg>
														</span>
													</a>
												</li>
											</ul>
										</div>
									</div>
								</div>
							</div>
							
							<div class="row justify-content-center">

								<!-- Single Property Start -->
								<div class="col-xl-12 col-lg-12 col-md-12">
									<div class="property-listing property-1 bg-white p-2 rounded">
											
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
									<div class="property-listing property-1 bg-white p-2 rounded">
											
										<div class="listing-img-wrapper">
											<a href="<?php echo home_url('/single-property-2/'); ?>">
												<img src="<?php echo get_template_directory_uri(); ?>/assets/img/p-2.jpg" class="img-fluid mx-auto rounded" alt="" />
											</a>
										</div>
										
										<div class="listing-content">
										
											<div class="listing-detail-wrapper-box">
												<div class="listing-detail-wrapper d-flex align-items-center justify-content-between">
													<div class="listing-short-detail">
														<span class="label for-rent d-inline-flex mb-1">For Rent</span>
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
														<h6 class="listing-card-info-price text-main">$10,500</h6>
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
									<div class="property-listing property-1 bg-white p-2 rounded">
											
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
									<div class="property-listing property-1 bg-white p-2 rounded">
											
										<div class="listing-img-wrapper">
											<a href="<?php echo home_url('/single-property-2/'); ?>">
												<img src="<?php echo get_template_directory_uri(); ?>/assets/img/p-4.jpg" class="img-fluid mx-auto rounded" alt="" />
											</a>
										</div>
										
										<div class="listing-content">
										
											<div class="listing-detail-wrapper-box">
												<div class="listing-detail-wrapper d-flex align-items-center justify-content-between">
													<div class="listing-short-detail">
														<span class="label for-rent d-inline-flex mb-1">For Rent</span>
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
									<div class="property-listing property-1 bg-white p-2 rounded">
											
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
									<div class="property-listing property-1 bg-white p-2 rounded">
											
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
									<div class="property-listing property-1 bg-white p-2 rounded">
											
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
			</section>
			<!-- ============================ All Property ================================== -->
			
			<!-- ============================ Call To Action ================================== -->
			<section class="bg-primary call-to-act-wrap">
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
