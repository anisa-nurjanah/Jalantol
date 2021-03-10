<?=content_open('Formulir Data Teknik')?>
<?=content_main_1()?>

                    <!-- Smart Wizard -->
                    <p>This is a basic form wizard example that inherits the colors from the selected scheme.</p>
                    <div id="wizard" class="form_wizard wizard_horizontal">
                      <ul class="wizard_steps">
                        <li>
                          <a href="#step-1">
                            <span class="step_no">1</span>
                            <span class="step_descr">
                                              Step 1<br />
                                              <small>IDENTIFIKASI</small>
                                          </span>
                          </a>
                        </li>
                        <li>
                          <a href="#step-2">
                            <span class="step_no">2</span>
                            <span class="step_descr">
                                              Step 2<br />
                                              <small>DATA TEKNIK</small>
                                          </span>
                          </a>
                        </li>
                        <li>
                          <a href="#step-3">
                            <span class="step_no">3</span>
                            <span class="step_descr">
                                              Step 3<br />
                                              <small>DATA SPASIAL</small>
                                          </span>
                          </a>
                        </li>
                        
                      </ul>
                      <div id="step-1">
								<div class="x_title">
									<h2>IDENTIFIKASI <small>1/3</small></h2>
									<div class="clearfix"></div>
								</div>
								<div class="x_content">

              <div class="form-group row ">
                <div class='col-sm-8'>
                    Nomor Kode
                    <div class="form-group">
											    	<input type="type" class="form-control" placeholder="Default Input">
                    </div>
                </div>
              </div>
      
              <div class="form-group row ">
                <div class='col-sm-4'>
                    Provinsi
                    <div class="form-group">
                            <select class="form-control ">
                              <option>Choose option</option>
                              <option>Option one</option>
                              <option>Option two</option>
                              <option>Option three</option>
                              <option>Option four</option>  
                            </select>
                    </div>
                </div>
                
                <div class='col-sm-4'>
                    Kabupaten
                    <div class="form-group">
                            <select class="form-control ">
                              <option>Choose option</option>
                              <option>Option one</option>
                              <option>Option two</option>
                              <option>Option three</option>
                              <option>Option four</option>  
                            </select>
                    </div>
                </div>
              </div>

              
              <div class="form-group row ">
                <div class='col-sm-4'>
                    Kecamatan
                    <div class="form-group">
                            <select class="form-control ">
                              <option>Choose option</option>
                              <option>Option one</option>
                              <option>Option two</option>
                              <option>Option three</option>
                              <option>Option four</option>  
                            </select>
                    </div>
                </div>
                
                <div class='col-sm-4'>
                    Desa
                    <div class="form-group">
                            <select class="form-control ">
                              <option>Choose option</option>
                              <option>Option one</option>
                              <option>Option two</option>
                              <option>Option three</option>
                              <option>Option four</option>  
                            </select>
                    </div>
                </div>
              </div>

              
              <div class="form-group row ">
                <div class='col-sm-8'>
                    Nomor Ruas
                    <div class="form-group">
											    	<input type="type" class="form-control" placeholder="Default Input">
                    </div>
                </div>
              </div>
      
              <div class="form-group row ">
                <div class='col-sm-4'>
                    Seksi Ruas
                    <div class="form-group">
											    	<input type="type" class="form-control" placeholder="Default Input">
                    </div>
                </div>

                <div class='col-sm-4'>
                    Deskripsi
                    <div class="form-group">
											    	<input type="type" class="form-control" placeholder="Default Input">
                    </div>
                </div>
              </div>

                      <div class="table-responsive">
                      <table class="table table-striped jambo_table">
                        <thead>
                          <tr class="headings">
                            <th class="column-title">Titik Ikat</th>
                            <th class="column-title">KM</th>
                            <th class="column-title">Koordinat X</th>
                            <th class="column-title">Koordinat Y</th>
                            <th class="column-title">Koordinat Z</th>
                            <th class="column-title">Deskripsi</th>
                            </th>
                            <th class="bulk-actions" colspan="7">
                              <a class="antoo" style="color:#fff; font-weight:500;">Bulk Actions ( <span class="action-cnt"> </span> ) <i class="fa fa-chevron-down"></i></a>
                            </th>
                          </tr>
                        </thead>

                        <tbody>
                          <tr class="even pointer">
                            <td class=" ">Titik Ikat Leger</td>
                            <td class=" ">...</td>
                            <td class=" ">...</td>
                            <td class=" ">...</td>
                            <td class=" ">...</td>
                            <td class=" ">...</td>
                          </tr>
                          <tr class="odd pointer">
                            <td class=" ">Titik Ikat Patok</td>
                            <td class=" ">...</td>
                            <td class=" ">...</td>
                            <td class=" ">...</td>
                            <td class=" ">...</td>
                            <td class=" ">...</td>
                          </tr>
                          <tr class="even pointer">
                            <td class=" ">Titik Awal Segmen</td>
                            <td class=" ">...</td>
                            <td class=" ">...</td>
                            <td class=" ">...</td>
                            <td class=" ">...</td>
                            <td class=" ">...</td>
                          </tr>
                          <tr class="odd pointer">
                            <td class=" ">Titik Akhir Segmen</td>
                            <td class=" ">...</td>
                            <td class=" ">...</td>
                            <td class=" ">...</td>
                            <td class=" ">...</td>
                            <td class=" ">...</td>
                          </tr>
                        </tbody>
                      </div>
                    </table>
                        </form>

                  <div class="ln_solid"></div>
										<div class="item form-group">
												<button class="btn btn-primary" type="button">Simpan</button>
												<button class="btn btn-secondary" type="reset">Batal</button>
										</div>

                    <div class="ln_solid"></div>
										<div class="item form-group">
											<div class="col-md-6 col-sm-6 offset-md-5">
                      <a href="#step-1">
												<button type="submit" class="btn btn-success">Selanjutnya</button>
