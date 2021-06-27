<script src="https://unpkg.com/leaflet@1.7.1/dist/leaflet.js" integrity="sha512-XQoYMqMTK8LvdxXYG3nZ448hOEQiglfqkJs1NOQV44cWnUrBc8PkAOcXy20w0vlaXaVUearIOBhiXZ5V3ynxwA==" crossorigin=""></script>
<script src="<?= base_url('assets/js/leaflet-panel-layers-master/src/leaflet-panel-layers.js') ?>"></script>
<script src="<?= base_url() ?>assets/js/leaflet.ajax.js"></script>
<!-- easy print leaflet -->
<script src="<?= base_url() ?>assets/leaflet/dist/bundle.js"></script>

<script type="text/javascript">
    document.getElementById('weathermap').innerHTML = "<div id='map' style='width: 100%; height: height: 50vh;'></div>";
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

    L.easyPrint({
        title: 'My awesome print button',
        position: 'topleft',
        exportOnly: true,
        sizeModes: ['Current', 'A4Portrait', 'A4Landscape']
    }).addTo(map);

    var myStyle2 = {
        "color": "#ffff00",
        "weight": 1,
        "opacity": 0.9
    };

    function popUp(f, l) {
        var out = [];
        if (f.properties) {
            for (key in f.properties) {
                console.log(key);

            }
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
    $CI->db->select('id_atribut, nama_atribut, batasan_data.nama_atribut_batasan, geojson_atribut, nama_spasial, jenis_page');
    $CI->db->from('m_spasial');
    $CI->db->join('batasan_data', 'batasan_data.kode_atribut=m_spasial.nama_atribut');
    $CI->db->where(['jenis_page' => "ledger"]);
    $CI->db->where(['nama_atribut_batasan' => $where]);
    $CI->db->group_by('geojson_atribut');
    $getSpasial = $CI->db->get();
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