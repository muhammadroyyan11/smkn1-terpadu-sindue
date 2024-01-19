<div class="modal fade modal-edit" id="modal-lg">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-lg">
                <div class="card card-primary card-outline">
                    <div class="modal-header">
                        <h5 class="modal-title">Update Biaya Legalisir</h5>
                        <button type="button" class="btn-close" data-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <!-- /.card-header -->
                    <form method="post" action="<?= base_url() . $this->uri->segment(1, 0) . $this->uri->slash_segment(2, 'both') ?>/simpan_bayar" role="form" id="form-action" enctype="multipart/form-data">
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
                                    <!-- <div class="col-4">
                                        <div class="mb-3">
                                            <label>Jenis Bayar</label>
                                            <div class="mb-3">
                                               <select class="form-control" name="status_bayar" id="status_bayar">
                                                    <option selected>Pilih Jenis Bayar</option>
                                                    <option value="1">Bayar Chas</option>
                                                    <option value="2">Bayar Transfer</option>
                                               </select>
                                            </div>
                                        </div>
                                    </div>           -->
                                    <div class="col-6">
                                        <div class="mb-3">
                                            <label>Jumalah Bayar (contoh : 90000)</label>
                                            <div class="mb-3">
                                                <input type="text" id="jum_bayar" name="jum_bayar" value="<?= $legalisir['jum_bayar'] ?>" class="form-control" placeholder="contoh : 90000" required>
                                                <?= form_error('jum_bayar', '<small class="text-danger pl-3">', '</small>'); ?>
                                            </div>
                                        </div>
                                    </div>                         
                                    <!-- <div class="col-4">
                                        <div class="mb-3">
                                            <label>Tanggal Bayar</label>
                                            <div class="mb-3">
                                                <input type="date" id="tgl_bayar" name="tgl_bayar" value="<?= $legalisir['tgl_bayar'] ?>" class="form-control" placeholder=" " required>
                                                <?= form_error('tgl_bayar', '<small class="text-danger pl-3">', '</small>'); ?>
                                            </div>
                                        </div>
                                    </div>                                 -->
                                </div> 
                                <!-- <div class="col-md-12">
                                    <label>File Bayar (maksimal 2 mb)</label>
                                    <div class="mb-3 text-center">
                                        <?php if($legalisir['file_bayar'] == ''){ ?>
                                            <img src="<?= base_url(); ?>panel/dist/upload/file_bayar/200x200.png" alt="..." style="width:100%;max-width:250px">
                                        <?php }else{ ?>
                                            <img src="<?= base_url(); ?>panel/dist/upload/file_bayar/<?= $legalisir['file_bayar'] ?>" alt="..." style="width:100%;max-width:750px">
                                            <input type="hidden" name="old_image" value="<?= $legalisir['file_bayar'] ?>" />
                                        <?php } ?>                                       
                                    </div>                                   
                                </div> -->
                                <!-- <div class="col-4">
                                    <div class="mb-3">
                                        <input type="file" class="form-control" id="file_bayar" name="file_bayar" placeholder="">
                                    </div>
                                </div> -->
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