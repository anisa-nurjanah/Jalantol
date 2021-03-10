<?=content_open('Data Spasial')?>
<?=content_welcome('John Doe')?>
<?=content_main_1()?>
<form class="form-horizontal form-label-left">
<div class="form-group row">
	<label class="control-label">Nama Jalan Tol : </label>
			<div class="col-md-4 col-sm-4 ">
				<select class="form-control">
					<option>BAKAUHENI - TERBANGGI BESAR</option>
				</select>

			</div>
    <a href="<?=site_url('Form_spasial')?>"><span class="btn btn-primary">Tambah Data Spasial</span></a>
</div>
</form>

<div class="tab-content" id="myTabContent">
    <div class="table-responsive" id="teknik1" role="tabpanel" aria-labelledby="teknik1_tab">
        <table class="table table-striped jambo_table bulk_action">
            <thead>
            <tr class="headings">
                <th>No</th>
                <th>Kode Atribut</th>
                <th>Nama Atribut</th>
                <th>GeoJSON</th>
                <th>Keterangan</th>
                <th>Aksi</th>
            </tr>
            </thead>

            <tbody>
            <tr class="even pointer">
                <td class="a-center">1</td>
                <td class=" ">001</td>
                <td class=" ">Atribut</td>
                <td class=" ">blblbl.json</td>
                <td class=" ">-</td>
                <td class=" last">
                <button type="button" class="btn btn-success btn-sm">Ubah</button>
                <button type="button" class="btn btn-secondary btn-sm">Hapus</button>
                
                </td>
            </tr>
        </table>
    </div>
</div>

<?=content_close_1()?>
