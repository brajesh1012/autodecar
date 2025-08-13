<style>
.text-p,
p {
    font-weight: 400;
    font-size: 14px;
    line-height: 19.6px;
    color: #141414ff;
    font-family: "Inter", sans-serif;
}

/* .tfcl-add-listing .form-group-2 > * {
    width: calc(80% - 30px);
    margin-left: 30px;
} */

</style>

<div id="themesflat-content">
    <div class="dashboard-toggle">Show DashBoard</div>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="content-area">
                    <!-- Success/Error Messages -->

                    <main id="main" class="main-content">
                        <div class="tfcl-dashboard">
                            <?php if ($this->session->flashdata('success')): ?>
                            <div class="alert alert-success" id="success-msg">
                                <?= $this->session->flashdata('success') ?></div>
                            <?php endif; ?>
                            <form action="<?= base_url(ADMIN_PATH . '/about'); ?>" method="POST"  enctype="multipart/form-data">
                                <!-- <input type="hidden" name="added_by"
                                    value="<?= $this->session->userdata('user_id'); ?>"> -->
                                <h1 class="admin-title mb-3">About Us</h1>

                                <div class="tfcl-add-listing car-details">
                                    <h3>Categories</h3>
                                    <div class="form-group-2">
                                        <div class="form-group">
                                            <label for="listing_title">Title*</label>
                                            <input type="text" class="form-control" name="title"
                                                placeholder="Enter Title"
                                                value="<?= $about->title; ?>">
                                            <small class="text-danger"><?= form_error('title') ?></small>
                                        </div>

                                        <div class="form-group">
                                            <label for="listing_title">Description*</label>
                                           <textarea name="subtitle" id="" class="editor"><?= $about->subtitle; ?></textarea>
                                            <small class="text-danger"><?= form_error('subtitle') ?></small>
                                        </div>
                                    </div>
                                    <div class="form-group-2">
                                        <div class="form-group">
                                            <label for="photos">Image</label>
                                            <input type="file" accept="image/*" class="form-control" name="img"
                                                placeholder="Upload Image" value="<?= set_value('img') ?>">
                                                <input type="hidden" name="old_image" Value="<?= $about->img; ?>">

                                                <img src="<?= base_url('uploads/'.$about->img);?>" alt="" height ="100px" width="100px">
                                        </div>
                                    
                                        <div class="form-group">
                                            <label for="photos">Image 2</label>
                                            <input type="file" accept="image/*" class="form-control" name="img2"
                                                placeholder="Upload Image" value="<?= set_value('img2') ?>">
                                                <input type="hidden" name="old_image2" Value="<?= $about->img2; ?>">

                                                <img src="<?= base_url('uploads/'.$about->img2);?>" alt="" height ="100px" width="100px">
                                        </div>
                                </div>

                                  <div class="form-group-2">
                                          <div class="form-group">
                                            <label for="title1">Title 1*</label>
                                            <input type="text" class="form-control" name="title1"
                                                placeholder="Enter Title 1"
                                                value="<?= $about->title1; ?>">
                                            <small class="text-danger"><?= form_error('title1') ?></small>
                                        </div>

                                        <div class="form-group">
                                            <label for="description1">Description 1*</label>
                                           <textarea name="description1" id="" class="editor"><?= $about->description1; ?></textarea>
                                            <small class="text-danger"><?= form_error('description1') ?></small>
                                        </div>
                                        
                                        <!-- <div class="form-group">
                                            <label for="photos">Icon 1</label>
                                            <input type="file" accept="image/*" class="form-control" name="icon1"
                                                placeholder="Upload Image" value="<?= set_value('icon1') ?>">
                                                <input type="hidden" name="old_icon1" Value="<?= $about->icon1; ?>">

                                                <img src="<?= base_url('uploads/'.$about->icon1);?>" alt="" height ="100px" width="100px">
                                        </div> -->
                                 </div>

                                 <div class="form-group-2">
                                          <div class="form-group">
                                            <label for="title2">Title 2*</label>
                                            <input type="text" class="form-control" name="title2"
                                                placeholder="Enter Title 2"
                                                value="<?= $about->title2; ?>">
                                            <small class="text-danger"><?= form_error('title2') ?></small>
                                        </div>

                                        <div class="form-group">
                                            <label for="description2">Description 2*</label>
                                           <textarea name="description2" id="" class="editor"><?= $about->description2; ?></textarea>
                                            <small class="text-danger"><?= form_error('description2') ?></small>
                                        </div>
                                 </div>

                                 
                                 <div class="form-group-2">
                                          <div class="form-group">
                                            <label for="title3">Title 3*</label>
                                            <input type="text" class="form-control" name="title3"
                                                placeholder="Enter Title 3"
                                                value="<?= $about->title3; ?>">
                                            <small class="text-danger"><?= form_error('title3') ?></small>
                                        </div>

                                        <div class="form-group">
                                            <label for="description3">Description 3*</label>
                                           <textarea name="description3" id="" class="editor"><?= $about->description3; ?></textarea>
                                            <small class="text-danger"><?= form_error('description3') ?></small>
                                        </div>
                                 </div>


                                <div class="group-button-submit">
                                    <!-- <button class="pre-btn">List Now</button>
                                    <button type class="second-btn">Save & Preview</button> -->
                                    <button type="submit" class="second-btn">Submit</button>
                                </div>

                            </form>
                        </div>
                    </main>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
$(document).ready(function() {
    setTimeout(function() {
        $('#success-msg').fadeOut('slow');
    }, 3000); // 3000ms = 3 seconds
});
</script>

