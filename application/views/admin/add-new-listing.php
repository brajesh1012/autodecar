<style>
/* Step Form Styling */
.step-form-container {
    max-width: 1200px;
    margin: 0 auto;
    padding: 20px;
    background: #fff;
    border-radius: 15px;
    box-shadow: 0 10px 30px rgba(0,0,0,0.1);
}

.step-progress {
    display: flex;
    justify-content: center;
    margin-bottom: 40px;
    position: relative;
}

.step-progress::before {
    content: '';
    position: absolute;
    top: 50%;
    left: 0;
    right: 0;
    height: 2px;
    background: #e0e0e0;
    z-index: 1;
}

.step-item {
    position: relative;
    z-index: 2;
    background: #fff;
    width: 60px;
    height: 60px;
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
    margin: 0 20px;
    border: 3px solid #e0e0e0;
    transition: all 0.3s ease;
    cursor: pointer;
}

.step-item.active {
    border-color: #FF7101;
    background: #FF7101;
    color: white;
}

.step-item.completed {
    border-color: #FF7101;
    background: #FF7101;
    color: white;
}

.step-item span {
    font-weight: bold;
    font-size: 18px;
}

.step-content {
    display: none;
    animation: fadeIn 0.5s ease;
}

.step-content.active {
    display: block;
}

@keyframes fadeIn {
    from { opacity: 0; transform: translateY(20px); }
    to { opacity: 1; transform: translateY(0); }
}

.step-title {
    text-align: center;
    margin-bottom: 30px;
    color: #FF7101;
    font-size: 24px;
    font-weight: 600;
}

.form-section {
    background: #f8f9fa;
    padding: 25px;
    border-radius: 10px;
    margin-bottom: 20px;
}

.form-section h4 {
    color: #FF7101;
    margin-bottom: 20px;
    font-size: 18px;
    font-weight: 600;
    border-bottom: 2px solid #fff0e6;
    padding-bottom: 10px;
}

.form-row {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
    gap: 20px;
    margin-bottom: 20px;
}

.form-group {
    margin-bottom: 20px;
}

.form-group label {
    display: block;
    margin-bottom: 8px;
    font-weight: 600;
    color: #333;
    font-size: 14px;
}

.form-control {
    width: 100%;
    padding: 12px 15px;
    border: 2px solid #e0e0e0;
    border-radius: 8px;
    font-size: 14px;
    transition: all 0.3s ease;
    background: #fff;
}

.form-control:focus {
    outline: none;
    border-color: #FF7101;
    box-shadow: 0 0 0 3px rgba(255, 113, 1, 0.1);
}

.form-control:disabled {
    background: #f5f5f5;
    color: #999;
    cursor: not-allowed;
}

.checkbox-group {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));
    gap: 20px;
    margin-top: 20px;
}

.checkbox-item {
    position: relative;
    background: #fff;
    border: 2px solid #e8e8e8;
    border-radius: 12px;
    padding: 20px;
    cursor: pointer;
    transition: all 0.3s ease;
    box-shadow: 0 2px 8px rgba(0,0,0,0.05);
    overflow: hidden;
}

