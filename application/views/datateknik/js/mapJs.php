<!-- Make sure you put this AFTER Leaflet's CSS -->
<link rel="stylesheet" href="https://unpkg.com/leaflet@1.7.1/dist/leaflet.css" />
<script src="https://unpkg.com/leaflet@1.7.1/dist/leaflet.js"></script>

<script src="<?=base_url('assets/js/leaflet-panel-layers-master/src/leaflet-panel-layers.js')?>"></script>
 <script src="<?=base_url('assets/js/leaflet.ajax.js')?>"></script>

<script type="text/javascript">

//map view
var mymap = L.map('mapid').setView([-3.824181, 114.8191513], 10);
var layersDataUmum=[];
var Layer=L.tileLayer('https://api.mapbox.com/styles/v1/{id}/tiles/{z}/{x}/{y}?access_token=pk.eyJ1IjoibWFwYm94IiwiYSI6ImNpejY4NXVycTA2emYycXBndHRqcmZ3N3gifQ.rJcFIG214AriISLbB6B5aw', {
	attribution: 'Map data &copy; <a href="https://www.openstreetmap.org/">OpenStreetMap</a> contributors, ' +
	'<a href="https://creativecommons.org/licenses/by-sa/2.0/">CC-BY-SA</a>, ' +
	'Imagery © <a href="https://www.mapbox.com/">Mapbox</a>',
	id: 'mapbox/streets-v11'
}).addTo(mymap);

var roadMutant = L.gridLayer.googleMutant({
			maxZoom: 24,
			type:'roadmap'
	});

	map.addLayer(Layer);

	var myStyle2 = {
	    "color": "#ffff00",
	    "weight": 1,
	    "opacity": 0.9
	};

	function getColorAtribut(KODE){
		for(i=0;i<dataAtribut.length;i++){
			var data=dataAtribut[i];
			if(data.kd_atribut==KODE){
				return data.warna_atribut;
			}
		}
	}

	function popUp(f,l){
	    var html='';
	    if (f.properties){
	    	html+='<table>';
	    	html+='<tr>';
		    	html+='<td colspan="3"><img src="<?=base_url('assets/icon-map.png')?>" width="100%"></td>';
	    	html+='</tr>';
	    	html+='<tr>';
		    	html+='<td>Provinsi</td>';
		    	html+='<td>:</td>';
		    	html+='<td>'+f.properties['PROVINSI']+'</td>';
	    	html+='</tr>';
	    	html+='<tr>';
		    	html+='<td>Atribut</td>';
		    	html+='<td>:</td>';
		    	html+='<td>'+f.properties['Atribut']+'</td>';
	    	html+='</tr>';
	    	html+='</table>';
	    	html+='<a href="<?=site_url('Atribut')?>" target="_BLANK">'
	    			+'<button  class="btn btn-info btn-sm" ><i class="fa fa-info"></i> Info</button></a>';
	        l.bindPopup(html);
	        l.bindTooltip(f.properties['Atribut'],{
	        	permanent:true,
	        	direction:"center",
	        	className:"no-background"
	        });
	    }
	}


// legend

	function iconByName(name) {
		return '<i class="icon" style="background-color:'+name+';border-radius:50%"></i>';
	}


	var baseLayers = [
		{
			name: "OpenStreetMap",
			layer: Layer
		},
		{	
			name: "OpenCycleMap",
			layer: L.tileLayer('http://{s}.tile.opencyclemap.org/cycle/{z}/{x}/{y}.png')
		},
		{
			name: "Outdoors",
			layer: L.tileLayer('http://{s}.tile.thunderforest.com/outdoors/{z}/{x}/{y}.png')
		},
		{
			name:'Satelite Google',
			layer : L.gridLayer.googleMutant({
				maxZoom: 24,
				type:'satellite'
			})
		},
		{
			name: "Roadmap Google",
			layer: roadMutant
		}
	];

	for(i=0;i<dataAtribut.length;i++){
		var data=dataAtribut[i];
		var layer={
			name: data.nm_atribut,
			icon: iconByName(data.warna_atribut),
			layer: new L.GeoJSON.AJAX(["<?=base_url()?>assets/unggah/geojson/"+data.geojson_atribut],
				{
					onEachFeature:popUp,
					style: function(feature){
						var KODE=feature.properties.KODE;
						return {
							"color": getColorAtribut(KODE),
						    "weight": 1,
						    "opacity": 1
						}

					},
				}).addTo(mymap)
			}
		layersAtribut.push(layer);
	}

	var overLayers = [{
		group: "Layer Atribut",
		layers: layersAtribut
	}
	];

	var panelLayers = new L.Control.PanelLayers(baseLayers, overLayers,{
		collapsibleGroups: true
	});

	mymap.addControl(panelLayers);
	mymap.addControl( new L.Control.Compass({
		position:'topleft',
		autoActive:true,
		showDigit:true
	}) );




</script>