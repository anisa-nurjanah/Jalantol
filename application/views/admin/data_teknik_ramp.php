<?php
if ($this->session->userdata('level') == 2) {
} else {
    $this->session->set_flashdata('error', 'Tidak Bisa Akses Harap Login Terlebih Dahulu.!');
    redirect(base_url('main/admin'));
}
?>
<!-- Custom Theme Style -->
<!-- <link href="<?= base_url() ?>assets/build/css/custom.min.css" rel="stylesheet"> -->
<style type="text/css">
    #map {
        height: 50vh;
    }

    .x_panel {
        position: relative;
        width: 100%;
        margin-bottom: 10px;
        padding: 10px 17px;
        display: inline-block;
        background: #fff;
        border: 1px solid #E6E9ED;
        -webkit-column-break-inside: avoid;
        -moz-column-break-inside: avoid;
        opacity: 1;
        -webkit-transition: all .2s ease;
        transition: all .2s ease;
    }

    .x_title {
        border-bottom: 2px solid #E6E9ED;
        padding: 1px 5px 6px;
        margin-bottom: 10px;
    }

    ul.bar_tabs {
        overflow: visible;
        background: #F5F7FA;
        height: 25px;
        margin: 21px 0 14px;
        padding-left: 14px;
        position: relative;
        z-index: 1;
        width: 100%;
        border-bottom: 1px solid #E6E9ED;
    }

    ul.bar_tabs>li {
        border: 1px solid #E6E9ED;
        color: #333 !important;
        margin-top: -17px;
        margin-left: 8px;
        background: #fff;
        border-bottom: none;
        border-radius: 4px 4px 0 0;
    }

    .icon {
        display: inline-block;
        margin: 2px;
        height: 16px;
        width: 16px;
        background-color: #ccc;
    }
