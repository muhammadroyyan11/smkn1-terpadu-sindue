<div class="modal fade modal-edit" id="modal-lg">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-lg">
                <div class="card card-primary card-outline">
                    <div class="modal-header">
                        <h5 class="modal-title">Update Alumni</h5>
                        <button type="button" class="btn-close" data-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <!-- /.card-header -->
                    <form method="post" action="<?= base_url() . $this->uri->segment(1, 0) . $this->uri->slash_segment(2, 'both') ?>/ubah_baru" role="form" id="form-action" enctype="multipart/form-data">
                        <div class="card-body">
                            <input type="hidden" name="alumni_id" value="<?= $alumni['alumni_id'] ?>">
                            <div class="modal-body">                           
                           
                                <div class="mb-3">
                                    <label>Nama Siswa</label>
                                    <input type="text" name="nama_siswa"  value="<?= $alumni['nama_siswa'] ?>" class="form-control" placeholder="Nama Siswa" required="">
                                    <?= form_error('nama_siswa', '<small class="text-danger pl-3">', '</small>'); ?>
                                </div>                           
                                <div class="row">  
                                    <div class="col-6">
                                        <div class="mb-3">
                                            <label for="nis">NIS</label>
                                            <input type="text" minlength="5" maxlength="18" name="nis" value="<?= $alumni['nis'] ?>" class="form-control"  placeholder="NIS" autocomplete="off" required>
                                            <?= form_error('nis', '<small class="text-danger pl-3">', '</small>'); ?>
                                        </div>
                                    </div>                                 
                                    <div class="col-6">
                                        <div class="mb-3">
                                            <label for="nisn">NISN</label>
                                            <input type="text" minlength="5" maxlength="18" name="nisn" value="<?= $alumni['nisn'] ?>" class="form-control"  placeholder="NISN" autocomplete="off" required>
                                            <?= form_error('nisn', '<small class="text-danger pl-3">', '</small>'); ?>
                                        </div> 
                                    </div>                               
                                </div>    
                                <div class="row">
                                    <div class="col-6">
                                        <div class="mb-3">
                                            <label>Tempat Lahir</label>
                                            <div class="mb-3">
                                                <input type="text" id="tempat_lahir" name="tempat_lahir" value="<?= $alumni['tempat_lahir'] ?>" class="form-control" placeholder="Tempat Lahir">
                                                <?= form_error('tempat_lahir', '<small class="text-danger pl-3">', '</small>'); ?>
                                            </div>
                                        </div>
                                    </div>                                   
                                    <div class="col-6">
                                        <div class="mb-3">
                                            <label>Tanggal Lahir</label>
                                            <div class="mb-3">
                                                <input type="date" id="tanggal_lahir" name="tanggal_lahir" value="<?= $alumni['tanggal_lahir'] ?>" class="form-control" placeholder="Tanggal Lahir">
                                                <?= form_error('tanggal_lahir', '<small class="text-danger pl-3">', '</small>'); ?>
                                            </div>
                                        </div>            
                                    </div>                                
                                </div> 
                                <div class="row">  
                                    <div class="col-6">
                                        <div class="mb-3">
                                            <label for="telp">Telp</label>
                                            <input type="text" minlength="5" maxlength="18" name="telp" value="<?= $alumni['telp'] ?>" class="form-control"  placeholder="telp" autocomplete="off" required>
                                            <?= form_error('telp', '<small class="text-danger pl-3">', '</small>'); ?>
                                        </div>
                                    </div>                                 
                                    <div class="col-6">
                                        <div class="mb-3">
                                            <label for="email">Email</label>
                                            <input type="text" name="email" value="<?= $alumni['email'] ?>" class="form-control"  placeholder="email" autocomplete="off" required>
                                            <?= form_error('email', '<small class="text-danger pl-3">', '</small>'); ?>
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