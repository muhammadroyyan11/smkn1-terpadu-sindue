<div class="modal fade modal-action" id="modal-lg">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title"><?= ucwords($this->uri->segment(4, 0)) ?> Data</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="col-md-12">
                <div class="card">
                    <form method="post" action="" role="form" id="form-action" enctype="multipart/form-data">
                        <div class="modal-body">
                            <input type="hidden" name="npsn" value="<?= $pegawai['npsn'] ?>">                            
                            <div class="form-group">
                                <label for="tahun" class="col-sm-3 control-label">Tahun <span class="symbol required"> </span></label>
                                <div class="col-sm-9">
                                    <?= form_dropdown('tahun', $p_tahun, '', 'class="form-control" id="tahun" required'); ?>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="tahun" class="col-sm-3 control-label">Semester <span class="symbol required"> </span></label>
                                <div class="col-sm-9">
                                    <?= form_dropdown('semester', $p_semester, '', 'class="form-control" id="semester" required'); ?>
                                </div>
                            </div>                           

                        <div class="modal-footer justify-content-between">
                            <button type="button" class="btn btn-default" data-dismiss="modal">Tutup</button>
                            <button type="submit" id="simpan" class="btn btn-primary">Simpan</button>
                        </div>
                    </form>
                </div>
            </div>

        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>