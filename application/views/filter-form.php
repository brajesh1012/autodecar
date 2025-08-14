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
            <h2 class="search-form-title">Find your perfect car</h2>
            
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
                         <path d="M17 5H3c-1.1 0-2 .9-2 2v9c0 1.1.9 2 2 2h1l1 3h2l1-3h8l1 3h2l1-3h1c1.1 0 2-.9 2-2V7c0-1.1-.9-2-2-2zM7 16H5v-2h2v2zm10 0h-2v-2h2v2zm2-4H3V7h14v5z"/>
                     </svg>
                 </div>
                 <div class="vehicle-type-btn" data-type="bus" title="Bus">
                     <svg viewBox="0 0 24 24" fill="currentColor">
                         <path d="M4 16c0 .88.39 1.67 1 2.22V20c0 .55.45 1 1 1h1c.55 0 1-.45 1-1v-1h8v1c0 .55.45 1 1 1h1c.55 0 1-.45 1-1v-1.78c.61-.55 1-1.34 1-2.22V6c0-3.5-3.58-4-8-4s-8 .5-8 4v10zm3.5 1c-.83 0-1.5-.67-1.5-1.5S6.67 14 7.5 14s1.5.67 1.5 1.5S8.33 17 7.5 17zm9 0c-.83 0-1.5-.67-1.5-1.5s.67-1.5 1.5-1.5 1.5.67 1.5 1.5-.67 1.5-1.5 1.5zm1.5-6H6V6h12v5z"/>
                     </svg>
                 </div>
                 <div class="vehicle-type-btn" data-type="motorcycle" title="Motorcycle">
                     <svg viewBox="0 0 48 24" fill="currentColor" style="width: 28px; height: 28px; color: #333;">
                         <path fill-rule="evenodd" clip-rule="evenodd" d="M32.5 2H31.5V4H32.5C34.1568 4 35.5 5.34315 35.5 7H34.7082C33.5376 7 32.4115 7.29196 31.4166 7.82214L29.5352 5H26.3541C24.839 5 23.454 5.85601 22.7764 7.21115L22.4348 7.89443C22.096 8.572 21.4034 9 20.6459 9H18.8978C17.4655 7.71554 15.6054 7 13.6716 7H10.5V9H13.6716C15.0011 9 16.2838 9.45428 17.3122 10.2769L16.2294 12.9838C15.2206 11.7716 13.7004 11 12 11C8.96243 11 6.5 13.4624 6.5 16.5C6.5 19.5376 8.96243 22 12 22C14.7488 22 17.0266 19.9835 17.4349 17.3491L20.0857 20H23.0278C24.9217 20 26.653 18.93 27.5 17.2361L30.236 11.7639C30.4281 11.3798 30.6656 11.0278 30.9402 10.7131L32.1679 12.5547C31.1392 13.5541 30.5 14.9524 30.5 16.5C30.5 19.5376 32.9624 22 36 22C39.0376 22 41.5 19.5376 41.5 16.5C41.5 13.4624 39.0376 11 36 11C35.2299 11 34.4967 11.1583 33.8313 11.4441L32.5336 9.4976C33.1997 9.17577 33.9406 9 34.7082 9H37.5V7C37.5 4.23858 35.2614 2 32.5 2ZM29.8024 9.00639C29.2593 9.53975 28.7988 10.1662 28.4472 10.8695L25.7111 16.3416C25.2029 17.358 24.1641 18 23.0278 18H20.9142L18.4559 15.5418L22.7425 14.4701C23.2783 14.3362 23.6041 13.7933 23.4701 13.2575C23.3362 12.7217 22.7933 12.3959 22.2575 12.5299L18.1548 13.5555L19.177 11H20.6459C22.161 11 23.546 10.144 24.2236 8.78885L24.5652 8.10557C24.904 7.428 25.5966 7 26.3541 7H28.4648L29.8024 9.00639ZM36 13C35.6419 13 35.2963 13.0538 34.971 13.1537L36.8321 15.9453C37.1384 16.4048 37.0142 17.0257 36.5547 17.3321C36.0952 17.6384 35.4743 17.5142 35.1679 17.0547L33.3074 14.2638C32.8032 14.8703 32.5 15.6497 32.5 16.5C32.5 18.433 34.067 20 36 20C37.933 20 39.5 18.433 39.5 16.5C39.5 14.567 37.933 13 36 13ZM12 13C10.067 13 8.5 14.567 8.5 16.5C8.5 18.433 10.067 20 12 20C13.933 20 15.5 18.433 15.5 16.5C15.5 16.4269 15.4978 16.3544 15.4933 16.2824L12.7425 16.9701C12.2067 17.1041 11.6638 16.7783 11.5299 16.2425C11.3959 15.7067 11.7217 15.1638 12.2575 15.0299L14.7966 14.3951C14.1578 13.5478 13.1429 13 12 13Z"/>
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
                     Search <strong id="vehicleCount"></strong>
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
                    NEW VEHICLE<br>
                    FOUND
                </h1>
                <p class="promo-subtitle">Available now and ready to roll.</p>
            </div>
            <div class="promo-motorcycle"></div>
        </div>
    </div>
