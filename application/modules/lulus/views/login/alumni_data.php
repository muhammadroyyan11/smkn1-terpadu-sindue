<div class="card-header">
    <h2>INFORMASI DATA ALUMNI</h2>
</div>
<form method="post" action="<?= base_url() . $this->uri->segment(1, 0) . $this->uri->slash_segment(2, 'both') . '/' . 'simpanaktivasi' ?>">
<div class="card-body">
    <div class="activities">

        <div class="activity">
            <div class="activity-detail">
                <div class="container">
                    <?php if ($alumni['nis'] == 0) { ?>
                        Belum ada informasi
                    <?php } else { ?>
                        <div class="row">
                            <div class="col-4">NO SURAT</div>
                            <div class="col-8">: <?= $alumni['no_surat'] ?></div>
                            <input type="hidden" name="no_surat" value="<?= $alumni['no_surat'] ?>" >
                        </div>
                        <div class="row">
                            <div class="col-4">TAHUN PELAJARAN</div>
                            <div class="col-8">: <?= $alumni['tahun_pelajaran'] ?></div>
                            <input type="hidden" name="tahun_pelajaran" value="<?= $alumni['tahun_pelajaran'] ?>" >
                        </div>

                        <div class="row">
                            <div class="col-4">NAMA</div>
                            <div class="col-8">: <?= $alumni['nama_siswa'] ?></div>
                            <input type="hidden" name="nama_siswa" value="<?= $alumni['nama_siswa'] ?>" >
                        </div>
                        <div class="row">
                            <div class="col-4">NIS</div>
                            <div class="col-8">: <?= $alumni['nis'] ?></div>
                            <input type="hidden" name="nis" value="<?= $alumni['nis'] ?>" >
                        </div>
                        <div class="row">
                            <div class="col-4">NISN</div>
                            <div class="col-8">: <?= $alumni['nisn'] ?></div>
                            <input type="hidden" name="nisn" value="<?= $alumni['nisn'] ?>" >
                        </div>
                        <div class="row">
                            <div class="col-4">TEMPAT / TGL LAHIR</div>
                            <div class="col-8">: <?= $alumni['tempat_lahir'] ?>, <?php echo format_indo_a(date($alumni['tanggal_lahir'])); ?></div>
                            <input type="hidden" name="tempat_lahir" value="<?= $alumni['tempat_lahir'] ?>" >
                            <input type="hidden" name="tanggal_lahir" value="<?= $alumni['tanggal_lahir'] ?>" >
                        </div>
                        <div class="row">
                            <div class="col-4">ALAMAT</div>
                            <div class="col-8">: <?= $alumni['alamat_siswa'] ?></div>
                            <input type="hidden" name="alamat_siswa" value="<?= $alumni['alamat_siswa'] ?>" >
                        </div>
                        <div class="row">
                            <div class="col-4">KETERANGAN</div>
                            <div class="col-8">: <?= $alumni['keterangan'] ?></div>
                            <input type="hidden" name="keterangan" value="<?= $alumni['keterangan'] ?>" >
                        </div>
                        <!-- <div class="row">
                            <div class="col-4">EMAIL</div>     
                            <div class="col-6 mb-3"><input type="text" class="form-control" name="email" placeholder="Email" required></div>                   
                        </div>
                        <div class="row">
                            <div class="col-4">TELPON / HP</div>
                            <div class="col-4"><input type="text" class="form-control" name="telp" placeholder="No HP" required></div>                            
                        </div> -->
                        <input type="hidden" name="npsn" value="<?= $alumni['npsn'] ?>" >
                        <input type="hidden" name="status" value="<?= $alumni['status'] ?>" >
                        <input type="hidden" name="tasm" value="<?= $alumni['tasm'] ?>" >                        
                    <?php } ?>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="card-footer">
    <button id='btnsimpan' type="submit" class="btn btn-primary justify-content-md-end">Aktifvasi</button>
</div>
</form>