<!-- header start -->
<header class="ttr-header">
    <div class="ttr-header-wrapper">
        <!--sidebar menu toggler start -->
        <div class="ttr-toggle-sidebar ttr-material-button">
            <i class="ti-close ttr-open-icon"></i>
            <i class="ti-menu ttr-close-icon"></i>
        </div>
        <!--sidebar menu toggler end -->
        <!--logo start -->
        <div class="ttr-logo-box">
            <div>
                <a href="<?php echo ROOT_PATH; ?>/" class="ttr-logo">
                    <!--<img class="ttr-logo-mobile" alt="" src="<?php echo ROOT_PATH; ?>/assets/images/white_newlogo.png" width="30" height="30">
                    <img class="ttr-logo-desktop" alt="" src="<?php echo ROOT_PATH; ?>/assets/images/white_newlogo.png" width="160" height="27">-->
                </a>
            </div>
        </div>
        <!--logo end -->
        <div class="ttr-header-menu">
            <!-- header left menu start -->
            <ul class="ttr-header-navigation">
                <li>
                    <a href="<?php echo ROOT_PATH; ?>/" class="ttr-material-button ttr-submenu-toggle">HOME</a>
                </li>
                <li>
                    <a href="#" class="ttr-material-button ttr-submenu-toggle">QUICK MENU <i class="fa fa-angle-down"></i></a>
                    <div class="ttr-header-submenu">
                        <ul>
                            <li><a href="../courses">Our Courses</a></li>
                        </ul>
                    </div>
                </li>
            </ul>
            <!-- header left menu end -->
        </div>
        <div class="ttr-header-right ttr-with-seperator">
            <!-- header right menu start -->
            <ul class="ttr-header-navigation">
                <li>
                    <a href="#" class="ttr-material-button ttr-search-toggle"><i class="fa fa-search"></i></a>
                </li>
                <li>
                    <a href="#" class="ttr-material-button ttr-submenu-toggle"><span class="ttr-user-avatar"><img alt="" src="<?php echo ROOT_PATH; ?>/assets/images/testimonials/pic3.jpg" width="32" height="32"></span></a>
                    <div class="ttr-header-submenu">
                        <ul>
                            <li><a href="user-profile.html">My profile</a></li>
                            <li><a href="<?php echo ROOT_PATH; ?>/logout">Logout</a></li>
                        </ul>
                    </div>
                </li>
                <li class="ttr-hide-on-mobile">
                    <a href="#" class="ttr-material-button"><i class="ti-layout-grid3-alt"></i></a>
                </li>
            </ul>
            <!-- header right menu end -->
        </div>
        <!--header search panel start -->
        <div class="ttr-search-bar">
            <form class="ttr-search-form">
                <div class="ttr-search-input-wrapper">
                    <input type="text" name="qq" placeholder="search something..." class="ttr-search-input">
                    <button type="submit" name="search" class="ttr-search-submit"><i class="ti-arrow-right"></i></button>
                </div>
                <span class="ttr-search-close ttr-search-toggle">
                    <i class="ti-close"></i>
                </span>
            </form>
        </div>
        <!--header search panel end -->
    </div>
</header>
<!-- header end -->
