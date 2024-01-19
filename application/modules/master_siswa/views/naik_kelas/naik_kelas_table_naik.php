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
        <div class="card mb-3">
            <div class="tampil-modal"></div>
                <?= form_error('email', '<div class="alert alert-danger" role="alert">', '</div>'); ?>
                <div class="flash-data" data-flashdata=""><?= $this->session->flashdata('message'); ?></div>
                    <div class="card-body">    
                         <div class="alert alert-warning" role="alert">
                            Proses naik kelas adalah memindahkan data siswa dari tabel jenjang A ke jenjang B atau naik ke jenjang selanjutnya !!!.
                        </div>                   
                        <form action="<?= base_url('master_siswa/naik_kelas/simpan_naik'); ?>" method="post" enctype="multipart/form-data">
                            <input type="hidden" name="th_active" value="<?= $ta ?>">
                            <div class="row">                                     
                                <div class="col-lg-2 mb-2 mt-lg-0">    
                                    <div class="form-group mb-2">
                                        <label>Naik Kelas / Pindah Kelas<span class="symbol required"> </span></label>
                                        <hr>
                                        <select name="tingkat" id="tingkat" class="selectpicker form-control" data-live-search="true">
                                            <option value="">Pilih Kelas</option>
                                            <?php foreach ($kelas as $kel) {
                                                echo '<option value="' . $kel['tingkat'] . '">' . $kel['nama'] . '</option>';
                                            } ?>
                                            <option value="Lulus">Lulus</option>
                                            <option value="Keluar">Keluar</option>
                                            <option value="Mutasi">Mutasi</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-lg-10 mb-2 mt-lg-0">
                                    <div class="card ">
                                        <div class="card-body">
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <div class="table-responsive" id="siswa">
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
                                                                    <th>NIK</th>
                                                                    <th>Nama </th>
                                                                    <th>Kelas</th>
                                                                </tr>
                                                            </thead>
                                                            <tbody>
                                                                <?php $no = 1 ?>
                                                                    <?php foreach ($siswa as $s) : if ($s['npsn'] == $pegawai['npsn']) { ?>
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
                                                                            <td><?= $s['tingkat'] ?></td>                   
                                                                            <input type="hidden" name="npsn" value="<?= $s['npsn'] ?>">
                                                                                <!-- <input type="hidden" name="tingkat" value="<?= $s['tingkat'] ?>"> -->
                                                                        </tr>
                                                                    <?php }
                                                                    endforeach ?>
                                                                </tbody>
                                                            </table>
                                                        </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="modal-footer justify-content-between"> 
                                        <a class="btn btn-info mb-3" href="<?= base_url() . $this->uri->segment(1, 0) . $this->uri->slash_segment(2, 'both') ?>"><i class="fa fa-arrow-circle-left"></i> Kembali</a>    
                                        <button type="submit" id="simpan" class="btn btn-success mb-3"><i class="bi bi-save-fill"></i> Simpan</a></button>
                                    </div> 
                                </div>   
                            </form>                                            
                        </div>
                    <!-- /.card-body -->
                    </div>
                </div>               
    </section>
    <!-- /.content -->

</main>

<!-- jQuery -->
<script src="<?= base_url() ?>panel/plugins/jquery/jquery.min.js"></script>
