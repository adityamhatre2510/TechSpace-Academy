<!--Main container start -->
<?php $label = $course_data['id']?"Edit":"Add"; ?>
<main class="ttr-wrapper">
	<div class="container-fluid">
		<div class="db-breadcrumb">
			<h4 class="breadcrumb-title"><?php echo $label; ?> Course</h4>
			<ul class="db-breadcrumb-list">
				<li><a href="<?php echo ROOT_PATH; ?>"><i class="fa fa-home"></i>Home</a></li>
				<li><a href="<?php echo ROOT_PATH; ?>/courses"><i class="fa fa-home"></i>Courses</a></li>
				<li><?php echo $label; ?> Course</li>
			</ul>
		</div>	
		<div class="row">
			<div class="col-lg-12 m-b30">
				<div class="widget-box">
					<div class="wc-title">
						<h4><?php echo $label; ?> Course</h4>
					</div>
					<div class="widget-inner">
						<form action="<?php echo $url; ?>" class="edit-profile m-b30" method="POST">
							<div class="row">
								<div class="col-12">
									<div class="ml-auto">
										<h3>1. Basic info</h3>
									</div>
								</div>
								<div class="form-group col-12">
									<label class="col-form-label">Course Title</label>
									<div>
										<input name="title" class="form-control" type="text" value="<?php echo $course_data['title']??$course_data['title']; ?>">
									</div>
								</div>
								<div class="form-group col-12">
									<label class="col-form-label">Course Introduction</label>
									<div>
										<input name="introduction" class="form-control" type="text" value="<?php echo $course_data['introduction']??$course_data['introduction']; ?>">
									</div>
								</div>
								<div class="form-group col-3">
									<label class="col-form-label">Instructor Name</label>
									<div>
										<select name="instructor_id" class="form-control">
											<?php											
											$instructor_options_selected = $course_data['instructor_id']??$course_data['instructor_id'];

											$instructor_options = '<option value="">Select Instructor</option>';
											foreach($instructors as $instructor) {
												$instructor_selected = '';
												if($instructor_options_selected == $instructor->id) {
													$instructor_selected = "selected";
												}
												$instructor_options .= '<option value="'.$instructor->id.'" '.$instructor_selected.'>'.$instructor->first_name.' '.$instructor->last_name.'</option>';
											}
											echo $instructor_options;
											?>											
										</select>
									</div>
								</div>
								<div class="form-group col-3">
									<label class="col-form-label">Course Category</label>
									<div>
										<select name="category_id" class="form-control">
											<?php
											$cat_options_selected = $course_data['instructor_id']??$course_data['instructor_id'];

											$cat_options = '<option value="">Select Category</option>';
											foreach($categories as $category) {
												$cat_selected = '';
												if($cat_options_selected == $category->id) {
													$cat_selected = "selected";
												}
												$cat_options .= '<option value="'.$category->id.'" '.$cat_selected.'>'.$category->name.'</option>';
											}
											echo $cat_options;
											?>										
										</select>
									</div>
								</div>
								<div class="form-group col-2">
									<label class="col-form-label">Course Cost Price</label>
									<div>
										<input name="cost_price" class="form-control" type="text" value="<?php echo $course_data['cost_price']??$course_data['cost_price']; ?>">
									</div>
								</div>
								<div class="form-group col-2">
									<label class="col-form-label">Course Selling Price</label>
									<div>
										<input name="selling_price" class="form-control" type="text" value="<?php echo $course_data['selling_price']??$course_data['selling_price']; ?>">
									</div>
								</div>
								<div class="form-group col-2">
									<label class="col-form-label">Rating</label>
									<div>
										<select name="rating" class="form-control">
											<?php
											$rating_options_selected = $course_data['rating']??$course_data['rating'];

											$rating_options = '<option value="">Select Rating</option>';
											for($rating=1; $rating<=5; $rating++) {
												$rating_selected = '';
												if($rating_options_selected == $rating) {
													$rating_selected = "selected";
												}
												$rating_options .= '<option value="'.$rating.'" '.$rating_selected.'>'.$rating.'</option>';
											}
											echo $rating_options;
											?>	
										</select>
									</div>
								</div>
								<div class="seperator"></div>
								
								<div class="col-12 m-t20">
									<div class="ml-auto m-b5">
										<h3>2. Description</h3>
									</div>
								</div>
								<div class="form-group col-12">
									<label class="col-form-label">Course Description</label>
									<div>
										<textarea name="description" class="form-control"><?php echo $course_data['description']??$course_data['description']; ?></textarea>
									</div>
								</div>
								<div class="form-group col-12">
									<label class="col-form-label">Course Certification</label>
									<div>
										<textarea name="certification" class="form-control"><?php echo $course_data['certification']??$course_data['certification']; ?></textarea>
									</div>
								</div>
								<div class="form-group col-12">
									<label class="col-form-label">Course Learning Outcomes</label>
									<div>
										<textarea name="learning_outcomes" class="form-control"><?php echo $course_data['learning_outcomes']??$course_data['learning_outcomes']; ?></textarea>
									</div>
								</div>
								<div class="seperator"></div>

								<div class="col-12 m-t20">
									<div class="ml-auto">
										<h3 class="m-form__section">3. Overview</h3>
									</div>
								</div>
								<div class="form-group col-3">
									<label class="col-form-label">Course Duration <em>(hours)</em></label>
									<div>
										<input name="course_duration" class="form-control" type="text" value="<?php echo $course_data['course_duration']??$course_data['course_duration']; ?>">
									</div>
								</div>
								<div class="form-group col-3">
									<label class="col-form-label">Course Term</label>
									<div>
										<select name="course_term" class="form-control">
											<?php
											$term_options_selected = $course_data['course_term']??$course_data['course_term'];

											$term_options = '<option value="">Select Term</option>';
											foreach($terms as $term) {
												$term_selected = '';
												if($term_options_selected == $term->id) {
													$term_selected = "selected";
												}
												$term_options .= '<option value="'.$term->id.'" '.$term_selected.'>'.$term->name.'</option>';
											}
											echo $term_options;
											?>	
										</select>
									</div>
								</div>
								<div class="form-group col-3">
									<label class="col-form-label">Total Lectures</label>
									<div>
										<input name="total_lectures" class="form-control" type="text" value="<?php echo $course_data['total_lectures']??$course_data['total_lectures']; ?>">
									</div>
								</div>
								<div class="form-group col-3">
									<label class="col-form-label">Total Quizzes</label>
									<div>
										<input name="total_quizzes" class="form-control" type="text" value="<?php echo $course_data['total_quizzes']??$course_data['total_quizzes']; ?>">
									</div>
								</div>
								<div class="form-group col-3">
									<label class="col-form-label">Is Assessments Marked?</label>
									<div>
										<?php
										$marked_selected = '';
										if(isset($course_data['assessments_marked'])) {
											$marked_selected = "checked='true'";
										}
										?>
										<div class="custom-control custom-checkbox checkbox-st1">
											<input name="assessments_marked" value="1" type="checkbox" class="custom-control-input" id="check1" <?php echo $marked_selected; ?>>
											<label class="custom-control-label" for="check1"></label>
										</div>
									</div>
								</div>
								
								<div class="seperator"></div>

								<div class="col-12 m-t20">
									<div class="ml-auto">
										<h3 class="m-form__section">4. Curriculum</h3>
									</div>
								</div>
								<div class="col-12">
									<table id="item-add" style="width:100%;">
										<?php
										for($i=0; $i<count($curriculum_data->level); $i++) {
										?>
										<tr class="list-item">
											<td>
												<div class="row">
													<div class="col-md-2">
														<label class="col-form-label">Course Level</label>
														<div>
															<input name="course_curriculum[level][]" class="form-control" type="text" value="<?php echo $curriculum_data->level[$i]; ?>">
														</div>
													</div>
													<div class="col-md-6">
														<label class="col-form-label">Title</label>
														<div>
															<input name="course_curriculum[title][]" class="form-control" type="text" value="<?php echo $curriculum_data->title[$i]; ?>">
														</div>
													</div>
													<div class="col-md-3">
														<label class="col-form-label">Duration <em>(in minutes)</em></label>
														<div>
															<input name="course_curriculum[duration][]" class="form-control" type="text" value="<?php echo $curriculum_data->duration[$i]; ?>">
														</div>
													</div>
													<div class="col-md-1">
														<div class="float-right">
															<label class="col-form-label">Close</label>
															<div class="form-group">
																<a class="delete" href="#"><i class="fa fa-close"></i></a>
															</div>
														</div>
													</div>
												</div>
											</td>
										</tr>
										<?php
										}
										?>
									</table>
								</div>
								
								<div class="seperator"></div>

								<div class="col-12">									
									<button type="submit" class="btn">Save changes</button>
									<a href="<?php echo ROOT_PATH; ?>/courses"><button type="button" class="btn gray">Cancel</button></a>
								
									<div class="float-right">
										<button type="button" class="btn-secondry add-item m-r5"><i class="fa fa-fw fa-plus-circle"></i>Add Item</button>
									</div>
								</div>
							</div>
						</form>
					</div>
				</div>
			</div>
			<!-- Your Profile Views Chart END-->
		</div>
	</div>
</main>