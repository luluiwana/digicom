 <!-- Sidenav -->
  <nav class="sidenav navbar navbar-vertical  fixed-left  navbar-expand-xs navbar-light bg-white" id="sidenav-main">
    <div class="scrollbar-inner">
      <!-- Brand -->
      <div class="sidenav-header  align-items-center">
        <a class="navbar-brand" href="<?=base_url('guru')?>">
          <img src="<?=base_url('assets/img/brand/blue.png')?>" class="navbar-brand-img" alt="...">
        </a>
      </div>
      <div class="navbar-inner">
        <!-- Collapse -->
        <div class="collapse navbar-collapse" id="sidenav-collapse-main">
          <!-- Nav items -->
          <ul class="navbar-nav">
            <li class="nav-item">
              <a class="nav-link <?php if($title=='Dashboard'){echo 'active';}?>" href="<?=base_url('guru')?>">
                <i class="ni ni-tv-2 text-primary"></i>
                <span class="nav-link-text">Dashboard</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link <?php if($title=='Kelas'){echo 'active';}?>" href="<?=base_url('guru/kelas')?>"">
                <i class="ni ni-planet text-primary"></i>
                <span class="nav-link-text">Kelas</span>
              </a>
            </li>
           
            <li class="nav-item">
              <a class="nav-link <?php if($title=='Profil'){echo 'active';}?>" href="<?=base_url('guru/profil')?>">
                <i class="ni ni-single-02 text-primary"></i>
                <span class="nav-link-text">Profil</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="<?=base_url('auth/logout')?>">
                <i class="ni ni-button-power text-primary"></i>
                <span class="nav-link-text">Keluar</span>
              </a>
            </li>
           
          </ul>
          
        </div>
      </div>
    </div>
  </nav>
  <!-- Main content -->
<div class="main-content" id="panel">
    <!-- Topnav -->
    <nav class="navbar navbar-top navbar-expand navbar-dark bg-primary border-bottom">
        <div class="container-fluid">

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <!-- Navbar links -->
                <ul class="navbar-nav align-items-center   ">
                    <li class="nav-item d-xl-none">
                        <!-- Sidenav toggler -->
                        <div class="pr-3 sidenav-toggler sidenav-toggler-dark" data-action="sidenav-pin"
                            data-target="#sidenav-main">
                            <div class="sidenav-toggler-inner">
                                <i class="sidenav-toggler-line"></i>
                                <i class="sidenav-toggler-line"></i>
                                <i class="sidenav-toggler-line"></i>
                            </div>
                        </div>
                    </li>

                </ul>
                <ul class="navbar-nav align-items-center  mr-md-auto ">
                    <li class="nav-item ">
                        <div class="text-white font-weight-bold  "><?=$title?></div>

                    </li>

                </ul>

                <ul class="navbar-nav align-items-center  ml-auto ml-md-0 ">
                    <li class="nav-item dropdown">
                        <a class="nav-link pr-0" href="#" role="button">
                            <div class="media align-items-center">
                              
                                <div class="media-body  ml-2  d-lg-block">
                                    <span class="mb-0 text-sm  font-weight-bold"><?=
                                    $this->session->userdata('nama');
                                    ?></span>
                                </div>
                            </div>
                        </a>

                    </li>
                </ul>
            </div>
        </div>
    </nav>