</style>
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
                            <h3 class="card-title">
                                <i class="fas fa-map mr-1"></i>
                                RUAS BAKAUHENI - TERBANGGI BESAR
                            </h3>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body" id="weathermap">
                        </div>
                        <!-- /.card-body -->
                    </div>
                    <!-- /.card -->
                    <div class="card">
                        <div class="card-header">
                            <div class="form-group row">
                                <div class="col-md-12 col-sm-12 ">
                                    <div class="row">
                                        <div id="mapid" class="mb-3">
                                        </div>
                                        <label class="control-label">Nama Jalan Tol : </label>
                                        <div class="col-md-4 col-sm-4">
                                            <select class="form-control">
                                                <option>BAKAUHENI - TERBANGGI BESAR</option>
                                            </select>
                                        </div>

                                        <label class="control-label">KM</label>
                                        <div class="col-md-4 col-sm-4 ">
                                            <select class="form-control" id="ruas_km_ramp">
                                                <option value="">Pilih Ruas</option>
                                                <?php $get = $this->db->get_where('identifikasi', ['jenis_page' => "ramp"])->result_array(); ?>
                                                <?php foreach ($get as $g) { ?>
                                                    <option value="<?= $g['ruas_km'] ?>"><?= $g['ruas_km'] ?></option>
                                                <?php } ?>
                                            </select>
                                        </div>
                                        <a href="javascript:void(0)" class="btn btn-info download_pdf_ramp"> <i class="fa fa-download"></i> PDF</a>
                                        <a href="javascript:void(0)" class="btn btn-success print_data_ramp ml-2"> <i class="fa fa-print"></i> Print</a>
                                    </div>
                                </div>
                            </div>
                            <!-- <a href="<?= base_url('datateknik/form') ?>" class="btn btn-primary float-right"><i class="fa fa-plus"></i> Tambah Data Teknik</a> -->
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="x_panel">
                                        <div class="x_title">

                                            <ul class="nav nav-tabs bar_tabs" id="myTab" role="tablist">
                                                <li class="nav-item">
                                                    <a class="nav-link active click_tab_ramp" id="ident-tab" data-id="Identifikasi" data-toggle="tab" href="#ident" role="tab" aria-controls="ident" aria-selected="true">Identifikasi</a>
                                                </li>
                                                <li class="nav-item">
                                                    <a class="nav-link click_tab_ramp" id="teknik1-tab" data-toggle="tab" data-id="RUMIJA" href="#teknik1" role="tab" aria-controls="teknik1" aria-selected="true">Data Teknik 1</a>
                                                </li>
                                                <li class="nav-item">
                                                    <a class="nav-link click_tab_ramp" id="teknik2-tab" data-toggle="tab" data-id="Konstruksi" href="#teknik2" role="tab" aria-controls="teknik2" aria-selected="false">Data Teknik 2</a>
                                                </li>
                                                <li class="nav-item">
                                                    <a class="nav-link click_tab_ramp" id="teknik3-tab" data-toggle="tab" data-id="Bagian Perlengkapan" href="#teknik3" role="tab" aria-controls="teknik3" aria-selected="false">Data Teknik 3</a>
                                                </li>
                                                <li class="nav-item">
                                                    <a class="nav-link click_tab_ramp" id="teknik4-tab" data-toggle="tab" data-id="Perlengkapan" href="#teknik4" role="tab" aria-controls="teknik4" aria-selected="false">Data Teknik 4</a>
                                                </li>
                                                <li class="nav-item">
                                                    <a class="nav-link click_tab_ramp" id="teknik5-tab" data-toggle="tab" data-id="Utilitas" href="#teknik5" role="tab" aria-controls="teknik5" aria-selected="false">Data Teknik 5</a>
                                                </li>
                                            </ul>

                                            <!-- IDENTIFIKASI -->
                                            <div class="tab-content" id="myTabContent">
                                                <div class="tab-pane fade show active" id="ident" role="tabpanel" aria-labelledby="ident_tab">

                                                    <table class="table table-bordered" id="rampmytableidentifikasi" style="width: 100%;">
                                                        <thead>
                                                            <tr>
                                                                <th scope="row" rowspan="2">RUAS</th>
                                                                <th scope="row" rowspan="2">SEKSI</th>
                                                                <th colspan="2" style="text-align: center;">STA</th>
                                                                <th colspan="4" style="text-align: center;">TITIK AWAL SEGMEN RUAS JALAN</th>
                                                                <th colspan="4" style="text-align: center;">TITIK AKHIR SEGMEN RUAS JALAN</th>
                                                                <th scope="row" rowspan="2">TAHUN</th>
                                                                <th scope="row" rowspan="2">PROVINSI</th>
                                                                <th scope="row" rowspan="2">KABUPATEN</th>
                                                                <th scope="row" rowspan="2">KECAMATAN</th>
                                                                <th scope="row" rowspan="2">DESA</th>
                                                                <th scope="row" rowspan="2">Aksi</th>
                                                            </tr>
                                                            <!-- <tr> -->
                                                                <!-- <th colspan="1">STA AWAL</th> -->
                                                                <!-- <th colspan="1">STA AKHIR</th> -->
                                                                <!-- <th colspan="1">X</th> -->
                                                                <!-- <th colspan="1">Y</th> -->
                                                                <!-- <th colspan="1">Z</th> -->
                                                                <!-- <th colspan="1">Deskripsi Awal</th> -->
                                                                <!-- <th colspan="1">X</th> -->
                                                                <!-- <th colspan="1">Y</th> -->
                                                                <!-- <th colspan="1">Z</th> -->
                                                                <!-- <th colspan="1">Deskripsi Akhir</th> -->
                                                            <!-- </tr> -->
                                                        </thead>
                                                        <tbody>
                                                        </tbody>
                                                    </table>
                                                    <!-- <br><br>
                                                    <table class="table table-bordered" id="rampmytablelokasi" style="width: 100%;">
                                                        <thead>
                                                            <tr>
                                                                <th>TAHUN</th>
                                                                <th>PROVINSI</th>
                                                                <th>KABUPATEN</th>
                                                                <th>KECAMATAN</th>
                                                                <th>DESA</th>
                                                                <th>Aksi</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                        </tbody>
                                                    </table> -->

                                                </div>

                                                <!-- DATA TEKNIK 1 -->

                                                <div class="tab-pane fade" id="teknik1" role="tabpanel" aria-labelledby="teknik1-tab">

                                                    <table class="table table-bordered" id="rampmytabledatateknik1" style="width: 100%;">
                                                        <thead>
                                                            <tr>
                                                                <th scope="row" rowspan="2">RUAS</th>
                                                                <th style="text-align: center;" colspan="3" align="center">Lahan Rumija</th>
                                                                <th style="text-align: center;" colspan="3" align="center">Perkerasan Jalan</th>
                                                                <th scope="row" rowspan="2">Aksi</th>
                                                            </tr>
                                                            <tr>
                                                                <th>Luas (M2)</th>
                                                                <th>Data Perolehan</th>
                                                                <th>Nilai Perolehan</th>
                                                                <th>Luas (M2)</th>
                                                                <th>Data Perolehan</th>
                                                                <th>Nilai Perolehan</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                        </tbody>
                                                    </table>
                                                </div>

                                                <!-- DATA TEKNIK 2 -->
                                                <div class="tab-pane fade" id="teknik2" role="tabpanel" aria-labelledby="teknik2-tab">
                                                    <table class="table table-bordered" id="rampmytabledatateknik2" style="width: 100%;">
                                                        <thead>
                                                            <tr>
                                                                <th scope="row" rowspan="3">Ruas KM</th>
                                                                <th colspan="16" style="text-align: center;">Lapis Permukaan</th>
                                                                <th scope="row" rowspan="2" colspan="3" style="text-align: center;">Lapis Pondasi Atas</th>
                                                                <th scope="row" rowspan="2" colspan="3" style="text-align: center;">Lapis Pondasi Bawah</th>
                                                                <th scope="row" rowspan="3">Aksi</th>
                                                            <tr>
                                                                <th colspan="4" style="text-align: center;">Lajur 1 KI</th>
                                                                <th colspan="4" style="text-align: center;">Lajur 2 KI</th>
                                                                <th colspan="4" style="text-align: center;">Lajur 2 KA</th>
                                                                <th colspan="4" style="text-align: center;">Lajur 1 KI</th>
                                                            </tr>
                                                            <tr>
                                                                <th colspan="1">LEBAR (M)</th>
                                                                <th colspan="1">TEBAL (M)</th>
                                                                <th colspan="1">JENIS (M)</th>
                                                                <th colspan="1">IRI</th>
                                                                <th colspan="1">LEBAR (M)</th>
                                                                <th colspan="1">TEBAL (M)</th>
                                                                <th colspan="1">JENIS (M)</th>
                                                                <th colspan="1">IRI</th>
                                                                <th colspan="1">LEBAR (M)</th>
                                                                <th colspan="1">TEBAL (M)</th>
                                                                <th colspan="1">JENIS (M)</th>
                                                                <th colspan="1">IRI</th>
                                                                <th colspan="1">LEBAR (M)</th>
                                                                <th colspan="1">TEBAL (M)</th>
                                                                <th colspan="1">JENIS (M)</th>
                                                                <th colspan="1">IRI</th>
                                                                <th colspan="1">LEBAR (M)</th>
                                                                <th colspan="1">TEBAL (M)</th>
                                                                <th colspan="1">JENIS (M)</th>
                                                                <th colspan="1">LEBAR (M)</th>
                                                                <th colspan="1">TEBAL (M)</th>
                                                                <th colspan="1">JENIS (M)</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>

                                                        </tbody>
                                                    </table>
                                                    <br><br>
                                                    <table class="table table-bordered" id="rampmytabledatateknik2median" style="width: 100%;">
                                                        <thead>
                                                            <tr>
                                                                <th scope="row" rowspan="2">Ruas KM</th>
                                                                <th scope="row" rowspan="2">Tebal Median</th>
                                                                <th scope="row" rowspan="2">Lebar Median</th>
                                                                <th scope="row" rowspan="2">Jenis Median</th>
                                                                <th scope="row" rowspan="2">Kondisi Median</th>
                                                                <th colspan="4" style="text-align: center;">Lebar Bahu Jalan</th>
                                                                <th colspan="4" style="text-align: center;">Tebal</th>
                                                                <th colspan="4" style="text-align: center;">Jenis</th>
                                                                <th colspan="4" style="text-align: center;">Posisi</th>
                                                                <th colspan="4" style="text-align: center;">Kondisi</th>
                                                                <th scope="row" rowspan="2">Aksi</th>
                                                            <tr>
                                                                <th colspan="1">LUAR KI</th>
                                                                <th colspan="1">DALAM KI</th>
                                                                <th colspan="1">DALAM KA</th>
                                                                <th colspan="1">LUAR KA</th>
                                                                <th colspan="1">LUAR KI</th>
                                                                <th colspan="1">DALAM KI</th>
                                                                <th colspan="1">DALAM KA</th>
                                                                <th colspan="1">LUAR KA</th>
                                                                <th colspan="1">LUAR KI</th>
                                                                <th colspan="1">DALAM KI</th>
                                                                <th colspan="1">DALAM KA</th>
                                                                <th colspan="1">LUAR KA</th>
                                                                <th colspan="1">LUAR KI</th>
                                                                <th colspan="1">DALAM KI</th>
                                                                <th colspan="1">DALAM KA</th>
                                                                <th colspan="1">LUAR KA</th>
                                                                <th colspan="1">LUAR KI</th>
                                                                <th colspan="1">DALAM KI</th>
                                                                <th colspan="1">DALAM KA</th>
                                                                <th colspan="1">LUAR KA</th>
                                                            </tr>
                                                            </tr>
                                                        </thead>
                                                        <tbody>

                                                        </tbody>
                                                    </table>

                                                </div>

                                                <!-- DATA TEKNIK 3 -->
                                                <div class="tab-pane fade" id="teknik3" role="tabpanel" aria-labelledby="teknik3-tab">

                                                    <table class="table table-bordered" id="rampmytabledatateknik3" style="width: 100%;">
                                                        <thead>

                                                            <tr>
                                                                <th style="width: 100%;" scope="row" rowspan="2">RUAS</th>
                                                                <th style="width: 100%;text-align: center;" colspan="3" align="center">GORONG GORONG</th>
                                                                <th style="width: 100%;text-align: center;" colspan="3" align="center">SALURAN PENAHAN TANAH</th>
                                                                <th style="width: 100%;text-align: center;" colspan="3" align="center">MANHOLE</th>
                                                                <th style="width: 100%;" scope="row" rowspan="2">Aksi</th>
                                                            </tr>
                                                            <tr>
                                                                <th style="width: 100%;" colspan="1">Jenis Material</th>
                                                                <th style="width: 100%;" colspan="1">Ukuran Panjang (M)</th>
                                                                <th style="width: 100%;" colspan="1">Kondisi</th>
                                                                <th style="width: 100%;" colspan="1">Jenis Material</th>
                                                                <th style="width: 100%;" colspan="1">Ukuran Panjang (M)</th>
                                                                <th style="width: 100%;" colspan="1">Kondisi</th>
                                                                <th style="width: 100%;" colspan="1">Jenis Material</th>
                                                                <th style="width: 100%;" colspan="1">Ukuran Panjang (M)</th>
                                                                <th style="width: 100%;" colspan="1">Kondisi</th>
                                                            </tr>
                                                        </thead>

                                                        <tbody>
                                                        </tbody>
                                                    </table>
                                                </div>

                                                <!-- DATA TEKNIK 4 -->
                                                <div class="tab-pane fade" id="teknik4" role="tabpanel" aria-labelledby="teknik4-tab">

                                                    <table class="table table-bordered" id="rampmytabledatateknik4" style="width: 100%;">
                                                        <thead>
                                                            <tr>
                                                                <th style="width: 100%;">Ruas</th>
                                                                <th style="width: 100%;">URAIAN PERLENGKAPAN JALAN</th>
                                                                <th style="width: 100%;">KI</th>
                                                                <th style="width: 100%;">MD</th>
                                                                <th style="width: 100%;">KA</th>
                                                                <th style="width: 100%;">Aksi</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                        </tbody>
                                                    </table>
                                                </div>
                                                <!-- DATA TEKNIK 5 -->
                                                <div class="tab-pane fade" id="teknik5" role="tabpanel" aria-labelledby="teknik5-tab">

                                                    <table class="table table-bordered" id="rampmytabledatateknik5" style="width: 100%;">
                                                        <thead>

                                                            <tr>
                                                                <th style="width: 100%;" scope="row" rowspan="2">RUAS</th>
                                                                <th style="width: 100%;text-align: center;" colspan="4" align="center">PRA SARANA</th>
                                                                <th style="width: 100%;text-align: center;" colspan="4" align="center">SARANA</th>
                                                                <th style="width: 100%;" scope="row" rowspan="2">Aksi</th>
                                                            </tr>
                                                            <tr>
                                                                <th style="width: 100%;" colspan="1">Jenis Utilitas</th>
                                                                <th style="width: 100%;" colspan="1">KI</th>
                                                                <th style="width: 100%;" colspan="1">MD</th>
                                                                <th style="width: 100%;" colspan="1">KA</th>
                                                                <th style="width: 100%;" colspan="1">Jenis Utilitas</th>
                                                                <th style="width: 100%;" colspan="1">KI</th>
                                                                <th style="width: 100%;" colspan="1">MD</th>
                                                                <th style="width: 100%;" colspan="1">KA</th>
                                                            </tr>
                                                        </thead>

                                                        <tbody>
                                                        </tbody>
                                                    </table>
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- /.card-body -->
                    </div>
                    <!-- /.card -->
                    <div class="card">
                        <div class="card_body">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="x_panel">
                                        <div class="x_title">

                                            <ul class="nav nav-tabs bar_tabs" id="myTab" role="tablist">
                                                <li class="nav-item">
                                                    <a class="nav-link active click_tab_ramp" id="datalainnya-tab" data-toggle="tab" data-id="Tambahan" href="#datalainnya" role="tab" aria-controls="datalainnya" aria-selected="false">Data Lainnya</a>
                                                </li>
                                                <li class="nav-item">
                                                    <a class="nav-link click_tab_ramp" id="lintasanharian-tab" data-toggle="tab" data-id="LHR" href="#lintasanharian" role="tab" aria-controls="lintasanharian" aria-selected="true">Lintasan Harian</a>
                                                </li>
                                                <li class="nav-item">
                                                    <a class="nav-link click_tab_ramp" id="geometrik-tab" data-toggle="tab" data-id="Geometrik Jalan" href="#geometrik" role="tab" aria-controls="geometrik" aria-selected="false">Data Geometrik</a>
                                                </li>
                                                <li class="nav-item">
                                                    <a class="nav-link click_tab_ramp" id="lingkunganjalan-tab" data-toggle="tab" data-id="Tambahan" href="#lingkunganjalan" role="tab" aria-controls="lingkunganjalan" aria-selected="false">Data Lingkungan Jalan</a>
                                                </li>

                                            </ul>
                                            <!-- LHR -->
                                            <div class="tab-content" id="myTabContent">
                                                <!-- DATA LAINNYA -->
                                                <div class="tab-pane fade show active" id="datalainnya" role="tabpanel" aria-labelledby="datalainnya-tab">

                                                    <table class="table table-bordered" id="rampmytabledatalainnya" style="width: 100%;">
                                                        <thead>

                                                            <tr>
                                                                <th>Ruas</th>
                                                                <th>URAIAN</th>
                                                                <th>Tanggal Pemanfaatan</th>
                                                                <th>Nilai (Rp)</th>
                                                                <th>Aksi</th>
                                                            </tr>
                                                        </thead>

                                                        <tbody>
                                                        </tbody>
                                                    </table>
                                                </div>
                                                <div class="tab-pane fade" id="lintasanharian" role="tabpanel" aria-labelledby="lintasanharian-tab">
                                                    <table class="table table-bordered" id="rampmytabledatalintasan" style="width: 100%;">
                                                        <thead>
                                                            <tr>
                                                                <th style="width: 100%;" scope="row" rowspan="2">RUAS</th>
                                                                <th style="width: 100%;text-align: center;" colspan="4" align="center">GOLONGAN I (SEDAN, JIP, PICK UP, BUS)</th>
                                                                <th style="width: 100%;text-align: center;" colspan="4" align="center">GOLONGAN II (TRUK DENGAN 2 GANDAR)</th>
                                                                <th style="width: 100%;text-align: center;" colspan="4" align="center">GOLONGAN III (TRUK DENGAN 3 GANDAR)</th>
                                                                <th style="width: 100%;text-align: center;" colspan="4" align="center">GOLONGAN IV (TRUK DENGAN 4 GANDAR)</th>
                                                                <th style="width: 100%;text-align: center;" colspan="4" align="center">GOLONGAN V (TRUK 5 GANDAR ATAU LEBIH)</th>
                                                                <th style="width: 100%;text-align: center;" colspan="4" align="center">GOLONGAN VI (KENDARAAN RODA DUA )</th>
                                                                <th style="width: 100%;" scope="row" rowspan="2">Aksi</th>
                                                            </tr>
                                                            <tr>
                                                                <th>LHR(Ki/Hr)</th>
                                                                <th>Tarif (Rp)</th>
                                                                <th>LHR(Ka/Hr)</th>
                                                                <th>Tarif (Rp)</th>
                                                                <th>LHR(Ki/Hr)</th>
                                                                <th>Tarif (Rp)</th>
                                                                <th>LHR(Ka/Hr)</th>
                                                                <th>Tarif (Rp)</th>
                                                                <th>LHR(Ki/Hr)</th>
                                                                <th>Tarif (Rp)</th>
                                                                <th>LHR(Ka/Hr)</th>
                                                                <th>Tarif (Rp)</th>
                                                                <th>LHR(Ki/Hr)</th>
                                                                <th>Tarif (Rp)</th>
                                                                <th>LHR(Ka/Hr)</th>
                                                                <th>Tarif (Rp)</th>
                                                                <th>LHR(Ki/Hr)</th>
                                                                <th>Tarif (Rp)</th>
                                                                <th>LHR(Ka/Hr)</th>
                                                                <th>Tarif (Rp)</th>
                                                                <th>LHR(Ki/Hr)</th>
                                                                <th>Tarif (Rp)</th>
                                                                <th>LHR(Ka/Hr)</th>
                                                                <th>Tarif (Rp)</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                        </tbody>
                                                    </table>
                                                </div>
                                                <!-- GEOMETRIK -->
                                                <div class="tab-pane fade" id="geometrik" role="tabpanel" aria-labelledby="geometrik-tab">
                                                    <table class="table table-bordered" id="rampmytabledatageometrik" style="width: 100%;">

                                                        <thead>
                                                            <tr>
                                                                <th style="width: 100%;">RUAS</th>
                                                                <th style="width: 100%;">LEBAR RUMIJA (M)</th>
                                                                <th style="width: 100%;">GRADIEN KIRI (%)</th>
                                                                <th style="width: 100%;">GRADIEN KANAN (%)</th>
                                                                <th style="width: 100%;">CROSS FALL KIRI (%)</th>
                                                                <th style="width: 100%;">CROSS FALL KANAN (%)</th>
                                                                <th style="width: 100%;">SUPERELEVASI (%)</th>
                                                                <th style="width: 100%;">RADIUS (%)</th>
                                                                <th style="width: 100%;">AKSI</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                        </tbody>
                                                    </table>


                                                </div>
                                                <!-- LINGKUNGAN -->
                                                <div class="tab-pane fade" id="lingkunganjalan" role="tabpanel" aria-labelledby="lingkunganjalan-tab">
                                                    <table class="table table-bordered" id="rampmytabledatalingkungan" style="width: 100%;">
                                                        <thead>
                                                            <tr>
                                                                <th style="width: 100%;" scope="row" rowspan="2">RUAS</th>
                                                                <th style="width: 100%;text-align: center;" colspan="2" align="center">TERRAIN</th>
                                                                <th style="width: 100%;text-align: center;" colspan="2" align="center">TATA GUNA LAHAN</th>
                                                                <th style="width: 100%;text-align: center;" colspan="3" align="center">UNDERPASS</th>
                                                                <th style="width: 100%;text-align: center;" colspan="3" align="center">OVERPASS</th>
                                                                <th style="width: 100%;" scope="row" rowspan="2">Aksi</th>
                                                            </tr>
                                                            <tr>
                                                                <th>KIRI</th>
                                                                <th>KANAN</th>
                                                                <th>KIRI</th>
                                                                <th>KANAN</th>
                                                                <th>KM</th>
                                                                <th>X</th>
                                                                <th>Y</th>
                                                                <th>KM</th>
                                                                <th>X</th>
                                                                <th>Y</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>


                                <!-- calendar modal -->
                                <div id="CalenderModalNew" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                    <div class="modal-dialog">
                                        <div class="modal-content">

                                            <div class="modal-header">
                                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                                <h4 class="modal-title" id="myModalLabel">New Calendar Entry</h4>
                                            </div>
                                            <div class="modal-body">
                                                <div id="testmodal" style="padding: 5px 20px;">
                                                    <button type="button" class="btn btn-link">Data Teknik 1</button>
                                                    <button type="button" class="btn btn-link">Data Teknik 2</button>
                                                    <button type="button" class="btn btn-link">Data Teknik 3</button>
                                                    <button type="button" class="btn btn-link">Data Teknik 4</button>
                                                    <button type="button" class="btn btn-link">Data Teknik 5</button>
                                                    <button type="button" class="btn btn-link">Data Lainnya</button>
                                                    <button type="button" class="btn btn-link">Lintasan Harian</button>
                                                    <button type="button" class="btn btn-link">Data Geometrik</button>
                                                    <button type="button" class="btn btn-link">Data Lingkungan Jalan</button>
                                                </div>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-default antoclose" data-dismiss="modal">Close</button>
                                                <button type="button" class="btn btn-primary antosubmit">Save changes</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- /.col -->
                </div>
                <!-- /.row -->
            </div>
            <!-- /.container-fluid -->
    </section>
    <!-- /.content -->
