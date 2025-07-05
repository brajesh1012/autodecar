<style>
/* Cleaned up and improved styles for better UI/UX */
.form-section {
    border-radius: 16px;
    background: white;
    padding: 24px;
    display: flex;
    flex-wrap: wrap;
    gap: 24px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.08);
    align-items: flex-start;
}
#truck-form{
  display: none;
}

@media (max-width: 900px) {
    .form-section {
        flex-direction: column;
        gap: 16px;
        padding: 12px;
    }
    .action-buttons {
        flex-direction: row;
        justify-content: flex-start;
        align-items: center;
        gap: 8px;
    }
}

.sidebar {
    display: flex;
    flex-direction: column;
    align-items: center;
    gap: 20px;
    border-right: 1px solid #e0e0e0;
    padding-right: 16px;
}

.sidebar-icon {
    padding: 20px 8px 8px 20px;
    text-align: center;
    cursor: pointer;
    color: #999;
    transition: color 0.3s, background 0.3s;
    border-radius: 8px;
}
.sidebar-icon.active, .sidebar-icon:hover {
    color: #e63900;
    background: #f9f2f2;
}

.form-body {
    flex: 1;
    min-width: 250px;
}

.form-label {
    font-weight: 600;
}

.form-control, .form-select {
    height: 42px;
    padding: 6px 12px;
    border-radius: 8px;
    font-size: 15px;
}

.btn-toggle-group input[type="radio"] {
    display: none;
}

.btn-toggle-group label {
    padding: 10px 24px;
    border: 1px solid #ccc;
    cursor: pointer;
    border-radius: 12px;
    margin-right: 8px;
    font-weight: 500;
    transition: all 0.2s;
    display: inline-block;
    background: #f8f8f8;
}

.btn-toggle-group input[type="radio"]:checked+label {
    border: 2px solid #e63900;
    background-color: #fff0ea;
    color: #e63900;
}

.search-btn {
    background-color: #e63900;
    color: white;
    font-weight: bold;
    border-radius: 10px;
    padding: 12px 24px;
    border: none;
    transition: background 0.2s;
}
.search-btn:hover {
    background: #bb2a1f;
}

.additional-options {
    font-weight: 500;
    font-size: 14px;
    cursor: pointer;
    text-align: right;
    background: none;
    border: none;
    color: #e63900;
    padding: 10px;
}
.additional-options i {
    margin-right: 6px;
}

.action-buttons {
    display: flex;
    flex-direction: column;
    align-items: flex-end;
    justify-content: space-between;
    gap: 16px;
    min-width: 200px;
}

@media (max-width: 600px) {
    .form-section {
        flex-direction: column;
        padding: 8px;
    }
    .form-body {
        min-width: 100px;
    }
}

.adv-filters {
    display: none;
    margin-top: 16px;
    background: #f8f8f8;
    border-radius: 12px;
    padding: 16px;
    box-shadow: 0 2px 8px rgba(0,0,0,0.04);
}
.adv-filters.active {
    display: block;
}
.box{
  width: 90%;
    z-index: 9;
    position: relative;
}

.form-section {
    flex-direction: row;
    align-items: flex-end;
    flex-wrap: wrap;
    gap: 16px;
}

.sidebar {
    flex-direction: row;
    border-right: none;
    border-bottom: 1px solid #e0e0e0;
    padding-right: 0;
    padding-bottom: 12px;
    margin-bottom: 12px;
    width: 100%;
    justify-content: flex-start;
    gap: 16px;
}

@media (max-width: 900px) {
    .form-section {
        flex-direction: column;
        align-items: stretch;
    }
    .sidebar {
        flex-direction: row;
        border-bottom: 1px solid #e0e0e0;
        border-right: none;
        width: 100%;
        justify-content: flex-start;
        gap: 12px;
        margin-bottom: 8px;
        padding-bottom: 8px;
    }
    .action-buttons {
        flex-direction: column;
        align-items: stretch;
        gap: 8px;
        width: 100%;
    }
}

