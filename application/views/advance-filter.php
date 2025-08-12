<?php include('head.php'); ?>

<div class="container">

    <form action="<?= base_url('listing-list') ?>" method="GET">

        <h1 class="admin-title mb-3">Advance Filter</h1>
        <div class="tfcl-add-listing car-details">
            <div class="form-group" style="display: flex; justify-content: space-between; align-items: center;">
                <h4 style="margin: 0;">Vehicle Basic Information</h4>
                   <button type="button" class="btn btn-secondary btn-sm" id="reset-vehicle-info">Reset</button>
            </div>
            <div class="form-group-4">
                <div class="form-group">
                    <label for="listing_title">Vehicle Type</label>

                    <select class="form-control" name="vehicle_type" onchange="ad_vehicle_type();"  id="vehicle_type_id">
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
                </div>

                <div class="form-group">
                    <label for="listing_title">Category</label>

                    <select class="form-control" name="cat_id" onchange="ad_category();" id="cat_id">
                        <option value="">Select Category</option>
                        <?php foreach($categories as $cat){
                                                $cat_key = strtolower(str_replace(' ', '_', $cat->name)); 
                                                ?>
                        <option value="<?= $cat->id; ?>" data-type="<?= $cat_key ?>"
                           <?= (isset($_GET['cat_id']) && $_GET['cat_id'] == $cat->id) ? 'selected' : '' ?>>
                            <?= $cat->name; ?></option>
                        <?php } ?>
                    </select>
                </div>

                <div class="form-group">
                    <label for="listing_title">Make *</label>

                    <select class="form-control" name="make" onchange="ad_make();" id="make_id">
                        <option value="">Select Make</option>
                        <?php  foreach($makes as $make){?>
                        <option value="<?= $make->id; ?>"
                            <?= (isset($_GET['make']) && $_GET['make'] == $make->id) ? 'selected' : '' ?>>
                            <?= $make->name; ?></option>
                        <?php }?>
                    </select>
                </div>

                <div class="form-group">
                    <label for="listing_title">Model *</label>

                    <select class="form-control" name="model" onchange="ad_model();" id="model_id">
                        <option value="">Select Model</option>
                        <?php  foreach($models as $model){?>
                        <option value="<?= $model->id; ?>"
                            <?= (isset($_GET['model']) && $_GET['model'] == $model->id) ? 'selected' : '' ?>>
                            <?= $model->name; ?></option>
                        <?php }?>
                    </select>
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
                </div>
                <div class="form-group">
                    <label for="listing_title">Fuel Type *</label>
                    <select class="form-control" name="fuel_type" id="fuel_type">
                        <option value="">Select Fuel Type</option>
                        <?php  foreach($fuel_types as $fuel_type){?>
                        <option value="<?= $fuel_type->name; ?>"
                            <?= (isset($_GET['fuel_type']) && $_GET['fuel_type'] == $fuel_type->name) ? 'selected' : '' ?>>
                            <?= $fuel_type->name; ?>
                        </option>
                        <?php }?>
                    </select>
                </div>

                <div class="form-group">
                    <label for="listing_title">Color *</label>

                    <select class="form-control" name="color" id="color">
                        <option value="">Select Color</option>
                        <?php  foreach($colors as $color){?>
                        <option value="<?= $color->name; ?>"
                            <?= (isset($_GET['color']) && $_GET['color'] == $color->name) ? 'selected' : '' ?>>
                            <?= $color->name; ?>
                        </option>
                        <?php }?>
                    </select>
                </div>

                <div class="form-group">
                    <label for="listing_title">Mileage *</label>
                    <input type="text" class="form-control" name="mileage" placeholder="Any"
                        value="<?= isset($_GET['mileage']) ? $_GET['mileage'] : '' ?>">
                </div>

                <div class="form-group">
                    <label for="listing_title">Transmission *</label>

                    <select class="form-control" name="transmission">
                        <option value="">Select Transmission</option>
                        <?php  foreach($transmissions as $transmission){?>
                        <option value="<?= $transmission->name; ?>"
                            <?= (isset($_GET['transmission']) && $_GET['transmission'] == $transmission->name) ? 'selected' : '' ?>>
                            <?= $transmission->name; ?>
                        </option>
                        <?php }?>
                    </select>
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

                  <!-- <div class="form-group">
                        <label for="listing_title">MFk *</label>
                            <input type="month" class="form-control" name="mfk_date" placeholder="Enter MFK" value="<?= isset($_GET['mfk_date']) ? $_GET['mfk_date'] : '' ?>">
                 </div> -->

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
                        <option value="1st"  <?php if(isset($_GET['ownership']) && $_GET['ownership'] == "1st"){ echo "selected"; } ?>>
                            1st
                        </option>
                        <option value="2nd" <?php if(isset($_GET['ownership']) && $_GET['ownership'] == "2nd"){ echo "selected"; } ?>>
                            2nd
                        </option>
                        <option value="3rd" <?php if(isset($_GET['ownership']) && $_GET['ownership'] == "3rd"){ echo "selected"; } ?>>
                            3rd
                        </option>
                    </select>
                </div>

                <div class="form-group">
                    <label for="listing_title">Euro Norm *</label>
                    <!-- <input type="text" class="form-control" name="ownership" placeholder="Enter KM"
                                                value="<?= set_value('euro_norm') ?>"> -->
                    <select name="euro_norm" class="form-control" id="euro_norm">
                        <option value="">Select Euro</option>
                        <option value="6 Euro" <?php if(isset($_GET['euro_norm']) && $_GET['euro_norm'] == "6 Euro"){ echo "selected"; } ?>>6
                            Euro</option>
                        <option value="5 Euro" <?php if(isset($_GET['euro_norm']) && $_GET['euro_norm'] == "5 Euro"){ echo "selected"; } ?>>5
                            Euro</option>
                        <option value="4 Euro" <?php if(isset($_GET['euro_norm']) && $_GET['euro_norm'] == "4 Euro"){ echo "selected"; } ?>>4
                            Euro</option>
                        <option value="3 Euro" <?php if(isset($_GET['euro_norm']) && $_GET['euro_norm'] == "3 Euro"){ echo "selected"; } ?>>3
                            Euro</option>
                    </select>
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
                        <option value="Yes" <?php if(isset($_GET['winter_tires']) && $_GET['winter_tires'] == "Yes"){ echo "selected"; } ?> >Yes
                        </option>
                        <option value="No" <?php if(isset($_GET['winter_tires']) && $_GET['winter_tires'] == "No"){ echo "selected"; } ?>>No
                        </option>
                    </select>
                </div>

                <div class="form-group  feature-car feature-bus" style="display:none;">
                    <label for="listing_title"> Climate Control / AC Type *</label>
                    <select name="ac_type" class="form-control" id="ac_type">
                        <option value="">Select Climate Control Type</option>
                        <option value="No AC" <?php if(isset($_GET['ac_type']) && $_GET['ac_type'] == "No AC"){ echo "selected"; } ?>>No AC
                        </option>
                        <option value="Manual AC" <?php if(isset($_GET['ac_type']) && $_GET['ac_type'] == "Manual AC"){ echo "selected"; } ?>>
                            Manual AC
                        </option>
                        <option value="Automatic AC"
                           <?php if(isset($_GET['ac_type']) && $_GET['ac_type'] == "Automatic AC"){ echo "selected"; } ?>>Automatic
                            AC</option>
                        <option value="Dual-Zone Automatic AC"
                            <?php if(isset($_GET['ac_type']) && $_GET['ac_type'] == "Dual-Zone Automatic AC"){ echo "selected"; } ?>>
                            Dual-Zone Automatic AC</option>
                        <option value="Tri-Zone Automatic AC"
                            <?php if(isset($_GET['ac_type']) && $_GET['ac_type'] == "Tri-Zone Automatic AC"){ echo "selected"; } ?>>
                            Tri-Zone Automatic AC</option>
                        <option value="4-Zone Automatic AC"
                            <?php if(isset($_GET['ac_type']) && $_GET['ac_type'] == "4-Zone Automatic AC"){ echo "selected"; } ?>>
                            4-Zone Automatic AC</option>
                    </select>

                </div>
                <div class="form-group feature-car feature-bus" style="display:none;">
                    <label for="parking_sensors">Parking Sensors</label>
                    <select class="form-control" name="parking_sensors" id="parking_sensors" class="form-control">
                        <option value="">Select</option>
                        <option value="None" <?php if(isset($_GET['parking_sensors']) && $_GET['parking_sensors'] == "None"){ echo "selected"; } ?>>None</option>
                        <option value="Rear Only" <?php if(isset($_GET['parking_sensors']) && $_GET['parking_sensors'] == "Rear Only"){ echo "selected"; } ?>>Rear Only</option>
                        <option value="Front Only" <?php if(isset($_GET['parking_sensors']) && $_GET['parking_sensors'] == "Front Only"){ echo "selected"; } ?>>Front Only</option>
                        <option value="Front and Rear" <?php if(isset($_GET['parking_sensors']) && $_GET['parking_sensors'] == "Front and Rear"){ echo "selected"; } ?>>Front and Rear</option>
                    </select>
                </div>
            </div>
            <div class="form-group">
                <h4>Comfort & Interior Features</h4>
            </div>
            <div class="form-group-4">

                <?php if(isset($comforts) && !empty($comforts)){ foreach($comforts as $comfort){ ?>
                <div class="form-group">
                    <input type="checkbox" name="comfort_and_interior[]" class="comfort_and_interior" value="<?= $comfort->name ?>"
                       <?= in_array($comfort->name, $this->input->get('comfort_and_interior') ?? []) ? 'checked' : '' ?>><?= $comfort->name ?>
                </div>
                <?php } } ?>
            </div>

            <div class="form-group">
                <h4>Safety & Assistance</h4>
            </div>
            <div class="form-group-4">
                <?php if(isset($safety_and_assistance) && !empty($safety_and_assistance)){ foreach($safety_and_assistance as $safety){ ?>
                <div class="form-group">
                    <input type="checkbox" name="safety_and_assistance[]" class="safety_and_assistance"  value="<?= $safety->name ?>"
                        <?= in_array($safety->name, $this->input->get('safety_and_assistance') ?? []) ? 'checked' : '' ?>><?= $safety->name ?>
                </div>
                <?php }}  ?>
            </div>

            <div class="form-group">
                <h4>Lighting & Visibility</h4>
            </div>
            <div class="form-group-4">
                <?php if(isset($lighting_and_visibility) && !empty($lighting_and_visibility)){ foreach($lighting_and_visibility as $lighting){ ?>
                <div class="form-group">
                    <input type="checkbox" name="lighting_and_visibility[]" class="lighting_and_visibility" value="<?= $lighting->name ?>"
                          <?= in_array( $lighting->name , $this->input->get('lighting_and_visibility') ?? []) ? 'checked' : '' ?>><?= $lighting->name ?>
                </div>
                <?php } } ?>
            </div>

            <div class="form-group">
                <h4>Multimedia & Navigation</h4>
            </div>
            <div class="form-group-4">
                <?php if(isset($multimedia_and_navigation) && !empty($multimedia_and_navigation)){   foreach($multimedia_and_navigation as $multimedia){ ?>
                <div class="form-group">
                    <input type="checkbox" name="multimedia_and_navigation[]" class="multimedia_and_navigation" value="<?= $multimedia->name ?>"
                       <?= in_array($multimedia->name, $this->input->get('multimedia_and_navigation') ?? []) ? 'checked' : '' ?>><?= $multimedia->name ?>
                </div>
                <?php } } ?>
            </div>

            <div class="form-group">
                <h4>Engine & Drive Technology</h4>
            </div>
            <div class="form-group-4">
                <?php if(isset($engine_and_drive_technology) && !empty($engine_and_drive_technology)){   foreach($engine_and_drive_technology as $engine){ ?>
                <div class="form-group">
                    <input type="checkbox" name="engine_and_drive_technology[]" class= "engine_and_drive_technology" value="<?= $engine->name ?>"
                         <?= in_array($engine->name, $this->input->get('engine_and_drive_technology') ?? []) ? 'checked' : '' ?>><?= $engine->name ?>
                </div>
                <?php } } ?>
            </div>



            <div class="form-group">
                <h4>Exterior & Design</h4>
            </div>
            <div class="form-group-4">
                <?php if(isset($exterior_and_design) && !empty($exterior_and_design)){   foreach($exterior_and_design as $exterior){ ?>
                <div class="form-group">
                    <input type="checkbox" name="exterior[]" class="exterior" value="<?= $exterior->name ?>"
                         <?= in_array($exterior->name, $this->input->get('exterior') ?? []) ? 'checked' : '' ?>><?= $exterior->name ?>
                </div>
                <?php } } ?>
            </div>



            <div class="form-group">
                <h4>Other Features & Extras</h4>
            </div>
            <div class="form-group-4">
                <?php if(isset($other_features_and_extras) && !empty($other_features_and_extras)){    foreach($other_features_and_extras as $other){ ?>
                <div class="form-group">
                    <input type="checkbox" name="other_features_and_extras[]" class="other_features_and_extras" value="<?= $other->name ?>"
                       <?= in_array($other->name , $this->input->get('other_features_and_extras') ?? []) ? 'checked' : '' ?>><?= $other->name ?>
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
//     var URL = "<?= base_url(ADMIN_PATH . "/get-category-by-vehicle-type") ?>";
//     var URL1 = "<?= base_url(ADMIN_PATH . "/get-makes-by-category") ?>";
// var URL2 = "<?= base_url(ADMIN_PATH . "/get-modal-by-make") ?>";
// var URL3 = "<?= base_url(ADMIN_PATH . "/get-variant-by-model") ?>";

// Location
var URL4 = "<?= base_url(ADMIN_PATH . "/get-city-by-state") ?>";
</script>

<script>
    // ...existing code...

    // Reset Vehicle Basic Information fields
    $('#reset-vehicle-info').on('click', function() {
        $('#vehicle_type_id').val('');
        $('#cat_id').val('');
        $('#make_id').val('');
        $('#model_id').val('');
        $('#variant_id').val('');
        $('#fuel_type').val('');
        $('#color').val('');

        $('#ownership').val('');
        $('#euro_norm').val('');
        $('#winter_tires').val('');
        $('#ac_type').val('');
        $('#parking_sensors').val('');

        $('input[name="mileage"]').val('');
        $('input[name="year"]').val('');
        $('input[name="year_to"]').val('');
        $('input[name="km"]').val('');
        $('input[name="km_to"]').val('');
        $('input[name="price"]').val('');
        $('input[name="price_to"]').val('');
        $('input[name="zipcode"]').val('zipcode');

        $('select[name="transmission"]').val('');
        $('select[name="vehicle_condition"]').val('');
        $('.comfort_and_interior').prop('checked', false);
        $('.safety_and_assistance').prop('checked', false);
        $('.lighting_and_visibility').prop('checked', false);
        $('.multimedia_and_navigation').prop('checked', false);
        $('.engine_and_drive_technology').prop('checked', false);
        $('.exterior').prop('checked', false);
        $('.other_features_and_extras').prop('checked', false);
    });
</script>


<script>
function ad_vehicle_type()
{
         const vehicleTypeId = $("#vehicle_type_id").val();

        if (vehicleTypeId !== "") {
            $.ajax({
                url: "<?= base_url(ADMIN_PATH . "/get-category-by-vehicle-type") ?>",
                type: 'POST',
                data: { vehicle_type_id: vehicleTypeId },
                dataType: 'json',
                success: function (response) {
                    $('#cat_id').html('<option value="">Select Category</option>');
                    $.each(response, function (index, item) {
                        $('#cat_id').append('<option value="' + item.id + '">' + item.name + '</option>');
                    });
                },
                error: function () {
                    alert('Error loading cat_id list.');
                }
            });
        } else {
            $('#cat_id').html('<option value="">Select Category</option>');
        } 
    }

     function ad_category()
{
	// console.log("ddddddd");
        const catId = $("#cat_id").val();

        if (catId !== "") {
            $.ajax({
                url: "<?= base_url(ADMIN_PATH . "/get-makes-by-category") ?>",
                type: 'POST',
                data: { cat_id: catId },
                dataType: 'json',
                success: function (response) {
                    $('#make_id').html('<option value="">Select Make</option>');
                    $.each(response, function (index, item) {
                        $('#make_id').append('<option value="' + item.id + '">' + item.name + '</option>');
                    });
                },
                error: function () {
                    alert('Error loading make list.');
                }
            });
        } else {
            $('#make_id').html('<option value="">Select Make</option>');
        }
}

  function ad_make()
{ 

 const makeId = $("#make_id").val();

        if (makeId !== "") {
            $.ajax({
                url: "<?= base_url(ADMIN_PATH . "/get-modal-by-make") ?>",
                type: 'POST',
                data: { make_id: makeId },
                dataType: 'json',
                success: function (response) {
                    $('#model_id').html('<option value="">Select Model</option>');
                    $.each(response, function (index, item) {
                        $('#model_id').append('<option value="' + item.id + '">' + item.name + '</option>');
                    });
                },
                error: function () {
                    alert('Error loading make list.');
                }
            });
        } else {
            $('#model_id').html('<option value="">Select Model</option>');
        }
}

  function ad_model()
{ 
 const modelId = $("#model_id").val();

        if (modelId !== "") {
            $.ajax({
                url: "<?= base_url(ADMIN_PATH . "/get-variant-by-model") ?>",
                type: 'POST',
                data: { model_id: modelId },
                dataType: 'json',
                success: function (response) {
                    $('#variant_id').html('<option value="">Select Variant</option>');
                    $.each(response, function (index, item) {
                        $('#variant_id').append('<option value="' + item.id + '">' + item.name + '</option>');
                    });
                },
                error: function () {
                    alert('Error loading make list.');
                }
            });
        } else {
            $('#variant_id').html('<option value="">Select Variant</option>');
        }
    }
</script>
