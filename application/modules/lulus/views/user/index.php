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

                  <div class="col-md-8">

                    <div class="card alert alert-info alert-dismissible fade show">
                      <div class="card-body">
                        <div class="row">
                          <div class="col-md-6">
                            <img class="img-profile rounded-circle" style="width: 3rem;" src="<?= base_url() ?>panel/assets/img/avatar/avatar-1.png">
                            <div class="clearfix"></div>                          
                            <strong>NISN : <?= $user['nisn'] ?><br></strong>
                            <strong>NIS : <?= $user['nis'] ?><br></strong>
                          </div>
                          <div class="col-md-6">
                            <div class="author-box-left">                           
                              <div class="author-box-job">Status Verifikasi</div>
                              <?php if ($user['verifikasi'] == 1) { ?>
                                <h3><span class="badge badge-success">Sudah diverifikasi</span></h3>
                              <?php } else { ?>
                                <h3><span class="badge badge-danger">Belum diverifikasi</span></h3>
                              <?php } ?>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    
                    <!-- <div class="card">
                      <div class="card-body">
                        <strong>SYARAT PENDAFTARAN</strong>
                        <p><?= $sekolah['syarat'] ?></p>
                      </div>
                    </div> -->
                    <!-- notif formulir -->
                    <!-- <div class="alert alert-info alert-dismissible fade show" role="alert">
                      <strong><?= $user['nama_siswa'] ?></strong> Silahkan lengkapi data diri anda klik tombol ini untuk isi formulir
                      <a class="btn btn-warning btn-sm" href="<?= base_url() ?>formulir">isi formulir</a>
                      <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                      </button>
                    </div> -->
                    <!-- end notif formulir -->
                    <!-- notif biaya -->
                    <!-- <div class="alert alert-primary alert-dismissible fade show" id="#example" role="alert">
                      <i class="fas fa-bullhorn"></i> Info Biaya <br>
                      <?php foreach ($biaya as $b) : ?>
                        <div class="container">
                          <div class="row">
                            <div class="col">
                              <strong><u><?= $b['periode'] ?></u></strong>
                            </div>
                            <div class="col">
                              <u><?= $b['nama_biaya'] ?></u>
                            </div>
                            <div class="col">
                              <u><?= $b['jumlah'] ?></u>
                            </div>
                          </div>
                        </div>
                      <?php endforeach ?>
                      <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                      </button>
                    </div> -->
                    <!-- end notif biaya -->
                    <!-- notif pengumuman -->
                    <?php foreach ($pengumuman as $p) : ?>
                      <div class="alert alert-success alert-dismissible fade show" role="alert">
                        <i class="fas fa-bullhorn"></i> <?= $p['tgl'] ?> <br>
                        <strong><?= $p['judul'] ?></strong> <br>
                        <?= $p['deskripsi'] ?>
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                          <span aria-hidden="true">&times;</span>
                        </button>
                      </div>
                    <?php endforeach ?>
                    <!-- end notif pengumuman -->
                  </div>

                  <div class="col-md-4">
                    <div class="card card-user">
                      <div class="card-body">
                        <p><strong>Info Lebih Lanjut</strong></p>
                        <?php foreach ($kontak as $k) : ?>
                          <div class="alert alert-info" role="alert">
                            <li class="media">
                              <img class="img-profile rounded-circle" style="width: 3rem;" src="<?= base_url() ?>panel/assets/img/avatar/avatar-1.png">
                              <div class="media-body">
                                <div>&nbsp<?= $k['nama_kontak'] ?></div>
                                <div>&nbsp<a target="_blank" href="https://api.whatsapp.com/send?phone=+62<?= $k['no_kontak'] ?>&text=<?= $sekolah['livechat'] ?>" class="alert-link"><?= $k['no_kontak'] ?></a></div>
                              </div>
                            </li>
                          </div>
                        <?php endforeach ?>
                      </div>
                      <hr>
                      <div class="button-container">
                        <button href="#" class="btn btn-neutral btn-icon btn-round btn-lg">
                          <i class="fab fa-facebook-f"></i>
                        </button>
                        <button href="#" class="btn btn-neutral btn-icon btn-round btn-lg">
                          <i class="fab fa-twitter"></i>
                        </button>
                        <button href="#" class="btn btn-neutral btn-icon btn-round btn-lg">
                          <i class="fab fa-google-plus-g"></i>
                        </button>
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
  <!-- /.container-fluid -->