</div>

<div class="modal fade" id="modaleditidentifikasi" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-xl" role="document">
        <div class="modal-content">
            <div class="modal-header btn btn-dark ">
                <h5 class="modal-title" id="formModalLabel"><img src="<?= base_url('assets'); ?>/logopemda.png" width="40"><strong> Edit Data Identifikasi</strong></h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form id="formeditidentifikasi" autocomplete="off">
                <div class="modal-body">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="ruas">Ruas</label>
                                <input type="hidden" name="id_identifikasi" class="form-control" id="id_identifikasi" placeholder="Masukkan Ruas" required>
                                <input type="text" name="ruas" class="form-control" id="ruas" placeholder="Masukkan Ruas" required>
                            </div>
                            <div class="form-group">
                                <label for="ruas_km">Ruas KM</label>
                                <input type="text" name="ruas_km" class="form-control" id="ruas_km_val" placeholder="Masukkan Ruas KM" required>
                            </div>
                            <div class="row">
                                <div class="form-group col-md-6">
                                    <label for="seksi_ruas">Seksi Ruas</label>
                                    <input type="text" name="seksi_ruas" class="form-control" id="seksi_ruas" placeholder="Masukkan Seksi Ruas" required>
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="tahun">Tahun</label>
                                    <select name="tahun" id="tahun" class="form-control select2" style="width: 100%;" required>
                                        <option value="">Pilih Tahun</option>
                                        <?php
                                        $tahun = date('Y');
                                        for ($x = $tahun; $x >= 2010; $x--) { ?>
                                            <option value="<?= $x ?>"><?= $x ?></option>
                                        <?php } ?>
                                    </select>
                                </div>
                            </div>
                            <div class="row">
                                <div class="form-group col-md-6">
                                    <label for="provinsi">Provinsi</label>
                                    <select class="form-control select2provinsi" name="provinsi" id="provinsi" style="width: 100%;" required>
                                        <option value="">Pilih Provinsi</option>
                                    </select>
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="kabupaten">Kabupaten</label>
                                    <select class="form-control select2kabupaten" name="kabupaten" id="kabupaten" style="width: 100%;" required>
                                        <option value="">Pilih Kabupaten</option>
                                    </select>
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="kecamatan">Kecamatan</label>
                                    <select class="form-control select2kecamatan" name="kecamatan" id="kecamatan" style="width: 100%;" required>
                                        <option value="">Pilih Kecamatan</option>
                                    </select>
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="desa">Desa</label>
                                    <select class="form-control select2kelurahan" name="desa" id="kelurahan" style="width: 100%;" required>
                                        <option value="">Pilih Desa</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- <div class="row"> -->
                        <!-- <div class="form-group col-md-3">
                            <label for="sta_awal">STA Awal</label>
                            <input type="text" name="sta_awal" class="form-control" id="sta_awal" placeholder="Masukkan STA Awal" required>
                        </div> -->
                        <!-- <div class="form-group col-md-2">
                            <label for="x_awal">X Awal</label>
                            <input type="text" name="x_awal" class="form-control" id="x_awal" placeholder="Masukkan X Awal" required>
                        </div>
                        <div class="form-group col-md-2">
                            <label for="y_awal">Y Awal</label>
                            <input type="text" name="y_awal" class="form-control" id="y_awal" placeholder="Masukkan Y Awal" required>
                        </div>
                        <div class="form-group col-md-2">
                            <label for="z_awal">Z Awal</label>
                            <input type="text" name="z_awal" class="form-control" id="z_awal" placeholder="Masukkan Z Awal" required>
                        </div>
                        <div class="form-group col-md-3">
                            <label for="deskripsi_awal">Deskripsi Awal</label>
                            <input type="text" name="deskripsi_awal" class="form-control" id="deskripsi_awal" placeholder="Masukkan Deskripsi Awal" required>
                        </div>
                    </div> -->
                    <!-- <div class="row">
                        <div class="form-group col-md-3">
                            <label for="sta_akhir">STA Akhir</label>
                            <input type="text" name="sta_akhir" class="form-control" id="sta_akhir" placeholder="Masukkan STA Akhir" required>
                        </div>
                        <div class="form-group col-md-2">
                            <label for="x_akhir">X Akhir</label>
                            <input type="text" name="x_akhir" class="form-control" id="x_akhir" placeholder="Masukkan X Akhir" required>
                        </div>
                        <div class="form-group col-md-2">
                            <label for="y_akhir">Y Akhir</label>
                            <input type="text" name="y_akhir" class="form-control" id="y_akhir" placeholder="Masukkan Y Akhir" required>
                        </div>
                        <div class="form-group col-md-2">
                            <label for="z_akhir">Z Akhir</label>
                            <input type="text" name="z_akhir" class="form-control" id="z_akhir" placeholder="Masukkan Z Akhir" required>
                        </div>
                        <div class="form-group col-md-3">
                            <label for="deskripsi_akhir">Deskripsi Akhir</label>
                            <input type="text" name="deskripsi_akhir" class="form-control" id="deskripsi_akhir" placeholder="Masukkan Deskripsi Akhir" required>
                        </div> -->
                        
                    <!-- </div> -->
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Save</button>
                </div>
            </form>
        </div>
    </div>
