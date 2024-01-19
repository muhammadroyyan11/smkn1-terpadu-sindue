<?php defined('BASEPATH') or die("ip anda sudah tercatat oleh sistem kami") ?>

<main id="main" class="main">

    <div class="pagetitle">
        <h1><?= $title; ?></h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href=""><?= $home; ?></a></li>
                <!-- <li class="breadcrumb-item"><?= $subtitle; ?></li> -->
                <li class="breadcrumb-item active"><?= $title; ?></li>
            </ol>
        </nav>
    </div><!-- End Page Title -->

    <!-- Main content -->
    <div class="modal-body">
        <div class="card">
            <div class="modal-header">
                <h4 class="modal-title"><?= ucwords($this->uri->segment(3, 0)) ?> Data</h4>
            </div>
            <div class="col-12">
                <div class="modal-body">
                    <form method="post" action="<?= base_url() ?>data_persiapan/persiapan_tahun_aktif/update" role="form" id="form-action" enctype="multipart/form-data">
                        <input type="hidden" name="_id" id="_id" value="<?= $data['id'] ?>">
                        <input type="hidden" name="npsn" id="npsn" value="<?= $pegawai['npsn']?>">
                        <div class="modal-body">
                            <div class="form-group">
                                <label for="tahun" class="col-sm-4 control-label">Tahun ( <?= $data['tahun'] ?> )<span class="symbol required"> wajib diisi kembali </span> </label>
                                <div class="col-sm-9">
                                    <?= form_dropdown('tahun', $p_tahun, $data['tahun'], 'class="form-control" id="tahun" required'); ?>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="tahun" class="col-sm-4 control-label">Semester ( <?= $data['semester'] ?> ) <span class="symbol required"> wajib diisi kembali </span> </label>
                                <div class="col-sm-9">
                                    <?= form_dropdown('semester', $p_semester, $data['semester'], 'class="form-control" id="semester" required'); ?>
                                </div>
                            </div>                          
                           
                        <div class="modal-footer justify-content-between">
                            <a href="<?= base_url() ?>data_persiapan/persiapan_tahun_aktif" type="button" class="btn btn-default" data-dismiss="modal"><i class="bi bi-arrow-counterclockwise"></i> Kembali</a>
                            <button type="submit" id="simpan" class="btn btn-primary"><i class="bi bi-save2"></i> Simpan</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- /.content -->

</main>