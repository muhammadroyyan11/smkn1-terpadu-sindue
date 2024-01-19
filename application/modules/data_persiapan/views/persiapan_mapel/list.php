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
                        <table class="table table-striped table-sm" style="font-size: 14px">
                            <thead>
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">Kelompok</th>
                                    <th scope="col">Kode Mapel</th>
                                    <th scope="col">Mata Pelajaran</th>
                                    <th scope="col">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $i = 1; ?>
                                <?php foreach ($mapel->result() as $r) : ?>
                                    <tr>
                                        <th scope="row"><?= $i; ?></th>
                                        <?php if($r->kelompok == 'A'){?>
                                            <td>Kelompok Umum</td>
                                        <?php } ?>
                                        <?php if($r->kelompok == 'B'){?>
                                            <td>Kelompok Umum Pilihan</td>
                                        <?php } ?>
                                        <?php if($r->kelompok == 'C'){?>
                                            <td>Kelompok Kejuruan</td>
                                        <?php } ?>
                                        <?php if($r->kelompok == 'D'){?>
                                            <td>Kelompok Tambahan</td>
                                        <?php } ?>
                                        <td><?= $r->kode_mapel; ?></td>
                                        <td><?= $r->nama_mapel; ?></td>
                                        <td>
                                            <a class="btn btn-warning" href="" data-tambahan_sub="<?= $r->tambahan_sub; ?>" data-kelompok="<?= $r->kelompok; ?>" data-nama_mapel="<?= $r->nama_mapel; ?>" data-kode_mapel="<?= $r->kode_mapel; ?>" data-id="<?= $r->id; ?>" data-bs-toggle="modal" data-bs-target="#editModal" title="Edit"><i class="bi bi-pencil-square"></i></a>
                                            <a href="<?= base_url('data_persiapan/persiapan_mapel/delmapel/') . $r->id; ?>" class="btn btn-danger"><i class="bi bi-x-circle-fill"></i></a>
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
            <form action="<?= base_url('data_persiapan/persiapan_mapel'); ?>" method="post">              
                <div class=" modal-body">
                    <input type="hidden" class="form-control" name="npsn" value="<?= $pegawai['npsn']?>">
                    <div class="mb-3">                   
                        <?php echo form_dropdown('kelompok', $p_kelompok, '', 'class="form-control" id="kelompok" required'); ?>
                    </div>
                    <div class="mb-3">
                        <?php echo form_dropdown('tambahan_sub', $p_tambahansub, '', 'class="form-control" id="tambahan_sub" required'); ?>
                    </div>
                    <div class="mb-3">
                        <input type="text" class="form-control" id="kode_mapel" name="kode_mapel" placeholder="Kode Mapel">
                    </div>
                    <div class="mb-3">
                        <input type="text" class="form-control" id="nama_mapel" name="nama_mapel" placeholder="Mata Pelajaran">
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
            <form action="<?= base_url('data_persiapan/persiapan_mapel/editmapel'); ?>" method="post">               
                <div class=" modal-body">
                    <input type="hidden" class="form-control" name="npsn" value="<?= $pegawai['npsn']?>">
                    <input type="hidden" class="form-control" id="ed_id" name="ed_id">
                    <div class="mb-3">
                        <?php echo form_dropdown('ed_kelompok', $p_kelompok, '', 'class="form-control" id="ed_kelompok" required'); ?>
                    </div>
                    <div class="mb-3">
                    <?php echo form_dropdown('ed_tambahan_sub', $p_tambahansub, '', 'class="form-control" id="ed_tambahan_sub" required'); ?>
                    </div>
                    <div class="mb-3">
                        <input type="text" class="form-control" id="ed_kode_mapel" name="ed_kode_mapel" placeholder="Kode Mapel">
                    </div>
                    <div class="mb-3">
                        <input type="text" class="form-control" id="ed_nama_mapel" name="ed_nama_mapel" placeholder="Mata Pelajaran">
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
            let kelompok = btn.data('kelompok'); 
            let tambahan_sub = btn.data('tambahan_sub'); 
            let kode_mapel = btn.data('kode_mapel'); 
            let nama_mapel = btn.data('nama_mapel');       
            $("#ed_id").val(id);
            $("#ed_kelompok").val(kelompok);  
            $("#ed_tambahan_sub").val(tambahan_sub);  
            $("#ed_kode_mapel").val(kode_mapel);  
             $("#ed_nama_mapel").val(nama_mapel);            
        });
    })
</script>