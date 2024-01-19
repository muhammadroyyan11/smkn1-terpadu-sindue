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
            <div class="col-12">
                <div class="card">
                    <div class="tampil-modal"></div>
                    <?= form_error('email', '<div class="alert alert-danger" role="alert">', '</div>'); ?>
                    <div class="flash-data" data-flashdata=""><?= $this->session->flashdata('message'); ?></div>
                    <div class="card-body">
                        <div class="alert alert-warning" role="alert">
                            Proses daftar ulang siswa baru adalah memasukkan data siswa baru ke tabel jenjang !!!.
                        </div>
                        <form action="<?= base_url('master_siswa/naik_kelas/simpan_baru'); ?>" method="post" enctype="multipart/form-data">
                            <input type="hidden" name="th_active" value="<?= $ta ?>">
                            <input type="hidden" name="npsn" value="<?= $pegawai['npsn'] ?>">
                            <div class="content">
                                <div class="panel">
                                    <div class="table-responsive">
                                        <table class="table table-striped">
                                            <thead>
                                                <tr>
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
                                                    <th class="text-center">#</th>
                                                    <th>NIS</th>
                                                    <th>Nama </th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php $no = 1 ?>
                                                <?php foreach ($siswa as $s) { ?>
                                                    <tr>
                                                        <td>
                                                            <div class="form-check">
                                                                <div class="icheck-primary">
                                                                    <label class="form-check1-label">
                                                                        <input class="form-check-input" type="checkbox" name="nis[]" value="<?= $s['nis'] ?>" id="check1">
                                                                        <span class="form-check1-label">
                                                                            <span class="check1"></span>
                                                                        </span>
                                                                    </label>
                                                                </div>
                                                            </div>
                                                        </td>
                                                        <td class="text-center"><?= $no++ ?></td>
                                                        <td><?= $s['nis'] ?></td>
                                                        <td><?= $s['nama'] ?></td>
                                                        <input type="hidden" name="tingkat" value="<?= $s['tingkat'] ?>">
                                                    </tr>
                                                <?php }
                                                ?>
                                            </tbody>
                                        </table>                                    
                                    </div>
                                </div>
                            </div>   
                            <div class="modal-footer justify-content-between"> 
                                <a class="btn btn-info mb-3" href="<?= base_url() . $this->uri->segment(1, 0) . $this->uri->slash_segment(2, 'both') ?>"><i class="fa fa-arrow-circle-left"></i> Kembali</a>    
                                <button type="submit" id="simpan" class="btn btn-success mb-3"><i class="bi bi-save-fill"></i> Simpan</a></button>
                            </div> 
                        </form>                       
                    </div>
                    <!-- /.card-body -->
                </div>
                <!-- /.card -->
        </section>
    <!-- /.content -->

</main>

<!-- jQuery -->
<script src="<?= base_url() ?>panel/plugins/jquery/jquery.min.js"></script>

