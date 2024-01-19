<div class="table-responsive organisasi">
<table class="custom-table withline" style="width:100%;">
    <thead>
        <tr>
            <th style="text-align:center;">NIS</th>
            <th style="text-align:center;">Nama Siswa</th>
            <th style="text-align:center;">Tahun Pelajaran</th> 
            <th style="text-align:center;">Keterangan</th>                      
        </tr>
    </thead>
    <tbody>   
        <?php if ($beasiswa['nis'] == 0) { ?>
            Belum ada informasi
        <?php } else { ?>    
        <tr>             
            <td><?= $beasiswa['nis'] ?></td> 
            <td><?= $beasiswa['nama_siswa'] ?></td>		
            <td><?= $beasiswa['th_pelajaran'] ?></td>
            <td><?= $beasiswa['keterangan'] ?></td>                      
        </tr> 
        <?php } ?>                        
    </tbody>
</table>
</div>      