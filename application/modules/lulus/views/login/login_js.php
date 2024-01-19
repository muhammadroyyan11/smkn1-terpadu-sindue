<!-- jQuery -->
<script src="<?= base_url()?>panel/plugins/jquery/jquery.min.js"></script>
<script>
  $(document).ready(function() {
    $("#form-aktifvasi").submit(function(e) {
      e.preventDefault();
      var id = $("#nisn").val();
      // console.log(id);
      var url = "<?= base_url() . $this->uri->segment(1, 0) . $this->uri->slash_segment(2, 'both') ?>/alumni_cari/" + id;
      $("#aktifvasi").load(url);
    })
  });
</script>
<script>
      $(document).ready(function() {
          $("#show_hide_password button").on('click', function(event) {
              event.preventDefault();
              if ($('#show_hide_password input').attr("type") == "text") {
                  $('#show_hide_password input').attr('type', 'password');
                  $('#show_hide_password span').addClass("fa-eye-slash");
                  $('#show_hide_password span').removeClass("fa-eye");
              } else if ($('#show_hide_password input').attr("type") == "password") {
                  $('#show_hide_password input').attr('type', 'text');
                  $('#show_hide_password span').removeClass("fa-eye-slash");
                  $('#show_hide_password span').addClass("fa-eye");
              }
          });
      });
  </script>