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
                            <form action="<?= base_url(ADMIN_PATH . '/add-variant'); ?>" method="POST"
                                enctype="multipart/form-data">
                                <h1 class="admin-title mb-3">Variant</h1>

                                <div class="tfcl-add-listing car-details">
                                    <h3>Vehicle Variant</h3>

                                     <div class="form-group-2">
                                         <div class="form-group">
                                        <label for="listing_title">Vehicle Type *</label>
                                        <select name="vehicle_type_id" id="vehicle_type_id" class="form-control">
                                            <option value="">Select Vehicle Type</option>
                                            <?php foreach($vehicle_types as $vehicle_type){ ?>
                                            <option value="<?= $vehicle_type->id; ?>" <?php if(set_value('vehicle_type_id') == $vehicle_type->id ){ echo "selected"; } ?>><?= $vehicle_type->name; ?></option>
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
                                        <select name="make_id" id="make_id" class="form-control">
                                            <option value="">Select Make</option>
                                            <?php foreach($makes as $make){ ?>
                                            <option value="<?= $make->id; ?>" <?php if(set_value('make_id') == $make->id ){ echo "selected"; } ?>><?= $make->name; ?></option>
                                                <?php } ?>
                                        </select>
                                        <small class="text-danger"><?= form_error('make_id') ?></small>

                                    </div>


                                    <div class="form-group">
                                        <label for="listing_title">Model *</label>
                                        <select name="model_id" id="model_id" class="form-control">
                                            <option value="">Select Model</option>
                                            <?php foreach($models as $model){ ?>
                                            <option value="<?= $model->id; ?>" <?php if(set_value('model_id') == $model->id){ echo "selected"; } ?> ><?= $model->name; ?></option>
                                                <?php } ?>
                                        </select>
                                        <small class="text-danger"><?= form_error('model_id') ?></small>

                                    </div>

                                    <div class="form-group">
                                        <label for="listing_title">Variant *</label>
                                        <input type="text" class="form-control" name="name"
                                            placeholder="Enter Variant(e.g. Swift LXI, Swift VXI)"
                                            value="<?= set_value('name') ?>">
                                        <small class="text-danger"><?= form_error('name') ?></small>

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
                        <h3>Variant List</h3>
                        <div class="tfcl-table-listing">
                            <div class="table-responsive">
                                <table id="example" class="cell-border">
                                    <thead>
                                        <tr>
                                            <th>Id</th>
                                            <th>Name</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php foreach($variants as $variant){?>
                                        <tr>
                                            <td><?= $variant->id; ?></td>
                                            <td><?= $variant->name; ?></td>
                                            <td><a
                                                    href="<?= base_url(ADMIN_PATH . '/delete-variant?m_id='.$variant->id); ?>">Delete</a>
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

    var URL = "<?= base_url(ADMIN_PATH . "/get-category-by-vehicle-type") ?>";
    var URL1 = "<?= base_url(ADMIN_PATH . "/get-makes-by-category") ?>";
    var URL2 = "<?= base_url(ADMIN_PATH . "/get-modal-by-make") ?>";
    var URL3 = "<?= base_url(ADMIN_PATH . "/get-modal-by-make") ?>";
</script>