.form-body .row.g-3 {
    flex-wrap: wrap;
    gap: 8px 16px;
}

.form-body .col-md-3, .form-body .col-md-2, .form-body .col-md-4 {
    flex: 0 1 180px;
    min-width: 150px;
    margin-bottom: 0;
}
.action-buttons {
    flex-direction: row;
    align-items: flex-end;
    gap: 12px;
   
}
.adv-filters {
    margin-top: 8px;
    width: 100%;
}
@media (max-width: 600px) {
    .form-section {
        flex-direction: column;
        align-items: stretch;
    }
    .sidebar {
        flex-direction: row;
        width: 100%;
        justify-content: flex-start;
        gap: 8px;
        margin-bottom: 6px;
        padding-bottom: 6px;
    }
    .action-buttons {
        flex-direction: column;
        align-items: stretch;
        gap: 8px;
        width: 100%;
        margin-left: 0;
    }
    .form-body .row.g-3 {
        flex-direction: column;
        gap: 8px 0;
    }
}

/* Custom styles for Reset and Additional Filters buttons */
#resetBtn {
    background: #f5f5f5;
    color: #444;
    border: 1.5px solid #ccc;
    border-radius: 8px;
    font-weight: 500;
    transition: background 0.2s, color 0.2s, border 0.2s;
    box-shadow: none;
    text-align: center;
}
#resetBtn:hover, #resetBtn:focus {
    background: #e0e0e0;
    color: #222;
    border-color: #bdbdbd;
}
#toggleAdvFilters {
    background: #e3f0fa;
    color: #1976d2;
    border: 1.5px solid #90caf9;
    border-radius: 8px;
    font-weight: 500;
    transition: background 0.2s, color 0.2s, border 0.2s;
    box-shadow: none;
    text-align: center;
}
#toggleAdvFilters:hover, #toggleAdvFilters:focus {
    background: #bbdefb;
    color: #0d47a1;
    border-color: #64b5f6;
}

.full-width-btn {
    width: 100%;
    display: block;
}
.half-btn-row {
    display: flex;
    gap: 12px;
    width: 100%;
}
.half-btn-row > button {
    flex: 1 1 0;
    width: 50%;
    min-width: 0;
}
#commercial-form {
    display: none;
}
label::before, label::after {
  content: none !important;
}

@media (max-width: 600px) {
    .half-btn-row {
        flex-direction: column;
        gap: 8px;
    }
    .half-btn-row > button {
        width: 100%;
    }
}
</style>

