<!--Main container start -->
<main class="ttr-wrapper">
	<div class="container-fluid">
		<div class="db-breadcrumb">
			<h4 class="breadcrumb-title">Courses</h4>
			<ul class="db-breadcrumb-list">
				<li><a href="#"><i class="fa fa-home"></i>Home</a></li>
				<li>Courses</li>
			</ul>
		</div>	
		<div class="row">
			<!-- Your Profile Views Chart -->
			<div class="col-lg-12 m-b30">
				<div class="widget-box">
					<div class="wc-title">
						<h4>Found <?php echo count($courses); ?> Courses</h4>
					</div>
					<div class="widget-inner">
						<?php 
						if(!count($courses)) {
							echo "no record";
						} 
						?>
						<?php foreach($courses as $k=>$course) { ?>
						<div class="card-courses-list admin-courses">
							<div class="card-courses-media">
								<img src="assets/images/courses/pic<?php echo $k+1; ?>.jpg" alt=""/>
							</div>
							<div class="card-courses-full-dec">
								<div class="card-courses-title">
									<h4><?php echo $course->title; ?></h4>
								</div>
								<div class="card-courses-list-bx">
									<ul class="card-courses-view">
										<li class="card-courses-user">
											<div class="card-courses-user-pic">
												<img src="assets/images/testimonials/pic3.jpg" alt=""/>
											</div>
											<div class="card-courses-user-info">
												<h5>Teacher</h5>
												<h4><?php echo $course->instructor_name; ?></h4>
											</div>
										</li>
										<li class="card-courses-categories">
											<h5>Category</h5>
											<h4><?php echo $course->category_name; ?></h4>
										</li>
										<li class="card-courses-review">
											<h5><?php echo $course->rating; ?> Rating</h5>
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
										</li>
										<li class="card-courses-price">
											<del><?php echo CURRENCY. " " .$course->cost_price; ?></del>
											<h5 class="text-primary"><?php echo CURRENCY. " " .$course->selling_price; ?></h5>
										</li>
									</ul>
								</div>
								<div class="row card-courses-dec">
									<div class="col-md-12">
										<h6 class="m-b10">Course Description</h6>
										<p><?php echo $course->introduction; ?></p>	
									</div>
									<div class="col-md-12">
										<?php if(checkAccess("EDIT")) { ?>
										<a href="<?php echo ROOT_PATH; ?>/courses/edit/<?php echo $course->id; ?>" class="btn primary radius-xl outline">Edit</a>
										<?php } ?>

										<?php if(checkAccess("APPROVE")) { ?>
										<a href="#" class="btn green radius-xl outline">Approve</a>
										<?php } ?>

										<?php if(checkAccess("DELETE")) { ?>
										<a href="#" class="btn red outline radius-xl ">Delete</a>
										<?php } ?>
									</div>
								</div>
								
							</div>
						</div>
						<?php } ?>
					</div>
				</div>
			</div>
			<!-- Your Profile Views Chart END-->
		</div>
	</div>
</main>