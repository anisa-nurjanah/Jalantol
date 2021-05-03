<?=content_open('Data Teknik')?>
<?=content_welcome('John Doe')?>
<?=content_main('Data Teknik')?>
<form class="form-horizontal form-label-left">
<div class="form-group row">
<div class="col-md-12 col-sm-12 ">
  <div class="row">
    <div id="mapid" class="mb-3">
  </div>
	<label class="control-label">Nama Jalan Tol : </label>
			<div class="col-md-3 col-sm-3 ">
				<select class="form-control">
					<option>BAKAUHENI - TERBANGGI BESAR</option>
        </select>
			</div>

  <label class="control-label">KM</label>
			<div class="col-md-3 col-sm-3 ">
				<select class="form-control">
					<option>KM 47+974 s/d KM48+502</option>
				</select>
      </div>
      <a href="<?=site_url('Form_teknik')?>" class="btn btn-success" ><i class="fa fa-plus"></i> Tambah</a>
      <div class="dropup docs-options">
      </div>
</div>
</div>
</div>

<p>Unduh FORMAT EXCEL ini untuk pengisian penambahan data teknk</p>

<div class="form-group row">
<div class="col-md-12 col-sm-12 ">
    <button type="button" class="btn btn-link">Data Teknik 1</button>
    <button type="button" class="btn btn-link">Data Teknik 2</button>
    <button type="button" class="btn btn-link">Data Teknik 3</button>
    <button type="button" class="btn btn-link">Data Teknik 4</button>
    <button type="button" class="btn btn-link">Data Teknik 5</button>
    <button type="button" class="btn btn-link">Data Lainnya</button>
    <button type="button" class="btn btn-link">Lintasan Harian</button>
    <button type="button" class="btn btn-link">Data Geometrik</button>
    <button type="button" class="btn btn-link">Legalisasi</button>
</div>
</div>

