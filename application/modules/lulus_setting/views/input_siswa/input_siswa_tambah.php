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
        <div class="row"> 
            <div class="col-md-12">
                <div class="card card-primary card-outline">
                    
                    <!-- Default box -->
                    <div class="card-body p-0" style="display: block;">
                        <div class="tampil-modal"></div>
                        <?= form_error('email', '<div class="alert alert-danger" role="alert">', '</div>'); ?>
                        <div class="flash-data" data-flashdata=""><?= $this->session->flashdata('message'); ?></div>
                        <div class="card-header">
                            <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                                <?php if ($cek_akses['role_id'] == 1) : ?>                                
                                    <a href="<?= base_url() . $this->uri->segment(1, 0) . $this->uri->slash_segment(2, 'both') ?>" class="btn btn-info mb-3 btn-action"><i class="fa fa-arrow-circle-left"></i> Kembali</a>
                                <?php endif ?>
                            </div>  
                        </div>               

                        <div class="card-body">
                            <div class="row mt-1">
                                <?php $i = 1; ?>
                                <?php foreach ($tampil as $t) : ?>     
                                    <?php if(substr($t['rombel'],0,3) == 'XII')  {?>                       
                                    <div class="col-lg-4 mt-3 mt-lg-3 mb-3">
                                        <div class="card card-primary card-outline">
                                            <div class="card-header">
                                                <h1 class="text-center"><?= $t['rombel'] ?></h1>                                                                
                                            </div>                  
                                            <div class="container" data-aos="fade-up">  
                                                <div class="row">
                                                    <div class="col-lg-4 mt-1 mt-lg-1 mb-1">
                                                        <a class="btn btn-outline-primary" href="<?= base_url() . $this->uri->segment(1, 0) . $this->uri->slash_segment(2, 'both') ?>rombel/<?= $t['rombel'] ?>">
                                                            <i class="fas fa-folder"></i>
                                                        </a>  
                                                    </div>
                                                    <div class="col-lg-8 mt-1 mt-lg-1 mb-1">
                                                        <h1 class="card-title">Total Siswa <?= $t['total'] ?></h1>
                                                    </div>
                                                </div>                                     
                                            </div>
                                        </div>
                                    </div>                                                                                                                      
                                <?php $i++; ?>
                                <?php } endforeach; ?>                                                    
                            </div>
                        </div>
                        <!-- /.card-body -->

                    </div>
                    <!-- /.card -->
                </div>
            </div>
        </div>            
    </section>   
    <!-- /.content -->

</main>