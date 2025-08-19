<div id="themesflat-content">
    <div class="dashboard-toggle">Show DashBoard</div>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="content-area">
                    <main id="main" class="main-content">
                        <div class="tfcl-dashboard">
                            <h1 class="admin-title mb-3">My listing</h1>
                            <?php if ($this->session->flashdata('success')): ?>
                            <div class="alert alert-success" id="success-msg">
                                <?= $this->session->flashdata('success') ?></div>
                            <?php endif; ?>
                            <div class="tfcl-dashboard-middle mt-2">
                                <div class="row">
                                    <div class="tfcl-dashboard-middle-left col-md-12">
                                        <div class="tfcl-dashboard-listing">
                                            <div class="row">
                                                <div class="col-xl-3 col-lg-6 mb-2">
                                                    <div class="group-input-icon search">
                                                        <input type="text" name="title_search" id="title_search" value
                                                            placeholder="Search...">
                                                        <span class="datepicker-icon">
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="18"
                                                                height="18" viewBox="0 0 18 18" fill="none">
                                                                <path
                                                                    d="M15.7506 15.7506L11.8528 11.8528M11.8528 11.8528C12.9078 10.7979 13.5004 9.36711 13.5004 7.87521C13.5004 6.38331 12.9078 4.95252 11.8528 3.89759C10.7979 2.84265 9.36711 2.25 7.87521 2.25C6.38331 2.25 4.95252 2.84265 3.89759 3.89759C2.84265 4.95252 2.25 6.38331 2.25 7.87521C2.25 9.36711 2.84265 10.7979 3.89759 11.8528C4.95252 12.9078 6.38331 13.5004 7.87521 13.5004C9.36711 13.5004 10.7979 12.9078 11.8528 11.8528Z"
                                                                    stroke="#B6B6B6" stroke-width="1.5"
                                                                    stroke-linecap="round" stroke-linejoin="round">
                                                                </path>
                                                            </svg>
                                                        </span>
                                                    </div>
                                                </div>
                                                <div class="col-xl-3 col-lg-6 mb-2">
                                                    <div class="group-input-icon">
                                                        <input type="text" id="from-date"
                                                            class="datetimepicker hasDatepicker" name="from_date" value
                                                            placeholder="From Date">
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
                                                            class="datetimepicker hasDatepicker" name="to_date" value
                                                            placeholder="To Date">
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
                                                    <?php
                                                        $status_options = [
                                                            'all' => 'All Statuses',
                                                            0 => 'Under Review',
                                                            1 => 'Active',
                                                            2 => 'Reserved',
                                                            3 => 'Sold',
                                                            4 => 'Expired'
                                                        ];
                                                        $current_status = isset($current_status) ? $current_status : 'all';
                                                        ?>
                                                    <form method="post" action="" class="mb-3">
                                                        <select name="post_status" class="nice-select form-control"
                                                            onchange="this.form.submit()">
                                                            <?php foreach ($status_options as $key => $label): ?>
                                                            <option value="<?= $key ?>"
                                                                <?= ($current_status !== null && (string)$current_status === (string)$key) ? 'selected' : '' ?>>
                                                                <?= $label ?>
                                                            </option>
                                                            <?php endforeach; ?>
                                                        </select>
                                                    </form>
                                                </div>
                                            </div>

                                            <div class="tfcl-table-listing">
                                                <div class="table-responsive">

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

                                                            //  $detail->vehicle_images = $this->db->get_where('car_img', ['car_list_id' => $detail->id])->result();
                                                             $vehicle_images = $this->db->get_where('car_img', ['car_list_id' => $detail->id])->result();

                                                            ?>
                                                            <tr>
                                                                <td class="column-listing">
                                                                    <div class="tfcl-listing-product">
                                                                        <a href="#">
                                                                                    <img src="<?= base_url('uploads/'.  @$vehicle_images[0]->photos); ?>"
                                                                                        alt="image">
                                                                                </a>

                                                                                 <!-- Bootstrap Carousel Start -->
                                                                        <!-- <div id="carousel-<?= $detail->id ?>" class="carousel slide" data-bs-ride="carousel">
                                                                            <div class="carousel-inner">
                                                                                <?php foreach ($detail->vehicle_images as $index => $img): ?>
                                                                                    <div class="carousel-item <?= ($index == 0) ? 'active' : '' ?>">
                                                                                        <img src="<?= base_url('uploads/') . $img->photos ?>" class="d-block w-100" alt="Vehicle Image" style="height:100px; object-fit:cover;">
                                                                                    </div>
                                                                                <?php endforeach; ?>
                                                                            </div>
                                                                            <button class="carousel-control-prev" type="button" data-bs-target="#carousel-<?= $detail->id ?>" data-bs-slide="prev">
                                                                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                                                            </button>
                                                                            <button class="carousel-control-next" type="button" data-bs-target="#carousel-<?= $detail->id ?>" data-bs-slide="next">
                                                                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                                                            </button>
                                                                        </div> -->
                                                                        <!-- Bootstrap Carousel End -->

                                                                        <div class="tfcl-listing-summary">
                                                                            <h4 class="tfcl-listing-title">
                                                                                <a target="_blank"
                                                                                    href="listing-detail-v1.html"><?= $detail->year, " "; ?>
                                                                                    <?= $detail->make , " "; ?><?= $detail->model , " "; ?>
                                                                                    <?= $detail->mileage , " "; ?> </a>
                                                                            </h4>
                                                                            <div class="features-text">
                                                                                <?= $detail->vehicle_condition , " "; ?>
                                                                                <?= $detail->transmission; ?>
                                                                            </div>
                                                                            <div class="price">
                                                                                <div class="inner tfcl-listing-price">
                                                                                    ₹<?= $detail->price; ?>
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
                                                                        <a href="<?= base_url('dealer/'); ?>edit-listing/<?php echo $detail->id; ?>"
                                                                            class="btn-action tfcl-dashboard-action-edit">Edit</a>
                                                                    </div>
                                                                     <?php if($detail->status !=3){ ?>
                                                                    <div class="inner-controller">
                                                                        <span class="icon">
                                                                            <img src="<?= base_url(); ?>/assets/assets/images/dashboard/hide.svg"
                                                                                alt="icon">
                                                                        </span>
                                                                       <a href="javascript:void(0);" 
                                                                        class="btn-action tfcl-dashboard-action-edit update-status-btn"
                                                                        data-id="<?= $detail->id ?>"
                                                                        data-table="car_list"
                                                                        data-key="id"
                                                                        data-status="3" 
                                                                        data-redirect="<?= base_url('dealer/my-listing') ?>"
                                                                        data-message="Are you sure you want to mark this vehicle as Sold?">
                                                                        Sold
                                                                        </a>
                                                                    </div>
                                                                    <?php }?>
                                                                    <div class="inner-controller">
                                                                        <span class="icon">
                                                                            <img src="<?= base_url(); ?>/assets/assets/images/dashboard/trash.svg"
                                                                                alt="icon">
                                                                        </span>
                                                                        <!-- <a href="#"
                                                                            class="btn-action tfcl-dashboard-action-edit">Delete</a> -->

                                                                            <a href="javascript:void(0);" 
                                                                                class="btn-action delete-record" 
                                                                                data-id="<?= $detail->id ?>" 
                                                                                data-url="<?= base_url('dealer/delete-vehicle-record') ?>" 
                                                                                data-table="car_list" 
                                                                                data-key="id" 
                                                                                data-redirect="<?= base_url('dealer/my-listing') ?>">
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
                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </main>
                </div>
            </div>
        </div>
    </div>
