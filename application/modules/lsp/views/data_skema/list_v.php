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
                                         <th>Kode Skema</th>
                                         <th>Nama Skema</th>
                                         <th>Kategori</th>
                                         <th>Bidang</th>
                                         <th>Mea</th>
                                         <th>Unit</th>
                                         <th>Status</th>
                                         <th>Action</th>
                                     </tr>
                                 </thead>
                                 <tbody>
                                     <?php
                                        $no = 0;
                                        foreach ($skema as $sk) :
                                            $no++ ?>

                                         <tr>
                                             <td><?= $no; ?></td>
                                             <td><?= $sk['kode_skema'] ?></td>
                                             <td><?= $sk['nama_skema'] ?></td>                                            
                                             <td><?= $sk['kategori'] ?></td>
                                             <td><?= $sk['bidang'] ?></td>
                                             <td><?= $sk['mea'] ?></td>
                                             <td><?= $sk['unit'] ?></td>
                                             <td>
                                                 <?php if ($sk['status'] == 1) { ?>
                                                     Aktif
                                                 <?php } else { ?>
                                                     Tidak Aktif
                                                 <?php } ?>
                                             </td>
                                             <td>
                                                 <a class="btn btn-sm btn-warning mb-1" title="Edit" id="edit_slide" data-bs-toggle="modal" data-bs-target="#editModal" data-id_skema="<?= $sk['id_skema']; ?>" data-kode_skema="<?= $sk['kode_skema']; ?>" data-nama_skema="<?= $sk['nama_skema']; ?>" data-kategori="<?= $sk['kategori']; ?>"data-bidang="<?= $sk['bidang']; ?>" data-mea="<?= $sk['mea']; ?>" data-unit="<?= $sk['unit']; ?>" data-status="<?= $sk['status']; ?>" ><i class="fa fa-edit"></i> </a>
                                                 <a href="<?= base_url() . $this->uri->segment(1, 0) . $this->uri->slash_segment(2, 'both') ?>/deldata/<?= $sk['id_skema'] ?>" class="btn btn-sm btn-danger btn-hapus"><i class="fa fa-trash-alt"></i> </a>
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
                 <h5 class="modal-title">Tambah Data Skema</h5>
                 <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
             </div>
             <form method="post" action="<?= base_url() . $this->uri->segment(1, 0), $this->uri->slash_segment(2, 'both') ?>/simpan_tambah" role="form" id="form-action" enctype="multipart/form-data">
                 <div class="modal-body">
                     <div class="mb-3">
                         <label for="kode_skema">Kode Skema</label>
                         <input type="text" class="form-control" name="kode_skema" placeholder="Kode Skema" autocomplete="off" required>
                         <?= form_error('kode_skema', '<small class="text-danger pl-3">', '</small>'); ?>
                     </div>
                     <div class="mb-3">
                         <label>Nama Skema</label>
                         <textarea type="text" name="nama_skema" class="form-control" placeholder="Nama Skema" required=""></textarea>
                         <?= form_error('nama_skema', '<small class="text-danger pl-3">', '</small>'); ?>
                     </div>
                     <div class="mb-3">
                         <label for="kategori">Kategori</label>
                         <input type="text" class="form-control" name="kategori" placeholder="Kategori" autocomplete="off" required>
                         <?= form_error('kategori', '<small class="text-danger pl-3">', '</small>'); ?>
                     </div>
                     <div class="mb-3">
                         <label for="bidang">Bidang</label>
                         <input type="text" class="form-control" name="bidang" placeholder="Bidang" autocomplete="off" required>
                         <?= form_error('bidang', '<small class="text-danger pl-3">', '</small>'); ?>
                     </div>
                     <div class="mb-3">
                         <label for="mea">Mea</label>
                         <input type="text" class="form-control" name="mea" placeholder="Mea" autocomplete="off" required>
                         <?= form_error('mea', '<small class="text-danger pl-3">', '</small>'); ?>
                     </div>
                     <div class="mb-3">
                         <label for="unit">Unit</label>
                         <input type="text" class="form-control" name="unit" placeholder="Unit" autocomplete="off" required>
                         <?= form_error('unit', '<small class="text-danger pl-3">', '</small>'); ?>
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
                 <h5 class="modal-title">Update Profil Guru</h5>
                 <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
             </div>

             <form method="post" action="<?= base_url() . $this->uri->segment(1, 0) . $this->uri->slash_segment(2, 'both') ?>/simpan_edit" role="form" id="form-action" enctype="multipart/form-data">
                <div class="card-body">
                     <div class="modal-body" id="modal-edit">
                         <input type="hidden" class="form-control" id="id_skema" name="id_skema">
                         <div class="mb-3">
                             <label for="kode_skema">Kode Skema</label>
                             <input type="text" class="form-control" id="kode_skema" name="kode_skema" placeholder="Kode Skema">
                         </div>
                         <div class="mb-3">
                             <label>Nama Skema</label>
                             <textarea type="text" class="form-control" id="nama_skema" name="nama_skema" placeholder="Deskripsi" style="height:100px;width:100%;max-width:500px"></textarea>
                         </div>
                         <div class="mb-3">
                             <label for="nik">Kategori</label>
                             <input type="text" class="form-control" id="kategori" name="kategori" placeholder="Kategori">
                         </div>
                         <div class="mb-3">
                             <label for="nik">Bidang</label>
                             <input type="text" class="form-control" id="bidang" name="bidang" placeholder="Bidang">
                         </div>
                         <div class="mb-3">
                             <label for="nik">Mea</label>
                             <input type="text" class="form-control" id="mea" name="mea" placeholder="Mea">
                         </div>
                         <div class="mb-3">
                             <label for="nik">Unit</label>
                             <input type="text" class="form-control" id="unit" name="unit" placeholder="Unit">
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
         var id_skema = $(this).data('id_skema');
         var kode_skema = $(this).data('kode_skema');
         var nama_skema = $(this).data('nama_skema');
         var kategori = $(this).data('kategori');
         var bidang = $(this).data('bidang');
         var mea = $(this).data('mea');
         var unit = $(this).data('unit');
         var status = $(this).data('status');        
         $("#modal-edit #id_skema").val(id_skema);
         $("#modal-edit #kode_skema").val(kode_skema);
         $("#modal-edit #nama_skema").val(nama_skema);
         $("#modal-edit #kategori").val(kategori);
         $("#modal-edit #bidang").val(bidang);
         $("#modal-edit #mea").val(mea);
         $("#modal-edit #unit").val(unit);
         $("#modal-edit #status").val(status);        
     })
 </script>