<div class="box">
    <div class="form-section d-flex">
        <!-- Sidebar Icons (now horizontal, with tooltips) -->
        <div class="d-flex side align-items-center justify-content-center sidebar">
            <div id="car-button" class="sidebar-icon active" tabindex="0" aria-label="Car">
                <!-- Car SVG -->
                <svg width="40" height="20" viewBox="0 0 48 24" aria-hidden="true"><path fill-rule="evenodd" clip-rule="evenodd" d="M13.1213 3.46447C14.059 2.52678 15.3308 2 16.6569 2H25.5203C26.7139 2 27.868 2.42696 28.7743 3.20372L34.4716 8.08711L39.9701 9.46176C41.7508 9.90693 43 11.5069 43 13.3423V19H38.7439C38.1262 20.7478 36.4593 22 34.5 22C32.5407 22 30.8738 20.7478 30.2561 19H18.7439C18.1262 20.7478 16.4593 22 14.5 22C12.5407 22 10.8738 20.7478 10.2561 19H10C7.23858 19 5 16.7614 5 14V9.38197L9.40764 7.17815L13.1213 3.46447ZM41 17H38.9725C38.7238 14.75 36.8163 13 34.5 13C32.1837 13 30.2762 14.75 30.0275 17H18.9725C18.7238 14.75 16.8163 13 14.5 13C12.1837 13 10.2762 14.75 10.0275 17H10C8.34315 17 7 15.6569 7 14V10.618L9.92816 9.15395L11.6895 10.3282C12.3466 10.7663 13.1186 11 13.9083 11H30.1886C30.8335 11 31.4742 10.896 32.086 10.6921L34.04 10.0408L39.4851 11.402C40.3754 11.6246 41 12.4246 41 13.3423V17ZM32.0082 8.60984L27.4727 4.72223C26.9289 4.25618 26.2364 4 25.5203 4H19.7208L21.3874 9H30.1886C30.6186 9 31.0457 8.93069 31.4535 8.79474L32.0082 8.60984ZM17.6126 4H16.6569C15.8612 4 15.0981 4.31607 14.5355 4.87868L11.5696 7.84457L12.7989 8.66411C13.1275 8.88313 13.5135 9 13.9083 9H19.2793L17.6126 4ZM12 17.5C12 16.1193 13.1193 15 14.5 15C15.8807 15 17 16.1193 17 17.5C17 18.8807 15.8807 20 14.5 20C13.1193 20 12 18.8807 12 17.5ZM32 17.5C32 16.1193 33.1193 15 34.5 15C35.8807 15 37 16.1193 37 17.5C37 18.8807 35.8807 20 34.5 20C33.1193 20 32 18.8807 32 17.5Z" fill="currentColor"></path></svg>
                <div class="sidebar-label">Car</div>
            </div>
            <div id="commercial-button" class="sidebar-icon" tabindex="0" aria-label="Motorhome" title="Motorhome">
                <!-- Motorhome SVG -->
                <svg width="40" height="20" viewBox="0 0 48 24" aria-hidden="true"><path d="M41 15.07C41 14.07 40.5 13.13 39.66 12.57L37.81 11.34L36.47 8H37.99V6C37.99 3.79 36.2 2 33.99 2H9C7.9 2 7 2.9 7 4V20H10.35C10.91 21.18 12.11 22 13.5 22C14.89 22 16.08 21.18 16.65 20H29.35C29.91 21.18 31.11 22 32.5 22C33.89 22 35.08 21.18 35.65 20H41V15.07ZM35.52 11H31V8H34.32L35.52 11ZM9 4H34C35.1 4 36 4.9 36 6H29V18H27V6H20V18H16.95C16.7 16.31 15.26 15 13.5 15C11.74 15 10.3 16.31 10.05 18H9V4ZM25 18H22V8H25V18ZM13.5 20C12.67 20 12 19.33 12 18.5C12 17.67 12.67 17 13.5 17C14.33 17 15 17.67 15 18.5C15 19.33 14.33 20 13.5 20ZM32.5 20C31.67 20 31 19.33 31 18.5C31 17.67 31.67 17 32.5 17C33.33 17 34 17.67 34 18.5C34 19.33 33.33 20 32.5 20ZM39 18H35.95C35.7 16.31 34.26 15 32.5 15C31.96 15 31.46 15.13 31 15.35V13H36.7L38.56 14.24C38.84 14.43 39.01 14.74 39.01 15.07V18H39ZM18 6H11V13H18V6ZM16 11H13V8H16V11Z" fill="currentColor"></path></svg>
                <div class="sidebar-label">Commercial </div>
            </div>
            <div id="truck-button"  class="sidebar-icon" tabindex="0" aria-label="Truck" title="Truck">
                <!-- Truck SVG -->
                <svg width="40" height="20" viewBox="0 0 48 24" aria-hidden="true"><path d="M42.79 12.34L40.45 7.65997C39.94 6.63997 38.9 5.99997 37.77 5.99997H33.01V3.99997C33.01 2.89997 32.11 1.99997 31.01 1.99997H7C5.9 1.99997 5 2.89997 5 3.99997V19H9.05C9.3 20.69 10.74 22 12.5 22C14.26 22 15.7 20.69 15.95 19H31.05C31.3 20.69 32.74 22 34.5 22C36.26 22 37.7 20.69 37.95 19H43V13.24C43 12.93 42.93 12.62 42.79 12.35V12.34ZM38.66 8.54997L40.38 12H37V7.99997H37.76C38.14 7.99997 38.48 8.20997 38.65 8.54997H38.66ZM31 3.99997V12H7V3.99997H31ZM7 14H31V17H15.65C15.09 15.82 13.89 15 12.5 15C11.11 15 9.92 15.82 9.35 17H7V14ZM12.5 20C11.67 20 11 19.33 11 18.5C11 17.67 11.67 17 12.5 17C13.33 17 14 17.67 14 18.5C14 19.33 13.33 20 12.5 20ZM34.5 20C33.67 20 33 19.33 33 18.5C33 17.67 33.67 17 34.5 17C35.33 17 36 17.67 36 18.5C36 19.33 35.33 20 34.5 20ZM37.65 17C37.09 15.82 35.89 15 34.5 15C33.96 15 33.46 15.13 33 15.35V7.99997H35V12C35 13.1 35.9 14 37 14H41V17H37.65Z" fill="currentColor"></path></svg>
                <div class="sidebar-label">Truck</div>
            </div>
        </div>
        <!-- Main Car Filter Row -->
        <form id="car-form" action="<?= site_url('search') ?>" method="get" autocomplete="off">
        <div class="row g-3">
  <div class="col-md-6 col-12">
    <label class="form-label" for="brand">Brand</label>
    <select class="form-select" name="brand" id="brand">
      <option>Any</option>
      <option>Audi</option>
      <option>BMW</option>
    </select>
  </div>

  <div class="col-md-6 col-12">
    <label class="form-label" for="model">Model</label>
    <select class="form-select" name="model" id="model">
      <option>Any</option>
    </select>
  </div>

  <div class="col-md-6 col-12">
    <label class="form-label" for="reg_date">Reg. From</label>
    <select class="form-select" name="reg_date" id="reg_date">
      <option>Any</option>
      <option>2024</option>
      <option>2023</option>
    </select>
  </div>

  <div class="col-md-6 col-12">
    <label class="form-label" for="location">City / PIN</label>
    <input type="text" class="form-control" name="location" id="location" placeholder="Any">
  </div>

  <div class="col-md-6 col-12">
    <label class="form-label" for="km">KM To</label>
    <select class="form-select" name="km" id="km">
      <option>Any</option>
      <option>50,000</option>
      <option>100,000</option>
    </select>
  </div>

  <div class="col-md-6 col-12">
    <label class="form-label" for="price">Price To</label>
    <select class="form-select" name="price" id="price">
      <option>Any</option>
      <option>10,000</option>
      <option>20,000</option>
    </select>
  </div>

  <div class="col-md-12 col-12">
    <label class="form-label">Payment</label>
    <div class="btn-toggle-group d-flex gap-2">
      <div>
        <input type="radio" name="payment" id="buy" value="buy" checked>
        <label for="buy">Buy</label>
      </div>
      <div>
        <input type="radio" name="payment" id="lease" value="lease">
        <label for="lease">Lease</label>
      </div>
    </div>
  </div>

  <div class="col-md-6 col-12">
    <div class="form-check mt-4">
      <input class="form-check-input" type="checkbox" id="online" name="online">
      <label class="form-check-label" for="online">Online Purchase</label>
    </div>
  </div>

  <div class="col-md-6 col-12">
    <div class="form-check mt-4">
      <input class="form-check-input" type="checkbox" id="electric" name="electric">
      <label class="form-check-label" for="electric">Only electric cars ⚡</label>
    </div>
  </div>

  <div class="col-12 d-flex flex-wrap align-items-end gap-3 action-buttons">
    <button type="submit" class="btn search-btn full-width-btn">
      <i class="bi bi-search me-2"></i> Search
    </button>
