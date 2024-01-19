<div class="modal fade modal-edit" id="modal-lg">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-lg">
                <div class="card card-primary card-outline">
                    <div class="modal-header">
                        <h5 class="modal-title"><?= ucwords($this->uri->segment(3, 0)) ?></h5>
                        <button type="button" class="btn-close" data-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <!-- /.card-header -->
                    <form method="post" action="<?= base_url() . $this->uri->segment(1, 0) . $this->uri->slash_segment(2, 'both') ?>/simpan_verifikasi" role="form" id="form-action" enctype="multipart/form-data">
                        <div class="card-body">

                            <div class="modal-body">
                                <input type="hidden" value="<?= $data['alumni_id'] ?>" name="alumni_id" class="form-control" required="">
                                <input type="hidden" value="<?= $data['npsn'] ?>" name="npsn" class="form-control" required="">
                                
                                <div class="col-md-12 mt-3 mt-md-3">
                                    <label for="no_surat">No Surat*</label>
                                    <input type="text" class="form-control" name="no_surat" value="<?= $data['no_surat'] ?>" autocomplete="off" readonly>
                                    <?= form_error('no_surat', '<small class="text-danger pl-3">', '</small>'); ?>
                                </div>
                                <div class="col-md-12 mt-3 mt-md-3">
                                    <label for="nama_siswa">NAMA LENGKAP*</label>
                                    <input type="text" class="form-control" name="nama_siswa" value="<?= $data['nama_siswa'] ?>" autocomplete="off" readonly>
                                    <?= form_error('nama_siswa', '<small class="text-danger pl-3">', '</small>'); ?>
                                </div>
                                <div class="col-md-12 mt-3 mt-md-3">
                                    <label for="nis">NIS*</label>
                                    <input type="text" class="form-control" name="nis" value="<?= $data['nis'] ?>" autocomplete="off" readonly>
                                    <?= form_error('nis', '<small class="text-danger pl-3">', '</small>'); ?>
                                </div>
                                <div class="col-md-12 mt-3 mt-md-3">
                                    <label for="nisn">NISN*</label>
                                    <input type="text" class="form-control" name="nisn" value="<?= $data['nisn'] ?>" autocomplete="off" readonly>
                                    <?= form_error('nisn', '<small class="text-danger pl-3">', '</small>'); ?>
                                </div>
                                <div class="col-md-12 mt-3 mt-md-3">
                                    <label for="tahun_pelajaran">Tahun Pelajaran*</label>
                                    <input type="text" class="form-control" name="tahun_pelajaran" value="<?= $data['tahun_pelajaran'] ?>" autocomplete="off" readonly>
                                    <?= form_error('tahun_pelajaran', '<small class="text-danger pl-3">', '</small>'); ?>
                                </div>
                                
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                <button type="submit" class="btn btn-primary">Proses</button>
                            </div>
                        </div>
                        <!-- /.card-body -->
                    </form>
                </div>
                <!-- /.card -->
            </div>
            <!-- form start -->
        </div>
        <!-- /.modal-content -->

    </div>
    <!-- /.modal-dialog -->
</div>