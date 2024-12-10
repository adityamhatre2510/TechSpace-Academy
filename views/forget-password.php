<div class="account-form">
	<div class="account-head" style="background-image:url(./assets/images/background/bg2.jpg);">
		<a href="<?php echo ROOT_PATH; ?>"><img src="./assets/images/logo-white-2.png" alt=""></a>
	</div>
	<div class="account-form-inner">
		<div class="account-container">
			<div class="heading-bx left">
				<h2 class="title-head">Forget <span>Password</span></h2>
				<p>Login Your Account <a href="<?php echo ROOT_PATH; ?>/login">Click here</a></p>
			</div>	
			<form class="contact-bx" action="<?php echo ROOT_PATH; ?>/forgot-password" method="POST">
				<div class="row placeani">
					<div class="col-lg-12">
						<div class="form-group">
							<div class="input-group">
								<label>Your Email Address</label>
								<input name="dzName" type="email" required="" class="form-control">
							</div>
						</div>
					</div>
					<div class="col-lg-12 m-b30">
						<button name="submit" type="submit" value="Submit" class="btn button-md">Submit</button>
					</div>
				</div>
			</form>
		</div>
	</div>
</div>