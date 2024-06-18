<!DOCTYPE html>
<html lang="en">

<?php
include 'header.php'
?>
<style>
    .services-container {
      padding: 50px 0;
    }

    .services-title {
      text-align: center;
    }

    .services-description {
      text-align: center;
      padding-left: 15px;
      padding-right: 15px;
    }

    @media (min-width: 576px) {
      .services-description {
        padding-left: 100px;
        padding-right: 100px;
      }
    }

    @media (min-width: 768px) {
      .services-description {
        padding-left: 200px;
        padding-right: 200px;
      }
    }

    @media (min-width: 992px) {
      .services-description {
        padding-left: 300px;
        padding-right: 300px;
      }
    }

    @media (min-width: 1200px) {
      .services-description {
        padding-left: 400px;
        padding-right: 400px;
      }
    }
  </style>

<body class="loading">
  <!-- ==========================-->
  <!-- FULL SCREEN MENU-->
  <!-- ==========================-->
  <div class="wrap-fixed-menu" id="fixedMenu">
    <nav class="fullscreen-center-menu">
      <div class="menu-main-menu-container">
        <div class="slidebar-nav-menu">
          <?php
          include 'menu.php' ?>
        </div>
      </div>
    </nav>
    <button type="button" class="fullmenu-close">
      <i class="fa fa-times"></i>
    </button>
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
                <button class="search-global__btn">
                  <i class="icon stroke icon-Search"></i>
                </button>
                <div class="search-global__note">
                  Begin typing your search above and press return to search.
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
      <button class="search-close close" type="button">
        <i class="fa fa-times"></i>
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
                <li>
                  <a href="/" target="_blank"><i class="social_icons fa fa-facebook-square"></i></a>
                </li>
                <li>
                  <a href="/" target="_blank"><i class="social_icons fa fa-youtube-square"></i></a>
                </li>
                <li>
                  <a href="/" target="_blank"><i class="social_icons fa fa-vimeo-square"></i></a>
                </li>
                <li>
                  <a href="/" target="_blank"><i class="social_icons fa fa-twitter-square"></i></a>
                </li>
                <li class="li-last">
                  <a href="/" target="_blank"><i class="social_icons fa fa-tumblr-square"></i></a>
                </li>
              </ul>
            </div>
          </div>
        </div>
        <nav class="navbar" id="nav">
          <div class="container">
            <div class="header-navibox-1">
            <a class="navbar-brand scroll" href="services.php">
                  <img
                    class="normal-logo"
                    src="assets/media/general/lebawi_light.png"
                    alt="logo"
                  />
                  <img
                    class="scroll-logo hidden-xs"
                    src="assets/media/general/lebawi_dark.png"
                    alt="logo"
                  />
                </a>
            </div>
            <div class="header-navibox-3">
              <ul class="nav navbar-nav clearfix vcenter">
                <li>
                  <button class="js-toggle-screen toggle-menu-button">
                    <i class="toggle-menu-button-icon"><span></span><span></span><span></span><span></span><span></span><span></span></i>
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
                        <h1 class="b-title-page">
                          our
                          <strong class="b-title-page__emphasis">services</strong>
                        </h1>
                      </li>
                    </ul>
                  </div>
                </div>
                <ol class="breadcrumb">
                  <li><a href="home.html">home</a></li>
                  <li class="active">services</li>
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
      <div class="text-center" style="padding-top: 50px">
        <h2 class="ui-title-block ui-title-block_border ui-title-block_border-left">
          OUR SERVICES
          <!-- We Create the Difference -->
        </h2>
        <p class="services-description">
          Our service is designed to help individual/Business companies to
          maximize their potential and reach their goals. We provide a
          comprehensive suite of services ranging from initial strategy and
          planning to implementation and ongoing support. Our experienced team
          of professionals can help you identify and prioritize opportunities,
          develop a comprehensive plan, and execute projects with precision.
        </p>
      </div>
      <div class="section-area" style="padding-bottom: 200px;">
        <div class="container">
          <div class="row">
            <div class="col-sm-4">
              <section class="b-advantages b-advantages-4 wow fadeIn" data-wow-duration="1s" data-wow-delay="0.2s">
                <i class="b-advantages__icon pe-7s-graph1"></i>
                <h3 class="b-advantages__title ui-title-inner">
                  System Software Services
                </h3>
                <div class="b-advantages__info">
                  Inventory, Hotel, Hospital, ERP, Building, Restaurant Management Systems.
                </div>
              </section>
              <!-- end .b-advantages-->
            </div>
            <div class="col-sm-4">
              <section class="b-advantages b-advantages-4 wow fadeIn" data-wow-duration="1s" data-wow-delay="0.4s">
                <i class="b-advantages__icon pe-7s-news-paper"></i>
                <h3 class="b-advantages__title ui-title-inner">
                  Digital Marketing Agency
                </h3>
                <div class="b-advantages__info">
                  Develop comprehensive digital marketing strategies,
                  <br> Create content for websites, blogs, and social media, Social Media Management Paid Ad Promotion
                </div>
              </section>
              <!-- end .b-advantages-->
            </div>
            <div class="col-sm-4">
              <section class="b-advantages b-advantages-4 wow fadeIn" data-wow-duration="1s" data-wow-delay="0.6s">
                <i class="b-advantages__icon pe-7s-display2"></i>
                <h3 class="b-advantages__title ui-title-inner">
                  Branding & Designing
                </h3>
                <div class="b-advantages__info">
                  Logo Creation, Company Guide Line, Company Profile, Business Card, Brochure Flyer, Infographics Design
                </div>
              </section>
              <!-- end .b-advantages-->
            </div>
            <div class="col-sm-4">
              <section class="b-advantages b-advantages-4 wow fadeIn" data-wow-duration="1s" data-wow-delay="0.6s">
                <i class="b-advantages__icon pe-7s-video"></i>
                <h3 class="b-advantages__title ui-title-inner">
                  CCTV Supply & Installation
                </h3>
                <div class="b-advantages__info">
                  Install various CCTV camera types both Analog & Digital IP systems. Install & Program DVR Recording Units.
                </div>
              </section>
              <!-- end .b-advantages-->
            </div>
            <div class="col-sm-4">
              <section class="b-advantages b-advantages-4 wow fadeIn" data-wow-duration="1s" data-wow-delay="0.2s">
                <i class="b-advantages__icon pe-7s-map-marker"></i>
                <h3 class="b-advantages__title ui-title-inner">
                  GPS Tracking
                </h3>
                <div class="b-advantages__info">
                  You can use this to track your asset, which helps you to follow up (where and when). Includes Anti-Theft Feature.
                </div>
              </section>
              <!-- end .b-advantages-->
            </div>
            <div class="col-sm-4">
              <section class="b-advantages b-advantages-4 wow fadeIn" data-wow-duration="1s" data-wow-delay="0.4s">
                <i class="b-advantages__icon pe-7s-camera"></i>
                <h3 class="b-advantages__title ui-title-inner">
                  Photo and Video Shoot
                </h3>
                <div class="b-advantages__info">
                  professional photo and video shoot services to help businesses showcase their products, services, and events.
                </div>
              </section>
              <!-- end .b-advantages-->
            </div>
            <div class="col-sm-4">
              <section class="b-advantages b-advantages-4 wow fadeIn" data-wow-duration="1s" data-wow-delay="0.4s">
                <i class="b-advantages__icon pe-7s-global"></i>
                <h3 class="b-advantages__title ui-title-inner">
                  Web Development
                </h3>
                <div class="b-advantages__info">
                  We develop custom web applications that meet the unique needs of your business.
                  We uses the latest technologies to create scalable, secure, and user-friendly applications.
                </div>
              </section>
              <!-- end .b-advantages-->
            </div>
            <div class="col-sm-4">
              <section class="b-advantages b-advantages-4 wow fadeIn" data-wow-duration="1s" data-wow-delay="0.6s">
                <i class="b-advantages__icon pe-7s-like2"></i>
                <h3 class="b-advantages__title ui-title-inner">
                  Social Media Management
                </h3>
                <div class="b-advantages__info">
                  help businesses grow their online presence and engage with their audience.
                  Help you create and implement a social media strategy that is tailored to your business needs, goals, and target audience.
                </div>
              </section>
              <!-- end .b-advantages-->
            </div>
            <div class="col-sm-4">
              <section class="b-advantages b-advantages-4 wow fadeIn" data-wow-duration="1s" data-wow-delay="0.6s">
                <i class="b-advantages__icon pe-7s-print"></i>
                <h3 class="b-advantages__title ui-title-inner">
                  Printing
                </h3>
                <div class="b-advantages__info">
                  Our printing services include custom designs on a range of products,
                  including t-shirts, pens, mugs, banners, stickers, brochures, and other promotional materials.
                </div>
              </section>
              <!-- end .b-advantages-->
            </div>
          </div>
        </div>
      </div>
      <!-- end .b-contacts-->
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
</body>

</html>