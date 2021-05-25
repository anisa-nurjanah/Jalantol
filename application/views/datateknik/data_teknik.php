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
<!-- Button trigger modal -->
<a href="<?=site_url($url.'/form/tambah')?>" class="btn btn-success" ><i class="fa fa-plus"></i> Tambah</a>
      


      <div class="dropup docs-options">
      </div>
</div>
</div>
</div>

<p>Unduh FORMAT EXCEL ini untuk pengisian penambahan data teknk</p>

<div class="form-group row">
<div class="col-md-12 col-sm-12 ">
    <button type="button" class="btn btn-link">Identifikasi</button>
    <button type="button" class="btn btn-link">Data Teknik 1</button>
    <button type="button" class="btn btn-link">Data Teknik 2</button>
    <button type="button" class="btn btn-link">Data Teknik 3</button>
    <button type="button" class="btn btn-link">Data Teknik 4</button>
    <button type="button" class="btn btn-link">Data Teknik 5</button>
    <button type="button" class="btn btn-link">Data Lainnya</button>
    <button type="button" class="btn btn-link">Lintasan Harian</button>
    <button type="button" class="btn btn-link">Data Geometrik</button>
</div>
</div>

</form>

            <div class="row">
              <div class="col-md-12">
                <div class="x_panel">
                  <div class="x_title">

                    <ul class="nav nav-tabs bar_tabs" id="myTab" role="tablist">
                      <li class="nav-item">
                        <a class="nav-link active" id="ident-tab" data-toggle="tab" href="#ident" role="tab" aria-controls="ident" aria-selected="true">Identifikasi</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" id="teknik1-tab" data-toggle="tab" href="#teknik1" role="tab" aria-controls="teknik1" aria-selected="true">Data Teknik 1</a>
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

<!-- IDENTIFIKASI -->
                    <div class="tab-content" id="myTabContent">
                      <div class="tab-pane fade show active" id="ident" role="tabpanel" aria-labelledby="ident_tab">
                
                      <table class="table table-bordered">
                      <thead>
                      <tr>
                          <th scope="row", rowspan="2">RUAS</th>
                          <th scope="row", rowspan="2">SEKSI</th> 
                          <th colspan="2">STA</th>
                          <th colspan="8">TITIK AWAL SEGMEN RUAS JALAN</th>
                          <th colspan="8">TITIK AKHIR SEGMEN RUAS JALAN</th>
                        <tr>
                          <th colspan="1">STA AWAL</th>
                          <th colspan="1">STA AKHIR</th>
                          <th colspan="2">X</th>
                          <th colspan="2">Y</th>
                          <th colspan="2">Z</th>
                          <th colspan="2">Deskripsi Awal</th>
                          <th colspan="2">X</th>
                          <th colspan="2">Y</th>
                          <th colspan="2">Z</th>
                          <th colspan="2">Deskripsi Akhir</th>
                        </tr> </tr>
                        </thead>
                        <tbody>
                        <?php
        foreach ($datatable_seksi->result() as $row) {
      ?>
                        
                        <tr>
                          <th scope="row"><?=$row->ruas?></th>
                          <th scope="row"><?=$row->seksi?></th>
                          <th colspan="1"><?=$row->sta_awal?></th>
                          <th colspan="1"><?=$row->sta_akhir?></th>
                          <th colspan="2"><?=$row->x_awal?></th>
                          <th colspan="2"><?=$row->y_awal?></th>
                          <th colspan="2"><?=$row->z_awal?></th>
                          <th colspan="2"><?=$row->deskripsi_awal?></th>
                          <th colspan="2"><?=$row->x_akhir?></th>
                          <th colspan="2"><?=$row->y_akhir?></th>
                          <th colspan="2"><?=$row->z_akhir?></th>
                          <th colspan="2"><?=$row->deskripsi_akhir?></th>
                        </tr>
                       
                        </tbody>
                        <?php
                        }
                        ?>
                    </table>
                    <table class="table table-bordered">
                      <thead>
                      <th scope="row">TAHUN</th>
                      <th scope="row">PROVINSI</th>
                      <th scope="row">KABUPATEN</th> 
                      <th scope="row">KECAMATAN</th> 
                      <th scope="row">DESA</th> 
                    </thead>
                    <tbody>
                      <?php
                       foreach ($datatable_ident->result() as $row) {
                      ?>
                      <th scope="row"><?=$row->tahun?></th>
                      <th scope="row"><?=$row->nama_prov?></th>
                      <th scope="row"><?=$row->nama_kab?></th> 
                      <th scope="row"><?=$row->nama_kec?></th> 
                      <th scope="row"><?=$row->nama_desa?></th> 
                    </tbody>
                    <?php
                        }
                        ?>
                    </table>

                      </div>

