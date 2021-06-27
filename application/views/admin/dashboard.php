<?php
if ($this->session->userdata('level')) {
} else {
    $this->session->set_flashdata('error', 'Tidak Bisa Akses Harap Login Terlebih Dahulu.!');
    redirect(base_url('main'));
}
?>
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0 text-dark"><?= $judul ?></h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active"><?= $judul ?></li>
                    </ol>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <!-- Small boxes (Stat box) -->
            <div class="row">
                <div class="col-lg-3 col-6">
                    <!-- small box -->
                    <div class="small-box bg-info">
                        <div class="inner">
                            <h3>64</h3>

                            <p>Jalan Tol Beroperasi <br> di Indonesia </p>
                        </div>
                        <div class="icon">
                            <i class="ion ion-stats-bars"></i>
                        </div>
                        <a href="<?= base_url('datalks') ?>" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
                    </div>
                </div>
                <!-- ./col -->
                <div class="col-lg-3 col-6">
                    <!-- small box -->
                    <div class="small-box bg-success">
                        <div class="inner">
                            <h3>
                                1990,91
                            </h3>

                            <p>Total Panjang <br> Jalan Tol</p>
                        </div>
                        <div class="icon">
                            <i class="ion ion-stats-bars"></i>
                        </div>
                        <a href="<?= base_url('datalks') ?>" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
                    </div>
                </div>
                <!-- ./col -->
                <div class="col-lg-3 col-6">
                    <!-- small box -->
                    <div class="small-box bg-warning">
                        <div class="inner">
                            <h3>
                                1
                            </h3>

                            <p>Total Jalan Tol <br> Terdaftar di Sistem</p>
                        </div>
                        <div class="icon">
                            <i class="ion ion-stats-bars"></i>
                        </div>
                        <a href="<?= base_url('datalks') ?>" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
                    </div>
                </div>
                <!-- ./col -->
                <div class="col-lg-3 col-6">
                    <!-- small box -->
                    <div class="small-box bg-primary">
                        <div class="inner">
                            <h3>
                                1
                            </h3>

                            <p>Total Data Leger <br> Jalan Tol</p>
                        </div>
                        <div class="icon">
                            <i class="ion ion-stats-bars"></i>
                        </div>
                        <a href="<?= base_url('datalks') ?>" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
                    </div>
                </div>
                <!-- ./col -->
            </div>
            <!-- /.row -->
            <div class="row">
                <section class="col-md-12">
                    <div class="card">
                        <div class="card-header ui-sortable-handle" style="cursor: move;">
                            <h3 class="card-title">
                                <i class="fas fa-table mr-1"></i>
                                Daftar Jalan Tol yang Beroperasi di Indonesia
                            </h3>
                        </div>
                        <div class="card-body table-responsive">
                            <table class="table table-hover table-bordered" id="mytableJalanTol" width="100%" cellspacing="0">
                                <thead class="text-center">
                                    <tr>
                                        <th class="column-title">No</th>
                                        <th class="column-title">Ruas Jalan Tol</th>
                                        <th class="column-title">Panjang Jalan Utama (KM)</th>
                                        <th class="column-title">Panjang Akses (KM)</th>
                                        <th class="column-title">BUJT</th>
                                        <th class="column-title">Mulai Beroperasi</th>
                                        <th class="column-title">Masa Konsensi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </section>
            </div>
        </div>
    </section>
    <!-- /.content -->
</div>
<!-- /.content-wrapper -->
<!-- Modal Detail -->
<div class="modal fade" id="detaiModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-xl modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header btn btn-dark">
                <h5 class="modal-title" id="exampleModalLabel"><img src="<?= base_url('assets'); ?>/logopemda.png" width="40"> Detail Data LKS</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="container">
                    <dl class="row">
                        <dt class="col-sm-2">Nama LKS</dt>
                        <dd class="col-sm-9" id="txt_nama_lks"></dd>
                        <dt class="col-sm-2">Alamat LKS</dt>
                        <dd class="col-sm-9" id="txt_alamat_lks"></dd>
                        <dt class="col-sm-2">Nama Pimpinan</dt>
                        <dd class="col-sm-9" id="txt_nama_pimpinan"></dd>
                        <dt class="col-sm-2">Jenis Layanan</dt>
                        <dd class="col-sm-9" id="txt_jenis_layanan"></dd>
                        <dt class="col-sm-2">Jumlah Binaan</dt>
                        <dd class="col-sm-9">
                            <dl class="row">
                                <dt class="col-sm-2">Dalam LKS</dt>
                                <dd class="col-sm-10" id="txt_dalam_lks"></dd>
                                <dt class="col-sm-2">Luar LKS</dt>
                                <dd class="col-sm-10" id="txt_luar_lks"></dd>
                            </dl>
                        </dd>
                        <dt class="col-sm-2">Akta Notaris</dt>
                        <dd class="col-sm-9" id="txt_akta_notaris"></dd>
                        <dt class="col-sm-2">Terdaftar</dt>
                        <dd class="col-sm-9">
                            <dl class="row">
                                <dt class="col-sm-2">Kabupaten</dt>
                                <dd class="col-sm-10" id="txt_kabupaten"></dd>
                                <dt class="col-sm-2">Provinsi</dt>
                                <dd class="col-sm-10" id="txt_provinsi"></dd>
                            </dl>
                        </dd>
                        <dt class="col-sm-2">Akreditasi</dt>
                        <dd class="col-sm-9" id="txt_akreditasi"></dd>
                        <dt class="col-sm-2">No Kontak</dt>
                        <dd class="col-sm-9" id="txt_no_kontak"></dd>
                        <dt class="col-sm-2">Masa Berlaku</dt>
                        <dd class="col-sm-9">
                            <dl class="row">
                                <dt class="col-sm-2">Dari</dt>
                                <dd class="col-sm-10" id="txt_masadari"></dd>
                                <dt class="col-sm-2">Hingga</dt>
                                <dd class="col-sm-10" id="txt_masahingga"></dd>
                            </dl>
                        </dd>
                        <dt class="col-sm-2">Status</dt>
                        <dd class="col-sm-9" id="txt_status"></dd>

                    </dl>
                </div>
            </div>
        </div>
    </div>
</div>