</div>

<div class="modal fade" id="modaleditdatateknik1" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-xl" role="document">
        <div class="modal-content">
            <div class="modal-header btn btn-dark ">
                <h5 class="modal-title" id="formModalLabel"><img src="<?= base_url('assets'); ?>/logopemda.png" width="40"><strong> Edit Data Teknik 1</strong></h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form id="formeditdatateknik1" autocomplete="off">
                <div class="modal-body">
                    <div class="form-group">
                        <label for="ruas_km">Ruas KM</label>
                        <input type="hidden" name="id_data_teknik_1" class="form-control" id="id_data_teknik_1" placeholder="Masukkan Ruas" required>
                        <input type="text" name="ruas_km" class="form-control" id="ruas_km_1" placeholder="Masukkan Ruas KM">
                    </div>
                    <div class="form-group">
                        <label for="luas_lr">Luas Lahan Rumija</label>
                        <input type="text" name="luas_lr" class="form-control" id="luas_lr" placeholder="Masukkan Luas Lahan Rumija">
                    </div>
                    <div class="form-group">
                        <label for="data_lr">Data Perolehan Lahan Rumija</label>
                        <input type="text" name="data_lr" class="form-control" id="data_lr" placeholder="Masukkan Data Perolehan Lahan Rumija">
                    </div>
                    <div class="form-group">
                        <label for="nilai_lr">Nilai Perp;ehan Lahan Rumija</label>
                        <input type="text" name="nilai_lr" class="form-control" id="nilai_lr" placeholder="Masukkan Nilai Perp;ehan Lahan Rumija">
                    </div>
                    <div class="form-group">
                        <label for="luas_pj">Luas Perkerasan Jalan</label>
                        <input type="text" name="luas_pj" class="form-control" id="luas_pj" placeholder="Masukkan Luas Perkerasan Jalan">
                    </div>
                    <div class="form-group">
                        <label for="data_pj">Data Perolehan Perkerasan Jalan</label>
                        <input type="text" name="data_pj" class="form-control" id="data_pj" placeholder="Masukkan Data Perolehan Perkerasan Jalan">
                    </div>
                    <div class="form-group">
                        <label for="nilai_pj">Nilai Perp;ehan Perkerasan Jalan</label>
                        <input type="text" name="nilai_pj" class="form-control" id="nilai_pj" placeholder="Masukkan Nilai Perp;ehan Perkerasan Jalan">
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

