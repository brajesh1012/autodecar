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
                            
                            <form action="<?= base_url('dealer/add-listing') ?>" method="POST"
                                enctype="multipart/form-data">
                                
                                <h1 class="admin-title mb-3">Add listing</h1>
                                <div class="tfcl-add-listing car-details">
                                    <h3>Car details</h3>

                                    <div class="form-group-4">

                                      <div class="form-group">
                                        <label for="listing_title">Vehicle Type</label>

                                        <select class="form-control" name="vehicle_type" id="vehicle_type">
                                            <option value="">Select Vehicle</option>
                                            <option value="Car" <?php if(set_value('vehicle_type') == 'Car'){ echo "selected"; } ?> >Car</option>
                                            <option value="Bike" <?php if(set_value('vehicle_type') == 'Bike'){ echo "selected"; } ?> >Bike</option>
                                            <option value="Bus" <?php if(set_value('vehicle_type') == 'Bus'){ echo "selected"; } ?> >Bus</option>
                                        </select>

                                        <small class="text-danger"><?= form_error('vehicle_type') ?></small>

                                    </div>


                                         <div class="form-group">
                                        <label for="listing_title">Make *</label>

                                        <select class="form-control" name="make">
                                            <option value="">Select Make</option>
                                            <?php  foreach($makes as $make){?>
                                            <option value="<?= $make->name; ?>" <?php if(set_value('make') == $make->name){ echo "selected"; } ?> ><?= $make->name; ?></option>
                                            <?php }?>
                                        </select>

                                        <small class="text-danger"><?= form_error('make') ?></small>

                                    </div>


                                        <div class="form-group">
                                            <label for="listing_title">Model *</label>

                                            <select class="form-control" name="model">
                                                <option value="">Select Model</option>
                                                <?php  foreach($models as $model){?>
                                                <option value="<?= $model->name; ?>" <?php if(set_value('model')==$model->name){ echo "selected"; } ?> ><?= $model->name; ?></option>
                                                <?php }?>
                                            </select>

                                          <small class="text-danger"><?= form_error('model') ?></small>

                                        </div>

                                        <div class="form-group">
                                            <label for="listing_title">Years *</label>
                                            <input type="text" class="form-control" name="year"
                                                placeholder="Enter Manufacturing year" value="<?= set_value('year') ?>">
                                            <small class="text-danger"><?= form_error('year') ?></small>
                                        </div>

                                       
                                    </div>

                                    <div class="form-group-4">

                                     <div class="form-group">
                                            <label for="listing_title">Mileage *</label>
                                            <input type="text" class="form-control" name="mileage"
                                                placeholder="Enter mileage" value="<?= set_value('mileage') ?>">
                                            <small class="text-danger"><?= form_error('mileage') ?></small>
                                        </div>

                                        <div class="form-group">
                                            <label for="listing_title">Condition *</label>
                                            <input type="text" class="form-control" name="vehicle_condition"
                                                placeholder="Enter Condition"
                                                value="<?= set_value('vehicle_condition') ?>">
                                            <small class="text-danger"><?= form_error('vehicle_condition') ?></small>
                                        </div>

                                        <div class="form-group">
                                            <label for="listing_title">Price *</label>
                                            <input type="text" class="form-control" name="price"
                                                placeholder="Enter Price" value="<?= set_value('price') ?>">

                                            <small class="text-danger"><?= form_error('price') ?></small>

                                        </div>

                                        <div class="form-group">
                                            <label for="listing_title">Fuel Type *</label>

                                            <select class="form-control" name="fuel_type" id="fuel_type">
                                                <option value="">Select Fuel Type</option>
                                                <?php  foreach($fuel_types as $fuel_type){?>
                                                <option value="<?= $fuel_type->name; ?>" <?php if(set_value('fuel_type')==$fuel_type->name){ echo "selected"; } ?> ><?= $fuel_type->name; ?>
                                                </option>
                                                <?php }?>
                                            </select>
                                            <small class="text-danger"><?= form_error('fuel_type') ?></small>
                                        </div>
                                    </div>
                                    <!-- Photos -->
                                    <div class="form-group-4">

                                    <div class="form-group">
                                            <label for="listing_title">Transmission *</label>
                                           
										   <select class="form-control" name="transmission">
                                                <option value="">Select Transmission</option>
                                                <?php  foreach($transmissions as $transmission){?>
                                                <option value="<?= $transmission->name; ?>" <?php if(set_value('transmission')==$transmission->name){ echo "selected"; } ?> ><?= $transmission->name; ?>
                                                </option>
                                                <?php }?>
                                            </select>


                                            <small class="text-danger"><?= form_error('transmission') ?></small>
                                        </div>

                                        <div class="form-group">
                                            <label for="listing_title">Location *</label>

                                            <select class="form-control" name="location" id="location">
                                                <option value="">Select Location</option>
                                                <?php  foreach($cities as $city){?>
                                                <option value="<?= $city->city_name; ?>" <?php if(set_value('location')==$city->city_name){ echo "selected"; } ?> ><?= $city->city_name; ?>
                                                </option>
                                                <?php }?>
                                            </select>
                                            
                                            <small class="text-danger"><?= form_error('location') ?></small>
                                        </div>
                                        <div class="form-group">
                                            <label for="listing_title">KM *</label>
                                            <input type="text" class="form-control" name="km" placeholder="Enter KM"
                                                value="<?= set_value('km') ?>">
                                            <small class="text-danger"><?= form_error('km') ?></small>
                                        </div>
                                        <div class="form-group">
                                            <label for="photos">Upload Photos</label>
                                            <input type="file" accept="image/*" class="form-control" name="photos[]" id="photos"
                                                multiple>
                                        </div>

                                    </div>

                                    <div class="form-group mb-0">
                                        <label for="listing_title">Description</label>
                                        <textarea name="description" class="form-control" id="description"
                                            placeholder="Your Description..." ><?= set_value('description') ?></textarea>

                                        <small class="text-danger"><?= form_error('description') ?></small>
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

</div>
