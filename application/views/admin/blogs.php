
<div id="themesflat-content">
    <div class="dashboard-toggle">Show DashBoard</div>
   
</div>

<style>
/* ...existing code... */
.tfcl-my-listing-sc tr td:first-child, .tfcl-table-listing tr td:first-child {
    width: 2.6%;
}
</style>

<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="content-area">
                <div class="tfcl-dashboard">
                    <div class="tfcl-add-listing car-details">
                           <div class="d-flex justify-content-between align-items-center mb-3">
                            <h3>Blogs</h3>
                            <a href="<?= base_url(ADMIN_PATH . '/add-blog'); ?>" class="btn btn-primary">+ Add Blog</a>
                        </div>
                        <div class="tfcl-table-listing">
                            <div class="table-responsive">
                                <table id="example" class="cell-border">
                                    <thead>
                                        <tr>
                                            <th>Id</th>
                                            <th>Image</th>
                                            <th>Title</th>
                                            <th>Name</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php 
                                        if (empty($blogs)) {
                                            echo "<tr><td colspan='5'>No Blogs Found</td></tr>";
                                        }
                                        foreach($blogs as $blog){?>
                                        <tr>
                                            <td><?= $blog->id; ?></td>
                                            <td><?php if(!empty($blog->img)){?><img src="<?= base_url('uploads/blogs/').$blog->img; ?>" alt=""><?php }else{ ?><img src="<?= base_url('uploads/profile/no-image.jpg'); ?>" alt=""><?php }?></td>
                                            <td><?= $blog->title; ?></td>
                                            <td><?= $blog->name; ?></td>
                                            <td>
                                                <a href="<?= base_url(ADMIN_PATH . '/edit-blog?b_id='.$blog->id); ?>">Update</a>
                                                <a href="<?= base_url(ADMIN_PATH . '/delete-blog?b_id='.$blog->id); ?>">Delete</a>
                                            </td>
                                        </tr>
                                        <?php } ?>
                                    </tbody>
                                    <!-- <tfoot>
                        <tr>
                            <th>Name</th>
                            <th>Action</th>
                        </tr>
                    </tfoot> -->
                                </table>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


</div>
<script>
$(document).ready(function() {
    setTimeout(function() {
        $('#success-msg').fadeOut('slow');
    }, 3000); // 3000ms = 3 seconds
});
</script>

