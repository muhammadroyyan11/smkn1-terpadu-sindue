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
    <section class="section dashboard">
        <div class="col-12">

            <div class="card" style="border-top: 8px solid #035AA6;border-bottom: 8px solid #035AA6;border-right: 4px solid #035AA6;border-top-left-radius: 16px;border-bottom-left-radius: 16px;box-shadow: 0px 3px 6px 0px #222;">
                <div class='col-md-12'>
                    <div class='box box-info'>
                      
                        <div class="card">
                          <div class="card-body">                           
                            <br/>
                                <div class="row row-cols-1 row-cols-md-3 g-4">                              
                                  <div class="col-lg-4 col-xs-6">
                                    <div class="card info-card sales-card">
                                      <div class="card-body">
                                        <h5 class="card-title">All <span>| Lulus</span></h5>
                                        <div class="d-flex align-items-center">
                                          <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                                            <?php foreach ($all_lulus as $al) { ?>
                                              <h6><?= $al['total'] ?></h6>
                                            <?php } ?>      
                                          </div>                                                                                 
                                        </div>                                           
                                      </div>                                      
                                      <div class="card-body">
                                        <div class="icon">
                                          <i class="fa fa-edit"></i>
                                          <a href="#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
                                        </div>                               
                                      </div>
                                    </div>
                                  </div>
                                  
                                  <div class="col-lg-4 col-xs-6">
                                    <div class="card info-card sales-card">
                                      <div class="card-body">
                                        <h5 class="card-title">Lulus <span>| TP : <?= $tp ?> </span></h5>
                                        <div class="d-flex align-items-center">
                                          <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                                          <?php foreach ($th_lulus as $th) { ?>
                                              <h6><?= $th['total'] ?></h6>                                              
                                            <?php } ?>      
                                          </div>                                                                                 
                                        </div>                                           
                                      </div>                                      
                                      <div class="card-body">
                                        <div class="icon">
                                          <i class="fa fa-edit"></i>
                                          <a href="#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
                                        </div>                               
                                      </div>
                                    </div>                                    
                                  </div>

                                  <div class="col-lg-4 col-xs-6">
                                    <div class="card info-card sales-card">
                                      <div class="card-body">
                                        <h5 class="card-title">Data <span>| Cek Lulus</span></h5>
                                        <div class="d-flex align-items-center">
                                          <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                                          <?php foreach ($cek_lulus as $cl) { ?>
                                              <h6><?= $cl['total'] ?></h6>
                                            <?php } ?>      
                                          </div>                                                                                 
                                        </div>                                           
                                      </div>                                      
                                      <div class="card-body">
                                        <div class="icon">
                                          <i class="fa fa-edit"></i>
                                          <a href="#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
                                        </div>                               
                                      </div>
                                    </div>
                                  </div>

                                  <div class="col-lg-4 col-xs-6">
                                    <div class="card info-card sales-card">
                                      <div class="card-body">
                                        <h5 class="card-title">All <span>| Alumni</span></h5>
                                        <div class="d-flex align-items-center">
                                          <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                                            <?php foreach ($all_lulus as $al) { ?>
                                              <h6><?= $al['total'] ?></h6>
                                            <?php } ?>        
                                          </div>                                                                                 
                                        </div>                                           
                                      </div>                                      
                                      <div class="card-body">
                                        <div class="icon">
                                          <i class="fa fa-edit"></i>
                                          <a href="#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
                                        </div>                               
                                      </div>
                                    </div>                                  
                                  </div> 

                                  <div class="col-lg-4 col-xs-6">
                                    <div class="card info-card sales-card">
                                      <div class="card-body">
                                        <h5 class="card-title">Alumni <span>| Aktivasi</span></h5>
                                        <div class="d-flex align-items-center">
                                          <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                                            <?php foreach ($alumni_register as $ar) { ?>
                                              <h6><?= $ar['total'] ?></h6>                                             
                                            <?php } ?>      
                                          </div>                                                                                 
                                        </div>                                           
                                      </div>                                      
                                      <div class="card-body">
                                        <div class="icon">
                                          <i class="fa fa-edit"></i>
                                          <a href="#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
                                        </div>                               
                                      </div>
                                    </div>
                                  </div>
                                   
                                  <div class="col-lg-4 col-xs-6">
                                    <div class="card info-card sales-card">
                                      <div class="card-body">
                                        <h5 class="card-title">Alumni <span>| Perbaikan Data</span></h5>
                                        <div class="d-flex align-items-center">
                                          <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">                          
                                            <?php foreach ($perbaikan as $p) { ?>
                                              <h6><?= $p['total'] ?></h6>                                             
                                            <?php } ?>                                                 
                                          </div>                                                                                 
                                        </div>                                           
                                      </div>                                      
                                      <div class="card-body">
                                        <div class="icon">
                                          <i class="fa fa-edit"></i>
                                          <a href="#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
                                        </div>                               
                                      </div>
                                    </div>
                                  </div>

                                </div>                            
                          </div>                  
                        </div> 
                        
                        <div class="card">   
                          <div class="card-body">
                          <br/>
                          <div class="row row-cols-1 g-4"> 
                            <div class="col-sm-6">
                              <div class="card">
                                <div class="card-body">
                                  <h5 class="card-title">Pengumuman Terbaru</h5>
                                  <?php foreach ($info_register as $ir) { ?>
                                  <div class="card">
                                    <div class="card-body">                                       
                                        <h5 class="card-title">
                                          <?= $ir->judul ?> |                                       
                                          <span> <?php if($ir->jenis == 1) {
                                            echo ' Internal';
                                          } else {
                                            echo ' Eksternal';
                                          }
                                          ?> 
                                          </span>
                                        </h5>
                                        <div class="d-flex align-items-center">                                        
                                          <p><?= $ir->deskripsi ?></p>                                                                               
                                        </div>                                                                   
                                    </div>
                                  </div>
                                  <?php } ?> 
                                </div>
                              </div>
                            </div>
                            <div class="col-sm-6">
                              <div class="card">
                              <div class="card-body">
                                  <h5 class="card-title">Alumni | Registrasi Terbaru</h5>
                                  <div class="card">
                                    <div class="card-body">
                                      <!-- Table with hoverable rows -->
                                      <table class="table table-hover">
                                        <thead>
                                          <tr>
                                            <th scope="col">#</th>
                                            <th scope="col">NIS</th>
                                            <th scope="col">Nama</th>
                                            <th scope="col">TP Lulus</th>                                            
                                          </tr>
                                        </thead>
                                        <tbody>
                                        <?php
                                          $no = 0;
                                          foreach ($data_register as $dr) :
                                              $no++ ?> 
                                          <tr>
                                            <th scope="row"><?= $no; ?></th>
                                            <td><?= $dr->nis; ?></td>
                                            <td><?= $dr->nama_siswa; ?></td> 
                                            <td><?= $dr->tahun_pelajaran; ?></td>                                            
                                          </tr>     
                                          <?php endforeach ?>            
                                        </tbody>
                                      </table>
                                      <!-- End Table with hoverable rows -->

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
            
            <!-- /.col -->
        </div>
        <!-- /.row -->
    </section>
    <!-- /.content -->

</main>
<!-- /.content-wrapper -->