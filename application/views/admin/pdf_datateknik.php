<!DOCTYPE html>
<html>

<head>

    <title style="width: 60%;"><?= $judul ?></title>
    <style type="text/css">
        body {
            font-family: DejaVu Sans, sans-serif;
        }

        td {
            font-size: 10px;
        }

        th {
            font-size: 10px;
        }
    </style>
    <link rel="stylesheet" href="<?= base_url(); ?>assets/dist/css/adminlte.min.css">
</head>

<body>

    <div class="page-content">
        <div class="container-fluid">
            <section class="content">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-12 mt-2">
                            <div class="card">
                                <!-- /.card-header -->
                                <div class="card-body">
                                    <?php
                                    $no = 0;
                                    foreach ($identifikasi as $i) { ?>
                                        <center>
                                            <h5>
                                                <b>Data Teknik Ruas KM <?= $i['ruas_km']; ?></b><br>
                                            </h5>
                                        </center>
                                        <br>
                                        <h6><b> Identifikasi</b></h6>
                                        <table style="width: 100%;">
                                            <tr>
                                                <td style="width: 35%;">Ruas</td>
                                                <td style="width: 5%;">:</td>
                                                <td style="width: 60%;"><?= $i['ruas'] ?></td>
                                                <td style="width: 35%;">Seksi</td>
                                                <td style="width: 5%;">:</td>
                                                <td style="width: 60%;"><?= $i['seksi'] ?></td>
                                            </tr>
                                            <tr>
                                                <td style="width: 35%;">STA Awal</td>
                                                <td style="width: 5%;">:</td>
                                                <td style="width: 60%;"><?= $i['sta_awal'] ?></td>
                                                <td style="width: 35%;">STA Akhir</td>
                                                <td style="width: 5%;">:</td>
                                                <td style="width: 60%;"><?= $i['sta_akhir'] ?></td>
                                            </tr>
                                            <tr>
                                                <td style="width: 35%;">X Awal</td>
                                                <td style="width: 5%;">:</td>
                                                <td style="width: 60%;"><?= $i['x_awal'] ?></td>
                                                <td style="width: 35%;">X Akhir</td>
                                                <td style="width: 5%;">:</td>
                                                <td style="width: 60%;"><?= $i['x_akhir'] ?></td>
                                            </tr>
                                            <tr>
                                                <td style="width: 35%;">Y Awal</td>
                                                <td style="width: 5%;">:</td>
                                                <td style="width: 60%;"><?= $i['y_awal'] ?></td>
                                                <td style="width: 35%;">Y Akhir</td>
                                                <td style="width: 5%;">:</td>
                                                <td style="width: 60%;"><?= $i['y_akhir'] ?></td>
                                            </tr>
                                            <tr>
                                                <td style="width: 35%;">Z Awal</td>
                                                <td style="width: 5%;">:</td>
                                                <td style="width: 60%;"><?= $i['z_awal'] ?></td>
                                                <td style="width: 35%;">Z Akhir</td>
                                                <td style="width: 5%;">:</td>
                                                <td style="width: 60%;"><?= $i['z_akhir'] ?></td>
                                            </tr>
                                            <tr>
                                                <td style="width: 35%;">Deskripsi Awal</td>
                                                <td style="width: 5%;">:</td>
                                                <td style="width: 60%;"><?= $i['deskripsi_awal'] ?></td>
                                                <td style="width: 35%;">Deskripsi Akhir</td>
                                                <td style="width: 5%;">:</td>
                                                <td style="width: 60%;"><?= $i['deskripsi_akhir'] ?></td>
                                            </tr>
                                            <tr>
                                                <td style="width: 35%;">Tahun</td>
                                                <td style="width: 5%;">:</td>
                                                <td style="width: 60%;"><?= $i['tahun'] ?></td>
                                                <td style="width: 35%;">Provinsi</td>
                                                <td style="width: 5%;">:</td>
                                                <td style="width: 60%;"><?= $i['provinsi'] ?></td>
                                            </tr>
                                            <tr>
                                                <td style="width: 35%;">Kabupaten</td>
                                                <td style="width: 5%;">:</td>
                                                <td style="width: 60%;"><?= $i['kabupaten'] ?></td>
                                                <td style="width: 35%;">Kecamatan</td>
                                                <td style="width: 5%;">:</td>
                                                <td style="width: 60%;"><?= $i['kecamatan'] ?></td>
                                            </tr>
                                            <tr>
                                                <td style="width: 35%;">Desa</td>
                                                <td style="width: 5%;">:</td>
                                                <td style="width: 60%;"><?= $i['desa'] ?></td>
                                            </tr>
                                        </table>
                                        <?php if (isset($data_teknik_1[$no])) { ?>
                                            <br>
                                            <h6><b> Data Teknik 1</b></h6>
                                            <table style="width: 100%;">
                                                <tr>
                                                    <td style="width: 35%;">Luas Lahan Rumija</td>
                                                    <td style="width: 5%;">:</td>
                                                    <td style="width: 60%;"><?= $data_teknik_1[$no]['luas_lr'] ?></td>
                                                    <td style="width: 35%;">Luas Perkerasan Jalan</td>
                                                    <td style="width: 5%;">:</td>
                                                    <td style="width: 60%;"><?= $data_teknik_1[$no]['luas_pj'] ?></td>
                                                </tr>
                                                <tr>
                                                    <td style="width: 35%;">Data Lahan Rumija</td>
                                                    <td style="width: 5%;">:</td>
                                                    <td style="width: 60%;"><?= $data_teknik_1[$no]['data_lr'] ?></td>
                                                    <td style="width: 35%;">Data Perkerasan Jalan</td>
                                                    <td style="width: 5%;">:</td>
                                                    <td style="width: 60%;"><?= $data_teknik_1[$no]['data_pj'] ?></td>
                                                </tr>
                                                <tr>
                                                    <td style="width: 35%;">Nilai Lahan Rumija</td>
                                                    <td style="width: 5%;">:</td>
                                                    <td style="width: 60%;"><?= $data_teknik_1[$no]['nilai_lr'] ?></td>
                                                    <td style="width: 35%;">Nilai Perkerasan Jalan</td>
                                                    <td style="width: 5%;">:</td>
                                                    <td style="width: 60%;"><?= $data_teknik_1[$no]['nilai_pj'] ?></td>
                                                </tr>
                                            </table>
                                        <?php } ?>
                                        <?php if (isset($data_teknik_2[$no])) { ?>
                                            <br>
                                            <h6><b> Data Teknik 2</b></h6>
                                            <table style="width: 100%;">
                                                <tr>
                                                    <td style="width: 35%;">Lebar Lajur 1 KI</td>
                                                    <td style="width: 5%;">:</td>
                                                    <td style="width: 60%;"><?= $data_teknik_2[$no]['lebar_lajur_1_ki'] ?></td>
                                                    <td style="width: 35%;">Tebal Lajur 1 KI</td>
                                                    <td style="width: 5%;">:</td>
                                                    <td style="width: 60%;"><?= $data_teknik_2[$no]['tebal_lajur_1_ki'] ?></td>
                                                </tr>
                                                <tr>
                                                    <td style="width: 35%;">Jenis Lajur 1 KI</td>
                                                    <td style="width: 5%;">:</td>
                                                    <td style="width: 60%;"><?= $data_teknik_2[$no]['jenis_lajur_1_ki'] ?></td>
                                                    <td style="width: 35%;">IRI Lajur 1 KI</td>
                                                    <td style="width: 5%;">:</td>
                                                    <td style="width: 60%;"><?= $data_teknik_2[$no]['iri_lajur_1_ki'] ?></td>
                                                </tr>
                                                <tr>
                                                    <td style="width: 35%;">Lebar Lajur 2 KI</td>
                                                    <td style="width: 5%;">:</td>
                                                    <td style="width: 60%;"><?= $data_teknik_2[$no]['lebar_lajur_2_ki'] ?></td>
                                                    <td style="width: 35%;">Tebal Lajur 2 KI</td>
                                                    <td style="width: 5%;">:</td>
                                                    <td style="width: 60%;"><?= $data_teknik_2[$no]['tebal_lajur_2_ki'] ?></td>
                                                </tr>
                                                <tr>
                                                    <td style="width: 35%;">Jenis Lajur 2 KI</td>
                                                    <td style="width: 5%;">:</td>
                                                    <td style="width: 60%;"><?= $data_teknik_2[$no]['jenis_lajur_2_ki'] ?></td>
                                                    <td style="width: 35%;">IRI Lajur 2 KI</td>
                                                    <td style="width: 5%;">:</td>
                                                    <td style="width: 60%;"><?= $data_teknik_2[$no]['iri_lajur_2_ki'] ?></td>
                                                </tr>
                                                <tr>
                                                    <td style="width: 35%;">Lebar Lajur 2 KA</td>
                                                    <td style="width: 5%;">:</td>
                                                    <td style="width: 60%;"><?= $data_teknik_2[$no]['lebar_lajur_2_ka'] ?></td>
                                                    <td style="width: 35%;">Tebal Lajur 2 KA</td>
                                                    <td style="width: 5%;">:</td>
                                                    <td style="width: 60%;"><?= $data_teknik_2[$no]['tebal_lajur_2_ka'] ?></td>
                                                </tr>
                                                <tr>
                                                    <td style="width: 35%;">Jenis Lajur 2 KA</td>
                                                    <td style="width: 5%;">:</td>
                                                    <td style="width: 60%;"><?= $data_teknik_2[$no]['jenis_lajur_2_ka'] ?></td>
                                                    <td style="width: 35%;">IRI Lajur 2 KA</td>
                                                    <td style="width: 5%;">:</td>
                                                    <td style="width: 60%;"><?= $data_teknik_2[$no]['iri_lajur_2_ka'] ?></td>
                                                </tr>
                                                <tr>
                                                    <td style="width: 35%;">Lebar Lajur 1 KA</td>
                                                    <td style="width: 5%;">:</td>
                                                    <td style="width: 60%;"><?= $data_teknik_2[$no]['lebar_lajur_1_ka'] ?></td>
                                                    <td style="width: 35%;">Tebal Lajur 1 KA</td>
                                                    <td style="width: 5%;">:</td>
                                                    <td style="width: 60%;"><?= $data_teknik_2[$no]['tebal_lajur_1_ka'] ?></td>
                                                </tr>
                                                <tr>
                                                    <td style="width: 35%;">Jenis Lajur 1 KA</td>
                                                    <td style="width: 5%;">:</td>
                                                    <td style="width: 60%;"><?= $data_teknik_2[$no]['jenis_lajur_1_ka'] ?></td>
                                                    <td style="width: 35%;">IRI Lajur 1 KA</td>
                                                    <td style="width: 5%;">:</td>
                                                    <td style="width: 60%;"><?= $data_teknik_2[$no]['iri_lajur_1_ka'] ?></td>
                                                </tr>
                                                <tr>
                                                    <td style="width: 35%;">Lebar Lapis Pondasi Atas</td>
                                                    <td style="width: 5%;">:</td>
                                                    <td style="width: 60%;"><?= $data_teknik_2[$no]['lebar_lpa'] ?></td>
                                                    <td style="width: 35%;">Lebar Lapis Pondasi Bawah</td>
                                                    <td style="width: 5%;">:</td>
                                                    <td style="width: 60%;"><?= $data_teknik_2[$no]['lebar_lpb'] ?></td>
                                                </tr>
                                                <tr>
                                                    <td style="width: 35%;">Tebal Lapis Pondasi Atas</td>
                                                    <td style="width: 5%;">:</td>
                                                    <td style="width: 60%;"><?= $data_teknik_2[$no]['tebal_lpa'] ?></td>
                                                    <td style="width: 35%;">Tebal Lapis Pondasi Bawah</td>
                                                    <td style="width: 5%;">:</td>
                                                    <td style="width: 60%;"><?= $data_teknik_2[$no]['tebal_lpb'] ?></td>
                                                </tr>
                                                <tr>
                                                    <td style="width: 35%;">Jenis Lapis Pondasi Atas</td>
                                                    <td style="width: 5%;">:</td>
                                                    <td style="width: 60%;"><?= $data_teknik_2[$no]['jenis_lpa'] ?></td>
                                                    <td style="width: 35%;">Jenis Lapis Pondasi Bawah</td>
                                                    <td style="width: 5%;">:</td>
                                                    <td style="width: 60%;"><?= $data_teknik_2[$no]['jenis_lpb'] ?></td>
                                                </tr>
                                            </table>
                                        <?php } ?>
                                        <?php if (isset($data_teknik_2_median[$no])) { ?>
                                            <br>
                                            <h6><b> Data Teknik 2 Median</b></h6>
                                            <table style="width: 100%;">
                                                <tr>
                                                    <td style="width: 35%;">Tebal Median</td>
                                                    <td style="width: 5%;">:</td>
                                                    <td style="width: 60%;"><?= $data_teknik_2_median[$no]['tebal_median'] ?></td>
                                                    <td style="width: 35%;">Lebar Median</td>
                                                    <td style="width: 5%;">:</td>
                                                    <td style="width: 60%;"><?= $data_teknik_2_median[$no]['lebar_median'] ?></td>
                                                </tr>
                                                <tr>
                                                    <td style="width: 35%;">Jenis Median</td>
                                                    <td style="width: 5%;">:</td>
                                                    <td style="width: 60%;"><?= $data_teknik_2_median[$no]['jenis_median'] ?></td>
                                                    <td style="width: 35%;">Kondisi Median</td>
                                                    <td style="width: 5%;">:</td>
                                                    <td style="width: 60%;"><?= $data_teknik_2_median[$no]['kondisi_median'] ?></td>
                                                </tr>
                                                <tr>
                                                    <td style="width: 35%;">Lebar Luar KI</td>
                                                    <td style="width: 5%;">:</td>
                                                    <td style="width: 60%;"><?= $data_teknik_2_median[$no]['lebar_luar_ki'] ?></td>
                                                    <td style="width: 35%;">Lebar Dalam KI</td>
                                                    <td style="width: 5%;">:</td>
                                                    <td style="width: 60%;"><?= $data_teknik_2_median[$no]['lebar_dalam_ki'] ?></td>
                                                </tr>
                                                <tr>
                                                    <td style="width: 35%;">Lebar Luar KA</td>
                                                    <td style="width: 5%;">:</td>
                                                    <td style="width: 60%;"><?= $data_teknik_2_median[$no]['lebar_luar_ka'] ?></td>
                                                    <td style="width: 35%;">Lebar Dalam KA</td>
                                                    <td style="width: 5%;">:</td>
                                                    <td style="width: 60%;"><?= $data_teknik_2_median[$no]['lebar_dalam_ka'] ?></td>
                                                </tr>
                                                <tr>
                                                    <td style="width: 35%;">Tebal Luar KI</td>
                                                    <td style="width: 5%;">:</td>
                                                    <td style="width: 60%;"><?= $data_teknik_2_median[$no]['tebal_luar_ki'] ?></td>
                                                    <td style="width: 35%;">Tebal Dalam KI</td>
                                                    <td style="width: 5%;">:</td>
                                                    <td style="width: 60%;"><?= $data_teknik_2_median[$no]['tebal_dalam_ki'] ?></td>
                                                </tr>
                                                <tr>
                                                    <td style="width: 35%;">Tebal Luar KA</td>
                                                    <td style="width: 5%;">:</td>
                                                    <td style="width: 60%;"><?= $data_teknik_2_median[$no]['tebal_luar_ka'] ?></td>
                                                    <td style="width: 35%;">Tebal Dalam KA</td>
                                                    <td style="width: 5%;">:</td>
                                                    <td style="width: 60%;"><?= $data_teknik_2_median[$no]['tebal_dalam_ka'] ?></td>
                                                </tr>
                                                <tr>
                                                    <td style="width: 35%;">Jenis Luar KI</td>
                                                    <td style="width: 5%;">:</td>
                                                    <td style="width: 60%;"><?= $data_teknik_2_median[$no]['jenis_luar_ki'] ?></td>
                                                    <td style="width: 35%;">Jenis Dalam KI</td>
                                                    <td style="width: 5%;">:</td>
                                                    <td style="width: 60%;"><?= $data_teknik_2_median[$no]['jenis_dalam_ki'] ?></td>
                                                </tr>
                                                <tr>
                                                    <td style="width: 35%;">Jenis Luar KA</td>
                                                    <td style="width: 5%;">:</td>
                                                    <td style="width: 60%;"><?= $data_teknik_2_median[$no]['jenis_luar_ka'] ?></td>
                                                    <td style="width: 35%;">Jenis Dalam KA</td>
                                                    <td style="width: 5%;">:</td>
                                                    <td style="width: 60%;"><?= $data_teknik_2_median[$no]['jenis_dalam_ka'] ?></td>
                                                </tr>
                                                <tr>
                                                    <td style="width: 35%;">Posisi Luar KI</td>
                                                    <td style="width: 5%;">:</td>
                                                    <td style="width: 60%;"><?= $data_teknik_2_median[$no]['posisi_luar_ki'] ?></td>
                                                    <td style="width: 35%;">Posisi Dalam KI</td>
                                                    <td style="width: 5%;">:</td>
                                                    <td style="width: 60%;"><?= $data_teknik_2_median[$no]['posisi_dalam_ki'] ?></td>
                                                </tr>
                                                <tr>
                                                    <td style="width: 35%;">Posisi Luar KA</td>
                                                    <td style="width: 5%;">:</td>
                                                    <td style="width: 60%;"><?= $data_teknik_2_median[$no]['posisi_luar_ka'] ?></td>
                                                    <td style="width: 35%;">Posisi Dalam KA</td>
                                                    <td style="width: 5%;">:</td>
                                                    <td style="width: 60%;"><?= $data_teknik_2_median[$no]['posisi_dalam_ka'] ?></td>
                                                </tr>
                                                <tr>
                                                    <td style="width: 35%;">Kondisi Luar KI</td>
                                                    <td style="width: 5%;">:</td>
                                                    <td style="width: 60%;"><?= $data_teknik_2_median[$no]['kondisi_luar_ki'] ?></td>
                                                    <td style="width: 35%;">Kondisi Dalam KI</td>
                                                    <td style="width: 5%;">:</td>
                                                    <td style="width: 60%;"><?= $data_teknik_2_median[$no]['kondisi_dalam_ki'] ?></td>
                                                </tr>
                                                <tr>
                                                    <td style="width: 35%;">Kondisi Luar KA</td>
                                                    <td style="width: 5%;">:</td>
                                                    <td style="width: 60%;"><?= $data_teknik_2_median[$no]['kondisi_luar_ka'] ?></td>
                                                    <td style="width: 35%;">Kondisi Dalam KA</td>
                                                    <td style="width: 5%;">:</td>
                                                    <td style="width: 60%;"><?= $data_teknik_2_median[$no]['kondisi_dalam_ka'] ?></td>
                                                </tr>
                                            </table>
                                        <?php } ?>
                                        <?php if (isset($data_teknik_3[$no])) { ?>
                                            <br>
                                            <h6><b> Data Teknik 3</b></h6>
                                            <table style="width: 100%;">
                                                <tr>
                                                    <td style="width:35%;">Jenis Material Gorong Gorong</td>
                                                    <td style="width: 5%;">:</td>
                                                    <td style="width: 60%;"><?= $data_teknik_3[$no]['gorong_jenis_material'] ?></td>
                                                    <td style="width: 35%;">Jenis Material Saluran Penahan Tanah</td>
                                                    <td style="width: 5%;">:</td>
                                                    <td style="width: 60%;"><?= $data_teknik_3[$no]['saluran_jenis_material'] ?></td>
                                                </tr>
                                                <tr>
                                                    <td style="width:35%;">Ukurang Panjang Gorong Gorong</td>
                                                    <td style="width: 5%;">:</td>
                                                    <td style="width: 60%;"><?= $data_teknik_3[$no]['gorong_ukuran_panjang'] ?></td>
                                                    <td style="width: 35%;">Ukurang Panjang Saluran Penahan Tanah</td>
                                                    <td style="width: 5%;">:</td>
                                                    <td style="width: 60%;"><?= $data_teknik_3[$no]['saluran_ukuran_panjang'] ?></td>
                                                </tr>
                                                <tr>
                                                    <td style="width:35%;">Kondisi Gorong Gorong</td>
                                                    <td style="width: 5%;">:</td>
                                                    <td style="width: 60%;"><?= $data_teknik_3[$no]['gorong_kondisi'] ?></td>
                                                    <td style="width: 35%;">Kondisi Saluran Penahan Tanah</td>
                                                    <td style="width: 5%;">:</td>
                                                    <td style="width: 60%;"><?= $data_teknik_3[$no]['saluran_kondisi'] ?></td>
                                                </tr>
                                                <tr>
                                                    <td style="width:35%;">Jenis Material Manhole</td>
                                                    <td style="width: 5%;">:</td>
                                                    <td style="width: 60%;"><?= $data_teknik_3[$no]['manhole_jenis_material'] ?></td>
                                                    <td style="width: 35%;">Ukuran Panjang Manhole</td>
                                                    <td style="width: 5%;">:</td>
                                                    <td style="width: 60%;"><?= $data_teknik_3[$no]['manhole_ukuran_panjang'] ?></td>
                                                </tr>
                                                <tr>
                                                    <td style="width:35%;">Kondisi Manhole</td>
                                                    <td style="width: 5%;">:</td>
                                                    <td><?= $data_teknik_3[$no]['manhole_kondisi'] ?></td>
                                                </tr>
                                            </table>
                                        <?php } ?>
                                        <?php if (isset($data_teknik_4[$no])) { ?>
                                            <br>
                                            <h6><b> Data Teknik 4</b></h6>
                                            <table style="width: 100%;">
                                                <tr>
                                                    <td style="width:35%;">Uraian Perlengkapan Jalan</td>
                                                    <td style="width: 5%;">:</td>
                                                    <td style="width: 60%;"><?= $data_teknik_4[$no]['uraian'] ?></td>
                                                    <td style="width: 35%;">KI</td>
                                                    <td style="width: 5%;">:</td>
                                                    <td style="width: 60%;"><?= $data_teknik_4[$no]['ki'] ?></td>
                                                </tr>
                                                <tr>
                                                    <td style="width:35%;">MID</td>
                                                    <td style="width: 5%;">:</td>
                                                    <td style="width: 60%;"><?= $data_teknik_4[$no]['mid'] ?></td>
                                                    <td style="width: 35%;">KA</td>
                                                    <td style="width: 5%;">:</td>
                                                    <td style="width: 60%;"><?= $data_teknik_4[$no]['ka'] ?></td>
                                                </tr>
                                            </table>
                                        <?php } ?>
                                        <?php if (isset($data_teknik_5[$no])) { ?>
                                            <br>
                                            <h6><b> Data Teknik 5</b></h6>
                                            <table style="width: 100%;">
                                                <tr>
                                                    <td style="width:35%;">Jenis Utilitas Pra Sarana</td>
                                                    <td style="width: 5%;">:</td>
                                                    <td style="width: 60%;"><?= $data_teknik_5[$no]['jenis_utilitas_prasarana'] ?></td>
                                                    <td style="width: 35%;">KI Pra Sarana</td>
                                                    <td style="width: 5%;">:</td>
                                                    <td style="width: 60%;"><?= $data_teknik_5[$no]['ki_prasarana'] ?></td>
                                                </tr>
                                                <tr>
                                                    <td style="width:35%;">MID Pra Sarana</td>
                                                    <td style="width: 5%;">:</td>
                                                    <td style="width: 60%;"><?= $data_teknik_5[$no]['mid_prasarana'] ?></td>
                                                    <td style="width: 35%;">KA Pra Sarana</td>
                                                    <td style="width: 5%;">:</td>
                                                    <td style="width: 60%;"><?= $data_teknik_5[$no]['ka_prasarana'] ?></td>
                                                </tr>
                                                <tr>
                                                    <td style="width:35%;">Jenis Utilitas Sarana</td>
                                                    <td style="width: 5%;">:</td>
                                                    <td style="width: 60%;"><?= $data_teknik_5[$no]['jenis_utilitas_sarana'] ?></td>
                                                    <td style="width: 35%;">KI Sarana</td>
                                                    <td style="width: 5%;">:</td>
                                                    <td style="width: 60%;"><?= $data_teknik_5[$no]['ki_sarana'] ?></td>
                                                </tr>
                                                <tr>
                                                    <td style="width:35%;">MID Sarana</td>
                                                    <td style="width: 5%;">:</td>
                                                    <td style="width: 60%;"><?= $data_teknik_5[$no]['mid_sarana'] ?></td>
                                                    <td style="width: 35%;">KA Sarana</td>
                                                    <td style="width: 5%;">:</td>
                                                    <td style="width: 60%;"><?= $data_teknik_5[$no]['ka_sarana'] ?></td>
                                                </tr>
                                            </table>
                                        <?php } ?>
                                        <?php if (isset($data_lainnya[$no])) { ?>
                                            <br>
                                            <h6><b> Data Lainnya</b></h6>
                                            <table style="width: 100%;">
                                                <tr>
                                                    <td style="width:35%;">Uraian</td>
                                                    <td style="width: 5%;">:</td>
                                                    <td style="width: 60%;"><?= $data_lainnya[$no]['uraian'] ?></td>
                                                    <td style="width: 35%;">Tanggal Pemanfaatan</td>
                                                    <td style="width: 5%;">:</td>
                                                    <td style="width: 60%;"><?= $data_lainnya[$no]['tanggal_pemanfaatan'] ?></td>
                                                </tr>
                                                <tr>
                                                    <td style="width:35%;">Nilai</td>
                                                    <td style="width: 5%;">:</td>
                                                    <td><?= $data_lainnya[$no]['nilai'] ?></td>
                                                </tr>
                                            </table>
                                        <?php } ?>
                                        <?php if (isset($lhr[$no])) { ?>
                                            <br>
                                            <h6><b> Lintasan Harian</b></h6>
                                            <table style="width: 100%;">
                                                <tr>
                                                    <td style="width:35%;">LHR KI Golongan 1</td>
                                                    <td style="width: 5%;">:</td>
                                                    <td style="width: 60%;"><?= $lhr[$no]['lhr_ki_golongan_1'] ?></td>
                                                    <td style="width: 35%;">Tarif KI Golongan 1</td>
                                                    <td style="width: 5%;">:</td>
                                                    <td style="width: 60%;"><?= $lhr[$no]['tarif_ki_golongan_1'] ?></td>
                                                </tr>
                                                <tr>
                                                    <td style="width:35%;">LHR KA Golongan 1</td>
                                                    <td style="width: 5%;">:</td>
                                                    <td style="width: 60%;"><?= $lhr[$no]['lhr_ka_golongan_1'] ?></td>
                                                    <td style="width: 35%;">Tarif KA Golongan 1</td>
                                                    <td style="width: 5%;">:</td>
                                                    <td style="width: 60%;"><?= $lhr[$no]['tarif_ka_golongan_1'] ?></td>
                                                </tr>
                                                <tr>
                                                    <td style="width:35%;">LHR KI Golongan 2</td>
                                                    <td style="width: 5%;">:</td>
                                                    <td style="width: 60%;"><?= $lhr[$no]['lhr_ki_golongan_2'] ?></td>
                                                    <td style="width: 35%;">Tarif KI Golongan 2</td>
                                                    <td style="width: 5%;">:</td>
                                                    <td style="width: 60%;"><?= $lhr[$no]['tarif_ki_golongan_2'] ?></td>
                                                </tr>
                                                <tr>
                                                    <td style="width:35%;">LHR KA Golongan 2</td>
                                                    <td style="width: 5%;">:</td>
                                                    <td style="width: 60%;"><?= $lhr[$no]['lhr_ka_golongan_2'] ?></td>
                                                    <td style="width: 35%;">Tarif KA Golongan 2</td>
                                                    <td style="width: 5%;">:</td>
                                                    <td style="width: 60%;"><?= $lhr[$no]['tarif_ka_golongan_2'] ?></td>
                                                </tr>
                                                <tr>
                                                    <td style="width:35%;">LHR KI Golongan 3</td>
                                                    <td style="width: 5%;">:</td>
                                                    <td style="width: 60%;"><?= $lhr[$no]['lhr_ki_golongan_3'] ?></td>
                                                    <td style="width: 35%;">Tarif KI Golongan 3</td>
                                                    <td style="width: 5%;">:</td>
                                                    <td style="width: 60%;"><?= $lhr[$no]['tarif_ki_golongan_3'] ?></td>
                                                </tr>
                                                <tr>
                                                    <td style="width:35%;">LHR KA Golongan 3</td>
                                                    <td style="width: 5%;">:</td>
                                                    <td style="width: 60%;"><?= $lhr[$no]['lhr_ka_golongan_3'] ?></td>
                                                    <td style="width: 35%;">Tarif KA Golongan 3</td>
                                                    <td style="width: 5%;">:</td>
                                                    <td style="width: 60%;"><?= $lhr[$no]['tarif_ka_golongan_3'] ?></td>
                                                </tr>
                                                <tr>
                                                    <td style="width:35%;">LHR KI Golongan 4</td>
                                                    <td style="width: 5%;">:</td>
                                                    <td style="width: 60%;"><?= $lhr[$no]['lhr_ki_golongan_4'] ?></td>
                                                    <td style="width: 35%;">Tarif KI Golongan 4</td>
                                                    <td style="width: 5%;">:</td>
                                                    <td style="width: 60%;"><?= $lhr[$no]['tarif_ki_golongan_4'] ?></td>
                                                </tr>
                                                <tr>
                                                    <td style="width:35%;">LHR KA Golongan 4</td>
                                                    <td style="width: 5%;">:</td>
                                                    <td style="width: 60%;"><?= $lhr[$no]['lhr_ka_golongan_4'] ?></td>
                                                    <td style="width: 35%;">Tarif KA Golongan 4</td>
                                                    <td style="width: 5%;">:</td>
                                                    <td style="width: 60%;"><?= $lhr[$no]['tarif_ka_golongan_4'] ?></td>
                                                </tr>
                                                <tr>
                                                    <td style="width:35%;">LHR KA Golongan 5</td>
                                                    <td style="width: 5%;">:</td>
                                                    <td style="width: 60%;"><?= $lhr[$no]['lhr_ka_golongan_5'] ?></td>
                                                    <td style="width: 35%;">Tarif KA Golongan 5</td>
                                                    <td style="width: 5%;">:</td>
                                                    <td style="width: 60%;"><?= $lhr[$no]['tarif_ka_golongan_5'] ?></td>
                                                </tr>
                                                <tr>
                                                    <td style="width:35%;">LHR KI Golongan 6</td>
                                                    <td style="width: 5%;">:</td>
                                                    <td style="width: 60%;"><?= $lhr[$no]['lhr_ki_golongan_6'] ?></td>
                                                    <td style="width: 35%;">Tarif KI Golongan 6</td>
                                                    <td style="width: 5%;">:</td>
                                                    <td style="width: 60%;"><?= $lhr[$no]['tarif_ki_golongan_6'] ?></td>
                                                </tr>
                                                <tr>
                                                    <td style="width:35%;">LHR KA Golongan 6</td>
                                                    <td style="width: 5%;">:</td>
                                                    <td style="width: 60%;"><?= $lhr[$no]['lhr_ka_golongan_6'] ?></td>
                                                    <td style="width: 35%;">Tarif KA Golongan 6</td>
                                                    <td style="width: 5%;">:</td>
                                                    <td style="width: 60%;"><?= $lhr[$no]['tarif_ka_golongan_6'] ?></td>
                                                </tr>
                                            </table>
                                        <?php } ?>
                                        <?php if (isset($geometrik[$no])) { ?>
                                            <br>
                                            <h6><b>Data Geometrik</b></h6>
                                            <table style="width: 100%;">
                                                <tr>
                                                    <td style="width:35%;">Lebar Rumija</td>
                                                    <td style="width: 5%;">:</td>
                                                    <td style="width: 60%;"><?= $geometrik[$no]['lebar_rumija'] ?></td>
                                                    <td style="width: 35%;">Gradien Kiri</td>
                                                    <td style="width: 5%;">:</td>
                                                    <td style="width: 60%;"><?= $geometrik[$no]['gradien_kiri'] ?></td>
                                                </tr>
                                                <tr>
                                                    <td style="width:35%;">Gradien Kanan</td>
                                                    <td style="width: 5%;">:</td>
                                                    <td style="width: 60%;"><?= $geometrik[$no]['gradien_kanan'] ?></td>
                                                    <td style="width: 35%;">Cross Fall Kiri</td>
                                                    <td style="width: 5%;">:</td>
                                                    <td style="width: 60%;"><?= $geometrik[$no]['cross_fall_kiri'] ?></td>
                                                </tr>
                                                <tr>
                                                    <td style="width:35%;">Cross Fall Kanan</td>
                                                    <td style="width: 5%;">:</td>
                                                    <td style="width: 60%;"><?= $geometrik[$no]['cross_fall_kanan'] ?></td>
                                                    <td style="width: 35%;">Superelevasi</td>
                                                    <td style="width: 5%;">:</td>
                                                    <td style="width: 60%;"><?= $geometrik[$no]['superelevasi'] ?></td>
                                                </tr>
                                                <tr>
                                                    <td style="width:35%;">Radius</td>
                                                    <td style="width: 5%;">:</td>
                                                    <td><?= $geometrik[$no]['radius'] ?></td>
                                                </tr>
                                            </table>
                                        <?php } ?>
                                        <?php if (isset($data_lingkungan_jalan[$no])) { ?>
                                            <br>
                                            <h6><b>Data Lingkungan Jalanan</b></h6>
                                            <table style="width: 100%;">
                                                <tr>
                                                    <td style="width:35%;">Terrain Kiri</td>
                                                    <td style="width: 5%;">:</td>
                                                    <td style="width: 60%;"><?= $data_lingkungan_jalan[$no]['terrain_kiri'] ?></td>
                                                    <td style="width: 35%;">Terrain Kanan</td>
                                                    <td style="width: 5%;">:</td>
                                                    <td style="width: 60%;"><?= $data_lingkungan_jalan[$no]['terrain_kanan'] ?></td>
                                                </tr>
                                                <tr>
                                                    <td style="width:35%;">Tata Guna Lahan Kiri</td>
                                                    <td style="width: 5%;">:</td>
                                                    <td style="width: 60%;"><?= $data_lingkungan_jalan[$no]['tata_guna_lahan_kiri'] ?></td>
                                                    <td style="width: 35%;">Tata Guna Lahan Kanan</td>
                                                    <td style="width: 5%;">:</td>
                                                    <td style="width: 60%;"><?= $data_lingkungan_jalan[$no]['tata_guna_lahan_kanan'] ?></td>
                                                </tr>
                                                <tr>
                                                    <td style="width:35%;">Underpass KM</td>
                                                    <td style="width: 5%;">:</td>
                                                    <td style="width: 60%;"><?= $data_lingkungan_jalan[$no]['underpass_km'] ?></td>
                                                    <td style="width: 35%;">Underpass X</td>
                                                    <td style="width: 5%;">:</td>
                                                    <td style="width: 60%;"><?= $data_lingkungan_jalan[$no]['underpass_x'] ?></td>
                                                </tr>
                                                <tr>
                                                    <td style="width:35%;">Underpass Y</td>
                                                    <td style="width: 5%;">:</td>
                                                    <td style="width: 60%;"><?= $data_lingkungan_jalan[$no]['underpass_y'] ?></td>
                                                    <td style="width: 35%;">Overpass KM</td>
                                                    <td style="width: 5%;">:</td>
                                                    <td style="width: 60%;"><?= $data_lingkungan_jalan[$no]['overpass_km'] ?></td>
                                                </tr>
                                                <tr>
                                                    <td style="width:35%;">Overpass X</td>
                                                    <td style="width: 5%;">:</td>
                                                    <td style="width: 60%;"><?= $data_lingkungan_jalan[$no]['overpass_x'] ?></td>
                                                    <td style="width: 35%;">Overpass Y</td>
                                                    <td style="width: 5%;">:</td>
                                                    <td style="width: 60%;"><?= $data_lingkungan_jalan[$no]['overpass_y'] ?></td>
                                                </tr>
                                            </table>
                                        <?php } ?>
                                        <br>
                                    <?php
                                        $no++;
                                    }
                                    ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

        </div>
    </div>
</body>

</html>