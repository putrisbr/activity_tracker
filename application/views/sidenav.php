    <body class="sb-nav-fixed">
        <nav class="sb-topnav navbar navbar-expand navbar-dark bg-dark">
            <!-- Navbar Brand-->
            <a class="navbar-brand ps-3" href="index.html">Welcome <?=$this->session->userdata['username']?>!</a>
            <!-- Sidebar Toggle-->
            <button class="btn btn-link btn-sm order-1 order-lg-0 me-4 me-lg-0" id="sidebarToggle" href="#!"><i class="fas fa-bars"></i></button>
            <!-- Navbar Search-->
            <form class="d-none d-md-inline-block form-inline ms-auto me-0 me-md-3 my-2 my-md-0">
                <div class="input-group"></div>
            </form>
            <!-- Navbar-->
            <ul class="navbar-nav ms-auto ms-md-0 me-3 me-lg-4">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" id="navbarDropdown" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false"><i class="fas fa-user fa-fw"></i></a>
                    <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                        <li><hr class="dropdown-divider" /></li>
                        <li><a class="dropdown-item" href="<?=base_url('C_Login/logout');?>">Logout</a></li>
                    </ul>
                </li>
            </ul>
        </nav>
        <div id="layoutSidenav">
            <div id="layoutSidenav_nav">
                <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
                    <div class="sb-sidenav-menu">
                        <div class="nav">
                            <div class="sb-sidenav-menu-heading">Account</div>
                            <a class="nav-link" href="<?= base_url(); ?>C_MyProfile">
                                <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                                My Profile
                            </a>
                            <div class="sb-sidenav-menu-heading">Activity Tracker</div>
                            <a class="nav-link" href="<?= base_url(); ?>C_MyActivity">
                                <div class="sb-nav-link-icon"><i class="fas fa-chart-area"></i></div>
                                My Activity
                            </a>
                            <div class="sb-sidenav-menu-heading">About Me!</div>
                            <a class="nav-link" href="<?= base_url(); ?>C_AboutMe">
                                <div class="sb-nav-link-icon"><i class="fas fa-chart-area"></i></div>
                                Kelompok 7
                            </a>
                        </div>
                    </div>
                    <div class="sb-sidenav-footer">
                        <div class="small">Logged in as :</div>
                        <?=$this->session->userdata['nama_user']?>
                    </div>
                </nav>
            </div>