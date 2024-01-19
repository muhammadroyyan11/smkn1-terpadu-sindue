<main id="main" class="main">

    <div class="pagetitle">
        <h1><?= $title; ?></h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="index.html"><?= $home; ?></a></li>
                <!-- <li class="breadcrumb-item"><?= $subtitle; ?></li> -->
                <li class="breadcrumb-item active"><?= $title; ?></li>
            </ol>
        </nav>
    </div><!-- End Page Title -->

    <!-- Main content -->
    <section class="section dashboard">
        <div class="row">

            <div class="col-12">

                <!-- Default box -->
                <div class="card">
                    <?= form_error('menu', '<div class="alert alert-danger" role="alert">', '</div>'); ?>
                    <?= $this->session->flashdata('message'); ?>      
                    <div class="card-header">
                    <!-- Button trigger modal -->
                        <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                        <a href="" class="btn btn-primary font-weight-bolder font-size-sm mr-3" data-bs-toggle="modal" data-bs-target="#newRoleModal"> <span class="fa fa-plus"></span> Tambah Data</a>
                        </div>                            
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table datatable" style="font-size: 14px">
                                <thead>
                                    <tr>
                                        <th scope="col">#</th>
                                        <th scope="col">Kelas</th>
                                        <th scope="col">Nama</th>
                                        <th scope="col">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $i = 1; ?>
                                    <?php foreach ($kelas->result() as $r) : ?>
                                    <tr>
                                        <th scope="row"><?= $i; ?></th>
                                        <td><?= $r->tingkat; ?></td>
                                        <td><?= $r->kelas; ?></td>
                                        <td>
                                            <a class="btn btn-warning" href="" data-tingkat="<?= $r->tingkat; ?>" data-kelas="<?= $r->kelas; ?>" data-id="<?= $r->l_kelas_id; ?>" data-bs-toggle="modal" data-bs-target="#editModal" title="Edit"><i class="bi bi-pencil-square"></i></a>
                                            <a href="<?= base_url('web_data_setting/persiapan_kelas/delKelas/') . $r->l_kelas_id; ?>" class="btn btn-danger"><i class="bi bi-trash"></i></a>
                                        </td>
                                    </tr>
                                    <?php $i++; ?>
                                    <?php endforeach; ?>
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

<!--modal--->
<div class="modal fade" id="newRoleModal" tabindex="-1" role="dialog" aria-labelledby="newRoleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="newRoleModalLabel">Add <?= $title; ?></h5>
                <button type="button" class="btn-close" data-bs-toggle="modal" aria-label="Close"></button>
            </div>
            <form action="<?= base_url('web_data_setting/persiapan_kelas'); ?>" method="post">
                <div class=" modal-body">
                    <div class="mb-3">
                        <input type="text" class="form-control" id="tingkat" name="tingkat" placeholder="Tingkat">
                    </div>
                    <div class="mb-3">
                        <input type="text" class="form-control" id="kelas" name="kelas" placeholder="Kelas">
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
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
                <button type="button" class="btn-close" data-bs-toggle="modal" aria-label="Close"></button>
            </div>
            <form action="<?= base_url('web_data_setting/persiapan_kelas/editKelas'); ?>" method="post">
                <div class=" modal-body">
                    <input type="hidden" class="form-control" id="ed_id" name="ed_id">
                    <div class="mb-3">
                        <input type="text" class="form-control" id="ed_tingkat" name="ed_tingkat" placeholder="tingkat">
                    </div>
                    <div class="mb-3">
                        <input type="text" class="form-control" id="ed_kelas" name="ed_kelas" placeholder="Kelas">
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Update</button>
                </div>
            </form>
        </div>
    </div>
</div>

<!-- jQuery -->
<script src="<?= base_url() ?>panel/plugins/jquery/jquery.min.js"></script>

<script>
    $(function() {
        $('#editModal').on('show.bs.modal', function(e) {
            let btn = $(e.relatedTarget);
            let id = btn.data('id');
            let tingkat = btn.data('tingkat');
            let kelas = btn.data('kelas');
            $("#ed_id").val(id);
            $("#ed_tingkat").val(tingkat);
            $("#ed_kelas").val(kelas);
        });
    })
</script>