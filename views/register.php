<div class="account-form">
	<div class="account-head" style="background-image:url(./assets/images/background/bg2.jpg);">
		<a href="<?php echo ROOT_PATH; ?>"><img src="./assets/images/logo-white-2.png" alt=""></a>
	</div>
	<div class="account-form-inner">
		<div class="account-container">
			<div class="heading-bx left">
				<h2 class="title-head">Sign Up <span>Now</span></h2>
				<p>Login Your Account <a href="<?php echo ROOT_PATH; ?>/login">Click here</a></p>
				<?php echo displayMessage(); ?>
			</div>	
			<form class="contact-bx" action="<?php echo ROOT_PATH; ?>/register" method="POST">
				<div class="row placeani">
					<div class="col-lg-12">
						<div class="form-group">
							<div class="input-group">
								<label>Your First Name</label>
								<input name="first_name" type="text" required="" class="form-control" value="<?php echo $user_data['first_name']??$user_data['first_name']; ?>">
							</div>
						</div>
					</div>
					<div class="col-lg-12">
						<div class="form-group">
							<div class="input-group">
								<label>Your Last Name</label>
								<input name="last_name" type="text" required="" class="form-control" value="<?php echo $user_data['last_name']??$user_data['last_name']; ?>">
							</div>
						</div>
					</div>
					<div class="col-lg-12">
						<div class="form-group">
							<div class="input-group">
								<label>Your Email Address</label>
								<input name="email" type="email" required="" class="form-control" value="<?php echo $user_data['email']??$user_data['email']; ?>">
							</div>
						</div>
					</div>
					<div class="col-lg-12">
						<div class="form-group">
							<div class="input-group"> 
								<label>Your Password</label>
								<input name="password" type="password" class="form-control" required="">
							</div>
						</div>
					</div>
					<div class="col-lg-12 m-b30">
						<button name="submit" type="submit" value="Submit" class="btn button-md">Sign Up</button>
					</div>
					<div class="col-lg-12">
						<h6>Sign Up with Social media</h6>
						<div class="d-flex">
							<a class="btn flex-fill m-r5 facebook" href="#"><i class="fa fa-facebook"></i>Facebook</a>
							<a class="btn flex-fill m-l5 google-plus" href="#"><i class="fa fa-google-plus"></i>Google Plus</a>
						</div>
					</div>
				</div>
			</form>
		</div>
	</div>
</div>