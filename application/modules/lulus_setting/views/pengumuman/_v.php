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
            <div class="card">
                <div class="tampil-modal"></div>
                <div class="card-body">
                    <div class="card-header">
                        <!-- Button trigger modal -->
                        <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                            <?php if ($cek_akses['role_id'] == 1) : ?>
                                <button type="button" class="btn btn-primary mb-3 btn-action">
                                    <span class="fa fa-plus"></span> Tambah Data
                                </button>
                            <?php endif ?>
                        </div>                            
                    </div> 
                   
                    <div class="table-responsive">
                        <table class="table datatable table-striped table-sm" style="font-size: 14px">
                            <thead>
                                <tr>
                                    <th class="text-center">
                                        #
                                    </th>
                                    <th>Judul Penguman</th>
                                    <th>Pengumuman</th>
                                    <th>Jenis</th>
                                    <th width="150">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                $no = 0;
                                foreach ($pengumuman as $pengumuman) {
                                    $no++;
                                ?>
                                    <tr>
                                        <td><?= $no; ?></td>
                                        <td><?= $pengumuman['judul'] ?></td>
                                        <td>
                                            <?= $pengumuman['deskripsi'] ?>
                                        </td>
                                        <td>
                                            <?php if ($pengumuman['jenis'] == 1) { ?>
                                                <span class="badge bg-success">internal</span>
                                            <?php } else { ?>
                                                <span class="badge bg-danger">eksternal</span>
                                            <?php } ?>
                                        </td>
                                        <td>
                                            <!-- Button trigger modal -->
                                            <button type="button" class="btn btn-sm btn-warning btn-edit" data-id="<?= $pengumuman['id'] ?>">
                                                <i class=" fas fa-edit"></i>
                                            </button>
                                            <a href="<?= base_url() . $this->uri->segment(1, 0) . $this->uri->slash_segment(2, 'both')  ?>del_pengumuman/<?= $pengumuman['id'] ?>" class="btn btn-sm btn-danger btn-hapus"><i class="fa fa-trash-alt"></i> </a>
                                        </td>
                                    </tr>
                                <?php }
                                ?>
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
    <!-- /.content -->
</main>
<!-- /.content-wrapper -->