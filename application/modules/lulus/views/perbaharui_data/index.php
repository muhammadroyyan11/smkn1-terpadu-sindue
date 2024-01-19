<!-- Begin Page Content -->
<div class="content">
  <div class="row">
    <div class="col-md-12">
      <div class="card">

        <nav aria-label="breadcrumb" role="navigation">
          <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item active" aria-current="page"><?= $title; ?></li>
          </ol>
        </nav>

        <div class="row">
          <div class="col-md-12">

            <div class="card-header">
              <h5 class="title">Hai!, <?= $user['nama_siswa'] ?></h5>
              <p class="category">Informasi terbaru dari <a href=""><strong><?= $sekolah['nama_sekolah']; ?></strong></a></p>
            </div>

            <div class="card-body">
              <div class="content">
                <div class="row">

                  <div class="col-12 col-sm-8 col-lg-8">
                    <!-- <div class="card-header-action">
                      <a target="_blank" href="<?= base_url() ?>formulir/mpdf_cetak" type="button" class="btn btn-success"><i class="fas fa-print"></i> Cetak Form</a>
                    </div> -->
                    <div class="card author-box card-primary">
                      <div class="card-header">
                        <h4>Perbaikan Data</h4>
                      </div>

                      <div class="card-body">
                            <div class="author-box-details">
                              <div class="row">
                                <div class="col-lg-12">
                                  <?= $this->session->flashdata('message'); ?>
                                </div>
                              </div>

                              <ul class="nav nav-pills" id="myTab3" role="tablist">
                                <li class="nav-item">
                                  <a class="nav-link active" id="home-tab3" data-toggle="tab" href="#home3" role="tab" aria-controls="home" aria-selected="true"><i class="fas fa-user"></i> Perbaikan Data </a>
                                </li>
                                <li class="nav-item">
                                  <a class="nav-link" id="contact-tab3" data-toggle="tab" href="#contact3" role="tab" aria-controls="contact" aria-selected="false"><i class="fas fa-home"></i> Upload Ijazah</a>
                                </li>                           
                              </ul>

                              <div class="tab-content" id="myTabContent2">
                                <div class="tab-pane fade show active" id="home3" role="tabpanel" aria-labelledby="home-tab3">
                                  <br>
                                  <form action="<?= base_url() . $this->uri->segment(1, 0) . $this->uri->slash_segment(2, 'both')?>/simpandatadiri" method="post">
                                    <input type="hidden" name="alumni_id" class="form-control" value="<?= $siswa['alumni_id'] ?>">
                                    <div class="form-group row mb-2">
                                      <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">No Telp</label>
                                      <div class="col-sm-12 col-md-5">
                                        <input type="text" name="telp" class="form-control" value="<?= $siswa['telp'] ?>" placeholder="Masukkan No Telp" required>
                                      </div>
                                    </div>
                                    <div class="form-group row mb-2">
                                      <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Email</label>
                                      <div class="col-sm-12 col-md-5">
                                        <input type="text" name="email" class="form-control" value="<?= $siswa['email'] ?>" placeholder="Masukkan Email" required>
                                      </div>
                                    </div>
                                    <div class="form-group">
                                      <br>
                                      <!-- <small class="text-danger">
                                        <p>*Harap isi data alamat dengan sebenar-benarnya</p>
                                      </small> -->
                                      <center><button id="btnsimpan" type="submit" class="btn btn-primary btn-lg mt-2">Simpan Data</button></center>
                                    </div>
                                  </form>
                                </div>
                                <div class="tab-pane fade" id="contact3" role="tabpanel" aria-labelledby="contact-tab3">
                                  <br>
                                  <form action="<?= base_url() . $this->uri->segment(1, 0) . $this->uri->slash_segment(2, 'both') ?>/simpanijazah" method="post" enctype='multipart/form-data'>
                                    <input type="hidden" name="alumni_id" class="form-control" value="<?= $siswa['alumni_id'] ?>">
                                    <div class="form-group row mb-2">
                                      <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">File Ijazah</label>
                                      <div class="col-sm-12 col-md-7">                                    
                                        <label>(maksimal 2 mb)</label>                                      
                                        <div class="mb-3 text-center">
                                            <?php if($siswa['file_ijazah'] == ''){ ?>
                                                <img src="<?= base_url(); ?>panel/dist/upload/file_ijazah/200x200.png" alt="..." style="width:100%;max-width:250px">
                                            <?php }else{ ?>
                                                <img src="<?= base_url(); ?>panel/dist/upload/file_ijazah/<?= $siswa['file_ijazah'] ?>" alt="..." style="width:100%;max-width:750px">
                                                <input type="hidden" name="old_image" value="<?= $siswa['file_ijazah'] ?>" />
                                            <?php } ?>                                       
                                        </div>   
                                        
                                        <div class="form-group">
                                          <label for="file_ijazah">Ijazah Asli</label>
                                          <div class="custom-file">
                                            <input type="file" class="form-control custom-file-input" id="file_ijazah" name="file_ijazah">
                                            <label class="custom-file-label" for="file_ijazah">Choose file</label>
                                          </div>
                                          <small class="form-text text-muted">Upload file JPG/PNG</small>
                                        </div>                       
                                      </div>                                                  
                                    </div>
                                    <div class="form-group">
                                      <br>
                                      <!-- <small class="text-danger">
                                        <p>*Harap isi data alamat dengan sebenar-benarnya</p>
                                      </small> -->
                                      <center><button type="submit" class="btn btn-primary btn-lg mt-2">Simpan Ijazah</button></center>
                                    </div>
                                  </form>
                                </div>
                              
                              </div>

                            </div>
                          </div>
                    </div>
                  </div>

                  <div class="col-12 col-sm-4 col-lg-4">
                    <div class="card author-box card-primary">

                      <div class="card-header">
                        <b>Progres Pengisian Formulir</b>
                      </div>

                      <div class="card-body">

                        <div class="card">
                          <div class="card-body">
                            <div class="author-box-left">
                              <img class="img-profile rounded-circle" style="width: 3rem;" src="<?= base_url() ?>panel/assets/img/avatar/avatar-1.png">
                              <div class="clearfix"></div>
                              <div class="author-box-job">Status Verifikasi</div>
                              <?php if ($siswa['verifikasi'] == 1) { ?>
                                <span class="badge badge-success">Sudah Verifikasi</span>
                              <?php } else { ?>
                                <span class="badge badge-danger">Belum Verifikasi</span>
                              <?php } ?>
                            </div>
                          </div>
                        </div>

                        <div class="card">
                          <div class="card-body">
                            Perbaikan Data
                            <?php if ($datadiri <> 0) { ?>
                              <p><span class="badge badge-danger"><i class="fas fa-times-circle"></i> Belum Lengkap</span></p>
                            <?php } else { ?>
                              <p><span class="badge badge-success"><i class="fas fa-check-circle"></i> Lengkap</span></p>
                            <?php } ?>
                          </div>
                        </div>

                        <div class="card">
                          <div class="card-body">
                            Upload Scan Ijazah
                            <?php if ($ijazah <> 0) { ?>
                              <p><span class="badge badge-danger"><i class="fas fa-times-circle"></i> Belum Lengkap</span></p>
                            <?php } else { ?>
                              <p><span class="badge badge-success"><i class="fas fa-check-circle"></i> Lengkap</span></p>
                            <?php } ?>
                          </div>
                        </div>                       

                      </div>
                    </div>
                  </div>

                </div>
              </div>

            </div>

          </div>
        </div>

      </div>
    </div>
  </div>