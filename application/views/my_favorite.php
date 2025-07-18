  <?php include('head.php'); ?>
<div class="container mt-5">
    <h3>My Favorite Vehicles</h3>
    <?php if (!empty($favorites)): ?>
        <div class="row">
            <?php foreach ($favorites as $fav): 
                $details = $this->WebsiteModel->get_data_by_id($fav->vehicle_id, 'car_list');
                ?>
                <div class="col-md-4">
                    <div class="card mb-3">

                        <img src="<?= base_url('uploads/' . $fav->photos) ?>" class="card-img-top" alt="Vehicle Image" height="200">


                        <div class="card-body">
                            <h5 class="card-title"><?= $fav->title ?></h5>
                            <p class="card-text">Price: <?= $fav->price ?></p>
                            <a href="<?= base_url('list-details/'.$details->slug); ?> " class="btn btn-primary">View</a>
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
