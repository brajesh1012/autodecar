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
                            <form action="<?= base_url(ADMIN_PATH . '/edit-users?user_id='.$user->id); ?>" method="POST"
                                enctype="multipart/form-data">
                                <h1 class="admin-title mb-3">Users</h1>

                                <div class="tfcl-add-listing car-details">
                                    <h3>User</h3>
                                    <div class="form-group-2">

                                        <div class="form-group">
                                            <label for="name">Username *</label>


                                            <input type="text" class="form-control" name="username" placeholder="Enter Username"
                                                value="<?= $user->username; ?>">
                                            <small class="text-danger"><?= form_error('username') ?></small>
                                        </div>


                                        <div class="form-group">
                                            <label for="mobile">Mobile*</label>
                                            <input type="text" class="form-control" name="mobile"
                                                placeholder="Enter Mobile" value="<?= $user->mobile; ?>">
                                            <small class="text-danger"><?= form_error('mobile') ?></small>
                                        </div>
                                    </div>
                                    <div class="form-group-2">
                                   <div class="form-group">
                                            <label for="email">Email*</label>
                                            <input type="text" class="form-control" name="email"
                                                placeholder="Enter Email" value="<?= $user->email; ?>">
                                            <small class="text-danger"><?= form_error('email') ?></small>
                                        </div>
                                       

                                        <div class="form-group">
                                            <label for="photos">Image</label>
                                            <input type="file" accept="image/*" class="form-control" name="img"
                                                placeholder="Upload Image" value="<?= set_value('img') ?>">
                                            <input type="hidden" name="old_image" Value="<?= $user->profile; ?>">

                                            <img src="<?= base_url('uploads/profile/'.$user->profile);?>" alt="" height="100px"
                                                width="100px">
                                        </div>
                                    </div>

                                    <div class="group-button-submit">
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