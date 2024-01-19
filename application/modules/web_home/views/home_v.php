<div class="forscroll">
	<div class="full-wrapper clearfix">
		<div class="asimse">
			
			<div id="masihloading">
				<div class="loadercartoon">
					<div class="loadercartoon-title tada difle-l">Masih<br/>Loading</div>
					<img src="<?= base_url()?>website/assets/css/empty-small.png"/>
				</div>
			</div>
		
			<!-- Statistik Pengunjung -->
			<div class="modal right fade" id="visitor" role="dialog" aria-labelledby="visitor" aria-hidden="true">
				<div class="modal-dialog bggrey3" role="document">
					<div class="modalhead difle-c"><h1>Statistik Pengunjung</h1></div>
						<div class="inner-modal absfull">
							<div class="colscroll">
								<div class="colscroll-padding">
									<div class="boxprime animate__bounceIn animated">
				
									<div class="headmodule bggrad-lr3 difle-l">
										<div class="headmodule-icon bg2 difle-c">
											<svg viewBox="0 0 24 24"><path d="M22,21H2V3H4V19H6V10H10V19H12V6H16V19H18V14H22V21Z" /></svg>
										</div>
										<div class="headmodule-title">
											<h1></h1>
										</div>
									</div>
									<div class="relhid widget-height bggrad-tb" style="border:none;">
										<div class="relhid p-10">
											<table style="width: 100%;" class="deftable-dotborder">
												<tr>
													<td style="width:45% !important;">Hari ini</td><td style="width:10px;text-align:center;">:</td><td><?php echo $pengunjunghariini ?> </td>
												</tr>
												<tr>
													<td style="width:45% !important;">Total</td><td style="width:10px;text-align:center;">:</td><td><?php echo $totalpengunjung ?></td>
												</tr>
												<tr>
													<td style="width:45% !important;">Online</td><td style="width:10px;text-align:center;">:</td><td><?php echo $pengunjungonline ?></td>
												</tr>												
											</table>
										</div>		
									</div>					
								</div>
							</div>
						</div>
    				</div>
					<div class="modalfoot difle-c" data-dismiss="modal" aria-label="Close">
						Tutup<div class="close-btn" style="margin-left:5px;"></div>
					</div>
  				</div>
			</div>

			<!-- Profil Sekolah -->
			<div class="modal right fade" id="identitas" role="dialog" aria-labelledby="identitas" aria-hidden="true">
				<div class="modal-dialog bggrey3" role="document">
				<div class="modalhead difle-c"><h1>Profil Sekolah</h1></div>
				<div class="inner-modal absfull">
					<div class="colscroll">
						<div class="colscroll-padding">
							<div class="boxprime aprofile nimate__bounceIn animated">				
								<div class="mt-15">
									<div class="relhid profile-inner mb-15">
										<div class="profile-icon"><svg viewBox="0 0 16 16"><rect width="16" height="16" id="icon-bound" fill="none" /><path d="M16,3V1c-4.188,0-7,2.812-7,7v7h7V8h-5C11,4.916,12.916,3,16,3z M0,8v7h7V8H2c0-3.084,1.916-5,5-5V1C2.812,1,0,3.812,0,8z"/></svg></div>
											<p>	</p>
										</div>
										<div class="headarrow" style="margin:0 0 5px;"><h1>Identitas Sekolah</h1></div>
										<table class="identitas-table mb-15" width="100%">
											<tr>
												<td>Kode Sekolah</td><td style="width:15px;text-align:center;">:</td><td>  <?= $sekolah['npsn'] ?></td>
											</tr>
											<tr>
												<td>Kecamatan</td><td style="width:15px;text-align:center;">:</td><td>  <?= $sekolah['kecamatan'] ?></td>
											</tr>
											<tr>
												<td>Kabupaten</td><td style="width:15px;text-align:center;">:</td><td> <?= $sekolah['kota'] ?></td>
											</tr>
											<tr>
												<td>Provinsi</td><td style="width:15px;text-align:center;">:</td><td> <?= $sekolah['provinsi'] ?></td>
											</tr>
											<tr>
												<td>Kode Pos</td><td style="width:15px;text-align:center;">:</td><td> <?= $sekolah['kodepos'] ?></td>
											</tr>
										</table>
										<div class="headarrow" style="margin:0 0 5px;"><h1>Alamat Sekolah</h1></div>
										<p class="mb-15"> <?= $sekolah['alamat'] ?> </p>		
										<div class="headarrow" style="margin:0 0 5px;"><h1>Jam Kerja</h1></div>
										<table class="identitas-table mb-15" width="100%">
											<tbody>
												<tr>
													<td>Senin</td>
													<td style="text-align:right;">08:00:00 - 16:00:00</td>
												</tr>
												<tr>
													<td>Selasa</td>
													<td style="text-align:right;">08:00:00 - 16:00:00</td>
												</tr>
												<tr>
													<td>Rabu</td>
													<td style="text-align:right;">08:00:00 - 16:00:00</td>
												</tr>
												<tr>
													<td>Kamis</td>
													<td style="text-align:right;">08:00:00 - 16:00:00</td>
												</tr>
												<tr>
													<td>Jumat</td>
													<td style="text-align:right;">08:00:00 - 16:00:00</td>
												</tr>
												<tr>
													<td>Sabtu</td>
													<td colspan="2" style="text-align:right;">Libur</td>
												</tr>
												<tr>
													<td>Minggu</td>
													<td colspan="2" style="text-align:right;">Libur</td>
												</tr>
											</tbody>
										</table>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="modalfoot difle-c" data-dismiss="modal" aria-label="Close">
						Tutup<div class="close-btn" style="margin-left:5px;"></div>
					</div>
				</div>
			</div>

  		</div>
	</div>
</div>

<!-- pop-up awal -->
<div class="loadpage">
	<div class="loading-asimse difle-c">
		<div>
			<div class="loadtop relative full-width">			
				<div class="circleload"></div>
				<div class="loading-logo difle-c"><img src="<?= base_url() ?>panel/dist/upload/logo/<?= $sekolah['logo'] ?>"/></div>
			</div>
			<h1 class="cwhite"><?= $sekolah['nama_sekolah'] ?></h1>		
			<p class="cwhite">Kecamatan <?= $sekolah['kecamatan'] ?>, Kabupaten <?= $sekolah['kota'] ?><br/>Provinsi <?= $sekolah['provinsi'] ?></p>
		</div>
	</div>
</div>

<noscript>
	<div class="scriptmati difle-c">
		<div>
        <div class="difle-c"><h2>INFO...</h2><svg class="popin" width="20px" height="20px" viewBox="0 0 64 64" style="fill:#f6b530;"><path d="M36.989 42.439H27.01L23 2h18z"></path><ellipse cx="31.999" cy="54.354" rx="7.663" ry="7.646"></ellipse></svg></div>
		<p>Mohon maaf, Website <?= $sekolah['nama_sekolah'] ?> tidak dapat tampil, karena fitur javacript browser anda tidak aktif atau browser anda tidak mendukung javascript, silahkan aktifkan javascript pada pengaturan browser atau gunakan browser yang mendukung javascript</p>
		</div>
	</div>
</noscript>

<!-- javascript -->
<script>
	var tw = new Date();
	if (tw.getTimezoneOffset() == 0) (a=tw.getTime() + ( 7 *60*60*1000))
	else (a=tw.getTime());
	tw.setTime(a);
	var tahun= tw.getFullYear ();
	var hari= tw.getDay ();
	var bulan= tw.getMonth ();
	var tanggal= tw.getDate ();
	var hariarray=new Array("Minggu,","Senin,","Selasa,","Rabu,","Kamis,","Jum'at,","Sabtu,");
	var bulanarray=new Array("Januari","Februari","Maret","April","Mei","Juni","Juli","Agustus","September","Oktober","Nopember","Desember");
	document.getElementById("tanggal").innerHTML = hariarray[hari]+" "+tanggal+" "+bulanarray[bulan]+" "+tahun;
</script>
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
<!-- end javascript -->

