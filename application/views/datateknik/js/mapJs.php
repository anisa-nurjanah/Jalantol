<!-- Make sure you put this AFTER Leaflet's CSS -->
<link rel="stylesheet" href="https://unpkg.com/leaflet@1.7.1/dist/leaflet.css" />
<script src="https://unpkg.com/leaflet@1.7.1/dist/leaflet.js"></script>

<script src="<?=base_url('assets/js/leaflet-panel-layers-master/src/leaflet-panel-layers.js')?>"></script>
 <script src="<?=base_url('assets/js/leaflet.ajax.js')?>"></script>

<script type="text/javascript">

//map view
var mymap = L.map('mapid').setView([-3.824181, 114.8191513], 10);

L.tileLayer('https://api.mapbox.com/styles/v1/{id}/tiles/{z}/{x}/{y}?access_token=pk.eyJ1IjoibWFwYm94IiwiYSI6ImNpejY4NXVycTA2emYycXBndHRqcmZ3N3gifQ.rJcFIG214AriISLbB6B5aw', {
	attribution: 'Map data &copy; <a href="https://www.openstreetmap.org/">OpenStreetMap</a> contributors, ' +
	'<a href="https://creativecommons.org/licenses/by-sa/2.0/">CC-BY-SA</a>, ' +
	'Imagery © <a href="https://www.mapbox.com/">Mapbox</a>',
	id: 'mapbox/streets-v11'
}).addTo(mymap);

	
</script>