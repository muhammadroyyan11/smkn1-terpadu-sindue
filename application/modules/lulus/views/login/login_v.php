<section id="about" class="d-flex flex-column justify-content-center">
  <div class="container" data-aos="zoom-in" data-aos-delay="100">

      <div class="section-title">
        <h2>FORM LOGIN</h2>
        <p>SKL (<span class="typed" data-typed-items="Surat Keterangan Lulus"></span>) dan Alumni </p>        
      </div>
      <div class="row mt-1">

        <div class="col-lg-8 mt-4 mt-lg-0 mb-3">
          
          <div class="card mb-3">
            <div class="card-header">
              <h5>Aktivasi Akun Alumni</h5>
            </div>
            <div class="card bg-info">
              <div class="card-body">
                <div class="card-responsive">
                  <form action="" id="form-aktifvasi">
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
            <div class="col-md-4 form-group"><br></div>
            <div class="card" id="aktifvasi"></div>    
          </div>
          <div class="card">
            <div class="card-header">
              <h5>FORM LOGIN E-SKL</h5>
            </div>
            <?= $this->session->flashdata('message'); ?>
            <form method="post" action="<?= base_url() . $this->uri->segment(1, 0) . '/' . 'login' ?>">
              <div class="card-body">

                  <div class="form-group col-lg-6">
                    <label for="username">Masukan NIS</label>
                    <div class="input-group has-validation">
                      <span class="input-group-text" id="inputGroupPrepend"><i class="bi bi-person-circle"></i></span>
                      <input type="text" class="form-control form-control-user" id="nis" name="nis" placeholder="NIS" value="<?= set_value('nis'); ?>">
                      <?= form_error('nis', '<small class="text-danger pl-3">', '</small>'); ?>
                    </div>
                  </div>

                  <div class="form-group col-lg-6">
                    <div class="col-12" id="show_hide_password">
                      <label for="yourPassword" class="form-label">Masukan Password</label>
                      <div class="input-group has-validation">
                          <span class="input-group-text" id="inputGroupPrepend"><i class="bi bi-calendar-check"></i></span>
                          <input class="form-control" name="password" id="password" type="password" placeholder="1990-10-25" >
                          <div class="invalid-feedback">Please enter your password!</div>
                          <div class="input-group-append">
                          <button class="input-group-text" type="button" tabindex="-1"><i class="bi bi-eye"></i></button>
                      </div>
                    </div>
                  <?= form_error('password', '<small class="text-danger pl-3">', '</small>'); ?>                  
                </div>
              </div>

              <div class="card-body text-danger">
                  * Masukan sesuai username (nis) dan password (tangal lahir) , jika lupa password bisa menghubungi nomor di samping.
              </div>

            </div>
            <div class="card-footer">
              <button id='btnsimpan' type="submit" class="btn btn-primary">LOGIN</button>
            </div>

            </form>
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
  <!-- End Contact Section -->

</main><!-- End #main -->