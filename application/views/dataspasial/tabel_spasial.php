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
            <a href="<?=site_url($url.'/form/tambah')?>" class="btn btn-success" ><i class="fa fa-plus"></i> Tambah</a>
</div>
</form>
<hr>
<?=$this->session->flashdata('info')?>

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
                <?php
                $no=1;
foreach ($datatable->result() as $row) {
                ?>
                <tr>
                    <td class="text-center"><?=$no?></td>
					<td><?=$row->id_atribut?></td>
					<td><?=$row->nama_atribut?></td>
					<td><a href="<?=assets('unggah/geojson/'.$row->geojson_atribut)?>" target="_BLANK"><?=$row->geojson_atribut?></a></td>
					<td style="background: <?=$row->warna_atribut?>"></td>
					<td class="text-center">
						<div class="btn-group">
							<a href="<?=site_url($url.'/form/ubah/'.$row->id_atribut)?>" class="btn btn-info"><i class="fa fa-edit"></i> Ubah</a>
							<a href="<?=site_url($url.'/hapus/'.$row->id_atribut)?>" class="btn btn-danger" onclick="return confirm('Hapus data?')"><i class="fa fa-trash"></i> Hapus</a>
						</div>
                    </td>
                </tr>
                <?php
                $no++;


                }
                ?>
            </tbody>

        </table>
    </div>
</div>

<?=content_close_1()?>
