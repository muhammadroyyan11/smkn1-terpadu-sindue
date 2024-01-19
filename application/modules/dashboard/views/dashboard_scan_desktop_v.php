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
  <section class="section dashboard">

    <div class="row">

      <!-- Profil Sekolah -->
      <div class="col-lg-12">
        <div class="row">
          <!-- Customers Card -->
          <div class="col-xxl-8 col-xl-8">
            <div class="card info-card customers-card">
              <div class="card-body">
                <h5 class="card-title">Profil <span>| Sekolah</span></h5>
                <div class="d-flex align-items-center">
                  <div class="container">
                    <div class="row">
                      <div class="col-5" style="font-size: 16px;">Nama Sekolah</div>
                      <div class="col-7" style="font-size: 16px;">: <?= $sekolah['nama_sekolah'] ?></div>
                    </div>
                    <div class="row">
                      <div class="col-5" style="font-size: 16px;">NPSN</div>
                      <div class="col-7" style="font-size: 16px;">: <?= $sekolah['npsn'] ?></div>
                    </div>
                    <div class="row">
                      <div class="col-5" style="font-size: 16px;">Alamat</div>
                      <div class="col-7" style="font-size: 16px;">: <?= $sekolah['alamat'] ?></div>
                    </div>
                    <div class="row">
                      <div class="col-5" style="font-size: 16px;">Kode Pos</div>
                      <div class="col-7" style="font-size: 16px;">: <?= $sekolah['kodepos'] ?></div>
                    </div>
                    <div class="row">
                      <div class="col-5" style="font-size: 16px;">Kecamatan/Kota (LN)</div>
                      <div class="col-7" style="font-size: 16px;">: <?= $sekolah['kecamatan'] ?></div>
                    </div>
                    <div class="row">
                      <div class="col-5" style="font-size: 16px;">Kab.-Kota/Negara (LN)</div>
                      <div class="col-7" style="font-size: 16px;">: <?= $sekolah['kota'] ?></div>
                    </div>
                    <div class="row">
                      <div class="col-5" style="font-size: 16px;">Propinsi/Luar Negeri (LN)</div>
                      <div class="col-7" style="font-size: 16px;">: <?= $sekolah['provinsi'] ?></div>
                    </div>
                    <div class="row">
                      <div class="col-5" style="font-size: 16px;">Status Sekolah</div>
                      <div class="col-7" style="font-size: 16px;">: <?= $sekolah['sekola_status'] ?></div>
                    </div>
                    <div class="row">
                      <div class="col-5" style="font-size: 16px;">Waktu Penyelenggaraan</div>
                      <div class="col-7" style="font-size: 16px;">: <?= $sekolah['sekolah_waktu'] ?></div>
                    </div>
                    <div class="row">
                      <div class="col-5" style="font-size: 16px;">Jenjang Pendidikan</div>
                      <div class="col-7" style="font-size: 16px;">: <?= $sekolah['sekolah_jenjang'] ?></div>
                    </div>
                  </div>
                </div>

              </div>
            </div>
          </div>
          <!-- End Customers Card -->

          <!-- Customers Card -->
          <div class="col-xxl-4 col-xl-4">
            <div class="card info-card customers-card">
              <div class="card-body profile-card pt-2 d-flex flex-column align-items-center">
                <h5 class="card-title">Kepala <span>| Sekolah</span></h5>
                <img src="<?= base_url() ?>panel/dist/upload/logo/<?= $kepsek['foto'] ?>" alt="Profile" class="rounded-circle img-thumbnail" height="100" width="100">
                <div class="card-title" style="font-size: 14px;">
                  <?= $kepsek['nama_kepsek'] ?> <br>
                  <?= $sekolah['nama_sekolah'] ?>
                </div>                              
              </div>
            </div>
          </div><!-- End Customers Card -->
        
        </div>
      </div>
      <!-- End Profil Sekolah -->

      <!-- Left side columns -->
      <div class="col-lg-12">
        <div class="row">

          <!-- Diterima Card -->
          <div class="col-xxl-3 col-md-3">
            <div class="card info-card sales-card">
              <div class="card-body">
                <h5 class="card-title">PPDB <span>| Diterima</span></h5>
                <div class="d-flex align-items-center">
                  <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                    <i class="bi bi-person-check-fill"></i>
                  </div>
                  <div class="ps-3">
                    <?php foreach ($diterima as $d1) { ?>
                      <h6> <?= $d1['total'] ?></h6>
                    <?php } ?>
                  </div>
                </div>

              </div>
            </div>
          </div><!-- End Diterima Card -->

          <!-- Cadangan Card -->
          <div class="col-xxl-3 col-md-3">
            <div class="card info-card customers-card">
              <div class="card-body">
                <h5 class="card-title">PPDB <span>| Cadangan</span></h5>
                <div class="d-flex align-items-center">
                  <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                    <i class="bi bi-person-bounding-box"></i>
                  </div>
                  <div class="ps-3">
                    <?php foreach ($cadangan as $c1) { ?>
                      <h6><?= $c1['total'] ?></h6>
                    <?php } ?>
                  </div>
                </div>

              </div>

            </div>
          </div><!-- End Cadangan Card -->

          <!-- Pendaftar Card -->
          <div class="col-xxl-3 col-md-3">
            <div class="card info-card revenue-card">
              <div class="card-body">
                <h5 class="card-title">PPDB <span>| Pendaftar</span></h5>
                <div class="d-flex align-items-center">
                  <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                    <i class="bi bi-person-lines-fill"></i>
                  </div>
                  <div class="ps-3">
                    <?php foreach ($registrasi as $g1) { ?>
                      <h6><?= $g1['total'] ?></h6>
                    <?php } ?>
                  </div>
                </div>

              </div>

            </div>
          </div><!-- End Pendaftar Card -->

          <!-- Kuota Card -->
          <div class="col-xxl-3 col-md-3">
            <div class="card info-card revenue-card">
              <div class="card-body">
                <h5 class="card-title">PPDB <span>| Kuota</span></h5>
                <div class="d-flex align-items-center">
                  <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                    <i class="bi bi-person-badge"></i>
                  </div>
                  <div class="ps-3">
                    <?php foreach ($kuota as $k1) { ?>
                      <h6><?= $k1['total'] ?></h6>
                    <?php } ?>
                  </div>
                </div>
              </div>

            </div>
          </div><!-- End Kuota Card -->

        </div>
      </div>

      <!-- Left side columns -->
      <div class="col-lg-12">
        <div class="row">
            <!-- Diterima Card -->
            <div class="col-xxl-3 col-md-3">
            <div class="card info-card sales-card">
              <div class="card-body">
                <h5 class="card-title">Total <span>| Pendidik</span></h5>
                <div class="d-flex align-items-center">
                  <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                    <i class="bi bi-people"></i>
                  </div>
                  <div class="ps-3">
                    <?php foreach ($guru as $d1) { ?>
                      <h6><?= $d1['total_guru'] ?></h6>
                    <?php } ?>
                  </div>
                </div>
              </div>
            </div>
          </div><!-- End Diterima Card -->

          <!-- Cadangan Card -->
          <div class="col-xxl-3 col-md-3">
            <div class="card info-card customers-card">
              <div class="card-body">
                <h5 class="card-title">Total <span>| Siswa</span></h5>
                <div class="d-flex align-items-center">
                  <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                    <i class="bi bi-bookmark-star"></i>
                  </div>
                  <div class="ps-3">
                    <?php foreach ($siswa as $t1) { ?>
                      <h6> <?= $t1['peserta'] ?></h6>
                    <?php } ?>
                  </div>
                </div>
              </div>

            </div>
          </div><!-- End Cadangan Card -->

          <!-- Pendaftar Card -->
          <div class="col-xxl-3 col-md-3">
            <div class="card info-card revenue-card">
              <div class="card-body">
                <h5 class="card-title">Total <span>| Lulus</span></h5>
                <div class="d-flex align-items-center">
                  <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                    <i class="bi bi-shop"></i>
                  </div>
                  <div class="ps-3">
                    <?php foreach ($lulus as $s1) { ?>
                      <h6> <?= $s1['total_lulus'] ?></h6>
                    <?php } ?>
                  </div>
                </div>
              </div>
            </div>
          </div><!-- End Pendaftar Card -->

          <!-- Kuota Card -->
          <div class="col-xxl-3 col-md-3">
            <div class="card info-card revenue-card">
              <div class="card-body">
                <h5 class="card-title">Online <span>| Users</span></h5>
                <div class="d-flex align-items-center">
                  <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                    <i class="bi bi-person-lines-fill"></i>
                  </div>
                  <div class="ps-3">
                    <?php foreach ($online as $o1) { ?>
                      <h6> <?= $o1['total_online'] ?></h6>
                    <?php } ?>
                  </div>
                </div>
              </div>
            </div>
          </div><!-- End Kuota Card -->

          <div class="col-xxl-4 col-xl-4">
            <div class="card top-selling overflow-auto">
              <div class="card-body pb-0">
                <h5 class="card-title">Total <span>| <?= $rombel ?> Rombongan Belajar</span></h5>
              </div>
            </div>
          </div>

          <div class="col-xxl-4 col-xl-4">
            <div class="card top-selling overflow-auto">
              <div class="card-body pb-0">
                <h5 class="card-title">Tahun Pelajaran <span>| <?= $tp ?></span></h5>
              </div>
            </div>
          </div>

          <div class="col-xxl-4 col-xl-4">
            <div class="card top-selling overflow-auto">
              <div class="card-body pb-0">
                <h5 class="card-title">Semester <span>| <?= $semester ?></span></h5>
              </div>
            </div>
          </div>
                  
        </div>
      </div>

      <!-- Left side columns -->
      <div class="col-lg-12">
        <div class="row">

          <div class="col-xxl-4 col-xl-4">
            <div class="card top-selling overflow-auto">
              <div class="card-body pb-0">  
                <h5 class="card-title">Daftar <span>| Kelas</span></h5>           
                <table class="table table-borderless">
                  <thead>
                    <tr>  
                      <th> # </th>                                     
                      <th> Rombel </th>
                      <th> Siswa</th>                           
                    </tr>
                  </thead>
                  <tbody>
                    <?php $i = 1; ?>
                    <?php foreach ($tampil as $t) :{ ?>
                    <?php foreach ($peserta as $n) :
                      if ($n['ta'] == $ta)
                      if ($n['id_kelas'] == $t['id_kelas'])  { ?>                                                        
                      <tr>  
                        <td width="5%"><?= $i ?></td>                                                                                          
                        <td><i class="bi bi-house"></i> | <?= $n['rombel'] ?></td>
                        <td width="40%" class="project-actions"><i class="bi bi-people"></i> | <?= $n['peserta'] ?></td>  
                      </tr>                          
                      <?php $i++; ?>
                      <?php } endforeach ?>
                      <?php }  endforeach; ?>                    
                    </tbody>
                  </table>  
              </div>
            </div>
          </div>

          <div class="col-xxl-8 col-xl-8">
            <div class="card top-selling overflow-auto">
              <div class="card-body pb-0">
                <h5 class="card-title">Daftar <span>| Mata Pelajaran</span></h5>
                <table class="table table-striped projects" width="100%">
                  <thead>
                    <tr>  
                      <th> # </th>                                     
                      <th> Mata Pelajaran </th>                                                       
                      <th> Kode Singkat </th> 
                    </tr>
                  </thead>
                  <tbody>
                    <?php $i = 1; ?>
                    <?php foreach ($mapel as $ma) :{ ?>
                    <tr>
                      <td><?= $i ?></td>
                      <td><?= $ma['nama_mapel'] ?></td>
                      <td><?= $ma['kode_mapel'] ?></td>
                    </tr>   
                    <?php $i++; ?>
                    <?php }  endforeach; ?>             
                  </tbody>
                </table>       
              </div>
            </div>
          </div>

        </div>
      </div>

    </div>
  </section>

</main>