<?=content_open('Data Teknik')?>
<?=content_welcome('John Doe')?>
<?=content_main('Data Teknik')?>
<form class="form-horizontal form-label-left">
<div class="form-group row">
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
      <a href="<?=site_url('Form_teknik')?>"><span class="btn btn-primary">Tambah Data Teknik</span></a>
      <div class="dropup docs-options">
          <button type="button" class="btn btn-primary btn-block dropdown-toggle" id="toggleOptions" data-toggle="dropdown" aria-expanded="true">
          Format Data Teknik
            <span class="caret"></span>
          </button>
        <ul class="dropdown-menu" aria-labelledby="toggleOptions" role="menu">
          <li><button type="button" class="btn btn-link">Data Teknik 1</button></li>
          <li><button type="button" class="btn btn-link">Data Teknik 2</button></li>
          <li><button type="button" class="btn btn-link">Data Teknik 3</button></li>
          <li><button type="button" class="btn btn-link">Data Teknik 4</button></li>
          <li><button type="button" class="btn btn-link">Data Teknik 5</button></li>
          <li><button type="button" class="btn btn-link">Data Lainnya</button></li>
          <li><button type="button" class="btn btn-link">Lintasan Harian</button></li>
          <li><button type="button" class="btn btn-link">Data Geometrik</button></li>
          <li><button type="button" class="btn btn-link">Legalisasi</button></li>
        </ul>
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
                          <th colspan="12">2018</th>
                        </tr>  
                        <tr>
                          <th>URAIAN</th> 
                          <th colspan="3">KE - 1</th>
                          <th colspan="3">KE - 2</th> 
                          <th colspan="3">KE - 3</th>
                          <th colspan="3">KE - 4</th> 
                        <tr>
                     </thead>
                     
                        <tbody>
                        <tr>
                        <th scope="row">a. GORONG GORONG</th>
                          <td colspan="3"></td>
                          <td colspan="3"></td>
                          <td colspan="3"></td>
                          <td colspan="3"></td>
                        </tr>  
                        <tr>
                        <th scope="row">Jenis Material</th>
                          <td colspan="3"></td>
                          <td colspan="3"></td>
                          <td colspan="3"></td>
                          <td colspan="3"></td>
                        </tr>  <tr>
                        <th scope="row">Ukuran Panjang (M)</th>
                          <td colspan="3"></td>
                          <td colspan="3"></td>
                          <td colspan="3"></td>
                          <td colspan="3"></td>
                        </tr>  <tr>
                        <th scope="row">Kondisi</th>
                          <td colspan="3"></td>
                          <td colspan="3"></td>
                          <td colspan="3"></td>
                          <td colspan="3"></td>
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
                        <a class="nav-link" id="contact-tab" data-toggle="tab" href="#contact" role="tab" aria-controls="contact" aria-selected="false">Lintasan Harian</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" id="contact-tab" data-toggle="tab" href="#contact" role="tab" aria-controls="contact" aria-selected="false">Data Geometrik</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" id="contact-tab" data-toggle="tab" href="#contact" role="tab" aria-controls="contact" aria-selected="false">Data Lingkungan Jalan</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" id="contact-tab" data-toggle="tab" href="#contact" role="tab" aria-controls="contact" aria-selected="false">Legalisasi</a>
                      </li>
                    </ul>

                    <div class="tab-content" id="myTabContent">
                      <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                        Raw denim you probably haven't heard of them jean shorts Austin. Nesciunt tofu stumptown aliqua, retro synth master cleanse. Mustache cliche tempor, williamsburg carles vegan helvetica. Reprehenderit butcher retro keffiyeh dreamcatcher
                            synth. Cosby sweater eu banh mi, qui irure terr.
                      </div>
                      <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                        Food truck fixie locavore, accusamus mcsweeney's marfa nulla single-origin coffee squid. Exercitation +1 labore velit, blog sartorial PBR leggings next level wes anderson artisan four loko farm-to-table craft beer twee. Qui photo
                            booth letterpress, commodo enim craft beer mlkshk aliquip
                      </div>
                      <div class="tab-pane fade" id="contact" role="tabpanel" aria-labelledby="contact-tab">
                        xxFood truck fixie locavore, accusamus mcsweeney's marfa nulla single-origin coffee squid. Exercitation +1 labore velit, blog sartorial PBR leggings next level wes anderson artisan four loko farm-to-table craft beer twee. Qui photo
                            booth letterpress, commodo enim craft beer mlkshk 
                      </div>
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