
  <!-- Firebase must be loaded BEFORE your script -->
    <script src="https://www.gstatic.com/firebasejs/9.22.1/firebase-app-compat.js"></script>
    <script src="https://www.gstatic.com/firebasejs/9.22.1/firebase-firestore-compat.js"></script>

<style>
    .notification-box {
        position: relative;
        display: inline-block;
        padding: 10px 20px;
        background-color: #f5f5f5;
        border-radius: 8px;
        font-family: Arial, sans-serif;
        font-size: 16px;
        color: #333;
        box-shadow: 0 0 5px rgba(0,0,0,0.2);
    }

    .notification-box .icon {
        font-size: 20px;
        margin-right: 8px;
    }

    .notification-box .badge {
        position: absolute;
        top: -5px;
        right: -5px;
        background: red;
        color: white;
        font-size: 12px;
        padding: 3px 6px;
        border-radius: 50%;
        font-weight: bold;
    }
</style>
        <div id="themesflat-content">
            <div class="dashboard-toggle">Show DashBoard</div>
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="content-area">
                             <?php if ($this->session->flashdata('success')): ?>
                            <div class="alert alert-success" id="success-msg">
                                <?= $this->session->flashdata('success') ?></div>
                            <?php endif; ?>
                            <main id="main" class="main-content">
                                <div class="tfcl-dashboard">
                                    <h1 class="admin-title">Dashboard</h1>
                                    <div class="tfcl-dashboard-overview">
                                        <div class="row">
                                                <div class="col-sm-6 col-xl-3">
                                        <a class="tfcl-card" href="#">
                                            <div class="card-body">
                                                <div class="tfcl-icon-overview">
                                                    <img src="<?= base_url();?>/assets/assets/images/dashboard/overview1.svg"
                                                        alt="icon">
                                                </div>
                                                <div class="content-overview">
                                                    <h5>Your
                                                        listing</h5>
                                                    <div class="tfcl-dashboard-title">
                                                        <div class="listing-text d-flex">
                                                            <b><?= $total; ?>
                                                            </b>

                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="col-sm-6 col-xl-3">
                                        <a class="tfcl-card" href="#">
                                            <div class="card-body">
                                                <div class="tfcl-icon-overview">
                                                    <img src="<?= base_url();?>/assets/assets/images/dashboard/overview4.svg"
                                                        alt="icon">
                                                </div>
                                                <div class="content-overview">
                                                    <h5>Under Review Vehicle</h5>
                                                    <div class="tfcl-dashboard-title">
                                                        <span><b><?= $under_review; ?></b></span>
                                                    </div>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="col-sm-6 col-xl-3">
                                        <a class="tfcl-card" href="#">
                                            <div class="card-body">
                                                <div class="tfcl-icon-overview">
                                                    <img src="<?= base_url();?>/assets/assets/images/dashboard/overview3.svg"
                                                        alt="icon">
                                                </div>
                                                <div class="content-overview">
                                                    <h5>Active Vehicle</h5>
                                                    <div class="tfcl-dashboard-title">
                                                        <span><b><?= $active; ?></b></span>
                                                    </div>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="col-sm-6 col-xl-3">
                                        <a class="tfcl-card" href="#">
                                            <div class="card-body">
                                                <div class="tfcl-icon-overview">
                                                    <img src="<?= base_url();?>/assets/assets/images/dashboard/overview2.svg"
                                                        alt="icon">
                                                </div>
                                                <div class="content-overview">
                                                    <h5>Reserved</h5>
                                                    <div class="tfcl-dashboard-title">
                                                        <span><b><?= $reserved; ?></b></span>
                                                    </div>
                                                </div>
                                            </div>
                                        </a>
                                    </div>

                                    <div class="col-sm-6 col-xl-3">
                                        <a class="tfcl-card" href="#">
                                            <div class="card-body">
                                                <div class="tfcl-icon-overview">
                                                    <img src="<?= base_url();?>/assets/assets/images/dashboard/overview2.svg"
                                                        alt="icon">
                                                </div>
                                                <div class="content-overview">
                                                    <h5>Sold</h5>
                                                    <div class="tfcl-dashboard-title">
                                                        <span><b><?= $sold; ?></b></span>
                                                    </div>
                                                </div>
                                            </div>
                                        </a>
                                    </div>

                                    <div class="col-sm-6 col-xl-3">
                                        <a class="tfcl-card" href="#">
                                            <div class="card-body">
                                                <div class="tfcl-icon-overview">
                                                    <img src="<?= base_url();?>/assets/assets/images/dashboard/overview2.svg"
                                                        alt="icon">
                                                </div>
                                                <div class="content-overview">
                                                    <h5>Expired</h5>
                                                    <div class="tfcl-dashboard-title">
                                                        <span><b><?= $expired; ?></b></span>
                                                    </div>
                                                </div>
                                            </div>
                                        </a>
                                    </div>

                                    <div class="col-sm-6 col-xl-3">
                                        <a class="tfcl-card" href="<?= base_url(ADMIN_PATH . '/chat-overview'); ?>">
                                            <div class="card-body">
                                                <div class="tfcl-icon-overview">
                                                    <img src="<?= base_url();?>/assets/assets/images/dashboard/overview2.svg"
                                                        alt="icon">
                                                </div>
                                               
                                                <div class="content-overview">
                                                    <!-- <h5>Activity</h5> -->
                                                    <div class="tfcl-dashboard-title">
                                                       <div class="notification-box">
                                                        <span class="icon">📩</span>
                                                        <span class="label">Messages</span>
                                                        <span class="badge" id="unreadCount">0</span>
                                                    </div>
                                                </div>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                        </div>
                                    </div>

                                    <div class="tfcl-dashboard-middle mt-2">
                                        <div class="row">
                                            <div class="tfcl-dashboard-middle-left col-md-12">
                                                <div class="tfcl-dashboard-listing">
                                                    <h5 class="title-dashboard-table">New listing</h5>
                                                    <div class="row">
                                                        <!-- <div class="col-xl-3 col-lg-6 mb-2">
                                                            <div class="group-input-icon search">
                                                                <input type="text" name="title_search" id="title_search"
                                                                    value placeholder="Search...">
                                                                <span class="datepicker-icon">
                                                                    <svg xmlns="http://www.w3.org/2000/svg" width="18"
                                                                        height="18" viewBox="0 0 18 18" fill="none">
                                                                        <path
                                                                            d="M15.7506 15.7506L11.8528 11.8528M11.8528 11.8528C12.9078 10.7979 13.5004 9.36711 13.5004 7.87521C13.5004 6.38331 12.9078 4.95252 11.8528 3.89759C10.7979 2.84265 9.36711 2.25 7.87521 2.25C6.38331 2.25 4.95252 2.84265 3.89759 3.89759C2.84265 4.95252 2.25 6.38331 2.25 7.87521C2.25 9.36711 2.84265 10.7979 3.89759 11.8528C4.95252 12.9078 6.38331 13.5004 7.87521 13.5004C9.36711 13.5004 10.7979 12.9078 11.8528 11.8528Z"
                                                                            stroke="#B6B6B6" stroke-width="1.5"
                                                                            stroke-linecap="round"
                                                                            stroke-linejoin="round"></path>
                                                                    </svg>
                                                                </span>
                                                            </div>
                                                        </div>
                                                        <div class="col-xl-3 col-lg-6 mb-2">
                                                            <div class="group-input-icon">
                                                                <input type="text" id="from-date"
                                                                    class="datetimepicker hasDatepicker"
                                                                    name="from_date" value placeholder="From Date">
                                                                <span class="datepicker-icon">
                                                                    <svg xmlns="http://www.w3.org/2000/svg" width="19"
                                                                        height="18" viewBox="0 0 19 18" fill="none">
                                                                        <path
                                                                            d="M5.5625 2.25V3.9375M13.4375 2.25V3.9375M2.75 14.0625V5.625C2.75 5.17745 2.92779 4.74823 3.24426 4.43176C3.56072 4.11529 3.98995 3.9375 4.4375 3.9375H14.5625C15.0101 3.9375 15.4393 4.11529 15.7557 4.43176C16.0722 4.74823 16.25 5.17745 16.25 5.625V14.0625M2.75 14.0625C2.75 14.5101 2.92779 14.9393 3.24426 15.2557C3.56072 15.5722 3.98995 15.75 4.4375 15.75H14.5625C15.0101 15.75 15.4393 15.5722 15.7557 15.2557C16.0722 14.9393 16.25 14.5101 16.25 14.0625M2.75 14.0625V8.4375C2.75 7.98995 2.92779 7.56073 3.24426 7.24426C3.56072 6.92779 3.98995 6.75 4.4375 6.75H14.5625C15.0101 6.75 15.4393 6.92779 15.7557 7.24426C16.0722 7.56073 16.25 7.98995 16.25 8.4375V14.0625M9.5 9.5625H9.506V9.5685H9.5V9.5625ZM9.5 11.25H9.506V11.256H9.5V11.25ZM9.5 12.9375H9.506V12.9435H9.5V12.9375ZM7.8125 11.25H7.8185V11.256H7.8125V11.25ZM7.8125 12.9375H7.8185V12.9435H7.8125V12.9375ZM6.125 11.25H6.131V11.256H6.125V11.25ZM6.125 12.9375H6.131V12.9435H6.125V12.9375ZM11.1875 9.5625H11.1935V9.5685H11.1875V9.5625ZM11.1875 11.25H11.1935V11.256H11.1875V11.25ZM11.1875 12.9375H11.1935V12.9435H11.1875V12.9375ZM12.875 9.5625H12.881V9.5685H12.875V9.5625ZM12.875 11.25H12.881V11.256H12.875V11.25Z"
                                                                            stroke="#B6B6B6" stroke-linecap="round"
                                                                            stroke-linejoin="round"></path>
                                                                    </svg>
                                                                </span>
                                                            </div>
                                                        </div>
                                                        <div class="col-xl-3 col-lg-6 mb-2">
                                                            <div class="group-input-icon">
                                                                <input type="text" id="to-date"
                                                                    class="datetimepicker hasDatepicker" name="to_date"
                                                                    value placeholder="To Date">
                                                                <span class="datepicker-icon">
                                                                    <svg xmlns="http://www.w3.org/2000/svg" width="19"
                                                                        height="18" viewBox="0 0 19 18" fill="none">
                                                                        <path
                                                                            d="M5.5625 2.25V3.9375M13.4375 2.25V3.9375M2.75 14.0625V5.625C2.75 5.17745 2.92779 4.74823 3.24426 4.43176C3.56072 4.11529 3.98995 3.9375 4.4375 3.9375H14.5625C15.0101 3.9375 15.4393 4.11529 15.7557 4.43176C16.0722 4.74823 16.25 5.17745 16.25 5.625V14.0625M2.75 14.0625C2.75 14.5101 2.92779 14.9393 3.24426 15.2557C3.56072 15.5722 3.98995 15.75 4.4375 15.75H14.5625C15.0101 15.75 15.4393 15.5722 15.7557 15.2557C16.0722 14.9393 16.25 14.5101 16.25 14.0625M2.75 14.0625V8.4375C2.75 7.98995 2.92779 7.56073 3.24426 7.24426C3.56072 6.92779 3.98995 6.75 4.4375 6.75H14.5625C15.0101 6.75 15.4393 6.92779 15.7557 7.24426C16.0722 7.56073 16.25 7.98995 16.25 8.4375V14.0625M9.5 9.5625H9.506V9.5685H9.5V9.5625ZM9.5 11.25H9.506V11.256H9.5V11.25ZM9.5 12.9375H9.506V12.9435H9.5V12.9375ZM7.8125 11.25H7.8185V11.256H7.8125V11.25ZM7.8125 12.9375H7.8185V12.9435H7.8125V12.9375ZM6.125 11.25H6.131V11.256H6.125V11.25ZM6.125 12.9375H6.131V12.9435H6.125V12.9375ZM11.1875 9.5625H11.1935V9.5685H11.1875V9.5625ZM11.1875 11.25H11.1935V11.256H11.1875V11.25ZM11.1875 12.9375H11.1935V12.9435H11.1875V12.9375ZM12.875 9.5625H12.881V9.5685H12.875V9.5625ZM12.875 11.25H12.881V11.256H12.875V11.25Z"
                                                                            stroke="#B6B6B6" stroke-linecap="round"
                                                                            stroke-linejoin="round"></path>
                                                                    </svg>
                                                                </span>
                                                            </div>
                                                        </div> -->
                                                        <div class="col-xl-3 col-lg-6 mb-2">
                                                    
                                              <?php
                                                $status_options = [
                                                    'all' => 'All Statuses',
                                                    0 => 'Under Review',
                                                    1 => 'Active',
                                                    2 => 'Reserved',
                                                    3 => 'Sold',
                                                    4 => 'Expired'
                                                ];
                                                // $current_status = $this->input->get('post_status');
                                                $current_status = isset($current_status) ? $current_status : 'all';
                                                ?>
                                                <form method="post" action="" class="mb-3">
                                                            <select name="post_status" class="nice-select form-control" onchange="this.form.submit()">
                                                                <?php foreach ($status_options as $key => $label): ?>
                                                                    <option value="<?= $key ?>" <?= ($current_status !== null && $current_status !== '' && $current_status == $key) ? 'selected' : '' ?>>
                                                                        <?= $label ?>
                                                                    </option>
                                                                <?php endforeach; ?>
                                                            </select>
                                                </form>
                                            </div>
                                                    </div>

                                                    <div class="tfcl-table-listing">
                                                        <div class="table-responsive">
                                                            <!-- <span class="result-text"><b>16</b> results found</span> -->
                                                             <table id="example" class="cell-border">
                                                        <thead>
                                                            <tr>
                                                                <th>Listing</th>
                                                                <th>Status</th>
                                                                <th>Posting date</th>
                                                                <th>Action</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            <?php foreach($details as $detail){  
                                                            $original_date = $detail->created_at;
                                                            $posting_date = date("F d, Y", strtotime($original_date));
                                                            
                                                             $vehicle_images = $this->db->get_where('car_img', ['car_list_id' => $detail->id])->result();
                                                            
                                                           $makes = $this->db
                                                            ->select('make.name as make_name, model.name as model_name, variants.name as variant_name')
                                                            ->from('variants')
                                                            ->join('model', 'variants.model_id = model.id')
                                                            ->join('make', 'model.make_id = make.id')
                                                            ->where('variants.id', $detail->variant) // yahaan variant ID match karo
                                                            ->get()
                                                            ->result();

                                                            ?>
                                                            <tr>
                                                                <td class="column-listing">
                                                                    <div class="tfcl-listing-product">
                                                                        <a href="#">
                                                                            <img src="<?= base_url('uploads/'. @$vehicle_images[0]->photos); ?>"
                                                                                        alt="image">
                                                                        </a>
                                                                        <div class="tfcl-listing-summary">
                                                                            <h4 class="tfcl-listing-title"> 
                                                                                <?php foreach($makes as $make): ?>
                                                                                    <a target="_blank" href="listing-detail-v1.html">
                                                                                        <?= $detail->year . " " ?>
                                                                                        <?= $make->make_name . " " ?>
                                                                                        <?= $make->model_name . " " ?>
                                                                                        <?= $detail->mileage . "km" ?>
                                                                                    </a>
                                                                                <?php endforeach; ?>
                                                                            </h4>
                                                                            <div class="features-text">
                                                                                <?= $detail->vehicle_condition , " "; ?>
                                                                                <?= $detail->transmission; ?>
                                                                            </div>
                                                                            <div class="price">
                                                                                <div class="inner tfcl-listing-price">
                                                                                    CHF <?= $detail->price; ?>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </td>
                                                                <td class="column-status">
                                                                    <?php if($detail->status==0){?>
                                                                    <span class="tfcl-listing-status status-publish">
                                                                        Under Review
                                                                    </span>
                                                                    <?php }elseif($detail->status==1){ ?>
                                                                    <span class="tfcl-listing-status status-publish">
                                                                        Active
                                                                    </span>
                                                                    <?php }elseif($detail->status==2){ ?>
                                                                    <span class="tfcl-listing-status status-publish">
                                                                        Reserved
                                                                    </span>
                                                                    <?php  }elseif($detail->status==3){ ?>
                                                                    <span class="tfcl-listing-status status-publish">
                                                                        Sold
                                                                    </span>
                                                                    <?php } elseif($detail->status==4){ ?>
                                                                    <span class="tfcl-listing-status status-publish">
                                                                        Expired
                                                                    </span>
                                                                    <?php } ?>


                                                                </td>
                                                                <td class="column-date">
                                                                    <div class="tfcl-listing-date"><?= $posting_date; ?>
                                                                    </div>
                                                                </td>
                                                                <td class="column-controller">
                                                                    <div class="inner-controller">
                                                                        <span class="icon">
                                                                            <img src="<?= base_url(); ?>/assets/assets/images/dashboard/pen.svg"
                                                                                alt="icon">
                                                                        </span>
                                                                        <a href="<?= base_url(ADMIN_PATH . '/'); ?>edit-listing/<?php echo $detail->id; ?>"
                                                                            class="btn-action tfcl-dashboard-action-edit">Edit</a>
                                                                    </div>

                                                                       <div class="inner-controller">
                                                                        <span class="icon">
                                                                            <img src="<?= base_url(); ?>/assets/assets/images/dashboard/pen.svg"
                                                                                alt="icon">
                                                                        </span>
                                                                        <a href="<?= base_url(ADMIN_PATH . '/'); ?>duplicate-listing/<?php echo $detail->id; ?>"
                                                                            class="btn-action tfcl-dashboard-action-edit">Duplicate</a>
                                                                    </div>


                                                                      <?php 
                                                                      if($_SESSION['role_name']== "Admin"){
                                                                      if($detail->status==0){ ?>  
                                                                    <div class="inner-controller">
                                                                        <span class="icon">
                                                                            <img src="<?= base_url(); ?>/assets/assets/images/dashboard/hide.svg"
                                                                                alt="icon">
                                                                        </span>
                                                                        <a href="javascript:void(0);"
                                                                            class="btn-action tfcl-dashboard-action-edit update-status-btn"
                                                                            data-id="<?= $detail->id ?>"
                                                                            data-table="car_list" data-key="id"
                                                                            data-status="1"
                                                                            data-redirect="<?= base_url(ADMIN_PATH  . '/my-listing') ?>"
                                                                            data-message="Are you sure you want to mark this vehicle as Active?">
                                                                            Active
                                                                        </a>
                                                                    </div>
                                                                    <?php }else{ ?>

                                                                         <div class="inner-controller">
                                                                        <span class="icon">
                                                                            <img src="<?= base_url(); ?>/assets/assets/images/dashboard/hide.svg"
                                                                                alt="icon">
                                                                        </span>
                                                                        <a href="javascript:void(0);"
                                                                            class="btn-action tfcl-dashboard-action-edit update-status-btn"
                                                                            data-id="<?= $detail->id ?>"
                                                                            data-table="car_list" data-key="id"
                                                                            data-status="0"
                                                                            data-redirect="<?= base_url(ADMIN_PATH  . '/my-listing') ?>"
                                                                            data-message="Are you sure you want to mark this vehicle as Inactive?">
                                                                            Inactive
                                                                        </a>
                                                                    </div>
                                                                        <?php } } ?>
                                                                        <!-- under review:0 , active: 1, reserved:2, sold:3, expired:4 -->
                                                                         <?php
                                                                         if(($_SESSION['role_name'] != "Seller") && ($detail->status != 3)){ ?>  
                                                                    <div class="inner-controller">
                                                                        <span class="icon">
                                                                            <img src="<?= base_url(); ?>/assets/assets/images/dashboard/hide.svg"
                                                                                alt="icon">
                                                                        </span>
                                                                        <a href="javascript:void(0);"
                                                                            class="btn-action tfcl-dashboard-action-edit update-status-btn"
                                                                            data-id="<?= $detail->id ?>"
                                                                            data-table="car_list" data-key="id"
                                                                            data-status="3"
                                                                            data-redirect="<?= base_url(ADMIN_PATH  . '/my-listing') ?>"
                                                                            data-message="Are you sure you want to mark this vehicle as Sold?">
                                                                            Sold
                                                                        </a>
                                                                    </div>
                                                                    <?php } ?>

                                                                    <div class="inner-controller">
                                                                        <span class="icon">
                                                                            <img src="<?= base_url(); ?>/assets/assets/images/dashboard/trash.svg"
                                                                                alt="icon">
                                                                        </span>
                                                                        <a href="javascript:void(0);" 
                                                                                class="btn-action delete-record" 
                                                                                data-id="<?= $detail->id ?>" 
                                                                                data-url="<?= base_url('dealer/delete-vehicle-record') ?>" 
                                                                                data-table="car_list" 
                                                                                data-key="id" 
                                                                                data-redirect="<?= base_url(ADMIN_PATH  . '/my-listing') ?>">
                                                                                Delete
                                                                                </a>
                                                                    </div>
                                                                </td>

                                                            </tr>

                                                            <?php } ?>
                                                        </tbody>
                                                        <tfoot>
                                                            <tr>
                                                                <th>Listing</th>
                                                                <th>Status</th>
                                                                <th>Posting date</th>
                                                                <th>Action</th>
                                                            </tr>
                                                        </tfoot>
                                                    </table>
                                                        </div>
                                                        <!-- <div class="tfcl-pagination paging-navigation clearfix">
                                                            <a class="prev page-numbers" href="#"><i
                                                                    class="far fa-angle-left"></i></a>
                                                            <a class="page-numbers" href="#">1</a>
                                                            <a class="page-numbers" href="#">2</a>
                                                            <a class="page-numbers current" href="#">3</a>
                                                            <a class="page-numbers" href="#">4</a>
                                                            <a class="page-numbers" href="#">...</a>
                                                            <a class="next page-numbers" href="#"><i
                                                                    class="far fa-angle-right"></i></a>
                                                        </div> -->
                                                    </div>

                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- <div class="tfcl-page-insight tfcl-dashboard-listing">
                                        <h5 class="mb-2">Page Insights</h5>
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="group-insight-controller">
                                                    <div class="group-btn-insignt">
                                                        <button>Day</button>
                                                        <button>Week</button>
                                                        <button>Month</button>
                                                        <button>Year</button>
                                                    </div>
                                                    <div class="group-input-insight">
                                                        <div class="group-input-icon">
                                                            <input type="text" id="from-date"
                                                                class="datetimepicker hasDatepicker" name="from_date"
                                                                value placeholder="From Date">
                                                            <span class="datepicker-icon">
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="19"
                                                                    height="18" viewBox="0 0 19 18" fill="none">
                                                                    <path
                                                                        d="M5.5625 2.25V3.9375M13.4375 2.25V3.9375M2.75 14.0625V5.625C2.75 5.17745 2.92779 4.74823 3.24426 4.43176C3.56072 4.11529 3.98995 3.9375 4.4375 3.9375H14.5625C15.0101 3.9375 15.4393 4.11529 15.7557 4.43176C16.0722 4.74823 16.25 5.17745 16.25 5.625V14.0625M2.75 14.0625C2.75 14.5101 2.92779 14.9393 3.24426 15.2557C3.56072 15.5722 3.98995 15.75 4.4375 15.75H14.5625C15.0101 15.75 15.4393 15.5722 15.7557 15.2557C16.0722 14.9393 16.25 14.5101 16.25 14.0625M2.75 14.0625V8.4375C2.75 7.98995 2.92779 7.56073 3.24426 7.24426C3.56072 6.92779 3.98995 6.75 4.4375 6.75H14.5625C15.0101 6.75 15.4393 6.92779 15.7557 7.24426C16.0722 7.56073 16.25 7.98995 16.25 8.4375V14.0625M9.5 9.5625H9.506V9.5685H9.5V9.5625ZM9.5 11.25H9.506V11.256H9.5V11.25ZM9.5 12.9375H9.506V12.9435H9.5V12.9375ZM7.8125 11.25H7.8185V11.256H7.8125V11.25ZM7.8125 12.9375H7.8185V12.9435H7.8125V12.9375ZM6.125 11.25H6.131V11.256H6.125V11.25ZM6.125 12.9375H6.131V12.9435H6.125V12.9375ZM11.1875 9.5625H11.1935V9.5685H11.1875V9.5625ZM11.1875 11.25H11.1935V11.256H11.1875V11.25ZM11.1875 12.9375H11.1935V12.9435H11.1875V12.9375ZM12.875 9.5625H12.881V9.5685H12.875V9.5625ZM12.875 11.25H12.881V11.256H12.875V11.25Z"
                                                                        stroke="#B6B6B6" stroke-linecap="round"
                                                                        stroke-linejoin="round"></path>
                                                                </svg>
                                                            </span>
                                                        </div>
                                                        <div class="group-input-icon">
                                                            <input type="text" id="from-date"
                                                                class="datetimepicker hasDatepicker" name="from_date"
                                                                value placeholder="To date">
                                                            <span class="datepicker-icon">
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="19"
                                                                    height="18" viewBox="0 0 19 18" fill="none">
                                                                    <path
                                                                        d="M5.5625 2.25V3.9375M13.4375 2.25V3.9375M2.75 14.0625V5.625C2.75 5.17745 2.92779 4.74823 3.24426 4.43176C3.56072 4.11529 3.98995 3.9375 4.4375 3.9375H14.5625C15.0101 3.9375 15.4393 4.11529 15.7557 4.43176C16.0722 4.74823 16.25 5.17745 16.25 5.625V14.0625M2.75 14.0625C2.75 14.5101 2.92779 14.9393 3.24426 15.2557C3.56072 15.5722 3.98995 15.75 4.4375 15.75H14.5625C15.0101 15.75 15.4393 15.5722 15.7557 15.2557C16.0722 14.9393 16.25 14.5101 16.25 14.0625M2.75 14.0625V8.4375C2.75 7.98995 2.92779 7.56073 3.24426 7.24426C3.56072 6.92779 3.98995 6.75 4.4375 6.75H14.5625C15.0101 6.75 15.4393 6.92779 15.7557 7.24426C16.0722 7.56073 16.25 7.98995 16.25 8.4375V14.0625M9.5 9.5625H9.506V9.5685H9.5V9.5625ZM9.5 11.25H9.506V11.256H9.5V11.25ZM9.5 12.9375H9.506V12.9435H9.5V12.9375ZM7.8125 11.25H7.8185V11.256H7.8125V11.25ZM7.8125 12.9375H7.8185V12.9435H7.8125V12.9375ZM6.125 11.25H6.131V11.256H6.125V11.25ZM6.125 12.9375H6.131V12.9435H6.125V12.9375ZM11.1875 9.5625H11.1935V9.5685H11.1875V9.5625ZM11.1875 11.25H11.1935V11.256H11.1875V11.25ZM11.1875 12.9375H11.1935V12.9435H11.1875V12.9375ZM12.875 9.5625H12.881V9.5685H12.875V9.5625ZM12.875 11.25H12.881V11.256H12.875V11.25Z"
                                                                        stroke="#B6B6B6" stroke-linecap="round"
                                                                        stroke-linejoin="round"></path>
                                                                </svg>
                                                            </span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="map-chart">
                                            <canvas id="lineChart" width="1400" height="502"></canvas>
                                        </div>


                                    </div>

                                    <div class="tfcl-dashboard-middle-right">
                                        <div class="tfcl-card tfcl-dashboard-reviews">
                                            <h5>Recent Reviews</h5>
                                            <ul>
                                                <li class="comment-by-user">
                                                    <div class="group-author">
                                                        <img loading="lazy" class="avatar" width="56" height="56"
                                                            src="<?= base_url();?>/assets/assets/images/dashboard/rate4.png" alt="avatar">
                                                        <div class="group-name">
                                                            <div class="review-name">
                                                                <b>Bessie Cooper</b> <span class="review-date">3 days
                                                                    ago</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="content">
                                                        <p>Maecenas eu lorem et urna accumsan vestibulum vel vitae
                                                            magna. </p>
                                                    </div>
                                                    <div class="rating-wrap">
                                                        <div class="form-group">
                                                            <div class="star-rating-review">
                                                                <i class="star disabled-click icon-autodeal-star  active"
                                                                    data-rating="1"></i>
                                                                <i class="star disabled-click icon-autodeal-star  active"
                                                                    data-rating="2"></i>
                                                                <i class="star disabled-click icon-autodeal-star  active"
                                                                    data-rating="3"></i>
                                                                <i class="star disabled-click icon-autodeal-star  active"
                                                                    data-rating="4"></i>
                                                                <i class="star disabled-click icon-autodeal-star  active"
                                                                    data-rating="5"></i>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li class="comment-by-user">
                                                    <div class="group-author">
                                                        <img loading="lazy" class="avatar" width="56" height="56"
                                                            src="<?= base_url();?>/assets/assets/images/dashboard/rate3.png" alt="avatar">
                                                        <div class="group-name">
                                                            <div class="review-name">
                                                                <b>Annette Black</b> <span class="review-date">3 days
                                                                    ago</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="content">
                                                        <p>Nullam rhoncus dolor arcu, et commodo tellus semper vitae.
                                                            Aenean finibus tristique lectus, ac lobortis mauris
                                                            venenatis ac. </p>
                                                    </div>
                                                    <div class="rating-wrap">
                                                        <div class="form-group">
                                                            <div class="star-rating-review">
                                                                <i class="star disabled-click icon-autodeal-star  active"
                                                                    data-rating="1"></i>
                                                                <i class="star disabled-click icon-autodeal-star  active"
                                                                    data-rating="2"></i>
                                                                <i class="star disabled-click icon-autodeal-star  active"
                                                                    data-rating="3"></i>
                                                                <i class="star disabled-click icon-autodeal-star  active"
                                                                    data-rating="4"></i>
                                                                <i class="star disabled-click icon-autodeal-star  active"
                                                                    data-rating="5"></i>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li class="comment-by-user">
                                                    <div class="group-author">
                                                        <img loading="lazy" class="avatar" width="56" height="56"
                                                            src="<?= base_url();?>/assets/assets/images/dashboard/rate2.png" alt="avatar">
                                                        <div class="group-name">
                                                            <div class="review-name">
                                                                <b>Ralph Edwards</b> <span class="review-date">3 days
                                                                    ago</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="content">
                                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                                                            Vivamus viverra semper convallis. Integer vestibulum tempus
                                                            tincidunt. </p>
                                                    </div>
                                                    <div class="rating-wrap">
                                                        <div class="form-group">
                                                            <div class="star-rating-review">
                                                                <i class="star disabled-click icon-autodeal-star  active"
                                                                    data-rating="1"></i>
                                                                <i class="star disabled-click icon-autodeal-star  active"
                                                                    data-rating="2"></i>
                                                                <i class="star disabled-click icon-autodeal-star  active"
                                                                    data-rating="3"></i>
                                                                <i class="star disabled-click icon-autodeal-star  active"
                                                                    data-rating="4"></i>
                                                                <i class="star disabled-click icon-autodeal-star  active"
                                                                    data-rating="5"></i>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li class="comment-by-user">
                                                    <div class="group-author">
                                                        <img loading="lazy" class="avatar" width="56" height="56"
                                                            src="<?= base_url();?>/assets/assets/images/dashboard/rate1.png" alt="avatar">
                                                        <div class="group-name">
                                                            <div class="review-name">
                                                                <b>Jerome Bell</b> <span class="review-date">3 days
                                                                    ago</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="content">
                                                        <p>Fusce sit amet purus eget quam eleifend hendrerit nec a erat.
                                                            Sed turpis neque, iaculis blandit viverra ut, dapibus eget
                                                            nisi. </p>
                                                    </div>
                                                    <div class="rating-wrap">
                                                        <div class="form-group">
                                                            <div class="star-rating-review">
                                                                <i class="star disabled-click icon-autodeal-star  active"
                                                                    data-rating="1"></i>
                                                                <i class="star disabled-click icon-autodeal-star  active"
                                                                    data-rating="2"></i>
                                                                <i class="star disabled-click icon-autodeal-star  active"
                                                                    data-rating="3"></i>
                                                                <i class="star disabled-click icon-autodeal-star  active"
                                                                    data-rating="4"></i>
                                                                <i class="star disabled-click icon-autodeal-star  active"
                                                                    data-rating="5"></i>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>
                                    </div> -->

                                </div>
                            </main>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
