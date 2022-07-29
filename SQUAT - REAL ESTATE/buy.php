<?php/*  include('authentication.php'); */ ?>
<?php include('includes/header.php'); ?>
<?php include('includes/connection.php'); ?>
<!-- Begin Main -->
<div role="main" class="main pgl-bg-grey">
	<!-- Begin page top -->
	<section class="page-top">
		<div class="container">
			<div class="page-top-in">
				<h2><span>Buy </span></h2>
			</div>
		</div>
	</section>
	<!-- Begin Advanced Search -->
	<section class="pgl-advanced-search pgl-bg-light">
		<div class="container">
			<form name="advancedsearch">
				<div class="row">
					<div class="col-xs-6 col-sm-3">
						<div class="form-group">
							<label class="sr-only" for="property-status">Property Status</label>
							<select id="property-status" name="property-status" data-placeholder="Property Status"
								class="chosen-select">
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
							<select id="property-types" name="property-types" data-placeholder="Property Types"
								class="chosen-select">
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
							<select id="search-bedrooms" name="search-bedrooms" data-placeholder="Bedrooms"
								class="chosen-select">
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
							<select id="search-bathrooms" name="search-bathrooms" data-placeholder="Bathrooms"
								class="chosen-select">
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
									<select id="search-minprice" name="search-minprice" data-placeholder="Price From"
										class="chosen-select">
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
									<select id="search-maxprice" name="search-maxprice" data-placeholder="Price To"
										class="chosen-select">
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

	<section class="pgl-featured">
		<div class="container">
			<h2>Featured Property</h2>
			<div class="row">
				<div class="owl-carousel pgl-pro-slide"
					data-plugin-options='{"items": 4, "singleItem": false, "autoPlay": false, "pagination": false}'>
					<div class="col-sm-12 animation">
						<div class="pgl-property featured-item">
							<div class="property-thumb-info">
								<div class="property-thumb-info-image">
									<img alt="" class="img-responsive" src="images/agents/rent1.jpg">
								</div>
								<div class="property-thumb-info-content">
									<h3><a href="property-details.php">3 BHK 2500 Sq.ft. Builder Floor for Rent</a></h3>
									<p>Anand Niketan, Block D, Anand Niketan, Delhi</p>
								</div>
							</div>
						</div>
					</div>
					<div class="col-sm-12 animation">
						<div class="pgl-property featured-item">
							<div class="property-thumb-info">
								<div class="property-thumb-info-image">
									<img alt="" class="img-responsive" src="images/agents/rent2.jpg">
								</div>
								<div class="property-thumb-info-content">
									<h3><a href="property-details.php">2 BHK 900 Sq.ft. Builder Floor for Rent</a></h3>
									<p>Mahavir Enclave Part 2, Mahavir Enclave, Delhi</p>
								</div>
							</div>
						</div>
					</div>
					<div class="col-sm-12 animation">
						<div class="pgl-property featured-item">
							<div class="property-thumb-info">
								<div class="property-thumb-info-image">
									<img alt="" class="img-responsive" src="images/agents/rent3.jpg">
								</div>
								<div class="property-thumb-info-content">
									<h3><a href="property-details.php">3 BHK 1320 Sq.ft. Builder Floor for Rent</a></h3>
									<p>Rohini Sector 11, Rohini, Delhi .</p>
								</div>
							</div>
						</div>
					</div>
					<div class="col-sm-12 animation">
						<div class="pgl-property featured-item">
							<div class="property-thumb-info">
								<div class="property-thumb-info-image">
									<img alt="" class="img-responsive" src="images/agents/rent4.jpg">
								</div>
								<div class="property-thumb-info-content">
									<h3><a href="property-details.php">2 BHK 550 Sq.ft. Builder Floor for Rent</a></h3>
									<p> Shastri Nagar Block E, Shastri Nagar, Delhi.</p>
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
									<h3><a href="property-details.php">Spring Gate DrUNIT 4106</a></h3>
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
									<h3><a href="property-details.php">Chatham St NW, Roanoke</a></h3>
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
	<div class="container">
	<h2>Recent Property</h2>
		<div class="row">
			<div class="col-md-12">
				<div class="card">
					<!-- <div class="card-header">
						<h3 class="card-title">Sell Form Details</h3>
					</div> -->
					<!-- /.card-header -->
					<div class="card-body">
						<table id="example1" class="table table-bordered table-striped">
							<thead>
								<tr>
									<th> SELL ID</th>		
									<th>PROJECT</th>
									<th>MAINTENANCE</th>
									<th>FLOORS</th>
									<th>ADDRESS</th>
									<th>BEDROOMS</th>
									<th>FURNISHING</th>
									<th>CONSTRACTIONS STATUS</th>
									<th>EXTERIOR</th>
									<!-- <th>DATE & TIME</th> -->
								</tr>
							</thead>
							<tbody>
								<?php
                  $query="SELECT * FROM sellform";
                  $query_run=mysqli_query($con,$query);

                  if(mysqli_num_rows($query_run) > 0)
                  {
						?>

						<?php
						foreach($query_run as $row)
						{
						/* echo $row['name']; */
						?>
									<tr>
										<td>
											<?php echo $row['id']; ?>
										</td>
										<td>
											<a href="index.php"><?php echo $row['project']; ?></a>
										</td>
										<td>
											<?php echo $row['maintenance']; ?>
										</td>
										<td>
											<?php echo $row['total_floor']; ?>
										</td>
										<td>
											<?php echo $row['address']; ?>
										</td>
										<td>
											<?php echo $row['bedrooms']; ?>
										</td>
										<td>
											<?php echo $row['furnishing']; ?>
										</td>
										<td>
											<?php echo $row['const_status']; ?>
										</td>
										<td>
											<?php echo '<img src="upload/'.$row['exterior'].' " width="100px" height="100px" alt="no image1">'?>
										</td>
										<td>
											<a href="contact.php" class="btn btn-info">GET PHONE NO.</a>
										</td>
										<td>
											<a href="property-details.php" class="btn btn-danger">PROPERTY DETAILS</a>
										</td>
									</tr>
									<?php 
						}
                	}
                  	else
                  	{
                    	?>
						<tr>
							<td>NO record found</td>
						</tr>
						<?php
                    }
               		?>
							</tbody>
						</table>
					</div>
				</div>
			</div>
		</div>
	</div>










	<?php include('includes/footer.php'); ?>