</form>

            <div class="row">
              <div class="col-md-12">
                <div class="x_panel">
                  <div class="x_title">

                    <ul class="nav nav-tabs bar_tabs" id="myTab" role="tablist">
                      <li class="nav-item">
                        <a class="nav-link active" id="teknik1-tab" data-toggle="tab" href="#teknik1" role="tab" aria-controls="teknik1" aria-selected="true">Data Teknik 1</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" id="teknik2-tab" data-toggle="tab" href="#teknik2" role="tab" aria-controls="teknik2" aria-selected="false">Data Teknik 2</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" id="teknik3-tab" data-toggle="tab" href="#teknik3" role="tab" aria-controls="teknik3" aria-selected="false">Data Teknik 3</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" id="teknik4-tab" data-toggle="tab" href="#teknik4" role="tab" aria-controls="teknik4" aria-selected="false">Data Teknik 4</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" id="teknik5-tab" data-toggle="tab" href="#teknik5" role="tab" aria-controls="teknik5" aria-selected="false">Data Teknik 5</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" id="datalainnya-tab" data-toggle="tab" href="#datalainnya" role="tab" aria-controls="datalainnya" aria-selected="false">Data Lainnya</a>
                      </li>

                    </ul>


                    <div class="tab-content" id="myTabContent">
                      <div class="tab-pane fade show active" id="teknik1" role="tabpanel" aria-labelledby="teknik1_tab">
                      <table class="table table-bordered">
                      <thead>
                        <tr>
                          <th>Tahun</th>
                          <th colspan="3">2018</th>
                        </tr>   
                        <tr>
                          <th>Uraian</th>
                          <th>Luas (M2)</th>
                          <th>Data Perolehan</th>
                          <th>Nilai Perolehan</th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr>

                          <th scope="row">Lahan RUMIJA</th>
                          <td></td>
                          <td></td>
                          <td></td>
                        </tr>
                        <tr>
                          <th scope="row">Perkerasan Jalan</th>
                          <td></td>
                          <td></td>
                          <td></td>
                        </tr>
                      </tbody>
                    </table>

                      </div>
                      <div class="tab-pane fade" id="teknik2" role="tabpanel" aria-labelledby="teknik2-tab">
                    <table class="table table-bordered">
                      <thead>
                        <tr>
                          <th>Tahun</th>
                          <th colspan="8">2018</th>
                        </tr>  
                        <tr>
                          <th rowspan="2" >URAIAN KONSTRUKSI </th> 
                          <th colspan="4" >Jalur KI</th>
                          <th colspan="4">Jalur KA</th> 
                        <tr>
                          <th>Lajur 1</th>
                          <th>Lajur 2</th>
                          <th>Lajur 3</th>
                          <th>Lajur 4</th>
                          <th>Lajur 4</th>
                          <th>Lajur 3</th>
                          <th>Lajur 2</th>
                          <th>Lajur 1</th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                          <th scope="row">a. LAPIS PERMUKAAN</th>
                          <td colspan="8"></td>
                        </tr>
                        <tr>
                        <th scope="row">Lebar (M)</th>
                          <td></td>
                          <td></td>
                          <td></td>
                          <td></td>
                          <td></td>
                          <td></td>
                          <td></td>
                          <td></td>
                        </tr>
                        <tr>
                        <th scope="row">Tebal (M)</th>
                          <td></td>
                          <td></td>
                          <td></td>
                          <td></td>
                          <td></td>
                          <td></td>
                          <td></td>
                          <td></td>
                        </tr>
                        <tr>
                        <th scope="row">Jenis</th>
                          <td></td>
                          <td></td>
                          <td></td>
                          <td></td>
                          <td></td>
                          <td></td>
                          <td></td>
                          <td></td>
                        </tr>
                        <tr>
                        <th scope="row">Kondisi</th>
                          <td></td>
                          <td></td>
                          <td></td>
                          <td></td>
                          <td></td>
                          <td></td>
                          <td></td>
                          <td></td>
                        </tr>
                        <tr>
                        <th scope="row">Indeks Kondisi/IRI</th>
                          <td></td>
                          <td></td>
                          <td></td>
                          <td></td>
                          <td></td>
                          <td></td>
                          <td></td>
                          <td></td>
                        </tr>

                        <tr>
                          <th scope="row">b. LAPIS PONDASI ATAS</th>
                          <td colspan="8"></td>
                        </tr>
                        <tr>
                        <th scope="row">Lebar (M)</th>
                          <td></td>
                          <td></td>
                          <td></td>
                          <td></td>
                          <td></td>
                          <td></td>
                          <td></td>
                          <td></td>
                        </tr>
                        <tr>
                        <th scope="row">Tebal (M)</th>
                          <td></td>
                          <td></td>
                          <td></td>
                          <td></td>
                          <td></td>
                          <td></td>
                          <td></td>
                          <td></td>
                        </tr>
                        <tr>
                        <th scope="row">Jenis</th>
                          <td></td>
                          <td></td>
                          <td></td>
                          <td></td>
                          <td></td>
                          <td></td>
                          <td></td>
                          <td></td>
                        </tr>

                        <tr>
                          <th scope="row">c. LAPIS PONDASI BAWAH</th>
                          <td colspan="8"></td>
                        </tr>
                        <tr>
                        <th scope="row">Lebar (M)</th>
                          <td></td>
                          <td></td>
                          <td></td>
                          <td></td>
                          <td></td>
                          <td></td>
                          <td></td>
                          <td></td>
                        </tr>
                        <tr>
                        <th scope="row">Tebal (M)</th>
                          <td></td>
                          <td></td>
                          <td></td>
                          <td></td>
                          <td></td>
                          <td></td>
                          <td></td>
                          <td></td>
                        </tr>
                        <tr>
                        <th scope="row">Jenis</th>
                          <td></td>
                          <td></td>
                          <td></td>
                          <td></td>
                          <td></td>
                          <td></td>
                          <td></td>
                          <td></td>
                        </tr>

                        <tr>
                          <th scope="row">d. MEDIAN</th>
                          <td colspan="8"></td>
                        </tr>
                        <tr>
                        <th scope="row">Lebar (M)</th>
                          <td colspan="8"></td>
                        </tr>   
                        <tr>
                        <th scope="row">Tebal (M)</th>
                          <td colspan="8"></td>
                        </tr>   
                        <tr>
                        <th scope="row">Lebar</th>
                          <td colspan="8"></td>
                        </tr>   
                        <tr>
                        <th scope="row">Jenis</th>
                          <td colspan="8"></td>
                        </tr>   
                        <tr>
                        <th scope="row">Kondisi</th>
                          <td colspan="8"></td>
                        </tr>   

                        <tr>
                          <th scope="row">e. BAHU JALAN</th>
                          <th colspan="2">LUAR</th>
                          <th colspan="2">DALAM</th>
                          <th colspan="2">DALAM</th>
                          <th colspan="2">LUAR</th>
                        </tr>
                        <tr>
                        <th scope="row">Lebar (M)</th>
                          <td colspan="2"></td>
                          <td colspan="2"></td>
                          <td colspan="2"></td>
                          <td colspan="2"></td>
                        </tr>   
                        <tr>
                        <th scope="row">Tebal (M)</th>
                          <td colspan="2"></td>
                          <td colspan="2"></td>
                          <td colspan="2"></td>
                          <td colspan="2"></td>
                        </tr>   
                        <tr>
                        <th scope="row">Jenis</th>
                          <td colspan="2"></td>
                          <td colspan="2"></td>
                          <td colspan="2"></td>
                          <td colspan="2"></td>
                        </tr>   
                        <tr>
                        <th scope="row">Posisi</th>
                          <td colspan="2"></td>
                          <td colspan="2"></td>
                          <td colspan="2"></td>
                          <td colspan="2"></td>
                        </tr>   
                        <tr>
                        <th scope="row">Kondisi</th>
                          <td colspan="2"></td>
                          <td colspan="2"></td>
                          <td colspan="2"></td>
                          <td colspan="2"></td>
                        </tr>   
                      </tbody>
                    </table>

                      </div>

                      <div class="tab-pane fade" id="teknik3" role="tabpanel" aria-labelledby="teknik3-tab">

                    <table class="table table-bordered">
                      <thead>
                        <tr>
                          <th>Tahun</th>
                          <th colspan="16">2018</th>
                        </tr>  
                        <tr>
                          <th>URAIAN</th> 
                          <th colspan="4">KE - 1</th>
                          <th colspan="4">KE - 2</th> 
                          <th colspan="4">KE - 3</th>
                          <th colspan="4">KE - 4</th> 
                        <tr>
                     </thead>
                     
                        <tbody>
                        <tr>
                        <th scope="row">a. GORONG GORONG</th>
                          <td colspan="4"></td>
                          <td colspan="4"></td>
                          <td colspan="4"></td>
                          <td colspan="4"></td>
                        </tr>  
                        <tr>
                        <th scope="row">Jenis Material</th>
                          <td colspan="4"></td>
                          <td colspan="4"></td>
                          <td colspan="4"></td>
                          <td colspan="4"></td>
                        </tr>  <tr>
                        <th scope="row">Ukuran Panjang (M)</th>
                          <td colspan="4"></td>
                          <td colspan="4"></td>
                          <td colspan="4"></td>
                          <td colspan="4"></td>
                        </tr>  <tr>
                        <th scope="row">Kondisi</th>
                          <td colspan="4"></td>
                          <td colspan="4"></td>
                          <td colspan="4"></td>
                          <td colspan="4"></td>
                        </tr>  <tr>
                        <th rowspan=>b. SALURAN PERMANEN</th>
                          <th colspan="1">KI</th>
                          <th colspan="2">MID</th>
                          <th colspan="1">KA</th>
                          <th colspan="1">KI</th>
                          <th colspan="2">MID</th>
                          <th colspan="1">KA</th>
                          <th colspan="1">KI</th>
                          <th colspan="2">MID</th>
                          <th colspan="1">KA</th>
                          <th colspan="1">KI</th>
                          <th colspan="2">MID</th>
                          <th colspan="1">KA</th>
                        </tr> <tr>
                        <th scope="row">Jenis Material</th>
                          <td colspan="1"></td>
                          <td colspan="2"></td>
                          <td colspan="1"></td>
                          <td colspan="1"></td>
                          <td colspan="2"></td>
                          <td colspan="1"></td>
                          <td colspan="1"></td>
                          <td colspan="2"></td>
                          <td colspan="1"></td>
                          <td colspan="1"></td>
                          <td colspan="2"></td>
                          <td colspan="1"></td>
                        </tr> <th scope="row">Ukuran Pokok (BH/M)</th>
                          <td colspan="1"></td>
                          <td colspan="2"></td>
                          <td colspan="1"></td>
                          <td colspan="1"></td>
                          <td colspan="2"></td>
                          <td colspan="1"></td>
                          <td colspan="1"></td>
                          <td colspan="2"></td>
                          <td colspan="1"></td>
                          <td colspan="1"></td>
                          <td colspan="2"></td>
                          <td colspan="1"></td>
                        </tr> <th scope="row">Kondisi</th>
                          <td colspan="1"></td>
                          <td colspan="2"></td>
                          <td colspan="1"></td>
                          <td colspan="1"></td>
                          <td colspan="2"></td>
                          <td colspan="1"></td>
                          <td colspan="1"></td>
                          <td colspan="2"></td>
                          <td colspan="1"></td>
                          <td colspan="1"></td>
                          <td colspan="2"></td>
                          <td colspan="1"></td>
                          </tr> <th scope="row">Dalam (M)</th>
                          <td colspan="1"></td>
                          <td colspan="2"></td>
                          <td colspan="1"></td>
                          <td colspan="1"></td>
                          <td colspan="2"></td>
                          <td colspan="1"></td>
                          <td colspan="1"></td>
                          <td colspan="2"></td>
                          <td colspan="1"></td>
                          <td colspan="1"></td>
                          <td colspan="2"></td>
                          <td colspan="1"></td>
                        </tr> <tr>
                        <th rowspan=>c. DRAINASE BAWAH TANAH</th>
                          <td colspan="16"></td>
                          <tr>
                        <th scope="row">Jenis Material</th>
                          <td colspan="1"></td>
                          <td colspan="2"></td>
                          <td colspan="1"></td>
                          <td colspan="1"></td>
                          <td colspan="2"></td>
                          <td colspan="1"></td>
                          <td colspan="1"></td>
                          <td colspan="2"></td>
                          <td colspan="1"></td>
                          <td colspan="1"></td>
                          <td colspan="2"></td>
                          <td colspan="1"></td>
                        </tr> <th scope="row">Ukuran Pokok (BH/M)</th>
                          <td colspan="1"></td>
                          <td colspan="2"></td>
                          <td colspan="1"></td>
                          <td colspan="1"></td>
                          <td colspan="2"></td>
                          <td colspan="1"></td>
                          <td colspan="1"></td>
                          <td colspan="2"></td>
                          <td colspan="1"></td>
                          <td colspan="1"></td>
                          <td colspan="2"></td>
                          <td colspan="1"></td>
                        </tr> <th scope="row">Kondisi</th>
                          <td colspan="1"></td>
                          <td colspan="2"></td>
                          <td colspan="1"></td>
                          <td colspan="1"></td>
                          <td colspan="2"></td>
                          <td colspan="1"></td>
                          <td colspan="1"></td>
                          <td colspan="2"></td>
                          <td colspan="1"></td>
                          <td colspan="1"></td>
                          <td colspan="2"></td>
                          <td colspan="1"></td>
                          </tr> 
                          <th rowspan=>d. MANHOLE</th>
                          <td colspan="16"></td>
                          <tr>
                        <th scope="row">Jenis Material</th>
                          <td colspan="1"></td>
                          <td colspan="2"></td>
                          <td colspan="1"></td>
                          <td colspan="1"></td>
                          <td colspan="2"></td>
                          <td colspan="1"></td>
                          <td colspan="1"></td>
                          <td colspan="2"></td>
                          <td colspan="1"></td>
                          <td colspan="1"></td>
                          <td colspan="2"></td>
                          <td colspan="1"></td>
                        </tr> <th scope="row">Ukuran Pokok (BH/M)</th>
                          <td colspan="1"></td>
                          <td colspan="2"></td>
                          <td colspan="1"></td>
                          <td colspan="1"></td>
                          <td colspan="2"></td>
                          <td colspan="1"></td>
                          <td colspan="1"></td>
                          <td colspan="2"></td>
                          <td colspan="1"></td>
                          <td colspan="1"></td>
                          <td colspan="2"></td>
                          <td colspan="1"></td>
                        </tr> <th scope="row">Kondisi</th>
                          <td colspan="1"></td>
                          <td colspan="2"></td>
                          <td colspan="1"></td>
                          <td colspan="1"></td>
                          <td colspan="2"></td>
                          <td colspan="1"></td>
                          <td colspan="1"></td>
                          <td colspan="2"></td>
                          <td colspan="1"></td>
                          <td colspan="1"></td>
                          <td colspan="2"></td>
                          <td colspan="1"></td>
                          </tr> 
                          <th rowspan=>e. R I O L</th>
                          <td colspan="16"></td>
                          <tr>
                        <th scope="row">Jenis Material</th>
                          <td colspan="1"></td>
                          <td colspan="2"></td>
                          <td colspan="1"></td>
                          <td colspan="1"></td>
                          <td colspan="2"></td>
                          <td colspan="1"></td>
                          <td colspan="1"></td>
                          <td colspan="2"></td>
                          <td colspan="1"></td>
                          <td colspan="1"></td>
                          <td colspan="2"></td>
                          <td colspan="1"></td>
                        </tr> <th scope="row">Ukuran Pokok (BH/M)</th>
                          <td colspan="1"></td>
                          <td colspan="2"></td>
                          <td colspan="1"></td>
                          <td colspan="1"></td>
                          <td colspan="2"></td>
                          <td colspan="1"></td>
                          <td colspan="1"></td>
                          <td colspan="2"></td>
                          <td colspan="1"></td>
                          <td colspan="1"></td>
                          <td colspan="2"></td>
                          <td colspan="1"></td>
                        </tr> <th scope="row">Kondisi</th>
                          <td colspan="1"></td>
                          <td colspan="2"></td>
                          <td colspan="1"></td>
                          <td colspan="1"></td>
                          <td colspan="2"></td>
                          <td colspan="1"></td>
                          <td colspan="1"></td>
                          <td colspan="2"></td>
                          <td colspan="1"></td>
                          <td colspan="1"></td>
                          <td colspan="2"></td>
                          <td colspan="1"></td>
                          </tr> 
                          <th rowspan=>f. K R A B</th>
                          <td colspan="16"></td>
                          <tr>
                        <th scope="row">Jenis Material</th>
                          <td colspan="1"></td>
                          <td colspan="2"></td>
                          <td colspan="1"></td>
                          <td colspan="1"></td>
                          <td colspan="2"></td>
                          <td colspan="1"></td>
                          <td colspan="1"></td>
                          <td colspan="2"></td>
                          <td colspan="1"></td>
                          <td colspan="1"></td>
                          <td colspan="2"></td>
                          <td colspan="1"></td>
                        </tr> <th scope="row">Ukuran Pokok (BH/M)</th>
                          <td colspan="1"></td>
                          <td colspan="2"></td>
                          <td colspan="1"></td>
                          <td colspan="1"></td>
                          <td colspan="2"></td>
                          <td colspan="1"></td>
                          <td colspan="1"></td>
                          <td colspan="2"></td>
                          <td colspan="1"></td>
                          <td colspan="1"></td>
                          <td colspan="2"></td>
                          <td colspan="1"></td>
                        </tr> <th scope="row">Kondisi</th>
                          <td colspan="1"></td>
                          <td colspan="2"></td>
                          <td colspan="1"></td>
                          <td colspan="1"></td>
                          <td colspan="2"></td>
                          <td colspan="1"></td>
                          <td colspan="1"></td>
                          <td colspan="2"></td>
                          <td colspan="1"></td>
                          <td colspan="1"></td>
                          <td colspan="2"></td>
                          <td colspan="1"></td>
                          </tr> <tr>
                        <th rowspan=>g. BANGUNAN PENAHAN TANAH</th>
                          <th colspan="2">KI</th>
                          <th colspan="2">KA</th>
                          <th colspan="2">KI</th>
                          <th colspan="2">KA</th>
                          <th colspan="2">KI</th>
                          <th colspan="2">KA</th>
                          <th colspan="2">KI</th>
                          <th colspan="2">KA</th>
                        </tr> <tr>
                        <th scope="row">Jenis Material</th>
                          <td colspan="2"></td>
                          <td colspan="2"></td>
                          <td colspan="2"></td>
                          <td colspan="2"></td>
                          <td colspan="2"></td>
                          <td colspan="2"></td>
                          <td colspan="2"></td>
                          <td colspan="2"></td>
                        </tr> <tr>
                        <th scope="row">Ukuran Pokok (BH/M) </th>
                          <td colspan="2"></td>
                          <td colspan="2"></td>
                          <td colspan="2"></td>
                          <td colspan="2"></td>
                          <td colspan="2"></td>
                          <td colspan="2"></td>
                          <td colspan="2"></td>
                          <td colspan="2"></td>
                        </tr> <tr>
                        <th scope="row">Kondisi</th>
                          <td colspan="2"></td>
                          <td colspan="2"></td>
                          <td colspan="2"></td>
                          <td colspan="2"></td>
                          <td colspan="2"></td>
                          <td colspan="2"></td>
                          <td colspan="2"></td>
                          <td colspan="2"></td>
                        </tr> 
                        <th rowspan=>h. PENUTUP LERENG</th>
                          <th colspan="16"></th>
                        </tr> <tr>
                        <th scope="row">Jenis Material</th>
                          <td colspan="2"></td>
                          <td colspan="2"></td>
                          <td colspan="2"></td>
                          <td colspan="2"></td>
                          <td colspan="2"></td>
                          <td colspan="2"></td>
                          <td colspan="2"></td>
                          <td colspan="2"></td>
                        </tr> <tr>
                        <th scope="row">Ukuran Pokok (BH/M) </th>
                          <td colspan="2"></td>
                          <td colspan="2"></td>
                          <td colspan="2"></td>
                          <td colspan="2"></td>
                          <td colspan="2"></td>
                          <td colspan="2"></td>
                          <td colspan="2"></td>
                          <td colspan="2"></td>
                        </tr> <tr>
                        <th scope="row">Kondisi</th>
                          <td colspan="2"></td>
                          <td colspan="2"></td>
                          <td colspan="2"></td>
                          <td colspan="2"></td>
                          <td colspan="2"></td>
                          <td colspan="2"></td>
                          <td colspan="2"></td>
                          <td colspan="2"></td>
                        </tr>
                        </tbody>
                    </table>
                      </div>

