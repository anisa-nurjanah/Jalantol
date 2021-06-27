<?php
if ($this->session->userdata('level')) {
} else {
    $this->session->set_flashdata('error', 'Tidak Bisa Akses Harap Login Terlebih Dahulu.!');
    redirect(base_url('main/admin'));
}
?>
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1><?= $judul ?></h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active"><?= $judul ?></li>
                    </ol>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <div class="float-right">
                                <a href="javascript:void(0)" data-toggle="modal" data-target="#tambahDatauser" class="btn btn-primary"><i class="fas fa-plus"></i> Tambah Data</a>
                            </div>
                            <br>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body table-responsive">
                            <table class="table table-hover text-nowrap table-striped table-bordered" id="mytableuser" width="100%" cellspacing="0">
                                <thead class="text-center">
                                    <tr>
                                        <th>No</th>
                                        <th>Nama User</th>
                                        <th>Akses</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                </tbody>
                            </table>
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

<!-- Modal Form Tambah Layanan-->
<div class="modal fade" id="tambahDatauser" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-xl" role="document">
        <div class="modal-content">
            <div class="modal-header btn btn-dark ">
                <h5 class="modal-title" id="formModalLabel"><img src="<?= base_url('assets'); ?>/logopemda.png" width="40"><strong> Tambah Data User</strong></h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form id="formadduser">
                <div class="modal-body">
                    <div class="form-group row">
                        <label for="colFormLabel" class="col-sm-2 col-form-label">Nama User</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="nama_user" name="nama_user" placeholder="Masukkan Nama" required>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="colFormLabel" class="col-sm-2 col-form-label">Username</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="username" name="username" placeholder="Masukkan Username" required>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="colFormLabel" class="col-sm-2 col-form-label">Password</label>
                        <div class="col-sm-10">
                            <div class="input-group" id="show_hide_password">
                                <input type="password" class="form-control" id="password" name="password" placeholder="Masukkan Password" required>
                                <span class="input-group-append">
                                    <button type="button" class="btn btn-dark btn-flat" id="button_show_password"><i class="fa fa-eye-slash" aria-hidden="true"></i> </button>
                                </span>
                            </div>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="colFormLabel" class="col-sm-2 col-form-label">Ulangi Password</label>
                        <div class="col-sm-10">
                            <div class="input-group" id="show_hide_ulangi_password">
                                <input type="password" class="form-control" id="ulangi_password" name="ulangi_password" placeholder="Masukkan Password" required>
                                <span class="input-group-append">
                                    <button type="button" class="btn btn-dark btn-flat" id="button_show_ulangi_password"><i class="fa fa-eye-slash" aria-hidden="true"></i> </button>
                                </span>
                            </div>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="colFormLabel" class="col-sm-2 col-form-label">Akses</label>
                        <div class="col-sm-10">
                            <select class="form-control" id="level" name="level" placeholder="Masukkan Username" required>
                                <option value="">Pilih Akses</option>
                                <option value="2">Admin</option>
                                <option value="3">Petugas</option>
                                <option value="4">User</option>
                            </select>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Save</button>
                </div>
            </form>
        </div>
    </div>
</div>

<div class="modal fade" id="editDataUser" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-xl" role="document">
        <div class="modal-content">
            <div class="modal-header btn btn-dark ">
                <h5 class="modal-title" id="formModalLabel"><img src="<?= base_url('assets'); ?>/logopemda.png" width="40"><strong> Edit Data Layanan</strong></h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form id="formedituser">
                <div class="modal-body">
                    <div class="form-group row">
                        <label for="colFormLabel" class="col-sm-2 col-form-label">Nama User</label>
                        <div class="col-sm-10">
                            <input type="hidden" class="form-control" id="edit_user_id" name="user_id" placeholder="Masukkan Nama" required>
                            <input type="text" class="form-control" id="edit_nama_user" name="nama_user" placeholder="Masukkan Nama" required>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="colFormLabel" class="col-sm-2 col-form-label">Username</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="edit_username" name="username" placeholder="Masukkan Username" required>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="colFormLabel" class="col-sm-2 col-form-label">Password</label>
                        <div class="col-sm-10">
                            <div class="input-group" id="edit_show_hide_password">
                                <input type="password" class="form-control" id="edit_password" name="password" placeholder="Masukkan Password">
                                <span class="input-group-append">
                                    <button type="button" class="btn btn-dark btn-flat" id="edit_button_show_password"><i class="fa fa-eye-slash" aria-hidden="true"></i> </button>
                                </span>
                            </div>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="colFormLabel" class="col-sm-2 col-form-label">Ulangi Password</label>
                        <div class="col-sm-10">
                            <div class="input-group" id="edit_show_hide_ulangi_password">
                                <input type="password" class="form-control" id="edit_ulangi_password" name="ulangi_password" placeholder="Masukkan Password">
                                <span class="input-group-append">
                                    <button type="button" class="btn btn-dark btn-flat" id="edit_button_show_ulangi_password"><i class="fa fa-eye-slash" aria-hidden="true"></i> </button>
                                </span>
                            </div>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="colFormLabel" class="col-sm-2 col-form-label">Akses</label>
                        <div class="col-sm-10">
                            <select class="form-control" id="edit_level" name="level" placeholder="Masukkan Username" required>
                                <option value="">Pilih Akses</option>
                                <option value="2">Admin</option>
                                <option value="3">Petugas</option>
                                <option value="4">User</option>
                            </select>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Save</button>
                </div>
            </form>
        </div>
    </div>
</div>