<header class="header rs-nav">
    <div class="sticky-header navbar-expand-lg">
        <div class="menu-bar clearfix">
            <div class="container clearfix">
                <!-- Header Logo ==== -->
                <div class="menu-logo">
                    <a href="<?php echo ROOT_PATH; ?>"><img src="<?php echo ROOT_PATH; ?>/assets/images/logo.png" alt=""></a>
                </div>
                <!-- Mobile Nav Button ==== -->
                <button class="navbar-toggler collapsed menuicon justify-content-end" type="button" data-toggle="collapse" data-target="#menuDropdown" aria-controls="menuDropdown" aria-expanded="false" aria-label="Toggle navigation">
                    <span></span>
                    <span></span>
                    <span></span>
                </button>
                <!-- Author Nav ==== -->
                <div class="secondary-menu">
                    <div class="topbar-right">
                        <ul>
                            <?php if(!isset($_SESSION['is_user_login'])) { ?>
                            <li><a href="<?php echo ROOT_PATH; ?>/login">Login</a></li>
                            <li><a href="<?php echo ROOT_PATH; ?>/register">Register</a></li>
                            <?php } ?>
                            <?php if(isset($_SESSION['is_user_login'])) { ?>
                            <li><a href="<?php echo ROOT_PATH; ?>/logout">Logout</a></li>
                            <?php } ?>
                        </ul>
                    </div>
                </div>
                <!-- Search Box ==== -->
                <div class="nav-search-bar">
                    <form action="#">
                        <input name="search" value="" type="text" class="form-control" placeholder="Type to search">
                        <span><i class="ti-search"></i></span>
                    </form>
                    <span id="search-remove"><i class="ti-close"></i></span>
                </div>
                <!-- Navigation Menu ==== -->
                <div class="menu-links navbar-collapse collapse justify-content-start" id="menuDropdown">
                    <div class="menu-logo">
                        <a href="<?php echo ROOT_PATH; ?>"><img src="<?php echo ROOT_PATH; ?>/assets/images/logo.png" alt=""></a>
                    </div>
                    <ul class="nav navbar-nav">	
                        <li class="active"><a href="<?php echo ROOT_PATH; ?>">Home</a></li>
                        <li><a href="<?php echo ROOT_PATH; ?>/courses">Courses</a></li>
                        <li><a href="<?php echo ROOT_PATH; ?>/about">About</a></li>
                        <li><a href="<?php echo ROOT_PATH; ?>/contact">Contact</a></li>
                        <li><a href="<?php echo ROOT_PATH; ?>/faqs">FAQ</a></li>
                    </ul>
                    <div class="nav-social-link">
                        <a href="javascript:;"><i class="fa fa-facebook"></i></a>
                        <a href="javascript:;"><i class="fa fa-google-plus"></i></a>
                        <a href="javascript:;"><i class="fa fa-linkedin"></i></a>
                    </div>
                </div>
                <!-- Navigation Menu END ==== -->
            </div>
        </div>
    </div>
</header>