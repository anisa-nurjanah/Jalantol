<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1><?= $judul; ?></h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Dashboard</a></li>
                        <li class="breadcrumb-item active"><?= $judul; ?></li>
                    </ol>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">

                    <!-- Profile Image -->
                    <div class="card card-primary card-outline">
                        <div class="row">
                            <div class="col-md-3">
                                <div class="card-body box-profile">
                                    <div class="text-center">
                                        <img class="profile-user-img img-fluid img-circle" src="<?= base_url('assets/user/' . $user['image']) ?>" alt="User profile picture">
                                    </div>

                                    <h3 class="profile-username text-center"><?= $user["name"] ?></h3>
                                    <?php if ($this->session->userdata('level') == 1) { ?>
                                        <p class="text-muted text-center">Superadmin</p>
                                    <?php } else if ($this->session->userdata('level') == 2) {  ?>
                                        <p class="text-muted text-center">Administrator</p>
                                    <?php } else if ($this->session->userdata('level') == 3) {  ?>
                                        <p class="text-muted text-center">Petugas</p>
                                    <?php } else if ($this->session->userdata('level') == 4) {  ?>
                                        <p class="text-muted text-center">User</p>
                                    <?php } ?>
                                </div>
                            </div>
                            <div class="col-md-9">
                                <form action="<?= base_url('user/edit_user_mine') ?>" method="post" enctype="multipart/form-data">
                                    <div class="card-body">
                                        <div class="form-group">
                                            <label for="nm_user">Nama User</label>
                                            <input type="hidden" id="bagian_edit_profile" value="1">
                                            <input type="hidden" name="user_id" class="form-control" id="user_id" placeholder="Masukkan Nama" value="<?= $user["user_id"] ?>">
                                            <input type="text" name="name" class="form-control" id="name" placeholder="Masukkan Nama" value="<?= $user["name"] ?>">
                                        </div>
                                        <div class="form-group">
                                            <label for="username">Username</label>
                                            <input type="text" name="username" class="form-control" id="username" placeholder="Masukkan Username" value="<?= $user["username"] ?>">
                                        </div>
                                        <!-- <div class="form-group">
                                            <label for="no_telp">No. Telepon</label>
                                            <input type="text" name="no_telp" class="form-control" id="no_telp" placeholder="Masukkan Nomor Telepon" value="<?= $user["no_telp"] ?>">
                                        </div>
                                        <div class="form-group">
                                            <label for="email">Email</label>
                                            <input type="email" name="email" class="form-control" id="email" placeholder="Masukkan Email" value="<?= $user["email"] ?>">
                                        </div> -->
                                        <div class="form-group">
                                            <label for="recipient-name" class="col-form-label">Foto</label>
                                            <input type="file" class="form-control" name="userfile" id="recipient-name" placeholder="Masukkan Foto">
                                        </div>
                                        <div class="form-group">
                                            <label for="colFormLabel">Password</label>
                                            <div class="input-group" id="edit_show_hide_password">
                                                <input type="password" class="form-control" id="edit_password" name="password" placeholder="Masukkan Password">
                                                <span class="input-group-append">
                                                    <button type="button" class="btn btn-dark btn-flat" id="edit_button_show_password"><i class="fa fa-eye-slash" aria-hidden="true"></i> </button>
                                                </span>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="colFormLabel">Ulangi Password</label>
                                            <div class="input-group" id="edit_show_hide_ulangi_password">
                                                <input type="password" class="form-control" id="edit_ulangi_password" name="ulangi_password" placeholder="Masukkan Password">
                                                <span class="input-group-append">
                                                    <button type="button" class="btn btn-dark btn-flat" id="edit_button_show_ulangi_password"><i class="fa fa-eye-slash" aria-hidden="true"></i> </button>
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card-footer text-center">
                                        <button type="submit" id="editProfile" class="btn btn-primary">Edit Profile</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <!-- /.card-body -->
                    </div>
                    <!-- /.card -->
                </div>
                <!-- /.col -->
            </div>
            <!-- /.row -->
        </div>
        <!-- /.container-fluid -->
    </section>
    <!-- /.content -->
</div>
<!-- /.content-wrapper -->