<div class="homestyle">
	<!-- header -->
	<div class="header bggrad-lr2">
		<div class="head-inner marginpage fadeIn2">
			<div class="wrespon OpaC">
				<div class="headleft difle-c desk-v">
					<div class="headtitle OpaC">
						<div class="relative">
							<div class="bg-anim"><div class='bgcircle small shade1'></div><div class='bgcircle medium shade2'></div><div class='bgcircle large shade3'></div></div>
							<div class="headtitle-main"><img src="<?= base_url() ?>panel/dist/upload/logo/<?= $sekolah['logo'] ?>"/></div>
						</div>
						<div>
							<div class="headtitle-main">
								<div class="relative">
									<h1 class="cwhite"><?= $sekolah['nama_sekolah'] ?></h1>
									<h2 class="cwhite"><?= $sekolah['npsn'] ?></h2>
									<div class="title-address">
										<p class="cwhite">Kecamatan <?= $sekolah['kecamatan'] ?>, Kabupaten <?= $sekolah['kota'] ?>, Provinsi <?= $sekolah['provinsi'] ?></p>
									</div>
								</div>
							</div>
						</div>
					</div>							
				</div>
				<!-- slideers -->
				<div class="headright"><link rel="stylesheet" href="<?= base_url()?>website/assets/css/slide.css">
					<div class="slideshow imagefull trans-h OpaC">
						<div class="camerabg">
							<div class="imagefull">
								<img src="<?= base_url()?>website/assets/front/css/images/latar_websitee4ef.jpg?v2fea19cb8b4f08ffe6b24e38cc2e0829"/>
							</div>
						</div>
						<div class="camera_wrap">
							<?php foreach ($sliders as $key => $value) {?>                    		
							<div data-src="<?= base_url()?>/panel/dist/upload/profil_slide/<?= $value->gambar ?>">
								<img src="<?= base_url()?>/panel/dist/upload/profil_slide/<?= $value->gambar ?>">
							</div>
							<?php  } ?> 							
						</div>
					</div>
				<div class="headgraph absfulltop desk-v OpaC">	
					<div class="graph1-a">
						<svg viewBox="0 0 908.000000 1234.000000">
							<g transform="translate(0.000000,1234.000000) scale(0.100000,-0.100000)" stroke="none"><path d="M0 6170 l0 -6170 1498 2 1497 3 60 29 c52 26 148 118 736 705 620 621 678 681 706 741 44 92 55 143 55 241 l0 85 82 -4 c92 -5 168 12 247 55 31 16 275 254 741 721 645 647 697 701 722 759 39 91 51 168 37 250 -24 142 -5 119 -705 819 -421 421 -658 651 -690 669 -122 70 -276 99 -400 76 -33 -6 -61 -9 -63 -7 -2 1 4 32 13 67 11 43 15 91 12 154 -3 80 -8 100 -41 170 -38 79 -45 87 -797 840 l-760 760 2603 2603 2602 2602 -4078 0 -4077 0 0 -6170z m3622 113 c627 -628 761 -767 779 -808 18 -39 23 -69 23 -140 1 -82 -2 -96 -32 -160 -31 -66 -72 -109 -782 -820 l-750 -750 -775 775 c-840 840 -815 812 -816 924 -1 67 8 109 33 161 13 26 290 310 786 808 422 422 769 767 772 767 3 0 346 -341 762 -757z m1183 -1265 c105 -27 119 -39 768 -686 353 -352 640 -647 655 -672 24 -40 27 -55 27 -135 0 -74 -5 -99 -24 -140 -19 -40 -163 -189 -695 -723 -585 -587 -679 -677 -732 -703 -79 -39 -152 -47 -230 -24 -59 17 -59 17 -752 708 -517 516 -700 705 -720 742 -21 40 -26 64 -26 120 0 138 -25 108 658 794 376 378 633 628 669 652 121 79 262 103 402 67z m-1810 -1698 c22 -45 152 -180 706 -735 742 -744 717 -715 727 -846 5 -78 -16 -163 -58 -229 -16 -25 -323 -338 -682 -697 -535 -534 -662 -656 -702 -674 -69 -30 -149 -35 -222 -14 -59 17 -59 17 -747 703 -389 389 -700 707 -715 732 -24 40 -27 55 -27 135 0 74 4 99 24 140 19 40 188 214 835 862 l811 813 11 -68 c6 -37 24 -92 39 -122z"/></g>
						</svg>
					</div>
					<div class="graph1-b">
						<svg viewBox="0 0 908.000000 1234.000000">
							<g transform="translate(0.000000,1234.000000) scale(0.100000,-0.100000)" stroke="none"><path d="M4599 8963 c-3170 -3171 -3379 -3382 -3409 -3444 -42 -87 -57 -188 -42 -271 25 -137 -1 -107 843 -953 l779 -780 -769 -770 c-740 -742 -770 -773 -805 -846 -71 -144 -68 -297 5 -415 18 -28 327 -345 722 -740 810 -808 733 -747 940 -742 210 5 140 -51 928 737 620 621 678 681 706 741 44 92 55 143 55 241 l0 85 82 -4 c92 -5 168 12 247 55 31 16 275 254 741 721 645 647 697 701 722 759 39 91 51 168 37 250 -24 142 -5 119 -705 819 -421 421 -658 651 -690 669 -122 70 -276 99 -400 76 -33 -6 -61 -9 -63 -7 -2 1 4 32 13 67 11 43 15 91 12 154 -3 80 -8 100 -41 170 -38 79 -45 87 -797 840 l-760 760 2603 2603 2602 2602 -90 0 -90 0 -3376 -3377z m-977 -2680 c627 -628 761 -767 779 -808 18 -39 23 -69 23 -140 1 -82 -2 -96 -32 -160 -31 -66 -72 -109 -782 -820 l-750 -750 -775 775 c-840 840 -815 812 -816 924 -1 67 8 109 33 161 13 26 290 310 786 808 422 422 769 767 772 767 3 0 346 -341 762 -757z m1183 -1265 c105 -27 119 -39 768 -686 353 -352 640 -647 655 -672 24 -40 27 -55 27 -135 0 -74 -5 -99 -24 -140 -19 -40 -163 -189 -695 -723 -585 -587 -679 -677 -732 -703 -79 -39 -152 -47 -230 -24 -59 17 -59 17 -752 708 -517 516 -700 705 -720 742 -21 40 -26 64 -26 120 0 138 -25 108 658 794 376 378 633 628 669 652 121 79 262 103 402 67z m-1810 -1698 c22 -45 152 -180 706 -735 742 -744 717 -715 727 -846 5 -78 -16 -163 -58 -229 -16 -25 -323 -338 -682 -697 -535 -534 -662 -656 -702 -674 -69 -30 -149 -35 -222 -14 -59 17 -59 17 -747 703 -389 389 -700 707 -715 732 -24 40 -27 55 -27 135 0 74 4 99 24 140 19 40 188 214 835 862 l811 813 11 -68 c6 -37 24 -92 39 -122z"/></g>
						</svg>
					</div>
					<div class="graph1-c">
						<svg viewBox="0 0 908.000000 1234.000000">
							<g transform="translate(0.000000,1234.000000) scale(0.100000,-0.100000)" stroke="none"><path d="M2088 6273 c-496 -498 -773 -782 -786 -808 -25 -52 -34 -94 -33 -161 1 -112 -24 -84 816 -924 l775 -775 745 745 c709 708 748 749 783 819 35 70 37 80 36 165 0 71 -5 102 -23 141 -18 41 -152 180 -779 808 -416 416 -759 757 -762 757 -3 0 -350 -345 -772 -767z"/> <path d="M4614 5030 c-78 -11 -147 -37 -211 -79 -36 -24 -293 -274 -669 -652 -683 -687 -658 -656 -657 -794 0 -50 6 -83 21 -115 16 -34 201 -224 719 -742 l698 -697 59 -17 c78 -22 151 -14 230 25 53 26 147 116 732 703 532 534 676 683 695 723 19 41 24 66 24 140 0 80 -3 95 -27 135 -15 25 -302 320 -655 672 -491 490 -639 632 -679 652 -85 42 -189 59 -280 46z"/><path d="M2134 2697 c-647 -648 -816 -822 -835 -862 -20 -41 -24 -66 -24 -140 0 -80 3 -95 27 -135 15 -25 325 -343 715 -731 652 -651 691 -688 742 -704 67 -22 158 -16 227 14 40 18 164 136 702 674 359 359 666 672 682 697 42 66 63 151 58 229 -10 131 15 102 -727 846 -738 739 -722 721 -745 857 l-11 68 -811 -813z"/></g>
						</svg>
					</div>	
				</div>
			</div>
		</div>
	</div>
</div>
			
<div class="relhid runtext brdgrey">
	<div class="marginpage">
		<div class="runtext-content">
			<div class="runtext-head difle-l">
				<svg class="popin" viewBox="0 0 64 64"><path d="M36.989 42.439H27.01L23 2h18z"></path><ellipse cx="31.999" cy="54.354" rx="7.663" ry="7.646"></ellipse></svg>
				<span class="desk-v" style="margin-right:5px;">Sekilas</span>Info
			</div>
			<marquee onmouseover="this.stop()" onmouseout="this.start()">
				<h2><?= $info['text_info'] ?></h2>
			</marquee>
		</div>	
	</div>
