<?php include('includes/header.php') ?>

<!-- Begin Main -->
<div role="main" class="main pgl-bg-grey">
			<!-- Begin page top -->
			<section class="page-top">
				<div class="container">
					<div class="page-top-in">
						<h2><span>4-BHK-Flat</span></h2>
					</div>
				</div>
			</section>
			<!-- End page top -->

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
<section class="pgl-featured">
				<div class="container">
					<h2>Featured Properties</h2>
					<div class="row">
						<div class="owl-carousel pgl-pro-slide" data-plugin-options='{"items": 4, "singleItem": false, "autoPlay": false, "pagination": false}'>
							<div class="col-sm-12 animation">
								<div class="pgl-property featured-item">
									<div class="property-thumb-info">
										<div class="property-thumb-info-image">
											<img alt="" class="img-responsive" src="images/properties/property-featured-2.jpg">
										</div>
										<div class="property-thumb-info-content">
											<h3><a href="property-detail.html">J St, Modesto, CA 95351</a></h3>
											<p>Amet luctus nisl tempus.</p>
										</div>
									</div>
								</div>
							</div>
							<div class="col-sm-12 animation">
								<div class="pgl-property featured-item">
									<div class="property-thumb-info">
										<div class="property-thumb-info-image">
											<img alt="" class="img-responsive" src="images/properties/property-featured-3.jpg">
										</div>
										<div class="property-thumb-info-content">
											<h3><a href="property-detail.html">Spring Gate DrUNIT 4106</a></h3>
											<p>Amet luctus nisl tempus.</p>
										</div>
									</div>
								</div>
							</div>
							<div class="col-sm-12 animation">
								<div class="pgl-property featured-item">
									<div class="property-thumb-info">
										<div class="property-thumb-info-image">
											<img alt="" class="img-responsive" src="images/properties/property-featured-4.jpg">
										</div>
										<div class="property-thumb-info-content">
											<h3><a href="property-detail.html">Chatham St NW, Roanoke</a></h3>
											<p>Amet luctus nisl tempus.</p>
										</div>
									</div>
								</div>
							</div>
							<div class="col-sm-12 animation">
								<div class="pgl-property featured-item">
									<div class="property-thumb-info">
										<div class="property-thumb-info-image">
											<img alt="" class="img-responsive" src="images/properties/property-featured-5.jpg">
										</div>
										<div class="property-thumb-info-content">
											<h3><a href="property-detail.html">Stockton, CA 95215</a></h3>
											<p>Amet luctus nisl tempus.</p>
										</div>
									</div>
								</div>
							</div>
							<div class="col-sm-12 animation">
								<div class="pgl-property featured-item">
									<div class="property-thumb-info">
										<div class="property-thumb-info-image">
											<img alt="" class="img-responsive" src="images/properties/property-featured-3.jpg">
										</div>
										<div class="property-thumb-info-content">
											<h3><a href="property-detail.html">Spring Gate DrUNIT 4106</a></h3>
											<p>Amet luctus nisl tempus.</p>
										</div>
									</div>
								</div>
							</div>
							<div class="col-sm-12 animation">
								<div class="pgl-property featured-item">
									<div class="property-thumb-info">
										<div class="property-thumb-info-image">
											<img alt="" class="img-responsive" src="images/properties/property-featured-4.jpg">
										</div>
										<div class="property-thumb-info-content">
											<h3><a href="property-detail.html">Chatham St NW, Roanoke</a></h3>
											<p>Amet luctus nisl tempus.</p>
										</div>
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
					<h2>Offfice house</h2>
					<div class="properties-full">
						<div class="listing-header clearfix">
							<ul class="list-inline list-icons pull-left">
								<li class="active"><a href="grid-fullwidth-4-column.html"><i class="fa fa-th"></i></a></li>
								<li><a href="list-fullwidth.html"><i class="fa fa-th-list"></i></a></li>
								<li><a href="list-map.html"><i class="fa fa-map-marker"></i></a></li>
							</ul>
							<ul class="list-inline list-sort pull-right">
								<li><label for="order-status">Order</label></li>
								<li>
									<select id="order-status" name="order-status" data-placeholder="Order" class="chosen-select">
										<option value="Descending">Descending</option>
										<option value="Ascending">Ascending</option>
									</select>
								</li>
								<li><label for="sortby-status">Sort by</label></li>
								<li>
									<select id="sortby-status" name="sortby-status" data-placeholder="Sort by" class="chosen-select">
										<option value="Name">Name</option>
										<option value="Area">Area</option>
										<option value="Date">Date</option>
									</select>
								</li>
							</ul>
						</div>
						<div class="row">
							<div class="col-xs-6 col-md-3 animation">
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
											<h3><a href="property-detail.html">Poolside character home on a wide 422sqm</a></h3>
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
							<div class="col-xs-6 col-md-3 animation">
								<div class="pgl-property">
									<div class="property-thumb-info">
										<div class="property-thumb-info-image">
											<img alt="" class="img-responsive" src="images/properties/property-2.jpg">
											<span class="property-thumb-info-label">
												<span class="label price">358,000</span>
											</span>
										</div>
										<div class="property-thumb-info-content">
											<h3><a href="property-detail.html">Presidential Parcel Frames Command Views</a></h3>
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
							<div class="col-xs-6 col-md-3 animation">
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
											<h3><a href="property-detail.html">Californian Class, Grand Family Proportions</a></h3>
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
							<div class="col-xs-6 col-md-3 animation">
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
											<h3><a href="property-detail.html">Californian Class, Grand Family Proportions</a></h3>
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
						<div class="row">
							<div class="col-xs-6 col-md-3 animation">
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
											<h3><a href="property-detail.html">Chatham St NW, Roanoke, VA 24012</a></h3>
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
							<div class="col-xs-6 col-md-3 animation">
								<div class="pgl-property">
									<div class="property-thumb-info">
										<div class="property-thumb-info-image">
											<img alt="" class="img-responsive" src="images/properties/property-5.jpg">
											<span class="property-thumb-info-label">
												<span class="label price">358,000</span>
											</span>
										</div>
										<div class="property-thumb-info-content">
											<h3><a href="property-detail.html">Chatham St NW, Roanoke, VA 24012</a></h3>
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
							<div class="col-xs-6 col-md-3 animation">
								<div class="pgl-property">
									<div class="property-thumb-info">
										<div class="property-thumb-info-image">
											<img alt="" class="img-responsive" src="images/properties/property-6.jpg">
											<span class="property-thumb-info-label">
												<span class="label price">358,000</span>
											</span>
										</div>
										<div class="property-thumb-info-content">
											<h3><a href="property-detail.html">Chatham St NW, Roanoke, VA 24012</a></h3>
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
							<div class="col-xs-6 col-md-3 animation">
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
											<h3><a href="property-detail.html">Chatham St NW, Roanoke, VA 24012</a></h3>
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
						<ul class="pagination">
							<li class="active"><a href="#">1 <span class="sr-only">(current)</span></a></li>
							<li><a href="#">2</a></li>
							<li><a href="#">3</a></li>
							<li><a href="#">Next</a></li>
					   </ul>
					</div>
				</div>
			</section>
			<!-- End Properties -->
			
		</div>
		<!-- End Main -->
<?php include('includes/footer.php') ?>