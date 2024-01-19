 <div class="modal fade modal-action" id="modal-lg">
     <div class="modal-dialog">
         <div class="modal-content">
             <div class="modal-lg">
                 <div class="card card-primary card-outline">
                     <div class="modal-header">
                         <h5 class="modal-title">Tambah Kuis</h5>
                         <button type="button" class="btn-close" data-dismiss="modal" aria-label="Close"></button>
                     </div>
                     <!-- /.card-header -->
                     <form method="post" action="<?= base_url() . $this->uri->segment(1, 0) . $this->uri->slash_segment(2, 'both') ?>simpan_tambah_quiz" role="form" id="form-action" enctype="multipart/form-data">
                         <div class="modal-body">
                             <div class="alert alert-danger" style="display:none">
                             </div>
                             <input type="hidden" name="kd_sekolah" id="kd_sekolah" value="<?= $pegawai['npsn'] ?>" class="form-control" placeholder="">
                             <div class="form-group">
                                 <label for="nama_mapel">Nama Pembelajaran</label>
                                 <select class="form-control" name="nama_mapel" id="nama_mapel">
                                     <option value=""></option>
                                     <?php foreach ($mapel as $mapel) : ?>
                                         <option value="<?= $mapel['nama_mapel'] ?>"><?= $mapel['nama_mapel'] ?></option>
                                     <?php endforeach; ?>
                                 </select>
                                 <small id="helpmapel" class="text-danger"></small>
                             </div>
                             <div class="form-group">
                                 <label for="kelas">Untuk Kelas</label>
                                 <span id="klas"></span>
                                 <select class="select2 form-control" multiple="multiple" name="kelas" id="kelas">
                                     <?php foreach ($kelas as $kl) { ?>
                                         <option value="<?= $kl['tingkat'] ?>"><?= $kl['nama'] ?></option>
                                     <?php } ?>
                                 </select>
                                 <small id="helpkelas" class="text-danger"></small>
                             </div>

                             <div class="row">
                                 <div class="col-md-6">
                                     <div class="form-group">
                                         <label for="status">Status</label>
                                         <select class="form-control" name="status" id="status">
                                             <option value="1">Aktif</option>
                                             <option value="0">Tidak Aktif</option>
                                         </select>
                                     </div>
                                 </div>
                                 <div class="col-md-6">
                                     <div class="form-group">
                                         <label for="id_guru">Guru</label>
                                         <select class="form-control" name="id_guru" id="id_guru">
                                             <?php foreach ($guru as $guru) { ?>
                                                 <option value="<?= $guru['nik'] ?>"><?= $guru['nama_pegawai'] ?></option>
                                             <?php } ?>
                                         </select>
                                     </div>
                                 </div>
                             </div>

                         </div>
                         <div class="modal-footer">
                             <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                             <button id='btn-submit' class="btn btn-primary">Save changes</button>
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