<div class="modal fade" id="modaleditdatateknik2" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-xl" role="document">
        <div class="modal-content">
            <div class="modal-header btn btn-dark ">
                <h5 class="modal-title" id="formModalLabel"><img src="<?= base_url('assets'); ?>/logopemda.png" width="40"><strong> Edit Data Teknik 2</strong></h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form id="formeditdatateknik2" autocomplete="off">
                <div class="modal-body">
                    <div class="form-group">
                        <label for="ruas_km">Ruas KM</label>
                        <input type="hidden" name="id_data_teknik_2" class="form-control" id="id_data_teknik_2" placeholder="Masukkan Ruas" required>
                        <input type="text" name="ruas_km" class="form-control" id="ruas_km_2" placeholder="Masukkan Ruas KM">
                    </div>
                    <div class="form-group">
                        <label for="lebar_lajur_1_ki">Lebar Lajur 1 KI Lapis Permukaan</label>
                        <input type="text" name="lebar_lajur_1_ki" class="form-control" id="lebar_lajur_1_ki" placeholder="Masukkan Lebar Lajur 1 KI Lapis Permukaan">
                    </div>
                    <div class="form-group">
                        <label for="tebal_lajur_1_ki">Tebal Lajur 1 KI Lapis Permukaan</label>
                        <input type="text" name="tebal_lajur_1_ki" class="form-control" id="tebal_lajur_1_ki" placeholder="Masukkan Tebal Lajur 1 KI Lapis Permukaan">
                    </div>
                    <div class="form-group">
                        <label for="jenis_lajur_1_ki">Jenis Lajur 1 KI Lapis Permukaan</label>
                        <input type="text" name="jenis_lajur_1_ki" class="form-control" id="jenis_lajur_1_ki" placeholder="Masukkan Jenis Lajur 1 KI Lapis Permukaan">
                    </div>
                    <div class="form-group">
                        <label for="iri_lajur_1_ki">Iri Lajur 1 KI Lapis Permukaan</label>
                        <input type="text" name="iri_lajur_1_ki" class="form-control" id="iri_lajur_1_ki" placeholder="Masukkan Iri Lajur 1 KI Lapis Permukaan">
                    </div>
                    <div class="form-group">
                        <label for="lebar_lajur_2_ki">Lebar Lajur 2 KI Lapis Permukaan</label>
                        <input type="text" name="lebar_lajur_2_ki" class="form-control" id="lebar_lajur_2_ki" placeholder="Masukkan Lebar Lajur 2 KI Lapis Permukaan">
                    </div>
                    <div class="form-group">
                        <label for="tebal_lajur_2_ki">Tebal Lajur 2 KI Lapis Permukaan</label>
                        <input type="text" name="tebal_lajur_2_ki" class="form-control" id="tebal_lajur_2_ki" placeholder="Masukkan Tebal Lajur 2 KI Lapis Permukaan">
                    </div>
                    <div class="form-group">
                        <label for="jenis_lajur_2_ki">Jenis Lajur 2 KI Lapis Permukaan</label>
                        <input type="text" name="jenis_lajur_2_ki" class="form-control" id="jenis_lajur_2_ki" placeholder="Masukkan Jenis Lajur 2 KI Lapis Permukaan">
                    </div>
                    <div class="form-group">
                        <label for="iri_lajur_2_ki">Iri Lajur 2 KI Lapis Permukaan</label>
                        <input type="text" name="iri_lajur_2_ki" class="form-control" id="iri_lajur_2_ki" placeholder="Masukkan Iri Lajur 2 KI Lapis Permukaan">
                    </div>
                    <div class="form-group">
                        <label for="lebar_lajur_2_ka">Lebar Lajur 2 KA Lapis Permukaan</label>
                        <input type="text" name="lebar_lajur_2_ka" class="form-control" id="lebar_lajur_2_ka" placeholder="Masukkan Lebar Lajur 2 KA Lapis Permukaan">
                    </div>
                    <div class="form-group">
                        <label for="tebal_lajur_2_ka">Tebal Lajur 2 KA Lapis Permukaan</label>
                        <input type="text" name="tebal_lajur_2_ka" class="form-control" id="tebal_lajur_2_ka" placeholder="Masukkan Tebal Lajur 2 KA Lapis Permukaan">
                    </div>
                    <div class="form-group">
                        <label for="jenis_lajur_2_ka">Jenis Lajur 2 KA Lapis Permukaan</label>
                        <input type="text" name="jenis_lajur_2_ka" class="form-control" id="jenis_lajur_2_ka" placeholder="Masukkan Jenis Lajur 2 KA Lapis Permukaan">
                    </div>
                    <div class="form-group">
                        <label for="iri_lajur_2_ka">Iri Lajur 2 KA Lapis Permukaan</label>
                        <input type="text" name="iri_lajur_2_ka" class="form-control" id="iri_lajur_2_ka" placeholder="Masukkan Iri Lajur 2 KA Lapis Permukaan">
                    </div>
                    <div class="form-group">
                        <label for="lebar_lajur_1_ka">Lebar Lajur 1 KA Lapis Permukaan</label>
                        <input type="text" name="lebar_lajur_1_ka" class="form-control" id="lebar_lajur_1_ka" placeholder="Masukkan Lebar Lajur 1 KA Lapis Permukaan">
                    </div>
                    <div class="form-group">
                        <label for="tebal_lajur_1_ka">Tebal Lajur 1 KA Lapis Permukaan</label>
                        <input type="text" name="tebal_lajur_1_ka" class="form-control" id="tebal_lajur_1_ka" placeholder="Masukkan Tebal Lajur 1 KA Lapis Permukaan">
                    </div>
                    <div class="form-group">
                        <label for="jenis_lajur_1_ka">Jenis Lajur 1 KA Lapis Permukaan</label>
                        <input type="text" name="jenis_lajur_1_ka" class="form-control" id="jenis_lajur_1_ka" placeholder="Masukkan Jenis Lajur 1 KA Lapis Permukaan">
                    </div>
                    <div class="form-group">
                        <label for="iri_lajur_1_ka">Iri Lajur 1 KA Lapis Permukaan</label>
                        <input type="text" name="iri_lajur_1_ka" class="form-control" id="iri_lajur_1_ka" placeholder="Masukkan Iri Lajur 1 KA Lapis Permukaan">
                    </div>
                    <div class="form-group">
                        <label for="lebar_lpa">Lebar Lapis Pondasi Atas</label>
                        <input type="text" name="lebar_lpa" class="form-control" id="lebar_lpa" placeholder="Masukkan Lebar Lapis Pondasi Atas">
                    </div>
                    <div class="form-group">
                        <label for="tebal_lpa">Tebal Lapis Pondasi Atas</label>
                        <input type="text" name="tebal_lpa" class="form-control" id="tebal_lpa" placeholder="Masukkan Tebal Lapis Pondasi Atas">
                    </div>
                    <div class="form-group">
                        <label for="jenis_lpa">Jenis Lapis Pondasi Atas</label>
                        <input type="text" name="jenis_lpa" class="form-control" id="jenis_lpa" placeholder="Masukkan Jenis Lapis Pondasi Atas">
                    </div>
                    <div class="form-group">
                        <label for="lebar_lpb">Lebar Lapis Pondasi Bawah</label>
                        <input type="text" name="lebar_lpb" class="form-control" id="lebar_lpb" placeholder="Masukkan Lebar Lapis Pondasi Bawah">
                    </div>
                    <div class="form-group">
                        <label for="tebal_lpb">Tebal Lapis Pondasi Bawah</label>
                        <input type="text" name="tebal_lpb" class="form-control" id="tebal_lpb" placeholder="Masukkan Tebal Lapis Pondasi Bawah">
                    </div>
                    <div class="form-group">
                        <label for="jenis_lpb">Jenis Lapis Pondasi Bawah</label>
                        <input type="text" name="jenis_lpb" class="form-control" id="jenis_lpb" placeholder="Masukkan Jenis Lapis Pondasi Bawah">
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

