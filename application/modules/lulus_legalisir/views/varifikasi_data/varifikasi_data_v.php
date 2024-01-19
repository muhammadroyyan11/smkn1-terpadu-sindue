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
                                </button> -->
                                <a class="btn btn-success mb-3" href="<?= base_url() . $this->uri->segment(1, 0) ?>/export_excel_pendaftaran"><i class="fa fa-download"></i> Export Excel</a>
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
                                    <th>Tahun Pelajaran</th>                                   
                                    <th>Data Terbaru</th>
                                    <th>Scan Ijazah</th>                     
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
                                        <td><?= $ak['tahun_pelajaran'] ?></td>
                                        <td>
                                            <?php if ($ak['perbaikan'] == 1) { ?>
                                                <span class="badge bg-success">Update</span>                                            
                                            <?php } else { ?>
                                                <span class="badge bg-warning">pending</span>
                                            <?php } ?>
                                        </td>
                                        <td>
                                            <?php if ($ak['aktive_ijazah'] == 1) { ?>
                                                <span class="badge bg-success">Sudah Upload</span>                                           
                                            <?php } else { ?>
                                                <span class="badge bg-warning">Belum Upload</span>
                                            <?php } ?>
                                        </td>
                                        <td>
                                            <?php if ($ak['alumni_aktif'] == 1) { ?>
                                                <span class="badge bg-success">Aktif</span>                                           
                                            <?php } else { ?>
                                                <span class="badge bg-danger">Tidak Aktif</span>
                                            <?php } ?>
                                        </td>
                                        <td>                                                 
                                            <?php if ($ak['verifikasi'] == 1){ ?> 
                                                <span class="badge bg-success">Sudah Verifikasi</span>                                                                                                                                                                         
                                            <?php } elseif ($ak['aktive_ijazah'] == 1 && $ak['perbaikan'] == 1) { ?>                                               
                                                <button type="button" class="btn btn-sm btn-info btn-edit" data-id="<?= $ak['alumni_id'] ?>">
                                                    Verifikasi
                                                </button> 
                                            <?php } else{ ?>
                                                <span class="badge bg-warning">Belum Update Data</span>
                                            <?php } ?>    

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