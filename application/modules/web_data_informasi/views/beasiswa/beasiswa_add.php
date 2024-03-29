<div class="modal fade modal-action" id="modal-lg">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-lg">
                <div class="card card-primary card-outline">
                    <div class="modal-header">
                        <h5 class="modal-title">Tambah Beasiswa</h5>
                        <button type="button" class="btn-close" data-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <!-- /.card-header -->
                    <form method="post" action="<?= base_url() . $this->uri->segment(1, 0) ?>/simpan_beasiswa" role="form" id="form-action" enctype="multipart/form-data">
                        <div class="card-body">

                            <div class="modal-body">
                                <div class="mb-3">
                                    <label for="nik">NIS* ( Nomor Induk Siswa )</label>
                                    <input type="text" minlength="5" maxlength="18" class="form-control" name="nis" placeholder="NIS" autocomplete="off" required>
                                    <?= form_error('nik', '<small class="text-danger pl-3">', '</small>'); ?>
                                </div>
                                <div class="mb-3">
                                    <label>Nama Siswa</label>
                                    <input type="text" name="nama_siswa" class="form-control" placeholder="Nama Siswa" required="">
                                </div>
                                <div class="mb-3">
                                    <label>Tahun Pelajaran</label>
                                    <div class="mb-3">
                                        <input type="text" class="form-control" id="th_pelajaran" name="th_pelajaran" placeholder="Tahun Pelajaran">
                                    </div>
                                    <div class="mb-3">
                                        <label>Keterangan</label>
                                        <div class="mb-3">
                                            <textarea  class="form-control" id="keterangan" name="keterangan" placeholder="Keterangan" cols="10" rows="10"></textarea>
                                        </div>
                                    </div>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                    <button type="submit" class="btn btn-primary"><i class="bi bi-save"></i> Save</button>
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