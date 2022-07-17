<?php include('includes/header.php'); ?>

<!-- Begin Main -->

<div role="main" class="main">
			<!-- Begin Main Slide -->
			<section class="main-slide">
				<div id="owl-main-slide" class="owl-carousel pgl-main-slide" data-plugin-options='{"autoPlay": true}'>
					<div class="item" id="item1"><img src="images/slides/slider1.jpg" alt="Photo" class="img-responsive">
						<div class="item-caption">
							<div class="container">
								<div class="property-info">
									<span class="property-thumb-info-label">
										<span class="label price">358,000</span>
										<span class="label"><a href="property-details.php" class="btn-more">More Detail</a></span>
									</span>
									<div class="property-thumb-info-content">
										<h2><a href="property-details.php">1 RK 350 Sq.ft. House & Villa</a></h2>
										<p>IS ONE BEDROOM FULLY FURNISHED WITH TV CUPBOARD TEA COFFEE MAKER IN GREEN POLLUTION FREE Campus, close to Airport✈️ & Paras Hospital.</p>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="item" id="item2"><img src="images/slides/slider2.jpg" alt="Photo" class="img-responsive">
						<div class="item-caption">
							<div class="container">
								<div class="property-info">
									<span class="property-thumb-info-label">
										<span class="label price">358,000</span>
										<span class="label"><a href="property-details.php" class="btn-more">More Detail</a></span>
									</span>
									<div class="property-thumb-info-content">
										<h2><a href="property-details.php">2 BHK 1200 Sq.ft. House & Villa</a></h2>
										<p>This Semi-furnished residential house can be a comfortable and affordable home for you and your family. It is a 2 BHK + Study unit available on rent in Shivpuri, Patna. This Apartment comes with a plethora of amenities to meet your modern lifestyle needs</p>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="item" id="item3"><img src="images/slides/slider3.jpg" alt="Photo" class="img-responsive">
						<div class="item-caption">
							<div class="container">
								<div class="property-info">
									<span class="property-thumb-info-label">
										<span class="label price">358,000</span>
										<span class="label"><a href="property-details.php" class="btn-more">More Detail</a></span>
									</span>
									<div class="property-thumb-info-content">
										<h2><a href="property-details.php">Warehouse,844504</a></h2>
										<p>The property is newly built, located at bypass. road, easily transportable. Easy connectivity for trucks and cars. Electricity and Water 24*7 and guardrooms are also made with CCTV security.</p>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</section>
			<!-- End Main Slide -->
			
			<!-- Begin Advanced Search -->
			<section class="pgl-advanced-search pgl-bg-light">
				<div class="container">
					<form name="advancedsearch">
						<div class="row">
							<div class="col-xs-6 col-sm-3">
								<div class="form-group">
									<label class="sr-only" for="property-status">Property Status</label>
									<select id="property-status" name="property-status" data-placeholder="Property Status" class="chosen-select">
										<option selected="selected" value="Property Status">Property Status</option>
										<option value="sale">For Sale</option>
										<option value="rent">For Rent</option>
									</select>
								</div>
							</div>	
							<div class="col-xs-6 col-sm-3">
								<div class="form-group">
									<label class="sr-only" for="location">Location</label>
									<select id="location" name="location" data-placeholder="Location" class="chosen-select">
										<option selected="selected" value="Location">Location</option>
										<option value="Bihar">Bihar</option>
										<option value="Uttar Pardesh">Uttar Pardesh</option>
										<option value="Noida">Noida</option>
										<option value="Panjab">Panjab</option>
										<option value="Karnataka">Karnataka</option>
										<option value="Assam">Assam</option>
										<option value="Patna">Patna</option>
										<option value="Tamilnadu">Tamilnadu</option>
										<option value="Kolkata">Kolkata</option>
										<option value="Goa">Goa</option>
										<option value="Maharashtra">Maharashtra</option>
										<option value="West Bengal">West Bengal</option>
										<option value="Gujarat">Gujarat</option>
										<option value="Odisha">Odisha</option>
										<option value="Tripura">Tripura</option>
										<option value="Kerla">Kerla</option>
										<option value="Sikkim">Sikkim</option>
										<option value="Jharkhand">Jharkhand</option>
										<option value="Nagaland">Nagaland</option>
										<option value="Delhi">Delhi</option>
										
									</select>
								</div>
							</div>
							<div class="col-xs-6 col-sm-3">
								<div class="form-group">
									<label class="sr-only" for="property-types">Property Types</label>
									<select id="property-types" name="property-types" data-placeholder="Property Types" class="chosen-select">
										<option selected="selected" value="Property Types">Property Types</option>
										<option value="residential">Residential</option>
										<option value="commercial">Commercial</option>
										<option value="land">Land</option>
									</select>
								</div>
							</div>	
							<div class="col-xs-6 col-sm-3">
								<div class="form-group">
									<label class="sr-only" for="area-from">Area From</label>
									<select id="area-from" name="area-from" data-placeholder="Area From" class="chosen-select">
										<option selected="selected" value="Area From">Area From</option>
										<option value="450">450</option>
										<option value="350">350</option>
										<option value="250">250</option>
										<option value="150">150</option>
										<option value="100">100</option>
										<option value="50">50</option>
									</select>
								</div>
							</div>	
						</div>
						
						<div class="row">
							<div class="col-xs-6 col-sm-3">
								<div class="form-group">
									<label class="sr-only" for="search-bedrooms">Bedrooms</label>
									<select id="search-bedrooms" name="search-bedrooms" data-placeholder="Bedrooms" class="chosen-select">
										<option selected="selected" value="Bedrooms">Bedrooms</option>
										<option value="0">0</option>
										<option value="1">1</option>
										<option value="2">2</option>
										<option value="3">3</option>
										<option value="4">4</option>
										<option value="5">5</option>
										<option value="5plus">5+</option>
									</select>
								</div>
							</div>	
							<div class="col-xs-6 col-sm-3">
								<div class="form-group">
									<label class="sr-only" for="search-bathrooms">Bathrooms</label>
									<select id="search-bathrooms" name="search-bathrooms" data-placeholder="Bathrooms" class="chosen-select">
										<option selected="selected" value="Bathrooms">Bathrooms</option>
										<option value="0">0</option>
										<option value="1">1</option>
										<option value="2">2</option>
										<option value="3">3</option>
										<option value="4">4</option>
										<option value="4plus">4+</option>
									</select>
								</div>
							</div>	
							<div class="col-xs-6 col-sm-3">
								<div class="form-group">
									<div class="row pgl-narrow-row">
										<div class="col-xs-6">
											<label class="sr-only" for="search-minprice">Price From</label>
											<select id="search-minprice" name="search-minprice" data-placeholder="Price From" class="chosen-select">
												<option selected="selected" value="Price From">Price From</option>
												<option value="0">0</option>
												<option value="25000">25000</option>
												<option value="50000">50000</option>
												<option value="75000">75000</option>
												<option value="100000">100000</option>
												<option value="150000">150000</option>
												<option value="200000">200000</option>
												<option value="300000">300000</option>
												<option value="500000">500000</option>
												<option value="750000">750000</option>
												<option value="1000000">1000000</option>
											</select>
										</div>
										<div class="col-xs-6">
											<label class="sr-only" for="search-maxprice">Price To</label>
											<select id="search-maxprice" name="search-maxprice" data-placeholder="Price To" class="chosen-select">
												<option selected="selected" value="Price To">Price To</option>
												<option value="25000">25000</option>
												<option value="50000">50000</option>
												<option value="75000">75000</option>
												<option value="100000">100000</option>
												<option value="150000">150000</option>
												<option value="200000">200000</option>
												<option value="300000">300000</option>
												<option value="500000">500000</option>
												<option value="750000">750000</option>
												<option value="1000000">1000000</option>
												<option value="1000000plus">>1000000</option>
											</select>
										</div>
									</div>
								</div>
							</div>	
							<div class="col-xs-6 col-sm-3">
								<div class="form-group">
									<button type="submit" class="btn btn-block btn-primary">Find your home</button>
								</div>
							</div>	
						</div>
						
					</form>
				</div>
			</section>
			<!-- End Advanced Search -->
			
			<!-- Begin Featured -->
			<section class="pgl-featured pgl-bg-grey">
				<div class="container">
					<div class="row">
						<div class="col-md-6 animation">
							<div class="pgl-property featured-item">
								<div class="property-thumb-info">
									<div class="property-thumb-info-image">
										<img alt="" class="img-responsive" src="images/properties/property-featured-1.jpg">
									</div>
									<div class="property-thumb-info-content">
										<h3><a href="property-details.php">Warehouse for Rent in Begampur, Patna</a></h3>
										<p>Near Amar Transport, Begampur, 500 mtrs. before Bakhtiyarpur Toll Plaza, Begampur, Patna</p>
									</div>
								</div>
							</div>
						</div>
						<div class="col-xs-6 col-md-3 animation">
							<div class="pgl-property featured-item">
								<div class="property-thumb-info">
									<div class="property-thumb-info-image">
										<img alt="" class="img-responsive" src="images/properties/property-featured-2.jpg">
									</div>
									<div class="property-thumb-info-content">
										<h3><a href="property-details.php">Commercial Shop for Rent in Rajendar Nagar, Patna</a></h3>
										<p>Dayal Bhawan, Above Blue Medix and Jio Store, Chak Musllahpur, Bhikhana Pahari, Patna.</p>
									</div>
								</div>
							</div>
						</div>
						<div class="col-xs-6 col-md-3 animation">
							<div class="pgl-property featured-item">
								<div class="property-thumb-info">
									<div class="property-thumb-info-image">
										<img alt="" class="img-responsive" src="images/properties/property-featured-3.jpg">
									</div>
									<div class="property-thumb-info-content">
										<h3><a href="property-details.php">Showroom for Rent in Ashok Nagar, Patna</a></h3>
										<p>Ashok Nagar, Patna</p>
									</div>
								</div>
							</div>
						</div>
						<div class="col-xs-6 col-md-3 animation">
							<div class="pgl-property featured-item">
								<div class="property-thumb-info">
									<div class="property-thumb-info-image">
										<img alt="" class="img-responsive" src="images/properties/property-featured-4.jpg">
									</div>
									<div class="property-thumb-info-content">
										<h3><a href="property-details.php">2 BHK 1027 Sq.ft. Residential Apartment for Sale in Phulwari Sharif, Patna</a></h3>
										<p> Phulwari Sharif, Patna by Aristone Homes Pvt.Ltd</p>
									</div>
								</div>
							</div>
						</div>
						<div class="col-xs-6 col-md-3 animation">
							<div class="pgl-property featured-item">
								<div class="property-thumb-info">
									<div class="property-thumb-info-image">
										<img alt="" class="img-responsive" src="images/properties/property-featured-5.jpg">
									</div>
									<div class="property-thumb-info-content">
										<h3><a href="property-details.php">3 BHK 1480 Sq.ft. Residential Apartment for Sale in Phulwari Sharif, Patna</a></h3>
										<p>Phulwari Sharif, Patna by Luckstone Buildtech Private Limited</p>
									</div>
								</div>
							</div>
						</div>
					</div>
					<hr class="top-tall">
				</div>
			</section>
			<!-- End Featured -->
			
			<!-- Begin Properties -->
			<section class="pgl-properties pgl-bg-grey">
				<div class="container">
					<h2>Properties</h2>
					<!-- Nav tabs -->
					<ul class="nav nav-tabs pgl-pro-tabs text-center animation" role="tablist">
						<li class="active"><a href="#all" role="tab" data-toggle="tab">All</a></li>
						<li><a href="#house" role="tab" data-toggle="tab">House</a></li>
						<li><a href="#offices" role="tab" data-toggle="tab">Offices</a></li>
						<li><a href="#apartment" role="tab" data-toggle="tab">Apartment</a></li>
						<li><a href="#residential" role="tab" data-toggle="tab">Residential</a></li>
					</ul>

					<!-- Tab panes -->
					<div class="tab-content">
						<div class="tab-pane active" id="all">
							<div class="row">
								<div class="col-xs-4 animation">
									<div class="pgl-property">
										<div class="property-thumb-info">
											<div class="property-thumb-info-image">
												<img alt="" class="img-responsive" src="images/properties/property-1.jpg">
												<span class="property-thumb-info-label">
													<span class="label price">358,000</span>
													<span class="label forrent">Rent</span>
												</span>
											</div>
											<div class="property-thumb-info-content">
												<h3><a href="property-details.php">Surya Sumitra Sadan 422sqm</a></h3>
												<address>Bailey Road, Patna</address>
											</div>
											<div class="amenities clearfix">
												<ul class="pull-left">
													<li><strong>Area:</strong> 450<sup>m2</sup></li>
												</ul>
												<ul class="pull-right">
													<li><i class="icons icon-bedroom"></i> 3</li>
													<li><i class="icons icon-bathroom"></i> 2</li>
												</ul>
											</div>
										</div>
									</div>
								</div>
								<div class="col-xs-4 animation">
									<div class="pgl-property">
										<div class="property-thumb-info">
											<div class="property-thumb-info-image">
												<img alt="" class="img-responsive" src="images/properties/property-2.jpg">
												<span class="property-thumb-info-label">
													<span class="label price">358,000</span>
												</span>
											</div>
											<div class="property-thumb-info-content">
												<h3><a href="property-details.php">Commercial Shop for rent</a></h3>
												<address>Gandhi Maidan, Patna</address>
											</div>
											<div class="amenities clearfix">
												<ul class="pull-left">
													<li><strong>Area:</strong> 280<sup>m2</sup></li>
												</ul>
												<ul class="pull-right">
													<li><i class="icons icon-bedroom"></i> 3</li>
													<li><i class="icons icon-bathroom"></i> 2</li>
												</ul>
											</div>
										</div>
									</div>
								</div>
								<div class="col-xs-4 animation">
									<div class="pgl-property">
										<div class="property-thumb-info">
											<div class="property-thumb-info-image">
												<img alt="" class="img-responsive" src="images/properties/property-3.jpg">
												<span class="property-thumb-info-label">
													<span class="label price">658,000</span>
													<span class="label forsold">Sold</span>
												</span>
											</div>
											<div class="property-thumb-info-content">
												<h3><a href="property-details.php">3 BHK 1000 Sq.ft. House & Villa for Rent</a></h3>
												<address>Danapur, Mithila Colony, Danapur, Patna</address>
											</div>
											<div class="amenities clearfix">
												<ul class="pull-left">
													<li><strong>Area:</strong> 1000<sup>m2</sup></li>
												</ul>
												<ul class="pull-right">
													<li><i class="icons icon-bedroom"></i> 3</li>
													<li><i class="icons icon-bathroom"></i> 2</li>
												</ul>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="row">
								<div class="col-xs-4 animation">
									<div class="pgl-property">
										<div class="property-thumb-info">
											<div class="property-thumb-info-image">
												<img alt="" class="img-responsive" src="images/properties/property-4.jpg">
												<span class="property-thumb-info-label">
													<span class="label price">35,000</span>
													<span class="label forrent">Rent</span>
												</span>
											</div>
											<div class="property-thumb-info-content">
												<h3><a href="property-details.php">Office Space, VA 24012</a></h3>
												<address>Dak Bunglow Road, Patna </address>
											</div>
											<div class="amenities clearfix">
												<ul class="pull-left">
													<li><strong>Area:</strong> 150<sup>m2</sup></li>
												</ul>
												<ul class="pull-right">
													<li><i class="icons icon-bedroom"></i> 3</li>
													<li><i class="icons icon-bathroom"></i> 2</li>
												</ul>
											</div>
										</div>
									</div>
								</div>
								<div class="col-xs-4 animation">
									<div class="pgl-property">
										<div class="property-thumb-info">
											<div class="property-thumb-info-image">
												<img alt="" class="img-responsive" src="images/properties/property-5.jpg">
												<span class="property-thumb-info-label">
													<span class="label price">358,000</span>
												</span>
											</div>
											<div class="property-thumb-info-content">
												<h3><a href="property-details.php">25689 Acre Residential Plot</a></h3>
												<address>Sipara, Patna</address>
											</div>
											<div class="amenities clearfix">
												<ul class="pull-left">
													<li><strong>Area:</strong> 450<sup>m2</sup></li>
												</ul>
												<ul class="pull-right">
													<li><i class="icons icon-bedroom"></i> 3</li>
													<li><i class="icons icon-bathroom"></i> 2</li>
												</ul>
											</div>
										</div>
									</div>
								</div>
								<div class="col-xs-4 animation">
									<div class="pgl-property">
										<div class="property-thumb-info">
											<div class="property-thumb-info-image">
												<img alt="" class="img-responsive" src="images/properties/property-6.jpg">
												<span class="property-thumb-info-label">
													<span class="label price">358,000</span>
												</span>
											</div>
											<div class="property-thumb-info-content">
												<h3><a href="property-details.php">750 Sq.ft. Residential Plot </a></h3>
												<address>Ashiana Road, Patna </address>
											</div>
											<div class="amenities clearfix">
												<ul class="pull-left">
													<li><strong>Area:</strong> 450<sup>m2</sup></li>
												</ul>
												<ul class="pull-right">
													<li><i class="icons icon-bedroom"></i> 3</li>
													<li><i class="icons icon-bathroom"></i> 2</li>
												</ul>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="tab-pane" id="house">
							<div class="row">
								<div class="col-xs-4 animation">
									<div class="pgl-property">
										<div class="property-thumb-info">
											<div class="property-thumb-info-image">
												<img alt="" class="img-responsive" src="images/properties/property-4.jpg">
												<span class="property-thumb-info-label">
													<span class="label price">358,000</span>
													<span class="label forrent">Rent</span>
												</span>
											</div>
											<div class="property-thumb-info-content">
												<h3><a href="property-details.php">Chatham St NW, Roanoke, VA 24012</a></h3>
												<address>Ferris Park, Jersey City Land in Sales</address>
											</div>
											<div class="amenities clearfix">
												<ul class="pull-left">
													<li><strong>Area:</strong> 450<sup>m2</sup></li>
												</ul>
												<ul class="pull-right">
													<li><i class="icons icon-bedroom"></i> 3</li>
													<li><i class="icons icon-bathroom"></i> 2</li>
												</ul>
											</div>
										</div>
									</div>
								</div>
								<div class="col-xs-4 animation">
									<div class="pgl-property">
										<div class="property-thumb-info">
											<div class="property-thumb-info-image">
												<img alt="" class="img-responsive" src="images/properties/property-5.jpg">
												<span class="property-thumb-info-label">
													<span class="label price">358,000</span>
												</span>
											</div>
											<div class="property-thumb-info-content">
												<h3><a href="property-details.php">Chatham St NW, Roanoke, VA 24012</a></h3>
												<address>Ferris Park, Jersey City Land in Sales</address>
											</div>
											<div class="amenities clearfix">
												<ul class="pull-left">
													<li><strong>Area:</strong> 450<sup>m2</sup></li>
												</ul>
												<ul class="pull-right">
													<li><i class="icons icon-bedroom"></i> 3</li>
													<li><i class="icons icon-bathroom"></i> 2</li>
												</ul>
											</div>
										</div>
									</div>
								</div>
								<div class="col-xs-4 animation">
									<div class="pgl-property">
										<div class="property-thumb-info">
											<div class="property-thumb-info-image">
												<img alt="" class="img-responsive" src="images/properties/property-6.jpg">
												<span class="property-thumb-info-label">
													<span class="label price">358,000</span>
												</span>
											</div>
											<div class="property-thumb-info-content">
												<h3><a href="property-details.php">Chatham St NW, Roanoke, VA 24012</a></h3>
												<address>Ferris Park, Jersey City Land in Sales</address>
											</div>
											<div class="amenities clearfix">
												<ul class="pull-left">
													<li><strong>Area:</strong> 450<sup>m2</sup></li>
												</ul>
												<ul class="pull-right">
													<li><i class="icons icon-bedroom"></i> 3</li>
													<li><i class="icons icon-bathroom"></i> 2</li>
												</ul>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="tab-pane" id="offices">
							<div class="row">
								<div class="col-xs-4 animation">
									<div class="pgl-property">
										<div class="property-thumb-info">
											<div class="property-thumb-info-image">
												<img alt="" class="img-responsive" src="images/properties/property-4.jpg">
												<span class="property-thumb-info-label">
													<span class="label price">358,000</span>
													<span class="label forrent">Rent</span>
												</span>
											</div>
											<div class="property-thumb-info-content">
												<h3><a href="property-details.php">Chatham St NW, Roanoke, VA 24012</a></h3>
												<address>Ferris Park, Jersey City Land in Sales</address>
											</div>
											<div class="amenities clearfix">
												<ul class="pull-left">
													<li><strong>Area:</strong> 450<sup>m2</sup></li>
												</ul>
												<ul class="pull-right">
													<li><i class="icons icon-bedroom"></i> 3</li>
													<li><i class="icons icon-bathroom"></i> 2</li>
												</ul>
											</div>
										</div>
									</div>
								</div>
								<div class="col-xs-4 animation">
									<div class="pgl-property">
										<div class="property-thumb-info">
											<div class="property-thumb-info-image">
												<img alt="" class="img-responsive" src="images/properties/property-5.jpg">
												<span class="property-thumb-info-label">
													<span class="label price">358,000</span>
												</span>
											</div>
											<div class="property-thumb-info-content">
												<h3><a href="property-details.php">Chatham St NW, Roanoke, VA 24012</a></h3>
												<address>Ferris Park, Jersey City Land in Sales</address>
											</div>
											<div class="amenities clearfix">
												<ul class="pull-left">
													<li><strong>Area:</strong> 450<sup>m2</sup></li>
												</ul>
												<ul class="pull-right">
													<li><i class="icons icon-bedroom"></i> 3</li>
													<li><i class="icons icon-bathroom"></i> 2</li>
												</ul>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="tab-pane" id="apartment">
							<div class="row">
								<div class="col-xs-4 animation">
									<div class="pgl-property">
										<div class="property-thumb-info">
											<div class="property-thumb-info-image">
												<img alt="" class="img-responsive" src="images/properties/property-4.jpg">
												<span class="property-thumb-info-label">
													<span class="label price">358,000</span>
													<span class="label forrent">Rent</span>
												</span>
											</div>
											<div class="property-thumb-info-content">
												<h3><a href="property-details.php">Chatham St NW, Roanoke, VA 24012</a></h3>
												<address>Ferris Park, Jersey City Land in Sales</address>
											</div>
											<div class="amenities clearfix">
												<ul class="pull-left">
													<li><strong>Area:</strong> 450<sup>m2</sup></li>
												</ul>
												<ul class="pull-right">
													<li><i class="icons icon-bedroom"></i> 3</li>
													<li><i class="icons icon-bathroom"></i> 2</li>
												</ul>
											</div>
										</div>
									</div>
								</div>
								<div class="col-xs-4 animation">
									<div class="pgl-property">
										<div class="property-thumb-info">
											<div class="property-thumb-info-image">
												<img alt="" class="img-responsive" src="images/properties/property-5.jpg">
												<span class="property-thumb-info-label">
													<span class="label price">358,000</span>
												</span>
											</div>
											<div class="property-thumb-info-content">
												<h3><a href="property-details.php">Chatham St NW, Roanoke, VA 24012</a></h3>
												<address>Ferris Park, Jersey City Land in Sales</address>
											</div>
											<div class="amenities clearfix">
												<ul class="pull-left">
													<li><strong>Area:</strong> 450<sup>m2</sup></li>
												</ul>
												<ul class="pull-right">
													<li><i class="icons icon-bedroom"></i> 3</li>
													<li><i class="icons icon-bathroom"></i> 2</li>
												</ul>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="tab-pane" id="residential">
							<div class="row">
								<div class="col-xs-4 animation">
									<div class="pgl-property">
										<div class="property-thumb-info">
											<div class="property-thumb-info-image">
												<img alt="" class="img-responsive" src="images/properties/property-1.jpg">
												<span class="property-thumb-info-label">
													<span class="label price">358,000</span>
													<span class="label forrent">Rent</span>
												</span>
											</div>
											<div class="property-thumb-info-content">
												<h3><a href="property-details.php">Poolside character home on a wide 422sqm</a></h3>
												<address>Ferris Park, Jersey City Land in Sales</address>
											</div>
											<div class="amenities clearfix">
												<ul class="pull-left">
													<li><strong>Area:</strong> 450<sup>m2</sup></li>
												</ul>
												<ul class="pull-right">
													<li><i class="icons icon-bedroom"></i> 3</li>
													<li><i class="icons icon-bathroom"></i> 2</li>
												</ul>
											</div>
										</div>
									</div>
								</div>
								<div class="col-xs-4 animation">
									<div class="pgl-property">
										<div class="property-thumb-info">
											<div class="property-thumb-info-image">
												<img alt="" class="img-responsive" src="images/properties/property-2.jpg">
												<span class="property-thumb-info-label">
													<span class="label price">358,000</span>
												</span>
											</div>
											<div class="property-thumb-info-content">
												<h3><a href="property-details.php">Presidential Parcel Frames Command Views of Mt. Rushmore</a></h3>
												<address>Ferris Park, Jersey City Land in Sales</address>
											</div>
											<div class="amenities clearfix">
												<ul class="pull-left">
													<li><strong>Area:</strong> 450<sup>m2</sup></li>
												</ul>
												<ul class="pull-right">
													<li><i class="icons icon-bedroom"></i> 3</li>
													<li><i class="icons icon-bathroom"></i> 2</li>
												</ul>
											</div>
										</div>
									</div>
								</div>
								<div class="col-xs-4 animation">
									<div class="pgl-property">
										<div class="property-thumb-info">
											<div class="property-thumb-info-image">
												<img alt="" class="img-responsive" src="images/properties/property-3.jpg">
												<span class="property-thumb-info-label">
													<span class="label price">358,000</span>
													<span class="label forsold">Sold</span>
												</span>
											</div>
											<div class="property-thumb-info-content">
												<h3><a href="property-details.php">Californian Class, Grand Family Proportions</a></h3>
												<address>Ferris Park, Jersey City Land in Sales</address>
											</div>
											<div class="amenities clearfix">
												<ul class="pull-left">
													<li><strong>Area:</strong> 450<sup>m2</sup></li>
												</ul>
												<ul class="pull-right">
													<li><i class="icons icon-bedroom"></i> 3</li>
													<li><i class="icons icon-bathroom"></i> 2</li>
												</ul>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					
				</div>
			</section>
			<!-- End Properties -->
			
			<!-- Begin Agents -->
			<section class="pgl-agents">
				<div class="container">
					<h2>Our Agents</h2>
					<div class="row">
						<div class="col-md-6">
							<div class="pgl-agent-item pgl-bg-light">
								<div class="row pgl-midnarrow-row">
									<div class="col-xs-5">
										<div class="img-thumbnail-medium">
											<a href="agentprofile.html"><img src="images/agents/temp-agent1.jpg" class="img-responsive" alt=""></a>
										</div>
									</div>
									<div class="col-xs-7">
										<div class="pgl-agent-info">
											<small>NO.1</small>
											<h4><a href="agentprofile.html">Surya Nestbuild Ltd.</a></h4>
											<p>We are Dealing in all kinds of Properties. Flats/Apartments, Builders, Real Estate Agents</p>
											<address>
												<i class="fa fa-map-marker"></i> Office : 91 9304574542<br>
												<i class="fa fa-phone"></i> Mobile : 91 9304574542<br>
												<i class="fa fa-fax"></i> Fax : 1-800-666-8888<br>
												<i class="fa fa-envelope-o"></i> Mail: <a href="mailto:squat931@gmail.com">squat931@gmail.com</a>
											</address>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="col-md-6">
							<div class="pgl-agent-item pgl-bg-light">
								<div class="row pgl-midnarrow-row">
									<div class="col-xs-5">
										<div class="img-thumbnail-medium">
											<a href="agentprofile.html"><img src="images/agents/temp-agent2.jpg" class="img-responsive" alt=""></a>
										</div>
									</div>
									<div class="col-xs-7">
										<div class="pgl-agent-info">
											<small>NO.2.1</small>
											<h4><a href="agentprofile.html">BRIGHT HOMES DEVELOPERS AND BUILDERS PVT. LTD.</a></h4>
											<p>BRIGHT HOMES is help the project, buying and selling commercial Shop, Space, Building and Land.</p>
											<address>
												<i class="fa fa-map-marker"></i> Office : 91 9304574542<br>
												<i class="fa fa-phone"></i> Mobile : 91 9304574542<br>
												<i class="fa fa-fax"></i> Fax : 1-800-666-8888<br>
												<i class="fa fa-envelope-o"></i> Mail: <a href="mailto:squat931@gmail.com">squat931@gmail.com</a>
											</address>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<hr class="top-tall">
				</div>
			</section>
			<!-- End Agents -->
			
			<!-- Begin About -->
			<section class="pgl-about">
				<div class="container">
					<div class="row">
						<div class="col-md-4 animation about-item">
							<h2>Who We Are</h2>
							<p><img src="images/content/demo-1.jpg" alt="" class="img-responsive"></p>
							<p>We have a total of 25+ years combined experience dealing exclusively with New York buyers and sellers ipsum dolor sit amet, consectetur adipiscing elit.</p>
							<a href="about-us.php" class="btn btn-lg btn-default">View more</a>
						</div>
						<div class="col-md-4 animation about-item">
							<h2>Why Choose Us</h2>
							<div class="panel-group" id="accordion">
								<div class="panel panel-default pgl-panel">
									<div class="panel-heading">
										<h4 class="panel-title"> <a data-toggle="collapse" data-parent="#accordion" href="#collapseOne">Designed for your business</a> </h4>
									</div>
									<div id="collapseOne" class="panel-collapse collapse in">
										<div class="panel-body"> 
											<p>We deals into all kind of residential and commercial properties. first of i serve a good service for all customers.While an increasing number of property investors are choosing to manage their own rentals, the majority across india still rely on an agent.</p>
										</div>
									</div>
								</div>
								<div class="panel panel-default pgl-panel">
									<div class="panel-heading">
										<h4 class="panel-title"> <a data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" class="collapsed">Saves time & Money</a> </h4>
									</div>
									<div id="collapseTwo" class="panel-collapse collapse">
										<div class="panel-body"> <p>Not only on a day-to-day basis, in dealing with rent collection and tenancy issues, but also every now and then, something won’t go according to plan, such as a maintenance issue or tribunal matters. And in resolving these situations, it will feel like a full time job. Most people do not have the spare time to handle this,” Mr Simpson said. With their pricing advice, leasing skills and negotiation and maintenance contacts, a good agent can save an owner a big chunk of money and help them make a larger profit year-on-year, he added.</p> </div>
									</div>
								</div>
								<div class="panel panel-default pgl-panel">
									<div class="panel-heading">
										<h4 class="panel-title"> <a data-toggle="collapse" data-parent="#accordion" href="#collapseThree" class="collapsed">The referrals are powerful</a> </h4>
									</div>
									<div id="collapseThree" class="panel-collapse collapse">
										<div class="panel-body">
											<p>Managing a property requires the expertise of many professionals and a good agent will refer an owner to reputable professionals who will “help them realise their property investment goals sooner.</p>
										</div>
									</div>
								</div>
								<div class="panel panel-default pgl-panel">
									<div class="panel-heading">
										<h4 class="panel-title"> <a data-toggle="collapse" data-parent="#accordion" href="#collapseFouth" class="collapsed">How to pick a good agent</a> </h4>
									</div>
									<div id="collapseFouth" class="panel-collapse collapse">
										<div class="panel-body">
											<p>Like most things, the best way to find a great agent is to ask around.“Do any of your friends or relatives own an investment property? Who do they use? Do they recommend them? If you don’t know any, find the top three most active agents in your area. This is easily found by searching current for lease properties ,
                                            Look for experience and the quality of their team, which are major factors in success. Do not go with the cheapest option, he said, as “they are cheap for a reason!”
                                            </p>
										</div>
									</div>
								</div>
								<div class="panel panel-default pgl-panel">
									<div class="panel-heading">
										<h4 class="panel-title"> <a data-toggle="collapse" data-parent="#accordion" href="#collapseFive" class="collapsed">Quality tenants are a given</a> </h4>
									</div>
									<div id="collapseFive" class="panel-collapse collapse">
										<div class="panel-body">
											<p>It’s self-evident that owners want good tenants who will pay on time, every time, and look after their property, so tenant selection is vital and also where an agent comes into their own.“Most people wouldn’t know the difference between a bad tenant and a good one. It takes some experience to pick up on subtle clues in the limited interaction you have with the tenant before approving them,</p>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="col-md-4 animation about-item">
							<h2>Happy Clients</h2>
							<div class="owl-carousel pgl-bg-dark pgl-testimonial" data-plugin-options='{"items": 1, "pagination": false, "autoHeight": true}'>
								<div class="col-md-12">
									<div class="testimonial-author">
										<div class="img-thumbnail-small img-circle">
											<img src="images/agents/agent1.jpg" height="100px" class="img-circle" alt="Andrew MCCarthy">
										</div>
										<h4>rajan singh</h4>
										<p><strong>Selller</strong></p>
									</div>
									<div class="divider-quote-sign"><span>“</span></div>
									<blockquote class="testimonial">
										<p>I posses one of my father's properties and wanted to get it revamped by a builder. I contacted this builder around five months back. The builder is extremely reliable and suggests the best plans. Thanks!</p>
									</blockquote>
								</div>
								<div class="col-md-12">
									<div class="testimonial-author">
										<div class="img-thumbnail-small img-circle">
											<img src="images/agents/agent-1.jpg" class="img-circle" alt="John Smith">
										</div>
										<h4>riya raj</h4>
										<p><strong>Selller</strong></p>
									</div>
									<div class="divider-quote-sign"><span>“</span></div>
									<blockquote class="testimonial">
										<p>This builder has helped me in getting my building constructed within the promised time frame and as per the modern trends. This builder was very supportive and always provided appropriate suggestion to me considering my requirements.</p>
									</blockquote>
								</div>
							</div>
						</div>
					</div>
				</div>
			</section>
			<!-- End About -->
			
		</div>
		<!-- End Main -->


<?php include('includes/footer.php') ?>