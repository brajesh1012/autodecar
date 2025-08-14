 <style>
     .custom-modal-forgot {
         display: none;
         position: fixed;
         z-index: 1000;
         left: 0;
         top: 0;
         width: 100%;
         height: 100%;
         background-color: rgba(0, 0, 0, 0.4);
     }

     .custom-modal-content-forgot {
         background-color: #FFFFFF;
         margin: 15% auto;
         padding: 20px;
         /* border-radius: 8px; */
         width: 500px;
         /* box-shadow: 0 0 10px rgba(0,0,0,0.2); */
     }

     .custom-modal-close-forgot {
         color: #aaa;
         float: right;
         font-size: 20px;
         font-weight: bold;
         cursor: pointer;
     }

     .custom-modal-close-forgot:hover {
         color: #000;
     }


     .flash-message {
         background-color: #e6f7ff;
         color: #0066cc;
         padding: 10px;
         margin-bottom: 10px;
         border-radius: 5px;
         text-align: center;
         font-weight: bold;
     }

     .weglot-container {
         display: none !important;
     }
 </style>

 <!-- Footer -->
 <footer id="footer" class="clearfix home">
     <div class="container">
         <div class="footer-top d-flex justify-content-center">
         <select class="form-select language-select text-white" id="custom_translate_select" name="language">
                                            <option value="en">English</option>
                                            <option value="de">German</option>
                                            <option value="fr">French</option>
                                            <option value="it">Italian</option>
                                        </select>

                                        <!-- ✅ Hidden container just to initialize Google Translate -->
                                        <div id="google_translate_element" style="display: none;"></div>
         </div>
         <div class="footer-main">
             <div class="d-flex justify-content-evenly align-items-center">
                 <!-- <div> -->
                     <!-- <label class="form-label fw-bold">Language</label> -->
                     <!-- <div id="google_translate_element" style="margin-top: 15px;"></div>  -->
                     <!-- <select class="form-select bg-dark text-white" name="language">
                         <option value="">German</option>
                         <option value="en">English</option>

                         <option value="fr">French</option>

                         <option value="es">Italian</option>
                     </select> -->
                     <!-- </div>
                    <a href="<?= base_url('about-us'); ?>">About Us</a>
                    <a href="<?= base_url('contact'); ?>">Contact Us</a>
                    <a href="#">Compare</a>
            </div> -->
                     <!-- <div class="row">
                 <div class="col-lg-3 col-sm-6 col-12">
                     <div class="widget widget-menu footer-col-block">
                         <div class="footer-heading-desktop">
                             <h4>About Auto Decar</h4>
                         </div>
                         <div class="footer-heading-mobie">
                             <h4>About Auto Decar</h4>
                         </div>
                         <ul class="box-menu tf-collapse-content">
                             <li><a href="#">About us</a></li>
                             <li><a href="#">Careers With Us</a></li>
                             <li><a href="#">Terms & Conditions</a></li>
                             <li><a href="#">Privacy Policy</a></li>
                             <li><a href="#">Corporate Policies</a></li>
                             <li><a href="#">Investors</a></li>
                             <li><a href="<?= base_url('faq'); ?>">FAQs</a></li>
                         </ul>
                     </div>
                 </div>

                 <div class="col-lg-3 col-sm-6 col-12">
                     <div class="widget widget-menu footer-col-block">
                         <div class="footer-heading-desktop">
                             <h4>Popular used car</h4>
                         </div>
                         <div class="footer-heading-mobie">
                             <h4>Popular used car</h4>
                         </div>
                         <ul class="box-menu tf-collapse-content">
                             <li><a href="#">Chevrolet</a></li>
                             <li><a href="#">Land Rover</a></li>
                             <li><a href="#">Tesla</a></li>
                             <li><a href="#">Volkswagen</a></li>
                             <li><a href="#">Honda</a></li>
                             <li><a href="#">Hyundai</a></li>
                             <li><a href="#">Mercedes benz</a></li>
                         </ul>
                     </div>
                 </div>

                 <div class="col-lg-3 col-sm-6 col-12">
                     <div class="widget widget-menu footer-col-block">
                         <div class="footer-heading-desktop">
                             <h4>Other</h4>
                         </div>
                         <div class="footer-heading-mobie">
                             <h4>Other</h4>
                         </div>
                         <ul class="box-menu tf-collapse-content">
                             <li><a href="#">How it work</a></li>
                             <li><a href="#">Terms and Conditions</a></li>
                             <li><a href="#">Privacy Policy</a></li>
                             <li><a href="#">Copyrights</a></li>
                             <li><a href="#">Help center</a></li>
                             <li><a href="#">Car sales trends</a></li>
                             <li><a href="#">Personal loan</a></li>
                         </ul>
                     </div>
                 </div>

                 <div class="col-lg-3 col-sm-6 col-12 ">
                     <div class="widget widget-menu widget-form footer-col-block">
                         <div class="footer-heading-desktop">
                             <h4>Newsletter</h4>
                         </div>
                         <div class="footer-heading-mobie">
                             <h4>Newsletter</h4>
                         </div>
                         <div class="tf-collapse-content">
                             <form method="post" class="comment-form form-submit" action="#" accept-charset="utf-8">
                                 <p class="font-2">Stay on top of the latest car trends, tips, and tricks for
                                     selling your car.</p>
                                 <div class="text-wrap clearfix">
                                     <fieldset class="email-wrap style-text">
                                         <input type="email" class="tb-my-input" name="email"
                                             placeholder="Your email address" required="">
                                     </fieldset>
                                 </div>
                                 <button name="submit" type="submit" class="button btn-submit-comment btn-1 btn-8">
                                     <span>Send</span>
                                 </button>
                             </form>
                         </div>

                     </div>
                 </div>
             </div> -->
                 <!-- </div> -->
                 <div class="footer-bottom">
                     <div class="row">
                         <!-- <div class="col-lg-4 col-md-12">
                     <div class="logo-footer style box-1">
                         <a href="index.html">
                             <img class="lazyload"
                                 data-src="<?= base_url(); ?>/assets/assets/images/logo/logo-footer@2x.png"
                                 src="<?= base_url(); ?>/assets/assets/images/logo/logo-footer@2x.png" alt="img"
                                 width="225" height="40">
                         </a>
                     </div>
                 </div> -->
                         <div class="col-lg-8 col-md-12">
                             <div class="footer-bottom-right flex-six flex-wrap ">
                                 <div class="title-bottom center">© 2024 Auto Decar. All rights reserved</div>
                                 <div class="icon-social box-3 text-color-1">
                                     <a href="#"><i class="icon-autodeal-facebook"></i></a>
                                     <a href="#"><i class="icon-autodeal-linkedin"></i></a>
                                     <!-- <a href="#"><i class="icon-autodeal-twitter"></i></a> -->
                                     <a href="#"><i class="icon-autodeal-instagram"></i></a>
                                     <a href="#"><i class="icon-autodeal-youtube"></i></a>
                                 </div>
                             </div>
                         </div>
                     </div>
                 </div>
             </div>
 </footer><!-- /#footer -->

 <!-- Bottom -->
 </div>
 <!-- /#page -->

 </div>

 <!-- Modal Popup Bid -->

 <div class="modal fade popup login-form" id="popup_bid" tabindex="-1" aria-hidden="true">
     <div class="modal-dialog modal-dialog-centered" role="document">
         <div class="modal-content">
             <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                 <span aria-hidden="true">&times;</span>
             </button>
             <div class="modal-body space-y-20 pd-40">
                 <div class="wrap-modal flex">
                     <div class="images flex-none">
                         <img src="<?= base_url(); ?>/assets/assets/images/section/login.jpg" alt="images">
                     </div>
                     <div class="content">
                         <h1 class="title-login">Login</h1>
                         <div class="comments">
                             <div class="respond-comment">
                                 <div id="loginMsg"></div>
                                 <form method="POST" class="comment-form form-submit" id="loginForm"
                                     accept-charset="utf-8">
                                     <fieldset class="">
                                         <label class="fw-6">Email</label>
                                         <input type="text" id="text" class="tb-my-input" name="email"
                                             placeholder="Your Email" required="">
                                         <div class="icon">
                                             <svg width="18" height="18" viewBox="0 0 18 18" fill="none"
                                                 xmlns="http://www.w3.org/2000/svg">
                                                 <path
                                                     d="M11.8127 4.5C11.8127 5.24592 11.5164 5.96129 10.989 6.48874C10.4615 7.01618 9.74615 7.3125 9.00023 7.3125C8.25431 7.3125 7.53893 7.01618 7.01149 6.48874C6.48404 5.96129 6.18773 5.24592 6.18773 4.5C6.18773 3.75408 6.48404 3.03871 7.01149 2.51126C7.53893 1.98382 8.25431 1.6875 9.00023 1.6875C9.74615 1.6875 10.4615 1.98382 10.989 2.51126C11.5164 3.03871 11.8127 3.75408 11.8127 4.5ZM3.37598 15.0885C3.40008 13.6128 4.00323 12.2056 5.05536 11.1705C6.10749 10.1354 7.52429 9.55535 9.00023 9.55535C10.4762 9.55535 11.893 10.1354 12.9451 11.1705C13.9972 12.2056 14.6004 13.6128 14.6245 15.0885C12.86 15.8976 10.9413 16.3151 9.00023 16.3125C6.99323 16.3125 5.08823 15.8745 3.37598 15.0885Z"
                                                     stroke="#B6B6B6" stroke-width="1.5" stroke-linecap="round"
                                                     stroke-linejoin="round" />
                                             </svg>
                                         </div>
                                     </fieldset>
                                     <fieldset class="style-wrap">
                                         <label class="fw-6">Password</label>
                                         <input type="password" name="password" class="input-form password-input"
                                             placeholder="Your password">
                                         <div class="icon">
                                             <svg width="18" height="18" viewBox="0 0 18 18" fill="none"
                                                 xmlns="http://www.w3.org/2000/svg">
                                                 <path
                                                     d="M12.375 7.875V5.0625C12.375 4.16739 12.0194 3.30895 11.3865 2.67601C10.7535 2.04308 9.89511 1.6875 9 1.6875C8.10489 1.6875 7.24645 2.04308 6.61351 2.67601C5.98058 3.30895 5.625 4.16739 5.625 5.0625V7.875M5.0625 16.3125H12.9375C13.3851 16.3125 13.8143 16.1347 14.1307 15.8182C14.4472 15.5018 14.625 15.0726 14.625 14.625V9.5625C14.625 9.11495 14.4472 8.68573 14.1307 8.36926C13.8143 8.05279 13.3851 7.875 12.9375 7.875H5.0625C4.61495 7.875 4.18573 8.05279 3.86926 8.36926C3.55279 8.68573 3.375 9.11495 3.375 9.5625V14.625C3.375 15.0726 3.55279 15.5018 3.86926 15.8182C4.18573 16.1347 4.61495 16.3125 5.0625 16.3125Z"
                                                     stroke="#B6B6B6" stroke-width="1.5" stroke-linecap="round"
                                                     stroke-linejoin="round" />
                                             </svg>
                                         </div>
                                     </fieldset>
                                     <!-- <div class="title-forgot"><a class="fs-14 fw-4" href="javascript:void(0);" id="forgotLink" >Forgot password</a> </div> -->

                                     <div class="forgot-password-trigger">
                                         <a class="fs-14 fw-4" href="javascript:void(0);"
                                             id="openForgotPasswordModal">Forgot password</a>
                                     </div>
                                     <button class="sc-button" name="submit" type="submit">
                                         <span>Login</span>
                                     </button>
                                 </form>
                             </div>
                         </div>
                         <div class="text-box text-center fs-14">Don’t you have an account? <a
                                 class="font-2 fw-7 fs-14 color-popup text-color-3" data-toggle="modal"
                                 data-target="#popup_bid2" data-dismiss="modal" aria-label="Close">Register</a></div>
                         <!-- <p class="texts line fs-12 text-center">or login with</p>
                        <div class="button-box flex">
                            <a href="#" class="flex align-center">
                                <svg width="20" height="21" viewBox="0 0 20 21" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M4.43242 12.5863L3.73625 15.1852L1.19176 15.239C0.431328 13.8286 0 12.2149 0 10.5C0 8.84179 0.403281 7.27804 1.11812 5.90112H1.11867L3.38398 6.31644L4.37633 8.56815C4.16863 9.17366 4.05543 9.82366 4.05543 10.5C4.05551 11.2341 4.18848 11.9374 4.43242 12.5863Z"
                                        fill="#FBBB00" />
                                    <path
                                        d="M19.8242 8.6319C19.939 9.23682 19.9989 9.86155 19.9989 10.5C19.9989 11.216 19.9236 11.9143 19.7802 12.588C19.2934 14.8803 18.0214 16.8819 16.2594 18.2984L16.2588 18.2978L13.4055 18.1522L13.0017 15.6314C14.1709 14.9456 15.0847 13.8726 15.566 12.588H10.2188V8.6319H19.8242Z"
                                        fill="#518EF8" />
                                    <path
                                        d="M16.2595 18.2978L16.2601 18.2984C14.5464 19.6758 12.3694 20.5 9.99965 20.5C6.19141 20.5 2.88043 18.3715 1.19141 15.239L4.43207 12.5863C5.27656 14.8401 7.45074 16.4445 9.99965 16.4445C11.0952 16.4445 12.1216 16.1484 13.0024 15.6313L16.2595 18.2978Z"
                                        fill="#28B446" />
                                    <path
                                        d="M16.382 2.80219L13.1425 5.45437C12.2309 4.88461 11.1534 4.55547 9.99906 4.55547C7.39246 4.55547 5.17762 6.23348 4.37543 8.56812L1.11773 5.90109H1.11719C2.78148 2.6923 6.13422 0.5 9.99906 0.5C12.4254 0.5 14.6502 1.3643 16.382 2.80219Z"
                                        fill="#F14336" />
                                </svg>
                                <span class="fw-6">Google</span>
                            </a>
                            <a href="#" class="flex align-center">
                                <svg width="21" height="21" viewBox="0 0 21 21" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M20.5 10.5C20.5 15.4914 16.843 19.6285 12.0625 20.3785V13.3906H14.3926L14.8359 10.5H12.0625V8.62422C12.0625 7.8332 12.45 7.0625 13.6922 7.0625H14.9531V4.60156C14.9531 4.60156 13.8086 4.40625 12.7145 4.40625C10.4305 4.40625 8.9375 5.79063 8.9375 8.29688V10.5H6.39844V13.3906H8.9375V20.3785C4.15703 19.6285 0.5 15.4914 0.5 10.5C0.5 4.97734 4.97734 0.5 10.5 0.5C16.0227 0.5 20.5 4.97734 20.5 10.5Z"
                                        fill="#1877F2" />
                                    <path
                                        d="M14.3926 13.3906L14.8359 10.5H12.0625V8.62418C12.0625 7.83336 12.4499 7.0625 13.6921 7.0625H14.9531V4.60156C14.9531 4.60156 13.8088 4.40625 12.7146 4.40625C10.4304 4.40625 8.9375 5.79063 8.9375 8.29688V10.5H6.39844V13.3906H8.9375V20.3785C9.44664 20.4584 9.96844 20.5 10.5 20.5C11.0316 20.5 11.5534 20.4584 12.0625 20.3785V13.3906H14.3926Z"
                                        fill="white" />
                                </svg>
                                <span class="fw-6">Facebook</span>
                            </a>
                        </div> -->
                     </div>
                 </div>
             </div>
         </div>
     </div>
 </div>

 <div class="modal fade popup login-form" id="popup_bid2" tabindex="-1" role="dialog" aria-hidden="true">
     <div class="modal-dialog modal-dialog-centered" role="document">
         <div class="modal-content ">
             <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                 <span aria-hidden="true">&times;</span>
             </button>
             <div class="modal-body space-y-20 pd-40 style2">
                 <div class="wrap-modal flex">
                     <div class="images flex-none relative">
                         <img class="lazyload" data-src="<?= base_url(); ?>/assets/assets/images/section/register.jpg"
                             src="<?= base_url(); ?>/assets/assets/images/section/register.jpg" alt="images">
                     </div>
                     <div class="content">

                         <h1 class="title-login">Register</h1>
                         <div class="comments">
                             <div class="respond-comment">
                                 <div id="modalMsg"></div>

                                 <form method="POST" class="comment-form form-submit" id="registerForm"
                                     accept-charset="utf-8" novalidate="novalidate" autocomplete="off">
                                     <?php $roles = $this->db->where('type !=', 1)->get('roles')->result_array(); ?>
                                     <fieldset class="">
                                         <div class="form-group-1 flex radio-wrap">
                                             <?php foreach ($roles as $index => $role) {
                                                    $id = 'role_' . $index; // unique ID for each radio
                                                ?>
                                                 <div class="group">
                                                     <label for="<?= $id ?>"> <input type="radio" id="<?= $id ?>" value="<?= $role['id']; ?>"
                                                             name="role">
                                                         <?= $role['role'] ?></label>
                                                     &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                                 </div>
                                             <?php } ?>
                                         </div>

                                         <small id="role_error" class="text-danger"></small>
                                         <!-- <div class="icon">
                                            <svg width="18" height="18" viewBox="0 0 18 18" fill="none"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M11.8127 4.5C11.8127 5.24592 11.5164 5.96129 10.989 6.48874C10.4615 7.01618 9.74615 7.3125 9.00023 7.3125C8.25431 7.3125 7.53893 7.01618 7.01149 6.48874C6.48404 5.96129 6.18773 5.24592 6.18773 4.5C6.18773 3.75408 6.48404 3.03871 7.01149 2.51126C7.53893 1.98382 8.25431 1.6875 9.00023 1.6875C9.74615 1.6875 10.4615 1.98382 10.989 2.51126C11.5164 3.03871 11.8127 3.75408 11.8127 4.5ZM3.37598 15.0885C3.40008 13.6128 4.00323 12.2056 5.05536 11.1705C6.10749 10.1354 7.52429 9.55535 9.00023 9.55535C10.4762 9.55535 11.893 10.1354 12.9451 11.1705C13.9972 12.2056 14.6004 13.6128 14.6245 15.0885C12.86 15.8976 10.9413 16.3151 9.00023 16.3125C6.99323 16.3125 5.08823 15.8745 3.37598 15.0885Z"
                                                    stroke="#B6B6B6" stroke-width="1.5" stroke-linecap="round"
                                                    stroke-linejoin="round" />
                                            </svg>
                                        </div> -->
                                     </fieldset>

                                     <fieldset class="">
                                         <label class="fw-6">User name</label>
                                         <input type="text" class="tb-my-input" name="username" placeholder="User name">
                                         <small id="username_error" class="text-danger"></small>
                                         <div class="icon">
                                             <svg width="18" height="18" viewBox="0 0 18 18" fill="none"
                                                 xmlns="http://www.w3.org/2000/svg">
                                                 <path
                                                     d="M11.8127 4.5C11.8127 5.24592 11.5164 5.96129 10.989 6.48874C10.4615 7.01618 9.74615 7.3125 9.00023 7.3125C8.25431 7.3125 7.53893 7.01618 7.01149 6.48874C6.48404 5.96129 6.18773 5.24592 6.18773 4.5C6.18773 3.75408 6.48404 3.03871 7.01149 2.51126C7.53893 1.98382 8.25431 1.6875 9.00023 1.6875C9.74615 1.6875 10.4615 1.98382 10.989 2.51126C11.5164 3.03871 11.8127 3.75408 11.8127 4.5ZM3.37598 15.0885C3.40008 13.6128 4.00323 12.2056 5.05536 11.1705C6.10749 10.1354 7.52429 9.55535 9.00023 9.55535C10.4762 9.55535 11.893 10.1354 12.9451 11.1705C13.9972 12.2056 14.6004 13.6128 14.6245 15.0885C12.86 15.8976 10.9413 16.3151 9.00023 16.3125C6.99323 16.3125 5.08823 15.8745 3.37598 15.0885Z"
                                                     stroke="#B6B6B6" stroke-width="1.5" stroke-linecap="round"
                                                     stroke-linejoin="round" />
                                             </svg>
                                         </div>
                                     </fieldset>
                                     <fieldset class="t">
                                         <label class="fw-6">Mobile</label>
                                         <input type="text" class="tb-my-input" name="mobile" placeholder="Mobile Number"
                                             minlength="0" maxlength="10" oninput="this.value = this.value.replace(/[^0-9]/g, '').slice(0, 10);" required>

                                         <small id="mobile_error" class="text-danger"></small>
                                         <div class="icon">
                                             <svg width="18" height="18" viewBox="0 0 18 18" fill="none"
                                                 xmlns="http://www.w3.org/2000/svg">
                                                 <path
                                                     d="M11.8127 4.5C11.8127 5.24592 11.5164 5.96129 10.989 6.48874C10.4615 7.01618 9.74615 7.3125 9.00023 7.3125C8.25431 7.3125 7.53893 7.01618 7.01149 6.48874C6.48404 5.96129 6.18773 5.24592 6.18773 4.5C6.18773 3.75408 6.48404 3.03871 7.01149 2.51126C7.53893 1.98382 8.25431 1.6875 9.00023 1.6875C9.74615 1.6875 10.4615 1.98382 10.989 2.51126C11.5164 3.03871 11.8127 3.75408 11.8127 4.5ZM3.37598 15.0885C3.40008 13.6128 4.00323 12.2056 5.05536 11.1705C6.10749 10.1354 7.52429 9.55535 9.00023 9.55535C10.4762 9.55535 11.893 10.1354 12.9451 11.1705C13.9972 12.2056 14.6004 13.6128 14.6245 15.0885C12.86 15.8976 10.9413 16.3151 9.00023 16.3125C6.99323 16.3125 5.08823 15.8745 3.37598 15.0885Z"
                                                     stroke="#B6B6B6" stroke-width="1.5" stroke-linecap="round"
                                                     stroke-linejoin="round" />
                                             </svg>
                                         </div>

                                     </fieldset>

                                     <fieldset class="t">
                                         <label class="fw-6">Email address</label>
                                         <input type="text" class="tb-my-input" name="email"
                                             placeholder="Email address">
                                         <small id="email_error" class="text-danger"></small>
                                         <div class="icon">
                                             <svg width="18" height="18" viewBox="0 0 18 18" fill="none"
                                                 xmlns="http://www.w3.org/2000/svg">
                                                 <path
                                                     d="M11.8127 4.5C11.8127 5.24592 11.5164 5.96129 10.989 6.48874C10.4615 7.01618 9.74615 7.3125 9.00023 7.3125C8.25431 7.3125 7.53893 7.01618 7.01149 6.48874C6.48404 5.96129 6.18773 5.24592 6.18773 4.5C6.18773 3.75408 6.48404 3.03871 7.01149 2.51126C7.53893 1.98382 8.25431 1.6875 9.00023 1.6875C9.74615 1.6875 10.4615 1.98382 10.989 2.51126C11.5164 3.03871 11.8127 3.75408 11.8127 4.5ZM3.37598 15.0885C3.40008 13.6128 4.00323 12.2056 5.05536 11.1705C6.10749 10.1354 7.52429 9.55535 9.00023 9.55535C10.4762 9.55535 11.893 10.1354 12.9451 11.1705C13.9972 12.2056 14.6004 13.6128 14.6245 15.0885C12.86 15.8976 10.9413 16.3151 9.00023 16.3125C6.99323 16.3125 5.08823 15.8745 3.37598 15.0885Z"
                                                     stroke="#B6B6B6" stroke-width="1.5" stroke-linecap="round"
                                                     stroke-linejoin="round" />
                                             </svg>
                                         </div>

                                     </fieldset>
                                     <fieldset class="">
                                         <label class="fw-6">Password</label>
                                         <input id="password-field" type="password" name="password"
                                             class="input-form password-input" placeholder="Your password">
                                         <small id="password_error" class="text-danger"></small>
                                         <div toggle="#password-field"
                                             class="fa fa-fw fa-eye field-icon toggle-password"></div>
                                         <div class="icon">
                                             <svg width="18" height="18" viewBox="0 0 18 18" fill="none"
                                                 xmlns="http://www.w3.org/2000/svg">
                                                 <path
                                                     d="M12.375 7.875V5.0625C12.375 4.16739 12.0194 3.30895 11.3865 2.67601C10.7535 2.04308 9.89511 1.6875 9 1.6875C8.10489 1.6875 7.24645 2.04308 6.61351 2.67601C5.98058 3.30895 5.625 4.16739 5.625 5.0625V7.875M5.0625 16.3125H12.9375C13.3851 16.3125 13.8143 16.1347 14.1307 15.8182C14.4472 15.5018 14.625 15.0726 14.625 14.625V9.5625C14.625 9.11495 14.4472 8.68573 14.1307 8.36926C13.8143 8.05279 13.3851 7.875 12.9375 7.875H5.0625C4.61495 7.875 4.18573 8.05279 3.86926 8.36926C3.55279 8.68573 3.375 9.11495 3.375 9.5625V14.625C3.375 15.0726 3.55279 15.5018 3.86926 15.8182C4.18573 16.1347 4.61495 16.3125 5.0625 16.3125Z"
                                                     stroke="#B6B6B6" stroke-width="1.5" stroke-linecap="round"
                                                     stroke-linejoin="round" />
                                             </svg>
                                         </div>

                                     </fieldset>
                                     <fieldset class="">
                                         <label class="fw-6">Confirm password</label>
                                         <input id="password-field1" type="password" name="cpassword"
                                             class="input-form password-input" placeholder="Confirm password">
                                         <small id="cpassword_error" class="text-danger"></small>
                                         <div toggle="#password-field1"
                                             class="fa fa-fw fa-eye field-icon toggle-password"></div>
                                         <div class="icon">
                                             <svg width="18" height="18" viewBox="0 0 18 18" fill="none"
                                                 xmlns="http://www.w3.org/2000/svg">
                                                 <path
                                                     d="M12.375 7.875V5.0625C12.375 4.16739 12.0194 3.30895 11.3865 2.67601C10.7535 2.04308 9.89511 1.6875 9 1.6875C8.10489 1.6875 7.24645 2.04308 6.61351 2.67601C5.98058 3.30895 5.625 4.16739 5.625 5.0625V7.875M5.0625 16.3125H12.9375C13.3851 16.3125 13.8143 16.1347 14.1307 15.8182C14.4472 15.5018 14.625 15.0726 14.625 14.625V9.5625C14.625 9.11495 14.4472 8.68573 14.1307 8.36926C13.8143 8.05279 13.3851 7.875 12.9375 7.875H5.0625C4.61495 7.875 4.18573 8.05279 3.86926 8.36926C3.55279 8.68573 3.375 9.11495 3.375 9.5625V14.625C3.375 15.0726 3.55279 15.5018 3.86926 15.8182C4.18573 16.1347 4.61495 16.3125 5.0625 16.3125Z"
                                                     stroke="#B6B6B6" stroke-width="1.5" stroke-linecap="round"
                                                     stroke-linejoin="round" />
                                             </svg>
                                         </div>

                                     </fieldset>
                                     <button class="sc-button" name="submit" type="submit">
                                         <span>Sign Up</span>
                                     </button>
                                 </form>
                             </div>
                         </div>
                         <div class="text-box text-center fs-14">Don’t you have an account?<a
                                 class="font-2 fw-7 fs-14 color-popup text-color-3" data-toggle="modal"
                                 data-target="#popup_bid" data-dismiss="modal" aria-label="Close">Login</a></div>
                         <!-- <p class="texts line fs-12 text-center">or Register with</p>
                        <div class="button-box flex">
                            <a href="#" class="flex align-center">
                                <svg width="20" height="21" viewBox="0 0 20 21" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M4.43242 12.5863L3.73625 15.1852L1.19176 15.239C0.431328 13.8286 0 12.2149 0 10.5C0 8.84179 0.403281 7.27804 1.11812 5.90112H1.11867L3.38398 6.31644L4.37633 8.56815C4.16863 9.17366 4.05543 9.82366 4.05543 10.5C4.05551 11.2341 4.18848 11.9374 4.43242 12.5863Z"
                                        fill="#FBBB00" />
                                    <path
                                        d="M19.8242 8.6319C19.939 9.23682 19.9989 9.86155 19.9989 10.5C19.9989 11.216 19.9236 11.9143 19.7802 12.588C19.2934 14.8803 18.0214 16.8819 16.2594 18.2984L16.2588 18.2978L13.4055 18.1522L13.0017 15.6314C14.1709 14.9456 15.0847 13.8726 15.566 12.588H10.2188V8.6319H19.8242Z"
                                        fill="#518EF8" />
                                    <path
                                        d="M16.2595 18.2978L16.2601 18.2984C14.5464 19.6758 12.3694 20.5 9.99965 20.5C6.19141 20.5 2.88043 18.3715 1.19141 15.239L4.43207 12.5863C5.27656 14.8401 7.45074 16.4445 9.99965 16.4445C11.0952 16.4445 12.1216 16.1484 13.0024 15.6313L16.2595 18.2978Z"
                                        fill="#28B446" />
                                    <path
                                        d="M16.382 2.80219L13.1425 5.45437C12.2309 4.88461 11.1534 4.55547 9.99906 4.55547C7.39246 4.55547 5.17762 6.23348 4.37543 8.56812L1.11773 5.90109H1.11719C2.78148 2.6923 6.13422 0.5 9.99906 0.5C12.4254 0.5 14.6502 1.3643 16.382 2.80219Z"
                                        fill="#F14336" />
                                </svg>
                                <span class="fw-6">Google</span>
                            </a>
                            <a href="#" class="flex align-center">
                                <svg width="21" height="21" viewBox="0 0 21 21" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M20.5 10.5C20.5 15.4914 16.843 19.6285 12.0625 20.3785V13.3906H14.3926L14.8359 10.5H12.0625V8.62422C12.0625 7.8332 12.45 7.0625 13.6922 7.0625H14.9531V4.60156C14.9531 4.60156 13.8086 4.40625 12.7145 4.40625C10.4305 4.40625 8.9375 5.79063 8.9375 8.29688V10.5H6.39844V13.3906H8.9375V20.3785C4.15703 19.6285 0.5 15.4914 0.5 10.5C0.5 4.97734 4.97734 0.5 10.5 0.5C16.0227 0.5 20.5 4.97734 20.5 10.5Z"
                                        fill="#1877F2" />
                                    <path
                                        d="M14.3926 13.3906L14.8359 10.5H12.0625V8.62418C12.0625 7.83336 12.4499 7.0625 13.6921 7.0625H14.9531V4.60156C14.9531 4.60156 13.8088 4.40625 12.7146 4.40625C10.4304 4.40625 8.9375 5.79063 8.9375 8.29688V10.5H6.39844V13.3906H8.9375V20.3785C9.44664 20.4584 9.96844 20.5 10.5 20.5C11.0316 20.5 11.5534 20.4584 12.0625 20.3785V13.3906H14.3926Z"
                                        fill="white" />
                                </svg>
                                <span class="fw-6">Facebook</span>
                            </a>
                        </div> -->
                     </div>
                 </div>
             </div>
         </div>
     </div>
 </div>

 <div class="offcanvas offcanvas-bottom" tabindex="-1" id="offcanvasBottom">
     <div class="offcanvas-header">
         <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
     </div>
     <div class="offcanvas-body small">
         <div id="compare_listing_wrap">
             <div id="tfcl-compare-listings" class="compare-listing listing-open">
                 <div id="tfcl-compare-listing-listings">
                     <div class="compare-listing-body">
                         <div class="compare-thumb-main">
                             <div class="compare-thumb tfcl-compare-listing" data-listing-id="267">
                                 <button type="button" class="compare-listing-remove">
                                     <svg xmlns="http://www.w3.org/2000/svg" width="18" height="19" viewBox="0 0 18 19"
                                         fill="none">
                                         <path d="M4.5 14L13.5 5M4.5 5L13.5 14" stroke="#24272C" stroke-width="1.5"
                                             stroke-linecap="round" stroke-linejoin="round" />
                                     </svg>
                                 </button>
                                 <img loading="lazy" class="compare-listing-img" alt="image"
                                     src="<?= base_url(); ?>/assets/assets/images/dashboard/compare1.jpg">
                                 <div class="content">
                                     <h3 class="tfcl-listing-title title">
                                         <a title="Leslie Alexander"
                                             href="https://autodealwp.themesflat.co/listing/dongfeng-aeolus-yixuan-mach/">2017
                                             BMV X1 xDrive 20d xline</a>
                                     </h3>
                                     <ul class="description">
                                         <li class="mileage"><i class="icon-autodeal-km1"></i> 72,491 kms</li>
                                         <li class="fuel"><i class="icon-autodeal-diesel"></i> Diesel</li>
                                         <li class="trans"><i class="icon-autodeal-automatic"></i> Automatic</li>
                                     </ul>
                                 </div>
                             </div>
                             <div class="compare-thumb tfcl-compare-listing" data-listing-id="266">
                                 <button type="button" class="compare-listing-remove">
                                     <svg xmlns="http://www.w3.org/2000/svg" width="18" height="19" viewBox="0 0 18 19"
                                         fill="none">
                                         <path d="M4.5 14L13.5 5M4.5 5L13.5 14" stroke="#24272C" stroke-width="1.5"
                                             stroke-linecap="round" stroke-linejoin="round" />
                                     </svg>
                                 </button>
                                 <img loading="lazy" class="compare-listing-img" alt="image"
                                     src="<?= base_url(); ?>assets/assets/images/dashboard/compare2.jpg">
                                 <div class="content">
                                     <h3 class="tfcl-listing-title title">
                                         <a title="Leslie Alexander"
                                             href="https://autodealwp.themesflat.co/listing/toyota-camry-2025/">2017
                                             BMV X1
                                             xDrive 20d xline</a>
                                     </h3>
                                     <ul class="description">
                                         <li class="mileage"><i class="icon-autodeal-km1"></i> 72,491 kms</li>
                                         <li class="fuel"><i class="icon-autodeal-diesel"></i> Hybrid</li>
                                         <li class="trans"><i class="icon-autodeal-automatic"></i> Automatic</li>
                                     </ul>
                                 </div>
                             </div>
                         </div>
                         <a href="<?= base_url('compare'); ?>" class="button tfcl-compare-listing-button">Compare</a>
                     </div>
                 </div>


             </div>
         </div>
     </div>
 </div>

 <!-- Forgot Password Modal -->
 <div id="forgotPasswordModal" class="custom-modal-forgot">
     <div class="custom-modal-content-forgot">
         <span class="custom-modal-close-forgot" id="closeForgotPasswordModal">&times;</span>
         <h3>Forgot Password</h3>
         <form id="forgotPasswordForm">
             <label for="forgotEmail">Enter your email:</label><br>
             <input type="email" id="forgotEmail" name="email" required><br><br>
             <button class="sc-button" style="color:white;" type="submit">Submit</button>
             <div id="forgotMsg" style="display:none; color:green; margin-top:10px;"></div>
         </form>
     </div>
 </div>




 <!-- go top button -->
 <div class="progress-wrap active-progress">
     <svg class="progress-circle svg-content" width="100%" height="100%" viewBox="-1 -1 102 102">
         <path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98"
             style="transition: stroke-dashoffset 10ms linear 0s; stroke-dasharray: 307.919, 307.919; stroke-dashoffset: 286.138;">
         </path>
     </svg>
 </div>
 <!-- /go top button -->


 <!-- Scripts -->
 <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
 <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

 <!-- ...existing code... -->
 <script>
     $(document).ready(function() {
         // Register se Login
         $('[data-target="#popup_bid"]').on('click', function(e) {
             e.preventDefault();
             $('#popup_bid2').modal('hide');
             setTimeout(function() {
                 $('#popup_bid').modal('show');
             }, 400);
         });

         // Login se Register
         $('[data-target="#popup_bid2"]').on('click', function(e) {
             e.preventDefault();
             $('#popup_bid').modal('hide');
             setTimeout(function() {
                 $('#popup_bid2').modal('show');
             }, 400);
         });

         // 🧽 Backdrop remove on modal close
         $('.modal').on('hidden.bs.modal', function() {
             $('.modal-backdrop').remove(); // removes shadow
             $('body').removeClass('modal-open'); // allows body scroll again
         });
     });
 </script>

 <script>
     document.getElementById('openForgotPasswordModal').onclick = function() {

         //    document.getElementById('popup_bid').style.display = 'none';

         $('#popup_bid').modal('hide');
         document.getElementById('forgotPasswordModal').style.display = 'block';
     };

     document.getElementById('closeForgotPasswordModal').onclick = function() {
         document.getElementById('forgotPasswordModal').style.display = 'none';
     };

     window.onclick = function(event) {
         const modal = document.getElementById('forgotPasswordModal');
         if (event.target === modal) {
             modal.style.display = 'none';
         }
     };
 </script>


 <script>
     document.getElementById("forgotPasswordForm").addEventListener("submit", function(e) {
         e.preventDefault();

         let email = document.getElementById("forgotEmail").value;

         let xhr = new XMLHttpRequest();
         xhr.open("POST", "<?= base_url('forgot-password') ?>", true);
         xhr.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
         xhr.setRequestHeader("X-Requested-With", "XMLHttpRequest"); // ✅ Important!

         xhr.onload = function() {
             if (xhr.status == 200) {
                 const res = JSON.parse(xhr.responseText);
                 const msg = document.getElementById("forgotMsg");

                 msg.style.display = "block";
                 msg.innerText = res.message;

                 setTimeout(() => {
                     msg.style.display = "none";
                     document.getElementById("forgotPasswordModal").style.display = "none";
                 }, 3000);
             }
         };

         xhr.send("email=" + encodeURIComponent(email));
     });
 </script>



 <script>
    //  $('#registerForm').on('submit', function(e) {
    //      e.preventDefault();
    //      let valid = true;
    //      $('#username_error, #email_error, #password_error, #cpassword_error, #role_error').text('');

    //      //         console.log($('input[name="email"]').length); // should be 1
    //      // console.log($('input[name="email"]').val()); // should show value
    //      let role = $('[name="role"]').val().trim();
    //      let username = $('[name="username"]').val().trim();
    //      // let email = $('[name="email"]').val().trim();
    //      const email = $('#registerForm input[name="email"]').val().trim();
    //      let password = $('[name="password"]').val().trim();
    //      let cpassword = $('[name="cpassword"]').val().trim();

    //      // console.log(password, cpassword);

    //      console.log("Password field value = ", $('[name="password"]').val());
    //      console.log("Confirm Password field value = ", $('[name="cpassword"]').val());

    //      if (role === "") {
    //          $('#role_error').text('Please select a role');
    //          valid = false;
    //      }

    //      if (username === "") {
    //          $('#username_error').text('Please enter username');
    //          valid = false;
    //      }

    //      if (email == "") {
    //          $('#email_error').text('Please enter email');
    //          valid = false;
    //      } else if (!validateEmail(email)) {
    //          $('#email_error').text('Invalid email format');
    //          valid = false;
    //      }

    //      // if (password == "") {
    //      //     $('#password_error').text('Please enter password');
    //      //     valid = false;
    //      // }

    //      // if (cpassword == "") {
    //      //     $('#cpassword_error').text('Please confirm password');
    //      //     valid = false;
    //      // } else if (password != cpassword) {
    //      //     $('#cpassword_error').text("Passwords don't match");
    //      //     valid = false;
    //      // }

    //      if (valid) {
    //          $.ajax({
    //              url: '<?= base_url('register'); ?>', // change to your actual controller URL
    //              method: 'POST',
    //              data: $('#registerForm').serialize(),
    //              success: function(response) {
    //                  // handle success (e.g., close modal, show success message)
    //                  $('#modalMsg').html(
    //                      '<div class="alert alert-success">Registered successfully!</div>');
    //                  $('#registerForm')[0].reset();
    //                  $('.modal').modal('hide'); // close current open modal

    //                  setTimeout(function() {
    //                      $('#modalMsg').html('');
    //                      $('#popup_bid').modal('show'); // open login modal
    //                  }, 1000);
    //              },
    //              error: function(xhr) {
    //                  // handle errors
    //                  $('#modalMsg').html(
    //                      '<div class="alert alert-danger">Something went wrong. Try again.</div>');
    //              }
    //          });
    //      }
    //  });

    $('#registerForm').on('submit', function(e) {
    e.preventDefault();
    let valid = true;
    $('#username_error, #email_error, #password_error, #cpassword_error, #role_error').text('');

    let role = $('[name="role"]:checked').val(); // checked radio value
    let username = $('[name="username"]').val().trim();
    const email = $('#registerForm input[name="email"]').val().trim();
    let password = $('[name="password"]').val().trim();
    let cpassword = $('[name="cpassword"]').val().trim();

    if (!role) {
        $('#role_error').text('Please select a role');
        valid = false;
    }
    if (username === "") {
        $('#username_error').text('Please enter username');
        valid = false;
    }
    if (email == "") {
        $('#email_error').text('Please enter email');
        valid = false;
    } else if (!validateEmail(email)) {
        $('#email_error').text('Invalid email format');
        valid = false;
    }

    if (valid) {
        $.ajax({
            url: '<?= base_url('register'); ?>',
            method: 'POST',
            data: $('#registerForm').serialize(),
            success: function(response) {
                // Show success message in register modal
                $('#modalMsg').html('<div class="alert alert-success">Registered successfully!</div>');
                $('#registerForm')[0].reset();

                // Wait 3 seconds, then open login modal
                setTimeout(function() {
                    $('#modalMsg').html('');
                    $('#popup_bid2').modal('hide'); // close register modal
                    $('#popup_bid').modal('show');  // open login modal
                }, 3000); // 3 seconds delay
            },
            error: function(xhr) {
                $('#modalMsg').html('<div class="alert alert-danger">Something went wrong. Try again.</div>');
            }
        });
    }
});


     function validateEmail(email) {
         let re = /^[^@\s]+@[^@\s]+\.[^@\s]+$/;
         return re.test(email);
     }
 </script>




 <!-- Scripts -->
 <script>
     $(document).ready(function() {
         $('#loginForm').on('submit', function(e) {
             e.preventDefault();

             $.ajax({
                 url: '<?= base_url('login'); ?>',
                 type: 'POST',
                 data: $(this).serialize(),
                 dataType: 'json',
                 success: function(response) {
                     let alertType = (response.status === 'success') ? 'alert-success' :
                         'alert-danger';
                     $('#loginMsg').html(`
          <div class="alert ` + alertType + ` alert-dismissible fade show" role="alert">
            ` + response.message + `
            <button type="button" class="close" data-dismiss="alert">&times;</button>
          </div>
        `);

                     setTimeout(function() {
                         $('#loginMsg .alert').fadeOut('slow', function() {
                             $(this).remove();
                         });

                     }, 3000);

                     if (response.status === 'success') {
                         console.log(response.role_name);
                         $('#loginForm')[0].reset();

                         if (response.role_name == "Buyer") {
                             setTimeout(function() {
                                 location.reload();
                             }, 1000);

                         }
                         // else if (response.role_name == "Dealer") {
                         //     console.log(response.role);
                         //     setTimeout(function() {
                         //         window.location.href =
                         //             "<?= base_url('dealer'); ?>"; 
                         //     }, 1000);
                         // } else if (response.role_name == "Seller") {
                         //     console.log(response.role);
                         //     setTimeout(function() {
                         //         window.location.href =
                         //             "<?= base_url('seller'); ?>"; 
                         //     }, 1000);
                         //  } 
                         else {
                             // Just reload for other roles
                             setTimeout(function() {
                                 window.location.href =
                                     "<?= base_url('dashboard'); ?>";
                             }, 1000);
                         }
                     }
                 }
             });

             return false;
         });
     });
 </script>


 <!-- <script type="text/javascript">
