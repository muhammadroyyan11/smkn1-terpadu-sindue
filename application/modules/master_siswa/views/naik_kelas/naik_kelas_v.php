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
                    <div class="card-body">
                        <div class="content">
                            <div class="panel">
                                <div class="panel-body">
                                    <div class="alert alert-warning" role="alert">
                                        <p>Pastikan Siswa sudah mengikuti proses <strong>daftar ulang</strong>, untuk menentukan kelas siswa</p>
                                    </div>                                   
                                    <div class="card-responsive">
                                        <form action="<?= base_url();?>master_siswa/naik_kelas/daftar_ulang" method="post" id="form-data">
                                            <div class="row">                                     
                                                <div class="col-lg-4 mt-4 mt-lg-0">
                                                    <div class="dropdown bootstrap-select">
                                                        <select class="form-control" style="width: 100%;" name="tingkat" id="tingkat" required>
                                                            <option>-- Pilih Jenjang--</option>
                                                            <?php foreach ($kelas as $kel) {
                                                                echo '<option value="' . $kel['tingkat'] . '">' . $kel['nama'] . '</option>';
                                                            } ?>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="col-lg-4 mt-4 mt-lg-0">
                                                    <div class="dropdown bootstrap-select">
                                                        <select class="form-control" style="width: 100%;" name="status" id="status" required>
                                                            <option>-- Pilih Status --</option>
                                                            <option value="siswa_baru">Siswa Baru</option>
                                                            <option value="naik_kelas">Naik Kelas</option>                                                           
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="col-lg-4 mt-4 mt-lg-0">
                                                    <button type="submit" class="btn btn-primary">Submit</button>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                                <hr>
                                <div class="table-responsive">
                                    <div class="card">
                                        <!-- data presensi -->
                                        <div class="card-body">
                                            <div class="activities" id="FormDate">
                                                <table class="table">
                                                    <thead>
                                                        <tr>
                                                            <th class="text-center" scope="col">#</th>
                                                            <th class="" scope="col">Kelas</th>
                                                            <th class="text-center" scope="col">Jumlah Siswa</th>                                                            
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                    <?php $no = 1 ?>
                                                        <?php foreach ($rombel as $r) { ?>
                                                        <tr>
                                                            <th class="text-center" scope="row"><?= $no++ ?></th>
                                                            <td class="">
                                                                <a href="<?= base_url();?>master_siswa/naik_kelas/tabel_ubah/<?= $r['tingkat']?>" class="card-link"><b>Kelas <?= $r['tingkat']?></b></a>
                                                            </td>
                                                            <td class="text-center"><b><?= $r['total']?></b></td>                                                          
                                                        </tr>
                                                        <?php } ?>                                                
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                        <!--End data presensi -->
                                    </div>
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