<div class="tab-pane fade" id="teknik3" role="tabpanel" aria-labelledby="teknik3-tab">

                    <table class="table table-bordered">
                      <thead>
                        <tr>
                          <th>Tahun</th>
                          <th colspan="16">2018</th>
                        </tr>  
                        <tr>
                          <th>URAIAN</th> 
                          <th colspan="4">KE - 1</th>
                          <th colspan="4">KE - 2</th> 
                          <th colspan="4">KE - 3</th>
                          <th colspan="4">KE - 4</th> 
                        <tr>
                     </thead>
                     
                        <tbody>
                        <tr>
                        <th scope="row">a. GORONG GORONG</th>
                          <td colspan="4"></td>
                          <td colspan="4"></td>
                          <td colspan="4"></td>
                          <td colspan="4"></td>
                        </tr>  
                        <tr>
                        <th scope="row">Jenis Material</th>
                          <td colspan="4"></td>
                          <td colspan="4"></td>
                          <td colspan="4"></td>
                          <td colspan="4"></td>
                        </tr>  <tr>
                        <th scope="row">Ukuran Panjang (M)</th>
                          <td colspan="4"></td>
                          <td colspan="4"></td>
                          <td colspan="4"></td>
                          <td colspan="4"></td>
                        </tr>  <tr>
                        <th scope="row">Kondisi</th>
                          <td colspan="4"></td>
                          <td colspan="4"></td>
                          <td colspan="4"></td>
                          <td colspan="4"></td>
                        </tr>  <tr>
                        <th rowspan=>b. SALURAN PERMANEN</th>
                          <th colspan="1">KI</th>
                          <th colspan="2">MID</th>
                          <th colspan="1">KA</th>
                          <th colspan="1">KI</th>
                          <th colspan="2">MID</th>
                          <th colspan="1">KA</th>
                          <th colspan="1">KI</th>
                          <th colspan="2">MID</th>
                          <th colspan="1">KA</th>
                          <th colspan="1">KI</th>
                          <th colspan="2">MID</th>
                          <th colspan="1">KA</th>
                        </tr> <tr>
                        <th scope="row">Jenis Material</th>
                          <td colspan="1"></td>
                          <td colspan="2"></td>
                          <td colspan="1"></td>
                          <td colspan="1"></td>
                          <td colspan="2"></td>
                          <td colspan="1"></td>
                          <td colspan="1"></td>
                          <td colspan="2"></td>
                          <td colspan="1"></td>
                          <td colspan="1"></td>
                          <td colspan="2"></td>
                          <td colspan="1"></td>
                        </tr> <th scope="row">Ukuran Pokok (BH/M)</th>
                          <td colspan="1"></td>
                          <td colspan="2"></td>
                          <td colspan="1"></td>
                          <td colspan="1"></td>
                          <td colspan="2"></td>
                          <td colspan="1"></td>
                          <td colspan="1"></td>
                          <td colspan="2"></td>
                          <td colspan="1"></td>
                          <td colspan="1"></td>
                          <td colspan="2"></td>
                          <td colspan="1"></td>
                        </tr> <th scope="row">Kondisi</th>
                          <td colspan="1"></td>
                          <td colspan="2"></td>
                          <td colspan="1"></td>
                          <td colspan="1"></td>
                          <td colspan="2"></td>
                          <td colspan="1"></td>
                          <td colspan="1"></td>
                          <td colspan="2"></td>
                          <td colspan="1"></td>
                          <td colspan="1"></td>
                          <td colspan="2"></td>
                          <td colspan="1"></td>
                          </tr> <th scope="row">Dalam (M)</th>
                          <td colspan="1"></td>
                          <td colspan="2"></td>
                          <td colspan="1"></td>
                          <td colspan="1"></td>
                          <td colspan="2"></td>
                          <td colspan="1"></td>
                          <td colspan="1"></td>
                          <td colspan="2"></td>
                          <td colspan="1"></td>
                          <td colspan="1"></td>
                          <td colspan="2"></td>
                          <td colspan="1"></td>
                        </tr> <tr>
                        <th rowspan=>c. DRAINASE BAWAH TANAH</th>
                          <td colspan="16"></td>
                          <tr>
                        <th scope="row">Jenis Material</th>
                          <td colspan="1"></td>
                          <td colspan="2"></td>
                          <td colspan="1"></td>
                          <td colspan="1"></td>
                          <td colspan="2"></td>
                          <td colspan="1"></td>
                          <td colspan="1"></td>
                          <td colspan="2"></td>
                          <td colspan="1"></td>
                          <td colspan="1"></td>
                          <td colspan="2"></td>
                          <td colspan="1"></td>
                        </tr> <th scope="row">Ukuran Pokok (BH/M)</th>
                          <td colspan="1"></td>
                          <td colspan="2"></td>
                          <td colspan="1"></td>
                          <td colspan="1"></td>
                          <td colspan="2"></td>
                          <td colspan="1"></td>
                          <td colspan="1"></td>
                          <td colspan="2"></td>
                          <td colspan="1"></td>
                          <td colspan="1"></td>
                          <td colspan="2"></td>
                          <td colspan="1"></td>
                        </tr> <th scope="row">Kondisi</th>
                          <td colspan="1"></td>
                          <td colspan="2"></td>
                          <td colspan="1"></td>
                          <td colspan="1"></td>
                          <td colspan="2"></td>
                          <td colspan="1"></td>
                          <td colspan="1"></td>
                          <td colspan="2"></td>
                          <td colspan="1"></td>
                          <td colspan="1"></td>
                          <td colspan="2"></td>
                          <td colspan="1"></td>
                          </tr> 
                          <th rowspan=>d. MANHOLE</th>
                          <td colspan="16"></td>
                          <tr>
                        <th scope="row">Jenis Material</th>
                          <td colspan="1"></td>
                          <td colspan="2"></td>
                          <td colspan="1"></td>
                          <td colspan="1"></td>
                          <td colspan="2"></td>
                          <td colspan="1"></td>
                          <td colspan="1"></td>
                          <td colspan="2"></td>
                          <td colspan="1"></td>
                          <td colspan="1"></td>
                          <td colspan="2"></td>
                          <td colspan="1"></td>
                        </tr> <th scope="row">Ukuran Pokok (BH/M)</th>
                          <td colspan="1"></td>
                          <td colspan="2"></td>
                          <td colspan="1"></td>
                          <td colspan="1"></td>
                          <td colspan="2"></td>
                          <td colspan="1"></td>
                          <td colspan="1"></td>
                          <td colspan="2"></td>
                          <td colspan="1"></td>
                          <td colspan="1"></td>
                          <td colspan="2"></td>
                          <td colspan="1"></td>
                        </tr> <th scope="row">Kondisi</th>
                          <td colspan="1"></td>
                          <td colspan="2"></td>
                          <td colspan="1"></td>
                          <td colspan="1"></td>
                          <td colspan="2"></td>
                          <td colspan="1"></td>
                          <td colspan="1"></td>
                          <td colspan="2"></td>
                          <td colspan="1"></td>
                          <td colspan="1"></td>
                          <td colspan="2"></td>
                          <td colspan="1"></td>
                          </tr> 
                          <th rowspan=>e. R I O L</th>
                          <td colspan="16"></td>
                          <tr>
                        <th scope="row">Jenis Material</th>
                          <td colspan="1"></td>
                          <td colspan="2"></td>
                          <td colspan="1"></td>
                          <td colspan="1"></td>
                          <td colspan="2"></td>
                          <td colspan="1"></td>
                          <td colspan="1"></td>
                          <td colspan="2"></td>
                          <td colspan="1"></td>
                          <td colspan="1"></td>
                          <td colspan="2"></td>
                          <td colspan="1"></td>
                        </tr> <th scope="row">Ukuran Pokok (BH/M)</th>
                          <td colspan="1"></td>
                          <td colspan="2"></td>
                          <td colspan="1"></td>
                          <td colspan="1"></td>
                          <td colspan="2"></td>
                          <td colspan="1"></td>
                          <td colspan="1"></td>
                          <td colspan="2"></td>
                          <td colspan="1"></td>
                          <td colspan="1"></td>
                          <td colspan="2"></td>
                          <td colspan="1"></td>
                        </tr> <th scope="row">Kondisi</th>
                          <td colspan="1"></td>
                          <td colspan="2"></td>
                          <td colspan="1"></td>
                          <td colspan="1"></td>
                          <td colspan="2"></td>
                          <td colspan="1"></td>
                          <td colspan="1"></td>
                          <td colspan="2"></td>
                          <td colspan="1"></td>
                          <td colspan="1"></td>
                          <td colspan="2"></td>
                          <td colspan="1"></td>
                          </tr> 
                          <th rowspan=>f. K R A B</th>
                          <td colspan="16"></td>
                          <tr>
                        <th scope="row">Jenis Material</th>
                          <td colspan="1"></td>
                          <td colspan="2"></td>
                          <td colspan="1"></td>
                          <td colspan="1"></td>
                          <td colspan="2"></td>
                          <td colspan="1"></td>
                          <td colspan="1"></td>
                          <td colspan="2"></td>
                          <td colspan="1"></td>
                          <td colspan="1"></td>
                          <td colspan="2"></td>
                          <td colspan="1"></td>
                        </tr> <th scope="row">Ukuran Pokok (BH/M)</th>
                          <td colspan="1"></td>
                          <td colspan="2"></td>
                          <td colspan="1"></td>
                          <td colspan="1"></td>
                          <td colspan="2"></td>
                          <td colspan="1"></td>
                          <td colspan="1"></td>
                          <td colspan="2"></td>
                          <td colspan="1"></td>
                          <td colspan="1"></td>
                          <td colspan="2"></td>
                          <td colspan="1"></td>
                        </tr> <th scope="row">Kondisi</th>
                          <td colspan="1"></td>
                          <td colspan="2"></td>
                          <td colspan="1"></td>
                          <td colspan="1"></td>
                          <td colspan="2"></td>
                          <td colspan="1"></td>
                          <td colspan="1"></td>
                          <td colspan="2"></td>
                          <td colspan="1"></td>
                          <td colspan="1"></td>
                          <td colspan="2"></td>
                          <td colspan="1"></td>
                          </tr> <tr>
                        <th rowspan=>g. BANGUNAN PENAHAN TANAH</th>
                          <th colspan="2">KI</th>
                          <th colspan="2">KA</th>
                          <th colspan="2">KI</th>
                          <th colspan="2">KA</th>
                          <th colspan="2">KI</th>
                          <th colspan="2">KA</th>
                          <th colspan="2">KI</th>
                          <th colspan="2">KA</th>
                        </tr> <tr>
                        <th scope="row">Jenis Material</th>
                          <td colspan="2"></td>
                          <td colspan="2"></td>
                          <td colspan="2"></td>
                          <td colspan="2"></td>
                          <td colspan="2"></td>
                          <td colspan="2"></td>
                          <td colspan="2"></td>
                          <td colspan="2"></td>
                        </tr> <tr>
                        <th scope="row">Ukuran Pokok (BH/M) </th>
                          <td colspan="2"></td>
                          <td colspan="2"></td>
                          <td colspan="2"></td>
                          <td colspan="2"></td>
                          <td colspan="2"></td>
                          <td colspan="2"></td>
                          <td colspan="2"></td>
                          <td colspan="2"></td>
                        </tr> <tr>
                        <th scope="row">Kondisi</th>
                          <td colspan="2"></td>
                          <td colspan="2"></td>
                          <td colspan="2"></td>
                          <td colspan="2"></td>
                          <td colspan="2"></td>
                          <td colspan="2"></td>
                          <td colspan="2"></td>
                          <td colspan="2"></td>
                        </tr> 
                        <th rowspan=>h. PENUTUP LERENG</th>
                          <th colspan="16"></th>
                        </tr> <tr>
                        <th scope="row">Jenis Material</th>
                          <td colspan="2"></td>
                          <td colspan="2"></td>
                          <td colspan="2"></td>
                          <td colspan="2"></td>
                          <td colspan="2"></td>
                          <td colspan="2"></td>
                          <td colspan="2"></td>
                          <td colspan="2"></td>
                        </tr> <tr>
                        <th scope="row">Ukuran Pokok (BH/M) </th>
                          <td colspan="2"></td>
                          <td colspan="2"></td>
                          <td colspan="2"></td>
                          <td colspan="2"></td>
                          <td colspan="2"></td>
                          <td colspan="2"></td>
                          <td colspan="2"></td>
                          <td colspan="2"></td>
                        </tr> <tr>
                        <th scope="row">Kondisi</th>
                          <td colspan="2"></td>
                          <td colspan="2"></td>
                          <td colspan="2"></td>
                          <td colspan="2"></td>
                          <td colspan="2"></td>
                          <td colspan="2"></td>
                          <td colspan="2"></td>
                          <td colspan="2"></td>
                        </tr>
                        </tbody>
                    </table>
                      </div>

