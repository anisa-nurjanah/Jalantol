<?php
if ($this->session->userdata('level') == 2) {
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
    <style type="text/css">
        #map {
            height: 50vh;
        }
    </style>
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h3>IDENTIFIKASI</h3>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body table-responsive">
                            <form id="addidentifikasi">
                                <div class="row">
                                    <div class="col-md-8">
                                        <div class="form-group">
                                            <label for="ruas">Ruas</label>
                                            <input type="text" name="ruas" class="form-control" id="ruas" placeholder="Masukkan Ruas" required>
                                        </div>
                                        <!-- <div class="form-group">
                                            <label for="ruas_km">Ruas KM</label>
                                            <input type="text" name="ruas_km" class="form-control" id="ruas_km" placeholder="Masukkan Ruas KM" required>
                                        </div> -->
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
                                                <select class="form-control select2kabupaten" name="kabupaten" id="kabupaten" style="width: 100%;" required disabled>
                                                    <option value="">Pilih Kabupaten</option>
                                                </select>
                                            </div>
                                            <div class="form-group col-md-6">
                                                <label for="kecamatan">Kecamatan</label>
                                                <select class="form-control select2kecamatan" name="kecamatan" id="kecamatan" style="width: 100%;" required disabled>
                                                    <option value="">Pilih Kecamatan</option>
                                                </select>
                                            </div>
                                            <div class="form-group col-md-6">
                                                <label for="desa">Desa</label>
                                                <select class="form-control select2kelurahan" name="desa" id="kelurahan" style="width: 100%;" required disabled>
                                                    <option value="">Pilih Desa</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div id="map"></div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="form-group col-md-3">
                                        <label for="sta_awal">STA Awal</label>
                                        <input type="text" name="sta_awal" class="form-control" id="sta_awal" placeholder="Masukkan STA Awal" required>
                                    </div>
                                    <div class="form-group col-md-2">
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
                                </div>
                                <div class="row">
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
                                    </div>
                                </div>
                                <!-- /.card-body -->
                                <div class="card-footer">
                                    <button class="btn btn-primary" type="submit">Simpan</button>
                                    <button class="btn btn-secondary" type="reset">Batal</button>
                                </div>
                            </form>
                        </div>
                        <!-- /.card -->
                    </div>
                    <!-- /.col -->
                    <div class="card">
                        <!-- <div class="card-header">
                            <h3 class="card-title"></h3>
                        </div> -->
                        <!-- /.card-header -->
                        <div class="card-body">
                            <ul class="alert alert-info" style="padding-left: 40px">
                                <li>Silahkan import data dari excel, menggunakan format yang sudah disediakan</li>
                                <li>Data tidak boleh ada yang kosong, harus terisi semua.</li>
                                <!-- <li>Untuk data Kelas, hanya bisa diisi menggunakan Kode Kelas. <a data-toggle="modal" href="#kelasId" style="text-decoration:none" class="btn btn-xs btn-primary">Lihat Kode</a>.</li> -->
                            </ul>
                            <div class="text-center">
                                <a href="<?= base_url('template_excel/SELURUH DATA.xlsx') ?>" class="btn btn-success"><i class="fa fa-file-download"></i> Download Format</a>
                            </div>
                            <?= form_open_multipart('jalantol/upload_excel'); ?>
                            <?php echo $this->session->flashdata('notif') ?>
                            <label for="">Pilih File</label>

                            <div class="form-group" id="">
                                <?= form_error('file', '<div class="alert alert-danger">', '</div>'); ?>
                                <input type="file" class="form-control" name="file">
                            </div>

                            <div class="text-center">
                                <button name="upload" type="submit" class="btn btn-sm btn-success"><i class="fa fa-upload"></i> Upload</button>
                            </div>

                            <?= form_close(); ?>
                        </div>
                    </div>
                </div>
                <!-- /.row -->
            </div>
            <!-- /.container-fluid -->
    </section>
    <!-- /.content -->
</div>

