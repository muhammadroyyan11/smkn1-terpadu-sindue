<div class="modal fade modal-action" id="modal-lg">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-lg">
                <div class="card card-primary card-outline">
                    <div class="modal-header">
                        <h5 class="modal-title">Tambah Video</h5>
                        <button type="button" class="btn-close" data-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <!-- /.card-header -->
                    <form method="post" action="<?= base_url() . $this->uri->segment(1, 0) ?>/simpan_tambah_video" role="form" id="form-action" enctype="multipart/form-data">
                        <div class="card-body">
                        <input type="hidden" name="user_update" value="<?= $pegawai['nama_pegawai'] ?>">
                            <div class="modal-body">
                                <div class="mb-3">
                                    <label>Judul Video</label>
                                    <input type="text" id="judul_video" name="judul_video" class="form-control" placeholder="Judul" required="">
                                </div>
                                <div class="mb-3">
                                    <label>Link Video</label>
                                    <input type="text" id="url_video" name="url_video" class="form-control" placeholder="Link Video" required="">
                                </div>
                                <div class="mb-3">
                                    <label>Upload gambar ukuran 200 x 200</label>
                                    <div class="mb-3 text-center">
                                        <img src="<?= base_url(); ?>panel/dist/upload/profil_video/200x200.png" alt="..." style="width:100%;max-width:100px">
                                    </div>
                                </div>
                                <div class="mb-3">
                                    <label>Gambar</label>
                                    <div class="mb-3 text-center">
                                        <input type="file" class="form-control" id="gambar_video" name="gambar_video" placeholder="Gambar">
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