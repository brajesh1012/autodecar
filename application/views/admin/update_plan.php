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
                            <form action="<?= base_url(ADMIN_PATH . '/update-plan/'.$plan->id) ?>" method="POST"
                                enctype="multipart/form-data">
                                <h1 class="admin-title mb-3">Update Plan </h1>

                                <div class="tfcl-add-listing car-details">
                                    <h3>Update Plan </h3>

                                     <div class="form-group-4">
                                    <div class="form-group">
                                        <label for="plan_name">Plan Name *</label>
                                        <input type="text" class="form-control" name="plan_name"
                                            placeholder="Enter Plan Name"
                                            value="<?= $plan->plan_name; ?>">
                                        <small class="text-danger"><?= form_error('plan_name') ?></small>

                                    </div>
                                     <div class="form-group">
                                        <label for="price">Price *</label>
                                        <input type="text" class="form-control" name="price"
                                            placeholder="Enter Price"
                                            value="<?= $plan->price; ?>">
                                        <small class="text-danger"><?= form_error('price') ?></small>

                                    </div>
                                    
                                    <div class="form-group">
                                        <label for="duration_days">Duration Days *</label>
                                        <select name="duration_days" class="form-control">
                                            <option value="">-- Select Duration --</option>
                                            <option value="7" <?php if($plan->duration_days=='7'){ echo "selected"; } ?> >7 Days</option>
                                            <option value="30" <?php if($plan->duration_days=='30'){ echo "selected"; } ?>>1 Month</option>
                                            <option value="90" <?php if($plan->duration_days=='90'){ echo "selected"; } ?>>3 Months</option>
                                            <option value="180" <?php if($plan->duration_days=='180'){ echo "selected"; } ?>>6 Months</option>
                                            <option value="365" <?php if($plan->duration_days=='365'){ echo "selected"; } ?>>1 Year</option>
                                        </select>
                                        <small class="text-danger"><?= form_error('duration_days') ?></small>   
                                    </div>

                                    <div class="form-group">
                                       <label for="listing_limit">Listing Limit *</label>
                                       <input type="number" name="listing_limit" class="form-control"  value="<?= $plan->listing_limit; ?>" placeholder="Enter number of vehicles allowed">
                                       <small class="text-danger"><?= form_error('listing_limit') ?></small>
                                   </div>
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

<!-- <div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="content-area">
                <div class="tfcl-dashboard">
                    <div class="tfcl-add-listing car-details">
                        <h3>Plan List</h3>
                        <div class="tfcl-table-listing">
                            <div class="table-responsive">
                                <table id="example" class="cell-border">
                                    <thead>
                                        <tr>
                                            <th>Plan Name</th>
                                            <th>Price</th>
                                            <th>Duration</th>
                                            <th>Listing Limit</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php foreach($plans as $plan){?>
                                        <tr>
                                            <td><?= $plan->plan_name; ?></td>
                                            <td><?= $plan->price; ?></td>
                                            <td><?= $plan->duration_days; ?></td>
                                            <td><?= $plan->listing_limit; ?></td>
                                            <td><a  href="<?= base_url(ADMIN_PATH . '/update-plan?p_id='.$plan->id); ?>">Update</a>
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
</div> -->
</div>
<script>
$(document).ready(function() {
    setTimeout(function() {
        $('#success-msg').fadeOut('slow');
    }, 3000); // 3000ms = 3 seconds
});
</script>

<script>
    var URL = "<?= base_url(ADMIN_PATH . "/get-makes-by-vehicle-type") ?>";
</script>