</div>			
<div class="marginpage">
	<div class="stickybox">
		<div class="container-sticky">
			<div class="stickyside-left trans-w">
				<div class="stickyside-top">
					<div class="relhid plr-15 pb-15">
						
						<div class="aparatur fadeIn">
							<div class="aparaturmid">
								<div class="headmodule bggrad-lr3 difle-l mt-15 mb-5">
									<div class="headmodule-icon bg2 difle-c">
										<svg viewBox="0 0 24 24"><path d="M16 17V19H2V17S2 13 9 13 16 17 16 17M12.5 7.5A3.5 3.5 0 1 0 9 11A3.5 3.5 0 0 0 12.5 7.5M15.94 13A5.32 5.32 0 0 1 18 17V19H22V17S22 13.37 15.94 13M15 4A3.39 3.39 0 0 0 13.07 4.59A5 5 0 0 1 13.07 10.41A3.39 3.39 0 0 0 15 11A3.5 3.5 0 0 0 15 4Z" /></svg>
									</div>
									<div class="headmodule-title">
										<h1>Pendidik</h1>
									</div>
								</div>
								
								<a href="<?= base_url() ?>panel/dist/upload/logo/<?= $kepsek['foto'] ?>"  data-fancybox="images" data-caption="Kepala Desa<br/><?= $kepsek['nama_kepsek'] ?>">
									<div class="aparatur-frame" style="border-radius:0 0 4px 4px;">
										<div class="aparatur-box" style="border-radius:0 0 4px 4px;">
											<div class="imagecrop">
												<img src="<?= base_url() ?>panel/dist/upload/logo/<?= $kepsek['foto'] ?>" alt="<?= $kepsek['nama_kepsek'] ?>">
												<div class="title-bottom absfullbottom" style="border-radius:0 0 4px 4px;">
													<div>
														<h2 class="cwhite">Kepala Sekolah</h2>
														<h3 class="cgrey1"><?= $kepsek['nama_kepsek'] ?></h3>
														<div class="absensi difle-c">																																	
															<div class="absensi-box bgorange difle-c">
																<a href="<?= base_url() ?>web_profil/sambutan" class="text-white"><p>Sambutan</p></a>
															</div>
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
								</a>
														
								<div style="border-radius:4px 4px 0 0;" class="carousel c-main" data-flickity='{"pageDots": false, "autoPlay": false, "wrapAround": true }'>
								<?php foreach ($profil_guru as $key => $value) {?>                   
									<div class="carousel-item">
										<a href="<?=base_url()?>/panel/dist/upload/profil_guru/<?= $value->gambar ?>"  data-fancybox="images" data-caption="<?= $value->nama_guru ?><br/><?= $value->nama_guru ?>">
										<div class="aparatur-box" style="border-radius:4px 4px 0 0;">
											<div class="imagecrop">
												<img src="<?=base_url()?>/panel/dist/upload/profil_guru/<?= $value->gambar ?>" alt="<?= $value->nama_guru ?>">
												<div class="title-bottom absfullbottom">
													<div>
														<h2 class="cwhite"><?= $value->nama_guru ?></h2>
														<h3 class="cgrey1"><?= $value->mengajar ?></h3>
														<div class="absensi difle-c">																																	
															<div class="absensi-box bgorange difle-c">
																<p>Lihat Detail</p>
															</div>
														</div>
													</div>
												</div>
											</div>
										</div>	
										</a>
									</div>
								<?php } ?>  							
							</div>		
							<div class="carousel c-nav" data-flickity='{ "asNavFor": ".c-main", "contain": true, "pageDots": false, "autoPlay": false, "wrapAround": true }'>
								<?php foreach ($profil_guru as $key => $value) {?>	
									<div class="carousel-item">	
										<div class="aparatur-thumb">
											<div class="imagecrop">
												<img src="<?=base_url()?>/panel/dist/upload/profil_guru/<?= $value->gambar ?>" alt="<?= $value->nama_guru ?>">
											</div>
										</div>
									</div>
								<?php } ?>			
							</div>
						</div>
	
						<div class="aparaturmob">
							<div class="midaparatur relhid mt-15 bgwhite brd-5">
								<div class="headmodule bggrad-lr3 difle-l">
									<div class="headmodule-icon bg2 difle-c">
										<svg viewBox="0 0 24 24"><path d="M16 17V19H2V17S2 13 9 13 16 17 16 17M12.5 7.5A3.5 3.5 0 1 0 9 11A3.5 3.5 0 0 0 12.5 7.5M15.94 13A5.32 5.32 0 0 1 18 17V19H22V17S22 13.37 15.94 13M15 4A3.39 3.39 0 0 0 13.07 4.59A5 5 0 0 1 13.07 10.41A3.39 3.39 0 0 0 15 11A3.5 3.5 0 0 0 15 4Z" /></svg>
									</div>
									<div class="headmodule-title">
										<h1>Pendidik</h1>
									</div>
								</div>
								<div class="lembaga-container bggrey3" style="border-radius:0 0 5px 5px;">									
									<div class="carousel" data-flickity='{"pageDots": false, "autoPlay": true, "cellAlign": "left", "wrapAround": true }'>
										<div class="carousel-item">
											<a href="<?= base_url() ?>panel/dist/upload/logo/<?= $kepsek['foto'] ?>"  data-fancybox="images" data-caption="Kepala Desa<br/><?= $kepsek['nama_kepsek'] ?>">
												<div class="midaparatur-row">
													<div class="wrespon">
														<div class="midaparatur-image">
															<div class="imagefull">
																<img src="<?= base_url() ?>panel/dist/upload/logo/<?= $kepsek['foto'] ?>" alt="<?= $kepsek['nama_kepsek'] ?>">
															</div>
														</div>
														<div class="midaparatur-title">
															<div style="align-self: start;">
																<h2>Kepala Sekolah</h2>
																<p><?= $kepsek['nama_kepsek'] ?></p>
															</div>
															<div class="absensi difle-c" style="align-self: end;">
																<div class="absensi-box bgorange difle-c">
																	<a href="<?= base_url() ?>web_profil/sambutan" class="text-white"><p>Sambutan</p></a>
																</div>
															</div>
														</div>
													</div>	
												</div>
											</a>
										</div>
										<?php foreach ($profil_guru as $key => $value) {?>  
										<div class="carousel-item">
											<a href="<?=base_url()?>/panel/dist/upload/profil_guru/<?= $value->gambar ?>"  data-fancybox="images" data-caption="<?= $value->mengajar ?><br/><?= $value->nama_guru ?>">
												<div class="midaparatur-row">
													<div class="wrespon">
														<div class="midaparatur-image">
															<div class="imagefull">
																<img src="<?=base_url()?>/panel/dist/upload/profil_guru/<?= $value->gambar ?>" alt="<?= $value->nama_guru ?>">
															</div>
														</div>
														<div class="midaparatur-title">
															<div style="align-self: start;">
																<h2><?= $value->mengajar ?></h2>
																<p><?= $value->nama_guru ?></p>
															</div>
															<div class="absensi difle-c" style="align-self: end;">
																<div class="absensi-box bgorange difle-c">
																	<p>Lihat Detail</p>
																</div>
															</div>
														</div>
													</div>	
												</div>
											</a>
										</div>
										<?php } ?>						
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="relhid stickymain trans-w">						
			<div class="home-middle plr-15 pb-15">
			<!-- Event -->
			<!-- Event -->	
			<!-- <script>
				$(document).ready(function(){if($("#jadwal-shalat").length){const a="https://api.banghasan.com/",s=`sholat/format/json/kota/kode/${KODE_KOTA}`,l=`sholat/format/json/jadwal/kota/${KODE_KOTA}/tanggal/${TANGGAL}`;try{$.ajax({url:a+s,type:"get",dataType:"json",crossDomain:!0,success:function(a){$("[data-name=kota]").html(a.kota[0].nama).removeClass("shimmer line-short")},error:function(a){$(".line-short").html('<span class="small"><i class="fa fa-exclamation-triangle pr-1"></i> Gagal memuat</span>'),$(".line-short").removeClass("shimmer line-short")}}),$.ajax({url:a+l,type:"get",dataType:"json",crossDomain:!0,success:function(a){$(".shimmer").removeClass("shimmer"),$("[data-name=tanggal]").html(`<span>${a.jadwal.data.tanggal}</span>`),$("[data-name=imsak]").html(`<span>${a.jadwal.data.imsak}</span>`),$("[data-name=subuh]").html(`<span>${a.jadwal.data.subuh}</span>`),$("[data-name=terbit]").html(`<span>${a.jadwal.data.terbit}</span>`),$("[data-name=dhuha]").html(`<span>${a.jadwal.data.dhuha}</span>`),$("[data-name=dzuhur]").html(`<span>${a.jadwal.data.dzuhur}</span>`),$("[data-name=ashar]").html(`<span>${a.jadwal.data.ashar}</span>`),$("[data-name=maghrib]").html(`<span>${a.jadwal.data.maghrib}</span>`),$("[data-name=isya]").html(`<span>${a.jadwal.data.isya}</span>`)},error:function(a){$(".box-shalat").html('<span class="small"><i class="fa fa-exclamation-triangle pr-1"></i> Gagal memuat</span>'),$(".box-shalat").removeClass("shimmer")}})}catch(a){console.log(a)}}});
				$(document).ready(function(){if($("#jadwal-shalat2").length){const b="https://api.banghasan.com/",t=`sholat/format/json/kota/kode/${KODE_KOTA}`,m=`sholat/format/json/jadwal/kota/${KODE_KOTA}/tanggal/${BESOK}`;try{$.ajax({url:b+m,type:"get",dataType:"json",crossDomain:!0,success:function(b){$(".shimmer").removeClass("shimmer"),$("[data-name=tanggal2]").html(`<span>${b.jadwal.data.tanggal}</span>`),$("[data-name=imsak2]").html(`<span>${b.jadwal.data.imsak}</span>`),$("[data-name=subuh2]").html(`<span>${b.jadwal.data.subuh}</span>`),$("[data-name=terbit2]").html(`<span>${b.jadwal.data.terbit}</span>`),$("[data-name=dhuha2]").html(`<span>${b.jadwal.data.dhuha}</span>`),$("[data-name=dzuhur2]").html(`<span>${b.jadwal.data.dzuhur}</span>`),$("[data-name=ashar2]").html(`<span>${b.jadwal.data.ashar}</span>`),$("[data-name=maghrib2]").html(`<span>${b.jadwal.data.maghrib}</span>`),$("[data-name=isya2]").html(`<span>${b.jadwal.data.isya}</span>`)},error:function(b){$(".box-shalat").html('<span class="small"><i class="fa fa-exclamation-triangle pr-1"></i> Gagal memuat</span>'),$(".box-shalat").removeClass("shimmer")}})}catch(b){console.log(b)}}});
			</script> -->
			<!-- <script>
				const KODE_KOTA ="572";
				const TANGGAL = "2023-12-28";
				const BESOK = "2023-12-29";
			</script> -->

			<div class="relhid jadwalshalat mt-15 bgwhite brd-5">
			<div id="jadwal-shalat">
			<div class="jadwalshalat-inner">
				<div class="wrespon">
					<div class="jadwalshalat-left difle-l">
						<div class="jadwalshalat-left-icon1 difle-c">
							<svg viewBox="0 0 128.000000 128.000000">
								<g transform="translate(0.000000,128.000000) scale(0.100000,-0.100000)">
								<path d="M385 1076 c-126 -51 -240 -98 -252 -105 -22 -11 -23 -18 -23 -117 0
										-81 3 -105 13 -101 6 3 126 50 265 106 l252 101 253 -101 c138 -56 258 -103
										265 -106 9 -4 12 20 12 101 l0 105 -28 15 c-65 34 -484 196 -505 196 -12 -1
										-125 -43 -252 -94z"/>
								<path d="M370 745 l-255 -103 -3 -252 c-2 -178 1 -257 9 -266 8 -9 34 -14 80
								-14 l69 0 0 148 c0 169 1 171 82 191 70 17 106 14 118 -8 6 -11 10 -87 10
								-175 l0 -156 334 0 c271 0 336 3 345 14 8 9 11 88 9 267 l-3 253 -255 103
								c-140 56 -262 102 -270 102 -8 -1 -130 -47 -270 -104z"/>
								</g>
							</svg>
							<div class="jadwalshalat-left-icon2 difle-c">
							<svg viewBox="0 0 700 700">
								<path d="m128.33 443.33v46.668h-19.832c-3.5 0-15.168 19.832-15.168 19.832 0 2.3359 1.168 3.5 3.5 3.5h8.168c7 0 11.668 4.668 11.668 11.668s-4.668 11.668-11.668 11.668h-23.332c-7 0-11.668-4.668-11.668-11.668v-58.332c1.168-12.832 10.5-22.168 23.332-23.332z"/>
								<path d="m361.67 483c-1.168 51.332-24.5 53.668-24.5 53.668h-185.5v-93.332h93.332c5.832 0 10.5-3.5 11.668-8.168s-1.168-10.5-5.832-12.832c-1.168-1.168-75.836-46.668-75.836-130.67 0-19.832 7-38.5 19.832-52.5 18.668-18.668 53.668-29.168 96.832-29.168 11.668 0 23.332 1.168 35 3.5v102.67c-5.832-4.668-11.668-8.168-17.5-11.668-5.832-3.5-12.832-1.168-16.332 4.668-3.5 5.832-1.168 12.832 4.668 16.332 17.5 10.5 31.5 24.5 42 42l1.168 1.168c-9.332 15.168-15.168 32.668-14 51.332-1.168 16.332 3.5 31.5 15.168 43.168z"/>
								<path d="m421.17 437.5c-3.5-5.832-1.168-12.832 4.668-16.332 1.1641-1.168 3.4961-1.168 5.832-1.168h116.67c-28-74.668-79.332-141.17-137.67-176.17-18.668-10.5-39.668-18.668-60.668-24.5v119 2.332c3.5 4.668 7 9.332 9.332 14l56-25.668c5.832-2.332 12.832 0 15.168 5.832 2.332 5.832 0 11.668-4.668 15.168l-59.5 28c-10.5 3.5039-16.332 21.004-16.332 42.004-1.168 9.332 1.168 19.832 8.168 26.832l22.168 22.168c1.168 1.168 2.332 1.168 2.332 2.332l60.664 65.336 17.5-35z"/>
								<path d="m520.33 443.33-21 35h14c18.668 1.168 35 10.5 46.668 24.5l11.668 10.5c-2.332-23.332-8.168-46.668-15.168-70z"/>
								<path d="m513.33 501.67h-29.168l-17.496 35h91l-14-16.332c-9.3359-9.3359-19.836-18.668-30.336-18.668z"/>
								<path d="m618.33 443.33h-36.168c8.168 30.332 12.832 61.832 12.832 93.332h19.832c8.168 0 15.168-5.832 15.168-14v-65.332c0.003906-4.6641-1.1641-14-11.664-14z"/>
							</svg>
						</div>
						</div>
					<div>
					<h2>Jadwal Imsak & Shalat Wilayah Kab. <?= $sekolah['kota'] ?></h2>
					<h3><span id="hariini"></span></h3>
					</div>
					<script>
						var tw = new Date();
						if (tw.getTimezoneOffset() == 0) (a=tw.getTime() + ( 7 *60*60*1000))
						else (a=tw.getTime());
						tw.setTime(a);
						var tahun= tw.getFullYear ();
						var hari= tw.getDay ();
						var bulan= tw.getMonth ();
						var tanggal= tw.getDate ();
						var hariarray=new Array("Minggu,","Senin,","Selasa,","Rabu,","Kamis,","Jum'at,","Sabtu,");
						var bulanarray=new Array("Januari","Februari","Maret","April","Mei","Juni","Juli","Agustus","September","Oktober","Nopember","Desember");
						document.getElementById("hariini").innerHTML = hariarray[hari]+" "+tanggal+" "+bulanarray[bulan]+" "+tahun;
					</script>
					</div>
					<div class="jadwalshalat-right">
						<div class="scroller">
							<p>
							Imsak <span data-name="imsak"></span><br/>
							Subuh <span data-name="subuh"></span><br/>
							Dzuhur <span data-name="dzuhur"></span><br/>
							Ashar <span data-name="ashar"></span><br/>
							Magrib <span data-name="maghrib"></span><br/>
							Isya <span data-name="isya"></span>
							</p>
						</div>
					</div>
				</div>
				<div class="jadwalshalat-full-title headpanel difle-l">
					<a data-toggle="collapse" data-parent="#accordion" href="#collapseOne">Selengkapnya</a>
				</div>
				<div id="collapseOne" class="panel-collapse collapse">
					<div class="panelopen">
					<div class="wrespon mlr-min-5">
						<div class="shalat-col">
							<div class="shalat-icon imsak difle-c">
							<svg viewBox="0 0 64 64">
								<path d="M55.9775,28.2549A12.015,12.015,0,0,0,44,17a12.1931,12.1931,0,0,0-1.68.1162,14.9911,14.9911,0,0,0-27.458,1.8848A8.01,8.01,0,0,0,7,27a7.8027,7.8027,0,0,0,.0537.9165A9.0632,9.0632,0,0,0,2,36a8.8759,8.8759,0,0,0,1.2188,4.5083A1,1,0,0,0,4.08,41H59.74a.9993.9993,0,0,0,.8194-.4268A7.942,7.942,0,0,0,62,36,8.03,8.03,0,0,0,55.9775,28.2549Z M9.6016,44.5684c-.3448.37-3.3682,3.6894-3.3682,6.3315a4.1,4.1,0,1,0,8.2,0c0-2.6421-3.0244-5.9619-3.3691-6.332A1.0311,1.0311,0,0,0,9.6016,44.5684Z M24.2686,44.5684C23.9238,44.938,20.9,48.2578,20.9,50.9a4.1,4.1,0,1,0,8.1992,0c0-2.6421-3.0234-5.9619-3.3682-6.3315A1.03,1.03,0,0,0,24.2686,44.5684Z M38.2686,44.5684C37.9238,44.938,34.9,48.2578,34.9,50.9a4.1,4.1,0,1,0,8.1992,0c0-2.6421-3.0234-5.9619-3.3682-6.3315A1.03,1.03,0,0,0,38.2686,44.5684Z M53.667,44.25a1.0012,1.0012,0,0,0-.7315.3179c-.3447.37-3.3691,3.69-3.3691,6.332a4.1,4.1,0,1,0,8.2,0c0-2.6421-3.0234-5.9619-3.3682-6.3315A1,1,0,0,0,53.667,44.25Z"/>
							</svg>
							</div>
							<div class="shalat-box difle-c">
								<div><p style="margin-bottom:5px;">Imsak</p><span data-name="imsak"></span></div>
							</div>
						</div>
						<div class="shalat-col">
							<div class="shalat-icon subuh difle-c">
							<svg viewBox="0 0 64 64">
								<path d="M55.9775,28.2549A12.015,12.015,0,0,0,44,17a12.1931,12.1931,0,0,0-1.68.1162,14.9911,14.9911,0,0,0-27.458,1.8848A8.01,8.01,0,0,0,7,27a7.8027,7.8027,0,0,0,.0537.9165A9.0632,9.0632,0,0,0,2,36a8.8759,8.8759,0,0,0,1.2188,4.5083A1,1,0,0,0,4.08,41H59.74a.9993.9993,0,0,0,.8194-.4268A7.942,7.942,0,0,0,62,36,8.03,8.03,0,0,0,55.9775,28.2549Z M9.6016,44.5684c-.3448.37-3.3682,3.6894-3.3682,6.3315a4.1,4.1,0,1,0,8.2,0c0-2.6421-3.0244-5.9619-3.3691-6.332A1.0311,1.0311,0,0,0,9.6016,44.5684Z M24.2686,44.5684C23.9238,44.938,20.9,48.2578,20.9,50.9a4.1,4.1,0,1,0,8.1992,0c0-2.6421-3.0234-5.9619-3.3682-6.3315A1.03,1.03,0,0,0,24.2686,44.5684Z M38.2686,44.5684C37.9238,44.938,34.9,48.2578,34.9,50.9a4.1,4.1,0,1,0,8.1992,0c0-2.6421-3.0234-5.9619-3.3682-6.3315A1.03,1.03,0,0,0,38.2686,44.5684Z M53.667,44.25a1.0012,1.0012,0,0,0-.7315.3179c-.3447.37-3.3691,3.69-3.3691,6.332a4.1,4.1,0,1,0,8.2,0c0-2.6421-3.0234-5.9619-3.3682-6.3315A1,1,0,0,0,53.667,44.25Z"/>
							</svg>
							</div>
							<div class="shalat-box difle-c">
								<div><p style="margin-bottom:5px;">Subuh</p><span data-name="subuh"></span></div>
							</div>
						</div>
						<div class="shalat-col">
							<div class="shalat-icon dzuhur difle-c">
							<svg viewBox="0 0 64 64">
								<circle cx="32" cy="32" r="15"/>
								<path d="M32,13a1,1,0,0,1-1-1V3a1,1,0,0,1,2,0v9A1,1,0,0,1,32,13Z M17.8574,18.8579a.9964.9964,0,0,1-.707-.293l-4.2422-4.2426a1,1,0,1,1,1.4141-1.4141l4.2422,4.2427a1,1,0,0,1-.7071,1.707Z M12,33H3a1,1,0,0,1,0-2h9a1,1,0,0,1,0,2Z M13.6152,51.3848a1,1,0,0,1-.707-1.7071L17.15,45.4351a1,1,0,1,1,1.4141,1.414l-4.2422,4.2427A.9969.9969,0,0,1,13.6152,51.3848Z M32,62a1,1,0,0,1-1-1V52a1,1,0,0,1,2,0v9A1,1,0,0,1,32,62Z M50.3848,51.3848a.9969.9969,0,0,1-.7071-.293l-4.2422-4.2427a1,1,0,1,1,1.4141-1.414l4.2422,4.2426a1,1,0,0,1-.707,1.7071Z M61,33H52a1,1,0,0,1,0-2h9a1,1,0,0,1,0,2Z M46.1426,18.8579a1,1,0,0,1-.7071-1.707l4.2422-4.2427a1,1,0,0,1,1.4141,1.4141L46.85,18.5649A.9964.9964,0,0,1,46.1426,18.8579Z"/>
							</svg>
							</div>
							<div class="shalat-box difle-c">
								<div><p style="margin-bottom:5px;">Dzuhur</p><span data-name="dzuhur"></span></div>
							</div>
						</div>
						<div class="shalat-col">
							<div class="shalat-icon ashar difle-c">
							<svg viewBox="0 0 64 64">
								<path d="M38.7744,16.75a1,1,0,0,0,1-1V8.542a1,1,0,0,0-2,0V15.75A1,1,0,0,0,38.7744,16.75Z M26.7407,21.1484a1,1,0,0,0,1.4141-1.414l-3.398-3.398a1,1,0,1,0-1.414,1.4141Z M62,30.7676H54.792a1,1,0,0,0,0,2H62a1,1,0,0,0,0-2Z M50.1006,21.4414a.9964.9964,0,0,0,.707-.293l3.398-3.3979a1,1,0,0,0-1.4141-1.4141l-3.3979,3.398a1,1,0,0,0,.707,1.707Z M39.8745,31.9111c.1436-.0044.2871-.0068.43-.0068a13.2989,13.2989,0,0,1,9.8323,4.3465A12.2161,12.2161,0,0,0,28.8527,24.6387,16.1168,16.1168,0,0,1,39.8745,31.9111Z M51.5659,44.4351A11.2818,11.2818,0,0,0,38.7754,34.0073a14.071,14.071,0,0,0-25.7339,1.7656A7.5344,7.5344,0,0,0,5.72,44.1313,8.5348,8.5348,0,0,0,1,51.7227a8.4075,8.4075,0,0,0,1.1431,4.24.9991.9991,0,0,0,.8632.4956H55.0127a1.0008,1.0008,0,0,0,.8169-.4228,7.4345,7.4345,0,0,0,1.3638-4.3125A7.5632,7.5632,0,0,0,51.5659,44.4351Z"/>
							</svg>
							</div>
							<div class="shalat-box difle-c">
								<div><p style="margin-bottom:5px;">Ashar</p><span data-name="ashar"></span></div>
							</div>
						</div>
						<div class="shalat-col">
							<div class="shalat-icon magrib difle-c">
							<svg viewBox="0 0 64 64">
								<path d="M32,16a1,1,0,0,0,1-1V6a1,1,0,0,0-2,0v9A1,1,0,0,0,32,16Z M17.15,21.5645A1,1,0,0,0,18.5645,20.15l-4.2422-4.2422a1,1,0,1,0-1.4141,1.4141Z M13,35a1,1,0,0,0-1-1H3a1,1,0,0,0,0,2h9A1,1,0,0,0,13,35Z M61,34H52a1,1,0,0,0,0,2h9a1,1,0,0,0,0-2Z M46.1426,21.8574a.9967.9967,0,0,0,.707-.2929l4.2422-4.2422a1,1,0,0,0-1.4141-1.4141L45.4355,20.15a1,1,0,0,0,.7071,1.707Z M19.306,43H44.694a15,15,0,1,0-25.388,0Z M54,45H10a1,1,0,0,0,0,2H54a1,1,0,0,0,0-2Z M46,57H18a1,1,0,0,0,0,2H46a1,1,0,0,0,0-2Z M50,51H14a1,1,0,0,0,0,2H50a1,1,0,0,0,0-2Z"/>
							</svg>
							</div>
							<div class="shalat-box difle-c">
								<div><p style="margin-bottom:5px;">Magrib</p><span data-name="maghrib"></span></div>
							</div>
						</div>
						<div class="shalat-col">
							<div class="shalat-icon isya difle-c">
							<svg viewBox="0 0 64 64" style="width:auto;height:24px;">
								<path d="M61.4327,33.3949a.9988.9988,0,0,0-1.16.1909,19.497,19.497,0,0,1-13.9512,5.8491H46.298A19.5995,19.5995,0,0,1,35.005,3.8163a1,1,0,0,0-.4824-1.813,1.2507,1.2507,0,0,0-.4141-.0142A28.1254,28.1254,0,0,0,9.8869,44.414c.2384-.1948.4773-.3893.7314-.5655A12.0255,12.0255,0,0,1,28.173,48.1444a11.3285,11.3285,0,0,1,1.2441,3.6963l.0068.0454a10.159,10.159,0,0,1,5.22,6.4114A28.3264,28.3264,0,0,0,61.9728,34.4393.999.999,0,0,0,61.4327,33.3949Z M27.5626,53.2616c-.02-.3423-.06-.7061-.12-1.103a9.4521,9.4521,0,0,0-1.044-3.0913,9.9837,9.9837,0,0,0-8.8906-5.3892h-.0117a9.9555,9.9555,0,0,0-5.7383,1.814,10.1052,10.1052,0,0,0-4.19,6.6953c-.06.3877-.0986.749-.1172,1.0967a8.209,8.209,0,0,0-5.4346,7.7412,1,1,0,0,0,1,.999h.001l29-.0327a1,1,0,0,0,.999-1.0015,8.2116,8.2116,0,0,0-5.4531-7.7285Z"/>
							</svg>
							</div>
							<div class="shalat-box difle-c">
								<div><p style="margin-bottom:5px;">Isya</p><span data-name="isya"></span></div>
							</div>
						</div>
					</div>
				</div>
			</div>
			
		</div>
	</div>
