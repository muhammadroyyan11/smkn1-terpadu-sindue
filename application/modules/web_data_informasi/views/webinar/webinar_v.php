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
                    <?php if ($cek_akses['role_id'] == 1) : ?>
                        <div class="card-header">
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
                                    <th>NIP/NRPTK/NUPTK</th>
                                    <th>Nama Pendidik</th>
                                    <th>Webinar 1</th>
                                    <th>Webinar 2</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                $no = 0;
                                foreach ($webinar as $sk) :
                                    $no++ ?>
                                    <tr>
                                        <td><?= $no; ?></td>
                                        <td><?= $sk['nip'] ?></td>
                                        <td><?= $sk['nama_pendidik'] ?></td>
                                        <td>
                                            <?php if ($sk['webinar_1'] == '') { ?>
                                                Belum mengikuti webinar 1
                                            <?php } else { ?>
                                                <img src="<?= base_url(); ?>panel/dist/upload/sertifikat_webinar/<?= $sk['webinar_1'] ?>" alt="..." style="width:100%;max-width:100px">
                                            <?php } ?>
                                        </td>
                                        <td>
                                            <?php if ($sk['webinar_2'] == '') { ?>
                                                Belum mengikuti webinar 2
                                            <?php } else { ?>
                                                <img src="<?= base_url(); ?>panel/dist/upload/sertifikat_webinar/<?= $sk['webinar_2'] ?>" alt="..." style="width:100%;max-width:100px">
                                            <?php } ?>
                                        </td>
                                        <td>

                                            <!-- Button trigger modal -->
                                            <button type="button" class="btn btn-sm btn-warning btn-edit" data-id="<?= $sk['id_webinar'] ?>">
                                                <i class=" fas fa-edit"></i>
                                            </button>
                                            <a href="<?= base_url() . $this->uri->segment(1, 0) ?>/deldata_webinar/<?= $sk['id_webinar'] ?>" class="btn btn-sm btn-danger btn-hapus"><i class="fa fa-trash-alt"></i></a>
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