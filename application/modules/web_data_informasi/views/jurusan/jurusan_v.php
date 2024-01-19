<?php defined('BASEPATH') or die("ip anda sudah tercatat oleh sistem kami") ?>

<main id="main" class="main">

    <div class="pagetitle">
        <h1><?= $title; ?></h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="#"><?= $home; ?></a></li>
                <!-- <li class="breadcrumb-item"><?= $subtitle; ?></li> -->
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
                     <?php if ($cek_akses['role_id'] == 1) : ?>
                            <div class="card-header">
                                <!-- Button trigger modal -->
                                <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                                   <button type="button" class="btn btn-primary mb-3 btn-action">
                                        <span class="fa fa-plus"></span> Tambah Data
                                    </button>
                                </div>                            
                            </div>                                      
                    <?php endif ?>
                    <div class="table-responsive">
                        <table class="table datatable table-striped table-sm" style="font-size: 14px">
                            <thead>
                                <tr>
                                    <th class="text-center">
                                        #
                                    </th>
                                    <th>Jurusan</th>                                                              
                                    <th>Gambar</th>
                                    <th>Status</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                $no = 0;
                                foreach ($jurusan as $sk) :
                                    $no++ ?>
                                    <tr>
                                        <td><?= $no; ?></td>
                                        <td><?= $sk['jurusan'] ?></td>                                        
                                        <td>
                                            <?php if ($sk['gambar'] == '') { ?>
                                                Profil Jurusan
                                            <?php } else { ?>
                                                <img src="<?= base_url(); ?>panel/dist/upload/profil_jurusan/<?= $sk['gambar'] ?>" alt="..." style="width:100%;max-width:100px">
                                            <?php } ?>
                                        </td>
                                        <td>
                                            <?php if ($sk['status'] == 1) { ?>
                                                Aktif
                                            <?php } else { ?>
                                                Tidak Aktif
                                            <?php } ?>
                                        </td>
                                        <td>
                                            <!-- Button trigger modal -->
                                            <button type="button" class="btn btn-sm btn-success btn-detail" data-id="<?= $sk['id_jurusan'] ?>">
                                                <i class="fas fa-eye"></i>
                                            </button>
                                            <button type="button" class="btn btn-sm btn-warning btn-edit" data-id="<?= $sk['id_jurusan'] ?>">
                                                <i class="fas fa-edit"></i>
                                            </button>
                                            <a href="<?= base_url() . $this->uri->segment(1, 0) ?>/deljurusan/<?= $sk['id_jurusan'] ?>" class="btn btn-sm btn-danger btn-hapus"><i class="fa fa-trash-alt"></i></a>
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