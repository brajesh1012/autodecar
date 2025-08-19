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

            <section class="tf-section3 flat-blog-detail flat-property-detail">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-lg-10">
                            <div class="card flex-row shadow" style="overflow: hidden;">
                                <!-- Image section -->
                                <div class="col-md-5 p-0">
                                    <?php if(!empty($blog->img)){ ?>
                                    <img src="<?= base_url('uploads/blogs/' . $blog->img); ?>"
                                        alt="blog image"
                                        style="height: 100%; width: 100%; object-fit: cover;">
                                        <?php }else{?>
                                            <img src="<?= base_url('uploads/blogs/blog.jpg'); ?>"
                                        alt="blog image"
                                       >
                                            <?php } ?>
                                </div>

                                <!-- Content section -->
                                <div class="col-md-7 p-4">
                                    <h2 class="mb-3"><?= $blog->title; ?></h2>
                                    <h5 class="text-muted mb-3"><?= $blog->name; ?></h5>
                                    <div class="blog-description">
                                        <?= $blog->description; ?> <!-- allows HTML like <p>, <ul> etc. -->
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>


            <?php include('footer.php'); ?>