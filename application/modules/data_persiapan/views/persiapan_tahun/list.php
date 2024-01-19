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
                            <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                                <a href="" class="btn btn-primary font-weight-bolder font-size-sm mr-3" data-bs-toggle="modal" data-bs-target="#newRoleModal"> <span class="fa fa-plus"></span> Tambah Data</a>
                            </div>     
                        </div> 
                        <table class="table datatable table-striped table-sm" style="font-size: 14px">
                            <thead>
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">Semester</th>
                                    <th scope="col">Tahun</th>
                                    <th scope="col">Tahun Pelajaran</th>
                                    <th scope="col">Status</th>                                   
                                    <th scope="col">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $i = 1; ?>
                                <?php foreach ($tahun->result() as $r) : ?>
                                    <tr>
                                        <th scope="row"><?= $i; ?></th>
                                        <td><?= $r->semester; ?></td>
                                        <td><?= $r->tahun_aktif; ?></td>
                                        <td><?= $r->th_pelajaran; ?></td>
                                        <td>                          
                                            <?php if ($r->aktif == 'Y'){?>
                                                <span class="btn btn-success btn-sm disabled">Aktif</span>
                                            <?php }?>
                                            <?php if ($r->aktif == 'N'){?>
                                                <span class="btn btn-danger btn-sm disabled">Tidak Aktif</span>
                                            <?php }?>
                                        </td>                                       
                                        <td>
                                            <a class="btn btn-warning" href="" data-semester="<?= $r->semester; ?>" data-th_pelajaran="<?= $r->th_pelajaran; ?>" data-tahun_aktif="<?= $r->tahun_aktif; ?>" data-id="<?= $r->id; ?>" data-bs-toggle="modal" data-bs-target="#editModal" title="Edit"><i class="bi bi-pencil-square"></i></a>
                                            <a href="<?= base_url('data_persiapan/persiapan_tahun/delTahun/') . $r->id; ?>" class="btn btn-danger"><i class="bi bi-x-circle-fill"></i></a>
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
            <form action="<?= base_url('data_persiapan/persiapan_tahun'); ?>" method="post">
              <input type="hidden" name="npsn" value="<?= $pegawai['npsn']?>">
                <div class=" modal-body">
                    <div class="mb-3">
                        <input type="text" class="form-control" id="semester" name="semester" placeholder="Semester">
                    </div>
                    <div class="mb-3">
                        <input type="text" class="form-control" id="tahun_aktif" name="tahun_aktif" placeholder="Tahun">
                    </div>
                    <div class="mb-3">
                        <input type="text" class="form-control" id="th_pelajaran" name="th_pelajaran" placeholder="Tahun Pelajaran">
                    </div>
                    <div class="mb-3">
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="aktif" value="Y" id="flexRadioDefault1" checked>
                            <label class="form-check-label" for="flexRadioDefault1">
                                Aktif
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="aktif" value="N" id="flexRadioDefault2" >
                            <label class="form-check-label" for="flexRadioDefault2">
                                Tidak Aktif
                            </label>
                        </div>
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
            <form action="<?= base_url('data_persiapan/persiapan_tahun/edittahun'); ?>" method="post">
                <div class=" modal-body">
                    <input type="hidden" class="form-control" id="ed_id" name="ed_id">
                    <div class="mb-3">
                        <input type="text" class="form-control" id="ed_semester" name="ed_semester" placeholder="Tahun Pelajaran">
                    </div>
                    <div class="mb-3">
                        <input type="text" class="form-control" id="ed_tahun_aktif" name="ed_tahun_aktif" placeholder="Tahun">
                    </div>
                    <div class="mb-3">
                        <input type="text" class="form-control" id="ed_th_pelajaran" name="ed_th_pelajaran" placeholder="Tahun Pelajaran">
                    </div>
                    <div class="mb-3">
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="aktif" value="Y" id="flexRadioDefault1" checked>
                            <label class="form-check-label" for="flexRadioDefault1">
                                Aktif
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="aktif" value="N" id="flexRadioDefault2" >
                            <label class="form-check-label" for="flexRadioDefault2">
                                Tidak Aktif
                            </label>
                        </div>
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
            let tahun_aktif = btn.data('tahun_aktif');
            let th_pelajaran = btn.data('th_pelajaran');
            let semester = btn.data('semester');
            $("#ed_id").val(id);
            $("#ed_tahun_aktif").val(tahun_aktif);
            $("#ed_th_pelajaran").val(th_pelajaran);
            $("#ed_semester").val(semester);
        });
    })
</script>