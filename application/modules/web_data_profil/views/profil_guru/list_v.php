<main id="main" class="main">

    <div class="pagetitle">
        <h1><?= $title; ?></h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="#"><?= $home; ?></a></li>
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
                        <?php if ($cek_akses['role_id'] == 1) : ?>     
                            <div class="card-header">
                                <!-- Button trigger modal -->
                                <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                                    <a href="" class="btn btn-primary font-weight-bolder font-size-sm mr-3" data-bs-toggle="modal" data-bs-target="#newRoleModal"> <span class="fa fa-plus"></span> Tambah Data</a>
                                </div>                            
                            </div>                            
                        <?php endif ?>
                        <br>
                        <div class="table-responsive">
                            <table class="table datatable table-striped table-sm" style="font-size: 14px">
                                <thead>
                                    <tr>
                                        <th scope="col" width="20px">#</th>
                                        <th scope="col" width="30px">Nama Guru</th>
                                        <th scope="col" width="70px">Tugas Mengajar</th>
                                        <th scope="col" width="50px">Gambar</th>
                                        <th scope="col" width="20px">Status</th>
                                        <th scope="col" width="20px">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    $no = 0;
                                    foreach ($foto as $sk) :
                                        $no++ ?>
                                        <tr>
                                            <td><?= $no; ?></td>
                                            <td><?= $sk['nama_guru'] ?></td>
                                            <td><?= $sk['mengajar'] ?></td>
                                            <td>
                                                <?php if ($sk['gambar'] != '') { ?>
                                                    <img src="<?= base_url(); ?>panel/dist/upload/profil_guru/<?= $sk['gambar'] ?>" alt="..." style="width:100%;max-width:100px">
                                                <?php } else { ?>
                                                    <img src="<?= base_url(); ?>panel/dist/upload/profil_guru/200x200.png" alt="..." style="width:100%;max-width:100px">
                                                <?php } ?>
                                            </td>
                                            <td>
                                                <?php if ($sk['status'] == 1) { ?>
                                                    <span class="badge bg-success"><i class="bi bi-check-circle me-1"></i> Aktif</span>
                                                <?php } else { ?>
                                                    <span class="badge bg-danger"><i class="bi bi-exclamation-octagon me-1"></i> Tidak Aktif</span>
                                                <?php } ?>
                                            </td>
                                            <td>
                                                <a class="btn btn-warning btn-sm" title="Edit" id="edit_guru" data-bs-toggle="modal" data-bs-target="#editModal" data-profil_id="<?= $sk['profil_id']; ?>" data-nama_guru="<?= $sk['nama_guru']; ?>" data-mengajar="<?= $sk['mengajar']; ?>" data-status="<?= $sk['status']; ?>" data-gambar="<?= $sk['gambar']; ?>"><i class="fa fa-edit"></i></a>
                                                <a href="<?= base_url() . $this->uri->segment(1, 0) . $this->uri->slash_segment(2, 'both') ?>/deldata/<?= $sk['profil_id'] ?>" class="btn btn-danger btn-sm btn-hapus"><i class="fa fa-trash-alt"></i></a>
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
                <h5 class="modal-title">Tambah Profil Guru</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form method="post" action="<?= base_url() . $this->uri->segment(1, 0), $this->uri->slash_segment(2, 'both') ?>/simpan_tambah" role="form" id="form-action" enctype="multipart/form-data">
                <div class="modal-body">
                    <div class="mb-3">
                        <label for="nik">Nama Guru</label>
                        <input type="text" class="form-control" name="nama_guru" placeholder="Nama Guru" autocomplete="off" required>
                        <?= form_error('nama_guru', '<small class="text-danger pl-3">', '</small>'); ?>
                    </div>
                    <div class="mb-3">
                        <label>Mengajar</label>
                        <textarea type="text" name="mengajar" class="form-control" placeholder="Mengajar" required=""></textarea>
                        <?= form_error('mengajar', '<small class="text-danger pl-3">', '</small>'); ?>
                    </div>
                    <div class="mb-3">
                        <label>Upload gambar ukuran 200 x 200</label>
                        <div class="mb-3 text-center">
                            <img src="<?= base_url(); ?>/panel/dist/upload/profil_guru/200x200.png" alt="..." style="width:100%;max-width:100px">
                        </div>
                    </div>
                    <div class="mb-3">
                        <!-- <label>Foto</label> -->
                        <div class="mb-3 text-center">
                            <input type="file" class="form-control" id="gambar" name="gambar" placeholder="Gambar">
                        </div>
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
                <h5 class="modal-title">Update Profil Guru</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form method="post" action="<?= base_url() . $this->uri->segment(1, 0) . $this->uri->slash_segment(2, 'both') ?>/simpan_edit" id="form" role="form" id="form-action" enctype="multipart/form-data">
                <!-- <form id="form" role="form" id="form-action" enctype="multipart/form-data"> -->
                <div class="card-body">
                    <div class="modal-body" id="modal-edit">
                        <input type="hidden" class="form-control" id="profil_id" name="profil_id">
                        <div class="mb-3">
                            <label for="nik">Nama Guru</label>
                            <input type="text" class="form-control" id="nama_guru" name="nama_guru" placeholder="Nama Guru">
                        </div>
                        <div class="mb-3">
                            <label>Mengajar</label>
                            <input type="text" class="form-control" id="mengajar" name="mengajar" placeholder="Mengajar">
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
        var profil_id = $(this).data('profil_id');
        var nama_guru = $(this).data('nama_guru');
        var mengajar = $(this).data('mengajar');
        var status = $(this).data('status');
        var gambar = $(this).data('gambar');
        $("#modal-edit #profil_id").val(profil_id);
        $("#modal-edit #nama_guru").val(nama_guru);
        $("#modal-edit #mengajar").val(mengajar);
        $("#modal-edit #status").val(status);
        $("#modal-edit #pict").attr("src", "<?= base_url(); ?>panel/dist/upload/profil_guru/" + gambar);
    })
</script>