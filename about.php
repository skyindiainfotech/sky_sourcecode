<?php
include_once('admin/config.php');
$about_us_sql = "SELECT * FROM about_us LIMIT 1";
$about_us_execute = $conn->query($about_us_sql);
$row = $about_us_execute->fetch_assoc();
?>
<!DOCTYPE html>
<html dir="ltr" lang="en">

<head>
    <?php include_once('includes/head.php'); ?>

    <style>
        .about-containt {
            font-weight: bolder;
            font-size: 1rem;
        }

        .about-containt p {
            text-align: justify;
            color: black;
        }
    </style>
</head>

<body class="">
    <div id="wrapper" class="clearfix">

        <?php include_once('includes/header.php'); ?>

        <!-- Start main-content -->
        <div class="main-content">

            <!-- Section: inner-header -->
            <section class="inner-header divider parallax layer-overlay overlay-dark-5" data-bg-img="images/bg/bg3.jpg">
                <div class="container pt-70 pb-20">
                    <!-- Section Content -->
                    <div class="section-content">
                        <div class="row">
                            <div class="col-md-12">
                                <h2 class="title text-white">About</h2>
                                <ol class="breadcrumb text-left text-black mt-10"></ol>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <!-- Section: About -->
            <section class="">
                <div class="container">
                    <div class="section-content">
                        <div class="row">
                            <div class="col-md-12 about-containt">
                                <h6 class="letter-space-4 text-gray-darkgray text-uppercase mt-0 mb-0">All About</h6>
                                <h2 class="text-uppercase font-weight-600 mt-0 font-28 line-bottom"><?= $row['title'] ?></h2>
                                <?= $row['description'] ?>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- end main-content -->
            <hr />
            <!-- Section: About -->
            <section class="">
                <div class="container">
                    <div class="section-content">
                        <div class="row">
                            <div class="col-md-6">
                                <h2 class="text-uppercase font-weight-600 mt-0 font-28 line-bottom"><?= $row['owner_name'] ?></h2>
                                <h4 class="text-theme-colored"><?= $row['owner_tag_line'] ?></h4>
                                <?= $row['owner_description'] ?>
                            </div>
                            <div class="col-md-6">
                                <div class="image-popup">
                                    <a href="admin/upload/<?= $row['owner_photo'] ?>" data-lightbox-gallery="youtube-video" title="BEYOND THE LEADERSHIP!">
                                        <img alt="" src="admin/upload/<?= $row['owner_photo'] ?>" class="img-responsive img-fullwidth">
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <hr />

            <!-- Section: Vission & Mission -->
            <section class="">
                <div class="container">
                    <div class="section-content">
                        <div class="row">
                            <div class="col-md-6">
                                <h2 class=" font-weight-600 mt-0 font-28 line-bottom">Our Vission</h2>
                                <?= $row['vission'] ?>
                            </div>
                            <div class="col-md-6">
                                <h2 class=" font-weight-600 mt-0 font-28 line-bottom">Our Mission</h2>
                                <?= $row['mission'] ?>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
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