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
   <?php if($_SESSION['role_name'] =="Admin"){ ?>
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

                                 <?php if ($this->session->flashdata('error')): ?>
                            <div class="alert alert-success" id="success-msg">
                                <?= $this->session->flashdata('error') ?></div>
                            <?php endif; ?>


                            <form action="<?= base_url(ADMIN_PATH . '/add-plan'); ?>" method="POST"
                                enctype="multipart/form-data">
                                <h1 class="admin-title mb-3">Add Plan </h1>

                                <div class="tfcl-add-listing car-details">
                                    <h3>Add Plan </h3>

                                     <div class="form-group-4">
                                    <div class="form-group">
                                        <label for="plan_name">Plan Name *</label>
                                        <input type="text" class="form-control" name="plan_name"
                                            placeholder="Enter Plan Name"
                                            value="<?= set_value('plan_name') ?>">
                                        <small class="text-danger"><?= form_error('plan_name') ?></small>

                                    </div>
                                     <div class="form-group">
                                        <label for="price">Price *</label>
                                        <input type="text" class="form-control" name="price"
                                            placeholder="Enter Price"
                                            value="<?= set_value('price') ?>">
                                        <small class="text-danger"><?= form_error('price') ?></small>

                                    </div>
                                    
                                    <div class="form-group">
                                        <label for="duration_days">Duration Days *</label>
                                        <select name="duration_days" class="form-control">
                                            <option value="">-- Select Duration --</option>
                                            <option value="7">7 Days</option>
                                            <option value="30">1 Month</option>
                                            <option value="90">3 Months</option>
                                            <option value="180">6 Months</option>
                                            <option value="365">1 Year</option>
                                        </select>
                                        <small class="text-danger"><?= form_error('duration_days') ?></small>   
                                    </div>

                                    <div class="form-group">
                                       <label for="listing_limit">Listing Limit *</label>
                                       <input type="number" name="listing_limit" class="form-control"  value="<?= set_value('listing_limit') ?>" placeholder="Enter number of vehicles allowed">
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
    <?php } ?>
</div>

<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="content-area">
                <div class="tfcl-dashboard">
                     <?php if ($this->session->flashdata('success')): ?>
                            <div class="alert alert-success" id="success-msg">
                                <?= $this->session->flashdata('success') ?></div>
                            <?php endif; ?>

                                 <?php if ($this->session->flashdata('error')): ?>
                            <div class="alert alert-danger" id="error-msg">
                                <?= $this->session->flashdata('error') ?></div>
                            <?php endif; ?>

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
                                        <?php foreach($plans as $plan){
                                              $user_id = $_SESSION['user_id'];
                                              $sub = $this->db->where('user_id', $user_id)
                                                ->where('end_date >=', date('Y-m-d'))
                                                ->get('user_subscriptions')->row();
                                                
                                             $is_active = false;
                                            if(isset($active_subscription) && $active_subscription && $active_subscription->plan_id == $plan->id){

                                                if($sub->listings_used < get_plan_limit($sub->plan_id)){

                                                    $is_active = true;
                                                }
                                            }

                                            ?>
                                        <tr>
                                            <td><?= $plan->plan_name; ?></td>
                                            <td><?= $plan->price; ?></td>
                                            <td><?= $plan->duration_days; ?></td>
                                            <td><?= $plan->listing_limit; ?></td>
                                            <td>
                                            <?php if($_SESSION['role_name'] =="Admin"){ ?>    
                                            <a href="<?= base_url(ADMIN_PATH . '/'); ?>update-plan/<?php echo $plan->id; ?>" >Update</a>
                                            <?php }else{ ?>
                                                 <!-- <a href="<?= base_url(ADMIN_PATH . '/'); ?>buy-plan/<?php echo $plan->id; ?>" >Buy</a> -->
                                                  <?php if($is_active){ ?>
                                                    <span style="color: green; font-weight: bold;">Activated</span>
                                                <?php } else { ?>
                                                    <a href="<?= base_url(ADMIN_PATH . '/'); ?>buy-plan/<?php echo $plan->id; ?>">Buy</a>
                                                <?php } ?>
                                                <?php } ?>
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

<script>
    var URL = "<?= base_url(ADMIN_PATH . "/get-makes-by-vehicle-type") ?>";
</script>