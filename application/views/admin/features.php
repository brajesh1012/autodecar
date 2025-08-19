<style>
.text-p,
p {
    font-weight: 400;
    font-size: 14px;
    line-height: 19.6px;
    color: #d95c32;
    font-family: "Inter", sans-serif;
}

a { text-decoration: none !important; }
</style>

<div id="themesflat-content">
    <div class="dashboard-toggle">Show DashBoard</div>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="content-area">
                    <main id="main" class="main-content">
                        <div class="tfcl-dashboard">
                            <?php if ($this->session->flashdata('success')): ?>
                            <div class="alert alert-success" id="success-msg">
                                <?= $this->session->flashdata('success') ?></div>
                            <?php endif; ?>
                            <form action="<?= base_url(ADMIN_PATH . '/features'); ?>" method="POST">
                                <h1 class="admin-title mb-3">Features</h1>

                                <div class="tfcl-add-listing car-details">
                                    <h3>Features</h3>
                                    <div class="form-group-2">
                                        <!-- <div class="form-group">
                                            <label for="listing_title">Vehicle Type *</label>
                                            <select name="vehicle_type_id" class="form-control">
                                                <option value="">Select Vehicle Type</option>
                                                <?php foreach($vehicle_types as $vehicle_type){ ?>
                                                <option value="<?= $vehicle_type->id; ?>"><?= $vehicle_type->name; ?>
                                                </option>
                                                <?php } ?>
                                            </select>
                                            <small class="text-danger"><?= form_error('vehicle_type_id') ?></small>

                                        </div> -->

                                        <div class="form-group">
                                            <label for="listing_title">Type *</label>
                                            <select name="type" id="" class="form-control">
                                                <option value="">--Select Type--</option>
                                                <option value="Comfort & Interior">Comfort & Interior</option>
                                                <option value="Safety & Assistance">Safety & Assistance</option>
                                                <option value="Lighting & Visibility">Lighting & Visibility</option>
                                                <option value="Multimedia & Navigation">Multimedia & Navigation</option>
                                                <option value="Engine & Drive Technology">Engine & Drive Technology
                                                </option>
                                                <option value="Exterior & Design">Exterior & Design</option>
                                                <option value="Other Features & Extras">Other Features & Extras</option>
                                            </select>
                                            <small class="text-danger"><?= form_error('type') ?></small>
                                        </div>
                                        <div class="form-group">
                                            <label for="listing_title">Feature *</label>
                                            <input type="text" class="form-control" name="feature"
                                                placeholder="Enter Feature Name" value="<?= set_value('feature') ?>">
                                            <small class="text-danger"><?= form_error('feature') ?></small>
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

<!-- <style>
th:first-child,
td:first-child {
    width: 20px; 
    text-align: center;
}
</style>  -->

<style>
/* Scrollable nav-tabs */
.scrolling-tabs {
    overflow-x: auto;
    white-space: nowrap;
    flex-wrap: nowrap;
}

.scrolling-tabs .nav-link {
    display: inline-block;
    margin-right: 10px;
    border: 1px solid #007bff;
    border-radius: 5px;
    background-color: #f8f9fa;
    color: #007bff;
    padding: 6px 16px;
    transition: all 0.2s ease-in-out;
    background-color: #e9ecef;
    /* Inactive background */
    color: #003366;
}

.scrolling-tabs .nav-link.active {
    background-color: #003366;
    /* Active background */
    color: #fff;
    /* Active text */
}

.scrolling-tabs .nav-link.active {
    background-color: #007bff;
    color: #fff;
}

/* Optional: scrollbar styling */
.scrolling-tabs::-webkit-scrollbar {
    height: 5px;
}

.scrolling-tabs::-webkit-scrollbar-thumb {
    background-color: #ccc;
    border-radius: 10px;
}
</style>


<!-- Bootstrap CSS -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

<!-- Bootstrap JS Bundle (includes Popper) -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>


