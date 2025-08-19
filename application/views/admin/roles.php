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
    <!-- <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="content-area">
                    <main id="main" class="main-content">
                        <div class="tfcl-dashboard">
                            <?php if ($this->session->flashdata('success')): ?>
                            <div class="alert alert-success" id="success-msg">
                                <?= $this->session->flashdata('success') ?></div>
                            <?php endif; ?>
                            <form action="<?= base_url(ADMIN_PATH . '/add-roles'); ?>" method="POST"
                                enctype="multipart/form-data">
                                <input type="hidden" name="added_by"
                                    value="<?= $this->session->userdata('user_id'); ?>">
                                <h1 class="admin-title mb-3">Roles</h1>

                                <div class="tfcl-add-listing car-details">
                                    <h3>Roles</h3>

                                    <div class="form-group">
                                        <label for="listing_title">Role *</label>
                                        <input type="text" class="form-control" name="name" placeholder="Enter Role"
                                            value="<?= set_value('name') ?>">
                                        <small class="text-danger"><?= form_error('name') ?></small>
                                    </div>

                                    <?php foreach($permissions as $per){ ?>
                                    <div class="form-group">
                                        <label for="listing_title"><?= $per->name; ?></label>
                                        <input type="checkbox" name="permission[]" value="<?= $per->id; ?>">
                                    </div>
                                    <?php } ?>
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
    </div> -->
</div>

<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="content-area">
                <div class="tfcl-dashboard">
                    <div class="tfcl-add-listing car-details">
                        <h3>Roles List</h3>
                        <div class="tfcl-table-listing">
                            <div class="table-responsive">
                                <table id="example" class="cell-border">
                                    <thead>
                                        <tr>
                                            <th>Name</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php foreach($roles as $role){?>
                                        <tr>
                                            <td><?= $role->role?></td>
                                            <td><a
                                                    href="<?= base_url(ADMIN_PATH . '/edit-roles?id='.$role->id); ?>">Update</a>
                                            </td>
                                        </tr>
                                        <?php } ?>
                                    </tbody>

                                </table>
                            </div>

                        </div>
                    </div>
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