<div class="tab-pane fade" id="teknik4" role="tabpanel" aria-labelledby="teknik4-tab">

                    <table class="table table-bordered">
                      <thead>
                        <tr>
                          <th>Tahun</th>
                          <th colspan="3">2018</th>
                        </tr>  
                        <tr>
                          <th>URAIAN PERLENGKAPAN JALAN</th> 
                          <th>KI</th>
                          <th>MD</th> 
                          <th>KA</th>
                        <tr>
                    </thead>
                    
                        <tbody>
                        <tr>
                        <th scope="row">a. PAGAR PENGAMAN</th>
                          <td></td>
                          <td></td>
                          <td></td>
                        </tr>  
                        <tr>
                        <th scope="row">Guardrail (BH/M)</th>
                          <td></td>
                          <td></td>
                          <td></td>
                        </tr>  <tr>
                        <th scope="row">Wirerope (BH/M)</th>
                          <td></td>
                          <td></td>
                          <td></td>
                        </tr>  <tr>
                        <th scope="row">Concrete Barrier</th>
                          <td></td>
                          <td></td>
                          <td></td>
                        </tr>  <tr>
                        <th rowspan=>b. PAGAR BATAS OPERASIONAL (BH/M)</th>
                          <td></td>
                          <td></td>
                          <td></td>
                        </tr> <tr>
                        <th scope="row">c. DINDING PENGAMAN (BH/M)</th>
                          <td></td>
                          <td></td>
                          <td></td>                          
                        </tr> <tr> 
                        <th scope="row">d. PATOK PEMANDU (BH)</th>
                          <td></td>
                          <td></td>
                          <td></td>
                        </tr> <tr>
                        <th scope="row">e. PATOK KILOMETER (BH) </th>
                          <td></td>
                          <td></td>
                          <td></td>
                        </tr> <tr>
                        <th scope="row">f. PATOK HEKTOMETER (BH)</th>
                          <td></td>
                          <td></td>
                          <td></td>
                        </tr> <tr>
                        <th scope="row">g. PATOK LEGER JALAN (BH)</th>
                          <td></td>
                          <td></td>
                          <td></td>
                        </tr> <tr>
                        <th scope="row">h. PATOK RUMIJA (BH)</th>
                          <td></td>
                          <td></td>
                          <td></td>
                        </tr> <tr>
                        <th scope="row">i. MARKA JALAN (BH/M)</th>
                          <td></td>
                          <td></td>
                          <td></td>
                          </tr> <tr>
                        <th scope="row">j. RAMBU LALU LINTAS (BH)</th>
                          <td></td>
                          <td></td>
                          <td></td>
                        </tr> <tr>
                        <th scope="row">k. RAMBU PENUNJUK ARAH (BH)</th>
                          <td></td>
                          <td></td>
                          <td></td>
                        </tr> <th scope="row">l. LAMPU LALU LINTAS (BH)</th>
                          <td></td>
                          <td></td>
                          <td></td>
                          </tr> <tr>
                        <th scope="row">m. LAMPU PENERANGAN (BH)</th>
                          <td></td>
                          <td></td>
                          <td></td>
                        </tr> <tr> 
                        <th scope="row">n. JEMBATAN PENYEBRANGAN ORANG (BH/M)</th>
                          <td></td>
                          <td></td>
                          <td></td>
                        </tr> <tr> 
                        <th scope="row">o. CERMIN JALAN (BH)</th>
                          <td></td>
                          <td></td>
                          <td></td>
                          </tr> <tr>
                        <th scope="row">p. CCTV (BH)</th>
                          <td></td>
                          <td></td>
                          <td></td>
                        </tr> <tr> 
                        <th scope="row">q. VARIABLE MESSAGE SIGN (BH)</th>
                          <td></td>
                          <td></td>
                          <td></td>
                        </tr> <tr> <th scope="row">r. REFLEKTOR GUARDRAIL (BH)</th>
                          <td></td>
                          <td></td>
                          <td></td>
                          </tr> <tr>
                        <th rowspan=>s. INFO TOL (BH)</th>
                          <td></td>
                          <td></td>
                          <td></td>
                        </tr> <tr>
                        <th scope="row">t. ANTI SILAU (BH)</th>
                          <td></td>
                          <td></td>
                          <td></td>
                        </tr> <tr>
                        <th scope="row">u. ANTI SILAU/MATA KUCING (BH)</th>
                          <td></td>
                          <td></td>
                          <td></td>
                        </tr> <tr>
                        </tbody>
                    </table>
                      </div>

 <div class="tab-pane fade" id="teknik5" role="tabpanel" aria-labelledby="teknik5-tab">

                    <table class="table table-bordered">
                      <thead>
                        <tr>
                          <th>Tahun</th>
                          <th colspan="15">2018</th>
                        </tr>  
                        <tr>
                          <th>UTILITAS PUBLIK</th> 
                          <th colspan="5">KI</th>
                          <th colspan="5">MD</th> 
                          <th colspan="5">KA</th>
                        <tr>
                    </thead>
                    
                        <tbody>
                        <tr>
                        <th scope="row">a. PRASARANA</th>
                          <td colspan="15"></td>
                        </tr>  
                        <tr>
                        <th scope="row">Air (BH/M)</th>
                          <td colspan="5"></td>
                          <td colspan="5"></td>
                          <td colspan="5"></td>
                        </tr><tr>
                        <th scope="row">Listrik (BH/M)</th>
                          <td colspan="5"></td>
                          <td colspan="5"></td>
                          <td colspan="5"></td>
                        </tr> <tr>
                        <th scope="row">Listrik dalam Tanah (BH/M)</th>
                          <td colspan="5"></td>
                          <td colspan="5"></td>
                          <td colspan="5"></td>
                        </tr> <tr>
                        <th scope="row">Telpon (BH/M)</th>
                          <td colspan="5"></td>
                          <td colspan="5"></td>
                          <td colspan="5"></td>
                        </tr> <tr>
                        <th scope="row">Telpon dalam Tanah (BH/M)</th>
                          <td colspan="5"></td>
                          <td colspan="5"></td>
                          <td colspan="5"></td>
                        </tr> <tr>
                        <th scope="row">Minyak (BH/M)</th>
                          <td colspan="5"></td>
                          <td colspan="5"></td>
                          <td colspan="5"></td>
                        </tr> <tr>
                        <th scope="row">Gas (BH/M)</th>
                          <td colspan="5"></td>
                          <td colspan="5"></td>
                          <td colspan="5"></td>
                        </tr> <tr>
                        <th scope="row">Rumah Kabel (BH)</th>
                          <td colspan="5"></td>
                          <td colspan="5"></td>
                          <td colspan="5"></td>
                        </tr> <tr>
                        <th scope="row">Hidran (BH)</th>
                          <td colspan="5"></td>
                          <td colspan="5"></td>
                          <td colspan="5"></td>
                        </tr> <tr>
                        <th scope="row">b. SARANA</th>
                          <td colspan="15"></td>
                        </tr>  
                        <tr>
                        <th scope="row">Air (BH/M)</th>
                          <td colspan="5"></td>
                          <td colspan="5"></td>
                          <td colspan="5"></td>
                        </tr><tr>
                        <th scope="row">Listrik (BH/M)</th>
                          <td colspan="5"></td>
                          <td colspan="5"></td>
                          <td colspan="5"></td>
                        </tr> <tr>
                        <th scope="row">Listrik dalam Tanah (BH/M)</th>
                          <td colspan="5"></td>
                          <td colspan="5"></td>
                          <td colspan="5"></td>
                        </tr> <tr>
                        <th scope="row">Telpon (BH/M)</th>
                          <td colspan="5"></td>
                          <td colspan="5"></td>
                          <td colspan="5"></td>
                        </tr> <tr>
                        <th scope="row">Telpon dalam Tanah (BH/M)</th>
                          <td colspan="5"></td>
                          <td colspan="5"></td>
                          <td colspan="5"></td>
                        </tr> <tr>
                        <th scope="row">Minyak (BH/M)</th>
                          <td colspan="5"></td>
                          <td colspan="5"></td>
                          <td colspan="5"></td>
                        </tr> <tr>
                        <th scope="row">Gas (BH/M)</th>
                          <td colspan="5"></td>
                          <td colspan="5"></td>
                          <td colspan="5"></td>
                        </tr> <tr>
                        <th scope="row">Rumah Kabel (BH)</th>
                          <td colspan="5"></td>
                          <td colspan="5"></td>
                          <td colspan="5"></td>
                        </tr> <tr>
                        <th scope="row">Hidran (BH)</th>
                          <td colspan="5"></td>
                          <td colspan="5"></td>
                          <td colspan="5"></td>
                        </tr>
                        <tr>
                          <th scope="row", rowspan="2">BANGUNAN OPERASIONAL TOL</th> 
                          <th colspan="8">Luas</th>
                          <th colspan="8">Nilai</th> 
                        <tr>
                          <th colspan="4">Lahan (M2)</th>
                          <th colspan="4">BANG. (M2)</th>
                          <th colspan="4">LAHAN (M2)</th>
                          <th colspan="3">BANG. (M2)</th>
                        </tr> </tr>
                        <tr>
                        <th scope="row">a. GERBANG TOL</th>
                          <td colspan="4"></td>
                          <td colspan="4"></td>
                          <td colspan="4"></td>
                          <td colspan="3"></td>
                        </tr><tr>
                        <th scope="row">b. KANTOR</th>
                          <td colspan="4"></td>
                          <td colspan="4"></td>
                          <td colspan="4"></td>
                          <td colspan="3"></td>
                        </tr><tr>
                        <th scope="row">c. TEMPAT PERISTIRAHATAN</th>
                          <td colspan="4"></td>
                          <td colspan="4"></td>
                          <td colspan="4"></td>
                          <td colspan="3"></td>
                        </tr><tr>
                        <th scope="row">d. LAINNYA</th>
                          <td colspan="4"></td>
                          <td colspan="4"></td>
                          <td colspan="4"></td>
                          <td colspan="3"></td>
                        </tr>
                        <tr>
                        <th scope="row">JUMLAH</th>
                          <td colspan="4"></td>
                          <td colspan="4"></td>
                          <td colspan="4"></td>
                          <td colspan="3"></td>
                        </tr>
                        </tbody>
                    </table>
                      </div>

