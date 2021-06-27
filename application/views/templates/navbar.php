<?php
$this->db->select('*');
$this->db->from('user');
$this->db->where('user_id', $this->session->userdata('userid'));
$user = $this->db->get()->row_array();
?>
<!-- Navbar -->
<nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
        <li class="nav-item">
            <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
        </li>
    </ul>

    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
        <!-- <li class="nav-item">
            <a class="nav-link" data-widget="control-sidebar" data-slide="true" href="#" role="button">
                <i class="fas fa-th-large"></i>
            </a>
        </li> -->
        <li class="nav-item dropdown">
            <a class="nav-link" data-toggle="dropdown" href="#" aria-expanded="true">
                <i class="fa fa-user"></i> <?= $user["name"]  ?>
                <!-- <span class="badge badge-danger navbar-badge">3</span> -->
            </a>
            <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right " style="left: inherit; right: 0px;">
                <a href="#" class="dropdown-item">
                    <!-- Message Start -->
                    <div class="media">
                        <img src="<?= base_url('assets/user/' . $user['image']) ?>" alt="User Avatar" class="img-size-50 mr-3 img-circle">
                        <div class="media-body">
                            <h3 class="dropdown-item-title">
                                Welcome, <?= str_replace(substr($user["name"], 16), "...", $user["name"]) ?>

                                <!-- <p>Username : <?= $user['username'] ?></p> -->
                                <!-- <span class="float-right text-sm text-danger"><i class="fas fa-star"></i></span> -->
                            </h3>
                            <h3 class="dropdown-item-title">

                            </h3>
                            <!-- <p class="text-sm">Call me whenever you can...</p>
                            <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p> -->
                        </div>
                    </div>
                    <!-- Message End -->
                </a>
                <div class="dropdown-divider"></div>
                <div class="row">
                    <div class="col-md-6 col-sm-12 col-xs-12">
                        <a href="<?= base_url('user/profile') ?>" class="dropdown-item dropdown-footer">Edit Your Profile</a>
                    </div>
                    <div class="col-md-6 col-sm-12 col-xs-12">
                        <?php if ($this->session->userdata('level')) { ?>
                            <a href="<?= base_url('main/logout'); ?>" class="dropdown-item dropdown-footer tombol-logout">Logout</a>
                        <?php } ?>
                    </div>
                </div>
            </div>
        </li>
    </ul>
</nav>
<!-- /.navbar -->