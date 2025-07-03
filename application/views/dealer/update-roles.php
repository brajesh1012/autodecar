<style>
.text-p,
p {
    font-weight: 400;
    font-size: 14px;
    line-height: 19.6px;
    color: #d95c32;
    font-family: "Inter", sans-serif;
}
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
                            <form action="<?= base_url(ADMIN_PATH . '/update-roles'); ?>" method="POST"
                                enctype="multipart/form-data">
                                <h1 class="admin-title mb-3">Roles</h1>

                                <div class="tfcl-add-listing car-details">
                                    <h3>Roles</h3>
                                        <input type="hidden" class="form-control" name="r_id"
                                            value="<?= $roles->id; ?>">
                                    <div class="form-group">
                                        <label for="listing_title">Role *</label>
                                        <input type="text" class="form-control" name="role" placeholder="Enter Role"
                                            value="<?= $roles->role; ?>">
                                        <small class="text-danger"><?= form_error('role') ?></small>
                                    </div>

                                 <?php foreach($permissions as $per) { ?>
                                    <div class="form-group">
                                        <label><?= $per->name; ?></label>
                                        <input type="checkbox" name="permission[]" value="<?= $per->id; ?>"
                                            <?= in_array($per->id, $assigned_permissions) ? 'checked' : ''; ?>>
                                    </div>
                                <?php } ?>
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
</div>
<script>
$(document).ready(function() {
    setTimeout(function() {
        $('#success-msg').fadeOut('slow');
    }, 3000); // 3000ms = 3 seconds
});
</script>