<div class="tab-pane fade" id="datalainnya" role="tabpanel" aria-labelledby="datalainnya-tab">

                    <table class="table table-bordered">
                      <thead>
                        <tr>
                          <th>Tahun</th>
                          <th colspan="12">2018</th>
                        </tr>  
                        <tr>
                          <th>URAIAN</th> 
                          <th colspan="6">Tanggal Pemanfaatan</th>
                          <th colspan="6">Nilai (Rp)</th> 
                        <tr>
                    </thead>

                        <tbody>
                        <tr>
                        </tr> 
                        </tbody>
                    </table>
                      </div>

                    </div>



                    </div>
                </div>
            </div>
        </div>

        <?=content_close()?>


        <?=content_main('Data Numerik')?>
        <div class="row">
            <div class="col-md-12">
                <div class="x_panel">
                    <div class="x_title">

                    <ul class="nav nav-tabs bar_tabs" id="myTab" role="tablist">
                      <li class="nav-item">
                        <a class="nav-link active" id="lintasanharian-tab" data-toggle="tab" href="#lintasanharian" role="tab" aria-controls="lintasanharian" aria-selected="true">Lintasan Harian</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" id="geometrik-tab" data-toggle="tab" href="#geometrik" role="tab" aria-controls="geometrik" aria-selected="false">Data Geometrik</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" id="lingkunganjalan-tab" data-toggle="tab" href="#lingkunganjalan" role="tab" aria-controls="lingkunganjalan" aria-selected="false">Data Lingkungan Jalan</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" id="legalisasi-tab" data-toggle="tab" href="#legalisasi" role="tab" aria-controls="legalisasi" aria-selected="false">Legalisasi</a>
                      </li>
                    </ul>

                     <div class="tab-content" id="myTabContent">
                      <div class="tab-pane fade show active" id="lintasanharian" role="tabpanel" aria-labelledby="lintasanharian-tab">
                      <table class="table table-bordered">
                      <thead>
                        <tr>
                          <th>Tahun</th>
                          <th colspan="4">2018</th>
                        </tr>
                        <tr>
                          <th>Asal</th>
                          <th colspan="4"></th>
                        </tr> 
                        <tr>
                          <th>GOLONGAN</th>
                          <th>LHR(Ki/Hr)</th>
                          <th>Tarif (Rp)</th>
                          <th>LHR(Ka/Hr)</th>
                          <th>Tarif (Rp)</th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                          <th scope="row">GOLONGAN I (SEDAN, JIP, PICK UP, BUS)</th>
                          <td></td>
                          <td></td>
                          <td></td>
                          <td></td>
                        </tr><tr>
                          <th scope="row">GOLONGAN II (TRUK DENGAN 2 GANDAR)</th>
                          <td></td>
                          <td></td>
                          <td></td>
                          <td></td>
                        </tr><tr>
                          <th scope="row">GOLONGAN III (TRUK DENGAN 3 GANDAR)</th>
                          <td></td>
                          <td></td>
                          <td></td>
                          <td></td>
                        </tr><tr>
                          <th scope="row">GOLONGAN IV (TRUK DENGAN 4 GANDAR)</th>
                          <td></td>
                          <td></td>
                          <td></td>
                          <td></td>
                        </tr><tr>
                          <th scope="row">GOLONGAN V (TRUK DENGAN 5 GANDAR ATAU LEBIH)</th>
                          <td></td>
                          <td></td>
                          <td></td>
                          <td></td>
                        </tr><tr>
                          <th scope="row">GOLONGAN VI (KENDARAAN RODA DUA)</th>
                          <td></td>
                          <td></td>
                          <td></td>
                          <td></td>
                        </tr>
                      </tbody>
                    </table>
                      </div>

