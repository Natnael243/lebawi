<!DOCTYPE html>
<html lang="en">

<?php
include 'header.php'
?>
<style>
  .img-fluid {
  width: 100%;
  height: auto;
  object-fit: contain;
}

.b-isotope-grid__inner {
  display: flex;
  justify-content: center;
  align-items: center;
  overflow: hidden;
  width: 100%;
  height: 100%;
}

.b-isotope-grid__inner img {
  max-width: 100%;
  max-height: 100%;
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
          include 'menu.php'
          ?>
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
                          latest
                          <strong class="b-title-page__emphasis">works</strong>
                        </h1>
                      </li>
                    </ul>
                  </div>
                </div>
                <ol class="breadcrumb">
                  <li><a href="hindex.php">home</a></li>
                  <li class="active">portfolio</li>
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
      <div class="b-isotope b-isotope-3">
        <div class="container">
          <div class="row">
            <div class="col-xs-12">
              <ul class="b-isotope-filter list-unstyled">
                <li class="current">
                  <a href="" data-filter=".logo">LOGO Designing & Branding</a>
                </li>
                <li>
                  <a href="" data-filter=".web">Web Development</a>
                </li>
                <li>
                  <a href="" data-filter=".marketing">Digital Marketing & Promotion</a>
                </li>
              </ul>
              <ul class="b-isotope-grid grid list-unstyled js-zoom-gallery">
                <li class="grid-sizer"></li>
                <li class="b-isotope-grid__item grid-item logo">
                  <a class="b-isotope-grid__inner tilter tilter--1" href="#">
                    <figure class="tilter__figure">
                      <img src="assets/media/components/b-isotope/branding/1.png" alt="foto" />
                    </figure>
                </li></a>
                <li class="b-isotope-grid__item grid-item logo">
                  <a class="b-isotope-grid__inner tilter tilter--1" href="#">
                    <figure class="tilter__figure">
                      <img src="assets/media/components/b-isotope/branding/2.png" alt="foto" />
                    </figure>
                  </a>
                </li>
                <li class="b-isotope-grid__item grid-item logo">
                  <a class="b-isotope-grid__inner tilter tilter--1" href="#">
                    <figure class="tilter__figure">
                      <img src="assets/media/components/b-isotope/branding/3.png" alt="foto" />
                    </figure>
                  </a>
                </li>
                <li class="b-isotope-grid__item grid-item logo">
                  <a class="b-isotope-grid__inner tilter tilter--1" href="#">
                    <figure class="tilter__figure">
                      <img src="assets/media/components/b-isotope/branding/4.png" alt="foto" />
                    </figure>
                  </a>
                </li>
                <li class="b-isotope-grid__item grid-item logo">
                  <a class="b-isotope-grid__inner tilter tilter--1" href="#">
                    <figure class="tilter__figure">
                      <img src="assets/media/components/b-isotope/branding/5.png" alt="foto" />
                    </figure>
                  </a>
                </li>
                <li class="b-isotope-grid__item grid-item logo">
                  <a class="b-isotope-grid__inner tilter tilter--1" href="#">
                    <figure class="tilter__figure">
                      <img src="assets/media/components/b-isotope/branding/6.png" alt="foto" />
                    </figure>
                  </a>
                </li>
                <li class="b-isotope-grid__item grid-item logo">
                  <a class="b-isotope-grid__inner tilter tilter--1" href="#">
                    <figure class="tilter__figure">
                      <img src="assets/media/components/b-isotope/branding/7.png" alt="foto" />
                    </figure>
                  </a>
                </li>
                <li class="b-isotope-grid__item grid-item logo">
                  <a class="b-isotope-grid__inner tilter tilter--1" href="#">
                    <figure class="tilter__figure">
                      <img src="assets/media/components/b-isotope/branding/8.png" alt="foto" />
                    </figure>
                  </a>
                </li>
                <li class="b-isotope-grid__item grid-item logo">
                  <a class="b-isotope-grid__inner tilter tilter--1" href="#">
                    <figure class="tilter__figure">
                      <img src="assets/media/components/b-isotope/branding/9.png" alt="foto" />
                    </figure>
                  </a>
                </li>
                <li class="b-isotope-grid__item grid-item logo">
                  <a class="b-isotope-grid__inner tilter tilter--1" href="#">
                    <figure class="tilter__figure">
                      <img src="assets/media/components/b-isotope/branding/10.png" alt="foto" />
                    </figure>
                  </a>
                </li>
                <li class="b-isotope-grid__item grid-item logo">
                  <a class="b-isotope-grid__inner tilter tilter--1" href="#">
                    <figure class="tilter__figure">
                      <img src="assets/media/components/b-isotope/branding/11.png" alt="foto" />
                    </figure>
                  </a>
                </li>

                <li class="b-isotope-grid__item grid-item web">
                  <a class="b-isotope-grid__inner tilter tilter--1" href="#">
                    <figure class="tilter__figure">
                      <img src="assets/media/components/b-isotope/websites/1.png" alt="foto" />
                    </figure>
                  </a>
                </li>
                <li class="b-isotope-grid__item grid-item web">
                  <a class="b-isotope-grid__inner tilter tilter--1" href="#">
                    <figure class="tilter__figure">
                      <img src="assets/media/components/b-isotope/websites/2.png" alt="foto" />
                    </figure>
                  </a>
                </li>
                <li class="b-isotope-grid__item grid-item web">
                  <a class="b-isotope-grid__inner tilter tilter--1" href="#">
                    <figure class="tilter__figure">
                      <img src="assets/media/components/b-isotope/websites/3.png" alt="foto" />
                    </figure>
                  </a>
                </li>
                <li class="b-isotope-grid__item grid-item web">
                  <a class="b-isotope-grid__inner tilter tilter--1" href="#">
                    <figure class="tilter__figure">
                      <img src="assets/media/components/b-isotope/websites/4.png" alt="foto" />
                    </figure>
                  </a>
                </li>
                <li class="b-isotope-grid__item grid-item web">
                  <a class="b-isotope-grid__inner tilter tilter--1" href="#">
                    <figure class="tilter__figure">
                      <img src="assets/media/components/b-isotope/websites/5.png" alt="foto" />
                    </figure>
                  </a>
                </li>
                <li class="b-isotope-grid__item grid-item web">
                  <a class="b-isotope-grid__inner tilter tilter--1" href="#">
                    <figure class="tilter__figure">
                      <img src="assets/media/components/b-isotope/websites/6.png" alt="foto" />
                    </figure>
                  </a>
                </li>

                <li class="b-isotope-grid__item grid-item marketing">
                  <a class="b-isotope-grid__inner tilter tilter--1" href="#">
                    <figure class="tilter__figure">
                      <img src="assets/media/components/b-isotope/graphics/1.png" alt="foto" />
                    </figure>
                  </a>
                </li>
                <li class="b-isotope-grid__item grid-item marketing">
                  <a class="b-isotope-grid__inner tilter tilter--1" href="#">
                    <figure class="tilter__figure">
                      <img src="assets/media/components/b-isotope/graphics/2.png" alt="foto" />
                    </figure>
                  </a>
                </li>
                <li class="b-isotope-grid__item grid-item marketing">
                  <a class="b-isotope-grid__inner tilter tilter--1" href="#">
                    <figure class="tilter__figure">
                      <img src="assets/media/components/b-isotope/graphics/3.png" alt="foto" />
                    </figure>
                  </a>
                </li>
                <li class="b-isotope-grid__item grid-item marketing">
                  <a class="b-isotope-grid__inner tilter tilter--1" href="#">
                    <figure class="tilter__figure">
                      <img src="assets/media/components/b-isotope/graphics/4.png" alt="foto" />
                    </figure>
                  </a>
                </li>
                <li class="b-isotope-grid__item grid-item marketing">
                  <a class="b-isotope-grid__inner tilter tilter--1" href="#">
                    <figure class="tilter__figure">
                      <img src="assets/media/components/b-isotope/graphics/5.png" alt="foto" />
                    </figure>
                  </a>
                </li>
                <li class="b-isotope-grid__item grid-item marketing">
                  <a class="b-isotope-grid__inner tilter tilter--1" href="#">
                    <figure class="tilter__figure">
                      <img src="assets/media/components/b-isotope/graphics/6.png" alt="foto" />
                    </figure>
                  </a>
                </li>
                <li class="b-isotope-grid__item grid-item marketing">
                  <a class="b-isotope-grid__inner tilter tilter--1" href="#">
                    <figure class="tilter__figure">
                      <img src="assets/media/components/b-isotope/graphics/7.png" alt="foto" />
                    </figure>
                  </a>
                </li>
                <li class="b-isotope-grid__item grid-item marketing">
                  <a class="b-isotope-grid__inner tilter tilter--1" href="#">
                    <figure class="tilter__figure">
                      <img src="assets/media/components/b-isotope/graphics/8.png" alt="foto" />
                    </figure>
                  </a>
                </li>
              </ul>
            </div>
          </div>
        </div>
      </div>
      <!-- end .b-isotope-->
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