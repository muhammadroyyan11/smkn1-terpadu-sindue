<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1><?= $title; ?></h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#"><?= $home; ?></a></li>
                        <li class="breadcrumb-item active"><?= $subtitle; ?></li>
                    </ol>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
        <div class="col-12">
            <!-- Default box -->
            <?= form_error('menu', '<div class="alert alert-danger" role="alert">', '</div>'); ?>
            <?= $this->session->flashdata('message'); ?>
            <div class="card-toolbar">
                <a href="" class="btn btn-primary font-weight-bolder font-size-sm mr-3" data-toggle="modal" data-target="#newRoleModal"><span class="fa fa-plus"></span> Tambah Data</a>
            </div>
            <br />
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title"><?= $subtitle; ?></h3>
                    <div class="card-tools">
                        <button type="button" class="btn btn-tool" data-card-widget="collapse" data-toggle="tooltip" title="Collapse">
                            <i class="fas fa-minus"></i></button>
                        <button type="button" class="btn btn-tool" data-card-widget="remove" data-toggle="tooltip" title="Remove">
                            <i class="fas fa-times"></i></button>
                    </div>
                </div>
                <div class="card-body p-0">
                    <!--begin::Table-->
                    <div class="table-responsive">
                        <table class="table table-striped" id="mytable" style="font-size: 14px;">
                            <thead>
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">Campus</th>
                                    <th scope="col">Kode Campus</th>
                                    <th scope="col">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $i = 1; ?>
                                <?php foreach ($campus as $r) : ?>
                                    <tr>
                                        <th scope="row"><?= $i; ?></th>
                                        <td><?= $r['nama_campus']; ?></td>
                                        <td><?= $r['kd_campus']; ?></td>
                                        <td>
                                            <a class="badge badge-success" href="" data-nama_campus="<?= $r['nama_campus']; ?>" data-kd_campus="<?= $r['kd_campus']; ?>" data-id="<?= $r['l_campus_id']; ?>" data-toggle="modal" data-target="#editModal" title="Edit"><i class="bi bi-pencil-square"></i></a>
                                            <a href="<?= base_url('persiapan_campus/delCampus/') . $r['l_campus_id'] ?>" class="badge badge-danger"><i class="bi bi-x-circle-fill"></i></a>
                                        </td>
                                    </tr>
                                    <?php $i++; ?>
                                <?php endforeach; ?>
                            </tbody>
                        </table>
                    </div>
                    <!--end::Table-->
                </div>
                <!-- /.card-body -->
            </div>
            <!-- /.card -->
        </div>
    </section>
    <!-- /.content -->
</div>
<!-- /.content-wrapper -->

<!--modal--->
<div class="modal fade" id="newRoleModal" tabindex="-1" role="dialog" aria-labelledby="newRoleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="newRoleModalLabel">Add <?= $title; ?></h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="<?= base_url('data_persiapan/persiapan_campus'); ?>" method="post">
                <div class=" modal-body">
                    <div class="form-group">
                        <input type="text" class="form-control" id="nama_campus" name="nama_campus" placeholder="Nama Campus">
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" id="kd_campus" name="kd_campus" placeholder="Kode Campus">
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Add</button>
                </div>
            </form>
        </div>
    </div>
</div>

<div class="modal fade" id="editModal" tabindex="-1" role="dialog" aria-labelledby="newRoleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="newRoleModalLabel">Edit <?= $title; ?></h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="<?= base_url('data_persiapan/persiapan_campus/editcampus'); ?>" method="post">
                <div class=" modal-body">
                    <input type="hidden" class="form-control" id="ed_id" name="ed_id">
                    <div class="form-group">
                        <input type="text" class="form-control" id="ed_nama_campus" name="ed_nama_campus" placeholder="Nama Campus">
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" id="ed_kd_campus" name="ed_kd_campus" placeholder="Kode Campus">
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Update</button>
                </div>
            </form>
        </div>
    </div>
</div>

<!-- jQuery -->
<script src="<?= base_url() ?>plugins/jquery/jquery.min.js"></script>

<script>
    $(function() {
        $('#editModal').on('show.bs.modal', function(e) {
            let btn = $(e.relatedTarget);
            let id = btn.data('id');
            let nama_campus = btn.data('nama_campus');
            let kd_campus = btn.data('kd_campus');
            $("#ed_id").val(id);
            $("#ed_nama_campus").val(nama_campus);
            $("#ed_kd_campus").val(kd_campus);
        });
    })
</script>