<div class="tab-pane fade" id="geometrik" role="tabpanel" aria-labelledby="geometrik-tab">
<table class="table table-bordered">
                      <thead>
                        <tr>
                          <th>URAIAN</th>
                          <th>ASAL/TAHUN</th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                          <th scope="row">LEBAR RUMIJA (M)</th>
                          <td></td>
                        </tr><tr>
                          <th scope="row">GRADIEN (%)</th>
                          <td></td>
                        </tr><tr>
                          <th scope="row">CROSS FALL (%)</th>
                          <td></td>
                        </tr><tr>
                          <th scope="row">SUPERELEVASI (%)</th>
                          <td></td>
                        </tr><tr>
                          <th scope="row">RADIUS (%)</th>
                          <td></td>
                        </tr>
                      </tbody>
                    </table>

                      </div>

<div class="tab-pane fade" id="lingkunganjalan" role="tabpanel" aria-labelledby="lingkunganjalan-tab">
<table class="table table-bordered">
                      <thead>
                        <tr>
                          <th>URAIAN</th>
                          <th>ASAL/TAHUN</th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                          <th scope="row">TERRAIN</th>
                        </tr><tr>
                          <th scope="row">Kiri</th>
                          <td></td>
                        </tr><tr>
                          <th scope="row">Kanan</th>
                          <td></td>
                        </tr><tr>
                          <th scope="row">TATA GUNA LAHAN</th>
                        </tr><tr>
                          <th scope="row">Kiri</th>
                          <td></td>
                        </tr><tr>
                          <th scope="row">Kanan</th>
                          <td></td>
                        </tr>
                      </tbody>
                    </table>

                      </div>