</div>

	

<div class="relative">
<div class="headmodule bggrad-lr3 difle-l mt-15">
	<div class="headmodule-icon bg2 difle-c">
		<svg viewBox="0 0 24 24"><path d="M6 2C4.9 2 4 2.9 4 4V20C4 21.1 4.9 22 6 22H10V20.1L20 10.1V8L14 2H6M13 3.5L18.5 9H13V3.5M20.1 13C20 13 19.8 13.1 19.7 13.2L18.7 14.2L20.8 16.3L21.8 15.3C22 15.1 22 14.7 21.8 14.5L20.5 13.2C20.4 13.1 20.3 13 20.1 13M18.1 14.8L12 20.9V23H14.1L20.2 16.9L18.1 14.8Z" /></svg>
	</div>
	<div class="headmodule-title">
		<h1><font class="desk-v">Berita</font> Terbaru</h1>
	</div>
</div>
<div class="headmodule-right difle-l">
	<a href="<?= base_url()?>web_berita">
		<div class="headmodule-right-item difle-l">
			<svg viewBox="0 0 24 24"><path d="M19,20H4C2.89,20 2,19.1 2,18V6C2,4.89 2.89,4 4,4H10L12,6H19A2,2 0 0,1 21,8H21L4,8V18L6.14,10H23.21L20.93,18.5C20.7,19.37 19.92,20 19,20Z" /></svg>
			<p class="desk-v">BERITA</p>
		</div>
	</a>	
