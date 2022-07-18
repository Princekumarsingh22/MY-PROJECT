<?php include('includes/header.php') ?>
			<!-- Begin content with sidebar -->
			<div class="container">
				<div class="row">
					<div class="col-md-9 content">
						<div class="contact">
							<p>Having Questions? Tell us about your Business, Our experts will check all the aspects and call you back to explain how RealEstateIndia.com would help you to get quotes for your Business.</p>
							<div id="contact-map" class="pgl-bg-light">
                            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d7194.180351726923!2d85.10598212507702!3d25.63513248477736!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39ed59d13a4b560b%3A0xb7950e8e8cc670e7!2sKurji%2C%20Patna%2C%20Bihar!5e0!3m2!1sen!2sin!4v1657869506106!5m2!1sen!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
							</div>
                            <br><br>
							<div class="row">
								<div class="col-sm-6">
									<strong>Your address</strong>
									<address>Kurji More, Near Digha PullPatna 800013</address>
								</div>
								<div class="col-sm-6">
									<address>
										<strong>Phone.</strong>91 9304574542 <br>
										<strong>Fax.</strong> 012.666.999<br>
										<strong>Email.</strong> squat931@gmail.com
									</address>
								</div>
							</div>
							<hr>
							<form id="contact-form" name="form1" method="post" action="code.php">
								<div class="form-group">
									<div class="row">
										<div class="col-sm-6">
											<label for="name">Your Name*</label>
											<input type="text" name="name" id="name" class="form-control" data-msg-required="Please enter your name." required>
										</div>
										<div class="col-sm-6">
											<label for="customer_mail">Your Email*</label>
											<input type="email" name="email" id="customer_mail" class="form-control" data-msg-required="Please enter your email address." data-msg-email="Please enter a valid email address." required>
										</div>
									</div>
								</div>
								<div class="form-group">
									<div class="row">
										<div class="col-sm-6">
											<label for="subject">Subject*</label>
											<input type="text" name="subject" id="subject" class="form-control" data-msg-required="Please enter the subject." required>
										</div>
										<div class="col-sm-6">
											<label for="website">Website</label>
											<input type="text" name="website" id="website" class="form-control">
										</div>
									</div>
								</div>
								<div class="form-group">
									<label for="comments">Your Message*</label>
									<textarea rows="9" name="message" id="comments" class="form-control" data-msg-required="Please enter your message." required></textarea>
								</div>
								<div class="form-group">
									<input type="submit" value="Submit" class="btn btn-primary min-wide" name="contact_btn" data-loading-text="Loading...">
								</div>
							</form>
						</div>
						
					</div>
					<div class="col-md-3 sidebar">
						
						<!-- Begin Our Agents -->
						<aside class="block pgl-agents pgl-bg-light">
							<h3>Our Agents</h3>
							<div class="owl-carousel pgl-pro-slide pgl-agent-item" data-plugin-options='{"items": 1, "pagination": false, "autoHeight": true}'>

								<div class="pgl-agent-item">
									<div class="img-thumbnail-medium">
										<a href="agentprofile.html"><img src="images/agents/temp-agent1.jpg" class="img-responsive" alt=""></a>
									</div>
									<div class="pgl-agent-info">
										<small>NO.1</small>
										<h4><a href="agentprofile.html">Surya Nestbuild Ltd.</a></h4>
										<address>
											<i class="fa fa-map-marker"></i> Office : 91 9304574542<br>
											<i class="fa fa-phone"></i> Mobile : 9304574542<br>
											<i class="fa fa-fax"></i> Fax : 1-800-666-8888<br>
											<i class="fa fa-envelope-o"></i> Mail: <a href="mailto:squat931@gmail.com">squat931@gmail.com</a>
										</address>
									</div>	
								</div>

								<div class="pgl-agent-item">
									<div class="img-thumbnail-medium">
										<a href="agentprofile.html"><img src="images/agents/temp-agent2.jpg" class="img-responsive" alt=""></a>
									</div>
									<div class="pgl-agent-info">
										<small>NO.2.1</small>
										<h4><a href="agentprofile.html">Rahul Builder</a></h4>
										<address>
											<i class="fa fa-map-marker"></i> Office : 91 9973007530<br>
											<i class="fa fa-phone"></i> Mobile : 91 8712369878<br>
											<i class="fa fa-fax"></i> Fax : 1-800-666-8888<br>
											<i class="fa fa-envelope-o"></i> Mail: <a href="mailto:squat931@gmail.com">squat931@gmail.com</a>
										</address>
									</div>	
								</div>
								
							</div>
						</aside>
						<!-- End Our Agents -->
						
						<!-- Begin Tabs -->
						<aside class="block tabs pgl-bg-light">
							<ul class="nav nav-tabs second-tabs">
								<li class="active"><a href="#popularPosts" data-toggle="tab"><i class="icon icon-star"></i> Popular</a></li>
								<li><a href="#latestComments" data-toggle="tab">Comments</a></li>
							</ul>
							<div class="tab-content">
								<div class="tab-pane active" id="popularPosts">
									<ul class="list-unstyled simple-post-list">
										<li>
											<div class="post-image">
												<a href="blog-single.html"><img class="img-responsive" src="images/blog/demo-thumb-7.jpg" alt="Blog"></a>
											</div>
											<div class="post-info">
												<a href="blog-single.html">Proin rutrum nisi eu ante mattis sit amet</a>
												<div class="post-meta">
													<i class="fa fa-eye"></i> 113 views
												</div>
											</div>
										</li>
										<li>
											<div class="post-image">
												<a href="blog-single.html"><img class="img-responsive" src="images/blog/demo-thumb-6.jpg" alt="Blog"></a>
											</div>
											<div class="post-info">
												<a href="blog-single.html">Sed non mauris vitae erat consequat</a>
												<div class="post-meta">
													<i class="fa fa-eye"></i> 113 views
												</div>
											</div>
										</li>
										<li>
											<div class="post-image">
												<a href="blog-single.html"><img class="img-responsive" src="images/blog/demo-thumb-5.jpg" alt="Blog"></a>
											</div>
											<div class="post-info">
												<a href="blog-single.html">Nullam ac urna eu felis dapibus</a>
												<div class="post-meta">
													<i class="fa fa-eye"></i> 113 views
												</div>
											</div>
										</li>
										<li>
											<div class="post-image">
												<a href="blog-single.html"><img class="img-responsive" src="images/blog/demo-thumb-4.jpg" alt="Blog"></a>
											</div>
											<div class="post-info">
												<a href="blog-single.html">Class aptent taciti sociosqu ad litora</a>
												<div class="post-meta">
													<i class="fa fa-eye"></i> 113 views
												</div>
											</div>
										</li>
										<li>
											<div class="post-image">
												<a href="blog-single.html"><img class="img-responsive" src="images/blog/demo-thumb-3.jpg" alt="Blog"></a>
											</div>
											<div class="post-info">
												<a href="blog-single.html">Ac urna eu felis condimentum</a>
												<div class="post-meta">
													<i class="fa fa-eye"></i> 113 views
												</div>
											</div>
										</li>
									</ul>
								</div>
								
								<div class="tab-pane" id="latestComments">
									<ul class="list-unstyled simple-post-list">
										<li>
											<div class="post-image">
												<a href="blog-single.html"><img class="img-responsive" src="images/blog/demo-thumb-2.jpg" alt="Blog"></a>
											</div>
											<div class="post-info">
												<a href="blog-single.html">Proin rutrum nisi eu ante mattis sit amet</a>
												<div class="post-meta">
													<i class="fa fa-eye"></i> 117 views
												</div>
											</div>
										</li>
										<li>
											<div class="post-image">
												<a href="blog-single.html"><img class="img-responsive" src="images/blog/demo-thumb-3.jpg" alt="Blog"></a>
											</div>
											<div class="post-info">
												<a href="blog-single.html">Nullam ac urna eu felis dapibus</a>
												<div class="post-meta">
													<i class="fa fa-eye"></i> 19 views
												</div>
											</div>
										</li>
										<li>
											<div class="post-image">
												<a href="blog-single.html"><img class="img-responsive" src="images/blog/demo-thumb-4.jpg" alt="Blog"></a>
											</div>
											<div class="post-info">
												<a href="blog-single.html">Class aptent taciti sociosqu ad litora</a>
												<div class="post-meta">
													<i class="fa fa-eye"></i> 113 views
												</div>
											</div>
										</li>
										<li>
											<div class="post-image">
												<a href="blog-single.html"><img class="img-responsive" src="images/blog/demo-thumb-3.jpg" alt="Blog"></a>
											</div>
											<div class="post-info">
												<a href="blog-single.html">Ac urna eu felis condimentum</a>
												<div class="post-meta">
													<i class="fa fa-eye"></i> 113 views
												</div>
											</div>
										</li>
									</ul>
								</div>
							</div>
						</aside>
						<!-- End Tabs -->
						
					</div>
				</div>	
			</div>
			<!-- End content with sidebar -->
			
		</div>
		<!-- End Main -->

<?php include('includes/footer.php') ?>