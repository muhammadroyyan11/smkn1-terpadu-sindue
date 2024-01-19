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
                                    <label>Telp</label>
                                    <label>: <?= $alumni['telp'] ?></label>
                                </div>
                                <div class="mb-3">
                                    <label>Email</label>
                                    <label>: <?= $alumni['email'] ?></label>
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