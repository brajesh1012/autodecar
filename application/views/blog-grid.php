 

 <?php include('head.php'); ?>
            <section class="flat-title ">
                <div class="container2">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="title-inner style">
                                <div class="title-group fs-12"><a class="home fw-6 text-color-3"
                                        href="<?= base_url(); ?>">Home</a><span>Vehicles for sale</span></div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
 <style>

    .hover-img .img-style img {
    width: 75%;
    object-fit: cover;
    transition: transform 500ms ease;
}
 </style>
            <section class="tf-section3 flat-blog-grid flat-blog-list flat-property">
                <div class="container">
                    <div class="inner-heading flex-two flex-wrap">
                        <h1 class="heading-listing">Blog Grid</h1>
                        <div class="social-listing flex-six flex-wrap">
                            <p>Share this page:</p>
                            <div class="icon-social style1">
                                <a href="#"><i class="icon-autodeal-facebook"></i></a>
                                <a href="#"><i class="icon-autodeal-linkedin"></i></a>
                                <a href="#"><i class="icon-autodeal-twitter"></i></a>
                                <a href="#"><i class="icon-autodeal-instagram"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="post">
                                <div class="flat-blog">
                                    <div class="row ">
                                        <!-- <div class="col-lg-4 col-md-6" >
                                            <div class="box hover-img ">
                                                <div class="images img-style relative flex-none">
                                                    <img src="<?= base_url(); ?>/assets/assets/images/blog/blog-6.jpg" alt="images">
                                                    <div class="date">January 28, 2024</div>
                                                </div>
                                                <div class="content">
                                                    <div class="sub-box flex align-center fs-13 fw-6">                                                     
                                                        <a href="#" class="admin fw-7 text-color-2">Jerome Bell</a>
                                                        <a href="#" class="category text-color-3">First Drives</a>
                                                    </div>
                                                    <h3><a href="<?= base_url('blog-details'); ?>">Building gains into housing stocks and how to trade the sector</a></h3>
                                                    
                                                    <p>The average contract interest rate for 30-year fixed-rate mortgages with conforming loan balances...</p>
                                                </div>
                                            </div>
                                        </div> -->
                                        <!-- <div class="col-lg-4 col-md-6" >
                                            <div class="box hover-img ">
                                                <div class="images img-style relative flex-none">
                                                    <img src="<?= base_url(); ?>/assets/assets/images/blog/blog-7.jpg" alt="images">
                                                    <div class="date">January 28, 2024</div>
                                                </div>
                                                <div class="content">
                                                    <div class="sub-box flex align-center fs-13 fw-6">                                                     
                                                        <a href="#" class="admin fw-7 text-color-2">Jerome Bell</a>
                                                        <a href="#" class="category text-color-3">First Drives</a>
                                                    </div>
                                                    <h3><a href="<?= base_url('blog-details'); ?>">Building gains into housing stocks and how to trade the sector</a></h3>
                                                    
                                                    <p>The average contract interest rate for 30-year fixed-rate mortgages with conforming loan balances...</p>
                                                </div>
                                            </div>
                                        </div> -->
                                        <?php foreach($blogs as $blog) {
                                               $date = $blog->created_at; 
                                               $formatted_date = date("j M Y g:i a", strtotime($date));
                                            ?>
                                        <div class="col-lg-4 col-md-6" >
                                            <div class="box hover-img ">
                                                <div class="images img-style relative flex-none">
                                                    <!-- <img src="<?= base_url(); ?>/assets/assets/images/blog/blog-8.jpg" alt="images"> -->
                                                    <img src="<?= base_url('uploads/blogs/'. $blog->img); ?>" alt="images">
                                                    <div class="date"><?= $formatted_date; ?></div>
                                                </div>
                                                <div class="content">
                                                    <div class="sub-box flex align-center fs-13 fw-6">                                                     
                                                        <a href="#" class="admin fw-7 text-color-2"><?= $blog->name ; ?></a>
                                                        <a href="#" class="category text-color-3"><?= $blog->title ; ?></a>
                                                    </div>
                                                    <p style = "width: 340px !impotant;"><a href="<?= base_url('blog-details/' . $blog->id); ?>" ><?= $blog->description ; ?></a></p>
                                                    <!-- <h3><a href="<?= base_url('blog-details'); ?>">Building gains into housing stocks and how to trade the sector</a></h3>
                                                    
                                                    <p>The average contract interest rate for 30-year fixed-rate mortgages with conforming loan balances...</p> -->
                                                </div>
                                            </div>
                                        </div>
                                        <?php } ?>
                                        <!-- <div class="col-lg-4 col-md-6" >
                                            <div class="box hover-img ">
                                                <div class="images img-style relative flex-none">
                                                    <img src="<?= base_url(); ?>/assets/assets/images/blog/blog-9.jpg" alt="images">
                                                    <div class="date">January 28, 2024</div>
                                                </div>
                                                <div class="content">
                                                    <div class="sub-box flex align-center fs-13 fw-6">                                                     
                                                        <a href="#" class="admin fw-7 text-color-2">Jerome Bell</a>
                                                        <a href="#" class="category text-color-3">First Drives</a>
                                                    </div>
                                                    <h3><a href="<?= base_url('blog-details'); ?>">Building gains into housing stocks and how to trade the sector</a></h3>
                                                    
                                                    <p>The average contract interest rate for 30-year fixed-rate mortgages with conforming loan balances...</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col-md-6" >
                                            <div class="box hover-img ">
                                                <div class="images img-style relative flex-none">
                                                    <img src="<?= base_url(); ?>/assets/assets/images/blog/blog-10.jpg" alt="images">
                                                    <div class="date">January 28, 2024</div>
                                                </div>
                                                <div class="content">
                                                    <div class="sub-box flex align-center fs-13 fw-6">                                                     
                                                        <a href="#" class="admin fw-7 text-color-2">Jerome Bell</a>
                                                        <a href="#" class="category text-color-3">Technology</a>
                                                    </div>
                                                    <h3><a href="<?= base_url('blog-details'); ?>">Building gains into housing stocks and how to trade the sector</a></h3>
                                                    
                                                    <p>The average contract interest rate for 30-year fixed-rate mortgages with conforming loan balances...</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col-md-6" >
                                            <div class="box hover-img ">
                                                <div class="images img-style relative flex-none">
                                                    <img src="<?= base_url(); ?>/assets/assets/images/blog/blog-11.jpg" alt="images">
                                                    <div class="date">January 28, 2024</div>
                                                </div>
                                                <div class="content">
                                                    <div class="sub-box flex align-center fs-13 fw-6">                                                     
                                                        <a href="#" class="admin fw-7 text-color-2">Jerome Bell</a>
                                                        <a href="#" class="category text-color-3">Races and chases</a>
                                                    </div>
                                                    <h3><a href="<?= base_url('blog-details'); ?>">Building gains into housing stocks and how to trade the sector</a></h3>
                                                    
                                                    <p>The average contract interest rate for 30-year fixed-rate mortgages with conforming loan balances...</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col-md-6" >
                                            <div class="box hover-img ">
                                                <div class="images img-style relative flex-none">
                                                    <img src="<?= base_url(); ?>/assets/assets/images/blog/blog-12.jpg" alt="images">
                                                    <div class="date">January 28, 2024</div>
                                                </div>
                                                <div class="content">
                                                    <div class="sub-box flex align-center fs-13 fw-6">                                                     
                                                        <a href="#" class="admin fw-7 text-color-2">Jerome Bell</a>
                                                        <a href="#" class="category text-color-3">New car review</a>
                                                    </div>
                                                    <h3><a href="<?= base_url('blog-details'); ?>">Building gains into housing stocks and how to trade the sector</a></h3>
                                                    
                                                    <p>The average contract interest rate for 30-year fixed-rate mortgages with conforming loan balances...</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col-md-6" >
                                            <div class="box hover-img ">
                                                <div class="images img-style relative flex-none">
                                                    <img src="<?= base_url(); ?>/assets/assets/images/blog/blog-13.jpg" alt="images">
                                                    <div class="date">January 28, 2024</div>
                                                </div>
                                                <div class="content">
                                                    <div class="sub-box flex align-center fs-13 fw-6">                                                     
                                                        <a href="#" class="admin fw-7 text-color-2">Jerome Bell</a>
                                                        <a href="#" class="category text-color-3">Recalls</a>
                                                    </div>
                                                    <h3><a href="<?= base_url('blog-details'); ?>">Building gains into housing stocks and how to trade the sector</a></h3>
                                                    
                                                    <p>The average contract interest rate for 30-year fixed-rate mortgages with conforming loan balances...</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col-md-6" >
                                            <div class="box hover-img ">
                                                <div class="images img-style relative flex-none">
                                                    <img src="<?= base_url(); ?>/assets/assets/images/blog/blog-14.jpg" alt="images">
                                                    <div class="date">January 28, 2024</div>
                                                </div>
                                                <div class="content">
                                                    <div class="sub-box flex align-center fs-13 fw-6">                                                     
                                                        <a href="#" class="admin fw-7 text-color-2">Jerome Bell</a>
                                                        <a href="#" class="category text-color-3">New car review</a>
                                                    </div>
                                                    <h3><a href="<?= base_url('blog-details'); ?>">Building gains into housing stocks and how to trade the sector</a></h3>
                                                    
                                                    <p>The average contract interest rate for 30-year fixed-rate mortgages with conforming loan balances...</p>
                                                </div>
                                            </div>
                                        </div> -->
                                    </div>
                                </div>
                                <!-- <div class="themesflat-pagination clearfix center">
                                    <ul>
                                        <li><a href="#" class="page-numbers style"><i class="far fa-angle-left"></i></a>
                                        </li>
                                        <li><a href="#" class="page-numbers">1</a></li>
                                        <li><a href="#" class="page-numbers">2</a></li>
                                        <li><a href="#" class="page-numbers current">3</a></li>
                                        <li><a href="#" class="page-numbers">4</a></li>
                                        <li><a href="#" class="page-numbers">...</a></li>
                                        <li><a href="#" class="page-numbers style"><i
                                                    class="far fa-angle-right"></i></a></li>
                                    </ul>
                                </div> -->
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <?php include('footer.php'); ?>
          