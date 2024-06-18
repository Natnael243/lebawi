<!DOCTYPE html>
<?php
include 'header.php';
?>
<html lang="en">

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
    <button type="button" class="fullmenu-close">
      <i class="fa fa-times"></i>
    </button>
  </div>

  <div 
  class="l-theme animated-css" 
  data-header="sticky" 
  data-header-top="200" 
  data-canvas="container"
  >
  <div class="header-search open-search">
        <div class="container">
          <div class="row">
            <div class="col-sm-8 col-sm-offset-2 col-xs-10 col-xs-offset-1">
              <div class="navbar-search">
                <form class="search-global">
                  <input
                    class="search-global__input"
                    type="text"
                    placeholder="Type to search"
                    autocomplete="off"
                    name="s"
                    value=""
                  />
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
      <header
        class="header header-topbar-hidden header-boxed-width navbar-fixed-top header-background-trans header-color-white header-logo-white header-navibox-1-left header-navibox-2-right header-navibox-3-right header-navibox-4-right"
      >
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
                    <a href="/" target="_blank"
                      ><i class="social_icons fa fa-facebook-square"></i
                    ></a>
                  </li>
                  <li>
                    <a href="/" target="_blank"
                      ><i class="social_icons fa fa-youtube-square"></i
                    ></a>
                  </li>
                  <li>
                    <a href="/" target="_blank"
                      ><i class="social_icons fa fa-vimeo-square"></i
                    ></a>
                  </li>
                  <li>
                    <a href="/" target="_blank"
                      ><i class="social_icons fa fa-twitter-square"></i
                    ></a>
                  </li>
                  <li class="li-last">
                    <a href="/" target="_blank"
                      ><i class="social_icons fa fa-tumblr-square"></i
                    ></a>
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
                      <i class="toggle-menu-button-icon"
                        ><span></span><span></span><span></span><span></span
                        ><span></span><span></span
                      ></i>
                    </button>
                  </li>
                </ul>
              </div>
            </div>
          </nav>
        </div>
      </header>
    <main class="l-main-content">
      <div class="main-slider slider-pro" id="main-slider" data-slider-width="100%" data-slider-height="900px" data-slider-arrows="false" data-slider-buttons="true">
        <div class="sp-slides">
          <!-- Slide 1-->
          <div class="sp-slide">
            <img class="sp-image" src="assets/media/components/b-main-slider/bg-1.jpg" alt="slider" />
            <div class="container">
              <div class="row">
                <div class="col-xs-12">
                  <div class="main-slider__info sp-layer" data-width="100%" data-show-transition="left" data-hide-transition="left" data-show-duration="2000" data-show-delay="1200" data-hide-delay="400">
                    Hello & Welcome!
                  </div>
                </div>
                <div class="col-sm-9 col-sm-offset-2">
                  <div class="sp-layer" data-width="100%" data-show-transition="left" data-hide-transition="left" data-show-duration="800" data-show-delay="400" data-hide-delay="400">
                    <div class="main-slider__wrap b-title-page__wrap">
                      <div class="main-slider__title b-title-page">
                        lebawi -&nbsp;<strong class="main-slider__emphasis b-title-page__emphasis">Net</strong>
                      </div>
                      <div class="typed-strings">
                        <ul>
                          <li>
                            <div class="main-slider__subtitle">
                              your business partner
                            </div>
                          </li>
                          <li>
                            <div class="main-slider__subtitle">
                              your partner in success
                            </div>
                          </li>
                        </ul>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-xs-12">
                  <div class="sp-layer" data-width="100%" data-show-transition="left" data-hide-transition="left" data-show-duration="800" data-show-delay="400" data-hide-delay="400">
                    <span class="b-btn"><span class="ui-decor-line"></span><a class="main-slider__btn b-btn__inner" href="services.php"><i class="ui-decor"></i>read more<i class="ui-decor"></i></a>
                    </span>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <!-- Slide 2-->
          <div class="sp-slide">
            <img class="sp-image" src="assets/media/components/b-main-slider/bg-2.jpg" alt="slider" />
            <div class="container">
              <div class="row">
                <div class="col-xs-12">
                  <div class="main-slider__info sp-layer" data-width="100%" data-show-transition="left" data-hide-transition="left" data-show-duration="2000" data-show-delay="1200" data-hide-delay="400">
                    Hello & Welcome!
                  </div>
                </div>
                <div class="col-sm-9 col-sm-offset-2">
                  <div class="sp-layer" data-width="100%" data-show-transition="left" data-hide-transition="left" data-show-duration="800" data-show-delay="400" data-hide-delay="400">
                    <div class="main-slider__wrap b-title-page__wrap">
                      <div class="main-slider__title b-title-page">
                        lebawi -&nbsp;<strong class="main-slider__emphasis b-title-page__emphasis">net</strong>
                      </div>
                      <div class="main-slider__subtitle">
                        your partner in success
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-xs-12">
                  <div class="sp-layer" data-width="100%" data-show-transition="left" data-hide-transition="left" data-show-duration="800" data-show-delay="400" data-hide-delay="400">
                    <span class="b-btn"><span class="ui-decor-line"></span><a class="main-slider__btn b-btn__inner" href="services.php"><i class="ui-decor"></i>read more<i class="ui-decor"></i></a>
                    </span>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <!-- Slide 3-->
          <div class="sp-slide">
            <img class="sp-image" src="assets/media/components/b-main-slider/bg-1.jpg" alt="slider" />
            <div class="container">
              <div class="row">
                <div class="col-xs-12">
                  <div class="main-slider__info sp-layer" data-width="100%" data-show-transition="left" data-hide-transition="left" data-show-duration="2000" data-show-delay="1200" data-hide-delay="400">
                    Hello & Welcome!
                  </div>
                </div>
                <div class="col-sm-9 col-sm-offset-2">
                  <div class="sp-layer" data-width="100%" data-show-transition="left" data-hide-transition="left" data-show-duration="800" data-show-delay="400" data-hide-delay="400">
                    <div class="main-slider__wrap b-title-page__wrap">
                      <div class="main-slider__title b-title-page">
                        Lebawi -&nbsp;<strong class="main-slider__emphasis b-title-page__emphasis">net</strong>
                      </div>
                      <div class="main-slider__subtitle">
                        your partner in success
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-xs-12">
                  <div class="sp-layer" data-width="100%" data-show-transition="left" data-hide-transition="left" data-show-duration="800" data-show-delay="400" data-hide-delay="400">
                    <span class="b-btn"><span class="ui-decor-line"></span><a class="main-slider__btn b-btn__inner" href="services.php"><i class="ui-decor"></i>read more<i class="ui-decor"></i></a>
                    </span>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- end .main-slider-->

      <section class="section-first">
        <div class="container">
          <div class="row">
            <div class="col-sm-10 col-sm-offset-1">
              <div class="text-center">
                <div class="ui-slogan">
                  <i class="ui-decor"></i>At lebawi net<i class="ui-decor"></i>
                </div>
                <h2 class="ui-title-block ui-title-block_border ui-title-block_border-left">
                  We Handle Everything For You
                  <!-- We Create the Difference -->
                </h2>
              </div>
              <div class="b-advantages-group-1 wrap-inl-bl inner-cols-plus30">
                <div class="row">
                  <div class="col-sm-6">
                    <section class="b-advantages b-advantages-1 wow fadeIn" data-wow-duration="1s" data-wow-delay="0.4s">
                      <i class="b-advantages__icon flaticon-settings"></i>
                      <h3 class="b-advantages__title ui-title-inner">
                        We Build Web & App
                      </h3>
                      <div class="b-advantages__info">
                        We Develop custom web applications that meet the
                        unique needs of your business. We use latest
                        technologies to create scalable,secure, and
                        user-friendly applications.
                      </div>
                    </section>
                    <!-- end .b-advantages-->
                  </div>
                  <div class="col-sm-6">
                    <section class="b-advantages b-advantages-1 wow fadeIn" data-wow-duration="1s" data-wow-delay="0.2s">
                      <i class="b-advantages__icon flaticon-mouse"></i>
                      <h3 class="b-advantages__title ui-title-inner">
                        Printing
                      </h3>
                      <div class="b-advantages__info">
                        Our printing services include custom designs on
                        t-shirts, pens, mugs, banners, stickers, brochures and
                        other promotional materials.
                      </div>
                    </section>
                    <!-- end .b-advantages-->
                  </div>
                  <div class="col-sm-6">
                    <section class="b-advantages b-advantages-1 wow fadeIn" data-wow-duration="1s" data-wow-delay="0.6s">
                      <i class="b-advantages__icon flaticon-menu-button"></i>
                      <h3 class="b-advantages__title ui-title-inner">
                        Branding & Designing
                      </h3>
                      <div class="b-advantages__info">
                        Help businesses communicate their message effectively
                        and stand out in today's competitive market.
                      </div>
                    </section>
                    <!-- end .b-advantages-->
                  </div>
                  <div class="col-sm-6">
                    <section class="b-advantages b-advantages-1 wow fadeIn" data-wow-duration="1s" data-wow-delay="0.8s">
                      <i class="b-advantages__icon flaticon-compass-2"></i>
                      <h3 class="b-advantages__title ui-title-inner">
                        Digital Marketing
                      </h3>
                      <div class="b-advantages__info">
                        Grow your online presence and reach your target
                        audiencee. We create customized strategies that help
                        our clients increase their brand awareness, engage
                        with their followers, and drive conversions
                      </div>
                    </section>
                    <!-- end .b-advantages-->
                  </div>
                  <div class="col-sm-6">
                    <section class="b-advantages b-advantages-1 wow fadeIn" data-wow-duration="1s" data-wow-delay="0.2s">
                      <i class="b-advantages__icon flaticon-mouse"></i>
                      <h3 class="b-advantages__title ui-title-inner">
                        SAAS Systems
                      </h3>
                      <div class="b-advantages__info">
                        Help businesses improve their operations and
                        streamline their workflows. Our SaaS software
                        solutions are designed to meet the specific needs of
                        our clients.
                      </div>
                    </section>
                    <!-- end .b-advantages-->
                  </div>
                  <div class="col-sm-6">
                    <section class="b-advantages b-advantages-1 wow fadeIn" data-wow-duration="1s" data-wow-delay="0.4s">
                      <i class="b-advantages__icon flaticon-settings"></i>
                      <h3 class="b-advantages__title ui-title-inner">
                        Security (Installation)
                      </h3>
                      <div class="b-advantages__info">
                        High-quality equipment and provide comprensive
                        security on Buildings(CCTV) and Vehicles(GPS Tracking)
                      </div>
                    </section>
                    <!-- end .b-advantages-->
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>

      <div class="section-area">
        <div class="container">
          <div class="row">
            <div class="col-sm-7">
              <section class="section-default section-default_w-title bg-grey bg-grey_full-width padd-right-col">
                <div class="area-bg__inner">
                  <div class="ui-slogan">
                    <i class="ui-decor"></i>At Lebawi Net<i class="ui-decor"></i>
                  </div>
                  <h2 class="ui-title-block">We Handle Everything For You</h2>
                  <p>
                    We are proud to offer our clients quality services that
                    are tailored to their specific needs. Our team of
                    experienced professionals is dedicated to delivering
                    high-quality software solutions that help businesses
                    improve their operations, increase efficiency, and drive
                    growth.
                  </p>
                </div>
              </section>
              <span class="b-btn"><span class="ui-decor-line"></span><a class="b-btn__inner" href="about.php">read about us<i class="ui-decor"></i></a>
              </span>
            </div>

            <div class="col-sm-5">
              <div class="section-default">
                <div class="group-img-1">
                  <a class="group-img-1__inner tilter tilter--1 js-zoom-images img-hover-effect img-hover-effect" href="assets/media/content/other/310x430/1.jpg">
                    <figure class="tilter__figure">
                      <img class="img-responsive" src="assets/media/content/other/310x430/1.jpg" alt="foto" />
                    </figure>
                  </a>
                  <a class="group-img-1__inner tilter tilter--1 js-zoom-images img-hover-effect img-hover-effect" href="assets/media/content/other/310x500/1.jpg">
                    <figure class="tilter__figure">
                      <img class="img-responsive" src="assets/media/content/other/310x500/1.jpg" alt="foto" />
                    </figure>
                  </a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

      <section class="section-type-1">
        <div class="container">
          <div class="row">
            <div class="col-xs-12">
              <div class="text-right">
                <!-- <div class="ui-slogan">
                    <i class="ui-decor"></i>specially crafted ideas<i
                      class="ui-decor"
                    ></i>
                  </div> -->
                <h2 class="ui-title-block ui-title-block_border ui-title-block_border-right">
                  Works We've Done
                </h2>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-sm-3 col-sm-push-9">
              <div class="text-right">
                <ul class="b-works__nav nav nav-tabs">
                  <li class="active">
                    <a href="#saas" data-toggle="tab">SAAS SYSTEM</a>
                  </li>
                  <li>
                    <a href="#stock" data-toggle="tab">Stock Management system</a>
                  </li>
                  <li>
                    <a href="#erp" data-toggle="tab">ERP System</a>
                  </li>
                  <li>
                    <a href="#hotel" data-toggle="tab">Mnab Tour
                    </a>
                  </li>
                </ul>
                <span class="b-btn"><span class="ui-decor-line"></span><i class="ui-decor"></i><a class="b-btn__inner" href="portfolio.php">view More service</a>
                </span>
              </div>
            </div>
            <div class="col-sm-9 col-sm-pull-3">
              <div class="b-works__tab tab-content">
                <div class="tab-pane fade in active" id="saas">
                  <div class="row">
                    <div class="col-sm-6">
                      <a class="b-works__item" href="portfolio.php">
                        <figure class="tilter__figure">
                          <img class="img-responsive" src="assets/media/components/b-isotope/gebetachn/390_300_1.png" alt="foto" />
                        </figure>
                      </a>
                      <a class="b-works__item" href="portfolio.php">
                        <figure class="tilter__figure">
                          <img class="img-responsive" src="assets/media/components/b-isotope/gebetachn/390_300_2.png" alt="foto" />
                        </figure>
                      </a>
                    </div>
                    <div class="col-sm-6">
                      <div class="b-works__info">
                        <h3 class="b-works__title ui-title-inner">
                          Gebtachen
                        </h3>
                        <p style="padding-bottom: 20px">
                          Contact-less QR Menu. Simplify the ordering process
                          and increase efficiency with our easy-to-use SAAS
                          web application. Enhance Your Customers’ Experience
                          with Gebetachen QR Menu.
                        </p>
                      </div>
                      <a class="b-works__item" href="portfolio.php">
                        <figure class="tilter__figure">
                          <img class="img-responsive" src="assets/media/components/b-isotope/gebetachn/390_300_3.png" alt="foto" />
                        </figure>
                      </a>
                    </div>
                  </div>
                </div>
                <div class="tab-pane fade" id="stock">
                  <div class="row">
                    <div class="col-sm-6">
                      <div class="b-works__info">
                        <h3 class="b-works__title ui-title-inner">
                          Stock Management system
                        </h3>
                        <p>
                          POS – Stock Management System is advanced software
                          and stock management tool, which comes with advanced
                          features like Taxes, Inventory, product variations,
                          warehouse, branches, multi stores, brands and
                          categories, advance reports, invoices, barcodes,
                          thermal printer size support, multilingual and multi
                          currency support etc.
                        </p>
                        <p>
                          It can be used for different niches like mobile
                          stores, apparel stores etc where you want to manage
                          the stock with multiple branches/warehouses.
                        </p>
                      </div>
                      <a class="b-works__item tilter tilter--1" href="portfolio.php">
                        <figure class="tilter__figure">
                          <img class="img-responsive" src="assets/media/components/b-isotope/stock_ms/stock.jpg" alt="foto" />
                        </figure>
                      </a>
                    </div>
                    <div class="col-sm-6">
                      <a class="b-works__item tilter tilter--1" href="portfolio.php">
                        <figure class="tilter__figure">
                          <img class="img-responsive" src="assets/media/components/b-isotope/stock_ms/stock.jpg" alt="foto" />
                        </figure>
                      </a>
                      <a class="b-works__item tilter tilter--1" href="portfolio.php">
                        <figure class="tilter__figure">
                          <img class="img-responsive" src="assets/media/components/b-isotope/stock_ms/stock.jpg" alt="foto" />
                        </figure>
                      </a>
                    </div>
                  </div>
                </div>
                <div class="tab-pane fade" id="erp">
                  <div class="row">
                    <div class="col-sm-6">
                      <a class="b-works__item tilter tilter--1" href="portfolio.php">
                        <figure class="tilter__figure">
                          <img class="img-responsive" src="assets/media/components/b-isotope/390x300_1.jpg" alt="foto" />
                        </figure>
                      </a>
                      <div class="b-works__info">
                        <h3 class="b-works__title ui-title-inner">
                          ERP System
                        </h3>
                        <p>
                          a type of software system that helps organizations
                          automate and manage core business processes for
                          optimal performance. ERP software coordinates the
                          flow of data between a company’s business processes,
                          providing a single source of truth and streamlining
                          operations across the enterprise.
                        </p>
                      </div>
                    </div>
                    <div class="col-sm-6">
                      <a class="b-works__item tilter tilter--1" href="portfolio.php">
                        <figure class="tilter__figure">
                          <img class="img-responsive" src="assets/media/components/b-isotope/390x450_1.jpg" alt="foto" />
                        </figure>
                      </a>
                      <a class="b-works__item tilter tilter--1" href="portfolio.php">
                        <figure class="tilter__figure">
                          <img class="img-responsive" src="assets/media/components/b-isotope/390x300_2.jpg" alt="foto" />
                        </figure>
                      </a>
                    </div>
                  </div>
                </div>
                <div class="tab-pane fade" id="hotel">
                  <div class="row">
                    <div class="col-sm-6">
                      <a class="b-works__item tilter tilter--1" href="portfolio.php">
                        <figure class="tilter__figure">
                          <img class="img-responsive" src="assets/media/components/b-isotope/mnab_tour/mnab_1.jpg" alt="foto" />
                        </figure>
                      </a>
                      <a class="b-works__item tilter tilter--1" href="portfolio.php">
                        <figure class="tilter__figure">
                          <img class="img-responsive" src="assets/media/components/b-isotope/mnab_tour/mnab_2.jpg" alt="foto" />
                        </figure>
                      </a>
                    </div>
                    <div class="col-sm-6">
                      <a class="b-works__item tilter tilter--1" href="portfolio.php">
                        <figure class="tilter__figure">
                          <img class="img-responsive" src="assets/media/components/b-isotope/mnab_tour/mnab_3.jpg" alt="foto" />
                        </figure>
                      </a>
                      <div class="b-works__info">
                        <h3 class="b-works__title ui-title-inner">
                          Mnab Tour
                        </h3>
                        <p>
                        Mnab, immersive virtual tour solution is designed to transform how you showcase your properties and engage with potential buyers.
                        </p>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <!-- end .b-works-->
          </div>
        </div>
      </section>

      <section class="section-type-1">
        <div class="container">
          <div class="row">
            <div class="col-md-6">
              <!-- <div class="ui-slogan">
                  <i class="ui-decor"></i>specially crafted ideas<i
                    class="ui-decor"
                  ></i>
                </div> -->
              <h4 class="ui-title-block ui-title-block_border ui-title-block_border-right" style="padding-top: 120px">
                Our bussiness Partners
              </h4>
            </div>
          </div>

          <div class="row">
            <div class="col-xs-12">
              <div class="b-brands owl-carousel owl-theme enable-owl-carousel" data-min480="2" data-min768="3" data-min992="5" data-min1200="5" data-pagination="false" data-navigation="false" data-auto-play="4000" data-stop-on-hover="true">
                <a class="b-brands__item" href="services.php">
                  <img class="img-responsive center-block" src="assets/media/components/b-brands/sis_1.png" alt="foto" />
                </a>
                <a class="b-brands__item" href="services.php">
                  <img class="img-responsive center-block" src="assets/media/components/b-brands/sis_2.png" alt="foto" />
                </a>
                <a class="b-brands__item" href="services.php">
                  <img class="img-responsive center-block" src="assets/media/components/b-brands/sis_3.png" alt="foto" />
                </a>
                <a class="b-brands__item" href="services.php">
                  <img class="img-responsive center-block" src="assets/media/components/b-brands/sis_4.png" alt="foto" />
                </a>
                <a class="b-brands__item" href="services.php">
                  <img class="img-responsive center-block" src="assets/media/components/b-brands/sis_5.png" alt="foto" />
                </a>
                <a class="b-brands__item" href="services.php">
                  <img class="img-responsive center-block" src="assets/media/components/b-brands/sis_6.png" alt="foto" />
                </a>
                <a class="b-brands__item" href="services.php">
                  <img class="img-responsive center-block" src="assets/media/components/b-brands/sis_7.png" alt="foto" />
                </a>
                <a class="b-brands__item" href="services.php">
                  <img class="img-responsive center-block" src="assets/media/components/b-brands/sis_8.png" alt="foto" />
                </a>
                <a class="b-brands__item" href="services.php">
                  <img class="img-responsive center-block" src="assets/media/components/b-brands/sis_9.png" alt="foto" />
                </a>
                <a class="b-brands__item" href="services.php">
                  <img class="img-responsive center-block" src="assets/media/components/b-brands/sis_10.png" alt="foto" />
                </a>
                <a class="b-brands__item" href="services.php">
                  <img class="img-responsive center-block" src="assets/media/components/b-brands/sis_11.png" alt="foto" />
                </a>
                <a class="b-brands__item" href="services.php">
                  <img class="img-responsive center-block" src="assets/media/components/b-brands/sis_12.png" alt="foto" />
                </a>
                <a class="b-brands__item" href="services.php">
                  <img class="img-responsive center-block" src="assets/media/components/b-brands/sis_13.png" alt="foto" />
                </a>
              </div>
              <!-- end .b-brands-->
            </div>
          </div>
        </div>
      </section>
      <section class="section-type-1">
        <div class="container">
          <div class="row" style="padding-top: 100px">
            <p class="text-center">
              LebawiNet is proud to be partnered with IOS Web Hosting company
              and become the sole service provider of all IONOS DIGITAL
              PRODUCTS under a subsidiary company called ENSRAHOST.
            </p>
            <div class="col-sm-6">
              <div class="b-brands">
                <a class="b-brands__item" href="services.php">
                  <img class="img-responsive center-block" src="assets/media/components/b-brands/ensra.png" alt="foto" />
                </a>
              </div>
            </div>
            <div class="col-sm-6">
              <div class="b-brands">
                <a class="b-brands__item" href="services.php">
                  <img class="img-responsive center-block" src="assets/media/components/b-brands/ionos.png" alt="foto" />
                </a>
              </div>
            </div>
          </div>
        </div>
      </section>
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
  <!-- Main slider-->
  <script src="assets/plugins/slider-pro/jquery.sliderPro.min.js"></script>
</body>

</html>