<?php defined('BASEPATH') or die("ip anda sudah tercatat oleh sistem kami") ?>
<script type="text/javascript">
 function checkAll(ele) {
      var checkboxes = document.getElementsByTagName('input');
      if (ele.checked) {
          for (var i = 0; i < checkboxes.length; i++) {
              if (checkboxes[i].type == 'checkbox' ) {
                  checkboxes[i].checked = true;
              }
          }
      } else {
          for (var i = 0; i < checkboxes.length; i++) {
              if (checkboxes[i].type == 'checkbox') {
                  checkboxes[i].checked = false;
              }
          }
      }
  }
</script>

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
        <div class="row">
            <div class="col-md-12">
                <!-- About Me Box -->
                    <div class="card card-info">
                         <div class="card-header">
                             <h3 class="card-title">Kelas : <?= ucwords($this->uri->segment(4, 0)) ?></h3>
                         </div>
                     </div>
                     <!-- /.card -->
                 </div>
                 <!-- /.col -->
                 <div class="col-md-12">
                     <div class="card">
                         <?= form_error('menu', '<div class="alert alert-danger" role="alert">', '</div>'); ?>
                         <?= $this->session->flashdata('message'); ?>
                         <form action="<?= base_url() . $this->uri->segment(1, 0) . $this->uri->slash_segment(2, 'both') ?>tarik" method="post" enctype="multipart/form-data">
                            <div class="card-body">
                                <div class="card card-info">
                                    <div class="card-header">
                                        <div class="row">                                   
                                            <div class="col-6">
                                                <div class="mb-3">
                                                    <label for="no_surat">No Surat</label>
                                                    <input type="text" name="no_surat" class="form-control"  placeholder="No Surat" autocomplete="off" required>
                                                    <?= form_error('no_surat', '<small class="text-danger pl-3">', '</small>'); ?>
                                                </div>
                                            </div>
                                            <div class="col-3">
                                                <div class="mb-3">
                                                    <label>Keterangan</label>                                   
                                                    <input type="text" id="keterangan" name="keterangan" class="form-control" placeholder="Lulus / Tidak Lulus">
                                                    <?= form_error('keterangan', '<small class="text-danger pl-3">', '</small>'); ?>
                                                </div>
                                            </div>
                                            <div class="col-3">
                                                <div class="mb-3">
                                                    <label>Tahun Pelajaran</label>                                   
                                                    <input type="text" id="tahun_pelajaran" name="tahun_pelajaran" class="form-control" placeholder="Tahun Pelajaran">
                                                    <?= form_error('tahun_pelajaran', '<small class="text-danger pl-3">', '</small>'); ?>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-content">
                                    <div class="active tab-pane" id="activity">
                                        <!-- Table row -->
                                        <div class="row">
                                            <div class="col-12 table-responsive">
                                                <table class="table table-striped">
                                                    <thead>
                                                        <tr>
                                                            <th>#</th>
                                                            <th>Nama</th>
                                                            <th>NIS</th>
                                                            <th>NISN</th>
                                                            <th>Tempat Lahir</th>
                                                            <th>Tanggal Lahir</th>
                                                            <th>Jenis Kelamin</th>                                                        
                                                            <th>Rombel</th>
                                                            <th>
                                                                <div class="form-check">
                                                                    <div class="icheck-primary">
                                                                        <label class="form-check1-label">
                                                                            <span class="form-check1-label">
                                                                                <input  class="form-check-input" type="checkbox" onchange="checkAll(this)" name="chk[]" >
                                                                                <span class="check1"></span>
                                                                            </span>
                                                                        </label>                                                                    
                                                                    </div>                                                            
                                                                </div> 
                                                            </th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <?php
                                                            $i = 1;
                                                            $total = 0; ?>
                                                                <?php foreach ($siswa as $s) :
                                                                if ($s['ta'] == $ta) { ?>
                                                                <tr>
                                                                    <td><?= $i; ?></td>
                                                                    <td><?= $s['nama']; ?></td>
                                                                    <td><?= $s['nis']; ?></td>
                                                                    <td><?= $s['nisn']; ?></td>
                                                                    <td><?= $s['tmp_lahir']; ?></td>
                                                                    <td><?= $s['tgl_lahir']; ?></td>
                                                                    <td><?= $s['jk']; ?></td>                                                                 
                                                                    <td><?= $s['rombel']; ?></td>
                                                                    <td>
                                                                        <div class="form-check">
                                                                            <div class="icheck-primary">
                                                                                <label class="form-check1-label">
                                                                                    <input class="form-check-input" type="checkbox" name="nis[]" value="<?= $s['nis'] ?>" id="check1">
                                                                                    <input class="form-check-input" type="hidden" name="nisn[]" value="<?= $s['nisn']; ?>" id="check1">          
                                                                                    <input class="form-check-input" type="hidden" name="nama_siswa[]" value="<?= $s['nama']; ?>" id="check1">      
                                                                                    <input class="form-check-input" type="hidden" name="tempat_lahir[]" value="<?= $s['tmp_lahir']; ?>" id="check1">     
                                                                                    <input class="form-check-input" type="hidden" name="tanggal_lahir[]" value="<?= $s['tgl_lahir']; ?>" id="check1">       
                                                                                    <input class="form-check-input" type="hidden" name="alamat_siswa[]" value="<?= $s['alamat']; ?>" id="check1">                                                
                                                                                    <input type="hidden" name="tasm" value="<?= $ta ?>">                                                                                   
                                                                                    <input type="hidden" name="npsn" id="npsn" value="<?=$sekolah['npsn']?>">
                                                                                    <span class="form-check1-label">
                                                                                        <span class="check1"></span>
                                                                                    </span>
                                                                                </label>
                                                                            </div>
                                                                        </div>
                                                                    </td>
                                                                </tr>
                                                                <?php $i++ ?>
                                                        <?php }
                                                            endforeach ?>
                                                    </tbody>
                                                </table>
                                            </div>
                                            <!-- /.col -->
                                        </div>
                                        <!-- /.row -->
                                    </div>
                                    <!-- /.tab-pane -->
                                </div>
                                <!-- /.tab-content -->
                            </div><!-- /.card-body -->
                            <div class="modal-footer justify-content-between">
                                <?php if ($cek_akses['role_id'] == 1) : ?>
                                    <a class="btn btn-primary mb-3" href="<?= base_url() . $this->uri->segment(1, 0) . $this->uri->slash_segment(2, 'both') ?>tambah">
                                        <i class="fa fa-arrow-circle-left"></i> Kembali
                                    </a>
                                    <button type="submit" id="simpan" class="btn btn-warning"><i class="bi bi-save2"></i> Simpan</button>
                                <?php endif ?>                               
                            </div>
                         </form>
                     </div>
                     <!-- /.nav-tabs-custom -->
                 </div>
                 <!-- /.col -->
             </div>
     </section>
     <!-- /.content -->

 </main>