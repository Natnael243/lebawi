<!DOCTYPE html>
<html lang="en">

<?php
include 'header.php'
?>

<body class="loading">


    <!-- ==========================-->
    <!-- FULL SCREEN MENU-->
    <!-- ==========================-->
    <div class="wrap-fixed-menu" id="fixedMenu">
        <nav class="fullscreen-center-menu">
            <div class="menu-main-menu-container">
                <div class="slidebar-nav-menu">
                    <?php
                    include 'menu.php'
                    ?>
                </div>
            </div>
        </nav>
        <button type="button" class="fullmenu-close"><i class="fa fa-times"></i></button>
    </div>

    <div class="l-theme animated-css" data-header="sticky" data-header-top="200" data-canvas="container">
        <!-- ==========================-->
        <!-- SEARCH MODAL-->
        <!-- ==========================-->
        <div class="header-search open-search">
            <div class="container">
                <div class="row">
                    <div class="col-sm-8 col-sm-offset-2 col-xs-10 col-xs-offset-1">
                        <div class="navbar-search">
                            <form class="search-global">
                                <input class="search-global__input" type="text" placeholder="Type to search" autocomplete="off" name="s" value="" />
                                <button class="search-global__btn"><i class="icon stroke icon-Search"></i>
                                </button>
                                <div class="search-global__note">Begin typing your search above and press return to search.</div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <button class="search-close close" type="button"><i class="fa fa-times"></i>
            </button>
        </div>
        <header class="header header-topbar-hidden header-boxed-width navbar-fixed-top header-background-trans header-color-white header-logo-white header-navibox-1-left header-navibox-2-right header-navibox-3-right header-navibox-4-right">
            <div class="container container-boxed-width">
                <div class="top-bar">
                    <div class="container">
                        <div class="header-topbarbox-1">
                            <ul>
                                <li>WE HELPING YOU: INFO@CEZAN.COM</li>
                            </ul>
                        </div>
                        <div class="header-topbarbox-2">
                            <ul class="social-links">
                                <li><a href="/" target="_blank"><i class="social_icons fa fa-facebook-square"></i></a>
                                </li>
                                <li><a href="/" target="_blank"><i class="social_icons fa fa-youtube-square"></i></a>
                                </li>
                                <li><a href="/" target="_blank"><i class="social_icons fa fa-vimeo-square"></i></a>
                                </li>
                                <li><a href="/" target="_blank"><i class="social_icons fa fa-twitter-square"></i></a>
                                </li>
                                <li class="li-last"><a href="/" target="_blank"><i class="social_icons fa fa-tumblr-square"></i></a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <nav class="navbar" id="nav">
                    <div class="container">
                        <div class="header-navibox-1">
                            <a class="navbar-brand scroll" href="services.php">
                                <img class="normal-logo" src="assets/media/general/lebawi_light.png" alt="logo" />
                                <img class="scroll-logo hidden-xs" src="assets/media/general/lebawi_dark.png" alt="logo" />
                            </a>
                        </div>
                        <div class="header-navibox-3">
                            <ul class="nav navbar-nav  clearfix vcenter">
                                <li>
                                    <button class="js-toggle-screen toggle-menu-button"><i class="toggle-menu-button-icon"><span></span><span></span><span></span><span></span><span></span><span></span></i>
                                    </button>
                                </li>
                            </ul>
                        </div>
                    </div>
                </nav>
            </div>
        </header>
        <!-- end .header-->

        <div class="section-title-page area-bg area-bg_dark area-bg_op_85 parallax">
            <div class="area-bg__inner">
                <div class="container">
                    <div class="row">
                        <div class="col-xs-12">
                            <div class="b-title-page__wrap">
                                <div class="clearfix">
                                    <div class="typed-strings">
                                        <ul>
                                            <li>
                                                <h1 class="b-title-page">get in <strong class="b-title-page__emphasis">touch</strong></h1>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <ol class="breadcrumb">
                                    <li><a href="index.php">home</a>
                                    </li>
                                    <li class="active">contact</li>
                                </ol>
                                <!-- end breadcrumb-->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- end .b-title-page-->
        <main class="l-main-content_page-inner">
            <section class="section-default">
                <div class="container">
                    <div class="row">
                        <div class="col-xs-12">
                            <div class="text-center">
                                
                                <h2 class="ui-title-block">Social Networks</h2>
                                <ul class="b-contacts-social list-inline">
                                    <li class="social-net__item"><a class="social-net__link" href="facebook.com">facebook</a>
                                    </li>
                                    <li class="social-net__item"><a class="social-net__link" href="twitter.com">instagram</a>
                                    </li>
                                    <li class="social-net__item"><a class="social-net__link" href="plus.google.com">tiktok</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-6">
                            <div class="map" id="map"></div>
                        </div>
                        <div class="col-sm-6">
                            <div class="b-contacts__inner">
                                <div class="b-contacts__info">
                                    <p>Lebawi Net Trading PLC is a leading technology company based in Addis Ababa, Ethiopia.
                                        Our company specializes in providing innovative software solutions to businesses of all sizes, from startups to enterprises.
                                        With a team of experienced professionals, ...</p>
                                </div>
                                <div class="ui-decor"></div>
                                <div class="b-contacts__item b-contacts__item_lg">
                                    <div class="b-contacts__title">wanna reach us?</div>
                                    <div class="b-contacts__description">info@lebawi.net</div>
                                </div>
                                <div class="b-contacts__item">
                                    <div class="b-contacts__title">Dina Building, Megenaga 24 str, Addis Ababa, Ethiopia.</div>
                                    <div class="b-contacts__description">head office</div>
                                </div>
                                <div class="b-contacts__item">
                                    <div class="b-contacts__title">(+251) 901 000 279 / (+251) 924 067 895</div>
                                    <div class="b-contacts__description">call support</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- end .b-contacts-->
            <div class="section-form-contacts">
                <div class="container">
                    <div class="row">
                        <div class="col-xs-12">
                            <div id="success"></div>
                            <form class="b-form-contacts ui-form" id="contactForm" action="#" method="post">
                                <div class="row">
                                    <div class="col-md-6">
                                        <input class="form-control" id="user-name" type="text" name="user-name" placeholder="Full Name" required="required" />
                                        <input class="form-control" id="user-phone" type="tel" name="user-phone" placeholder="Phone No." />
                                    </div>
                                    <div class="col-md-6">
                                        <input class="form-control" id="user-email" type="email" name="user-email" placeholder="Email address" />
                                        <input class="form-control last-block_mrg-btn_0" id="user-subject" type="text" name="user-subject" placeholder="Subject / Title" />
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-xs-12">
                                        <textarea class="form-control" id="user-message" rows="3" placeholder="Message Details" required="required"></textarea>
                                        <div class="text-center"><span class="b-btn"><span class="ui-decor-line"></span>
                                                <button class="b-btn__inner"><i class="ui-decor"></i>Send Message<i class="ui-decor"></i>
                                                </button>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <!-- end .b-form-contact-->
        </main>

        <?php
        include 'footer.php'
        ?>
        <!-- .footer-->
    </div>
    <!-- end layout-theme-->



    <!-- ++++++++++++-->
    <!-- MAIN SCRIPTS-->
    <!-- ++++++++++++-->
    <script src="assets/libs/jquery-1.12.4.min.js"></script>
    <script src="assets/libs/jquery-migrate-1.2.1.js"></script>
    <script src="assets/libs/modernizr.custom.js"></script>
    <!-- Bootstrap-->
    <script src="assets/libs/bootstrap/bootstrap.min.js"></script>
    <!-- Slider-->
    <script src="assets/plugins/owl-carousel/owl.carousel.min.js"></script>
    <!-- Pop-up window-->
    <script src="assets/plugins/magnific-popup/jquery.magnific-popup.min.js"></script>
    <!-- Headers scripts-->
    <script src="assets/plugins/headers/jquery.dlmenu.js"></script>
    <script src="assets/plugins/headers/slidebar.js"></script>
    <script src="assets/plugins/headers/header.js"></script>
    <!-- Mail scripts-->
    <script src="assets/plugins/jqBootstrapValidation.js"></script>
    <script src="assets/plugins/contact_me.js"></script>
    <!-- Filter and sorting images-->
    <script src="assets/plugins/isotope/isotope.pkgd.min.js"></script>
    <script src="assets/plugins/isotope/imagesLoaded.js"></script>
    <!-- Progress numbers-->
    <script src="assets/plugins/rendro-easy-pie-chart/jquery.easypiechart.min.js"></script>
    <script src="assets/plugins/rendro-easy-pie-chart/waypoints.min.js"></script>
    <!-- Animations-->
    <script src="assets/plugins/scrollreveal/scrollreveal.min.js"></script>
    <script src="assets/plugins/revealer/js/scrollMonitor.js"></script>
    <script src="assets/plugins/revealer/js/main.js"></script>
    <script src="assets/plugins/animate/wow.min.js"></script>
    <script src="assets/plugins/animate/jquery.shuffleLetters.js"></script>
    <script src="assets/plugins/animate/jquery.sticky-kit.js"></script>
    <script src="assets/plugins/animate/typed.js"></script>
    <!-- User customization-->
    <script src="assets/js/custom.js"></script>
    <!-- User map-->
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBqQ_bBw186KJnMcRByvn5ffZueg88wp1E"></script>
    <!-- Maps customization-->
    <script src="assets/js/map-custom.js"></script>
</body>

</html>