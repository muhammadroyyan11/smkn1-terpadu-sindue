<section id="about" class="d-flex flex-column justify-content-center">
  <div class="container" data-aos="zoom-in" data-aos-delay="100">
      
        <div class="section-title">        
          <h2>INFORMASI LULUS</h2>
          <p>SKL (<span class="typed" data-typed-items="Surat Keterangan Lulus"></span>) </p>        
        </div>      
        <div class="row mt-1">
          <div class="col-lg-8 mt-5 mt-lg-0 mb-3">
            <div class="card">
              <div class="card-header">
                <h5 class="card-title">CETAK SKL</h5>
              </div>
              <div class="card-body">
                <?php
                  $akhir  = new DateTime($publish['tanggal_publis']); //Waktu awal
                  $awal = new DateTime(); // Waktu sekarang atau akhir
                  $diff  = $awal->diff($akhir);           
                ?>
                <?php if ($akhir <= $awal) { ?>                   
                  <div class="card bg-info">
                    <div class="card-body">
                      <div class="card-responsive">
                        <form action="" id="form-lulus">
                          <div class="row">
                            <div class="col-lg-8 mt-4 mt-lg-0">
                              <div class="">
                                <input class="form-control" type="number" name="nisn" id="nisn" placeholder="Masukkan NISN">
                              </div>
                            </div>
                            <div class="col-lg-4 mt-4 mt-lg-0">
                              <button type="submit" class="btn btn-primary">Cari Data</button>
                            </div>
                          </div>
                        </form>
                      </div>
                    </div>
                  </div>
                  <div class="card">
                    <div class="card-body">
                      <p class="fst-italic text-danger"> * Untuk menampilkan Informasi Data Kelulusan -> masukkan NISN -> klik cari data</p>
                    </div>
                  </div>
                  <div class="col-md-4 form-group"><br></div>
                  <div class="card" id="sertifikat"></div>
                <?php } else { ?>          
                  <div class="card bg-info">
                    <div class="card-body">
                      <div>
                        <h3 class="l1-txt2 p-b-45 respon2 respon4">
                          Dapat Dilihat Dalam :
                        </h3>
                      </div>
                      <div id="countdown" class="countdown">
                        <div class="card mt-3 mt-lg-3 mb-3">
                          <div class="time">
                            <h2 id="days"></h2>
                            <small class="card-header">Days</small>
                          </div>
                        </div>
                        <div class="card mt-3 mt-lg-3 mb-3">
                          <div class="time">
                            <h2 id="hours"></h2>
                            <small class="card-header">Hours</small>
                          </div>
                        </div>                       
                        <div class="card mt-3 mt-lg-3 mb-3">
                          <div class="time">
                            <h2 id="minutes"></h2>
                            <small class="card-header">Minutes</small>
                          </div>
                        </div>
                        <div class="card mt-3 mt-lg-3 mb-3">
                          <div class="time">
                            <h2 id="seconds"></h2>
                            <small class="card-header">Seconds</small>
                          </div>
                        </div>
                      </div>                  
                    </div>
                  </div>
                <?php } ?>      
              </div>   
            </div>
          </div>
          <!-- Info Lebih Lanjut -->        
          <div class="col-lg-4">
            <div class="info">
              <div class="card">
                <div class="card-header">
                  <h5 class="card-title">Info Lebih Lanjut</h5>
                </div>
              
                <div class="container" data-aos="fade-up">               
                    <div class="phone">
                    <?php foreach ($kontak as $k) :
                      $opsi = $this->db->get_where('m_sekolah')->row_array(); ?>                      
                      <br>
                      <h4> <i class=""><a target="_blank" href="https://api.whatsapp.com/send?phone=+62<?= $k['no_kontak'] ?>&text=Hello... , <?= $opsi['nama_sekolah'] ?> <?= $sekolah['livechat'] ?>" class="alert-link"><img class="img-profile rounded-circle" style="width: 3rem;" src="<?= base_url() ?>website/assets/img/avatar/WA_group.png"></a></i> CONTACT:</h4>
                      <p>&nbsp<?= $opsi['nama_sekolah'] ?></b><br>
                            &nbsp<?= $k['nama_kontak'] ?><br>
                            &nbsp<a target="_blank" href="https://api.whatsapp.com/send?phone=+62<?= $k['no_kontak'] ?>&text=Hello... , <?= $opsi['nama_sekolah'] ?> <?= $sekolah['livechat'] ?>" class="alert-link"><?= $k['no_kontak'] ?></a></p>
                      <br>
                      <?php endforeach ?>     
                    </div>                                            
                </div> 

              </div>
            </div> 
          </div>
          <!-- End Info Lebih Lanjut -->
        </div>
  
  </div>
</section>


