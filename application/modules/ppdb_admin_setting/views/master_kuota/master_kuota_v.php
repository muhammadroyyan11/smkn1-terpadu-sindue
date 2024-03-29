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
                        <div class="card-header">
                            <!-- Button trigger modal -->
                            <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                                <a href="" class="btn btn-primary font-weight-bolder font-size-sm mr-3" data-bs-toggle="modal" data-bs-target="#newRoleModal"> <span class="fa fa-plus"></span> Tambah Data</a>
                            </div>                            
                        </div>         
                        <div class="table-responsive">
                            <table class="table table-striped table-sm">
                                <thead>
                                    <tr>
                                        <th class="text-center">
                                            #
                                        </th>
                                        <th>Kode Kelas</th>
                                        <th>Nama Kelas</th>
                                        <th>Kuota</th>
                                        <th>status</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    $no = 0;
                                    foreach ($kuota as $kuota) :
                                        $no++ ?>
                                        <tr>
                                            <td><?= $no; ?></td>
                                            <td><?= $kuota['id_jurusan'] ?></td>
                                            <td><?= $kuota['nama_jurusan'] ?></td>
                                            <td><?= $kuota['kuota'] ?></td>
                                            <td>
                                                <?php if ($kuota['status'] == 1) { ?>
                                                    <span class="badge bg-success">Aktif</span>
                                                <?php } else { ?>
                                                    <span class="badge bg-danger">Non Aktif</span>
                                                <?php } ?>
                                            </td>
                                            <td>
                                                <!-- Button trigger modal -->
                                                <a class="btn btn-sm btn-warning" title="Edit" id="edit_kuota" data-bs-toggle="modal" data-bs-target="#editModal" data-id_jurusan="<?= $kuota['id_jurusan']; ?>" data-nama_jurusan="<?= $kuota['nama_jurusan']; ?>" data-kuota="<?= $kuota['kuota']; ?>" data-status="<?= $kuota['status']; ?>"><i class="bi bi-pencil-square"></i></a>
                                                <a href="<?= base_url() . $this->uri->segment(1, 0) ?>/deldata_kuota/<?= $kuota['id_jurusan'] ?>" class="btn btn-sm btn-danger btn-hapus"><i class="bi bi-trash"></i> </a>
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
                <h5 class="modal-title">Tambah Kuota</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form method="post" action="<?= base_url() . $this->uri->segment(1, 0) ?>/simpan_tambah_kuota" role="form" id="form-action" enctype="multipart/form-data">
                <div class="modal-body">
                    <div class="mb-3">
                        <label>Kode Kelas</label>
                        <input type="text" name="id_jurusan" class="form-control" required="">
                    </div>
                    <div class="mb-3">
                        <label>Nama Kelas</label>
                        <input type="text" name="nama" class="form-control" required="">
                    </div>
                    <div class="mb-3">
                        <label>Kuota</label>
                        <input type="text" name="kuota" class="form-control">
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Save</button>
                </div>
                <!-- /.card-body -->
            </form>
        </div>
    </div>
</div>

<!--modal update--->
<div id="editModal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="newRoleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Update Kuota</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form method="post" action="<?= base_url() . $this->uri->segment(1, 0) ?>/simpan_edit_kuota" role="form" id="form-action" enctype="multipart/form-data">
                <div class="modal-body" id="modal-edit">
                    <input type="hidden" name="id_jurusan" id="id_jurusan" class="form-control" required="">
                    <div class="mb-3">
                        <label>Nama Kelas</label>
                        <input type="text" name="nama" id="nama_jurusan" class="form-control" required="">
                    </div>
                    <div class="mb-3">
                        <label>Kuota</label>
                        <input type="text" name="kuota" id="kuota" class="form-control" required="">
                    </div>
                    <div class="mb-3">
                        <div class="control-label">Status Jenjang</div>
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
                    <button type="submit" class="btn btn-primary">Save</button>
                </div>
                <!-- /.card-body -->
            </form>
        </div>
    </div>
</div>

<!-- jQuery -->
<script src="<?= base_url() ?>panel/plugins/jquery/jquery.min.js"></script>
<script type="text/javascript">
    $(document).on("click", "#edit_kuota", function() {
        var id_jurusan = $(this).data('id_jurusan');
        var nama_jurusan = $(this).data('nama_jurusan');
        var kuota = $(this).data('kuota');
        var status = $(this).data('status');
        $("#modal-edit #id_jurusan").val(id_jurusan);
        $("#modal-edit #nama_jurusan").val(nama_jurusan);
        $("#modal-edit #kuota").val(kuota);
        $("#modal-edit #status").val(status);
    })
</script>