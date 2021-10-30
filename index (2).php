<?php
include_once('admin/config.php');
$slider_sql = "SELECT * FROM slider WHERE status = '1'";
$slider_execute = $conn->query($slider_sql);
$responsibility_sql = "SELECT * FROM responsibility WHERE status = '1' LIMIT 4";
$responsibility_execute = $conn->query($responsibility_sql);
$courses_sql = "SELECT * FROM courses WHERE status = '1'";
$courses_execute = $conn->query($courses_sql);
$news_sql = "SELECT * FROM news WHERE status = '1' LIMIT 4";
$news_execute = $conn->query($news_sql);
$get_gallery_cats = "SELECT * FROM gallery_category";
$gallery_cats_execute = $conn->query($get_gallery_cats);
$get_gallery_photos = "SELECT * FROM gallery_photos  where status = '1'";
$gallery_photo_execute = $conn->query($get_gallery_photos);
$get_testimonial = "SELECT * FROM testimonial";
$testimonial_execute = $conn->query($get_testimonial);
$get_staffmembers = "SELECT * FROM staff_members LIMIT 4";
$staffmembers_execute = $conn->query($get_staffmembers);
?>
<!DOCTYPE html>
<html dir="ltr" lang="en">

<head>
  <?php include_once('includes/head.php'); ?>
</head>

