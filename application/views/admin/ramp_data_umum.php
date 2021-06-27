<?php
if ($this->session->userdata('level') == 2) {
} else {
    $this->session->set_flashdata('error', 'Tidak Bisa Akses Harap Login Terlebih Dahulu.!');
    redirect(base_url('main/admin'));
}
?>
<style type="text/css">
    #map {
        height: 50vh;
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
                            <div class="float-right">
                                <a href="<?= site_url('Form_new_ramp') ?>" class="btn btn-info"><i class="fa fa-plus"></i>Tambah Kartu Leger Jalan Tol</a>
                            </div>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">
                            <div id="map"></div>
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

<!-- Make sure you put this AFTER Leaflet's CSS -->
<script src="https://unpkg.com/leaflet@1.7.1/dist/leaflet.js" integrity="sha512-XQoYMqMTK8LvdxXYG3nZ448hOEQiglfqkJs1NOQV44cWnUrBc8PkAOcXy20w0vlaXaVUearIOBhiXZ5V3ynxwA==" crossorigin=""></script>
<script src="<?= base_url('assets/js/leaflet-panel-layers-master/src/leaflet-panel-layers.js') ?>"></script>
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

    var myStyle2 = {
        "color": "#ffff00",
        "weight": 1,
        "opacity": 0.9
    };

    function popUp(f, l) {
        var out = [];
        if (f.properties) {
            // for (key in f.properties) {
            // 	console.log(key);

            // }
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
    $getSpasial = $CI->ModelSpasial->get_where("ramp");
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