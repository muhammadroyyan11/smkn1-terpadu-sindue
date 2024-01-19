<div class="modal fade modal-edit" id="modal-lg">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-lg">
                <div class="card card-primary card-outline">
                    <div class="modal-header">
                        <h5 class="modal-title">Tambah Sertifikat Webinar</h5>
                        <button type="button" class="btn-close" data-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <!-- /.card-header -->
                    <form method="post" action="<?= base_url() . $this->uri->segment(1, 0) ?>/simpan_edit_webinar" role="form" id="form-action" enctype="multipart/form-data">
                        <div class="card-body">
                            <input type="hidden" name="id_webinar" value="<?= $webinar['id_webinar'] ?>">
                            <div class="modal-body">
                                <div class="mb-3">
                                    <label for="nip">NIP/NRPTK/NUPTK</label>
                                    <input type="text" class="form-control" name="nip" value="<?= $webinar['nip'] ?>" autocomplete="off" required>
                                    <?= form_error('nip', '<small class="text-danger pl-3">', '</small>'); ?>
                                </div>
                                <div class="mb-3">
                                    <label>Nama Pendidik</label>
                                    <input type="text" name="nama_pendidik" value="<?= $webinar['nama_pendidik'] ?>" class="form-control" required="">
                                </div>

                                <div class="mb-3">
                                    <label>webinar 1</label>
                                    <div class="mb-3 text-center">
                                        <img src="<?= base_url(); ?>panel/dist/upload/sertifikat_webinar/<?= $webinar['webinar_1'] ?>" alt="..." style="width:100%;max-width:100px">
                                        <input type="hidden" name="old_image" value="<?= $webinar['webinar_1'] ?>" />
                                    </div>
                                </div>
                                <div class="mb-3">
                                    <input type="file" class="form-control" id="webinar_1" name="webinar_1" placeholder="webinar_1">
                                </div>

                                <div class="mb-3">
                                    <label>webinar 2</label>
                                    <div class="mb-3 text-center">
                                        <img src="<?= base_url(); ?>panel/dist/upload/sertifikat_webinar/<?= $webinar['webinar_2'] ?>" alt="..." style="width:100%;max-width:100px">
                                        <input type="hidden" name="old_image" value="<?= $webinar['webinar_2'] ?>" />
                                    </div>
                                </div>
                                <div class="mb-3">
                                    <input type="file" class="form-control" id="webinar_2" name="webinar_2" placeholder="webinar_2">
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