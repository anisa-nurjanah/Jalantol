<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="<?= base_url('main/dashboard') ?>" class="brand-link">
        <img src="<?= base_url() ?>assets/logo.png" alt="Logo Pemda" class="brand-image img-circle elevation-3" style="opacity: .8">
        <span class="brand-text" style="font-weight: bold;">JALAN TOL</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">

        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                <!-- Add icons to the links using the .nav-icon class
            with font-awesome or any other icon font library -->
                <!-- <li class="nav-header">Dashboard</li> -->
                <li class="nav-item">
                    <a href="<?= base_url('main/dashboard') ?>" class="nav-link <?= $this->uri->segment(1) == 'main' && $this->uri->segment(2) == 'dashboard' ? ' active' : '' ?>">
                        <i class="nav-icon fas fa-tachometer-alt"></i>
                        <p>
                            Dashboard
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="<?= base_url('dataumum') ?>" class="nav-link <?= $this->uri->segment(1) == 'dataumum' ? ' active' : '' ?>">
                        <i class="far fa-map nav-icon"></i>
                            <p>
                                Data Umum
                            </p>
                    </a>
                </li>
                <?php if ($this->session->userdata('level') == 2) { ?>
                    <li class="nav-header">Master</li>
                    <li class="nav-item has-treeview<?= $this->uri->segment(1) == 'dataspasial' || $this->uri->segment(1) == 'dataspasial_ramp' ||  $this->uri->segment(1) == 'Form_new' || $this->uri->segment(1) == "Form_new_ramp" ? ' menu-open' : '' ?>">
                        <a href="#" class="nav-link<?= $this->uri->segment(1) == 'dataspasial' || $this->uri->segment(1) == 'dataspasial_ramp' ||  $this->uri->segment(1) == 'Form_new' || $this->uri->segment(1) == "Form_new_ramp" ? ' active' : '' ?>">
                            <i class="nav-icon fas fa-list"></i>
                            <p>
                                Daftar Data Spasial
                                <i class="right fas fa-angle-left"></i>
                            </p>
                        </a>
                        <ul class="nav nav-treeview">
                            <!-- <li class="nav-item">
                                <a href="<?= base_url('dataumum') ?>" class="nav-link <?= $this->uri->segment(1) == 'dataumum' ? ' active' : '' ?>">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>
                                        Data Umum
                                    </p>
                                </a>
                            </li> -->
                            <li class="nav-item">
                                <a href="<?= base_url('dataspasial') ?>" class="nav-link <?= $this->uri->segment(1) == 'dataspasial' ? ' active' : '' ?>">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>
                                        Data Spasial MAINROAD
                                    </p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="<?= base_url('dataspasial_ramp') ?>" class="nav-link <?= $this->uri->segment(1) == 'dataspasial_ramp' ? ' active' : '' ?>">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>
                                        Data Spasial RAMP
                                    </p>
                                </a>
                            </li>
                            </ul>
                    </li>
                    <li class="nav-item has-treeview<?= $this->uri->segment(1) == 'datateknik' || $this->uri->segment(1) == 'datateknik_ramp' || $this->uri->segment(1) == "Form_new_ramp" ? ' menu-open' : '' ?>">
                        <a href="#" class="nav-link<?= $this->uri->segment(1) == 'datateknik' || $this->uri->segment(1) == 'datateknik_ramp' || $this->uri->segment(1) == "Form_new_ramp" ? ' active' : '' ?>">
                            <i class="nav-icon fas fa-list"></i>
                            <p>
                                Data Teknik
                                <i class="right fas fa-angle-left"></i>
                            </p>
                        </a>
                        <ul class="nav nav-treeview">
                            <li class="nav-item">
                                <a href="<?= base_url('datateknik') ?>" class="nav-link <?= $this->uri->segment(1) == 'datateknik'  ? ' active' : '' ?>">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>
                                        Data Teknik MAINROAD
                                    </p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="<?= base_url('datateknik_ramp') ?>" class="nav-link <?= $this->uri->segment(1) == 'datateknik_ramp' ? ' active' : '' ?>">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>
                                        Data Teknik RAMP
                                    </p>
                                </a>
                            </li>

                    <!-- <li class="nav-item has-treeview<?= $this->uri->segment(1) == 'dataumum_ramp' ||  $this->uri->segment(1) == 'datateknik_ramp' || $this->uri->segment(1) == "Form_new_ramp" ? ' menu-open' : '' ?>">
                        <a href="#" class="nav-link<?= $this->uri->segment(1) == 'dataumum_ramp' || $this->uri->segment(1) == 'datateknik_ramp' || $this->uri->segment(1) == "Form_new_ramp" ? ' active' : '' ?>">
                            <i class="nav-icon fas fa-list"></i>
                            <p>
                                RAMP
                                <i class="right fas fa-angle-left"></i>
                            </p>
                        </a> -->
                        <!-- <ul class="nav nav-treeview">
                            <li class="nav-item">
                                <a href="<?= base_url('dataumum_ramp') ?>" class="nav-link <?= $this->uri->segment(1) == 'dataumum_ramp' ? ' active' : '' ?>">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>
                                        Data Umum
                                    </p>
                                </a>
                            </li> -->
                            <!-- <li class="nav-item">
                                <a href="<?= base_url('dataspasial_ramp') ?>" class="nav-link <?= $this->uri->segment(1) == 'dataspasial_ramp' ? ' active' : '' ?>">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>
                                        Data Spasial
                                    </p>
                                </a>
                            </li> -->
                            <!-- <li class="nav-item">
                                <a href="<?= base_url('datateknik_ramp') ?>" class="nav-link <?= $this->uri->segment(1) == 'datateknik_ramp' ? ' active' : '' ?>">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>
                                        Data Teknik
                                    </p>
                                </a>
                            </li> -->
                        </ul>
                    </li>
                    <!-- <li class="nav-header">Setting</li>
                    <li class="nav-item">
                        <a href="<?= base_url('jalantol/batasan') ?>" class="nav-link <?= $this->uri->segment(1) == 'jalantol' && $this->uri->segment(2) == 'batasan' ? ' active' : '' ?>">
                            <i class="nav-icon fas fa-table"></i>
                            <p>
                                Batasan Data
                            </p>
                        </a>
                    </li> -->
                <?php } ?>

                <?php if ($this->session->userdata('level') == 1) { ?>
                    <li class="nav-header">Master</li>
                    <li class="nav-item">
                        <a href="<?= base_url('user') ?>" class="nav-link">
                            <i class="nav-icon fas fa-users"></i>
                            <p>
                                Data User
                            </p>
                        </a>
                    </li>
                <?php } ?>
            </ul>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>