<!-- DATA TEKNIK 1 -->

                  <div class="tab-pane fade" id="teknik1" role="tabpanel" aria-labelledby="teknik1-tab">

                    <table class="table table-bordered">
                    <thead>
              
   
              <tr>
                <th>Uraian</th>
                <th>Luas (M2)</th>
                <th>Data Perolehan</th>
                <th>Nilai Perolehan</th>
              </tr>
            </thead>
            <tbody>
            <?php
        foreach ($datatable_d1->result() as $row) {
      ?>
              <tr>

                <th scope="row"><?=$row->Uraian?></th>
                <td><?=$row->Luas?></td>
                <td><?=$row->Data_Perolehan?></td>
                <td><?=$row->Nilai_Perolehan?></td>
              </tr>
              <tr>
                <th scope="row">Perkerasan Jalan</th>
                <td><?=$row->Uraian?></td>
                <td><?=$row->Data_Perolehan?></td>
                <td><?=$row->Nilai_Perolehan?></td>
              </tr>
              <?php
              }
              ?>
            </tbody>
                    </table>
                      </div>
                   
                    

<!-- DATA TEKNIK 2 -->
                      <div class="tab-pane fade" id="teknik2" role="tabpanel" aria-labelledby="teknik2-tab">
          <table class="table table-bordered">
            <thead>
              <tr>
                <th scope="row" rowspan="2">Tipe Lapis</th>
                <th scope="row" rowspan="2">Uraian</th>
                <th colspan="4">Jalur KI</th>
                <th colspan="4">Jalur KA</th>
                <tr>
                  <th colspan="2">Lajur 1</th>
                  <th colspan="2">Lajur 2</th>
                  <th colspan="2">Lajur 2</th>
                  <th colspan="2">Lajur 1</th>
              </tr>
            </thead>
            <tbody>
            <?php
                  foreach ($datatable_d2l->result() as $row) {
                ?>
                      <tr>
                          <th scope="row" rowspan="2" ><?=$row->Tipe_Lapis?></th> 
                          <th scope="row" rowspan="2" ><?=$row->Uraian?></th> 
                          <th><?=$row->KI_Jalur_1?></th>
                          <th><?=$row->KI_Jalur_2?></th>
                          <th><?=$row->KA_Jalur_1?></th>
                          <th><?=$row->KA_Jalur_2?></th>
                        </tr>
                        <?php
                        }
                        ?>

            </tbody>
                    </table>

                    
                    <table class="table table-bordered">
                      <thead>
                        <tr>
                          <th scope="row">Uraian</th>
                          <th colspan="8">Median</th>
                        </tr>
                      </thead>
                      <tbody>
                      <?php
                  foreach ($datatable_d2m->result() as $row) {
                ?>
                        <tr>
                        <th scope="row"><?=$row->Uraian?></th>
                          <td colspan="8"><?=$row->Median?></td>
                        </tr>  
                        <?php
                        }
                        ?>

                      </tbody>
                    </table>

                    <table class="table table-bordered">
                      <thead>
                        <tr>
                          <th scope="row" rowspan="4">BAHU JALAN</th>
                          <th colspan="4">KI</th>
                          <th colspan="4">KA</th>
                          <tr>
                          <th colspan="2">LUAR</th>
                          <th colspan="2">DALAM</th>
                          <th colspan="2">DALAM</th>
                          <th colspan="2">LUAR</th>
                          </tr>
                        </tr>
                        </thead>
                        <tbody>
                        <?php
                  foreach ($datatable_d2b->result() as $row) {
                ?>
                      <tr>
                          <th scope="row"><?=$row->Uraian?></th>
                          
                          <th colspan="2"><?=$row->KI_Luar?></th>
                          <th colspan="2"><?=$row->KI_Dalam?></th>
                          <th colspan="2"><?=$row->KA_Dalam?></th>
                          <th colspan="2"><?=$row->KA_Luar?></th>
                          </tr>
                        </tr>

                        <?php
                        }
                        ?>

                      </tbody>
                    </table>
                       
                      </div>

