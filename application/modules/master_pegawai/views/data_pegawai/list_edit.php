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
    <div class="modal-body">
        <section class="content">
            <div class="col-12">
                <div class="card">
                    <!-- Default box -->
                    <div class="modal-body">
                        <form method="post" action="<?= base_url() . $this->uri->segment(1, 0) . $this->uri->slash_segment(2, 'both') ?>updatedata" role="form" id="form-action" enctype="multipart/form-data">
                            <!-- form start -->
                            <input type="hidden" autocomplete="off" name="data_id" id="data_id" value="<?= $data_pegawai['data_id'] ?>" class="form-control">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>NIK <span class="symbol required"> </span></label>
                                        <div class="input-group mb-3">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text"><i class="fas fa-user"></i></span>
                                            </div>
                                            <input type="text" autocomplete="off" name="nik" id="nik" value="<?= $data_pegawai['nik'] ?>" class="form-control" readonly>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Email pribadi <span class="symbol required"> </span></label>
                                        <div class="input-group mb-3">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text"><i class="fas fa-envelope"></i></span>
                                            </div>
                                            <input type="email" autocomplete="off" name="email_pribadi" value="<?= $data_pegawai['email_pribadi'] ?>" required class="form-control">
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Nama Panggilan <span class="symbol required"> </span></label>
                                        <div class="input-group mb-3">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text"><i class="fas fa-envelope"></i></span>
                                            </div>
                                            <input type="text" autocomplete="off" name="email" value="<?= $data_pegawai['email'] ?>" required class="form-control" readonly>
                                            <?= form_error('email', '<small class="text-danger pl-3">', '</small>'); ?>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Nama Lengkap <span class="symbol required"> </span></label>
                                        <div class="input-group mb-3">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text"><i class="fas fa-user"></i></span>
                                            </div>
                                            <input type="text" autocomplete="off" name="nama_lengkap" value="<?= $data_pegawai['nama_lengkap'] ?>" required class="form-control">
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="control-label">
                                            Tanggal Lahir <span class="symbol required"> </span>
                                        </label>
                                        <div class="input-group mb-3 input-append datepicker date" data-date-format='yyyy-mm-dd' style="padding: 0px;">
                                            <input class="form-control" type="text" readonly value="<?php echo $data_pegawai['tgl_lahir'] ?>" id="tgl_lahir" name="tgl_lahir" />
                                            <div class="input-group-append">
                                                <button class="btn btn-outline-secondary" type="button"><i class="far fa-calendar-alt"></i></button>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="control-label">
                                            Tanggal Masuk <span class="symbol required"> </span>
                                        </label>
                                        <div class="input-group mb-3 input-append datepicker date" data-date-format='yyyy-mm-dd' style="padding: 0px;">
                                            <input class="form-control" type="text" readonly value="<?php echo $data_pegawai['tgl_masuk'] ?>" id="tgl_masuk" name="tgl_masuk" />
                                            <div class=" input-group-append">
                                                <button class="btn btn-outline-secondary" type="button"><i class="far fa-calendar-alt"></i></button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="form-group">
                                <label>Alamat <span class="symbol required"> </span></label>
                                <textarea type="text" name="alamat" class="form-control" id="alamat" placeholder="Alamat"><?php echo $data_pegawai['alamat'] ?></textarea>
                            </div>

                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Telp <span class="symbol required"> </span></label>
                                        <input type="text" name="telp" class="form-control" id="telp" value="<?= $data_pegawai['telp'] ?>" placeholder="Telepon">
                                    </div>
                                </div>                               
                            </div>
                            <span class="symbol required"> Harus diisi

                    </div>
                    <div class="modal-footer justify-content-between">
                        <a href="<?= base_url() ?>master_pegawai/data_pegawai" class="btn btn-default">Kembali</a>
                        <button type="submit" id="simpan" class="btn btn-primary">Simpan</button>
                    </div>
                    </form>
                    <!-- /.card -->
                </div>
            </div>
        </section>
        <!-- /.content -->
    </div>
    <!-- /.content -->

</main>

<!-- jQuery -->
<script src="<?= base_url() ?>panel/plugins/jquery/jquery.min.js"></script>
<!-- Datepicker -->
<script src="<?= base_url() ?>panel/plugins/bootstrap-datepicker/js/bootstrap-datepicker.min.js"></script>




