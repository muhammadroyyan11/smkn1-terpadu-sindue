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
                            
                        </div>                            
                    </div>   
                   
                    <div class="table-responsive">
                        <table class="table datatable table-striped table-sm" style="font-size: 14px">
                            <thead>
                                <tr>
                                    <th class="text-center">
                                        #
                                    </th>                                    
                                    <th>TP</th>
                                    <th>NIS</th> 
                                    <th>NISN</th>
                                    <th>Nama Siswa</th>
                                    <th>NO Telp</th>
                                    <th>Email</th>                            
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
                                        <td><?= $ak['tahun_pelajaran'] ?></td>
                                        <td><?= $ak['nis'] ?></td>
                                        <td><?= $ak['nisn'] ?></td>
                                        <td><?= $ak['nama_siswa'] ?></td>
                                        <td><?= $ak['telp'] ?></td>
                                        <td><?= $ak['email'] ?></td>
                                        <td>
                                            <?php if ($ak['perbaikan'] == 1) { ?>
                                                <span class="badge bg-success">Update</span>                                            
                                            <?php } else { ?>
                                                <span class="badge bg-warning">pending</span>
                                            <?php } ?>
                                        </td>
                                        <td>
                                            <?php if ($ak['perbaikan'] == 1) { ?>
                                                <button type="button" class="btn btn-sm btn-info btn-detail mb-2" data-id="<?= $ak['alumni_id'] ?>">
                                                    <i class="fas fa-eye"></i>
                                                </button>  
                                            <?php } else { ?>
                                                <button type="button" class="btn btn-sm btn-warning btn-edit mb-2" data-id="<?= $ak['alumni_id'] ?>">
                                                    <i class=" fas fa-edit"></i>
                                                </button>                                     
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