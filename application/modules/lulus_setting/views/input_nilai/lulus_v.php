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
    <section class="content">
        <!-- Default box -->
        <div class="row mt-1">                         
            <?php foreach ($tampil as $t) :{ ?>                
                <?php if(substr($t['rombel'],0,3) == 'XII')  {?>
                    <div class="col-lg-12 mt-1 mt-lg-1 mb-2">
                        <div class="card card-primary card-outline">
                            <div class="card-header">
                                <h1 class="text-center">
                                    <?= $t['rombel'] ?> | 
                                    <a class="btn btn-outline-primary" href="<?= base_url() ?>lulus_setting/input_nilai/siswa/<?= $t['rombel'] ?>">
                                        <i class="fas fa-user"></i> <?= $t['total'] ?>
                                    </a>  
                                    <a class="btn btn-outline-primary" href="<?= base_url() ?>lulus_setting/input_nilai/mapel/<?= $t['rombel'] ?>">
                                        Mapel 
                                    </a>   
                                    <a class="btn btn-outline-primary" href="<?= base_url() ?>lulus_setting/input_nilai/export_excel/<?= $t['rombel'] ?>">
                                        Export Nilai
                                    </a>  
                                    <a class="btn btn-outline-primary" href="<?= base_url() ?>lulus_setting/input_nilai/create_linai/<?= $t['rombel'] ?>">
                                        Import Nilai
                                    </a>
                                </h1>
                                                                                      
                            </div>                  
                            
                            <div class="container" data-aos="fade-up">
                                <div class="table-responsive">
                                    <table class="table table-striped table-sm">
                                        <thead class="table-light">
                                            <tr>
                                                <th rowspan="2" class="text-center">#</th>
                                                <th rowspan="2" class="text-center">NIS</th>
                                                <th rowspan="2" class="text-center">Nama Siswa</th>  
                                                <th colspan="12" class="text-center">Mapel</th>                                      
                                            </tr>
                                            <tr>                                        
                                                <?php foreach ($mapel as $m) :{ ?> 
                                                    <?php if($m['rombel'] == $t['rombel'])  {?>
                                                        <th class="text-center"><?= $m['kode_mapel'] ?></th>
                                                    <?php } ?>                             
                                                <?php } endforeach; ?>
                                            </tr>
                                        </thead>
                                        <tbody> 
                                        <?php  $no = 0; ?>  
                                            <?php foreach ($siswa as $s) :
                                                if($s['rombel'] == $t['rombel']) {?> 
                                                <?php  $no++;?>                                                                                    
                                                <tr>    
                                                    <td class="text-center"><?= $no; ?></td>                                        
                                                    <td class="text-center"><?= $s['nis'] ?></td>  
                                                    <td class="text-center"><?= $s['nama_siswa'] ?></td>                                                                                                          
                                                    <?php                                                                                                     
                                                        foreach ($nilai as $n) :                                                                                 
                                                            if($n['nis'] == $s['nis']) {?>                                                                                                                                                            
                                                                <td class="text-center"><?= $n['nilai'] ?></td>
                                                            <?php } ?>                             
                                                    <?php endforeach; ?>                                        
                                                </tr>
                                                <?php } ?>                             
                                            <?php endforeach; ?>                                  
                                        </tbody>                                       
                                    </table> 
                                </div>                                           
                            </div>                                    
                        </div>
                    </div>
                    </div>     
                <?php } ?>                             
            <?php } endforeach; ?>                                                    
        </div>
        <!-- /.card -->     
    </section>   
    <!-- /.content -->

</main>

<!-- jQuery -->
<script src="<?= base_url() ?>panel/plugins/jquery/jquery.min.js"></script>