.checkbox-item::before {
    content: '';
    position: absolute;
    top: 0;
    left: 0;
    right: 0;
    height: 4px;
    background: linear-gradient(90deg, #FF7101, #ff8c2a);
    transform: scaleX(0);
    transition: transform 0.3s ease;
}

.checkbox-item:hover {
    border-color: #FF7101;
    box-shadow: 0 4px 16px rgba(255, 113, 1, 0.15);
    transform: translateY(-2px);
}

.checkbox-item:hover::before {
    transform: scaleX(1);
}

.checkbox-item.checked {
    border-color: #FF7101;
    background: linear-gradient(135deg, #fff8f0 0%, #fff5e6 100%);
    box-shadow: 0 6px 20px rgba(255, 113, 1, 0.2);
}

.checkbox-item.checked::before {
    transform: scaleX(1);
    background: linear-gradient(90deg, #FF7101, #ff8c2a);
}

.checkbox-item input[type="checkbox"] {
    position: absolute;
    opacity: 0;
    cursor: pointer;
    height: 0;
    width: 0;
}

.checkbox-item label {
    display: flex;
    align-items: center;
    justify-content: space-between;
    width: 100%;
    cursor: pointer;
    font-weight: 500;
    color: #333;
    margin: 0;
    font-size: 14px;
    line-height: 1.4;
}

.checkbox-item label::after {
    content: '';
    width: 24px;
    height: 24px;
    border: 2px solid #ddd;
    border-radius: 6px;
    background: #fff;
    transition: all 0.3s ease;
    flex-shrink: 0;
    margin-left: 15px;
}

.checkbox-item.checked label::after {
    background: #FF7101;
    border-color: #FF7101;
    background-image: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 20 20'%3e%3cpath fill='none' stroke='%23fff' stroke-linecap='round' stroke-linejoin='round' stroke-width='3' d='m6 10 3 3 6-6'/%3e%3c/svg%3e");
    background-size: 14px;
    background-position: center;
    background-repeat: no-repeat;
}

.checkbox-item:hover label::after {
    border-color: #FF7101;
}

/* Feature category headers */
.feature-category {
    margin-bottom: 30px;
}

.feature-category h4 {
    color: #FF7101;
    margin-bottom: 20px;
    font-size: 18px;
    font-weight: 600;
    border-bottom: 2px solid #fff0e6;
    padding-bottom: 10px;
    position: relative;
}

.feature-category h4::after {
    content: '';
    position: absolute;
    bottom: -2px;
    left: 0;
    width: 50px;
    height: 2px;
    background: #FF7101;
}

/* Selection counter */
.selection-counter {
    background: #fff0e6;
    color: #FF7101;
    padding: 8px 16px;
    border-radius: 20px;
    font-size: 12px;
    font-weight: 600;
    margin-bottom: 15px;
    display: inline-block;
}

/* Photo Preview Styling */
.photo-preview-container {
    margin-top: 20px;
    display: none;
}

.photo-preview-grid {
    display: grid;
    grid-template-columns: repeat(auto-fill, minmax(150px, 1fr));
    gap: 15px;
    margin-bottom: 20px;
    min-height: 120px;
}

.photo-preview-grid.drag-active {
    background: rgba(255, 113, 1, 0.05);
    border: 2px dashed #FF7101;
    border-radius: 12px;
    padding: 10px;
}

.photo-preview-item {
    position: relative;
    background: #fff;
    border: 2px solid #e0e0e0;
    border-radius: 12px;
    overflow: hidden;
    box-shadow: 0 2px 8px rgba(0,0,0,0.1);
    transition: all 0.3s ease;
    cursor: grab;
    user-select: none;
}

.photo-preview-item:hover {
    transform: translateY(-2px);
    box-shadow: 0 4px 16px rgba(0,0,0,0.15);
}

.photo-preview-item.dragging {
    opacity: 0.5;
    transform: rotate(5deg) scale(1.05);
    z-index: 1000;
    cursor: grabbing;
    box-shadow: 0 8px 25px rgba(0,0,0,0.3);
}

.photo-preview-item.drag-over {
    border-color: #FF7101;
    background: #fff8f0;
}

.photo-preview-item .drag-handle {
    position: absolute;
    top: 8px;
    left: 8px;
    background: rgba(255, 113, 1, 0.9);
    color: white;
    width: 24px;
    height: 24px;
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
    font-size: 12px;
    font-weight: bold;
    z-index: 2;
    cursor: grab;
}

.photo-preview-item .drag-handle:hover {
    background: rgba(255, 113, 1, 1);
    transform: scale(1.1);
}

.photo-preview-item .drag-handle:active {
    cursor: grabbing;
}

.photo-preview-item img {
    width: 100%;
    height: 120px;
    object-fit: cover;
    display: block;
}

.photo-number {
    position: absolute;
    bottom: 8px;
    left: 8px;
    background: rgba(0, 0, 0, 0.7);
    color: white;
    padding: 4px 8px;
    border-radius: 12px;
    font-size: 11px;
    font-weight: bold;
    z-index: 2;
}

.photo-remove-btn {
    position: absolute;
    top: 8px;
    right: 8px;
    background: rgba(220, 53, 69, 0.9);
    color: white;
    width: 24px;
    height: 24px;
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
    font-size: 12px;
    cursor: pointer;
    border: none;
    transition: all 0.3s ease;
    z-index: 2;
}

.photo-remove-btn:hover {
    background: rgba(220, 53, 69, 1);
    transform: scale(1.1);
}

.add-more-photos {
    background: linear-gradient(135deg, #FF7101, #ff8c2a);
    color: white;
    border: none;
    padding: 12px 24px;
    border-radius: 8px;
    font-weight: 600;
    cursor: pointer;
    transition: all 0.3s ease;
    display: inline-flex;
    align-items: center;
    gap: 8px;
    margin-top: 10px;
}

.add-more-photos:hover {
    transform: translateY(-2px);
    box-shadow: 0 4px 16px rgba(255, 113, 1, 0.3);
}

.add-more-photos:disabled {
    background: #ccc;
    cursor: not-allowed;
    transform: none;
    box-shadow: none;
}

.photo-upload-info {
    background: #f8f9fa;
    border: 1px solid #e9ecef;
    border-radius: 8px;
    padding: 15px;
    margin-top: 15px;
}

.photo-upload-info h5 {
    color: #FF7101;
    margin-bottom: 10px;
    font-size: 16px;
}

.photo-upload-info ul {
    margin: 0;
    padding-left: 20px;
    color: #666;
    font-size: 14px;
}

.photo-upload-info li {
    margin-bottom: 5px;
}

/* Responsive adjustments */
@media (max-width: 768px) {
    .checkbox-group {
        grid-template-columns: 1fr;
        gap: 15px;
    }
    
    .checkbox-item {
        padding: 15px;
    }
    
    .checkbox-item label {
        font-size: 13px;
    }
    
    .photo-preview-grid {
        grid-template-columns: repeat(auto-fill, minmax(120px, 1fr));
        gap: 10px;
    }
    
    .photo-preview-item img {
        height: 100px;
    }
}

.step-navigation {
    display: flex;
    justify-content: space-between;
    margin-top: 30px;
    padding-top: 20px;
    border-top: 1px solid #e0e0e0;
}

.btn {
    padding: 12px 30px;
    border: none;
    border-radius: 8px;
    font-size: 16px;
    font-weight: 600;
    cursor: pointer;
    transition: all 0.3s ease;
    text-decoration: none;
    display: inline-flex;
    align-items: center;
    gap: 8px;
}

.btn-primary {
    background: #FF7101;
    color: white;
}

.btn-primary:hover {
    background: #e65a00;
    transform: translateY(-2px);
    box-shadow: 0 5px 15px rgba(255, 113, 1, 0.3);
}

.btn-secondary {
    background: #6c757d;
    color: white;
}

.btn-secondary:hover {
    background: #5a6268;
}

.btn-success {
    background: #FF7101;
    color: white;
}

.btn-success:hover {
    background: #e65a00;
    transform: translateY(-2px);
    box-shadow: 0 5px 15px rgba(255, 113, 1, 0.3);
}

.btn:disabled {
    background: #e0e0e0;
    color: #999;
    cursor: not-allowed;
    transform: none;
    box-shadow: none;
}

.single-option-tab {
    background-color: #fff8f0 !important;
    border: 2px solid #FF7101 !important;
    color: #e65a00 !important;
    font-weight: 600 !important;
}

.text-danger {
    color: #dc3545;
    font-size: 12px;
    margin-top: 5px;
    display: block;
}

.file-upload {
    position: relative;
    display: inline-block;
    width: 100%;
}

.file-upload input[type="file"] {
    position: absolute;
    opacity: 0;
    width: 100%;
    height: 100%;
    cursor: pointer;
}

.file-upload-label {
    display: block;
    padding: 15px;
    border: 2px dashed #FF7101;
    border-radius: 8px;
    text-align: center;
    background: #fff8f0;
    color: #FF7101;
    font-weight: 600;
    cursor: pointer;
    transition: all 0.3s ease;
}

.file-upload-label:hover {
    background: #fff0e6;
    border-color: #e65a00;
}

.progress-indicator {
    position: fixed;
    top: 0;
    left: 0;
    width: 100%;
    height: 4px;
    background: #e0e0e0;
    z-index: 1000;
}

.progress-bar {
    height: 100%;
    background: linear-gradient(90deg, #FF7101, #ff8c2a);
    transition: width 0.3s ease;
}

@media (max-width: 768px) {
    .step-form-container {
        padding: 15px;
        margin: 10px;
    }
    
    .form-row {
        grid-template-columns: 1fr;
    }
    
    .checkbox-group {
        grid-template-columns: 1fr;
    }
    
    .step-navigation {
        flex-direction: column;
        gap: 15px;
    }
    
    .btn {
        width: 100%;
        justify-content: center;
    }
}
</style>

<!-- Progress Bar -->
<div class="progress-indicator">
    <div class="progress-bar" id="progressBar"></div>
</div>

<div class="step-form-container">
    <h1 class="text-center mb-4" style="color: #FF7101; font-size: 32px; font-weight: 700;">List Your Car In Easy Steps</h1>
    
    <!-- Step Progress -->
    <div class="step-progress">
        <div class="step-item active" data-step="1">
            <span>1</span>
        </div>
        <div class="step-item" data-step="2">
            <span>2</span>
        </div>
        <div class="step-item" data-step="3">
            <span>3</span>
        </div>
        <div class="step-item" data-step="4">
            <span>4</span>
        </div>
        <div class="step-item" data-step="5">
            <span>5</span>
        </div>
    </div>

    <form action="<?= base_url(ADMIN_PATH . '/add-listing') ?>" method="POST" enctype="multipart/form-data" class="step-form">
        
        <!-- Step 1: Basic Information -->
        <div class="step-content active" id="step1">
            <div class="step-title">Step 1: Basic Vehicle Information</div>
            
            <div class="form-section">
                <h4>Vehicle Details</h4>
                <div class="form-row">
                    <div class="form-group">
                        <label for="title">Listing Title *</label>
                        <input type="text" class="form-control" name="title" placeholder="Enter a descriptive title" value="<?= set_value('title') ?>">
                        <small class="text-danger"><?= form_error('title') ?></small>
                    </div>
                    
                    <div class="form-group">
                        <label for="vehicle_type">Vehicle Type *</label>
                        <select class="form-control" onchange="on_change_vehicle();" name="vehicle_type" id="vehicle_type_id">
                            <option value="">Select Vehicle Type</option>
                            <?php foreach ($vehicle_types as $vehicle_type) {
                                $type_key = strtolower(str_replace(' ', '_', $vehicle_type->name));
                            ?>
                                <option value="<?= $vehicle_type->id; ?>" data-type="<?= $type_key ?>" 
                                    <?php if (set_value('vehicle_type') == $vehicle_type->id) echo "selected"; ?>>
                                    <?= $vehicle_type->name; ?>
                                </option>
                            <?php } ?>
                        </select>
                        <small class="text-danger"><?= form_error('vehicle_type') ?></small>
                    </div>
                </div>
                
                <div class="form-row">
                    <div class="form-group">
                        <label for="cat_id">Category *</label>
                        <select class="form-control" onchange="on_change_cat();" name="cat_id" id="cat_id" disabled>
                            <option value="">Select Category</option>
                            <?php foreach ($categories as $cat) {
                                $cat_key = strtolower(str_replace(' ', '_', $cat->name));
                            ?>
                                <option value="<?= $cat->id; ?>" data-type="<?= $cat_key ?>" 
                                    <?php if (set_value('cat_id') == $cat->id) echo "selected"; ?>>
                                    <?= $cat->name; ?>
                                </option>
                            <?php } ?>
                        </select>
                        <small class="text-danger"><?= form_error('cat_id') ?></small>
                    </div>
                    
                    <div class="form-group">
                        <label for="make">Make *</label>
                        <select class="form-control" onchange="on_change_make();" name="make" id="make_id" disabled>
                            <option value="">Select Make</option>
                            <?php foreach ($makes as $make) { ?>
                                <option value="<?= $make->id; ?>" 
                                    <?php if (set_value('make') == $make->id) echo "selected"; ?>>
                                    <?= $make->name; ?>
                                </option>
                            <?php } ?>
                        </select>
                        <small class="text-danger"><?= form_error('make') ?></small>
                    </div>
                </div>
                
                <div class="form-row">
                    <div class="form-group">
                        <label for="model">Model *</label>
                        <select class="form-control" onchange="on_change_model();" name="model" id="model_id" disabled>
                            <option value="">Select Model</option>
                            <?php foreach ($models as $model) { ?>
                                <option value="<?= $model->id; ?>" 
                                    <?php if (set_value('model') == $model->id) echo "selected"; ?>>
                                    <?= $model->name; ?>
                                </option>
                            <?php } ?>
                        </select>
                        <small class="text-danger"><?= form_error('model') ?></small>
                    </div>
                    
                    <div class="form-group">
                        <label for="variant">Variant *</label>
                        <select class="form-control" name="variant" id="variant_id">
                            <option value="">Select Variant</option>
                            <?php foreach ($variants as $variant) { ?>
                                <option value="<?= $variant->id; ?>" 
                                    <?php if (set_value('variant') == $variant->id) echo "selected"; ?>>
                                    <?= $variant->name; ?>
                                </option>
                            <?php } ?>
                        </select>
                        <small class="text-danger"><?= form_error('variant') ?></small>
                    </div>
                </div>
            </div>
        </div>

        <!-- Step 2: Vehicle Specifications -->
        <div class="step-content" id="step2">
            <div class="step-title">Step 2: Vehicle Specifications</div>
            
            <div class="form-section">
                <h4>Technical Details</h4>
                <div class="form-row">
                    <div class="form-group">
                        <label for="fuel_type">Fuel Type *</label>
                        <select class="form-control" name="fuel_type" id="fuel_type">
                            <option value="">Select Fuel Type</option>
                            <?php foreach ($fuel_types as $fuel_type) { ?>
                                <option value="<?= $fuel_type->name; ?>" 
                                    <?php if (set_value('fuel_type') == $fuel_type->name) echo "selected"; ?>>
                                    <?= $fuel_type->name; ?>
                                </option>
                            <?php } ?>
                        </select>
                        <small class="text-danger"><?= form_error('fuel_type') ?></small>
                    </div>
                    
                    <div class="form-group">
                        <label for="transmission">Transmission *</label>
                        <select class="form-control" name="transmission">
                            <option value="">Select Transmission</option>
                            <?php foreach ($transmissions as $transmission) { ?>
                                <option value="<?= $transmission->name; ?>" 
                                    <?php if (set_value('transmission') == $transmission->name) echo "selected"; ?>>
                                    <?= $transmission->name; ?>
                                </option>
                            <?php } ?>
                        </select>
                        <small class="text-danger"><?= form_error('transmission') ?></small>
                    </div>
                </div>
                
                <div class="form-row">
                    <div class="form-group">
                        <label for="color">Color *</label>
                        <select class="form-control" name="color" id="color">
                            <option value="">Select Color</option>
                            <?php foreach ($colors as $color) { ?>
                                <option value="<?= $color->name; ?>" 
                                    <?php if (set_value('color') == $color->name) echo "selected"; ?>>
                                    <?= $color->name; ?>
                                </option>
                            <?php } ?>
                        </select>
                        <small class="text-danger"><?= form_error('color') ?></small>
                    </div>
                    
                    <div class="form-group">
                        <label for="mileage">Mileage (KM) *</label>
                        <input type="text" class="form-control" name="mileage" placeholder="Enter mileage" value="<?= set_value('mileage') ?>">
                        <small class="text-danger"><?= form_error('mileage') ?></small>
                    </div>
                </div>
                
                <div class="form-row">
                    <div class="form-group">
                        <label for="vehicle_condition">Condition *</label>
                        <select class="form-control" name="vehicle_condition">
                            <option value="">Select Condition</option>
                            <option value="Good" <?php if (set_value('vehicle_condition') == "Good") echo "selected"; ?>>Good</option>
                            <option value="Export" <?php if (set_value('vehicle_condition') == "Export") echo "selected"; ?>>Export</option>
                            <option value="Accident Vehicle" <?php if (set_value('vehicle_condition') == "Accident Vehicle") echo "selected"; ?>>Accident Vehicle</option>
                        </select>
                        <small class="text-danger"><?= form_error('vehicle_condition') ?></small>
                    </div>
                    
                    <div class="form-group">
                        <label for="winter_tires">Winter Tires *</label>
                        <select class="form-control" name="winter_tires" id="winter_tires">
                            <option value="">Select</option>
                            <option value="Yes" <?= set_value('winter_tires') == 'Yes' ? 'selected' : '' ?>>Yes</option>
                            <option value="No" <?= set_value('winter_tires') == 'No' ? 'selected' : '' ?>>No</option>
                        </select>
                        <small class="text-danger"><?= form_error('winter_tires') ?></small>
                    </div>
                </div>
            </div>
            
            <div class="form-section">
                <h4>Registration & Documents</h4>
                <div class="form-row">
                    <div class="form-group">
                        <label for="year">Registration Year *</label>
                        <input type="number" class="form-control" name="year" placeholder="Enter registration year" value="<?= set_value('year') ?>">
                        <small class="text-danger"><?= form_error('year') ?></small>
                    </div>
                    
                    <div class="form-group">
                        <label for="ownership">Ownership *</label>
                        <select name="ownership" class="form-control" id="ownership">
                            <option value="">Select Owner</option>
                            <option value="1st" <?php if (set_value('ownership') == '1st') echo "selected"; ?>>1st</option>
                            <option value="2nd" <?php if (set_value('ownership') == '2nd') echo "selected"; ?>>2nd</option>
                            <option value="3rd" <?php if (set_value('ownership') == '3rd') echo "selected"; ?>>3rd</option>
                        </select>
                        <small class="text-danger"><?= form_error('ownership') ?></small>
                    </div>
                </div>
                
                <div class="form-row">
                    <div class="form-group">
                        <label for="mfk_date">MFK Date *</label>
                        <input type="month" class="form-control" name="mfk_date" value="<?= set_value('mfk_date') ?>">
                        <small class="text-danger"><?= form_error('mfk_date') ?></small>
                    </div>
                    
                    <div class="form-group">
                        <label for="tuv_date">TUV Date *</label>
                        <input type="month" class="form-control" name="tuv_date" value="<?= set_value('tuv_date') ?>">
                        <small class="text-danger"><?= form_error('tuv_date') ?></small>
                    </div>
                </div>
                
                <div class="form-row">
                    <div class="form-group">
                        <label for="euro_norm">Euro Norm *</label>
                        <select name="euro_norm" class="form-control" id="euro_norm">
                            <option value="">Select Euro</option>
                            <option value="6 Euro" <?php if (set_value('euro_norm') == '6 Euro') echo "selected"; ?>>6 Euro</option>
                            <option value="5 Euro" <?php if (set_value('euro_norm') == '5 Euro') echo "selected"; ?>>5 Euro</option>
                            <option value="4 Euro" <?php if (set_value('euro_norm') == '4 Euro') echo "selected"; ?>>4 Euro</option>
                            <option value="3 Euro" <?php if (set_value('euro_norm') == '3 Euro') echo "selected"; ?>>3 Euro</option>
                        </select>
                        <small class="text-danger"><?= form_error('euro_norm') ?></small>
                    </div>
                    
                    <div class="form-group">
                        <label for="co2_emission">CO₂ Emission *</label>
                        <input type="text" class="form-control" name="co2_emission" placeholder="Enter CO₂ emission" value="<?= set_value('co2_emission') ?>">
                        <small class="text-danger"><?= form_error('co2_emission') ?></small>
                    </div>
                </div>
            </div>
        </div>

        <!-- Step 3: Features & Specifications -->
        <div class="step-content" id="step3">
            <div class="step-title">Step 3: Features & Specifications</div>
            
            <div class="form-section">
                <h4>Climate Control</h4>
                <div class="form-group">
                    <label for="ac_type">Climate Control / AC Type *</label>
                    <select name="ac_type" class="form-control">
                        <option value="">Select Climate Control Type</option>
                        <option value="No AC" <?php if (set_value('ac_type') == 'No AC') echo "selected"; ?>>No AC</option>
                        <option value="Manual AC" <?php if (set_value('ac_type') == 'Manual AC') echo "selected"; ?>>Manual AC</option>
                        <option value="Automatic AC" <?php if (set_value('ac_type') == 'Automatic AC') echo "selected"; ?>>Automatic AC</option>
                        <option value="Dual-Zone Automatic AC" <?php if (set_value('ac_type') == 'Dual-Zone Automatic AC') echo "selected"; ?>>Dual-Zone Automatic AC</option>
                        <option value="Tri-Zone Automatic AC" <?php if (set_value('ac_type') == 'Tri-Zone Automatic AC') echo "selected"; ?>>Tri-Zone Automatic AC</option>
                        <option value="4-Zone Automatic AC" <?php if (set_value('ac_type') == '4-Zone Automatic AC') echo "selected"; ?>>4-Zone Automatic AC</option>
                    </select>
                </div>
                
                <div class="form-group">
                    <label for="parking_sensors">Parking Sensors</label>
                    <select class="form-control" name="parking_sensors">
                        <option value="">Select</option>
                        <option value="None">None</option>
                        <option value="Rear Only">Rear Only</option>
                        <option value="Front Only">Front Only</option>
                        <option value="Front and Rear">Front and Rear</option>
                    </select>
                </div>
            </div>
            
            <div class="form-section feature-category">
                <h4>Comfort & Interior Features</h4>
                <div class="selection-counter" id="comfort-counter">0 selected</div>
                <div class="checkbox-group">
                    <?php $selected_comforts = set_value('comfort_and_interior') ?: []; ?>
                    <?php foreach ($comforts as $comfort) { ?>
                        <div class="checkbox-item <?= in_array($comfort->name, $selected_comforts) ? 'checked' : '' ?>">
                            <input type="checkbox" name="comfort_and_interior[]" value="<?= $comfort->name ?>"
                                <?php if (in_array($comfort->name, $selected_comforts)) echo "checked"; ?>>
                            <label><?= $comfort->name ?></label>
                        </div>
                    <?php } ?>
                </div>
            </div>
            
            <div class="form-section feature-category">
                <h4>Safety & Assistance</h4>
                <div class="selection-counter" id="safety-counter">0 selected</div>
                <div class="checkbox-group">
                    <?php $selected_safety = set_value('safety_and_assistance') ?: []; ?>
                    <?php foreach ($safety_and_assistance as $safety) { ?>
                        <div class="checkbox-item <?= in_array($safety->name, $selected_safety) ? 'checked' : '' ?>">
                            <input type="checkbox" name="safety_and_assistance[]" value="<?= $safety->name ?>"
                                <?php if (in_array($safety->name, $selected_safety)) echo "checked"; ?>>
                            <label><?= $safety->name ?></label>
                        </div>
                    <?php } ?>
                </div>
            </div>
            
            <div class="form-section feature-category">
                <h4>Lighting & Visibility</h4>
                <div class="selection-counter" id="lighting-counter">0 selected</div>
                <div class="checkbox-group">
                    <?php $selected_lighting = set_value('lighting_and_visibility') ?: []; ?>
                    <?php foreach ($lighting_and_visibility as $lighting) { ?>
                        <div class="checkbox-item <?= in_array($lighting->name, $selected_lighting) ? 'checked' : '' ?>">
                            <input type="checkbox" name="lighting_and_visibility[]" value="<?= $lighting->name ?>"
                                <?php if (in_array($lighting->name, $selected_lighting)) echo "checked"; ?>>
                            <label><?= $lighting->name ?></label>
                        </div>
                    <?php } ?>
                </div>
            </div>
            
            <div class="form-section feature-category">
                <h4>Multimedia & Navigation</h4>
                <div class="selection-counter" id="multimedia-counter">0 selected</div>
                <div class="checkbox-group">
                    <?php $selected_multimedia = set_value('multimedia_and_navigation') ?: []; ?>
                    <?php foreach ($multimedia_and_navigation as $multimedia) { ?>
                        <div class="checkbox-item <?= in_array($multimedia->name, $selected_multimedia) ? 'checked' : '' ?>">
                            <input type="checkbox" name="multimedia_and_navigation[]" value="<?= $multimedia->name ?>"
                                <?php if (in_array($multimedia->name, $selected_multimedia)) echo "checked"; ?>>
                            <label><?= $multimedia->name ?></label>
                        </div>
                    <?php } ?>
                </div>
            </div>
            
            <div class="form-section feature-category">
                <h4>Engine & Drive Technology</h4>
                <div class="selection-counter" id="engine-counter">0 selected</div>
                <div class="checkbox-group">
                    <?php $selected_engine = set_value('engine_and_drive_technology') ?: []; ?>
                    <?php foreach ($engine_and_drive_technology as $engine) { ?>
                        <div class="checkbox-item <?= in_array($engine->name, $selected_engine) ? 'checked' : '' ?>">
                            <input type="checkbox" name="engine_and_drive_technology[]" value="<?= $engine->name ?>"
                                <?php if (in_array($engine->name, $selected_engine)) echo "checked"; ?>>
                            <label><?= $engine->name ?></label>
                        </div>
                    <?php } ?>
                </div>
            </div>
            
            <div class="form-section feature-category">
                <h4>Exterior & Design</h4>
                <div class="selection-counter" id="exterior-counter">0 selected</div>
                <div class="checkbox-group">
                    <?php $selected_exterior = set_value('exterior') ?: []; ?>
                    <?php foreach ($exterior_and_design as $exterior) { ?>
                        <div class="checkbox-item <?= in_array($exterior->name, $selected_exterior) ? 'checked' : '' ?>">
                            <input type="checkbox" name="exterior[]" value="<?= $exterior->name ?>"
                                <?php if (in_array($exterior->name, $selected_exterior)) echo "checked"; ?>>
                            <label><?= $exterior->name ?></label>
                        </div>
                    <?php } ?>
                </div>
            </div>
            
            <div class="form-section feature-category">
                <h4>Other Features & Extras</h4>
                <div class="selection-counter" id="other-counter">0 selected</div>
                <div class="checkbox-group">
                    <?php $selected_other = set_value('other_features_and_extras') ?: []; ?>
                    <?php foreach ($other_features_and_extras as $other) { ?>
                        <div class="checkbox-item <?= in_array($other->name, $selected_other) ? 'checked' : '' ?>">
                            <input type="checkbox" name="other_features_and_extras[]" value="<?= $other->name ?>"
                                <?php if (in_array($other->name, $selected_other)) echo "checked"; ?>>
                            <label><?= $other->name ?></label>
                        </div>
                    <?php } ?>
                </div>
            </div>
        </div>

        <!-- Step 4: Pricing & Location -->
        <div class="step-content" id="step4">
            <div class="step-title">Step 4: Pricing & Location</div>
            
            <div class="form-section">
                <h4>Pricing Information</h4>
                <div class="form-row">
                    <div class="form-group">
                        <label for="price">Expected Price (€) *</label>
                        <input type="text" class="form-control" name="price" placeholder="Enter price" value="<?= set_value('price') ?>">
                        <small class="text-danger"><?= form_error('price') ?></small>
                    </div>
                    
                    <div class="form-group">
                        <label for="is_negotiable">Is Price Negotiable *</label>
                        <select name="is_negotiable" class="form-control" id="is_negotiable">
                            <option value="">Select</option>
                            <option value="yes" <?php if (set_value('is_negotiable') == 'yes') echo "selected"; ?>>Yes</option>
                            <option value="no" <?php if (set_value('is_negotiable') == 'no') echo "selected"; ?>>No</option>
                        </select>
                        <small class="text-danger"><?= form_error('is_negotiable') ?></small>
                    </div>
                </div>
                
                <div class="form-group">
                    <label for="description">Description</label>
                    <textarea name="description" class="form-control" id="description" rows="5" placeholder="Describe your vehicle in detail..."><?= set_value('description') ?></textarea>
                    <small class="text-danger"><?= form_error('description') ?></small>
                </div>
            </div>
            
            <div class="form-section">
                <h4>Location Details</h4>
                <div class="form-row">
                    <div class="form-group">
                        <label for="state">Country *</label>
                        <select class="form-control" name="state" id="state" onchange="on_change_state();">
                            <option value="">Select Location</option>
                            <?php foreach ($states as $state) { ?>
                                <option value="<?= $state->id; ?>" 
                                    <?php if (set_value('state') == $state->id) echo "selected"; ?>>
                                    <?= $state->name; ?>
                                </option>
                            <?php } ?>
                        </select>
                        <small class="text-danger"><?= form_error('state') ?></small>
                    </div>
                    
                    <div class="form-group">
                        <label for="city">City/Town *</label>
                        <select class="form-control" name="location" id="city">
                            <option value="">Select City</option>
                            <?php foreach ($cities as $city) { ?>
                                <option value="<?= $city->id; ?>" 
                                    <?php if (set_value('location') == $city->id) echo "selected"; ?>>
                                    <?= $city->city_name; ?>
                                </option>
                            <?php } ?>
                        </select>
                        <small class="text-danger"><?= form_error('location') ?></small>
                    </div>
                </div>
                
                <div class="form-group">
                    <label for="zipcode">Zipcode *</label>
                    <input type="text" class="form-control" name="zipcode" placeholder="Enter zipcode" value="<?= set_value('zipcode') ?>">
                    <small class="text-danger"><?= form_error('zipcode') ?></small>
                </div>
            </div>
        </div>

        <!-- Step 5: Upload Documents -->
        <div class="step-content" id="step5">
            <div class="step-title">Step 5: Upload Documents & Photos</div>
            
            <div class="form-section">
                <h4>Vehicle Photos</h4>
                <div class="form-group">
                    <label for="photos">Upload Vehicle Photos *</label>
                    <div class="file-upload">
                        <input type="file" accept="image/*" name="photos[]" id="photos" multiple>
                        <div class="file-upload-label">
                            <i class="fas fa-cloud-upload-alt"></i> Click to upload photos (Multiple files allowed)
                        </div>
                    </div>
                    <small class="text-muted">Upload clear, high-quality photos of your vehicle from different angles</small>
                    
                    <!-- Photo Preview Container -->
                    <div class="photo-preview-container" id="photoPreviewContainer">
                        <h5>Selected Photos (<span id="photoCount">0</span>)</h5>
                        <p class="text-muted" style="font-size: 13px; margin-bottom: 15px;">
                            <i class="fas fa-info-circle"></i> Drag photos to reorder them. The first photo will be the main image.
                        </p>
                        <div class="photo-preview-grid" id="photoPreviewGrid">
                            <!-- Photo previews will be added here dynamically -->
                        </div>
                        <button type="button" class="add-more-photos" id="addMorePhotos" onclick="triggerFileUpload()">
                            <i class="fas fa-plus"></i> Add More Photos
                        </button>
                    </div>
                    
                    <!-- Photo Upload Guidelines -->
                    <div class="photo-upload-info">
                        <h5><i class="fas fa-info-circle"></i> Photo Guidelines</h5>
                        <ul>
                            <li>Upload at least 3-5 photos of your vehicle</li>
                            <li>Include front, back, side, and interior views</li>
                            <li>Ensure photos are clear and well-lit</li>
                            <li>Maximum file size: 5MB per photo</li>
                            <li>Supported formats: JPG, PNG, GIF</li>
                        </ul>
                    </div>
                </div>
            </div>
            
            <div class="form-section">
                <h4>Documents</h4>
                <div class="form-group">
                    <label for="emission_certificate">Emission Certificate</label>
                    <div class="file-upload">
                        <input type="file" name="emission_certificate" id="emission_certificate">
                        <div class="file-upload-label">
                            <i class="fas fa-file-pdf"></i> Click to upload emission certificate (PDF)
                        </div>
                    </div>
                    <small class="text-muted">Upload your vehicle's emission certificate in PDF format</small>
                </div>
            </div>
        </div>

        <!-- Step Navigation -->
        <div class="step-navigation">
            <button type="button" class="btn btn-secondary" id="prevBtn" onclick="previousStep()" style="display: none;">
                <i class="fas fa-arrow-left"></i> Previous
            </button>
            <button type="button" class="btn btn-primary" id="nextBtn" onclick="nextStep()">
                Next <i class="fas fa-arrow-right"></i>
            </button>
            <button type="submit" class="btn btn-success" id="submitBtn" style="display: none;">
                <i class="fas fa-check"></i> Submit Listing
            </button>
        </div>
    </form>
</div>

<script>
let currentStep = 1;
const totalSteps = 5;

// Initialize progress bar
updateProgressBar();

function updateProgressBar() {
    const progress = (currentStep / totalSteps) * 100;
    document.getElementById('progressBar').style.width = progress + '%';
}

function showStep(step) {
    // Hide all steps
    for (let i = 1; i <= totalSteps; i++) {
        document.getElementById('step' + i).classList.remove('active');
        document.querySelector(`[data-step="${i}"]`).classList.remove('active', 'completed');
    }
    
    // Show current step
    document.getElementById('step' + step).classList.add('active');
    document.querySelector(`[data-step="${step}"]`).classList.add('active');
    
    // Mark previous steps as completed
    for (let i = 1; i < step; i++) {
        document.querySelector(`[data-step="${i}"]`).classList.add('completed');
    }
    
    // Update navigation buttons
    updateNavigationButtons();
    updateProgressBar();
}

function updateNavigationButtons() {
    const prevBtn = document.getElementById('prevBtn');
    const nextBtn = document.getElementById('nextBtn');
    const submitBtn = document.getElementById('submitBtn');
    
    if (currentStep === 1) {
        prevBtn.style.display = 'none';
    } else {
        prevBtn.style.display = 'inline-flex';
    }
    
    if (currentStep === totalSteps) {
        nextBtn.style.display = 'none';
        submitBtn.style.display = 'inline-flex';
    } else {
        nextBtn.style.display = 'inline-flex';
        submitBtn.style.display = 'none';
    }
}

function nextStep() {
    if (currentStep < totalSteps) {
        currentStep++;
        showStep(currentStep);
        // Scroll to top with smooth animation
        window.scrollTo({
            top: 0,
            behavior: 'smooth'
        });
    }
}

function previousStep() {
    if (currentStep > 1) {
        currentStep--;
        showStep(currentStep);
        // Scroll to top with smooth animation
        window.scrollTo({
            top: 0,
            behavior: 'smooth'
        });
    }
}

// Step click functionality
document.querySelectorAll('.step-item').forEach(item => {
    item.addEventListener('click', function() {
        const step = parseInt(this.getAttribute('data-step'));
        if (step <= currentStep) {
            currentStep = step;
            showStep(currentStep);
            // Scroll to top with smooth animation
            window.scrollTo({
                top: 0,
                behavior: 'smooth'
            });
        }
    });
});










// File upload styling
document.querySelectorAll('input[type="file"]').forEach(input => {
    input.addEventListener('change', function() {
        const label = this.parentElement.querySelector('.file-upload-label');
        if (this.files.length > 0) {
            if (this.multiple) {
                label.innerHTML = `<i class="fas fa-check"></i> ${this.files.length} file(s) selected`;
            } else {
                label.innerHTML = `<i class="fas fa-check"></i> ${this.files[0].name}`;
            }
            label.style.background = '#e8f5e8';
            label.style.borderColor = '#4caf50';
            label.style.color = '#4caf50';
        } else {
            label.innerHTML = `<i class="fas fa-cloud-upload-alt"></i> Click to upload`;
            label.style.background = '#fff8f0';
            label.style.borderColor = '#FF7101';
            label.style.color = '#FF7101';
        }
        
        // Handle photo preview for photos input
        if (this.id === 'photos') {
            handlePhotoPreview(this.files);
        }
    });
});

// Photo preview functionality
let selectedPhotos = [];

function handlePhotoPreview(files) {
    if (files.length === 0) return;
    
    // Convert FileList to Array and add to selectedPhotos
    const newFiles = Array.from(files);
    selectedPhotos = [...selectedPhotos, ...newFiles];
    
    // Update preview
    updatePhotoPreview();
}

function updatePhotoPreview() {
    const container = document.getElementById('photoPreviewContainer');
    const grid = document.getElementById('photoPreviewGrid');
    const countSpan = document.getElementById('photoCount');
    
    if (selectedPhotos.length === 0) {
        container.style.display = 'none';
        return;
    }
    
    container.style.display = 'block';
    countSpan.textContent = selectedPhotos.length;
    
    // Clear existing previews
    grid.innerHTML = '';
    
    // Create preview for each photo
    selectedPhotos.forEach((file, index) => {
        const reader = new FileReader();
        reader.onload = function(e) {
            const previewItem = document.createElement('div');
            previewItem.className = 'photo-preview-item';
            previewItem.draggable = true;
            previewItem.dataset.index = index;
            previewItem.innerHTML = `
                <img src="${e.target.result}" alt="Photo ${index + 1}">
                <div class="drag-handle" title="Drag to reorder">
                    <i class="fas fa-grip-vertical"></i>
                </div>
                <div class="photo-number">${index + 1}</div>
                <button type="button" class="photo-remove-btn" onclick="removePhoto(${index})">
                    <i class="fas fa-times"></i>
                </button>
            `;
            
            // Add drag event listeners
            addDragListeners(previewItem);
            
            grid.appendChild(previewItem);
        };
        reader.readAsDataURL(file);
    });
}

function addDragListeners(element) {
    element.addEventListener('dragstart', handleDragStart);
    element.addEventListener('dragend', handleDragEnd);
    element.addEventListener('dragover', handleDragOver);
    element.addEventListener('dragenter', handleDragEnter);
    element.addEventListener('dragleave', handleDragLeave);
    element.addEventListener('drop', handleDrop);
}

function handleDragStart(e) {
    e.target.classList.add('dragging');
    e.dataTransfer.effectAllowed = 'move';
    e.dataTransfer.setData('text/html', e.target.outerHTML);
    e.dataTransfer.setData('text/plain', e.target.dataset.index);
}

function handleDragEnd(e) {
    e.target.classList.remove('dragging');
    // Remove drag-over class from all items
    document.querySelectorAll('.photo-preview-item').forEach(item => {
        item.classList.remove('drag-over');
    });
}

function handleDragOver(e) {
    e.preventDefault();
    e.dataTransfer.dropEffect = 'move';
}

function handleDragEnter(e) {
    e.preventDefault();
    if (e.target.closest('.photo-preview-item') && !e.target.closest('.photo-preview-item').classList.contains('dragging')) {
        e.target.closest('.photo-preview-item').classList.add('drag-over');
    }
}

function handleDragLeave(e) {
    if (e.target.closest('.photo-preview-item')) {
        e.target.closest('.photo-preview-item').classList.remove('drag-over');
    }
}

function handleDrop(e) {
    e.preventDefault();
    
    const draggedIndex = parseInt(e.dataTransfer.getData('text/plain'));
    const dropTarget = e.target.closest('.photo-preview-item');
    
    if (!dropTarget || dropTarget.classList.contains('dragging')) {
        return;
    }
    
    const dropIndex = parseInt(dropTarget.dataset.index);
    
    if (draggedIndex !== dropIndex) {
        // Reorder the photos array
        const draggedPhoto = selectedPhotos[draggedIndex];
        selectedPhotos.splice(draggedIndex, 1);
        selectedPhotos.splice(dropIndex, 0, draggedPhoto);
        
        // Update the file input
        updateFileInput();
        
        // Re-render the preview
        updatePhotoPreview();
    }
    
    // Remove drag-over class
    dropTarget.classList.remove('drag-over');
}

function updateFileInput() {
    const fileInput = document.getElementById('photos');
    const dt = new DataTransfer();
    selectedPhotos.forEach(file => dt.items.add(file));
    fileInput.files = dt.files;
}

function removePhoto(index) {
    selectedPhotos.splice(index, 1);
    updatePhotoPreview();
    
    // Update the file input
    updateFileInput();
    
    // Update the label
    const fileInput = document.getElementById('photos');
    const label = fileInput.parentElement.querySelector('.file-upload-label');
    if (selectedPhotos.length > 0) {
        label.innerHTML = `<i class="fas fa-check"></i> ${selectedPhotos.length} file(s) selected`;
        label.style.background = '#e8f5e8';
        label.style.borderColor = '#4caf50';
        label.style.color = '#4caf50';
    } else {
        label.innerHTML = `<i class="fas fa-cloud-upload-alt"></i> Click to upload photos (Multiple files allowed)`;
        label.style.background = '#fff8f0';
        label.style.borderColor = '#FF7101';
        label.style.color = '#FF7101';
    }
}

function triggerFileUpload() {
    document.getElementById('photos').click();
}
</script>

<script>
let currentStep = 1;
const totalSteps = 5;

// Initialize progress bar
updateProgressBar();

function updateProgressBar() {
    const progress = (currentStep / totalSteps) * 100;
    document.getElementById('progressBar').style.width = progress + '%';
}

function showStep(step) {
    // Hide all steps
    for (let i = 1; i <= totalSteps; i++) {
        document.getElementById('step' + i).classList.remove('active');
        document.querySelector(`[data-step="${i}"]`).classList.remove('active', 'completed');
    }
    
    // Show current step
    document.getElementById('step' + step).classList.add('active');
    document.querySelector(`[data-step="${step}"]`).classList.add('active');
    
    // Mark previous steps as completed
    for (let i = 1; i < step; i++) {
        document.querySelector(`[data-step="${i}"]`).classList.add('completed');
    }
    
    // Update navigation buttons
    updateNavigationButtons();
    updateProgressBar();
}

function updateNavigationButtons() {
    const prevBtn = document.getElementById('prevBtn');
    const nextBtn = document.getElementById('nextBtn');
    const submitBtn = document.getElementById('submitBtn');
    
    if (currentStep === 1) {
        prevBtn.style.display = 'none';
    } else {
        prevBtn.style.display = 'inline-flex';
    }
    
    if (currentStep === totalSteps) {
        nextBtn.style.display = 'none';
        submitBtn.style.display = 'inline-flex';
    } else {
        nextBtn.style.display = 'inline-flex';
        submitBtn.style.display = 'none';
    }
}

function nextStep() {
    if (currentStep < totalSteps) {
        currentStep++;
        showStep(currentStep);
        // Scroll to top with smooth animation
        window.scrollTo({
            top: 0,
            behavior: 'smooth'
        });
    }
}

function previousStep() {
    if (currentStep > 1) {
        currentStep--;
        showStep(currentStep);
        // Update navigation buttons
        updateNavigationButtons();
        updateProgressBar();
        // Scroll to top with smooth animation
        window.scrollTo({
            top: 0,
            behavior: 'smooth'
        });
    }
}

// Step click functionality
document.querySelectorAll('.step-item').forEach(item => {
    item.addEventListener('click', function() {
        const step = parseInt(this.getAttribute('data-step'));
        if (step <= currentStep) {
            currentStep = step;
            showStep(currentStep);
            // Scroll to top with smooth animation
            window.scrollTo({
                top: 0,
                behavior: 'smooth'
            });
        }
    });
});
</script>

<script>
// AJAX functions for dynamic dropdowns
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

function on_change_make() {
    const makeId = $("#make_id").val();

    if (makeId !== "") {
        $('#model_id').prop('disabled', false);

        $.ajax({
            url: "<?= base_url(ADMIN_PATH . "/get-modal-by-make") ?>",
            type: 'POST',
            data: { make_id: makeId },
            dataType: 'json',
            success: function(response) {
                $('#model_id').html('<option value="">Select Model</option>');
                $.each(response, function(index, item) {
                    $('#model_id').append('<option value="' + item.id + '">' + item.name + '</option>');
                });

                if (response.length === 1) {
                    $('#model_id').val(response[0].id);
                    $('#model_id').addClass('single-option-tab');
                    // Trigger on_change_model to load variants when single option is selected
                    on_change_model();
                } else {
                    $('#model_id').removeClass('single-option-tab');
                }
            },
            error: function() {
                alert('Error loading model list.');
            }
        });
    } else {
        $('#model_id').prop('disabled', true);
        $('#model_id').html('<option value="">Select Model</option>');
        $('#model_id').removeClass('single-option-tab');
    }
}

function on_change_model() {
    const modelId = $("#model_id").val();

    if (modelId !== "") {
        $.ajax({
            url: "<?= base_url(ADMIN_PATH . "/get-variant-by-model") ?>",
            type: 'POST',
            data: { model_id: modelId },
            dataType: 'json',
            success: function(response) {
                $('#variant_id').html('<option value="">Select Variant</option>');
                $.each(response, function(index, item) {
                    $('#variant_id').append('<option value="' + item.id + '">' + item.name + '</option>');
                });

                if (response.length === 1) {
                    $('#variant_id').val(response[0].id);
                    $('#variant_id').addClass('single-option-tab');
                } else {
                    $('#variant_id').removeClass('single-option-tab');
                }
            },
            error: function() {
                alert('Error loading variant list.');
            }
        });
    } else {
        $('#variant_id').html('<option value="">Select Variant</option>');
    }
}

// State/City AJAX function
function on_change_state() {
    const stateId = $("#state").val();

    if (stateId !== "") {
        $.ajax({
            url: "<?= base_url(ADMIN_PATH . "/get-city-by-state") ?>",
            type: 'POST',
            data: { state: stateId },
            dataType: 'json',
            success: function(response) {
                $('#city').html('<option value="">Select City</option>');
                $.each(response, function(index, item) {
                    $('#city').append('<option value="' + item.id + '">' + item.city_name + '</option>');
                });

                if (response.length === 1) {
                    $('#city').val(response[0].id);
                    $('#city').addClass('single-option-tab');
                } else {
                    $('#city').removeClass('single-option-tab');
                }
            },
            error: function() {
                alert('Error loading city list.');
            }
        });
    } else {
        $('#city').html('<option value="">Select City</option>');
    }
}
</script>

<script>
// File upload styling
document.querySelectorAll('input[type="file"]').forEach(input => {
    input.addEventListener('change', function() {
        const label = this.parentElement.querySelector('.file-upload-label');
        if (this.files.length > 0) {
            if (this.multiple) {
                label.innerHTML = `<i class="fas fa-check"></i> ${this.files.length} file(s) selected`;
            } else {
                label.innerHTML = `<i class="fas fa-check"></i> ${this.files[0].name}`;
            }
            label.style.background = '#e8f5e8';
            label.style.borderColor = '#4caf50';
            label.style.color = '#4caf50';
        } else {
            label.innerHTML = `<i class="fas fa-cloud-upload-alt"></i> Click to upload`;
            label.style.background = '#f8f9ff';
            label.style.borderColor = '#2196f3';
            label.style.color = '#2196f3';
        }
    });
});

// Checkbox functionality
document.addEventListener('DOMContentLoaded', function() {
    // Handle checkbox item clicks
    document.querySelectorAll('.checkbox-item').forEach(item => {
        item.addEventListener('click', function(e) {
            // Don't trigger if clicking directly on the checkbox input
            if (e.target.type === 'checkbox') {
                return;
            }
            
            const checkbox = this.querySelector('input[type="checkbox"]');
            const isChecked = checkbox.checked;
            
            // Toggle the checkbox
            checkbox.checked = !isChecked;
            
            // Update visual state
            if (checkbox.checked) {
                this.classList.add('checked');
            } else {
                this.classList.remove('checked');
            }
            
            // Update selection counter
            updateSelectionCounter(this);
        });
    });
    
    // Handle direct checkbox input clicks
    document.querySelectorAll('.checkbox-item input[type="checkbox"]').forEach(checkbox => {
        checkbox.addEventListener('change', function() {
            const item = this.closest('.checkbox-item');
            if (this.checked) {
                item.classList.add('checked');
            } else {
                item.classList.remove('checked');
            }
            updateSelectionCounter(item);
        });
    });
    
    // Initialize counters
    updateAllCounters();
});

// Function to update selection counter for a specific category
function updateSelectionCounter(item) {
    const category = item.closest('.feature-category');
    if (category) {
        const counter = category.querySelector('.selection-counter');
        const checkboxes = category.querySelectorAll('input[type="checkbox"]:checked');
        const counterId = counter.id;
        
        if (counterId) {
            counter.textContent = `${checkboxes.length} selected`;
        }
    }
}

// Function to update all counters
function updateAllCounters() {
    document.querySelectorAll('.feature-category').forEach(category => {
        const counter = category.querySelector('.selection-counter');
        const checkboxes = category.querySelectorAll('input[type="checkbox"]:checked');
        const counterId = counter.id;
        
        if (counterId) {
            counter.textContent = `${checkboxes.length} selected`;
        }
    });
}
</script>