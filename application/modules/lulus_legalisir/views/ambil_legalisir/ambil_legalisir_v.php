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
                <br>
                <div class="card-body">
                    <div class="card-header">
                        <!-- Button trigger modal -->
                        <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                            <?php if ($cek_akses['role_id'] == 1) : ?>
                                <!-- <button type="button" class="btn btn-primary mb-3 btn-action">
                                    <span class="fa fa-plus"></span> Tambah Data
                                </button>
                                <a class="btn btn-success mb-3" href="<?= base_url() . $this->uri->segment(1, 0) ?>/export_excel_pendaftaran"><i class="fa fa-download"></i> Export Excel</a> -->
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
                                    <th>NIS</th>
                                    <th>NISN</th>                          
                                    <th>Nama Siswa</th>
                                    <th>Tanggal Ambil</th>
                                    <th>Status</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                $no = 0;
                                foreach ($aktivasi as $ak) :
                                    $no++ ?>
                                    <tr>
                                        <td><?= $no; ?></td>                                        
                                        <td><?= $ak['nis'] ?></td>
                                        <td><?= $ak['nisn'] ?></td>
                                        <td><?= $ak['nama_siswa'] ?></td>                                       
                                        <td><?= $ak['tgl_pengambilan'] ?></td>
                                        <td>
                                            <?php if ($ak['status_ambil'] == 1) { ?>
                                                <span class="badge bg-success">Ambil Langsung</span>                                            
                                            <?php } elseif ($ak['status_ambil'] == 2) { ?>
                                                <span class="badge bg-warning">Kirim Pos</span>
                                            <?php } else { ?>
                                                <span class="badge bg-warning">Belum Mengabil</span>
                                            <?php } ?>
                                        </td>
                                        <td>
                                            <button type="button" class="btn btn-sm btn-warning btn-edit" data-id="<?= $ak['legalisir_id'] ?>">
                                                Proses
                                            </button>
                                            <!-- <a target="_blank" data-toggle="tooltip" data-placement="top" title="" data-original-title="detail siswa" href="<?= base_url() . $this->uri->segment(1, 0) ?>/mpdf_cetak/<?= $ak['legalisir_id'] ?>" class="btn btn-sm btn-success mb-2"><i class="fas fa-eye"></i></a>
                                            <a href="<?= base_url() . $this->uri->segment(1, 0) ?>/deldata_pendaftar/<?= $ak['legalisir_id'] ?>" class="btn btn-sm btn-danger btn-hapus mb-2"><i class="fa fa-trash-alt"></i> </a> -->
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
    <!-- /.content -->
    <br>
    <!-- /.content-wrapper -->
</main>