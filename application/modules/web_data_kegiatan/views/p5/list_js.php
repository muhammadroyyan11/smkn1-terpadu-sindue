<!-- jQuery -->
<script src="<?= base_url() ?>panel/plugins/jquery/jquery.min.js"></script>

<script type="text/javascript">
    //set default swal sweet alert..
    // const Toast = Swal.mixin({
    //     toast: true,
    //     position: 'top-end',
    //     showConfirmButton: false,
    //     timer: 3000
    // });

    $('.btn-action').on('click', function() {
        show_loading();
        xhr = $.ajax({
            method: "POST",
            url: "<?= base_url() . $this->uri->segment(1, 0) ?>/tambah_p5",
            data: "jenis=tambah",
            success: function(response) {
                $('.tampil-modal').html(response);
                $('.modal-action').modal({
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

    $('.btn-edit').on('click', function() {
        show_loading();
        id = $(this).data('id');
        xhr = $.ajax({
            method: "POST",
            url: "<?= base_url() . $this->uri->segment(1, 0) ?>/edit_p5/" + id,
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

    $('.btn-detail').on('click', function() {
        show_loading();
        id = $(this).data('id');
        xhr = $.ajax({
            method: "POST",
            url: "<?= base_url() . $this->uri->segment(1, 0) ?>/detail_p5/" + id,
            data: "jenis=detail",
            success: function(response) {
                $('.tampil-modal').html(response);
                $('.modal-detail').modal({
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