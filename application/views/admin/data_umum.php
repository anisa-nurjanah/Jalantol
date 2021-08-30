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
								<!-- <i class="fas fa-map mr-1"></i> -->
								
								<!-- RUAS BAKAUHENI - TERBANGGI BESAR -->

								<!-- <label class="control-label">Nama Jalan Tol : </label> -->
                                        <!-- <div class="col-md-4 col-sm-4"> -->
										<div class="col-6">
                                            <select class="form-control ">
												<?php
													foreach($dataTol as $tol):
												?>    
													<?php if ($tol['keterangan_tol'] === 't'): ?>
														<option><?= $tol['nama_jt'] ?></option> 
													<?php endif; ?>        
												<?php
													endforeach;
												?>
                                            </select>
                                        </div>
							</h3>
							<div class="float-right">
								<a href="<?= site_url('Form_new') ?>" class="btn btn-info"><i class="fa fa-plus"></i>Tambah Kartu Leger Jalan Tol</a>
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
<!-- <script src="https://unpkg.com/leaflet@1.7.1/dist/leaflet.js" integrity="sha512-XQoYMqMTK8LvdxXYG3nZ448hOEQiglfqkJs1NOQV44cWnUrBc8PkAOcXy20w0vlaXaVUearIOBhiXZ5V3ynxwA==" crossorigin=""></script> -->
<!-- <script src="<?= base_url('assets/js/leaflet-panel-layers-master/src/leaflet-panel-layers.js') ?>"></script> -->
<!-- <script src="<?= base_url() ?>assets/js/leaflet.ajax.js"></script> -->


<link rel="stylesheet" href="https://unpkg.com/leaflet@1.7.1/dist/leaflet.css" />
<!-- <script src="https://unpkg.com/leaflet@1.7.1/dist/leaflet.js"></script> -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
<!-- <script src="<?= base_url() ?>assets/js/leaflet-providers-master/leaflet-providers.js"></script> -->
<script src="<?= base_url() ?>assets/js/proj4leaflet_raw.js"></script>
<script src="<?= base_url() ?>assets/js/leaflet-providers-master/leaflet-providers.js"></script>
<script src="<?= base_url() ?>assets/js/proj4leaflet-compressed.js"></script>
<script src="<?= base_url() ?>assets/js/proj4leaflet.js"></script>


<script>
	
	

	var map = L.map('map').setView([-4.881600, 105.230373], 10);

	var baseLayers = {
		'Esri.WorldTopoMap': L.tileLayer.provider('Esri.WorldTopoMap').addTo(map),
  		'Esri WorldImagery': L.tileLayer.provider('Esri.WorldImagery')
	};

	L.control.layers(baseLayers,{}).addTo(map);
	L.control.scale({imperial: false}).addTo(map);


	var myStyle2 = {
		"color": "#ffff00",
		"weight": 1,
		"opacity": 0.9
	};
	
	var geojsonPath = [];
	proj4.defs('urn:ogc:def:crs:EPSG::4326', 'PROJCS["WGS 84 / UTM zone 48S", GEOGCS["WGS 84", DATUM["World Geodetic System 1984", SPHEROID["WGS 84", 6378137.0, 298.257223563, AUTHORITY["EPSG","7030"]], AUTHORITY["EPSG","6326"]], PRIMEM["Greenwich", 0.0, AUTHORITY["EPSG","8901"]], UNIT["degree", 0.017453292519943295], AXIS["Geodetic longitude", EAST], AXIS["Geodetic latitude", NORTH], AUTHORITY["EPSG","4326"]], PROJECTION["Transverse_Mercator"], PARAMETER["central_meridian", 105.0], PARAMETER["latitude_of_origin", 0.0], PARAMETER["scale_factor", 0.9996], PARAMETER["false_easting", 500000.0], PARAMETER["false_northing", 10000000.0], UNIT["m", 1.0], AXIS["Easting", EAST], AXIS["Northing", NORTH], AUTHORITY["EPSG","32748"]]');

	$.ajax({
		type: 'POST',
		url: '<?= base_url() ?>/Dataumum/requestHelper',
		data: {
			url: "<?= URL_GEO ?>/geoserver/rest/layers"
		},
		headers: {
			'Authorization' : 'Basic <?= AUTH_GEO ?>',
		},
		crossDomain: true,
		success: (data) => {
			let geo_layer = data.layers.layer;
			geo_layer.forEach((idx, el) => {				
				if(idx.name.includes("<?= LAYER_GEO ?>")) {
					geojsonPath.push(idx.name);
				}
			});
			geojsonPath.forEach((el) => {
				var settings = {
					"url": "http://localhost:8082/geoserver/rams/ows?service=WFS&version=1.0.0&request=GetFeature&typeName="+el+"&outputFormat=application%2Fjson",
					"method": "GET",
				};

				$.ajax(settings).done(function (response) {
					L.Proj.geoJson(response).addTo(map);
				});
			});
			
		},
		error : (e) => (console.log(e)),
	});

	$.ajax({ // ini perintah syntax ajax untuk memanggil vektor
		type: 'POST',
		url: 'assets/data_spasial.php', // INI memanggil link request_bali yang sebelumnya telah di buat
		dataType: "json",
		success: function(response){
		var data=response; 
		console.log(data.features)
		//    console.log(data);
		L.geoJson(data,{
				style: function(feature){
					//console.log(feature)
					var Style1
						return { color: "#cc3f39", weight: 1, opacity: 1 }; // ini adalah style yang akan digunakan
		},
		// MENAMPILKAN POPUP DENGAN ISI BERDASARKAN ATRIBUT KAB_KOTA
		onEachFeature: function( feature, layer ){
			layer.bindPopup( "<center>" + feature + "</center>")
		}
		}).addTo(map);  // di akhir selalu di akhiri dengan perintah ini karena objek akan ditambahkan ke map
		}
		
	});
//console.log(map);
</script>