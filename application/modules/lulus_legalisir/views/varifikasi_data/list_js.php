<!-- jQuery -->
<script src="<?= base_url() ?>panel/plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="<?= base_url() ?>panel/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- SweetAlert2 -->
<script src="<?= base_url() ?>panel/plugins/sweetalert2/sweetalert2.min.js"></script>
<!-- jquery-validation -->
<script src="<?= base_url() ?>panel/plugins/jquery-validation/jquery.validate.min.js"></script>
<script src="<?= base_url() ?>panel/plugins/jquery-validation/additional-methods.min.js"></script>
<!-- Datepicker -->
<script src="<?= base_url() ?>panel/plugins/bootstrap-datepicker/js/bootstrap-datepicker.min.js"></script>
<!-- Select2 -->
<script src="<?= base_url() ?>panel/plugins/select2/js/select2.full.min.js"></script>

<script type="text/javascript">
    //set default swal sweet alert..
    const Toast = Swal.mixin({
        toast: true,
        position: 'top-end',
        showConfirmButton: false,
        timer: 3000
    });

    $('.btn-edit').on('click', function() {
        show_loading();
        id = $(this).data('id');
        xhr = $.ajax({
            method: "POST",
            url: "<?= base_url() . $this->uri->segment(1, 0) . $this->uri->slash_segment(2, 'both') ?>/verifikasi_data/" + id,
            data: "jenis=edit",
            success: function(response) {
                $('.tampil-modal').html(response);
                $('.modal-edit').modal({
                    backdrop: 'static',
                    keyboard: false
                }, 'show');
                // validate_form();
                hide_loading();
            },
            error: function() {

            }
        })
    })
</script>
