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
                            <form action="<?= base_url(ADMIN_PATH . '/edit-blog?b_id='.$about->id); ?>" method="POST"
                                enctype="multipart/form-data">
                                <!-- <input type="hidden" name="added_by"
                                    value="<?= $this->session->userdata('user_id'); ?>"> -->
                                <h1 class="admin-title mb-3">Blogs</h1>

                                <div class="tfcl-add-listing car-details">
                                    <h3>Blog</h3>
                                    <div class="form-group-2">

                                        <div class="form-group">
                                            <label for="name">Name *</label>


                                            <input type="text" class="form-control" name="name" placeholder="Enter Name"
                                                value="<?= $about->name; ?>">
                                            <small class="text-danger"><?= form_error('name') ?></small>
                                        </div>


                                        <div class="form-group">
                                            <label for="title">Title*</label>
                                            <input type="text" class="form-control" name="title"
                                                placeholder="Enter Title" value="<?= $about->title; ?>">
                                            <small class="text-danger"><?= form_error('title') ?></small>
                                        </div>
                                    </div>
                                    <div class="form-group-2">

                                        <div class="form-group">
                                            <label for="listing_title">Description*</label>
                                            <textarea name="description" id=""
                                                class="editor"><?= $about->description; ?></textarea>
                                            <small class="text-danger"><?= form_error('description') ?></small>
                                        </div>

                                        <div class="form-group">
                                            <label for="photos">Image</label>
                                            <input type="file" accept="image/*" class="form-control" name="img"
                                                placeholder="Upload Image" value="<?= set_value('img') ?>">
                                            <input type="hidden" name="old_image" Value="<?= $about->img; ?>">

                                            <img src="<?= base_url('uploads/'.$about->img);?>" alt="" height="100px"
                                                width="100px">
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