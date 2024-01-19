<div class="modal fade modal-detail" id="modal-lg">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-lg">
                <div class="card card-primary card-outline">
                    <div class="modal-header">
                        <h5 class="modal-title">Detail Legalisir</h5>
                        <button type="button" class="btn-close" data-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="card-body">
                            <input type="hidden" name="legalisir_id" value="<?= $legalisir['legalisir_id'] ?>">
                            <div class="modal-body">
                                <div class="row">  
                                    <div class="col-4">
                                        <label for="nis">NIS</label>
                                        <div class="mb-3">                                            
                                            <label for=""><?= $legalisir['nis'] ?></label>
                                        </div>
                                    </div>                                 
                                    <div class="col-8">
                                        <label for="nisn">NISN</label>
                                        <div class="mb-3">
                                           <label for=""><?= $legalisir['nisn'] ?></label>                                            
                                        </div> 
                                    </div>                               
                                </div>    
                                <div class="row">  
                                    <div class="col-4">
                                        <label>Tanggal Pengajuan :</label>
                                        <div class="mb-3">
                                            <label for=""><?= $legalisir['tgl_pengajuan'] ?></label>                                           
                                        </div>
                                    </div>
                                    <div class="col-8">
                                        <label>Nama Siswa :</label>
                                        <div class="mb-3">                                          
                                            <label for=""><?= $legalisir['nama_siswa'] ?></label>
                                        </div>  
                                    </div>
                                </div>                       
                                <div class="row">
                                    <div class="col-4">
                                        <div class="mb-3">
                                            <label>Tujuan :</label>
                                            <div class="mb-3">
                                                <label for=""><?= $legalisir['tujuan'] ?></label>                                                
                                            </div>
                                        </div>
                                    </div>                                   
                                    <div class="col-8">
                                        <label>Keterangan :</label>
                                        <div class="mb-3">                                           
                                            <label for=""><?= $legalisir['ket_pengajuan'] ?></label>
                                        </div>            
                                    </div>                                
                                </div>                   

                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
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