</div>
<div class="col-12 half-btn-row">
<button type="reset" class="btn additional-options text-secondary" id="resetBtn">
      <i class="bi bi-arrow-counterclockwise"></i> Reset
    </button>
    <button type="button" class="btn text-primary additional-options" id="toggleAdvFilters">
      <i class="bi bi-sliders"></i> Additional Filters
    </button>
</div>
</form>


</div>
<!-- box end -->

<!-- commercial form -->

<form id="commercial-form" action="<?= site_url('search') ?>" method="get" autocomplete="off">
        <div class="row g-3">
  <div class="col-md-6 col-12">
    <label class="form-label" for="brand">Brand</label>
    <select class="form-select" name="brand" id="brand">
      <option>Any</option>
      <option>Audi</option>
      <option>BMW</option>
    </select>
  </div>

  <div class="col-md-6 col-12">
    <label class="form-label" for="model">Model</label>
    <select class="form-select" name="model" id="model">
      <option>Any</option>
    </select>
  </div>

  <div class="col-md-6 col-12">
    <label class="form-label" for="reg_date">Reg. From</label>
    <select class="form-select" name="reg_date" id="reg_date">
      <option>Any</option>
      <option>2024</option>
      <option>2023</option>
    </select>
  </div>

  <div class="col-md-6 col-12">
    <label class="form-label" for="location">City / PIN</label>
    <input type="text" class="form-control" name="location" id="location" placeholder="Any">
  </div>

  <div class="col-md-6 col-12">
    <label class="form-label" for="km">KM To</label>
    <select class="form-select" name="km" id="km">
      <option>Any</option>
      <option>50,000</option>
      <option>100,000</option>
    </select>
  </div>

  <div class="col-md-6 col-12">
    <label class="form-label" for="price">Price To</label>
    <select class="form-select" name="price" id="price">
      <option>Any</option>
      <option>10,000</option>
      <option>20,000</option>
    </select>
  </div>

  <div class="col-md-12 col-12">
    <label class="form-label">Payment</label>
    <div class="btn-toggle-group d-flex gap-2">
      <div>
        <input type="radio" name="payment" id="buy" value="buy" checked>
        <label for="buy">Buy</label>
      </div>
      <div>
        <input type="radio" name="payment" id="lease" value="lease">
        <label for="lease">Lease</label>
      </div>
    </div>
  </div>

  <div class="col-md-6 col-12">
    <div class="form-check mt-4">
      <input class="form-check-input" type="checkbox" id="online" name="online">
      <label class="form-check-label" for="online">Online Purchase</label>
    </div>
  </div>

  <div class="col-md-6 col-12">
    <div class="form-check mt-4">
      <input class="form-check-input" type="checkbox" id="electric" name="electric">
      <label class="form-check-label" for="electric">Only electric cars ⚡</label>
    </div>
  </div>

  <div class="col-12 d-flex flex-wrap align-items-end gap-3 action-buttons">
    <button type="submit" class="btn search-btn full-width-btn">
      <i class="bi bi-search me-2"></i> Search
    </button>
