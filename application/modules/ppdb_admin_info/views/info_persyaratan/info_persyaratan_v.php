<?php defined('BASEPATH') or die("ip anda sudah tercatat oleh sistem kami") ?>

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
    <section class="content">
        <div class="col-12">
            <?= form_error('menu', '<div class="alert alert-danger" role="alert">', '</div>'); ?>
            <?= $this->session->flashdata('message'); ?>
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h4>PERSYARATAN PENDAFTARAN/PEMBAYARAN</h4>
                        </div>
                        <form method="post" action="<?= base_url() . $this->uri->segment(1, 0) ?>/simpan_info_persyaratan" role="form" id="form-action" enctype="multipart/form-data">
                            <div class="card-body">
                                <input type="hidden" name="sekolah_id" value="<?= $syarat['sekolah_id'] ?>">
                                <div class="form-group mb-3">
                                    <label>Isi dengan Persyaratan Pendaftaran/Pembayaran</label>
                                    <textarea name="info" id="ckeditor" class="summernote" required><?= $syarat['syarat'] ?></textarea>
                                </div>
                                <div class="form-group">
                                    <button type="submit" class="btn btn-primary">Simpan Info</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <!-- /.col -->
        </div>
        <!-- /.row -->

        <div class="col-12">
            <!--<?= form_error('menu', '<div class="alert alert-danger" role="alert">', '</div>'); ?>-->
            <!--<?= $this->session->flashdata('message'); ?>-->
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h4>INFO WA</h4>
                        </div>
                        <form method="post" action="<?= base_url() . $this->uri->segment(1, 0) ?>/simpan_info_wa" role="form" id="form-action" enctype="multipart/form-data">
                            <div class="card-body">
                                <input type="hidden" name="sekolah_id" value="<?= $syarat['sekolah_id'] ?>">
                                <div class="form-group mb-3">
                                    <p><label>Isi dengan informasi yang akan dikirimkan kesiswa</label></p>
                                    <textarea name="nolivechat"  class="summernote" rows="4" cols="50" required><?= $syarat['nolivechat'] ?></textarea>
                                </div>
                                <div class="form-group">
                                    <button type="submit" class="btn btn-primary">Simpan Info</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <!-- /.col -->
        </div>
    </section>
    <!-- /.content -->

</main>

<!-- /.content-wrapper -->
<script src="<?= base_url() ?>panel/plugins/ckeditor/ckeditor.js"></script>
<script>
    CKEDITOR.replace('ckeditor');
</script>