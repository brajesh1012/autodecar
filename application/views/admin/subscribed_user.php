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
                        <h3>Subscribed User List</h3>
                        <div class="tfcl-table-listing">
                            <div class="table-responsive">
                                <table id="example" class="cell-border">
                                    <thead>
                                        <tr>
                                            <th>User Name</th>
                                            <th>Email</th>
                                            <th>Role</th>
                                            <th>Plan Name</th>
                                            <th>Price</th>
                                            <th>Start Date</th>
                                            <th>End Date</th>
                                            <!-- <th>Listings Used</th> -->
                                        </tr>
                                    </thead>
                                     <tbody>
                                        <?php if (!empty($subscribers)) {
                                            foreach ($subscribers as $sub) { ?>
                                                <tr>
                                                    <td><?= $sub->user_name ?></td>
                                                    <td><?= $sub->email ?></td>
                                                    <td><?= $sub->role_name ?></td> <!-- actual name like 'Seller' -->
                                                    <td><?= $sub->plan_name ?></td>
                                                    <td>₹<?= $sub->price ?></td>
                                                    <td><?= date('d-m-Y', strtotime($sub->start_date)) ?></td>
                                                    <td><?= date('d-m-Y', strtotime($sub->end_date)) ?></td>
                                                    <!-- <td><?= $sub->listings_used ?></td> -->
                                                </tr>
                                        <?php }
                                        } else { ?>
                                            <tr>
                                                <td colspan="8">No subscriptions found.</td>
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