function googleTranslateElementInit() {
console.log('hello');
    new google.translate.TranslateElement({
        pageLanguage: 'en',
         includedLanguages: 'de,en,fr,it',
        layout: google.translate.TranslateElement.InlineLayout.SIMPLE
    }, 'google_translate_element');
}
 </script>
 <script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit">
 </script> -->


 <!-- <script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script> -->
 <script src="https://www.gstatic.com/firebasejs/9.22.1/firebase-app-compat.js"></script>
 <script src="https://www.gstatic.com/firebasejs/9.22.1/firebase-firestore-compat.js"></script>
 <script>
     // function sonamwork()
     // {
     // 	console.log("ddddddd");
     //         const catId = $("#cat_id").val();

     //         if (catId !== "") {
     //             $.ajax({
     //                 url: "<?= base_url(ADMIN_PATH . "/get-makes-by-category") ?>",
     //                 type: 'POST',
     //                 data: { cat_id: catId },
     //                 dataType: 'json',
     //                 success: function (response) {
     //                     $('#make_id').html('<option value="">Select Make</option>');
     //                     $.each(response, function (index, item) {
     //                         $('#make_id').append('<option value="' + item.id + '">' + item.name + '</option>');
     //                     });
     //                 },
     //                 error: function () {
     //                     alert('Error loading make list.');
     //                 }
     //             });
     //         } else {
     //             $('#make_id').html('<option value="">Select Make</option>');
     //         }
     // }



     // $(document).ready(function () {
     //     $('#vehicle_type_id').on('change', function () { console.log("aaaaaa");
     //         const vehicleTypeId = $(this).val();

     //         if (vehicleTypeId !== "") {
     //             $.ajax({
     //                 url: "<?= base_url(ADMIN_PATH . "/get-category-by-vehicle-type") ?>",
     //                 type: 'POST',
     //                 data: { vehicle_type_id: vehicleTypeId },
     //                 dataType: 'json',
     //                 success: function (response) {
     //                     $('#cat_id').html('<option value="">Select Category</option>');
     //                     $.each(response, function (index, item) {
     //                         $('#cat_id').append('<option value="' + item.id + '">' + item.name + '</option>');
     //                     });
     //                 },
     //                 error: function () {
     //                     alert('Error loading cat_id list.');
     //                 }
     //             });
     //         } else {
     //             $('#cat_id').html('<option value="">Select Category</option>');
     //         }
     //     });

     // 	$('#cat_id').on('change', function () {
     // 		console.log("ddddddd");
     //         const catId = $(this).val();

     //         if (catId !== "") {
     //             $.ajax({
     //                 url: "<?= base_url(ADMIN_PATH . "/get-makes-by-category") ?>",
     //                 type: 'POST',
     //                 data: { cat_id: catId },
     //                 dataType: 'json',
     //                 success: function (response) {
     //                     $('#make_id').html('<option value="">Select Make</option>');
     //                     $.each(response, function (index, item) {
     //                         $('#make_id').append('<option value="' + item.id + '">' + item.name + '</option>');
     //                     });
     //                 },
     //                 error: function () {
     //                     alert('Error loading make list.');
     //                 }
     //             });
     //         } else {
     //             $('#make_id').html('<option value="">Select Make</option>');
     //         }
     //     });

     // 	$('#make_id').on('change', function () {
     //         const makeId = $(this).val();

     //         if (makeId !== "") {
     //             $.ajax({
     //                 url: "<?= base_url(ADMIN_PATH . "/get-modal-by-make") ?>",
     //                 type: 'POST',
     //                 data: { make_id: makeId },
     //                 dataType: 'json',
     //                 success: function (response) {
     //                     $('#model_id').html('<option value="">Select Model</option>');
     //                     $.each(response, function (index, item) {
     //                         $('#model_id').append('<option value="' + item.id + '">' + item.name + '</option>');
     //                     });
     //                 },
     //                 error: function () {
     //                     alert('Error loading make list.');
     //                 }
     //             });
     //         } else {
     //             $('#model_id').html('<option value="">Select Model</option>');
     //         }
     //     });

     // 	$('#model_id').on('change', function () {
     //         const modelId = $(this).val();

     //         if (modelId !== "") {
     //             $.ajax({
     //                 url: "<?= base_url(ADMIN_PATH . "/get-variant-by-model") ?>",
     //                 type: 'POST',
     //                 data: { model_id: modelId },
     //                 dataType: 'json',
     //                 success: function (response) {
     //                     $('#variant_id').html('<option value="">Select Variant</option>');
     //                     $.each(response, function (index, item) {
     //                         $('#variant_id').append('<option value="' + item.id + '">' + item.name + '</option>');
     //                     });
     //                 },
     //                 error: function () {
     //                     alert('Error loading make list.');
     //                 }
     //             });
     //         } else {
     //             $('#variant_id').html('<option value="">Select Variant</option>');
     //         }
     //     });



     // });



     const firebaseConfig = {
         apiKey: "AIzaSyD0TUv5KLfBy6qCfVNwOaaf98-AU813x7I",
         authDomain: "autokorb-f0b82.firebaseapp.com",
         projectId: "autokorb-f0b82"
     };
     firebase.initializeApp(firebaseConfig);
     const db = firebase.firestore();

     const currentUserId = "<?= $_SESSION['user_id'] ?>";
     const msgContent = document.getElementById("messageDropdownContent");
     const unreadBadge = document.getElementById("unreadCount");

     function loadUnreadMessagesDropdown() {
         db.collection("chats").where("participants", "array-contains", currentUserId).onSnapshot(snapshot => {
             msgContent.innerHTML = "";
             let items = [];
             let unreadTotal = 0;

             const promises = snapshot.docs.map(doc => {
                 const chatId = doc.id;
                 const chatData = doc.data();
                 const otherUserId = chatData.participants.find(id => id !== currentUserId);

                 return db.collection("chats").doc(chatId).collection("messages")
                     .orderBy("timestamp", "desc").limit(1).get()
                     .then(lastMsgs => {
                         const lastMsgData = lastMsgs.docs[0]?.data() || {};
                         const text = lastMsgData.text || "📎 File";
                         const timestamp = lastMsgData.timestamp?.toDate?.() || new Date();
                         const formattedTime = timestamp.toLocaleTimeString([], {
                             hour: '2-digit',
                             minute: '2-digit'
                         });

                         return db.collection("chats").doc(chatId).collection("messages")
                             .where("receiver_id", "==", currentUserId)
                             .where("is_read", "==", false).get()
                             .then(unreadSnap => {
                                 const unreadCount = unreadSnap.size;
                                 unreadTotal += unreadCount;

                                 return $.ajax({
                                     url: "<?= base_url(ADMIN_PATH . '/get-user-info') ?>",
                                     method: "GET",
                                     data: {
                                         id: otherUserId
                                     },
                                     dataType: "json"
                                 }).then(user => {
                                     const username = user.username || 'Unknown';
                                     const badge = unreadCount > 0 ? `<span class="badge bg-danger ms-1">${unreadCount}</span>` : '';
                                     const item = `
                  <li class="dropdown-item d-flex justify-content-between align-items-start">
                    <div class="me-2">
                      <div class="fw-bold">${username}</div>
                      <small class="text-muted">${text} • ${formattedTime}</small>
                    </div>
                    <a href="<?= base_url(ADMIN_PATH) ?>/view-chat/${chatData.vehicle_id}/${otherUserId}" class="btn btn-sm btn-outline-primary">Chat</a>
                  </li>`;
                                     items.push({
                                         html: item,
                                         time: timestamp
                                     });
                                 });
                             });
                     });
             });

             Promise.all(promises).then(() => {
                 items.sort((a, b) => b.time - a.time);
                 msgContent.innerHTML = items.map(i => i.html).join("") || "<li class='text-center text-muted'>No messages</li>";
                 unreadBadge.textContent = unreadTotal;
                 unreadBadge.style.display = unreadTotal > 0 ? 'inline-block' : 'none';
             });
         });
     }

     loadUnreadMessagesDropdown();
 </script>

