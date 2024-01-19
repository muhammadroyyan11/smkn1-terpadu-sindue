<div class="modal fade modal-detail" id="modal-lg">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-lg">
                <div class="card card-primary card-outline">
                    <div class="modal-header">
                        <h5 class="modal-title">Detail Jurusan</h5>
                        <button type="button" class="btn-close" data-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body">
                        <div class="modal-body">
                            <div class="mb-3">
                                <label>Jurusan</label>
                                : <?= $jurusan['jurusan'] ?>
                            </div>
                            <div class="mb-3">
                                <img src="<?= base_url(); ?>panel/dist/upload/profil_jurusan/<?= $jurusan['gambar'] ?>" alt="..." style="width:100%;max-width:200px">
                            </div>                            
                            <div class="mb-3">
                                <label>Deskripsi</label>
                                <p><?= $jurusan['deskripsi'] ?></p>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /.card -->
            </div>
            <!-- form start -->
        </div>
        <!-- /.modal-content -->

    </div>
    <!-- /.modal-dialog -->
</div>