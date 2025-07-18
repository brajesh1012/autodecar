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
    </style>



</head>

<body class="body header-fixed">

    <div class="preload preload-container">
        <div class="middle">
        </div>
    </div>

    <!-- /preload -->

    <div id="wrapper">
        <div id="pagee" class="clearfix">

            <header class=" p-2">
                <!-- Header Lower -->
                <div class="header-lower">
                    <div class="container2">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="inner-container flex justify-space align-center">
                                    <!-- Logo Box -->
                                    <div class="logo-box flex">
                                        <div class="logo"><a href="<?= base_url();?>">
                                                <img class="lazyload"
                                                    data-src="<?= base_url(); ?>assets/assets/images/logo/tb_new.jpeg"
                                                    src="<?= base_url(); ?>assets/assets/images/logo/tb_new.jpeg" alt=""
                                                    width="225" height="40"></a></div>
                                    </div>
                                    <div class="nav-outer flex align-center">
                                        <!-- Main Menu -->
                                        <nav class="main-menu show navbar-expand-md">
                                            <div class="navbar-collapse collapse clearfix" id="navbarSupportedContent">
                                                <ul class="navigation clearfix d-flex">
                                                    <!-- Updated Menu -->
                                                    <li>
                                                        <div class="dropdown">
                                                            <button class="dropbtn ">
                                                                Search
                                                            </button>
                                                            <div class="dropdown-content">
                                                                <div class="arrow-up"></div>
                                                                <a href="#">Used And New Cars</a>
                                                            </div>
                                                        </div>
                                                    </li>

                                                    <li>
                                                        <div class="dropdown">
                                                            <button class="dropbtn ">
                                                                Sell
                                                            </button>
                                                            <div class="dropdown-content">
                                                                <div class="arrow-up-sell"></div>
                                                                <a href="#">Cars</a>
                                                                <a href="#">Motorcycle</a>
                                                                <a href="#">Commercial Vehicle</a>
                                                            </div>
                                                        </div>
                                                    </li>

                                                    <li>
                                                        <div class="dropdown">
                                                            <button class="dropbtn">
                                                                Dealer/Seller
                                                            </button>
                                                            <div class="dropdown-content">
                                                                <div class="arrow-up"></div>
                                                                <a href="#">Private Dealer</a>
                                                                <a href="#">commercial Dealer</a>
                                                            </div>
                                                        </div>
                                                    </li>





                                                    <!-- Updated Menu End -->








                                                    <!-- <li class=""><a href="<?= base_url();?>">Home</a> -->
                                                    <!-- <ul>
                                                            <li><a href="index.html">Home Page 01</a></li>
                                                            <li class="current"><a href="home02.html">Home Page 02</a>
                                                            </li>
                                                            <li><a href="home03.html">Home Page 03</a></li>
                                                            <li><a href="home04.html">Home Page 04</a></li>
                                                            <li><a href="home05.html">Home Page 05</a></li>
                                                            <li><a href="home06.html">Home Page 06</a></li>
                                                            <li><a href="home07.html">Home Page 07</a></li>
                                                            <li><a href="home08.html">Home Page 08</a></li>
                                                            <li><a href="home09.html">Home Page 09</a></li>
                                                            <li><a href="home10.html">Home Page 10</a></li>
                                                        </ul> -->
                                                    </li>
                                                    <!-- <li><a href="<?= base_url('about-us'); ?>">About Us</a></li> -->
                                                    <!-- <li class="dropdown2"><a href="#">Listing Car</a> -->
                                                    <!-- <li class=""><a href="<?= base_url('listing-list'); ?>">Listing
                                                            Car</a> -->
                                                    <!-- <ul>
                                                            <li><a href="<?= base_url('listing-list'); ?>">Listing
                                                                    list</a>

                                                            </li>
                                                            <li class="dropdown2"><a href="#">Listing grid</a>
                                                                <ul>
                                                                    <li><a href="<?= base_url('listing-grid'); ?>">Listing
                                                                            grid V1</a>
                                                                    </li>
                                                                    <li><a href="<?= base_url('listing-grid2'); ?>">Listing
                                                                            grid V2</a>
                                                                    </li>
                                                                </ul>
                                                            </li>
                                                            <li class="dropdown2"><a href="#">Listing grid map</a>
                                                                <ul>
                                                                    <li><a href="<?= base_url('listing-grid-map'); ?>">Listing
                                                                            map V1

                                                                        </a></li>
                                                                     <li><a href="listing-list-map.html">Listing map 
                                                                    <li><a href="#">Listing map
                                                                            V2</a></li>
                                                                </ul>
                                                            </li>
                                                            <li class="dropdown2"><a href="#">Listing detail</a>
                                                                <ul>
                                                                    <li><a href="listing-detail-v1.html">Listing detail
                                                                            V1</a></li>
                                                                    <li><a href="listing-detail-v2.html">Listing detail
                                                                            V2</a></li>
                                                                    <li><a href="listing-detail-v3.html">Listing detail
                                                                            V3</a></li>
                                                                    <li><a href="listing-detail-v4.html">Listing detail
                                                                            V4</a></li>
                                                                    <li><a href="listing-detail-v5.html">Listing detail
                                                                            V5</a></li>
                                                                </ul>
                                                            </li>
                                                        </ul> -->
                                                    <!-- </li> -->
                                                    <!-- <li class=""><a href="<?= base_url('dealer-list'); ?>">Dealer</a>
                                                    </li> -->
                                                    <!-- <li class=""><a href="<?= base_url('sale-agent'); ?>">Agents</a>
                                                    </li> -->
                                                    <!-- <li><a href="<?= base_url('pricing'); ?>">Pricing</a></li> -->
                                                    <!-- <li><a href="<?= base_url('compare'); ?>">Compare</a></li> -->
                                                    <!-- <li class="dropdown2"><a href="#">Page</a>
                                                        <ul>
                                                            <li><a href="<?= base_url('about-us'); ?>">About Us</a></li>
                                                            <li><a href="<?= base_url('faq'); ?>">Faq's</a></li>
                                                            <li><a href="<?= base_url('pricing'); ?>">Pricing</a></li>
                                                            <li><a href="<?= base_url('compare'); ?>">Compare</a></li>

                                                            <li class=""><a
                                                                    href="<?= base_url('dealer-list'); ?>">Dealer</a>
                                                            </li>
                                                            <li class=""><a
                                                                    href="<?= base_url('sale-agent'); ?>">Agents</a>
                                                            </li>
                                                        </ul>
                                                    </li> -->

                                                    <!-- <li class=""><a href="<?= base_url('blog-grid'); ?>">Blog</a> -->
                                                    <!-- <ul>
                                                            <li><a href="blog.html">Blog List</a></li>
                                                            <li><a href="blog-grid.html">Blog Grid</a></li>
                                                            <li><a href="<?= base_url('blog-details'); ?>">Blog Detail</a></li>
                                                              
                                                        </ul> -->
                                                    </li>

                                                    <!-- <li><a href="<?= base_url('contact'); ?>">Contact Us</a></li> -->

                                                </ul>
                                            </div>
                                        </nav>
                                        <!-- Main Menu End-->
                                    </div>
                                    <div class="header-account flex align-center">
                                        <!-- <div class="search-mobie">
                                            <a href="#" class="header-search-icon flex items-center justify-center">
                                                <i class="icon-autodeal-search search-icon fs-20"></i>
                                                <i class="icon-autodeal-plus search-icon fs-20"></i>
                                            </a>
                                            <div class="wd-find-select">
                                                <form method="post">
                                                    <div class="form-group-1 search-form form-style2 relative">
                                                        <i class="icon-autodeal-search"></i>
                                                        <input type="search" class="search-field" id="search-terms"
                                                            placeholder="Search..." value="" name="s" title="Search for"
                                                            required="">
                                                    </div>
                                                </form>
                                            </div>
                                        </div> -->

                                        <!-- <a href="#" class="header-favorite flex items-center justify-center">
                                            <i class="icon-autodeal-favorite fs-18"></i>
                                        </a> -->
                                        <!-- <li> <select id="languageSwitcher" class="form-control" onchange="Weglot.switchTo(this.value)"
                                            style="width: 40px; font-size: 14px; padding: 4px;">
                                            <option value="en">En</option>
                                            <option value="de">Ger</option>
                                        </select></li> -->
                                        <!-- <div id="google_translate_element" style="margin-top: 15px;"></div> -->
                                        <!-- Translate Element -->
                                        <!-- <div id="google_translate_element"></div> -->


                                        <?php if (!$this->session->userdata('user_id')) { ?>
                                        <div class="register">
                                            <ul class="flex align-center">
                                                <li>
                                                    <i class="icon-autodeal-user fs-20"></i>
                                                </li>
                                                <li class="">
                                                    <a href="#" data-bs-toggle="modal"
                                                        data-bs-target="#popup_bid">Login</a>
                                                </li>
                                                <li>
                                                    <span>/</span>
                                                </li>
                                                <li class="">
                                                    <a href="#" data-bs-toggle="modal"
                                                        data-bs-target="#popup_bid2">Register</a>
                                                </li>
                                            </ul>
                                        </div>
                                        <?php }else{ ?>
                                        <div class="register">


                                            <ul class="nav">
                                                <li class="nav-item dropdown">
                                                    <!-- Icon as Toggle -->
                                                    <a class="nav-link dropdown-toggle d-flex align-items-center"
                                                        href="#" id="userDropdown" role="button"
                                                        data-bs-toggle="dropdown" aria-expanded="false">
                                                        <i class="icon-autodeal-user fs-4"></i>
                                                    </a>

                                                    <!-- Clean Dropdown Menu -->
                                                    <ul class="dropdown-menu dropdown-menu-end shadow-sm p-0"
                                                        aria-labelledby="userDropdown">
                                                        <li><a class="dropdown-item py-2 px-3"
                                                                href="<?= base_url('profile'); ?>">Profile</a></li>
                                                        <li><a class="dropdown-item py-2 px-3"
                                                                href="<?= base_url('logout'); ?>">Log Out</a></li>
                                                    </ul>
                                                </li>
                                            </ul>
                                        </div>
                                        <li> <select class="form-control" name="location" id="filter_by_location"
                                                style="width: 140px; font-size: 14px; padding: 4px;">
                                                <option value="">Select Location</option>
                                                <?php  $cities= $this->db->get('cities')->result();  foreach($cities as $city){?>
                                                <option value="<?= $city->city_name; ?>"
                                                    <?php if($this->session->userdata('location')== $city->city_name){ echo "selected";}?>>
                                                    <?= $city->city_name; ?></option>
                                                <?php }?>
                                            </select></li>

                                        <?php } if (isset($_SESSION['role']) && $_SESSION['role'] == 1) {?>

                                        <!-- <div class="flat-bt-top">
                                            <a class="sc-button" href="<?= base_url('admin/add-listing'); ?>">

                                                <svg width="21" height="20" viewBox="0 0 21 20" fill="none"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <g clip-path="url(#clip0_4960_5223)">
                                                        <path
                                                            d="M5.91699 13.75H1.33366C1.22315 13.75 1.11717 13.7061 1.03903 13.628C0.960891 13.5498 0.916992 13.4438 0.916992 13.3333C0.916992 13.2228 0.960891 13.1168 1.03903 13.0387C1.11717 12.9606 1.22315 12.9167 1.33366 12.9167H4.91116L3.61033 11.6158C3.37548 11.3824 3.0581 11.251 2.72699 11.25H1.33366C1.22315 11.25 1.11717 11.2061 1.03903 11.128C0.960891 11.0498 0.916992 10.9438 0.916992 10.8333C0.916992 10.7228 0.960891 10.6168 1.03903 10.5387C1.11717 10.4606 1.22315 10.4167 1.33366 10.4167H2.72699C3.28366 10.4167 3.80616 10.6333 4.20033 11.0267L6.21199 13.0383C6.27083 13.0964 6.311 13.1708 6.32737 13.2518C6.34374 13.3329 6.33557 13.417 6.30391 13.4934C6.27224 13.5698 6.21851 13.635 6.14959 13.6807C6.08067 13.7264 5.99969 13.7505 5.91699 13.75ZM5.08366 17.9167H2.58366C1.89449 17.9167 1.33366 17.3558 1.33366 16.6667V15C1.33366 14.8895 1.37756 14.7835 1.4557 14.7054C1.53384 14.6272 1.63982 14.5833 1.75033 14.5833C1.86083 14.5833 1.96681 14.6272 2.04495 14.7054C2.12309 14.7835 2.16699 14.8895 2.16699 15V16.6667C2.16699 16.7772 2.21089 16.8831 2.28903 16.9613C2.36717 17.0394 2.47315 17.0833 2.58366 17.0833H5.08366C5.19417 17.0833 5.30015 17.0394 5.37829 16.9613C5.45643 16.8831 5.50033 16.7772 5.50033 16.6667V15.4167C5.50033 15.3061 5.54422 15.2002 5.62236 15.122C5.7005 15.0439 5.80649 15 5.91699 15C6.0275 15 6.13348 15.0439 6.21162 15.122C6.28976 15.2002 6.33366 15.3061 6.33366 15.4167V16.6667C6.33366 17.3558 5.77283 17.9167 5.08366 17.9167Z"
                                                            fill="CurrentColor" />
                                                        <path
                                                            d="M14.25 16.25H6.75C6.6852 16.2499 6.62129 16.2348 6.56333 16.2058L4.985 15.4167H1.33333C1.24152 15.4168 1.15226 15.3865 1.07945 15.3306C1.00664 15.2747 0.954383 15.1962 0.930833 15.1075C0.653273 13.9813 0.508675 12.8265 0.5 11.6667C0.5 9.78916 1.0825 8.6475 2.39083 7.96416C3.53917 7.36333 6.11667 7.08333 10.5 7.08333C14.8833 7.08333 17.4608 7.36333 18.6092 7.96416C19.9175 8.6475 20.5 9.78916 20.5 11.6667C20.5 13.4717 20.0867 15.0417 20.0692 15.1075C20.0456 15.1962 19.9934 15.2747 19.9206 15.3306C19.8477 15.3865 19.7585 15.4168 19.6667 15.4167H16.015L14.4358 16.2058C14.3782 16.2349 14.3145 16.25 14.25 16.25ZM6.84833 15.4167H14.1517L15.7308 14.6275C15.7887 14.5983 15.8527 14.5832 15.9175 14.5833H19.3375C19.4525 14.0525 19.6667 12.9058 19.6667 11.6667C19.6667 10.0975 19.2483 9.23833 18.2242 8.70249C17.2258 8.18083 14.6275 7.91666 10.5 7.91666C6.3725 7.91666 3.77417 8.18083 2.77583 8.70249C1.75167 9.23833 1.33333 10.0975 1.33333 11.6667C1.33333 12.9058 1.5475 14.0525 1.66333 14.5833H5.08333C5.1475 14.5833 5.21167 14.5983 5.27 14.6275L6.84833 15.4167Z"
                                                            fill="CurrentColor" />
                                                        <path
                                                            d="M19.6664 13.75H15.0831C15.0006 13.7501 14.9199 13.7258 14.8512 13.68C14.7825 13.6342 14.729 13.5691 14.6974 13.4929C14.6658 13.4167 14.6576 13.3328 14.6737 13.2518C14.6899 13.1709 14.7297 13.0966 14.7881 13.0383L16.7997 11.0267C16.9929 10.8327 17.2225 10.6789 17.4754 10.5742C17.7283 10.4695 17.9994 10.416 18.2731 10.4167H19.6664C19.7769 10.4167 19.8829 10.4606 19.961 10.5387C20.0392 10.6168 20.0831 10.7228 20.0831 10.8333C20.0831 10.9438 20.0392 11.0498 19.961 11.128C19.8829 11.2061 19.7769 11.25 19.6664 11.25H18.2731C17.9439 11.25 17.6223 11.3833 17.3889 11.6158L16.0889 12.9167H19.6664C19.7769 12.9167 19.8829 12.9606 19.961 13.0387C20.0392 13.1168 20.0831 13.2228 20.0831 13.3333C20.0831 13.4438 20.0392 13.5498 19.961 13.628C19.8829 13.7061 19.7769 13.75 19.6664 13.75ZM12.9998 13.75H7.99975C7.93868 13.75 7.87836 13.7365 7.82306 13.7106C7.76776 13.6847 7.71884 13.6469 7.67975 13.6L5.59642 11.1C5.54539 11.0393 5.5128 10.9652 5.50248 10.8866C5.49217 10.8079 5.50456 10.728 5.5382 10.6561C5.57184 10.5843 5.62532 10.5236 5.69233 10.4812C5.75935 10.4387 5.8371 10.4164 5.91642 10.4167H15.0831C15.1623 10.4167 15.2398 10.4393 15.3066 10.4818C15.3734 10.5243 15.4267 10.5849 15.4603 10.6566C15.4938 10.7283 15.5063 10.8081 15.4962 10.8866C15.486 10.9651 15.4538 11.0392 15.4031 11.1L13.3197 13.6C13.2807 13.6469 13.2317 13.6847 13.1764 13.7106C13.1211 13.7365 13.0608 13.75 12.9998 13.75ZM8.19475 12.9167H12.8039L14.1931 11.25H6.80558L8.19475 12.9167ZM18.4164 8.75C18.3351 8.75005 18.2556 8.72633 18.1877 8.68176C18.1197 8.63719 18.0663 8.57372 18.0339 8.49916C17.0931 6.3325 15.9423 3.92666 15.6447 3.64916C15.3256 3.37833 13.9681 2.91666 10.9164 2.91666H10.0831C7.03142 2.91666 5.67392 3.37833 5.35308 3.65083C5.05725 3.92666 3.90642 6.33333 2.96558 8.49916C2.92149 8.60061 2.83891 8.68038 2.73599 8.72094C2.63308 8.76149 2.51828 8.7595 2.41683 8.71541C2.31539 8.67132 2.23561 8.58873 2.19506 8.48582C2.1545 8.38291 2.15649 8.26811 2.20058 8.16666C2.67392 7.07666 4.26142 3.48416 4.81308 3.01499C5.50058 2.43166 7.46975 2.08333 10.0831 2.08333H10.9164C13.5297 2.08333 15.4989 2.43166 16.1864 3.01583C16.7381 3.485 18.3248 7.0775 18.7989 8.16749C18.826 8.23094 18.8369 8.30009 18.8308 8.3688C18.8247 8.4375 18.8017 8.50363 18.7638 8.56129C18.726 8.61895 18.6744 8.66635 18.6138 8.69927C18.5532 8.73219 18.4854 8.74962 18.4164 8.75ZM18.4164 17.9167H15.9164C15.2273 17.9167 14.6664 17.3558 14.6664 16.6667V15.4167C14.6664 15.3062 14.7103 15.2002 14.7885 15.122C14.8666 15.0439 14.9726 15 15.0831 15C15.1936 15 15.2996 15.0439 15.3777 15.122C15.4559 15.2002 15.4998 15.3062 15.4998 15.4167V16.6667C15.4998 16.7772 15.5436 16.8832 15.6218 16.9613C15.6999 17.0394 15.8059 17.0833 15.9164 17.0833H18.4164C18.5269 17.0833 18.6329 17.0394 18.711 16.9613C18.7892 16.8832 18.8331 16.7772 18.8331 16.6667V15C18.8331 14.8895 18.877 14.7835 18.9551 14.7054C19.0333 14.6272 19.1392 14.5833 19.2498 14.5833C19.3603 14.5833 19.4662 14.6272 19.5444 14.7054C19.6225 14.7835 19.6664 14.8895 19.6664 15V16.6667C19.6664 17.3558 19.1056 17.9167 18.4164 17.9167Z"
                                                            fill="CurrentColor" />
                                                    </g>
                                                    <defs>
                                                        <clipPath>
                                                            <rect width="20" height="20" fill="white"
                                                                transform="translate(0.5)" />
                                                        </clipPath>
                                                    </defs>
                                                </svg>
                                                <span>Add listing</span>
                                            </a>
                                        </div> -->
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
                        <div class="nav-logo"><a href="index.html">
                                <img class="lazyload" data-src="<?= base_url(); ?>assets/assets/images/logo/logo@2x.png"
                                    src="<?= base_url(); ?>assets/assets/images/logo/logo@2x.png" alt="" width="197"
                                    height="48"></a></div>
                        <div class="bottom-canvas">
                            <div class="login-box flex align-center">
                                <i class="icon-autodeal-user fs-20"></i>
                                <a href="#" data-bs-toggle="modal" data-bs-target="#popup_bid"
                                    class="fw-7 font-2">Login</a>
                            </div>
                            <div class="menu-outer"></div>
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
                            </div>
                        </div>
                    </nav>
                </div>
                <!-- End Mobile Menu -->

            </header>

            <div class="container">

                <form action="<?= base_url(ADMIN_PATH . '/add-listing') ?>" method="POST" enctype="multipart/form-data">

                    <h1 class="admin-title mb-3">Advance Filter</h1>
                    <div class="tfcl-add-listing car-details">
                        <div class="form-group">
                            <h4>Vehicle Basic Information</h4>
                        </div>
                        <div class="form-group-4">

                            <!-- <div class="form-group">
                                            <label for="listing_title">Title *</label>
                                            <input type="text" class="form-control" name="title"
                                                placeholder="Enter Title" value="<?= set_value('title') ?>">
                                            <small class="text-danger"><?= form_error('title') ?></small>
                                        </div> -->


                            <div class="form-group">
                                <label for="listing_title">Vehicle Type</label>

                                <select class="form-control" name="vehicle_type" id="vehicle_type_id">
                                    <option value="">Select Vehicle Type</option>
                                    <?php foreach($vehicle_types as $vehicle_type){
                                                $type_key = strtolower(str_replace(' ', '_', $vehicle_type->name)); 
                                                ?>
                                    <option value="<?= $vehicle_type->id; ?>" data-type="<?= $type_key ?>"
                                        <?php if(set_value('vehicle_type') == $vehicle_type->id ){ echo "selected"; } ?>>
                                        <?= $vehicle_type->name; ?></option>
                                    <?php } ?>
                                </select>

                                <small class="text-danger"><?= form_error('vehicle_type') ?></small>

                            </div>

                            <div class="form-group">
                                <label for="listing_title">Make *</label>

                                <select class="form-control" name="make" id="make_id">
                                    <option value="">Select Make</option>
                                    <?php  foreach($makes as $make){?>
                                    <option value="<?= $make->id; ?>"
                                        <?php if(set_value('make')==$make->name){ echo "selected"; } ?>>
                                        <?= $make->name; ?></option>
                                    <?php }?>
                                </select>

                                <small class="text-danger"><?= form_error('make') ?></small>

                            </div>

                            <div class="form-group">
                                <label for="listing_title">Model *</label>

                                <select class="form-control" name="model" id="model_id">
                                    <option value="">Select Model</option>
                                    <?php  foreach($models as $model){?>
                                    <option value="<?= $model->id; ?>"
                                        <?php if(set_value('model')==$model->name){ echo "selected"; } ?>>
                                        <?= $model->name; ?></option>
                                    <?php }?>
                                </select>

                                <small class="text-danger"><?= form_error('model') ?></small>

                            </div>

                            <div class="form-group">
                                <label for="listing_title">Variant *</label>

                                <select class="form-control" name="variant" id="variant_id">
                                    <option value="">Select Variant</option>
                                    <?php  foreach($variants as $variant){?>
                                    <option value="<?= $variant->id; ?>"
                                        <?php if(set_value('variant')==$variant->name){ echo "selected"; } ?>>
                                        <?= $variant->name; ?></option>
                                    <?php }?>

                                </select>

                                <small class="text-danger"><?= form_error('variant') ?></small>

                            </div>

                            <div class="form-group">
                                <label for="listing_title">Fuel Type *</label>

                                <select class="form-control" name="fuel_type" id="fuel_type">
                                    <option value="">Select Fuel Type</option>
                                    <?php  foreach($fuel_types as $fuel_type){?>
                                    <option value="<?= $fuel_type->name; ?>"
                                        <?php if(set_value('fuel_type')==$fuel_type->name){ echo "selected"; } ?>>
                                        <?= $fuel_type->name; ?>
                                    </option>
                                    <?php }?>
                                </select>
                                <small class="text-danger"><?= form_error('fuel_type') ?></small>
                            </div>

                            <div class="form-group">
                                <label for="listing_title">Color *</label>

                                <select class="form-control" name="color" id="color">
                                    <option value="">Select Color</option>
                                    <?php  foreach($colors as $color){?>
                                    <option value="<?= $color->name; ?>"
                                        <?php if(set_value('color')==$color->name){ echo "selected"; } ?>>
                                        <?= $color->name; ?>
                                    </option>
                                    <?php }?>
                                </select>
                                <small class="text-danger"><?= form_error('color') ?></small>
                            </div>

                            <div class="form-group">
                                <label for="listing_title">Mileage *</label>
                                <input type="text" class="form-control" name="mileage" placeholder="Enter mileage"
                                    value="<?= set_value('mileage') ?>">
                                <small class="text-danger"><?= form_error('mileage') ?></small>
                            </div>

                            <div class="form-group">
                                <label for="listing_title">Transmission *</label>

                                <select class="form-control" name="transmission">
                                    <option value="">Select Transmission</option>
                                    <?php  foreach($transmissions as $transmission){?>
                                    <option value="<?= $transmission->name; ?>"
                                        <?php if(set_value('transmission')==$transmission->name){ echo "selected"; } ?>>
                                        <?= $transmission->name; ?>
                                    </option>
                                    <?php }?>
                                </select>
                                <small class="text-danger"><?= form_error('transmission') ?></small>
                            </div>

                            <div class="form-group">
                                <label for="listing_title">Condition *</label>
                                <select class="form-control" name="vehicle_condition">
                                    <option value="">Select Condition</option>
                                    <option value="Good"
                                        <?php if(set_value('vehicle_condition')== "Good"){ echo "selected"; } ?>>Good
                                    </option>
                                    <option value="Export"
                                        <?php if(set_value('vehicle_condition')== "Export"){ echo "selected"; } ?>>
                                        Export</option>
                                    <option value="Accident Vehicle"
                                        <?php if(set_value('vehicle_condition')== "Accident Vehicle"){ echo "selected"; } ?>>
                                        Accident Vehicle</option>
                                </select>

                                <!-- <input type="text" class="form-control" name="vehicle_condition"
                                                placeholder="Enter Condition"
                                                value="<?= set_value('vehicle_condition') ?>"> -->
                                <small class="text-danger"><?= form_error('vehicle_condition') ?></small>
                            </div>

                            <div class="form-group">
                                <label for="listing_title">MFk *</label>
                                <input type="date" class="form-control" name="mfk_date" placeholder="Enter MFK"
                                    value="<?= set_value('mfk_date') ?>">
                                <small class="text-danger"><?= form_error('mfk_date') ?></small>
                            </div>

                            <!-- <div class="form-group">
                                            <label for="listing_title">TUV *</label>
                                            <input type="date" class="form-control" name="tuv_date"
                                                placeholder="Enter TUV" value="<?= set_value('tuv_date') ?>">
                                            <small class="text-danger"><?= form_error('tuv_date') ?></small>
                                        </div> -->
                        </div>

                        <div class="form-group">
                            <h4>Register & Ownership</h4>
                        </div>
                        <div class="form-group-4">


                            <div class="form-group">
                                <label for="listing_title">Register Years *</label>
                                <input type="number" class="form-control" name="year" placeholder="Enter Register year"
                                    value="<?= set_value('year') ?>">
                                <small class="text-danger"><?= form_error('year') ?></small>
                            </div>

                            <div class="form-group">
                                <label for="listing_title">Ownership *</label>
                                <!-- <input type="text" class="form-control" name="ownership" placeholder="Enter KM"
                                                value="<?= set_value('ownership') ?>"> -->
                                <select name="ownership" class="form-control" id="ownership">
                                    <option value="">Select Owner</option>
                                    <option value="1st" <?php if(set_value('ownership')== '1st'){ echo "selected"; } ?>>
                                        1st
                                    </option>
                                    <option value="2nd" <?php if(set_value('ownership')== '2nd'){ echo "selected"; } ?>>
                                        2nd
                                    </option>
                                    <option value="3rd" <?php if(set_value('ownership')== '3rd'){ echo "selected"; } ?>>
                                        3rd
                                    </option>
                                </select>
                                <small class="text-danger"><?= form_error('ownership') ?></small>
                            </div>

                            <div class="form-group">
                                <label for="listing_title">Euro Norm *</label>
                                <!-- <input type="text" class="form-control" name="ownership" placeholder="Enter KM"
                                                value="<?= set_value('euro_norm') ?>"> -->
                                <select name="euro_norm" class="form-control" id="euro_norm">
                                    <option value="">Select Euro</option>
                                    <option value="6 Euro"
                                        <?php if(set_value('euro_norm')== '6 Euro'){ echo "selected"; } ?>>6
                                        Euro</option>
                                    <option value="5 Euro"
                                        <?php if(set_value('euro_norm')== '5 Euro'){ echo "selected"; } ?>>5
                                        Euro</option>
                                    <option value="4 Euro"
                                        <?php if(set_value('euro_norm')== '4 Euro'){ echo "selected"; } ?>>4
                                        Euro</option>
                                    <option value="3 Euro"
                                        <?php if(set_value('euro_norm')== '3 Euro'){ echo "selected"; } ?>>3
                                        Euro</option>
                                </select>
                                <small class="text-danger"><?= form_error('euro_norm') ?></small>
                            </div>


                            <div class="form-group">
                                <label for="listing_title">KM Driven *</label>
                                <input type="text" class="form-control" name="km" placeholder="Enter KM"
                                    value="<?= set_value('km') ?>">
                                <small class="text-danger"><?= form_error('km') ?></small>
                            </div>
                            <!-- <div class="form-group">
                                            <label for="listing_title">Co<sub>2</sub> Emission *</label>
                                            <input type="text" class="form-control" name="co2_emission"
                                                placeholder="Enter co2 Emission"
                                                value="<?= set_value('co2_emission') ?>">
                                            <small class="text-danger"><?= form_error('co2_emission') ?></small>
                                        </div> -->

                        </div>
                        <!-- Photos -->

                        <div class="form-group">
                            <h4>Features & Specifications</h4>
                        </div>

                        <div class="form-group-4">
                            <div class="form-group ">
                                <label for="winter_tires">Winter Tires <span class="text-danger">*</span></label>
                                <select class="form-control" name="winter_tires" id="winter_tires">
                                    <option value="">Select</option>
                                    <option value="Yes" <?= set_value('winter_tires') == 'Yes' ? 'selected' : '' ?>>Yes
                                    </option>
                                    <option value="No" <?= set_value('winter_tires') == 'No' ? 'selected' : '' ?>>No
                                    </option>
                                </select>
                                <small class="text-danger"><?= form_error('winter_tires') ?></small>
                            </div>

                            <div class="form-group  feature-car feature-bus" style="display:none;">
                                <label for="listing_title"> Climate Control / AC Type *</label>
                                <select name="ac_type" class="form-control" id="">
                                    <option value="">Select Climate Control Type</option>
                                    <option value="No AC"
                                        <?php if(set_value('ac_type')== 'No AC'){ echo "selected"; } ?>>No AC</option>
                                    <option value="Manual AC"
                                        <?php if(set_value('ac_type')== 'Manual AC'){ echo "selected"; } ?>>Manual AC
                                    </option>
                                    <option value="Automatic AC"
                                        <?php if(set_value('ac_type')== 'Automatic AC'){ echo "selected"; } ?>>Automatic
                                        AC</option>
                                    <option value="Dual-Zone Automatic AC"
                                        <?php if(set_value('ac_type')== 'Dual-Zone Automatic AC'){ echo "selected"; } ?>>
                                        Dual-Zone Automatic AC</option>
                                    <option value="Tri-Zone Automatic AC"
                                        <?php if(set_value('ac_type')== 'Tri-Zone Automatic AC'){ echo "selected"; } ?>>
                                        Tri-Zone Automatic AC</option>
                                    <option value="4-Zone Automatic AC"
                                        <?php if(set_value('ac_type')== '4-Zone Automatic AC'){ echo "selected"; } ?>>
                                        4-Zone Automatic AC</option>
                                </select>

                            </div>

                            <!-- <div class="form-group feature-car feature-bus" style="display:none;">
                                            <label for="listing_title"> 4x4*</label>
                                                    <select name="4x4" class="form-control" id="four_by_four">
                                                        <option value="">Select</option>
                                                        <option value="yes"  <?php if(set_value('4x4')== 'yes'){ echo "selected"; } ?> >Yes</option>
                                                        <option value="no"  <?php if(set_value('4x4')== 'no'){ echo "selected"; } ?> >No</option>
                                                    </select>
                                           
                                        </div> 

                                           <div class="form-group feature-car feature-bus" style="display:none;">
                                            <label for="listing_title"> Navigation System *</label>
                                                    <select name="navigation_system" class="form-control" id="">
                                                        <option value="">Select</option>
                                                        <option value="yes"  <?php if(set_value('navigation_system')== 'yes'){ echo "selected"; } ?> >Yes</option>
                                                        <option value="no"  <?php if(set_value('navigation_system')== 'no'){ echo "selected"; } ?> >No</option>
                                                    </select>
                                     
                                        </div> -->

                            <div class="form-group feature-car feature-bus" style="display:none;">
                                <label for="parking_sensors">Parking Sensors</label>
                                <select class="form-control" name="parking_sensors" class="form-control">
                                    <option value="">Select</option>
                                    <option value="None">None</option>
                                    <option value="Rear Only">Rear Only</option>
                                    <option value="Front Only">Front Only</option>
                                    <option value="Front and Rear">Front and Rear</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group">
                            <h4>Comfort & Interior Features</h4>
                        </div>
                        <div class="form-group-4">

                            <?php if(isset($comforts) && !empty($comforts)){ foreach($comforts as $comfort){ ?>
                            <div class="form-group">
                                <input type="checkbox" name="comfort_and_interior[]" value="<?= $comfort->name ?>"
                                    <?php if(set_value('comfort_and_interior')==  $comfort->name ){ echo "checked"; } ?>><?= $comfort->name ?>
                            </div>
                            <?php } } ?>
                        </div>

                        <div class="form-group">
                            <h4>Safety & Assistance</h4>
                        </div>
                        <div class="form-group-4">
                            <?php if(isset($safety_and_assistance) && !empty($safety_and_assistance)){ foreach($safety_and_assistance as $safety){ ?>
                            <div class="form-group">
                                <input type="checkbox" name="safety_and_assistance[]" value="<?= $safety->name ?>"
                                    <?php if(set_value('safety_and_assistance')==  $safety->name ){ echo "checked"; } ?>><?= $safety->name ?>
                            </div>
                            <?php }}  ?>
                        </div>

                        <div class="form-group">
                            <h4>Lighting & Visibility</h4>
                        </div>
                        <div class="form-group-4">
                            <?php if(isset($lighting_and_visibility) && !empty($lighting_and_visibility)){ foreach($lighting_and_visibility as $lighting){ ?>
                            <div class="form-group">
                                <input type="checkbox" name="lighting_and_visibility[]" value="<?= $lighting->name ?>"
                                    <?php if(set_value('lighting_and_visibility')==  $lighting->name ){ echo "checked"; } ?>><?= $lighting->name ?>
                            </div>
                            <?php } } ?>
                        </div>

                        <div class="form-group">
                            <h4>Multimedia & Navigation</h4>
                        </div>
                        <div class="form-group-4">
                            <?php if(isset($multimedia_and_navigation) && !empty($multimedia_and_navigation)){   foreach($multimedia_and_navigation as $multimedia){ ?>
                            <div class="form-group">
                                <input type="checkbox" name="multimedia_and_navigation[]"
                                    value="<?= $multimedia->name ?>"
                                    <?php if(set_value('multimedia_and_navigation')==  $multimedia->name ){ echo "checked"; } ?>><?= $multimedia->name ?>
                            </div>
                            <?php } } ?>
                        </div>

                        <div class="form-group">
                            <h4>Engine & Drive Technology</h4>
                        </div>
                        <div class="form-group-4">
                            <?php if(isset($engine_and_drive_technology) && !empty($engine_and_drive_technology)){   foreach($engine_and_drive_technology as $engine){ ?>
                            <div class="form-group">
                                <input type="checkbox" name="engine_and_drive_technology[]" value="<?= $engine->name ?>"
                                    <?php if(set_value('engine_and_drive_technology')==  $engine->name ){ echo "checked"; } ?>><?= $engine->name ?>
                            </div>
                            <?php } } ?>
                        </div>



                        <div class="form-group">
                            <h4>Exterior & Design</h4>
                        </div>
                        <div class="form-group-4">
                            <?php if(isset($exterior_and_design) && !empty($exterior_and_design)){   foreach($exterior_and_design as $exterior){ ?>
                            <div class="form-group">
                                <input type="checkbox" name="exterior[]" value="<?= $exterior->name ?>"
                                    <?php if(set_value('exterior')==  $exterior->name ){ echo "checked"; } ?>><?= $exterior->name ?>
                            </div>
                            <?php } } ?>
                        </div>



                        <div class="form-group">
                            <h4>Other Features & Extras</h4>
                        </div>
                        <div class="form-group-4">
                            <?php if(isset($other_features_and_extras) && !empty($other_features_and_extras)){    foreach($other_features_and_extras as $other){ ?>
                            <div class="form-group">
                                <input type="checkbox" name="other_features_and_extras[]" value="<?= $other->name ?>"
                                    <?php if(set_value('other_features_and_extras')==  $other->name ){ echo "checked"; } ?>><?= $other->name ?>
                            </div>
                            <?php } } ?>
                        </div>


                        <div class="form-group">
                            <h4>Pricing & Description</h4>
                        </div>
                        <div class="form-group-2">
                            <div class="form-group">
                                <label for="listing_title">Expected Price *</label>
                                <input type="text" class="form-control" name="price" placeholder="Enter Price"
                                    value="<?= set_value('price') ?>">

                                <small class="text-danger"><?= form_error('price') ?></small>

                            </div>

                            <!-- <div class="form-group">
                                        <label for="listing_title"> Is Price Negotiable *</label>
                                        <select name="is_negotiable" class="form-control" id="is_negotiable">
                                            <option value="">Select</option>
                                            <option value="yes"
                                                <?php if(set_value('is_negotiable')== 'yes'){ echo "selected"; } ?>>Yes
                                            </option>
                                            <option value="no"
                                                <?php if(set_value('is_negotiable')== 'no'){ echo "selected"; } ?>>No
                                            </option>
                                        </select>
                                        <small class="text-danger"><?= form_error('is_negotiable') ?></small>
                                    </div> -->
                        </div>

                        <!-- <div class="form-group">
                                    <label for="listing_title">Description</label>
                                    <textarea name="description" class="form-control" id="description"
                                        placeholder="Your Description..."><?= set_value('description') ?></textarea>

                                    <small class="text-danger"><?= form_error('description') ?></small>
                                </div> -->


                        <div class="form-group">
                            <h4>Location</h4>
                        </div>
                        <div class="form-group-4">
                            <div class="form-group">
                                <label for="listing_title">Canton *</label>

                                <select class="form-control" name="state" id="state">
                                    <option value="">Select Location</option>
                                    <?php  foreach($states as $state){?>
                                    <option value="<?= $state->id; ?>"
                                        <?php if(set_value('state')==$state->name){ echo "selected"; } ?>>
                                        <?= $state->name; ?>
                                    </option>
                                    <?php }?>
                                </select>

                                <small class="text-danger"><?= form_error('state') ?></small>
                            </div>


                            <div class="form-group">
                                <label for="listing_title">City/Town *</label>

                                <select class="form-control" name="location" id="city">
                                    <option value="">Select City</option>
                                    <?php  foreach($cities as $city){?>
                                    <option value="<?= $city->id; ?>"
                                        <?php if(set_value('location')==$city->city_name){ echo "selected"; } ?>>
                                        <?= $city->city_name; ?>
                                    </option>
                                    <?php }?>
                                </select>

                                <small class="text-danger"><?= form_error('location') ?></small>
                            </div>

                            <div class="form-group">
                                <label for="listing_title">Zipcode *</label>

                                <input type="text" class="form-control" name="zipcode" placeholder="Enter Zipcode"
                                    value="<?= set_value('zipcode') ?>">
                                <small class="text-danger"><?= form_error('zipcode') ?></small>
                            </div>


                        </div>

                        <!-- <div class="form-group">
                                    <h4>Upload Section</h4>
                                </div>
                                <div class="form-group-4">
                                    <div class="form-group">
                                        <label for="photos">Upload Photos</label>
                                        <input type="file" accept="image/*" class="form-control" name="photos[]"
                                            id="photos" multiple>
                                    </div>

                                    <div class="form-group">
                                        <label for="emission_certificate">Emission Certificate</label>
                                        <input type="file" class="form-control" name="emission_certificate"
                                            id="emission_certificate">
                                    </div>


                                </div> -->

                    </div>

                    <div class="group-button-submit mb-2">

                        <button type="submit" class="second-btn">Submit</button>
                    </div>

                </form>
            </div>

        </div>
    </div>


    <?php include('footer.php'); ?>


    <script>
    $('#filter_by_location').on('change', function() {
        // console.log('hello');
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