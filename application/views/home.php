<!DOCTYPE html>

<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en-US" lang="en-US">

<head>
    <meta charset="utf-8">
    <title>AutoKorb</title>

    <meta name="author" content="themesflat.com">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

    <link rel="stylesheet" href="<?= base_url(); ?>assets/app/css/font-awesome.css">
    <link rel="stylesheet" href="<?= base_url(); ?>assets/app/css/styles.css">

    <!-- Favicon and Touch Icons  -->
    <link rel="shortcut icon" href="<?= base_url(); ?>assets/assets/images/logo/favicon.jpeg">
    <link rel="apple-touch-icon-precomposed" href="<?= base_url(); ?>assets/assets/images/logo/favicon.jpeg">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    <style>
        .slider.home2 video {
            width: 100%;
            height: 900px;
            object-fit: cover;
        }

        .main-header .main-menu .navigation>li>a {
            font-size: 14px;
        }

        .dropdown {
            position: relative;
            display: inline-block;
        }

        .dropbtn {
            background-color: transparent;
            border: none;
            font-size: 18px;
            cursor: pointer;
            padding: 10px 20px;
        }

        .dropdown-content {
            display: none;
            position: absolute;
            background-color: white;
            min-width: 160px;
            top: 100%;
            left: 0;
            box-shadow: 0 4px 16px rgba(0, 0, 0, 0.15);
            border-radius: 10px;
            padding: 10px 0;
            z-index: 1000;
        }

        .dropdown:hover .dropdown-content {
            display: block;
        }

        /* The little arrow pointer */
        .arrow-up {
            position: absolute;
            top: -10px;
            left: 30%;
            width: 0;
            height: 0;
            border-left: 10px solid transparent;
            border-right: 10px solid transparent;
            border-bottom: 10px solid white;
        }

        .arrow-up-sell {
            position: absolute;
            top: -10px;
            left: 20%;
            width: 0;
            height: 0;
            border-left: 10px solid transparent;
            border-right: 10px solid transparent;
            border-bottom: 10px solid white;
        }

        .dropdown-content a {
            color: #000;
            padding: 12px 16px;
            text-decoration: none;
            display: block;
            font-weight: 500;
        }

        .dropdown-content a:hover {
            background-color: #f3f3f3;
        }

        .sidebar-icons button {
            background: none;
            border: none;
            font-size: 24px;
            opacity: 0.4;
        }

        /* User Dropdown Custom Styles */
        .user-dropdown-toggle {
            transition: all 0.3s ease;
            border-radius: 50%;
            padding: 8px;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .user-dropdown-toggle:hover {
            background-color: rgba(102, 126, 234, 0.1);
            transform: scale(1.05);
        }

        .user-dropdown-menu {
            animation: dropdownFadeIn 0.3s ease-out;
            transform-origin: top right;
            position: absolute;
            right: 0;
            top: 100%;
            z-index: 1050;
        }

        @keyframes dropdownFadeIn {
            from {
                opacity: 0;
                transform: scale(0.95) translateY(-10px);
            }
            to {
                opacity: 1;
                transform: scale(1) translateY(0);
            }
        }

        .user-dropdown-item {
            position: relative;
            overflow: hidden;
        }

        .user-dropdown-item:hover {
            background: linear-gradient(135deg, #f8f9fa 0%, #e9ecef 100%);
            transform: translateX(5px);
        }

        .user-dropdown-item:hover .icon-wrapper {
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%) !important;
            transform: scale(1.1);
        }

        .user-dropdown-item:hover .icon-wrapper i {
            color: white !important;
        }

        .user-dropdown-item:active {
            transform: translateX(2px);
        }

        /* Logout item special styling */
        .user-dropdown-item[href*="logout"]:hover .icon-wrapper {
            background: linear-gradient(135deg, #dc3545 0%, #c82333 100%) !important;
        }

        .user-dropdown-item[href*="logout"]:hover .icon-wrapper i {
            color: white !important;
        }

        /* Navigation alignment fixes */
        .header-account {
            display: flex;
            align-items: center;
            gap: 15px;
        }

        .header-account .nav-item {
            display: flex;
            align-items: center;
            margin: 0 5px;
        }

        .header-account .nav-link {
            display: flex;
            align-items: center;
            justify-content: center;
            padding: 8px 12px;
        }

        /* Country Selector Styling */
        .country-selector {
            flex-shrink: 0;
        }

        .country-selector select {
            border: none;
            border-radius: 6px;
            font-weight: 500;
            cursor: pointer;
            transition: all 0.3s ease;
        }

        .country-selector select:hover {
            transform: translateY(-1px);
            box-shadow: 0 4px 12px rgba(244, 121, 45, 0.3);
        }

        .country-selector select:focus {
            outline: none;
            box-shadow: 0 0 0 3px rgba(244, 121, 45, 0.2);
        }

        /* Auth Links Styling */
        .auth-links {
            flex-shrink: 0;
        }

        .auth-link {
            position: relative;
            overflow: hidden;
        }

        .auth-link::before {
            content: '';
            position: absolute;
            top: 0;
            left: -100%;
            width: 100%;
            height: 100%;
            background: linear-gradient(135deg, #f4792d 0%, #f4792b 100%);
            transition: left 0.3s ease;
            z-index: -1;
        }

        .auth-link:hover::before {
            left: 0;
        }

        .auth-link:hover {
            color: white !important;
            transform: translateY(-2px);
            box-shadow: 0 4px 15px rgba(244, 121, 45, 0.3);
        }

        /* Responsive adjustments */
        @media (max-width: 1200px) {
            .header-account {
                gap: 10px;
            }
            
            .country-selector select {
                width: 120px !important;
                font-size: 13px;
            }
        }

        @media (max-width: 992px) {
            .header-account {
                gap: 8px;
            }
            
            .country-selector select {
                width: 110px !important;
                font-size: 12px;
            }
            
            .auth-link {
                padding: 6px 12px !important;
                font-size: 13px;
            }
        }

        @media (max-width: 768px) {
            .user-dropdown-menu {
                min-width: 200px !important;
                margin-top: 5px !important;
                right: -10px !important;
            }
            
            .header-account .nav-item {
                margin: 0 2px;
            }
            
            .header-account {
                gap: 6px;
            }
            
            .country-selector select {
                width: 100px !important;
                font-size: 11px;
                padding: 3px !important;
            }
            
            .auth-link {
                padding: 5px 10px !important;
                font-size: 12px;
            }
        }

        @media (max-width: 576px) {
            .header-account {
                gap: 4px;
            }
            
            .country-selector select {
                width: 90px !important;
                font-size: 10px;
            }
            
            .auth-link {
                padding: 4px 8px !important;
                font-size: 11px;
            }
        }

        .sidebar-icons .active {
            opacity: 1;
            color: red;
        }

        .filter-box {
            border-radius: 15px;
            padding: 20px;
            background: #fff;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            margin-left: 80px;
        }

        .btn-red {
            background-color: #d93226;
            color: #fff;
            border: none;
        }

        .btn-red:hover {
            background-color: #bb2a1f;
        }

        .favorite-icon {
            color: inherit;
            transition: color 0.3s ease;
        }

        .favorite-icon.favorited {
            color: orange;
        }

        .favorite-icon.favorited svg path {
            fill: orange !important;
            stroke: orange;
        }

        /* Card container */
        .box-car-list {
            display: flex;
            flex-direction: column;
            justify-content: space-between;
            background: #fff;
            padding: 15px;
            border-radius: 8px;
            height: 100%;
            /* Important for flex to stretch */
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
        }

        /* Make swiper-slide stretch full height */
        .swiper-slide {
            height: auto !important;
            display: flex;
        }

        /* Make image group and content flexible */
        .image-group,
        .content {
            width: 100%;
        }

        /* Fix car image sizing to ensure consistent dimensions */
        .car-image {
            width: 100% !important;
            height: 250px !important;
            object-fit: cover !important;
            object-position: center !important;
        }

        /* Ensure swiper container maintains consistent height */
        .swiper-container.carousel-2.img-style {
            height: 250px !important;
            overflow: hidden;
        }

        .swiper-container.carousel-2.img-style .swiper-wrapper {
            height: 100% !important;
        }

        .swiper-container.carousel-2.img-style .swiper-slide {
            height: 100% !important;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        /* Ensure image group maintains consistent dimensions */
        .image-group {
            height: 250px !important;
            overflow: hidden;
        }

        /* Make sure all car cards have consistent height */
        .box-car-list.hv-one {
            height: auto !important;
            display: flex;
            flex-direction: column;
        }

        .box-car-list.hv-one .image-group {
            flex-shrink: 0;
        }

        .box-car-list.hv-one .content {
            flex: 1;
            display: flex;
            flex-direction: column;
        }

        /* Responsive Design for Mobile Devices */
        @media only screen and (max-width: 768px) {
            /* Mobile-specific car image sizing */
            .car-image {
                height: 200px !important;
            }

            .swiper-container.carousel-2.img-style {
                height: 200px !important;
            }

            .image-group {
                height: 200px !important;
            }

            /* Adjust card layout for mobile */
            .box-car-list {
                margin-bottom: 20px;
                padding: 10px;
            }

            .box-car-list .content {
                padding: 15px 10px !important;
            }

            /* Adjust swiper for mobile */
            .swiper.tf-sw-mobile {
                padding: 0 10px;
            }

            /* Adjust text sizes for mobile */
            .box-car-list .content h5 {
                font-size: 16px !important;
                line-height: 20px !important;
            }

            .box-car-list .content .money {
                font-size: 18px !important;
            }

            .box-car-list .content .icon-box {
                gap: 10px !important;
                margin-bottom: 15px !important;
            }

            .box-car-list .content .icon-box .icons {
                font-size: 12px !important;
            }

            /* Adjust days box for mobile */
            .box-car-list .content .days-box {
                flex-direction: column;
                gap: 10px;
                align-items: flex-start !important;
            }

            .box-car-list .content .days-box .img-author {
                margin-bottom: 10px;
            }

            .box-car-list .content .days-box .view-car {
                width: 100%;
                text-align: center;
                padding: 10px;
            }

            /* Adjust favorite icon position */
            .box-car-list .content .justify-content-between {
                flex-direction: column;
                gap: 10px;
            }

            .box-car-list .content .favorite-icon {
                align-self: flex-end;
            }
        }

        /* Tablet Responsive */
        @media only screen and (min-width: 769px) and (max-width: 1024px) {
            .car-image {
                height: 220px !important;
            }

            .swiper-container.carousel-2.img-style {
                height: 220px !important;
            }

            .image-group {
                height: 220px !important;
            }

            .box-car-list .content {
                padding: 20px 15px !important;
            }

            .box-car-list .content h5 {
                font-size: 18px !important;
            }
        }

        /* Small Mobile Devices */
        @media only screen and (max-width: 480px) {
            .car-image {
                height: 180px !important;
            }

            .swiper-container.carousel-2.img-style {
                height: 180px !important;
            }

            .image-group {
                height: 180px !important;
            }

            .box-car-list {
                padding: 8px;
            }

            .box-car-list .content {
                padding: 12px 8px !important;
            }

            .box-car-list .content h5 {
                font-size: 14px !important;
                line-height: 18px !important;
            }

            .box-car-list .content .money {
                font-size: 16px !important;
            }

            .box-car-list .content .icon-box {
                gap: 8px !important;
                margin-bottom: 12px !important;
            }

            .box-car-list .content .icon-box .icons {
                font-size: 11px !important;
            }
        }

        /* Ensure proper grid layout on different screen sizes */
        @media only screen and (max-width: 1200px) {
            .swiper.tf-sw-mobile[data-preview="3"] {
                --swiper-navigation-size: 30px;
            }
        }

        @media only screen and (max-width: 768px) {
            .swiper.tf-sw-mobile[data-preview="3"] {
                --swiper-navigation-size: 25px;
            }
        }

        @media only screen and (max-width: 480px) {
            .swiper.tf-sw-mobile[data-preview="3"] {
                --swiper-navigation-size: 20px;
            }
        }

        /* Additional Responsive Fixes for Overall Layout */
        @media only screen and (max-width: 768px) {
            /* Container adjustments */
            .container {
                padding-left: 15px;
                padding-right: 15px;
            }

            /* Section spacing */
            .tf-section {
                padding: 40px 0;
            }

            .tf-section2 {
                padding: 40px 0;
            }

            .tf-section3 {
                padding: 40px 0;
            }

            /* Grid adjustments */
            .row {
                margin-left: -10px;
                margin-right: -10px;
            }

            .col-lg-12, .col-md-12, .col-sm-12, .col-12 {
                padding-left: 10px;
                padding-right: 10px;
            }

            /* Heading adjustments */
            .heading-section h2 {
                font-size: 24px !important;
                line-height: 30px !important;
            }

            .heading-section p {
                font-size: 14px !important;
            }

            /* Swiper navigation adjustments */
            .swiper-button-next,
            .swiper-button-prev {
                width: 35px !important;
                height: 35px !important;
            }

            .swiper-button-next:after,
            .swiper-button-prev:after {
                font-size: 16px !important;
            }

            /* Flat tabs adjustments */
            .flat-tabs .content-tab {
                padding: 0 10px;
            }

            /* Image feature specs adjustments */
            .section-feature-specs .image-feature-specs {
                margin-bottom: 30px;
            }

            .section-feature-specs .content-feature-specs {
                padding-left: 0;
                margin-top: 30px;
            }
        }

        @media only screen and (max-width: 480px) {
            /* Further mobile adjustments */
            .container {
                padding-left: 10px;
                padding-right: 10px;
            }

            .tf-section,
            .tf-section2,
            .tf-section3 {
                padding: 30px 0;
            }

            .heading-section h2 {
                font-size: 20px !important;
                line-height: 26px !important;
            }

            .swiper-button-next,
            .swiper-button-prev {
                width: 30px !important;
                height: 30px !important;
            }

            .swiper-button-next:after,
            .swiper-button-prev:after {
                font-size: 14px !important;
            }

            /* Ensure proper spacing */
            .row {
                margin-left: -5px;
                margin-right: -5px;
            }

            .col-lg-12, .col-md-12, .col-sm-12, .col-12 {
                padding-left: 5px;
                padding-right: 5px;
            }
        }

        /* Fix for very small screens */
        @media only screen and (max-width: 360px) {
            .container {
                padding-left: 5px;
                padding-right: 5px;
            }

            .box-car-list {
                margin-bottom: 15px;
            }

            .heading-section h2 {
                font-size: 18px !important;
                line-height: 24px !important;
            }
        }

        /* Responsive Fixes for Filter Form */
        @media only screen and (max-width: 768px) {
            .form-section {
                flex-direction: column !important;
                padding: 15px !important;
                gap: 15px !important;
            }

            .sidebar {
                flex-direction: row !important;
                border-right: none !important;
                border-bottom: 1px solid #e0e0e0 !important;
                padding-right: 0 !important;
                padding-bottom: 15px !important;
                margin-bottom: 15px !important;
                width: 100% !important;
                justify-content: space-around !important;
                gap: 10px !important;
            }

            .sidebar-icon {
                padding: 10px 5px !important;
                font-size: 12px !important;
            }

            .sidebar-icon svg {
                width: 30px !important;
                height: 15px !important;
            }

            .sidebar-label {
                font-size: 11px !important;
                margin-top: 5px !important;
            }

            .form-body .row.g-3 {
                flex-direction: column !important;
                gap: 10px 0 !important;
            }

            .form-body .col-md-4,
            .form-body .col-md-3,
            .form-body .col-md-2 {
                flex: 1 1 100% !important;
                min-width: 100% !important;
                margin-bottom: 10px !important;
            }

            .action-buttons {
                flex-direction: column !important;
                align-items: stretch !important;
                gap: 10px !important;
                width: 100% !important;
            }

            .half-btn-row {
                flex-direction: column !important;
                gap: 10px !important;
            }

            .half-btn-row > button {
                width: 100% !important;
            }

            .search-btn {
                width: 100% !important;
                padding: 12px !important;
            }
        }

        @media only screen and (max-width: 480px) {
            .form-section {
                padding: 10px !important;
                gap: 10px !important;
            }

            .sidebar {
                gap: 5px !important;
                padding-bottom: 10px !important;
                margin-bottom: 10px !important;
            }

            .sidebar-icon {
                padding: 8px 3px !important;
            }

            .sidebar-icon svg {
                width: 25px !important;
                height: 12px !important;
            }

            .sidebar-label {
                font-size: 10px !important;
            }

            .form-label {
                font-size: 14px !important;
            }

            .form-control,
            .form-select {
                height: 40px !important;
                font-size: 14px !important;
            }
        }

        /* Responsive Fixes for Navbar */
        @media only screen and (max-width: 768px) {
            .main-header {
                padding: 10px !important;
            }

            .main-header .inner-container {
                flex-direction: column !important;
                gap: 15px !important;
                align-items: stretch !important;
            }

            .logo-box {
                justify-content: center !important;
            }

            .logo img {
                width: 180px !important;
                height: auto !important;
            }

            .nav-outer {
                order: 3 !important;
                width: 100% !important;
            }

            .main-menu .navigation {
                flex-direction: column !important;
                gap: 10px !important;
                align-items: center !important;
            }

            .main-menu .navigation li {
                width: 100% !important;
                text-align: center !important;
            }

            .dropdown .dropbtn {
                width: 100% !important;
                padding: 12px !important;
                font-size: 16px !important;
            }

            .dropdown-content {
                position: static !important;
                width: 100% !important;
                box-shadow: none !important;
                border: 1px solid #ddd !important;
                margin-top: 5px !important;
            }

            .header-account {
                order: 2 !important;
                justify-content: center !important;
                gap: 15px !important;
                flex-wrap: wrap !important;
            }

            .header-account select {
                width: 120px !important;
                font-size: 12px !important;
            }

            .register ul {
                gap: 10px !important;
            }

            .register ul li {
                font-size: 14px !important;
            }
        }

        @media only screen and (max-width: 480px) {
            .main-header {
                padding: 5px !important;
            }

            .logo img {
                width: 150px !important;
            }

            .header-account {
                gap: 10px !important;
            }

            .header-account select {
                width: 100px !important;
                font-size: 11px !important;
            }

            .register ul {
                gap: 8px !important;
            }

            .register ul li {
                font-size: 12px !important;
            }

            .dropdown .dropbtn {
                padding: 10px !important;
                font-size: 14px !important;
            }
        }

        /* Mobile menu toggle for very small screens */
        @media only screen and (max-width: 360px) {
            .main-header .inner-container {
                gap: 10px !important;
            }

            .logo img {
                width: 120px !important;
            }

            .header-account {
                gap: 8px !important;
            }

            .register ul {
                gap: 5px !important;
            }

            .register ul li {
                font-size: 11px !important;
            }
        }
    </style>



</head>

<body class="body header-fixed">


    <!-- <div class="preload preload-container">
        <div class="middle">
        </div>
    </div> -->

    <!-- /preload -->
    <!-- Message Placeholder -->
    <div id="favorite-message" style="display: none;"></div>

    <div id="wrapper">
        <div id="pagee" class="clearfix">

            <!-- Main Header -->
            <header class="main-header  p-3">
                <!-- Header Lower -->
                <div class="header-lower">
                    <div class="container2">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="inner-container flex justify-space align-center">
                                    <!-- Logo Box -->
                                    <div class="logo-box flex">
                                        <div class="logo"><a href="<?= base_url(); ?>">
                                                <img class="lazyload"
                                                    data-src="<?= base_url(); ?>assets/assets/images/logo/autob.png"
                                                    src="<?= base_url(); ?>assets/assets/images/logo/autob.png" alt=""
                                                    width="225" height="40"></a></div>
                                    </div>
                                    <div class="nav-outer flex align-center">
                                        <!-- Main Menu -->
                                        <nav class="main-menu show navbar-expand-md">
                                            <div class="navbar-collapse collapse clearfix" id="navbarSupportedContent">
                                                <ul class="navigation clearfix">
                                                    <!-- Updated Menu -->
                                                    <!-- <li>
                                                        <div class="dropdown">
                                                            <button class="dropbtn text-white">
                                                                Search
                                                            </button>
                                                            <div class="dropdown-content">
                                                                <div class="arrow-up"></div>
                                                                <a href="#">Used And New Cars</a>
                                                            </div>
                                                        </div>
                                                    </li> -->

                                                    <li>
                                                        <div class="dropdown">
                                                            <button class="dropbtn ">
                                                                <!-- Sell -->
                                                                Search
                                                            </button>
                                                            <div class="dropdown-content">
                                                                <div class="arrow-up-sell"></div>
                                                                <a href="<?= base_url('car'); ?>">Cars</a>
                                                                <a href="<?= base_url('bike'); ?>">Motorcycle</a>
                                                                <a href="<?= base_url('commercial'); ?>">Commercial Vehicle</a>
                                                            </div>
                                                        </div>
                                                    </li>

                                                    <li>
                                                        <div class="dropdown">
                                                            <button class="dropbtn ">
                                                                <a href="<?= base_url('about-us'); ?>">About Us</a>
                                                            </button>

                                                        </div>
                                                    </li>

                                                    <li>
                                                        <div class="dropdown">
                                                            <button class="dropbtn ">
                                                                <a href="<?= base_url('blog-grid'); ?>">Blogs</a>
                                                            </button>

                                                        </div>
                                                    </li>

                                                    <li>
                                                        <div class="dropdown">
                                                            <button class="dropbtn ">
                                                                <a href="<?= base_url('contact'); ?>">Contact Us</a>
                                                            </button>

                                                        </div>
                                                    </li>

                                                </ul>
                                            </div>
                                        </nav>
                                        <!-- Main Menu End-->
                                    </div>


                                    <div class="header-account d-flex">

                                        <!-- <div id="google_translate_element" style="margin-top: 15px;"></div> -->

                                        


                                        <!-- Country Selector - Always Visible -->
                                        <div class="country-selector me-3">
                                            <label for="filter_by_location" style="display: block; font-size: 12px; font-weight: 600; color: #333; margin-bottom: 4px; text-transform: uppercase; letter-spacing: 0.5px;">
                                                Filter by Country
                                            </label>
                                            <select class="form-control" name="location" id="filter_by_location"
                                                style="width: 140px; background: #eaeaea; color: #333333; font-size: 14px; padding: 4px; border: none; border-radius: 4px;">
                                                <option value="">All Country</option>
                                                <?php 
                                                $cities = $this->db->get('countries')->result();
                                                foreach ($cities as $city) { ?>
                                                    <option value="<?= $city->id; ?>"
                                                        <?php if ($this->session->userdata('location') == $city->id) {
                                                            echo "selected";
                                                        } ?>>
                                                        <?= $city->name; ?></option>
                                                <?php } ?>
                                            </select>
                                        </div>

                                        <?php if (!$this->session->userdata('user_id')) { ?>
                                            <!-- Login/Register for Non-logged Users -->
                                            <div class="auth-links d-flex align-items-center">
                                                <a href="#" data-bs-toggle="modal" data-bs-target="#popup_bid" 
                                                   class="auth-link me-2" style="color: #333; text-decoration: none; font-weight: 500; padding: 8px 16px; border-radius: 6px; transition: all 0.3s ease;">
                                                    Login
                                                </a>
                                                <span style="color: #666; margin: 0 8px;">/</span>
                                                <a href="#" data-bs-toggle="modal" data-bs-target="#popup_bid2" 
                                                   class="auth-link" style="color: #333; text-decoration: none; font-weight: 500; padding: 8px 16px; border-radius: 6px; transition: all 0.3s ease;">
                                                    Register
                                                </a>
                                            </div>
                                        <?php } else { ?>

                                            <!-- Favorite Start -->

                                            <li class="nav-item">
                                                <a class=" position-relative" href="<?= base_url('favorite-list'); ?>" title="My Favorites">
                                                    <!-- White Heart Icon -->
                                                    <svg class="text-dark" width="20" height="18" viewBox="0 0 16 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <path
                                                            d="M14.75 4.1875C14.75 2.32375 13.1758 0.8125 11.234 0.8125C9.78275 0.8125 8.53625 1.657 8 2.86225C7.46375 1.657 6.21725 0.8125 4.76525 0.8125C2.825 0.8125 1.25 2.32375 1.25 4.1875C1.25 9.6025 8 13.1875 8 13.1875C8 13.1875 14.75 9.6025 14.75 4.1875Z"
                                                            fill="none"
                                                            stroke="black"
                                                            stroke-width="1.5"
                                                            stroke-linecap="round"
                                                            stroke-linejoin="round" />
                                                    </svg>

                                                    <?php if ($favorite_count > 0): ?>
                                                        <span
                                                            class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-danger"
                                                            style="font-size: 10px;">
                                                            <?= $favorite_count ?>
                                                        </span>
                                                    <?php endif; ?>
                                                </a>
                                            </li>


                                            <!-- Favorite End -->

                                            <li class="nav-item">
                                                <a class=" dropdown-toggle position-relative" href="#"
                                                    id="messageDropdown" role="button" data-bs-toggle="dropdown"
                                                    aria-expanded="false" title="Message">
                                                    <i class="bi bi-envelope fs-4 text-dark"></i>
                                                    <!-- <button style="background-color: #007bff; color: white; border: none; padding: 5px 10px; border-radius: 5px; font-size: 16px; cursor: pointer;">
                                                ✉️ Message
                                                </button> -->
                                                    <span
                                                        class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-danger"
                                                        id="unreadCount" style="display: none;">0</span>
                                                </a>
                                                <ul class="dropdown-menu dropdown-menu-end p-2"
                                                    aria-labelledby="messageDropdown"
                                                    style="width: 300px; max-height: 400px; overflow-y: auto;"
                                                    id="messageDropdownContent">
                                                    <li class="text-center text-muted">Loading...</li>
                                                </ul>
                                            </li>
                                            <li class="nav-item dropdown">
                                                <!-- User Icon as Dropdown Toggle -->
                                                <a class=" d-flex align-items-center dropdown-toggle user-dropdown-toggle" 
                                                   href="#" 
                                                   role="button" 
                                                   data-bs-toggle="dropdown" 
                                                   aria-expanded="false" 
                                                   title="User Menu">
                                                    <i class="icon-autodeal-user fs-4" style="color: black;"></i>
                                                </a>
                                                
                                                <!-- Dropdown Menu -->
                                                <ul class="dropdown-menu dropdown-menu-end user-dropdown-menu" style="min-width: 220px; border: none; box-shadow: 0 10px 30px rgba(0,0,0,0.15); border-radius: 12px; padding: 0; margin-top: 10px;">
                                                    <li style="margin:0px">
                                                        <div class="dropdown-header user-dropdown-header" style="    background: linear-gradient(135deg, #f4782f 0%, #f4782b 100%); color: white; padding: 15px 20px; border-radius: 12px 12px 0 0; border: none;">
                                                            <div class="d-flex align-items-center">
                                                                <div class="user-avatar me-3" style="width: 40px; height: 40px; background: rgba(255,255,255,0.2); border-radius: 50%; display: flex; align-items: center; justify-content: center;">
                                                                    <i class="icon-autodeal-user" style="color: white; font-size: 18px;"></i>
                                                                </div>
                                                                <div>
                                                                    <h6 class="mb-0" style="font-weight: 600; font-size: 14px; color: #fff;"><?= $_SESSION['role_name']; ?></h6>
                                                                    <small style="opacity: 0.8; font-size: 12px;">User Account</small>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <a class="dropdown-item user-dropdown-item" href="<?= base_url('dashboard'); ?>" style="padding: 12px 20px; border: none; transition: all 0.3s ease;">
                                                            <div class="d-flex align-items-center">
                                                                <div class="icon-wrapper me-3" style="width: 32px; height: 32px; background: #f8f9fa; border-radius: 8px; display: flex; align-items: center; justify-content: center; transition: all 0.3s ease;">
                                                                    <i class="fas fa-tachometer-alt" style="color: #667eea; font-size: 14px;"></i>
                                                                </div>
                                                                <div>
                                                                    <span style="font-weight: 500; color: #333; font-size: 14px;">Dashboard</span>
                                                                    <br>
                                                                    <small style="color: #6c757d; font-size: 12px;">Manage your account</small>
                                                                </div>
                                                            </div>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a class="dropdown-item user-dropdown-item" href="<?= base_url('logout'); ?>" style="padding: 12px 20px; border: none; transition: all 0.3s ease;">
                                                            <div class="d-flex align-items-center">
                                                                <div class="icon-wrapper me-3" style="width: 32px; height: 32px; background: #f8f9fa; border-radius: 8px; display: flex; align-items: center; justify-content: center; transition: all 0.3s ease;">
                                                                    <i class="fas fa-sign-out-alt" style="color: #dc3545; font-size: 14px; padding-left: 8px; padding-right: 8px;"></i>
                                                                </div>
                                                                <div>
                                                                    <span style="font-weight: 500; color: #333; font-size: 14px;">Logout</span>
                                                                    <br>
                                                                    <small style="color: #6c757d; font-size: 12px;">Sign out of your account</small>
                                                                </div>
                                                            </div>
                                                        </a>
                                                    </li>
                                                </ul>
                                            </li>

                                            <li> </li>


                                        <?php }
                                        if (isset($_SESSION['role']) && $_SESSION['role'] == 1) { ?>


                                        <?php } ?>
                                    </div>

                                    <div class="mobile-nav-toggler mobile-button"><span></span></div>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End Header Lower -->

                <!-- Mobile Menu  -->
                <div class="close-btn"><span class="icon flaticon-cancel-1"></span></div>
                <div class="mobile-menu">
                    <div class="menu-backdrop"></div>
                    <nav class="menu-box">
                        <div class="nav-logo"><a href="<?= base_url(); ?>">
                                <img class="lazyload" data-src="<?= base_url(); ?>/assets/assets/images/logo/autob.png"
                                    src="<?= base_url(); ?>/assets/assets/images/logo/autob.png" alt="" width="197"
                                    height="48"></a></div>
                        <div class="bottom-canvas">
                            <div class="login-box flex align-center">
                                <i class="icon-autodeal-user fs-20"></i>
                                <a href="#" data-bs-toggle="modal" data-bs-target="#popup_bid"
                                    class="fw-7 font-2">Login</a>
                            </div>
                            <!-- <div class="menu-outer"></div>
                            <div class="button-mobi-sell">
                                <a class="sc-button btn-icon center" href="add-listing.html">
                                    <svg width="21" height="20" viewBox="0 0 21 20" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <g clip-path="url(#clip0_4960_5223)">
                                            <path
                                                d="M5.91699 13.75H1.33366C1.22315 13.75 1.11717 13.7061 1.03903 13.628C0.960891 13.5498 0.916992 13.4438 0.916992 13.3333C0.916992 13.2228 0.960891 13.1168 1.03903 13.0387C1.11717 12.9606 1.22315 12.9167 1.33366 12.9167H4.91116L3.61033 11.6158C3.37548 11.3824 3.0581 11.251 2.72699 11.25H1.33366C1.22315 11.25 1.11717 11.2061 1.03903 11.128C0.960891 11.0498 0.916992 10.9438 0.916992 10.8333C0.916992 10.7228 0.960891 10.6168 1.03903 10.5387C1.11717 10.4606 1.22315 10.4167 1.33366 10.4167H2.72699C3.28366 10.4167 3.80616 10.6333 4.20033 11.0267L6.21199 13.0383C6.27083 13.0964 6.311 13.1708 6.32737 13.2518C6.34374 13.3329 6.33557 13.417 6.30391 13.4934C6.27224 13.5698 6.21851 13.635 6.14959 13.6807C6.08067 13.7264 5.99969 13.7505 5.91699 13.75ZM5.08366 17.9167H2.58366C1.89449 17.9167 1.33366 17.3558 1.33366 16.6667V15C1.33366 14.8895 1.37756 14.7835 1.4557 14.7054C1.53384 14.6272 1.63982 14.5833 1.75033 14.5833C1.86083 14.5833 1.96681 14.6272 2.04495 14.7054C2.12309 14.7835 2.16699 14.8895 2.16699 15V16.6667C2.16699 16.7772 2.21089 16.8831 2.28903 16.9613C2.36717 17.0394 2.47315 17.0833 2.58366 17.0833H5.08366C5.19417 17.0833 5.30015 17.0394 5.37829 16.9613C5.45643 16.8831 5.50033 16.7772 5.50033 16.6667V15.4167C5.50033 15.3061 5.54422 15.2002 5.62236 15.122C5.7005 15.0439 5.80649 15 5.91699 15C6.0275 15 6.13348 15.0439 6.21162 15.122C6.28976 15.2002 6.33366 15.3061 6.33366 15.4167V16.6667C6.33366 17.3558 5.77283 17.9167 5.08366 17.9167Z"
                                                fill="white" />
                                            <path
                                                d="M14.25 16.25H6.75C6.6852 16.2499 6.62129 16.2348 6.56333 16.2058L4.985 15.4167H1.33333C1.24152 15.4168 1.15226 15.3865 1.07945 15.3306C1.00664 15.2747 0.954383 15.1962 0.930833 15.1075C0.653273 13.9813 0.508675 12.8265 0.5 11.6667C0.5 9.78916 1.0825 8.6475 2.39083 7.96416C3.53917 7.36333 6.11667 7.08333 10.5 7.08333C14.8833 7.08333 17.4608 7.36333 18.6092 7.96416C19.9175 8.6475 20.5 9.78916 20.5 11.6667C20.5 13.4717 20.0867 15.0417 20.0692 15.1075C20.0456 15.1962 19.9934 15.2747 19.9206 15.3306C19.8477 15.3865 19.7585 15.4168 19.6667 15.4167H16.015L14.4358 16.2058C14.3782 16.2349 14.3145 16.25 14.25 16.25ZM6.84833 15.4167H14.1517L15.7308 14.6275C15.7887 14.5983 15.8527 14.5832 15.9175 14.5833H19.3375C19.4525 14.0525 19.6667 12.9058 19.6667 11.6667C19.6667 10.0975 19.2483 9.23833 18.2242 8.70249C17.2258 8.18083 14.6275 7.91666 10.5 7.91666C6.3725 7.91666 3.77417 8.18083 2.77583 8.70249C1.75167 9.23833 1.33333 10.0975 1.33333 11.6667C1.33333 12.9058 1.5475 14.0525 1.66333 14.5833H5.08333C5.1475 14.5833 5.21167 14.5983 5.27 14.6275L6.84833 15.4167Z"
                                                fill="white" />
                                            <path
                                                d="M19.6664 13.75H15.0831C15.0006 13.7501 14.9199 13.7258 14.8512 13.68C14.7825 13.6342 14.729 13.5691 14.6974 13.4929C14.6658 13.4167 14.6576 13.3328 14.6737 13.2518C14.6899 13.1709 14.7297 13.0966 14.7881 13.0383L16.7997 11.0267C16.9929 10.8327 17.2225 10.6789 17.4754 10.5742C17.7283 10.4695 17.9994 10.416 18.2731 10.4167H19.6664C19.7769 10.4167 19.8829 10.4606 19.961 10.5387C20.0392 10.6168 20.0831 10.7228 20.0831 10.8333C20.0831 10.9438 20.0392 11.0498 19.961 11.128C19.8829 11.2061 19.7769 11.25 19.6664 11.25H18.2731C17.9439 11.25 17.6223 11.3833 17.3889 11.6158L16.0889 12.9167H19.6664C19.7769 12.9167 19.8829 12.9606 19.961 13.0387C20.0392 13.1168 20.0831 13.2228 20.0831 13.3333C20.0831 13.4438 20.0392 13.5498 19.961 13.628C19.8829 13.7061 19.7769 13.75 19.6664 13.75ZM12.9998 13.75H7.99975C7.93868 13.75 7.87836 13.7365 7.82306 13.7106C7.76776 13.6847 7.71884 13.6469 7.67975 13.6L5.59642 11.1C5.54539 11.0393 5.5128 10.9652 5.50248 10.8866C5.49217 10.8079 5.50456 10.728 5.5382 10.6561C5.57184 10.5843 5.62532 10.5236 5.69233 10.4812C5.75935 10.4387 5.8371 10.4164 5.91642 10.4167H15.0831C15.1623 10.4167 15.2398 10.4393 15.3066 10.4818C15.3734 10.5243 15.4267 10.5849 15.4603 10.6566C15.4938 10.7283 15.5063 10.8081 15.4962 10.8866C15.486 10.9651 15.4538 11.0392 15.4031 11.1L13.3197 13.6C13.2807 13.6469 13.2317 13.6847 13.1764 13.7106C13.1211 13.7365 13.0608 13.75 12.9998 13.75ZM8.19475 12.9167H12.8039L14.1931 11.25H6.80558L8.19475 12.9167ZM18.4164 8.75C18.3351 8.75005 18.2556 8.72633 18.1877 8.68176C18.1197 8.63719 18.0663 8.57372 18.0339 8.49916C17.0931 6.3325 15.9423 3.92666 15.6447 3.64916C15.3256 3.37833 13.9681 2.91666 10.9164 2.91666H10.0831C7.03142 2.91666 5.67392 3.37833 5.35308 3.65083C5.05725 3.92666 3.90642 6.33333 2.96558 8.49916C2.92149 8.60061 2.83891 8.68038 2.73599 8.72094C2.63308 8.76149 2.51828 8.7595 2.41683 8.71541C2.31539 8.67132 2.23561 8.58873 2.19506 8.48582C2.1545 8.38291 2.15649 8.26811 2.20058 8.16666C2.67392 7.07666 4.26142 3.48416 4.81308 3.01499C5.50058 2.43166 7.46975 2.08333 10.0831 2.08333H10.9164C13.5297 2.08333 15.4989 2.43166 16.1864 3.01583C16.7381 3.485 18.3248 7.0775 18.7989 8.16749C18.826 8.23094 18.8369 8.30009 18.8308 8.3688C18.8247 8.4375 18.8017 8.50363 18.7638 8.56129C18.726 8.61895 18.6744 8.66635 18.6138 8.69927C18.5532 8.73219 18.4854 8.74962 18.4164 8.75ZM18.4164 17.9167H15.9164C15.2273 17.9167 14.6664 17.3558 14.6664 16.6667V15.4167C14.6664 15.3062 14.7103 15.2002 14.7885 15.122C14.8666 15.0439 14.9726 15 15.0831 15C15.1936 15 15.2996 15.0439 15.3777 15.122C15.4559 15.2002 15.4998 15.3062 15.4998 15.4167V16.6667C15.4998 16.7772 15.5436 16.8832 15.6218 16.9613C15.6999 17.0394 15.8059 17.0833 15.9164 17.0833H18.4164C18.5269 17.0833 18.6329 17.0394 18.711 16.9613C18.7892 16.8832 18.8331 16.7772 18.8331 16.6667V15C18.8331 14.8895 18.877 14.7835 18.9551 14.7054C19.0333 14.6272 19.1392 14.5833 19.2498 14.5833C19.3603 14.5833 19.4662 14.6272 19.5444 14.7054C19.6225 14.7835 19.6664 14.8895 19.6664 15V16.6667C19.6664 17.3558 19.1056 17.9167 18.4164 17.9167Z"
                                                fill="white" />
                                        </g>
                                        <defs>
                                            <clipPath>
                                                <rect width="20" height="20" fill="white" transform="translate(0.5)" />
                                            </clipPath>
                                        </defs>
                                    </svg>
                                    <span>Add listing</span>
                                </a>
                            </div> -->
                        </div>
                    </nav>
                </div>
                <!-- End Mobile Menu -->

            </header>
            <!-- End Main Header -->
          <div>
          <?php $this->load->view('filter-form'); ?>
          </div>
            <!-- widegt categori -->
         <!-- Popular Brands Start -->

         <section class="tf-section2">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="heading-section flex align-center justify-space flex-wrap gap-20">
                                <h2 class="wow fadeInUpSmall" data-wow-delay="0.2s" data-wow-duration="1000ms">Popular
                                    Brands</h2>
                            </div>
                        </div>
                        <div class="col-lg-12">
                            <div class="swiper partner-slide overflow-hidden">
                                <div class="swiper-wrapper">
                                    <?php foreach ($brands as $brand) {
                                        if ($brand->logo != "") {
                                    ?>
                                            <div class="swiper-slide">
                                                <a href="<?= base_url('listing-list?make=' . $brand->id); ?>" class="partner-item style-1">
                                                    <div class="image">
                                                        <img class="lazyload"
                                                            data-src="<?= base_url('uploads/brands/' . $brand->logo); ?>"
                                                            src="<?= base_url('uploads/brands/' . $brand->logo); ?>"
                                                            alt="images">
                                                    </div>
                                                    <div class="content center">
                                                        <div class="fs-16 fw-6 title text-color-2 font-2"><?= $brand->name ?></div>
                                                        <!-- <span class="sub-title fs-12 fw-4 font-2">271 Car</span> -->
                                                    </div>
                                                </a>
                                            </div>
                                        <?php } ?>
                                    <?php } ?>

                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </section>
            <!-- widegt List car -->
            <section class="tf-section">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="heading-section flex align-center justify-space flex-wrap gap-20">
                                <h2 class="wow fadeInUpSmall" data-wow-delay="0.2s" data-wow-duration="1000ms">Latest
                                    Cars for Sale</h2>
                                <a href="<?= base_url('car'); ?>" class="tf-btn-arrow wow fadeInUpSmall"
                                    data-wow-delay="0.2s" data-wow-duration="1000ms">View all<i
                                        class="icon-autodeal-btn-right"></i></a>
                            </div>
                        </div>
                        <div class="col-lg-12">
                            <div class="flat-tabs themesflat-tabs ">

                                <div class="content-tab">


                                    <div class="content-inner tab-content">
                                        <div class="swiper tf-sw-mobile" data-preview="3" data-tablet="2"
                                            data-mobile-sm="2" data-mobile="1" data-space-lg="30" data-space-md="15"
                                            data-space="15">
                                            <div class="swiper-wrapper">
                                                <?php if (!empty($cars)) {
                                                    foreach ($cars as $car) {
                                                        $chf = "CHF " . number_format($car->total_price, 0, '.', ".") . ",–"; //'CHF ' . number_format($car->total_price, 0, '', '.');
                                                        // EUR: comma as thousand separator -> "EUR 28,880" 
                                                        $eur = "EUR " . number_format($car->total_price, 0, ',', '.') . ",--";//'EUR ' . number_format($car->total_price, 0, '.', ',');
                                                ?>
                                                        <div class="swiper-slide">
                                                            <div class="box-car-list hv-one">
                                                                <div class="image-group relative ">

                                                                    <div class="swiper-container carousel-2 img-style">

                                                                        <div class="swiper-wrapper ">
                                                                            <?php $car_img = $this->db->where('car_list_id', $car->id)->get('car_img')->result();
                                                                            foreach ($car_img as $c_img) { ?>
                                                                                <div class="swiper-slide">
                                                                                    <img class="lazyload car-image"
                                                                                        data-src="<?= base_url('uploads/' . $c_img->photos); ?>"
                                                                                        src="<?= base_url('uploads/' . $c_img->photos); ?>"
                                                                                        alt="image">
                                                                                </div>
                                                                            <?php } ?>

                                                                        </div>
                                                                        <div class="pagi2">
                                                                            <div class="swiper-pagination2"></div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="content">
                                                                    <?php
                                                                    $selected_location = $this->session->userdata('location');

                                                                    $makes = $this->db->where('id', $car->make)->get('make')->result();

                                                                    $models = $this->db->where('id', $car->model)->get('model')->result();

                                                                    $added_by = $this->db->where('id', $car->added_by)->get('users')->result();

                                                                    foreach ($makes as $make) { ?>
                                                                        <div class="text-address d-flex justify-content-between">
                                                                            <p class="text-color-3 font mb-0"><?= $make->name; ?></p>
                                                                            <p class="text-color-3 font mb-0"> <?php if ($selected_location == 2 ||  $selected_location == 3) {
                                                                                echo " TUV " . $car->tuv_date;
                                                                             } else {
                                                                               echo " MFK " . $car->mfk_date;
                                                                            } ?></p>
                                                                           
                                                                        </div>

                                                                        <?php foreach ($models as $model) { ?>
                                                                            <h5 class="link-style-1">
                                                                                <a
                                                                                    href="<?= base_url('list-details/' . $car->slug); ?>"><?= $car->year . " " . $make->name . " " . $model->name; ?></a>
                                                                            </h5>
                                                                    <?php }
                                                                    } ?>
                                                                    <div class="icon-box flex flex-wrap">
                                                                        <div class="icons flex-three">
                                                                            <i class="icon-autodeal-km1"></i>
                                                                            <span><?= $car->mileage; ?> km</span>
                                                                        </div>
                                                                        <div class="icons flex-three">
                                                                            <i class="icon-autodeal-diesel"></i>
                                                                            <span><?= $car->fuel_type; ?></span>
                                                                        </div>
                                                                        <div class="icons flex-three">
                                                                          <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none">
                                                                    <path d="M16.25 2.5H14.375V1.875C14.375 1.70924 14.3092 1.55027 14.1919 1.43306C14.0747 1.31585 13.9158 1.25 13.75 1.25C13.5842 1.25 13.4253 1.31585 13.3081 1.43306C13.1908 1.55027 13.125 1.70924 13.125 1.875V2.5H6.875V1.875C6.875 1.70924 6.80915 1.55027 6.69194 1.43306C6.57473 1.31585 6.41576 1.25 6.25 1.25C6.08424 1.25 5.92527 1.31585 5.80806 1.43306C5.69085 1.55027 5.625 1.70924 5.625 1.875V2.5H3.75C3.41848 2.5 3.10054 2.6317 2.86612 2.86612C2.6317 3.10054 2.5 3.41848 2.5 3.75V16.25C2.5 16.5815 2.6317 16.8995 2.86612 17.1339C3.10054 17.3683 3.41848 17.5 3.75 17.5H16.25C16.5815 17.5 16.8995 17.3683 17.1339 17.1339C17.3683 16.8995 17.5 16.5815 17.5 16.25V3.75C17.5 3.41848 17.3683 3.10054 17.1339 2.86612C16.8995 2.6317 16.5815 2.5 16.25 2.5ZM5.625 3.75V4.375C5.625 4.54076 5.69085 4.69973 5.80806 4.81694C5.92527 4.93415 6.08424 5 6.25 5C6.41576 5 6.57473 4.93415 6.69194 4.81694C6.80915 4.69973 6.875 4.54076 6.875 4.375V3.75H13.125V4.375C13.125 4.54076 13.1908 4.69973 13.3081 4.81694C13.4253 4.93415 13.5842 5 13.75 5C13.9158 5 14.0747 4.93415 14.1919 4.81694C14.3092 4.69973 14.375 4.54076 14.375 4.375V3.75H16.25V6.25H3.75V3.75H5.625ZM16.25 16.25H3.75V7.5H16.25V16.25ZM13.2547 9.55781C13.3128 9.61586 13.3589 9.68479 13.3904 9.76066C13.4218 9.83654 13.438 9.91787 13.438 10C13.438 10.0821 13.4218 10.1635 13.3904 10.2393C13.3589 10.3152 13.3128 10.3841 13.2547 10.4422L9.50469 14.1922C9.44664 14.2503 9.37771 14.2964 9.30184 14.3279C9.22596 14.3593 9.14463 14.3755 9.0625 14.3755C8.98037 14.3755 8.89904 14.3593 8.82316 14.3279C8.74729 14.2964 8.67836 14.2503 8.62031 14.1922L6.74531 12.3172C6.62804 12.1999 6.56215 12.0409 6.56215 11.875C6.56215 11.7091 6.62804 11.5501 6.74531 11.4328C6.86259 11.3155 7.02165 11.2497 7.1875 11.2497C7.35335 11.2497 7.51241 11.3155 7.62969 11.4328L9.0625 12.8664L12.3703 9.55781C12.4284 9.4997 12.4973 9.4536 12.5732 9.42215C12.649 9.3907 12.7304 9.37451 12.8125 9.37451C12.8946 9.37451 12.976 9.3907 13.0518 9.42215C13.1277 9.4536 13.1966 9.4997 13.2547 9.55781Z" fill="#B6B6B6"></path>
                                                                </svg>
                                                                            <span><?= $car->year; ?></span>
                                                                            <!-- <i class="icon-autodeal-automatic"></i>
                                                                            <span><?= $car->transmission; ?></span> -->
                                                                        </div>
                                                                    </div>
                                                                    <div class="icons flex-three text-color-3">
                                                                        <span><?php echo ($car->tax !== '0.00' && $car->tax !== 0.00) ? " (Incl. 7.7% VAT)" : ""; ?></span>
                                                                    </div>
                                                                    <div class="justify-content-between d-flex">
                                                                        <div class="money fs-20 fw-5 lh-25 text-color-3">
                                                                            <?php //echo $car->price; 
                                                                            ?>
                                                                            <?php if (isset($_SESSION['location']) && ($_SESSION['location'] == 2 || $_SESSION['location'] == 3)) {
                                                                                echo $eur;
                                                                            } else {
                                                                                echo $chf;
                                                                            } ?>
                                                                        </div>
                                                                        <?php
                                                                        $is_logged_in = isset($_SESSION['user_id']);
                                                                        $is_favorited = $is_logged_in ? $this->WebsiteModel->is_favorited($_SESSION['user_id'], $car->id) : false;
                                                                        ?>
                                                                        <a href="javascript:void(0);"
                                                                            class="icon favorite-icon <?= $is_favorited ? 'favorited' : '' ?>"
                                                                            data-vehicle-id="<?= $car->id; ?>"
                                                                            data-logged-in="<?= $is_logged_in ? 'yes' : 'no' ?>"
                                                                            title="<?= $is_favorited ? 'Unfavorite' : 'Favorite' ?>">

                                                                            <svg width="18" height="16" viewBox="0 0 18 16" fill="none"
                                                                                xmlns="http://www.w3.org/2000/svg">
                                                                                <path
                                                                                    d="M16.5 4.875C16.5 2.80417 14.7508 1.125 12.5933 1.125C10.9808 1.125 9.59583 2.06333 9 3.4025C8.40417 2.06333 7.01917 1.125 5.40583 1.125C3.25 1.125 1.5 2.80417 1.5 4.875C1.5 10.8917 9 14.875 9 14.875C9 14.875 16.5 10.8917 16.5 4.875Z"
                                                                                    stroke="CurrentColor" stroke-width="1.5" stroke-linecap="round"
                                                                                    stroke-linejoin="round" />
                                                                            </svg>
                                                                        </a>

                                                                    </div>


                                                                    <div class="days-box flex justify-space align-center">
                                                                        <?php foreach ($added_by as $added) { ?>
                                                                            <div class="img-author">

                                                                                <?php if (!empty($added->profile)) { ?>
                                                                                    <img class="lazyload"
                                                                                        data-src="<?= base_url(); ?>uploads/profile/<?= $added->profile; ?>"
                                                                                        src="<?= base_url(); ?>uploads/profile/<?= $added->profile; ?>"
                                                                                        alt="image">
                                                                                <?php } else { ?>
                                                                                    <img class="lazyload"
                                                                                        data-src="<?= base_url(); ?>/assets/assets/images/author/avt-cm1.jpg"
                                                                                        src="<?= base_url(); ?>/assets/assets/images/author/avt-cm1.jpg"
                                                                                        alt="image">
                                                                                <?php } ?>

                                                                                <span
                                                                                    class="font text-color-2 fw-5"><?= $added->username; ?></span>
                                                                            </div>
                                                                            <a href="<?= base_url('list-details/' . $car->slug); ?>"
                                                                                class="view-car">View
                                                                                Details</a>
                                                                        <?php } ?>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                <?php }
                                                } ?>

                                            </div>
                                            <div class="swiper-pagination3"></div>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>

                    </div>
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="heading-section flex align-center justify-space flex-wrap gap-20">
                                <h2 class="wow fadeInUpSmall" data-wow-delay="0.2s" data-wow-duration="1000ms">Top Bikes
                                    on Sale</h2>
                                <a href="<?= base_url('bike'); ?>" class="tf-btn-arrow wow fadeInUpSmall"
                                    data-wow-delay="0.2s" data-wow-duration="1000ms">View all<i
                                        class="icon-autodeal-btn-right"></i></a>
                            </div>
                        </div>
                        <div class="col-lg-12">
                            <div class="flat-tabs themesflat-tabs ">

                                <div class="content-tab">


                                    <div class="content-inner tab-content">
                                        <div class="swiper tf-sw-mobile" data-preview="3" data-tablet="2"
                                            data-mobile-sm="2" data-mobile="1" data-space-lg="30" data-space-md="15"
                                            data-space="15">
                                            <div class="swiper-wrapper">
                                                <?php if (!empty($bikes)) {
                                                    foreach ($bikes as $bike) {
                                                        $chf = "CHF " . number_format($bike->total_price, 0, '.', ".") . ",–"; //'CHF ' . number_format($bike->total_price, 0, '', '.');
                                                        // EUR: comma as thousand separator -> "EUR 28,880" 
                                                        $eur = "EUR " . number_format($bike->total_price, 0, ',', '.') . ",--";//'EUR ' . number_format($bike->total_price, 0, '.', ',');
                                                ?>
                                                        <div class="swiper-slide">
                                                            <div class="box-car-list hv-one">
                                                                <div class="image-group relative ">
                                                                    <div class="swiper-container carousel-2 img-style">
                                                                        <div class="swiper-wrapper ">
                                                                            <?php $car_img = $this->db->where('car_list_id', $bike->id)->get('car_img')->result();
                                                                            foreach ($car_img as $c_img) { ?>
                                                                                <div class="swiper-slide">
                                                                                    <img class="lazyload car-image"
                                                                                        data-src="<?= base_url('uploads/' . $c_img->photos); ?>"
                                                                                        src="<?= base_url('uploads/' . $c_img->photos); ?>"
                                                                                        alt="image">
                                                                                </div>
                                                                            <?php } ?>

                                                                        </div>
                                                                        <div class="pagi2">
                                                                            <div class="swiper-pagination2"></div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="content">
                                                                    <?php

                                                                    $makes = $this->db->where('id', $bike->make)->get('make')->result();

                                                                    $models = $this->db->where('id', $bike->model)->get('model')->result();

                                                                    $added_by = $this->db->where('id', $bike->added_by)->get('users')->result();

                                                                    foreach ($makes as $make) { ?>
                                                                        <div class="text-address d-flex justify-content-between">
                                                                            <p class="text-color-3 font mb-0"><?= $make->name; ?></p>
                                                                            <p class="text-color-3 font mb-0"> <?php if ($selected_location == 2 ||  $selected_location == 3) {
                                                                            echo " TUV " . $bike->tuv_date;
                                                                            } else {
                                                                            echo " MFK " . $bike->mfk_date;
                                                                        } ?></p>
                                                                        </div>
                                                                        <?php foreach ($models as $model) { ?>
                                                                            <h5 class="link-style-1">
                                                                                <a
                                                                                    href="<?= base_url('list-details/' . $bike->slug); ?>"><?= $bike->year . " " . $make->name . " " . $model->name; ?></a>
                                                                            </h5>
                                                                    <?php }
                                                                    } ?>
                                                                    <div class="icon-box flex flex-wrap">
                                                                        <div class="icons flex-three">
                                                                            <i class="icon-autodeal-km1"></i>
                                                                            <span><?= $bike->mileage; ?> km</span>
                                                                        </div>
                                                                        <div class="icons flex-three">
                                                                            <i class="icon-autodeal-diesel"></i>
                                                                            <span><?= $bike->fuel_type; ?></span>
                                                                        </div>
                                                                        <div class="icons flex-three">
                                                                            <!-- <i class="icon-autodeal-automatic"></i>
                                                                            <span><?= $bike->transmission; ?></span> -->
                                                                             <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none">
                                                                    <path d="M16.25 2.5H14.375V1.875C14.375 1.70924 14.3092 1.55027 14.1919 1.43306C14.0747 1.31585 13.9158 1.25 13.75 1.25C13.5842 1.25 13.4253 1.31585 13.3081 1.43306C13.1908 1.55027 13.125 1.70924 13.125 1.875V2.5H6.875V1.875C6.875 1.70924 6.80915 1.55027 6.69194 1.43306C6.57473 1.31585 6.41576 1.25 6.25 1.25C6.08424 1.25 5.92527 1.31585 5.80806 1.43306C5.69085 1.55027 5.625 1.70924 5.625 1.875V2.5H3.75C3.41848 2.5 3.10054 2.6317 2.86612 2.86612C2.6317 3.10054 2.5 3.41848 2.5 3.75V16.25C2.5 16.5815 2.6317 16.8995 2.86612 17.1339C3.10054 17.3683 3.41848 17.5 3.75 17.5H16.25C16.5815 17.5 16.8995 17.3683 17.1339 17.1339C17.3683 16.8995 17.5 16.5815 17.5 16.25V3.75C17.5 3.41848 17.3683 3.10054 17.1339 2.86612C16.8995 2.6317 16.5815 2.5 16.25 2.5ZM5.625 3.75V4.375C5.625 4.54076 5.69085 4.69973 5.80806 4.81694C5.92527 4.93415 6.08424 5 6.25 5C6.41576 5 6.57473 4.93415 6.69194 4.81694C6.80915 4.69973 6.875 4.54076 6.875 4.375V3.75H13.125V4.375C13.125 4.54076 13.1908 4.69973 13.3081 4.81694C13.4253 4.93415 13.5842 5 13.75 5C13.9158 5 14.0747 4.93415 14.1919 4.81694C14.3092 4.69973 14.375 4.54076 14.375 4.375V3.75H16.25V6.25H3.75V3.75H5.625ZM16.25 16.25H3.75V7.5H16.25V16.25ZM13.2547 9.55781C13.3128 9.61586 13.3589 9.68479 13.3904 9.76066C13.4218 9.83654 13.438 9.91787 13.438 10C13.438 10.0821 13.4218 10.1635 13.3904 10.2393C13.3589 10.3152 13.3128 10.3841 13.2547 10.4422L9.50469 14.1922C9.44664 14.2503 9.37771 14.2964 9.30184 14.3279C9.22596 14.3593 9.14463 14.3755 9.0625 14.3755C8.98037 14.3755 8.89904 14.3593 8.82316 14.3279C8.74729 14.2964 8.67836 14.2503 8.62031 14.1922L6.74531 12.3172C6.62804 12.1999 6.56215 12.0409 6.56215 11.875C6.56215 11.7091 6.62804 11.5501 6.74531 11.4328C6.86259 11.3155 7.02165 11.2497 7.1875 11.2497C7.35335 11.2497 7.51241 11.3155 7.62969 11.4328L9.0625 12.8664L12.3703 9.55781C12.4284 9.4997 12.4973 9.4536 12.5732 9.42215C12.649 9.3907 12.7304 9.37451 12.8125 9.37451C12.8946 9.37451 12.976 9.3907 13.0518 9.42215C13.1277 9.4536 13.1966 9.4997 13.2547 9.55781Z" fill="#B6B6B6"></path>
                                                                </svg>
                                                                            <span><?= $bike->year; ?></span>
                                                                        </div>
                                                                    </div>
                                                                    <div class="icons flex-three text-color-3">
                                                                        <span><?php echo ($bike->tax !== '0.00' && $bike->tax !== 0.00) ? " (Incl. 7.7% VAT)" : ""; ?></span>
                                                                    </div>
                                                                    <div class="justify-content-between d-flex">
                                                                        <div class="money fs-20 fw-5 lh-25 text-color-3">
                                                                            <?php if (isset($_SESSION['location']) && ($_SESSION['location'] == 2 || $_SESSION['location'] == 3)) {
                                                                                echo $eur;
                                                                            } else {
                                                                                echo $chf;
                                                                            } ?>
                                                                        </div>
                                                                        <?php
                                                                        $is_logged_in = isset($_SESSION['user_id']);
                                                                        $is_favorited = $is_logged_in ? $this->WebsiteModel->is_favorited($_SESSION['user_id'], $bike->id) : false;
                                                                        ?>
                                                                        <a href="javascript:void(0);"
                                                                            class="icon favorite-icon <?= $is_favorited ? 'favorited' : '' ?>"
                                                                            data-vehicle-id="<?= $bike->id; ?>"
                                                                            data-logged-in="<?= $is_logged_in ? 'yes' : 'no' ?>"
                                                                            title="<?= $is_favorited ? 'Unfavorite' : 'Favorite' ?>">

                                                                            <svg width="18" height="16" viewBox="0 0 18 16" fill="none"
                                                                                xmlns="http://www.w3.org/2000/svg">
                                                                                <path
                                                                                    d="M16.5 4.875C16.5 2.80417 14.7508 1.125 12.5933 1.125C10.9808 1.125 9.59583 2.06333 9 3.4025C8.40417 2.06333 7.01917 1.125 5.40583 1.125C3.25 1.125 1.5 2.80417 1.5 4.875C1.5 10.8917 9 14.875 9 14.875C9 14.875 16.5 10.8917 16.5 4.875Z"
                                                                                    stroke="CurrentColor" stroke-width="1.5" stroke-linecap="round"
                                                                                    stroke-linejoin="round" />
                                                                            </svg>
                                                                        </a>

                                                                    </div>
                                                                    <div class="days-box flex justify-space align-center">
                                                                        <?php foreach ($added_by as $added) { ?>
                                                                            <div class="img-author">

                                                                                <?php if (!empty($added->profile)) { ?>
                                                                                    <img class="lazyload"
                                                                                        data-src="<?= base_url(); ?>uploads/profile/<?= $added->profile; ?>"
                                                                                        src="<?= base_url(); ?>uploads/profile/<?= $added->profile; ?>"
                                                                                        alt="image">
                                                                                <?php } else { ?>
                                                                                    <img class="lazyload"
                                                                                        data-src="<?= base_url(); ?>/assets/assets/images/author/avt-cm1.jpg"
                                                                                        src="<?= base_url(); ?>/assets/assets/images/author/avt-cm1.jpg"
                                                                                        alt="image">
                                                                                <?php } ?>

                                                                                <span
                                                                                    class="font text-color-2 fw-5"><?= $added->username; ?></span>
                                                                            </div>
                                                                            <a href="<?= base_url('list-details/' . $bike->slug); ?>"
                                                                                class="view-car">View
                                                                                Details</a>
                                                                        <?php } ?>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                <?php }
                                                } ?>
                                            </div>
                                            <div class="swiper-pagination3"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- widegt List Bike Start -->
                    <!-- <section class="tf-section">
                <div class="container"> -->
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="heading-section flex align-center justify-space flex-wrap gap-20">
                                <h2 class="wow fadeInUpSmall" data-wow-delay="0.2s" data-wow-duration="1000ms">
                                    Commercial Vehicles Available</h2>
                                <a href="<?= base_url('commercial'); ?>" class="tf-btn-arrow wow fadeInUpSmall"
                                    data-wow-delay="0.2s" data-wow-duration="1000ms">View all<i
                                        class="icon-autodeal-btn-right"></i></a>
                            </div>
                        </div>
                        <div class="col-lg-12">
                            <div class="flat-tabs themesflat-tabs ">

                                <div class="content-tab">


                                    <div class="content-inner tab-content">
                                        <div class="swiper tf-sw-mobile" data-preview="3" data-tablet="2"
                                            data-mobile-sm="2" data-mobile="1" data-space-lg="30" data-space-md="15"
                                            data-space="15">
                                            <div class="swiper-wrapper">
                                                <?php if (!empty($commercials)) {
                                                    foreach ($commercials as $commercial) {
                                                         $chf = "CHF " . number_format($commercial->total_price, 0, '.', ".") . ",–"; //'CHF ' . number_format($commercial->total_price, 0, '', '.');
                                                        // EUR: comma as thousand separator -> "EUR 28,880" 
                                                        $eur = "EUR " . number_format($commercial->total_price, 0, ',', '.') . ",--";//'EUR ' . number_format($commercial->total_price, 0, '.', ',');
                                                ?>
                                                        <div class="swiper-slide">
                                                            <div class="box-car-list hv-one">
                                                                <div class="image-group relative ">
                                                                    <div class="swiper-container carousel-2 img-style">
                                                                        <div class="swiper-wrapper ">
                                                                            <?php $car_img = $this->db->where('car_list_id', $commercial->id)->get('car_img')->result();
                                                                            foreach ($car_img as $c_img) { ?>
                                                                                <div class="swiper-slide">
                                                                                    <img class="lazyload car-image"
                                                                                        data-src="<?= base_url('uploads/' . $c_img->photos); ?>"
                                                                                        src="<?= base_url('uploads/' . $c_img->photos); ?>"
                                                                                        alt="image">
                                                                                </div>
                                                                            <?php } ?>



                                                                        </div>
                                                                        <div class="pagi2">
                                                                            <div class="swiper-pagination2"></div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="content">
                                                                    <?php

                                                                    $makes = $this->db->where('id', $commercial->make)->get('make')->result();

                                                                    $models = $this->db->where('id', $commercial->model)->get('model')->result();

                                                                    $added_by = $this->db->where('id', $commercial->added_by)->get('users')->result();

                                                                    foreach ($makes as $make) { ?>
                                                                        <div class="text-address d-flex justify-content-between">
                                                                            <p class="text-color-3 font mb-0"><?= $make->name; ?></p>
                                                                            <p class="text-color-3 font mb-0"> <?php if ($selected_location == 2 ||  $selected_location == 3) {
                                                                            echo " TUV " . $commercial->tuv_date;
                                                                        } else {
                                                                            echo " MFK " . $commercial->mfk_date;
                                                                         } ?></p>
                                                                        </div>
                                                                        <?php foreach ($models as $model) { ?>
                                                                            <h5 class="link-style-1">
                                                                                <a
                                                                                    href="<?= base_url('list-details/' . $commercial->slug); ?>"><?= $commercial->year . " " . $make->name . " " . $model->name; ?></a>
                                                                            </h5>
                                                                    <?php }
                                                                    } ?>
                                                                    <div class="icon-box flex flex-wrap">
                                                                        <div class="icons flex-three">
                                                                            <i class="icon-autodeal-km1"></i>
                                                                            <span><?= $commercial->mileage; ?> km</span>
                                                                        </div>
                                                                        <div class="icons flex-three">
                                                                            <i class="icon-autodeal-diesel"></i>
                                                                            <span><?= $commercial->fuel_type; ?></span>
                                                                        </div>
                                                                        <div class="icons flex-three">
                                                                             <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none">
                                                                    <path d="M16.25 2.5H14.375V1.875C14.375 1.70924 14.3092 1.55027 14.1919 1.43306C14.0747 1.31585 13.9158 1.25 13.75 1.25C13.5842 1.25 13.4253 1.31585 13.3081 1.43306C13.1908 1.55027 13.125 1.70924 13.125 1.875V2.5H6.875V1.875C6.875 1.70924 6.80915 1.55027 6.69194 1.43306C6.57473 1.31585 6.41576 1.25 6.25 1.25C6.08424 1.25 5.92527 1.31585 5.80806 1.43306C5.69085 1.55027 5.625 1.70924 5.625 1.875V2.5H3.75C3.41848 2.5 3.10054 2.6317 2.86612 2.86612C2.6317 3.10054 2.5 3.41848 2.5 3.75V16.25C2.5 16.5815 2.6317 16.8995 2.86612 17.1339C3.10054 17.3683 3.41848 17.5 3.75 17.5H16.25C16.5815 17.5 16.8995 17.3683 17.1339 17.1339C17.3683 16.8995 17.5 16.5815 17.5 16.25V3.75C17.5 3.41848 17.3683 3.10054 17.1339 2.86612C16.8995 2.6317 16.5815 2.5 16.25 2.5ZM5.625 3.75V4.375C5.625 4.54076 5.69085 4.69973 5.80806 4.81694C5.92527 4.93415 6.08424 5 6.25 5C6.41576 5 6.57473 4.93415 6.69194 4.81694C6.80915 4.69973 6.875 4.54076 6.875 4.375V3.75H13.125V4.375C13.125 4.54076 13.1908 4.69973 13.3081 4.81694C13.4253 4.93415 13.5842 5 13.75 5C13.9158 5 14.0747 4.93415 14.1919 4.81694C14.3092 4.69973 14.375 4.54076 14.375 4.375V3.75H16.25V6.25H3.75V3.75H5.625ZM16.25 16.25H3.75V7.5H16.25V16.25ZM13.2547 9.55781C13.3128 9.61586 13.3589 9.68479 13.3904 9.76066C13.4218 9.83654 13.438 9.91787 13.438 10C13.438 10.0821 13.4218 10.1635 13.3904 10.2393C13.3589 10.3152 13.3128 10.3841 13.2547 10.4422L9.50469 14.1922C9.44664 14.2503 9.37771 14.2964 9.30184 14.3279C9.22596 14.3593 9.14463 14.3755 9.0625 14.3755C8.98037 14.3755 8.89904 14.3593 8.82316 14.3279C8.74729 14.2964 8.67836 14.2503 8.62031 14.1922L6.74531 12.3172C6.62804 12.1999 6.56215 12.0409 6.56215 11.875C6.56215 11.7091 6.62804 11.5501 6.74531 11.4328C6.86259 11.3155 7.02165 11.2497 7.1875 11.2497C7.35335 11.2497 7.51241 11.3155 7.62969 11.4328L9.0625 12.8664L12.3703 9.55781C12.4284 9.4997 12.4973 9.4536 12.5732 9.42215C12.649 9.3907 12.7304 9.37451 12.8125 9.37451C12.8946 9.37451 12.976 9.3907 13.0518 9.42215C13.1277 9.4536 13.1966 9.4997 13.2547 9.55781Z" fill="#B6B6B6"></path>
                                                                </svg>
                                                                            <span><?= $commercial->year; ?></span>
                                                                            <!-- <i class="icon-autodeal-automatic"></i>
                                                                            <span><?= $commercial->transmission; ?></span> -->
                                                                        </div>
                                                                    </div>
                                                                    <div class="icons flex-three text-color-3">
                                                                        <span><?php echo ($commercial->tax !== '0.00' && $commercial->tax !== 0.00) ? " (Incl. 7.7% VAT)" : ""; ?></span>
                                                                    </div>
                                                                    <div class="justify-content-between d-flex">
                                                                        <div class="money fs-20 fw-5 lh-25 text-color-3"><?php if (isset($_SESSION['location']) && ($_SESSION['location'] == 2 || $_SESSION['location'] == 3)) {
                                                                                                                                echo $eur;
                                                                                                                            } else {
                                                                                                                                echo $chf;
                                                                                                                            } ?>
                                                                        </div>
                                                                        <?php
                                                                        $is_logged_in = isset($_SESSION['user_id']);
                                                                        $is_favorited = $is_logged_in ? $this->WebsiteModel->is_favorited($_SESSION['user_id'], $commercial->id) : false;
                                                                        ?>
                                                                        <a href="javascript:void(0);"
                                                                            class="icon favorite-icon <?= $is_favorited ? 'favorited' : '' ?>"
                                                                            data-vehicle-id="<?= $commercial->id; ?>"
                                                                            data-logged-in="<?= $is_logged_in ? 'yes' : 'no' ?>"
                                                                            title="<?= $is_favorited ? 'Unfavorite' : 'Favorite' ?>">

                                                                            <svg width="18" height="16" viewBox="0 0 18 16" fill="none"
                                                                                xmlns="http://www.w3.org/2000/svg">
                                                                                <path
                                                                                    d="M16.5 4.875C16.5 2.80417 14.7508 1.125 12.5933 1.125C10.9808 1.125 9.59583 2.06333 9 3.4025C8.40417 2.06333 7.01917 1.125 5.40583 1.125C3.25 1.125 1.5 2.80417 1.5 4.875C1.5 10.8917 9 14.875 9 14.875C9 14.875 16.5 10.8917 16.5 4.875Z"
                                                                                    stroke="CurrentColor" stroke-width="1.5" stroke-linecap="round"
                                                                                    stroke-linejoin="round" />
                                                                            </svg>
                                                                        </a>

                                                                    </div>
                                                                    <div class="days-box flex justify-space align-center">
                                                                        <?php foreach ($added_by as $added) { ?>
                                                                            <div class="img-author">

                                                                                <?php if (!empty($added->profile)) { ?>
                                                                                    <img class="lazyload"
                                                                                        data-src="<?= base_url(); ?>uploads/profile/<?= $added->profile; ?>"
                                                                                        src="<?= base_url(); ?>uploads/profile/<?= $added->profile; ?>"
                                                                                        alt="image">
                                                                                <?php } else { ?>
                                                                                    <img class="lazyload"
                                                                                        data-src="<?= base_url(); ?>/assets/assets/images/author/avt-cm1.jpg"
                                                                                        src="<?= base_url(); ?>/assets/assets/images/author/avt-cm1.jpg"
                                                                                        alt="image">
                                                                                <?php } ?>

                                                                                <span
                                                                                    class="font text-color-2 fw-5"><?= $added->username; ?></span>
                                                                            </div>
                                                                            <a href="<?= base_url('list-details/' . $commercial->slug); ?>"
                                                                                class="view-car">View
                                                                                Details</a>
                                                                        <?php } ?>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                <?php }
                                                } ?>
                                            </div>
                                            <div class="swiper-pagination3"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- widegt List Commercial End -->
                </div>
            </section>

            <section class="tf-section3 section-feature-specs">
                <div class="container">
                    <div class="row">
                        <div class="col-md-7">
                            <div class="image-feature-specs relative">
                                <div class="image-inner1">
                                    <img class="lazyload"
                                        data-src="<?= base_url(); ?>/assets/assets/images/section/specs1.jpg"
                                        src="<?= base_url(); ?>/assets/assets/images/section/specs1.jpg" alt="images">
                                </div>
                                <div class="image-inner2">
                                    <img class="lazyload"
                                        data-src="<?= base_url(); ?>/assets/assets/images/section/specs2.png"
                                        src="<?= base_url(); ?>/assets/assets/images/section/specs2.png" alt="images">
                                </div>
                                <div class="box-specs small ani5 "></div>
                                <div class="box-specs large ani4"></div>

                            </div>
                        </div>
                        <div class="col-md-5">
                            <div class="content-feature-specs">
                                <div class="feature-specs-box">
                                    <div class="content">
                                        <div class="text-address">
                                            <p class="text-color-3 font">Sedan</p>
                                        </div>
                                        <h2 class="link-style-1">
                                            <a href="<?= base_url('listing-details-v4'); ?>">2024 Toyota Crown Features
                                                & Specs
                                                Advantage Toyota Valley</a>
                                        </h2>
                                        <div class="icon-box flex flex-wrap">
                                            <div class="icons flex-three">
                                                <i class="icon-autodeal-km1"></i>
                                                <span>72,491 kms</span>
                                            </div>
                                            <div class="icons flex-three">
                                                <i class="icon-autodeal-diesel"></i>
                                                <span>Diesel</span>
                                            </div>
                                            <div class="icons flex-three">
                                                <i class="icon-autodeal-automatic"></i>
                                                <span>Automatic</span>
                                            </div>
                                        </div>
                                        <div class="days-box flex justify-space align-center">
                                            <div class="img-author flex-three">
                                                <div class="author">
                                                    <img class=" ls-is-cached lazyloaded"
                                                        data-src="<?= base_url(); ?>/assets/assets/images/author/avt2.jpg"
                                                        src="<?= base_url(); ?>/assets/assets/images/author/avt2.jpg"
                                                        alt="image">
                                                </div>
                                                <div class="content-author">
                                                    <p> Agent</p>
                                                    <span class="font fs-18 text-color-2 fw-5">John Smith</span>

                                                </div>

                                            </div>
                                            <a href="<?= base_url('listing-list'); ?>" class="view-car">View
                                                car</a>
                                        </div>
                                        <div class="bottom-box flex-two">
                                            <div class="money fs-20 fw-5 lh-25 text-color-3">$73,000</div>
                                            <ul class="change-heart style-2 flex">
                                                <li class="box-icon">
                                                    <div class="icon">
                                                        <svg width="18" height="16" viewBox="0 0 18 16" fill="none"
                                                            xmlns="http://www.w3.org/2000/svg">
                                                            <path
                                                                d="M16.5 4.875C16.5 2.80417 14.7508 1.125 12.5933 1.125C10.9808 1.125 9.59583 2.06333 9 3.4025C8.40417 2.06333 7.01917 1.125 5.40583 1.125C3.25 1.125 1.5 2.80417 1.5 4.875C1.5 10.8917 9 14.875 9 14.875C9 14.875 16.5 10.8917 16.5 4.875Z"
                                                                stroke="CurrentColor" stroke-width="1.5"
                                                                stroke-linecap="round" stroke-linejoin="round"></path>
                                                        </svg>
                                                    </div>
                                                </li>
                                                <li class="box-icon">
                                                    <div class="icon">
                                                        <svg width="18" height="18" viewBox="0 0 18 18" fill="none"
                                                            xmlns="http://www.w3.org/2000/svg">
                                                            <path
                                                                d="M5.25 16.5L1.5 12.75M1.5 12.75L5.25 9M1.5 12.75H12.75M12.75 1.5L16.5 5.25M16.5 5.25L12.75 9M16.5 5.25H5.25"
                                                                stroke="CurrentColor" stroke-width="1.5"
                                                                stroke-linecap="round" stroke-linejoin="round"></path>
                                                        </svg>
                                                    </div>
                                                </li>
                                            </ul>

                                        </div>

                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <!-- widegt loan-calculator -->
            <section class="loan-calculator inner-2">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="heading center">
                                <h2 class="text-color-1 wow fadeInUpSmall" data-wow-delay="0.2s"
                                    data-wow-duration="1000ms">Search Vehicle by body</h2>
                                <p class="text-color-1 wow fadeInUpSmall" data-wow-delay="0.3s"
                                    data-wow-duration="1000ms">Are you looking for your dream Vehicle? Or want to sell your
                                    old Vehicle
                                    for the best price?
                                    AutoKorb is the place for you!</p>
                                <div class="btn-wrap wow fadeInUpSmall" data-wow-delay="0.4s"
                                    data-wow-duration="1000ms">
                                    <a href="#" class="sc-button btn-svg">
                                        <span>View all listing</span>
                                        <i class="icon-autodeal-right2"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <!-- widegt list car -->
            <section class="section-car-list mt--5">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="swiper partner-slide2 overflow-hidden">
                                <div class="swiper-wrapper">

                                    <?php foreach ($categories as $cat) {
                                        if (!empty($cat->img)) {
                                    ?>
                                            <div class="swiper-slide">
                                                <a href="<?= base_url('listing-list?cat_id=' . $cat->id); ?>" class="partner-item style-1">
                                                    <div class="image">
                                                        <img class="lazyload"
                                                            data-src="<?= base_url('uploads/categories/' . $cat->img); ?>"
                                                            src="<?= base_url('uploads/categories/' . $cat->img); ?>"
                                                            alt="images">
                                                    </div>
                                                    <div class="content center">
                                                        <div class="fs-16 fw-6 title text-color-2 font-2"><?= $cat->name ?></div>
                                                        <!-- <span class="sub-title fs-12 fw-4 font-2">271 Car</span> -->
                                                    </div>
                                                </a>
                                            </div>
                                    <?php }
                                    } ?>

                                </div>
                                <div class="swiper-pagination3"></div>
                            </div>

                        </div>
                    </div>
                </div>
            </section>


           
            <!-- Popular Brands End -->
            <!-- logo -->
            <!-- <section class="flat-brand tf-section3">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="title-section center">
                                <h2 class="wow fadeInUpSmall" data-wow-delay="0.2s" data-wow-duration="1000ms">Our
                                    partners</h2>
                            </div>
                            <div class="swiper-container carousel-5">
                                <div class="swiper-wrapper">
                                    <div class="swiper-slide">
                                        <div class="slogan-logo">
                                            <a href="#">
                                                <img class="lazyload"
                                                    data-src="<?= base_url(); ?>/assets/assets/images/partner/par1.png"
                                                    src="<?= base_url(); ?>/assets/assets/images/partner/par1.png"
                                                    alt="images">
                                            </a>
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="slogan-logo">
                                            <a href="#">
                                                <img class="lazyload"
                                                    data-src="<?= base_url(); ?>/assets/assets/images/partner/par2.png"
                                                    src="<?= base_url(); ?>/assets/assets/images/partner/par2.png"
                                                    alt="images">
                                            </a>
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="slogan-logo">
                                            <a href="#">
                                                <img class="lazyload"
                                                    data-src="<?= base_url(); ?>/assets/assets/images/partner/par3.png"
                                                    src="<?= base_url(); ?>/assets/assets/images/partner/par3.png"
                                                    alt="images">
                                            </a>
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="slogan-logo">
                                            <a href="#">
                                                <img class="lazyload"
                                                    data-src="<?= base_url(); ?>/assets/assets/images/partner/par4.png"
                                                    src="<?= base_url(); ?>/assets/assets/images/partner/par4.png"
                                                    alt="images">
                                            </a>
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="slogan-logo">
                                            <a href="#">
                                                <img class="lazyload"
                                                    data-src="<?= base_url(); ?>/assets/assets/images/partner/par5.png"
                                                    src="<?= base_url(); ?>/assets/assets/images/partner/par5.png"
                                                    alt="images">
                                            </a>
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="slogan-logo">
                                            <a href="#">
                                                <img class="lazyload"
                                                    data-src="<?= base_url(); ?>/assets/assets/images/partner/par6.png"
                                                    src="<?= base_url(); ?>/assets/assets/images/partner/par6.png"
                                                    alt="images">
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section> -->


            <section class="tf-section3">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="heading-section center">
                                <h2>We love our clients</h2>
                            </div>
                        </div>
                        <div class="col-lg-12">
                            <div class="swiper-container carousel-7 overflow-hidden">
                                <div class="swiper-wrapper ">
                                    <?php foreach ($blogs as $blog) { ?>
                                        <div class="swiper-slide">
                                            <div class="tf-testimonial bg-4">
                                                <div class="inner-top flex-two">
                                                    <?php
                                                    $date = $blog->created_at;
                                                    $formatted_date = date("j M Y g:i a", strtotime($date));
                                                    ?>
                                                    <p class="fs-12"><?= $formatted_date; ?></p>

                                                </div>
                                                <p class="fs-16 lh-22 text-color-2"> <a href="<?= base_url('blog-details/' . $blog->id); ?>"><?= $blog->description; ?></a></p>
                                                <div class="author-box flex">
                                                    <div class="images">
                                                        <?php if ($blog->img) { ?>
                                                            <img class="lazyload" data-src="<?= base_url('uploads/blogs/' . $blog->img); ?>"
                                                                src="<?= base_url('uploads/blogs/' . $blog->img); ?>" alt="images">
                                                        <?php } else { ?>
                                                            <img class="lazyload" data-src="<?= base_url('uploads/blogs/blog.jpg'); ?>"
                                                                src="<?= base_url('uploads/blogs/blog.jpg'); ?>" alt="images">

                                                        <?php } ?>
                                                    </div>
                                                    <div class="content">
                                                        <h5><?= $blog->name; ?></h5>
                                                        <p class="fs-12 lh-16"><?= $blog->title; ?></p>
                                                    </div>

                                                </div>
                                            </div>
                                        </div>
                                    <?php } ?>
                                </div>
                                <div class="swiper-pagination3"></div>
                            </div>
                        </div>

                    </div>

                </div>
            </section>



            <script>
                $('#filter_by_location').on('change', function() {
                    //  console.log('hello');
                    var selectlocation = $(this).val();
                    $.ajax({
                        url: '<?= base_url("set-location") ?>',
                        type: 'POST',
                        data: {
                            location: selectlocation
                        },
                        success: function(response) {
                            console.log('Location set in session:', response);
                            location.reload();
                        }
                    });
                });
            </script>

            <script>
                // toggleUrl = '<?= base_url("toggle") ?>';
            </script>

            <?php include('footer.php'); ?>


            <script>
                function equalizeCardHeights() {
                    const cards = document.querySelectorAll('.box-car-list');
                    let maxHeight = 0;

                    // Reset previous height
                    cards.forEach(card => {
                        card.style.height = 'auto';
                    });

                    // Find max height
                    cards.forEach(card => {
                        if (card.offsetHeight > maxHeight) {
                            maxHeight = card.offsetHeight;
                        }
                    });

                    // Set all cards to max height
                    cards.forEach(card => {
                        card.style.height = maxHeight + 'px';
                    });
                }

                // Call on page load and resize
                window.addEventListener('load', equalizeCardHeights);
                window.addEventListener('resize', equalizeCardHeights);




                // Sidebar button click
                $(document).on("click", ".sidebar-icon", function() {
                    let form = $("#car-form");
                    if (form.length === 0) {
                        console.warn("Filter form not loaded yet, cannot set vehicle type.");
                        return;
                    }

                    $(".sidebar-icon").removeClass("active");
                    $(this).addClass("active");

                    let btnId = $(this).attr("id");
                    let typeValue = 2; // Default Car

                    if (btnId === "truck-button") {
                        typeValue = 1;
                    } else if (btnId === "commercial-button") {
                        typeValue = 3;
                    }

                    $("#vehicle_type").val(typeValue);
                    console.log("Vehicle type set to:", typeValue);

                    updateVehicleCount();
                });

                // Filter change event
                $(document).on("change keyup", "#car-form select, #car-form input", function() {
                    updateVehicleCount();
                });

                // Function to fetch vehicle count
                function updateVehicleCount() {
                    let form = $("#car-form");
                    if (form.length === 0) {
                        console.warn("Form not found in DOM, skipping count update.");
                        return;
                    }

                    let formData = form.serialize();
                    let url = form.data("url");

                    console.log("Sending data:", formData);

                    $.ajax({
                        url: url,
                        type: "POST",
                        data: formData,
                        dataType: "json",
                        success: function(response) {
                            if (response.count !== undefined) {
                                $("#vehicleCount").text(response.count);
                            } else {
                                console.error("Count not found in response:", response);
                            }
                        },
                        error: function(xhr, status, error) {
                            console.error("AJAX Error:", status, error);
                            console.error("Response:", xhr.responseText);
                        }
                    });
                }

                // Jab filter form load ho jaye (AJAX ya partial view se)
                $(document).on("DOMNodeInserted", function(e) {
                    if ($(e.target).find("#car-form").length > 0) {
                        console.log("Filter form loaded, updating count...");
                        updateVehicleCount();
                    }
                });

                
            </script>