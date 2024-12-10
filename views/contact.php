<div class="page-content bg-white">
	<!-- inner page banner -->
	<div class="page-banner ovbl-dark" style="background-image:url(assets/images/banner/banner3.jpg);">
		<div class="container">
			<div class="page-banner-entry">
				<h1 class="text-white">Contact Us</h1>
			</div>
		</div>
	</div>
	<!-- Breadcrumb row -->
	<div class="breadcrumb-row">
		<div class="container">
			<ul class="list-inline">
				<li><a href="#">Home</a></li>
				<li>Contact Us</li>
			</ul>
		</div>
	</div>
	<!-- Breadcrumb row END -->

	<!-- inner page banner -->
	<div class="page-banner contact-page section-sp2">
		<div class="container">
			<div class="row">
				<div class="col-lg-5 col-md-5 m-b30">
					<div class="bg-primary text-white contact-info-bx">
						<h2 class="m-b10 title-head">Contact <span>Information</span></h2>
						<p>Check out our location</p>
						<div class="widget widget_getintuch">	
							<ul>
								<li><i class="ti-location-pin"></i>345 6 Ave SE, Calgary, AB T2G 4V1</li>
								<li><i class="ti-mobile"></i>+1 800-123-4567 (24/7 Support Line)</li>
								<li><i class="ti-email"></i>info@techspaceacademy.ca</li>
							</ul>
						</div>
						<h5 class="m-t0 m-b20">Follow Us</h5>
						<ul class="list-inline contact-social-bx">
							<li><a href="#" class="btn outline radius-xl"><i class="fa fa-facebook"></i></a></li>
							<li><a href="#" class="btn outline radius-xl"><i class="fa fa-twitter"></i></a></li>
							<li><a href="#" class="btn outline radius-xl"><i class="fa fa-linkedin"></i></a></li>
							<li><a href="#" class="btn outline radius-xl"><i class="fa fa-google-plus"></i></a></li>
						</ul>
					</div>
				</div>
				<div class="col-lg-7 col-md-7">
					<form class="contact-bx ajax-form" action="<?php echo ROOT_PATH; ?>/contact" method="POST">
					<div class="ajax-message"></div>
						<div class="heading-bx left">
							<h2 class="title-head">Get In <span>Touch</span></h2>
							<p>We are not far, just a click.</p>
						</div>
						<div class="row placeani">
							<div class="col-lg-6">
								<div class="form-group">
									<div class="input-group">
										<label>Your Name</label>
										<input name="name" type="text" required class="form-control valid-character">
									</div>
								</div>
							</div>
							<div class="col-lg-6">
								<div class="form-group">
									<div class="input-group"> 
										<label>Your Email Address</label>
										<input name="email" type="email" class="form-control" required >
									</div>
								</div>
							</div>
							<div class="col-lg-6">
								<div class="form-group">
									<div class="input-group">
										<label>Your Phone</label>
										<input name="phone" type="text" required class="form-control int-value">
									</div>
								</div>
							</div>
							<div class="col-lg-6">
								<div class="form-group">
									<div class="input-group">
										<label>Subject</label>
										<input name="subject" type="text" required class="form-control">
									</div>
								</div>
							</div>
							<div class="col-lg-12">
								<div class="form-group">
									<div class="input-group">
										<label>Type Message</label>
										<textarea name="message" rows="4" class="form-control" required ></textarea>
									</div>
								</div>
							</div>
							
							<div class="col-lg-12">
								<button name="submit" type="submit" value="Submit" class="btn button-md"> Send Message</button>
							</div>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
	<!-- inner page banner END -->
</div>