</div>

<script>

  // const carBtn = document.getElementById('car-button');
// const commercialBtn = document.getElementById('commercial-button');
// const truckBtn = document.getElementById('truck-button');

// const vehicleTypeInput = document.getElementById('vehicle_type');
// const categorySelect = document.getElementById('cat_id');

// const form = document.getElementById('car-form'); // 🟡 Reuse same form
// const sidebarIcons = document.querySelectorAll('.sidebar-icon');

// function updateForm(formId, vehicleTypeValue) {
//     console.log('Updating form to:', formId, 'with vehicle type:', vehicleTypeValue);
//     // Remove active class
//     sidebarIcons.forEach(icon => icon.classList.remove('active'));

//     // ✅ Show the form and update ID
//     form.style.display = 'block';
//     form.setAttribute('id', formId);

//     // ✅ Update hidden vehicle_type
//     const vehicleTypeInput = form.querySelector('#vehicle_type');
//     if (vehicleTypeInput) {
//         vehicleTypeInput.value = vehicleTypeValue;
//     }

//     // ✅ Call AJAX to get categories
//     fetchCategories(vehicleTypeValue)
// }

const carBtn = document.getElementById('car-button');
const commercialBtn = document.getElementById('commercial-button');
const truckBtn = document.getElementById('truck-button');

const vehicleTypeInput = document.getElementById('vehicle_type');
const categorySelect = document.getElementById('cat_id');

const form = document.getElementById('car-form'); // 🟡 Always keep same ID
const sidebarIcons = document.querySelectorAll('.sidebar-icon');

function updateForm(vehicleTypeValue) {
    console.log('Updating form with vehicle type:', vehicleTypeValue);

    // Remove active class from all sidebar buttons
    sidebarIcons.forEach(icon => icon.classList.remove('active'));

    // Show the form if it’s hidden
    if (form) {
        form.style.display = 'block';
    }

    // Update hidden vehicle_type value
    if (vehicleTypeInput) {
        vehicleTypeInput.value = vehicleTypeValue;
    }

    // ✅ Purani functionality ka AJAX call
    fetchCategories(vehicleTypeValue);
}

// ✅ Button click handlers — purane behaviour ke saath
carBtn?.addEventListener('click', () => {
    carBtn.classList.add('active');
    updateForm(2); // Car
});

truckBtn?.addEventListener('click', () => {
    truckBtn.classList.add('active');
    updateForm(1); // Truck
});

commercialBtn?.addEventListener('click', () => {
    commercialBtn.classList.add('active');
    updateForm(3); // Commercial
});


function fetchCategories(vehicleType) {
    fetch('<?= base_url(ADMIN_PATH . "/get-category-by-vehicle-type") ?>', {
        method: 'POST',
        headers: {
            'Content-Type': 'application/x-www-form-urlencoded'
        },
        body: 'vehicle_type_id=' + vehicleType
    })
    .then(response => response.json())
    .then(data => {
        // ✅ Clear existing options
        categorySelect.innerHTML = '<option>Any</option>';
        data.forEach(cat => {
            const option = document.createElement('option');
            option.value = cat.id;
            option.textContent = cat.name;
            categorySelect.appendChild(option);
        });
    })
    .catch(error => {
        console.error('Error fetching categories:', error);
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