<!-- DATA TEKNIK 3 -->
                      <div class="tab-pane fade" id="teknik3" role="tabpanel" aria-labelledby="teknik3-tab">

                    <table class="table table-bordered">
                      <thead>

                        <tr>
                          <th>URAIAN</th> 
                          <th colspan="4">KE - 1</th>
                          <th colspan="4">KE - 2</th> 
                          <th colspan="4">KE - 3</th>
                          <th colspan="4">KE - 4</th> 
                        <tr>
                     </thead>
                     
                        <tbody>
                        <?php
                  foreach ($datatable_d3g->result() as $row) {
                ?>
                        <tr>
                        <th scope="row"><?=$row->Uraian?></th>
                          <td colspan="4"><?=$row->Ke-1?></td>
                          <td colspan="4"><?=$row->Ke-2?></td>
                          <td colspan="4"><?=$row->Ke-3?></td>
                          <td colspan="4"><?=$row->Ke-4?></td>
                        </tr>  
                        <?php
                        }
                        ?>
                        </tbody>
                        <table class="table table-bordered">
                      <thead>
                        <th rowspan=>BANGUNAN PENAHAN TANAH</th>
                          <th colspan="2">KI</th>
                          <th colspan="2">KA</th>
                          <th colspan="2">KI</th>
                          <th colspan="2">KA</th>
                          <th colspan="2">KI</th>
                          <th colspan="2">KA</th>
                          <th colspan="2">KI</th>
                          <th colspan="2">KA</th>
                        </tr>
                        </thead>
                        <tbody>
                        <?php
                  foreach ($datatable_d3p->result() as $row) {
                ?>
                        <th rowspan=><?=$row->Ke-Uraian?></th>
                          <th colspan="2"><?=$row->Ke_1_KI?></th>
                          <th colspan="2"><?=$row->Ke_1_KA?></th>
                          <th colspan="2"><?=$row->Ke_2_KI?></th>
                          <th colspan="2"><?=$row->Ke_2_KA?></th>
                          <th colspan="2"><?=$row->Ke_3_KI?></th>
                          <th colspan="2"><?=$row->Ke_3_KA?></th>
                          <th colspan="2"><?=$row->Ke_4_KI?></th>
                          <th colspan="2"><?=$row->Ke_4_KA?></th>
                        </tr>
                        <?php
                        }
                        ?>
                        </tbody>
                       </table>


                      <table class="table table-bordered">
                      <thead>
                      <tr>
                        <th rowspan=>SALURAN PERMANEN</th>
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
                        </tr>
                        </thead>
                        <tbody>
                        <?php
                  foreach ($datatable_d3s->result() as $row) {
                ?>
                        <tr>
                        <th rowspan=><?=$row->Uraian?></th>
                          <th colspan="1"><?=$row->Ke_1_KI?></th>
                          <th colspan="2"><?=$row->Ke_1_MID?></th>
                          <th colspan="1"><?=$row->Ke_1_KA?></th>
                          <th colspan="1"><?=$row->Ke_2_KI?></th>
                          <th colspan="2"><?=$row->Ke_2_MID?></th>
                          <th colspan="1"><?=$row->Ke_2_KA?></th>
                          <th colspan="1"><?=$row->Ke_3_KI?></th>
                          <th colspan="2"><?=$row->Ke_3_MID?></th>
                          <th colspan="1"><?=$row->Ke_3_KA?></th>
                          <th colspan="1"><?=$row->Ke_4_KI?></th>
                          <th colspan="2"><?=$row->Ke_4_MID?></th>
                          <th colspan="1"><?=$row->Ke_1_KA?></th>
                        </tr>
                        <?php
                        }
                        ?>
                        </tbody>
                        </table>
                      </div>


                    

<!-- DATA TEKNIK 4 -->
<div class="tab-pane fade" id="teknik4" role="tabpanel" aria-labelledby="teknik4-tab">

                    <table class="table table-bordered">
                      <thead>
 
                        <tr>
                          <th>URAIAN PERLENGKAPAN JALAN</th> 
                          <th>KI</th>
                          <th>MD</th> 
                          <th>KA</th>
                        <tr>
                    </thead>
                    
                        <tbody>
                        <?php
                  foreach ($datatable_d4->result() as $row) {
                ?>
                        <tr>
                        <th scope="row"><?=$row->Uraian?></th>
                          <td><?=$row->KI?></td>
                          <td><?=$row->MID?></td>
                          <td><?=$row->KA?></td>
                        </tr>  


                        <?php
                        }
                        ?>
                        </tbody>
                    </table>
                      </div>
