<style>
/* Two-column layout styling */
.filter-hero-section {
    background: linear-gradient(135deg, #e63900 0%, #f4782b 100%);
    min-height: 400px;
    display: flex;
    align-items: center;
    padding: 40px 0;
    position: relative;
    overflow: hidden;
}

.filter-container {
    display: flex;
    gap: 40px;
    align-items: stretch;
    max-width: 1200px;
    margin: 0 auto;
    padding: 0 20px;
}

/* Left side - Search Form */
.search-form-section {
    flex: 0 0 53%;
    background: white;
    border-radius: 16px;
    padding: 32px;
    box-shadow: 0 10px 30px rgba(0, 0, 0, 0.15);
    position: relative;
    z-index: 2;
}

.search-form-title {
    font-size: 24px;
    font-weight: 700;
    color: #333;
    margin-bottom: 24px;
    text-align: center;
}

 /* Vehicle type selector */
 .vehicle-type-selector {
     display: flex;
     gap: 8px;
     margin-bottom: 24px;
     justify-content: center;
     flex-wrap: wrap;
 }

 .vehicle-type-btn {
     padding: 10px 12px;
     border: 2px solid #e0e0e0;
     background: #f8f9fa;
     border-radius: 10px;
     cursor: pointer;
     transition: all 0.3s ease;
     color: #666;
     display: flex;
     align-items: center;
     justify-content: center;
     min-width: 44px;
     height: 44px;
 }

 .vehicle-type-btn.active,
 .vehicle-type-btn:hover {
     border-color: #e63900;
     background: #fff0ea;
     color: #e63900;
     transform: translateY(-2px);
     box-shadow: 0 4px 12px rgba(230, 57, 0, 0.2);
 }

 .vehicle-type-btn svg {
     width: 24px;
     height: 24px;
 }

/* Form fields */
.form-row {
    display: grid;
    grid-template-columns: 1fr 1fr;
    gap: 16px;
    margin-bottom: 16px;
}

.form-field {
    display: flex;
    flex-direction: column;
}

.form-label {
    font-weight: 600;
    color: #333;
    margin-bottom: 8px;
    font-size: 14px;
}

.form-control,
.form-select {
    height: 44px;
    padding: 8px 12px;
    border: 1px solid #ddd;
    border-radius: 8px;
    font-size: 14px;
    transition: all 0.3s ease;
}

.form-control:focus,
.form-select:focus {
    outline: none;
    border-color: #e63900;
    box-shadow: 0 0 0 3px rgba(230, 57, 0, 0.1);
}

/* Payment type buttons */
.payment-type-group {
    display: flex;
    gap: 8px;
    margin-bottom: 24px;
}

.payment-type-btn {
    flex: 1;
    padding: 12px 16px;
    border: 2px solid #ddd;
    background: white;
    border-radius: 8px;
    cursor: pointer;
    transition: all 0.3s ease;
    font-weight: 500;
    text-align: center;
}

.payment-type-btn.active {
    border-color: #e63900;
    background: #fff0ea;
    color: #e63900;
}

/* Search button */
.search-btn {
    width: 100%;
    background: #e63900;
    color: white;
    border: none;
    padding: 16px 24px;
    border-radius: 12px;
    font-weight: 600;
    font-size: 16px;
    cursor: pointer;
    transition: all 0.3s ease;
    display: flex;
    align-items: center;
    justify-content: center;
    gap: 8px;
    margin-bottom: 16px;
}

.search-btn:hover {
    background: #d32f2f;
    transform: translateY(-2px);
    box-shadow: 0 8px 25px rgba(230, 57, 0, 0.3);
}

/* Action buttons */
.action-buttons {
    display: flex;
    gap: 12px;
}

.action-btn {
    flex: 1;
    padding: 10px 16px;
    border: 1px solid #ddd;
    background: white;
    border-radius: 8px;
    cursor: pointer;
    transition: all 0.3s ease;
    font-size: 14px;
    text-decoration: none;
    color: #666;
    text-align: center;
}

.action-btn:hover {
    background: #f8f9fa;
    border-color: #e63900;
    color: #e63900;
}

/* Right side - Promotional Banner */
.promo-banner {
    flex: 1;
    display: flex;
    flex-direction: column;
    justify-content: center;
    color: white;
    position: relative;
    z-index: 1;
}

.promo-content {
    text-align: left;
    max-width: 400px;
}

.promo-title {
    font-size: 48px;
    font-weight: 800;
    line-height: 1.1;
    margin-bottom: 16px;
    text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.3);
    color: #fff;
}