</div>
<div class="col-12 half-btn-row">
<button type="reset" class="btn additional-options text-secondary" id="resetBtn">
      <i class="bi bi-arrow-counterclockwise"></i> Reset
    </button>
    <button type="button" class="btn p-2 text-primary additional-options" id="toggleAdvFilters">
      <i class="bi bi-sliders"></i> Additional Filters
    </button>

    
  </div>

  
</div>

<!-- Advanced Filters Section (collapsible) -->

 
</form>
<form id="truck-form" action="<?= site_url('search') ?>" method="get" autocomplete="off">
        <div class="row g-3">
  <div class="col-md-6 col-12">
    <label class="form-label" for="brand">Brand</label>
    <select class="form-select" name="brand" id="brand">
      <option>Any</option>
      <option>Audi</option>
      <option>BMW</option>
    </select>
  </div>

  <div class="col-md-6 col-12">
    <label class="form-label" for="model">Model</label>
    <select class="form-select" name="model" id="model">
      <option>Any</option>
    </select>
  </div>

  <div class="col-md-6 col-12">
    <label class="form-label" for="reg_date">Reg. From</label>
    <select class="form-select" name="reg_date" id="reg_date">
      <option>Any</option>
      <option>2024</option>
      <option>2023</option>
    </select>
  </div>

  <div class="col-md-6 col-12">
    <label class="form-label" for="location">City / PIN</label>
    <input type="text" class="form-control" name="location" id="location" placeholder="Any">
  </div>

  <div class="col-md-6 col-12">
    <label class="form-label" for="km">KM To</label>
    <select class="form-select" name="km" id="km">
      <option>Any</option>
      <option>50,000</option>
      <option>100,000</option>
    </select>
  </div>

  <div class="col-md-6 col-12">
    <label class="form-label" for="price">Price To</label>
    <select class="form-select" name="price" id="price">
      <option>Any</option>
      <option>10,000</option>
      <option>20,000</option>
    </select>
  </div>

  <div class="col-md-12 col-12">
    <label class="form-label">Payment</label>
    <div class="btn-toggle-group d-flex gap-2">
      <div>
        <input type="radio" name="payment" id="buy" value="buy" checked>
        <label for="buy">Buy</label>
      </div>
      <div>
        <input type="radio" name="payment" id="lease" value="lease">
        <label for="lease">Lease</label>
      </div>
    </div>
  </div>

  <div class="col-md-6 col-12">
    <div class="form-check mt-4">
      <input class="form-check-input" type="checkbox" id="online" name="online">
      <label class="form-check-label" for="online">Online Purchase</label>
    </div>
  </div>

  <div class="col-md-6 col-12">
    <div class="form-check mt-4">
      <input class="form-check-input" type="checkbox" id="electric" name="electric">
      <label class="form-check-label" for="electric">Only electric cars ⚡</label>
    </div>
  </div>

  <div class="col-12 d-flex flex-wrap align-items-end gap-3 action-buttons">
    <button type="submit" class="btn search-btn full-width-btn">
      <i class="bi bi-search me-2"></i> Search
    </button>
