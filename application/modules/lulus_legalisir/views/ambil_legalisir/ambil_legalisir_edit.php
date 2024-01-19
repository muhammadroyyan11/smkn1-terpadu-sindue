<div class="modal fade modal-edit" id="modal-lg">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-lg">
                <div class="card card-primary card-outline">
                    <div class="modal-header">
                        <h5 class="modal-title">Update Ambil Legalisir</h5>
                        <button type="button" class="btn-close" data-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <!-- /.card-header -->
                    <form method="post" action="<?= base_url() . $this->uri->segment(1, 0) . $this->uri->slash_segment(2, 'both') ?>/simpan_ambil" role="form" id="form-action" enctype="multipart/form-data">
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
                                    <div class="col-6">
                                        <div class="mb-3">
                                            <label>Tanggal Pengambilan</label>
                                            <div class="mb-3">
                                                <input type="date" id="tgl_pengambilan" name="tgl_pengambilan" value="<?= $legalisir['tgl_pengambilan'] ?>" class="form-control" placeholder=" " required>
                                                <?= form_error('tgl_pengambilan', '<small class="text-danger pl-3">', '</small>'); ?>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-6">
                                        <div class="mb-3">
                                            <label>Jenis Pengambilan</label>
                                            <div class="mb-3">
                                                <select class="form-control" name="status_ambil" id="status_ambil">
                                                    <option selected>Pilih Jenis Pengambilan</option>
                                                    <option value="1">Pengambilan Datang</option>
                                                    <option value="2">Pengambilan Dikirim</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>            
                                    <div class="col-6">
                                        <div class="mb-3">
                                            <label>Keterangan</label>
                                            <div class="mb-3">
                                               <textarea name="ket_pengambilan" id="" cols="35" rows="5" required><?= $legalisir['ket_pengambilan'] ?></textarea>
                                               <?= form_error('ket_pengambilan', '<small class="text-danger pl-3">', '</small>'); ?>
                                            </div>
                                        </div>
                                    </div>          
                                    <div class="col-6">
                                        <div class="mb-3">
                                            <label> Alamat </label>
                                            <div class="mb-3">
                                                <textarea name="alamat_terbaru" id="" cols="35" rows="5" required><?= $legalisir['alamat_terbaru'] ?></textarea>
                                                <?= form_error('alamat_terbaru', '<small class="text-danger pl-3">', '</small>'); ?>
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