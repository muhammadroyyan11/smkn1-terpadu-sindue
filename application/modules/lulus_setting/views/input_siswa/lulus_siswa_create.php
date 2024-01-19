<?php defined('BASEPATH') or die("ip anda sudah tercatat oleh sistem kami") ?>

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
    <section class="content">
        <div class="col-12">

            <?= form_error('menu', '<div class="alert alert-danger" role="alert">', '</div>'); ?>
            <?= $this->session->flashdata('message'); ?>
            <div class="tampil-modal"></div>
            
            <div class="card">
                <div class="card-header">                  
                    <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                        <a class="btn btn-primary mb-3" href="<?= base_url() . $this->uri->segment(1, 0) . $this->uri->slash_segment(2, 'both') ?>"><i class="fa fa-arrow-left"></i> Kembali</a>               
                    </div>             
                </div>

                <div class="card-body p-0">
                    <div class="container mt-3">
                        <div class="row justify-content-center">
                            <div class="col-md-8">
                                <div class="card">
                                    <div class="card-header">
                                        Upload File Excel
                                    </div>

                                    <form method="POST" action="<?= base_url() . $this->uri->segment(1, 0) . $this->uri->slash_segment(2, 'both') ?>excel_lulus" enctype="multipart/form-data">
                                      
                                        <input type="hidden" name="npsn" value="<?= $sekolah['npsn']?>">
                                        <div class="form-group row">
                                            <div class="col-md-12">
                                                <input type="file" class="form-control" name="file" accept=".xls, .xlsx" required>
                                                <div class="col-md-12 mt-1">
                                                    <span class="text-secondary">File yang harus diupload : .xls, xlsx</span>
                                                </div>
                                                <?= form_error('file', '<div class="text-danger">', '</div>') ?>
                                            </div>
                                            <div class="col-md-12">
                                                <div class="col-md-12 mt-1">
                                                    <span class="text-secondary"><i class="fas fa-download mr-1"></i><a href="<?= base_url() . 'lulus_info/lulusInfo_siswa/download_lulus' ?>">Download</a> Format file excel</span>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="card-footer text-right">
                                            <div class="form-group mb-0">
                                                <button type="submit" name="sch_informasi/kelulusan" class="btn btn-primary"><i class="fas fa-upload mr-1"></i>Upload</button>
                                            </div>
                                        </div>

                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- /.card-body -->
                </div>
                <!-- /.card -->
            </div>
            <!-- /.col -->
        </div>
        <!-- /.row -->
    </section>
    <!-- /.content -->

</main>
<!-- /.content-wrapper -->

<!-- /.content-wrapper -->


<!-- jQuery -->
<script src="<?= base_url() ?>plugins/jquery/jquery.min.js"></script>
<!-- Datepicker -->
<script src="<?= base_url() ?>plugins/bootstrap-datepicker/js/bootstrap-datepicker.min.js"></script>