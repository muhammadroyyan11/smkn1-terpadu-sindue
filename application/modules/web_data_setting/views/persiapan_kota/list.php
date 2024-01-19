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
    <section class="section">
        <div class="row">

            <div class="col-lg-12">
                <div class="row">
                    <!-- Customers Card -->
                    <div class="col-xxl-12 col-xl-12">
                        <div class="card info-card customers-card">
                        <?= form_error('menu', '<div class="alert alert-danger" role="alert">', '</div>'); ?>
                        <?= $this->session->flashdata('message'); ?>
                        <div class="tampil-modal"></div>
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
                                            <th scope="col">Provinsi</th>
                                            <th scope="col">Kota</th>
                                            <th scope="col">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php $i = 1; ?>
                                        <?php foreach ($kota as $r) : ?>
                                        <tr>
                                            <th scope="row"><?= $i; ?></th>
                                            <td><?= $r['provinsi']; ?></td>
                                            <td><?= $r['kota']; ?></td>
                                            <td>
                                                <a class="btn btn-warning" href="" data-provinsi_id="<?= $r['provinsi_id']; ?>" data-kota="<?= $r['kota']; ?>" data-id="<?= $r['kota_id']; ?>" data-bs-toggle="modal" data-bs-target="#editModal" title="Edit"><i class="bi bi-pencil-square"></i></a>
                                                <a href="<?= base_url('web_data_setting/persiapan_kota/delkota/') . $r['kota_id'] ?>" class="btn btn-danger"><i class="bi bi-trash"></i></a>
                                            </td>
                                        </tr>
                                        <?php $i++; ?>
                                        <?php endforeach; ?>
                                    </tbody>
                                </table>      
                            </div>               
                        </div>

                    </div>                            
                </div>
                    <!-- End Customers Card -->          
            </div>

        </div>
    </section>

</main>

<!--modal--->
<div class="modal fade" id="newRoleModal" tabindex="-1" role="dialog" aria-labelledby="newRoleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="newRoleModalLabel">Add New Kota</h5>
                <button type="button" class="btn-close" data-bs-toggle="modal" aria-label="Close"></button>
            </div>
            <form action="<?= base_url('web_data_setting/persiapan_kota'); ?>" method="post">
                <div class=" modal-body">
                    <div class="mb-3">
                        <select class="form-control m-bot15" style="width: 100%" id="provinsi_id" name="provinsi_id">
                            <option value="">Select Menu</option>
                            <?php foreach ($provinsi as $m) : ?>
                                <option value="<?= $m['provinsi_id']; ?>"><?= $m['provinsi']; ?></option>
                            <?php endforeach ?>
                        </select>
                    </div>
                    <div class="mb-3">
                        <input type="text" class="form-control" id="kota" name="kota" placeholder="Kota">
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
                <h5 class="modal-title" id="newRoleModalLabel">Edit Kota</h5>
                <button type="button" class="btn-close" data-bs-toggle="modal" aria-label="Close"></button>
            </div>
            <form action="<?= base_url('web_data_setting/persiapan_kota/editkota'); ?>" method="post">
                <div class=" modal-body">
                    <input type="hidden" class="form-control" id="ed_id" name="ed_id">
                    <div class="mb-3">
                        <select class="form-control m-bot15" style="width: 100%" id="ed_provinsi_id" name="ed_provinsi_id">
                            <option value="">Select Menu</option>
                            <?php foreach ($provinsi as $m) : ?>
                                <option value="<?= $m['provinsi_id']; ?>"><?= $m['provinsi']; ?></option>
                            <?php endforeach ?>
                        </select>
                    </div>
                    <div class="mb-3">
                        <input type="text" class="form-control" id="ed_kota" name="ed_kota" placeholder="Kota name">
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
            let provinsi_id = btn.data('provinsi_id');
            let kota = btn.data('kota');
            $("#ed_id").val(id);
            $("#ed_provinsi_id").val(provinsi_id);
            $("#ed_kota").val(kota);
        });
    })
</script>