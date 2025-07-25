<!DOCTYPE html>

<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en-US" lang="en-US">

<head>
    <meta charset="utf-8">
    <title>AutoKorb</title>

    <meta name="author" content="themesflat.com">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

    <link rel="stylesheet" href="<?= base_url();?>/assets/app/css/font-awesome.css">
    <link rel="stylesheet" href="<?= base_url();?>/assets/app/css/styles.css">

    <!-- Favicon and Touch Icons  -->
    <link rel="shortcut icon" href="<?= base_url();?>/assets/assets/images/logo/favicon.jpeg">
    <link rel="apple-touch-icon-precomposed" href="<?= base_url();?>/assets/assets/images/logo/favicon.jpeg">
    <style>
    /* Show submenu on parent click/hover */
  .has-submenu > a.active {
    background-color: #FF7101; /* or your active color */
    color: #fff;
    }
    .submenu {
        display: none;
    }
    .has-submenu.open > .submenu {
        display: block;
    }

    
/* .sidebar-dashboard .db-list-menu ul li a:hover, .sidebar-dashboard .db-list-menu .has-submenu ul li a.active{
 background-color: white; 
} */
    </style>

</head>

<script>
document.addEventListener('DOMContentLoaded', function() {
    // ...existing code...
    document.querySelectorAll('.has-submenu > a').forEach(function(parentLink) {
        parentLink.addEventListener('click', function(e) {
            e.preventDefault();
            e.stopPropagation(); 
            var li = this.parentElement;
            li.classList.toggle('open');
            var submenu = li.querySelector('.submenu');
            if (submenu) {
                submenu.style.display = li.classList.contains('open') ? 'block' : 'none';
            }
        });
    });

    // Prevent submenu link clicks from closing the parent menu
    document.querySelectorAll('.has-submenu .submenu a').forEach(function(subLink) {
        subLink.addEventListener('click', function(e) {
            e.stopPropagation(); // Prevent bubbling to parent <a>
        });
    });
});
</script>

