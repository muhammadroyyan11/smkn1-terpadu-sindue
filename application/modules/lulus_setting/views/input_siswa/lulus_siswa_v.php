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
            <div class="card">
                <div class="tampil-modal"></div>
                <?= form_error('menu', '<div class="alert alert-danger" role="alert">', '</div>'); ?>
                <?= $this->session->flashdata('message'); ?>
                <div class="card-body">
                    <div class="card-header">
                        <!-- Button trigger modal -->
                        <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                            <button type="button" class="btn btn-primary mb-3 btn-action">
                                <span class="fa fa-plus"></span> Tambah Data
                            </button>
                            <a href="<?= base_url() . $this->uri->segment(1, 0) . $this->uri->slash_segment(2, 'both') ?>tambah" class="btn btn-info mb-3 btn-action"><i class="bi bi-plus-square"></i> Tarik Lulus</a>
                            <a class="btn btn-success mb-3" href="<?= base_url() . $this->uri->segment(1, 0) . $this->uri->slash_segment(2, 'both') ?>create_lulus"><i class="fa fa-upload"></i> Import Excel</a>
                            <!-- <?php if ($cek_akses['role_id'] == 1) : ?>
                            <?php endif ?> -->
                        </div>
                    </div>
                    
                    <div class="table-responsive">
                        <table class="table datatable table-striped table-sm" style="font-size: 14px">
                            <thead>
                                <tr>
                                    <th class="text-center">
                                        #
                                    </th>
                                    <th>No Surat</th>
                                    <th>TH Pelajaran</th>
                                    <th>Nama Siswa</th>
                                    <th>NIS</th>
                                    <th>NISN</th>  
                                    <th>Tempat Lahir</th>   
                                    <th>Tanggal Lahir</th>                     
                                    <th>Keterangan</th>
                                    <th>Status</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                $no = 0;
                                foreach ($lulus as $sk) :
                                    $no++ ?>
                                    <tr>
                                        <td><?= $no; ?></td>
                                        <td><?= $sk['no_surat'] ?></td>
                                        <td><?= $sk['tahun_pelajaran'] ?></td>
                                        <td><?= $sk['nama_siswa'] ?></td>
                                        <td><?= $sk['nis'] ?></td>
                                        <td><?= $sk['nisn'] ?></td>
                                        <td><?= $sk['tempat_lahir'] ?></td>
                                        <td><?= $sk['tanggal_lahir'] ?></td>
                                        <td><?= $sk['keterangan'] ?></td>
                                        <td>
                                            <?php if ($sk['status'] == 1) { ?>
                                                Aktif
                                            <?php } else { ?>
                                                Tidak Aktif
                                            <?php } ?>
                                        </td>
                                        <td>
                                            <!-- Button trigger modal -->
                                            <button type="button" class="btn btn-sm btn-warning btn-edit mb-1" data-id="<?= $sk['lulus_id'] ?>">
                                                <i class="fas fa-edit"></i>
                                            </button>
                                            <a href="<?= base_url() . $this->uri->segment(1, 0) . $this->uri->slash_segment(2, 'both') ?>dellulus/<?= $sk['lulus_id'] ?>" class="btn btn-sm btn-danger btn-hapus mb-1"><i class="fa fa-trash-alt"></i></a>
                                            <a target="_blank" href="<?= base_url() . $this->uri->segment(1, 0) . $this->uri->slash_segment(2, 'both') ?>detail_lulus/<?= $sk['lulus_id'] ?>" class="btn btn-sm btn-info mb-1"><i class="fas fa-eye"></i></a>
                                        </td>
                                    </tr>
                                <?php endforeach ?>
                            </tbody>
                        </table>
                    </div>

                    <!-- /.card-body -->
                </div>
                <!-- /.card -->
            </div>
            <!-- /.col -->
        </div>
        <!-- /.row -->
    </section>
    <br>
    <!-- /.content -->

</main>
<!-- /.content-wrapper -->