</div>
	<div class="wrespon news mlr-min-3">
		<?php foreach ($berita as $e) : ?>
			<div class="column3 bgwhite hovcontent">
				<div class="relhid">
					<div class="relhid newsbox trans-h">
						<div class="imagenews trans-h">
							<div class="imagefull">
								<img src="<?= base_url() ?>/panel/dist/upload/profil_berita/<?= $e->gambar ?>">
							</div>
						</div>
						<div class="relhid news-posting difle-l">
							<div class="news-date difle-c"><?= date('d', strtotime($e->tanggal_terbit)); ?></div>
							<p><?= date('m-Y', strtotime($e->tanggal_terbit)); ?></p>
						</div>
					</div>
					<div class="relhid p-15">
						<div class="newarticle-meta difle-l" style="margin:0;">
							<svg viewBox="0 0 24 24"><path d="M12 3C14.21 3 16 4.79 16 7S14.21 11 12 11 8 9.21 8 7 9.79 3 12 3M16 13.54C16 14.6 15.72 17.07 13.81 19.83L13 15L13.94 13.12C13.32 13.05 12.67 13 12 13S10.68 13.05 10.06 13.12L11 15L10.19 19.83C8.28 17.07 8 14.6 8 13.54C5.61 14.24 4 15.5 4 17V21H20V17C20 15.5 18.4 14.24 16 13.54Z" /></svg>
							<h3><?= $e->user_update ?></h3>
						</div>
						<h2><?= $e->judul_artikel ?></h2>
					</div>
				</div>
				<!-- <div class="news-info difle-l">
					<div class="newarticle-meta difle-l">
						<svg viewBox="0 0 24 24"><path d="M12,4.5C7,4.5 2.73,7.61 1,12C2.73,16.39 7,19.5 12,19.5C12.36,19.5 12.72,19.5 13.08,19.45C13.03,19.13 13,18.82 13,18.5C13,17.94 13.08,17.38 13.24,16.84C12.83,16.94 12.42,17 12,17A5,5 0 0,1 7,12A5,5 0 0,1 12,7A5,5 0 0,1 17,12C17,12.29 16.97,12.59 16.92,12.88C17.58,12.63 18.29,12.5 19,12.5C20.17,12.5 21.31,12.84 22.29,13.5C22.56,13 22.8,12.5 23,12C21.27,7.61 17,4.5 12,4.5M12,9A3,3 0 0,0 9,12A3,3 0 0,0 12,15A3,3 0 0,0 15,12A3,3 0 0,0 12,9M18,14.5V17.5H15V19.5H18V22.5H20V19.5H23V17.5H20V14.5H18Z" /></svg>
						<h3>0 Kali dibuka</h3>
					</div>
					<div class="newarticle-meta difle-l" style="float:right;margin:0 0 0 auto;">
						<svg viewBox="0 0 24 24" style="margin-top:3px;"><path d="M9,22A1,1 0 0,1 8,21V18H4A2,2 0 0,1 2,16V4C2,2.89 2.9,2 4,2H20A2,2 0 0,1 22,4V16A2,2 0 0,1 20,18H13.9L10.2,21.71C10,21.9 9.75,22 9.5,22V22H9M17,11V9H15V11H17M13,11V9H11V11H13M9,11V9H7V11H9Z" /></svg>
						<h3>0</h3>
					</div>
				</div> -->
				<div class="newslink trans-h">
					<div class="newslink-top difle-c">
						<div class="newslink-thumb difle-c trans-h">
							<a href="<?= base_url() ?>/panel/dist/upload/profil_berita/<?= $e->gambar ?>"  data-fancybox="images" data-caption="<?= $e->judul_artikel ?>">
								<div class="imageother-small trans-h">
									<div class="imagefull trans-h">
										<img src="<?= base_url() ?>/panel/dist/upload/profil_berita/<?= $e->gambar ?>">
									</div>
								</div>
							</a>																																			
						</div>						
					</div>
					<div class="newslink-intro absfullbottom difle-c">
						<a href="<?= base_url() ?>web_berita/detail_berita/<?= $e->id_artikel ?>">
						<?= (str_word_count($e->deskripsi) > 30 ? substr("$e->deskripsi", 0, 50) . "[...]" : "$e->deskripsi")  ?>
						</a>
					</div>
				</div>
			</div>
		<?php endforeach ?>			
	</div>
</div>	

<div class="aparatur fadeIn">
	<div class="aparaturmid">
	<div class="headmodule bggrad-lr3 difle-l mt-15 mb-5">
		<div class="headmodule-icon bg2 difle-c">
			<svg viewBox="0 0 24 24"><path d="M16 17V19H2V17S2 13 9 13 16 17 16 17M12.5 7.5A3.5 3.5 0 1 0 9 11A3.5 3.5 0 0 0 12.5 7.5M15.94 13A5.32 5.32 0 0 1 18 17V19H22V17S22 13.37 15.94 13M15 4A3.39 3.39 0 0 0 13.07 4.59A5 5 0 0 1 13.07 10.41A3.39 3.39 0 0 0 15 11A3.5 3.5 0 0 0 15 4Z" /></svg>
		</div>
		<div class="headmodule-title">
		<h1>Pendidik</h1>
		</div>
	</div>
	
		<a href="<?= base_url() ?>panel/dist/upload/logo/<?= $kepsek['foto'] ?>"  data-fancybox="images" data-caption="Kepala Sekolah<br/><?= $kepsek['nama_kepsek'] ?>">
			<div class="aparatur-frame" style="border-radius:0 0 4px 4px;">
				<div class="aparatur-box" style="border-radius:0 0 4px 4px;">
				<div class="imagecrop">
					<img src="<?= base_url() ?>panel/dist/upload/logo/<?= $kepsek['foto'] ?>" alt="<?= $kepsek['nama_kepsek'] ?>">
					<div class="title-bottom absfullbottom" style="border-radius:0 0 4px 4px;">
						<div>
						<h2 class="cwhite">Kepala Sekolah</h2>
						<h3 class="cgrey1"><?= $kepsek['nama_kepsek'] ?></h3>
						<div class="absensi difle-c">																													<div class="absensi-box bgorange difle-c">
							<a href="<?= base_url() ?>web_profil/sambutan" class="text-white"><p>Sambutan</p></a>
						</div>
						</div>
						</div>
					</div>
				</div>
				</div>
			</div>
		</a>
														
		<div style="border-radius:4px 4px 0 0;" class="carousel c-main" data-flickity='{"pageDots": false, "autoPlay": false, "wrapAround": true }'>
			<?php foreach ($profil_guru as $key => $value) {?>	
				<div class="carousel-item">
					<a href="<?=base_url()?>/panel/dist/upload/profil_guru/<?= $value->gambar ?>"  data-fancybox="images" data-caption="<?= $value->mengajar ?><br/><?= $value->nama_guru ?>">
					<div class="aparatur-box" style="border-radius:4px 4px 0 0;">
						<div class="imagecrop">
							<img src="<?=base_url()?>/panel/dist/upload/profil_guru/<?= $value->gambar ?>" alt="<?= $value->nama_guru ?>">
							<div class="title-bottom absfullbottom">
								<div>
								<h2 class="cwhite"><?= $value->mengajar ?></h2>
								<h3 class="cgrey1"><?= $value->nama_guru ?></h3>
								<div class="absensi difle-c">
									<div class="absensi-box bgorange difle-c">
										<p>Lihat Detail</p>
									</div>
								</div>
								</div>
							</div>
						</div>
					</div>	
					</a>
				</div> 
			<?php } ?>						
		</div>
		<div class="carousel c-nav" data-flickity='{ "asNavFor": ".c-main", "contain": true, "pageDots": false, "autoPlay": false, "wrapAround": true }'>
		<?php foreach ($profil_guru as $key => $value) {?>		
			<div class="carousel-item">	
				<div class="aparatur-thumb">
					<div class="imagecrop">
						<img src="<?=base_url()?>/panel/dist/upload/profil_guru/<?= $value->gambar ?>" alt="<?= $value->nama_guru ?>">
					</div>
				</div>
			</div>	
		<?php } ?>	
		</div>
	</div>
	
	<div class="aparaturmob">
		<div class="midaparatur relhid mt-15 bgwhite brd-5">
			<div class="headmodule bggrad-lr3 difle-l">
				<div class="headmodule-icon bg2 difle-c">
					<svg viewBox="0 0 24 24"><path d="M16 17V19H2V17S2 13 9 13 16 17 16 17M12.5 7.5A3.5 3.5 0 1 0 9 11A3.5 3.5 0 0 0 12.5 7.5M15.94 13A5.32 5.32 0 0 1 18 17V19H22V17S22 13.37 15.94 13M15 4A3.39 3.39 0 0 0 13.07 4.59A5 5 0 0 1 13.07 10.41A3.39 3.39 0 0 0 15 11A3.5 3.5 0 0 0 15 4Z" /></svg>
				</div>
				<div class="headmodule-title">
					<h1>Pendidik</h1>
				</div>
			</div>
			<div class="lembaga-container bggrey3" style="border-radius:0 0 5px 5px;">				
				<div class="carousel" data-flickity='{"pageDots": false, "autoPlay": true, "cellAlign": "left", "wrapAround": true }'>
				<?php foreach ($profil_guru as $key => $value) {?>	
					<div class="carousel-item">
						<a href="<?=base_url()?>/panel/dist/upload/profil_guru/<?= $value->gambar ?>"  data-fancybox="images" data-caption="<?= $value->mengajar ?><br/><?= $value->nama_guru ?>">
							<div class="midaparatur-row">
								<div class="wrespon">
									<div class="midaparatur-image">
										<div class="imagefull">
											<img src="<?=base_url()?>/panel/dist/upload/profil_guru/<?= $value->gambar ?>" alt="<?= $value->nama_guru ?>">
										</div>
									</div>
									<div class="midaparatur-title">
										<div style="align-self: start;">
											<h2><?= $value->mengajar ?></h2>
											<p><?= $value->nama_guru ?></p>
										</div>
										<div class="absensi difle-c" style="align-self: end;">			
											<div class="absensi-box bgorange difle-c">
												<p>Lihat Detail</p>
											</div>
										</div>
									</div>
								</div>	
							</div>
						</a>
					</div>	
				<?php } ?>
				</div>
			</div>
		</div>
	</div>
</div>

<!-- Galeri -->
<div class="relhid mt-15 bgwhite brd-5">
	<div class="mob-v">
	<div class="headmodule bggrad-lr3 difle-l">
		<div class="headmodule-icon bg2 difle-c">
			<svg viewBox="0 0 24 24"><path d="M20,4H16.83L15,2H9L7.17,4H4A2,2 0 0,0 2,6V18A2,2 0 0,0 4,20H20A2,2 0 0,0 22,18V6A2,2 0 0,0 20,4M20,18H4V6H8.05L9.88,4H14.12L15.95,6H20V18M12,7A5,5 0 0,0 7,12A5,5 0 0,0 12,17A5,5 0 0,0 17,12A5,5 0 0,0 12,7M12,15A3,3 0 0,1 9,12A3,3 0 0,1 12,9A3,3 0 0,1 15,12A3,3 0 0,1 12,15Z" /></svg>
		</div>
		<div class="headmodule-title">
		<h1>Galeri Foto</h1>
		</div>
	</div>
	</div>
	<div class="gal-formob">
	<div class="wrespon">
		<div class="galeri-head difle-c">
			<div>
			<h2>Galeri</h2>
			<h1>Foto</h1>
			<svg viewBox="0 0 32 32">
				<path d="M28,8.342H24.618l-1.1-2.173a2.959,2.959,0,0,0-2.649-1.624H11.136A2.959,2.959,0,0,0,8.487,6.169L7.382,8.342H4A2.357,2.357,0,0,0,1.646,10.7V25.1A2.357,2.357,0,0,0,4,27.455H28A2.357,2.357,0,0,0,30.354,25.1V10.7A2.357,2.357,0,0,0,28,8.342ZM9.119,6.491a2.253,2.253,0,0,1,2.017-1.237h9.728a2.253,2.253,0,0,1,2.017,1.237h0l.942,1.852H8.177ZM29.646,25.1A1.648,1.648,0,0,1,28,26.746H4A1.648,1.648,0,0,1,2.354,25.1V10.7A1.648,1.648,0,0,1,4,9.051H28A1.648,1.648,0,0,1,29.646,10.7Z"/><path d="M16,10.44a7.069,7.069,0,1,0,7.068,7.069A7.077,7.077,0,0,0,16,10.44Zm0,13.428a6.36,6.36,0,1,1,6.359-6.359A6.365,6.365,0,0,1,16,23.868Z"/><path d="M16,12.543a4.966,4.966,0,1,0,4.966,4.966A4.972,4.972,0,0,0,16,12.543Zm0,9.223a4.257,4.257,0,1,1,4.257-4.257A4.262,4.262,0,0,1,16,21.766Z"/>
			</svg>
			<a href="<?= base_url() ?>web_galery/galery"><p>Lihat Semua Album</p></a>
			</div>
		</div>
		
		<div class="galeri-isi">
			<div class="relhid marginmin-lr-4">
			<div class="options">
				<?php foreach ($galery as $key => $value) {                    
					$active = ($key == 0) ? 'active' : '';
						echo '<div class="option ' . $active . '">
						<div class="galeri-image">
							<div class="imagefull">
								<img src="'.base_url().'/panel/dist/upload/profil_galery/'.$value->gambar.'">
							</div>
						</div>
						<div class="shadow gradient-black-vert"></div>
							<div class="label">
								<div class="icon flexcenter">
									<svg viewBox="0 0 24 24">
									<path d="M4,4H7L9,2H15L17,4H20A2,2 0 0,1 22,6V18A2,2 0 0,1 20,20H4A2,2 0 0,1 2,18V6A2,2 0 0,1 4,4M12,7A5,5 0 0,0 7,12A5,5 0 0,0 12,17A5,5 0 0,0 17,12A5,5 0 0,0 12,7M12,9A3,3 0 0,1 15,12A3,3 0 0,1 12,15A3,3 0 0,1 9,12A3,3 0 0,1 12,9Z" />
									</svg>
								</div>
								<div class="info">
									<div class="main">
										<div class="mob-v"><p style="white-space: normal;word-wrap: break-word;">'.$value->judul_galeri.'...</p></div>
										<div class="desk-v"><p>'.$value->judul_galeri.'</p></div>
									</div>
								</div>
							</div>
							<a href="'.base_url().'/web_galery/detail_galery/'.$value->id_galeri.'">
							<div class="link-galeri">
							<p>Buka Album</p>
							</div>
							</a>
						</div>';					
					}
				?>   
			</div>
			</div>
		</div>
	</div>
	</div>
