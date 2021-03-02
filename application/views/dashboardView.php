<?=content_open('Dashboard')?>
<?=content_welcome('John Doe')?>
<?=content_main_1('')?>

               
          <!-- DASHBOARD CONTENT 1 -->

          <div class="col-md-3 col-sm-3  tile">
            <span>Jalan Tol Beroperasi</span>
            <h2 class="value text-success">57</h2>
            <h7>di Indonesia </h7>
            <span class="sparkline_one" style="height: 160px;">
                  <canvas width="200" height="60" style="display: inline-block; vertical-align: top; width: 94px; height: 30px;"></canvas>
              </span>
          </div>
          <div class="col-md-3 col-sm-3  tile">
            <span>Total Panjang Jalan Tol</span>
            <h2 class="value text-success">2303,8</h2>
            <h7>dalam KM </h7>
            <span class="sparkline_one" style="height: 160px;">
                  <canvas width="200" height="60" style="display: inline-block; vertical-align: top; width: 94px; height: 30px;"></canvas>
              </span>
          </div>
          <div class="col-md-3 col-sm-3  tile">
            <span>Total Jalan Tol</span>
            <h2 class="value text-success">1</h2>
            <h7>Terdaftar di Sistem </h7>
            <span class="sparkline_one" style="height: 160px;">
                  <canvas width="200" height="60" style="display: inline-block; vertical-align: top; width: 94px; height: 30px;"></canvas>
              </span>
          </div>
          <div class="col-md-3 col-sm-3  tile">
            <span>Total Data Leger Jalan Tol</span>
            <h2 class="value text-success">2</h2>
            <h7>Terdaftar di Sistem</h7>
            <span class="sparkline_one" style="height: 160px;">
                  <canvas width="200" height="60" style="display: inline-block; vertical-align: top; width: 94px; height: 30px;"></canvas>
              </span>
          </div>
      </div>
        
      <!-- <p>Add class <code>bulk_action</code> to table for bulk actions options on row select</p> -->
        <!-- DASHBOARD CONTENT 2 (TABEL) -->
        <div class="table-responsive">
        <table class="table table-striped jambo_table bulk_action">
        <thead>
        <tr class="headings">
            <th class="column-title">No</th>
            <th class="column-title">Ruas Jalan Tol</th>
            <th class="column-title">Panjang Jalan Utama (KM)</th>
            <th class="column-title">Panjang Akses (KM)</th>
            <th class="column-title">BUJT</th>
            <th class="column-title">Mulai Beroperasi</th>
            <th class="column-title">Masa Konsensi</th>
            <th class="column-title no-link last"><span class="nobr">Terdaftar di Sistem</span>
            </th>
            <th class="bulk-actions" colspan="7">
            <a class="antoo" style="color:#fff; font-weight:500;">Bulk Actions ( <span class="action-cnt"> </span> ) <i class="fa fa-chevron-down"></i></a>
            </th>
        </tr>
        </thead>

        <tbody>
        <tr class="even pointer">
            <td class="a-center">1</td>
            <td class=" ">Jakarta - Bogor - Ciawi</td>
            <td class=" ">50.00</td>
            <td class=" ">9.00</td>
            <td class=" ">PT Jasa Marga (Persero) Tbk.</td>
            <td class=" ">1978</td>
            <td class=" ">40 Tahun </td>
            <td class=" last"><a href="#">Belum</a>
            </td>
        </tr>
        
        <tr class="odd pointer">
            <td class="a-center">2</td>
            <td class=" ">Semarang Seksi A,B,C</td>
            <td class=" ">24.75</td>
            <td class=" "> </td>
            <td class=" ">PT Jasa Marga (Persero) Tbk.</td>
            <td class=" ">1983</td>
            <td class=" ">40 Tahun </td>
            <td class=" last"><a href="#">Belum</a>
            </td>
        </tr>
        
        <tr class="even pointer">
            <td class="a-center">3</td>
            <td class=" ">Jakarta - Tangerang</td>
            <td class=" ">27.00</td>
            <td class=" ">6.00</td>
            <td class=" ">PT Jasa Marga (Persero) Tbk.</td>
            <td class=" ">1984</td>
            <td class=" ">40 Tahun </td>
            <td class=" last"><a href="#">Belum</a>
            </td>
        </tr>
        
        <tr class="odd pointer">
            <td class="a-center">4</td>
            <td class=" ">Prof.Dr.Ir.Soedijatmo</td>
            <td class=" ">14.30</td>
            <td class=" ">0.00</td>
            <td class=" ">PT Jasa Marga (Persero) Tbk.</td>
            <td class=" ">1985</td>
            <td class=" ">40 Tahun </td>
            <td class=" last"><a href="#">Belum</a>
            </td>
        </tr>

        <tr class="even pointer">
            <td class="a-center">41</td>
            <td class=" ">Bakauheni - Terbanggi Besar</td>
            <td class=" ">13.9</td>
            <td class=" "> </td>
            <td class=" ">PT Hutama Karya</td>
            <td class=" ">2018</td>
            <td class=" ">40 Tahun </td>
            <td class=" last"><a href="<?=site_url('Data_umum')?>">Sudah</a>
            </td>
        </tr>

        </tbody>
        </table>
        </div>

<?=content_close_1()?>