.promo-subtitle {
    font-size: 18px;
    font-weight: 400;
    margin-bottom: 24px;
    opacity: 0.9;
    color: #fff;
}


/* Responsive design */
@media (max-width: 1024px) {
    .filter-container {
        flex-direction: column;
        gap: 24px;
    }
    
    .search-form-section {
        flex: none;
        width: 100%;
    }
    
    .promo-banner {
        text-align: center;
    }
    
    .promo-content {
        max-width: 100%;
    }
    
    .promo-motorcycle {
        display: none;
    }
}

@media (max-width: 768px) {
    .filter-hero-section {
        padding: 20px 0;
    }
    
    .search-form-section {
        padding: 24px;
    }
    
    .form-row {
        grid-template-columns: 1fr;
    }
    
    .vehicle-type-selector {
        flex-wrap: wrap;
    }
    
    .promo-title {
        font-size: 36px;
    }
}

@media (max-width: 480px) {
    .search-form-section {
        padding: 20px;
    }
    
    .promo-title {
        font-size: 28px;
    }
    
    .promo-subtitle {
        font-size: 16px;
    }
}
</style>

<div class="filter-hero-section">
    <div class="filter-container">
        <!-- Left Side - Search Form -->
        <div class="search-form-section">
            <h2 class="search-form-title">Find your perfect bike</h2>
            
                         <!-- Vehicle Type Selector -->
             <div class="vehicle-type-selector">
                 <div class="vehicle-type-btn active" data-type="car" title="Car">
                     <svg viewBox="0 0 24 24" fill="currentColor">
                         <path d="M18.92 6.01C18.72 5.42 18.16 5 17.5 5h-11c-.66 0-1.22.42-1.42 1.01L3 12v8c0 .55.45 1 1 1h1c.55 0 1-.45 1-1v-1h12v1c0 .55.45 1 1 1h1c.55 0 1-.45 1-1v-8l-2.08-5.99zM6.5 16c-.83 0-1.5-.67-1.5-1.5S5.67 13 6.5 13s1.5.67 1.5 1.5S7.33 16 6.5 16zm11 0c-.83 0-1.5-.67-1.5-1.5s.67-1.5 1.5-1.5 1.5.67 1.5 1.5-.67 1.5-1.5 1.5zM5 11l1.5-4.5h11L19 11H5z"/>
                     </svg>
                 </div>
                 <div class="vehicle-type-btn" data-type="truck" title="Truck">
                     <svg viewBox="0 0 24 24" fill="currentColor">
                         <path d="M20 8h-3V4H3c-1.1 0-2 .9-2 2v11h2c0 1.66 1.34 3 3 3s3-1.34 3-3h4c0 1.66 1.34 3 3 3s3-1.34 3-3h2v-5l-3-4zM6 18.5c-.83 0-1.5-.67-1.5-1.5s.67-1.5 1.5-1.5 1.5.67 1.5 1.5-.67 1.5-1.5 1.5zm13.5-9l1.96 2.5H17V9.5h2.5zm-1.5 9c-.83 0-1.5-.67-1.5-1.5s.67-1.5 1.5-1.5 1.5.67 1.5 1.5-.67 1.5-1.5 1.5z"/>
                     </svg>
                 </div>
                 <div class="vehicle-type-btn" data-type="commercial" title="Commercial Vehicle">
                     <svg viewBox="0 0 24 24" fill="currentColor">
                         <path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/>
                     </svg>
                 </div>
                 <div class="vehicle-type-btn" data-type="bus" title="Bus">
                     <svg viewBox="0 0 24 24" fill="currentColor">
                         <path d="M4 16c0 .88.39 1.67 1 2.22V20c0 .55.45 1 1 1h1c.55 0 1-.45 1-1v-1h8v1c0 .55.45 1 1 1h1c.55 0 1-.45 1-1v-1.78c.61-.55 1-1.34 1-2.22V6c0-3.5-3.58-4-8-4s-8 .5-8 4v10zm3.5 1c-.83 0-1.5-.67-1.5-1.5S6.67 14 7.5 14s1.5.67 1.5 1.5S8.33 17 7.5 17zm9 0c-.83 0-1.5-.67-1.5-1.5s.67-1.5 1.5-1.5 1.5.67 1.5 1.5-.67 1.5-1.5 1.5zm1.5-6H6V6h12v5z"/>
                     </svg>
                 </div>
                 <div class="vehicle-type-btn" data-type="motorcycle" title="Motorcycle">
                     <svg viewBox="0 0 24 24" fill="currentColor">
                         <path d="M19 7c0-1.1-.9-2-2-2h-3v2h3v2.65L13.52 14H10V9H6c-2.21 0-4 1.79-4 4v3h2c0 1.66 1.34 3 3 3s3-1.34 3-3h4.48L19 10.35V7zM7 17c-.55 0-1-.45-1-1h2c0 .55-.45 1-1 1z"/>
                     </svg>
                 </div>
                 <div class="vehicle-type-btn" data-type="machine" title="Machine">
                     <svg viewBox="0 0 24 24" fill="currentColor">
                         <path d="M19 3H5c-1.1 0-2 .9-2 2v14c0 1.1.9 2 2 2h14c1.1 0 2-.9 2-2V5c0-1.1-.9-2-2-2zM9 17H7v-7h2v7zm4 0h-2V7h2v10zm4 0h-2v-4h2v4z"/>
                     </svg>
                 </div>
                 <div class="vehicle-type-btn" data-type="tractor" title="Tractor">
                     <svg viewBox="0 0 24 24" fill="currentColor">
                         <path d="M5 4v3h5.5v12h3V7H19V4H5z"/>
                     </svg>
                 </div>
             </div>

            <!-- Search Form -->
            <form id="car-form" action="<?= base_url('listing-list') ?>" method="get" autocomplete="off">
                <input type="hidden" class="form-control" name="vehicle_type" id="vehicle_type" value="2">
                
                <div class="form-row">
                    <div class="form-field">
                        <label class="form-label" for="cat_id">Category</label>
                        <select class="form-select" onchange="on_change_cat();" name="cat_id" id="cat_id">
                            <option>Any</option>
                            <?php foreach($categories as $cat){ ?>
                                <option value="<?= $cat->id; ?>"><?= $cat->name; ?></option>
                            <?php } ?>
                        </select>
                    </div>
                    <div class="form-field">
                        <label class="form-label" for="make">Brand</label>
                        <select class="form-select" name="make" onchange="on_change_make();" id="make_id">
                            <option>Any</option>
                            <?php foreach($brands as $brand){ ?>
                                <option value="<?= $brand->id; ?>"><?= $brand->name; ?></option>
                            <?php } ?>
                        </select>
                    </div>
                </div>

                <div class="form-row">
                    <div class="form-field">
                        <label class="form-label" for="model">Model</label>
                        <select class="form-select" onchange="on_change_model();" name="model" id="model_id">
                            <option>Any</option>
                            <?php foreach($models as $model){ ?>
                                <option value="<?= $model->id; ?>"><?= $model->name; ?></option>
                            <?php } ?>
                        </select>
                    </div>
                    <div class="form-field">
                        <label class="form-label" for="year">Registration From</label>
                        <input type="number" min="0" class="form-control" name="year" id="year" placeholder="Any">
                    </div>
                </div>

                <div class="form-row">
                    <div class="form-field">
                        <label class="form-label" for="year_to">Registration To</label>
                        <input type="number" min="0" class="form-control" name="year_to" id="year_to" placeholder="Any">
                    </div>
                    <div class="form-field">
                        <label class="form-label" for="zipcode">Zipcode</label>
                        <input type="number" min="0" class="form-control" name="zipcode" id="zipcode" placeholder="Any">
                    </div>
                </div>

                <div class="form-row">
                    <div class="form-field">
                        <label class="form-label" for="price">Price From</label>
                        <input type="text" class="form-control" name="price" id="price" placeholder="Any">
                    </div>
                    <div class="form-field">
                        <label class="form-label" for="price_to">Price To</label>
                        <input type="text" class="form-control" name="price_to" id="price_to" placeholder="Any">
                    </div>
                </div>

                                 <!-- Search Button -->
                 <button type="submit" class="search-btn">
                     <svg width="20" height="20" viewBox="0 0 24 24" fill="currentColor">
                         <path d="M15.5 14h-.79l-.28-.27C15.41 12.59 16 11.11 16 9.5 16 5.91 13.09 3 9.5 3S3 5.91 3 9.5 5.91 16 9.5 16c1.61 0 3.09-.59 4.23-1.57l.27.28v.79l5 4.99L20.49 19l-4.99-5zm-6 0C7.01 14 5 11.99 5 9.5S7.01 5 9.5 5 14 7.01 14 9.5 11.99 14 9.5 14z"/>
                     </svg>
                     Search 31,500 bikes
                 </button>

                <!-- Action Buttons -->
                <div class="action-buttons">
                    <button type="reset" class="action-btn">Reset filters</button>
                    <a href="<?= base_url('advance-filter') ?>" class="action-btn">More options</a>
                </div>
            </form>
        </div>

        <!-- Right Side - Promotional Banner -->
        <div class="promo-banner">
            <div class="promo-content">
                <h1 class="promo-title">
                    GREAT DEALS ON<br>
                    BRAND<br>
                    NEW BIKES<br>
                    FOUND
                </h1>
                <p class="promo-subtitle">Available now and ready to roll.</p>
            </div>
            <div class="promo-motorcycle"></div>
        </div>
    </div>
