<?php include('includes/header.php') ?>

<!-- Begin Main -->
<div role="main" class="main pgl-bg-grey">
			<!-- Begin page top -->
			<section class="page-top">
				<div class="container">
					<div class="page-top-in">
						<h2><span>Map with property</span></h2>
					</div>
				</div>
			</section>
			<!-- End page top -->
            <!-- Begin Properties -->
			<section class="pgl-properties-map pgl-bg-grey">
				<div class="container">
					<h2>Offfice house</h2>
					<div class="properties-full">
						<div class="listing-header clearfix">
							<ul class="list-inline list-icons pull-left">
								<li><a href="grid-fullwidth-4-column.html"><i class="fa fa-th"></i></a></li>
								<li><a href="list-fullwidth.html"><i class="fa fa-th-list"></i></a></li>
								<li class="active"><a href="list-map.html"><i class="fa fa-map-marker"></i></a></li>
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
						
						<div id="properties_map" class="map pgl-bg-dark">
							
						</div>
						
					</div>
				</div>
			</section>
			<!-- End Properties -->
			
			<!-- Begin Featured -->
			<section class="pgl-featured pgl-featured-bottom">
				<div class="container">
					<h2>Featured Properties</h2>
					<div class="row">
						<div class="owl-carousel pgl-pro-slide" data-plugin-options='{"items": 4, "singleItem": false, "autoPlay": false, "pagination": false}'>
							<div class="col-md-12 animation">
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
							<div class="col-md-12 animation">
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
							<div class="col-md-12 animation">
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
							<div class="col-md-12 animation">
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
							<div class="col-md-12 animation">
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
							<div class="col-md-12 animation">
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
				</div>
			</section>
			<!-- End Featured -->
		</div>
		<!-- End Main -->

<?php include('includes/footer.php') ?>