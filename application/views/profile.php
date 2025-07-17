
  <?php include('head.php'); ?>

  <style>
    /* body {
      font-family: 'Segoe UI', sans-serif;
      background-color: #f4f6f8;
      margin: 0;
      padding: 0;
    } */

    .container1 {
      
        /* margin-top: 1500px; */
      max-width: 600px;
      margin: 50px auto;
      padding: 20px;
    }

    .card {
          margin-top: 100px;
      background-color: white;
      padding: 30px 20px;
      border-radius: 10px;
      box-shadow: 0 2px 10px rgba(0,0,0,0.1);
      text-align: center;
    }

    .tab-buttons {
      display: flex;
      justify-content: space-around;
      margin-bottom: 30px;
    }

    .tab-buttons button {
      padding: 10px 20px;
      border: none;
      background-color: #2d3e50;
      color: white;
      cursor: pointer;
      border-radius: 5px;
      transition: 0.3s;
    }

    .tab-buttons button.active,
    .tab-buttons button:hover {
      background-color: #FF7101;
      /* background-color: #1abc9c; */
    }

    .tab-content {
      display: none;
      text-align: left;
    }

    .tab-content.active {
      display: block;
    }

    .profile-img {
      width: 100px;
      height: 100px;
      border-radius: 50%;
      object-fit: cover;
      margin: 0 auto 20px;
      border: 3px solid #1abc9c;
    }

    .form-group {
      margin-bottom: 15px;
    }

    .form-group label {
      display: block;
      margin-bottom: 5px;
      font-weight: 600;
    }

    .form-group input {
      width: 100%;
      padding: 10px;
      border-radius: 5px;
      border: 1px solid #ccc;
    }

    .btn-save {
      background-color: #1abc9c;
      color: white;
      padding: 10px 20px;
      border: none;
      margin-top: 20px;
      border-radius: 5px;
      cursor: pointer;
    }

    .btn-save:hover {
      background-color: #17a589;
    }

    .listing-item,
    .favorite-item {
      background-color: #f0f0f0;
      padding: 12px;
      margin-bottom: 10px;
      border-radius: 5px;
    }
  </style>
  <!-- update_profile_view.php -->
<section class="container1">
  <div class="card">
    
    <!-- Flash Messages -->
    <?php if ($this->session->flashdata('success')): ?>
      <div class="alert alert-success"><?= $this->session->flashdata('success'); ?></div>
    <?php elseif ($this->session->flashdata('error')): ?>
      <div class="alert alert-danger"><?= $this->session->flashdata('error'); ?></div>
    <?php endif; ?>

    <div class="tab-buttons">
      <button class="tab-btn active" onclick="showTab('profile')">Profile</button>
      <!-- <button class="tab-btn" onclick="showTab('listings')">Listings</button>
      <button class="tab-btn" onclick="showTab('favorites')">Favorites</button> -->
    </div>

    <div id="profile" class="tab-content active">
      <form action="<?= base_url('update-profile'); ?>" method="POST" enctype="multipart/form-data">
        <img src="<?= base_url('uploads/profile/' . $user->profile); ?>" alt="Profile Image" class="profile-img" />

        <div class="form-group">
          <label for="username">Username</label>
          <input type="text" name="username" id="username" value="<?= set_value('username', $user->username); ?>" required />
        </div>

        <div class="form-group">
          <label for="email">Email</label>
          <input type="email" name="email" id="email" value="<?= set_value('email', $user->email); ?>" required />
        </div>

        <div class="form-group">
          <label for="profile">Profile Image</label>
          <input type="file" name="profile" id="profile" accept="image/*" />
        </div>

        <!-- Hidden field to keep old image if new not uploaded -->
        <input type="hidden" name="old_image" value="<?= $user->profile; ?>" />

        <button type="submit" style="color:white" class="sc-button">Update Profile</button>
      </form>
    </div>

     <!-- Listings Tab -->
      <div id="listings" class="tab-content">
        <div class="listing-item">Listing 1 - Edit</div>
        <div class="listing-item">Listing 2 - Edit</div>
        <div class="listing-item">Listing 3 - Edit</div>
      </div>

      <!-- Favorites Tab -->
      <div id="favorites" class="tab-content">
        <div class="favorite-item">Favorite 1 - Remove</div>
        <div class="favorite-item">Favorite 2 - Remove</div>
      </div>
    </div>
  </div>
</section>


     
  </section>

  <script>
    function showTab(tabId) {
      const allTabs = document.querySelectorAll('.tab-content');
      const allButtons = document.querySelectorAll('.tab-btn');

      allTabs.forEach(tab => tab.classList.remove('active'));
      allButtons.forEach(btn => btn.classList.remove('active'));

      document.getElementById(tabId).classList.add('active');
      event.target.classList.add('active');
    }
  </script>

<script>
  setTimeout(function() {
    const alert = document.querySelector('.alert');
    if(alert) {
      alert.style.transition = "opacity 0.5s";
      alert.style.opacity = 0;
      setTimeout(() => alert.remove(), 500);
    }
  }, 3000);
</script>
<?php include('footer.php'); ?>