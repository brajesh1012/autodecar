  <?php include('head.php'); ?>

  <style>
    .card {
    display: flex;
    flex-direction: column;
    justify-content: space-between;
    height: 100%; /* dynamic height */
    box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
}
.card-img-top {
    object-fit: cover;
    height: 300px;
    width: 100%;
}

  </style>
  <div class="container mt-5">
      <h3>My Favorite Vehicles</h3>
      <?php if (!empty($favorites)): ?>
          <div class="row">
              <?php foreach ($favorites as $fav):
                    $details = $this->WebsiteModel->get_data_by_id($fav->vehicle_id, 'car_list');
                ?>
                  <div class="col-md-4">
                      <div class="card mb-3">
                          <img src="<?= base_url('uploads/' . $fav->photos) ?>" class="card-img-top" alt="Vehicle Image">
                          <div class="card-body">
                              <h5 class="card-title"><?= $fav->title ?></h5>
                              <p class="card-text">Price: <?= $fav->price ?></p>
                              <a href="<?= base_url('list-details/' . $details->slug); ?> " class="btn btn-warning ">View</a>
                          </div>
                      </div>
                  </div>

              <?php endforeach; ?>
          </div>
      <?php else: ?>
          <p>No favorites found.</p>
      <?php endif; ?>
  </div>

  <?php include('footer.php'); ?>

  <script>
    function equalizeCardHeights() {
        const cards = document.querySelectorAll('.card');
        let maxHeight = 0;

        // Reset height to auto
        cards.forEach(card => {
            card.style.height = 'auto';
        });

        // Find max height
        cards.forEach(card => {
            if (card.offsetHeight > maxHeight) {
                maxHeight = card.offsetHeight;
            }
        });

        // Set all cards to max height
        cards.forEach(card => {
            card.style.height = maxHeight + 'px';
        });
    }

    window.addEventListener('load', equalizeCardHeights);
    window.addEventListener('resize', equalizeCardHeights);
</script>