<!-- DATA TEKNIK 5 -->
 <div class="tab-pane fade" id="teknik5" role="tabpanel" aria-labelledby="teknik5-tab">

                    <table class="table table-bordered">
                      <thead>
  
                        <tr>
                          <th >JENIS SARANA</th> 
                          <th>URILITAS PUBLIK</th>
                          <th colspan="5">KI</th>
                          <th colspan="5">MD</th> 
                          <th colspan="5">KA</th>
                        <tr>
                    </thead>
                    
                        <tbody>
                        <?php
                  foreach ($datatable_d5pf->result() as $row) {
                ?>

                        <tr>
                        <th scope="row"><?=$row->Jenis_Sarana?></th>
                          <td colspan="5"><?=$row->Uraian?></td>
                          <td colspan="5"><?=$row->KI?></td>
                          <td colspan="5"><?=$row->MID?></td>
                          <td colspan="5"><?=$row->KA?></td>
                        </tr><tr>
                       
                        <?php
                        }
                        ?>
                        </tbody>
                        </table>


                    <table class="table table-bordered">
                    <thead>
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
                    </thead>
                      <tbody>
                    <?php
                      foreach ($datatable_d5b->result() as $row) {
                    ?>
                        
                        <tr>
                        <th scope="row"><?=$row->Uraian?></th>
                          <td colspan="4"><?=$row->Luas_Lahan?></td>
                          <td colspan="4"><?=$row->Luas_Bangunan?></td>
                          <td colspan="4"><?=$row->Nilai_Lahan?></td>
                          <td colspan="3"><?=$row->Nilai_Bangunan?></td>
                        </tr>
                        <?php
                        }
                        ?>
                        </tbody>
                    </table>
                      </div>
<!-- DATA LAINNYA -->
<div class="tab-pane fade" id="datalainnya" role="tabpanel" aria-labelledby="datalainnya-tab">

                    <table class="table table-bordered">
                      <thead>
 
                        <tr>
                          <th>URAIAN</th> 
                          <th colspan="6">Tanggal Pemanfaatan</th>
                          <th colspan="6">Nilai (Rp)</th> 
                        <tr>
                    </thead>

                        <tbody>
                        <?php
                      foreach ($datatable_dl->result() as $row) {
                    ?>
                        <tr>
                        <th><?=$row->Uraian?></th> 
                          <th colspan="6"><?=$row->Tanggal_Pemanfaatan?></th>
                          <th colspan="6"><?=$row->Nilai?></th> 
                        </tr> 
                        <?php
                        }
                        ?>
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

                    </ul>
<!-- LHR -->
                     <div class="tab-content" id="myTabContent">
                      <div class="tab-pane fade show active" id="lintasanharian" role="tabpanel" aria-labelledby="lintasanharian-tab">
                      <table class="table table-bordered">
                      <thead>
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
                      <?php
                      foreach ($datatable_lhr->result() as $row) {
                    ?>
                        <tr>
                          <th scope="row"><?=$row->Golongan?></th>
                          <td><?=$row->LHR_KI?></td>
                          <td><?=$row->Tarif_KI?></td>
                          <td><?=$row->LHR_KA?></td>
                          <td><?=$row->Tarif_KA?></td>
                        </tr>
                        <?php
                        }
                        ?>
                      </tbody>
                    </table>
                      </div>

<!-- GEOMETRIK -->
<div class="tab-pane fade" id="geometrik" role="tabpanel" aria-labelledby="geometrik-tab">
<table class="table table-bordered">
                     
                      <thead>
                        <tr>
                          <th>URAIAN</th>
                          <th>ASAL/TAHUN</th>
                        </tr>
                      </thead>
                      <tbody>
                      <?php
                      foreach ($datatable_pg->result() as $row) {
                    ?>
                        <tr>
                          <th scope="row"><?=$row->Uraian?></th>
                          <th scope="row"><?=$row->Tahun?></th>
                        </tr>
                        <?php
                        }
                        ?>
                      </tbody>
                    </table>

                      
                      </div>
<!-- LINGKUNGAN -->
<div class="tab-pane fade" id="lingkunganjalan" role="tabpanel" aria-labelledby="lingkunganjalan-tab">
<table class="table table-bordered">
                      <thead>
                        <tr>
                          <th>JENIS LINGKUNGAN</th>
                          <th>URAIAN</th>
                          <th>ASAL/TAHUN</th>
                        </tr>
                      </thead>
                      <tbody>
                      <?php
                      foreach ($datatable_dlj1->result() as $row) {
                    ?>
                        <tr>
                          <th><?=$row->Jenis_Lingkungan?></th>
                          <th><?=$row->Uraian?></th>
                          <th><?=$row->Tahun?></th>
                        </tr>
                        <?php
                        }
                        ?>
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
              <button type="button" class="btn btn-link">Data Lingkungan Jalan</button>
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

