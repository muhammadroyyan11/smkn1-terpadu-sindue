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

    <?php if(isset($sekolah['npsn'])){?>
    <section class="content">
        <div class="col-12">
            <div class="card">
                <div class="tampil-modal"></div>
                <?= form_error('email', '<div class="alert alert-danger" role="alert">', '</div>'); ?>
                <div class="flash-data" data-flashdata=""><?= $this->session->flashdata('message'); ?></div>
                <div class="card-body">
                    <div class="alert alert-warning" role="alert">
                        Status Pegawai adalah mengatur akses login pegawai sesuai dengan tugasnya !!!.
                    </div>
                    <div class="panel-body">                        
                        <div class="table-responsive">      
                            <table class="table datatable table-striped table-sm" style="font-size: 14px">                
                                <thead>
                                    <tr>
                                        <th scope="col">#</th>
                                        <th scope="col">NIK</th>
                                        <th scope="col">Nama</th>
                                        <th scope="col">Telp</th>
                                        <th scope="col">Email / User</th>
                                        <th scope="col">Tgl Masuk</th>
                                        <th scope="col">Status</th>
                                        <th scope="col">Jabatan</th>
                                        <th scope="col">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                <?php
                                    $no=0;
                                    foreach($pegawai_role as $pr) {
                                    $no++; ?>
                                    <tr>                                    
                                        <td><?= $no ?></td>
                                        <td><?= $pr['nik'] ?></td>
                                        <td><?= $pr['nama_lengkap'] ?></td>
                                        <td><?= $pr['telp'] ?></td>
                                        <td><?= $pr['email_pribadi'] ?><br/><?= $pr['email_pegawai'] ?></td>
                                        <td><?= $pr['tgl_masuk'] ?></td>
                                        <td>
                                            <?php if($pr['is_active'] == 1){?>
                                                <i class='text-info'>User Aktif</i>
                                            <?php } else { ?>
                                                <i class='text-danger'>User Tidak Aktif</i>
                                            <?php } ?>
                                        </td>
                                        <td><?= $pr['role'] ?></td>
                                        <td>
                                            <a href="<?= base_url()?>master_pegawai/status_pegawai/editdata/<?= $pr['data_id'] ?>" class="btn btn-outline-info">Proses</a>
                                        </td>
                                    </tr>
                                <?php } ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /.card-body -->
        </div>
        <!-- /.card -->
    </section>
    <?php } ?>    

</main>

<!-- jQuery -->
<script src="<?= base_url() ?>panel/plugins/jquery/jquery.min.js"></script>
