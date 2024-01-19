<!-- jQuery -->
<script src="<?= base_url()?>panel/plugins/jquery/jquery.min.js"></script>
<script>
  // Set the date we're counting down to
  var datestring = <?php echo json_encode($publish['tanggal_publis']); ?>;
  var countDownDate = new Date(datestring).getTime();

  const days = document.getElementById('days');
  const hours = document.getElementById('hours');
  const minutes = document.getElementById('minutes');
  const seconds = document.getElementById('seconds');

  const currentYear = new Date().getFullYear();
  const newYearTime = new Date(datestring);

  // Update countdown time
  function updateCountdown() {
    const currentTime = new Date();
    const diff = newYearTime - currentTime;

    const d = Math.floor(diff / 1000 / 60 / 60 / 24);
    const h = Math.floor(diff / 1000 / 60 / 60) % 24;
    const m = Math.floor(diff / 1000 / 60) % 60;
    const s = Math.floor(diff / 1000) % 60;

    days.innerHTML = d;
    hours.innerHTML = h < 10 ? '0' + h : h;
    minutes.innerHTML = m < 10 ? '0' + m : m;
    seconds.innerHTML = s < 10 ? '0' + s : s;
  }
  setInterval(updateCountdown, 1000);
</script>
<script>
  $(document).ready(function() {
    $("#form-lulus").submit(function(e) {
      e.preventDefault();
      var id = $("#nisn").val();
      // console.log(id);
      var url = "<?= base_url() . $this->uri->segment(1, 0) . $this->uri->slash_segment(2, 'both') ?>/lulus_cari/" + id;
      $("#sertifikat").load(url);
    })
  });
</script>

