<div class="table-responsive organisasi">
	<table class="custom-table withline" style="width:100%;">	
        <head>
            <tr>
                <th style="text-align:center;">NAMA PENDIDIK</th>
                <th style="text-align:center;">NIP/NRPTK/NUPTK</th>
            </tr>
        </head>	
		<tbody>
			<tr>               
                <td> <b><?= $webinar['nama_pendidik'] ?></b> </td>     
                <td> <?= $webinar['nip'] ?> </td>                  
			</tr>
			<tr>
                <td style="width:45px;text-align:center;">SERTIFIKAT WEBINAR 1</td>
                <?php if ($webinar['webinar_1'] == '') { ?>
                <td class="foto-table"><div class="small-photo imagefull">Belum mengikuti webinar 1</div></td>   
                <?php } else { ?>
                    <td class="foto-table"><div class="small-photo imagefull"><a href="<?= base_url() ?>panel/dist/upload/sertifikat_webinar/<?= $webinar['webinar_1'] ?>"  data-fancybox="images" data-caption="<?= $webinar['nama_pendidik'] ?>"><img src="<?= base_url() ?>panel/dist/upload/sertifikat_webinar/<?= $webinar['webinar_1'] ?>"></a></div></td>
                <?php } ?>                
            </tr>
            <tr>
            <td style="width:45px;text-align:center;">SERTIFIKAT WEBINAR 2</td>
                <?php if ($webinar['webinar_2'] == '') { ?>
                <td class="foto-table"><div class="small-photo imagefull">Belum mengikuti webinar 2</div></td>   
                <?php } else { ?>
                    <td class="foto-table"><div class="small-photo imagefull"><a href="<?= base_url() ?>panel/dist/upload/sertifikat_webinar/<?= $webinar['webinar_2'] ?>"  data-fancybox="images" data-caption="<?= $webinar['nama_pendidik'] ?>"><img src="<?= base_url() ?>panel/dist/upload/sertifikat_webinar/<?= $webinar['webinar_2'] ?>"></a></div></td>
                <?php } ?>      
            </tr>
		</tbody>
	</table>
</div>
<div class="no-print">
    <div class="relhid difle-c mt-15 mb-15">
        <a class="difle-c" target="_blank" href="<?= base_url() ?>web_informasi/webinar_mpdf_cetak/<?= $webinar['nip'] ?>" title='Cetak'>
            <div class="btcustom bttall difle-c bg2 trans-w no-print">
                <svg viewBox="0 0 512 512"><path d="M329.956,399.834H182.044c-9.425,0-17.067,7.641-17.067,17.067s7.641,17.067,17.067,17.067h147.911 c9.425,0,17.067-7.641,17.067-17.067S339.381,399.834,329.956,399.834z M329.956,346.006H182.044c-9.425,0-17.067,7.641-17.067,17.067s7.641,17.067,17.067,17.067h147.911 c9.425,0,17.067-7.641,17.067-17.067S339.381,346.006,329.956,346.006z M472.178,133.907h-54.303V35.132c0-9.425-7.641-17.067-17.067-17.067H111.192c-9.425,0-17.067,7.641-17.067,17.067v98.775 H39.822C17.864,133.907,0,151.772,0,173.73v171.702c0,21.958,17.864,39.822,39.822,39.822h54.306v91.614 c0,9.425,7.641,17.067,17.067,17.067h289.61c9.425,0,17.067-7.641,17.067-17.067v-91.614h54.306 c21.958,0,39.822-17.864,39.822-39.822V173.73C512,151.773,494.136,133.907,472.178,133.907z M128.258,52.199h255.483v81.708 H128.258V52.199z M383.738,459.801H128.262c0-3.335,0-135.503,0-139.628h255.477C383.738,324.402,383.738,456.594,383.738,459.801 z M400.808,234.122h-43.443c-9.425,0-17.067-7.641-17.067-17.067s7.641-17.067,17.067-17.067h43.443 c9.425,0,17.067,7.641,17.067,17.067S410.234,234.122,400.808,234.122z"/></svg>
                <p style="margin:0 0 0 5px;">Print/Cetak</p>
            </div>
        </a>
    </div>
</div>
