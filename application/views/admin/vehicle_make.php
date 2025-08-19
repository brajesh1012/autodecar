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
                            <form action="<?= base_url(ADMIN_PATH . '/add-make'); ?>" method="POST"  enctype="multipart/form-data">
                                <input type="hidden" name="added_by"
                                    value="<?= $this->session->userdata('user_id'); ?>">
                                <h1 class="admin-title mb-3">Make</h1>

                                <div class="tfcl-add-listing car-details">
                                    <h3>Vehicle Make</h3>
                                    <div class="form-group-2">
                                          <div class="form-group">
                                            <label for="listing_title">Vehicle Type *</label>
                                            <select name="vehicle_type_id" id="vehicle_type_id" class="form-control">
                                                <option value="">Select Vehicle Type</option>
                                                <?php foreach($vehicle_types as $vehicle_type){ ?>
                                                <option value="<?= $vehicle_type->id; ?>"><?= $vehicle_type->name; ?>
                                                </option>
                                                <?php } ?>
                                            </select>
                                            <small class="text-danger"><?= form_error('vehicle_type_id') ?></small>

                                        </div>
                                    
                                            <div class="form-group">
                                            <label for="listing_title">Categories*</label>
                                            <select name="cat_id" id="cat_id" class="form-control">
                                                <option value="">Select category</option>
                                                <?php foreach($categories as $cat){ ?>
                                                <option value="<?= $cat->id; ?>"><?= $cat->name; ?>
                                                </option>
                                                <?php } ?>
                                            </select>
                                            <small class="text-danger"><?= form_error('cat_id') ?></small>

                                        </div>

                                        <div class="form-group">
                                            <label for="listing_title">Make *</label>
                                            <input type="text" class="form-control" name="name"
                                                placeholder="Enter Make(e.g. Honda, Toyota)"
                                                value="<?= set_value('name') ?>">
                                            <small class="text-danger"><?= form_error('name') ?></small>

                                        </div>
                                   
                                        <div class="form-group">
                                            <label for="photos">Brand Logo</label>
                                            <input type="file" accept="image/*" class="form-control" name="logo"
                                                placeholder="Upload Logo" value="<?= set_value('logo') ?>">
                                        </div>
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


<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="content-area">
                <div class="tfcl-dashboard">
                    <div class="tfcl-add-listing car-details">
                        <h3>Make List</h3>
                        <div class="tfcl-table-listing">
                            <div class="table-responsive">
                                <table id="example" class="cell-border">
                                    <thead>
                                        <tr>
                                            <th>Id</th>
                                            <th>Image</th>
                                            <th>Name</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php foreach($makes as $make){?>
                                        <tr>
                                            <td><?= $make->id; ?></td>
                                             <td><img src="<?= base_url('uploads/brands/').$make->logo; ?>" alt=""></td>
                                            <td><?= $make->name; ?></td>
                                            <td><a
                                                    href="<?= base_url(ADMIN_PATH . '/delete-make?m_id='.$make->id); ?>">Delete</a>
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
<script>
$(document).ready(function() {
    setTimeout(function() {
        $('#success-msg').fadeOut('slow');
    }, 3000); // 3000ms = 3 seconds
});
</script>

<script>
    var URL = "<?= base_url(ADMIN_PATH . "/get-category-by-vehicle-type") ?>";
</script>