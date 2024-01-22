<!DOCTYPE html>
<html lang="en">

<head>
<meta content="utf-8" http-equiv="encoding">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name='viewport' content='width=device-width, initial-scale=1' />
<meta name='google' content='notranslate' />
<link rel="alternate" type="application/rss+xml" title="<?= $title ?>" href="<?= base_url()?>"/>
<title><?= $title ?></title>
<meta name='description' content="<?= $title ?>" />
<meta itemprop="name" content="<?= $title ?>"/>
<meta property="og:title" content="<?= $title ?>"/>
<meta property="og:image" content="<?= base_url() ?>panel/dist/upload/logo/<?= $sekolah['logo'] ?>"/>
<meta itemprop="image" content="<?= base_url() ?>panel/dist/upload/logo/<?= $sekolah['logo'] ?>"/>
<meta property='og:description' content="<?= $title ?>" />
<meta property='og:url' content="<?= base_url()?>" />
<link rel="shortcut icon" href="<?= base_url() ?>panel/dist/upload/logo/<?= $sekolah['logo'] ?>"/>
<link rel="stylesheet" href="<?= base_url()?>website/assets/css/animated.css">
<link rel="stylesheet" href="<?= base_url()?>website/assets/css/custom.css">
<link rel="stylesheet" href="<?= base_url()?>website/assets/css/bootstrap.css">
<link rel="stylesheet" href="<?= base_url()?>website/assets/css/font-awesome.min.css">
<link rel="stylesheet" href="<?= base_url()?>website/assets/css/fancy.css">
<link rel="stylesheet" href="<?= base_url()?>website/assets/css/leaflet.css"/>
<link rel="stylesheet" href="<?= base_url()?>website/assets/css/mapbox-gl.css"/>
<link rel="stylesheet" href="<?= base_url()?>website/assets/css/peta.css">
<link rel="stylesheet" href="<?= base_url()?>website/assets/css/setting.css">
<link rel="stylesheet" href="<?= base_url()?>website/assets/css/style.css">
<link rel="stylesheet" href="<?= base_url()?>website/assets/css/darkmode.css">
<link rel="stylesheet" href="<?= base_url()?>website/assets/css/color/nature.css">
<link rel="stylesheet" href="<?= base_url()?>website/assets/css/screen.css">

<link href="<?= base_url()?>website/assets/css/color/nature.css" rel="stylesheet alternate" title="nature"/>
<link href="<?= base_url()?>website/assets/css/color/travel.css" rel="stylesheet alternate" title="travel"/>
<link href="<?= base_url()?>website/assets/css/color/sunset.css" rel="stylesheet alternate" title="sunset"/>
<link href="<?= base_url()?>website/assets/css/color/ocean.css" rel="stylesheet alternate" title="ocean"/>
<link href="<?= base_url()?>website/assets/css/color/thered.css" rel="stylesheet alternate" title="thered"/>
<link href="<?= base_url()?>website/assets/css/color/vintage.css" rel="stylesheet alternate" title="vintage"/>
<link href="<?= base_url()?>website/assets/css/color/gogreen.css" rel="stylesheet alternate" title="gogreen"/>
<link href="<?= base_url()?>website/assets/css/color/sporty.css" rel="stylesheet alternate" title="sporty"/>
<link href="<?= base_url()?>website/assets/css/color/village.css" rel="stylesheet alternate" title="village"/>
<link href="<?= base_url()?>website/assets/css/color/forest.css" rel="stylesheet alternate" title="forest"/>
<link href="<?= base_url()?>website/assets/css/color/casual.css" rel="stylesheet alternate" title="casual"/>
<link href="<?= base_url()?>website/assets/css/color/dark.css" rel="stylesheet alternate" title="dark"/>
<link rel="stylesheet" type="text/css" href="<?= base_url()?>website/assets/bootstrap/css/dataTables.bootstrap.min.css">

<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ if (window.scrollY == 0) window.scrollTo(0,1); } </script>
<script type="text/javascript" src="<?= base_url()?>website/assets/js/support.js"></script>
<script language='javascript' src="<?= base_url()?>website/assets/front/js/jquery.cycle2.min.js"></script>
<script language='javascript' src="<?= base_url()?>website/assets/front/js/jquery.cycle2.carousel.js"></script>
<script language='javascript' src="<?= base_url()?>website/assets/front/js/jquery.min.js"></script>

