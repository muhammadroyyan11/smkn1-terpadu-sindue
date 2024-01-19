<div class="modal fade modal-edit" id="modal-lg">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-lg">
                <div class="card card-primary card-outline">
                    <div class="modal-header">
                        <h5 class="modal-title">Update Video</h5>
                        <button type="button" class="btn-close" data-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <!-- /.card-header -->
                    <form method="post" action="<?= base_url() . $this->uri->segment(1, 0) ?>/simpan_edit_video" role="form" id="form-action" enctype="multipart/form-data">
                        <div class="card-body">
                            <input type="hidden" name="id_video" value="<?= $video['id_video'] ?>">
                            <input type="hidden" name="user_update" value="<?= $pegawai['nama_pegawai'] ?>">
                            <div class="modal-body">
                                <div class="mb-3">
                                    <label>Judul Video</label>
                                    <input type="text" name="judul_video" value="<?= $video['judul_video'] ?>" class="form-control" required="">
                                </div>
                                <div class="mb-3">
                                    <label>Link Vidoe</label>
                                    <input type="text" name="url_video" value="<?= $video['url_video'] ?>" class="form-control" required="">
                                </div>  
                                <div class="mb-3">
                                    <label>Gambar</label>
                                    <div class="mb-3 text-center">
                                        <img src="<?= base_url(); ?>panel/dist/upload/profil_video/<?= $video['gambar_video'] ?>" alt="..." style="width:100%;max-width:100px">
                                        <input type="hidden" name="old_image" value="<?= $video['gambar_video'] ?>" />
                                    </div>
                                </div>
                                <div class="mb-3">
                                    <input type="file" class="form-control" id="gambar_video" name="gambar_video" placeholder="Gambar">
                                </div>                              
                                <div class="mb-3">
                                    <label class="form-label">Status</label>
                                    <div class="selectgroup w-100">
                                        <label class="selectgroup-item">
                                            <input type="radio" name="status" value="1" class="selectgroup-input" checked="">
                                            <span class="selectgroup-button">Aktif</span>
                                        </label>
                                        <label class="selectgroup-item">
                                            <input type="radio" name="status" value="2" class="selectgroup-input">
                                            <span class="selectgroup-button">Tidak Aktif</span>
                                        </label>

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