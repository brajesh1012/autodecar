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
                            <form action="<?= base_url(ADMIN_PATH . '/add-model'); ?>" method="POST"
                                enctype="multipart/form-data">
                                <h1 class="admin-title mb-3">Model</h1>

                                <div class="tfcl-add-listing car-details">
                                    <h3>Vehicle Model</h3>

                                     <div class="form-group-2">
                                         <div class="form-group">
                                        <label for="listing_title">Vehicle Type *</label>
                                        <select name="vehicle_type_id" id="vehicle_type_id" onchange="on_change_vehicle();" class="form-control">
                                            <option value="">Select Vehicle Type</option>
                                            <?php foreach($vehicle_types as $vehicle_type){ ?>
                                            <option value="<?= $vehicle_type->id; ?>"><?= $vehicle_type->name; ?></option>
                                                <?php } ?>
                                        </select>
                                        <small class="text-danger"><?= form_error('vehicle_type_id') ?></small>

                                    </div>

                                    <div class="form-group">
                                            <label for="listing_title">Categories*</label>
                                            <select name="cat_id" id="cat_id" onchange="on_change_cat();" class="form-control">
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
                                            <option value="<?= $make->id; ?>"><?= $make->name; ?></option>
                                                <?php } ?>
                                        </select>
                                        <small class="text-danger"><?= form_error('make_id') ?></small>

                                    </div>



                                    <div class="form-group">
                                        <label for="listing_title">Model *</label>
                                        <input type="text" class="form-control"  name="name"
                                            placeholder="Enter model(e.g. Civic, Fortuner)"
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
                        <h3>Model List</h3>
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
                                        <?php foreach($models as $model){?>
                                        <tr>
                                            <td><?= $model->id; ?></td>
                                            <td><?= $model->name; ?></td>
                                            <td><a
                                                    href="<?= base_url(ADMIN_PATH . '/delete-model?m_id='.$model->id); ?>">Delete</a>
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
    function on_change_vehicle() {
    const vehicleTypeId = $("#vehicle_type_id").val();

    if (vehicleTypeId !== "") {
        $('#cat_id').prop('disabled', false);

        $.ajax({
            url: "<?= base_url(ADMIN_PATH . "/get-category-by-vehicle-type") ?>",
            type: 'POST',
            data: { vehicle_type_id: vehicleTypeId },
            dataType: 'json',
            success: function(response) {
                $('#cat_id').html('<option value="">Select Category</option>');
                $.each(response, function(index, item) {
                    $('#cat_id').append('<option value="' + item.id + '">' + item.name + '</option>');
                });

                if (response.length === 1) {
                    $('#cat_id').val(response[0].id);
                    $('#cat_id').addClass('single-option-tab');
                    // Trigger on_change_cat to load makes when single option is selected
                    on_change_cat();
                } else {
                    $('#cat_id').removeClass('single-option-tab');
                }
            },
            error: function() {
                alert('Error loading category list.');
            }
        });
    } else {
        $('#cat_id').prop('disabled', true);
        $('#cat_id').html('<option value="">Select Category</option>');
    }
}

function on_change_cat() {
    const catId = $("#cat_id").val();

    if (catId !== "") {
        $('#make_id').prop('disabled', false);

        $.ajax({
            url: "<?= base_url(ADMIN_PATH . "/get-makes-by-category") ?>",
            type: 'POST',
            data: { cat_id: catId },
            dataType: 'json',
            success: function(response) {
                $('#make_id').html('<option value="">Select Make</option>');
                $.each(response, function(index, item) {
                    $('#make_id').append('<option value="' + item.id + '">' + item.name + '</option>');
                });

                if (response.length === 1) {
                    $('#make_id').val(response[0].id);
                    $('#make_id').addClass('single-option-tab');
                    // Trigger on_change_make to load models when single option is selected
                    on_change_make();
                } else {
                    $('#make_id').removeClass('single-option-tab');
                }
            },
            error: function() {
                alert('Error loading make list.');
            }
        });
    } else {
        $('#make_id').prop('disabled', true);
        $('#make_id').html('<option value="">Select Make</option>');
        $('#make_id').removeClass('single-option-tab');
        
        $('#model_id').prop('disabled', true);
        $('#model_id').html('<option value="">Select Model</option>');
        $('#model_id').removeClass('single-option-tab');
    }
}
    //    var URL = "<?= base_url(ADMIN_PATH . "/get-category-by-vehicle-type") ?>";
    // var URL1 = "<?= base_url(ADMIN_PATH . "/get-makes-by-category") ?>";
</script>