<div class="tab-pane fade" id="legalisasi" role="tabpanel" aria-labelledby="legalisasi-tab">
<table class="table table-bordered">
                      <thead>
                        <tr>
                        <th>Tahun</th>
                          <th colspan="3">2018</th>
                        </tr>
                        <tr>
                          <th>KEGIATAN</th>
                          <th>TGL.BLN.THN</th>
                          <th>OLEH</th>
                          <th>PARAF</th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                          <th scope="row">DIUKUR</th>
                          <td></td>
                          <td></td>
                          <td></td>
                        </tr><tr>
                          <th scope="row">DIGAMBAR</th>
                          <td></td>
                          <td></td>
                          <td></td>
                        </tr><tr>
                          <th scope="row">DICATAT</th>
                          <td></td>
                          <td></td>
                          <td></td>
                        </tr><tr>
                          <th scope="row">DIPERIKSA OLEH BUJT</th>
                          <td></td>
                          <td></td>
                          <td></td>
                        </tr><tr>
                          <th scope="row">DISETUJUI/ DISAHKAN</th>
                          <td colspan="3"></td>
                        </tr><tr>
                          <th scope="row">DI</th>
                          <td colspan="3"></td>
                        </tr><tr>
                          <th scope="row">TGL.BLN.THN</th>
                          <td colspan="3" ></td>
                        </tr><tr>
                          <th scope="row">OLEH</th>
                          <td colspan="3"></td>
                        </tr>
                      </tbody>
                    </table>
                      </div>
                    </div>
                </div>
            </div>
        </div>


