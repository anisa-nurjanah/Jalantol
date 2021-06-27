<!DOCTYPE html>
<html>

<head>

    <title style="width: 30%;"><?= $judul ?></title>
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
                                                <td style="width: 15%;">Ruas</td>
                                                <td style="width: 5%;">:</td>
                                                <td style="width: 30%;"><?= $i['ruas'] ?></td>
                                                <td style="width: 15%;">Seksi</td>
                                                <td style="width: 5%;">:</td>
                                                <td style="width: 30%;"><?= $i['seksi'] ?></td>
                                            </tr>
                                            <tr>
                                                <td style="width: 15%;">STA Awal</td>
                                                <td style="width: 5%;">:</td>
                                                <td style="width: 30%;"><?= $i['sta_awal'] ?></td>
                                                <td style="width: 15%;">STA Akhir</td>
                                                <td style="width: 5%;">:</td>
                                                <td style="width: 30%;"><?= $i['sta_akhir'] ?></td>
                                            </tr>
                                            <tr>
                                                <td style="width: 15%;">X Awal</td>
                                                <td style="width: 5%;">:</td>
                                                <td style="width: 30%;"><?= $i['x_awal'] ?></td>
                                                <td style="width: 15%;">X Akhir</td>
                                                <td style="width: 5%;">:</td>
                                                <td style="width: 30%;"><?= $i['x_akhir'] ?></td>
                                            </tr>
                                            <tr>
                                                <td style="width: 15%;">Y Awal</td>
                                                <td style="width: 5%;">:</td>
                                                <td style="width: 30%;"><?= $i['y_awal'] ?></td>
                                                <td style="width: 15%;">Y Akhir</td>
                                                <td style="width: 5%;">:</td>
                                                <td style="width: 30%;"><?= $i['y_akhir'] ?></td>
                                            </tr>
                                            <tr>
                                                <td style="width: 15%;">Z Awal</td>
                                                <td style="width: 5%;">:</td>
                                                <td style="width: 30%;"><?= $i['z_awal'] ?></td>
                                                <td style="width: 15%;">Z Akhir</td>
                                                <td style="width: 5%;">:</td>
                                                <td style="width: 30%;"><?= $i['z_akhir'] ?></td>
                                            </tr>
                                            <tr>
                                                <td style="width: 15%;">Deskripsi Awal</td>
                                                <td style="width: 5%;">:</td>
                                                <td style="width: 30%;"><?= $i['deskripsi_awal'] ?></td>
                                                <td style="width: 15%;">Deskripsi Akhir</td>
                                                <td style="width: 5%;">:</td>
                                                <td style="width: 30%;"><?= $i['deskripsi_akhir'] ?></td>
                                            </tr>
                                            <tr>
                                                <td style="width: 15%;">Tahun</td>
                                                <td style="width: 5%;">:</td>
                                                <td style="width: 30%;"><?= $i['tahun'] ?></td>
                                                <td style="width: 15%;">Provinsi</td>
                                                <td style="width: 5%;">:</td>
                                                <td style="width: 30%;"><?= $i['provinsi'] ?></td>
                                            </tr>
                                            <tr>
                                                <td style="width: 15%;">Kabupaten</td>
                                                <td style="width: 5%;">:</td>
                                                <td style="width: 30%;"><?= $i['kabupaten'] ?></td>
                                                <td style="width: 15%;">Kecamatan</td>
                                                <td style="width: 5%;">:</td>
                                                <td style="width: 30%;"><?= $i['kecamatan'] ?></td>
                                            </tr>
                                            <tr>
                                                <td style="width: 15%;">Desa</td>
                                                <td style="width: 5%;">:</td>
                                                <td style="width: 30%;"><?= $i['desa'] ?></td>
                                            </tr>
                                        </table>
                                        <?php if (isset($data_teknik_1[$no])) { ?>
                                            <br>
                                            <h6><b> Data Teknik 1</b></h6>
                                            <table style="width: 100%;">
                                                <tr>
                                                    <td style="width: 15%;">Luas Lahan Rumija</td>
                                                    <td style="width: 5%;">:</td>
                                                    <td style="width: 30%;"><?= $data_teknik_1[$no]['luas_lr'] ?></td>
                                                    <td style="width: 15%;">Luas Perkerasan Jalan</td>
                                                    <td style="width: 5%;">:</td>
                                                    <td style="width: 30%;"><?= $data_teknik_1[$no]['luas_pj'] ?></td>
                                                </tr>
                                                <tr>
                                                    <td style="width: 15%;">Data Lahan Rumija</td>
                                                    <td style="width: 5%;">:</td>
                                                    <td style="width: 30%;"><?= $data_teknik_1[$no]['data_lr'] ?></td>
                                                    <td style="width: 15%;">Data Perkerasan Jalan</td>
                                                    <td style="width: 5%;">:</td>
                                                    <td style="width: 30%;"><?= $data_teknik_1[$no]['data_pj'] ?></td>
                                                </tr>
                                                <tr>
                                                    <td style="width: 15%;">Nilai Lahan Rumija</td>
                                                    <td style="width: 5%;">:</td>
                                                    <td style="width: 30%;"><?= $data_teknik_1[$no]['nilai_lr'] ?></td>
                                                    <td style="width: 15%;">Nilai Perkerasan Jalan</td>
                                                    <td style="width: 5%;">:</td>
                                                    <td style="width: 30%;"><?= $data_teknik_1[$no]['nilai_pj'] ?></td>
                                                </tr>
                                            </table>
                                        <?php } ?>
                                        <?php if (isset($data_teknik_2[$no])) { ?>
                                            <br>
                                            <h6><b> Data Teknik 2</b></h6>
                                            <table style="width: 100%;">
                                                <tr>
                                                    <td style="width: 15%;">Lebar Lajur 1 KI</td>
                                                    <td style="width: 5%;">:</td>
                                                    <td style="width: 30%;"><?= $data_teknik_2[$no]['lebar_lajur_1_ki'] ?></td>
                                                    <td style="width: 15%;">Tebal Lajur 1 KI</td>
                                                    <td style="width: 5%;">:</td>
                                                    <td style="width: 30%;"><?= $data_teknik_2[$no]['tebal_lajur_1_ki'] ?></td>
                                                </tr>
                                                <tr>
                                                    <td style="width: 15%;">Jenis Lajur 1 KI</td>
                                                    <td style="width: 5%;">:</td>
                                                    <td style="width: 30%;"><?= $data_teknik_2[$no]['jenis_lajur_1_ki'] ?></td>
                                                    <td style="width: 15%;">IRI Lajur 1 KI</td>
                                                    <td style="width: 5%;">:</td>
                                                    <td style="width: 30%;"><?= $data_teknik_2[$no]['iri_lajur_1_ki'] ?></td>
                                                </tr>
                                                <tr>
                                                    <td style="width: 15%;">Lebar Lajur 2 KI</td>
                                                    <td style="width: 5%;">:</td>
                                                    <td style="width: 30%;"><?= $data_teknik_2[$no]['lebar_lajur_2_ki'] ?></td>
                                                    <td style="width: 15%;">Tebal Lajur 2 KI</td>
                                                    <td style="width: 5%;">:</td>
                                                    <td style="width: 30%;"><?= $data_teknik_2[$no]['tebal_lajur_2_ki'] ?></td>
                                                </tr>
                                                <tr>
                                                    <td style="width: 15%;">Jenis Lajur 2 KI</td>
                                                    <td style="width: 5%;">:</td>
                                                    <td style="width: 30%;"><?= $data_teknik_2[$no]['jenis_lajur_2_ki'] ?></td>
                                                    <td style="width: 15%;">IRI Lajur 2 KI</td>
                                                    <td style="width: 5%;">:</td>
                                                    <td style="width: 30%;"><?= $data_teknik_2[$no]['iri_lajur_2_ki'] ?></td>
                                                </tr>
                                                <tr>
                                                    <td style="width: 15%;">Lebar Lajur 2 KA</td>
                                                    <td style="width: 5%;">:</td>
                                                    <td style="width: 30%;"><?= $data_teknik_2[$no]['lebar_lajur_2_ka'] ?></td>
                                                    <td style="width: 15%;">Tebal Lajur 2 KA</td>
                                                    <td style="width: 5%;">:</td>
                                                    <td style="width: 30%;"><?= $data_teknik_2[$no]['tebal_lajur_2_ka'] ?></td>
                                                </tr>
                                                <tr>
                                                    <td style="width: 15%;">Jenis Lajur 2 KA</td>
                                                    <td style="width: 5%;">:</td>
                                                    <td style="width: 30%;"><?= $data_teknik_2[$no]['jenis_lajur_2_ka'] ?></td>
                                                    <td style="width: 15%;">IRI Lajur 2 KA</td>
                                                    <td style="width: 5%;">:</td>
                                                    <td style="width: 30%;"><?= $data_teknik_2[$no]['iri_lajur_2_ka'] ?></td>
                                                </tr>
                                                <tr>
                                                    <td style="width: 15%;">Lebar Lajur 1 KA</td>
                                                    <td style="width: 5%;">:</td>
                                                    <td style="width: 30%;"><?= $data_teknik_2[$no]['lebar_lajur_1_ka'] ?></td>
                                                    <td style="width: 15%;">Tebal Lajur 1 KA</td>
                                                    <td style="width: 5%;">:</td>
                                                    <td style="width: 30%;"><?= $data_teknik_2[$no]['tebal_lajur_1_ka'] ?></td>
                                                </tr>
                                                <tr>
                                                    <td style="width: 15%;">Jenis Lajur 1 KA</td>
                                                    <td style="width: 5%;">:</td>
                                                    <td style="width: 30%;"><?= $data_teknik_2[$no]['jenis_lajur_1_ka'] ?></td>
                                                    <td style="width: 15%;">IRI Lajur 1 KA</td>
                                                    <td style="width: 5%;">:</td>
                                                    <td style="width: 30%;"><?= $data_teknik_2[$no]['iri_lajur_1_ka'] ?></td>
                                                </tr>
                                                <tr>
                                                    <td style="width: 15%;">Lebar Lapis Pondasi Atas</td>
                                                    <td style="width: 5%;">:</td>
                                                    <td style="width: 30%;"><?= $data_teknik_2[$no]['lebar_lpa'] ?></td>
                                                    <td style="width: 15%;">Lebar Lapis Pondasi Bawah</td>
                                                    <td style="width: 5%;">:</td>
                                                    <td style="width: 30%;"><?= $data_teknik_2[$no]['lebar_lpb'] ?></td>
                                                </tr>
                                                <tr>
                                                    <td style="width: 15%;">Tebal Lapis Pondasi Atas</td>
                                                    <td style="width: 5%;">:</td>
                                                    <td style="width: 30%;"><?= $data_teknik_2[$no]['tebal_lpa'] ?></td>
                                                    <td style="width: 15%;">Tebal Lapis Pondasi Bawah</td>
                                                    <td style="width: 5%;">:</td>
                                                    <td style="width: 30%;"><?= $data_teknik_2[$no]['tebal_lpb'] ?></td>
                                                </tr>
                                                <tr>
                                                    <td style="width: 15%;">Jenis Lapis Pondasi Atas</td>
                                                    <td style="width: 5%;">:</td>
                                                    <td style="width: 30%;"><?= $data_teknik_2[$no]['jenis_lpa'] ?></td>
                                                    <td style="width: 15%;">Jenis Lapis Pondasi Bawah</td>
                                                    <td style="width: 5%;">:</td>
                                                    <td style="width: 30%;"><?= $data_teknik_2[$no]['jenis_lpb'] ?></td>
                                                </tr>
                                            </table>
                                        <?php } ?>
                                        <?php if (isset($data_teknik_2_median[$no])) { ?>
                                            <br>
                                            <h6><b> Data Teknik 2 Median</b></h6>
                                            <table style="width: 100%;">
                                                <tr>
                                                    <td style="width: 15%;">Tebal Median</td>
                                                    <td style="width: 5%;">:</td>
                                                    <td style="width: 30%;"><?= $data_teknik_2_median[$no]['tebal_median'] ?></td>
                                                    <td style="width: 15%;">Lebar Median</td>
                                                    <td style="width: 5%;">:</td>
                                                    <td style="width: 30%;"><?= $data_teknik_2_median[$no]['lebar_median'] ?></td>
                                                </tr>
                                                <tr>
                                                    <td style="width: 15%;">Jenis Median</td>
                                                    <td style="width: 5%;">:</td>
                                                    <td style="width: 30%;"><?= $data_teknik_2_median[$no]['jenis_median'] ?></td>
                                                    <td style="width: 15%;">Kondisi Median</td>
                                                    <td style="width: 5%;">:</td>
                                                    <td style="width: 30%;"><?= $data_teknik_2_median[$no]['kondisi_median'] ?></td>
                                                </tr>
                                                <tr>
                                                    <td style="width: 15%;">Lebar Luar KI</td>
                                                    <td style="width: 5%;">:</td>
                                                    <td style="width: 30%;"><?= $data_teknik_2_median[$no]['lebar_luar_ki'] ?></td>
                                                    <td style="width: 15%;">Lebar Dalam KI</td>
                                                    <td style="width: 5%;">:</td>
                                                    <td style="width: 30%;"><?= $data_teknik_2_median[$no]['lebar_dalam_ki'] ?></td>
                                                </tr>
                                                <tr>
                                                    <td style="width: 15%;">Lebar Luar KA</td>
                                                    <td style="width: 5%;">:</td>
                                                    <td style="width: 30%;"><?= $data_teknik_2_median[$no]['lebar_luar_ka'] ?></td>
                                                    <td style="width: 15%;">Lebar Dalam KA</td>
                                                    <td style="width: 5%;">:</td>
                                                    <td style="width: 30%;"><?= $data_teknik_2_median[$no]['lebar_dalam_ka'] ?></td>
                                                </tr>
                                                <tr>
                                                    <td style="width: 15%;">Tebal Luar KI</td>
                                                    <td style="width: 5%;">:</td>
                                                    <td style="width: 30%;"><?= $data_teknik_2_median[$no]['tebal_luar_ki'] ?></td>
                                                    <td style="width: 15%;">Tebal Dalam KI</td>
                                                    <td style="width: 5%;">:</td>
                                                    <td style="width: 30%;"><?= $data_teknik_2_median[$no]['tebal_dalam_ki'] ?></td>
                                                </tr>
                                                <tr>
                                                    <td style="width: 15%;">Tebal Luar KA</td>
                                                    <td style="width: 5%;">:</td>
                                                    <td style="width: 30%;"><?= $data_teknik_2_median[$no]['tebal_luar_ka'] ?></td>
                                                    <td style="width: 15%;">Tebal Dalam KA</td>
                                                    <td style="width: 5%;">:</td>
                                                    <td style="width: 30%;"><?= $data_teknik_2_median[$no]['tebal_dalam_ka'] ?></td>
                                                </tr>
                                                <tr>
                                                    <td style="width: 15%;">Jenis Luar KI</td>
                                                    <td style="width: 5%;">:</td>
                                                    <td style="width: 30%;"><?= $data_teknik_2_median[$no]['jenis_luar_ki'] ?></td>
                                                    <td style="width: 15%;">Jenis Dalam KI</td>
                                                    <td style="width: 5%;">:</td>
                                                    <td style="width: 30%;"><?= $data_teknik_2_median[$no]['jenis_dalam_ki'] ?></td>
                                                </tr>
                                                <tr>
                                                    <td style="width: 15%;">Jenis Luar KA</td>
                                                    <td style="width: 5%;">:</td>
                                                    <td style="width: 30%;"><?= $data_teknik_2_median[$no]['jenis_luar_ka'] ?></td>
                                                    <td style="width: 15%;">Jenis Dalam KA</td>
                                                    <td style="width: 5%;">:</td>
                                                    <td style="width: 30%;"><?= $data_teknik_2_median[$no]['jenis_dalam_ka'] ?></td>
                                                </tr>
                                                <tr>
                                                    <td style="width: 15%;">Posisi Luar KI</td>
                                                    <td style="width: 5%;">:</td>
                                                    <td style="width: 30%;"><?= $data_teknik_2_median[$no]['posisi_luar_ki'] ?></td>
                                                    <td style="width: 15%;">Posisi Dalam KI</td>
                                                    <td style="width: 5%;">:</td>
                                                    <td style="width: 30%;"><?= $data_teknik_2_median[$no]['posisi_dalam_ki'] ?></td>
                                                </tr>
                                                <tr>
                                                    <td style="width: 15%;">Posisi Luar KA</td>
                                                    <td style="width: 5%;">:</td>
                                                    <td style="width: 30%;"><?= $data_teknik_2_median[$no]['posisi_luar_ka'] ?></td>
                                                    <td style="width: 15%;">Posisi Dalam KA</td>
                                                    <td style="width: 5%;">:</td>
                                                    <td style="width: 30%;"><?= $data_teknik_2_median[$no]['posisi_dalam_ka'] ?></td>
                                                </tr>
                                                <tr>
                                                    <td style="width: 15%;">Kondisi Luar KI</td>
                                                    <td style="width: 5%;">:</td>
                                                    <td style="width: 30%;"><?= $data_teknik_2_median[$no]['kondisi_luar_ki'] ?></td>
                                                    <td style="width: 15%;">Kondisi Dalam KI</td>
                                                    <td style="width: 5%;">:</td>
                                                    <td style="width: 30%;"><?= $data_teknik_2_median[$no]['kondisi_dalam_ki'] ?></td>
                                                </tr>
                                                <tr>
                                                    <td style="width: 15%;">Kondisi Luar KA</td>
                                                    <td style="width: 5%;">:</td>
                                                    <td style="width: 30%;"><?= $data_teknik_2_median[$no]['kondisi_luar_ka'] ?></td>
                                                    <td style="width: 15%;">Kondisi Dalam KA</td>
                                                    <td style="width: 5%;">:</td>
                                                    <td style="width: 30%;"><?= $data_teknik_2_median[$no]['kondisi_dalam_ka'] ?></td>
                                                </tr>
                                            </table>
                                        <?php } ?>
                                        <?php if (isset($data_teknik_3[$no])) { ?>
                                            <br>
                                            <h6><b> Data Teknik 3</b></h6>
                                            <table style="width: 100%;">
                                                <tr>
                                                    <td style="width:15%;">Jenis Material Gorong Gorong</td>
                                                    <td style="width: 5%;">:</td>
                                                    <td style="width: 30%;"><?= $data_teknik_3[$no]['gorong_jenis_material'] ?></td>
                                                    <td style="width: 15%;">Jenis Material Saluran Penahan Tanah</td>
                                                    <td style="width: 5%;">:</td>
                                                    <td style="width: 30%;"><?= $data_teknik_3[$no]['saluran_jenis_material'] ?></td>
                                                </tr>
                                                <tr>
                                                    <td style="width:15%;">Ukurang Panjang Gorong Gorong</td>
                                                    <td style="width: 5%;">:</td>
                                                    <td style="width: 30%;"><?= $data_teknik_3[$no]['gorong_ukuran_panjang'] ?></td>
                                                    <td style="width: 15%;">Ukurang Panjang Saluran Penahan Tanah</td>
                                                    <td style="width: 5%;">:</td>
                                                    <td style="width: 30%;"><?= $data_teknik_3[$no]['saluran_ukuran_panjang'] ?></td>
                                                </tr>
                                                <tr>
                                                    <td style="width:15%;">Kondisi Gorong Gorong</td>
                                                    <td style="width: 5%;">:</td>
                                                    <td style="width: 30%;"><?= $data_teknik_3[$no]['gorong_kondisi'] ?></td>
                                                    <td style="width: 15%;">Kondisi Saluran Penahan Tanah</td>
                                                    <td style="width: 5%;">:</td>
                                                    <td style="width: 30%;"><?= $data_teknik_3[$no]['saluran_kondisi'] ?></td>
                                                </tr>
                                                <tr>
                                                    <td style="width:15%;">Jenis Material Manhole</td>
                                                    <td style="width: 5%;">:</td>
                                                    <td style="width: 30%;"><?= $data_teknik_3[$no]['manhole_jenis_material'] ?></td>
                                                    <td style="width: 15%;">Ukuran Panjang Manhole</td>
                                                    <td style="width: 5%;">:</td>
                                                    <td style="width: 30%;"><?= $data_teknik_3[$no]['manhole_ukuran_panjang'] ?></td>
                                                </tr>
                                                <tr>
                                                    <td style="width:15%;">Kondisi Manhole</td>
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
                                                    <td style="width:15%;">Uraian Perlengkapan Jalan</td>
                                                    <td style="width: 5%;">:</td>
                                                    <td style="width: 30%;"><?= $data_teknik_4[$no]['uraian'] ?></td>
                                                    <td style="width: 15%;">KI</td>
                                                    <td style="width: 5%;">:</td>
                                                    <td style="width: 30%;"><?= $data_teknik_4[$no]['ki'] ?></td>
                                                </tr>
                                                <tr>
                                                    <td style="width:15%;">MID</td>
                                                    <td style="width: 5%;">:</td>
                                                    <td style="width: 30%;"><?= $data_teknik_4[$no]['mid'] ?></td>
                                                    <td style="width: 15%;">KA</td>
                                                    <td style="width: 5%;">:</td>
                                                    <td style="width: 30%;"><?= $data_teknik_4[$no]['ka'] ?></td>
                                                </tr>
                                            </table>
                                        <?php } ?>
                                        <?php if (isset($data_teknik_5[$no])) { ?>
                                            <br>
                                            <h6><b> Data Teknik 5</b></h6>
                                            <table style="width: 100%;">
                                                <tr>
                                                    <td style="width:15%;">Jenis Utilitas Pra Sarana</td>
                                                    <td style="width: 5%;">:</td>
                                                    <td style="width: 30%;"><?= $data_teknik_5[$no]['jenis_utilitas_prasarana'] ?></td>
                                                    <td style="width: 15%;">KI Pra Sarana</td>
                                                    <td style="width: 5%;">:</td>
                                                    <td style="width: 30%;"><?= $data_teknik_5[$no]['ki_prasarana'] ?></td>
                                                </tr>
                                                <tr>
                                                    <td style="width:15%;">MID Pra Sarana</td>
                                                    <td style="width: 5%;">:</td>
                                                    <td style="width: 30%;"><?= $data_teknik_5[$no]['mid_prasarana'] ?></td>
                                                    <td style="width: 15%;">KA Pra Sarana</td>
                                                    <td style="width: 5%;">:</td>
                                                    <td style="width: 30%;"><?= $data_teknik_5[$no]['ka_prasarana'] ?></td>
                                                </tr>
                                                <tr>
                                                    <td style="width:15%;">Jenis Utilitas Sarana</td>
                                                    <td style="width: 5%;">:</td>
                                                    <td style="width: 30%;"><?= $data_teknik_5[$no]['jenis_utilitas_sarana'] ?></td>
                                                    <td style="width: 15%;">KI Sarana</td>
                                                    <td style="width: 5%;">:</td>
                                                    <td style="width: 30%;"><?= $data_teknik_5[$no]['ki_sarana'] ?></td>
                                                </tr>
                                                <tr>
                                                    <td style="width:15%;">MID Sarana</td>
                                                    <td style="width: 5%;">:</td>
                                                    <td style="width: 30%;"><?= $data_teknik_5[$no]['mid_sarana'] ?></td>
                                                    <td style="width: 15%;">KA Sarana</td>
                                                    <td style="width: 5%;">:</td>
                                                    <td style="width: 30%;"><?= $data_teknik_5[$no]['ka_sarana'] ?></td>
                                                </tr>
                                            </table>
                                        <?php } ?>
                                        <?php if (isset($data_lainnya[$no])) { ?>
                                            <br>
                                            <h6><b> Data Lainnya</b></h6>
                                            <table style="width: 100%;">
                                                <tr>
                                                    <td style="width:15%;">Uraian</td>
                                                    <td style="width: 5%;">:</td>
                                                    <td style="width: 30%;"><?= $data_lainnya[$no]['uraian'] ?></td>
                                                    <td style="width: 15%;">Tanggal Pemanfaatan</td>
                                                    <td style="width: 5%;">:</td>
                                                    <td style="width: 30%;"><?= $data_lainnya[$no]['tanggal_pemanfaatan'] ?></td>
                                                </tr>
                                                <tr>
                                                    <td style="width:15%;">Nilai</td>
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
                                                    <td style="width:15%;">LHR KI Golongan 1</td>
                                                    <td style="width: 5%;">:</td>
                                                    <td style="width: 30%;"><?= $lhr[$no]['lhr_ki_golongan_1'] ?></td>
                                                    <td style="width: 15%;">Tarif KI Golongan 1</td>
                                                    <td style="width: 5%;">:</td>
                                                    <td style="width: 30%;"><?= $lhr[$no]['tarif_ki_golongan_1'] ?></td>
                                                </tr>
                                                <tr>
                                                    <td style="width:15%;">LHR KA Golongan 1</td>
                                                    <td style="width: 5%;">:</td>
                                                    <td style="width: 30%;"><?= $lhr[$no]['lhr_ka_golongan_1'] ?></td>
                                                    <td style="width: 15%;">Tarif KA Golongan 1</td>
                                                    <td style="width: 5%;">:</td>
                                                    <td style="width: 30%;"><?= $lhr[$no]['tarif_ka_golongan_1'] ?></td>
                                                </tr>
                                                <tr>
                                                    <td style="width:15%;">LHR KI Golongan 2</td>
                                                    <td style="width: 5%;">:</td>
                                                    <td style="width: 30%;"><?= $lhr[$no]['lhr_ki_golongan_2'] ?></td>
                                                    <td style="width: 15%;">Tarif KI Golongan 2</td>
                                                    <td style="width: 5%;">:</td>
                                                    <td style="width: 30%;"><?= $lhr[$no]['tarif_ki_golongan_2'] ?></td>
                                                </tr>
                                                <tr>
                                                    <td style="width:15%;">LHR KA Golongan 2</td>
                                                    <td style="width: 5%;">:</td>
                                                    <td style="width: 30%;"><?= $lhr[$no]['lhr_ka_golongan_2'] ?></td>
                                                    <td style="width: 15%;">Tarif KA Golongan 2</td>
                                                    <td style="width: 5%;">:</td>
                                                    <td style="width: 30%;"><?= $lhr[$no]['tarif_ka_golongan_2'] ?></td>
                                                </tr>
                                                <tr>
                                                    <td style="width:15%;">LHR KI Golongan 3</td>
                                                    <td style="width: 5%;">:</td>
                                                    <td style="width: 30%;"><?= $lhr[$no]['lhr_ki_golongan_3'] ?></td>
                                                    <td style="width: 15%;">Tarif KI Golongan 3</td>
                                                    <td style="width: 5%;">:</td>
                                                    <td style="width: 30%;"><?= $lhr[$no]['tarif_ki_golongan_3'] ?></td>
                                                </tr>
                                                <tr>
                                                    <td style="width:15%;">LHR KA Golongan 3</td>
                                                    <td style="width: 5%;">:</td>
                                                    <td style="width: 30%;"><?= $lhr[$no]['lhr_ka_golongan_3'] ?></td>
                                                    <td style="width: 15%;">Tarif KA Golongan 3</td>
                                                    <td style="width: 5%;">:</td>
                                                    <td style="width: 30%;"><?= $lhr[$no]['tarif_ka_golongan_3'] ?></td>
                                                </tr>
                                                <tr>
                                                    <td style="width:15%;">LHR KI Golongan 4</td>
                                                    <td style="width: 5%;">:</td>
                                                    <td style="width: 30%;"><?= $lhr[$no]['lhr_ki_golongan_4'] ?></td>
                                                    <td style="width: 15%;">Tarif KI Golongan 4</td>
                                                    <td style="width: 5%;">:</td>
                                                    <td style="width: 30%;"><?= $lhr[$no]['tarif_ki_golongan_4'] ?></td>
                                                </tr>
                                                <tr>
                                                    <td style="width:15%;">LHR KA Golongan 4</td>
                                                    <td style="width: 5%;">:</td>
                                                    <td style="width: 30%;"><?= $lhr[$no]['lhr_ka_golongan_4'] ?></td>
                                                    <td style="width: 15%;">Tarif KA Golongan 4</td>
                                                    <td style="width: 5%;">:</td>
                                                    <td style="width: 30%;"><?= $lhr[$no]['tarif_ka_golongan_4'] ?></td>
                                                </tr>
                                                <tr>
                                                    <td style="width:15%;">LHR KA Golongan 5</td>
                                                    <td style="width: 5%;">:</td>
                                                    <td style="width: 30%;"><?= $lhr[$no]['lhr_ka_golongan_5'] ?></td>
                                                    <td style="width: 15%;">Tarif KA Golongan 5</td>
                                                    <td style="width: 5%;">:</td>
                                                    <td style="width: 30%;"><?= $lhr[$no]['tarif_ka_golongan_5'] ?></td>
                                                </tr>
                                                <tr>
                                                    <td style="width:15%;">LHR KI Golongan 6</td>
                                                    <td style="width: 5%;">:</td>
                                                    <td style="width: 30%;"><?= $lhr[$no]['lhr_ki_golongan_6'] ?></td>
                                                    <td style="width: 15%;">Tarif KI Golongan 6</td>
                                                    <td style="width: 5%;">:</td>
                                                    <td style="width: 30%;"><?= $lhr[$no]['tarif_ki_golongan_6'] ?></td>
                                                </tr>
                                                <tr>
                                                    <td style="width:15%;">LHR KA Golongan 6</td>
                                                    <td style="width: 5%;">:</td>
                                                    <td style="width: 30%;"><?= $lhr[$no]['lhr_ka_golongan_6'] ?></td>
                                                    <td style="width: 15%;">Tarif KA Golongan 6</td>
                                                    <td style="width: 5%;">:</td>
                                                    <td style="width: 30%;"><?= $lhr[$no]['tarif_ka_golongan_6'] ?></td>
                                                </tr>
                                            </table>
                                        <?php } ?>
                                        <?php if (isset($geometrik[$no])) { ?>
                                            <br>
                                            <h6><b>Data Geometrik</b></h6>
                                            <table style="width: 100%;">
                                                <tr>
                                                    <td style="width:15%;">Lebar Rumija</td>
                                                    <td style="width: 5%;">:</td>
                                                    <td style="width: 30%;"><?= $geometrik[$no]['lebar_rumija'] ?></td>
                                                    <td style="width: 15%;">Gradien Kiri</td>
                                                    <td style="width: 5%;">:</td>
                                                    <td style="width: 30%;"><?= $geometrik[$no]['gradien_kiri'] ?></td>
                                                </tr>
                                                <tr>
                                                    <td style="width:15%;">Gradien Kanan</td>
                                                    <td style="width: 5%;">:</td>
                                                    <td style="width: 30%;"><?= $geometrik[$no]['gradien_kanan'] ?></td>
                                                    <td style="width: 15%;">Cross Fall Kiri</td>
                                                    <td style="width: 5%;">:</td>
                                                    <td style="width: 30%;"><?= $geometrik[$no]['cross_fall_kiri'] ?></td>
                                                </tr>
                                                <tr>
                                                    <td style="width:15%;">Cross Fall Kanan</td>
                                                    <td style="width: 5%;">:</td>
                                                    <td style="width: 30%;"><?= $geometrik[$no]['cross_fall_kanan'] ?></td>
                                                    <td style="width: 15%;">Superelevasi</td>
                                                    <td style="width: 5%;">:</td>
                                                    <td style="width: 30%;"><?= $geometrik[$no]['superelevasi'] ?></td>
                                                </tr>
                                                <tr>
                                                    <td style="width:15%;">Radius</td>
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
                                                    <td style="width:15%;">Terrain Kiri</td>
                                                    <td style="width: 5%;">:</td>
                                                    <td style="width: 30%;"><?= $data_lingkungan_jalan[$no]['terrain_kiri'] ?></td>
                                                    <td style="width: 15%;">Terrain Kanan</td>
                                                    <td style="width: 5%;">:</td>
                                                    <td style="width: 30%;"><?= $data_lingkungan_jalan[$no]['terrain_kanan'] ?></td>
                                                </tr>
                                                <tr>
                                                    <td style="width:15%;">Tata Guna Lahan Kiri</td>
                                                    <td style="width: 5%;">:</td>
                                                    <td style="width: 30%;"><?= $data_lingkungan_jalan[$no]['tata_guna_lahan_kiri'] ?></td>
                                                    <td style="width: 15%;">Tata Guna Lahan Kanan</td>
                                                    <td style="width: 5%;">:</td>
                                                    <td style="width: 30%;"><?= $data_lingkungan_jalan[$no]['tata_guna_lahan_kanan'] ?></td>
                                                </tr>
                                                <tr>
                                                    <td style="width:15%;">Underpass KM</td>
                                                    <td style="width: 5%;">:</td>
                                                    <td style="width: 30%;"><?= $data_lingkungan_jalan[$no]['underpass_km'] ?></td>
                                                    <td style="width: 15%;">Underpass X</td>
                                                    <td style="width: 5%;">:</td>
                                                    <td style="width: 30%;"><?= $data_lingkungan_jalan[$no]['underpass_x'] ?></td>
                                                </tr>
                                                <tr>
                                                    <td style="width:15%;">Underpass Y</td>
                                                    <td style="width: 5%;">:</td>
                                                    <td style="width: 30%;"><?= $data_lingkungan_jalan[$no]['underpass_y'] ?></td>
                                                    <td style="width: 15%;">Overpass KM</td>
                                                    <td style="width: 5%;">:</td>
                                                    <td style="width: 30%;"><?= $data_lingkungan_jalan[$no]['overpass_km'] ?></td>
                                                </tr>
                                                <tr>
                                                    <td style="width:15%;">Overpass X</td>
                                                    <td style="width: 5%;">:</td>
                                                    <td style="width: 30%;"><?= $data_lingkungan_jalan[$no]['overpass_x'] ?></td>
                                                    <td style="width: 15%;">Overpass Y</td>
                                                    <td style="width: 5%;">:</td>
                                                    <td style="width: 30%;"><?= $data_lingkungan_jalan[$no]['overpass_y'] ?></td>
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
    <script type="text/javascript">
        window.print();
    </script>
</body>

</html>