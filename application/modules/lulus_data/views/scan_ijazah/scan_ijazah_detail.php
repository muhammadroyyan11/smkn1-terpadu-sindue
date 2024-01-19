<div class="modal fade modal-detail" id="modal-lg">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-lg">
                <div class="card card-primary card-outline">
                    <div class="modal-header">
                        <h5 class="modal-title">Detail Alumni</h5>
                        <button type="button" class="btn-close" data-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <!-- /.card-header -->                  
                        <div class="card-body">
                            <div class="modal-body">
                                <div class="col-8">
                                    <div class="mb-3">
                                        <label>No Surat</label>
                                        <label>: <?= $alumni['no_surat'] ?></label>                                       
                                    </div>
                                </div>      
                                <div class="col-4">
                                    <div class="mb-3">
                                        <label>Tahun Pelajaran</label>     
                                        <label>: <?= $alumni['tahun_pelajaran'] ?></label>                             
                                    </div>
                                </div>
                                <div class="mb-3">
                                    <label>Nama Siswa</label>
                                    <label>: <?= $alumni['nama_siswa'] ?></label>                               
                                </div> 
                                <div class="col-6">
                                    <div class="mb-3">
                                        <label for="nis">NIS</label>
                                        <label for="">: <?= $alumni['nis'] ?></label>
                                    </div>
                                </div>   
                                <div class="col-6">
                                    <div class="mb-3">
                                        <label for="nisn">NISN</label>
                                        <label for="">: <?= $alumni['nisn'] ?></label>                                        
                                    </div> 
                                </div>                                   
                                <div class="mb-3">
                                    <label>File Ijazah : </label>
                                    <label>
                                        <?php if($alumni['file_ijazah'] == ''){ ?>
                                            <img src="<?= base_url(); ?>panel/dist/upload/file_ijazah/200x200.png" alt="..." style="width:100%;max-width:250px">
                                        <?php }else{ ?>
                                            <img src="<?= base_url(); ?>panel/dist/upload/file_ijazah/<?= $alumni['file_ijazah'] ?>" alt="..." style="width:100%;max-width:750px">                                            
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