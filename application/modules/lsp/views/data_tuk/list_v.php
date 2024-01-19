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
                                        <th scope="col">#</th>
                                        <th>Kode</th>
                                        <th>Jenis TUK</th>
                                        <th>Nama TUK</th>
                                        <th>Alamat</th>
                                        <th>Satatus</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    $no = 0;
                                    foreach ($data_tuk as $sk) :
                                        $no++ ?>
                                        <tr>
                                            <td><?= $no; ?></td>
                                            <td><?= $sk['kode'] ?></td>
                                            <td><?= $sk['jenis_tuk'] ?></td>
                                            <td><?= $sk['nama_tuk'] ?></td>
                                            <td><?= $sk['alamat'] ?></td>
                                            <td>
                                                <?php if ($sk['status'] == 1) { ?>
                                                    Aktif
                                                <?php } else { ?>
                                                    Tidak Aktif
                                                <?php } ?>
                                            </td>
                                            <td>
                                                <a class="btn btn-sm btn-warning" title="Edit" id="edit_guru" data-bs-toggle="modal" data-bs-target="#editModal" data-id_tuk="<?= $sk['id_tuk']; ?>" data-kode="<?= $sk['kode']; ?>" data-jenis_tuk="<?= $sk['jenis_tuk']; ?>" data-nama_tuk="<?= $sk['nama_tuk']; ?>" data-alamat="<?= $sk['alamat']; ?>" data-status="<?= $sk['status']; ?>" ><i class="fa fa-edit"></i></a>
                                                <a href="<?= base_url() . $this->uri->segment(1, 0) . $this->uri->slash_segment(2, 'both') ?>/deldata/<?= $sk['id_tuk'] ?>" class="btn btn-sm btn-danger btn-hapus"><i class="fa fa-trash-alt"></i></a>
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
                <h5 class="modal-title">Tambah Data Tuk</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form method="post" action="<?= base_url() . $this->uri->segment(1, 0), $this->uri->slash_segment(2, 'both') ?>/simpan_tambah" role="form" id="form-action" enctype="multipart/form-data">
                <div class="modal-body">
                    <div class="mb-3">
                        <label for="nik">Kode</label>
                        <input type="text" class="form-control" name="kode" placeholder="Kode" autocomplete="off" required>
                        <?= form_error('kode', '<small class="text-danger pl-3">', '</small>'); ?>
                    </div>
                    <div class="mb-3">
                        <label for="nik">Jenis TUK</label>
                        <input type="text" class="form-control" name="jenis_tuk" placeholder="Jenis TUK" autocomplete="off" required>
                        <?= form_error('jenis_tuk', '<small class="text-danger pl-3">', '</small>'); ?>
                    </div>
                    <div class="mb-3">
                        <label for="nik">Nama TUK</label>
                        <input type="text" class="form-control" name="nama_tuk" placeholder="Nama TUK" autocomplete="off" required>
                        <?= form_error('nama_tuk', '<small class="text-danger pl-3">', '</small>'); ?>
                    </div>
                    <div class="mb-3">
                        <label>Alamat</label>
                        <textarea type="text" name="alamat" class="form-control" placeholder="Alamat" required=""></textarea>
                        <?= form_error('alamat', '<small class="text-danger pl-3">', '</small>'); ?>
                    </div>             
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Save</button>
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
                <h5 class="modal-title">Update Data Tuk</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form method="post" action="<?= base_url() . $this->uri->segment(1, 0) . $this->uri->slash_segment(2, 'both') ?>/simpan_edit" id="form" role="form" id="form-action" enctype="multipart/form-data">
                <div class="card-body">
                    <div class="modal-body" id="modal-edit">
                        <input type="hidden" class="form-control" id="id_tuk" name="id_tuk">
                        <div class="mb-3">
                            <label for="nik">Kode</label>
                            <input type="text" class="form-control" id="kode" name="kode" placeholder="Kode">
                        </div>
                        <div class="mb-3">
                            <label for="nik">NJenis TUK</label>
                            <input type="text" class="form-control" id="jenis_tuk" name="jenis_tuk" placeholder="Jenis TUK">
                        </div>
                        <div class="mb-3">
                            <label for="nik">Nama TUK</label>
                            <input type="text" class="form-control" id="nama_tuk" name="nama_tuk" placeholder="Nama TUK">
                        </div>   
                        <div class="mb-3">
                            <label>Alamat</label>
                            <input type="text" class="form-control" id="alamat" name="alamat" placeholder="Alamat">
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
                            <input type="file" class="form-control" id="gambar" name="gambar" placeholder="Gambar">
                        </div>

                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary" name="editModal" value="simpan">Save</button>
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
    $(document).on("click", "#edit_guru", function() {
        var id_tuk = $(this).data('id_tuk');
        var kode = $(this).data('kode');
        var jenis_tuk = $(this).data('jenis_tuk');
        var nama_tuk = $(this).data('nama_tuk');
        var alamat = $(this).data('alamat');
        var status = $(this).data('status');        
        $("#modal-edit #id_tuk").val(id_tuk);
        $("#modal-edit #kode").val(kode);
        $("#modal-edit #jenis_tuk").val(jenis_tuk);
        $("#modal-edit #nama_tuk").val(nama_tuk);
        $("#modal-edit #alamat").val(alamat);
        $("#modal-edit #status").val(status);
        
    })
</script>