<style>
.text-p,
p {
    font-weight: 400;
    font-size: 14px;
    line-height: 19.6px;
    color: #d95c32;
    font-family: "Inter", sans-serif;
}

.toast-message {
    visibility: hidden;
    min-width: 250px;
    background-color: #333;
    color: #fff;
    text-align: center;
    border-radius: 5px;
    padding: 12px;
    position: fixed;
    z-index: 9999;
    top: 20px;
    right: 20px;
    font-size: 14px;
    opacity: 0;
    transition: opacity 0.5s ease, visibility 0s linear 0.5s;
}

.toast-message.show {
    visibility: visible;
    opacity: 1;
    transition-delay: 0s;
}
</style>


<div id="themesflat-content">
    <div class="dashboard-toggle">Show DashBoard</div>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="content-area">
                    <!-- Success/Error Messages -->

                    <main id="main" class="main-content">
                        <div class="tfcl-dashboard">
                            
                            <form action="<?= base_url('dealer/import-csv') ?>" enctype="multipart/form-data" onsubmit="return validateCSV()" method="POST">
                                
                                <h1 class="admin-title mb-3">Bulk Upload</h1>
                                <div class="tfcl-add-listing car-details">
                                    <h3>Vehicle Bulk Upload</h3>
                                    <!-- Photos -->
                                    <div class="form-group-4">
                                        
                                        <div class="form-group">
                                            <label for="">Select CSV File</label>
                                            <input type="file" name="csv_file" id="csv_file" accept=".csv" class="form-control" required>
                                        </div>

                                         <div class="form-group">
                                            <label for="">CSV File Formate</label><br>
                                            <!-- <input type="file" name="csv_file" id="csv_file" accept=".csv" class="form-control" required> -->

                                            <a href="<?= base_url('dealer/download-csv'); ?>"    target="_blank" rel="noopener noreferrer" download><img src="<?= base_url('uploads/Download.png'); ?>" alt="Download" height="80px" width="80px"></a>
                                        </div>

                                    </div>

                                   

                                </div>

                                <div class="group-button-submit">
                                    <!-- <button class="pre-btn">List Now</button>
                                    <button type class="second-btn">Save & Preview</button> -->
                                    <button type="submit" class="second-btn">Upload</button>
                                </div>

                            </form>

                            <!-- Toast container -->
                            <div id="toast" class="toast-message"></div>
                        </div>
                    </main>
                </div>
            </div>
        </div>
    </div>
</div>

</div>
<script>
function showToast(message) {
    const toast = document.getElementById("toast");
    toast.textContent = message;
    toast.className = "toast-message show";

    setTimeout(() => {
        toast.className = "toast-message"; // Hide
    }, 3000);
}

function validateCSV() {
    const file = document.getElementById('csv_file').files[0];
    if (!file) {
        showToast('Please select a CSV file.');
        return false;
    }
    const fileName = file.name.toLowerCase();
    if (!fileName.endsWith(".csv")) {
        showToast('Only CSV files are allowed.');
        return false;
    }
    return true;
}
</script>


<?php if ($this->session->flashdata('success')): ?>
    <script>showToast("<?= $this->session->flashdata('success') ?>");</script>
<?php endif; ?>

<?php if ($this->session->flashdata('error')): ?>
    <script>showToast("<?= $this->session->flashdata('error') ?>");</script>
<?php endif; ?>