<script src="<?= base_url()?>website/assets/js/jquery-2.js"></script>
<script src="<?= base_url()?>website/assets/js/customize.js"></script>
<script src="<?= base_url()?>website/assets/js/bootstrap.min.js"></script>
<script src="<?= base_url()?>website/assets/bootstrap/js/jquery.dataTables.min.js"></script>
<script src="<?= base_url()?>website/assets/bootstrap/js/dataTables.bootstrap.min.js"></script>
<script src="<?= base_url()?>website/assets/js/sticky.js"></script>
<script src="<?= base_url()?>website/assets/js/script.js"></script>
<script src="<?= base_url()?>website/assets/js/leaflet.js"></script>
<script src="<?= base_url()?>website/assets/front/js/layout.js"></script>
<script src="<?= base_url()?>website/assets/front/js/jquery.colorbox.js"></script>
<script src="<?= base_url()?>website/assets/js/leaflet-providers.js"></script>
<script src="<?= base_url()?>website/assets/js/highcharts/highcharts.js"></script>
<script src="<?= base_url()?>website/assets/js/highcharts/highcharts-3d.js"></script>
<script src="<?= base_url()?>website/assets/js/highcharts/exporting.js"></script>
<script src="<?= base_url()?>website/assets/js/highcharts/highcharts-more.js"></script>
<script src="<?= base_url()?>website/assets/js/highcharts/sankey.js"></script>
<script src="<?= base_url()?>website/assets/js/highcharts/organization.js"></script>
<script src="<?= base_url()?>website/assets/js/highcharts/accessibility.js"></script>
<script src="<?= base_url()?>website/assets/js/mapbox-gl.js"></script>
<script src="<?= base_url()?>website/assets/js/leaflet-mapbox-gl.js"></script>
<script src="<?= base_url()?>website/assets/js/peta.js"></script>
<script src="<?= base_url()?>website/assets/js/fancybox.js"></script>
<div id="fb-root"></div>
<script>
	function animation(span) {
		span.className = "turn";
		setTimeout(function () {
		span.className = ""
		}, 700);
	}
	function thistime() {
	setInterval(function () {
		var waktu = new Date();
		var thistime   = document.getElementById('waktu');
		var hours = waktu.getHours();
		var minutes = waktu.getMinutes();
		var seconds = waktu.getSeconds();
		if (waktu.getHours() < 10) {
			hours = '0' + waktu.getHours();
		}
		if (waktu.getMinutes() < 10) {
			minutes = '0' + waktu.getMinutes();
		}
		if (waktu.getSeconds() < 10) {
			seconds = '0' + waktu.getSeconds();
		}
		thistime.innerHTML  = '<span class="jammenit">' + hours + ':</span>' 
                     + '<span class="jammenit">' + minutes + ':</span>'
                     + '<span class="jammenit">' + seconds +'</span>';

		var spans      = thistime.getElementsByTagName('span');
		animation(spans[2]);
		if (seconds == 0) animation(spans[1]);
		if (minutes == 0 && seconds == 0) animation(spans[0]);
	}, 1000);
	}
thistime();
</script>
<script>
	function openOthermenu() {
	  document.getElementById("othermenu").style.height = "100%";
	}
	function closeOthermenu() {
	  document.getElementById("othermenu").style.height = "0";
	}  
</script>
<script type="text/javascript">
	$(window).load(function() { $("#masihloading").delay(100).fadeOut("slow"); } )