<div class="modal fade" id="modaleditdatateknik2median" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-xl" role="document">
        <div class="modal-content">
            <div class="modal-header btn btn-dark ">
                <h5 class="modal-title" id="formModalLabel"><img src="<?= base_url('assets'); ?>/logopemda.png" width="40"><strong> Edit Data Teknik 2 Median</strong></h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form id="formeditdatateknik2median" autocomplete="off">
                <div class="modal-body">
                    <div class="form-group">
                        <label for="ruas_km">Ruas KM</label>
                        <input type="hidden" name="id_data_teknik_2_median" class="form-control" id="id_data_teknik_2_median" placeholder="Masukkan Ruas" required>
                        <input type="text" name="ruas_km" class="form-control" id="ruas_km_2_median" placeholder="Masukkan Ruas KM">
                    </div>
                    <div class="form-group">
                        <label for="tebal_median">Tebal Median</label>
                        <input type="text" name="tebal_median" class="form-control" id="tebal_median" placeholder="Masukkan Tebal Median">
                    </div>
                    <div class="form-group">
                        <label for="lebar_median">Lebar Median</label>
                        <input type="text" name="lebar_median" class="form-control" id="lebar_median" placeholder="Masukkan Lebar Median">
                    </div>
                    <div class="form-group">
                        <label for="jenis_median">Jenis Median</label>
                        <input type="text" name="jenis_median" class="form-control" id="jenis_median" placeholder="Masukkan Jenis Median">
                    </div>
                    <div class="form-group">
                        <label for="kondisi_median">Kondisi Median</label>
                        <input type="text" name="kondisi_median" class="form-control" id="kondisi_median" placeholder="Masukkan Kondisi Median">
                    </div>
                    <div class="form-group">
                        <label for="lebar_luar_ki">Lebar Luar KI</label>
                        <input type="text" name="lebar_luar_ki" class="form-control" id="lebar_luar_ki" placeholder="Masukkan Lebar Luar KI">
                    </div>
                    <div class="form-group">
                        <label for="lebar_dalam_ki">Lebar Dalam KI</label>
                        <input type="text" name="lebar_dalam_ki" class="form-control" id="lebar_dalam_ki" placeholder="Masukkan Lebar Dalam KI">
                    </div>
                    <div class="form-group">
                        <label for="lebar_luar_ka">Lebar Luar KA</label>
                        <input type="text" name="lebar_luar_ka" class="form-control" id="lebar_luar_ka" placeholder="Masukkan Lebar Luar KA">
                    </div>
                    <div class="form-group">
                        <label for="lebar_dalam_ka">Lebar Dalam KA</label>
                        <input type="text" name="lebar_dalam_ka" class="form-control" id="lebar_dalam_ka" placeholder="Masukkan Lebar Dalam KA">
                    </div>
                    <div class="form-group">
                        <label for="tebal_luar_ki">Tebal Luar KI</label>
                        <input type="text" name="tebal_luar_ki" class="form-control" id="tebal_luar_ki" placeholder="Masukkan Tebal Luar KI">
                    </div>
                    <div class="form-group">
                        <label for="tebal_dalam_ki">Tebal Dalam KI</label>
                        <input type="text" name="tebal_dalam_ki" class="form-control" id="tebal_dalam_ki" placeholder="Masukkan Tebal Dalam KI">
                    </div>
                    <div class="form-group">
                        <label for="tebal_luar_ka">Tebal Luar KA</label>
                        <input type="text" name="tebal_luar_ka" class="form-control" id="tebal_luar_ka" placeholder="Masukkan Tebal Luar KA">
                    </div>
                    <div class="form-group">
                        <label for="tebal_dalam_ka">Tebal Dalam KA</label>
                        <input type="text" name="tebal_dalam_ka" class="form-control" id="tebal_dalam_ka" placeholder="Masukkan Tebal Dalam KA">
                    </div>
                    <div class="form-group">
                        <label for="jenis_luar_ki">Jenis Luar KI</label>
                        <input type="text" name="jenis_luar_ki" class="form-control" id="jenis_luar_ki" placeholder="Masukkan Jenis Luar KI">
                    </div>
                    <div class="form-group">
                        <label for="jenis_dalam_ki">Jenis Dalam KI</label>
                        <input type="text" name="jenis_dalam_ki" class="form-control" id="jenis_dalam_ki" placeholder="Masukkan Jenis Dalam KI">
                    </div>
                    <div class="form-group">
                        <label for="jenis_luar_ka">Jenis Luar KA</label>
                        <input type="text" name="jenis_luar_ka" class="form-control" id="jenis_luar_ka" placeholder="Masukkan Jenis Luar KA">
                    </div>
                    <div class="form-group">
                        <label for="jenis_dalam_ka">Jenis Dalam KA</label>
                        <input type="text" name="jenis_dalam_ka" class="form-control" id="jenis_dalam_ka" placeholder="Masukkan Jenis Dalam KA">
                    </div>
                    <div class="form-group">
                        <label for="posisi_luar_ki">Posisi Luar KI</label>
                        <input type="text" name="posisi_luar_ki" class="form-control" id="posisi_luar_ki" placeholder="Masukkan Posisi Luar KI">
                    </div>
                    <div class="form-group">
                        <label for="posisi_dalam_ki">Posisi Dalam KI</label>
                        <input type="text" name="posisi_dalam_ki" class="form-control" id="posisi_dalam_ki" placeholder="Masukkan Posisi Dalam KI">
                    </div>
                    <div class="form-group">
                        <label for="posisi_luar_ka">Posisi Luar KA</label>
                        <input type="text" name="posisi_luar_ka" class="form-control" id="posisi_luar_ka" placeholder="Masukkan Posisi Luar KA">
                    </div>
                    <div class="form-group">
                        <label for="posisi_dalam_ka">Posisi Dalam KA</label>
                        <input type="text" name="posisi_dalam_ka" class="form-control" id="posisi_dalam_ka" placeholder="Masukkan Posisi Dalam KA">
                    </div>
                    <div class="form-group">
                        <label for="kondisi_luar_ki">Kondisi Luar KI</label>
                        <input type="text" name="kondisi_luar_ki" class="form-control" id="kondisi_luar_ki" placeholder="Masukkan Kondisi Luar KI">
                    </div>
                    <div class="form-group">
                        <label for="kondisi_dalam_ki">Kondisi Dalam KI</label>
                        <input type="text" name="kondisi_dalam_ki" class="form-control" id="kondisi_dalam_ki" placeholder="Masukkan Kondisi Dalam KI">
                    </div>
                    <div class="form-group">
                        <label for="kondisi_luar_ka">Kondisi Luar KA</label>
                        <input type="text" name="kondisi_luar_ka" class="form-control" id="kondisi_luar_ka" placeholder="Masukkan Kondisi Luar KA">
                    </div>
                    <div class="form-group">
                        <label for="kondisi_dalam_ka">Kondisi Dalam KA</label>
                        <input type="text" name="kondisi_dalam_ka" class="form-control" id="kondisi_dalam_ka" placeholder="Masukkan Kondisi Dalam KA">
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

<div class="modal fade" id="modaleditdatateknik3" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-xl" role="document">
        <div class="modal-content">
            <div class="modal-header btn btn-dark ">
                <h5 class="modal-title" id="formModalLabel"><img src="<?= base_url('assets'); ?>/logopemda.png" width="40"><strong> Edit Data Teknik 3</strong></h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form id="formeditdatateknik3" autocomplete="off">
                <div class="modal-body">
                    <div class="form-group">
                        <label for="ruas_km">Ruas KM</label>
                        <input type="hidden" name="id_data_teknik_3" class="form-control" id="id_data_teknik_3" placeholder="Masukkan Ruas" required>
                        <input type="text" name="ruas_km" class="form-control" id="ruas_km_3" placeholder="Masukkan Ruas KM">
                    </div>
                    <div class="form-group">
                        <label for="gorong_jenis_material">Jenis Material Gorong Gorong</label>
                        <input type="text" name="gorong_jenis_material" class="form-control" id="gorong_jenis_material" placeholder="Masukkan Jenis Material Gorong Gorong">
                    </div>
                    <div class="form-group">
                        <label for="gorong_ukuran_panjang">Ukuran Panjang Gorong Gorong</label>
                        <input type="text" name="gorong_ukuran_panjang" class="form-control" id="gorong_ukuran_panjang" placeholder="Masukkan Ukuran Panjang Gorong Gorong">
                    </div>
                    <div class="form-group">
                        <label for="gorong_kondisi">Kondisi Gorong Gorong</label>
                        <input type="text" name="gorong_kondisi" class="form-control" id="gorong_kondisi" placeholder="Masukkan Kondisi Gorong Gorong">
                    </div>
                    <div class="form-group">
                        <label for="saluran_jenis_material">Jenis Material Saluran</label>
                        <input type="text" name="saluran_jenis_material" class="form-control" id="saluran_jenis_material" placeholder="Masukkan Jenis Material Saluran">
                    </div>
                    <div class="form-group">
                        <label for="saluran_ukuran_panjang">Ukuran Panjang Saluran</label>
                        <input type="text" name="saluran_ukuran_panjang" class="form-control" id="saluran_ukuran_panjang" placeholder="Masukkan Ukuran Panjang Saluran">
                    </div>
                    <div class="form-group">
                        <label for="saluran_kondisi">Kondisi Saluran</label>
                        <input type="text" name="saluran_kondisi" class="form-control" id="saluran_kondisi" placeholder="Masukkan Kondisi Saluran">
                    </div>
                    <div class="form-group">
                        <label for="manhole_jenis_material">Jenis Material Manhole</label>
                        <input type="text" name="manhole_jenis_material" class="form-control" id="manhole_jenis_material" placeholder="Masukkan Jenis Material Manhole">
                    </div>
                    <div class="form-group">
                        <label for="manhole_ukuran_panjang">Ukuran Panjang Manhole</label>
                        <input type="text" name="manhole_ukuran_panjang" class="form-control" id="manhole_ukuran_panjang" placeholder="Masukkan Ukuran Panjang Manhole">
                    </div>
                    <div class="form-group">
                        <label for="manhole_kondisi">Kondisi Manhole</label>
                        <input type="text" name="manhole_kondisi" class="form-control" id="manhole_kondisi" placeholder="Masukkan Kondisi Manhole">
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

<div class="modal fade" id="modaleditdatateknik4" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-xl" role="document">
        <div class="modal-content">
            <div class="modal-header btn btn-dark ">
                <h5 class="modal-title" id="formModalLabel"><img src="<?= base_url('assets'); ?>/logopemda.png" width="40"><strong> Edit Data Teknik 4</strong></h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form id="formeditdatateknik4" autocomplete="off">
                <div class="modal-body">
                    <div class="form-group">
                        <label for="ruas_km">Ruas KM</label>
                        <input type="hidden" name="id_data_teknik_4" class="form-control" id="id_data_teknik_4" placeholder="Masukkan Ruas" required>
                        <input type="text" name="ruas_km" class="form-control" id="ruas_km_4" placeholder="Masukkan Ruas KM">
                    </div>
                    <div class="form-group">
                        <label for="uraian">Uraian</label>
                        <input type="text" name="uraian" class="form-control" id="uraian" placeholder="Masukkan Uraian">
                    </div>
                    <div class="form-group">
                        <label for="ki">KI</label>
                        <input type="text" name="ki" class="form-control" id="ki" placeholder="Masukkan KI">
                    </div>
                    <div class="form-group">
                        <label for="mid"> MID</label>
                        <input type="text" name="mid" class="form-control" id="mid" placeholder="Masukkan MID">
                    </div>
                    <div class="form-group">
                        <label for="ka"> KA</label>
                        <input type="text" name="ka" class="form-control" id="ka" placeholder="Masukkan KA">
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

