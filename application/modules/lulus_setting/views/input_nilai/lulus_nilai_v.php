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
                <?php if($t['rombel'] == ucwords($this->uri->segment(4, 0)))  {?>
                    <div class="col-lg-12 mt-1 mt-lg-1 mb-2">
                        <div class="card card-primary card-outline">
                            <div class="card-header">
                                <h1 class="text-center">
                                    <?= $t['rombel'] ?>  |                                    
                                    <a class="btn btn-outline-primary" href="<?= base_url() . $this->uri->segment(1, 0) . $this->uri->slash_segment(2, 'both') ?>"><i class="fa fa-arrow-circle-left"></i> Kembali</a> 
                                 </h1>                                                                                      
                            </div>                  
                            
                            <div class="container" data-aos="fade-up">
                                <div class="table-responsive">
                                    <table class="table table-bordered border-primary">
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
                                                        <th ><?= $m['kode_mapel'] ?></th>
                                                    <?php } ?>                             
                                                <?php } endforeach; ?>
                                            </tr>                                        
                                        </thead>
                                        <tbody> 
                                        <?php  $no = 0; ?>  
                                            <?php foreach ($siswa as $s) :
                                                if($s['rombel'] == $t['rombel']) { ?> 
                                                <?php $no++; ?>                                                                                       
                                                <tr>               
                                                    <td class="text-center"><?= $no; ?></td>                               
                                                    <td class="text-center"><?= $s['nis'] ?></td>  
                                                    <td class="text-center"><?= $s['nama_siswa'] ?></td>                                        
                                                    
                                                        <?php foreach ($nilai as $n) :{?> 
                                                            <?php if($n['rombel'] == $t['rombel']) 
                                                                if($n['nis'] == $s['nis']) {?>
                                                                <?php foreach ($mapel as $m) :{ ?> 
                                                                    <?php if($m['kode_mapel'] == $n['kode_mapel'])  {?> 
                                                                        <td>
                                                                            <div class="col-md-8 form-group">
                                                                                <input type="number" name="nilai[]" value="<?= $n['nilai'] ?>" class="form-control" id="nilai">
                                                                                <input type="hidden" name="nis[]" value="<?= $n['nis'] ?>">
                                                                            </div>   
                                                                        </td>                                                             
                                                                    <?php } ?>                             
                                                                <?php } endforeach; ?>
                                                        <?php } ?>   
                                                    <?php } endforeach; ?> 
                                                   
                                                        
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
