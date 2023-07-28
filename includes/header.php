<?php
$activePage = basename($_SERVER['PHP_SELF'], ".php");
?>

<!DOCTYPE html>
<html class="no-js" lang="zxx">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="x-ua-compatible" content="ie=edge" />
    <title>Delivery Connect</title>
    <meta name="description" content="" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <!-- <link rel="manifest" href="site.webmanifest"> -->
    <link rel="shortcut icon" type="image/x-icon" href="assets/img/logo.png" />
    <!-- Place favicon.ico in the root directory -->

    <!-- CSS here -->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css" />
    <link rel="stylesheet" href="assets/css/owl.carousel.min.css" />
    <link rel="stylesheet" href="assets/css/slicknav.css" />
    <link rel="stylesheet" href="assets/css/animate.min.css" />
    <link rel="stylesheet" href="assets/css/flaticon.css" />
    <link rel="stylesheet" href="assets/css/magnific-popup.css" />
    <link rel="stylesheet" href="assets/css/fontawesome-all.min.css" />
    <link rel="stylesheet" href="assets/css/themify-icons.css" />
    <link rel="stylesheet" href="assets/css/themify-icons.css" />
    <link rel="stylesheet" href="assets/css/slick.css" />
    <link rel="stylesheet" href="assets/css/nice-select.css" />
    <link rel="stylesheet" href="assets/css/style.css" />
    <link rel="stylesheet" href="assets/css/responsive.css" />

    <style>
    .top {
        width: 3%
    }

    @media (min-width: 0px) and (max-width: 767px) {

        .top {
            width: 20%;
        }
    }

    .footer_logo a img {
        width: 35%;
        margin-bottom: 5%;
    }

    @media (min-width: 0px) and (max-width: 767px) {
        .footer_logo a img {
            width: 18% !important;
        }
    }

    .logo a img {
        width: 55%;
    }

    @media (min-width: 0px) and (max-width: 767px) {
        .logo a img {
            width: 18% !important;
        }
    }
    </style>
</head>

<body>
    <!-- Preloader Start -->
    <div id="preloader-active">
        <div class="preloader d-flex align-items-center justify-content-center">
            <div class="preloader-inner position-relative">
                <div class="preloader-circle"></div>
                <div class="preloader-img pere-text">
                    <img src="assets/img/logo/logo.png" alt="" />
                </div>
            </div>
        </div>
    </div>
    <!-- Preloader Start -->
    <div style="
        position: fixed;
        bottom: 70px;
        right: 32px;
        z-index: 10000;
        cursor: pointer;
      ">
        <a href="https://wa.me/2349121902398?text=Hi,%20I%20am%20in%20need%20of">
            <img src="assets/img/whatsapp.png" width="55px" alt="" style="z-index: 10000" />
        </a>
    </div>
    <img src='assets/img/up-arrow.png' class='top ' style=' position: fixed; bottom: 10px; right: 10px; cursor: pointer'
        onclick="goToTop()">
    <header>
        <!-- Header Start -->
        <div class="header-area header-transparrent">
            <div class="main-header header-sticky">
                <div class="container">
                    <div class="row align-items-center">
                        <!-- Logo -->
                        <div class="col-xl-2 col-lg-2 col-md-2">
                            <div class="logo">
                                <a href="index.html"><img src="assets/img/logo/logo.png" alt="" /></a>
                            </div>
                        </div>
                        <div class="col-xl-10 col-lg-10 col-md-10">
                            <!-- Main-menu -->
                            <div class="main-menu f-right d-none d-lg-block">
                                <nav>
                                    <ul id="navigation">
                                        <li class='<?= ($activePage == 'index') ? 'active':''; ?>'><a href="index.php">
                                                Home</a></li>
                                        <li class='<?= ($activePage == 'feature') ? 'active':''; ?>'><a
                                                href="feature.php">
                                                Features</a></li>
                                        <li class='<?= ($activePage == 'services') ? 'active':''; ?>'><a
                                                href="services.php">
                                                Services</a></li>

                                        <li class='<?= ($activePage == 'contact') ? 'active':''; ?>'><a
                                                href="contact.php">
                                                Contact Us</a></li>
                                    </ul>
                                </nav>
                            </div>
                        </div>
                        <!-- Mobile Menu -->
                        <div class="col-12">
                            <div class="mobile_menu d-block d-lg-none"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Header End -->
    </header>