<div class="modal fade" id="modaleditdatateknik5" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-xl" role="document">
        <div class="modal-content">
            <div class="modal-header btn btn-dark ">
                <h5 class="modal-title" id="formModalLabel"><img src="<?= base_url('assets'); ?>/logopemda.png" width="40"><strong> Edit Data Teknik 5</strong></h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form id="formeditdatateknik5" autocomplete="off">
                <div class="modal-body">
                    <div class="form-group">
                        <label for="ruas_km">Ruas KM</label>
                        <input type="hidden" name="id_data_teknik_5" class="form-control" id="id_data_teknik_5" placeholder="Masukkan Ruas" required>
                        <input type="text" name="ruas_km" class="form-control" id="ruas_km_5" placeholder="Masukkan Ruas KM">
                    </div>
                    <div class="form-group">
                        <label for="jenis_utilitas_prasarana"> Jenis Utilitas Prasarana</label>
                        <input type="text" name="jenis_utilitas_prasarana" class="form-control" id="jenis_utilitas_prasarana" placeholder="Masukkan Jenis Utilitas Prasarana">
                    </div>
                    <div class="form-group">
                        <label for="ki_prasarana"> KI Prasarana</label>
                        <input type="text" name="ki_prasarana" class="form-control" id="ki_prasarana" placeholder="Masukkan KI Prasarana">
                    </div>
                    <div class="form-group">
                        <label for="mid_prasarana"> MID Prasarana</label>
                        <input type="text" name="mid_prasarana" class="form-control" id="mid_prasarana" placeholder="Masukkan MID Prasarana">
                    </div>
                    <div class="form-group">
                        <label for="ka_prasarana"> KA Prasarana</label>
                        <input type="text" name="ka_prasarana" class="form-control" id="ka_prasarana" placeholder="Masukkan KA Prasarana">
                    </div>
                    <div class="form-group">
                        <label for="jenis_utilitas_sarana"> Jenis Utilitas Sarana</label>
                        <input type="text" name="jenis_utilitas_sarana" class="form-control" id="jenis_utilitas_sarana" placeholder="Masukkan Jenis Utilitas Sarana">
                    </div>
                    <div class="form-group">
                        <label for="ki_sarana"> KI Sarana</label>
                        <input type="text" name="ki_sarana" class="form-control" id="ki_sarana" placeholder="Masukkan KI Sarana">
                    </div>
                    <div class="form-group">
                        <label for="mid_sarana"> MID Sarana</label>
                        <input type="text" name="mid_sarana" class="form-control" id="mid_sarana" placeholder="Masukkan MID Sarana">
                    </div>
                    <div class="form-group">
                        <label for="ka_sarana"> KA Sarana</label>
                        <input type="text" name="ka_sarana" class="form-control" id="ka_sarana" placeholder="Masukkan KA Sarana">
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

<div class="modal fade" id="modaleditdatalainnya" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-xl" role="document">
        <div class="modal-content">
            <div class="modal-header btn btn-dark ">
                <h5 class="modal-title" id="formModalLabel"><img src="<?= base_url('assets'); ?>/logopemda.png" width="40"><strong> Edit Data Lainnya</strong></h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form id="formeditdatalainnya" autocomplete="off">
                <div class="modal-body">
                    <div class="form-group">
                        <label for="ruas_km">Ruas KM</label>
                        <input type="hidden" name="id_data_lainnya" class="form-control" id="id_data_lainnya" placeholder="Masukkan Ruas" required>
                        <input type="text" name="ruas_km" class="form-control" id="ruas_km_lainnya" placeholder="Masukkan Ruas KM">
                    </div>
                    <div class="form-group">
                        <label for="uraian"> Uraian</label>
                        <input type="text" name="uraian" class="form-control" id="uraian_lainnya" placeholder="Masukkan Uraian">
                    </div>
                    <div class="form-group">
                        <label for="tanggal_pemanfaatan">Tanggal Pemanfaatan</label>
                        <input type="text" name="tanggal_pemanfaatan" class="form-control" id="tanggal_pemanfaatan" placeholder="Masukkan Tanggal Pemanfaatan">
                    </div>
                    <div class="form-group">
                        <label for="nilai">Nilai</label>
                        <input type="text" name="nilai" class="form-control" id="nilai" placeholder="Masukkan Nilai">
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

<div class="modal fade" id="modaleditdatalintasan" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-xl" role="document">
        <div class="modal-content">
            <div class="modal-header btn btn-dark ">
                <h5 class="modal-title" id="formModalLabel"><img src="<?= base_url('assets'); ?>/logopemda.png" width="40"><strong> Edit Data Lintasan Harian</strong></h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form id="formeditdatalintasan" autocomplete="off">
                <div class="modal-body">
                    <div class="form-group">
                        <label for="ruas_km">Ruas KM</label>
                        <input type="hidden" name="id_lhr" class="form-control" id="id_lhr" placeholder="Masukkan Ruas" required>
                        <input type="text" name="ruas_km" class="form-control" id="ruas_km_lhr" placeholder="Masukkan Ruas KM">
                    </div>
                    <div class="form-group">
                        <label for="lhr_ki_golongan_1"> LHR KI Golongan 1</label>
                        <input type="text" name="lhr_ki_golongan_1" class="form-control" id="lhr_ki_golongan_1" placeholder="Masukkan LHR KI Golongan 1">
                    </div>
                    <div class="form-group">
                        <label for="tarif_ki_golongan_1"> TARIF KI Golongan 1</label>
                        <input type="text" name="tarif_ki_golongan_1" class="form-control" id="tarif_ki_golongan_1" placeholder="Masukkan TARIF KI Golongan 1">
                    </div>
                    <div class="form-group">
                        <label for="lhr_ka_golongan_1"> LHR KA Golongan 1</label>
                        <input type="text" name="lhr_ka_golongan_1" class="form-control" id="lhr_ka_golongan_1" placeholder="Masukkan LHR KA Golongan 1">
                    </div>
                    <div class="form-group">
                        <label for="tarif_ka_golongan_1"> TARIF KA Golongan 1</label>
                        <input type="text" name="tarif_ka_golongan_1" class="form-control" id="tarif_ka_golongan_1" placeholder="Masukkan TARIF KA Golongan 1">
                    </div>
                    <div class="form-group">
                        <label for="lhr_ki_golongan_2"> LHR KI Golongan 2</label>
                        <input type="text" name="lhr_ki_golongan_2" class="form-control" id="lhr_ki_golongan_2" placeholder="Masukkan LHR KI Golongan 2">
                    </div>
                    <div class="form-group">
                        <label for="tarif_ki_golongan_2"> TARIF KI Golongan 2</label>
                        <input type="text" name="tarif_ki_golongan_2" class="form-control" id="tarif_ki_golongan_2" placeholder="Masukkan TARIF KI Golongan 2">
                    </div>
                    <div class="form-group">
                        <label for="lhr_ka_golongan_2"> LHR KA Golongan 2</label>
                        <input type="text" name="lhr_ka_golongan_2" class="form-control" id="lhr_ka_golongan_2" placeholder="Masukkan LHR KA Golongan 2">
                    </div>
                    <div class="form-group">
                        <label for="tarif_ka_golongan_2"> TARIF KA Golongan 2</label>
                        <input type="text" name="tarif_ka_golongan_2" class="form-control" id="tarif_ka_golongan_2" placeholder="Masukkan TARIF KA Golongan 2">
                    </div>
                    <div class="form-group">
                        <label for="lhr_ki_golongan_3"> LHR KI Golongan 3</label>
                        <input type="text" name="lhr_ki_golongan_3" class="form-control" id="lhr_ki_golongan_3" placeholder="Masukkan LHR KI Golongan 3">
                    </div>
                    <div class="form-group">
                        <label for="tarif_ki_golongan_3"> TARIF KI Golongan 3</label>
                        <input type="text" name="tarif_ki_golongan_3" class="form-control" id="tarif_ki_golongan_3" placeholder="Masukkan TARIF KI Golongan 3">
                    </div>
                    <div class="form-group">
                        <label for="lhr_ka_golongan_3"> LHR KA Golongan 3</label>
                        <input type="text" name="lhr_ka_golongan_3" class="form-control" id="lhr_ka_golongan_3" placeholder="Masukkan LHR KA Golongan 3">
                    </div>
                    <div class="form-group">
                        <label for="tarif_ka_golongan_3"> TARIF KA Golongan 3</label>
                        <input type="text" name="tarif_ka_golongan_3" class="form-control" id="tarif_ka_golongan_3" placeholder="Masukkan TARIF KA Golongan 3">
                    </div>
                    <div class="form-group">
                        <label for="lhr_ki_golongan_4"> LHR KI Golongan 4</label>
                        <input type="text" name="lhr_ki_golongan_4" class="form-control" id="lhr_ki_golongan_4" placeholder="Masukkan LHR KI Golongan 4">
                    </div>
                    <div class="form-group">
                        <label for="tarif_ki_golongan_4"> TARIF KI Golongan 4</label>
                        <input type="text" name="tarif_ki_golongan_4" class="form-control" id="tarif_ki_golongan_4" placeholder="Masukkan TARIF KI Golongan 4">
                    </div>
                    <div class="form-group">
                        <label for="lhr_ka_golongan_4"> LHR KA Golongan 4</label>
                        <input type="text" name="lhr_ka_golongan_4" class="form-control" id="lhr_ka_golongan_4" placeholder="Masukkan LHR KA Golongan 4">
                    </div>
                    <div class="form-group">
                        <label for="tarif_ka_golongan_4"> TARIF KA Golongan 4</label>
                        <input type="text" name="tarif_ka_golongan_4" class="form-control" id="tarif_ka_golongan_4" placeholder="Masukkan TARIF KA Golongan 4">
                    </div>
                    <div class="form-group">
                        <label for="lhr_ki_golongan_5"> LHR KI Golongan 5</label>
                        <input type="text" name="lhr_ki_golongan_5" class="form-control" id="lhr_ki_golongan_5" placeholder="Masukkan LHR KI Golongan 5">
                    </div>
                    <div class="form-group">
                        <label for="tarif_ki_golongan_5"> TARIF KI Golongan 5</label>
                        <input type="text" name="tarif_ki_golongan_5" class="form-control" id="tarif_ki_golongan_5" placeholder="Masukkan TARIF KI Golongan 5">
                    </div>
                    <div class="form-group">
                        <label for="lhr_ka_golongan_5"> LHR KA Golongan 5</label>
                        <input type="text" name="lhr_ka_golongan_5" class="form-control" id="lhr_ka_golongan_5" placeholder="Masukkan LHR KA Golongan 5">
                    </div>
                    <div class="form-group">
                        <label for="tarif_ka_golongan_5"> TARIF KA Golongan 5</label>
                        <input type="text" name="tarif_ka_golongan_5" class="form-control" id="tarif_ka_golongan_5" placeholder="Masukkan TARIF KA Golongan 5">
                    </div>
                    <div class="form-group">
                        <label for="lhr_ki_golongan_6"> LHR KI Golongan 6</label>
                        <input type="text" name="lhr_ki_golongan_6" class="form-control" id="lhr_ki_golongan_6" placeholder="Masukkan LHR KI Golongan 6">
                    </div>
                    <div class="form-group">
                        <label for="tarif_ki_golongan_6"> TARIF KI Golongan 6</label>
                        <input type="text" name="tarif_ki_golongan_6" class="form-control" id="tarif_ki_golongan_6" placeholder="Masukkan TARIF KI Golongan 6">
                    </div>
                    <div class="form-group">
                        <label for="lhr_ka_golongan_6"> LHR KA Golongan 6</label>
                        <input type="text" name="lhr_ka_golongan_6" class="form-control" id="lhr_ka_golongan_6" placeholder="Masukkan LHR KA Golongan 6">
                    </div>
                    <div class="form-group">
                        <label for="tarif_ka_golongan_6"> TARIF KA Golongan 6</label>
                        <input type="text" name="tarif_ka_golongan_6" class="form-control" id="tarif_ka_golongan_6" placeholder="Masukkan TARIF KA Golongan 6">
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

