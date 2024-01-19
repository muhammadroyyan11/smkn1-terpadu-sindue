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
                            <p style="font-style: italic; color: red;">* untuk penamaan Kode Ruangan wajib menggunakan tanda penghubung minus (-)</p>
                            <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                                <a href="" class="btn btn-primary font-weight-bolder font-size-sm mr-3" data-bs-toggle="modal" data-bs-target="#newRoleModal"> <span class="fa fa-plus"></span> Tambah Data</a>
                            </div>     
                        </div>      
                        <table class="table table-striped table-sm" style="font-size: 14px">
                            <thead>
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">Kode Ruangan</th>
                                    <th scope="col">Nama Ruangan</th>
                                    <th scope="col">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $i = 1; ?>
                                <?php foreach ($ruang->result() as $r) : ?>
                                    <tr>
                                        <th scope="row"><?= $i; ?></th>
                                        <td><?= $r->kode_ruang; ?></td>
                                        <td><?= $r->keterangan; ?></td>
                                        <td>
                                            <a class="btn btn-warning" href="" data-keterangan="<?= $r->keterangan; ?>" data-id="<?= $r->kode_ruang; ?>" data-bs-toggle="modal" data-bs-target="#editModal" title="Edit"><i class="bi bi-pencil-square"></i></a>
                                            <a href="<?= base_url('data_persiapan/persiapan_ruang/delruang/') . $r->kode_ruang; ?>" class="btn btn-danger"><i class="bi bi-x-circle-fill"></i></a>
                                        </td>
                                    </tr>
                                    <?php $i++; ?>
                                <?php endforeach; ?>
                            </tbody>
                        </table>
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
                <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="<?= base_url('data_persiapan/persiapan_ruang'); ?>" method="post">              
                <div class=" modal-body">
                    <input type="hidden" class="form-control" name="npsn" value="<?= $pegawai['npsn']?>">
                    <div class="mb-3">
                        <input type="text" class="form-control" id="kode_ruang" name="kode_ruang" placeholder="Kode Ruang">
                    </div>
                    <div class="mb-3">
                        <input type="text" class="form-control" id="keterangan" name="keterangan" placeholder="Nama Ruangan">
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
                <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="<?= base_url('data_persiapan/persiapan_ruang/editruang'); ?>" method="post">               
                <div class=" modal-body">
                    <input type="hidden" class="form-control" name="npsn" value="<?= $pegawai['npsn']?>">
                    <!-- <input type="hidden" class="form-control" id="ed_id" name="ed_id"> -->
                    <div class="mb-3">
                        <input type="text" class="form-control" id="ed_id" name="ed_id" placeholder="Kode Ruangan">
                    </div>
                    <div class="mb-3">
                        <input type="text" class="form-control" id="ed_keterangan" name="ed_keterangan" placeholder="Nama Ruangan">
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
            let keterangan = btn.data('keterangan');
            $("#ed_id").val(id);           
            $("#ed_keterangan").val(keterangan);
        });
    })
</script>