<!-- Your JS -->
<script>
    const currentSessionLang = "<?= $this->session->userdata('selected_lang') ?? 'en' ?>";
    const selectElement = document.getElementById('custom_translate_select');

    // 🔁 Get language from cookie if available
    function getSelectedLanguageFromCookie() {
        const match = document.cookie.match(/googtrans=\/[a-z]{2}\/([a-z]{2})/);
        return match ? match[1] : 'en';
    }

    // ✅ Set dropdown to actual translated language on load
    window.addEventListener('DOMContentLoaded', () => {
        const cookieLang = getSelectedLanguageFromCookie();
        selectElement.value = cookieLang;
    });

    // ✅ On dropdown change
    selectElement.addEventListener('change', function () {
        const selectedLang = this.value;
        const currentLang = getSelectedLanguageFromCookie();

        if (!selectedLang || selectedLang === currentLang) {
            console.log("✅ Language already active, no reload");
            return;
        }

        // Set Google Translate cookie
        setTranslateCookie('en', selectedLang);

        // Save language to session
        saveLanguageToSession(selectedLang);
    });

    function setTranslateCookie(fromLang, toLang) {
        const cookieValue = `/${fromLang}/${toLang}`;
        document.cookie = `googtrans=${cookieValue};path=/`;
        document.cookie = `googtrans=${cookieValue};domain=.` + window.location.hostname + `;path=/`;
    }

    function saveLanguageToSession(lang) {
        fetch("<?= base_url('save-language'); ?>", {
            method: 'POST',
            headers: {
                'Content-Type': 'application/x-www-form-urlencoded',
            },
            body: 'lang=' + lang
        }).then(() => {
            console.log("✅ Language saved to session, reloading...");
            location.reload();
        }).catch(err => {
            console.error("❌ Error saving language:", err);
        });
    }

    // ✅ Google Translate init (invisible)
    function googleTranslateElementInit() {
        new google.translate.TranslateElement({
            pageLanguage: 'en',
            includedLanguages: 'de,en,fr,it',
            layout: google.translate.TranslateElement.InlineLayout.SIMPLE
        }, 'google_translate_element');
    }




    // 👁️ Watch if user closes Google Translate banner and reset dropdown