</div>

</div>

<!-- Modal Popup Bid -->

<!-- <div class="modal fade popup login-form" id="popup_bid" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
            <div class="modal-body space-y-20 pd-40">
                <div class="wrap-modal flex">
                    <div class="images flex-none">
                        <img src="<?= base_url(); ?>/assets/assets/images/section/login.jpg" alt="images">
                    </div>
                    <div class="content">
                        <h1 class="title-login">Login</h1>
                        <div class="comments">
                            <div class="respond-comment">
                                <form method="post" class="comment-form form-submit" action="#" accept-charset="utf-8">
                                    <fieldset class="">
                                        <label class="fw-6">Account</label>
                                        <input type="text" id="text" class="tb-my-input" name="text"
                                            placeholder="Your name">
                                        <div class="icon">
                                            <svg width="18" height="18" viewBox="0 0 18 18" fill="none"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M11.8127 4.5C11.8127 5.24592 11.5164 5.96129 10.989 6.48874C10.4615 7.01618 9.74615 7.3125 9.00023 7.3125C8.25431 7.3125 7.53893 7.01618 7.01149 6.48874C6.48404 5.96129 6.18773 5.24592 6.18773 4.5C6.18773 3.75408 6.48404 3.03871 7.01149 2.51126C7.53893 1.98382 8.25431 1.6875 9.00023 1.6875C9.74615 1.6875 10.4615 1.98382 10.989 2.51126C11.5164 3.03871 11.8127 3.75408 11.8127 4.5ZM3.37598 15.0885C3.40008 13.6128 4.00323 12.2056 5.05536 11.1705C6.10749 10.1354 7.52429 9.55535 9.00023 9.55535C10.4762 9.55535 11.893 10.1354 12.9451 11.1705C13.9972 12.2056 14.6004 13.6128 14.6245 15.0885C12.86 15.8976 10.9413 16.3151 9.00023 16.3125C6.99323 16.3125 5.08823 15.8745 3.37598 15.0885Z"
                                                    stroke="#B6B6B6" stroke-width="1.5" stroke-linecap="round"
                                                    stroke-linejoin="round" />
                                            </svg>
                                        </div>
                                    </fieldset>
                                    <fieldset class="style-wrap">
                                        <label class="fw-6">Password</label>
                                        <input type="password" class="input-form password-input"
                                            placeholder="Your password">
                                        <div class="icon">
                                            <svg width="18" height="18" viewBox="0 0 18 18" fill="none"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M12.375 7.875V5.0625C12.375 4.16739 12.0194 3.30895 11.3865 2.67601C10.7535 2.04308 9.89511 1.6875 9 1.6875C8.10489 1.6875 7.24645 2.04308 6.61351 2.67601C5.98058 3.30895 5.625 4.16739 5.625 5.0625V7.875M5.0625 16.3125H12.9375C13.3851 16.3125 13.8143 16.1347 14.1307 15.8182C14.4472 15.5018 14.625 15.0726 14.625 14.625V9.5625C14.625 9.11495 14.4472 8.68573 14.1307 8.36926C13.8143 8.05279 13.3851 7.875 12.9375 7.875H5.0625C4.61495 7.875 4.18573 8.05279 3.86926 8.36926C3.55279 8.68573 3.375 9.11495 3.375 9.5625V14.625C3.375 15.0726 3.55279 15.5018 3.86926 15.8182C4.18573 16.1347 4.61495 16.3125 5.0625 16.3125Z"
                                                    stroke="#B6B6B6" stroke-width="1.5" stroke-linecap="round"
                                                    stroke-linejoin="round" />
                                            </svg>
                                        </div>
                                    </fieldset>
                                    <div class="title-forgot"><a class="fs-14 fw-4">Forgot password</a> </div>
                                    <button class="sc-button" name="submit" type="submit">
                                        <span>Login</span>
                                    </button>
                                </form>
                            </div>
                        </div>
                        <div class="text-box text-center fs-14">Don’t you have an account? <a
                                class="font-2 fw-7 fs-14 color-popup text-color-3" data-toggle="modal"
                                data-target="#popup_bid2" data-dismiss="modal" aria-label="Close">Register</a></div>
                        <p class="texts line fs-12 text-center">or login with</p>
                        <div class="button-box flex">
                            <a href="#" class="flex align-center">
                                <svg width="20" height="21" viewBox="0 0 20 21" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M4.43242 12.5863L3.73625 15.1852L1.19176 15.239C0.431328 13.8286 0 12.2149 0 10.5C0 8.84179 0.403281 7.27804 1.11812 5.90112H1.11867L3.38398 6.31644L4.37633 8.56815C4.16863 9.17366 4.05543 9.82366 4.05543 10.5C4.05551 11.2341 4.18848 11.9374 4.43242 12.5863Z"
                                        fill="#FBBB00" />
                                    <path
                                        d="M19.8242 8.6319C19.939 9.23682 19.9989 9.86155 19.9989 10.5C19.9989 11.216 19.9236 11.9143 19.7802 12.588C19.2934 14.8803 18.0214 16.8819 16.2594 18.2984L16.2588 18.2978L13.4055 18.1522L13.0017 15.6314C14.1709 14.9456 15.0847 13.8726 15.566 12.588H10.2188V8.6319H19.8242Z"
                                        fill="#518EF8" />
                                    <path
                                        d="M16.2595 18.2978L16.2601 18.2984C14.5464 19.6758 12.3694 20.5 9.99965 20.5C6.19141 20.5 2.88043 18.3715 1.19141 15.239L4.43207 12.5863C5.27656 14.8401 7.45074 16.4445 9.99965 16.4445C11.0952 16.4445 12.1216 16.1484 13.0024 15.6313L16.2595 18.2978Z"
                                        fill="#28B446" />
                                    <path
                                        d="M16.382 2.80219L13.1425 5.45437C12.2309 4.88461 11.1534 4.55547 9.99906 4.55547C7.39246 4.55547 5.17762 6.23348 4.37543 8.56812L1.11773 5.90109H1.11719C2.78148 2.6923 6.13422 0.5 9.99906 0.5C12.4254 0.5 14.6502 1.3643 16.382 2.80219Z"
                                        fill="#F14336" />
                                </svg>
                                <span class="fw-6">Google</span>
                            </a>
                            <a href="#" class="flex align-center">
                                <svg width="21" height="21" viewBox="0 0 21 21" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M20.5 10.5C20.5 15.4914 16.843 19.6285 12.0625 20.3785V13.3906H14.3926L14.8359 10.5H12.0625V8.62422C12.0625 7.8332 12.45 7.0625 13.6922 7.0625H14.9531V4.60156C14.9531 4.60156 13.8086 4.40625 12.7145 4.40625C10.4305 4.40625 8.9375 5.79063 8.9375 8.29688V10.5H6.39844V13.3906H8.9375V20.3785C4.15703 19.6285 0.5 15.4914 0.5 10.5C0.5 4.97734 4.97734 0.5 10.5 0.5C16.0227 0.5 20.5 4.97734 20.5 10.5Z"
                                        fill="#1877F2" />
                                    <path
                                        d="M14.3926 13.3906L14.8359 10.5H12.0625V8.62418C12.0625 7.83336 12.4499 7.0625 13.6921 7.0625H14.9531V4.60156C14.9531 4.60156 13.8088 4.40625 12.7146 4.40625C10.4304 4.40625 8.9375 5.79063 8.9375 8.29688V10.5H6.39844V13.3906H8.9375V20.3785C9.44664 20.4584 9.96844 20.5 10.5 20.5C11.0316 20.5 11.5534 20.4584 12.0625 20.3785V13.3906H14.3926Z"
                                        fill="white" />
                                </svg>
                                <span class="fw-6">Facebook</span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div> -->

