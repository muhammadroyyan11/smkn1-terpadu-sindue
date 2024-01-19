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
                            <input type="hidden" autocomplete="off" name="id" id="id" value="<?= $data_kontak['id_kontak'] ?>" class="form-control">
                            <div class="row">                        
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Nama Guru <span class="symbol required"> </span></label>
                                        <select class="form-control select2" style="width: 100%;" id="nik" name="nik">
                                            <option value="<?= $data_kontak['nik'] ?>"><?= $data_kontak['nama_lengkap'] ?></option>
                                            <?php foreach ($pegawai_data as $pd) : ?>
                                                <option value="<?= $pd['nik']; ?>"><?= $pd['nama_lengkap']; ?></option>
                                            <?php endforeach ?>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="row">                        
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Telp <span class="symbol required"> </span></label>
                                        <input type="text" class="form-control" name="no_kontak" id="no_kontak" value="<?= $data_kontak['no_kontak'] ?>">
                                    </div>
                                </div>
                            </div>  
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Status <span class="symbol required"> </span></label>
                                        <div class="form-check form-switch">
                                            <?php if($data_kontak['status'] == 1){ ?>
                                                <input class="form-check-input" type="checkbox" name="status" value="0" id="flexSwitchCheckChecked" checked>
                                                <label class="form-check-label" for="flexSwitchCheckChecked">Aktif</label>
                                            <?php }else{ ?>                                           
                                                <input class="form-check-input" type="checkbox" name="status" value="1" id="flexSwitchCheckDefault">
                                                <label class="form-check-label" for="flexSwitchCheckDefault">Tidak Aktif</label>
                                            <?php } ?>
                                        </div>
                                    </div>                                  
                                </div>
                            </div>              
                            <div class="modal-footer justify-content-between">
                                <a href="<?= base_url() ?>sekolah_setting/data_kontak" class="btn btn-secondary"><i class="fa fa-arrow-circle-left"></i> Kembali</a>
                                <button type="submit" id="simpan" class="btn btn-primary">Simpan</button>
                            </div>
                        </form>
                    <!-- /.card -->
                    </div>
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




