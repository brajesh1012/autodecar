<style>
    /* Custom DataTable Styling */
#example {
    font-family: 'Segoe UI', sans-serif;
    border-collapse: collapse;
    width: 100%;
}

#example th, #example td {
    padding: 12px;
    text-align: left;
    border-bottom: 1px solid #ddd;
}

#example tr:hover {
    background-color: #f1f1f1;
}

#example th {
    background-color: #f5f5f5;
    font-weight: bold;
    color: #333;
}

</style>
<div id="themesflat-content">
    <div class="dashboard-toggle">Show DashBoard</div>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="content-area">
                    <main id="main" class="main-content">
                        <div class="tfcl-dashboard">
                            <h1 class="admin-title mb-3">Users List</h1>
                            <div class="tfcl-dashboard-middle mt-2">
                                <div class="row">
                                    <div class="tfcl-dashboard-middle-left col-md-12">
                                        <div class="tfcl-dashboard-listing">
                                            <div class="row">
                                            <div class="tfcl-table-listing">
                                                <div class="table-responsive">

                                                    <table id="example" class="cell-border">
                                                        <thead>
                                                            <tr>
                                                                <th>Profile</th>
                                                                <th>Role</th>
                                                                <th>Username</th>
                                                                <th>Mobile</th>
                                                                <th>Email</th>
                                                                <th>Country</th>
                                                                <th>Register Date</th>
                                                                <th>Status</th>
                                                                <th>Action</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            <?php foreach($users as $user){  
                                                            $original_date = $user->created_at;
                                                            $register_date = date("F d, Y", strtotime($original_date));

                                                           $user_roles = $this->db->where('id',$user->role)->get('roles')->result();
                                                                   foreach($user_roles as $roles){  
                                                        
                                                            ?>
                                                            <tr>
                                                                <td class="column-listing">
                                                                    <?php if(!empty($user->profile)){?>
                                                                     <img src="<?= base_url('uploads/profile/'. @$user->profile); ?>"
                                                                                        alt="image">
                                                                    <?php }else{ ?>

                                                                        <img src="<?= base_url('uploads/profile/no-image.jpg'); ?>"
                                                                                        alt="image">
                                                                                        <?php } ?>
                                                                </td>
                                                                <td class="column-listing">
                                                                    <div class="tfcl-listing-date"><?= $roles->role; ?>
                                                                    </div>
                                                                </td>

                                                                <td class="column-listing">
                                                                    <div class="tfcl-listing-date"><?= $user->username; ?>
                                                                    </div>
                                                                </td>

                                                                <td class="column-listing">
                                                                    <div class="tfcl-listing-date"><?= $user->mobile; ?>
                                                                    </div>
                                                                </td>

                                                                 <td class="column-listing">
                                                                    <div class="tfcl-listing-date"><?= $user->email; ?>
                                                                    </div>
                                                                </td>

                                                                <td class="column-date">
                                                                    <?php $cou = $this->db->where('id', $user->country)->get('countries')->row();?>
                                                                    <div class="tfcl-listing-date"><?= $cou->name; ?>
                                                                    </div>
                                                                </td>
                                                                <td class="column-date">
                                                                    <div class="tfcl-listing-date"><?= $register_date; ?>
                                                                    </div>
                                                                </td>
                                                                 <td class="column-status">
                                                                    <?php if($user->status==0){?>
                                                                    <span class="tfcl-listing-status status-publish">
                                                                        Inactive
                                                                    </span>
                                                                    <?php }elseif($user->status==1){ ?>
                                                                    <span class="tfcl-listing-status status-publish">
                                                                        Active
                                                                    </span>
                                                                    <?php } ?>

                                                                     
                                                                </td>

                                                                 <td class="column-listing">
                                                                     <?php 
                                                                      if($_SESSION['role_name']== "Admin"){
                                                                      if($user->status==0){ ?>  
                                                                    <div class="inner-controller">
                                                                        <span class="icon">
                                                                            <img src="<?= base_url(); ?>/assets/assets/images/dashboard/hide.svg"
                                                                                alt="icon">
                                                                        </span>
                                                                        <a href="javascript:void(0);"
                                                                            class="btn-action tfcl-dashboard-action-edit update-status-btn"
                                                                            data-id="<?= $user->id ?>"
                                                                            data-table="users" data-key="id"
                                                                            data-status="1"
                                                                            data-redirect="<?= base_url(ADMIN_PATH  . '/users') ?>"
                                                                            data-message="Are you sure you want to mark this User as Active?">
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
                                                                            data-id="<?= $user->id ?>"
                                                                            data-table="users" data-key="id"
                                                                            data-status="0"
                                                                            data-redirect="<?= base_url(ADMIN_PATH  . '/users') ?>"
                                                                            data-message="Are you sure you want to mark this User as Inactive?">
                                                                            Inactive
                                                                        </a>
                                                                    </div>
                                                                        <?php } } ?>
                                                                          <a href="<?= base_url(ADMIN_PATH . '/edit-users?user_id='.$user->id); ?>">Update</a>
                                                                </td>

                                                            </tr>

                                                            <?php } } ?>
                                                        </tbody>
                                                        <tfoot>
                                                            <tr>
                                                                 <th>Profile</th>
                                                                <th>Role</th>
                                                                <th>Username</th>
                                                                <th>Mobile</th>
                                                                <th>Email</th>
                                                                <th>Country</th>
                                                                <th>Register Date</th>
                                                                <th>Status</th>
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