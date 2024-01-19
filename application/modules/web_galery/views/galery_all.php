<div class="forscroll">
	<div class="full-wrapper clearfix">
		<div class="asimse pageopen">

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

      <div class="header bggrad-lr2">
				<div class="head-inner marginpage fadeIn2">
					<div class="wrespon">
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
                  <div class="title-address">
                    <p class="cwhite">Kecamatan <?= $sekolah['kecamatan'] ?>, Kabupaten <?= $sekolah['kota'] ?>, Provinsi <?= $sekolah['provinsi'] ?></p>
                  </div>
                </div>
              </div>
            </div>
          </div>							
        </div>
				<div class="headright">
					<div class="relative">
						<div class="slideshow trans-h">
							<div class="camerabg">
								<div class="imagefull">		
                  <div data-src="<?= base_url(); ?>panel/dist/upload/logo/<?= $sekolah['banner'] ?>">
                    <img src="<?= base_url(); ?>panel/dist/upload/logo/<?= $sekolah['banner'] ?>">
                  </div>        
				        <div class="imagecover">
              <div class="bgdot">            
            </div>
          </div>
        </div>
        <div class="pagetitle difle-r">		
					<h1 style="color: black;"><?= $title; ?></h1>
			  </div>								
      </div>
		</div>
		<div class="headgraph absfulltop desk-v">
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
				<div class="relhid pagestickymain trans-w">
					<div class="mob-area p-15">
						<div class="content-area">
              <div id="printing">
                <div class="printonly">	
                  <div class="print-header difle-c">
                    <img src="<?= base_url() ?>panel/dist/upload/logo/<?= $sekolah['logo'] ?>"/>
                    <div>
                    <h1><?= $sekolah['nama_sekolah'] ?></h1>
                    <p>Kec. <?= $sekolah['kecamatan'] ?>, Kab. <?= $sekolah['kota'] ?> - <?= $sekolah['provinsi'] ?></p>
                  </div>
                </div>
              </div>
              <!-- <div class="relhid sub-pagetitle difle-c">
                <div class="pagetitle-icon-single"><img src="<?= base_url() ?>panel/dist/upload/logo/<?= $sekolah['logo'] ?>"/></div>
                  <h2><?= $title; ?></h2>
                </div> -->
              <div class="content-category difle-l mb-10">
                <div class="category-icon">
                  <img src="<?= base_url() ?>panel/dist/upload/logo/<?= $sekolah['logo'] ?>"/>
                </div>
                <p><?= $title; ?></p>
              </div>
              <div class="head-content"><?= $title; ?> All</div>	
            
              <div class="imglist"></div>
              <div class="relhid pagestickymain trans-w">                
                 <div class="wrespon gal non-brd-pd mlr-min-5 mt-15">
                 <?php foreach ($gambar as $p) : ?>
						        <div class="column2">
                      <a href="<?= base_url().$this->uri->segment(1, 0) ?>/detail_galery/<?= $p['id_galeri'] ?>">
                        <div class="gallery-absolute trans-def imagefull">
                         <img class="trans-def" src="<?= base_url() ?>/panel/dist/upload/profil_galery/<?= $p['gambar'] ?>">
                        </div>
                        <div class="gallery-album">
                          <div class="gallery-scale trans-h">
                            <div class="book">
                              <div class="imagefull">
                                <img src="<?= base_url() ?>/panel/dist/upload/profil_galery/<?= $p['gambar'] ?>">
                              </div>
                            </div>
                          </div>
                        </div>
                        <div class="gallery-title difle-l trans-w">
                          <h3><?= $p['judul_galeri'] ?></h3>
                        </div>
                      </a>
                    </div>
                  <?php endforeach ?>
                 </div>  
                </div>   
              
            </div>
          </div>      
      </div>	
		</div>

    <div class="pagestickyside trans-w">
			<div class="stickyside-top">
				<div class="relhid plr-15 pb-15">
									
        <div class="profile mt-15">
          <div class="relhid profile-inner mb-15">
            <div class="profile-icon"><svg viewBox="0 0 16 16"><rect width="16" height="16" id="icon-bound" fill="none" /><path d="M16,3V1c-4.188,0-7,2.812-7,7v7h7V8h-5C11,4.916,12.916,3,16,3z M0,8v7h7V8H2c0-3.084,1.916-5,5-5V1C2.812,1,0,3.812,0,8z"/></svg></div>
            <p><?= $sekolah['nama_sekolah'] ?> berada di Kecamatan  <?= $sekolah['kecamatan'] ?>, Kabupaten  <?= $sekolah['kota'] ?>, Provinsi  <?= $sekolah['provinsi'] ?>.
                Memiliki total Siswa Aktif <b><?= $count_siswa_aktif;?></b> orang.
                Terdiri dari,
                <b><?= $count_pria;?></b> orang penduduk laki-laki dan
                <b><?= $count_wanita;?></b> orang penduduk perempuan
            </p>
          </div>
	        <div class="headarrow" style="margin:0 0 5px;"><h1>Identitas Sekolah</h1></div>
            <table class="identitas-table mb-15" width="100%">
              <tr>
                <td>Kode Sekolah</td><td style="width:15px;text-align:center;">:</td><td> <?= $sekolah['npsn'] ?></td>
              </tr>
              <tr>
                <td>Kecamatan</td><td style="width:15px;text-align:center;">:</td><td> <?= $sekolah['kecamatan'] ?></td>
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
	        <div class="headarrow" style="margin:0 0 5px;"><h1>Alamat</h1></div>
	          <p class="mb-15"><?= $sekolah['alamat'] ?></p>		 		
          <div class="headarrow" style="margin:0 0 5px;"><h1>Jam Kerja</h1></div>
              <table class="identitas-table mb-15" width="100%">
                <tbody>
                  <tr>
                    <td>Senin</td>
                    <td style="text-align:right;">08:00:00 - 13:00:00</td>
                  </tr>
                  <tr>
                    <td>Selasa</td>
                    <td style="text-align:right;">08:00:00 - 13:00:00</td>
                  </tr>
                  <tr>
                    <td>Rabu</td>
                    <td style="text-align:right;">08:00:00 - 13:00:00</td>
                  </tr>
                  <tr>
                    <td>Kamis</td>
                    <td style="text-align:right;">08:00:00 - 13:00:00</td>
                  </tr>
                  <tr>
                    <td>Jumat</td>
                    <td style="text-align:right;">08:00:00 - 13:00:00</td>
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
</div>
</div>
</div> 
<!-- batas bawah -->