</script>						
</head>
<body>
	
	<div class="forscroll">
		<div class="full-wrapper clearfix">
			<div class="asimse">					
				<!-- logo sekolah atas  -->
				<div class="headtop bggrey3 trans-h">
					<div class="headtopleft difle-l trans-h">
						<div class="headtopleft-bg"></div>
						<div class="headtitle-small difle-l trans-h">
							<a href="<?= base_url()?>"><img class="trans-h" src="<?= base_url() ?>panel/dist/upload/logo/<?= $sekolah['logo'] ?>"/></a>
						<div>			
						<h2><?= $sekolah['nama_sekolah'] ?></h2>
					</div>
				</div>
			</div>

			<div class="headtopright bggrey3 trans-h">
				<div class="headtopright-first difle-l">
					<div class="trans-w desk-v" id="tanggal"><?php echo format_indo(date('Y-m-d')); ?></div>, <div class="trans-w desk-v" id="waktu"></div>				
						<div class="headtopright-icon difle-l">						
							<div class="tooltipbot desk-v">
								<div class="headicon tooltip2 difle-c" data-toggle="modal" data-target="#visitor">
								<img src="<?= base_url()?>website/assets/css/chart.svg"/>
								<span class="tooltip2text difle-c">Pengunjung</span>
								</div>
							</div>
							<a class="difle-l tooltipbot desk-v" href="<?= base_url()?>login">
								<div class="headicon tooltip2 difle-c">
								<img src="<?= base_url()?>website/assets/css/gembok.svg"/>
								<span class="tooltip2text difle-c">Login Admin</span>
								</div>
							</a>
							<div class="menucanvas difle-c trans-w" data-toggle="modal" data-target="#menu">
								<svg viewBox="0 0 24 24"><path d="M3,11H11V3H3M3,21H11V13H3M13,21H21V13H13M13,3V11H21V3" /></svg>
							</div>				
						</div>
					</div>
					<div class="topmenu trans-h desk-v">		
						<div class="nav-wrapper large-nav">
							<ul class="clearlist local-scroll" style="margin:0;padding:0;">
								<a href="<?= base_url()?>">
									<div class="tohome difle-c trans-h">
										<svg viewBox="0 0 20 19" class="trans-h"><path d="M8,17 L8,11 L12,11 L12,17 L17,17 L17,9 L20,9 L10,0 L0,9 L3,9 L3,17 L8,17 Z"/></svg>
									</div>
								</a>
								<div class="carousel js-flickity" data-flickity='{ "autoPlay": false, "groupCells": true, "groupCells": 1, "contain": true, "cellAlign": "left"}'>
									<div class="carousel-item fadeIn3">
										<li>
											<a style="white-space: nowrap;" class="menu-down" href="<?= $this->uri->segment(1) == 'web_profil' ? 'class="active"' : '' ?>">Profil<span class='caret'></span></a>
											<ul class="nav-sub bg-navsub">
												<div class="nav-sub-inner">
													<li><a href="<?= base_url('web_profil/sambutan') ?>" class="<?= ('web_profil/sambutan' == $this->uri->segment(1, 0) . $this->uri->slash_segment(2, 'leading') ? 'active' : '') ?>">KATA SAMBUTAN</a></li>
													<li><a href="<?= base_url('web_profil/sejarah') ?>" class="<?= ('web_profil/sejarah' == $this->uri->segment(1, 0) . $this->uri->slash_segment(2, 'leading') ? 'active' : '') ?>">SEJARAH</a></li>
													<li><a href="<?= base_url('web_profil/visi_misi') ?>" class="<?= ('web_profil/visi_misi' == $this->uri->segment(1, 0) . $this->uri->slash_segment(2, 'leading') ? 'active' : '') ?>">VISI & MISI</a></li>
													<li><a href="<?= base_url('web_profil/mars') ?>" class="<?= ('web_profil/mars' == $this->uri->segment(1, 0) . $this->uri->slash_segment(2, 'leading') ? 'active' : '') ?>">MARS</a></li>
													<li><a href="<?= base_url('web_profil/data_sekolah') ?>" class="<?= ('web_profil/data_sekolah' == $this->uri->segment(1, 0) . $this->uri->slash_segment(2, 'leading') ? 'active' : '') ?>">DATA SEKOLAH</a></li>
													<li><a href="<?= base_url('web_profil/kurikulum') ?>" class="<?= ('web_profil/kurikulum' == $this->uri->segment(1, 0) . $this->uri->slash_segment(2, 'leading') ? 'active' : '') ?>">KURIKULUM</a></li>
													<li><a href="<?= base_url('web_profil/akreditasi') ?>" class="<?= ('web_profil/akreditasi' == $this->uri->segment(1, 0) . $this->uri->slash_segment(2, 'leading') ? 'active' : '') ?>">AKREDITASI</a></li>
													<li><a href="<?= base_url('web_profil/pendidik') ?>" class="<?= ('web_profil/pendidik' == $this->uri->segment(1, 0) . $this->uri->slash_segment(2, 'leading') ? 'active' : '') ?>">PENDIDIK</a></li>
													<li><a href="<?= base_url('web_profil/fasilitas') ?>" class="<?= ('web_profil/fasilitas' == $this->uri->segment(1, 0) . $this->uri->slash_segment(2, 'leading') ? 'active' : '') ?>">FASILITAS</a></li>
												</div>
											</ul>
										</li>
									</div>
									<div class="carousel-item fadeIn3">
										<li><a style="white-space: nowrap;" class="menu-down" href="#">Kesiswaan<span class='caret'></span></a>
											<ul class="nav-sub bg-navsub">
												<div class="nav-sub-inner">
													<li><a href="<?= base_url('web_kesiswaan/osis') ?>" class="<?= ('web_kesiswaan/osis' == $this->uri->segment(1, 0) . $this->uri->slash_segment(2, 'leading') ? 'active' : '') ?>">OSIS</a></li>                      
													<li><a href="<?= base_url('web_kesiswaan/ekstra') ?>" class="<?= ('web_kesiswaan/ekstra' == $this->uri->segment(1, 0) . $this->uri->slash_segment(2, 'leading') ? 'active' : '') ?>">EKSTRAKURIKULER</a></li>
													<li><a href="<?= base_url('web_kesiswaan/prestasi') ?>" class="<?= ('web_kesiswaan/prestasi' == $this->uri->segment(1, 0) . $this->uri->slash_segment(2, 'leading') ? 'active' : '') ?>"">PRESTASI SISWA</a></li>
												</div>
											</ul>
										</li>
									</div>
									
									<div class="carousel-item fadeIn3">
										<li><a style="white-space: nowrap;" class="menu-down" href="#">Informasi<span class='caret'></span></a>
											<ul class="nav-sub bg-navsub">
												<div class="nav-sub-inner">
													<li><a href="<?= base_url('ppdb/home') ?>" target="_blank">PPDB</a></li>
													<li><a href="<?= base_url('lulus/home') ?>" target="_blank">KELULUSAN/ALUMNI</a></li>                           
													<li><a href="<?= base_url('web_informasi/vaksin') ?>" class="<?= ('web_informasi/vaksin' == $this->uri->segment(1, 0) . $this->uri->slash_segment(2, 'leading') ? 'active' : '') ?>">VAKSIN</a></li>                            
													<li><a href="<?= base_url('web_informasi/beasiswa') ?>" class="<?= ('web_informasi/beasiswa' == $this->uri->segment(1, 0) . $this->uri->slash_segment(2, 'leading') ? 'active' : '') ?>">BEASISWA</a></li>
													<li><a href="<?= base_url('web_informasi/webinar') ?>" class="<?= ('web_informasi/webinar' == $this->uri->segment(1, 0) . $this->uri->slash_segment(2, 'leading') ? 'active' : '') ?>">WEBINAR</a></li>
													<li><a href="<?= base_url('web_informasi/lsp') ?>" class="<?= ('web_informasi/lsp' == $this->uri->segment(1, 0) . $this->uri->slash_segment(2, 'leading') ? 'active' : '') ?>">LSP</a></li>
												</div>
											</ul>
										</li>
									</div>
									<div class="carousel-item fadeIn3">
										<li><a style="white-space: nowrap;" href="<?= base_url('web_jurusan') ?>">Jurusan</a></li>
									</div>
									<div class="carousel-item fadeIn3">
										<li><a style="white-space: nowrap;" href="<?= base_url('web_p5') ?>">P5 SMK</a></li>
									</div>
									<div class="carousel-item fadeIn3">
										<li><a style="white-space: nowrap;" href="<?= base_url('web_kegiatan/belajar') ?>">Portal</a></li>
									</div>
									<div class="carousel-item fadeIn3">
										<li><a style="white-space: nowrap;" href="<?= base_url('web_berita') ?>">Berita</a></li>
									</div>
									<div class="carousel-item fadeIn3">
										<li><a style="white-space: nowrap;" class="menu-down" href="#">Galery<span class='caret'></span></a>
											<ul class="nav-sub bg-navsub">
												<div class="nav-sub-inner">
													<li><a href="<?= base_url('web_galery/galery') ?>" class="<?= ('web_galery/galery' == $this->uri->segment(1, 0) . $this->uri->slash_segment(2, 'leading') ? 'active' : '') ?>">PHOTO</a></li>
                           							<li><a href="<?= base_url('web_galery/video') ?>" class="<?= ('web_galery/video' == $this->uri->segment(1, 0) . $this->uri->slash_segment(2, 'leading') ? 'active' : '') ?>">VIDEO</a></li>
												</div>
											</ul>
										</li>
									</div>	
									<div class="carousel-item fadeIn3">
										<li><a style="white-space: nowrap;" class="menu-down" href="#">Download<span class='caret'></span></a>
											<ul class="nav-sub bg-navsub">
												<div class="nav-sub-inner">
													<li><a href="<?= base_url('web_download/sekolah') ?>" class="<?= ('web_download/sekolah' == $this->uri->segment(1, 0) . $this->uri->slash_segment(2, 'leading') ? 'active' : '') ?>">DATA SEKOLAH</a></li>                      
													<li><a href="<?= base_url('web_download/siswa') ?>" class="<?= ('web_download/siswa' == $this->uri->segment(1, 0) . $this->uri->slash_segment(2, 'leading') ? 'active' : '') ?>">DATA SISWA</a></li>
													<li><a href="<?= base_url('web_download/administrasi') ?>" class="<?= ('web_download/administrasi' == $this->uri->segment(1, 0) . $this->uri->slash_segment(2, 'leading') ? 'active' : '') ?>"">DATA ADMINSITRASI</a></li>
												</div>
											</ul>
										</li>
									</div>								
									<div class="carousel-item fadeIn3">
										<li><a style="white-space: nowrap;" href="<?= base_url('web_kegiatan/contact') ?>">Contact</a></li>
									</div>											
								</div>									
							</ul>
						</div>
					</div>
				</div>
			</div>

			<div class="loadpage">
				<div class="loading-asimse difle-c">
					<div>
						<div class="loadtop relative full-width">		
						<div class="circleload"></div>
							<div class="loading-logo difle-c">
								<img src="<?= base_url() ?>panel/dist/upload/logo/<?= $sekolah['logo'] ?>"/>
							</div>
						</div>		
						<h1 class="cwhite"><?= $sekolah['nama_sekolah'] ?></h1>											
						<p class="cwhite">Kecamatan <?= $sekolah['kecamatan'] ?>, Kabupaten <?= $sekolah['kota'] ?><br/>Provinsi <?= $sekolah['provinsi'] ?></p>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="canvasmob">
	<div class="modal right fade" id="menu" role="dialog" aria-labelledby="menu" aria-hidden="true" style="background:var(--bgdark) !important">
		<div class="modal-dialog" role="document">		
		<div class="menumob bggrey3">	
			<div class="modalhead difle-l">
				<img class="trans-h" src="<?= base_url() ?>panel/dist/upload/logo/<?= $sekolah['logo'] ?>"/>
				<h2><?= $sekolah['nama_sekolah'] ?></h2>
			</div>
			<div class="inner-modal absfull">
				<div class="colscroll">
					<div class="colscroll-padding">				
						<div class="mobile-menu">
						<nav class="navbar">
							<ul>		
								<li><a href="<?= base_url()?>">Home</a></li>									
								<li class="dropdown">
									<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="true">Profil<span class='caret2'></span></a>
									<ul class="dropdown-menu" style="margin-top:10px;padding:15px 20px 8px;">
										<li><a href="<?= base_url('web_profil/sambutan') ?>" class="<?= ('web_profil/sambutan' == $this->uri->segment(1, 0) . $this->uri->slash_segment(2, 'leading') ? 'active' : '') ?>">KATA SAMBUTAN</a></li>
										<li><a href="<?= base_url('web_profil/sejarah') ?>" class="<?= ('web_profil/sejarah' == $this->uri->segment(1, 0) . $this->uri->slash_segment(2, 'leading') ? 'active' : '') ?>">SEJARAH</a></li>
										<li><a href="<?= base_url('web_profil/visi_misi') ?>" class="<?= ('web_profil/visi_misi' == $this->uri->segment(1, 0) . $this->uri->slash_segment(2, 'leading') ? 'active' : '') ?>">VISI & MISI</a></li>
										<li><a href="<?= base_url('web_profil/mars') ?>" class="<?= ('web_profil/mars' == $this->uri->segment(1, 0) . $this->uri->slash_segment(2, 'leading') ? 'active' : '') ?>">MARS</a></li>
										<li><a href="<?= base_url('web_profil/data_sekolah') ?>" class="<?= ('web_profil/data_sekolah' == $this->uri->segment(1, 0) . $this->uri->slash_segment(2, 'leading') ? 'active' : '') ?>">DATA SEKOLAH</a></li>
										<li><a href="<?= base_url('web_profil/kurikulum') ?>" class="<?= ('web_profil/kurikulum' == $this->uri->segment(1, 0) . $this->uri->slash_segment(2, 'leading') ? 'active' : '') ?>">KURIKULUM</a></li>
										<li><a href="<?= base_url('web_profil/akreditasi') ?>" class="<?= ('web_profil/akreditasi' == $this->uri->segment(1, 0) . $this->uri->slash_segment(2, 'leading') ? 'active' : '') ?>">AKREDITASI</a></li>
										<li><a href="<?= base_url('web_profil/pendidik') ?>" class="<?= ('web_profil/pendidik' == $this->uri->segment(1, 0) . $this->uri->slash_segment(2, 'leading') ? 'active' : '') ?>">PENDIDIK</a></li>
										<li><a href="<?= base_url('web_profil/fasilitas') ?>" class="<?= ('web_profil/fasilitas' == $this->uri->segment(1, 0) . $this->uri->slash_segment(2, 'leading') ? 'active' : '') ?>">FASILITAS</a></li> 
									</ul>
								</li>
								<li class="dropdown">
									<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="true">Kesiswaan<span class='caret2'></span></a>
									<ul class="dropdown-menu" style="margin-top:10px;padding:15px 20px 8px;">
										<li><a href="<?= base_url('web_kesiswaan/osis') ?>" class="<?= ('web_kesiswaan/osis' == $this->uri->segment(1, 0) . $this->uri->slash_segment(2, 'leading') ? 'active' : '') ?>">OSIS</a></li>                      
										<li><a href="<?= base_url('web_kesiswaan/ekstra') ?>" class="<?= ('web_kesiswaan/ekstra' == $this->uri->segment(1, 0) . $this->uri->slash_segment(2, 'leading') ? 'active' : '') ?>">EKSTRAKURIKULER</a></li>
										<li><a href="<?= base_url('web_kesiswaan/prestasi') ?>" class="<?= ('web_kesiswaan/prestasi' == $this->uri->segment(1, 0) . $this->uri->slash_segment(2, 'leading') ? 'active' : '') ?>"">PRESTASI SISWA</a></li>
									</ul>
								</li>
								<li class="dropdown">
									<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="true">Data Download<span class='caret2'></span></a>
									<ul class="dropdown-menu" style="margin-top:10px;padding:15px 20px 8px;">
										<li><a href="<?= base_url('web_download/sekolah') ?>" class="<?= ('web_download/sekolah' == $this->uri->segment(1, 0) . $this->uri->slash_segment(2, 'leading') ? 'active' : '') ?>">Data Sekolah</a></li>                      
										<li><a href="<?= base_url('web_download/siswa') ?>" class="<?= ('web_download/siswa' == $this->uri->segment(1, 0) . $this->uri->slash_segment(2, 'leading') ? 'active' : '') ?>">Data Siswa</a></li>                      
										<li><a href="<?= base_url('web_download/administrasi') ?>" class="<?= ('web_download/administrasi' == $this->uri->segment(1, 0) . $this->uri->slash_segment(2, 'leading') ? 'active' : '') ?>">Data Administrasi</a></li>                      
										
									</ul>
								</li>
								<li class="dropdown">
									<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="true">Informasi<span class='caret2'></span></a>
									<ul class="dropdown-menu" style="margin-top:10px;padding:15px 20px 8px;">
										<li><a href="<?= base_url('ppdb/home') ?>" target="_blank">PPDB</a></li>
										<li><a href="<?= base_url('lulus/home') ?>" target="_blank">KELULUSAN/ALUMNI</a></li>                           
										<li><a href="<?= base_url('web_informasi/vaksin') ?>" class="<?= ('web_informasi/vaksin' == $this->uri->segment(1, 0) . $this->uri->slash_segment(2, 'leading') ? 'active' : '') ?>">VAKSIN</a></li>                            
										<li><a href="<?= base_url('web_informasi/beasiswa') ?>" class="<?= ('web_informasi/beasiswa' == $this->uri->segment(1, 0) . $this->uri->slash_segment(2, 'leading') ? 'active' : '') ?>">BEASISWA</a></li>
										<li><a href="<?= base_url('web_informasi/webinar') ?>" class="<?= ('web_informasi/webinar' == $this->uri->segment(1, 0) . $this->uri->slash_segment(2, 'leading') ? 'active' : '') ?>">WEBINAR</a></li>
										<li><a href="<?= base_url('web_informasi/lsp') ?>" class="<?= ('web_informasi/lsp' == $this->uri->segment(1, 0) . $this->uri->slash_segment(2, 'leading') ? 'active' : '') ?>">LSP</a></li>
									</ul>
								</li>
								<li><a href="<?= base_url('web_jurusan') ?>">Jurusan</a></li>	
								<li><a href="<?= base_url('web_p5') ?>">P5 SMK</a></li>	
								<li><a href="<?= base_url('web_kegiatan/belajar') ?>">Portal</a></li>	
								<li><a href="<?= base_url('web_berita') ?>">Berita</a></li>	
								<li class="dropdown">
									<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="true">Galery<span class='caret2'></span></a>
									<ul class="dropdown-menu" style="margin-top:10px;padding:15px 20px 8px;">
										<li><a href="<?= base_url('web_galery/galery') ?>" class="<?= ('web_galery/galery' == $this->uri->segment(1, 0) . $this->uri->slash_segment(2, 'leading') ? 'active' : '') ?>">PHOTO</a></li>
										<li><a href="<?= base_url('web_galery/video') ?>" class="<?= ('web_galery/video' == $this->uri->segment(1, 0) . $this->uri->slash_segment(2, 'leading') ? 'active' : '') ?>">VIDEO</a></li>
									</ul>
								</li>
								<li><a href=""<?= base_url('web_kegiatan/contact') ?>">Contact</a></li>									
							</ul>
						</nav>
					</div>
					</div>
				</div>
			</div>
		</div>
		<div class="side-menumob">
			<div class="side-menumob-icon bgpink difle-c" data-dismiss="modal" aria-label="Close">
				<svg viewBox="0 0 24 24"><path d="M19,6.41L17.59,5L12,10.59L6.41,5L5,6.41L10.59,12L5,17.59L6.41,19L12,13.41L17.59,19L19,17.59L13.41,12L19,6.41Z" /></svg>
			</div>
			<a href="<?= base_url()?>login">
				<div class="side-menumob-icon bgviola difle-c">
					<div>
					<svg viewBox="0 0 24 24" style="width:20px;"><path d="M18 1C15.24 1 13 3.24 13 6V8H4C2.9 8 2 8.89 2 10V20C2 21.11 2.9 22 4 22H16C17.11 22 18 21.11 18 20V10C18 8.9 17.11 8 16 8H15V6C15 4.34 16.34 3 18 3C19.66 3 21 4.34 21 6V8H23V6C23 3.24 20.76 1 18 1M10 13C11.1 13 12 13.89 12 15C12 16.11 11.11 17 10 17C8.9 17 8 16.11 8 15C8 13.9 8.9 13 10 13Z"/></svg>
					<p>Admin</p>
					</div>
				</div>
			</a>
		</div>
	</div>
</div>