</div>

<script>
 // Vehicle type selector functionality
 document.querySelectorAll('.vehicle-type-btn').forEach(btn => {
     btn.addEventListener('click', function() {
         // Remove active class from all buttons
         document.querySelectorAll('.vehicle-type-btn').forEach(b => b.classList.remove('active'));
         // Add active class to clicked button
         this.classList.add('active');
         
         // Update vehicle type
         const vehicleType = this.dataset.type;
         const vehicleTypeMap = {
             'car': '2',
             'truck': '4', 
             'commercial': '3',
             'bus': '5',
             'motorcycle': '1',
             'machine': '6',
             'tractor': '7'
         };
         document.getElementById('vehicle_type').value = vehicleTypeMap[vehicleType] || '2';
         
         // Update form title
         const titles = {
             'car': 'Find your perfect car',
             'truck': 'Find your perfect truck',
             'commercial': 'Find your perfect commercial vehicle',
             'bus': 'Find your perfect bus',
             'motorcycle': 'Find your perfect motorcycle',
             'machine': 'Find your perfect machine',
             'tractor': 'Find your perfect tractor'
         };
         document.querySelector('.search-form-title').textContent = titles[vehicleType];
         
         // Update search button text with dummy numbers
         const searchButton = document.querySelector('.search-btn');
         const searchTexts = {
             'car': 'Search 45,200 cars',
             'truck': 'Search 8,500 trucks',
             'commercial': 'Search 12,800 commercial vehicles',
             'bus': 'Search 2,300 buses',
             'motorcycle': 'Search 31,500 motorcycles',
             'machine': 'Search 5,600 machines',
             'tractor': 'Search 1,200 tractors'
         };
         searchButton.innerHTML = `
             <svg width="20" height="20" viewBox="0 0 24 24" fill="currentColor">
                 <path d="M15.5 14h-.79l-.28-.27C15.41 12.59 16 11.11 16 9.5 16 5.91 13.09 3 9.5 3S3 5.91 3 9.5 5.91 16 9.5 16c1.61 0 3.09-.59 4.23-1.57l.27.28v.79l5 4.99L20.49 19l-4.99-5zm-6 0C7.01 14 5 11.99 5 9.5S7.01 5 9.5 5 14 7.01 14 9.5 11.99 14 9.5 14z"/>
             </svg>
             ${searchTexts[vehicleType]}
         `;
     });
 });

// Payment type selector functionality
document.querySelectorAll('.payment-type-btn').forEach(btn => {
    btn.addEventListener('click', function() {
        document.querySelectorAll('.payment-type-btn').forEach(b => b.classList.remove('active'));
        this.classList.add('active');
    });
});

// Existing AJAX functions
function on_change_cat() {
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

 function on_change_make() {
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
                 alert('Error loading model list.');
             }
         });
     } else {
         $('#model_id').html('<option value="">Select Model</option>');
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
             success: function (response) {
                 $('#variant_id').html('<option value="">Select Variant</option>');
                 $.each(response, function (index, item) {
                     $('#variant_id').append('<option value="' + item.id + '">' + item.name + '</option>');
                 });
             },
             error: function () {
                 alert('Error loading variant list.');
             }
         });
     } else {
         $('#variant_id').html('<option value="">Select Variant</option>');
     }
 }
</script>