  <!-- ======= Footer ======= -->
  <footer id="footer">
    <div class="container">
      <h3><?= $sekolah['nama_sekolah'] ?></h3>
      <p>
        <?= $sekolah['alamat'] ?> <br>
        <?= $sekolah['kecamatan'] ?>, <?= $sekolah['kota'] ?> <?= $sekolah['kodepos'] ?><br>
        <?= $sekolah['provinsi'] ?> <br><br>
        <i class="bi bi-envelope"></i> <a href="mailto:<?= $sekolah['email'] ?>"><?= $sekolah['email'] ?></a><br>
        <i class="bi bi-phone"></i> <?= $sekolah['telp'] ?><br>
      </p>
      <div class="copyright">
        Copyright &copy; ASIMSE-4.0-Premium 2020-<?= date('Y') ?> <br>
        <strong><span><?= $sekolah['nama_sekolah'] ?></span></strong>  . All Rights Reserved  <br>
        Developed by <a href="https://sistemanakdesa.my.id/">Sistem Anak Desa</a> <br>      
        Page rendered in <strong>{elapsed_time}</strong> seconds. 
      </div>
      <!-- <div class="credits">     </div> -->
    </div>
  </footer><!-- End Footer -->

  <div id="preloader"></div>
  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="<?= base_url(); ?>website/assets_proses/template_luar/vendor/purecounter/purecounter.js"></script>
  <script src="<?= base_url(); ?>website/assets_proses/template_luar/vendor/aos/aos.js"></script>
  <script src="<?= base_url(); ?>website/assets_proses/template_luar/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="<?= base_url(); ?>website/assets_proses/template_luar/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="<?= base_url(); ?>website/assets_proses/template_luar/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="<?= base_url(); ?>website/assets_proses/template_luar/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="<?= base_url(); ?>website/assets_proses/template_luar/vendor/typed.js/typed.min.js"></script>
  <script src="<?= base_url(); ?>website/assets_proses/template_luar/vendor/waypoints/noframework.waypoints.js"></script>
  <script src="<?= base_url(); ?>website/assets_proses/template_luar/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="<?= base_url(); ?>website/assets_proses/template_luar/js/main.js"></script>

</body>

</html>