<script src="https://code.jquery.com/jquery-3.7.1.js"></script>
<script src="https://cdn.datatables.net/2.3.1/js/dataTables.js"></script>
<link rel="stylesheet" href="https://cdn.datatables.net/2.3.1/css/dataTables.dataTables.css">
<script>
new DataTable('#example');
</script>

<script>
    const updateStatusUrl = "<?= base_url('dealer/update-status') ?>";
</script>
<script>
$(document).ready(function() {
    setTimeout(function() {
        $('#success-msg').fadeOut('slow');
    }, 3000); // 3000ms = 3 seconds
});
</script>

<script>
    const currentUserId = "<?= (string)$_SESSION['user_id'] ?>";

    const firebaseConfig = {
        apiKey: "AIzaSyD0TUv5KLfBy6qCfVNwOaaf98-AU813x7I",
        authDomain: "autokorb-f0b82.firebaseapp.com",
        projectId: "autokorb-f0b82",
    };

    firebase.initializeApp(firebaseConfig);
    const db = firebase.firestore();

    function updateUnreadCount(count) {
        const badge = document.getElementById("unreadCount");
        badge.innerText = count;

        if (count === 0) {
            badge.style.display = "none"; // hide badge if 0
        } else {
            badge.style.display = "inline-block"; // show badge
        }
    }

    db.collection("chats").onSnapshot((snapshot) => {
        let totalUnread = 0;
        const chats = snapshot.docs.filter(doc => {
            const data = doc.data();
            const participants = data.participants || [];
            return participants.includes(currentUserId);
        });

        let processed = 0;

        chats.forEach(chat => {
            db.collection("chats")
              .doc(chat.id)
              .collection("messages")
              .where("receiver_id", "==", currentUserId)
              .where("is_read", "==", false)
              .get()
              .then(querySnapshot => {
                  totalUnread += querySnapshot.size;
                  processed++;

                  if (processed === chats.length) {
                      updateUnreadCount(totalUnread);
                  }
              });
        });

        if (chats.length === 0) {
            updateUnreadCount(0);
        }
    });
</script>