</div>
<!-- end Galeri -->
<script>
$(".option").click(function(){
   $(".option").removeClass("active");
   $(this).addClass("active");
   
});
</script>	
<script type="text/javascript">
	$(function () {
	var chart_widget;
		$(document).ready(function () {
			// Build the chart
			chart_widget = new Highcharts.Chart({
				chart: {
					renderTo: 'container_widget',
					plotBackgroundColor: null,
					plotBorderWidth: null,
					plotShadow: false
					},
					title: {
					text: 'Grafik'
					},
					yAxis: {
					title: {
					text: 'Jumlah (Jiwa)'
					}
					},
					xAxis: {
					categories:
					[
						['LAKI-LAKI <?= $count_pria;?>'],
						['PEREMPUAN <?= $count_wanita;?>'],
						['TOTAL <?= $count_siswa_aktif;?>'],
					]
						},
						legend: {
							enabled:false
						},
						plotOptions: {
							series: {
								colorByPoint: true
							},
							column: {
								pointPadding: 0,
								borderWidth: 0
							}
						},
						series: [{
							type: 'bar',
							name: 'Populasi',
							data: [
							['LAKI-LAKI',<?= $count_pria;?>],
							['PEREMPUAN',<?= $count_wanita;?>],
							['TOTAL',<?= $count_siswa_aktif;?>],
							]
						}]
					});
				});

		});
</script>
<div class="relhid statistik mt-15 bgwhite brd-5">
	<div class="head-population difle-c">
		<span class="c1" style="--i:1">s</span><span class="c1" style="--i:2">t</span><span class="c1" style="--i:3">a</span><span class="c1" style="--i:4">t</span><span class="c1" style="--i:5">i</span><span class="c1" style="--i:6">s</span><span class="c1" style="--i:7">t</span><span class="c1" style="--i:8">i</span><span class="c1" style="--i:9">k</span></span>
	</div>
	<div class="relhid p-10">
		<div class="wrespon">
			<div class="statleft">
			<div class="relative difle-l" style="align-self: start;">
				<div class="total-populasi">
					<p style="text-transform:uppercase;">Data <?= $sekolah['nama_sekolah'] ?></p>																																																																						
					<p>TAHUN PELAJARAN <b><?= $tp ?></b></p>
				</div>
				<div class="relhid difle-l" style="width:100%;">
					<div class="gender-box male">
						<div class="gender"></div>
						<div class="gender-inner"><div>
						<svg viewBox="0 0 24 24"><path d="M12 3C14.21 3 16 4.79 16 7S14.21 11 12 11 8 9.21 8 7 9.79 3 12 3M16 13.54C16 14.6 15.72 17.07 13.81 19.83L13 15L13.94 13.12C13.32 13.05 12.67 13 12 13S10.68 13.05 10.06 13.12L11 15L10.19 19.83C8.28 17.07 8 14.6 8 13.54C5.61 14.24 4 15.5 4 17V21H20V17C20 15.5 18.4 14.24 16 13.54Z" /></svg>
						<h2><?= $count_pria;?></h2>
						<p>LAKI-LAKI</p>
						</div>
					</div>
				</div>																								<div class="gender-box female">
				<div class="gender"></div>
					<div class="gender-inner">
						<div>
						<svg viewBox="0 0 24 24"><path d="M11.94 3C9.75 3.03 8 4.81 8 7C7.94 8.64 7.81 10.47 7.03 11.59C9.71 13.22 12 13 12 13C12 13 14.29 13.22 16.97 11.59C16.12 10.22 15.94 8.54 16 7C16 4.79 14.21 3 12 3H11.94M8.86 13.32C6 13.93 4 15.35 4 17V21H12L9 17H6.5M12 21L13.78 13.81C13.78 13.81 13 14 12 14C11 14 10.22 13.81 10.22 13.81M12 21H20V17C20 15.35 18 13.93 15.14 13.32L17.5 17H15Z" /></svg>
						<h2><?= $count_wanita;?></h2>
						<p>PEREMPUAN</p>
						</div>
					</div>
				</div>																																												</div>	
			</div>	
			<div class="statgraph">
			<div id="container_widget" style="max-width:100%;margin: 0 auto" class="home-chart"></div>
			</div>	
			</div>	
			<div class="statright flex-right">
				<div class="statright-content">
					<a href="#">
						<div class="icon-item difle-l">
							<div class="icon-stat difle-c bgyellow"><svg viewBox="0 0 24 24"><path d="M14,11.5A2.5,2.5 0 0,0 16.5,9A2.5,2.5 0 0,0 14,6.5A2.5,2.5 0 0,0 11.5,9A2.5,2.5 0 0,0 14,11.5M14,2C17.86,2 21,5.13 21,9C21,14.25 14,22 14,22C14,22 7,14.25 7,9A7,7 0 0,1 14,2M5,9C5,13.5 10.08,19.66 11,20.81L10,22C10,22 3,14.25 3,9C3,5.83 5.11,3.15 8,2.29C6.16,3.94 5,6.33 5,9Z"/></svg></div>
							<p><?= $sekolah['alamat'] ?></p>
						</div>
					</a>
					<a href="#">
						<div class="icon-item difle-l">
							<div class="icon-stat difle-c bgpink"><svg viewBox="0 0 16 16"><path d="M8.354 1.146a.5.5 0 0 0-.708 0l-6 6A.5.5 0 0 0 1.5 7.5v7a.5.5 0 0 0 .5.5h4.5a.5.5 0 0 0 .5-.5v-4h2v4a.5.5 0 0 0 .5.5H14a.5.5 0 0 0 .5-.5v-7a.5.5 0 0 0-.146-.354L13 5.793V2.5a.5.5 0 0 0-.5-.5h-1a.5.5 0 0 0-.5.5v1.293zM2.5 14V7.707l5.5-5.5 5.5 5.5V14H10v-4a.5.5 0 0 0-.5-.5h-3a.5.5 0 0 0-.5.5v4z"/></svg></div>
							<p><?= $sekolah['npsn'] ?></p>
						</div>
					</a>
					<a href="#">
						<div class="icon-item difle-l">
							<div class="icon-stat difle-c bgcyan"><svg viewBox="0 0 16 16"> <path d="M2 2a2 2 0 0 1 2-2h8a2 2 0 0 1 2 2v13.5a.5.5 0 0 1-.777.416L8 13.101l-5.223 2.815A.5.5 0 0 1 2 15.5zm2-1a1 1 0 0 0-1 1v12.566l4.723-2.482a.5.5 0 0 1 .554 0L13 14.566V2a1 1 0 0 0-1-1z"/></svg></div>
							<p><?= $sekolah['sekola_status'] ?></p>
						</div>
					</a>
					<a href="#">
						<div class="icon-item difle-l">
							<div class="icon-stat difle-c bgblue"><svg viewBox="0 0 16 16"><path d="M0 4a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v8a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2zm2-1a1 1 0 0 0-1 1v.217l7 4.2 7-4.2V4a1 1 0 0 0-1-1zm13 2.383-4.708 2.825L15 11.105zm-.034 6.876-5.64-3.471L8 9.583l-1.326-.795-5.64 3.47A1 1 0 0 0 2 13h12a1 1 0 0 0 .966-.741M1 11.105l4.708-2.897L1 5.383z"/></svg></div>
							<p><?= $sekolah['email'] ?></p>
						</div>
					</a>
					<a href="#">
						<div class="icon-item difle-l">
							<div class="icon-stat difle-c bg2"><svg viewBox="0 0 16 16"><path d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8m7.5-6.923c-.67.204-1.335.82-1.887 1.855q-.215.403-.395.872c.705.157 1.472.257 2.282.287zM4.249 3.539q.214-.577.481-1.078a7 7 0 0 1 .597-.933A7 7 0 0 0 3.051 3.05q.544.277 1.198.49zM3.509 7.5c.036-1.07.188-2.087.436-3.008a9 9 0 0 1-1.565-.667A6.96 6.96 0 0 0 1.018 7.5zm1.4-2.741a12.3 12.3 0 0 0-.4 2.741H7.5V5.091c-.91-.03-1.783-.145-2.591-.332M8.5 5.09V7.5h2.99a12.3 12.3 0 0 0-.399-2.741c-.808.187-1.681.301-2.591.332zM4.51 8.5c.035.987.176 1.914.399 2.741A13.6 13.6 0 0 1 7.5 10.91V8.5zm3.99 0v2.409c.91.03 1.783.145 2.591.332.223-.827.364-1.754.4-2.741zm-3.282 3.696q.18.469.395.872c.552 1.035 1.218 1.65 1.887 1.855V11.91c-.81.03-1.577.13-2.282.287zm.11 2.276a7 7 0 0 1-.598-.933 9 9 0 0 1-.481-1.079 8.4 8.4 0 0 0-1.198.49 7 7 0 0 0 2.276 1.522zm-1.383-2.964A13.4 13.4 0 0 1 3.508 8.5h-2.49a6.96 6.96 0 0 0 1.362 3.675c.47-.258.995-.482 1.565-.667m6.728 2.964a7 7 0 0 0 2.275-1.521 8.4 8.4 0 0 0-1.197-.49 9 9 0 0 1-.481 1.078 7 7 0 0 1-.597.933M8.5 11.909v3.014c.67-.204 1.335-.82 1.887-1.855q.216-.403.395-.872A12.6 12.6 0 0 0 8.5 11.91zm3.555-.401c.57.185 1.095.409 1.565.667A6.96 6.96 0 0 0 14.982 8.5h-2.49a13.4 13.4 0 0 1-.437 3.008M14.982 7.5a6.96 6.96 0 0 0-1.362-3.675c-.47.258-.995.482-1.565.667.248.92.4 1.938.437 3.008zM11.27 2.461q.266.502.482 1.078a8.4 8.4 0 0 0 1.196-.49 7 7 0 0 0-2.275-1.52c.218.283.418.597.597.932m-.488 1.343a8 8 0 0 0-.395-.872C9.835 1.897 9.17 1.282 8.5 1.077V4.09c.81-.03 1.577-.13 2.282-.287z"/></svg></div>
							<p><?= $sekolah['web'] ?></p>
						</div>
					</a>
					<a href="#">
						<div class="icon-item difle-l">
							<div class="icon-stat difle-c bgviola"><svg viewBox="0 0 16 16"><path d="M3.654 1.328a.678.678 0 0 0-1.015-.063L1.605 2.3c-.483.484-.661 1.169-.45 1.77a17.6 17.6 0 0 0 4.168 6.608 17.6 17.6 0 0 0 6.608 4.168c.601.211 1.286.033 1.77-.45l1.034-1.034a.678.678 0 0 0-.063-1.015l-2.307-1.794a.68.68 0 0 0-.58-.122l-2.19.547a1.75 1.75 0 0 1-1.657-.459L5.482 8.062a1.75 1.75 0 0 1-.46-1.657l.548-2.19a.68.68 0 0 0-.122-.58zM1.884.511a1.745 1.745 0 0 1 2.612.163L6.29 2.98c.329.423.445.974.315 1.494l-.547 2.19a.68.68 0 0 0 .178.643l2.457 2.457a.68.68 0 0 0 .644.178l2.189-.547a1.75 1.75 0 0 1 1.494.315l2.306 1.794c.829.645.905 1.87.163 2.611l-1.034 1.034c-.74.74-1.846 1.065-2.877.702a18.6 18.6 0 0 1-7.01-4.42 18.6 18.6 0 0 1-4.42-7.009c-.362-1.03-.037-2.137.703-2.877z"/></svg></div>
							<p><?= $sekolah['telp'] ?></p>
						</div>
					</a>
				</div>
			</div>	
		</div>
	</div>
