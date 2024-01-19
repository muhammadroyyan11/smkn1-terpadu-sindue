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
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="tampil-modal"></div>
                    <?= form_error('email', '<div class="alert alert-danger" role="alert">', '</div>'); ?>
                    <div class="flash-data" data-flashdata=""><?= $this->session->flashdata('message'); ?></div>
                    
                    <div class="card-header">
                        <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                            <?php if ($cek_akses['role_id'] == 1) : ?>                                
                                <button type="button" class="btn btn-primary mb-3 btn-action">
                                    <span class="fa fa-plus"></span> Tambah Data
                                </button>
                                <a class="btn btn-success mb-3" href="<?= site_url('master_siswa/data_siswa/create') ?>"><i class="fa fa-upload"></i> Import Excel</a>                             
                            <?php endif ?>
                        </div>  
                    </div>

                    <div class="card-body">
                        <div class="content">
                            <div class="panel">        
                                <div class="table-responsive">
                                    <table class="table datatable table-striped table-sm" style="font-size: 14px"> 
                                        <thead>
                                            <tr>
                                                <th>#</th>
                                                <th>NIS</th>
                                                <th>NISN</th>
                                                <th>Nama</th>
                                                <th>JK</th>
                                                <th>TGL Lahir</th>
                                                <th>Tahun</th>
                                                <th>Aksi</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                        <?php
                                            $no=0;
                                            foreach($m_siswa as $pd) {
                                            $no++; ?>
                                            <tr>                                    
                                                <td><?= $no ?></td>
                                                <td><?= $pd['nis'] ?></td>
                                                <td><?= $pd['nisn'] ?></td>
                                                <td><?= $pd['nama'] ?></td>
                                                <td><?= $pd['jk'] ?></td>
                                                <td><?= $pd['tgl_lahir'] ?></td>
                                                <td><?= $pd['th_masuk'] ?></td>
                                                <td>
                                                    <a href="<?= base_url()?>master_siswa/data_siswa/edit/<?= $pd['siswa_id'] ?>" class="btn btn-sm btn-warning"><i class="bi bi-pencil-square"></i></a>
                                                    <a href="<?= base_url()?>master_siswa/data_siswa/del/<?= $pd['siswa_id'] ?>" class="btn btn-sm btn-danger"> <i class="bi bi-trash"></i></a>
                                                    <!-- <a href="<?= base_url()?>master_siswa/data_siswa/detail/<?= $pd['siswa_id'] ?>" class="btn btn-sm btn-info"> <i class="bi bi-eye"></i></a> -->
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
        </div>           
    </section>
    <!-- /.content -->

</main>

<!-- jQuery -->
<script src="<?= base_url() ?>panel/plugins/jquery/jquery.min.js"></script>

