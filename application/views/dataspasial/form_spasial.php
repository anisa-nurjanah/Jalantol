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
<form class="form-horizontal form-label-left">
<div class="form-group row">
	<label class="control-label col-md-3 col-sm-3 ">Kode Atribut</label>
		<div class="col-md-9 col-sm-9 ">
			<select class="form-control">
				<option>1. IDENTIFIKASI</option>
				<option>2. RUMIJA</option>
				<option>3. KONSTRUKSI</option>
				<option>4. BAGIAN PERLENGKAPAN</option>
				<option>5. PERLENGKAPAN</option>
                <option>6. UTILITAS</option>
                <option>7. LHR</option>
                <option>8. GEOMETRIK JALAN</option>
                <option>9. TAMBAHAN</option>
			</select>
		</div>
</div>
<div class="form-group row ">
	<label class="control-label col-md-3 col-sm-3 ">Nama Atribut</label>
	<div class="col-md-9 col-sm-9 ">
		<input type="text" class="form-control" placeholder="Nama Atribut">
	</div>
</div>
<div class="form-group row ">
	<label class="control-label col-md-3 col-sm-3 ">File GeoJSON</label>
	<div class="col-md-9 col-sm-9 ">
	<input type="file" data-role="magic-overlay" data-target="#pictureBtn" data-edit="insertImage" />
	</div>
</div>
<div class="form-group row">
	<label class="control-label col-md-3 col-sm-3 ">Keterangan <span class="required"></span></label>
	<div class="col-md-9 col-sm-9 ">
	    <textarea class="form-control" rows="3" placeholder="Keterangan"></textarea>
	</div>
</div>
</form>

<div class="item form-group">
	<div class="col-md-6 col-sm-6 offset-md-3">	
        <button type="submit" class="btn btn-success">Simpan</button>
	    <button class="btn btn-secondary" type="button">Kembali</button>
	</div>
</div>

<?=content_close_1()?>