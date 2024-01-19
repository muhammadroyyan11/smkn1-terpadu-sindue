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
    <section class="section dashboard">
        <div class="row">

            <div class="col-12">
                <!-- Main content -->
                <?= form_error('menu', '<div class="alert alert-danger" role="alert">', '</div>'); ?>
                <?= $this->session->flashdata('message'); ?>

                <div class="card">
                    <div class="card-body">

                        <!-- Accordion without outline borders -->
                        <div class="accordion accordion-flush" id="accordionFlushExample">
                            <!-- data sekolah -->    
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="flush-headingOne">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne">
                                        <?= $subtitle; ?>
                                    </button>
                                </h2>
                                <div id="flush-collapseOne" class="accordion-collapse collapse" aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample">
                                    <div class="accordion-body">
                                    <form action="<?= base_url('web_data_profil/profil_sekolah/data_sekolah'); ?>" method="post" enctype="multipart/form-data">
                                            <!--begin::Table-->
                                            <div class="modal-body">
                                                <div class="row">
                                                    <input type="hidden" class="form-control" name="sekolah_id" value="<?= $sch['sekolah_id'] ?>" readonly>
                                                    <div class="col-md-3">
                                                        <div class="mb-3">
                                                            <input type="text" class="form-control" id="npyp" name="npyp" value="<?= $sch['npyp'] ?>" placeholder="NPYP">
                                                        </div>
                                                    </div>
                                                    <div class="col-md-3">
                                                        <div class="mb-3">
                                                            <input type="text" class="form-control" id="nss" name="nss" value="<?= $sch['nss'] ?>" placeholder="NSS">
                                                        </div>
                                                    </div>
                                                    <div class="col-md-3">
                                                        <div class="mb-3">
                                                            <input type="text" class="form-control" id="nds" name="nds" value="<?= $sch['nds'] ?>" placeholder="NDS">
                                                        </div>
                                                    </div>
                                                    <div class="col-md-3">
                                                        <div class="mb-3">
                                                            <input type="text" class="form-control" id="npsn" name="npsn" value="<?= $sch['npsn'] ?>" placeholder="NPSN">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="mb-3">
                                                    <input type="text" class="form-control" id="nama_sekolah" name="nama_sekolah" value="<?= $sch['nama_sekolah'] ?>" placeholder="Nama Sekolah">
                                                </div>
                                                <div class="mb-3">
                                                    <label for="">Alamat Sekolah</label>
                                                    <textarea class="form-control" id="alamat" name="alamat" placeholder="Alamat" style="height: 100px"><?= $sch['alamat'] ?></textarea>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <div class="mb-3">
                                                            <select name="sekolah_provinsi_id" class="form-control" id="provinsi">
                                                                <option value="<?= $sch['sekolah_provinsi_id'] ?>"> <?= $sch['provinsi'] ?> </option>
                                                                <?php foreach ($provinsi as $prov) {
                                                                    echo '<option value="' . $prov->provinsi_id . '">' . $prov->provinsi . '</option>';
                                                                } ?>
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="mb-3">
                                                            <select name="sekolah_kota_id" class="form-control" id="kabupaten">
                                                                <option value="<?= $sch['sekolah_kota_id'] ?>"> <?= $sch['kota'] ?> </option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <div class="mb-3">
                                                            <select name="sekolah_kecamatan_id" class="form-control" id="kecamatan">
                                                                <option value="<?= $sch['sekolah_kecamatan_id'] ?>"> <?= $sch['kecamatan'] ?> </option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="mb-3">
                                                            <input type="text" class="form-control" id="kodepos" name="kodepos" value="<?= $sch['kodepos'] ?>" placeholder="Kode Pos">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <div class="mb-3">
                                                            <input type="text" class="form-control" id="telp" name="telp" value="<?= $sch['telp'] ?>" placeholder="Telpon">
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="mb-3">
                                                            <input type="text" class="form-control" id="email" name="email" value="<?= $sch['email'] ?>" placeholder="Email">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <div class="mb-3">
                                                            <input type="text" class="form-control" id="web" name="web" value="<?= $sch['web'] ?>" placeholder="Website">
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="mb-3">
                                                            <input type="text" class="form-control" id="sebutan_kepala" name="sebutan_kepala" value="<?= $sch['sebutan_kepala'] ?>" placeholder="Nama Kepala Sekolah">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <div class="mb-3">
                                                            <input type="text" class="form-control" id="nip" name="nip" value="<?= $sch['nip'] ?>" placeholder="NIP">
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="mb-3">
                                                            <select name="sekola_status" class="form-control" id="sekola_status">
                                                                <option value="<?= $sch['sekola_status'] ?>"> <?= $sch['sekola_status'] ?> </option>
                                                                <option value="Negeri"> Negeri </option>
                                                                <option value="Swasta"> Swasta </option>
                                                            </select>                                                           
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <div class="mb-3">
                                                            <input type="text" class="form-control" id="sekolah_waktu" name="sekolah_waktu" value="<?= $sch['sekolah_waktu'] ?>" placeholder="Pagi / 6 Hari">
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="mb-3">
                                                            <input type="text" class="form-control" id="sekolah_jenjang" name="sekolah_jenjang" value="<?= $sch['sekolah_jenjang'] ?>" placeholder="TK/SD/SMP/SMA/SMK">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">                                                    
                                                    <div class="col-md-4">
                                                        <div class="card">
                                                            <div class="card-body">
                                                                <label for="">Logo Sekolah</label>
                                                                <div class="mb-3 text-center">
                                                                    <img src="<?= base_url(); ?>panel/dist/upload/logo/<?= $sch['logo'] ?>" alt="..." style="width:100%;max-width:150px">
                                                                    <input type="hidden" name="old_image" value="<?= $sch['logo'] ?>" />
                                                                </div>
                                                            </div>                                                            
                                                        </div>
                                                    </div>
                                                    <div class="col-md-8">
                                                        <div class="mb-8">
                                                            <input type="file" class="form-control" id="logo" name="logo" placeholder="Logo">
                                                        </div>
                                                    </div>                                                   
                                                </div>
                                            </div>
                                            <!--end::Table-->
                                            <!-- /.card-body -->
                                            <div class="modal-footer">
                                                <button type="submit" class="btn btn-primary">Save</button>
                                            </div>
                                        </form>  
                                    </div>
                                </div>
                            </div>
                            <!-- end data sekolah -->
                            <!-- Banner Top Website -->
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="flush-headingTwo">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseTwo" aria-expanded="false" aria-controls="flush-collapseTwo">
                                        Banner Top Website
                                    </button>
                                </h2>
                                <div id="flush-collapseTwo" class="accordion-collapse collapse" aria-labelledby="flush-headingTwo" data-bs-parent="#accordionFlushExample">
                                    <div class="accordion-body">
                                    <form action="<?= base_url('web_data_profil/profil_sekolah/data_banner_top'); ?>" method="post" enctype="multipart/form-data">
                                            <!--begin::Table-->
                                            <div class="modal-body">                                        
                                                <div class="row">
                                                <input type="hidden" class="form-control" name="sekolah_id" value="<?= $sch['sekolah_id'] ?>">
                                                    <input type="hidden" class="form-control" name="npsn" value="<?= $sch['npsn'] ?>">
                                                    <div class="col-md-1"></div>
                                                    <div class="card">
                                                        <div class="col-md-12">
                                                            <label for="">Banner Top Website</label>
                                                            <div class="mb-3 text-center">
                                                                <img src="<?= base_url(); ?>panel/dist/upload/logo/<?= $sch['banner'] ?>" alt="..." style="width:100%;max-width:750px">
                                                                <input type="hidden" name="old_image" value="<?= $sch['banner'] ?>" />
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-3">
                                                        <div class="mb-3">
                                                            <input type="file" class="form-control" id="banner" name="banner" placeholder="Banner">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!--end::Table-->
                                            <!-- /.card-body -->
                                            <div class="modal-footer">
                                                <button type="submit" class="btn btn-primary">Save</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                            <!-- end Banner Top Website -->
                            <!-- Sejarah -->
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="flush-headingThree">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseThree" aria-expanded="false" aria-controls="flush-collapseThree">
                                        Sejarah
                                    </button>
                                </h2>
                                <div id="flush-collapseThree" class="accordion-collapse collapse" aria-labelledby="flush-headingThree" data-bs-parent="#accordionFlushExample">
                                    <div class="accordion-body">
                                        <form action="<?= base_url('web_data_profil/profil_sekolah/data_sejarah'); ?>" method="post" enctype="multipart/form-data">
                                            <input type="hidden" class="form-control" name="sekolah_id" value="<?= $sch['sekolah_id'] ?>" readonly>
                                            <!--begin::Table-->
                                            <div class="modal-body">
                                                <textarea id="ckeditor1" class="summernote" name="sejarah" placeholder="Sejarah" style="height: 100px"><?= $sch['sejarah'] ?></textarea>
                                            </div>
                                            <!--end::Table-->
                                            <div class="modal-footer">
                                                <button type="submit" class="btn btn-primary">Save</button>
                                            </div>
                                        </form>    
                                    </div>
                                </div>
                            </div>
                             <!-- end Sejarah -->
                             <!-- Visi dan Misi -->
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="flush-headingFour">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseFour" aria-expanded="false" aria-controls="flush-collapseFour">
                                        Visi dan Misi
                                    </button>
                                </h2>
                                <div id="flush-collapseFour" class="accordion-collapse collapse" aria-labelledby="flush-headingFour" data-bs-parent="#accordionFlushExample">
                                    <div class="accordion-body">
                                        <form action="<?= base_url('web_data_profil/profil_sekolah/data_visi_misi'); ?>" method="post" enctype="multipart/form-data">
                                            <input type="hidden" class="form-control" name="sekolah_id" value="<?= $sch['sekolah_id'] ?>" readonly>
                                            <!--begin::Table-->
                                            <div class="modal-body">
                                                <textarea id="ckeditor2" class="summernote" name="visi_misi" placeholder="Visi - Misi" style="height: 100px"><?= $sch['visi_misi'] ?></textarea>
                                            </div>
                                            <!--end::Table-->
                                            <div class="modal-footer">
                                                <button type="submit" class="btn btn-primary">Save</button>
                                            </div>
                                        </form>     
                                    </div>
                                </div>
                            </div>
                            <!-- end Visi dan Misi -->
                            <!-- Mars Sekolah -->
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="flush-headingFive">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseFive" aria-expanded="false" aria-controls="flush-collapseFive">
                                        Mars Sekolah
                                    </button>
                                </h2>
                                <div id="flush-collapseFive" class="accordion-collapse collapse" aria-labelledby="flush-headingFive" data-bs-parent="#accordionFlushExample">
                                    <div class="accordion-body">
                                        <form action="<?= base_url('web_data_profil/profil_sekolah/data_mars'); ?>" method="post" enctype="multipart/form-data">
                                            <input type="hidden" class="form-control" name="sekolah_id" value="<?= $sch['sekolah_id'] ?>" readonly>
                                            <!--begin::Table-->
                                            <div class="modal-body">
                                                <textarea id="ckeditor3" class="summernote" name="mars" placeholder="Mars" style="height: 100px"><?= $sch['mars'] ?></textarea>
                                            </div>
                                            <!--end::Table-->
                                            <div class="modal-footer">
                                                <!-- <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button> -->
                                                <button type="submit" class="btn btn-primary">Save</button>
                                            </div>
                                        </form>    
                                    </div>
                                </div>
                            </div>
                            <!-- end Mars Sekolah -->
                            <!-- Kurikulum Sekolah -->
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="flush-headingSix">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseSix" aria-expanded="false" aria-controls="flush-collapseSix">
                                        Kurikulum Sekolah
                                    </button>
                                </h2>
                                <div id="flush-collapseSix" class="accordion-collapse collapse" aria-labelledby="flush-headingSix" data-bs-parent="#accordionFlushExample">
                                    <div class="accordion-body">
                                        <form action="<?= base_url('web_data_profil/profil_sekolah/data_kurikulum'); ?>" method="post" enctype="multipart/form-data">
                                            <input type="hidden" class="form-control" name="sekolah_id" value="<?= $sch['sekolah_id'] ?>" readonly>
                                            <!--begin::Table-->
                                            <div class="modal-body">
                                                <textarea id="ckeditor4" class="summernote" name="kurikulum" placeholder="Kurikulum" style="height: 100px"><?= $sch['kurikulum'] ?></textarea>
                                            </div>
                                            <!--end::Table-->
                                            <div class="modal-footer">
                                                <!-- <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button> -->
                                                <button type="submit" class="btn btn-primary">Save</button>
                                            </div>
                                        </form>                                         
                                    </div>
                                </div>
                            </div>
                            <!-- end Kurikulum Sekolah -->
                            <!-- Akreditasi Sekolah -->
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="flush-headingSeven">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseSeven" aria-expanded="false" aria-controls="flush-collapseSeven">
                                        Akreditasi Sekolah
                                    </button>
                                </h2>
                                <div id="flush-collapseSeven" class="accordion-collapse collapse" aria-labelledby="flush-headingSeven" data-bs-parent="#accordionFlushExample">
                                    <div class="accordion-body">
                                        <form action="<?= base_url('web_data_profil/profil_sekolah/data_akreditasi'); ?>" method="post" enctype="multipart/form-data">
                                            <!--begin::Table-->
                                            <div class="modal-body">
                                                <div class="row">
                                                    <input type="hidden" class="form-control" name="sekolah_id" value="<?= $sch['sekolah_id'] ?>">
                                                    <input type="hidden" class="form-control" name="npsn" value="<?= $sch['npsn'] ?>">
                                                    <div class="col-md-1"></div>
                                                    <div class="card">
                                                        <div class="col-md-12">
                                                            <label for="">Akreditasi Sekolah</label>
                                                            <div class="mb-3 text-center">
                                                                <img src="<?= base_url(); ?>panel/dist/upload/logo/<?= $sch['akreditasi'] ?>" alt="..." style="width:100%;max-width:300px">
                                                                <input type="hidden" name="old_image" value="<?= $sch['akreditasi'] ?>" />
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-3">
                                                        <div class="mb-3">
                                                            <input type="file" class="form-control" id="akreditasi" name="akreditasi" placeholder="Akreditasi">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!--end::Table-->
                                            <!-- /.card-body -->
                                            <div class="modal-footer">
                                                <button type="submit" class="btn btn-primary">Save</button>
                                            </div>
                                        </form>                                         
                                    </div>
                                </div>
                            </div>
                            <!-- end Akreditasi Sekolah -->
                            <!-- Maps-kecil Sekolah -->
                             <div class="accordion-item">
                                <h2 class="accordion-header" id="flush-headingEight">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseEight" aria-expanded="false" aria-controls="flush-collapseEight">
                                        Maps footer copy kode berikut (style="height:100%; width:100%;  margin:0; border:0;")
                                    </button>
                                </h2>
                                <div id="flush-collapseEight" class="accordion-collapse collapse" aria-labelledby="flush-headingEight" data-bs-parent="#accordionFlushExample">
                                    <div class="accordion-body">
                                        <form action="<?= base_url('web_data_profil/profil_sekolah/data_maps_kecil'); ?>" method="post" enctype="multipart/form-data">
                                            <input type="hidden" class="form-control" name="sekolah_id" value="<?= $sch['sekolah_id'] ?>" readonly>
                                            <!--begin::Table-->
                                            <div class="modal-body">
                                                <textarea name="maps_kecil" placeholder="Maps Ukuran Khusus 250 x 250" style="height: 150px ; width: 750px;"><?= $sch['maps_kecil'] ?></textarea>
                                            </div>
                                            <!--end::Table-->
                                            <div class="modal-footer">
                                                <!-- <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button> -->
                                                <button type="submit" class="btn btn-primary">Save</button>
                                            </div>
                                        </form>    
                                    </div>
                                </div>
                            </div>
                            <!-- end Maps-kecil Sekolah -->
                            <!-- Maps-sedang Sekolah -->
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="flush-headingNine">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseNine" aria-expanded="false" aria-controls="flush-collapseNine">
                                        Maps Ukuran Khusus 1500 x 350 untuk contact
                                    </button>
                                </h2>
                                <div id="flush-collapseNine" class="accordion-collapse collapse" aria-labelledby="flush-headingNine" data-bs-parent="#accordionFlushExample">
                                    <div class="accordion-body">
                                        <form action="<?= base_url('web_data_profil/profil_sekolah/data_maps_sedang'); ?>" method="post" enctype="multipart/form-data">
                                            <input type="hidden" class="form-control" name="sekolah_id" value="<?= $sch['sekolah_id'] ?>" readonly>
                                            <!--begin::Table-->
                                            <div class="modal-body">
                                                <textarea name="maps_sedang" placeholder="Maps Ukuran Khusus 1500 x 350" style="height: 150px ; width: 750px;"><?= $sch['maps_sedang'] ?></textarea>
                                            </div>
                                            <!--end::Table-->
                                            <div class="modal-footer">
                                                <!-- <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button> -->
                                                <button type="submit" class="btn btn-primary">Save</button>
                                            </div>
                                        </form>    
                                    </div>
                                </div>
                            </div>
                            <!-- end Maps-sedang Sekolah -->
                        </div>
                        <!-- End Accordion without outline borders -->                    
                    </div>
                </div>
            </div>

        </div>
    </section>

