<?php defined('BASEPATH') or die("ip anda sudah tercatat oleh sistem kami") ?>

<main id="main" class="main">

    <div class="pagetitle">
        <h1><?= $title; ?></h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href=""><?= $home; ?></a></li>             
                <li class="breadcrumb-item active"><?= $title; ?></li>
            </ol>
        </nav>
    </div><!-- End Page Title -->   
    <section class="content">
        <div class="col-12">
            <div class="card">
                <div class="tampil-modal"></div>
                <?= form_error('email', '<div class="alert alert-danger" role="alert">', '</div>'); ?>
                <div class="flash-data" data-flashdata=""><?= $this->session->flashdata('message'); ?></div>
                <div class="card-body">
                    <div class="card-header">
                        <!-- Button trigger modal -->
                        <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                            <?php if ($cek_akses['role_id'] == 1) : ?>                                
                                <button type="button" class="btn btn-primary mb-3 btn-action">
                                    <span class="fa fa-plus"></span> Tambah Data
                                </button>                               
                                <a class="btn btn-success mb-3" href="<?= site_url('master_pegawai/data_pegawai/create') ?>"><i class="fa fa-upload"></i> Import Excel</a>
                                <!-- <a class="btn btn-primary mb-3" href="<?= site_url('master_pegawai/data_pegawai') ?>"><i class="fa fa-users"></i> Data Pegawai</a> -->
                            <?php endif ?>
                        </div>                            
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
                                        <th scope="col">Email Pribadi</th>
                                        <th scope="col">Tgl Masuk</th>
                                        <th scope="col">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                <?php
                                    $no=0;
                                    foreach($pegawai_data as $pd){
                                    $no++; ?>
                                    <tr>                                    
                                        <td><?= $no ?></td>
                                        <td><?= $pd['nik'] ?></td>
                                        <td><?= $pd['nama_lengkap'] ?></td>
                                        <td><?= $pd['telp'] ?></td>
                                        <td><?= $pd['email_pribadi'] ?></td>
                                        <td><?= $pd['tgl_masuk'] ?></td>
                                        <td>
                                            <a href="<?= base_url()?>master_pegawai/data_pegawai/editdata/<?= $pd['data_id'] ?>" class="btn btn-sm btn-warning mb-1"><i class="fas fa-edit"></i></a>
                                            <a href="<?= base_url()?>master_pegawai/data_pegawai/delpegawai/<?= $pd['data_id'] ?>" class="btn btn-sm btn-danger"> <i class="fas fa-trash"></i></a>
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
    <!-- /.content -->
</main>

<!-- jQuery -->
<script src="<?= base_url() ?>panel/plugins/jquery/jquery.min.js"></script>
