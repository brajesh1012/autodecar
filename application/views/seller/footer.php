<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <!-- Javascript -->
    <script src="<?= base_url();?>/assets/app/js/jquery.min.js"></script>
    <script src="<?= base_url();?>/assets/app/js/jquery.easing.js"></script>
    <script src="<?= base_url();?>/assets/app/js/jquery.nice-select.min.js"></script>
    <script src="<?= base_url();?>/assets/app/js/chart.js"></script>
    <script src="<?= base_url();?>/assets/app/js/bootstrap.min.js"></script>
    <script src="<?= base_url();?>/assets/app/js/main.js"></script>
    <script src="<?= base_url();?>/assets/app/js/jquery-ui.js"></script>
    <script src="<?= base_url();?>/assets/app/js/dashboard.js"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
  

<div id="globalImageModal" style="display:none; position:fixed; z-index:1000; left:0; top:0; width:100%; height:100%; background:rgba(0,0,0,0.8); justify-content:center; align-items:center;">
  <span onclick="closeImageModal()" style="position:absolute; top:20px; right:30px; font-size:40px; color:white; cursor:pointer;">&times;</span>
  <img id="globalModalImage" src="" style="max-width:90%; max-height:90%; border:5px solid white;">
</div>
</body>

</html>

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