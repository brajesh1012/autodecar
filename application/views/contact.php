<?php include('head.php'); ?>

<section class="flat-title">
    <div class="container2">
        <div class="row">
            <div class="col-lg-12">
                <div class="title-inner style">
                    <div class="title-group fs-12"><a class="home fw-6 text-color-3"
                            href="<?= base_url(); ?>">Home</a><span>vehicle for sale</span></div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class=" flat-property">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="inner-heading flex-two flex-wrap ">
                    <h1 class="heading-listing">Contact us</h1>
                    <div class="social-listing flex-six flex-wrap">
                        <p>Share this page:</p>
                        <div class="icon-social style1">
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
</section>

<section class="tf-section-map">
    <div class="container-fluid">
        <div class="map">
            <iframe class="map-content"
                src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d7302.453092836291!2d90.47477022812872!3d23.77494577893369!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1svi!2s!4v1627293157601!5m2!1svi!2s"
                allowfullscreen="" loading="lazy">
            </iframe>
        </div>
    </div>

</section>

<section class="tf-section-contact">
    <div class="container">
        <div class="row">
            <div class="col-md-8 contact-left">
                <div class="heading-section mb-30">
                    <h2>Drop Us a Line</h2>
                    <p class="mt-12">Feel free to connect with us through our online channels for updates, news, and
                        more.</p>
                </div>
                <div id="comments" class="comments">
                    <div class="respond-comment">
                        <?php if ($this->session->flashdata('success')): ?>
                        <div id="successMessage"
                            style="background: #d4edda; color: #155724; padding: 10px; border-radius: 4px; margin-bottom: 15px;">
                            <?= $this->session->flashdata('success'); ?>
                        </div>
                        <?php endif; ?>
                        <!-- Contact Form -->
                        <form method="post" action="<?= base_url('enquiry'); ?>" id="loan-calculator"
                            class="comment-form form-submit">
                            <div class="grid-sw-2">
                                <fieldset>
                                    <label>Name</label>
                                    <input type="text" name="name" placeholder="Your name" required>
                                </fieldset>
                                <fieldset>
                                    <label>Email address</label>
                                    <input type="email" name="email" placeholder="Your email" required>
                                </fieldset>
                            </div>
                            <div class="grid-sw-2">
                                <fieldset>
                                    <label>Phone Number</label>
                                    <input type="tel" name="tel" placeholder="Phone Number" required>
                                </fieldset>
                                <fieldset>
                                    <label>Subject</label>
                                    <input type="text" name="subject" placeholder="Enter Subject" required>
                                </fieldset>
                            </div>
                            <fieldset>
                                <label>Your Message</label>
                                <textarea name="message" rows="4" placeholder="Your message" required></textarea>
                            </fieldset>
                            <div class="button-boxs">
                                <button class="sc-button" type="submit"><span>Send Message</span></button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-md-4 contact-right">
                <div class="contact-info box-sd">
                    <h2 class="mb-30">Contact Us</h2>
                    <div class="wrap-info">
                        <div class="box-info">
                            <h5>Address</h5>
                            <!-- <p>101 E 129th St, East Chicago, IN 46312 <br> United States</p> -->
                            <p><?= $contact->address; ?></p>
                        </div>
                        <div class="box-info">
                            <h5>Infomation:</h5>
                            <p><?= $contact->mobile; ?></p>
                            <p><?= $contact->email; ?></p>
                        </div>
                        <!-- <div class="box-info">
                            <h5>Opentime:</h5>
                            <p>Monay - Friday: 08:00 - 20:00</p>
                            <p>Saturday - Sunday: 10:00 - 18:00</p>
                        </div> -->
                        <div class="box-info">
                            <h5>Follow Us:</h5>
                            <div class="icon-social style2">
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
    </div>
</section>

<!-- logo -->
<!-- <section class="flat-brand tf-section3">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="title-section center">
                    <h2>Our partners</h2>
                </div>
                <div class="swiper-container carousel-5">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <div class="slogan-logo">
                                <a href="#">
                                    <img class="lazyload"
                                        data-src="<?= base_url(); ?>/assets/assets/images/partner/par1.png"
                                        src="<?= base_url(); ?>/assets/assets/images/partner/par1.png" alt="images">
                                </a>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="slogan-logo">
                                <a href="#">
                                    <img class="lazyload"
                                        data-src="<?= base_url(); ?>/assets/assets/images/partner/par2.png"
                                        src="<?= base_url(); ?>/assets/assets/images/partner/par2.png" alt="images">
                                </a>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="slogan-logo">
                                <a href="#">
                                    <img class="lazyload"
                                        data-src="<?= base_url(); ?>/assets/assets/images/partner/par3.png"
                                        src="<?= base_url(); ?>/assets/assets/images/partner/par3.png" alt="images">
                                </a>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="slogan-logo">
                                <a href="#">
                                    <img class="lazyload"
                                        data-src="<?= base_url(); ?>/assets/assets/images/partner/par4.png"
                                        src="<?= base_url(); ?>/assets/assets/images/partner/par4.png" alt="images">
                                </a>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="slogan-logo">
                                <a href="#">
                                    <img class="lazyload"
                                        data-src="<?= base_url(); ?>/assets/assets/images/partner/par5.png"
                                        src="<?= base_url(); ?>/assets/assets/images/partner/par5.png" alt="images">
                                </a>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="slogan-logo">
                                <a href="#">
                                    <img class="lazyload"
                                        data-src="<?= base_url(); ?>/assets/assets/images/partner/par6.png"
                                        src="<?= base_url(); ?>/assets/assets/images/partner/par6.png" alt="images">
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section> -->

<!-- jQuery required for hiding message -->
<script>
    setTimeout(function() {
        $('#successMessage').fadeOut('slow');
    }, 3000); // 3 seconds
</script>

<?php include('footer.php'); ?>