<script src="https://unpkg.com/leaflet@1.7.1/dist/leaflet.js" integrity="sha512-XQoYMqMTK8LvdxXYG3nZ448hOEQiglfqkJs1NOQV44cWnUrBc8PkAOcXy20w0vlaXaVUearIOBhiXZ5V3ynxwA==" crossorigin=""></script>
<script src="<?= base_url() ?>assets/js/leaflet.ajax.js"></script>

<script type="text/javascript">
    var pathparts = location.pathname.split('/');
    // if (location.host == '188.166.212.76') {
    if (location.host == 'localhost') {
        var base_url = location.origin + '/' + pathparts[1].trim('/'); // http://localhost/myproject/
    } else {
        var base_url = location.origin; //http://localhost/
    }

    var map = L.map('map').setView([-4.881600, 105.230373], 10);

    var Layer = L.tileLayer('https://api.mapbox.com/styles/v1/{id}/tiles/{z}/{x}/{y}?access_token=pk.eyJ1IjoibWFwYm94IiwiYSI6ImNpejY4NXVycTA2emYycXBndHRqcmZ3N3gifQ.rJcFIG214AriISLbB6B5aw', {
        attribution: 'Map data &copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors, Imagery © <a href="https://www.mapbox.com/">Mapbox</a>',
        maxZoom: 18,
        id: 'mapbox/streets-v11',
        tileSize: 512,
        zoomOffset: -1,
    });
    map.addLayer(Layer);

    function popUp(f, l) {
        var out = [];
        if (f.properties) {
            // for (key in f.properties) {
            // 	console.log(key);

            // }
            console.log(f.properties)
            out.push("Id: " + f.properties['id']);
            out.push("Layer: " + f.properties['layer']);
            out.push("Ruas: " + f.properties['nama_ruas']);
            out.push("Seksi: " + f.properties['seksi']);
            out.push("KM: " + f.properties['km']);
            l.bindPopup(out.join("<br />"));
        }
    }

    // legend

    function iconByName(name) {
        return '<i class="icon" style="background-color:' + name + ';border-radius:50%"></i>';
    }

    function featureToMarker(feature, latlng) {
        return L.marker(latlng, {
            icon: L.divIcon({
                className: 'marker-' + feature.properties.amenity,
                html: iconByName(feature.properties.amenity),
                iconUrl: '../images/markers/' + feature.properties.amenity + '.png',
                iconSize: [25, 41],
                iconAnchor: [12, 41],
                popupAnchor: [1, -34],
                shadowSize: [41, 41]
            })
        });
    }

    var baseLayers = [{
            name: "OpenStreetMap",
            layer: Layer
        },
        {
            name: "OpenCycleMap",
            layer: L.tileLayer('https://tile.thunderforest.com/cycle/{z}/{x}/{y}.png?apikey=628362e8e23d40bc8bbb0b5f8a03a518')
        },
        {
            name: "Outdoors",
            layer: L.tileLayer('http://{s}.tile.thunderforest.com/outdoors/{z}/{x}/{y}.png?apikey=628362e8e23d40bc8bbb0b5f8a03a518')
        }
    ];

    <?php

    $CI = &get_instance();
    $CI->load->model('ModelSpasial');
    $getSpasial = $CI->ModelSpasial->get();
    foreach ($getSpasial->result() as $row) {
    ?>

    <?php
        $arraySpa[] = '{
			name: "' . $row->nama_spasial . '",
			layer: new L.GeoJSON.AJAX(["assets/geojson/' . $row->geojson_atribut . '"],{onEachFeature:popUp,pointToLayer: featureToMarker }).addTo(map)
			}';
    }
    ?>

    var overLayers = [{
        group: "Layer Spasial",
        layers: [
            <?= implode(',', $arraySpa); ?>
        ]
    }];

    var panelLayers = new L.Control.PanelLayers(baseLayers, overLayers, {
        collapsibleGroups: true
    });

    map.addControl(panelLayers);
</script>