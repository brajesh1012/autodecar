  <style>
.favorite-icon {
    color: inherit;
    transition: color 0.3s ease;
}

.favorite-icon.favorited {
    color: orange;
}

.favorite-icon.favorited svg path {
    fill: orange !important;
    stroke: orange;
}
  </style>

  <div class="list-car-list-1">
      <?php if(!empty($vehicles)){ foreach($vehicles as $vehicle){?>
      <div class="box-car-list style-2 hv-one">
          <div class="image-group relative ">
              <ul class="change-heart flex">
                  <!-- <li class="box-icon w-32">
                         <a data-bs-toggle="offcanvas" data-bs-target="#offcanvasBottom" aria-controls="offcanvasBottom"
                             class="icon">
                             <svg width="18" height="18" viewBox="0 0 18 18" fill="none"
                                 xmlns="http://www.w3.org/2000/svg">
                                 <path
                                     d="M5.25 16.5L1.5 12.75M1.5 12.75L5.25 9M1.5 12.75H12.75M12.75 1.5L16.5 5.25M16.5 5.25L12.75 9M16.5 5.25H5.25"
                                     stroke="CurrentColor" stroke-width="1.5" stroke-linecap="round"
                                     stroke-linejoin="round" />
                             </svg>
                         </a>
                     </li> -->
                  <!-- <?php
                          $is_favorited = $this->WebsiteModel->is_favorited($_SESSION['user_id'], $vehicle->id);
                      ?>
                  <li class="box-icon w-32">
                      <a href="javascript:void(0);" class="icon favorite-icon <?= $is_favorited ? 'favorited' : '' ?>"
                          data-vehicle-id="<?= $vehicle->id; ?>"
                          title="<?= $is_favorited ? 'Unfavorite' : 'Favorite' ?>"> -->
                           <?php
                             $is_logged_in = isset($_SESSION['user_id']);
                             $is_favorited = $is_logged_in ? $this->WebsiteModel->is_favorited($_SESSION['user_id'], $vehicle->id) : false;
                         ?>
                     <li>
                        <a href="javascript:void(0);"
                        class="icon favorite-icon <?= $is_favorited ? 'favorited' : '' ?>"
                        data-vehicle-id="<?= $vehicle->id; ?>"
                        data-logged-in="<?= $is_logged_in ? 'yes' : 'no' ?>"
                        title="<?= $is_favorited ? 'Unfavorite' : 'Favorite' ?>">

                          <svg width="18" height="16" viewBox="0 0 18 16" fill="none"
                              xmlns="http://www.w3.org/2000/svg">
                              <path
                                  d="M16.5 4.875C16.5 2.80417 14.7508 1.125 12.5933 1.125C10.9808 1.125 9.59583 2.06333 9 3.4025C8.40417 2.06333 7.01917 1.125 5.40583 1.125C3.25 1.125 1.5 2.80417 1.5 4.875C1.5 10.8917 9 14.875 9 14.875C9 14.875 16.5 10.8917 16.5 4.875Z"
                                  stroke="CurrentColor" stroke-width="1.5" stroke-linecap="round"
                                  stroke-linejoin="round" />
                          </svg>
                      </a>
                  </li>
              </ul>
              <?php $car_img = $this->db->where('car_list_id',$vehicle->id)->get('car_img')->result(); if(!empty($car_img)){ ?>
              <div class="img-style">
                  <img class="lazyload" data-src="<?= base_url('uploads/'.$car_img[0]->photos); ?>"
                      src="<?= base_url('uploads/'.$car_img[0]->photos); ?>" alt="image">
              </div>



              <?php } 
                  $makes = $this->db->where('id',$vehicle->make)->get('make')->result();

                 $models = $this->db->where('id',$vehicle->model)->get('model')->result();

                $added_by = $this->db->where('id',$vehicle->added_by)->get('users')->result();

                 ?>
          </div>
          <div class="content">
              <div class="inner1">
                  <?php  foreach ($makes as $make) { 
                            foreach ($models as $model) { 
                            ?>
                  <div class="text-address">
                      <p class="text-color-3 font"><?= $make->name; ?></p>
                  </div>
                  <h5 class="link-style-1">
                      <a
                          href="<?= base_url('list-details-v1'); ?>"><?= $vehicle->year. " " .$make->name. " " .$model->name ; ?></a>
                  </h5>
                  <?php }}?>
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
                  <div class="money fs-20 fw-5 lh-25 text-color-3">CHF <?= $vehicle->price; ?>
                  </div>
                  <a href="<?= base_url('list-details/'.$vehicle->slug); ?>" class="view-car">View details<i
                          class="icon-autodeal-btn-right"></i></a>
              </div>
              <div class="inner2">
                  <div class="days-box">
                      <?php foreach ($added_by as $added) {
                            ?>
                      <div class="img-author">
                          <?php if(!empty($added->profile)){?>
                          <img class="lazyload" data-src="<?= base_url(); ?>uploads/profile/<?= $added->profile; ?>"
                              src="<?= base_url(); ?>uploads/profile/<?= $added->profile; ?>" alt="image">
                          <?php }else{?><img class="lazyload"
                              data-src="<?= base_url(); ?>/assets/assets/images/author/avt-cm1.jpg"
                              src="<?= base_url(); ?>/assets/assets/images/author/avt-cm1.jpg" alt="image">
                          <?php } ?>
                          <span class="font text-color-2 fw-5"><?= $added->username; ?></span>
                      </div>
                      <?php } ?>
                      <a href="<?= base_url('list-details/'.$vehicle->slug); ?>" class="view-car">View
                          car</a>

                         
                      <?php
                      
                      if(isset($_SESSION['user_id']) && $vehicle->added_by != $_SESSION['user_id']) { 
                      $is_logged_in = isset($_SESSION['user_id']);
                                  $chat_url = base_url(ADMIN_PATH . '/view-chat/'.$vehicle->id.'/'. $vehicle->added_by); 
                                ?>
                      <a href="javascript:void(0);" class="btn-pf bg-green chat-btn chat" data-url="<?= $chat_url ?>"
                          data-logged-in="<?= $is_logged_in ? 'yes' : 'no' ?>">
                          <!-- <a href="#" class="chat"> -->
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
                      <?php } ?>

                      <p class="fs-12 lh-16">View 20 variants matching your search
                          criteria</p>

                  </div>
              </div>
          </div>
      </div>
      <?php }} else{ ?>
      <p>Data not Found. </p>
      <?php } ?>
  </div>

  <!--  -->

  <!-- 💬 Chat Modal -->
  <div id="chatModal"
      style="display:none; position:fixed; top:0; left:0; width:100%; height:100%; background:rgba(0,0,0,0.5); z-index:9999; justify-content:center; align-items:center;">
      <div
          style="width:90%; max-width:900px; height:90%; background:#fff; position:relative; border-radius:10px; overflow:hidden;">
          <button onclick="closeChatModal()"
              style="position:absolute; top:10px; right:10px; background:#ff4444; color:#fff; border:none; padding:5px 10px; cursor:pointer; border-radius:5px;">Close</button>
          <iframe id="chatFrame" src="" style="width:100%; height:100%; border:none;"></iframe>
      </div>
  </div>
  </div>

  <!--  -->

  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
  <script>
document.addEventListener("DOMContentLoaded", function() {
    document.querySelectorAll(".chat-btn").forEach(function(btn) {
        btn.addEventListener("click", function() {
            var isLoggedIn = btn.getAttribute("data-logged-in");
            var chatUrl = btn.getAttribute("data-url");

            if (isLoggedIn === "yes") {
                // Open in modal
                document.getElementById("chatFrame").src = chatUrl;
                document.getElementById("chatModal").style.display = "flex";
            } else {
                // Show login alert
                Swal.fire({
                    icon: 'warning',
                    title: 'Please login first',
                    confirmButtonText: 'OK'
                });
            }
        });
    });
});

function closeChatModal() {
    document.getElementById("chatModal").style.display = "none";
    document.getElementById("chatFrame").src = ""; // Optional: Clear iframe on close
}
  </script>

  <script>
// For Add Favorite
toggleUrl = '<?= base_url("toggle") ?>';
  </script>