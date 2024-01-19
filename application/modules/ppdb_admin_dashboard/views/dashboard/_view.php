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
                                        <h5 class="card-title">Data <span>| Pendaftar</span></h5>
                                        <div class="d-flex align-items-center">
                                          <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                                          <?php foreach ($ppdb_daftar as $pd) { ?>
                                              <h6><?= $pd['total'] ?></h6>
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
                                        <h5 class="card-title">Data <span>| Diterima</span></h5>
                                        <div class="d-flex align-items-center">
                                          <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                                          <?php foreach ($ppdb_diterima as $pd) { ?>
                                              <h6><?= $pd['total'] ?></h6>
                                              <?php $diterim = $pd['total'] ?>
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
                                        <h5 class="card-title">Data <span>| Cadangan</span></h5>
                                        <div class="d-flex align-items-center">
                                          <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                                          <?php foreach ($ppdb_cadangan as $pd) { ?>
                                              <h6><?= $pd['total'] ?></h6>
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
                                        <h5 class="card-title">Data <span>| Quiz</span></h5>
                                        <div class="d-flex align-items-center">
                                          <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                                          <?php foreach ($ppdb_materi as $pm) { ?>
                                              <h6><?= $pm['total'] ?></h6>
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
                                        <h5 class="card-title">Data <span>| Sudah Tes</span></h5>
                                        <div class="d-flex align-items-center">
                                          <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                                          <?php foreach ($ppdb_nilai_quiz as $pd) { ?>
                                              <h6><?= $pd['total'] ?></h6>
                                              <?php $sudah = $pd['total'] ?>
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
                                        <h5 class="card-title">Data <span>| Belum Tes</span></h5>
                                        <div class="d-flex align-items-center">
                                          <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">                          
                                            <?php $belum = $diterim - $sudah ?>    
                                            <h6> <?= $belum ?> </h6>                                               
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
                            <div class="col-sm-7">
                              <div class="card">
                                <div class="card-body">
                                  <h5 class="card-title">Daftar Sekolah</h5>
                                  <div class="card">
                                    <div class="card-body">
                                      <!-- Table with hoverable rows -->
                                      <table class="table table-hover">
                                        <thead>
                                          <tr>
                                            <th scope="col">#</th>
                                            <th scope="col">NPSN</th>
                                            <th scope="col">Nama Sekolah</th>                                            
                                          </tr>
                                        </thead>
                                        <tbody>
                                        <?php
                                          $no = 0;
                                          foreach ($ppdb_sekolah as $ps) :
                                              $no++ ?> 
                                          <tr>
                                            <th scope="row"><?= $no; ?></th>
                                            <td><?= $ps['npsn']; ?></td>
                                            <td><?= $ps['nama_sekolah']; ?></td>                                            
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
                            <div class="col-sm-5">
                              <div class="card">
                                <div class="card-body"> 
                                  <div class="small-box bg-red">
                                    <br>
                                    <b>Periode : <?= $ppdb_periode['periode']?></b> <br>
                                    <b>Tanggal : <?= $ppdb_periode['tgl_mulai']?> s/d <?= $ppdb_periode['tgl_selesai']?></b> <br>
                                    <b>Tahun Pelajaran : <?= $ppdb_periode['tahun_pelajaran']?></b> 
                                  </div>                                                                                         
                                </div>
                                <div class="card-body"> 
                                  <div class="small-box bg-red">                                    
                                    <h5>Kuota :</h5>
                                    <?php foreach ($ppdb_kuota as $pk) { ?>
                                      <h6> <?= $pk['nama_jurusan'] ?> | <?= $pk['kuota'] ?> </h6>
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
            
            <!-- /.col -->
        </div>
        <!-- /.row -->
    </section>
    <!-- /.content -->

</main>
<!-- /.content-wrapper -->