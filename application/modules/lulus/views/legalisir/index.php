<?php defined('BASEPATH') or die("ip anda sudah tercatat oleh sistem kami") ?>
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

            <?php if($user['verifikasi'] == 1){?>
              <div class="card-body">
                <div class="content">              

                  <div class="row">
                    <div class="col-12 col-sm-12 col-lg-12">
                      <div class="card author-box card-primary">
                        <div class="card-header">
                          <!-- <h4>DATA PEMBAYARAN</h4> -->
                          <div class="card-header-action">
                            <!-- Button trigger modal -->
                            <button type="button" class="btn btn-danger btn-add btn-sm" data-toggle="modal" data-target="#modelId">
                              <i class="fas fa-plus-circle"></i> Pengajuan Legalisir
                            </button>                                                 
                            <div class="col-lg-12">
                              <?php if ($this->session->flashdata()) : ?>
                                <strong><?= $this->session->flashdata('message'); ?>.</strong>                                
                                <!-- <div class="alert alert-warning alert-dismissible fade show" role="alert">
                                  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                  </button>
                                </div> -->
                              <?php endif; ?>
                            </div>
                          </div>
                        </div>
                        <div class="tampil-modal"></div>
                        <div class="card-body">
                          <div class="table-responsive">
                            <table class="table">
                              <thead>
                                <tr>
                                  <th class="text-center">
                                    #
                                  </th>
                                  <th>Tgl Pengajuan</th>
                                  <th>Tujuan</th>
                                  <th>Status</th>
                                  <th>Tgl Bayar</th>
                                  <th>Jumlah</th>
                                  <th>Status</th>
                                  <th>Action</th>
                                </tr>
                              </thead>
                              <tbody>
                                <?php
                                $no = 1;
                                foreach ($legalisir as $lg)
                                if($lg['nis'] == $user['nis']) {
                                ?>
                                  <tr>
                                    <td><?= $no; ?></td>
                                    <td><?= $lg['tgl_pengajuan'] ?></td>
                                    <td><?= $lg['tujuan'] ?></td>
                                    <td>
                                      <?php if ($lg['verifikasi'] == 1) { ?>
                                        <span class="badge badge-success">Sudah di Verifikasi</span>
                                      <?php } else { ?>
                                        <span class="badge badge-warning">Proses Cek</span>
                                      <?php } ?>
                                    </td>
                                    <td><?= $lg['tgl_bayar'] ?></td>
                                    <td><?= "Rp " . number_format($lg['jum_bayar'], 0, ",", ".") ?></td>
                                    <td>
                                      <?php if ($lg['status_bayar'] == 3) { ?>
                                        <span class="badge badge-success">Pembayaran diterima</span>
                                      <?php } else { ?>
                                        <span class="badge badge-warning">Proses Cek</span>
                                      <?php } ?>
                                    </td>
                                    <td>
                                      <?php if ($lg['status_bayar'] == 3) { ?>
                                        <button type="button" class="btn btn-info btn-detail btn-sm " data-toggle="modal" data-target="#tambahdata" data-id="<?= $lg['legalisir_id'] ?>">
                                          <i class="fas fa-eye"></i> Detail
                                        </button>  
                                      <?php } elseif ($lg['status_pengajuan'] == 2) { ?>
                                        <button type="button" class="btn btn-primary btn-bayar btn-sm " data-toggle="modal" data-target="#tambahdata" data-id="<?= $lg['legalisir_id'] ?>">
                                          <i class="fas fa-plus-circle"></i> Bayar
                                        </button>                                     
                                      <?php } elseif ($lg['status_bayar'] == 2) { ?>
                                        <span class="badge badge-warning">Proses Cek</span>                                     
                                      <?php } ?>
                                    </td>                                 
                                  </tr>
                                <?php $no++;
                                }  ?>
                              </tbody>
                            </table>
                          </div>                      
                        </div>
                      </div>
                    </div>
                  </div>
                  
                </div>
              </div>
            <?php } ?>
          

          </div>
        </div>

      </div>
    </div>
  </div>



  