function observeTranslateReset() {
    const observer = new MutationObserver(() => {
        const currentLang = getSelectedLanguageFromCookie();
        if (selectElement.value !== currentLang) {
            console.log("🔁 Language reverted to:", currentLang);
            selectElement.value = currentLang;

            // Optional: reload only if you want page re-translated
            // location.reload();
        }
    });

    // Google Translate adds an iframe to body when active
    observer.observe(document.body, { childList: true, subtree: true });
}

observeTranslateReset(); // ✅ Call after DOM loaded
</script>

<!-- ✅ Load Google Translate Script -->
<script src="https://translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>


<!-- Filter by location -->
   <!-- <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script> -->
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

 <!-- Javascript -->
 <script src="<?= base_url(); ?>assets/app/js/jquery.min.js"></script>
 <script src="<?= base_url(); ?>assets/app/js/jquery.easing.js"></script>
 <script src="<?= base_url(); ?>assets/app/js/jquery.nice-select.min.js"></script>
 <script src="<?= base_url(); ?>assets/app/js/bootstrap.min.js"></script>
 <script src="<?= base_url(); ?>assets/app/js/plugin.js"></script>
 <script src="<?= base_url(); ?>assets/app/js/shortcodes.js"></script>
 <script src="<?= base_url(); ?>assets/app/js/main.js"></script>

 <!-- Javascript -->
 <script src="<?= base_url(); ?>assets/app/js/swiper-bundle.min.js"></script>
 <script src="<?= base_url(); ?>assets/app/js/swiper.js"></script>
 <script src="<?= base_url(); ?>assets/app/js/jquery-validate.js"></script>
 <script src="<?= base_url(); ?>assets/app/js/price-ranger.js"></script>



 <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCFC3m2n0jBRFTMvUNZc0-6Y0Rzlcadzcw"></script>
 <script src="app/js/maps.js"></script>
 <script src="app/js/marker.js"></script>
 <script src="app/js/infobox.min.js"></script>

 </body>

 </html>