<style>
    td.details-control {
        background: url('<?= base_url() ?>assets/images/details_open.png') no-repeat center center;
        cursor: pointer;
    }

    tr.details td.details-control {
        background: url('<?= base_url() ?>assets/images/details_close.png') no-repeat center center;
    }
</style>
<div class="content-wrapper">
    <?php $this->load->view('layout/header-page') ?>
    <!-- Main content -->
    <section class="content">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="tampil-modal"></div>
                    <div class="card-body">
                        <?php if ($cek_akses['role_id'] == 1) : ?>
                            <button type="button" class="btn btn-primary mb-3 btn-action">
                                <span class="fa fa-plus"></span> Tambah Data
                            </button>
                        <?php endif ?>
                        <div class="table-responsive">
                            <table class="table datatable table-striped table-sm" style="font-size: 14px">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>ID</th>
                                        <th>Jabatan</th>
                                        <th>Tempat Tugas</th>
                                        <th>Kode Lokasi</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>


                                </tbody>

                            </table>
                        </div>

                    </div>
                    <!-- /.card-body -->
                </div>
                <!-- /.card -->
            </div>
            <!-- /.col -->
        </div>
        <!-- /.row -->
    </section>
    <!-- /.content -->
</div>
<!-- /.content-wrapper -->

<!-- jQuery -->
<script src="<?= base_url() ?>plugins/jquery/jquery.min.js"></script>