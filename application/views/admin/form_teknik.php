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
                            <div class="form-group row">
                                <label class="control-label">Nama Jalan Tol : </label>
                                <div class="col-md-3 col-sm-3 ">
                                    <select class="form-control">
                                        <option>BAKAUHENI - TERBANGGI BESAR</option>
                                    </select>
                                </div>

                                <label class="control-label">KM</label>
                                <div class="col-md-3 col-sm-3 ">
                                    <select class="form-control">
                                        <option>KM 47+974 s/d KM48+502</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="card-body">
                            <h3>Format Excel</h3>
                            <hr>
                            <p>Unduh FORMAT EXCEL ini untuk pengisian penambahan data teknk</p>

                            <div class="btn-group">
                                <button type="button" class="btn btn-info">Unduh Format Excel</button>
                                <button type="button" class="btn btn-info dropdown-toggle dropdown-icon" data-toggle="dropdown" aria-expanded="false">
                                    <span class="sr-only">Toggle Dropdown</span>
                                </button>
                                <div class="dropdown-menu" role="menu">
                                    <a href="<?= base_url() ?>assets/download/excel/1. Data Teknik 1.xlsx" class="dropdown-item">Data Teknik 1</a>
                                    <a href="<?= base_url() ?>assets/download/excel/2. Data Teknik 2.xlsx" class="dropdown-item">Data Teknik 2</a>
                                    <a href="<?= base_url() ?>assets/download/excel/3. Data Teknik 3.xlsx" class="dropdown-item">Data Teknik 3</a>
                                    <a href="<?= base_url() ?>assets/download/excel/4. Data Teknik 4.xlsx" class="dropdown-item">Data Teknik 4</a>
                                    <a href="<?= base_url() ?>assets/download/excel/5. Data Teknik 5.xlsx" class="dropdown-item">Data Teknik 5</a>
                                    <a href="<?= base_url() ?>assets/download/excel/6. Data Lainnya.xlsx" class="dropdown-item">Data Lainnya</a>
                                    <a href="<?= base_url() ?>assets/download/excel/7. LINTASAN HARIAN.xlsx" class="dropdown-item">Lintasan Harian</a>
                                    <a href="<?= base_url() ?>assets/download/excel/8. DATA GEOMETRIK.xlsx" class="dropdown-item">Data Geometrik</a>
                                    <a href="<?= base_url() ?>assets/download/excel/9. Data Lingkungan Jalan.xlsx" class="dropdown-item">Data Lingkungan Jalan</a>
                                    <a href="#" class="dropdown-item">Legalisasi</a>
                                </div>
                            </div>

                            <br><br>
                            <h3>Input Formulir</h3>
                            <hr>
                            <p>Input pada form ini dengan menggunakan JENIS FILE XLS. </p>

                            <div class="form-group row">
                                <label class="col-form-label col-md-3 col-sm-3 ">IDENTIFIKASI</label>
                                <div class="col-md-9 col-sm-9 ">
                                    <input type="file" data-role="magic-overlay" data-target="#pictureBtn" data-edit="insertImage" />
                                    <button type="submit" class="btn btn-success">Simpan</button>
                                    <button class="btn btn-secondary" type="button">Batal</button>
                                </div>
                            </div>
                            <form action="<?= base_url('jalantol/add_datateknik') ?>" method="post" enctype="multipart/form-data" autocomplete="off">
                                <div class="form-group row">
                                    <label class="col-form-label col-md-3 col-sm-3 ">DATA TEKNIK 1</label>
                                    <div class="col-md-9 col-sm-9 ">
                                        <input type="file" name="datateknik1">
                                        <button type="submit" class="btn btn-success">Simpan</button>
                                        <button class=" btn btn-secondary" type="reset">Batal</button>
                                    </div>
                                </div>
                            </form>

                            <form action="<?= base_url('jalantol/add_datateknik2') ?>" method="post" enctype="multipart/form-data" autocomplete="off">
                                <div class="form-group row">
                                    <label class="col-form-label col-md-3 col-sm-3 ">DATA TEKNIK 2</label>
                                    <div class="col-md-9 col-sm-9 ">
                                        <input type="file" name="datateknik2">
                                        <button type="submit" class="btn btn-success">Simpan</button>
                                        <button class="btn btn-secondary" type="reset">Batal</button>
                                    </div>
                                </div>
                            </form>

                            <form action="<?= base_url('jalantol/add_datateknik3') ?>" method="post" enctype="multipart/form-data" autocomplete="off">
                                <div class="form-group row">
                                    <label class="col-form-label col-md-3 col-sm-3 ">DATA TEKNIK 3</label>
                                    <div class="col-md-9 col-sm-9 ">
                                        <input type="file" name="datateknik3">
                                        <button type="submit" class="btn btn-success">Simpan</button>
                                        <button class="btn btn-secondary" type="reset">Batal</button>
                                    </div>
                                </div>
                            </form>

                            <form action="<?= base_url('jalantol/add_datateknik4') ?>" method="post" enctype="multipart/form-data" autocomplete="off">
                                <div class="form-group row">
                                    <label class="col-form-label col-md-3 col-sm-3 ">DATA TEKNIK 4</label>
                                    <div class="col-md-9 col-sm-9 ">
                                        <input type="file" name="datateknik4">
                                        <button type="submit" class="btn btn-success">Simpan</button>
                                        <button class="btn btn-secondary" type="reset">Batal</button>
                                    </div>
                                </div>
                            </form>

                            <form action="<?= base_url('jalantol/add_datateknik5') ?>" method="post" enctype="multipart/form-data" autocomplete="off">
                                <div class="form-group row">
                                    <label class="col-form-label col-md-3 col-sm-3 ">DATA TEKNIK 5</label>
                                    <div class="col-md-9 col-sm-9 ">
                                        <input type="file" name="datateknik5">
                                        <button type="submit" class="btn btn-success">Simpan</button>
                                        <button class="btn btn-secondary" type="reset">Batal</button>
                                    </div>
                                </div>
                            </form>

                            <form action="<?= base_url('jalantol/add_datalainnya') ?>" method="post" enctype="multipart/form-data" autocomplete="off">
                                <div class="form-group row">
                                    <label class="col-form-label col-md-3 col-sm-3 ">DATA LAINNYA</label>
                                    <div class="col-md-9 col-sm-9 ">
                                        <input type="file" name="datalainnya">
                                        <button type="submit" class="btn btn-success">Simpan</button>
                                        <button class="btn btn-secondary" type="reset">Batal</button>
                                    </div>
                                </div>
                            </form>

                            <form action="<?= base_url('jalantol/lintasan_harian') ?>" method="post" enctype="multipart/form-data" autocomplete="off">
                                <div class="form-group row">
                                    <label class="col-form-label col-md-3 col-sm-3 ">LINTASAN HARIAN</label>
                                    <div class="col-md-9 col-sm-9 ">
                                        <input type="file" name="lintasan_harian">
                                        <button type="submit" class="btn btn-success">Simpan</button>
                                        <button class="btn btn-secondary" type="reset">Batal</button>
                                    </div>
                                </div>
                            </form>

                            <form action="<?= base_url('jalantol/data_geometrik') ?>" method="post" enctype="multipart/form-data" autocomplete="off">
                                <div class="form-group row">
                                    <label class="col-form-label col-md-3 col-sm-3 ">DATA GEOMETRIK</label>
                                    <div class="col-md-9 col-sm-9 ">
                                        <input type="file" name="data_geometrik">
                                        <button type="submit" class="btn btn-success">Simpan</button>
                                        <button class="btn btn-secondary" type="reset">Batal</button>
                                    </div>
                                </div>
                            </form>

                            <form action="<?= base_url('jalantol/lingkungan_jalan') ?>" method="post" enctype="multipart/form-data" autocomplete="off">
                                <div class="form-group row">
                                    <label class="col-form-label col-md-3 col-sm-3 ">LINGKUNGAN JALAN</label>
                                    <div class="col-md-9 col-sm-9 ">
                                        <input type="file" name="lingkungan_jalan">
                                        <button type="submit" class="btn btn-success">Simpan</button>
                                        <button class="btn btn-secondary" type="reset">Batal</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>