</div>	
	
<div class="relhid covid-custom mt-15">
	<div class="covid-container">
		<div class="wrespon mlr-min-4">
			<div class="covidtitle difle-c">
				<div class="virus difle-c">
					<!-- <img src=""/> -->
				</div>
			<div>
			<h3><?= $sekolah['nama_sekolah'] ?></h3>	
		</div>
	</div>
	<div class="coviddata">
	<script type="text/javascript">
		var csrfParam = 'sidcsrf';
		var getCsrfToken = () => document.cookie.match(new RegExp(csrfParam +'=(\\w+)'))[1]
	</script>
	<script src="<?= base_url()?>website/assets/js/anti-csrf619b.js?v40fdecf5f3d7feb30f54550ffc9220e6"></script>
	<div class="wrespon mlr-min-4">
		<div class="covid-item">
			<div class="default">
				<div class="head-covid difle-c"><p>PPDB Diterima</p></div>
				<div class="covid-inner difle-c">
					<?php
					$sisa_kuota = 0;
					foreach ($jml_kuota as $ku) 
					foreach ($jml_pend as $pen){
					$sisa_kuota = $ku['total_kuota'] - $pen['total'];
					?>             
					<div>
						<h2><?= $pen['total'] ?></h2>
						<p>Orang</p>
					</div>
					<?php } ?>   
				</div>
			</div>
		</div>
		<div class="covid-item">
			<div class="info">
				<div class="head-covid difle-c"><p>PPDB Kuota</p></div>
				<div class="covid-inner difle-c">
				<?php
					$sisa_kuota = 0;
					foreach ($jml_kuota as $ku) 
					foreach ($jml_pend as $pen){
					$sisa_kuota = $ku['total_kuota'] - $pen['total'];
					?>             
					<div>
						<h2><?= $ku['total_kuota'] ?></h2>
						<p>Orang</p>
					</div>
					<?php } ?>
				</div>
			</div>
		</div>
		<div class="covid-item">
			<div class="primary">
				<div class="head-covid difle-c"><p>Siswa Lulus</p></div>
				<div class="covid-inner difle-c">
					<div>
						<h2><?= $count_th_lulus;?></h2>
						<p>Orang</p>
					</div>
				</div>
			</div>
		</div>
		<div class="covid-item">
			<div class="secondary">
				<div class="head-covid difle-c"><p>Alumni</p></div>
				<div class="covid-inner difle-c">
					<div>
						<h2><?= $count_data_lulus;?></h2>
						<p>Orang</p>
					</div>
				</div>
			</div>
		</div>
		<div class="covid-item">
			<div class="warning">
				<div class="head-covid difle-c"><p>Kelas Aktiv</p></div>
				<div class="covid-inner difle-c">
					<div>
						<h2><?= $count_rombel;?></h2>
						<p>Orang</p>
					</div>
				</div>
			</div>
		</div>
		<div class="covid-item">
			<div class="danger">
				<div class="head-covid difle-c"><p>Siswa Aktiv</p></div>
				<div class="covid-inner difle-c">
					<div>
						<h2><?= $count_siswa_aktif;?></h2>
						<p>Orang</p>
					</div>
				</div>
			</div>
		</div>
		<div class="covid-item">
			<div class="success">
				<div class="head-covid difle-c"><p>Online</p></div>
				<div class="covid-inner difle-c">
					<div>
						<h2><?php echo $pengunjungonline ?></h2>
						<p>Orang</p>
					</div>
				</div>
			</div>
			</div>
		</div>
	</div>
</div>
</div>
</div>
</div>					
</div>

<!-- link samping -->
<div class="stickyside-right trans-w">
	<div class="stickyside-top">						
		<div class="iconmenu pt-15 pb-15 difle-c">
			<div>
				<div class="tooltip2" data-toggle="modal" data-target="#identitas">
					<div class="icon-stat difle-c bgpink">
						<svg viewBox="0 0 16 16">
							<path d="M8.707 1.5a1 1 0 0 0-1.414 0L.646 8.146a.5.5 0 0 0 .708.708L2 8.207V13.5A1.5 1.5 0 0 0 3.5 15h9a1.5 1.5 0 0 0 1.5-1.5V8.207l.646.647a.5.5 0 0 0 .708-.708L13 5.793V2.5a.5.5 0 0 0-.5-.5h-1a.5.5 0 0 0-.5.5v1.293zM13 7.207V13.5a.5.5 0 0 1-.5.5h-9a.5.5 0 0 1-.5-.5V7.207l5-5z"/>
						</svg>
					</div>
					<span class="tooltip2text">Profil Sekolah</span>
				</div>
				<a class="tooltip2" href="https://www.kemdikbud.go.id/">
					<div class="icon-stat difle-c bgyellow">
						<svg viewBox="0 0 16 16">
							<path d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8m7.5-6.923c-.67.204-1.335.82-1.887 1.855q-.215.403-.395.872c.705.157 1.472.257 2.282.287zM4.249 3.539q.214-.577.481-1.078a7 7 0 0 1 .597-.933A7 7 0 0 0 3.051 3.05q.544.277 1.198.49zM3.509 7.5c.036-1.07.188-2.087.436-3.008a9 9 0 0 1-1.565-.667A6.96 6.96 0 0 0 1.018 7.5zm1.4-2.741a12.3 12.3 0 0 0-.4 2.741H7.5V5.091c-.91-.03-1.783-.145-2.591-.332M8.5 5.09V7.5h2.99a12.3 12.3 0 0 0-.399-2.741c-.808.187-1.681.301-2.591.332zM4.51 8.5c.035.987.176 1.914.399 2.741A13.6 13.6 0 0 1 7.5 10.91V8.5zm3.99 0v2.409c.91.03 1.783.145 2.591.332.223-.827.364-1.754.4-2.741zm-3.282 3.696q.18.469.395.872c.552 1.035 1.218 1.65 1.887 1.855V11.91c-.81.03-1.577.13-2.282.287zm.11 2.276a7 7 0 0 1-.598-.933 9 9 0 0 1-.481-1.079 8.4 8.4 0 0 0-1.198.49 7 7 0 0 0 2.276 1.522zm-1.383-2.964A13.4 13.4 0 0 1 3.508 8.5h-2.49a6.96 6.96 0 0 0 1.362 3.675c.47-.258.995-.482 1.565-.667m6.728 2.964a7 7 0 0 0 2.275-1.521 8.4 8.4 0 0 0-1.197-.49 9 9 0 0 1-.481 1.078 7 7 0 0 1-.597.933M8.5 11.909v3.014c.67-.204 1.335-.82 1.887-1.855q.216-.403.395-.872A12.6 12.6 0 0 0 8.5 11.91zm3.555-.401c.57.185 1.095.409 1.565.667A6.96 6.96 0 0 0 14.982 8.5h-2.49a13.4 13.4 0 0 1-.437 3.008M14.982 7.5a6.96 6.96 0 0 0-1.362-3.675c-.47.258-.995.482-1.565.667.248.92.4 1.938.437 3.008zM11.27 2.461q.266.502.482 1.078a8.4 8.4 0 0 0 1.196-.49 7 7 0 0 0-2.275-1.52c.218.283.418.597.597.932m-.488 1.343a8 8 0 0 0-.395-.872C9.835 1.897 9.17 1.282 8.5 1.077V4.09c.81-.03 1.577-.13 2.282-.287z"/>
						</svg>
					</div>
					<span class="tooltip2text">Kemendikdub</span>
				</a>	
				<a class="tooltip2" href="<?= base_url()?>web_kegiatan/contact">
					<div class="icon-stat difle-c bgcyan">
						<svg viewBox="0 0 16 16">
							<path d="M3.654 1.328a.678.678 0 0 0-1.015-.063L1.605 2.3c-.483.484-.661 1.169-.45 1.77a17.6 17.6 0 0 0 4.168 6.608 17.6 17.6 0 0 0 6.608 4.168c.601.211 1.286.033 1.77-.45l1.034-1.034a.678.678 0 0 0-.063-1.015l-2.307-1.794a.68.68 0 0 0-.58-.122l-2.19.547a1.75 1.75 0 0 1-1.657-.459L5.482 8.062a1.75 1.75 0 0 1-.46-1.657l.548-2.19a.68.68 0 0 0-.122-.58zM1.884.511a1.745 1.745 0 0 1 2.612.163L6.29 2.98c.329.423.445.974.315 1.494l-.547 2.19a.68.68 0 0 0 .178.643l2.457 2.457a.68.68 0 0 0 .644.178l2.189-.547a1.75 1.75 0 0 1 1.494.315l2.306 1.794c.829.645.905 1.87.163 2.611l-1.034 1.034c-.74.74-1.846 1.065-2.877.702a18.6 18.6 0 0 1-7.01-4.42 18.6 18.6 0 0 1-4.42-7.009c-.362-1.03-.037-2.137.703-2.877z"/>
						</svg>
					</div>
					<span class="tooltip2text">Contact</span>
				</a>
				<a class="tooltip2" href="<?= base_url()?>web_berita">
					<div class="icon-stat difle-c bgblue">
						<svg viewBox="0 0 16 16">
							<path d="M0 2.5A1.5 1.5 0 0 1 1.5 1h11A1.5 1.5 0 0 1 14 2.5v10.528c0 .3-.05.654-.238.972h.738a.5.5 0 0 0 .5-.5v-9a.5.5 0 0 1 1 0v9a1.5 1.5 0 0 1-1.5 1.5H1.497A1.497 1.497 0 0 1 0 13.5zM12 14c.37 0 .654-.211.853-.441.092-.106.147-.279.147-.531V2.5a.5.5 0 0 0-.5-.5h-11a.5.5 0 0 0-.5.5v11c0 .278.223.5.497.5z"/>
  							<path d="M2 3h10v2H2zm0 3h4v3H2zm0 4h4v1H2zm0 2h4v1H2zm5-6h2v1H7zm3 0h2v1h-2zM7 8h2v1H7zm3 0h2v1h-2zm-3 2h2v1H7zm3 0h2v1h-2zm-3 2h2v1H7zm3 0h2v1h-2z"/>
						</svg>
					</div>
					<span class="tooltip2text">Berita</span>
				</a>
				<a class="tooltip2" href="<?= base_url()?>web_galery/galery">
					<div class="icon-stat difle-c bgviola">
						<svg viewBox="0 0 16 16">
							<path d="M.002 3a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v10a2 2 0 0 1-2 2h-12a2 2 0 0 1-2-2zm1 9v1a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1V9.5l-3.777-1.947a.5.5 0 0 0-.577.093l-3.71 3.71-2.66-1.772a.5.5 0 0 0-.63.062zm5-6.5a1.5 1.5 0 1 0-3 0 1.5 1.5 0 0 0 3 0"/>
						</svg>
					</div>
					<span class="tooltip2text">Galeri</span>
				</a>
				<a class="tooltip2" href="<?= base_url()?>web_galery/video">
					<div class="icon-stat difle-c bgpink">
						<svg viewBox="0 0 16 16">
							<path d="M6 10.117V5.883a.5.5 0 0 1 .757-.429l3.528 2.117a.5.5 0 0 1 0 .858l-3.528 2.117a.5.5 0 0 1-.757-.43z"/>
  							<path d="M4 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h8a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2zm0 1h8a1 1 0 0 1 1 1v12a1 1 0 0 1-1 1H4a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1"/>
						</svg>
					</div>
					<span class="tooltip2text">Video</span>
				</a>
				<a class="tooltip2" href="<?= base_url()?>ppdb/home">
					<div class="icon-stat difle-c bg1">
						<svg viewBox="0 0 16 16">
							<path d="M7 2.5a.5.5 0 0 1 .5-.5h7a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-7a.5.5 0 0 1-.5-.5zM2 1a2 2 0 0 0-2 2v2a2 2 0 0 0 2 2h2a2 2 0 0 0 2-2V3a2 2 0 0 0-2-2zm0 8a2 2 0 0 0-2 2v2a2 2 0 0 0 2 2h2a2 2 0 0 0 2-2v-2a2 2 0 0 0-2-2zm.854-3.646a.5.5 0 0 1-.708 0l-1-1a.5.5 0 1 1 .708-.708l.646.647 1.646-1.647a.5.5 0 1 1 .708.708zm0 8a.5.5 0 0 1-.708 0l-1-1a.5.5 0 0 1 .708-.708l.646.647 1.646-1.647a.5.5 0 0 1 .708.708zM7 10.5a.5.5 0 0 1 .5-.5h7a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-7a.5.5 0 0 1-.5-.5zm0-5a.5.5 0 0 1 .5-.5h5a.5.5 0 0 1 0 1h-5a.5.5 0 0 1-.5-.5m0 8a.5.5 0 0 1 .5-.5h5a.5.5 0 0 1 0 1h-5a.5.5 0 0 1-.5-.5"/>
						</svg>
					</div>
					<span class="tooltip2text">PPDB</span>
				</a>
				<a class="tooltip2" href="<?= base_url()?>lulus/home">
					<div class="icon-stat difle-c bg2">
						<svg viewBox="0 0 16 16">
							<path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14m0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16"/>
  							<path d="m8.93 6.588-2.29.287-.082.38.45.083c.294.07.352.176.288.469l-.738 3.468c-.194.897.105 1.319.808 1.319.545 0 1.178-.252 1.465-.598l.088-.416c-.2.176-.492.246-.686.246-.275 0-.375-.193-.304-.533zM9 4.5a1 1 0 1 1-2 0 1 1 0 0 1 2 0"/>
						</svg>
					</div>
					<span class="tooltip2text">SKL</span>
				</a>	
			</div>
		</div>						
	</div>
