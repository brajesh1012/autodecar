<?php include('head.php'); ?>

<div class="container">
        

    <form action="<?= base_url(ADMIN_PATH . '/add-listing') ?>" method="POST" enctype="multipart/form-data">

        <h1 class="admin-title mb-3">Advance Filter</h1>
        <div class="tfcl-add-listing car-details">
            <div class="form-group">
                <h4>Vehicle Basic Information</h4>
            </div>
            <div class="form-group-4">
                <div class="form-group">
                    <label for="listing_title">Vehicle Type</label>

                    <select class="form-control" name="vehicle_type" id="vehicle_type_id">
                        <option value="">Select Vehicle Type</option>
                        <?php foreach($vehicle_types as $vehicle_type){
                                    $type_key = strtolower(str_replace(' ', '_', $vehicle_type->name)); 
                                ?>
                        <option value="<?= $vehicle_type->id ?>"
                            <?= (isset($_GET['vehicle_type']) && $_GET['vehicle_type'] == $vehicle_type->id) ? 'selected' : '' ?>>
                            <?= $vehicle_type->name; ?>
                        </option>
                        <?php } ?>
                    </select>

                    <small class="text-danger"><?= form_error('vehicle_type') ?></small>

                </div>

                <div class="form-group">
                    <label for="listing_title">Category</label>

                    <select class="form-control" name="cat_id" id="cat_id">
                        <option value="">Select Category</option>
                        <?php foreach($categories as $cat){
                                                $cat_key = strtolower(str_replace(' ', '_', $cat->name)); 
                                                ?>
                        <option value="<?= $cat->id; ?>" data-type="<?= $cat_key ?>"
                           <?= (isset($_GET['cat_id']) && $_GET['cat_id'] == $cat->id) ? 'selected' : '' ?>>
                            <?= $cat->name; ?></option>
                        <?php } ?>
                    </select>

                    <small class="text-danger"><?= form_error('cat_id') ?></small>

                </div>

                <div class="form-group">
                    <label for="listing_title">Make *</label>

                    <select class="form-control" name="make" id="make_id">
                        <option value="">Select Make</option>
                        <?php  foreach($makes as $make){?>
                        <option value="<?= $make->id; ?>"
                            <?= (isset($_GET['make']) && $_GET['make'] == $make->id) ? 'selected' : '' ?>>
                            <?= $make->name; ?></option>
                        <?php }?>
                    </select>

                    <small class="text-danger"><?= form_error('make') ?></small>

                </div>

                <div class="form-group">
                    <label for="listing_title">Model *</label>

                    <select class="form-control" name="model" id="model_id">
                        <option value="">Select Model</option>
                        <?php  foreach($models as $model){?>
                        <option value="<?= $model->id; ?>"
                            <?= (isset($_GET['model']) && $_GET['model'] == $model->id) ? 'selected' : '' ?>>
                            <?= $model->name; ?></option>
                        <?php }?>
                    </select>

                    <small class="text-danger"><?= form_error('model') ?></small>

                </div>

                <div class="form-group">
                    <label for="listing_title">Variant *</label>

                    <select class="form-control" name="variant" id="variant_id">
                        <option value="">Select Variant</option>
                        <?php  foreach($variants as $variant){?>
                        <option value="<?= $variant->id; ?>"
                            <?= (isset($_GET['variant']) && $_GET['variant'] == $variant->id) ? 'selected' : '' ?>>
                            <?= $variant->name; ?></option>
                        <?php }?>

                    </select>

                    <small class="text-danger"><?= form_error('variant') ?></small>

                </div>

                <div class="form-group">
                    <label for="listing_title">Fuel Type *</label>

                    <select class="form-control" name="fuel_type" id="fuel_type">
                        <option value="">Select Fuel Type</option>
                        <?php  foreach($fuel_types as $fuel_type){?>
                        <option value="<?= $fuel_type->name; ?>"
                            <?= (isset($_GET['fuel_type']) && $_GET['fuel_type'] == $fuel_type->id) ? 'selected' : '' ?>>
                            <?= $fuel_type->name; ?>
                        </option>
                        <?php }?>
                    </select>
                    <small class="text-danger"><?= form_error('fuel_type') ?></small>
                </div>

                <div class="form-group">
                    <label for="listing_title">Color *</label>

                    <select class="form-control" name="color" id="color">
                        <option value="">Select Color</option>
                        <?php  foreach($colors as $color){?>
                        <option value="<?= $color->name; ?>"
                            <?= (isset($_GET['color']) && $_GET['color'] == $color->id) ? 'selected' : '' ?>>
                            <?= $color->name; ?>
                        </option>
                        <?php }?>
                    </select>
                    <small class="text-danger"><?= form_error('color') ?></small>
                </div>

                <div class="form-group">
                    <label for="listing_title">Mileage *</label>
                    <input type="text" class="form-control" name="mileage" placeholder="Enter mileage"
                        value="<?= set_value('mileage') ?>">
                    <small class="text-danger"><?= form_error('mileage') ?></small>
                </div>

                <div class="form-group">
                    <label for="listing_title">Transmission *</label>

                    <select class="form-control" name="transmission">
                        <option value="">Select Transmission</option>
                        <?php  foreach($transmissions as $transmission){?>
                        <option value="<?= $transmission->name; ?>"
                            <?= (isset($_GET['transmission']) && $_GET['transmission'] == $transmission->id) ? 'selected' : '' ?>>
                            <?= $transmission->name; ?>
                        </option>
                        <?php }?>
                    </select>
                    <small class="text-danger"><?= form_error('transmission') ?></small>
                </div>

                <div class="form-group">
                    <label for="listing_title">Condition *</label>
                    <select class="form-control" name="vehicle_condition">
                        <option value="">Select Condition</option>
                        <option value="Good"
                            <?php if(isset($_GET['vehicle_condition']) && $_GET['vehicle_condition'] == "Good"){ echo "selected"; } ?>>
                            Good
                        </option>
                        <option value="Export"
                            <?php if(isset($_GET['vehicle_condition']) && $_GET['vehicle_condition']  == "Export"){ echo "selected"; } ?>>
                            Export</option>
                        <option value="Accident Vehicle"
                            <?php if(isset($_GET['vehicle_condition']) && $_GET['vehicle_condition'] == "Accident Vehicle"){ echo "selected"; } ?>>
                            Accident Vehicle</option>
                    </select>
                </div>

                <div class="form-group">
                    <label for="listing_title">MFk *</label>
                    <input type="date" class="form-control" name="mfk_date" placeholder="Enter MFK"
                        value="<?= set_value('mfk_date') ?>">
                    <small class="text-danger"><?= form_error('mfk_date') ?></small>
                </div>

                <!-- <div class="form-group">
                                            <label for="listing_title">TUV *</label>
                                            <input type="date" class="form-control" name="tuv_date"
                                                placeholder="Enter TUV" value="<?= set_value('tuv_date') ?>">
                                            <small class="text-danger"><?= form_error('tuv_date') ?></small>
                                        </div> -->
            </div>

            <div class="form-group">
                <h4>Register & Ownership</h4>
            </div>
            <div class="form-group-4">


                <div class="form-group">
                    <label for="listing_title">Register Years From</label>
                    <input type="number" class="form-control" name="year" placeholder="Any"
                        value="<?= isset($_GET['year']) ? $_GET['year'] : '' ?>">
                </div>

                 <div class="form-group">
                    <label for="listing_title">Register Years to</label>
                    <input type="number" class="form-control" name="year_to" placeholder="Any"
                        value="<?= isset($_GET['year_to']) ? $_GET['year_to'] : '' ?>">
                </div>


                <div class="form-group">
                    <label for="listing_title">Ownership *</label>
                    <select name="ownership" class="form-control" id="ownership">
                        <option value="">Select Owner</option>
                        <option value="1st" <?php if(set_value('ownership')== '1st'){ echo "selected"; } ?>>
                            1st
                        </option>
                        <option value="2nd" <?php if(set_value('ownership')== '2nd'){ echo "selected"; } ?>>
                            2nd
                        </option>
                        <option value="3rd" <?php if(set_value('ownership')== '3rd'){ echo "selected"; } ?>>
                            3rd
                        </option>
                    </select>
                    <small class="text-danger"><?= form_error('ownership') ?></small>
                </div>

                <div class="form-group">
                    <label for="listing_title">Euro Norm *</label>
                    <!-- <input type="text" class="form-control" name="ownership" placeholder="Enter KM"
                                                value="<?= set_value('euro_norm') ?>"> -->
                    <select name="euro_norm" class="form-control" id="euro_norm">
                        <option value="">Select Euro</option>
                        <option value="6 Euro" <?php if(set_value('euro_norm')== '6 Euro'){ echo "selected"; } ?>>6
                            Euro</option>
                        <option value="5 Euro" <?php if(set_value('euro_norm')== '5 Euro'){ echo "selected"; } ?>>5
                            Euro</option>
                        <option value="4 Euro" <?php if(set_value('euro_norm')== '4 Euro'){ echo "selected"; } ?>>4
                            Euro</option>
                        <option value="3 Euro" <?php if(set_value('euro_norm')== '3 Euro'){ echo "selected"; } ?>>3
                            Euro</option>
                    </select>
                    <small class="text-danger"><?= form_error('euro_norm') ?></small>
                </div>


                <div class="form-group">
                    <label for="listing_title">KM Driven From</label>
                    <input type="text" class="form-control" name="km" placeholder="Any"
                        value="<?= isset($_GET['km']) ? $_GET['km'] : '' ?>">
                </div>

                <div class="form-group">
                    <label for="listing_title">KM Driven To</label>
                    <input type="text" class="form-control" name="km_to" placeholder="Any"
                        value="<?= isset($_GET['km_to']) ? $_GET['km_to'] : '' ?>">
                </div>
            </div>
            <!-- Photos -->

            <div class="form-group">
                <h4>Features & Specifications</h4>
            </div>

            <div class="form-group-4">
                <div class="form-group ">
                    <label for="winter_tires">Winter Tires <span class="text-danger">*</span></label>
                    <select class="form-control" name="winter_tires" id="winter_tires">
                        <option value="">Select</option>
                        <option value="Yes" <?= set_value('winter_tires') == 'Yes' ? 'selected' : '' ?>>Yes
                        </option>
                        <option value="No" <?= set_value('winter_tires') == 'No' ? 'selected' : '' ?>>No
                        </option>
                    </select>
                    <small class="text-danger"><?= form_error('winter_tires') ?></small>
                </div>

                <div class="form-group  feature-car feature-bus" style="display:none;">
                    <label for="listing_title"> Climate Control / AC Type *</label>
                    <select name="ac_type" class="form-control" id="">
                        <option value="">Select Climate Control Type</option>
                        <option value="No AC" <?php if(set_value('ac_type')== 'No AC'){ echo "selected"; } ?>>No AC
                        </option>
                        <option value="Manual AC" <?php if(set_value('ac_type')== 'Manual AC'){ echo "selected"; } ?>>
                            Manual AC
                        </option>
                        <option value="Automatic AC"
                            <?php if(set_value('ac_type')== 'Automatic AC'){ echo "selected"; } ?>>Automatic
                            AC</option>
                        <option value="Dual-Zone Automatic AC"
                            <?php if(set_value('ac_type')== 'Dual-Zone Automatic AC'){ echo "selected"; } ?>>
                            Dual-Zone Automatic AC</option>
                        <option value="Tri-Zone Automatic AC"
                            <?php if(set_value('ac_type')== 'Tri-Zone Automatic AC'){ echo "selected"; } ?>>
                            Tri-Zone Automatic AC</option>
                        <option value="4-Zone Automatic AC"
                            <?php if(set_value('ac_type')== '4-Zone Automatic AC'){ echo "selected"; } ?>>
                            4-Zone Automatic AC</option>
                    </select>

                </div>
                <div class="form-group feature-car feature-bus" style="display:none;">
                    <label for="parking_sensors">Parking Sensors</label>
                    <select class="form-control" name="parking_sensors" class="form-control">
                        <option value="">Select</option>
                        <option value="None">None</option>
                        <option value="Rear Only">Rear Only</option>
                        <option value="Front Only">Front Only</option>
                        <option value="Front and Rear">Front and Rear</option>
                    </select>
                </div>
            </div>
            <div class="form-group">
                <h4>Comfort & Interior Features</h4>
            </div>
            <div class="form-group-4">

                <?php if(isset($comforts) && !empty($comforts)){ foreach($comforts as $comfort){ ?>
                <div class="form-group">
                    <input type="checkbox" name="comfort_and_interior[]" value="<?= $comfort->name ?>"
                        <?php if(set_value('comfort_and_interior')==  $comfort->name ){ echo "checked"; } ?>><?= $comfort->name ?>
                </div>
                <?php } } ?>
            </div>

            <div class="form-group">
                <h4>Safety & Assistance</h4>
            </div>
            <div class="form-group-4">
                <?php if(isset($safety_and_assistance) && !empty($safety_and_assistance)){ foreach($safety_and_assistance as $safety){ ?>
                <div class="form-group">
                    <input type="checkbox" name="safety_and_assistance[]" value="<?= $safety->name ?>"
                        <?php if(set_value('safety_and_assistance')==  $safety->name ){ echo "checked"; } ?>><?= $safety->name ?>
                </div>
                <?php }}  ?>
            </div>

            <div class="form-group">
                <h4>Lighting & Visibility</h4>
            </div>
            <div class="form-group-4">
                <?php if(isset($lighting_and_visibility) && !empty($lighting_and_visibility)){ foreach($lighting_and_visibility as $lighting){ ?>
                <div class="form-group">
                    <input type="checkbox" name="lighting_and_visibility[]" value="<?= $lighting->name ?>"
                        <?php if(set_value('lighting_and_visibility')==  $lighting->name ){ echo "checked"; } ?>><?= $lighting->name ?>
                </div>
                <?php } } ?>
            </div>

            <div class="form-group">
                <h4>Multimedia & Navigation</h4>
            </div>
            <div class="form-group-4">
                <?php if(isset($multimedia_and_navigation) && !empty($multimedia_and_navigation)){   foreach($multimedia_and_navigation as $multimedia){ ?>
                <div class="form-group">
                    <input type="checkbox" name="multimedia_and_navigation[]" value="<?= $multimedia->name ?>"
                        <?php if(set_value('multimedia_and_navigation')==  $multimedia->name ){ echo "checked"; } ?>><?= $multimedia->name ?>
                </div>
                <?php } } ?>
            </div>

            <div class="form-group">
                <h4>Engine & Drive Technology</h4>
            </div>
            <div class="form-group-4">
                <?php if(isset($engine_and_drive_technology) && !empty($engine_and_drive_technology)){   foreach($engine_and_drive_technology as $engine){ ?>
                <div class="form-group">
                    <input type="checkbox" name="engine_and_drive_technology[]" value="<?= $engine->name ?>"
                        <?php if(set_value('engine_and_drive_technology')==  $engine->name ){ echo "checked"; } ?>><?= $engine->name ?>
                </div>
                <?php } } ?>
            </div>



            <div class="form-group">
                <h4>Exterior & Design</h4>
            </div>
            <div class="form-group-4">
                <?php if(isset($exterior_and_design) && !empty($exterior_and_design)){   foreach($exterior_and_design as $exterior){ ?>
                <div class="form-group">
                    <input type="checkbox" name="exterior[]" value="<?= $exterior->name ?>"
                        <?php if(set_value('exterior')==  $exterior->name ){ echo "checked"; } ?>><?= $exterior->name ?>
                </div>
                <?php } } ?>
            </div>



            <div class="form-group">
                <h4>Other Features & Extras</h4>
            </div>
            <div class="form-group-4">
                <?php if(isset($other_features_and_extras) && !empty($other_features_and_extras)){    foreach($other_features_and_extras as $other){ ?>
                <div class="form-group">
                    <input type="checkbox" name="other_features_and_extras[]" value="<?= $other->name ?>"
                        <?php if(set_value('other_features_and_extras')==  $other->name ){ echo "checked"; } ?>><?= $other->name ?>
                </div>
                <?php } } ?>
            </div>


            <div class="form-group">
                <h4>Pricing & Description</h4>
            </div>
            <div class="form-group-2">
                <div class="form-group">
                    <label for="listing_title">Price From</label>
                    <input type="text" class="form-control" name="price" placeholder="Any"
                        value="<?= isset($_GET['price']) ? $_GET['price'] : '' ?>">
                </div>

                <div class="form-group">
                    <label for="listing_title">Price To</label>
                    <input type="text" class="form-control" name="price_to" placeholder="Any"
                        value="<?= isset($_GET['price_to']) ? $_GET['price_to'] : '' ?>">
                </div>
            </div>
            <div class="form-group">
                <h4>Location</h4>
            </div>
            <div class="form-group-4">
                <!-- <div class="form-group">
                    <label for="listing_title">Canton *</label>

                    <select class="form-control" name="state" id="state">
                        <option value="">Select Location</option>
                        <?php  foreach($states as $state){?>
                        <option value="<?= $state->id; ?>"
                            <?php if(set_value('state')==$state->name){ echo "selected"; } ?>>
                            <?= $state->name; ?>
                        </option>
                        <?php }?>
                    </select>

                    <small class="text-danger"><?= form_error('state') ?></small>
                </div>


                <div class="form-group">
                    <label for="listing_title">City/Town *</label>

                    <select class="form-control" name="location" id="city">
                        <option value="">Select City</option>
                        <?php  foreach($cities as $city){?>
                        <option value="<?= $city->id; ?>"
                            <?php if(set_value('location')==$city->city_name){ echo "selected"; } ?>>
                            <?= $city->city_name; ?>
                        </option>
                        <?php }?>
                    </select>

                    <small class="text-danger"><?= form_error('location') ?></small>
                </div> -->

                <div class="form-group">
                    <label for="listing_title">Zipcode *</label>

                    <input type="text" class="form-control" name="zipcode" placeholder="Any"
                        value="<?= isset($_GET['zipcode']) ? $_GET['zipcode'] : '' ?>">
                </div>
            </div>
        </div>

        <div class="group-button-submit mb-2">
            <button type="submit" class="second-btn">Submit</button>
        </div>

    </form>
</div>

</div>
</div>


<?php include('footer.php'); ?>


<script>
$('#filter_by_location').on('change', function() {
    // console.log('hello');
    var selectlocation = $(this).val();
    $.ajax({
        url: '<?= base_url("set-location") ?>',
        type: 'POST',
        data: {
            location: selectlocation
        },
        success: function(response) {
            console.log('Location set in session:', response);
            location.reload();
        }
    });
});
</script>


<script>
    var URL = "<?= base_url(ADMIN_PATH . "/get-category-by-vehicle-type") ?>";
    var URL1 = "<?= base_url(ADMIN_PATH . "/get-makes-by-category") ?>";
var URL2 = "<?= base_url(ADMIN_PATH . "/get-modal-by-make") ?>";
var URL3 = "<?= base_url(ADMIN_PATH . "/get-variant-by-model") ?>";

// Location
var URL4 = "<?= base_url(ADMIN_PATH . "/get-city-by-state") ?>";
</script>