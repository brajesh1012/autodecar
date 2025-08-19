<style>
/* ...existing code... */
.tfcl-my-listing-sc tr td:first-child, .tfcl-table-listing tr td:first-child {
    width: 2.6%;
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
                            <h1 class="admin-title mb-3">Enquiry</h1>
                            <div class="tfcl-dashboard-middle mt-2">
                                <div class="row">
                                    <div class="tfcl-dashboard-middle-left col-md-12">
                                        <div class="tfcl-dashboard-listing">
                                            <div class="row">
                                                <!-- <div class="col-xl-3 col-lg-6 mb-2">
                                                    <div class="group-input-icon search">
                                                        <input type="text" name="title_search" id="title_search" value
                                                            placeholder="Search..." >
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
                                                </div> -->
                                            <div class="tfcl-table-listing">
                                                <div class="table-responsive">

                                                    <table id="example" class="cell-border">
                                                        <thead>
                                                            <tr>
                                                                <th>id</th>
                                                                <th>Login Name</th>
                                                                <th>Login Role</th>
                                                                <th>Name</th>
                                                                <th>Phone</th>
                                                                <th>Email</th>
                                                                <th>Subject</th>
                                                                <th>Message</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            <?php 
                                                            $count = 1;
                                                            foreach($users as $user){  
                                                            
                                                            ?>
                                                            <tr>

                                                             <td>
                                                                    
                                                                        <?= $count++; ?>
                                                                    
                                                                </td>

                                                              
                                                                <td>
                                                                   
                                                                        <?= $user->name; ?>
                                                                 
                                                                </td>

                                                                <td>   <?= $user->login_name; ?></td>
                                                                <td>   <?= $user->login_role; ?></td>

                                                                <td>
                                                                  <?= $user->mobile; ?>
                                                               
                                                                </td>

                                                                <td >
                                                                    <?= $user->email; ?>
                                                                   
                                                                </td>

                                                                 <td>
                                                                    <?= $user->subject; ?>
                                                                   
                                                                </td>

                                                                <td>
                                                                  <?= $user->message; ?>
                                                                    
                                                                </td>
                                                            </tr>

                                                            <?php } ?>
                                                        </tbody>
                                                        <!-- <tfoot>
                                                            <tr>
                                                                <th>id</th>
                                                                <th>Name</th>
                                                                <th>Phone</th>
                                                                <th>Email</th>
                                                                <th>Subject</th>
                                                                <th>Message</th>
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