<?php
$id_atribut="";
$nama_atribut="";
$geojson_atribut="";
$warna_atribut="";
if($parameter=='ubah' && $id!=''){
    $this->db->where('id_atribut',$id);
    $row=$this->Model->get()->row_array();
    extract($row);
}

// value ketika validasi
if($this->session->flashdata('error_value')){
    extract($this->session->flashdata('error_value'));
}

?>



<?=content_open('Formulir Data Spasial')?>
<?=content_main_1()?>
<form class="form-horizontal form-label-left">
<div class="form-group row">
	<label class="control-label col-md-3 col-sm-3">Nama Jalan Tol</label>
			<div class="col-md-9 col-sm-9 ">
				<select class="form-control">
					<option>BAKAUHENI - TERBANGGI BESAR</option>
				</select>

			</div>
</div>
</form>
<form method="post" action="<?=site_url($url.'/simpan')?>" enctype="multipart/form-data" class="form-horizontal form-label-left">
        <?=input_hidden('parameter',$parameter)?>
<!-- <form class="form-horizontal form-label-left"> -->
<div class="form-group row">
	<label class="control-label col-md-3 col-sm-3 ">Kode Atribut</label>
		<div class="col-md-9 col-sm-9 ">
		<?=input_text('id_atribut',$id_atribut)?>
			<!-- <select class="form-control">
				<option>1. IDENTIFIKASI</option>
				<option>2. RUMIJA</option>
				<option>3. KONSTRUKSI</option>
				<option>4. BAGIAN PERLENGKAPAN</option>
				<option>5. PERLENGKAPAN</option>
                <option>6. UTILITAS</option>
                <option>7. LHR</option>
                <option>8. GEOMETRIK JALAN</option>
                <option>9. TAMBAHAN</option>
			</select> -->
		</div>
</div>
<div class="form-group row ">
	<label class="control-label col-md-3 col-sm-3 ">Nama Atribut</label>
	<div class="col-md-9 col-sm-9 ">
		<?=input_text('nama_atribut',$nama_atribut)?>
		<!-- <input type="text" class="form-control" placeholder="Nama Atribut"> -->
	</div>
</div>
<div class="form-group row ">
	<label class="control-label col-md-3 col-sm-3 ">File GeoJSON</label>
	<div class="col-md-9 col-sm-9 ">
		<?=input_file('geojson_atribut',$geojson_atribut)?>
            <?php if ($parameter=='ubah'): ?>
                <small class="text-success">Biarkan kosong jika tidak ingin diubah</small>
            <?php endif ?>

	<!-- <input type="file" data-role="magic-overlay" data-target="#pictureBtn" data-edit="insertImage" /> -->
	</div>
</div>
<div class="form-group row">
	<label class="control-label col-md-3 col-sm-3 ">Keterangan <span class="required"></span></label>
	<div class="col-md-9 col-sm-9 ">
		<?=input_color('warna_atribut',$warna_atribut)?>
	    <!-- <textarea class="form-control" rows="3" placeholder="Keterangan"></textarea> -->
	</div>
</div>


<div class="form-group">
    		<button type="submit" name="simpan" value="true" class="btn btn-info"><i class="fa fa-save"></i> Simpan</button>
			<a href="<?=site_url($url)?>" class="btn btn-danger" ><i class="fa fa-reply"></i> Kembali</a>
    	</div>

</form>
<!-- 
<div class="item form-group">
	<div class="col-md-6 col-sm-6 offset-md-3">	
        <button type="submit" class="btn btn-success">Simpan</button>
	    <button class="btn btn-secondary" type="button">Kembali</button>
	</div>
</div> -->

<?=content_close_1()?>