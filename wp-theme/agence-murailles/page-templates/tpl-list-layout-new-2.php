<?php
/**
 * Template Name: List Layout New 2
 * Direct conversion from list-layout-new-2.html
 *
 * @package Agence_Murailles
 */
get_header();
?>

<section class="gray-simple">
				<div class="container">
					
					<div class="row m-0">
						<div class="short_wraping border">
							<div class="row align-items-center">
							
								<div class="col-lg-2 col-md-6 col-sm-12  col-sm-6">
									<ul class="shorting_grid">
										<li>
											<a href="<?php echo home_url('/grid-layout-with-sidebar/'); ?>">
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
											<a href="list-layout-with-sidebar.html">
												<span class="svg-icon text-main svg-icon-2hx">
													<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
														<path opacity="0.3" d="M14 10V20C14 20.6 13.6 21 13 21H10C9.4 21 9 20.6 9 20V10C9 9.4 9.4 9 10 9H13C13.6 9 14 9.4 14 10ZM20 9H17C16.4 9 16 9.4 16 10V20C16 20.6 16.4 21 17 21H20C20.6 21 21 20.6 21 20V10C21 9.4 20.6 9 20 9Z" fill="currentColor"/>
														<path d="M7 10V20C7 20.6 6.6 21 6 21H3C2.4 21 2 20.6 2 20V10C2 9.4 2.4 9 3 9H6C6.6 9 7 9.4 7 10ZM21 6V3C21 2.4 20.6 2 20 2H3C2.4 2 2 2.4 2 3V6C2 6.6 2.4 7 3 7H20C20.6 7 21 6.6 21 6Z" fill="currentColor"/>
													</svg>
												</span>
											</a>
										</li>
									</ul>
								</div>
						
								<div class="col-lg-7 col-md-12 col-sm-12 order-lg-2 order-md-3 elco_bor col-sm-12">
									<div class="shorting_pagination">
										<div class="shorting_pagination_laft">
											<h5>Showing 1-25 of 72 results</h5>
										</div>
										<div class="shorting_pagination_right">
											<ul>
												<li><a href="javascript:void(0);" class="active">1</a></li>
												<li><a href="javascript:void(0);">2</a></li>
												<li><a href="javascript:void(0);">3</a></li>
												<li><a href="javascript:void(0);">4</a></li>
												<li><a href="javascript:void(0);">5</a></li>
												<li><a href="javascript:void(0);">6</a></li>
											</ul>
										</div>
									</div>
								</div>
						
								<div class="col-lg-3 col-md-6 col-sm-12 order-lg-3 order-md-2 col-sm-6 pe-0">
									<div class="shorting-right">
										<label class="me-2">Short By:</label>
										<div class="shorting-by border rounded">
											<select id="shorty" class="form-control rounded">
												<option value="">&nbsp;</option>
												<option value="1">Low Price</option>
												<option value="2">High Price</option>
												<option value="3">Most Popular</option>
											</select>
										</div>
									</div>
								</div>
								
							</div>
						</div>
					</div>
			
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
									
									<div class="search-inner p-0">
										
										<div class="filter-search-box">
											<div class="form-group">
												<div class="position-relative">
													<input type="text" class="form-control rounded-3 ps-5" placeholder="Search by space name…">
													<div class="position-absolute top-50 start-0 translate-middle-y ms-2">
														<span class="svg-icon text-main svg-icon-2hx">
															<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
																<rect opacity="0.5" x="17.0365" y="15.1223" width="8.15546" height="2" rx="1" transform="rotate(45 17.0365 15.1223)" fill="currentColor"/>
																<path d="M11 19C6.55556 19 3 15.4444 3 11C3 6.55556 6.55556 3 11 3C15.4444 3 19 6.55556 19 11C19 15.4444 15.4444 19 11 19ZM11 5C7.53333 5 5 7.53333 5 11C5 14.4667 7.53333 17 11 17C14.4667 17 17 14.4667 17 11C17 7.53333 14.4667 5 11 5Z" fill="currentColor"/>
															</svg>
														</span>	
													</div>
												</div>
											</div>
										</div>
										
										<div class="position-relative d-flex flex-xl-row flex-column align-items-center">
											<div class="verifyd-prt-block flex-fill full-width my-1 me-1">
												<div class="d-flex align-items-center justify-content-center justify-content-between border rounded-3 px-2 py-3">
													<div class="eliok-cliops d-flex align-items-center">
														<span class="svg-icon text-success svg-icon-2hx">
															<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
																<path opacity="0.3" d="M20.5543 4.37824L12.1798 2.02473C12.0626 1.99176 11.9376 1.99176 11.8203 2.02473L3.44572 4.37824C3.18118 4.45258 3 4.6807 3 4.93945V13.569C3 14.6914 3.48509 15.8404 4.4417 16.984C5.17231 17.8575 6.18314 18.7345 7.446 19.5909C9.56752 21.0295 11.6566 21.912 11.7445 21.9488C11.8258 21.9829 11.9129 22 12.0001 22C12.0872 22 12.1744 21.983 12.2557 21.9488C12.3435 21.912 14.4326 21.0295 16.5541 19.5909C17.8169 18.7345 18.8277 17.8575 19.5584 16.984C20.515 15.8404 21 14.6914 21 13.569V4.93945C21 4.6807 20.8189 4.45258 20.5543 4.37824Z" fill="currentColor"/>
																<path d="M10.5606 11.3042L9.57283 10.3018C9.28174 10.0065 8.80522 10.0065 8.51412 10.3018C8.22897 10.5912 8.22897 11.0559 8.51412 11.3452L10.4182 13.2773C10.8099 13.6747 11.451 13.6747 11.8427 13.2773L15.4859 9.58051C15.771 9.29117 15.771 8.82648 15.4859 8.53714C15.1948 8.24176 14.7183 8.24176 14.4272 8.53714L11.7002 11.3042C11.3869 11.6221 10.874 11.6221 10.5606 11.3042Z" fill="currentColor"/>
															</svg>
														</span><span class="text-muted-2 fw-medium ms-1">Verified</span>
													</div>
													<div class="form-check form-switch">
														<input class="form-check-input" type="checkbox" role="switch" id="flexSwitchCheckChecked" checked>
														<label class="form-check-label" for="flexSwitchCheckChecked"></label>
													</div>
												</div>
											</div>
											
											<div class="super-agt-block flex-fill full-width my-1 ms-1">
												<div class="d-flex align-items-center justify-content-center justify-content-between border rounded-3 px-2 py-3">
													<div class="eliok-cliops d-flex align-items-center">
														<span class="svg-icon text-warning svg-icon-2hx">
															<svg xmlns="http://www.w3.org/2000/svg" width="24px" height="24px" viewBox="0 0 24 24">
																<path d="M10.0813 3.7242C10.8849 2.16438 13.1151 2.16438 13.9187 3.7242V3.7242C14.4016 4.66147 15.4909 5.1127 16.4951 4.79139V4.79139C18.1663 4.25668 19.7433 5.83365 19.2086 7.50485V7.50485C18.8873 8.50905 19.3385 9.59842 20.2758 10.0813V10.0813C21.8356 10.8849 21.8356 13.1151 20.2758 13.9187V13.9187C19.3385 14.4016 18.8873 15.491 19.2086 16.4951V16.4951C19.7433 18.1663 18.1663 19.7433 16.4951 19.2086V19.2086C15.491 18.8873 14.4016 19.3385 13.9187 20.2758V20.2758C13.1151 21.8356 10.8849 21.8356 10.0813 20.2758V20.2758C9.59842 19.3385 8.50905 18.8873 7.50485 19.2086V19.2086C5.83365 19.7433 4.25668 18.1663 4.79139 16.4951V16.4951C5.1127 15.491 4.66147 14.4016 3.7242 13.9187V13.9187C2.16438 13.1151 2.16438 10.8849 3.7242 10.0813V10.0813C4.66147 9.59842 5.1127 8.50905 4.79139 7.50485V7.50485C4.25668 5.83365 5.83365 4.25668 7.50485 4.79139V4.79139C8.50905 5.1127 9.59842 4.66147 10.0813 3.7242V3.7242Z" fill="currentColor"/>
																<path d="M14.8563 9.1903C15.0606 8.94984 15.3771 8.9385 15.6175 9.14289C15.858 9.34728 15.8229 9.66433 15.6185 9.9048L11.863 14.6558C11.6554 14.9001 11.2876 14.9258 11.048 14.7128L8.47656 12.4271C8.24068 12.2174 8.21944 11.8563 8.42911 11.6204C8.63877 11.3845 8.99996 11.3633 9.23583 11.5729L11.3706 13.4705L14.8563 9.1903Z" fill="white"/>
															</svg>
														</span><span class="text-muted-2 fw-medium ms-1">SuperAgent</span>
													</div>
													<div class="form-check form-switch">
														<input class="form-check-input" type="checkbox" role="switch" id="flexSwitchCheckChecked" checked>
														<label class="form-check-label" for="flexSwitchCheckChecked"></label>
													</div>
												</div>
												
											</div>
										</div>
										
										<div class="filter_wraps">
											
											<!-- Single Search -->
											<div class="single_search_boxed">
												<div class="widget-boxed-header">
													<h4>
														<a href="#where" data-bs-toggle="collapse" aria-expanded="false" role="button" class="collapsed">Where<span class="selected">Chicago</span></a>
													</h4>
													
												</div>
												<div class="widget-boxed-body collapse" id="where" data-parent="#where">
													<div class="side-list no-border">
														<!-- Single Filter Card -->
														<div class="single_filter_card">
															<div class="card-body pt-0">
																<div class="inner_widget_link">
																	<ul class="no-ul-list filter-list">
																		<li class="form-check">
																			<input id="b1" class="form-check-input" name="where" type="radio">
																			<label for="b1" class="form-check-label">Atlanta</label>
																		</li>
																		<li class="form-check">
																			<input id="b2" class="form-check-input" name="where" type="radio">
																			<label for="b2" class="form-check-label">Austin</label>
																		</li>
																		<li class="form-check">
																			<input id="b3" class="form-check-input" name="where" type="radio">
																			<label for="b3" class="form-check-label">Boston</label>
																		</li>
																		<li class="form-check">
																			<input id="b4" class="form-check-input" name="where" type="radio" checked>
																			<label for="b4" class="form-check-label">Chicago</label>
																		</li>
																		<li class="form-check">
																			<input id="b5" class="form-check-input" name="where" type="radio">
																			<label for="b5" class="form-check-label">Dallas</label>
																		</li>
																		<li class="form-check">
																			<input id="b6" class="form-check-input" name="where" type="radio">
																			<label for="b6" class="form-check-label">Denver</label>
																		</li>
																		<li class="form-check">
																			<input id="b7" class="form-check-input" name="where" type="radio">
																			<label for="b7" class="form-check-label">Houston</label>
																		</li>
																		<li class="form-check">
																			<input id="b8" class="form-check-input" name="where" type="radio">
																			<label for="b8" class="form-check-label">Jacksonville</label>
																		</li>
																		<li class="form-check">
																			<input id="b9" class="form-check-input" name="where" type="radio">
																			<label for="b9" class="form-check-label">Los Angeles</label>
																		</li>
																	</ul>
																</div>
															</div>
														</div>
													</div>
												</div>
											</div>
											
											<!-- Single Search -->
											<div class="single_search_boxed">
												<div class="widget-boxed-header">
													<h4>
														<a href="#fptype" data-bs-toggle="collapse" aria-expanded="false" role="button" class="collapsed">Property Types<span class="selected">Apartment</span></a>
													</h4>
													
												</div>
												<div class="widget-boxed-body collapse" id="fptype" data-parent="#fptype">
													<div class="side-list no-border">
														<!-- Single Filter Card -->
														<div class="single_filter_card">
															<div class="card-body pt-0">
																<div class="inner_widget_link">
																	<ul class="no-ul-list filter-list">
																		<li class="form-check">
																			<input id="c1" class="form-check-input" name="ptype" type="radio">
																			<label for="c1" class="form-check-label">House</label>
																		</li>
																		<li class="form-check">
																			<input id="c2" class="form-check-input" name="ptype" type="radio">
																			<label for="c2" class="form-check-label">Office Desk</label>
																		</li>
																		<li class="form-check">
																			<input id="c3" class="form-check-input" name="ptype" type="radio">
																			<label for="c3" class="form-check-label">Villa</label>
																		</li>
																		<li class="form-check">
																			<input id="c4" class="form-check-input" name="ptype" type="radio" checked>
																			<label for="c4" class="form-check-label">Apartment</label>
																		</li>
																		<li class="form-check">
																			<input id="c5" class="form-check-input" name="ptype" type="radio">
																			<label for="c5" class="form-check-label">Condo</label>
																		</li>
																		<li class="form-check">
																			<input id="c6" class="form-check-input" name="ptype" type="radio">
																			<label for="c6" class="form-check-label">Denver</label>
																		</li>
																		<li class="form-check">
																			<input id="c7" class="form-check-input" name="ptype" type="radio">
																			<label for="c7" class="form-check-label">Studio</label>
																		</li>
																	</ul>
																</div>
															</div>
														</div>
													</div>
												</div>
											</div>
											
											<!-- Single Search -->
											<div class="single_search_boxed">
												<div class="widget-boxed-header">
													<h4>
														<a href="#fbedrooms" data-bs-toggle="collapse" aria-expanded="false" role="button" class="collapsed">Bedrooms<span class="selected">2 Beds</span></a>
													</h4>
													
												</div>
												<div class="widget-boxed-body collapse" id="fbedrooms" data-parent="#fbedrooms">
													<div class="side-list no-border">
														<!-- Single Filter Card -->
														<div class="single_filter_card">
															<div class="card-body pt-0">
																<div class="inner_widget_link">
																	<ul class="no-ul-list filter-list">
																		<li class="form-check">
																			<input id="a1" class="form-check-input" name="bed" type="radio">
																			<label for="a1" class="form-check-label">01 Bedrooms</label>
																		</li>
																		<li class="form-check">
																			<input id="a2" class="form-check-input" name="bed" type="radio">
																			<label for="a2" class="form-check-label">02 Bedrooms</label>
																		</li>
																		<li class="form-check">
																			<input id="a3" class="form-check-input" name="bed" type="radio">
																			<label for="a3" class="form-check-label">03 Bedrooms</label>
																		</li>
																		<li class="form-check">
																			<input id="a4" class="form-check-input" name="bed" type="radio" checked>
																			<label for="a4" class="form-check-label">04 Bedrooms</label>
																		</li>
																		<li class="form-check">
																			<input id="a5" class="form-check-input" name="bed" type="radio">
																			<label for="a5" class="form-check-label">05 Bedrooms</label>
																		</li>
																		<li class="form-check">
																			<input id="a6" class="form-check-input" name="bed" type="radio">
																			<label for="a6" class="form-check-label">06+ Bedrooms</label>
																		</li>
																	</ul>
																</div>
															</div>
														</div>
													</div>
												</div>
											</div>
											
											<!-- Single Search -->
											<div class="single_search_boxed">
												<div class="widget-boxed-header">
													<h4>
														<a href="#fprice" data-bs-toggle="collapse" aria-expanded="false" role="button" class="collapsed">Price Range<span class="selected">$10,000 - $15,000</span></a>
													</h4>
													
												</div>
												<div class="widget-boxed-body collapse" id="fprice" data-parent="#fprice">
													<div class="side-list no-border">
														<!-- Single Filter Card -->
														<div class="single_filter_card">
															<div class="card-body pt-0">
																<div class="inner_widget_link">
																	<ul class="no-ul-list filter-list">
																		<li class="form-check">
																			<input id="e1" class="form-check-input" name="prices" type="radio">
																			<label for="e1" class="form-check-label">Less Then $10,000</label>
																		</li>
																		<li class="form-check">
																			<input id="e2" class="form-check-input" name="prices" type="radio">
																			<label for="e2" class="form-check-label">$10,000 - $15,000</label>
																		</li>
																		<li class="form-check">
																			<input id="e3" class="form-check-input" name="prices" type="radio">
																			<label for="e3" class="form-check-label">$12,000 - $25,000</label>
																		</li>
																		<li class="form-check">
																			<input id="e4" class="form-check-input" name="prices" type="radio" checked>
																			<label for="e4" class="form-check-label">$30,000 - $35,000</label>
																		</li>
																		<li class="form-check">
																			<input id="e5" class="form-check-input" name="prices" type="radio">
																			<label for="e5" class="form-check-label">$40,000 - $45,000</label>
																		</li>
																		<li class="form-check">
																			<input id="e6" class="form-check-input" name="prices" type="radio">
																			<label for="e6" class="form-check-label">$50,000 - $55,000</label>
																		</li>
																		<li class="form-check">
																			<input id="e7" class="form-check-input" name="prices" type="radio">
																			<label for="e7" class="form-check-label">$60,000 - $65,000</label>
																		</li>
																	</ul>
																</div>
															</div>
														</div>
													</div>
												</div>
											</div>
											
											<!-- Single Search -->
											<div class="single_search_boxed">
												<div class="widget-boxed-header">
													<h4>
														<a href="#mood" data-bs-toggle="collapse" aria-expanded="false" role="button" class="collapsed">Mood<span class="selected">Any Mood</span></a>
													</h4>
													
												</div>
												<div class="widget-boxed-body collapse" id="mood" data-parent="#mood">
													<div class="side-list no-border">
														<!-- Single Filter Card -->
														<div class="single_filter_card">
															<div class="card-body pt-0">
																<div class="inner_widget_link">
																	<ul class="no-ul-list filter-list">
																		<li class="form-check">
																			<input id="f1" class="form-check-input" name="moods" type="radio">
																			<label for="f1" class="form-check-label">Any Mood</label>
																		</li>
																		<li class="form-check">
																			<input id="f2" class="form-check-input" name="moods" type="radio">
																			<label for="f2" class="form-check-label">Professional</label>
																		</li>
																		<li class="form-check">
																			<input id="f3" class="form-check-input" name="moods" type="radio">
																			<label for="f3" class="form-check-label">Essentials</label>
																		</li>
																		<li class="form-check">
																			<input id="f4" class="form-check-input" name="moods" type="radio" checked>
																			<label for="f4" class="form-check-label">Unique</label>
																		</li>
																		<li class="form-check">
																			<input id="f5" class="form-check-input" name="moods" type="radio">
																			<label for="f5" class="form-check-label">Lively</label>
																		</li>
																		<li class="form-check">
																			<input id="f6" class="form-check-input" name="moods" type="radio">
																			<label for="f6" class="form-check-label">Luxe</label>
																		</li>
																		<li class="form-check">
																			<input id="f7" class="form-check-input" name="moods" type="radio">
																			<label for="f7" class="form-check-label">Luxe</label>
																		</li>
																	</ul>
																</div>
															</div>
														</div>
													</div>
												</div>
											</div>
											
											<!-- Single Search -->
											<div class="single_search_boxed">
												<div class="widget-boxed-header">
													<h4>
														<a href="#ameneties" data-bs-toggle="collapse" aria-expanded="false" role="button" class="collapsed">Ameneties<span class="selected">ADA Compliant</span></a>
													</h4>
													
												</div>
												<div class="widget-boxed-body collapse" id="ameneties" data-parent="#ameneties">
													<div class="side-list no-border">
														<!-- Single Filter Card -->
														<div class="single_filter_card">
															<div class="card-body pt-0">
																<div class="inner_widget_link">
																	<ul class="no-ul-list filter-list">
																		<li class="form-check">
																			<input id="g1" class="form-check-input" name="ADA" type="checkbox" checked>
																			<label for="g1" class="form-check-label">ADA Compliant</label>
																		</li>
																		<li class="form-check">
																			<input id="g2" class="form-check-input" name="Parking" type="checkbox">
																			<label for="g2" class="form-check-label">Parking Options</label>
																		</li>
																		<li class="form-check">
																			<input id="g3" class="form-check-input" name="Coffee" type="checkbox">
																			<label for="g3" class="form-check-label">Coffee Provided</label>
																		</li>
																		<li class="form-check">
																			<input id="g4" class="form-check-input" name="Mother" type="checkbox">
																			<label for="g4" class="form-check-label">Mother's Room</label>
																		</li>
																		<li class="form-check">
																			<input id="g5" class="form-check-input" name="Outdoor" type="checkbox">
																			<label for="g5" class="form-check-label">Outdoor Space</label>
																		</li>
																		<li class="form-check">
																			<input id="g6" class="form-check-input" name="Pet" type="checkbox">
																			<label for="g6" class="form-check-label">Pet Friendly</label>
																		</li>
																		<li class="form-check">
																			<input id="g7" class="form-check-input" name="Beauty" type="checkbox">
																			<label for="g7" class="form-check-label">Beauty & Message</label>
																		</li>
																		<li class="form-check">
																			<input id="g8" class="form-check-input" name="Bike" type="checkbox">
																			<label for="g8" class="form-check-label">Bike Parking</label>
																		</li>
																		<li class="form-check">
																			<input id="g9" class="form-check-input" name="Phone" type="checkbox">
																			<label for="g9" class="form-check-label">Phone Line</label>
																		</li>
																		<li class="form-check">
																			<input id="g11" class="form-check-input" name="Private" type="checkbox">
																			<label for="g11" class="form-check-label">Private Areas</label>
																		</li>
																		<li class="form-check">
																			<input id="g12" class="form-check-input" name="Free" type="checkbox">
																			<label for="g12" class="form-check-label">Free WiFi</label>
																		</li>
																		<li class="form-check">
																			<input id="g13" class="form-check-input" name="Swiming" type="checkbox">
																			<label for="g13" class="form-check-label">Swiming Pool</label>
																		</li>
																	</ul>
																</div>
															</div>
														</div>
													</div>
												</div>
											</div>
											
										</div>
										
										<div class="form-group filter_button">
											<button type="submit" class="btn btn btn-main rounded full-width">22 Results Show</button>
										</div>
									</div>							
								</div>
							</div>
							<!-- Sidebar End -->
						
						</div>

						
						<div class="col-lg-8 col-md-12 list-layout">
							
							<div class="row justify-content-center g-4">
						
								<!-- Single Property -->
								<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
									<div class="property-listing list_view style_new">
										
										<div class="listing-img-wrapper position-relative">
											<div class="like_unlike_prt">
												<label class="toggler toggler-danger"><input type="checkbox"><i class="fa fa-heart"></i></label>
											</div>
											<div class="position-absolute top-0 left-0 ms-3 mt-3 z-1">
												<div class="label verified-listing d-inline-flex align-items-center justify-content-center">
													<span class="svg-icon text-light svg-icon-2hx me-1">
														<svg width="14" height="14" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
															<path opacity="0.3" d="M20.5543 4.37824L12.1798 2.02473C12.0626 1.99176 11.9376 1.99176 11.8203 2.02473L3.44572 4.37824C3.18118 4.45258 3 4.6807 3 4.93945V13.569C3 14.6914 3.48509 15.8404 4.4417 16.984C5.17231 17.8575 6.18314 18.7345 7.446 19.5909C9.56752 21.0295 11.6566 21.912 11.7445 21.9488C11.8258 21.9829 11.9129 22 12.0001 22C12.0872 22 12.1744 21.983 12.2557 21.9488C12.3435 21.912 14.4326 21.0295 16.5541 19.5909C17.8169 18.7345 18.8277 17.8575 19.5584 16.984C20.515 15.8404 21 14.6914 21 13.569V4.93945C21 4.6807 20.8189 4.45258 20.5543 4.37824Z" fill="currentColor"></path>
															<path d="M14.854 11.321C14.7568 11.2282 14.6388 11.1818 14.4998 11.1818H14.3333V10.2272C14.3333 9.61741 14.1041 9.09378 13.6458 8.65628C13.1875 8.21876 12.639 8 12 8C11.361 8 10.8124 8.21876 10.3541 8.65626C9.89574 9.09378 9.66663 9.61739 9.66663 10.2272V11.1818H9.49999C9.36115 11.1818 9.24306 11.2282 9.14583 11.321C9.0486 11.4138 9 11.5265 9 11.6591V14.5227C9 14.6553 9.04862 14.768 9.14583 14.8609C9.24306 14.9536 9.36115 15 9.49999 15H14.5C14.6389 15 14.7569 14.9536 14.8542 14.8609C14.9513 14.768 15 14.6553 15 14.5227V11.6591C15.0001 11.5265 14.9513 11.4138 14.854 11.321ZM13.3333 11.1818H10.6666V10.2272C10.6666 9.87594 10.7969 9.57597 11.0573 9.32743C11.3177 9.07886 11.6319 8.9546 12 8.9546C12.3681 8.9546 12.6823 9.07884 12.9427 9.32743C13.2031 9.57595 13.3333 9.87594 13.3333 10.2272V11.1818Z" fill="currentColor"></path>
														</svg>
													</span>Verified
												</div>
											</div>
											<div class="list-img-slide">
												<div class="clior">
													<div><a href="<?php echo home_url('/single-property-1/'); ?>"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/p-1.jpg" class="img-fluid mx-auto" alt="" /></a></div>
													<div><a href="<?php echo home_url('/single-property-1/'); ?>"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/p-10.jpg" class="img-fluid mx-auto" alt="" /></a></div>
													<div><a href="<?php echo home_url('/single-property-1/'); ?>"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/p-15.jpg" class="img-fluid mx-auto" alt="" /></a></div>
												</div>
											</div>
										</div>
										
										<div class="list_view_flex">
										
											<div class="listing-detail-wrapper mt-1">
												<div class="listing-short-detail-wrap">
													<div class="_card_list_flex mb-2">
														<div class="_card_flex_01 d-flex align-items-center">
															<span class="label for-sale me-2">For Sell</span>
															<span class="label property-type">Building</span>
														</div>
														<div class="_card_flex_last">
															<h6 class="listing-info-price text-main fs-4 mb-0">$167M</h6>
														</div>
													</div>
													<div class="_card_list_flex">
														<div class="_card_flex_01">
															<h4 class="listing-name"><a href="<?php echo home_url('/single-property-1/'); ?>" class="prt-link-detail">4789 Resot Relly Market, Montreal Canada, HAQC445</a></h4>
														</div>
													</div>
												</div>
											</div>
											
											<div class="price-features-wrapper">
												<div class="list-fx-features d-flex align-items-center justify-content-between">
													<div class="listing-card d-flex align-items-center">
														<div class="square--30 text-muted-2 fs-sm circle gray-simple me-2"><i class="fa-solid fa-building-shield fs-sm"></i></div><span class="text-muted-2">3BHK</span>
													</div>
													<div class="listing-card d-flex align-items-center">
														<div class="square--30 text-muted-2 fs-sm circle gray-simple me-2"><i class="fa-solid fa-bed fs-sm"></i></div><span class="text-muted-2">3 Beds</span>
													</div>
													<div class="listing-card d-flex align-items-center">
														<div class="square--30 text-muted-2 fs-sm circle gray-simple me-2"><i class="fa-solid fa-clone fs-sm"></i></div><span class="text-muted-2">1800 SQFT</span>
													</div>
												</div>
											</div>
											
											<div class="listing-detail-footer pl-0">
												<div class="footer-first">
													<a href="#" data-bs-toggle="modal" data-bs-target="#availability" class="btn btn-md btn-main fw-medium" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Check Availability">
														<span class="svg-icon text-light svg-icon-2hx me-1">
															<svg width="19" height="19" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
																<rect opacity="0.3" x="2" y="2" width="20" height="20" rx="10" fill="currentColor"/>
																<path d="M10.4343 12.4343L8.75 10.75C8.33579 10.3358 7.66421 10.3358 7.25 10.75C6.83579 11.1642 6.83579 11.8358 7.25 12.25L10.2929 15.2929C10.6834 15.6834 11.3166 15.6834 11.7071 15.2929L17.25 9.75C17.6642 9.33579 17.6642 8.66421 17.25 8.25C16.8358 7.83579 16.1642 7.83579 15.75 8.25L11.5657 12.4343C11.2533 12.7467 10.7467 12.7467 10.4343 12.4343Z" fill="currentColor"/>
															</svg>
														</span>Availability
													</a>
													<a href="tel:4048651904" class="btn btn-md btn-light-main px-3 me-1" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Call Agent">
														<span class="svg-icon svg-icon-muted svg-icon-2hx">
															<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
																<path d="M6 21C6 21.6 6.4 22 7 22H17C17.6 22 18 21.6 18 21V20H6V21Z" fill="currentColor"/>
																<path d="M12 4C11.4 4 11 3.6 11 3V2H13V3C13 3.6 12.6 4 12 4Z" fill="currentColor"/>
																<path opacity="0.3" d="M18 3V20H6V3C6 2.4 6.4 2 7 2H17C17.6 2 18 2.4 18 3ZM16 11C16 8.5 13.7 6.49998 11.1 7.09998C9.60001 7.39998 8.50001 8.6001 8.10001 10.1001C7.80001 11.5001 8.2 12.7 9 13.7L11.2 16.2C11.6 16.6 12.3 16.6 12.7 16.2L14.9 13.7C15.6 13 16 12 16 11Z" fill="currentColor"/>
																<path d="M12 12.5C12.8284 12.5 13.5 11.8284 13.5 11C13.5 10.1716 12.8284 9.5 12 9.5C11.1716 9.5 10.5 10.1716 10.5 11C10.5 11.8284 11.1716 12.5 12 12.5Z" fill="currentColor"/>
														</svg>
														</span>
													</a>
													<a href="JavaScript:Void(0);" class="btn btn-md btn-light-main px-3 me-1" data-bs-toggle="modal" data-bs-target="#autho-message">
														<span class="svg-icon svg-icon-muted svg-icon-2hx">
															<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
																<path opacity="0.3" d="M21 19H3C2.4 19 2 18.6 2 18V6C2 5.4 2.4 5 3 5H21C21.6 5 22 5.4 22 6V18C22 18.6 21.6 19 21 19Z" fill="currentColor"/>
																<path d="M21 5H2.99999C2.69999 5 2.49999 5.10005 2.29999 5.30005L11.2 13.3C11.7 13.7 12.4 13.7 12.8 13.3L21.7 5.30005C21.5 5.10005 21.3 5 21 5Z" fill="currentColor"/>
															</svg>
														</span>
													</a>
													<a href="JavaScript:Void(0);" class="btn btn-md btn-light-main px-3" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Save property">
														<span class="svg-icon svg-icon-muted svg-icon-2hx">
															<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
																<path d="M18.3721 4.65439C17.6415 4.23815 16.8052 4 15.9142 4C14.3444 4 12.9339 4.73924 12.003 5.89633C11.0657 4.73913 9.66 4 8.08626 4C7.19611 4 6.35789 4.23746 5.62804 4.65439C4.06148 5.54462 3 7.26056 3 9.24232C3 9.81001 3.08941 10.3491 3.25153 10.8593C4.12155 14.9013 9.69287 20 12.0034 20C14.2502 20 19.875 14.9013 20.7488 10.8593C20.9109 10.3491 21 9.81001 21 9.24232C21.0007 7.26056 19.9383 5.54462 18.3721 4.65439Z" fill="currentColor"/>
															</svg>
														</span>
													</a>
												</div>
											</div>
										</div>
										
									</div>
								</div>
								<!-- End Single Property -->
								
								<!-- Single Property -->
								<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
									<div class="property-listing list_view style_new">
										
										<div class="listing-img-wrapper position-relative">
											<div class="like_unlike_prt">
												<label class="toggler toggler-danger"><input type="checkbox"><i class="fa fa-heart"></i></label>
											</div>
											<div class="position-absolute top-0 left-0 ms-3 mt-3 z-1">
												<div class="label super-agent d-inline-flex align-items-center justify-content-center">
													<span class="svg-icon text-light svg-icon-2hx me-1">
														<svg width="14" height="14" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
															<path opacity="0.3" d="M20.5543 4.37824L12.1798 2.02473C12.0626 1.99176 11.9376 1.99176 11.8203 2.02473L3.44572 4.37824C3.18118 4.45258 3 4.6807 3 4.93945V13.569C3 14.6914 3.48509 15.8404 4.4417 16.984C5.17231 17.8575 6.18314 18.7345 7.446 19.5909C9.56752 21.0295 11.6566 21.912 11.7445 21.9488C11.8258 21.9829 11.9129 22 12.0001 22C12.0872 22 12.1744 21.983 12.2557 21.9488C12.3435 21.912 14.4326 21.0295 16.5541 19.5909C17.8169 18.7345 18.8277 17.8575 19.5584 16.984C20.515 15.8404 21 14.6914 21 13.569V4.93945C21 4.6807 20.8189 4.45258 20.5543 4.37824Z" fill="currentColor"/>
															<path d="M12.0006 11.1542C13.1434 11.1542 14.0777 10.22 14.0777 9.0771C14.0777 7.93424 13.1434 7 12.0006 7C10.8577 7 9.92348 7.93424 9.92348 9.0771C9.92348 10.22 10.8577 11.1542 12.0006 11.1542Z" fill="currentColor"/>
															<path d="M15.5652 13.814C15.5108 13.6779 15.4382 13.551 15.3566 13.4331C14.9393 12.8163 14.2954 12.4081 13.5697 12.3083C13.479 12.2993 13.3793 12.3174 13.3067 12.3718C12.9257 12.653 12.4722 12.7981 12.0006 12.7981C11.5289 12.7981 11.0754 12.653 10.6944 12.3718C10.6219 12.3174 10.5221 12.2902 10.4314 12.3083C9.70578 12.4081 9.05272 12.8163 8.64456 13.4331C8.56293 13.551 8.49036 13.687 8.43595 13.814C8.40875 13.8684 8.41781 13.9319 8.44502 13.9864C8.51759 14.1133 8.60828 14.2403 8.68991 14.3492C8.81689 14.5215 8.95295 14.6757 9.10715 14.8208C9.23413 14.9478 9.37925 15.0657 9.52439 15.1836C10.2409 15.7188 11.1026 15.9999 11.9915 15.9999C12.8804 15.9999 13.7421 15.7188 14.4586 15.1836C14.6038 15.0748 14.7489 14.9478 14.8759 14.8208C15.021 14.6757 15.1661 14.5215 15.2931 14.3492C15.3838 14.2312 15.4655 14.1133 15.538 13.9864C15.5833 13.9319 15.5924 13.8684 15.5652 13.814Z" fill="currentColor"/>
														</svg>
													</span>SuperAgent
												</div>
											</div>
											<div class="list-img-slide">
												<div class="clior">
													<div><a href="<?php echo home_url('/single-property-1/'); ?>"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/p-2.jpg" class="img-fluid mx-auto" alt="" /></a></div>
													<div><a href="<?php echo home_url('/single-property-1/'); ?>"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/p-24.jpg" class="img-fluid mx-auto" alt="" /></a></div>
													<div><a href="<?php echo home_url('/single-property-1/'); ?>"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/p-13.jpg" class="img-fluid mx-auto" alt="" /></a></div>
												</div>
											</div>
										</div>
										
										<div class="list_view_flex">
										
											<div class="listing-detail-wrapper mt-1">
												<div class="listing-short-detail-wrap">
													<div class="_card_list_flex mb-2">
														<div class="_card_flex_01 d-flex align-items-center">
															<span class="label for-rent me-2">For Rent</span>
															<span class="label property-type">Family</span>
														</div>
														<div class="_card_flex_last">
															<h6 class="listing-info-price text-main fs-4 mb-0">$8,800</h6>
														</div>
													</div>
													<div class="_card_list_flex">
														<div class="_card_flex_01">
															<h4 class="listing-name"><a href="<?php echo home_url('/single-property-1/'); ?>" class="prt-link-detail">6898 Resot Relly Market, Montreal Canada, HAQC445</a></h4>
														</div>
													</div>
												</div>
											</div>
											
											<div class="price-features-wrapper">
												<div class="list-fx-features d-flex align-items-center justify-content-between">
													<div class="listing-card d-flex align-items-center">
														<div class="square--30 text-muted-2 fs-sm circle gray-simple me-2"><i class="fa-solid fa-building-shield fs-sm"></i></div><span class="text-muted-2">3BHK</span>
													</div>
													<div class="listing-card d-flex align-items-center">
														<div class="square--30 text-muted-2 fs-sm circle gray-simple me-2"><i class="fa-solid fa-bed fs-sm"></i></div><span class="text-muted-2">3 Beds</span>
													</div>
													<div class="listing-card d-flex align-items-center">
														<div class="square--30 text-muted-2 fs-sm circle gray-simple me-2"><i class="fa-solid fa-clone fs-sm"></i></div><span class="text-muted-2">1800 SQFT</span>
													</div>
												</div>
											</div>
											
											<div class="listing-detail-footer pl-0">
												<div class="footer-first">
													<a href="#" data-bs-toggle="modal" data-bs-target="#availability" class="btn btn-md btn-main fw-medium" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Check Availability">
														<span class="svg-icon text-light svg-icon-2hx me-1">
															<svg width="19" height="19" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
																<rect opacity="0.3" x="2" y="2" width="20" height="20" rx="10" fill="currentColor"/>
																<path d="M10.4343 12.4343L8.75 10.75C8.33579 10.3358 7.66421 10.3358 7.25 10.75C6.83579 11.1642 6.83579 11.8358 7.25 12.25L10.2929 15.2929C10.6834 15.6834 11.3166 15.6834 11.7071 15.2929L17.25 9.75C17.6642 9.33579 17.6642 8.66421 17.25 8.25C16.8358 7.83579 16.1642 7.83579 15.75 8.25L11.5657 12.4343C11.2533 12.7467 10.7467 12.7467 10.4343 12.4343Z" fill="currentColor"/>
															</svg>
														</span>Availability
													</a>
													<a href="tel:4048651904" class="btn btn-md btn-light-main px-3 me-1" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Call Agent">
														<span class="svg-icon svg-icon-muted svg-icon-2hx">
															<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
																<path d="M6 21C6 21.6 6.4 22 7 22H17C17.6 22 18 21.6 18 21V20H6V21Z" fill="currentColor"/>
																<path d="M12 4C11.4 4 11 3.6 11 3V2H13V3C13 3.6 12.6 4 12 4Z" fill="currentColor"/>
																<path opacity="0.3" d="M18 3V20H6V3C6 2.4 6.4 2 7 2H17C17.6 2 18 2.4 18 3ZM16 11C16 8.5 13.7 6.49998 11.1 7.09998C9.60001 7.39998 8.50001 8.6001 8.10001 10.1001C7.80001 11.5001 8.2 12.7 9 13.7L11.2 16.2C11.6 16.6 12.3 16.6 12.7 16.2L14.9 13.7C15.6 13 16 12 16 11Z" fill="currentColor"/>
																<path d="M12 12.5C12.8284 12.5 13.5 11.8284 13.5 11C13.5 10.1716 12.8284 9.5 12 9.5C11.1716 9.5 10.5 10.1716 10.5 11C10.5 11.8284 11.1716 12.5 12 12.5Z" fill="currentColor"/>
														</svg>
														</span>
													</a>
													<a href="JavaScript:Void(0);" class="btn btn-md btn-light-main px-3 me-1" data-bs-toggle="modal" data-bs-target="#autho-message">
														<span class="svg-icon svg-icon-muted svg-icon-2hx">
															<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
																<path opacity="0.3" d="M21 19H3C2.4 19 2 18.6 2 18V6C2 5.4 2.4 5 3 5H21C21.6 5 22 5.4 22 6V18C22 18.6 21.6 19 21 19Z" fill="currentColor"/>
																<path d="M21 5H2.99999C2.69999 5 2.49999 5.10005 2.29999 5.30005L11.2 13.3C11.7 13.7 12.4 13.7 12.8 13.3L21.7 5.30005C21.5 5.10005 21.3 5 21 5Z" fill="currentColor"/>
															</svg>
														</span>
													</a>
													<a href="JavaScript:Void(0);" class="btn btn-md btn-light-main px-3" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Save property">
														<span class="svg-icon svg-icon-muted svg-icon-2hx">
															<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
																<path d="M18.3721 4.65439C17.6415 4.23815 16.8052 4 15.9142 4C14.3444 4 12.9339 4.73924 12.003 5.89633C11.0657 4.73913 9.66 4 8.08626 4C7.19611 4 6.35789 4.23746 5.62804 4.65439C4.06148 5.54462 3 7.26056 3 9.24232C3 9.81001 3.08941 10.3491 3.25153 10.8593C4.12155 14.9013 9.69287 20 12.0034 20C14.2502 20 19.875 14.9013 20.7488 10.8593C20.9109 10.3491 21 9.81001 21 9.24232C21.0007 7.26056 19.9383 5.54462 18.3721 4.65439Z" fill="currentColor"/>
															</svg>
														</span>
													</a>
												</div>
											</div>
										</div>
										
									</div>
								</div>
								<!-- End Single Property -->
								
								<!-- Single Property -->
								<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
									<div class="property-listing list_view style_new">
										
										<div class="listing-img-wrapper position-relative">
											<div class="like_unlike_prt">
												<label class="toggler toggler-danger"><input type="checkbox"><i class="fa fa-heart"></i></label>
											</div>
											<div class="position-absolute top-0 left-0 ms-3 mt-3 z-1">
												<div class="label verified-listing d-inline-flex align-items-center justify-content-center">
													<span class="svg-icon text-light svg-icon-2hx me-1">
														<svg width="14" height="14" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
															<path opacity="0.3" d="M20.5543 4.37824L12.1798 2.02473C12.0626 1.99176 11.9376 1.99176 11.8203 2.02473L3.44572 4.37824C3.18118 4.45258 3 4.6807 3 4.93945V13.569C3 14.6914 3.48509 15.8404 4.4417 16.984C5.17231 17.8575 6.18314 18.7345 7.446 19.5909C9.56752 21.0295 11.6566 21.912 11.7445 21.9488C11.8258 21.9829 11.9129 22 12.0001 22C12.0872 22 12.1744 21.983 12.2557 21.9488C12.3435 21.912 14.4326 21.0295 16.5541 19.5909C17.8169 18.7345 18.8277 17.8575 19.5584 16.984C20.515 15.8404 21 14.6914 21 13.569V4.93945C21 4.6807 20.8189 4.45258 20.5543 4.37824Z" fill="currentColor"></path>
															<path d="M14.854 11.321C14.7568 11.2282 14.6388 11.1818 14.4998 11.1818H14.3333V10.2272C14.3333 9.61741 14.1041 9.09378 13.6458 8.65628C13.1875 8.21876 12.639 8 12 8C11.361 8 10.8124 8.21876 10.3541 8.65626C9.89574 9.09378 9.66663 9.61739 9.66663 10.2272V11.1818H9.49999C9.36115 11.1818 9.24306 11.2282 9.14583 11.321C9.0486 11.4138 9 11.5265 9 11.6591V14.5227C9 14.6553 9.04862 14.768 9.14583 14.8609C9.24306 14.9536 9.36115 15 9.49999 15H14.5C14.6389 15 14.7569 14.9536 14.8542 14.8609C14.9513 14.768 15 14.6553 15 14.5227V11.6591C15.0001 11.5265 14.9513 11.4138 14.854 11.321ZM13.3333 11.1818H10.6666V10.2272C10.6666 9.87594 10.7969 9.57597 11.0573 9.32743C11.3177 9.07886 11.6319 8.9546 12 8.9546C12.3681 8.9546 12.6823 9.07884 12.9427 9.32743C13.2031 9.57595 13.3333 9.87594 13.3333 10.2272V11.1818Z" fill="currentColor"></path>
														</svg>
													</span>Verified
												</div>
												<div class="label new-listing d-inline-flex align-items-center justify-content-center ms-1">
													<span class="svg-icon text-light svg-icon-2hx me-1">
														<svg width="14" height="14" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
															<path d="M19.0647 5.43757C19.3421 5.43757 19.567 5.21271 19.567 4.93534C19.567 4.65796 19.3421 4.43311 19.0647 4.43311C18.7874 4.43311 18.5625 4.65796 18.5625 4.93534C18.5625 5.21271 18.7874 5.43757 19.0647 5.43757Z" fill="currentColor"/>
															<path d="M20.0692 9.48884C20.3466 9.48884 20.5714 9.26398 20.5714 8.98661C20.5714 8.70923 20.3466 8.48438 20.0692 8.48438C19.7918 8.48438 19.567 8.70923 19.567 8.98661C19.567 9.26398 19.7918 9.48884 20.0692 9.48884Z" fill="currentColor"/>
															<path d="M12.0335 20.5714C15.6943 20.5714 18.9426 18.2053 20.1168 14.7338C20.1884 14.5225 20.1114 14.289 19.9284 14.161C19.746 14.034 19.5003 14.0418 19.3257 14.1821C18.2432 15.0546 16.9371 15.5156 15.5491 15.5156C12.2257 15.5156 9.48884 12.8122 9.48884 9.48886C9.48884 7.41079 10.5773 5.47137 12.3449 4.35752C12.5342 4.23832 12.6 4.00733 12.5377 3.79251C12.4759 3.57768 12.2571 3.42859 12.0335 3.42859C7.32556 3.42859 3.42857 7.29209 3.42857 12C3.42857 16.7079 7.32556 20.5714 12.0335 20.5714Z" fill="currentColor"/>
															<path d="M13.0379 7.47998C13.8688 7.47998 14.5446 8.15585 14.5446 8.98668C14.5446 9.26428 14.7693 9.48891 15.0469 9.48891C15.3245 9.48891 15.5491 9.26428 15.5491 8.98668C15.5491 8.15585 16.225 7.47998 17.0558 7.47998C17.3334 7.47998 17.558 7.25535 17.558 6.97775C17.558 6.70015 17.3334 6.47552 17.0558 6.47552C16.225 6.47552 15.5491 5.76616 15.5491 4.93534C15.5491 4.65774 15.3245 4.43311 15.0469 4.43311C14.7693 4.43311 14.5446 4.65774 14.5446 4.93534C14.5446 5.76616 13.8688 6.47552 13.0379 6.47552C12.7603 6.47552 12.5357 6.70015 12.5357 6.97775C12.5357 7.25535 12.7603 7.47998 13.0379 7.47998Z" fill="currentColor"/>
														</svg>
													</span>New
												</div>
											</div>
											<div class="list-img-slide">
												<div class="clior">
													<div><a href="<?php echo home_url('/single-property-1/'); ?>"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/p-3.jpg" class="img-fluid mx-auto" alt="" /></a></div>
													<div><a href="<?php echo home_url('/single-property-1/'); ?>"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/p-19.jpg" class="img-fluid mx-auto" alt="" /></a></div>
													<div><a href="<?php echo home_url('/single-property-1/'); ?>"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/p-18.jpg" class="img-fluid mx-auto" alt="" /></a></div>
												</div>
											</div>
										</div>
										
										<div class="list_view_flex">
										
											<div class="listing-detail-wrapper mt-1">
												<div class="listing-short-detail-wrap">
													<div class="_card_list_flex mb-2">
														<div class="_card_flex_01 d-flex align-items-center">
															<span class="label for-sale me-2">For Sell</span>
															<span class="label property-type">Condos</span>
														</div>
														<div class="_card_flex_last">
															<h6 class="listing-info-price text-main fs-4 mb-0">$156M</h6>
														</div>
													</div>
													<div class="_card_list_flex">
														<div class="_card_flex_01">
															<h4 class="listing-name"><a href="<?php echo home_url('/single-property-1/'); ?>" class="prt-link-detail">6987 Resot Relly Market, Montreal Canada, HAQC445</a></h4>
														</div>
													</div>
												</div>
											</div>
											
											<div class="price-features-wrapper">
												<div class="list-fx-features d-flex align-items-center justify-content-between">
													<div class="listing-card d-flex align-items-center">
														<div class="square--30 text-muted-2 fs-sm circle gray-simple me-2"><i class="fa-solid fa-building-shield fs-sm"></i></div><span class="text-muted-2">3BHK</span>
													</div>
													<div class="listing-card d-flex align-items-center">
														<div class="square--30 text-muted-2 fs-sm circle gray-simple me-2"><i class="fa-solid fa-bed fs-sm"></i></div><span class="text-muted-2">3 Beds</span>
													</div>
													<div class="listing-card d-flex align-items-center">
														<div class="square--30 text-muted-2 fs-sm circle gray-simple me-2"><i class="fa-solid fa-clone fs-sm"></i></div><span class="text-muted-2">1800 SQFT</span>
													</div>
												</div>
											</div>
											
											<div class="listing-detail-footer pl-0">
												<div class="footer-first">
													<a href="#" data-bs-toggle="modal" data-bs-target="#availability" class="btn btn-md btn-main fw-medium" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Check Availability">
														<span class="svg-icon text-light svg-icon-2hx me-1">
															<svg width="19" height="19" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
																<rect opacity="0.3" x="2" y="2" width="20" height="20" rx="10" fill="currentColor"/>
																<path d="M10.4343 12.4343L8.75 10.75C8.33579 10.3358 7.66421 10.3358 7.25 10.75C6.83579 11.1642 6.83579 11.8358 7.25 12.25L10.2929 15.2929C10.6834 15.6834 11.3166 15.6834 11.7071 15.2929L17.25 9.75C17.6642 9.33579 17.6642 8.66421 17.25 8.25C16.8358 7.83579 16.1642 7.83579 15.75 8.25L11.5657 12.4343C11.2533 12.7467 10.7467 12.7467 10.4343 12.4343Z" fill="currentColor"/>
															</svg>
														</span>Availability
													</a>
													<a href="tel:4048651904" class="btn btn-md btn-light-main px-3 me-1" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Call Agent">
														<span class="svg-icon svg-icon-muted svg-icon-2hx">
															<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
																<path d="M6 21C6 21.6 6.4 22 7 22H17C17.6 22 18 21.6 18 21V20H6V21Z" fill="currentColor"/>
																<path d="M12 4C11.4 4 11 3.6 11 3V2H13V3C13 3.6 12.6 4 12 4Z" fill="currentColor"/>
																<path opacity="0.3" d="M18 3V20H6V3C6 2.4 6.4 2 7 2H17C17.6 2 18 2.4 18 3ZM16 11C16 8.5 13.7 6.49998 11.1 7.09998C9.60001 7.39998 8.50001 8.6001 8.10001 10.1001C7.80001 11.5001 8.2 12.7 9 13.7L11.2 16.2C11.6 16.6 12.3 16.6 12.7 16.2L14.9 13.7C15.6 13 16 12 16 11Z" fill="currentColor"/>
																<path d="M12 12.5C12.8284 12.5 13.5 11.8284 13.5 11C13.5 10.1716 12.8284 9.5 12 9.5C11.1716 9.5 10.5 10.1716 10.5 11C10.5 11.8284 11.1716 12.5 12 12.5Z" fill="currentColor"/>
														</svg>
														</span>
													</a>
													<a href="JavaScript:Void(0);" class="btn btn-md btn-light-main px-3 me-1" data-bs-toggle="modal" data-bs-target="#autho-message">
														<span class="svg-icon svg-icon-muted svg-icon-2hx">
															<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
																<path opacity="0.3" d="M21 19H3C2.4 19 2 18.6 2 18V6C2 5.4 2.4 5 3 5H21C21.6 5 22 5.4 22 6V18C22 18.6 21.6 19 21 19Z" fill="currentColor"/>
																<path d="M21 5H2.99999C2.69999 5 2.49999 5.10005 2.29999 5.30005L11.2 13.3C11.7 13.7 12.4 13.7 12.8 13.3L21.7 5.30005C21.5 5.10005 21.3 5 21 5Z" fill="currentColor"/>
															</svg>
														</span>
													</a>
													<a href="JavaScript:Void(0);" class="btn btn-md btn-light-main px-3" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Save property">
														<span class="svg-icon svg-icon-muted svg-icon-2hx">
															<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
																<path d="M18.3721 4.65439C17.6415 4.23815 16.8052 4 15.9142 4C14.3444 4 12.9339 4.73924 12.003 5.89633C11.0657 4.73913 9.66 4 8.08626 4C7.19611 4 6.35789 4.23746 5.62804 4.65439C4.06148 5.54462 3 7.26056 3 9.24232C3 9.81001 3.08941 10.3491 3.25153 10.8593C4.12155 14.9013 9.69287 20 12.0034 20C14.2502 20 19.875 14.9013 20.7488 10.8593C20.9109 10.3491 21 9.81001 21 9.24232C21.0007 7.26056 19.9383 5.54462 18.3721 4.65439Z" fill="currentColor"/>
															</svg>
														</span>
													</a>
												</div>
											</div>
										</div>
										
									</div>
								</div>
								<!-- End Single Property -->
								
								<!-- Single Property -->
								<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
									<div class="property-listing list_view style_new">
										
										<div class="listing-img-wrapper position-relative">
											<div class="like_unlike_prt">
												<label class="toggler toggler-danger"><input type="checkbox"><i class="fa fa-heart"></i></label>
											</div>
											<div class="position-absolute top-0 left-0 ms-3 mt-3 z-1">
												<div class="label new-listing d-inline-flex align-items-center justify-content-center ms-1">
													<span class="svg-icon text-light svg-icon-2hx me-1">
														<svg width="14" height="14" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
															<path d="M19.0647 5.43757C19.3421 5.43757 19.567 5.21271 19.567 4.93534C19.567 4.65796 19.3421 4.43311 19.0647 4.43311C18.7874 4.43311 18.5625 4.65796 18.5625 4.93534C18.5625 5.21271 18.7874 5.43757 19.0647 5.43757Z" fill="currentColor"/>
															<path d="M20.0692 9.48884C20.3466 9.48884 20.5714 9.26398 20.5714 8.98661C20.5714 8.70923 20.3466 8.48438 20.0692 8.48438C19.7918 8.48438 19.567 8.70923 19.567 8.98661C19.567 9.26398 19.7918 9.48884 20.0692 9.48884Z" fill="currentColor"/>
															<path d="M12.0335 20.5714C15.6943 20.5714 18.9426 18.2053 20.1168 14.7338C20.1884 14.5225 20.1114 14.289 19.9284 14.161C19.746 14.034 19.5003 14.0418 19.3257 14.1821C18.2432 15.0546 16.9371 15.5156 15.5491 15.5156C12.2257 15.5156 9.48884 12.8122 9.48884 9.48886C9.48884 7.41079 10.5773 5.47137 12.3449 4.35752C12.5342 4.23832 12.6 4.00733 12.5377 3.79251C12.4759 3.57768 12.2571 3.42859 12.0335 3.42859C7.32556 3.42859 3.42857 7.29209 3.42857 12C3.42857 16.7079 7.32556 20.5714 12.0335 20.5714Z" fill="currentColor"/>
															<path d="M13.0379 7.47998C13.8688 7.47998 14.5446 8.15585 14.5446 8.98668C14.5446 9.26428 14.7693 9.48891 15.0469 9.48891C15.3245 9.48891 15.5491 9.26428 15.5491 8.98668C15.5491 8.15585 16.225 7.47998 17.0558 7.47998C17.3334 7.47998 17.558 7.25535 17.558 6.97775C17.558 6.70015 17.3334 6.47552 17.0558 6.47552C16.225 6.47552 15.5491 5.76616 15.5491 4.93534C15.5491 4.65774 15.3245 4.43311 15.0469 4.43311C14.7693 4.43311 14.5446 4.65774 14.5446 4.93534C14.5446 5.76616 13.8688 6.47552 13.0379 6.47552C12.7603 6.47552 12.5357 6.70015 12.5357 6.97775C12.5357 7.25535 12.7603 7.47998 13.0379 7.47998Z" fill="currentColor"/>
														</svg>
													</span>New
												</div>
											</div>
											<div class="list-img-slide">
												<div class="clior">
													<div><a href="<?php echo home_url('/single-property-1/'); ?>"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/p-4.jpg" class="img-fluid mx-auto" alt="" /></a></div>
													<div><a href="<?php echo home_url('/single-property-1/'); ?>"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/p-22.jpg" class="img-fluid mx-auto" alt="" /></a></div>
													<div><a href="<?php echo home_url('/single-property-1/'); ?>"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/p-17.jpg" class="img-fluid mx-auto" alt="" /></a></div>
												</div>
											</div>
										</div>
										
										<div class="list_view_flex">
										
											<div class="listing-detail-wrapper mt-1">
												<div class="listing-short-detail-wrap">
													<div class="_card_list_flex mb-2">
														<div class="_card_flex_01 d-flex align-items-center">
															<span class="label for-rent me-2">For Rent</span>
															<span class="label property-type">Villa</span>
														</div>
														<div class="_card_flex_last">
															<h6 class="listing-info-price text-main fs-4 mb-0">$9,700</h6>
														</div>
													</div>
													<div class="_card_list_flex">
														<div class="_card_flex_01">
															<h4 class="listing-name"><a href="<?php echo home_url('/single-property-1/'); ?>" class="prt-link-detail">7654 Resot Relly Market, Montreal Canada, HAQC445</a></h4>
														</div>
													</div>
												</div>
											</div>
											
											<div class="price-features-wrapper">
												<div class="list-fx-features d-flex align-items-center justify-content-between">
													<div class="listing-card d-flex align-items-center">
														<div class="square--30 text-muted-2 fs-sm circle gray-simple me-2"><i class="fa-solid fa-building-shield fs-sm"></i></div><span class="text-muted-2">3BHK</span>
													</div>
													<div class="listing-card d-flex align-items-center">
														<div class="square--30 text-muted-2 fs-sm circle gray-simple me-2"><i class="fa-solid fa-bed fs-sm"></i></div><span class="text-muted-2">3 Beds</span>
													</div>
													<div class="listing-card d-flex align-items-center">
														<div class="square--30 text-muted-2 fs-sm circle gray-simple me-2"><i class="fa-solid fa-clone fs-sm"></i></div><span class="text-muted-2">1800 SQFT</span>
													</div>
												</div>
											</div>
											
											<div class="listing-detail-footer pl-0">
												<div class="footer-first">
													<a href="#" data-bs-toggle="modal" data-bs-target="#availability" class="btn btn-md btn-main fw-medium" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Check Availability">
														<span class="svg-icon text-light svg-icon-2hx me-1">
															<svg width="19" height="19" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
																<rect opacity="0.3" x="2" y="2" width="20" height="20" rx="10" fill="currentColor"/>
																<path d="M10.4343 12.4343L8.75 10.75C8.33579 10.3358 7.66421 10.3358 7.25 10.75C6.83579 11.1642 6.83579 11.8358 7.25 12.25L10.2929 15.2929C10.6834 15.6834 11.3166 15.6834 11.7071 15.2929L17.25 9.75C17.6642 9.33579 17.6642 8.66421 17.25 8.25C16.8358 7.83579 16.1642 7.83579 15.75 8.25L11.5657 12.4343C11.2533 12.7467 10.7467 12.7467 10.4343 12.4343Z" fill="currentColor"/>
															</svg>
														</span>Availability
													</a>
													<a href="tel:4048651904" class="btn btn-md btn-light-main px-3 me-1" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Call Agent">
														<span class="svg-icon svg-icon-muted svg-icon-2hx">
															<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
																<path d="M6 21C6 21.6 6.4 22 7 22H17C17.6 22 18 21.6 18 21V20H6V21Z" fill="currentColor"/>
																<path d="M12 4C11.4 4 11 3.6 11 3V2H13V3C13 3.6 12.6 4 12 4Z" fill="currentColor"/>
																<path opacity="0.3" d="M18 3V20H6V3C6 2.4 6.4 2 7 2H17C17.6 2 18 2.4 18 3ZM16 11C16 8.5 13.7 6.49998 11.1 7.09998C9.60001 7.39998 8.50001 8.6001 8.10001 10.1001C7.80001 11.5001 8.2 12.7 9 13.7L11.2 16.2C11.6 16.6 12.3 16.6 12.7 16.2L14.9 13.7C15.6 13 16 12 16 11Z" fill="currentColor"/>
																<path d="M12 12.5C12.8284 12.5 13.5 11.8284 13.5 11C13.5 10.1716 12.8284 9.5 12 9.5C11.1716 9.5 10.5 10.1716 10.5 11C10.5 11.8284 11.1716 12.5 12 12.5Z" fill="currentColor"/>
														</svg>
														</span>
													</a>
													<a href="JavaScript:Void(0);" class="btn btn-md btn-light-main px-3 me-1" data-bs-toggle="modal" data-bs-target="#autho-message">
														<span class="svg-icon svg-icon-muted svg-icon-2hx">
															<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
																<path opacity="0.3" d="M21 19H3C2.4 19 2 18.6 2 18V6C2 5.4 2.4 5 3 5H21C21.6 5 22 5.4 22 6V18C22 18.6 21.6 19 21 19Z" fill="currentColor"/>
																<path d="M21 5H2.99999C2.69999 5 2.49999 5.10005 2.29999 5.30005L11.2 13.3C11.7 13.7 12.4 13.7 12.8 13.3L21.7 5.30005C21.5 5.10005 21.3 5 21 5Z" fill="currentColor"/>
															</svg>
														</span>
													</a>
													<a href="JavaScript:Void(0);" class="btn btn-md btn-light-main px-3" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Save property">
														<span class="svg-icon svg-icon-muted svg-icon-2hx">
															<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
																<path d="M18.3721 4.65439C17.6415 4.23815 16.8052 4 15.9142 4C14.3444 4 12.9339 4.73924 12.003 5.89633C11.0657 4.73913 9.66 4 8.08626 4C7.19611 4 6.35789 4.23746 5.62804 4.65439C4.06148 5.54462 3 7.26056 3 9.24232C3 9.81001 3.08941 10.3491 3.25153 10.8593C4.12155 14.9013 9.69287 20 12.0034 20C14.2502 20 19.875 14.9013 20.7488 10.8593C20.9109 10.3491 21 9.81001 21 9.24232C21.0007 7.26056 19.9383 5.54462 18.3721 4.65439Z" fill="currentColor"/>
															</svg>
														</span>
													</a>
												</div>
											</div>
										</div>
										
									</div>
								</div>
								<!-- End Single Property -->
								
								<!-- Single Property -->
								<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
									<div class="property-listing list_view style_new">
										
										<div class="listing-img-wrapper position-relative">
											<div class="like_unlike_prt">
												<label class="toggler toggler-danger"><input type="checkbox"><i class="fa fa-heart"></i></label>
											</div>
											<div class="position-absolute top-0 left-0 ms-3 mt-3 z-1">
												<div class="label verified-listing d-inline-flex align-items-center justify-content-center">
													<span class="svg-icon text-light svg-icon-2hx me-1">
														<svg width="14" height="14" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
															<path opacity="0.3" d="M20.5543 4.37824L12.1798 2.02473C12.0626 1.99176 11.9376 1.99176 11.8203 2.02473L3.44572 4.37824C3.18118 4.45258 3 4.6807 3 4.93945V13.569C3 14.6914 3.48509 15.8404 4.4417 16.984C5.17231 17.8575 6.18314 18.7345 7.446 19.5909C9.56752 21.0295 11.6566 21.912 11.7445 21.9488C11.8258 21.9829 11.9129 22 12.0001 22C12.0872 22 12.1744 21.983 12.2557 21.9488C12.3435 21.912 14.4326 21.0295 16.5541 19.5909C17.8169 18.7345 18.8277 17.8575 19.5584 16.984C20.515 15.8404 21 14.6914 21 13.569V4.93945C21 4.6807 20.8189 4.45258 20.5543 4.37824Z" fill="currentColor"></path>
															<path d="M14.854 11.321C14.7568 11.2282 14.6388 11.1818 14.4998 11.1818H14.3333V10.2272C14.3333 9.61741 14.1041 9.09378 13.6458 8.65628C13.1875 8.21876 12.639 8 12 8C11.361 8 10.8124 8.21876 10.3541 8.65626C9.89574 9.09378 9.66663 9.61739 9.66663 10.2272V11.1818H9.49999C9.36115 11.1818 9.24306 11.2282 9.14583 11.321C9.0486 11.4138 9 11.5265 9 11.6591V14.5227C9 14.6553 9.04862 14.768 9.14583 14.8609C9.24306 14.9536 9.36115 15 9.49999 15H14.5C14.6389 15 14.7569 14.9536 14.8542 14.8609C14.9513 14.768 15 14.6553 15 14.5227V11.6591C15.0001 11.5265 14.9513 11.4138 14.854 11.321ZM13.3333 11.1818H10.6666V10.2272C10.6666 9.87594 10.7969 9.57597 11.0573 9.32743C11.3177 9.07886 11.6319 8.9546 12 8.9546C12.3681 8.9546 12.6823 9.07884 12.9427 9.32743C13.2031 9.57595 13.3333 9.87594 13.3333 10.2272V11.1818Z" fill="currentColor"></path>
														</svg>
													</span>Verified
												</div>
												<div class="label new-listing d-inline-flex align-items-center justify-content-center ms-1">
													<span class="svg-icon text-light svg-icon-2hx me-1">
														<svg width="14" height="14" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
															<path d="M19.0647 5.43757C19.3421 5.43757 19.567 5.21271 19.567 4.93534C19.567 4.65796 19.3421 4.43311 19.0647 4.43311C18.7874 4.43311 18.5625 4.65796 18.5625 4.93534C18.5625 5.21271 18.7874 5.43757 19.0647 5.43757Z" fill="currentColor"/>
															<path d="M20.0692 9.48884C20.3466 9.48884 20.5714 9.26398 20.5714 8.98661C20.5714 8.70923 20.3466 8.48438 20.0692 8.48438C19.7918 8.48438 19.567 8.70923 19.567 8.98661C19.567 9.26398 19.7918 9.48884 20.0692 9.48884Z" fill="currentColor"/>
															<path d="M12.0335 20.5714C15.6943 20.5714 18.9426 18.2053 20.1168 14.7338C20.1884 14.5225 20.1114 14.289 19.9284 14.161C19.746 14.034 19.5003 14.0418 19.3257 14.1821C18.2432 15.0546 16.9371 15.5156 15.5491 15.5156C12.2257 15.5156 9.48884 12.8122 9.48884 9.48886C9.48884 7.41079 10.5773 5.47137 12.3449 4.35752C12.5342 4.23832 12.6 4.00733 12.5377 3.79251C12.4759 3.57768 12.2571 3.42859 12.0335 3.42859C7.32556 3.42859 3.42857 7.29209 3.42857 12C3.42857 16.7079 7.32556 20.5714 12.0335 20.5714Z" fill="currentColor"/>
															<path d="M13.0379 7.47998C13.8688 7.47998 14.5446 8.15585 14.5446 8.98668C14.5446 9.26428 14.7693 9.48891 15.0469 9.48891C15.3245 9.48891 15.5491 9.26428 15.5491 8.98668C15.5491 8.15585 16.225 7.47998 17.0558 7.47998C17.3334 7.47998 17.558 7.25535 17.558 6.97775C17.558 6.70015 17.3334 6.47552 17.0558 6.47552C16.225 6.47552 15.5491 5.76616 15.5491 4.93534C15.5491 4.65774 15.3245 4.43311 15.0469 4.43311C14.7693 4.43311 14.5446 4.65774 14.5446 4.93534C14.5446 5.76616 13.8688 6.47552 13.0379 6.47552C12.7603 6.47552 12.5357 6.70015 12.5357 6.97775C12.5357 7.25535 12.7603 7.47998 13.0379 7.47998Z" fill="currentColor"/>
														</svg>
													</span>New
												</div>
											</div>
											<div class="list-img-slide">
												<div class="clior">
													<div><a href="<?php echo home_url('/single-property-1/'); ?>"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/p-5.jpg" class="img-fluid mx-auto" alt="" /></a></div>
													<div><a href="<?php echo home_url('/single-property-1/'); ?>"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/p-14.jpg" class="img-fluid mx-auto" alt="" /></a></div>
													<div><a href="<?php echo home_url('/single-property-1/'); ?>"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/p-16.jpg" class="img-fluid mx-auto" alt="" /></a></div>
												</div>
											</div>
										</div>
										
										<div class="list_view_flex">
										
											<div class="listing-detail-wrapper mt-1">
												<div class="listing-short-detail-wrap">
													<div class="_card_list_flex mb-2">
														<div class="_card_flex_01 d-flex align-items-center">
															<span class="label for-rent me-2">For Rent</span>
															<span class="label property-type">Apartment</span>
														</div>
														<div class="_card_flex_last">
															<h6 class="listing-info-price text-main fs-4 mb-0">$7,800</h6>
														</div>
													</div>
													<div class="_card_list_flex">
														<div class="_card_flex_01">
															<h4 class="listing-name"><a href="<?php echo home_url('/single-property-1/'); ?>" class="prt-link-detail">9875 Resot Relly Market, Montreal Canada, HAQC445</a></h4>
														</div>
													</div>
												</div>
											</div>
											
											<div class="price-features-wrapper">
												<div class="list-fx-features d-flex align-items-center justify-content-between">
													<div class="listing-card d-flex align-items-center">
														<div class="square--30 text-muted-2 fs-sm circle gray-simple me-2"><i class="fa-solid fa-building-shield fs-sm"></i></div><span class="text-muted-2">3BHK</span>
													</div>
													<div class="listing-card d-flex align-items-center">
														<div class="square--30 text-muted-2 fs-sm circle gray-simple me-2"><i class="fa-solid fa-bed fs-sm"></i></div><span class="text-muted-2">3 Beds</span>
													</div>
													<div class="listing-card d-flex align-items-center">
														<div class="square--30 text-muted-2 fs-sm circle gray-simple me-2"><i class="fa-solid fa-clone fs-sm"></i></div><span class="text-muted-2">1800 SQFT</span>
													</div>
												</div>
											</div>
											
											<div class="listing-detail-footer pl-0">
												<div class="footer-first">
													<a href="#" data-bs-toggle="modal" data-bs-target="#availability" class="btn btn-md btn-main fw-medium" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Check Availability">
														<span class="svg-icon text-light svg-icon-2hx me-1">
															<svg width="19" height="19" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
																<rect opacity="0.3" x="2" y="2" width="20" height="20" rx="10" fill="currentColor"/>
																<path d="M10.4343 12.4343L8.75 10.75C8.33579 10.3358 7.66421 10.3358 7.25 10.75C6.83579 11.1642 6.83579 11.8358 7.25 12.25L10.2929 15.2929C10.6834 15.6834 11.3166 15.6834 11.7071 15.2929L17.25 9.75C17.6642 9.33579 17.6642 8.66421 17.25 8.25C16.8358 7.83579 16.1642 7.83579 15.75 8.25L11.5657 12.4343C11.2533 12.7467 10.7467 12.7467 10.4343 12.4343Z" fill="currentColor"/>
															</svg>
														</span>Availability
													</a>
													<a href="tel:4048651904" class="btn btn-md btn-light-main px-3 me-1" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Call Agent">
														<span class="svg-icon svg-icon-muted svg-icon-2hx">
															<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
																<path d="M6 21C6 21.6 6.4 22 7 22H17C17.6 22 18 21.6 18 21V20H6V21Z" fill="currentColor"/>
																<path d="M12 4C11.4 4 11 3.6 11 3V2H13V3C13 3.6 12.6 4 12 4Z" fill="currentColor"/>
																<path opacity="0.3" d="M18 3V20H6V3C6 2.4 6.4 2 7 2H17C17.6 2 18 2.4 18 3ZM16 11C16 8.5 13.7 6.49998 11.1 7.09998C9.60001 7.39998 8.50001 8.6001 8.10001 10.1001C7.80001 11.5001 8.2 12.7 9 13.7L11.2 16.2C11.6 16.6 12.3 16.6 12.7 16.2L14.9 13.7C15.6 13 16 12 16 11Z" fill="currentColor"/>
																<path d="M12 12.5C12.8284 12.5 13.5 11.8284 13.5 11C13.5 10.1716 12.8284 9.5 12 9.5C11.1716 9.5 10.5 10.1716 10.5 11C10.5 11.8284 11.1716 12.5 12 12.5Z" fill="currentColor"/>
														</svg>
														</span>
													</a>
													<a href="JavaScript:Void(0);" class="btn btn-md btn-light-main px-3 me-1" data-bs-toggle="modal" data-bs-target="#autho-message">
														<span class="svg-icon svg-icon-muted svg-icon-2hx">
															<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
																<path opacity="0.3" d="M21 19H3C2.4 19 2 18.6 2 18V6C2 5.4 2.4 5 3 5H21C21.6 5 22 5.4 22 6V18C22 18.6 21.6 19 21 19Z" fill="currentColor"/>
																<path d="M21 5H2.99999C2.69999 5 2.49999 5.10005 2.29999 5.30005L11.2 13.3C11.7 13.7 12.4 13.7 12.8 13.3L21.7 5.30005C21.5 5.10005 21.3 5 21 5Z" fill="currentColor"/>
															</svg>
														</span>
													</a>
													<a href="JavaScript:Void(0);" class="btn btn-md btn-light-main px-3" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Save property">
														<span class="svg-icon svg-icon-muted svg-icon-2hx">
															<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
																<path d="M18.3721 4.65439C17.6415 4.23815 16.8052 4 15.9142 4C14.3444 4 12.9339 4.73924 12.003 5.89633C11.0657 4.73913 9.66 4 8.08626 4C7.19611 4 6.35789 4.23746 5.62804 4.65439C4.06148 5.54462 3 7.26056 3 9.24232C3 9.81001 3.08941 10.3491 3.25153 10.8593C4.12155 14.9013 9.69287 20 12.0034 20C14.2502 20 19.875 14.9013 20.7488 10.8593C20.9109 10.3491 21 9.81001 21 9.24232C21.0007 7.26056 19.9383 5.54462 18.3721 4.65439Z" fill="currentColor"/>
															</svg>
														</span>
													</a>
												</div>
											</div>
										</div>
										
									</div>
								</div>
								<!-- End Single Property -->
								
								<!-- Single Property -->
								<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
									<div class="property-listing list_view style_new">
										
										<div class="listing-img-wrapper position-relative">
											<div class="like_unlike_prt">
												<label class="toggler toggler-danger"><input type="checkbox"><i class="fa fa-heart"></i></label>
											</div>
											<div class="position-absolute top-0 left-0 ms-3 mt-3 z-1">
												<div class="label super-agent d-inline-flex align-items-center justify-content-center">
													<span class="svg-icon text-light svg-icon-2hx me-1">
														<svg width="14" height="14" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
															<path opacity="0.3" d="M20.5543 4.37824L12.1798 2.02473C12.0626 1.99176 11.9376 1.99176 11.8203 2.02473L3.44572 4.37824C3.18118 4.45258 3 4.6807 3 4.93945V13.569C3 14.6914 3.48509 15.8404 4.4417 16.984C5.17231 17.8575 6.18314 18.7345 7.446 19.5909C9.56752 21.0295 11.6566 21.912 11.7445 21.9488C11.8258 21.9829 11.9129 22 12.0001 22C12.0872 22 12.1744 21.983 12.2557 21.9488C12.3435 21.912 14.4326 21.0295 16.5541 19.5909C17.8169 18.7345 18.8277 17.8575 19.5584 16.984C20.515 15.8404 21 14.6914 21 13.569V4.93945C21 4.6807 20.8189 4.45258 20.5543 4.37824Z" fill="currentColor"/>
															<path d="M12.0006 11.1542C13.1434 11.1542 14.0777 10.22 14.0777 9.0771C14.0777 7.93424 13.1434 7 12.0006 7C10.8577 7 9.92348 7.93424 9.92348 9.0771C9.92348 10.22 10.8577 11.1542 12.0006 11.1542Z" fill="currentColor"/>
															<path d="M15.5652 13.814C15.5108 13.6779 15.4382 13.551 15.3566 13.4331C14.9393 12.8163 14.2954 12.4081 13.5697 12.3083C13.479 12.2993 13.3793 12.3174 13.3067 12.3718C12.9257 12.653 12.4722 12.7981 12.0006 12.7981C11.5289 12.7981 11.0754 12.653 10.6944 12.3718C10.6219 12.3174 10.5221 12.2902 10.4314 12.3083C9.70578 12.4081 9.05272 12.8163 8.64456 13.4331C8.56293 13.551 8.49036 13.687 8.43595 13.814C8.40875 13.8684 8.41781 13.9319 8.44502 13.9864C8.51759 14.1133 8.60828 14.2403 8.68991 14.3492C8.81689 14.5215 8.95295 14.6757 9.10715 14.8208C9.23413 14.9478 9.37925 15.0657 9.52439 15.1836C10.2409 15.7188 11.1026 15.9999 11.9915 15.9999C12.8804 15.9999 13.7421 15.7188 14.4586 15.1836C14.6038 15.0748 14.7489 14.9478 14.8759 14.8208C15.021 14.6757 15.1661 14.5215 15.2931 14.3492C15.3838 14.2312 15.4655 14.1133 15.538 13.9864C15.5833 13.9319 15.5924 13.8684 15.5652 13.814Z" fill="currentColor"/>
														</svg>
													</span>SuperAgent
												</div>
											</div>
											<div class="list-img-slide">
												<div class="clior">
													<div><a href="<?php echo home_url('/single-property-1/'); ?>"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/p-6.jpg" class="img-fluid mx-auto" alt="" /></a></div>
													<div><a href="<?php echo home_url('/single-property-1/'); ?>"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/p-12.jpg" class="img-fluid mx-auto" alt="" /></a></div>
													<div><a href="<?php echo home_url('/single-property-1/'); ?>"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/p-23.jpg" class="img-fluid mx-auto" alt="" /></a></div>
												</div>
											</div>
										</div>
										
										<div class="list_view_flex">
										
											<div class="listing-detail-wrapper mt-1">
												<div class="listing-short-detail-wrap">
													<div class="_card_list_flex mb-2">
														<div class="_card_flex_01 d-flex align-items-center">
															<span class="label for-sale me-2">For Sell</span>
															<span class="label property-type">Family</span>
														</div>
														<div class="_card_flex_last">
															<h6 class="listing-info-price text-main fs-4 mb-0">$140M</h6>
														</div>
													</div>
													<div class="_card_list_flex">
														<div class="_card_flex_01">
															<h4 class="listing-name"><a href="<?php echo home_url('/single-property-1/'); ?>" class="prt-link-detail">1648 Resot Relly Market, Montreal Canada, HAQC445</a></h4>
														</div>
													</div>
												</div>
											</div>
											
											<div class="price-features-wrapper">
												<div class="list-fx-features d-flex align-items-center justify-content-between">
													<div class="listing-card d-flex align-items-center">
														<div class="square--30 text-muted-2 fs-sm circle gray-simple me-2"><i class="fa-solid fa-building-shield fs-sm"></i></div><span class="text-muted-2">3BHK</span>
													</div>
													<div class="listing-card d-flex align-items-center">
														<div class="square--30 text-muted-2 fs-sm circle gray-simple me-2"><i class="fa-solid fa-bed fs-sm"></i></div><span class="text-muted-2">3 Beds</span>
													</div>
													<div class="listing-card d-flex align-items-center">
														<div class="square--30 text-muted-2 fs-sm circle gray-simple me-2"><i class="fa-solid fa-clone fs-sm"></i></div><span class="text-muted-2">1800 SQFT</span>
													</div>
												</div>
											</div>
											
											<div class="listing-detail-footer pl-0">
												<div class="footer-first">
													<a href="#" data-bs-toggle="modal" data-bs-target="#availability" class="btn btn-md btn-main fw-medium" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Check Availability">
														<span class="svg-icon text-light svg-icon-2hx me-1">
															<svg width="19" height="19" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
																<rect opacity="0.3" x="2" y="2" width="20" height="20" rx="10" fill="currentColor"/>
																<path d="M10.4343 12.4343L8.75 10.75C8.33579 10.3358 7.66421 10.3358 7.25 10.75C6.83579 11.1642 6.83579 11.8358 7.25 12.25L10.2929 15.2929C10.6834 15.6834 11.3166 15.6834 11.7071 15.2929L17.25 9.75C17.6642 9.33579 17.6642 8.66421 17.25 8.25C16.8358 7.83579 16.1642 7.83579 15.75 8.25L11.5657 12.4343C11.2533 12.7467 10.7467 12.7467 10.4343 12.4343Z" fill="currentColor"/>
															</svg>
														</span>Availability
													</a>
													<a href="tel:4048651904" class="btn btn-md btn-light-main px-3 me-1" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Call Agent">
														<span class="svg-icon svg-icon-muted svg-icon-2hx">
															<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
																<path d="M6 21C6 21.6 6.4 22 7 22H17C17.6 22 18 21.6 18 21V20H6V21Z" fill="currentColor"/>
																<path d="M12 4C11.4 4 11 3.6 11 3V2H13V3C13 3.6 12.6 4 12 4Z" fill="currentColor"/>
																<path opacity="0.3" d="M18 3V20H6V3C6 2.4 6.4 2 7 2H17C17.6 2 18 2.4 18 3ZM16 11C16 8.5 13.7 6.49998 11.1 7.09998C9.60001 7.39998 8.50001 8.6001 8.10001 10.1001C7.80001 11.5001 8.2 12.7 9 13.7L11.2 16.2C11.6 16.6 12.3 16.6 12.7 16.2L14.9 13.7C15.6 13 16 12 16 11Z" fill="currentColor"/>
																<path d="M12 12.5C12.8284 12.5 13.5 11.8284 13.5 11C13.5 10.1716 12.8284 9.5 12 9.5C11.1716 9.5 10.5 10.1716 10.5 11C10.5 11.8284 11.1716 12.5 12 12.5Z" fill="currentColor"/>
														</svg>
														</span>
													</a>
													<a href="JavaScript:Void(0);" class="btn btn-md btn-light-main px-3 me-1" data-bs-toggle="modal" data-bs-target="#autho-message">
														<span class="svg-icon svg-icon-muted svg-icon-2hx">
															<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
																<path opacity="0.3" d="M21 19H3C2.4 19 2 18.6 2 18V6C2 5.4 2.4 5 3 5H21C21.6 5 22 5.4 22 6V18C22 18.6 21.6 19 21 19Z" fill="currentColor"/>
																<path d="M21 5H2.99999C2.69999 5 2.49999 5.10005 2.29999 5.30005L11.2 13.3C11.7 13.7 12.4 13.7 12.8 13.3L21.7 5.30005C21.5 5.10005 21.3 5 21 5Z" fill="currentColor"/>
															</svg>
														</span>
													</a>
													<a href="JavaScript:Void(0);" class="btn btn-md btn-light-main px-3" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Save property">
														<span class="svg-icon svg-icon-muted svg-icon-2hx">
															<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
																<path d="M18.3721 4.65439C17.6415 4.23815 16.8052 4 15.9142 4C14.3444 4 12.9339 4.73924 12.003 5.89633C11.0657 4.73913 9.66 4 8.08626 4C7.19611 4 6.35789 4.23746 5.62804 4.65439C4.06148 5.54462 3 7.26056 3 9.24232C3 9.81001 3.08941 10.3491 3.25153 10.8593C4.12155 14.9013 9.69287 20 12.0034 20C14.2502 20 19.875 14.9013 20.7488 10.8593C20.9109 10.3491 21 9.81001 21 9.24232C21.0007 7.26056 19.9383 5.54462 18.3721 4.65439Z" fill="currentColor"/>
															</svg>
														</span>
													</a>
												</div>
											</div>
										</div>
										
									</div>
								</div>
								<!-- End Single Property -->
								
								<!-- Single Property -->
								<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
									<div class="property-listing list_view style_new">
										
										<div class="listing-img-wrapper position-relative">
											<div class="like_unlike_prt">
												<label class="toggler toggler-danger"><input type="checkbox"><i class="fa fa-heart"></i></label>
											</div>
											<div class="position-absolute top-0 left-0 ms-3 mt-3 z-1">
												<div class="label verified-listing d-inline-flex align-items-center justify-content-center">
													<span class="svg-icon text-light svg-icon-2hx me-1">
														<svg width="14" height="14" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
															<path opacity="0.3" d="M20.5543 4.37824L12.1798 2.02473C12.0626 1.99176 11.9376 1.99176 11.8203 2.02473L3.44572 4.37824C3.18118 4.45258 3 4.6807 3 4.93945V13.569C3 14.6914 3.48509 15.8404 4.4417 16.984C5.17231 17.8575 6.18314 18.7345 7.446 19.5909C9.56752 21.0295 11.6566 21.912 11.7445 21.9488C11.8258 21.9829 11.9129 22 12.0001 22C12.0872 22 12.1744 21.983 12.2557 21.9488C12.3435 21.912 14.4326 21.0295 16.5541 19.5909C17.8169 18.7345 18.8277 17.8575 19.5584 16.984C20.515 15.8404 21 14.6914 21 13.569V4.93945C21 4.6807 20.8189 4.45258 20.5543 4.37824Z" fill="currentColor"></path>
															<path d="M14.854 11.321C14.7568 11.2282 14.6388 11.1818 14.4998 11.1818H14.3333V10.2272C14.3333 9.61741 14.1041 9.09378 13.6458 8.65628C13.1875 8.21876 12.639 8 12 8C11.361 8 10.8124 8.21876 10.3541 8.65626C9.89574 9.09378 9.66663 9.61739 9.66663 10.2272V11.1818H9.49999C9.36115 11.1818 9.24306 11.2282 9.14583 11.321C9.0486 11.4138 9 11.5265 9 11.6591V14.5227C9 14.6553 9.04862 14.768 9.14583 14.8609C9.24306 14.9536 9.36115 15 9.49999 15H14.5C14.6389 15 14.7569 14.9536 14.8542 14.8609C14.9513 14.768 15 14.6553 15 14.5227V11.6591C15.0001 11.5265 14.9513 11.4138 14.854 11.321ZM13.3333 11.1818H10.6666V10.2272C10.6666 9.87594 10.7969 9.57597 11.0573 9.32743C11.3177 9.07886 11.6319 8.9546 12 8.9546C12.3681 8.9546 12.6823 9.07884 12.9427 9.32743C13.2031 9.57595 13.3333 9.87594 13.3333 10.2272V11.1818Z" fill="currentColor"></path>
														</svg>
													</span>Verified
												</div>
												<div class="label new-listing d-inline-flex align-items-center justify-content-center ms-1">
													<span class="svg-icon text-light svg-icon-2hx me-1">
														<svg width="14" height="14" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
															<path d="M19.0647 5.43757C19.3421 5.43757 19.567 5.21271 19.567 4.93534C19.567 4.65796 19.3421 4.43311 19.0647 4.43311C18.7874 4.43311 18.5625 4.65796 18.5625 4.93534C18.5625 5.21271 18.7874 5.43757 19.0647 5.43757Z" fill="currentColor"/>
															<path d="M20.0692 9.48884C20.3466 9.48884 20.5714 9.26398 20.5714 8.98661C20.5714 8.70923 20.3466 8.48438 20.0692 8.48438C19.7918 8.48438 19.567 8.70923 19.567 8.98661C19.567 9.26398 19.7918 9.48884 20.0692 9.48884Z" fill="currentColor"/>
															<path d="M12.0335 20.5714C15.6943 20.5714 18.9426 18.2053 20.1168 14.7338C20.1884 14.5225 20.1114 14.289 19.9284 14.161C19.746 14.034 19.5003 14.0418 19.3257 14.1821C18.2432 15.0546 16.9371 15.5156 15.5491 15.5156C12.2257 15.5156 9.48884 12.8122 9.48884 9.48886C9.48884 7.41079 10.5773 5.47137 12.3449 4.35752C12.5342 4.23832 12.6 4.00733 12.5377 3.79251C12.4759 3.57768 12.2571 3.42859 12.0335 3.42859C7.32556 3.42859 3.42857 7.29209 3.42857 12C3.42857 16.7079 7.32556 20.5714 12.0335 20.5714Z" fill="currentColor"/>
															<path d="M13.0379 7.47998C13.8688 7.47998 14.5446 8.15585 14.5446 8.98668C14.5446 9.26428 14.7693 9.48891 15.0469 9.48891C15.3245 9.48891 15.5491 9.26428 15.5491 8.98668C15.5491 8.15585 16.225 7.47998 17.0558 7.47998C17.3334 7.47998 17.558 7.25535 17.558 6.97775C17.558 6.70015 17.3334 6.47552 17.0558 6.47552C16.225 6.47552 15.5491 5.76616 15.5491 4.93534C15.5491 4.65774 15.3245 4.43311 15.0469 4.43311C14.7693 4.43311 14.5446 4.65774 14.5446 4.93534C14.5446 5.76616 13.8688 6.47552 13.0379 6.47552C12.7603 6.47552 12.5357 6.70015 12.5357 6.97775C12.5357 7.25535 12.7603 7.47998 13.0379 7.47998Z" fill="currentColor"/>
														</svg>
													</span>New
												</div>
											</div>
											<div class="list-img-slide">
												<div class="clior">
													<div><a href="<?php echo home_url('/single-property-1/'); ?>"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/p-8.jpg" class="img-fluid mx-auto" alt="" /></a></div>
													<div><a href="<?php echo home_url('/single-property-1/'); ?>"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/p-9.jpg" class="img-fluid mx-auto" alt="" /></a></div>
													<div><a href="<?php echo home_url('/single-property-1/'); ?>"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/p-11.jpg" class="img-fluid mx-auto" alt="" /></a></div>
												</div>
											</div>
										</div>
										
										<div class="list_view_flex">
										
											<div class="listing-detail-wrapper mt-1">
												<div class="listing-short-detail-wrap">
													<div class="_card_list_flex mb-2">
														<div class="_card_flex_01 d-flex align-items-center">
															<span class="label for-rent me-2">For Rent</span>
															<span class="label property-type">Villa</span>
														</div>
														<div class="_card_flex_last">
															<h6 class="listing-info-price text-main fs-4 mb-0">$9,200</h6>
														</div>
													</div>
													<div class="_card_list_flex">
														<div class="_card_flex_01">
															<h4 class="listing-name"><a href="<?php echo home_url('/single-property-1/'); ?>" class="prt-link-detail">5690 Resot Relly Market, Montreal Canada, HAQC445</a></h4>
														</div>
													</div>
												</div>
											</div>
											
											<div class="price-features-wrapper">
												<div class="list-fx-features d-flex align-items-center justify-content-between">
													<div class="listing-card d-flex align-items-center">
														<div class="square--30 text-muted-2 fs-sm circle gray-simple me-2"><i class="fa-solid fa-building-shield fs-sm"></i></div><span class="text-muted-2">3BHK</span>
													</div>
													<div class="listing-card d-flex align-items-center">
														<div class="square--30 text-muted-2 fs-sm circle gray-simple me-2"><i class="fa-solid fa-bed fs-sm"></i></div><span class="text-muted-2">3 Beds</span>
													</div>
													<div class="listing-card d-flex align-items-center">
														<div class="square--30 text-muted-2 fs-sm circle gray-simple me-2"><i class="fa-solid fa-clone fs-sm"></i></div><span class="text-muted-2">1800 SQFT</span>
													</div>
												</div>
											</div>
											
											<div class="listing-detail-footer pl-0">
												<div class="footer-first">
													<a href="#" data-bs-toggle="modal" data-bs-target="#availability" class="btn btn-md btn-main fw-medium" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Check Availability">
														<span class="svg-icon text-light svg-icon-2hx me-1">
															<svg width="19" height="19" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
																<rect opacity="0.3" x="2" y="2" width="20" height="20" rx="10" fill="currentColor"/>
																<path d="M10.4343 12.4343L8.75 10.75C8.33579 10.3358 7.66421 10.3358 7.25 10.75C6.83579 11.1642 6.83579 11.8358 7.25 12.25L10.2929 15.2929C10.6834 15.6834 11.3166 15.6834 11.7071 15.2929L17.25 9.75C17.6642 9.33579 17.6642 8.66421 17.25 8.25C16.8358 7.83579 16.1642 7.83579 15.75 8.25L11.5657 12.4343C11.2533 12.7467 10.7467 12.7467 10.4343 12.4343Z" fill="currentColor"/>
															</svg>
														</span>Availability
													</a>
													<a href="tel:4048651904" class="btn btn-md btn-light-main px-3 me-1" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Call Agent">
														<span class="svg-icon svg-icon-muted svg-icon-2hx">
															<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
																<path d="M6 21C6 21.6 6.4 22 7 22H17C17.6 22 18 21.6 18 21V20H6V21Z" fill="currentColor"/>
																<path d="M12 4C11.4 4 11 3.6 11 3V2H13V3C13 3.6 12.6 4 12 4Z" fill="currentColor"/>
																<path opacity="0.3" d="M18 3V20H6V3C6 2.4 6.4 2 7 2H17C17.6 2 18 2.4 18 3ZM16 11C16 8.5 13.7 6.49998 11.1 7.09998C9.60001 7.39998 8.50001 8.6001 8.10001 10.1001C7.80001 11.5001 8.2 12.7 9 13.7L11.2 16.2C11.6 16.6 12.3 16.6 12.7 16.2L14.9 13.7C15.6 13 16 12 16 11Z" fill="currentColor"/>
																<path d="M12 12.5C12.8284 12.5 13.5 11.8284 13.5 11C13.5 10.1716 12.8284 9.5 12 9.5C11.1716 9.5 10.5 10.1716 10.5 11C10.5 11.8284 11.1716 12.5 12 12.5Z" fill="currentColor"/>
														</svg>
														</span>
													</a>
													<a href="JavaScript:Void(0);" class="btn btn-md btn-light-main px-3 me-1" data-bs-toggle="modal" data-bs-target="#autho-message">
														<span class="svg-icon svg-icon-muted svg-icon-2hx">
															<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
																<path opacity="0.3" d="M21 19H3C2.4 19 2 18.6 2 18V6C2 5.4 2.4 5 3 5H21C21.6 5 22 5.4 22 6V18C22 18.6 21.6 19 21 19Z" fill="currentColor"/>
																<path d="M21 5H2.99999C2.69999 5 2.49999 5.10005 2.29999 5.30005L11.2 13.3C11.7 13.7 12.4 13.7 12.8 13.3L21.7 5.30005C21.5 5.10005 21.3 5 21 5Z" fill="currentColor"/>
															</svg>
														</span>
													</a>
													<a href="JavaScript:Void(0);" class="btn btn-md btn-light-main px-3" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Save property">
														<span class="svg-icon svg-icon-muted svg-icon-2hx">
															<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
																<path d="M18.3721 4.65439C17.6415 4.23815 16.8052 4 15.9142 4C14.3444 4 12.9339 4.73924 12.003 5.89633C11.0657 4.73913 9.66 4 8.08626 4C7.19611 4 6.35789 4.23746 5.62804 4.65439C4.06148 5.54462 3 7.26056 3 9.24232C3 9.81001 3.08941 10.3491 3.25153 10.8593C4.12155 14.9013 9.69287 20 12.0034 20C14.2502 20 19.875 14.9013 20.7488 10.8593C20.9109 10.3491 21 9.81001 21 9.24232C21.0007 7.26056 19.9383 5.54462 18.3721 4.65439Z" fill="currentColor"/>
															</svg>
														</span>
													</a>
												</div>
											</div>
										</div>
										
									</div>
								</div>
								<!-- End Single Property -->
								
								<!-- Single Property -->
								<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
									<div class="property-listing list_view style_new">
										
										<div class="listing-img-wrapper position-relative">
											<div class="like_unlike_prt">
												<label class="toggler toggler-danger"><input type="checkbox"><i class="fa fa-heart"></i></label>
											</div>
											<div class="position-absolute top-0 left-0 ms-3 mt-3 z-1">
												<div class="label super-agent d-inline-flex align-items-center justify-content-center">
													<span class="svg-icon text-light svg-icon-2hx me-1">
														<svg width="14" height="14" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
															<path opacity="0.3" d="M20.5543 4.37824L12.1798 2.02473C12.0626 1.99176 11.9376 1.99176 11.8203 2.02473L3.44572 4.37824C3.18118 4.45258 3 4.6807 3 4.93945V13.569C3 14.6914 3.48509 15.8404 4.4417 16.984C5.17231 17.8575 6.18314 18.7345 7.446 19.5909C9.56752 21.0295 11.6566 21.912 11.7445 21.9488C11.8258 21.9829 11.9129 22 12.0001 22C12.0872 22 12.1744 21.983 12.2557 21.9488C12.3435 21.912 14.4326 21.0295 16.5541 19.5909C17.8169 18.7345 18.8277 17.8575 19.5584 16.984C20.515 15.8404 21 14.6914 21 13.569V4.93945C21 4.6807 20.8189 4.45258 20.5543 4.37824Z" fill="currentColor"/>
															<path d="M12.0006 11.1542C13.1434 11.1542 14.0777 10.22 14.0777 9.0771C14.0777 7.93424 13.1434 7 12.0006 7C10.8577 7 9.92348 7.93424 9.92348 9.0771C9.92348 10.22 10.8577 11.1542 12.0006 11.1542Z" fill="currentColor"/>
															<path d="M15.5652 13.814C15.5108 13.6779 15.4382 13.551 15.3566 13.4331C14.9393 12.8163 14.2954 12.4081 13.5697 12.3083C13.479 12.2993 13.3793 12.3174 13.3067 12.3718C12.9257 12.653 12.4722 12.7981 12.0006 12.7981C11.5289 12.7981 11.0754 12.653 10.6944 12.3718C10.6219 12.3174 10.5221 12.2902 10.4314 12.3083C9.70578 12.4081 9.05272 12.8163 8.64456 13.4331C8.56293 13.551 8.49036 13.687 8.43595 13.814C8.40875 13.8684 8.41781 13.9319 8.44502 13.9864C8.51759 14.1133 8.60828 14.2403 8.68991 14.3492C8.81689 14.5215 8.95295 14.6757 9.10715 14.8208C9.23413 14.9478 9.37925 15.0657 9.52439 15.1836C10.2409 15.7188 11.1026 15.9999 11.9915 15.9999C12.8804 15.9999 13.7421 15.7188 14.4586 15.1836C14.6038 15.0748 14.7489 14.9478 14.8759 14.8208C15.021 14.6757 15.1661 14.5215 15.2931 14.3492C15.3838 14.2312 15.4655 14.1133 15.538 13.9864C15.5833 13.9319 15.5924 13.8684 15.5652 13.814Z" fill="currentColor"/>
														</svg>
													</span>SuperAgent
												</div>
											</div>
											<div class="list-img-slide">
												<div class="clior">
													<div><a href="<?php echo home_url('/single-property-1/'); ?>"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/p-7.jpg" class="img-fluid mx-auto" alt="" /></a></div>
													<div><a href="<?php echo home_url('/single-property-1/'); ?>"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/p-16.jpg" class="img-fluid mx-auto" alt="" /></a></div>
													<div><a href="<?php echo home_url('/single-property-1/'); ?>"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/p-21.jpg" class="img-fluid mx-auto" alt="" /></a></div>
												</div>
											</div>
										</div>
										
										<div class="list_view_flex">
										
											<div class="listing-detail-wrapper mt-1">
												<div class="listing-short-detail-wrap">
													<div class="_card_list_flex mb-2">
														<div class="_card_flex_01 d-flex align-items-center">
															<span class="label for-sale me-2">For Sell</span>
															<span class="label property-type">Family</span>
														</div>
														<div class="_card_flex_last">
															<h6 class="listing-info-price text-main fs-4 mb-0">$150M</h6>
														</div>
													</div>
													<div class="_card_list_flex">
														<div class="_card_flex_01">
															<h4 class="listing-name"><a href="<?php echo home_url('/single-property-1/'); ?>" class="prt-link-detail">4312 Resot Relly Market, Montreal Canada, HAQC445</a></h4>
														</div>
													</div>
												</div>
											</div>
											
											<div class="price-features-wrapper">
												<div class="list-fx-features d-flex align-items-center justify-content-between">
													<div class="listing-card d-flex align-items-center">
														<div class="square--30 text-muted-2 fs-sm circle gray-simple me-2"><i class="fa-solid fa-building-shield fs-sm"></i></div><span class="text-muted-2">3BHK</span>
													</div>
													<div class="listing-card d-flex align-items-center">
														<div class="square--30 text-muted-2 fs-sm circle gray-simple me-2"><i class="fa-solid fa-bed fs-sm"></i></div><span class="text-muted-2">3 Beds</span>
													</div>
													<div class="listing-card d-flex align-items-center">
														<div class="square--30 text-muted-2 fs-sm circle gray-simple me-2"><i class="fa-solid fa-clone fs-sm"></i></div><span class="text-muted-2">1800 SQFT</span>
													</div>
												</div>
											</div>
											
											<div class="listing-detail-footer pl-0">
												<div class="footer-first">
													<a href="#" data-bs-toggle="modal" data-bs-target="#availability" class="btn btn-md btn-main fw-medium" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Check Availability">
														<span class="svg-icon text-light svg-icon-2hx me-1">
															<svg width="19" height="19" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
																<rect opacity="0.3" x="2" y="2" width="20" height="20" rx="10" fill="currentColor"/>
																<path d="M10.4343 12.4343L8.75 10.75C8.33579 10.3358 7.66421 10.3358 7.25 10.75C6.83579 11.1642 6.83579 11.8358 7.25 12.25L10.2929 15.2929C10.6834 15.6834 11.3166 15.6834 11.7071 15.2929L17.25 9.75C17.6642 9.33579 17.6642 8.66421 17.25 8.25C16.8358 7.83579 16.1642 7.83579 15.75 8.25L11.5657 12.4343C11.2533 12.7467 10.7467 12.7467 10.4343 12.4343Z" fill="currentColor"/>
															</svg>
														</span>Availability
													</a>
													<a href="tel:4048651904" class="btn btn-md btn-light-main px-3 me-1" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Call Agent">
														<span class="svg-icon svg-icon-muted svg-icon-2hx">
															<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
																<path d="M6 21C6 21.6 6.4 22 7 22H17C17.6 22 18 21.6 18 21V20H6V21Z" fill="currentColor"/>
																<path d="M12 4C11.4 4 11 3.6 11 3V2H13V3C13 3.6 12.6 4 12 4Z" fill="currentColor"/>
																<path opacity="0.3" d="M18 3V20H6V3C6 2.4 6.4 2 7 2H17C17.6 2 18 2.4 18 3ZM16 11C16 8.5 13.7 6.49998 11.1 7.09998C9.60001 7.39998 8.50001 8.6001 8.10001 10.1001C7.80001 11.5001 8.2 12.7 9 13.7L11.2 16.2C11.6 16.6 12.3 16.6 12.7 16.2L14.9 13.7C15.6 13 16 12 16 11Z" fill="currentColor"/>
																<path d="M12 12.5C12.8284 12.5 13.5 11.8284 13.5 11C13.5 10.1716 12.8284 9.5 12 9.5C11.1716 9.5 10.5 10.1716 10.5 11C10.5 11.8284 11.1716 12.5 12 12.5Z" fill="currentColor"/>
														</svg>
														</span>
													</a>
													<a href="JavaScript:Void(0);" class="btn btn-md btn-light-main px-3 me-1" data-bs-toggle="modal" data-bs-target="#autho-message">
														<span class="svg-icon svg-icon-muted svg-icon-2hx">
															<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
																<path opacity="0.3" d="M21 19H3C2.4 19 2 18.6 2 18V6C2 5.4 2.4 5 3 5H21C21.6 5 22 5.4 22 6V18C22 18.6 21.6 19 21 19Z" fill="currentColor"/>
																<path d="M21 5H2.99999C2.69999 5 2.49999 5.10005 2.29999 5.30005L11.2 13.3C11.7 13.7 12.4 13.7 12.8 13.3L21.7 5.30005C21.5 5.10005 21.3 5 21 5Z" fill="currentColor"/>
															</svg>
														</span>
													</a>
													<a href="JavaScript:Void(0);" class="btn btn-md btn-light-main px-3" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Save property">
														<span class="svg-icon svg-icon-muted svg-icon-2hx">
															<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
																<path d="M18.3721 4.65439C17.6415 4.23815 16.8052 4 15.9142 4C14.3444 4 12.9339 4.73924 12.003 5.89633C11.0657 4.73913 9.66 4 8.08626 4C7.19611 4 6.35789 4.23746 5.62804 4.65439C4.06148 5.54462 3 7.26056 3 9.24232C3 9.81001 3.08941 10.3491 3.25153 10.8593C4.12155 14.9013 9.69287 20 12.0034 20C14.2502 20 19.875 14.9013 20.7488 10.8593C20.9109 10.3491 21 9.81001 21 9.24232C21.0007 7.26056 19.9383 5.54462 18.3721 4.65439Z" fill="currentColor"/>
															</svg>
														</span>
													</a>
												</div>
											</div>
										</div>
										
									</div>
								</div>
								<!-- End Single Property -->
								
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
