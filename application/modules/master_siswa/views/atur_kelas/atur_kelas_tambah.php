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
                <div class="card">
                    <div class="card-header card-header-rose card-header-icon">
                        <h4 class="card-title">Data Siswa</h4>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-3">
                                <div class="card-header text-center">
                                    <div class="form-group">
                                        <form action="" id="FormTingkat">
                                            <div class="form-group mb-3">
                                                <label>Jenjang Masuk<span class="symbol required"> </span></label>
                                                <select name="" id="tingkat" class="selectpicker form-control" data-live-search="true" required>
                                                    <option value="">Pilih Kelas</option>
                                                    <?php foreach ($kelas as $kel) {
                                                        echo '<option value="' . $kel['tingkat'] . '">' . $kel['nama'] . '</option>';
                                                    } ?>
                                                </select>
                                            </div>
                                            <button type="submit" class="btn btn-info">Tampil Siswa</button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-9">
                                <form action="<?= base_url('master_siswa/atur_kelas/kelas_simpan'); ?>" method="post" enctype="multipart/form-data">
                                    <input type="hidden" name="ta" value="<?= $ta ?>">
                                    <input type="hidden" name="npsn" value="<?= $pegawai['npsn'] ?>">
                                    <div class="form-group mb-3">
                                        <label>Nama Ruang Kelas <span class="symbol required"> </span></label>
                                        <select name="rombel" id="rombel" class="selectpicker form-control" data-live-search="true" required>
                                            <option value="">Pilih Kelas</option>
                                            <?php foreach ($ruang as $ru) {
                                                echo '<option value="' . $ru['kode_ruang'] . '">' . $ru['kode_ruang'] . '</option>';
                                            } ?>
                                        </select>
                                    </div>
                                    <div class="card ">
                                        <div class="card-body">
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <div class="card">
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
                                                                        <th>NIS </th>
                                                                        <th>Nama Lengkap</th>
                                                                    </tr>
                                                                </thead>
                                                            </table>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="modal-footer justify-content-between">
                                        <a href="<?= base_url() . $this->uri->segment(1, 0) . $this->uri->slash_segment(2, 'both') ?>" class="btn btn-success"><i class="bi bi-arrow-counterclockwise"></i> Kembali</a>
                                        <button type="submit" id="simpan" class="btn btn-primary"><i class="bi bi-save2"></i> Simpan</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            </div>            
        </section>   
    <!-- /.content -->

</main>