</div>
<div class="col-12 half-btn-row">
<button type="reset" class="btn additional-options text-secondary" id="resetBtn">
      <i class="bi bi-arrow-counterclockwise"></i> Reset
    </button>
    <button type="button" class="btn text-primary additional-options" id="toggleAdvFilters">
      <i class="bi bi-sliders"></i> Additional Filters
    </button>
</div>
    
  </div>
</div>

<!-- Advanced Filters Section (collapsible) -->

 
</form>

    </div>
    
</div>
<script>
// Toggle advanced filters with animation
const carBtn = document.getElementById('car-button');
const commercialBtn = document.getElementById('commercial-button');
const truckBtn = document.getElementById('truck-button');

const carForm = document.getElementById('car-form');
const commercialForm = document.getElementById('commercial-form');
const truckForm = document.getElementById('truck-form');

const sidebarIcons = document.querySelectorAll('.sidebar-icon');

function showForm(formToShow) {
  // Hide all forms
  carForm.style.display = 'none';
  commercialForm.style.display = 'none';
  if (truckForm) truckForm.style.display = 'none';

  // Remove active class from all icons
  sidebarIcons.forEach(icon => icon.classList.remove('active'));

  // Show selected form
  formToShow.style.display = 'block';
}

// Event listeners for each tab
carBtn.addEventListener('click', () => {
  showForm(carForm);
  carBtn.classList.add('active');
});

commercialBtn.addEventListener('click', () => {
  showForm(commercialForm);
  commercialBtn.classList.add('active');
});

truckBtn.addEventListener('click', () => {
  if (truckForm) {
    showForm(truckForm);
    truckBtn.classList.add('active');
  }
});

</script>