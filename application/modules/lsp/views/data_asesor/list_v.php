 <main id="main" class="main">

     <div class="pagetitle">
         <h1><?= $title; ?></h1>
         <nav>
             <ol class="breadcrumb">
                 <li class="breadcrumb-item"><a href="index.html"><?= $home; ?></a></li>
                 <li class="breadcrumb-item active"><?= $title; ?></li>
             </ol>
         </nav>
     </div><!-- End Page Title -->

     <!-- Main content -->
     <section class="section dashboard">
         <div class="row">

             <div class="col-12">
                 <!-- Default box -->
                 <?= form_error('menu', '<div class="alert alert-danger" role="alert">', '</div>'); ?>
                 <?= $this->session->flashdata('message'); ?>     
                 <div class="card">
                     <div class="card-body">
                        <div class="card-header">
                            <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                                <?php if ($cek_akses['role_id'] == 1) : ?>                                
                                    <a href="" class="btn btn-primary font-weight-bolder font-size-sm mr-3" data-bs-toggle="modal" data-bs-target="#newRoleModal"> <span class="fa fa-plus"></span> Tambah Data</a>
                                <?php endif ?>
                            </div>     
                        </div>
                          
                         <div class="table-responsive">
                            <table class="table datatable" style="font-size: 14px">
                                 <thead>
                                     <tr>
                                         <th class="text-center">
                                             #
                                         </th>
                                         <th>Nama Asesor</th>
                                         <th>No Registrasi</th>
                                         <th>Alamat</th>
                                         <th>Status</th>
                                         <th>Action</th>
                                     </tr>
                                 </thead>
                                 <tbody>
                                     <?php
                                        $no = 0;
                                        foreach ($asesor as $sk) :
                                            $no++ ?>                                   
                                             <tr>
                                                 <td><?= $no; ?></td>
                                                 <td><?= $sk['nama_asesor'] ?></td>
                                                 <td><?= $sk['no_registrasi'] ?></td>
                                                 <td><?= $sk['alamat'] ?></td>
                                                 <td>
                                                     <?php if ($sk['status'] == 1) { ?>
                                                         Aktif
                                                     <?php } else { ?>
                                                         Tidak Aktif
                                                     <?php } ?>
                                                 </td>
                                                 <td>
                                                     <a class="btn btn-sm btn-warning" title="Edit" id="edit_slide" data-bs-toggle="modal" data-bs-target="#editModal" data-id_asesor="<?= $sk['id_asesor']; ?>" data-nama_asesor="<?= $sk['nama_asesor']; ?>" data-no_registrasi="<?= $sk['no_registrasi']; ?>" data-alamat="<?= $sk['alamat']; ?>" data-status="<?= $sk['status']; ?>"><i class="fa fa-edit"></i> </a>
                                                     <a href="<?= base_url() . $this->uri->segment(1, 0) . $this->uri->slash_segment(2, 'both') ?>/deldata/<?= $sk['id_asesor'] ?>" class="btn btn-sm btn-danger btn-hapus"><i class="fa fa-trash-alt"></i> </a>
                                                 </td>
                                             </tr>                                      
                                     <?php endforeach ?>
                                 </tbody>
                             </table>
                         </div>
                     </div>
                     <!-- /.card-body -->
                 </div>
                 <!-- /.card -->
             </div>

         </div>
     </section>

 </main>

 <!--modal add--->
 <div class="modal fade" id="newRoleModal" tabindex="-1" role="dialog" aria-labelledby="newRoleModalLabel" aria-hidden="true">
     <div class="modal-dialog" role="document">
         <div class="modal-content">
             <div class="modal-header">
                 <h5 class="modal-title">Tambah Asesor</h5>
                 <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
             </div>
             <form method="post" action="<?= base_url() . $this->uri->segment(1, 0), $this->uri->slash_segment(2, 'both') ?>/simpan_tambah" role="form" id="form-action" enctype="multipart/form-data">
                 <div class="modal-body">
                     <div class="mb-3">
                         <label for="nama_asesor">Nama Asesor</label>
                         <input type="text" class="form-control" name="nama_asesor" placeholder="Nama Asesor" autocomplete="off" required>
                         <?= form_error('nama_asesor', '<small class="text-danger pl-3">', '</small>'); ?>
                     </div>
                     <div class="mb-3">
                         <label for="no_registrasi">No Registrasi</label>
                         <input type="text" class="form-control" name="no_registrasi" placeholder="No Registrasi" autocomplete="off" required>
                         <?= form_error('no_registrasi', '<small class="text-danger pl-3">', '</small>'); ?>
                     </div>
                     <div class="mb-3">
                         <label>Alamat</label>
                         <textarea type="text" name="alamat" class="form-control" placeholder="Alamat" required=""></textarea>
                         <?= form_error('alamat', '<small class="text-danger pl-3">', '</small>'); ?>
                     </div>                  
                     <div class="modal-footer">
                         <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                         <button type="submit" class="btn btn-primary"><i class="bi bi-save"></i> Save</button>
                     </div>
                 </div>
             </form>
         </div>
     </div>
 </div>

 <!--modal update--->
 <div id="editModal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="newRoleModalLabel" aria-hidden="true">
     <div class="modal-dialog" role="document">
         <div class="modal-content">
             <div class="modal-header">
                 <h5 class="modal-title">Update Asessor</h5>
                 <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
             </div>

             <form method="post" action="<?= base_url() . $this->uri->segment(1, 0) . $this->uri->slash_segment(2, 'both') ?>/simpan_edit" role="form" id="form-action" enctype="multipart/form-data">
                 <!-- <form id="form" role="form" id="form-action" enctype="multipart/form-data"> -->
                 <div class="card-body">
                     <div class="modal-body" id="modal-edit">
                         <input type="hidden" class="form-control" id="slide_id" name="slide_id">
                         <div class="mb-3">
                             <label for="nik">Judul</label>
                             <input type="text" class="form-control" id="judul" name="judul" placeholder="Judul">
                         </div>
                         <div class="mb-3">
                             <label>Text</label>
                             <textarea type="text" class="form-control" id="text" name="text" placeholder="Deskripsi" style="height:100px;width:100%;max-width:500px"></textarea>
                         </div>
                         <div class="mb-3">
                             <div class="control-label">Status</div>
                             <label class="custom-switch mt-2">
                                 <input type="checkbox" name="status" class="custom-switch-input" value='1' <?php if ("status" == 1) {
                                                                                                                echo "checked";
                                                                                                            } ?>>
                                 <span class="custom-switch-indicator"></span>
                                 <span class="custom-switch-description"> Pilih Status</span>
                             </label>
                         </div>
                         <div class="mb-3">
                             <label>Gambar</label>
                             <div class="mb-3 text-center">
                                 <img src="" alt="..." style="width:100%;max-width:100px" id="pict">
                                 <input type="hidden" name="old_image" id="gambar" name="gambar" />
                             </div>
                         </div>
                         <div class="mb-3">
                             <input type="file" class="form-control" id="gambar" name="gambar" placeholder="Gambar">
                         </div>

                     </div>
                     <div class="modal-footer">
                         <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                         <button type="submit" class="btn btn-primary" name="editModal" value="simpan"><i class="bi bi-save"></i> Save</button>
                     </div>
                 </div>
                 <!-- /.card-body -->
             </form>
         </div>
     </div>
 </div>

 <!-- jQuery -->
 <script src="<?= base_url() ?>panel/plugins/jquery/jquery.min.js"></script>
 <script type="text/javascript">
     $(document).on("click", "#edit_slide", function() {
         var slide_id = $(this).data('slide_id');
         var judul = $(this).data('judul');
         var text = $(this).data('text');
         var status = $(this).data('status');
         var gambar = $(this).data('gambar');
         $("#modal-edit #slide_id").val(slide_id);
         $("#modal-edit #judul").val(judul);
         $("#modal-edit #text").val(text);
         $("#modal-edit #status").val(status);
         $("#modal-edit #pict").attr("src", "<?= base_url(); ?>panel/dist/upload/profil_slide/" + gambar);
     })
 </script>