<body class="body">

    <!-- dashboard -->
    <div class="dashboard-overlay"></div>
    <aside class="sidebar-dashboard">
        <div class="db-content db-logo pad-30">
            <a href="<?= base_url('dealer'); ?>" title="autodecar">
                <img class="site-logo" src="<?= base_url();?>/assets/assets/images/dashboard/tlogo.png" alt="autodecar">
            </a>
        </div>

        <div class="db-content db-author pad-30">
            <h6 class="db-title">Profile</h6>
            <div class="author">
                <div class="avatar">
                    <img loading="lazy" id="tfre_avatar_thumbnail"
                        src="<?= base_url();?>/assets/assets/images/dashboard/avatar.png" alt="admin" title="admin">
                </div>
                <div class="content">
                    <div class="name"><?= $_SESSION['role_name']; ?></div>
                    <div class="author-email">
               <?= $_SESSION['email']; ?></div>
                </div>
            </div>
        </div>

        <div class="db-content db-list-menu">
            <h6 class="db-title">Menu</h6>
            <div class="db-dashboard-menu">
                <ul>
                    <li>
                        <a href="<?= base_url('dealer'); ?>" class="<?= $this->uri->segment(1) == 'dealer' ? 'active' : ''; ?> menu-index-1">
                            <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" viewBox="0 0 22 22"
                                fill="none">
                                <g opacity="0.2">
                                    <path d="M6.92479 9.35156V15.64" stroke="#F1FAEE" stroke-width="1.5"
                                        stroke-linecap="round" stroke-linejoin="round" />
                                    <path d="M11.2021 6.34375V15.6412" stroke="#F1FAEE" stroke-width="1.5"
                                        stroke-linecap="round" stroke-linejoin="round" />
                                    <path d="M15.4092 12.6758V15.6412" stroke="#F1FAEE" stroke-width="1.5"
                                        stroke-linecap="round" stroke-linejoin="round" />
                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                        d="M15.4619 1.83398H6.87143C3.87698 1.83398 2 3.95339 2 6.95371V15.0476C2 18.0479 3.86825 20.1673 6.87143 20.1673H15.4619C18.4651 20.1673 20.3333 18.0479 20.3333 15.0476V6.95371C20.3333 3.95339 18.4651 1.83398 15.4619 1.83398Z"
                                        stroke="#F1FAEE" stroke-width="1.5" stroke-linecap="round"
                                        stroke-linejoin="round" />
                                </g>
                            </svg> Dashboard </a>
                    </li>
                    <li>
                        <a href="<?= base_url('dealer/my-listing'); ?>" class="<?= $this->uri->segment(2) == 'my-listing' ? 'active' : ''; ?> menu-index-2">
                            <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" viewBox="0 0 22 22"
                                fill="none">
                                <g opacity="0.2">
                                    <path
                                        d="M10.0135 2.55687H6.58608C3.76733 2.55687 2 4.55245 2 7.37762V14.9988C2 17.824 3.75908 19.8195 6.58608 19.8195H14.6747C17.5027 19.8195 19.2617 17.824 19.2617 14.9988V11.3065"
                                        stroke="#F1FAEE" stroke-width="1.5" stroke-linecap="round"
                                        stroke-linejoin="round" />
                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                        d="M7.57059 10.0111L14.4208 3.16086C15.2743 2.30836 16.6575 2.30836 17.5109 3.16086L18.6265 4.27644C19.4799 5.12986 19.4799 6.51403 18.6265 7.36653L11.7433 14.2498C11.3702 14.6229 10.8642 14.8328 10.3362 14.8328H6.90234L6.98851 11.3678C7.00134 10.8581 7.20943 10.3723 7.57059 10.0111Z"
                                        stroke="#F1FAEE" stroke-width="1.5" stroke-linecap="round"
                                        stroke-linejoin="round" />
                                    <path d="M13.3789 4.21875L17.5644 8.40425" stroke="#F1FAEE" stroke-width="1.5"
                                        stroke-linecap="round" stroke-linejoin="round" />
                                </g>
                            </svg>Car List </a>
                    </li>


                    <li>
                        <a href="<?= base_url('dealer/bulk-upload-view'); ?>" class="<?= $this->uri->segment(2) == 'bulk-upload-view' ? 'active' : ''; ?> menu-index-2">
                            <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" viewBox="0 0 22 22"
                                fill="none">
                                <g opacity="0.2">
                                    <path
                                        d="M10.0135 2.55687H6.58608C3.76733 2.55687 2 4.55245 2 7.37762V14.9988C2 17.824 3.75908 19.8195 6.58608 19.8195H14.6747C17.5027 19.8195 19.2617 17.824 19.2617 14.9988V11.3065"
                                        stroke="#F1FAEE" stroke-width="1.5" stroke-linecap="round"
                                        stroke-linejoin="round" />
                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                        d="M7.57059 10.0111L14.4208 3.16086C15.2743 2.30836 16.6575 2.30836 17.5109 3.16086L18.6265 4.27644C19.4799 5.12986 19.4799 6.51403 18.6265 7.36653L11.7433 14.2498C11.3702 14.6229 10.8642 14.8328 10.3362 14.8328H6.90234L6.98851 11.3678C7.00134 10.8581 7.20943 10.3723 7.57059 10.0111Z"
                                        stroke="#F1FAEE" stroke-width="1.5" stroke-linecap="round"
                                        stroke-linejoin="round" />
                                    <path d="M13.3789 4.21875L17.5644 8.40425" stroke="#F1FAEE" stroke-width="1.5"
                                        stroke-linecap="round" stroke-linejoin="round" />
                                </g>
                            </svg>Vehicle Bulk Upload</a>
                    </li>



                    <!-- Vehicle Attributes Parent Menu -->
                   <?php
                        $vehicleAttrActive = in_array($this->uri->segment(2), ['add-model', 'add-make', 'add-transmission', 'add-fuel-type']);
                        ?>
                        <li class="has-submenu <?= $vehicleAttrActive ? 'open' : ''; ?>">
                        <a href="javascript:void(0);" class="menu-index-3 <?= $vehicleAttrActive ? 'active' : ''; ?>">
                            <!-- svg ... -->
                            Vehicle Attributes
                            <span style="float:right;">&#9662;</span>
                        </a>
                        <ul class="submenu">
                            <li><a href="<?= base_url('dealer/add-model'); ?>" class="<?= $this->uri->segment(2) == 'add-model' ? 'active' : ''; ?>">Add Models</a></li>
                            <li><a href="<?= base_url('dealer/add-make'); ?>" class="<?= $this->uri->segment(2) == 'add-make' ? 'active' : ''; ?>">Add Make</a></li>
                            <li><a href="<?= base_url('dealer/add-transmission'); ?>" class="<?= $this->uri->segment(2) == 'add-transmission' ? 'active' : ''; ?>">Add Transmission</a></li>
                            <li><a href="<?= base_url('dealer/add-fuel-type'); ?>" class="<?= $this->uri->segment(2) == 'add-fuel-type' ? 'active' : ''; ?>">Add Fuel Type</a></li>
                        </ul>
                    </li>
                    <!-- End Vehicle Attributes Parent Menu -->


                    <!-- <li>
                        <a href="<?= base_url('dealer/message'); ?>" class="<?= $this->uri->segment(2) == 'message' ? 'active' : ''; ?> menu-index-7">
                            <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" viewBox="0 0 22 22"
                                fill="none">
                                <g opacity="0.2">
                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                        d="M17.6487 17.4814C14.8473 20.2831 10.699 20.8885 7.30422 19.3185C6.80306 19.1167 6.39219 18.9537 6.00159 18.9537C4.91361 18.9601 3.5594 20.015 2.85558 19.3121C2.15176 18.6082 3.20749 17.2529 3.20749 16.1583C3.20749 15.7677 3.05088 15.3641 2.84913 14.862C1.27843 11.4678 1.8846 7.31811 4.68607 4.51726C8.2623 0.939714 14.0725 0.939714 17.6487 4.51634C21.2314 8.09941 21.225 13.9047 17.6487 17.4814Z"
                                        stroke="#F1FAEE" stroke-width="1.5" stroke-linecap="round"
                                        stroke-linejoin="round" />
                                    <path d="M14.7784 11.3802H14.7867" stroke="#F1FAEE" stroke-width="2"
                                        stroke-linecap="round" stroke-linejoin="round" />
                                    <path d="M11.1026 11.3802H11.1109" stroke="#F1FAEE" stroke-width="2"
                                        stroke-linecap="round" stroke-linejoin="round" />
                                    <path d="M7.42686 11.3802H7.43511" stroke="#F1FAEE" stroke-width="2"
                                        stroke-linecap="round" stroke-linejoin="round" />
                                </g>
                            </svg>Message <span class="count-page">7</span></a>
                    </li> -->
                    <!-- <li>
                        <a href="<?= base_url('dealer/my-review'); ?>" class="<?= $this->uri->segment(2) == 'my-review' ? 'active' : ''; ?> menu-index-8">
                            <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" viewBox="0 0 22 22"
                                fill="none">
                                <g opacity="0.2">
                                    <path
                                        d="M16.5756 8.11328L12.5026 11.4252C11.7331 12.0357 10.6504 12.0357 9.88082 11.4252L5.77344 8.11328"
                                        stroke="white" stroke-width="1.5" stroke-linecap="round"
                                        stroke-linejoin="round" />
                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                        d="M15.6665 19.25C18.4544 19.2577 20.3333 16.9671 20.3333 14.1518V7.85584C20.3333 5.04059 18.4544 2.75 15.6665 2.75H6.66687C3.87897 2.75 2 5.04059 2 7.85584V14.1518C2 16.9671 3.87897 19.2577 6.66687 19.25H15.6665Z"
                                        stroke="white" stroke-width="1.5" stroke-linecap="round"
                                        stroke-linejoin="round" />
                                </g>
                            </svg>My Reviews </a>
                    </li> -->
                    <li>
                        <a href="<?= base_url('dealer/my-profile'); ?>" class="<?= $this->uri->segment(2) == 'my-profile' ? 'active' : ''; ?> menu-index-9">
                            <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" viewBox="0 0 22 22"
                                fill="none">
                                <g opacity="0.2">
                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                        d="M10.5729 14.0684C7.02762 14.0684 4 14.6044 4 16.7511C4 18.8979 7.00841 19.4531 10.5729 19.4531C14.1183 19.4531 17.145 18.9162 17.145 16.7703C17.145 14.6245 14.1375 14.0684 10.5729 14.0684Z"
                                        stroke="#F1FAEE" stroke-width="1.5" stroke-linecap="round"
                                        stroke-linejoin="round" />
                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                        d="M10.5726 11.0056C12.8992 11.0056 14.7849 9.11897 14.7849 6.79238C14.7849 4.46579 12.8992 2.58008 10.5726 2.58008C8.24599 2.58008 6.3594 4.46579 6.3594 6.79238C6.35154 9.11111 8.22503 10.9977 10.5429 11.0056H10.5726Z"
                                        stroke="#F1FAEE" stroke-width="1.42857" stroke-linecap="round"
                                        stroke-linejoin="round" />
                                </g>
                            </svg>Profile </a>
                    </li>
                    <li>
                        <a href="<?= base_url('dealer/change-password'); ?>" class="<?= $this->uri->segment(2) == 'change-password' ? 'active' : ''; ?> menu-index-10">
                            <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" viewBox="0 0 22 22"
                                fill="none">
                                <g opacity="0.2">
                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                        d="M19.0674 6.98797L18.4969 5.99788C18.0142 5.16012 16.9445 4.87111 16.1056 5.35181V5.35181C15.7062 5.58705 15.2297 5.65379 14.7811 5.53732C14.3325 5.42084 13.9487 5.13071 13.7143 4.73091C13.5634 4.47679 13.4824 4.18735 13.4793 3.89186V3.89186C13.4929 3.41811 13.3142 2.95902 12.9838 2.61918C12.6535 2.27935 12.1996 2.0877 11.7257 2.08789H10.5762C10.1119 2.08789 9.66669 2.27291 9.33915 2.60202C9.01161 2.93113 8.82873 3.3772 8.83096 3.84151V3.84151C8.8172 4.80017 8.03609 5.57006 7.07733 5.56997C6.78184 5.5669 6.4924 5.48585 6.23828 5.33503V5.33503C5.39937 4.85433 4.32967 5.14334 3.84698 5.9811L3.23447 6.98797C2.75236 7.82468 3.03743 8.89371 3.87215 9.37927V9.37927C4.41473 9.69252 4.74897 10.2714 4.74897 10.898C4.74897 11.5245 4.41473 12.1034 3.87215 12.4166V12.4166C3.03849 12.8989 2.75311 13.9654 3.23447 14.7996V14.7996L3.81341 15.798C4.03958 16.2061 4.41904 16.5073 4.86783 16.6348C5.31662 16.7624 5.79774 16.7058 6.20472 16.4777V16.4777C6.60481 16.2442 7.08157 16.1803 7.52904 16.3C7.97652 16.4197 8.35761 16.7133 8.58763 17.1154C8.73845 17.3695 8.8195 17.6589 8.82257 17.9544V17.9544C8.82257 18.9229 9.60769 19.708 10.5762 19.708H11.7257C12.6909 19.708 13.4747 18.928 13.4793 17.9628V17.9628C13.4771 17.497 13.6611 17.0497 13.9905 16.7203C14.3198 16.391 14.7672 16.2069 15.2329 16.2092C15.5277 16.2171 15.816 16.2978 16.072 16.4441V16.4441C16.9087 16.9262 17.9777 16.6411 18.4633 15.8064V15.8064L19.0674 14.7996C19.3013 14.3982 19.3654 13.9202 19.2457 13.4713C19.1261 13.0225 18.8324 12.6399 18.4297 12.4083V12.4083C18.0271 12.1766 17.7334 11.794 17.6137 11.3452C17.494 10.8964 17.5582 10.4183 17.7921 10.017C17.9441 9.75146 18.1642 9.53133 18.4297 9.37927V9.37927C19.2594 8.89397 19.5439 7.83119 19.0674 6.99636V6.99636V6.98797Z"
                                        stroke="#F1FAEE" stroke-width="1.5" stroke-linecap="round"
                                        stroke-linejoin="round" />
                                    <ellipse cx="11.1548" cy="10.8989" rx="2.41648" ry="2.41648" stroke="#F1FAEE"
                                        stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                </g>
                            </svg>Change passwords </a>
                    </li>
                    <li>
                        <a href="<?= base_url('logout'); ?>" class="<?= $this->uri->segment(2) == 'logout' ? 'active' : ''; ?> menu-index-11">
                            <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" viewBox="0 0 22 22"
                                fill="none">
                                <g opacity="0.2">
                                    <path
                                        d="M13.2237 6.77418V5.91893C13.2237 4.05352 11.7112 2.54102 9.84575 2.54102H5.377C3.5125 2.54102 2 4.05352 2 5.91893V16.1214C2 17.9868 3.5125 19.4993 5.377 19.4993H9.85492C11.7148 19.4993 13.2237 17.9914 13.2237 16.1315V15.2671"
                                        stroke="#F1FAEE" stroke-width="1.5" stroke-linecap="round"
                                        stroke-linejoin="round" />
                                    <path d="M19.4516 11.0208H8.41406" stroke="#F1FAEE" stroke-width="1.5"
                                        stroke-linecap="round" stroke-linejoin="round" />
                                    <path d="M16.7656 8.34766L19.4496 11.0197L16.7656 13.6927" stroke="#F1FAEE"
                                        stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                </g>
                            </svg>Logout </a>
                    </li>
                </ul>
            </div>
        </div>

    </aside>

    <div id="wrapper-dashboard">
        <div id="pagee" class="clearfix">