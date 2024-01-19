<div class="modal fade modal-detail" id="modal-lg">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-lg">
                <div class="card card-primary card-outline">
                    <div class="modal-header">
                        <h5 class="modal-title">Detail P5</h5>
                        <button type="button" class="btn-close" data-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body">
                        <div class="modal-body">
                            <div class="mb-3">
                                <label>Judul</label>
                                : <?= $p5['p5'] ?>
                            </div>
                            <div class="mb-3">
                                <img src="<?= base_url(); ?>panel/dist/upload/profil_p5/<?= $p5['gambar'] ?>" alt="..." style="width:100%;max-width:200px">
                            </div>                            
                            <div class="mb-3">
                                <label>Deskripsi</label>
                                <p><?= $p5['deskripsi'] ?></p>
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