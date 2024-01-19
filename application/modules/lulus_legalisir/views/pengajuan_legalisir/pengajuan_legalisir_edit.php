<div class="modal fade modal-edit" id="modal-lg">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-lg">
                <div class="card card-primary card-outline">
                    <div class="modal-header">
                        <h5 class="modal-title">Update Legalisir</h5>
                        <button type="button" class="btn-close" data-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <!-- /.card-header -->
                    <form method="post" action="<?= base_url() . $this->uri->segment(1, 0) . $this->uri->slash_segment(2, 'both') ?>/simpan_legalisir" role="form" id="form-action" enctype="multipart/form-data">
                        <div class="card-body">
                            <input type="hidden" name="legalisir_id" value="<?= $legalisir['legalisir_id'] ?>">
                            <div class="modal-body">
                            
                                <div class="mb-3">
                                    <label>Nama Siswa</label>
                                    <input type="text" name="nama_siswa"  value="<?= $legalisir['nama_siswa'] ?>" class="form-control" placeholder="Nama Siswa" required="">
                                    <?= form_error('nama_siswa', '<small class="text-danger pl-3">', '</small>'); ?>
                                </div>                           
                                <div class="row">  
                                    <div class="col-6">
                                        <div class="mb-3">
                                            <label for="nis">NIS</label>
                                            <input type="text" minlength="5" maxlength="18" name="nis" value="<?= $legalisir['nis'] ?>" class="form-control"  placeholder="NIS" autocomplete="off" required>
                                            <?= form_error('nis', '<small class="text-danger pl-3">', '</small>'); ?>
                                        </div>
                                    </div>                                 
                                    <div class="col-6">
                                        <div class="mb-3">
                                            <label for="nisn">NISN</label>
                                            <input type="text" minlength="5" maxlength="18" name="nisn" value="<?= $legalisir['nisn'] ?>" class="form-control"  placeholder="NISN" autocomplete="off" required>
                                            <?= form_error('nisn', '<small class="text-danger pl-3">', '</small>'); ?>
                                        </div> 
                                    </div>                               
                                </div>    
                                <div class="row">
                                    <div class="col-4">
                                        <div class="mb-3">
                                            <label>Tujuan</label>
                                            <div class="mb-3">
                                                <input type="text" id="tujuan" name="tujuan" value="<?= $legalisir['tujuan'] ?>" class="form-control" placeholder="Tujuan Legalisir">
                                                <?= form_error('tujuan', '<small class="text-danger pl-3">', '</small>'); ?>
                                            </div>
                                        </div>
                                    </div>                                   
                                    <div class="col-8">
                                        <div class="mb-3">
                                        <label>Keterangan</label>
                                            <div class="mb-3">
                                                <textarea type="text" id="ket_pengajuan" name="ket_pengajuan" value="" class="form-control" placeholder="Digunakan untuk kebutuhan apa !!!"><?= $legalisir['ket_pengajuan'] ?></textarea>
                                                <?= form_error('ket_pengajuan', '<small class="text-danger pl-3">', '</small>'); ?>
                                            </div>
                                        </div>            
                                    </div>                                
                                </div> 
                                <div class="row">
                                    <div class="col-4">
                                        <div class="mb-3">
                                            <label>Proses Legalisir</label>
                                            <div class="mb-3">
                                                <?php if($legalisir['verifikasi'] == 1){ ?>
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="checkbox" name="verifikasi" value="0" id="flexCheckChecked" checked>
                                                        <label class="form-check-label" for="flexCheckChecked">
                                                            Sudah di Proses
                                                        </label>
                                                    </div>
                                                <?php } else { ?>
                                                    <div class="form-check">                                                   
                                                        <input class="form-check-input" type="checkbox" name="verifikasi" value="1" id="flexCheckDefault">
                                                        <label class="form-check-label" for="flexCheckDefault">
                                                            Proses
                                                        </label>
                                                    </div>
                                                <?php } ?>                                          
                                            </div>
                                        </div>
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