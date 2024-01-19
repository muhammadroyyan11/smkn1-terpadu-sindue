<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title><?= $title ?></title>
    <meta content="<?= $sekolah['nama_sekolah'] ?>" name="description">
    <meta content="<?= $sekolah['nama_sekolah'] ?>" name="keywords">

    <!-- Favicons -->
    <link href="<?= base_url() ?>panel/dist/upload/logo/<?= $sekolah['logo'] ?>" rel="icon">
    <link href="<?= base_url() ?>panel/dist/upload/logo/<?= $sekolah['logo'] ?>" rel="apple-touch-icon">
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="<?= base_url(); ?>website/assets_proses/template_luar/vendor/aos/aos.css" rel="stylesheet">
    <link href="<?= base_url(); ?>website/assets_proses/template_luar/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?= base_url(); ?>website/assets_proses/template_luar/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="<?= base_url(); ?>website/assets_proses/template_luar/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
    <link href="<?= base_url(); ?>website/assets_proses/template_luar/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
    <link href="<?= base_url(); ?>website/assets_proses/template_luar/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

    <!-- Template Main CSS File -->
    <link href="<?= base_url(); ?>website/assets_proses/template_luar/css/style.css" rel="stylesheet">

</head>

 <!-- <body oncontextmenu="return false" onselectstart="return false" ondragstart="return false">  -->

<body>
<!-- ======= Mobile nav toggle button ======= -->
  <!-- <button type="button" class="mobile-nav-toggle d-xl-none"><i class="bi bi-list mobile-nav-toggle"></i></button> -->
  <i class="bi bi-list mobile-nav-toggle d-xl-none"></i>
  <!-- ======= Header ======= -->
  <header id="header" class="d-flex flex-column justify-content-center">

    <nav id="navbar" class="navbar nav-menu">
      <ul>
        <li><a href="<?= base_url('/') ?>" class="nav-link scrollto <?= ('/' == $this->uri->segment(1, 0) ? 'active' : '') ?>"><i class="bx bx-home"></i> <span>Home</span></a></li>
        <li><a href="<?= base_url('ppdb/info') ?>" class="nav-link scrollto <?= ('ppdb/info' == $this->uri->segment(1, 0) . $this->uri->slash_segment(2, 'leading') ? 'active' : '') ?>"><i class="bx bx-volume-low"></i> <span>Informasi</span></a></li>
        <li><a href="<?= base_url('ppdb/ppdb_form') ?>" class="nav-link scrollto <?= ('ppdb/ppdb_form' == $this->uri->segment(1, 0) . $this->uri->slash_segment(2, 'leading') ? 'active' : '') ?>"><i class="bx bx-file-blank"></i> <span>Pendaftaran</span></a></li>
        <li><a href="<?= base_url('ppdb/login') ?>" class="nav-link scrollto <?= ('ppdb/login' == $this->uri->segment(1, 0) . $this->uri->slash_segment(2, 'leading') ? 'active' : '') ?>"><i class="bx bx-user-circle"></i> <span>Login</span></a></li>
      </ul>
    </nav><!-- .nav-menu -->

  </header><!-- End Header -->
   