<!DOCTYPE html>
<html>

<head>
    <meta charset='utf-8'>

    <title><?= $lulus['nama_siswa'] ?></title>

  <!-- General CSS Files -->   
  <style>
        @page {
            margin-top: 0 px !important;
            margin-bottom: 0 px !important;

        }

        .styled-table {
            border-collapse: collapse;
            margin: 25px;
            font-size: 11px;

            min-width: 400px;
            width: 100%;
            box-shadow: 0 0 20px rgba(0, 0, 0, 0.15);
        }

        .styled-table thead tr {
            background-color: #009879;
            color: #ffffff;
            text-align: left;
        }

        .styled-table th,
        .styled-table td {
            padding: 4px 7px;
        }

        .styled-table tbody tr {
            border-bottom: 1px solid #dddddd;
        }

        .styled-table tbody tr:nth-of-type(even) {
            background-color: #f3f3f3;
        }

        .styled-table tbody tr:last-of-type {
            border-bottom: 2px solid #009879;
        }
    </style>
</head>

<body>
    <div style="text-align: center;" > 
        <img src="<?= base_url(); ?>panel/dist/upload/logo/<?= $publish['logo'] ?>" alt="..." style="width:100%;max-width:750px">
    </div>  
    <div>        
        <center>  
        <div style="padding-left:50px;margin-right:50px ;" class="col-md-12">  
            <h3 style="text-align: center">
                <u>SURAT KETERANGAN LULUS</u> <br>
                NO : <?= $lulus['no_surat'] ?>
            </h3>      
       
            <div style="margin-left: 0px; text-align: justify;"><?= $publish['kata_pembuka'] ?></div>

            <table style="margin-left: 80px;margin-right:80px" class="table table-sm table-bordered">
                <tr>
                    <td>NAMA</td>
                    <td>:</td>
                    <td><b><?= $lulus['nama_siswa'] ?></b></td>
                </tr>
                <tr>
                    <td>NIS </td>
                    <td>:</td>
                    <td><?= $lulus['nis'] ?></td>
                </tr> 
                <tr>
                    <td>NISN</td>
                    <td>:</td>
                    <td><?= $lulus['nisn'] ?></td>
                </tr> 
                <tr>
                    <td>TEMPAT / TGL LAHIR</td>
                    <td>:</td>
                    <td><?= $lulus['tempat_lahir'] ?>, <?= format_indo_a($lulus['tanggal_lahir'])?></td>
                </tr>           
                <tr>
                    <td>ALAMAT</td>
                    <td>:</td>
                    <td><?= $lulus['alamat_siswa'] ?></td>
                </tr> 
            </table>
            <br>  
            <div style="margin-left: 0px; text-align: justify;"><?= $publish['kata_isi'] ?></div>        
            <h3 style="text-align: center"><?= $lulus['keterangan'] ?></h3>              
            <div style="margin-left: 0px; text-align: justify;"><?= $publish['kata_penutup'] ?></div>   
        </div>      
        </center>
    </div>

    <div style="padding-left:50px;margin-right:50px ;" class="col-md-12"><h4 style="text-align: center">DAFTAR NILAI</h4></div>
    <table style="margin-left: 80px;margin-right:80px; border: 1px solid black; border-collapse: collapse;" class="table table-sm table-bordered">
            <tr style="border: 1px solid black;">
                <th style="border: 1px solid black;">No</th>
                <th style="border: 1px solid black;">Mata Pelajaran</th>
                <th style="border: 1px solid black;">Nilai Ujian Sekolah</th>
            </tr>
            <tr style="border: 1px solid black;">
                <td class="text-center" colspan="3">Kelompok A</td>
            </tr>
            <?php  $no = 0; ?>
            <?php foreach ($tampil as $t) :?>                
            <?php if($t['id_siswa'] == $lulus['nis']) {?>
            <?php foreach ($mapel as $m) : ?> 
            <?php  if($m['rombel'] == $t['rombel']) { ?>
            <?php if($m['kelompok'] == 'A') {?>   
            <?php  $no++;?>      
            <tr style="border: 1px solid black;">               
                <td style="border: 1px solid black; text-align: center;"><?= $no; ?></td>
                <td style="border: 1px solid black;"><?= $m['nama_mapel'] ?></td>
                <td style="border: 1px solid black; text-align: center;">
                <?php foreach ($nilai as $n) : ?> 
                    <?php if($n['nis'] == $lulus['nis']) {?> 
                    <?php  if($n['kode_mapel'] == $m['kode_mapel']) { ?>     
                        <?= $n['nilai'] ?>
                    <?php } ?>
                    <?php } ?> 
                <?php endforeach; ?>
                </td>               
            </tr>             
            <?php } ?> 
            <?php } ?>                             
            <?php endforeach; ?>
            <?php } ?>                             
            <?php endforeach; ?>      
            <tr style="border: 1px solid black;">
                <td class="text-center" colspan="3" >Kelompok B</td>
            </tr>
            <?php  $no = 0; ?>
            <?php foreach ($tampil as $t) :?>                
            <?php if($t['id_siswa'] == $lulus['nis']) {?>
            <?php foreach ($mapel as $m) : ?> 
            <?php  if($m['rombel'] == $t['rombel']) { ?>
            <?php if($m['kelompok'] == 'B') {?>   
            <?php  $no++;?>      
            <tr style="border: 1px solid black;">               
                <td style="border: 1px solid black; text-align: center;"><?= $no; ?></td>
                <td style="border: 1px solid black;"><?= $m['nama_mapel'] ?></td>
                <td style="border: 1px solid black; text-align: center;">
                <?php foreach ($nilai as $n) : ?> 
                    <?php if($n['nis'] == $lulus['nis']) {?> 
                    <?php  if($n['kode_mapel'] == $m['kode_mapel']) { ?>     
                        <?= $n['nilai'] ?>
                    <?php } ?>
                    <?php } ?> 
                <?php endforeach; ?>
                </td>               
            </tr>             
            <?php } ?> 
            <?php } ?>                             
            <?php endforeach; ?>
            <?php } ?>                             
            <?php endforeach; ?> 
            <tr style="border: 1px solid black;">
                <td class="text-center" colspan="3" >Kelompok C</td>
            </tr>
            <?php  $no = 0; ?>
            <?php foreach ($tampil as $t) :?>                
            <?php if($t['id_siswa'] == $lulus['nis']) {?>
            <?php foreach ($mapel as $m) : ?> 
            <?php  if($m['rombel'] == $t['rombel']) { ?>
            <?php if($m['kelompok'] == 'C') {?>   
            <?php  $no++;?>      
            <tr style="border: 1px solid black;">               
                <td style="border: 1px solid black; text-align: center;"><?= $no; ?></td>
                <td style="border: 1px solid black;"><?= $m['nama_mapel'] ?></td>
                <td style="border: 1px solid black; text-align: center;">
                <?php foreach ($nilai as $n) : ?> 
                    <?php if($n['nis'] == $lulus['nis']) {?> 
                    <?php  if($n['kode_mapel'] == $m['kode_mapel']) { ?>     
                        <?= $n['nilai'] ?>
                    <?php } ?>
                    <?php } ?> 
                <?php endforeach; ?>
                </td>               
            </tr>             
            <?php } ?> 
            <?php } ?>                             
            <?php endforeach; ?>
            <?php } ?>                             
            <?php endforeach; ?>   
            <tr style="border: 1px solid black;">
                <td colspan="2" style="text-align: center;">Rata-Rata</td>
                <td colspan="2" style="border: 1px solid black; text-align: center;">
                    <?php foreach ($avg as $vg) : ?> 
                        <?php if($vg['nis'] == $lulus['nis']) {?>
                            <?= round($vg['total'],0,PHP_ROUND_HALF_UP); ?>                       
                        <?php } ?> 
                    <?php endforeach; ?>
                </td>
            </tr>  
        </table>
    <br>    
    <br>
    <table width="100%">
            <tr>
                <td style="text-align: center;width:180px">
                </td>
                <td style="text-align: center;width:180px">                  
                </td>
                <td style="text-align: center">
                    <?=$publish['kota']?>, <?php echo format_indo_a(date(substr($publish['tanggal_publis'], 0, 10))); ?><br>
                    KEPALA SEKOLAH
                    <br>
                    <img src="<?= base_url(); ?>panel/dist/upload/logo/<?= $publish['ttd_kepsek'] ?>" alt="..." style="width:100%;max-width:210px">
                    <br>
                    <u><b><?= $sekolah['sebutan_kepala'] ?></b></u><br>
                    PEMBINA <br>
                    NIP. <?= $sekolah['nip'] ?>                    
                </td>
            </tr>
        </table>
</body>
</html>