<!-- ======= Sidebar ======= -->
<aside id="sidebar" class="sidebar">
  
    <div class="card">
      <div class="card-body profile-card pt-2 d-flex flex-column align-items-center">
        <img src="<?= base_url() ?>panel/dist/upload/profil_user/<?= $pegawai['img'] ?>" alt="Profile" class="rounded-circle img-thumbnail" height="150" width="150">
        <h2 class="card-title"><?= $pegawai['nama_pegawai'] ?></h2>              
      </div>
    </div>

   <ul class="sidebar-nav" id="sidebar-nav">

     <li class="nav-item">
       <a href="<?= base_url() ?>dashboard" class="btn btn-outline-primary nav-link collapsed<?= ($this->uri->segment(1, 0) == 'dashboard' ? 'active' : '') ?>">
         <i class="bi bi-grid"></i>
         <span>Dashboard</span>
       </a>
     </li><!-- End Dashboard Nav -->

     <li class="nav-item">
       <a href="<?= base_url() ?>pegawai_profil/pegawai/profil" class="btn btn-outline-primary nav-link collapsed<?= ($this->uri->segment(1, 0) == 'pegawai_profil' ? 'active' : '') ?>">
         <i class="bi bi-person"></i>
         <span>My Profile</span>
       </a>
     </li><!-- End Profile Page Nav -->

     <li class="nav-item">
       <a class="btn btn-outline-primary nav-link collapsed" href="<?= base_url() ?>login/out">
         <i class="bi bi-box-arrow-in-right"></i>
         <span>Logout</span>
       </a>
     </li><!-- End Logout Page Nav -->

     <li class="nav-heading">Pages</li>     

     <?php foreach ($main_menu as $mm) : ?>      
     <li class="nav-item">
        <a class="btn btn-outline-primary nav-link <?= ($mm['url'] == $this->uri->segment(1, 0) ? "" : "collapsed")  ?>" data-bs-target="#<?= $mm['nama_menu'] ?>-nav" data-bs-toggle="collapse" href="#">
          <i class="<?= $mm['m_icon'] ?>"></i><span><?= $mm['nama_menu'] ?></span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="<?= $mm['nama_menu'] ?>-nav" class="nav-content collapse<?= ($mm['url'] == $this->uri->segment(1, 0) ? 'show' : '')  ?>" data-bs-parent="#sidebar-nav">
        <?php foreach ($sub_menu as $sm) :
              if ($sm['menu_id'] == $mm['id']) { ?>
          <li class="">
            <a class="btn btn-outline-info <?= ($sm['url'] == $this->uri->segment(1, 0) . $this->uri->slash_segment(2, 'leading') ? "active" : "") ?>" href="<?= base_url($sm['url']) ?>" >
              <i class="<?= $sm['s_icon'] ?>"></i><span><?= $sm['judul_menu'] ?></span>
            </a>
          </li>
          <?php }
            endforeach ?>
        </ul>
      </li><!-- End Components Nav -->
      <?php endforeach ?>


     <br>
     <li class="nav-item">
       <a href="" class="nav-link active">
         <i class="bi bi-grid"></i>
         <span>Support By ASIMSE</span>
       </a>
     </li><!-- End Dashboard Nav -->
   </ul>

</aside><!-- End Sidebar-->