</main>

<!-- jQuery -->
<script src="<?= base_url() ?>panel/plugins/jquery/jquery.min.js"></script>
<script>
    $(function() {
        $('#editModal').on('show.bs.modal', function(e) {
            let btn = $(e.relatedTarget);
            let id = btn.data('id');
            let nss = btn.data('nss');
            let npsn = btn.data('npsn');
            let nama_sekolah = btn.data('nama_sekolah');
            let alamat = btn.data('alamat');
            let prov = btn.data('prov');
            let kota = btn.data('kota');
            let kec = btn.data('kec');
            let desa = btn.data('desa');
            let telp = btn.data('telp');
            let kodepos = btn.data('kodepos');
            let email = btn.data('email');
            let web = btn.data('web');
            let sebutan_kepala = btn.data('sebutan_kepala');
            let kop_1 = btn.data('kop_1');
            let kop_2 = btn.data('kop_2');
            let instagram_src = btn.data('instagram_src');
            let instagram_usrc = btn.data('instagram_usrc');
            let is_active = btn.data('is_active');
            let is_active_psb = btn.data('is_active_psb');
            $("#ed_id").val(id);
            $("#ed_nss").val(nss);
            $("#ed_npsn").val(npsn);
            $("#ed_nama_sekolah").val(nama_sekolah);
            $('#ed_alamat').val(alamat);
            $('#ed_prov').val(prov);
            $('#ed_kota').val(kota);
            $('#ed_kec').val(kec);
            $('#ed_desa').val(desa);
            $('#ed_telp').val(telp);
            $('#ed_kodepos').val(kodepos);
            $('#ed_email').val(email);
            $('#ed_web').val(web);
            $('#ed_sebutan_kepala').val(sebutan_kepala);
            $('#ed_kop_1').val(kop_1);
            $('#ed_kop_2').val(kop_2);
            $('#ed_instagram_src').val(instagram_src);
            $('#ed_instagram_usrc').val(instagram_usrc);
            $('#ed_is_active').val(is_active);
            $('#ed_is_active_psb').val(is_active_psb);
        });
    });
</script>
<script>
    $(document).ready(function() {
        $("#provinsi").change(function() {
            var url = "<?php echo site_url('web_data_profil/profil_sekolah/add_ajax_kab'); ?>/" + $(this).val();
            $('#kabupaten').load(url);
            return false;
        })

        $("#kabupaten").change(function() {
            var url = "<?php echo site_url('web_data_profil/profil_sekolah/add_ajax_kec'); ?>/" + $(this).val();
            $('#kecamatan').load(url);
            return false;
        })
    });
</script>

<script src="<?= base_url() ?>panel/plugins/ckeditor/ckeditor.js"></script>
<script>
    CKEDITOR.replace('ckeditor1');
    CKEDITOR.replace('ckeditor2');
    CKEDITOR.replace('ckeditor3');
    CKEDITOR.replace('ckeditor4');
</script>