<!-- calendar modal -->
    <div id="CalenderModalNew" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">

          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
            <h4 class="modal-title" id="myModalLabel">New Calendar Entry</h4>
          </div>
          <div class="modal-body">
            <div id="testmodal" style="padding: 5px 20px;">
              <button type="button" class="btn btn-link">Data Teknik 1</button>
              <button type="button" class="btn btn-link">Data Teknik 2</button>
              <button type="button" class="btn btn-link">Data Teknik 3</button>
              <button type="button" class="btn btn-link">Data Teknik 4</button>
              <button type="button" class="btn btn-link">Data Teknik 5</button>
              <button type="button" class="btn btn-link">Data Lainnya</button>
              <button type="button" class="btn btn-link">Lintasan Harian</button>
              <button type="button" class="btn btn-link">Data Geometrik</button>
              <button type="button" class="btn btn-link">Legalisasi</button>
            </div>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-default antoclose" data-dismiss="modal">Close</button>
            <button type="button" class="btn btn-primary antosubmit">Save changes</button>
          </div>
        </div>
      </div>
    </div>
    

    <div id="fc_create" data-toggle="modal" data-target="#CalenderModalNew"></div>
    <div id="fc_edit" data-toggle="modal" data-target="#CalenderModalEdit"></div>
    <!-- /calendar modal -->

<?=content_close()?>