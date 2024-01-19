<main id="main" class="main">

    <div class="pagetitle">
        <h1><?= $title; ?></h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="index.html"><?= $home; ?></a></li>
                <li class="breadcrumb-item active"><?= $title; ?></li>
            </ol>
        </nav>
    </div><!-- End Page Title -->

    <!-- Main content -->
    <section class="section dashboard">
        <div class="row">

         <div class="col-12">
             <!-- Main content -->
            <?= form_error('menu', '<div class="alert alert-danger" role="alert">', '</div>'); ?>
            <?= $this->session->flashdata('message'); ?>

            <div class="card">
                <div class="card-body">
                    <div class="info-box">
                        <h3 class="card-title"><?= $subtitle; ?></h3>
                    </div>

                    <form action="<?= base_url('lsp/profile/data_profile'); ?>" method="post" enctype="multipart/form-data">
                        <!--begin::Table-->
                        <div class="modal-body">
                            <div class="row">
                                <input type="hidden" class="form-control" name="id_profil" value="<?= $sch['id_profil'] ?>" readonly>
                                <div class="col-md-4">
                                    <div class="mb-3">
                                        <input type="text" class="form-control" id="no_sk" name="no_sk" value="<?= $sch['no_sk'] ?>" placeholder="No SK">
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="mb-3">
                                        <input type="text" class="form-control" id="no_lisensi" name="no_lisensi" value="<?= $sch['no_lisensi'] ?>" placeholder="No Lisensi">
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="mb-3">
                                        <input type="text" class="form-control" id="jenis" name="jenis" value="<?= $sch['jenis'] ?>" placeholder="Jenis">
                                    </div>
                                </div>                              
                            </div>                           
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="mb-3">
                                        <input type="text" class="form-control" id="no_telp" name="no_telp" value="<?= $sch['no_telp'] ?>" placeholder="No Telp">
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="mb-3">
                                        <input type="text" class="form-control" id="no_hp" name="no_hp" value="<?= $sch['no_hp'] ?>" placeholder="No HP">
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="mb-3">
                                        <input type="text" class="form-control" id="no_fax" name="no_fax" value="<?= $sch['no_fax'] ?>" placeholder="No Fax">
                                    </div>
                                </div>                               
                            </div>
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="mb-3">
                                        <input type="text" class="form-control" id="email" name="email" value="<?= $sch['email'] ?>" placeholder="Email">
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="mb-3">
                                        <input type="text" class="form-control" id="website" name="website" value="<?= $sch['website'] ?>" placeholder="Website">
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="mb-3">
                                        <input type="date" class="form-control" id="masa_berlaku" name="masa_berlaku" value="<?= $sch['masa_berlaku'] ?>" placeholder="Nama Kepala Sekolah">
                                    </div>
                                </div>
                            </div>                            
                            <div class="row">
                                <div class="col-md-1"></div>
                                <div class="card">
                                    <div class="col-md-12">
                                        <label for="">Logo LSP</label>
                                        <div class="mb-3 text-center">
                                            <img src="<?= base_url(); ?>panel/dist/upload/logo/<?= $sch['logo'] ?>" alt="..." style="width:100%;max-width:150px">
                                            <input type="hidden" name="old_image" value="<?= $sch['logo'] ?>" />
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="mb-3">
                                        <input type="file" class="form-control" id="logo" name="logo" placeholder="Logo">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--end::Table-->
                        <!-- /.card-body -->
                        <div class="modal-footer">
                            <button type="submit" class="btn btn-primary">Save</button>
                        </div>
                    </form>
                </div>
            </div>
            <!-- /.row -->
         </div>           
            
        </div>
    </section>

</main>
