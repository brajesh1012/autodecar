<?php include('head.php'); ?>
<section class="flat-title ">
    <div class="container2">
        <div class="row">
            <div class="col-lg-12">
                <div class="title-inner style">
                    <div class="title-group fs-12"><a class="home fw-6 text-color-3"
                            href="<?= base_url(); ?>">Home</a><span>Used cars for sale</span></div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="listing-grid tf-section3">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="heading-section">
                    <h2>10,000+ Get The Best Deals On Used Vehicles</h2>
                    <p class="mt-20">Explore our selection of high-quality, pre-owned vehicles. Our
                        inventory includes top brands like Toyota, Mercedes, Honda, and more. Find the
                        perfect used car for your needs.</p>
                </div>
            </div>
            <div class="col-lg-12 flex gap-30 text-start">
                <div class="sidebar-right-listing style-2  d-none">
                    <div class="sidebar-title flex-two flex-wrap">
                        <h4>Filters and Sort</h4>
                        <a href="javascript:void(0);" id="clear-filters" class="fw-5 font claer text-color-2"><i
                                class="icon-autodeal-plus"></i>Clear</a>
                    </div>
                    <div class="form-filter-siderbar">

                        <div class="wd-find-select">
                            <form id="filterForm">
                                <div class="form-group">

                                    <label for="make-select">Make</label>
                                    <select name="make" id="make" class="form-control">
                                        <option value="">All Makes</option>
                                        <?php foreach($makes as $make): ?>
                                        <option value="<?= $make->name; ?>"><?= $make->name; ?></option>
                                        <?php endforeach; ?>
                                    </select>
                                    <!-- <div class="group-select">
                                                    <div class="nice-select" id="make-select" tabindex="0">
                                                        <span class="current">Make</span>
                                                        <ul class="list">
                                                            <li data-value class="option selected">Make
                                                            </li>
                                                            <?php foreach($makes as $make){ ?>
                                                            <li data-value="<?= $make->name; ?>" class="option"><?= $make->name; ?></li>
                                                            <?php } ?>
                                                        </ul>
                                                    </div>
                                                </div> -->
                                </div>
                                <div class="form-group">

                                    <label for="Models-select">Models</label>
                                    <select name="model" id="model" class="form-control">
                                        <option value="">All Models</option>
                                        <?php foreach($models as $model): ?>
                                        <option value="<?= $model->name; ?>"><?= $model->name; ?></option>
                                        <?php endforeach; ?>
                                    </select>
                                    <!-- <div class="group-select">
                                        <div class="nice-select" id="model" tabindex="0">
                                            <span class="current">Models</span>
                                            <ul class="list">
                                                <li data-value class="option selected">
                                                    Models</li>
                                                <?php foreach($models as $model){ ?>
                                                <li data-value="<?= $model->name; ?>" class="option">
                                                    <?= $model->name; ?>
                                                </li>
                                                <?php } ?>
                                            </ul>
                                        </div>
                                    </div> -->
                                </div>
                                <!-- <div class="form-group">
                                                <div class="group-select">
                                                    <div class="nice-select" tabindex="0">
                                                        <span class="current">Body</span>
                                                        <ul class="list">
                                                            <li data-value class="option selected">Body</li>
                                                            <li data-value="body-1" class="option">Body
                                                            </li>
                                                            <li data-value="body-2" class="option">Body
                                                            </li>
                                                            <li data-value="body-3" class="option">Body
                                                            </li>
                                                            <li data-value="body-4" class="option">Body
                                                            </li>
                                                            <li data-value="body-5" class="option">Body
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div> -->

                                <div class="form-group wg-box3">
                                    <div class="widget widget-price ">
                                        <div class="caption flex-two">
                                            <div>
                                                <span class="fw-6">Price: </span>
                                                <span id="slider-range-value01"></span>
                                                <span id="slider-range-value02"></span>
                                            </div>
                                        </div>
                                        <div id="slider-range2"></div>
                                        <div class="slider-labels">
                                            <div>
                                                <input type="hidden" name="min-price" value="">
                                                <input type="hidden" name="max-price" value="">
                                            </div>
                                        </div>
                                    </div><!-- /.widget_price -->
                                </div>

                                <div class="form-group ">

                                    <label for="nice-select">Fuel types</label>
                                    <select name="fuel_type" id="fuel_type" class="form-control">
                                        <option value="">All Fuel types</option>
                                        <?php foreach($fuel_types as $fuel_type): ?>
                                        <option value="<?= $fuel_type->name; ?>"><?= $fuel_type->name; ?></option>
                                        <?php endforeach; ?>
                                    </select>

                                    <!-- <div class="group-select">
                                        <div class="nice-select" tabindex="0">
                                            <span class="current">Fuel type</span>
                                            <ul class="list">
                                                <li data-value class="option selected">Fuel type</li>
                                                <?php foreach($fuel_types as $fuel_type){ ?>
                                                <li data-value="<?= $fuel_type->name; ?>" class="option">
                                                    <?= $fuel_type->name; ?>
                                                </li>
                                                <?php } ?>
                                            </ul>
                                        </div>
                                    </div> -->
                                </div>
                                <div class="form-group ">

                                    <label for="transmission-select">Transmissions</label>
                                    <select name="transmission" id="transmission" class="form-control">
                                        <option value="">All Transmissions </option>
                                        <?php foreach($transmissions as $transmission): ?>
                                        <option value="<?= $transmission->name; ?>"><?= $transmission->name; ?></option>
                                        <?php endforeach; ?>
                                    </select>


                                    <!-- <div class="group-select">
                                        <div class="nice-select" tabindex="0">
                                            <span class="current">Transmission</span>
                                            <ul class="list">
                                                <li data-value class="option selected">Transmission</li>
                                                <?php foreach($transmissions as $transmission){ ?>
                                                <li data-value="<?= $transmission->name; ?>" class="option">
                                                    <?= $transmission->name; ?>
                                                </li>
                                                <?php } ?>
                                            </ul>
                                        </div>
                                    </div> -->
                                </div>

                                <!-- <div class="form-group ">
                                                <div class="group-select">
                                                    <div class="nice-select" tabindex="0">
                                                        <span class="current">Driver type</span>
                                                        <ul class="list">
                                                            <li data-value class="option selected">Driver type</li>
                                                            <li data-value="1" class="option">Driver type
                                                            </li>
                                                            <li data-value="2" class="option">Driver type
                                                            </li>
                                                            <li data-value="3" class="option">Driver type
                                                            </li>
                                                            <li data-value="4" class="option">Driver type
                                                            </li>
                                                            <li data-value="5" class="option">Driver type
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group ">
                                                <div class="group-select">
                                                    <div class="nice-select" tabindex="0">
                                                        <span class="current">Door</span>
                                                        <ul class="list">
                                                            <li data-value class="option selected">Door</li>
                                                            <li data-value="door-1" class="option">Door
                                                            </li>
                                                            <li data-value="door-2" class="option">Door
                                                            </li>
                                                            <li data-value="door-3" class="option">Door
                                                            </li>
                                                            <li data-value="door-4" class="option">Door
                                                            </li>
                                                            <li data-value="door-5" class="option">Door
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group ">
                                                <div class="group-select">
                                                    <div class="nice-select" tabindex="0">
                                                        <span class="current">Cylinder</span>
                                                        <ul class="list">
                                                            <li data-value class="option selected">Cylinder</li>
                                                            <li data-value="cylinder-1" class="option">Cylinder
                                                            </li>
                                                            <li data-value="cylinder-2" class="option">Cylinder
                                                            </li>
                                                            <li data-value="cylinder-3" class="option">Cylinder
                                                            </li>
                                                            <li data-value="cylinder-4" class="option">Cylinder
                                                            </li>
                                                            <li data-value="cylinder-5" class="option">Cylinder
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group ">
                                                <div class="group-select">
                                                    <div class="nice-select" tabindex="0">
                                                        <span class="current">Color</span>
                                                        <ul class="list">
                                                            <li data-value class="option selected">Color</li>
                                                            <li data-value="color-1" class="option">Color
                                                            </li>
                                                            <li data-value="color-2" class="option">Color
                                                            </li>
                                                            <li data-value="color-3" class="option">Color
                                                            </li>
                                                            <li data-value="color-4" class="option">Color
                                                            </li>
                                                            <li data-value="color-5" class="option">Color
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div> -->

                                <div class="form-group wg-box3">
                                    <div class="widget widget-price ">
                                        <div class="caption flex-two">
                                            <div>
                                                <span class="fw-6">Year: </span>
                                                <span id="slider-range-value03"></span>
                                                <span id="slider-range-value04"></span>
                                            </div>
                                        </div>
                                        <div id="slider-range3"></div>
                                        <div class="slider-labels">
                                            <div>
                                                <input type="hidden" name="min-value3" value="">
                                                <input type="hidden" name="max-value3" value="">
                                            </div>
                                        </div>
                                    </div><!-- /.widget_price -->
                                </div>

                                <div class="form-group wg-box3">
                                    <div class="widget widget-price ">
                                        <div class="caption flex-two">
                                            <div>
                                                <span id="slider-range-value1"></span>
                                                <span id="slider-range-value2"></span>
                                            </div>
                                        </div>
                                        <div id="slider-range"></div>
                                        <div class=" slider-labels">
                                            <div>
                                                <input type="hidden" name="min-value" value="">
                                                <input type="hidden" name="max-value" value="">
                                            </div>
                                        </div>
                                    </div><!-- /.widget_price -->
                                </div>

                            </form>

                            <script>
                            var minYear = <?= $year_range['min']; ?>;
                            var maxYear = <?= $year_range['max']; ?>;
                            </script>

                              <script>
                            // var minkm = <?= $km_range['min']; ?>;
                            // var maxkm = <?= $km_range['max']; ?>;
                            </script>

                              <script>
                            // var minPrice = <?= $price_range['min']; ?>;
                            // var maxPrice = <?= $price_range['max']; ?>;
                            </script>
                            <!-- <div class="form-group">
                                                <div class="tf-amenities bg-white">
                                                    <label class="flex-three">
                                                        <input name="newsletter" type="checkbox" />
                                                        <span class="btn-checkbox"></span>
                                                        <span class="font-2">Featured</span>
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="features-wrap">
                                                <h4>Featured</h4>
                                                <div class="form-group">
                                                    <div class="tf-amenities bg-white">
                                                        <label class="flex-three">
                                                            <input name="newsletter" type="checkbox" />
                                                            <span class="btn-checkbox"></span>
                                                            <span class="text-color-2 font-2">A/C: Front</span>
                                                        </label>
                                                        <label class="flex-three">
                                                            <input name="newsletter" type="checkbox" />
                                                            <span class="btn-checkbox"></span>
                                                            <span class="text-color-2 font-2">Backup
                                                                Camera</span>
                                                        </label>
                                                        <label class="flex-three">
                                                            <input name="newsletter" type="checkbox" />
                                                            <span class="btn-checkbox"></span>
                                                            <span class="text-color-2 font-2">Cruise
                                                                Control</span>
                                                        </label>
                                                        <label class="flex-three">
                                                            <input name="newsletter" type="checkbox" />
                                                            <span class="btn-checkbox"></span>
                                                            <span class="text-color-2 font-2">Navigation</span>
                                                        </label>
                                                        <label class="flex-three">
                                                            <input name="newsletter" type="checkbox" />
                                                            <span class="btn-checkbox"></span>
                                                            <span class="text-color-2 font-2">Power
                                                                Locks</span>
                                                        </label>
                                                        <label class="flex-three">

                                                            <input name="newsletter" type="checkbox" />
                                                            <span class="btn-checkbox"></span>
                                                            <span class="text-color-2 font-2">Audio system</span>
                                                        </label>
                                                        <label class="flex-three">
                                                            <input name="newsletter" type="checkbox" />
                                                            <span class="btn-checkbox"></span>
                                                            <span class="text-color-2 font-2">Touchscreen display</span>
                                                        </label>
                                                        <label class="flex-three">
                                                            <input name="newsletter" type="checkbox" />
                                                            <span class="btn-checkbox"></span>
                                                            <span class="text-color-2 font-2">GPS navigation</span>
                                                        </label>
                                                        <label class="flex-three">
                                                            <input name="newsletter" type="checkbox" />
                                                            <span class="btn-checkbox"></span>
                                                            <span class="text-color-2 font-2">Phone connectivity</span>
                                                        </label>
                                                        <label class="flex-three">
                                                            <input name="newsletter" type="checkbox" />
                                                            <span class="btn-checkbox"></span>
                                                            <span class="text-color-2 font-2">In-car Wi-Fi</span>
                                                        </label>
                                                        <label class="flex-three">
                                                            <input name="newsletter" type="checkbox" />
                                                            <span class="btn-checkbox"></span>
                                                            <span class="text-color-2 font-2">Chrome-plated grill</span>
                                                        </label>
                                                        <label class="flex-three">
                                                            <input name="newsletter" type="checkbox" />
                                                            <span class="btn-checkbox"></span>
                                                            <span class="text-color-2 font-2">Smart headlight
                                                                cluster</span>
                                                        </label>
                                                        <label class="flex-three">
                                                            <input name="newsletter" type="checkbox" />
                                                            <span class="btn-checkbox"></span>
                                                            <span class="text-color-2 font-2">Premium wheels</span>
                                                        </label>
                                                        <label class="flex-three">
                                                            <input name="newsletter" type="checkbox" />
                                                            <span class="btn-checkbox"></span>
                                                            <span class="text-color-2 font-2">Body character
                                                                lines</span>
                                                        </label>
                                                        <label class="flex-three">
                                                            <input name="newsletter" type="checkbox" />
                                                            <span class="btn-checkbox"></span>
                                                            <span class="text-color-2 font-2">High-quality paint</span>
                                                        </label>
                                                    </div>
                                                </div>
                                            </div> -->

                        </div>

                    </div>

                </div>
                <div class="sidebar-left-listing">
                    <div class="row">
                        <div class="col-lg-12 listing-list-car-wrap">
                            <div class="category-filter flex justify-space align-center mb-30 flex-wrap gap-8">
                                <div class="box-1 flex align-center flex-wrap gap-8">
                                    <p class="">Showing 1–16 of 20 results</p>
                                      <div>
                                        <a href="<?= base_url('listing-list'); ?>"><button class="btn btn-warning me-2">Clear All</button></a>
                                        <a href="<?= base_url('advance-filter') . '?' . $_SERVER['QUERY_STRING'] ?>" class="btn btn-secondary">
                                            Back to Filter
                                        </a>
                                        
                                    </div>
                                    <div class="filter-mobie">
                                        <a data-bs-toggle="offcanvas" data-bs-target="#offcanvasRight"
                                            aria-controls="offcanvasRight" class="filter">Filter<i
                                                class="icon-autodeal-filter"></i></a>
                                    </div>
                                </div>
                                <div class="box-2 flex flex-wrap gap-8">
                                    <a href="#" class="btn-view grid ">
                                        <svg width="25" height="25" viewBox="0 0 25 25" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M5.04883 6.40508C5.04883 5.6222 5.67272 5 6.41981 5C7.16686 5 7.7908 5.62221 7.7908 6.40508C7.7908 7.18801 7.16722 7.8101 6.41981 7.8101C5.67241 7.8101 5.04883 7.18801 5.04883 6.40508Z"
                                                stroke="CurrentColor"></path>
                                            <path
                                                d="M11.1045 6.40508C11.1045 5.62221 11.7284 5 12.4755 5C13.2229 5 13.8466 5.6222 13.8466 6.40508C13.8466 7.18789 13.2227 7.8101 12.4755 7.8101C11.7284 7.8101 11.1045 7.18794 11.1045 6.40508Z"
                                                stroke="CurrentColor"></path>
                                            <path
                                                d="M19.9998 6.40514C19.9998 7.18797 19.3757 7.81016 18.6288 7.81016C17.8818 7.81016 17.2578 7.18794 17.2578 6.40508C17.2578 5.62211 17.8813 5 18.6288 5C19.3763 5 19.9998 5.62215 19.9998 6.40514Z"
                                                stroke="CurrentColor"></path>
                                            <path
                                                d="M7.74249 12.5097C7.74249 13.2926 7.11849 13.9147 6.37133 13.9147C5.62411 13.9147 5 13.2926 5 12.5097C5 11.7267 5.62419 11.1044 6.37133 11.1044C7.11842 11.1044 7.74249 11.7266 7.74249 12.5097Z"
                                                stroke="CurrentColor"></path>
                                            <path
                                                d="M13.7976 12.5097C13.7976 13.2927 13.1736 13.9147 12.4266 13.9147C11.6795 13.9147 11.0557 13.2927 11.0557 12.5097C11.0557 11.7265 11.6793 11.1044 12.4266 11.1044C13.1741 11.1044 13.7976 11.7265 13.7976 12.5097Z"
                                                stroke="CurrentColor"></path>
                                            <path
                                                d="M19.9516 12.5097C19.9516 13.2927 19.328 13.9147 18.5807 13.9147C17.8329 13.9147 17.209 13.2925 17.209 12.5097C17.209 11.7268 17.8332 11.1044 18.5807 11.1044C19.3279 11.1044 19.9516 11.7265 19.9516 12.5097Z"
                                                stroke="CurrentColor"></path>
                                            <path
                                                d="M5.04297 18.5947C5.04297 17.8118 5.66709 17.1896 6.4143 17.1896C7.16137 17.1896 7.78523 17.8116 7.78523 18.5947C7.78523 19.3778 7.16139 19.9997 6.4143 19.9997C5.66714 19.9997 5.04297 19.3773 5.04297 18.5947Z"
                                                stroke="CurrentColor"></path>
                                            <path
                                                d="M11.0986 18.5947C11.0986 17.8118 11.7227 17.1896 12.47 17.1896C13.2169 17.1896 13.8409 17.8117 13.8409 18.5947C13.8409 19.3778 13.2169 19.9997 12.47 19.9997C11.7225 19.9997 11.0986 19.3774 11.0986 18.5947Z"
                                                stroke="CurrentColor"></path>
                                            <path
                                                d="M17.252 18.5947C17.252 17.8117 17.876 17.1896 18.6229 17.1896C19.3699 17.1896 19.9939 17.8117 19.9939 18.5947C19.9939 19.3778 19.3702 19.9997 18.6229 19.9997C17.876 19.9997 17.252 19.3774 17.252 18.5947Z"
                                                stroke="CurrentColor"></path>
                                        </svg>
                                    </a>
                                    <a href="#" class="btn-view list active">
                                        <svg width="25" height="25" viewBox="0 0 25 25" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M19.7016 18.3317H9.00246C8.5615 18.3317 8.2041 17.9743 8.2041 17.5333C8.2041 17.0923 8.5615 16.7349 9.00246 16.7349H19.7013C20.1423 16.7349 20.4997 17.0923 20.4997 17.5333C20.4997 17.9743 20.1426 18.3317 19.7016 18.3317Z"
                                                fill="CurrentColor"></path>
                                            <path
                                                d="M19.7016 13.3203H9.00246C8.5615 13.3203 8.2041 12.9629 8.2041 12.5219C8.2041 12.081 8.5615 11.7236 9.00246 11.7236H19.7013C20.1423 11.7236 20.4997 12.081 20.4997 12.5219C20.5 12.9629 20.1426 13.3203 19.7016 13.3203Z"
                                                fill="CurrentColor"></path>
                                            <path
                                                d="M19.7016 8.30919H9.00246C8.5615 8.30919 8.2041 7.95179 8.2041 7.51083C8.2041 7.06986 8.5615 6.71246 9.00246 6.71246H19.7013C20.1423 6.71246 20.4997 7.06986 20.4997 7.51083C20.4997 7.95179 20.1426 8.30919 19.7016 8.30919Z"
                                                fill="CurrentColor"></path>
                                            <path
                                                d="M5.5722 8.64465C6.16436 8.64465 6.6444 8.16461 6.6444 7.57245C6.6444 6.98029 6.16436 6.50024 5.5722 6.50024C4.98004 6.50024 4.5 6.98029 4.5 7.57245C4.5 8.16461 4.98004 8.64465 5.5722 8.64465Z"
                                                fill="CurrentColor"></path>
                                            <path
                                                d="M5.5722 13.5942C6.16436 13.5942 6.6444 13.1141 6.6444 12.522C6.6444 11.9298 6.16436 11.4498 5.5722 11.4498C4.98004 11.4498 4.5 11.9298 4.5 12.522C4.5 13.1141 4.98004 13.5942 5.5722 13.5942Z"
                                                fill="CurrentColor"></path>
                                            <path
                                                d="M5.5722 18.5438C6.16436 18.5438 6.6444 18.0637 6.6444 17.4716C6.6444 16.8794 6.16436 16.3994 5.5722 16.3994C4.98004 16.3994 4.5 16.8794 4.5 17.4716C4.5 18.0637 4.98004 18.5438 5.5722 18.5438Z"
                                                fill="CurrentColor"></path>
                                        </svg>
                                    </a>
                                    <div class="wd-find-select flex gap-8">
                                        <!-- <div class="group-select">
                                            <div class="nice-select" tabindex="0"><span class="current">Show: 50</span>
                                                <ul class="list style">
                                                    <li data-value="10" class="option">Show: 10</li>
                                                    <li data-value="30" class="option">Show: 30</li>
                                                    <li data-value="50" class="option selected">Show: 50
                                                    </li>
                                                    <li data-value="100" class="option">Show: 100</li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="group-select">
                                            <div class="nice-select" tabindex="0"><span class="current">Default
                                                    order</span>
                                                <ul class="list style">
                                                    <li data-value="" class="option selected">Default order
                                                    </li>
                                                    <li data-value="by-latest" class="option">All </li>
                                                    <li data-value="low-to-high" class="option">Low to high
                                                    </li>
                                                    <li data-value="high-to-low" class="option">High to low
                                                    </li>
                                                </ul>
                                            </div>
                                        </div> -->
                                    </div>
                                </div>
                            </div>

                            <div id="vehicleList">
                                <?php $this->load->view('partials/_vehicle_list', ['vehicles' => $vehicles]); ?>
                            </div>
                            <!-- <div class="list-car-list-1"> -->

                            <?php //foreach($vehicles as $vehicle){?>
                            <!-- <div class="box-car-list style-2 hv-one">
                                    <div class="image-group relative ">
                                        <ul class="change-heart flex">
                                            <li class="box-icon w-32">
                                                <a data-bs-toggle="offcanvas" data-bs-target="#offcanvasBottom"
                                                    aria-controls="offcanvasBottom" class="icon">
                                                    <svg width="18" height="18" viewBox="0 0 18 18" fill="none"
                                                        xmlns="http://www.w3.org/2000/svg">
                                                        <path
                                                            d="M5.25 16.5L1.5 12.75M1.5 12.75L5.25 9M1.5 12.75H12.75M12.75 1.5L16.5 5.25M16.5 5.25L12.75 9M16.5 5.25H5.25"
                                                            stroke="CurrentColor" stroke-width="1.5"
                                                            stroke-linecap="round" stroke-linejoin="round" />
                                                    </svg>
                                                </a>
                                            </li>
                                            <li class="box-icon w-32">
                                                <a href="#" class="icon">
                                                    <svg width="18" height="16" viewBox="0 0 18 16" fill="none"
                                                        xmlns="http://www.w3.org/2000/svg">
                                                        <path
                                                            d="M16.5 4.875C16.5 2.80417 14.7508 1.125 12.5933 1.125C10.9808 1.125 9.59583 2.06333 9 3.4025C8.40417 2.06333 7.01917 1.125 5.40583 1.125C3.25 1.125 1.5 2.80417 1.5 4.875C1.5 10.8917 9 14.875 9 14.875C9 14.875 16.5 10.8917 16.5 4.875Z"
                                                            stroke="CurrentColor" stroke-width="1.5"
                                                            stroke-linecap="round" stroke-linejoin="round" />
                                                    </svg>
                                                </a>
                                            </li>
                                        </ul>
                                        <?php $car_img = $this->db->where('car_list_id',$vehicle->id)->get('car_img')->result(); ?>
                                        <div class="img-style">
                                           

                                            <img class="lazyload"
                                                data-src="<?= base_url('uploads/'.$car_img[0]->photos); ?>"
                                                src="<?= base_url('uploads/'.$car_img[0]->photos); ?>" alt="image">
                                        </div>
                                    </div>
                                    <div class="content">
                                        <div class="inner1">
                                            <div class="text-address">
                                                <p class="text-color-3 font"><?= $vehicle->make; ?></p>
                                            </div>
                                            <h5 class="link-style-1">
                                                <a
                                                    href="<?= base_url('list-details-v1'); ?>"><?= $vehicle->year. " " .$vehicle->make. " " .$vehicle->model ; ?></a>
                                            </h5>
                                            <div class="icon-box flex flex-wrap">
                                                <div class="icons flex-three">
                                                    <i class="icon-autodeal-km1"></i>
                                                    <span><?= $vehicle->mileage; ?> kms</span>
                                                </div>
                                                <div class="icons flex-three">
                                                    <i class="icon-autodeal-diesel"></i>
                                                    <span><?= $vehicle->fuel_type; ?></span>
                                                </div>
                                                <div class="icons flex-three">
                                                    <i class="icon-autodeal-automatic"></i>
                                                    <span><?= $vehicle->transmission; ?></span>
                                                </div>
                                            </div>
                                            <div class="money fs-20 fw-5 lh-25 text-color-3">₹ <?= $vehicle->price; ?>
                                            </div>
                                            <a href="<?= base_url('list-details?car_id='.$vehicle->id); ?>"
                                                class="view-car">View details<i class="icon-autodeal-btn-right"></i></a>
                                        </div>
                                        <div class="inner2">
                                            <div class="days-box">
                                                <div class="img-author">
                                                    <img class="lazyload"
                                                        data-src="<?= base_url(); ?>/assets/assets/images/author/avt-cm1.jpg"
                                                        src="<?= base_url(); ?>/assets/assets/images/author/avt-cm1.jpg"
                                                        alt="image">
                                                    <span class="font text-color-2 fw-5">Kathryn
                                                        Murphy</span>
                                                </div>
                                                <a href="<?= base_url('list-details-v1'); ?>" class="view-car">View
                                                    car</a>

                                                <a href="#" class="chat">
                                                    <div class="icon">
                                                        <svg width="18" height="18" viewBox="0 0 18 18" fill="none"
                                                            xmlns="http://www.w3.org/2000/svg">
                                                            <path
                                                                d="M8.99982 0.875C7.59706 0.874694 6.21811 1.23757 4.9972 1.9283C3.77629 2.61904 2.75501 3.6141 2.03277 4.81664C1.31052 6.01918 0.911915 7.38822 0.875748 8.79052C0.839581 10.1928 1.16709 11.5806 1.82638 12.8188L0.939664 15.4789C0.866215 15.6992 0.855555 15.9355 0.908881 16.1615C0.962207 16.3874 1.07741 16.5941 1.24158 16.7582C1.40575 16.9224 1.61239 17.0376 1.83836 17.0909C2.06432 17.1443 2.30067 17.1336 2.52091 17.0602L5.18107 16.1734C6.27073 16.753 7.47811 17.0767 8.71156 17.12C9.94501 17.1633 11.1721 16.925 12.2997 16.4232C13.4273 15.9215 14.4258 15.1694 15.2194 14.2241C16.0129 13.2789 16.5807 12.1652 16.8796 10.9678C17.1785 9.77029 17.2007 8.52047 16.9445 7.31315C16.6882 6.10584 16.1603 4.97276 15.4008 3.99993C14.6413 3.02711 13.6701 2.24009 12.561 1.69864C11.4519 1.15718 10.234 0.875506 8.99982 0.875ZM8.99982 15.875C7.79121 15.8758 6.6038 15.5575 5.55763 14.9523C5.48104 14.9079 5.39587 14.8803 5.30779 14.8713C5.2197 14.8622 5.13071 14.872 5.0467 14.9L2.12482 15.875L3.09904 12.9531C3.12712 12.8692 3.13705 12.7802 3.12816 12.6921C3.11927 12.604 3.09177 12.5188 3.04748 12.4422C2.28964 11.132 1.98537 9.60827 2.18187 8.10747C2.37837 6.60667 3.06466 5.21267 4.13426 4.14171C5.20387 3.07076 6.597 2.38271 8.09755 2.18431C9.5981 1.98592 11.1222 2.28826 12.4334 3.04444C13.7445 3.80062 14.7695 4.96837 15.3493 6.36652C15.9291 7.76468 16.0313 9.3151 15.64 10.7773C15.2487 12.2394 14.3858 13.5316 13.1852 14.4533C11.9846 15.375 10.5134 15.8748 8.99982 15.875Z"
                                                                fill="CurrentColor" />
                                                        </svg>
                                                    </div>
                                                    <span>Chat</span>
                                                </a>
                                                <p class="fs-12 lh-16">View 20 variants matching your search
                                                    criteria</p>

                                            </div>
                                        </div>
                                    </div>
                                </div> -->
                            <?php //} ?>
                            <!-- <div class="box-car-list style-2 hv-one">
                                                <div class="image-group relative ">
                                                    <div class="top flex-two">
                                                        <ul class="d-flex gap-8">
                                                            <li class="flag-tag success">Featured</li>
                                                            <li class="flag-tag style-1">
                                                                <div class="icon">
                                                                    <svg width="16" height="13" viewBox="0 0 16 13"
                                                                        fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                        <path
                                                                            d="M1.5 9L4.93933 5.56067C5.07862 5.42138 5.24398 5.31089 5.42597 5.2355C5.60796 5.16012 5.80302 5.12132 6 5.12132C6.19698 5.12132 6.39204 5.16012 6.57403 5.2355C6.75602 5.31089 6.92138 5.42138 7.06067 5.56067L10.5 9M9.5 8L10.4393 7.06067C10.5786 6.92138 10.744 6.81089 10.926 6.7355C11.108 6.66012 11.303 6.62132 11.5 6.62132C11.697 6.62132 11.892 6.66012 12.074 6.7355C12.256 6.81089 12.4214 6.92138 12.5607 7.06067L14.5 9M2.5 11.5H13.5C13.7652 11.5 14.0196 11.3946 14.2071 11.2071C14.3946 11.0196 14.5 10.7652 14.5 10.5V2.5C14.5 2.23478 14.3946 1.98043 14.2071 1.79289C14.0196 1.60536 13.7652 1.5 13.5 1.5H2.5C2.23478 1.5 1.98043 1.60536 1.79289 1.79289C1.60536 1.98043 1.5 2.23478 1.5 2.5V10.5C1.5 10.7652 1.60536 11.0196 1.79289 11.2071C1.98043 11.3946 2.23478 11.5 2.5 11.5ZM9.5 4H9.50533V4.00533H9.5V4ZM9.75 4C9.75 4.0663 9.72366 4.12989 9.67678 4.17678C9.62989 4.22366 9.5663 4.25 9.5 4.25C9.4337 4.25 9.37011 4.22366 9.32322 4.17678C9.27634 4.12989 9.25 4.0663 9.25 4C9.25 3.9337 9.27634 3.87011 9.32322 3.82322C9.37011 3.77634 9.4337 3.75 9.5 3.75C9.5663 3.75 9.62989 3.77634 9.67678 3.82322C9.72366 3.87011 9.75 3.9337 9.75 4Z"
                                                                            stroke="white" stroke-width="1.5"
                                                                            stroke-linecap="round"
                                                                            stroke-linejoin="round" />
                                                                    </svg>
                                                                </div>
                                                                6
                                                            </li>
                                                        </ul>
                                                        <div class="year flag-tag">2024</div>
                                                    </div>
                                                    <ul class="change-heart flex">
                                                        <li class="box-icon w-32">
                                                            <a data-bs-toggle="offcanvas"
                                                                data-bs-target="#offcanvasBottom"
                                                                aria-controls="offcanvasBottom" class="icon">
                                                                <svg width="18" height="18" viewBox="0 0 18 18"
                                                                    fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                    <path
                                                                        d="M5.25 16.5L1.5 12.75M1.5 12.75L5.25 9M1.5 12.75H12.75M12.75 1.5L16.5 5.25M16.5 5.25L12.75 9M16.5 5.25H5.25"
                                                                        stroke="CurrentColor" stroke-width="1.5"
                                                                        stroke-linecap="round"
                                                                        stroke-linejoin="round" />
                                                                </svg>
                                                            </a>
                                                        </li>
                                                        <li class="box-icon w-32">
                                                            <a href="#" class="icon">
                                                                <svg width="18" height="16" viewBox="0 0 18 16"
                                                                    fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                    <path
                                                                        d="M16.5 4.875C16.5 2.80417 14.7508 1.125 12.5933 1.125C10.9808 1.125 9.59583 2.06333 9 3.4025C8.40417 2.06333 7.01917 1.125 5.40583 1.125C3.25 1.125 1.5 2.80417 1.5 4.875C1.5 10.8917 9 14.875 9 14.875C9 14.875 16.5 10.8917 16.5 4.875Z"
                                                                        stroke="CurrentColor" stroke-width="1.5"
                                                                        stroke-linecap="round"
                                                                        stroke-linejoin="round" />
                                                                </svg>
                                                            </a>
                                                        </li>
                                                    </ul>
                                                    <div class="img-style">
                                                        <img class="lazyload"
                                                            data-src="<?= base_url(); ?>/assets/assets/images/car-list/car29.jpg"
                                                            src="<?= base_url(); ?>/assets/assets/images/car-list/car29.jpg" alt="image">
                                                    </div>
                                                </div>
                                                <div class="content">
                                                    <div class="inner1">
                                                        <div class="text-address">
                                                            <p class="text-color-3 font">Sedan</p>
                                                        </div>
                                                        <h5 class="link-style-1">
                                                            <a href="<?= base_url('list-details-v1'); ?>">2017 BMV X1 xDrive 20d
                                                                xline</a>
                                                        </h5>
                                                        <div class="icon-box flex flex-wrap">
                                                            <div class="icons flex-three">
                                                                <i class="icon-autodeal-km1"></i>
                                                                <span>72,491 kms</span>
                                                            </div>
                                                            <div class="icons flex-three">
                                                                <i class="icon-autodeal-diesel"></i>
                                                                <span>Diesel</span>
                                                            </div>
                                                            <div class="icons flex-three">
                                                                <i class="icon-autodeal-automatic"></i>
                                                                <span>Automatic</span>
                                                            </div>
                                                        </div>
                                                        <div class="money fs-20 fw-5 lh-25 text-color-3">$73,000</div>
                                                        <a href="<?= base_url('list-details-v1'); ?>" class="view-car">View details<i
                                                                class="icon-autodeal-btn-right"></i></a>
                                                    </div>
                                                    <div class="inner2">
                                                        <div class="days-box">
                                                            <div class="img-author">
                                                                <img class="lazyload"
                                                                    data-src="<?= base_url(); ?>/assets/assets/images/author/1.jpg"
                                                                    src="<?= base_url(); ?>/assets/assets/images/author/1.jpg" alt="image">
                                                                <span class="font text-color-2 fw-5">Kathryn
                                                                    Murphy</span>
                                                            </div>
                                                            <a href="<?= base_url('list-details-v1'); ?>" class="view-car">View
                                                                car</a>

                                                            <a href="#" class="chat">
                                                                <div class="icon">
                                                                    <svg width="18" height="18" viewBox="0 0 18 18"
                                                                        fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                        <path
                                                                            d="M8.99982 0.875C7.59706 0.874694 6.21811 1.23757 4.9972 1.9283C3.77629 2.61904 2.75501 3.6141 2.03277 4.81664C1.31052 6.01918 0.911915 7.38822 0.875748 8.79052C0.839581 10.1928 1.16709 11.5806 1.82638 12.8188L0.939664 15.4789C0.866215 15.6992 0.855555 15.9355 0.908881 16.1615C0.962207 16.3874 1.07741 16.5941 1.24158 16.7582C1.40575 16.9224 1.61239 17.0376 1.83836 17.0909C2.06432 17.1443 2.30067 17.1336 2.52091 17.0602L5.18107 16.1734C6.27073 16.753 7.47811 17.0767 8.71156 17.12C9.94501 17.1633 11.1721 16.925 12.2997 16.4232C13.4273 15.9215 14.4258 15.1694 15.2194 14.2241C16.0129 13.2789 16.5807 12.1652 16.8796 10.9678C17.1785 9.77029 17.2007 8.52047 16.9445 7.31315C16.6882 6.10584 16.1603 4.97276 15.4008 3.99993C14.6413 3.02711 13.6701 2.24009 12.561 1.69864C11.4519 1.15718 10.234 0.875506 8.99982 0.875ZM8.99982 15.875C7.79121 15.8758 6.6038 15.5575 5.55763 14.9523C5.48104 14.9079 5.39587 14.8803 5.30779 14.8713C5.2197 14.8622 5.13071 14.872 5.0467 14.9L2.12482 15.875L3.09904 12.9531C3.12712 12.8692 3.13705 12.7802 3.12816 12.6921C3.11927 12.604 3.09177 12.5188 3.04748 12.4422C2.28964 11.132 1.98537 9.60827 2.18187 8.10747C2.37837 6.60667 3.06466 5.21267 4.13426 4.14171C5.20387 3.07076 6.597 2.38271 8.09755 2.18431C9.5981 1.98592 11.1222 2.28826 12.4334 3.04444C13.7445 3.80062 14.7695 4.96837 15.3493 6.36652C15.9291 7.76468 16.0313 9.3151 15.64 10.7773C15.2487 12.2394 14.3858 13.5316 13.1852 14.4533C11.9846 15.375 10.5134 15.8748 8.99982 15.875Z"
                                                                            fill="CurrentColor" />
                                                                    </svg>
                                                                </div>
                                                                <span>Chat</span>
                                                            </a>
                                                            <p class="fs-12 lh-16">View 20 variants matching your search
                                                                criteria</p>

                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="box-car-list style-2 hv-one">
                                                <div class="image-group relative ">
                                                    <div class="top flex-two">
                                                        <ul class="d-flex gap-8">
                                                            <li class="flag-tag success">Featured</li>
                                                            <li class="flag-tag style-1">
                                                                <div class="icon">
                                                                    <svg width="16" height="13" viewBox="0 0 16 13"
                                                                        fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                        <path
                                                                            d="M1.5 9L4.93933 5.56067C5.07862 5.42138 5.24398 5.31089 5.42597 5.2355C5.60796 5.16012 5.80302 5.12132 6 5.12132C6.19698 5.12132 6.39204 5.16012 6.57403 5.2355C6.75602 5.31089 6.92138 5.42138 7.06067 5.56067L10.5 9M9.5 8L10.4393 7.06067C10.5786 6.92138 10.744 6.81089 10.926 6.7355C11.108 6.66012 11.303 6.62132 11.5 6.62132C11.697 6.62132 11.892 6.66012 12.074 6.7355C12.256 6.81089 12.4214 6.92138 12.5607 7.06067L14.5 9M2.5 11.5H13.5C13.7652 11.5 14.0196 11.3946 14.2071 11.2071C14.3946 11.0196 14.5 10.7652 14.5 10.5V2.5C14.5 2.23478 14.3946 1.98043 14.2071 1.79289C14.0196 1.60536 13.7652 1.5 13.5 1.5H2.5C2.23478 1.5 1.98043 1.60536 1.79289 1.79289C1.60536 1.98043 1.5 2.23478 1.5 2.5V10.5C1.5 10.7652 1.60536 11.0196 1.79289 11.2071C1.98043 11.3946 2.23478 11.5 2.5 11.5ZM9.5 4H9.50533V4.00533H9.5V4ZM9.75 4C9.75 4.0663 9.72366 4.12989 9.67678 4.17678C9.62989 4.22366 9.5663 4.25 9.5 4.25C9.4337 4.25 9.37011 4.22366 9.32322 4.17678C9.27634 4.12989 9.25 4.0663 9.25 4C9.25 3.9337 9.27634 3.87011 9.32322 3.82322C9.37011 3.77634 9.4337 3.75 9.5 3.75C9.5663 3.75 9.62989 3.77634 9.67678 3.82322C9.72366 3.87011 9.75 3.9337 9.75 4Z"
                                                                            stroke="white" stroke-width="1.5"
                                                                            stroke-linecap="round"
                                                                            stroke-linejoin="round" />
                                                                    </svg>
                                                                </div>
                                                                6
                                                            </li>
                                                        </ul>
                                                        <div class="year flag-tag">2024</div>
                                                    </div>
                                                    <ul class="change-heart flex">
                                                        <li class="box-icon w-32">
                                                            <a data-bs-toggle="offcanvas"
                                                                data-bs-target="#offcanvasBottom"
                                                                aria-controls="offcanvasBottom" class="icon">
                                                                <svg width="18" height="18" viewBox="0 0 18 18"
                                                                    fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                    <path
                                                                        d="M5.25 16.5L1.5 12.75M1.5 12.75L5.25 9M1.5 12.75H12.75M12.75 1.5L16.5 5.25M16.5 5.25L12.75 9M16.5 5.25H5.25"
                                                                        stroke="CurrentColor" stroke-width="1.5"
                                                                        stroke-linecap="round"
                                                                        stroke-linejoin="round" />
                                                                </svg>
                                                            </a>
                                                        </li>
                                                        <li class="box-icon w-32">
                                                            <a href="#" class="icon">
                                                                <svg width="18" height="16" viewBox="0 0 18 16"
                                                                    fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                    <path
                                                                        d="M16.5 4.875C16.5 2.80417 14.7508 1.125 12.5933 1.125C10.9808 1.125 9.59583 2.06333 9 3.4025C8.40417 2.06333 7.01917 1.125 5.40583 1.125C3.25 1.125 1.5 2.80417 1.5 4.875C1.5 10.8917 9 14.875 9 14.875C9 14.875 16.5 10.8917 16.5 4.875Z"
                                                                        stroke="CurrentColor" stroke-width="1.5"
                                                                        stroke-linecap="round"
                                                                        stroke-linejoin="round" />
                                                                </svg>
                                                            </a>
                                                        </li>
                                                    </ul>
                                                    <div class="img-style">
                                                        <img class="lazyload"
                                                            data-src="<?= base_url(); ?>/assets/assets/images/car-list/car25.jpg"
                                                            src="<?= base_url(); ?>/assets/assets/images/car-list/car25.jpg" alt="image">
                                                    </div>
                                                </div>
                                                <div class="content">
                                                    <div class="inner1">
                                                        <div class="text-address">
                                                            <p class="text-color-3 font">Sedan</p>
                                                        </div>
                                                        <h5 class="link-style-1">
                                                            <a href="<?= base_url('list-details-v1'); ?>">2017 BMV X1 xDrive 20d
                                                                xline</a>
                                                        </h5>
                                                        <div class="icon-box flex flex-wrap">
                                                            <div class="icons flex-three">
                                                                <i class="icon-autodeal-km1"></i>
                                                                <span>72,491 kms</span>
                                                            </div>
                                                            <div class="icons flex-three">
                                                                <i class="icon-autodeal-diesel"></i>
                                                                <span>Diesel</span>
                                                            </div>
                                                            <div class="icons flex-three">
                                                                <i class="icon-autodeal-automatic"></i>
                                                                <span>Automatic</span>
                                                            </div>
                                                        </div>
                                                        <div class="money fs-20 fw-5 lh-25 text-color-3">$73,000</div>
                                                        <a href="<?= base_url('list-details-v1'); ?>" class="view-car">View details<i
                                                                class="icon-autodeal-btn-right"></i></a>
                                                    </div>
                                                    <div class="inner2">
                                                        <div class="days-box">
                                                            <div class="img-author">
                                                                <img class="lazyload"
                                                                    data-src="<?= base_url(); ?>/assets/assets/images/author/2.jpg"
                                                                    src="<?= base_url(); ?>/assets/assets/images/author/2.jpg" alt="image">
                                                                <span class="font text-color-2 fw-5">Kathryn
                                                                    Murphy</span>
                                                            </div>
                                                            <a href="<?= base_url('list-details-v1'); ?>" class="view-car">View
                                                                car</a>

                                                            <a href="#" class="chat">
                                                                <div class="icon">
                                                                    <svg width="18" height="18" viewBox="0 0 18 18"
                                                                        fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                        <path
                                                                            d="M8.99982 0.875C7.59706 0.874694 6.21811 1.23757 4.9972 1.9283C3.77629 2.61904 2.75501 3.6141 2.03277 4.81664C1.31052 6.01918 0.911915 7.38822 0.875748 8.79052C0.839581 10.1928 1.16709 11.5806 1.82638 12.8188L0.939664 15.4789C0.866215 15.6992 0.855555 15.9355 0.908881 16.1615C0.962207 16.3874 1.07741 16.5941 1.24158 16.7582C1.40575 16.9224 1.61239 17.0376 1.83836 17.0909C2.06432 17.1443 2.30067 17.1336 2.52091 17.0602L5.18107 16.1734C6.27073 16.753 7.47811 17.0767 8.71156 17.12C9.94501 17.1633 11.1721 16.925 12.2997 16.4232C13.4273 15.9215 14.4258 15.1694 15.2194 14.2241C16.0129 13.2789 16.5807 12.1652 16.8796 10.9678C17.1785 9.77029 17.2007 8.52047 16.9445 7.31315C16.6882 6.10584 16.1603 4.97276 15.4008 3.99993C14.6413 3.02711 13.6701 2.24009 12.561 1.69864C11.4519 1.15718 10.234 0.875506 8.99982 0.875ZM8.99982 15.875C7.79121 15.8758 6.6038 15.5575 5.55763 14.9523C5.48104 14.9079 5.39587 14.8803 5.30779 14.8713C5.2197 14.8622 5.13071 14.872 5.0467 14.9L2.12482 15.875L3.09904 12.9531C3.12712 12.8692 3.13705 12.7802 3.12816 12.6921C3.11927 12.604 3.09177 12.5188 3.04748 12.4422C2.28964 11.132 1.98537 9.60827 2.18187 8.10747C2.37837 6.60667 3.06466 5.21267 4.13426 4.14171C5.20387 3.07076 6.597 2.38271 8.09755 2.18431C9.5981 1.98592 11.1222 2.28826 12.4334 3.04444C13.7445 3.80062 14.7695 4.96837 15.3493 6.36652C15.9291 7.76468 16.0313 9.3151 15.64 10.7773C15.2487 12.2394 14.3858 13.5316 13.1852 14.4533C11.9846 15.375 10.5134 15.8748 8.99982 15.875Z"
                                                                            fill="CurrentColor" />
                                                                    </svg>
                                                                </div>
                                                                <span>Chat</span>
                                                            </a>
                                                            <p class="fs-12 lh-16">View 20 variants matching your search
                                                                criteria</p>

                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="box-car-list style-2 hv-one">
                                                <div class="image-group relative ">
                                                    <div class="top flex-two">
                                                        <ul class="d-flex gap-8">
                                                            <li class="flag-tag success">Featured</li>
                                                            <li class="flag-tag style-1">
                                                                <div class="icon">
                                                                    <svg width="16" height="13" viewBox="0 0 16 13"
                                                                        fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                        <path
                                                                            d="M1.5 9L4.93933 5.56067C5.07862 5.42138 5.24398 5.31089 5.42597 5.2355C5.60796 5.16012 5.80302 5.12132 6 5.12132C6.19698 5.12132 6.39204 5.16012 6.57403 5.2355C6.75602 5.31089 6.92138 5.42138 7.06067 5.56067L10.5 9M9.5 8L10.4393 7.06067C10.5786 6.92138 10.744 6.81089 10.926 6.7355C11.108 6.66012 11.303 6.62132 11.5 6.62132C11.697 6.62132 11.892 6.66012 12.074 6.7355C12.256 6.81089 12.4214 6.92138 12.5607 7.06067L14.5 9M2.5 11.5H13.5C13.7652 11.5 14.0196 11.3946 14.2071 11.2071C14.3946 11.0196 14.5 10.7652 14.5 10.5V2.5C14.5 2.23478 14.3946 1.98043 14.2071 1.79289C14.0196 1.60536 13.7652 1.5 13.5 1.5H2.5C2.23478 1.5 1.98043 1.60536 1.79289 1.79289C1.60536 1.98043 1.5 2.23478 1.5 2.5V10.5C1.5 10.7652 1.60536 11.0196 1.79289 11.2071C1.98043 11.3946 2.23478 11.5 2.5 11.5ZM9.5 4H9.50533V4.00533H9.5V4ZM9.75 4C9.75 4.0663 9.72366 4.12989 9.67678 4.17678C9.62989 4.22366 9.5663 4.25 9.5 4.25C9.4337 4.25 9.37011 4.22366 9.32322 4.17678C9.27634 4.12989 9.25 4.0663 9.25 4C9.25 3.9337 9.27634 3.87011 9.32322 3.82322C9.37011 3.77634 9.4337 3.75 9.5 3.75C9.5663 3.75 9.62989 3.77634 9.67678 3.82322C9.72366 3.87011 9.75 3.9337 9.75 4Z"
                                                                            stroke="white" stroke-width="1.5"
                                                                            stroke-linecap="round"
                                                                            stroke-linejoin="round" />
                                                                    </svg>
                                                                </div>
                                                                6
                                                            </li>
                                                        </ul>
                                                        <div class="year flag-tag">2024</div>
                                                    </div>
                                                    <ul class="change-heart flex">
                                                        <li class="box-icon w-32">
                                                            <a data-bs-toggle="offcanvas"
                                                                data-bs-target="#offcanvasBottom"
                                                                aria-controls="offcanvasBottom" class="icon">
                                                                <svg width="18" height="18" viewBox="0 0 18 18"
                                                                    fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                    <path
                                                                        d="M5.25 16.5L1.5 12.75M1.5 12.75L5.25 9M1.5 12.75H12.75M12.75 1.5L16.5 5.25M16.5 5.25L12.75 9M16.5 5.25H5.25"
                                                                        stroke="CurrentColor" stroke-width="1.5"
                                                                        stroke-linecap="round"
                                                                        stroke-linejoin="round" />
                                                                </svg>
                                                            </a>
                                                        </li>
                                                        <li class="box-icon w-32">
                                                            <a href="#" class="icon">
                                                                <svg width="18" height="16" viewBox="0 0 18 16"
                                                                    fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                    <path
                                                                        d="M16.5 4.875C16.5 2.80417 14.7508 1.125 12.5933 1.125C10.9808 1.125 9.59583 2.06333 9 3.4025C8.40417 2.06333 7.01917 1.125 5.40583 1.125C3.25 1.125 1.5 2.80417 1.5 4.875C1.5 10.8917 9 14.875 9 14.875C9 14.875 16.5 10.8917 16.5 4.875Z"
                                                                        stroke="CurrentColor" stroke-width="1.5"
                                                                        stroke-linecap="round"
                                                                        stroke-linejoin="round" />
                                                                </svg>
                                                            </a>
                                                        </li>
                                                    </ul>
                                                    <div class="img-style">
                                                        <img class="lazyload"
                                                            data-src="<?= base_url(); ?>/assets/assets/images/car-list/car27.jpg"
                                                            src="<?= base_url(); ?>/assets/assets/images/car-list/car27.jpg" alt="image">
                                                    </div>
                                                </div>
                                                <div class="content">
                                                    <div class="inner1">
                                                        <div class="text-address">
                                                            <p class="text-color-3 font">Sedan</p>
                                                        </div>
                                                        <h5 class="link-style-1">
                                                            <a href="<?= base_url('list-details-v1'); ?>">2017 BMV X1 xDrive 20d
                                                                xline</a>
                                                        </h5>
                                                        <div class="icon-box flex flex-wrap">
                                                            <div class="icons flex-three">
                                                                <i class="icon-autodeal-km1"></i>
                                                                <span>72,491 kms</span>
                                                            </div>
                                                            <div class="icons flex-three">
                                                                <i class="icon-autodeal-diesel"></i>
                                                                <span>Diesel</span>
                                                            </div>
                                                            <div class="icons flex-three">
                                                                <i class="icon-autodeal-automatic"></i>
                                                                <span>Automatic</span>
                                                            </div>
                                                        </div>
                                                        <div class="money fs-20 fw-5 lh-25 text-color-3">$73,000</div>
                                                        <a href="<?= base_url('list-details-v1'); ?>" class="view-car">View details<i
                                                                class="icon-autodeal-btn-right"></i></a>
                                                    </div>
                                                    <div class="inner2">
                                                        <div class="days-box">
                                                            <div class="img-author">
                                                                <img class="lazyload"
                                                                    data-src="<?= base_url(); ?>/assets/assets/images/author/3.png"
                                                                    src="<?= base_url(); ?>/assets/assets/images/author/3.png" alt="image">
                                                                <span class="font text-color-2 fw-5">Kathryn
                                                                    Murphy</span>
                                                            </div>
                                                            <a href="<?= base_url('list-details-v1'); ?>" class="view-car">View
                                                                car</a>

                                                            <a href="#" class="chat">
                                                                <div class="icon">
                                                                    <svg width="18" height="18" viewBox="0 0 18 18"
                                                                        fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                        <path
                                                                            d="M8.99982 0.875C7.59706 0.874694 6.21811 1.23757 4.9972 1.9283C3.77629 2.61904 2.75501 3.6141 2.03277 4.81664C1.31052 6.01918 0.911915 7.38822 0.875748 8.79052C0.839581 10.1928 1.16709 11.5806 1.82638 12.8188L0.939664 15.4789C0.866215 15.6992 0.855555 15.9355 0.908881 16.1615C0.962207 16.3874 1.07741 16.5941 1.24158 16.7582C1.40575 16.9224 1.61239 17.0376 1.83836 17.0909C2.06432 17.1443 2.30067 17.1336 2.52091 17.0602L5.18107 16.1734C6.27073 16.753 7.47811 17.0767 8.71156 17.12C9.94501 17.1633 11.1721 16.925 12.2997 16.4232C13.4273 15.9215 14.4258 15.1694 15.2194 14.2241C16.0129 13.2789 16.5807 12.1652 16.8796 10.9678C17.1785 9.77029 17.2007 8.52047 16.9445 7.31315C16.6882 6.10584 16.1603 4.97276 15.4008 3.99993C14.6413 3.02711 13.6701 2.24009 12.561 1.69864C11.4519 1.15718 10.234 0.875506 8.99982 0.875ZM8.99982 15.875C7.79121 15.8758 6.6038 15.5575 5.55763 14.9523C5.48104 14.9079 5.39587 14.8803 5.30779 14.8713C5.2197 14.8622 5.13071 14.872 5.0467 14.9L2.12482 15.875L3.09904 12.9531C3.12712 12.8692 3.13705 12.7802 3.12816 12.6921C3.11927 12.604 3.09177 12.5188 3.04748 12.4422C2.28964 11.132 1.98537 9.60827 2.18187 8.10747C2.37837 6.60667 3.06466 5.21267 4.13426 4.14171C5.20387 3.07076 6.597 2.38271 8.09755 2.18431C9.5981 1.98592 11.1222 2.28826 12.4334 3.04444C13.7445 3.80062 14.7695 4.96837 15.3493 6.36652C15.9291 7.76468 16.0313 9.3151 15.64 10.7773C15.2487 12.2394 14.3858 13.5316 13.1852 14.4533C11.9846 15.375 10.5134 15.8748 8.99982 15.875Z"
                                                                            fill="CurrentColor" />
                                                                    </svg>
                                                                </div>
                                                                <span>Chat</span>
                                                            </a>
                                                            <p class="fs-12 lh-16">View 20 variants matching your search
                                                                criteria</p>

                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="box-car-list style-2 hv-one">
                                                <div class="image-group relative ">
                                                    <div class="top flex-two">
                                                        <ul class="d-flex gap-8">
                                                            <li class="flag-tag success">Featured</li>
                                                            <li class="flag-tag style-1">
                                                                <div class="icon">
                                                                    <svg width="16" height="13" viewBox="0 0 16 13"
                                                                        fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                        <path
                                                                            d="M1.5 9L4.93933 5.56067C5.07862 5.42138 5.24398 5.31089 5.42597 5.2355C5.60796 5.16012 5.80302 5.12132 6 5.12132C6.19698 5.12132 6.39204 5.16012 6.57403 5.2355C6.75602 5.31089 6.92138 5.42138 7.06067 5.56067L10.5 9M9.5 8L10.4393 7.06067C10.5786 6.92138 10.744 6.81089 10.926 6.7355C11.108 6.66012 11.303 6.62132 11.5 6.62132C11.697 6.62132 11.892 6.66012 12.074 6.7355C12.256 6.81089 12.4214 6.92138 12.5607 7.06067L14.5 9M2.5 11.5H13.5C13.7652 11.5 14.0196 11.3946 14.2071 11.2071C14.3946 11.0196 14.5 10.7652 14.5 10.5V2.5C14.5 2.23478 14.3946 1.98043 14.2071 1.79289C14.0196 1.60536 13.7652 1.5 13.5 1.5H2.5C2.23478 1.5 1.98043 1.60536 1.79289 1.79289C1.60536 1.98043 1.5 2.23478 1.5 2.5V10.5C1.5 10.7652 1.60536 11.0196 1.79289 11.2071C1.98043 11.3946 2.23478 11.5 2.5 11.5ZM9.5 4H9.50533V4.00533H9.5V4ZM9.75 4C9.75 4.0663 9.72366 4.12989 9.67678 4.17678C9.62989 4.22366 9.5663 4.25 9.5 4.25C9.4337 4.25 9.37011 4.22366 9.32322 4.17678C9.27634 4.12989 9.25 4.0663 9.25 4C9.25 3.9337 9.27634 3.87011 9.32322 3.82322C9.37011 3.77634 9.4337 3.75 9.5 3.75C9.5663 3.75 9.62989 3.77634 9.67678 3.82322C9.72366 3.87011 9.75 3.9337 9.75 4Z"
                                                                            stroke="white" stroke-width="1.5"
                                                                            stroke-linecap="round"
                                                                            stroke-linejoin="round" />
                                                                    </svg>
                                                                </div>
                                                                6
                                                            </li>
                                                        </ul>
                                                        <div class="year flag-tag">2024</div>
                                                    </div>
                                                    <ul class="change-heart flex">
                                                        <li class="box-icon w-32">
                                                            <a data-bs-toggle="offcanvas"
                                                                data-bs-target="#offcanvasBottom"
                                                                aria-controls="offcanvasBottom" class="icon">
                                                                <svg width="18" height="18" viewBox="0 0 18 18"
                                                                    fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                    <path
                                                                        d="M5.25 16.5L1.5 12.75M1.5 12.75L5.25 9M1.5 12.75H12.75M12.75 1.5L16.5 5.25M16.5 5.25L12.75 9M16.5 5.25H5.25"
                                                                        stroke="CurrentColor" stroke-width="1.5"
                                                                        stroke-linecap="round"
                                                                        stroke-linejoin="round" />
                                                                </svg>
                                                            </a>
                                                        </li>
                                                        <li class="box-icon w-32">
                                                            <a href="#" class="icon">
                                                                <svg width="18" height="16" viewBox="0 0 18 16"
                                                                    fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                    <path
                                                                        d="M16.5 4.875C16.5 2.80417 14.7508 1.125 12.5933 1.125C10.9808 1.125 9.59583 2.06333 9 3.4025C8.40417 2.06333 7.01917 1.125 5.40583 1.125C3.25 1.125 1.5 2.80417 1.5 4.875C1.5 10.8917 9 14.875 9 14.875C9 14.875 16.5 10.8917 16.5 4.875Z"
                                                                        stroke="CurrentColor" stroke-width="1.5"
                                                                        stroke-linecap="round"
                                                                        stroke-linejoin="round" />
                                                                </svg>
                                                            </a>
                                                        </li>
                                                    </ul>
                                                    <div class="img-style">
                                                        <img class="lazyload"
                                                            data-src="<?= base_url(); ?>/assets/assets/images/car-list/car28.jpg"
                                                            src="<?= base_url(); ?>/assets/assets/images/car-list/car28.jpg" alt="image">
                                                    </div>
                                                </div>
                                                <div class="content">
                                                    <div class="inner1">
                                                        <div class="text-address">
                                                            <p class="text-color-3 font">Sedan</p>
                                                        </div>
                                                        <h5 class="link-style-1">
                                                            <a href="<?= base_url('list-details-v1'); ?>">2017 BMV X1 xDrive 20d
                                                                xline</a>
                                                        </h5>
                                                        <div class="icon-box flex flex-wrap">
                                                            <div class="icons flex-three">
                                                                <i class="icon-autodeal-km1"></i>
                                                                <span>72,491 kms</span>
                                                            </div>
                                                            <div class="icons flex-three">
                                                                <i class="icon-autodeal-diesel"></i>
                                                                <span>Diesel</span>
                                                            </div>
                                                            <div class="icons flex-three">
                                                                <i class="icon-autodeal-automatic"></i>
                                                                <span>Automatic</span>
                                                            </div>
                                                        </div>
                                                        <div class="money fs-20 fw-5 lh-25 text-color-3">$73,000</div>
                                                        <a href="<?= base_url('list-details-v1'); ?>" class="view-car">View details<i
                                                                class="icon-autodeal-btn-right"></i></a>
                                                    </div>
                                                    <div class="inner2">
                                                        <div class="days-box">
                                                            <div class="img-author">
                                                                <img class="lazyload"
                                                                    data-src="<?= base_url(); ?>/assets/assets/images/author/4.jpg"
                                                                    src="<?= base_url(); ?>/assets/assets/images/author/4.jpg" alt="image">
                                                                <span class="font text-color-2 fw-5">Kathryn
                                                                    Murphy</span>
                                                            </div>
                                                            <a href="<?= base_url('list-details-v1'); ?>" class="view-car">View
                                                                car</a>

                                                            <a href="#" class="chat">
                                                                <div class="icon">
                                                                    <svg width="18" height="18" viewBox="0 0 18 18"
                                                                        fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                        <path
                                                                            d="M8.99982 0.875C7.59706 0.874694 6.21811 1.23757 4.9972 1.9283C3.77629 2.61904 2.75501 3.6141 2.03277 4.81664C1.31052 6.01918 0.911915 7.38822 0.875748 8.79052C0.839581 10.1928 1.16709 11.5806 1.82638 12.8188L0.939664 15.4789C0.866215 15.6992 0.855555 15.9355 0.908881 16.1615C0.962207 16.3874 1.07741 16.5941 1.24158 16.7582C1.40575 16.9224 1.61239 17.0376 1.83836 17.0909C2.06432 17.1443 2.30067 17.1336 2.52091 17.0602L5.18107 16.1734C6.27073 16.753 7.47811 17.0767 8.71156 17.12C9.94501 17.1633 11.1721 16.925 12.2997 16.4232C13.4273 15.9215 14.4258 15.1694 15.2194 14.2241C16.0129 13.2789 16.5807 12.1652 16.8796 10.9678C17.1785 9.77029 17.2007 8.52047 16.9445 7.31315C16.6882 6.10584 16.1603 4.97276 15.4008 3.99993C14.6413 3.02711 13.6701 2.24009 12.561 1.69864C11.4519 1.15718 10.234 0.875506 8.99982 0.875ZM8.99982 15.875C7.79121 15.8758 6.6038 15.5575 5.55763 14.9523C5.48104 14.9079 5.39587 14.8803 5.30779 14.8713C5.2197 14.8622 5.13071 14.872 5.0467 14.9L2.12482 15.875L3.09904 12.9531C3.12712 12.8692 3.13705 12.7802 3.12816 12.6921C3.11927 12.604 3.09177 12.5188 3.04748 12.4422C2.28964 11.132 1.98537 9.60827 2.18187 8.10747C2.37837 6.60667 3.06466 5.21267 4.13426 4.14171C5.20387 3.07076 6.597 2.38271 8.09755 2.18431C9.5981 1.98592 11.1222 2.28826 12.4334 3.04444C13.7445 3.80062 14.7695 4.96837 15.3493 6.36652C15.9291 7.76468 16.0313 9.3151 15.64 10.7773C15.2487 12.2394 14.3858 13.5316 13.1852 14.4533C11.9846 15.375 10.5134 15.8748 8.99982 15.875Z"
                                                                            fill="CurrentColor" />
                                                                    </svg>
                                                                </div>
                                                                <span>Chat</span>
                                                            </a>
                                                            <p class="fs-12 lh-16">View 20 variants matching your search
                                                                criteria</p>

                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="box-car-list style-2 hv-one">
                                                <div class="image-group relative ">
                                                    <div class="top flex-two">
                                                        <ul class="d-flex gap-8">
                                                            <li class="flag-tag success">Featured</li>
                                                            <li class="flag-tag style-1">
                                                                <div class="icon">
                                                                    <svg width="16" height="13" viewBox="0 0 16 13"
                                                                        fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                        <path
                                                                            d="M1.5 9L4.93933 5.56067C5.07862 5.42138 5.24398 5.31089 5.42597 5.2355C5.60796 5.16012 5.80302 5.12132 6 5.12132C6.19698 5.12132 6.39204 5.16012 6.57403 5.2355C6.75602 5.31089 6.92138 5.42138 7.06067 5.56067L10.5 9M9.5 8L10.4393 7.06067C10.5786 6.92138 10.744 6.81089 10.926 6.7355C11.108 6.66012 11.303 6.62132 11.5 6.62132C11.697 6.62132 11.892 6.66012 12.074 6.7355C12.256 6.81089 12.4214 6.92138 12.5607 7.06067L14.5 9M2.5 11.5H13.5C13.7652 11.5 14.0196 11.3946 14.2071 11.2071C14.3946 11.0196 14.5 10.7652 14.5 10.5V2.5C14.5 2.23478 14.3946 1.98043 14.2071 1.79289C14.0196 1.60536 13.7652 1.5 13.5 1.5H2.5C2.23478 1.5 1.98043 1.60536 1.79289 1.79289C1.60536 1.98043 1.5 2.23478 1.5 2.5V10.5C1.5 10.7652 1.60536 11.0196 1.79289 11.2071C1.98043 11.3946 2.23478 11.5 2.5 11.5ZM9.5 4H9.50533V4.00533H9.5V4ZM9.75 4C9.75 4.0663 9.72366 4.12989 9.67678 4.17678C9.62989 4.22366 9.5663 4.25 9.5 4.25C9.4337 4.25 9.37011 4.22366 9.32322 4.17678C9.27634 4.12989 9.25 4.0663 9.25 4C9.25 3.9337 9.27634 3.87011 9.32322 3.82322C9.37011 3.77634 9.4337 3.75 9.5 3.75C9.5663 3.75 9.62989 3.77634 9.67678 3.82322C9.72366 3.87011 9.75 3.9337 9.75 4Z"
                                                                            stroke="white" stroke-width="1.5"
                                                                            stroke-linecap="round"
                                                                            stroke-linejoin="round" />
                                                                    </svg>
                                                                </div>
                                                                6
                                                            </li>
                                                        </ul>
                                                        <div class="year flag-tag">2024</div>
                                                    </div>
                                                    <ul class="change-heart flex">
                                                        <li class="box-icon w-32">
                                                            <a data-bs-toggle="offcanvas"
                                                                data-bs-target="#offcanvasBottom"
                                                                aria-controls="offcanvasBottom" class="icon">
                                                                <svg width="18" height="18" viewBox="0 0 18 18"
                                                                    fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                    <path
                                                                        d="M5.25 16.5L1.5 12.75M1.5 12.75L5.25 9M1.5 12.75H12.75M12.75 1.5L16.5 5.25M16.5 5.25L12.75 9M16.5 5.25H5.25"
                                                                        stroke="CurrentColor" stroke-width="1.5"
                                                                        stroke-linecap="round"
                                                                        stroke-linejoin="round" />
                                                                </svg>
                                                            </a>
                                                        </li>
                                                        <li class="box-icon w-32">
                                                            <a href="#" class="icon">
                                                                <svg width="18" height="16" viewBox="0 0 18 16"
                                                                    fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                    <path
                                                                        d="M16.5 4.875C16.5 2.80417 14.7508 1.125 12.5933 1.125C10.9808 1.125 9.59583 2.06333 9 3.4025C8.40417 2.06333 7.01917 1.125 5.40583 1.125C3.25 1.125 1.5 2.80417 1.5 4.875C1.5 10.8917 9 14.875 9 14.875C9 14.875 16.5 10.8917 16.5 4.875Z"
                                                                        stroke="CurrentColor" stroke-width="1.5"
                                                                        stroke-linecap="round"
                                                                        stroke-linejoin="round" />
                                                                </svg>
                                                            </a>
                                                        </li>
                                                    </ul>
                                                    <div class="img-style">
                                                        <img class="lazyload"
                                                            data-src="<?= base_url(); ?>/assets/assets/images/car-list/car29.jpg"
                                                            src="<?= base_url(); ?>/assets/assets/images/car-list/car29.jpg" alt="image">
                                                    </div>
                                                </div>
                                                <div class="content">
                                                    <div class="inner1">
                                                        <div class="text-address">
                                                            <p class="text-color-3 font">Sedan</p>
                                                        </div>
                                                        <h5 class="link-style-1">
                                                            <a href="<?= base_url('list-details-v1'); ?>">2017 BMV X1 xDrive 20d
                                                                xline</a>
                                                        </h5>
                                                        <div class="icon-box flex flex-wrap">
                                                            <div class="icons flex-three">
                                                                <i class="icon-autodeal-km1"></i>
                                                                <span>72,491 kms</span>
                                                            </div>
                                                            <div class="icons flex-three">
                                                                <i class="icon-autodeal-diesel"></i>
                                                                <span>Diesel</span>
                                                            </div>
                                                            <div class="icons flex-three">
                                                                <i class="icon-autodeal-automatic"></i>
                                                                <span>Automatic</span>
                                                            </div>
                                                        </div>
                                                        <div class="money fs-20 fw-5 lh-25 text-color-3">$73,000</div>
                                                        <a href="<?= base_url('list-details-v1'); ?>" class="view-car">View details<i
                                                                class="icon-autodeal-btn-right"></i></a>
                                                    </div>
                                                    <div class="inner2">
                                                        <div class="days-box">
                                                            <div class="img-author">
                                                                <img class="lazyload"
                                                                    data-src="<?= base_url(); ?>/assets/assets/images/author/5.jpg"
                                                                    src="<?= base_url(); ?>/assets/assets/images/author/5.jpg" alt="image">
                                                                <span class="font text-color-2 fw-5">Kathryn
                                                                    Murphy</span>
                                                            </div>
                                                            <a href="<?= base_url('list-details-v1'); ?>" class="view-car">View
                                                                car</a>

                                                            <a href="#" class="chat">
                                                                <div class="icon">
                                                                    <svg width="18" height="18" viewBox="0 0 18 18"
                                                                        fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                        <path
                                                                            d="M8.99982 0.875C7.59706 0.874694 6.21811 1.23757 4.9972 1.9283C3.77629 2.61904 2.75501 3.6141 2.03277 4.81664C1.31052 6.01918 0.911915 7.38822 0.875748 8.79052C0.839581 10.1928 1.16709 11.5806 1.82638 12.8188L0.939664 15.4789C0.866215 15.6992 0.855555 15.9355 0.908881 16.1615C0.962207 16.3874 1.07741 16.5941 1.24158 16.7582C1.40575 16.9224 1.61239 17.0376 1.83836 17.0909C2.06432 17.1443 2.30067 17.1336 2.52091 17.0602L5.18107 16.1734C6.27073 16.753 7.47811 17.0767 8.71156 17.12C9.94501 17.1633 11.1721 16.925 12.2997 16.4232C13.4273 15.9215 14.4258 15.1694 15.2194 14.2241C16.0129 13.2789 16.5807 12.1652 16.8796 10.9678C17.1785 9.77029 17.2007 8.52047 16.9445 7.31315C16.6882 6.10584 16.1603 4.97276 15.4008 3.99993C14.6413 3.02711 13.6701 2.24009 12.561 1.69864C11.4519 1.15718 10.234 0.875506 8.99982 0.875ZM8.99982 15.875C7.79121 15.8758 6.6038 15.5575 5.55763 14.9523C5.48104 14.9079 5.39587 14.8803 5.30779 14.8713C5.2197 14.8622 5.13071 14.872 5.0467 14.9L2.12482 15.875L3.09904 12.9531C3.12712 12.8692 3.13705 12.7802 3.12816 12.6921C3.11927 12.604 3.09177 12.5188 3.04748 12.4422C2.28964 11.132 1.98537 9.60827 2.18187 8.10747C2.37837 6.60667 3.06466 5.21267 4.13426 4.14171C5.20387 3.07076 6.597 2.38271 8.09755 2.18431C9.5981 1.98592 11.1222 2.28826 12.4334 3.04444C13.7445 3.80062 14.7695 4.96837 15.3493 6.36652C15.9291 7.76468 16.0313 9.3151 15.64 10.7773C15.2487 12.2394 14.3858 13.5316 13.1852 14.4533C11.9846 15.375 10.5134 15.8748 8.99982 15.875Z"
                                                                            fill="CurrentColor" />
                                                                    </svg>
                                                                </div>
                                                                <span>Chat</span>
                                                            </a>
                                                            <p class="fs-12 lh-16">View 20 variants matching your search
                                                                criteria</p>

                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="box-car-list style-2 hv-one">
                                                <div class="image-group relative ">
                                                    <div class="top flex-two">
                                                        <ul class="d-flex gap-8">
                                                            <li class="flag-tag success">Featured</li>
                                                            <li class="flag-tag style-1">
                                                                <div class="icon">
                                                                    <svg width="16" height="13" viewBox="0 0 16 13"
                                                                        fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                        <path
                                                                            d="M1.5 9L4.93933 5.56067C5.07862 5.42138 5.24398 5.31089 5.42597 5.2355C5.60796 5.16012 5.80302 5.12132 6 5.12132C6.19698 5.12132 6.39204 5.16012 6.57403 5.2355C6.75602 5.31089 6.92138 5.42138 7.06067 5.56067L10.5 9M9.5 8L10.4393 7.06067C10.5786 6.92138 10.744 6.81089 10.926 6.7355C11.108 6.66012 11.303 6.62132 11.5 6.62132C11.697 6.62132 11.892 6.66012 12.074 6.7355C12.256 6.81089 12.4214 6.92138 12.5607 7.06067L14.5 9M2.5 11.5H13.5C13.7652 11.5 14.0196 11.3946 14.2071 11.2071C14.3946 11.0196 14.5 10.7652 14.5 10.5V2.5C14.5 2.23478 14.3946 1.98043 14.2071 1.79289C14.0196 1.60536 13.7652 1.5 13.5 1.5H2.5C2.23478 1.5 1.98043 1.60536 1.79289 1.79289C1.60536 1.98043 1.5 2.23478 1.5 2.5V10.5C1.5 10.7652 1.60536 11.0196 1.79289 11.2071C1.98043 11.3946 2.23478 11.5 2.5 11.5ZM9.5 4H9.50533V4.00533H9.5V4ZM9.75 4C9.75 4.0663 9.72366 4.12989 9.67678 4.17678C9.62989 4.22366 9.5663 4.25 9.5 4.25C9.4337 4.25 9.37011 4.22366 9.32322 4.17678C9.27634 4.12989 9.25 4.0663 9.25 4C9.25 3.9337 9.27634 3.87011 9.32322 3.82322C9.37011 3.77634 9.4337 3.75 9.5 3.75C9.5663 3.75 9.62989 3.77634 9.67678 3.82322C9.72366 3.87011 9.75 3.9337 9.75 4Z"
                                                                            stroke="white" stroke-width="1.5"
                                                                            stroke-linecap="round"
                                                                            stroke-linejoin="round" />
                                                                    </svg>
                                                                </div>
                                                                6
                                                            </li>
                                                        </ul>
                                                        <div class="year flag-tag">2024</div>
                                                    </div>
                                                    <ul class="change-heart flex">
                                                        <li class="box-icon w-32">
                                                            <a data-bs-toggle="offcanvas"
                                                                data-bs-target="#offcanvasBottom"
                                                                aria-controls="offcanvasBottom" class="icon">
                                                                <svg width="18" height="18" viewBox="0 0 18 18"
                                                                    fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                    <path
                                                                        d="M5.25 16.5L1.5 12.75M1.5 12.75L5.25 9M1.5 12.75H12.75M12.75 1.5L16.5 5.25M16.5 5.25L12.75 9M16.5 5.25H5.25"
                                                                        stroke="CurrentColor" stroke-width="1.5"
                                                                        stroke-linecap="round"
                                                                        stroke-linejoin="round" />
                                                                </svg>
                                                            </a>
                                                        </li>
                                                        <li class="box-icon w-32">
                                                            <a href="#" class="icon">
                                                                <svg width="18" height="16" viewBox="0 0 18 16"
                                                                    fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                    <path
                                                                        d="M16.5 4.875C16.5 2.80417 14.7508 1.125 12.5933 1.125C10.9808 1.125 9.59583 2.06333 9 3.4025C8.40417 2.06333 7.01917 1.125 5.40583 1.125C3.25 1.125 1.5 2.80417 1.5 4.875C1.5 10.8917 9 14.875 9 14.875C9 14.875 16.5 10.8917 16.5 4.875Z"
                                                                        stroke="CurrentColor" stroke-width="1.5"
                                                                        stroke-linecap="round"
                                                                        stroke-linejoin="round" />
                                                                </svg>
                                                            </a>
                                                        </li>
                                                    </ul>
                                                    <div class="img-style">
                                                        <img class="lazyload"
                                                            data-src="<?= base_url(); ?>/assets/assets/images/car-list/car25.jpg"
                                                            src="<?= base_url(); ?>/assets/assets/images/car-list/car25.jpg" alt="image">
                                                    </div>
                                                </div>
                                                <div class="content">
                                                    <div class="inner1">
                                                        <div class="text-address">
                                                            <p class="text-color-3 font">Sedan</p>
                                                        </div>
                                                        <h5 class="link-style-1">
                                                            <a href="<?= base_url('list-details-v1'); ?>">2017 BMV X1 xDrive 20d
                                                                xline</a>
                                                        </h5>
                                                        <div class="icon-box flex flex-wrap">
                                                            <div class="icons flex-three">
                                                                <i class="icon-autodeal-km1"></i>
                                                                <span>72,491 kms</span>
                                                            </div>
                                                            <div class="icons flex-three">
                                                                <i class="icon-autodeal-diesel"></i>
                                                                <span>Diesel</span>
                                                            </div>
                                                            <div class="icons flex-three">
                                                                <i class="icon-autodeal-automatic"></i>
                                                                <span>Automatic</span>
                                                            </div>
                                                        </div>
                                                        <div class="money fs-20 fw-5 lh-25 text-color-3">$73,000</div>
                                                        <a href="<?= base_url('list-details-v1'); ?>" class="view-car">View details<i
                                                                class="icon-autodeal-btn-right"></i></a>
                                                    </div>
                                                    <div class="inner2">
                                                        <div class="days-box">
                                                            <div class="img-author">
                                                                <img class="lazyload"
                                                                    data-src="<?= base_url(); ?>/assets/assets/images/author/6.png"
                                                                    src="<?= base_url(); ?>/assets/assets/images/author/6.png" alt="image">
                                                                <span class="font text-color-2 fw-5">Kathryn
                                                                    Murphy</span>
                                                            </div>
                                                            <a href="<?= base_url('list-details-v1'); ?>" class="view-car">View
                                                                car</a>

                                                            <a href="#" class="chat">
                                                                <div class="icon">
                                                                    <svg width="18" height="18" viewBox="0 0 18 18"
                                                                        fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                        <path
                                                                            d="M8.99982 0.875C7.59706 0.874694 6.21811 1.23757 4.9972 1.9283C3.77629 2.61904 2.75501 3.6141 2.03277 4.81664C1.31052 6.01918 0.911915 7.38822 0.875748 8.79052C0.839581 10.1928 1.16709 11.5806 1.82638 12.8188L0.939664 15.4789C0.866215 15.6992 0.855555 15.9355 0.908881 16.1615C0.962207 16.3874 1.07741 16.5941 1.24158 16.7582C1.40575 16.9224 1.61239 17.0376 1.83836 17.0909C2.06432 17.1443 2.30067 17.1336 2.52091 17.0602L5.18107 16.1734C6.27073 16.753 7.47811 17.0767 8.71156 17.12C9.94501 17.1633 11.1721 16.925 12.2997 16.4232C13.4273 15.9215 14.4258 15.1694 15.2194 14.2241C16.0129 13.2789 16.5807 12.1652 16.8796 10.9678C17.1785 9.77029 17.2007 8.52047 16.9445 7.31315C16.6882 6.10584 16.1603 4.97276 15.4008 3.99993C14.6413 3.02711 13.6701 2.24009 12.561 1.69864C11.4519 1.15718 10.234 0.875506 8.99982 0.875ZM8.99982 15.875C7.79121 15.8758 6.6038 15.5575 5.55763 14.9523C5.48104 14.9079 5.39587 14.8803 5.30779 14.8713C5.2197 14.8622 5.13071 14.872 5.0467 14.9L2.12482 15.875L3.09904 12.9531C3.12712 12.8692 3.13705 12.7802 3.12816 12.6921C3.11927 12.604 3.09177 12.5188 3.04748 12.4422C2.28964 11.132 1.98537 9.60827 2.18187 8.10747C2.37837 6.60667 3.06466 5.21267 4.13426 4.14171C5.20387 3.07076 6.597 2.38271 8.09755 2.18431C9.5981 1.98592 11.1222 2.28826 12.4334 3.04444C13.7445 3.80062 14.7695 4.96837 15.3493 6.36652C15.9291 7.76468 16.0313 9.3151 15.64 10.7773C15.2487 12.2394 14.3858 13.5316 13.1852 14.4533C11.9846 15.375 10.5134 15.8748 8.99982 15.875Z"
                                                                            fill="CurrentColor" />
                                                                    </svg>
                                                                </div>
                                                                <span>Chat</span>
                                                            </a>
                                                            <p class="fs-12 lh-16">View 20 variants matching your search
                                                                criteria</p>

                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="box-car-list style-2 hv-one">
                                                <div class="image-group relative ">
                                                    <div class="top flex-two">
                                                        <ul class="d-flex gap-8">
                                                            <li class="flag-tag success">Featured</li>
                                                            <li class="flag-tag style-1">
                                                                <div class="icon">
                                                                    <svg width="16" height="13" viewBox="0 0 16 13"
                                                                        fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                        <path
                                                                            d="M1.5 9L4.93933 5.56067C5.07862 5.42138 5.24398 5.31089 5.42597 5.2355C5.60796 5.16012 5.80302 5.12132 6 5.12132C6.19698 5.12132 6.39204 5.16012 6.57403 5.2355C6.75602 5.31089 6.92138 5.42138 7.06067 5.56067L10.5 9M9.5 8L10.4393 7.06067C10.5786 6.92138 10.744 6.81089 10.926 6.7355C11.108 6.66012 11.303 6.62132 11.5 6.62132C11.697 6.62132 11.892 6.66012 12.074 6.7355C12.256 6.81089 12.4214 6.92138 12.5607 7.06067L14.5 9M2.5 11.5H13.5C13.7652 11.5 14.0196 11.3946 14.2071 11.2071C14.3946 11.0196 14.5 10.7652 14.5 10.5V2.5C14.5 2.23478 14.3946 1.98043 14.2071 1.79289C14.0196 1.60536 13.7652 1.5 13.5 1.5H2.5C2.23478 1.5 1.98043 1.60536 1.79289 1.79289C1.60536 1.98043 1.5 2.23478 1.5 2.5V10.5C1.5 10.7652 1.60536 11.0196 1.79289 11.2071C1.98043 11.3946 2.23478 11.5 2.5 11.5ZM9.5 4H9.50533V4.00533H9.5V4ZM9.75 4C9.75 4.0663 9.72366 4.12989 9.67678 4.17678C9.62989 4.22366 9.5663 4.25 9.5 4.25C9.4337 4.25 9.37011 4.22366 9.32322 4.17678C9.27634 4.12989 9.25 4.0663 9.25 4C9.25 3.9337 9.27634 3.87011 9.32322 3.82322C9.37011 3.77634 9.4337 3.75 9.5 3.75C9.5663 3.75 9.62989 3.77634 9.67678 3.82322C9.72366 3.87011 9.75 3.9337 9.75 4Z"
                                                                            stroke="white" stroke-width="1.5"
                                                                            stroke-linecap="round"
                                                                            stroke-linejoin="round" />
                                                                    </svg>
                                                                </div>
                                                                6
                                                            </li>
                                                        </ul>
                                                        <div class="year flag-tag">2024</div>
                                                    </div>
                                                    <ul class="change-heart flex">
                                                        <li class="box-icon w-32">
                                                            <a data-bs-toggle="offcanvas"
                                                                data-bs-target="#offcanvasBottom"
                                                                aria-controls="offcanvasBottom" class="icon">
                                                                <svg width="18" height="18" viewBox="0 0 18 18"
                                                                    fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                    <path
                                                                        d="M5.25 16.5L1.5 12.75M1.5 12.75L5.25 9M1.5 12.75H12.75M12.75 1.5L16.5 5.25M16.5 5.25L12.75 9M16.5 5.25H5.25"
                                                                        stroke="CurrentColor" stroke-width="1.5"
                                                                        stroke-linecap="round"
                                                                        stroke-linejoin="round" />
                                                                </svg>
                                                            </a>
                                                        </li>
                                                        <li class="box-icon w-32">
                                                            <a href="#" class="icon">
                                                                <svg width="18" height="16" viewBox="0 0 18 16"
                                                                    fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                    <path
                                                                        d="M16.5 4.875C16.5 2.80417 14.7508 1.125 12.5933 1.125C10.9808 1.125 9.59583 2.06333 9 3.4025C8.40417 2.06333 7.01917 1.125 5.40583 1.125C3.25 1.125 1.5 2.80417 1.5 4.875C1.5 10.8917 9 14.875 9 14.875C9 14.875 16.5 10.8917 16.5 4.875Z"
                                                                        stroke="CurrentColor" stroke-width="1.5"
                                                                        stroke-linecap="round"
                                                                        stroke-linejoin="round" />
                                                                </svg>
                                                            </a>
                                                        </li>
                                                    </ul>
                                                    <div class="img-style">
                                                        <img class="lazyload"
                                                            data-src="<?= base_url(); ?>/assets/assets/images/car-list/car27.jpg"
                                                            src="<?= base_url(); ?>/assets/assets/images/car-list/car27.jpg" alt="image">
                                                    </div>
                                                </div>
                                                <div class="content">
                                                    <div class="inner1">
                                                        <div class="text-address">
                                                            <p class="text-color-3 font">Sedan</p>
                                                        </div>
                                                        <h5 class="link-style-1">
                                                            <a href="<?= base_url('list-details-v1'); ?>">2017 BMV X1 xDrive 20d
                                                                xline</a>
                                                        </h5>
                                                        <div class="icon-box flex flex-wrap">
                                                            <div class="icons flex-three">
                                                                <i class="icon-autodeal-km1"></i>
                                                                <span>72,491 kms</span>
                                                            </div>
                                                            <div class="icons flex-three">
                                                                <i class="icon-autodeal-diesel"></i>
                                                                <span>Diesel</span>
                                                            </div>
                                                            <div class="icons flex-three">
                                                                <i class="icon-autodeal-automatic"></i>
                                                                <span>Automatic</span>
                                                            </div>
                                                        </div>
                                                        <div class="money fs-20 fw-5 lh-25 text-color-3">$73,000</div>
                                                        <a href="<?= base_url('list-details-v1'); ?>" class="view-car">View details<i
                                                                class="icon-autodeal-btn-right"></i></a>
                                                    </div>
                                                    <div class="inner2">
                                                        <div class="days-box">
                                                            <div class="img-author">
                                                                <img class="lazyload"
                                                                    data-src="<?= base_url(); ?>/assets/assets/images/author/7.jpg"
                                                                    src="<?= base_url(); ?>/assets/assets/images/author/7.jpg" alt="image">
                                                                <span class="font text-color-2 fw-5">Kathryn
                                                                    Murphy</span>
                                                            </div>
                                                            <a href="<?= base_url('list-details-v1'); ?>" class="view-car">View
                                                                car</a>

                                                            <a href="#" class="chat">
                                                                <div class="icon">
                                                                    <svg width="18" height="18" viewBox="0 0 18 18"
                                                                        fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                        <path
                                                                            d="M8.99982 0.875C7.59706 0.874694 6.21811 1.23757 4.9972 1.9283C3.77629 2.61904 2.75501 3.6141 2.03277 4.81664C1.31052 6.01918 0.911915 7.38822 0.875748 8.79052C0.839581 10.1928 1.16709 11.5806 1.82638 12.8188L0.939664 15.4789C0.866215 15.6992 0.855555 15.9355 0.908881 16.1615C0.962207 16.3874 1.07741 16.5941 1.24158 16.7582C1.40575 16.9224 1.61239 17.0376 1.83836 17.0909C2.06432 17.1443 2.30067 17.1336 2.52091 17.0602L5.18107 16.1734C6.27073 16.753 7.47811 17.0767 8.71156 17.12C9.94501 17.1633 11.1721 16.925 12.2997 16.4232C13.4273 15.9215 14.4258 15.1694 15.2194 14.2241C16.0129 13.2789 16.5807 12.1652 16.8796 10.9678C17.1785 9.77029 17.2007 8.52047 16.9445 7.31315C16.6882 6.10584 16.1603 4.97276 15.4008 3.99993C14.6413 3.02711 13.6701 2.24009 12.561 1.69864C11.4519 1.15718 10.234 0.875506 8.99982 0.875ZM8.99982 15.875C7.79121 15.8758 6.6038 15.5575 5.55763 14.9523C5.48104 14.9079 5.39587 14.8803 5.30779 14.8713C5.2197 14.8622 5.13071 14.872 5.0467 14.9L2.12482 15.875L3.09904 12.9531C3.12712 12.8692 3.13705 12.7802 3.12816 12.6921C3.11927 12.604 3.09177 12.5188 3.04748 12.4422C2.28964 11.132 1.98537 9.60827 2.18187 8.10747C2.37837 6.60667 3.06466 5.21267 4.13426 4.14171C5.20387 3.07076 6.597 2.38271 8.09755 2.18431C9.5981 1.98592 11.1222 2.28826 12.4334 3.04444C13.7445 3.80062 14.7695 4.96837 15.3493 6.36652C15.9291 7.76468 16.0313 9.3151 15.64 10.7773C15.2487 12.2394 14.3858 13.5316 13.1852 14.4533C11.9846 15.375 10.5134 15.8748 8.99982 15.875Z"
                                                                            fill="CurrentColor" />
                                                                    </svg>
                                                                </div>
                                                                <span>Chat</span>
                                                            </a>
                                                            <p class="fs-12 lh-16">View 20 variants matching your search
                                                                criteria</p>

                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="box-car-list style-2 hv-one">
                                                <div class="image-group relative ">
                                                    <div class="top flex-two">
                                                        <ul class="d-flex gap-8">
                                                            <li class="flag-tag success">Featured</li>
                                                            <li class="flag-tag style-1">
                                                                <div class="icon">
                                                                    <svg width="16" height="13" viewBox="0 0 16 13"
                                                                        fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                        <path
                                                                            d="M1.5 9L4.93933 5.56067C5.07862 5.42138 5.24398 5.31089 5.42597 5.2355C5.60796 5.16012 5.80302 5.12132 6 5.12132C6.19698 5.12132 6.39204 5.16012 6.57403 5.2355C6.75602 5.31089 6.92138 5.42138 7.06067 5.56067L10.5 9M9.5 8L10.4393 7.06067C10.5786 6.92138 10.744 6.81089 10.926 6.7355C11.108 6.66012 11.303 6.62132 11.5 6.62132C11.697 6.62132 11.892 6.66012 12.074 6.7355C12.256 6.81089 12.4214 6.92138 12.5607 7.06067L14.5 9M2.5 11.5H13.5C13.7652 11.5 14.0196 11.3946 14.2071 11.2071C14.3946 11.0196 14.5 10.7652 14.5 10.5V2.5C14.5 2.23478 14.3946 1.98043 14.2071 1.79289C14.0196 1.60536 13.7652 1.5 13.5 1.5H2.5C2.23478 1.5 1.98043 1.60536 1.79289 1.79289C1.60536 1.98043 1.5 2.23478 1.5 2.5V10.5C1.5 10.7652 1.60536 11.0196 1.79289 11.2071C1.98043 11.3946 2.23478 11.5 2.5 11.5ZM9.5 4H9.50533V4.00533H9.5V4ZM9.75 4C9.75 4.0663 9.72366 4.12989 9.67678 4.17678C9.62989 4.22366 9.5663 4.25 9.5 4.25C9.4337 4.25 9.37011 4.22366 9.32322 4.17678C9.27634 4.12989 9.25 4.0663 9.25 4C9.25 3.9337 9.27634 3.87011 9.32322 3.82322C9.37011 3.77634 9.4337 3.75 9.5 3.75C9.5663 3.75 9.62989 3.77634 9.67678 3.82322C9.72366 3.87011 9.75 3.9337 9.75 4Z"
                                                                            stroke="white" stroke-width="1.5"
                                                                            stroke-linecap="round"
                                                                            stroke-linejoin="round" />
                                                                    </svg>
                                                                </div>
                                                                6
                                                            </li>
                                                        </ul>
                                                        <div class="year flag-tag">2024</div>
                                                    </div>
                                                    <ul class="change-heart flex">
                                                        <li class="box-icon w-32">
                                                            <a data-bs-toggle="offcanvas"
                                                                data-bs-target="#offcanvasBottom"
                                                                aria-controls="offcanvasBottom" class="icon">
                                                                <svg width="18" height="18" viewBox="0 0 18 18"
                                                                    fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                    <path
                                                                        d="M5.25 16.5L1.5 12.75M1.5 12.75L5.25 9M1.5 12.75H12.75M12.75 1.5L16.5 5.25M16.5 5.25L12.75 9M16.5 5.25H5.25"
                                                                        stroke="CurrentColor" stroke-width="1.5"
                                                                        stroke-linecap="round"
                                                                        stroke-linejoin="round" />
                                                                </svg>
                                                            </a>
                                                        </li>
                                                        <li class="box-icon w-32">
                                                            <a href="#" class="icon">
                                                                <svg width="18" height="16" viewBox="0 0 18 16"
                                                                    fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                    <path
                                                                        d="M16.5 4.875C16.5 2.80417 14.7508 1.125 12.5933 1.125C10.9808 1.125 9.59583 2.06333 9 3.4025C8.40417 2.06333 7.01917 1.125 5.40583 1.125C3.25 1.125 1.5 2.80417 1.5 4.875C1.5 10.8917 9 14.875 9 14.875C9 14.875 16.5 10.8917 16.5 4.875Z"
                                                                        stroke="CurrentColor" stroke-width="1.5"
                                                                        stroke-linecap="round"
                                                                        stroke-linejoin="round" />
                                                                </svg>
                                                            </a>
                                                        </li>
                                                    </ul>
                                                    <div class="img-style">
                                                        <img class="lazyload"
                                                            data-src="<?= base_url(); ?>/assets/assets/images/car-list/car25.jpg"
                                                            src="<?= base_url(); ?>/assets/assets/images/car-list/car25.jpg" alt="image">
                                                    </div>
                                                </div>
                                                <div class="content">
                                                    <div class="inner1">
                                                        <div class="text-address">
                                                            <p class="text-color-3 font">Sedan</p>
                                                        </div>
                                                        <h5 class="link-style-1">
                                                            <a href="<?= base_url('list-details-v1'); ?>">2017 BMV X1 xDrive 20d
                                                                xline</a>
                                                        </h5>
                                                        <div class="icon-box flex flex-wrap">
                                                            <div class="icons flex-three">
                                                                <i class="icon-autodeal-km1"></i>
                                                                <span>72,491 kms</span>
                                                            </div>
                                                            <div class="icons flex-three">
                                                                <i class="icon-autodeal-diesel"></i>
                                                                <span>Diesel</span>
                                                            </div>
                                                            <div class="icons flex-three">
                                                                <i class="icon-autodeal-automatic"></i>
                                                                <span>Automatic</span>
                                                            </div>
                                                        </div>
                                                        <div class="money fs-20 fw-5 lh-25 text-color-3">$73,000</div>
                                                        <a href="<?= base_url('list-details-v1'); ?>" class="view-car">View details<i
                                                                class="icon-autodeal-btn-right"></i></a>
                                                    </div>
                                                    <div class="inner2">
                                                        <div class="days-box">
                                                            <div class="img-author">
                                                                <img class="lazyload"
                                                                    data-src="<?= base_url(); ?>/assets/assets/images/author/8.png"
                                                                    src="<?= base_url(); ?>/assets/assets/images/author/8.png" alt="image">
                                                                <span class="font text-color-2 fw-5">Kathryn
                                                                    Murphy</span>
                                                            </div>
                                                            <a href="<?= base_url('list-details-v1'); ?>" class="view-car">View
                                                                car</a>

                                                            <a href="#" class="chat">
                                                                <div class="icon">
                                                                    <svg width="18" height="18" viewBox="0 0 18 18"
                                                                        fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                        <path
                                                                            d="M8.99982 0.875C7.59706 0.874694 6.21811 1.23757 4.9972 1.9283C3.77629 2.61904 2.75501 3.6141 2.03277 4.81664C1.31052 6.01918 0.911915 7.38822 0.875748 8.79052C0.839581 10.1928 1.16709 11.5806 1.82638 12.8188L0.939664 15.4789C0.866215 15.6992 0.855555 15.9355 0.908881 16.1615C0.962207 16.3874 1.07741 16.5941 1.24158 16.7582C1.40575 16.9224 1.61239 17.0376 1.83836 17.0909C2.06432 17.1443 2.30067 17.1336 2.52091 17.0602L5.18107 16.1734C6.27073 16.753 7.47811 17.0767 8.71156 17.12C9.94501 17.1633 11.1721 16.925 12.2997 16.4232C13.4273 15.9215 14.4258 15.1694 15.2194 14.2241C16.0129 13.2789 16.5807 12.1652 16.8796 10.9678C17.1785 9.77029 17.2007 8.52047 16.9445 7.31315C16.6882 6.10584 16.1603 4.97276 15.4008 3.99993C14.6413 3.02711 13.6701 2.24009 12.561 1.69864C11.4519 1.15718 10.234 0.875506 8.99982 0.875ZM8.99982 15.875C7.79121 15.8758 6.6038 15.5575 5.55763 14.9523C5.48104 14.9079 5.39587 14.8803 5.30779 14.8713C5.2197 14.8622 5.13071 14.872 5.0467 14.9L2.12482 15.875L3.09904 12.9531C3.12712 12.8692 3.13705 12.7802 3.12816 12.6921C3.11927 12.604 3.09177 12.5188 3.04748 12.4422C2.28964 11.132 1.98537 9.60827 2.18187 8.10747C2.37837 6.60667 3.06466 5.21267 4.13426 4.14171C5.20387 3.07076 6.597 2.38271 8.09755 2.18431C9.5981 1.98592 11.1222 2.28826 12.4334 3.04444C13.7445 3.80062 14.7695 4.96837 15.3493 6.36652C15.9291 7.76468 16.0313 9.3151 15.64 10.7773C15.2487 12.2394 14.3858 13.5316 13.1852 14.4533C11.9846 15.375 10.5134 15.8748 8.99982 15.875Z"
                                                                            fill="CurrentColor" />
                                                                    </svg>
                                                                </div>
                                                                <span>Chat</span>
                                                            </a>
                                                            <p class="fs-12 lh-16">View 20 variants matching your search
                                                                criteria</p>

                                                        </div>
                                                    </div>
                                                </div>
                                            </div> -->
                            <!-- </div> -->
                            <div class="themesflat-pagination clearfix mt-40">
                                <!-- <ul>
                                    <li><a href="#" class="page-numbers style"><i class="far fa-angle-left"></i></a>
                                    </li>
                                    <li><a href="#" class="page-numbers">1</a></li>
                                    <li><a href="#" class="page-numbers">2</a></li>
                                    <li><a href="#" class="page-numbers current">3</a></li>
                                    <li><a href="#" class="page-numbers">4</a></li>
                                    <li><a href="#" class="page-numbers">...</a></li>
                                    <li><a href="#" class="page-numbers style"><i class="far fa-angle-right"></i></a>
                                    </li>
                                </ul> -->

                                <?= $pagination_links ?>
                            </div>

                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</section>

<?php include('footer.php'); ?>

<script>
$('#filterForm select').on('change', function() {

    // console.log('hello');
    $.ajax({
        url: '<?= base_url("filterVehicles") ?>',
        method: 'POST',
        data: $('#filterForm').serialize(),
        success: function(response) {

            console.log(response);
            $('#vehicleList').html(response);
        }
    });
});
</script>

<script>
$('#clear-filters').on('click', function() {
    // Reset the form
    $('#filterForm')[0].reset();

    // Reset the year slider manually
    if (typeof rangeSlider !== 'undefined' && rangeSlider.noUiSlider) {
        rangeSlider.noUiSlider.set([minYear, maxYear]);
    }

     if (typeof rangeSliders !== 'undefined' && rangeSliders.noUiSlider) {
        rangeSliders.noUiSlider.set([100, 1000000]);
    }

      if (typeof rangeSlider2 !== 'undefined' && rangeSlider2.noUiSlider) {
        rangeSlider2.noUiSlider.set([1000, 50000]);
    }

    // Trigger change on selects to refilter
    $('#filterForm select').trigger('change');
});
</script>