</a>
											</div>
										</div>
</div>
</div>

<div id="step-2">
<span class="section">Input Formulir</span>
<p>Input pada form ini dengan menggunakan JENIS FILE XLS. </p>
<div class="form-group row">
	<label class="col-form-label col-md-3 col-sm-3 ">DATA TEKNIK 1</label>
		<div class="col-md-9 col-sm-9 ">
        <input type="file" data-role="magic-overlay" data-target="#pictureBtn" data-edit="insertImage" />
        <button type="submit" class="btn btn-success">Simpan</button>
	    <button class="btn btn-secondary" type="button">Batal</button>
		</div>
</div>

<div class="form-group row">
	<label class="col-form-label col-md-3 col-sm-3 ">DATA TEKNIK 2</label>
		<div class="col-md-9 col-sm-9 ">
        <input type="file" data-role="magic-overlay" data-target="#pictureBtn" data-edit="insertImage" />
        <button type="submit" class="btn btn-success">Simpan</button>
	    <button class="btn btn-secondary" type="button">Batal</button>
		</div>
</div>

<div class="form-group row">
	<label class="col-form-label col-md-3 col-sm-3 ">DATA TEKNIK 3</label>
		<div class="col-md-9 col-sm-9 ">
        <input type="file" data-role="magic-overlay" data-target="#pictureBtn" data-edit="insertImage" />
        <button type="submit" class="btn btn-success">Simpan</button>
	    <button class="btn btn-secondary" type="button">Batal</button>
		</div>
</div>

<div class="form-group row">
	<label class="col-form-label col-md-3 col-sm-3 ">DATA TEKNIK 4</label>
		<div class="col-md-9 col-sm-9 ">
        <input type="file" data-role="magic-overlay" data-target="#pictureBtn" data-edit="insertImage" />
        <button type="submit" class="btn btn-success">Simpan</button>
	    <button class="btn btn-secondary" type="button">Batal</button>
		</div>
</div>

<div class="form-group row">
	<label class="col-form-label col-md-3 col-sm-3 ">DATA TEKNIK 5</label>
		<div class="col-md-9 col-sm-9 ">
        <input type="file" data-role="magic-overlay" data-target="#pictureBtn" data-edit="insertImage" />
        <button type="submit" class="btn btn-success">Simpan</button>
	    <button class="btn btn-secondary" type="button">Batal</button>
		</div>
</div>

<div class="form-group row">
	<label class="col-form-label col-md-3 col-sm-3 ">DATA LAINNYA</label>
		<div class="col-md-9 col-sm-9 ">
        <input type="file" data-role="magic-overlay" data-target="#pictureBtn" data-edit="insertImage" />
        <button type="submit" class="btn btn-success">Simpan</button>
	    <button class="btn btn-secondary" type="button">Batal</button>
		</div>
</div>

<div class="form-group row">
	<label class="col-form-label col-md-3 col-sm-3 ">LINTASAN HARIAN</label>
		<div class="col-md-9 col-sm-9 ">
        <input type="file" data-role="magic-overlay" data-target="#pictureBtn" data-edit="insertImage" />
        <button type="submit" class="btn btn-success">Simpan</button>
	    <button class="btn btn-secondary" type="button">Batal</button>
		</div>
</div>

<div class="form-group row">
	<label class="col-form-label col-md-3 col-sm-3 ">DATA GEOMETRIK</label>
		<div class="col-md-9 col-sm-9 ">
        <input type="file" data-role="magic-overlay" data-target="#pictureBtn" data-edit="insertImage" />
        <button type="submit" class="btn btn-success">Simpan</button>
	    <button class="btn btn-secondary" type="button">Batal</button>
		</div>
</div>

<div class="form-group row">
	<label class="col-form-label col-md-3 col-sm-3 ">LINGKUNGAN JALAN</label>
		<div class="col-md-9 col-sm-9 ">
        <input type="file" data-role="magic-overlay" data-target="#pictureBtn" data-edit="insertImage" />
        <button type="submit" class="btn btn-success">Simpan</button>
	    <button class="btn btn-secondary" type="button">Batal</button>
		</div>
</div>

<div class="form-group row">
	<label class="col-form-label col-md-3 col-sm-3 ">LEGALISASI</label>
		<div class="col-md-9 col-sm-9 ">
        <input type="file" data-role="magic-overlay" data-target="#pictureBtn" data-edit="insertImage" />
        <button type="submit" class="btn btn-success">Simpan</button>
	    <button class="btn btn-secondary" type="button">Batal</button>
		</div>
</div>
<div>
    <button class="btn btn-primary" type="submin">SELESAI</button>
</div>

<?=content_close_1()?>