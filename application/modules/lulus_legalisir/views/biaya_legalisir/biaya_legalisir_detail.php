<div class="modal fade modal-detail" id="modal-lg">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-lg">
                <div class="card card-primary card-outline">
                    <div class="modal-header">
                        <h5 class="modal-title">Detail Biaya Legalisir</h5>
                        <button type="button" class="btn-close" data-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <!-- /.card-header -->                  
                        <div class="card-body">
                            <div class="modal-body">                                
                                <div class="mb-3">
                                    <label>Nama Siswa</label>
                                    <label>: <?= $legalisir['nama_siswa'] ?></label>                               
                                </div> 
                                <div class="col-6">
                                    <div class="mb-3">
                                        <label for="nis">NIS</label>
                                        <label for="">: <?= $legalisir['nis'] ?></label>
                                    </div>
                                </div>   
                                <div class="col-6">
                                    <div class="mb-3">
                                        <label for="nisn">NISN</label>
                                        <label for="">: <?= $legalisir['nisn'] ?></label>                                        
                                    </div> 
                                </div>     
                                <div class="row">
                                    <div class="col-6">
                                        <div class="mb-3">
                                            <label for="nisn">Jumlah Bayar</label>
                                            <label for="">: <?= 'Rp ' . number_format($legalisir['jum_bayar'], 0, ',', '.'); ?></label>                                        
                                        </div> 
                                    </div>    
                                    <div class="col-6">
                                        <div class="mb-3">
                                            <label for="nisn">Tanggal Bayar</label>
                                            <label for="">: <?= $legalisir['tgl_bayar'] ?></label>                                        
                                        </div> 
                                    </div>    
                                </div>
                                                          
                                <div class="mb-3">
                                    <label>File Bayar : </label>
                                    <label>
                                        <?php if($legalisir['file_bayar'] == ''){ ?>
                                            <img src="<?= base_url(); ?>panel/dist/upload/file_bayar/200x200.png" alt="..." style="width:100%;max-width:250px">
                                        <?php }else{ ?>
                                            <img src="<?= base_url(); ?>panel/dist/upload/file_bayar/<?= $legalisir['file_bayar'] ?>" alt="..." style="width:100%;max-width:750px">                                            
                                        <?php } ?>
                                    </label>
                                </div>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                            </div>
                        </div>
                        <!-- /.card-body -->                  
                </div>
                <!-- /.card -->
            </div>
            <!-- form start -->
        </div>
        <!-- /.modal-content -->

    </div>
    <!-- /.modal-dialog -->
</div>