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
                         <form action="<?= base_url() . $this->uri->segment(1, 0) . $this->uri->slash_segment(2, 'both') ?>simpan_mapel" method="post" enctype="multipart/form-data">
                            <div class="card-body">                                
                                <div class="tab-content">
                                    <div class="active tab-pane" id="activity">
                                        <!-- Table row -->
                                        <div class="row">
                                            <div class="col-12 table-responsive">
                                                <table class="table table-striped">
                                                    <thead>
                                                        <tr>
                                                            <th>#</th>
                                                            <th>Kode</th>                                                          
                                                            <th>Nama Mapel</th>  
                                                            <th>Kelompok</th>                                                        
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
                                                                <?php foreach ($mapel as $m) : { ?>                                                               
                                                                <tr>
                                                                    <td><?= $i; ?></td>
                                                                    <td><?= $m['kode_mapel']; ?></td>
                                                                    <td><?= $m['nama_mapel']; ?></td>
                                                                    <td><?= $m['kelompok']; ?></td>                                                                  
                                                                    <td>
                                                                        <div class="form-check">
                                                                            <div class="icheck-primary">
                                                                                <label class="form-check1-label">                                                                                    
                                                                                    <input class="form-check-input" type="checkbox" name="no_urut[]" value="<?= $i; ?>" id="check1">    
                                                                                    <input class="form-check-input" type="hidden" name="kode_mapel[]" value="<?= $m['kode_mapel'] ?>" id="check1">
                                                                                    <input class="form-check-input" type="hidden" name="nama_mapel[]" value="<?= $m['nama_mapel']; ?>" id="check1">          
                                                                                    <input class="form-check-input" type="hidden" name="kelompok[]" value="<?= $m['kelompok']; ?>" id="check1">  
                                                                                    <input type="hidden" name="rombel" value="<?= ucwords($this->uri->segment(4, 0)) ?>">              
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
                                    <a class="btn btn-outline-primary" href="<?= base_url() . $this->uri->segment(1, 0) . $this->uri->slash_segment(2, 'both') ?>"><i class="fa fa-arrow-circle-left"></i> Kembali</a>
                                    <div class="">
                                        <?php echo form_submit('submit', 'Simpan', 'class="btn btn-success"'); ?>
                                        <?php echo form_submit('forget', 'Ubah ', 'class="btn btn-warning"'); ?>
                                        <!-- <button type="submit" name="action" value="submit" id="simpan" class="btn btn-success"><i class="bi bi-save2"></i> Simpan</button>
                                        <button type="submit" name="action" value="forget" id="ubah" class="btn btn-warning"><i class="bi bi-save2"></i> Ubah</button> -->
                                    </div>                                    
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