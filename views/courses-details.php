<div class="page-content bg-white">
	<!-- inner page banner -->
	<div class="page-banner ovbl-dark" style="background-image:url(./assets/images/banner/banner2.jpg);">
		<div class="container">
			<div class="page-banner-entry">
				<h1 class="text-white">Courses Details</h1>
				</div>
		</div>
	</div>
	<!-- Breadcrumb row -->
	<div class="breadcrumb-row">
		<div class="container">
			<ul class="list-inline">
				<li><a href="#">Home</a></li>
				<li>Courses Details</li>
			</ul>
		</div>
	</div>
	<!-- Breadcrumb row END -->
	<!-- inner page banner END -->
	<div class="content-block">
		<!-- About Us -->
		<div class="section-area section-sp1">
			<div class="container">
					<div class="row d-flex flex-row-reverse">
					<div class="col-lg-3 col-md-4 col-sm-12 m-b30">
						<div class="course-detail-bx">
							<div class="course-price">
								<del><?php echo CURRENCY. " " .$course->cost_price; ?></del>
								<h4 class="price"><?php echo CURRENCY. " " .$course->selling_price; ?></h4>
							</div>	
							<div class="course-buy-now text-center">
								<a href="#" class="btn radius-xl text-uppercase">Buy Now This Courses</a>
							</div>
							<div class="teacher-bx">
								<div class="teacher-info">
									<div class="teacher-thumb">
										<img src="assets/images/testimonials/pic1.jpg" alt=""/>
									</div>
									<div class="teacher-name">
										<h5><?php echo $course->instructor_name; ?></h5>
										<span></span>
									</div>
								</div>
							</div>
							<div class="cours-more-info">
								<div class="review">
									<span><?php echo $course->rating; ?> Rating</span>
									<ul class="cours-star">
										<?php 
										for($i=1; $i<=5;$i++) {
											$rating_class = '';
											if($i <= $course->rating) {
												$rating_class = ' class="active"';
											}
											echo '<li'.$rating_class.'><i class="fa fa-star"></i></li>';
										}
										?>
									</ul>
								</div>
								<div class="price categories">
									<span>Categories</span>
									<h5 class="text-primary"><?php echo $course->category_name; ?></h5>
								</div>
							</div>
							<div class="course-info-list scroll-page">
								<ul class="navbar">
									<li><a class="nav-link" href="#overview"><i class="ti-zip"></i>Overview</a></li>
									<li><a class="nav-link" href="#curriculum"><i class="ti-bookmark-alt"></i>Curriculum</a></li>
									<li><a class="nav-link" href="#instructor"><i class="ti-user"></i>Instructor</a></li>
									<li><a class="nav-link" href="#reviews"><i class="ti-comments"></i>Reviews</a></li>
								</ul>
							</div>
						</div>
					</div>
				
					<div class="col-lg-9 col-md-8 col-sm-12">
						<div class="courses-post">
							<div class="ttr-post-media media-effect">
								<a href="#"><img src="assets/images/blog/default/thum1.jpg" alt=""></a>
							</div>
							<div class="ttr-post-info">
								<div class="ttr-post-title ">
									<h2 class="post-title"><?php echo $course->title; ?></h2>
								</div>
								<div class="ttr-post-text">
									<p><?php echo $course->introduction; ?></p>
								</div>
							</div>
						</div>
						<div class="courese-overview" id="overview">
							<h4>Overview</h4>
							<div class="row">
								<div class="col-md-12 col-lg-4">
									<ul class="course-features">
										<li><i class="ti-book"></i> <span class="label">Lectures</span> <span class="value"><?php echo $course->total_lectures; ?></span></li>
										<li><i class="ti-help-alt"></i> <span class="label">Quizzes</span> <span class="value"><?php echo $course->total_quizzes; ?></span></li>
										<li><i class="ti-time"></i> <span class="label">Duration</span> <span class="value"><?php echo $course->course_duration; ?> hours</span></li>
										<li><i class="ti-stats-up"></i> <span class="label">Skill level</span> <span class="value"><?php echo $course->skill_level; ?></span></li>
										<li><i class="ti-smallcap"></i> <span class="label">Language</span> <span class="value"><?php echo $course->course_language; ?></span></li>
										<li><i class="ti-user"></i> <span class="label">Students</span> <span class="value"><?php echo $course->students_enrolled; ?></span></li>
										<li><i class="ti-check-box"></i> <span class="label">Assessments</span> <span class="value"><?php echo $course->assessments_marked?"Yes":"No"; ?></span></li>
									</ul>
								</div>
								<div class="col-md-12 col-lg-8">
									<h5 class="m-b5">Course Description</h5>
									<p><?php echo $course->description; ?></p>
									<h5 class="m-b5">Certification</h5>
									<p><?php echo $course->certification; ?></p>
									<h5 class="m-b5">Learning Outcomes</h5>
									<p><?php echo $course->learning_outcomes; ?></p>
								</div>
							</div>
						</div>
						<div class="m-b30" id="curriculum">
							<h4>Curriculum</h4>
							<ul class="curriculum-list">
								<li>
										<h5>First Level</h5>
										<ul>
											<li>
												<div class="curriculum-list-box">
													<span>Lesson 1.</span> Introduction to UI Design
												</div>
												<span>120 minutes</span>
											</li>
											<li>
												<div class="curriculum-list-box">
													<span>Lesson 2.</span> User Research and Design
												</div>
												<span>60 minutes</span>
											</li>
											<li>
												<div class="curriculum-list-box">
													<span>Lesson 3.</span> Evaluating User Interfaces Part 1
												</div>
												<span>85 minutes</span>
											</li>
										</ul>
								</li>
							</ul>
						</div>
						<div class="" id="instructor">
							<h4>Instructor</h4>
							<div class="instructor-bx">
								<div class="instructor-author">
									<img src="./assets/images/testimonials/pic1.jpg" alt="">
								</div>
								<div class="instructor-info">
									<h6><?php echo $course->instructor_name; ?></h6>
									<span>Professor</span>
									<ul class="list-inline m-tb10">
										<li><a href="#" class="btn sharp-sm facebook"><i class="fa fa-facebook"></i></a></li>
										<li><a href="#" class="btn sharp-sm twitter"><i class="fa fa-twitter"></i></a></li>
										<li><a href="#" class="btn sharp-sm linkedin"><i class="fa fa-linkedin"></i></a></li>
										<li><a href="#" class="btn sharp-sm google-plus"><i class="fa fa-google-plus"></i></a></li>
									</ul>
									<p class="m-b0"><?php echo $course->instructor_description; ?></p>
								</div>
							</div>
						</div>
						<div class="" id="reviews">
							<h4>Reviews</h4>
							
							<div class="review-bx">
								<div class="all-review">
									<h2 class="rating-type"><?php echo $course->rating; ?></h2>
									<ul class="cours-star">
										<?php 
										for($i=1; $i<=5;$i++) {
											$rating_class = '';
											if($i <= $course->rating) {
												$rating_class = ' class="active"';
											}
											echo '<li'.$rating_class.'><i class="fa fa-star"></i></li>';
										}
										?>
									</ul>
									<span><?php echo $course->rating; ?> Rating</span>
								</div>
								<div class="review-bar">
									<div class="bar-bx">
										<div class="side">
											<div>5 star</div>
										</div>
										<div class="middle">
											<div class="bar-container">
												<div class="bar-5" style="width:90%;"></div>
											</div>
										</div>
										<div class="side right">
											<div>150</div>
										</div>
									</div>
									<div class="bar-bx">
										<div class="side">
											<div>4 star</div>
										</div>
										<div class="middle">
											<div class="bar-container">
												<div class="bar-5" style="width:70%;"></div>
											</div>
										</div>
										<div class="side right">
											<div>140</div>
										</div>
									</div>
									<div class="bar-bx">
										<div class="side">
											<div>3 star</div>
										</div>
										<div class="middle">
											<div class="bar-container">
												<div class="bar-5" style="width:50%;"></div>
											</div>
										</div>
										<div class="side right">
											<div>120</div>
										</div>
									</div>
									<div class="bar-bx">
										<div class="side">
											<div>2 star</div>
										</div>
										<div class="middle">
											<div class="bar-container">
												<div class="bar-5" style="width:40%;"></div>
											</div>
										</div>
										<div class="side right">
											<div>110</div>
										</div>
									</div>
									<div class="bar-bx">
										<div class="side">
											<div>1 star</div>
										</div>
										<div class="middle">
											<div class="bar-container">
												<div class="bar-5" style="width:20%;"></div>
											</div>
										</div>
										<div class="side right">
											<div>80</div>
										</div>
									</div>
								</div>
							</div>
						</div>
						
					</div>
					
				</div>
			</div>
		</div>
	</div>
	<!-- contact area END -->
	
</div>