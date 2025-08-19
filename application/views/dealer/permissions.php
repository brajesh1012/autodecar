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
                            <form action="<?= base_url(ADMIN_PATH . '/add-permission'); ?>" method="POST"
                                enctype="multipart/form-data">
                                <h1 class="admin-title mb-3">Permissions</h1>

                                <div class="tfcl-add-listing car-details">
                                    <h3>Permissions</h3>

                                    <div class="form-group">
                                        <label for="listing_title">Permissions *</label>
                                        <input type="text" class="form-control" name="name"
                                            placeholder="Enter Permissions"
                                            value="<?= set_value('name') ?>">
                                        <small class="text-danger"><?= form_error('name') ?></small>

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

<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="content-area">
                <div class="tfcl-dashboard">
                    <div class="tfcl-add-listing car-details">
                        <h3>Permissions List</h3>
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
                                        <?php foreach($permissions as $permission){?>
                                        <tr>
                                            <td><?= $permission->name?></td>
                                            <!-- <td><a
                                                    href="<?= base_url(ADMIN_PATH . '/delete-permission?p_id='.$permission->id); ?>">Delete</a>
                                            </td> -->

                                            <td>
                                                <a href="javascript:void(0);" 
                                                onclick="confirmDelete(<?= $permission->id ?>)">Delete</a>
                                            </td>
                                        </tr>
                                        <?php } ?>
                                    </tbody>
                                    <!-- <tfoot>
                        <tr>
                            <th>Name</th>
                            <th>Action</th>
                        </tr>
                    </tfoot> -->
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
<script>
function confirmDelete(permissionId) {
    Swal.fire({
        title: 'Are you sure?',
        text: "You want to delete this permission?",
        icon: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#d33',
        cancelButtonColor: '#3085d6',
        confirmButtonText: 'Yes, delete it!',
        cancelButtonText: 'Cancel'
    }).then((result) => {
        if (result.isConfirmed) {
            window.location.href = "<?= base_url(ADMIN_PATH . '/delete-permission?p_id=') ?>" + permissionId;
        }
    });
}
</script>
