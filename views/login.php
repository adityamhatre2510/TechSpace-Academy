<div class="account-form">
	<div class="account-head" style="background-image:url(./assets/images/background/bg2.jpg);">
		<a href="<?php echo ROOT_PATH; ?>"><img src="./assets/images/logo-white-2.png" alt=""></a>
	</div>
	<div class="account-form-inner">
		<div class="account-container">
			<div class="heading-bx left">
				<h2 class="title-head">Login to your <span>Account</span></h2>
				<p>Don't have an account? <a href="<?php echo ROOT_PATH; ?>/register">Create one here</a></p>
			</div>	
			<form class="contact-bx" action="<?php echo ROOT_PATH; ?>/login" method="POST">
				<div class="row placeani">
					<div class="col-lg-12">
						<div class="form-group">
							<div class="input-group">
								<label>Your Email</label>
								<input name="email" type="email" required="" class="form-control" />
							</div>
						</div>
					</div>
					<div class="col-lg-12">
						<div class="form-group">
							<div class="input-group"> 
								<label>Your Password</label>
								<input name="password" type="password" class="form-control" required="" />
							</div>
						</div>
					</div>
					<div class="col-lg-12">
						<div class="form-group form-forget">
							<div class="custom-control custom-checkbox">
								<input type="checkbox" class="custom-control-input" id="customControlAutosizing">
								<label class="custom-control-label" for="customControlAutosizing">Remember me</label>
							</div>
							<a href="<?php echo ROOT_PATH; ?>/forget-password" class="ml-auto">Forgot Password?</a>
						</div>
					</div>
					<div class="col-lg-12 m-b30">
						<button name="submit" type="submit" value="Submit" class="btn button-md">Login</button>
					</div>
					<div class="col-lg-12">
						<h6>Login with Social media</h6>
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