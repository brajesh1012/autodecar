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

                            <form action="<?= base_url(ADMIN_PATH . '/duplicate-listing/'.$cars->id) ?>" method="POST"
                                enctype="multipart/form-data">

                                <h1 class="admin-title mb-3">Duplicate listing</h1>
                                <div class="tfcl-add-listing car-details">
                                    <div class="form-group">
                                        <h4>Vehicle Basic Information</h4>
                                    </div>
                                    <div class="form-group-4">

                                        <div class="form-group">
                                            <label for="listing_title">Title *</label>
                                            <input type="text" class="form-control" name="title"
                                                placeholder="Enter Title" value="<?= $cars->title; ?>">
                                            <small class="text-danger"><?= form_error('title') ?></small>
                                        </div>

                                        <div class="form-group">
                                            <label for="listing_title">Vehicle Type</label>

                                            <select class="form-control" name="vehicle_type" id="vehicle_type_id">
                                                <option value="">Select Vehicle Type</option>
                                                <?php foreach($vehicle_types as $vehicle_type){
                                                $type_key = strtolower(str_replace(' ', '_', $vehicle_type->name)); 
                                                ?>
                                                <option value="<?= $vehicle_type->id; ?>" data-type="<?= $type_key ?>"
                                                    <?php if($cars->vehicle_type == $vehicle_type->id){ echo "selected"; } ?>>
                                                    <?= $vehicle_type->name; ?></option>
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
                                                    <?php if($cars->cat_id == $cat->id ){ echo "selected"; } ?>>
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
                                                    <?php if($cars->make==$make->id){ echo "selected"; } ?>>
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
                                                    <?php if($cars->model==$model->id){ echo "selected"; } ?>>
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
                                                    <?php if($cars->variant==$variant->id){ echo "selected"; } ?>>
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
                                                    <?php if($cars->fuel_type==$fuel_type->name){ echo "selected"; } ?>>
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
                                                    <?php if($cars->color==$color->name){ echo "selected"; } ?>>
                                                    <?= $color->name; ?>
                                                </option>
                                                <?php }?>
                                            </select>
                                            <small class="text-danger"><?= form_error('color') ?></small>
                                        </div>

                                        <div class="form-group">
                                            <label for="listing_title">Mileage *</label>
                                            <input type="text" class="form-control" name="mileage"
                                                placeholder="Enter mileage" value="<?= $cars->mileage ?>">
                                            <small class="text-danger"><?= form_error('mileage') ?></small>
                                        </div>

                                        <div class="form-group">
                                            <label for="listing_title">Transmission *</label>

                                            <select class="form-control" name="transmission">
                                                <option value="">Select Transmission</option>
                                                <?php  foreach($transmissions as $transmission){?>
                                                <option value="<?= $transmission->name; ?>"
                                                    <?php if($cars->transmission==$transmission->name){ echo "selected"; } ?>>
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
                                                    <?php if($cars->vehicle_condition== "Good"){ echo "selected"; } ?>>
                                                    Good</option>
                                                <option value="Export"
                                                    <?php if($cars->vehicle_condition== "Export"){ echo "selected"; } ?>>
                                                    Export</option>
                                                <option value="Accident Vehicle"
                                                    <?php if($cars->vehicle_condition== "Accident Vehicle"){ echo "selected"; } ?>>
                                                    Accident Vehicle</option>
                                            </select>

                                            <!-- <input type="text" class="form-control" name="vehicle_condition"
                                                placeholder="Enter Condition"
                                                value="<?= $cars->vehicle_condition ?>"> -->
                                            <small class="text-danger"><?= form_error('vehicle_condition') ?></small>
                                        </div>

                                         <?php
                                        // Format the TUV date
                                        $tuv_value = '';
                                            if (!empty($cars->tuv_date)) {
                                                $dateObj = DateTime::createFromFormat('m/y', $cars->tuv_date);
                                                if ($dateObj) {
                                                    $tuv_value = $dateObj->format('Y-m'); // Output: 2025-07
                                                }
                                            }

                                            // Format the MFK date
                                            $mfk_value = '';
                                            if (!empty($cars->mfk_date)) {
                                                $dateObj = DateTime::createFromFormat('m/y', $cars->mfk_date);
                                                if ($dateObj) {
                                                    $mfk_value = $dateObj->format('Y-m'); // Output: 2025-07
                                                }
                                            }
                                            ?>

                                        <div class="form-group">
                                            <label for="listing_title">MFk *</label>
                                            <input type="month" class="form-control" name="mfk_date"
                                                placeholder="Enter MFK" value="<?= $mfk_value ; ?>">
                                            <small class="text-danger"><?= form_error('mfk_date') ?></small>
                                        </div>

                                        <div class="form-group">
                                            <label for="listing_title">TUV *</label>
                                            <input type="month" class="form-control" name="tuv_date"
                                                placeholder="Enter TUV" value="<?= $tuv_value ; ?>">
                                            <small class="text-danger"><?= form_error('tuv_date') ?></small>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <h4>Register & Ownership</h4>
                                    </div>
                                    <div class="form-group-4">


                                        <div class="form-group">
                                            <label for="listing_title">Register Years *</label>
                                            <input type="number" class="form-control" name="year"
                                                placeholder="Enter Register year" value="<?= $cars->year ?>">
                                            <small class="text-danger"><?= form_error('year') ?></small>
                                        </div>

                                        <div class="form-group">
                                            <label for="listing_title">Ownership *</label>
                                            <!-- <input type="text" class="form-control" name="ownership" placeholder="Enter KM"
                                                value="<?= set_value('ownership') ?>"> -->
                                            <select name="ownership" class="form-control" id="ownership">
                                                <option value="">Select Owner</option>
                                                <option value="1st"
                                                    <?php if($cars->ownership == '1st'){ echo "selected"; } ?>>1st
                                                </option>
                                                <option value="2nd"
                                                    <?php if($cars->ownership == '2nd'){ echo "selected"; } ?>>2nd
                                                </option>
                                                <option value="3rd"
                                                    <?php if($cars->ownership == '3rd'){ echo "selected"; } ?>>3rd
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
                                                <option value="6 Euro"
                                                    <?php if($cars->euro_norm == '6 Euro'){ echo "selected"; } ?>>6 Euro
                                                </option>
                                                <option value="5 Euro"
                                                    <?php if($cars->euro_norm == '5 Euro'){ echo "selected"; } ?>>5 Euro
                                                </option>
                                                <option value="4 Euro"
                                                    <?php if($cars->euro_norm == '4 Euro'){ echo "selected"; } ?>>4 Euro
                                                </option>
                                                <option value="3 Euro"
                                                    <?php if($cars->euro_norm == '3 Euro'){ echo "selected"; } ?>>3 Euro
                                                </option>
                                            </select>
                                            <small class="text-danger"><?= form_error('euro_norm') ?></small>
                                        </div>


                                        <div class="form-group d-none">
                                            <label for="listing_title">KM Driven *</label>
                                            <input type="text" class="form-control" name="km" placeholder="Enter KM"
                                                value="<?= $cars->km ?>">
                                            <small class="text-danger"><?= form_error('km') ?></small>
                                        </div>
                                        <div class="form-group">
                                            <label for="listing_title">Co<sub>2</sub> Emission *</label>
                                            <input type="text" class="form-control" name="co2_emission"
                                                placeholder="Enter co2 Emission" value="<?= $cars->co2_emission ?>">
                                            <small class="text-danger"><?= form_error('co2_emission') ?></small>
                                        </div>

                                    </div>
                                    <!-- Photos -->

                                    <div class="form-group">
                                        <h4>Features & Specifications</h4>
                                    </div>

                                    <div class="form-group-4">
                                        <div class="form-group ">
                                            <label for="winter_tires">Winter Tires <span
                                                    class="text-danger">*</span></label>
                                            <select class="form-control" name="winter_tires" id="winter_tires">
                                                <option value="">Select</option>
                                                <option value="Yes"
                                                    <?php if($cars->winter_tires == 'Yes'){ echo "selected"; } ?>>Yes
                                                </option>
                                                <option value="No"
                                                    <?php if($cars->winter_tires == 'No'){ echo "selected"; } ?>>No
                                                </option>
                                            </select>
                                            <small class="text-danger"><?= form_error('winter_tires') ?></small>
                                        </div>

                                        <div class="form-group  feature-car feature-bus" style="display:none;">
                                            <label for="listing_title"> Climate Control / AC Type *</label>
                                            <select name="ac_type" class="form-control" id="">
                                                <option value="">Select Climate Control Type</option>
                                                <option value="No AC"
                                                    <?php if($cars->ac_type == 'No AC'){ echo "selected"; } ?>>No AC
                                                </option>
                                                <option value="Manual AC"
                                                    <?php if($cars->ac_type == 'Manual AC'){ echo "selected"; } ?>>
                                                    Manual AC</option>
                                                <option value="Automatic AC"
                                                    <?php if($cars->ac_type == 'Automatic AC'){ echo "selected"; } ?>>
                                                    Automatic AC</option>
                                                <option value="Dual-Zone Automatic AC"
                                                    <?php if($cars->ac_type == 'Dual-Zone Automatic AC'){ echo "selected"; } ?>>
                                                    Dual-Zone Automatic AC</option>
                                                <option value="Tri-Zone Automatic AC"
                                                    <?php if($cars->ac_type == 'Tri-Zone Automatic AC'){ echo "selected"; } ?>>
                                                    Tri-Zone Automatic AC</option>
                                                <option value="4-Zone Automatic AC"
                                                    <?php if($cars->ac_type == '4-Zone Automatic AC'){ echo "selected"; } ?>>
                                                    4-Zone Automatic AC</option>
                                            </select>
                                            <!-- <small class="text-danger"><?= form_error('ac_type') ?></small> -->
                                        </div>

                                        <!-- <div class="form-group feature-car feature-bus" style="display:none;">
                                            <label for="listing_title"> 4x4*</label>
                                                    <select name="4x4" class="form-control" id="four_by_four">
                                                        <option value="">Select</option>
                                                        <option value="yes"  <?php if($cars->four_by_four == 'yes'){ echo "selected"; } ?> >Yes</option>
                                                        <option value="no"  <?php if($cars->four_by_four == 'no'){ echo "selected"; } ?> >No</option>
                                                    </select>
                                        </div> 

                                           <div class="form-group feature-car feature-bus" style="display:none;">
                                            <label for="listing_title"> Navigation System *</label>
                                                    <select name="navigation_system" class="form-control" id="">
                                                        <option value="">Select</option>
                                                        <option value="yes"   <?php if($cars->navigation_system == 'yes'){ echo "selected"; } ?>  >Yes</option>
                                                        <option value="no"  <?php if($cars->navigation_system == 'no'){ echo "selected"; } ?>>No</option>
                                                    </select>
                                        </div> -->

                                        <div class="form-group feature-car feature-bus" style="display:none;">
                                            <label for="parking_sensors">Parking Sensors</label>
                                            <select class="form-control" name="parking_sensors" class="form-control">
                                                <option value="">Select</option>
                                                <option value="None"
                                                    <?php if($cars->parking_sensors == 'None'){ echo "selected"; } ?>>
                                                    None</option>
                                                <option value="Rear Only"
                                                    <?php if($cars->parking_sensors == 'Rear Only'){ echo "selected"; } ?>>
                                                    Rear Only</option>
                                                <option value="Front Only"
                                                    <?php if($cars->parking_sensors == 'Front Only'){ echo "selected"; } ?>>
                                                    Front Only</option>
                                                <option value="Front and Rear"
                                                    <?php if($cars->parking_sensors == 'Front and Rear'){ echo "selected"; } ?>>
                                                    Front and Rear</option>
                                            </select>
                                        </div>
                                    </div>

                                    <!-- //////////////////////////////////////////Features/////////////////////////////////////////////// -->
                                   <div class="feature-car feature-commercial">
                                    <div class="form-group">
                                        <h4>Comfort & Interior Features</h4>
                                    </div>
                                    <div class="form-group-4">
                                        <?php 
                                          $selected_comforts = json_decode($cars->comfort_and_interior, true);
                                        foreach($comforts as $comfort){ 
                                        ?>
                                        <div class="form-group">
                                            <input type="checkbox" name="comfort_and_interior[]"
                                                value="<?= $comfort->name ?>" <?php if(!empty($selected_comforts) && in_array($comfort->name, $selected_comforts)) { echo 'checked'; } ?>
                                                ><?= $comfort->name ?>
                                        </div>
                                        <?php } ?>
                                    </div>

                                    <div class="form-group">
                                        <h4>Safety & Assistance</h4>
                                    </div>
                                    <div class="form-group-4">
                                        <?php 
                                        $selected_safety_and_assistance = json_decode($cars->safety_and_assistance, true);
                                        foreach($safety_and_assistance as $safety){ ?>
                                        <div class="form-group">
                                            <input type="checkbox" name="safety_and_assistance[]"
                                                value="<?= $safety->name ?>"
                                                 <?php if(!empty($selected_safety_and_assistance) && in_array($safety->name, $selected_safety_and_assistance)) { echo 'checked'; } ?>><?= $safety->name ?>
                                        </div>
                                        <?php } ?>
                                    </div>

                                    <div class="form-group">
                                        <h4>Lighting & Visibility</h4>
                                    </div>
                                    <div class="form-group-4">
                                        <?php 

                                        $selected_lighting_and_visibility = json_decode($cars->lighting_and_visibility, true);

                                        foreach($lighting_and_visibility as $lighting){ ?>
                                        <div class="form-group">
                                            <input type="checkbox" name="lighting_and_visibility[]"
                                                value="<?= $lighting->name ?>"
                                                 <?php if(!empty($selected_lighting_and_visibility) && in_array($lighting->name, $selected_lighting_and_visibility)) { echo 'checked'; } ?>><?= $lighting->name ?>
                                        </div>
                                        <?php } ?>
                                    </div>

                                    <div class="form-group">
                                        <h4>Multimedia & Navigation</h4>
                                    </div>
                                    <div class="form-group-4">
                                        <?php

                                          $selected_multimedia_and_navigation = json_decode($cars->multimedia_and_navigation, true);

                                        foreach($multimedia_and_navigation as $multimedia){ ?>
                                        <div class="form-group">
                                            <input type="checkbox" name="multimedia_and_navigation[]"
                                                value="<?= $multimedia->name ?>"
                                                 <?php if(!empty($selected_multimedia_and_navigation) && in_array($multimedia->name, $selected_multimedia_and_navigation)) { echo 'checked'; } ?> ><?= $multimedia->name ?>
                                        </div>
                                        <?php } ?>
                                    </div>

                                    <div class="form-group">
                                        <h4>Engine & Drive Technology</h4>
                                    </div>
                                    <div class="form-group-4">
                                        <?php 

                                         $selected_engine_and_drive_technology = json_decode($cars->engine_and_drive_technology, true);

                                        foreach($engine_and_drive_technology as $engine){ ?>
                                        <div class="form-group">
                                            <input type="checkbox" name="engine_and_drive_technology[]"
                                                value="<?= $engine->name ?>"
                                               <?php if(!empty($selected_engine_and_drive_technology) && in_array($engine->name, $selected_engine_and_drive_technology)) { echo 'checked'; } ?> ><?= $engine->name ?>
                                        </div>
                                        <?php } ?>
                                    </div>



                                    <div class="form-group">
                                        <h4>Exterior & Design</h4>
                                    </div>
                                    <div class="form-group-4">
                                        <?php 

                                        $selected_exterior_and_design = json_decode($cars->exterior_and_design, true);

                                        foreach($exterior_and_design as $exterior){ ?>
                                        <div class="form-group">
                                            <input type="checkbox" name="exterior[]" value="<?= $exterior->name ?>"
                                               <?php if(!empty($selected_exterior_and_design) && in_array($exterior->name, $selected_exterior_and_design)) { echo 'checked'; } ?> ><?= $exterior->name ?>
                                        </div>
                                        <?php } ?>
                                    </div>



                                    <div class="form-group">
                                        <h4>Other Features & Extras</h4>
                                    </div>
                                    <div class="form-group-4">
                                        <?php

                                          $selected_other_features_and_extras = json_decode($cars->other_features_and_extras, true);

                                        foreach($other_features_and_extras as $other){ ?>
                                        <div class="form-group">
                                            <input type="checkbox" name="other_features_and_extras[]"
                                                value="<?= $other->name ?>"
                                               <?php if(!empty($selected_other_features_and_extras) && in_array($other->name, $selected_other_features_and_extras)) { echo 'checked'; } ?> ><?= $other->name ?>
                                        </div>
                                        <?php } ?>
                                    </div>
                                    </div>
                                    <!-- //////////////////////////////////////Features///////////////////////////////////////////////// -->
                                   
                                    <div class="form-group">
                                        <h4>Pricing & Description</h4>
                                    </div>
                                    <div class="form-group-2">
                                        <div class="form-group">
                                            <label for="listing_title">Expected Price *</label>
                                            <input type="text" class="form-control" name="price"
                                                placeholder="Enter Price" value="<?= $cars->price ?>">

                                            <small class="text-danger"><?= form_error('price') ?></small>

                                        </div>

                                        <div class="form-group">
                                            <label for="listing_title"> Is Price Negotiable *</label>
                                            <select name="is_negotiable" class="form-control" id="is_negotiable">
                                                <option value="">Select</option>
                                                <option value="yes"
                                                    <?php if($cars->is_negotiable == 'yes'){ echo "selected"; } ?>>Yes
                                                </option>
                                                <option value="no"
                                                    <?php if($cars->is_negotiable == 'no'){ echo "selected"; } ?>>No
                                                </option>
                                            </select>
                                            <small class="text-danger"><?= form_error('is_negotiable') ?></small>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label for="listing_title">Description</label>
                                        <textarea name="description" class="form-control" id="description"
                                            placeholder="Your Description..."><?= $cars->description ?></textarea>

                                        <small class="text-danger"><?= form_error('description') ?></small>
                                    </div>


                                    <div class="form-group">
                                        <h4>Location</h4>
                                    </div>
                                    <div class="form-group-4">
                                        <div class="form-group">
                                            <label for="listing_title">Country *</label>

                                            <select class="form-control" name="state" id="state">
                                                <option value="">Select Location</option>
                                                <?php  foreach($states as $state){?>
                                                <option value="<?= $state->id; ?>"
                                                    <?php if($cars->state == $state->id){ echo "selected"; } ?>>
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
                                                    <?php if($cars->location == $city->id){ echo "selected"; } ?>>
                                                    <?= $city->city_name; ?>
                                                </option>
                                                <?php }?>
                                            </select>

                                            <small class="text-danger"><?= form_error('location') ?></small>
                                        </div>

                                        <div class="form-group">
                                            <label for="listing_title">Zipcode *</label>

                                            <input type="text" class="form-control" name="zipcode"
                                                placeholder="Enter Zipcode" value="<?= $cars->zipcode ?>">
                                            <small class="text-danger"><?= form_error('zipcode') ?></small>
                                        </div>


                                    </div>

                                    <div class="form-group">
                                        <h4>Upload Section</h4>
                                    </div>
                                    <div class="form-group-4">
                                        <div class="form-group">
                                            <label for="photos">Upload Photos</label>
                                            <input type="file" accept="image/*" class="form-control" name="photos[]"
                                                id="photos" multiple>
                                        </div>

                                        <div class="form-group">
                                            <label for="emission_certificate">Emission Certificate</label>
                                            <input type="file" class="form-control" name="emission_certificate"
                                                id="emission_certificate">
                                            <input type="hidden" name="emission_certificate"
                                                value="<?= $cars->emission_certificate; ?>">

                                            <?php if(!empty($cars->emission_certificate)){ ?>

                                            <a href="<?= base_url('uploads/emission_certificates/'. $cars->emission_certificate); ?>"
                                                download>
                                                <img src="<?= base_url('uploads/pdf_img.png'); ?>" width="100px"
                                                    height="100px" alt="Emission Certificate">
                                            </a>

                                            <?php } ?>
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
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="content-area">
                <div class="tfcl-dashboard">
                    <div class="tfcl-add-listing car-details">
                        <h3>Car Image</h3>
                        <div class="tfcl-table-listing">
                            <div class="table-responsive">
                                <table id="example" class="cell-border">
                                    <thead>
                                        <tr>
                                            <th>Image</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php $car_img = $this->db->where('car_list_id', $cars->id)->get('car_img')->result(); foreach($car_img as $img){?>
                                        <tr>
                                            <!-- <td><img src="<?= base_url('uploads/'. $img->photos); ?>" alt="Car Image" height = "200px" width = "200px" ></td> -->

                                            <!-- Thumbnail Image -->
                                            <td>
                                                <img src="<?= base_url('uploads/' . $img->photos); ?>"
                                                    class="zoomable-image" height="200" width="200" alt="Car Image">
                                            </td>
                                            <td>
                                                <a
                                                    href="<?= base_url(ADMIN_PATH . '/delete-car-img?c_id='.$img->id); ?>">Delete</a>
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
var URL = "<?= base_url(ADMIN_PATH . "/get-category-by-vehicle-type") ?>";
var URL1 = "<?= base_url(ADMIN_PATH . "/get-makes-by-category") ?>";
var URL2 = "<?= base_url(ADMIN_PATH . "/get-modal-by-make") ?>";
var URL3 = "<?= base_url(ADMIN_PATH . "/get-variant-by-model") ?>";

// Location
var URL4 = "<?= base_url(ADMIN_PATH . "/get-city-by-state") ?>";
</script>



<!-- Modal (Hidden by default) -->
<!-- <div id="imageModal" style="display:none; position:fixed; z-index:1000; left:0; top:0; width:100%; height:100%; background:rgba(0,0,0,0.8); justify-content:center; align-items:center;">
  <span onclick="closeModal()" style="position:absolute; top:20px; right:30px; font-size:40px; color:white; cursor:pointer;">&times;</span>
  <img id="modalImage" src="" style="max-width:90%; max-height:90%; border:5px solid white;">
</div>

<script>
  // Show Modal on Image Click
  document.querySelectorAll('.zoomable-image').forEach(img => {
    img.addEventListener('click', function () {
      const modal = document.getElementById('imageModal');
      const modalImg = document.getElementById('modalImage');
      modalImg.src = this.src;
      modal.style.display = 'flex';
    });
  });

  // Close Modal Function
  function closeModal() {
    document.getElementById('imageModal').style.display = 'none';
  }
</script> -->