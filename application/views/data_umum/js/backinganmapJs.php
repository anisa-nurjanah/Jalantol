<!-- Make sure you put this AFTER Leaflet's CSS -->
<script src="https://unpkg.com/leaflet@1.3.4/dist/leaflet.js" integrity="sha512-nMMmRyTVoLYqjP9hrbed9S+FzjZHW5gY1TWCHA5ckwXZBadntCNs8kEqAWdrb9O7rxbCaA4lKTIWjDXZxflOcA=="
   crossorigin=""></script>

 <script src="<?=base_url('assets/js/leaflet-panel-layers-master/src/leaflet-panel-layers.js')?>"></script>
 <script src="<?=base_url('assets/js/leaflet.ajax.js')?>"></script>


   <script type="text/javascript">

   	var map = L.map('map').setView([-3.824181, 114.8191513], 10);

   	var Layer=L.tileLayer('https://api.tiles.mapbox.com/v4/{id}/{z}/{x}/{y}.png?access_token={accessToken}', {
    attribution: 'Map data &copy; <a href="https://www.openstreetmap.org/">OpenStreetMap</a> contributors, <a href="https://creativecommons.org/licenses/by-sa/2.0/">CC-BY-SA</a>, Imagery © <a href="https://www.mapbox.com/">Mapbox</a>',
    maxZoom: 18,
    id: 'mapbox.streets',
    accessToken: 'pk.eyJ1IjoiYW5pc2FudXJqYW5haCIsImEiOiJja215YTgwcGwwMjBrMnBwazFmYWJjOGRyIn0.sqtK6gOonGEsEvxjIYzjuA'
});
	map.addLayer(Layer);

	var myStyle2 = {
	    "color": "#ffff00",
	    "weight": 1,
	    "opacity": 0.9
	};

	function popUp(f,l){
	    var out = [];
	    if (f.properties){
	        // for(key in f.properties){
	        // 	console.log(key);

	        // }
			out.push("Provinsi: "+f.properties['PROVINSI']);
			out.push("Kecamatan: "+f.properties['KECAMATAN']);
	        l.bindPopup(out.join("<br />"));
	    }
	}

	// legend

	function iconByName(name) {
		return '<i class="icon" style="background-color:'+name+';border-radius:50%"></i>';
	}

	function featureToMarker(feature, latlng) {
		return L.marker(latlng, {
			icon: L.divIcon({
				className: 'marker-'+feature.properties.amenity,
				html: iconByName(feature.properties.amenity),
				iconUrl: '../images/markers/'+feature.properties.amenity+'.png',
				iconSize: [25, 41],
				iconAnchor: [12, 41],
				popupAnchor: [1, -34],
				shadowSize: [41, 41]
			})
		});
	}

	var baseLayers = [
		{
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

		$CI =&get_instance();
		$CI->load->model('ModelSpasial');
		$getSpasial = $CI->ModelSpasial->get();
		foreach($getSpasial->result() as $row) {
			?>

			var myStyle<?=$row->id_atribut?> = {
			    "color": "<?=$row->warna_atribut?>",
			    "weight": 1,
			    "opacity": 1
			};

			<?php
			$arrayKec[]='{
			name: "'.$row->nama_atribut.'",
			icon: iconByName("'.$row->warna_atribut.'"),
			layer: new L.GeoJSON.AJAX(["assets/upload/geojson/'.$row->geojson_atribut.'"],{onEachFeature:popUp,style: myStyle'.$row->id_atribut.',pointToLayer: featureToMarker }).addTo(map)
			}';
		}
	?>

	var overLayers = [{
		group: "Layer Spasial",
		layers: [
			<?=implode(',', $arrayKec);?>
		]
	}
	];

	var panelLayers = new L.Control.PanelLayers(baseLayers, overLayers,{
		collapsibleGroups: true
	});

	map.addControl(panelLayers);



   </script>






<link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/openlayers/openlayers.github.io@master/en/v6.5.0/css/ol.css" type="text/css">
    <style>
      .map {
        height: 300 px;
        width: 100%;
      }
    </style>
	
    <script src="https://cdn.jsdelivr.net/gh/openlayers/openlayers.github.io@master/en/v6.5.0/build/ol.js"></script>
    <title>OpenLayers example</title>
    <h2>My Map</h2>
    <div id="map" class="map"></div>

    <script type="text/javascript">
      var map = new ol.Map({
        target: 'map',
        layers: [
          new ol.layer.Tile({
            source: new ol.source.OSM()
          })
        ],
        view: new ol.View({
          center: ol.proj.fromLonLat([116, -2]),
          zoom: 5
        })
      });

	  var myStyle2 = {
	    "color": "#ffff00",
	    "weight": 1,
	    "opacity": 0.9
	};
	<?php

		$CI =&get_instance();
		$CI->load->model('ModelSpasial');
		$getSpasial = $CI->ModelSpasial->get();
		foreach($getSpasial->result() as $row) {
			?>

			var myStyle<?=$row->id_atribut?> = {
			    "color": "<?=$row->warna_atribut?>",
			    "weight": 1,
			    "opacity": 1
			};

			<?php
			$arrayKec[]='{
			name: "'.$row->nama_atribut.'",
			icon: iconByName("'.$row->warna_atribut.'"),
			layer: new L.GeoJSON.AJAX(["assets/upload/geojson/'.$row->geojson_atribut.'"],{onEachFeature:popUp,style: myStyle'.$row->id_atribut.',pointToLayer: featureToMarker }).addTo(map)
			}';
		}
	?>
    </script>
  