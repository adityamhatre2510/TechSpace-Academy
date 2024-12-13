<div class="page-content bg-white">
    <!-- Main Slider -->
    <div class="section-area section-sp1 ovpr-dark bg-fix online-cours" style="background-image:url(assets/images/background/bg1.jpg);">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 text-center text-white">
                        <h2>Online Courses To Learn</h2>
                        <h5>Own Your Feature Learning New Skills Online</h5>
                        <form class="cours-search">
                            <div class="input-group">
                                <input type="text" class="form-control" placeholder="What do you want to learn today?	">
                                <div class="input-group-append">
                                    <button class="btn" type="submit">Search</button> 
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="mw800 m-auto">
                    <div class="row">
                        <div class="col-md-4 col-sm-6">
                            <div class="cours-search-bx m-b30">
                                <div class="icon-box">
                                    <h3><i class="ti-user"></i><span class="counter">5</span>M</h3>
                                </div>
                                <span class="cours-search-text">Over 5 million student</span>
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-6">
                            <div class="cours-search-bx m-b30">
                                <div class="icon-box">
                                    <h3><i class="ti-book"></i><span class="counter">30</span>K</h3>
                                </div>
                                <span class="cours-search-text">30,000 Courses.</span>
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-12">
                            <div class="cours-search-bx m-b30">
                                <div class="icon-box">
                                    <h3><i class="ti-layout-list-post"></i><span class="counter">20</span>K</h3>
                                </div>
                                <span class="cours-search-text">Learn Anythink Online.</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    <!-- Main Slider -->
    <div class="content-block">
        <!-- Popular Courses -->
        <div class="section-area section-sp2 popular-courses-bx">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 heading-bx left">
                        <h2 class="title-head">Popular <span>Courses</span></h2>
                        <p>It is a long established fact that a reader will be distracted by the readable content of a page</p>
                    </div>
                </div>
                <div class="row">
                    <div class="courses-carousel owl-carousel owl-btn-1 col-12 p-lr0">
                        <?php foreach($courses as $k=>$course) { ?>
                        <div class="item">
                            <div class="cours-bx">
                                <div class="action-box">
                                    <img src="<?php echo ROOT_PATH; ?>/assets/images/courses/pic<?php echo $k+1; ?>.jpg" alt="">
                                    <a href="<?php echo ROOT_PATH; ?>/courses/<?php echo $course->id; ?>" class="btn">Read More</a>
                                </div>
                                <div class="info-bx text-center">
                                    <h5><a href="<?php echo ROOT_PATH; ?>/courses/<?php echo $course->id; ?>"><?php echo $course->title; ?></a></h5>
                                    <span><?php echo $course->category_name; ?></span>
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
                                    <div class="price">
                                        <del><?php echo CURRENCY. " " .$course->cost_price; ?></del>
                                        <h5 class="free"><?php echo ($course->selling_price>0?CURRENCY. " " .$course->selling_price:"Free"); ?></h5>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <?php } ?>
                    </div>
                </div>
            </div>
        </div>
        <!-- Popular Courses END -->
        <div class="section-area section-sp2 bg-fix ovbl-dark join-bx text-center" style="background-image:url(assets/images/background/bg1.jpg);">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="join-content-bx text-white">
                            <h2>Learn a new skill online on <br> your time</h2>
                            <h4><span class="counter">57,000</span> Online Courses</h4>
                            <p>Discover the freedom to learn new skills online, anytime and anywhere. With flexible courses designed to fit your schedule, you can grow at your own pace and unlock your potential.</p>
                            <a href="#" class="btn button-md">Join Now</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Form END -->
        <div class="section-area section-sp1">
            <div class="container">
                    <div class="row">
                        <div class="col-lg-6 m-b30">
                        <h2 class="title-head ">Learn a new skill online<br> <span class="text-primary"> on your time</span></h2>
                        <h4><span class="counter">57,000</span> Online Courses</h4>
                        <p>Discover the freedom to learn new skills online, anytime and anywhere. With flexible courses designed to fit your schedule, you can grow at your own pace and unlock your potential..</p>
                        <a href="#" class="btn button-md">Join Now</a>
                        </div>
                        <div class="col-lg-6">
                            <div class="row">
                            <div class="col-lg-6 col-md-6 col-sm-6 m-b30">
                                <div class="feature-container">
                                    <div class="feature-md text-white m-b20">
                                        <a href="#" class="icon-cell"><img src="assets/images/icon/icon1.png" alt=""></a> 
                                    </div>
                                    <div class="icon-content">
                                        <h5 class="ttr-tilte">Our Philosophy</h5>
                                        <p>Empowering minds through innovation, fostering creativity, and building future-ready skills</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-6 m-b30">
                                <div class="feature-container">
                                    <div class="feature-md text-white m-b20">
                                        <a href="#" class="icon-cell"><img src="assets/images/icon/icon2.png" alt=""></a> 
                                    </div>
                                    <div class="icon-content">
                                        <h5 class="ttr-tilte">Kingster's Principle</h5>
                                        <p>Strive for excellence through knowledge, innovation, and leadership, fostering a culture of continuous learning and integrity</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-6 m-b30">
                                <div class="feature-container">
                                    <div class="feature-md text-white m-b20">
                                        <a href="#" class="icon-cell"><img src="assets/images/icon/icon3.png" alt=""></a> 
                                    </div>
                                    <div class="icon-content">
                                        <h5 class="ttr-tilte">Key Of Success</h5>
                                        <p>The key to success lies in dedication, perseverance, continuous learning, and a clear vision, supported by strong values and adaptability to change</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-6 m-b30">
                                <div class="feature-container">
                                    <div class="feature-md text-white m-b20">
                                        <a href="#" class="icon-cell"><img src="assets/images/icon/icon4.png" alt=""></a> 
                                    </div>
                                    <div class="icon-content">
                                        <h5 class="ttr-tilte">Our Philosophy</h5>
                                        <p>Knowledge ignites potential; innovation drives the future</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        <!-- Testimonials -->
        <div class="section-area section-sp1 bg-fix ovbl-dark text-white" style="background-image:url(assets/images/background/bg1.jpg);">
            <div class="container">
                <div class="row">
                        <div class="col-lg-3 col-md-6 col-sm-6 col-6 m-b30">
                            <div class="counter-style-1">
                                <div class="text-white">
                                    <span class="counter">3000</span><span>+</span>
                                </div>
                                <span class="counter-text">Completed Projects</span>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 col-sm-6 col-6 m-b30">
                            <div class="counter-style-1">
                                <div class="text-white">
                                    <span class="counter">2500</span><span>+</span>
                                </div>
                                <span class="counter-text">Happy Clients</span>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 col-sm-6 col-6 m-b30">
                            <div class="counter-style-1">
                                <div class="text-white">
                                    <span class="counter">1500</span><span>+</span>
                                </div>
                                <span class="counter-text">Questions Answered</span>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 col-sm-6 col-6 m-b30">
                            <div class="counter-style-1">
                                <div class="text-white">
                                    <span class="counter">1000</span><span>+</span>
                                </div>
                                <span class="counter-text">Ordered Coffee's</span>
                            </div>
                        </div>
                    </div>
            </div>
        </div>
        <!-- Testimonials END -->
        <!-- Testimonials ==== -->
        <div class="section-area section-sp2">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 heading-bx left">
                        <h2 class="title-head text-uppercase">what people <span>say</span></h2>
                        <p>It is a long established fact that a reader will be distracted by the readable content of a page</p>
                    </div>
                </div>
                <div class="testimonial-carousel owl-carousel owl-btn-1 col-12 p-lr0">
                    <div class="item">
                        <div class="testimonial-bx">
                            <div class="testimonial-thumb">
                                <img src="assets/images/testimonials/pic1.jpg" alt="">
                            </div>
                            <div class="testimonial-info">
                                <h5 class="name">Seleena Packer</h5>
                                <p>Cloud Architecture</p>
                            </div>
                            <div class="testimonial-content">
                                <p>Learning from online platforms like Techspace Academy gave me the practical skills I needed to switch to a cloud analyst role and feel confident on day one.</p>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="testimonial-bx">
                            <div class="testimonial-thumb">
                                <img src="assets/images/testimonials/pic2.jpg" alt="">
                            </div>
                            <div class="testimonial-info">
                                <h5 class="name">James Walker</h5>
                                <p>-Art Director</p>
                            </div>
                            <div class="testimonial-content">
                                <p>Learning through structured courses and certifications gave me the technical depth and strategic perspective essential for designing scalable cloud solutions</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Testimonials END ==== -->
    </div>
    <!-- contact area END -->
</div>