</div>
</div>
</div>
<!-- end link samping -->	

<div class="relhid">
				
<div class="visitor-bottom difle-l">
	<div class="home-visitor-left difle-l">
		<div class="visitor-info difle-c">Pengunjung :</div>
		<div class='console-container'><span id='text'></span><div class='console-underscore' id='console'>&#95;</div></div>
	</div>
	<div class="visitor-bottom-right">
		<div id="flip">
			<div><div>Hari ini : <b><?php echo $pengunjunghariini ?> orang</b></div></div>
			<div><div>Total : <b><?php echo $totalpengunjung ?> orang</b></div></div>
			<div><div>Online : <b><?php echo $pengunjungonline ?> orang</b></div></div>
		</div>
	</div>
</div>

<script>
consoleText(['Hari Ini : <?php echo $pengunjunghariini ?>', 'Total : <?php echo $totalpengunjung ?>', 'Online : <?php echo $pengunjungonline ?> ',], 'text',['tomato','rebeccapurple','lightblue']);

function consoleText(words, id, colors) {
  if (colors === undefined) colors = ['#fff'];
  var visible = true;
  var con = document.getElementById('console');
  var letterCount = 1;
  var x = 1;
  var waiting = false;
  var target = document.getElementById(id)
  target.setAttribute('style', 'color:#fff' + colors[0])
  window.setInterval(function() {

    if (letterCount === 0 && waiting === false) {
      waiting = true;
      target.innerHTML = words[0].substring(0, letterCount)
      window.setTimeout(function() {
        var usedColor = colors.shift();
        colors.push(usedColor);
        var usedWord = words.shift();
        words.push(usedWord);
        x = 1;
        target.setAttribute('style', 'color:#fff' + colors[0])
        letterCount += x;
        waiting = false;
      }, 1000)
    } else if (letterCount === words[0].length + 1 && waiting === false) {
      waiting = true;
      window.setTimeout(function() {
        x = -1;
        letterCount += x;
        waiting = false;
      }, 1000)
    } else if (waiting === false) {
      target.innerHTML = words[0].substring(0, letterCount)
      letterCount += x;
    }
  }, 90)
  window.setInterval(function() {
    if (visible === true) {
      con.className = 'console-underscore hidden'
      visible = false;

    } else {
      con.className = 'console-underscore'

      visible = true;
    }
  }, 400)
}
</script>			
</div>
</div>

<div class="relhid mt-15">
	<div class="marginpage">			
		<div class="wrespon mlr-min-7">
			<div class="colbottom desk-v">
				<div class="wrespon headline bggrey3 hovcontent">	
					<div class="headline-title difle-l">
						<div class="p-15">
							<a href="<?= base_url()?>">
								<div class="wrespon">
									<div class="headline-posting">
										<div class="headline-date difle-c">
											<img src="<?= base_url() ?>panel/dist/upload/logo/<?= $sekolah['logo'] ?>"  class="card-img-top" alt="<?= $sekolah['nama_sekolah'] ?>" style="width:100%;max-width:300px">		
										</div>									
									</div>
									<div class="headline-title-inner">
										<h2><?= $sekolah['nama_sekolah'] ?></h2>									
										<p class="text-light">
											<?= $sekolah['alamat'] ?> <br>
											<?= $sekolah['kecamatan'] ?>, <?= $sekolah['kota'] ?><br>
											<?= $sekolah['provinsi'] ?>, <?= $sekolah['kodepos'] ?> <br>
											<i class="bi bi-envelope"></i> <a href="mailto:<?= $sekolah['email'] ?>"><?= $sekolah['email'] ?></a><br>
											<i class="bi bi-phone"></i> <?= $sekolah['telp'] ?>
										</p>
									</div>
								</div>
							</a>	
						</div>
					</div>
				</div>
				<div class="relhid mt-15 bgwhite brd-5">
					<div class="mob-v">
						<div class="headmodule bggrad-lr3 difle-l">
							<div class="headmodule-icon bg2 difle-c">
								<svg viewBox="0 0 16 16">
									<path d="M6 10.117V5.883a.5.5 0 0 1 .757-.429l3.528 2.117a.5.5 0 0 1 0 .858l-3.528 2.117a.5.5 0 0 1-.757-.43z"/>
  									<path d="M4 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h8a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2zm0 1h8a1 1 0 0 1 1 1v12a1 1 0 0 1-1 1H4a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1"/>
								</svg>
							</div>
							<div class="headmodule-title">
								<h1>Galeri Video</h1>
							</div>
						</div>
					</div>
					<div class="gal-formob">
					<div class="wrespon">
						<div class="galeri-head difle-c">
							<div>
							<h2>Galeri</h2>
							<h1>Video</h1>
							<svg viewBox="0 0 16 16">
								<path d="M6 10.117V5.883a.5.5 0 0 1 .757-.429l3.528 2.117a.5.5 0 0 1 0 .858l-3.528 2.117a.5.5 0 0 1-.757-.43z"/>
  								<path d="M4 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h8a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2zm0 1h8a1 1 0 0 1 1 1v12a1 1 0 0 1-1 1H4a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1"/>
							</svg>
							<a href="galeri.html"><p>Lihat Semua Video</p></a>
							</div>
						</div>
						
						<div class="galeri-isi">
							<div class="relhid marginmin-lr-4">
								<div class="options">
									<?php foreach ($video as $key => $value) {                    
										$active = ($key == 0) ? 'active' : '';
											echo '<div class="option ' . $active . '">
											<div class="galeri-image">
												<div class="imagefull">
													<img src="'.base_url().'/panel/dist/upload/profil_video/'.$value->gambar_video.'">
												</div>
											</div>
											<div class="shadow gradient-black-vert"></div>
												<div class="label">
													<div class="icon flexcenter">
														<svg viewBox="0 0 24 24">
														<path d="M4,4H7L9,2H15L17,4H20A2,2 0 0,1 22,6V18A2,2 0 0,1 20,20H4A2,2 0 0,1 2,18V6A2,2 0 0,1 4,4M12,7A5,5 0 0,0 7,12A5,5 0 0,0 12,17A5,5 0 0,0 17,12A5,5 0 0,0 12,7M12,9A3,3 0 0,1 15,12A3,3 0 0,1 12,15A3,3 0 0,1 9,12A3,3 0 0,1 12,9Z" />
														</svg>
													</div>
													<div class="info">
														<div class="main">
															<div class="mob-v"><p style="white-space: normal;word-wrap: break-word;">'.$value->judul_video.'</p></div>
															<div class="desk-v"><p>'.$value->judul_video.'</p></div>
														</div>
													</div>
												</div>
												<a target="_blank" href="'.$value->url_video.'">
													<div class="link-galeri">
														<p>Buka Video</p>
													</div>
												</a>
											</div>';					
										}
									?>   
								</div>
							</div>
						</div>
					</div>
					</div>
				</div>

				<script>
				$(".option").click(function(){
				$(".option").removeClass("active");
				$(this).addClass("active");
				
				});
				</script>	
			</div>
		
			<div class="colbottom">
				<div class="carousel c-navmap" data-flickity='{ "asNavFor": ".c-mainmap", "contain": true, "pageDots": false, "autoPlay": false, "cellAlign": "left", "wrapAround": false }'>
						<div class="carousel-item">
							<div class="maphead difle-c">
								<div class="maphead-title difle-c">
								<svg viewBox="0 0 24 24"><path d="M12,11.5A2.5,2.5 0 0,1 9.5,9A2.5,2.5 0 0,1 12,6.5A2.5,2.5 0 0,1 14.5,9A2.5,2.5 0 0,1 12,11.5M12,2A7,7 0 0,0 5,9C5,14.25 12,22 12,22C12,22 19,14.25 19,9A7,7 0 0,0 12,2Z" /></svg><?= $sekolah['nama_sekolah'] ?></div>
							</div> 
						</div> 						
					</div>
					<div class="carousel c-mainmap" data-flickity='{"pageDots": false, "autoPlay": false, "wrapAround": false }'>
						<div class="carousel-item">	
							<div class="relhid">
								<div id="office_satelite" class="maphome-height"><?= $sekolah['maps_kecil'] ?></div>
							</div>						
						</div>				
					</div>
				</div>
			</div>
			
		</div>	
	</div>
</div>