<body class="">
  <div id="wrapper" class="clearfix">
    <?php include_once('includes/header.php'); ?>
    <!-- Start main-content -->
    <div class="main-content">
      <!-- Section: home -->
      <section id="home">
        <div class="container-fluid p-0">
          <!-- Slider Revolution Start -->
          <div class="rev_slider_wrapper">
            <div class="rev_slider" data-version="5.0">
              <ul>
                <?php
                while ($row = $slider_execute->fetch_assoc()) {
                  echo '
                      <li data-index="rs-1" data-transition="slidingoverlayhorizontal" data-slotamount="default" data-easein="default" data-easeout="default" data-masterspeed="default" data-thumb="admin/upload/' . $row['image'] . '" data-rotate="0" data-saveperformance="off" data-title="Slide 1" data-description="">
                        <!-- MAIN IMAGE -->
                        <img src="admin/upload/' . $row['image'] . '" alt="" data-bgposition="center 10%" data-bgfit="cover" data-bgrepeat="no-repeat" class="rev-slidebg" data-bgparallax="10" data-no-retina>
                      </li>
                    ';
                }
                ?>
              </ul>
            </div>
            <!-- end .rev_slider -->
          </div>
          <!-- end .rev_slider_wrapper -->
          <script>
            $(document).ready(function(e) {
              $(".rev_slider").revolution({
                sliderType: "standard",
                sliderLayout: "auto",
                dottedOverlay: "none",
                delay: 5000,
                navigation: {
                  keyboardNavigation: "off",
                  keyboard_direction: "horizontal",
                  mouseScrollNavigation: "off",
                  onHoverStop: "off",
                  touch: {
                    touchenabled: "on",
                    swipe_threshold: 75,
                    swipe_min_touches: 1,
                    swipe_direction: "horizontal",
                    drag_block_vertical: false
                  },
                  arrows: {
                    style: "zeus",
                    enable: true,
                    hide_onmobile: true,
                    hide_under: 600,
                    hide_onleave: true,
                    hide_delay: 200,
                    hide_delay_mobile: 1200,
                    tmp: '<div class="tp-title-wrap">    <div class="tp-arr-imgholder"></div> </div>',
                    left: {
                      h_align: "left",
                      v_align: "center",
                      h_offset: 30,
                      v_offset: 0
                    },
                    right: {
                      h_align: "right",
                      v_align: "center",
                      h_offset: 30,
                      v_offset: 0
                    }
                  },
                  bullets: {
                    enable: true,
                    hide_onmobile: true,
                    hide_under: 600,
                    style: "metis",
                    hide_onleave: true,
                    hide_delay: 200,
                    hide_delay_mobile: 1200,
                    direction: "horizontal",
                    h_align: "center",
                    v_align: "bottom",
                    h_offset: 0,
                    v_offset: 30,
                    space: 5,
                    tmp: '<span class="tp-bullet-img-wrap">  <span class="tp-bullet-image"></span></span><span class="tp-bullet-title">{{title}}</span>'
                  }
                },
                responsiveLevels: [1240, 1024, 778],
                visibilityLevels: [1240, 1024, 778],
                gridwidth: [1170, 1024, 778, 480],
                gridheight: [650, 768, 960, 720],
                lazyType: "none",
                parallax: {
                  origo: "slidercenter",
                  speed: 1000,
                  levels: [5, 10, 15, 20, 25, 30, 35, 40, 45, 46, 47, 48, 49, 50, 100, 55],
                  type: "scroll"
                },
                shadow: 0,
                spinner: "off",
                stopLoop: "on",
                stopAfterLoops: 0,
                stopAtSlide: -1,
                shuffle: "off",
                autoHeight: "off",
                fullScreenAutoWidth: "off",
                fullScreenAlignForce: "off",
                fullScreenOffsetContainer: "",
                fullScreenOffset: "0",
                hideThumbsOnMobile: "off",
                hideSliderAtLimit: 0,
                hideCaptionAtLimit: 0,
                hideAllCaptionAtLilmit: 0,
                debugMode: false,
                fallbacks: {
                  simplifyAll: "off",
                  nextSlideOnWindowFocus: "off",
                  disableFocusListener: false,
                }
              });
            });
          </script>
          <!-- Slider Revolution Ends -->
        </div>
      </section>
      <!-- Section: About  -->
      <section>
        <div class="container">
          <div class="section-content">
            <div class="row">
              <div class="col-md-6">
                <div class="owl-carousel-1col" data-nav="true">
                  <div class="item">
                    <img src="images/about/about1.jpg" alt="">
                  </div>
                  <div class="item">
                    <img src="images/about/about2.jpg" alt="">
                  </div>
                  <div class="item">
                    <img src="images/about/about3.jpg" alt="">
                  </div>
                </div>
              </div>
              <div class="col-md-6">
                <h2 class="line-bottom line-height-1 mt-0 mb-10 mt-sm-30">Our <span class="text-theme-color-2">Responsibility</span></h2>
                <div class="row">
                  <?php
                  while ($row = $responsibility_execute->fetch_assoc()) {
                    echo '
                        <div class="col-xs-12 col-sm-6 col-md-6">
                          <div class="icon-box p-0 mb-30">
                            <a class="icon icon-sm pull-left sm-pull-none flip  mb-sm-15 mb-0 mr-10" href="#">
                              <img src="admin/upload/' . $row['image'] . '" alt="" srcset="">
                            </a>
                            <h4 class="icon-box-title m-0 mb-5">' . $row['title'] . '</h4>
                            <p class="text-gray mb-5">' . $row['description'] . '</p>
                          </div>
                        </div>
                      ';
                  }
                  ?>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
      <!-- Section: COURSES -->
      <section class="bg-lighter">
        <div class="container pb-40">
          <div class="section-title">
            <div class="row">
              <div class="col-md-8">
                <h2 class="text-uppercase line-bottom line-height-1 mt-0 mb-0 ">Our <span class="text-theme-color-2 font-weight-400">COURSES</span></h2>
              </div>
            </div>
          </div>
          <div class="section-content">
            <div class="row">
              <div class="col-md-12">
                <div class="owl-carousel">
                  <?php
                  while ($row = $courses_execute->fetch_assoc()) {
                    echo '
                          <div class="item ">
                            <div class="service-block bg-white">
                              <div class="thumb">
                                <img alt="featured project" src="admin/upload/' . $row['image'] . '" class="img-fullwidth">
                                <h4 class="text-white mt-0 mb-0"></h4>
                              </div>
                              <div class="content text-left flip p-25 pt-0">
                                <h4 class="line-bottom mb-10">' . $row['title'] . '</h4>
                                <p>' . ((strlen($row['description']) > 50) ? substr($row['description'], 0, 50) . '...' : '') . '</p>
                                <a class="btn btn-dark btn-theme-colored btn-sm text-uppercase mt-10" href="course_details.php">view details</a>
                              </div>
                            </div>
                          </div>
                        ';
                  }
                  ?>
                </div>
              </div>
            </div>
          </div>
          <script>
            $(document).ready(function() {
              $(".owl-carousel").owlCarousel({
                loop: true,
                margin: 10,
                dots: false,
                nav: false,
                autoplay: true,
                autoplayTimeout: 5000,
                autoplayHoverPause: true,
                responsiveClass: true,
                responsive: {
                  0: {
                    items: 1
                  },
                  600: {
                    items: 3
                  },
                  1000: {
                    items: 4
                  }
                }
              });
            });
          </script>
        </div>
      </section>
      <!-- Section: Why Choose Us -->
      <section id="event">
        <div class="container">
          <div class="section-content">
            <div class="row">
              <div class="col-md-5">
                <img src="images/photos/1.jpg" class="img-fullwidth" alt="">
              </div>
              <div class="col-md-7 pt-60">
                <h3 class="title line-bottom mb-20 font-28 mt-0 line-height-1">Why <span class="text-theme-color-2 font-weight-400">Choose Us</span> ?</h3>
                <p class="mb-20 font-18">The Cweren Law Firm is a recognized leader in landlord tenant representation
                  throughout
                  Texas.The largests professional property management companies the region.The largest professional
                  property management companies is a recognized leader in landlord tenant representation throughout
                  Texas</p>
              </div>
            </div>
          </div>
        </div>
      </section>
      <!-- Divider: Funfact -->

      <!-- Section: team -->
      <section>
        <div class="container pt-60">
          <div class="section-title mb-0">
            <div class="row">
              <div class="col-md-8">
                <h2 class="mt-0 text-uppercase font-28 line-bottom">Our <span class="text-theme-color-2 font-weight-400">Teachers</span></h2>
                <h4 class="pb-20">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</h4>
              </div>
            </div>
          </div>
          <div class="section-content">
            <div class="row multi-row-clearfix">
              <?php
              while ($row = $staffmembers_execute->fetch_assoc()) {
                echo '
                  <div class="col-sm-6 col-md-3 mb-sm-30 sm-text-center">
                    <div class="team maxwidth400">
                      <div class="content border-1px p-15 bg-light clearfix">
                        <h4 class="name text-theme-color-2 mt-0">' . $row['name'] . ' - <small>' . $row['position'] . '</small></h4>
                        <p class="mb-20">' . explode("\n", wordwrap(strip_tags($row['description']), 100))[0] . '...</p>
                      </div>
                    </div>
                  </div>
              ';
              }
              ?>
            </div>
          </div>
        </div>
      </section>
      <!-- Section: Gallery -->
      <section id="gallery" class="bg-lighter">
        <div class="container">
          <div class="section-title">
            <div class="row">
              <div class="col-md-12">
                <h2 class="text-uppercase text-theme-colored title line-bottom line-height-1 mt-0 mb-0">Our<span class="text-theme-color-2 font-weight-400"> Gllery</span></h2>
              </div>
            </div>
          </div>
          <div class="section-content">
            <div class="row">
              <div class="col-md-12">
                <!-- Works Filter -->
                <div class="portfolio-filter font-alt align-center">
                  <a href="#" class="active" data-filter="*">All</a>
                  <?php
                  while ($row = $gallery_cats_execute->fetch_assoc()) {
                    echo '<a href="#select' . $row['id'] . '" class="" data-filter=".select' . $row['id'] . '">' . $row['name'] . '</a>';
                  }
                  ?>
                </div>
                <!-- End Works Filter -->
                <!-- Portfolio Gallery Grid -->
                <div id="grid" class="gallery-isotope grid-4 gutter clearfix">

                  <?php
                  while ($row = $gallery_photo_execute->fetch_assoc()) {
                    echo '
                    <!-- Portfolio Item Start -->
                    <div class="gallery-item select' . $row['gallery_cat_id'] . '">
                      <div class="thumb">
                        <img class="img-fullwidth" src="admin/upload/' . $row['image'] . '" alt="project">
                        <div class="overlay-shade"></div>
                        <div class="icons-holder">
                          <div class="icons-holder-inner">
                            <div class="styled-icons icon-sm icon-dark icon-circled icon-theme-colored">
                              <a data-lightbox="image" href="admin/upload/' . $row['image'] . '"><i class="fa fa-plus"></i></a>
                            </div>
                          </div>
                        </div>
                        <a class="hover-link" data-lightbox="image" href="admin/upload/' . $row['image'] . '">View more</a>
                      </div>
                    </div>
                    <!-- Portfolio Item End -->
                    ';
                  }
                  ?>
                </div>
                <!-- End Portfolio Gallery Grid -->
              </div>
            </div>
          </div>
        </div>
      </section>
      <!-- Section: Client Say -->
      <section class="divider parallax layer-overlay overlay-theme-colored-9" data-background-ratio="0.5" data-bg-img="images/bg/bg2.jpg">
        <div class="container pt-60 pb-60">
          <div class="row">
            <div class="col-md-8 col-md-offset-2">
              <h2 class="line-bottom-center text-gray-lightgray text-center mt-0 mb-30">Our Happy Students say</h2>
              <div class="owl-carousel-1col" data-dots="true">

                <?php
                while ($row = $testimonial_execute->fetch_assoc()) {
                  echo '
                <div class="item">
                  <div class="testimonial-wrapper text-center">
                    <div class="thumb"><img class="img-circle" alt="" src="admin/upload/' . $row['image'] . '"></div>
                    <div class="content pt-10">
                      <p class="font-15 text-white"><em>' . $row['message'] . '</em></p>
                      <i class="fa fa-quote-right font-36 mt-10 text-gray-lightgray"></i>
                      <h4 class="author text-theme-color-2 mb-0">' . $row['name'] . '</h4>
                      <h6 class="title text-white mt-0 mb-15">' . $row['designation'] . '</h6>
                    </div>
                  </div>
                </div>
                ';
                }
                ?>
              </div>
            </div>
          </div>
        </div>
      </section>
      <!-- Section: blog -->
      <section id="blog">
        <div class="container pt-40">
          <div class="section-content">
            <div class="row">
              <div class="col-md-12">
                <h3 class="text-uppercase text-theme-colored title line-bottom">Latest <span class="text-theme-color-2 font-weight-400">News</span></h3>
                <div class="owl-carousel-3col owl-nav-top" data-nav="true">
                  <?php
                  while ($row = $news_execute->fetch_assoc()) {
                    echo '
                      
                          <div class="item">
                            <article class="post clearfix bg-lighter">
                              <div class="entry-header">
                                <div class="post-thumb thumb">
                                  <img src="admin/upload/' . $row['image'] . '" alt="" class="img-responsive img-fullwidth">
                                </div>
                                <div class="entry-date media-left text-center flip bg-theme-colored border-top-theme-color-2-3px pt-5 pr-15 pb-5 pl-15">
                                  <ul>
                                    <li class="font-16 text-white font-weight-600">28</li>
                                    <li class="font-12 text-white text-uppercase">Feb</li>
                                  </ul>
                                </div>
                              </div>
                              <div class="entry-content p-15 pt-10 pb-10">
                                <!-- <div class="entry-meta media no-bg no-border mt-0 mb-10">
                                  <div class="media-body pl-0">
                                    <div class="event-content pull-left flip">
                                      <h4 class="entry-title text-white text-uppercase font-weight-600 m-0 mt-5"><a href="blog-single-left-sidebar.html">' . $row['title'] . '</a></h4>
                                      <span class="mb-10 text-gray-darkgray mr-10 font-13"><i class="fa fa-commenting-o mr-5 text-theme-colored"></i> 214 Comments</span>
                                      <span class="mb-10 text-gray-darkgray mr-10 font-13"><i class="fa fa-heart-o mr-5 text-theme-colored"></i> 895 Likes</span>
                                    </div>
                                  </div>
                                </div> -->
                                <p class="mt-20">' . $row['description'] . '<a class="text-theme-color-2 font-12 ml-5" href="blog-single-left-sidebar.html"> View Details</a></p>
                              </div>
                            </article>
                          </div>
                      
                      
                      ';
                  }
                  ?>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
      <!-- end main-content -->
    </div>
    <!-- Footer -->
    <?php include_once('includes/footer.php'); ?>
    <a class="scrollToTop" href="#"><i class="fa fa-angle-up"></i></a>
  </div>
  <!-- end wrapper -->
  <?php include_once('includes/footerjs.php'); ?>
</body>
<!-- Mirrored from html.kodesolution.live/s/studypress/v6.0/demo/index-mp-layout5.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 30 Nov 2020 18:54:07 GMT -->

</html>