<div class="modal fade" id="modaleditdatageometrik" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-xl" role="document">
        <div class="modal-content">
            <div class="modal-header btn btn-dark ">
                <h5 class="modal-title" id="formModalLabel"><img src="<?= base_url('assets'); ?>/logopemda.png" width="40"><strong> Edit Data Geometrik</strong></h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form id="formeditdatageometrik" autocomplete="off">
                <div class="modal-body">
                    <div class="form-group">
                        <label for="ruas_km">Ruas KM</label>
                        <input type="hidden" name="id_geometrik" class="form-control" id="id_geometrik" placeholder="Masukkan Ruas" required>
                        <input type="text" name="ruas_km" class="form-control" id="ruas_km_geometrik" placeholder="Masukkan Ruas KM">
                    </div>
                    <div class="form-group">
                        <label for="lebar_rumija"> Lebar Rumija</label>
                        <input type="text" name="lebar_rumija" class="form-control" id="lebar_rumija" placeholder="Masukkan Lebar Rumija">
                    </div>
                    <div class="form-group">
                        <label for="gradien_kiri"> Gradien Kiri</label>
                        <input type="text" name="gradien_kiri" class="form-control" id="gradien_kiri" placeholder="Masukkan Gradien Kiri">
                    </div>
                    <div class="form-group">
                        <label for="gradien_kanan"> Gradien Kanan</label>
                        <input type="text" name="gradien_kanan" class="form-control" id="gradien_kanan" placeholder="Masukkan Gradien Kanan">
                    </div>
                    <div class="form-group">
                        <label for="cross_fall_kiri"> Cross Fall Kiri</label>
                        <input type="text" name="cross_fall_kiri" class="form-control" id="cross_fall_kiri" placeholder="Masukkan Cross Fall Kiri">
                    </div>
                    <div class="form-group">
                        <label for="cross_fall_kanan"> Cross Fall Kanan</label>
                        <input type="text" name="cross_fall_kanan" class="form-control" id="cross_fall_kanan" placeholder="Masukkan Cross Fall Kanan">
                    </div>
                    <div class="form-group">
                        <label for="superelevasi"> Superelevasi</label>
                        <input type="text" name="superelevasi" class="form-control" id="superelevasi" placeholder="Masukkan Superelevasi">
                    </div>
                    <div class="form-group">
                        <label for="radius"> Radius</label>
                        <input type="text" name="radius" class="form-control" id="radius" placeholder="Masukkan Radius">
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

<div class="modal fade" id="modaleditdatalingkungan" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-xl" role="document">
        <div class="modal-content">
            <div class="modal-header btn btn-dark ">
                <h5 class="modal-title" id="formModalLabel"><img src="<?= base_url('assets'); ?>/logopemda.png" width="40"><strong> Edit Data Lingkungan Jalan</strong></h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form id="formeditdatalingkungan" autocomplete="off">
                <div class="modal-body">
                    <div class="form-group">
                        <label for="ruas_km">Ruas KM</label>
                        <input type="hidden" name="id_data_lingkungan_jalan" class="form-control" id="id_data_lingkungan_jalan" placeholder="Masukkan Ruas" required>
                        <input type="text" name="ruas_km" class="form-control" id="ruas_km_lingkungan" placeholder="Masukkan Ruas KM">
                    </div>
                    <div class="form-group">
                        <label for="terrain_kiri"> Terrain Kiri</label>
                        <input type="text" name="terrain_kiri" class="form-control" id="terrain_kiri" placeholder="Masukkan Terrain Kiri">
                    </div>
                    <div class="form-group">
                        <label for="terrain_kanan"> Terrain Kanan</label>
                        <input type="text" name="terrain_kanan" class="form-control" id="terrain_kanan" placeholder="Masukkan Terrain Kanan">
                    </div>
                    <div class="form-group">
                        <label for="tata_guna_lahan_kiri"> Tata Guna Lahan Kiri</label>
                        <input type="text" name="tata_guna_lahan_kiri" class="form-control" id="tata_guna_lahan_kiri" placeholder="Masukkan Tata Guna Lahan Kiri">
                    </div>
                    <div class="form-group">
                        <label for="tata_guna_lahan_kanan"> Tata Guna Lahan Kanan</label>
                        <input type="text" name="tata_guna_lahan_kanan" class="form-control" id="tata_guna_lahan_kanan" placeholder="Masukkan Tata Guna Lahan Kanan">
                    </div>
                    <div class="form-group">
                        <label for="underpass_km"> Underpass KM</label>
                        <input type="text" name="underpass_km" class="form-control" id="underpass_km" placeholder="Masukkan Underpass KM">
                    </div>
                    <div class="form-group">
                        <label for="underpass_x"> Underpass X</label>
                        <input type="text" name="underpass_x" class="form-control" id="underpass_x" placeholder="Masukkan Underpass X">
                    </div>
                    <div class="form-group">
                        <label for="underpass_y"> Underpass Y</label>
                        <input type="text" name="underpass_y" class="form-control" id="underpass_y" placeholder="Masukkan Underpass Y">
                    </div>
                    <div class="form-group">
                        <label for="overpass_km"> Overpass KM</label>
                        <input type="text" name="overpass_km" class="form-control" id="overpass_km" placeholder="Masukkan Overpass KM">
                    </div>
                    <div class="form-group">
                        <label for="overpass_x"> Overpass X</label>
                        <input type="text" name="overpass_x" class="form-control" id="overpass_x" placeholder="Masukkan Overpass X">
                    </div>
                    <div class="form-group">
                        <label for="overpass_y"> Overpass Y</label>
                        <input type="text" name="overpass_y" class="form-control" id="overpass_y" placeholder="Masukkan Overpass Y">
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

<div id="view_teknik">

    <?php
    $data['where'] = "Identifikasi";
    $this->load->view('admin/map_ramp', $data) ?>
</div>