<!-- <div class="modal fade popup login-form" id="popup_bid2" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content ">
            <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
            <div class="modal-body space-y-20 pd-40 style2">
                <div class="wrap-modal flex">
                    <div class="images flex-none relative">
                        <img src="<?= base_url(); ?>/assets/assets/images/section/register.jpg" alt="images">
                    </div>
                    <div class="content">
                        <h1 class="title-login">Register</h1>
                        <div class="comments">
                            <div class="respond-comment">
                                <form method="post" class="comment-form form-submit" action="#" accept-charset="utf-8"
                                    novalidate="novalidate">

                                    <fieldset class="">
                                        <label class="fw-6">User name</label>
                                        <input type="text" class="tb-my-input" name="text" placeholder="User name">
                                        <div class="icon">
                                            <svg width="18" height="18" viewBox="0 0 18 18" fill="none"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M11.8127 4.5C11.8127 5.24592 11.5164 5.96129 10.989 6.48874C10.4615 7.01618 9.74615 7.3125 9.00023 7.3125C8.25431 7.3125 7.53893 7.01618 7.01149 6.48874C6.48404 5.96129 6.18773 5.24592 6.18773 4.5C6.18773 3.75408 6.48404 3.03871 7.01149 2.51126C7.53893 1.98382 8.25431 1.6875 9.00023 1.6875C9.74615 1.6875 10.4615 1.98382 10.989 2.51126C11.5164 3.03871 11.8127 3.75408 11.8127 4.5ZM3.37598 15.0885C3.40008 13.6128 4.00323 12.2056 5.05536 11.1705C6.10749 10.1354 7.52429 9.55535 9.00023 9.55535C10.4762 9.55535 11.893 10.1354 12.9451 11.1705C13.9972 12.2056 14.6004 13.6128 14.6245 15.0885C12.86 15.8976 10.9413 16.3151 9.00023 16.3125C6.99323 16.3125 5.08823 15.8745 3.37598 15.0885Z"
                                                    stroke="#B6B6B6" stroke-width="1.5" stroke-linecap="round"
                                                    stroke-linejoin="round" />
                                            </svg>
                                        </div>
                                    </fieldset>
                                    <fieldset class="t">
                                        <label class="fw-6">Email address</label>
                                        <input type="email" class="tb-my-input" name="email"
                                            placeholder="Email address">
                                        <div class="icon">
                                            <svg width="18" height="18" viewBox="0 0 18 18" fill="none"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M11.8127 4.5C11.8127 5.24592 11.5164 5.96129 10.989 6.48874C10.4615 7.01618 9.74615 7.3125 9.00023 7.3125C8.25431 7.3125 7.53893 7.01618 7.01149 6.48874C6.48404 5.96129 6.18773 5.24592 6.18773 4.5C6.18773 3.75408 6.48404 3.03871 7.01149 2.51126C7.53893 1.98382 8.25431 1.6875 9.00023 1.6875C9.74615 1.6875 10.4615 1.98382 10.989 2.51126C11.5164 3.03871 11.8127 3.75408 11.8127 4.5ZM3.37598 15.0885C3.40008 13.6128 4.00323 12.2056 5.05536 11.1705C6.10749 10.1354 7.52429 9.55535 9.00023 9.55535C10.4762 9.55535 11.893 10.1354 12.9451 11.1705C13.9972 12.2056 14.6004 13.6128 14.6245 15.0885C12.86 15.8976 10.9413 16.3151 9.00023 16.3125C6.99323 16.3125 5.08823 15.8745 3.37598 15.0885Z"
                                                    stroke="#B6B6B6" stroke-width="1.5" stroke-linecap="round"
                                                    stroke-linejoin="round" />
                                            </svg>
                                        </div>

                                    </fieldset>
                                    <fieldset class="">
                                        <label class="fw-6">Password</label>
                                        <input id="password-field" type="password" class="input-form password-input"
                                            placeholder="Your password">
                                        <span toggle="#password-field"
                                            class="fa fa-fw fa-eye field-icon toggle-password"></span>
                                        <div class="icon">
                                            <svg width="18" height="18" viewBox="0 0 18 18" fill="none"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M12.375 7.875V5.0625C12.375 4.16739 12.0194 3.30895 11.3865 2.67601C10.7535 2.04308 9.89511 1.6875 9 1.6875C8.10489 1.6875 7.24645 2.04308 6.61351 2.67601C5.98058 3.30895 5.625 4.16739 5.625 5.0625V7.875M5.0625 16.3125H12.9375C13.3851 16.3125 13.8143 16.1347 14.1307 15.8182C14.4472 15.5018 14.625 15.0726 14.625 14.625V9.5625C14.625 9.11495 14.4472 8.68573 14.1307 8.36926C13.8143 8.05279 13.3851 7.875 12.9375 7.875H5.0625C4.61495 7.875 4.18573 8.05279 3.86926 8.36926C3.55279 8.68573 3.375 9.11495 3.375 9.5625V14.625C3.375 15.0726 3.55279 15.5018 3.86926 15.8182C4.18573 16.1347 4.61495 16.3125 5.0625 16.3125Z"
                                                    stroke="#B6B6B6" stroke-width="1.5" stroke-linecap="round"
                                                    stroke-linejoin="round" />
                                            </svg>
                                        </div>

                                    </fieldset>
                                    <fieldset class="">
                                        <label class="fw-6">Confirm password</label>
                                        <input id="password-field1" type="password" class="input-form password-input"
                                            placeholder="Confirm password">
                                        <span toggle="#password-field1"
                                            class="fa fa-fw fa-eye field-icon toggle-password"></span>
                                        <div class="icon">
                                            <svg width="18" height="18" viewBox="0 0 18 18" fill="none"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M12.375 7.875V5.0625C12.375 4.16739 12.0194 3.30895 11.3865 2.67601C10.7535 2.04308 9.89511 1.6875 9 1.6875C8.10489 1.6875 7.24645 2.04308 6.61351 2.67601C5.98058 3.30895 5.625 4.16739 5.625 5.0625V7.875M5.0625 16.3125H12.9375C13.3851 16.3125 13.8143 16.1347 14.1307 15.8182C14.4472 15.5018 14.625 15.0726 14.625 14.625V9.5625C14.625 9.11495 14.4472 8.68573 14.1307 8.36926C13.8143 8.05279 13.3851 7.875 12.9375 7.875H5.0625C4.61495 7.875 4.18573 8.05279 3.86926 8.36926C3.55279 8.68573 3.375 9.11495 3.375 9.5625V14.625C3.375 15.0726 3.55279 15.5018 3.86926 15.8182C4.18573 16.1347 4.61495 16.3125 5.0625 16.3125Z"
                                                    stroke="#B6B6B6" stroke-width="1.5" stroke-linecap="round"
                                                    stroke-linejoin="round" />
                                            </svg>
                                        </div>

                                    </fieldset>
                                    <button class="sc-button" name="submit" type="submit">
                                        <span>Sign Up</span>
                                    </button>
                                </form>
                            </div>
                        </div>
                        <div class="text-box text-center fs-14">Don’t you have an account?<a
                                class="font-2 fw-7 fs-14 color-popup text-color-3" data-toggle="modal"
                                data-target="#popup_bid" data-dismiss="modal" aria-label="Close">Login</a></div>
                        <p class="texts line fs-12 text-center">or Register with</p>
                        <div class="button-box flex">
                            <a href="#" class="flex align-center">
                                <svg width="20" height="21" viewBox="0 0 20 21" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M4.43242 12.5863L3.73625 15.1852L1.19176 15.239C0.431328 13.8286 0 12.2149 0 10.5C0 8.84179 0.403281 7.27804 1.11812 5.90112H1.11867L3.38398 6.31644L4.37633 8.56815C4.16863 9.17366 4.05543 9.82366 4.05543 10.5C4.05551 11.2341 4.18848 11.9374 4.43242 12.5863Z"
                                        fill="#FBBB00" />
                                    <path
                                        d="M19.8242 8.6319C19.939 9.23682 19.9989 9.86155 19.9989 10.5C19.9989 11.216 19.9236 11.9143 19.7802 12.588C19.2934 14.8803 18.0214 16.8819 16.2594 18.2984L16.2588 18.2978L13.4055 18.1522L13.0017 15.6314C14.1709 14.9456 15.0847 13.8726 15.566 12.588H10.2188V8.6319H19.8242Z"
                                        fill="#518EF8" />
                                    <path
                                        d="M16.2595 18.2978L16.2601 18.2984C14.5464 19.6758 12.3694 20.5 9.99965 20.5C6.19141 20.5 2.88043 18.3715 1.19141 15.239L4.43207 12.5863C5.27656 14.8401 7.45074 16.4445 9.99965 16.4445C11.0952 16.4445 12.1216 16.1484 13.0024 15.6313L16.2595 18.2978Z"
                                        fill="#28B446" />
                                    <path
                                        d="M16.382 2.80219L13.1425 5.45437C12.2309 4.88461 11.1534 4.55547 9.99906 4.55547C7.39246 4.55547 5.17762 6.23348 4.37543 8.56812L1.11773 5.90109H1.11719C2.78148 2.6923 6.13422 0.5 9.99906 0.5C12.4254 0.5 14.6502 1.3643 16.382 2.80219Z"
                                        fill="#F14336" />
                                </svg>
                                <span class="fw-6">Google</span>
                            </a>
                            <a href="#" class="flex align-center">
                                <svg width="21" height="21" viewBox="0 0 21 21" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M20.5 10.5C20.5 15.4914 16.843 19.6285 12.0625 20.3785V13.3906H14.3926L14.8359 10.5H12.0625V8.62422C12.0625 7.8332 12.45 7.0625 13.6922 7.0625H14.9531V4.60156C14.9531 4.60156 13.8086 4.40625 12.7145 4.40625C10.4305 4.40625 8.9375 5.79063 8.9375 8.29688V10.5H6.39844V13.3906H8.9375V20.3785C4.15703 19.6285 0.5 15.4914 0.5 10.5C0.5 4.97734 4.97734 0.5 10.5 0.5C16.0227 0.5 20.5 4.97734 20.5 10.5Z"
                                        fill="#1877F2" />
                                    <path
                                        d="M14.3926 13.3906L14.8359 10.5H12.0625V8.62418C12.0625 7.83336 12.4499 7.0625 13.6921 7.0625H14.9531V4.60156C14.9531 4.60156 13.8088 4.40625 12.7146 4.40625C10.4304 4.40625 8.9375 5.79063 8.9375 8.29688V10.5H6.39844V13.3906H8.9375V20.3785C9.44664 20.4584 9.96844 20.5 10.5 20.5C11.0316 20.5 11.5534 20.4584 12.0625 20.3785V13.3906H14.3926Z"
                                        fill="white" />
                                </svg>
                                <span class="fw-6">Facebook</span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div> -->


<script src="https://code.jquery.com/jquery-3.7.1.js"></script>
<script src="https://cdn.datatables.net/2.3.1/js/dataTables.js"></script>
<link rel="stylesheet" href="https://cdn.datatables.net/2.3.1/css/dataTables.dataTables.css">
<script>
new DataTable('#example');
</script>
<script>
$(document).ready(function() {
    setTimeout(function() {
        $('#success-msg').fadeOut('slow');
    }, 3000); // 3000ms = 3 seconds
});
</script>

<script>
    const updateStatusUrl = "<?= base_url('dealer/update-status') ?>";
</script>
<!-- <script src="<?= base_url('assets/js/main.js') ?>"></script> -->