<div class="tfcl-add-listing car-details">

    <!-- Button-Style Bootstrap Tabs with Scroll -->
    <div class="d-flex scrolling-tabs nav nav-tabs" id="myTab" role="tablist">
        <button class="nav-link active" id="Comfort-tab" data-bs-toggle="tab" data-bs-target="#Comfort" type="button"
            role="tab">Comfort & Interior</button>
        <button class="nav-link" id="Safety-tab" data-bs-toggle="tab" data-bs-target="#Safety" type="button"
            role="tab">Safety & Assistance</button>
        <button class="nav-link" id="Lighting-tab" data-bs-toggle="tab" data-bs-target="#Lighting" type="button"
            role="tab">Lighting & Visibility</button>
        <button class="nav-link" id="Multimedia-tab" data-bs-toggle="tab" data-bs-target="#Multimedia" type="button"
            role="tab">Multimedia & Navigation</button>
        <button class="nav-link" id="Engine-tab" data-bs-toggle="tab" data-bs-target="#Engine" type="button"
            role="tab">Engine & Drive Technology</button>
        <button class="nav-link" id="Exterior-tab" data-bs-toggle="tab" data-bs-target="#Exterior" type="button"
            role="tab">Exterior & Design</button>
        <button class="nav-link" id="Other-tab" data-bs-toggle="tab" data-bs-target="#Other" type="button"
            role="tab">Other
            Features & Extras</button>
        <!-- Aap yaha aur buttons add kar sakti hain -->
    </div>
    <!-- Tab Content -->
    <div class="tab-content" id="myTabContent">

        <!-- Comfort Tab -->
        <div class="tab-pane fade show active" id="Comfort" role="tabpanel">
            <div class="container mt-4">
                <h3>Comfort & Interior</h3>
                <div class="table-responsive">
                    <table id="comfortTable" class="display">
                        <thead>
                            <tr>
                                <th>Id</th>
                                <th>Name</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach($comfort_and_interior as $comfort){ ?>
                            <tr>
                                <td><?= $comfort->id; ?></td>
                                <td><?= $comfort->name; ?></td>
                                <td><a
                                        href="<?= base_url(ADMIN_PATH . '/delete-features?comfort='.$comfort->id); ?>">Delete</a>
                                </td>
                            </tr>
                            <?php } ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

        <!-- Safety Tab -->
        <div class="tab-pane fade" id="Safety" role="tabpanel">
            <div class="container mt-4">
                <h3>Safety & Assistance</h3>
                <div class="table-responsive">
                    <table id="safetyTable" class="display">
                        <thead>
                            <tr>
                                <th>Id</th>
                                <th>Name</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach($safety_and_assistance as $safety){ ?>
                            <tr>
                                <td><?= $safety->id; ?></td>
                                <td><?= $safety->name; ?></td>
                                <td><a
                                        href="<?= base_url(ADMIN_PATH . '/delete-features?safety='.$safety->id); ?>">Delete</a>
                                </td>
                            </tr>
                            <?php } ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

        <!-- Lighting Tab -->
        <div class="tab-pane fade" id="Lighting" role="tabpanel">
            <div class="container mt-4 mx-3">
                <h3>Lighting & Visibility</h3>
                <div class="table-responsive">
                    <table id="LightingTable" class="display">
                        <thead>
                            <tr>
                                <th>Id</th>
                                <th>Name</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach($lighting_and_visibility as $lighting){ ?>
                            <tr>
                                <td><?= $lighting->id; ?></td>
                                <td><?= $lighting->name; ?></td>
                                <td><a
                                        href="<?= base_url(ADMIN_PATH . '/delete-features?lighting='.$lighting->id); ?>">Delete</a>
                                </td>
                            </tr>
                            <?php } ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

        <!-- Multimedia Tab -->
        <div class="tab-pane fade" id="Multimedia" role="tabpanel">
            <div class="container mt-4 mx-3">
                <h3>Multimedia & Navigation</h3>
                <div class="table-responsive">
                    <table id="MultimediaTable" class="display">
                        <thead>
                            <tr>
                                <th>Id</th>
                                <th>Name</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach($multimedia_and_navigation as $multimedia){ ?>
                            <tr>
                                <td><?= $multimedia->id; ?></td>
                                <td><?= $multimedia->name; ?></td>
                                <td><a
                                        href="<?= base_url(ADMIN_PATH . '/delete-features?multimedia='.$multimedia->id); ?>">Delete</a>
                                </td>
                            </tr>
                            <?php } ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <!-- Engine Tab -->
        <div class="tab-pane fade" id="Engine" role="tabpanel">
            <div class="container mt-4 mx-3">
                <h3>Engine & Drive Technology</h3>
                <div class="table-responsive">
                    <table id="EngineTable" class="display">
                        <thead>
                            <tr>
                                <th>Id</th>
                                <th>Name</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach($engine_and_drive_technology as $engine){ ?>
                            <tr>
                                <td><?= $engine->id; ?></td>
                                <td><?= $engine->name; ?></td>
                                <td><a
                                        href="<?= base_url(ADMIN_PATH . '/delete-features?engine='.$engine->id); ?>">Delete</a>
                                </td>
                            </tr>
                            <?php } ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <!-- Exterior Tab -->
        <div class="tab-pane fade" id="Exterior" role="tabpanel">
            <div class="container mt-4 mx-3">
                <h3>Exterior & Design</h3>
                <div class="table-responsive">
                    <table id="ExteriorTable" class="display">
                        <thead>
                            <tr>
                                <th>Id</th>
                                <th>Name</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach($exterior_and_design as $exterior){ ?>
                            <tr>
                                <td><?= $exterior->id; ?></td>
                                <td><?= $exterior->name; ?></td>
                                <td><a
                                        href="<?= base_url(ADMIN_PATH . '/delete-features?exterior='.$exterior->id); ?>">Delete</a>
                                </td>
                            </tr>
                            <?php } ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <!-- Exterior Tab -->
        <div class="tab-pane fade" id="Other" role="tabpanel">
            <div class="container mt-4 mx-3">
                <h3>Other Features & Extras</h3>
                <div class="table-responsive">
                    <table id="OtherTable" class="display">
                        <thead>
                            <tr>
                                <th>Id</th>
                                <th>Name</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach($other_features_and_extras as $other){ ?>
                            <tr>
                                <td><?= $other->id; ?></td>
                                <td><?= $other->name; ?></td>
                                <td><a
                                        href="<?= base_url(ADMIN_PATH . '/delete-features?other='.$other->id); ?>">Delete</a>
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
<script>
$(document).ready(function() {
    setTimeout(function() {
        $('#success-msg').fadeOut('slow');
    }, 3000); // 3000ms = 3 seconds
});
</script>