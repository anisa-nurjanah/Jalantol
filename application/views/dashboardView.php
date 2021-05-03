<?=content_open('Dashboard')?>
<?=content_welcome('John Doe')?>


               
          <!-- DASHBOARD CONTENT 1 -->

          <div class="col-md-3 col-sm-3  tile">
            <span>Jalan Tol Beroperasi</span>
            <h2 class="value text-success">64</h2>
            <h7>di Indonesia </h7>
            <span class="sparkline_one" style="height: 160px;">
                  <canvas width="200" height="60" style="display: inline-block; vertical-align: top; width: 94px; height: 30px;"></canvas>
              </span>
          </div>
          <div class="col-md-3 col-sm-3  tile">
            <span>Total Panjang Jalan Tol</span>
            <h2 class="value text-success">1990,91</h2>
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
        
      <?=content_main_1('')?>

      <!-- <p>Add class <code>bulk_action</code> to table for bulk actions options on row select</p> -->
        <!-- DASHBOARD CONTENT 2 (TABEL) -->
        
    <div class="row">
        <div class="col-md-6">
            <h2>Daftar Jalan Tol yang Beroperasi di Indonesia</h2>
        </div>
        <div class="col-md-6">
            <div class="nav navbar-right panel_toolbox">
                  <a href="<?=site_url('Form_new')?>" class="btn btn-info" ><i class="fa fa-plus"></i>Tambah Kartu Leger Jalan Tol</a>                      
          
        </div>
                  </div>
                </div>

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
            <!-- <th class="column-title no-link last"><span class="nobr">Terdaftar di Sistem</span>
            </th>
            <th class="bulk-actions" colspan="7">
            <a class="antoo" style="color:#fff; font-weight:500;">Bulk Actions ( <span class="action-cnt"> </span> ) <i class="fa fa-chevron-down"></i></a>
            </th> -->
        </tr>
        </thead>

        <tbody>
            <?php
            $no=1;
            foreach ($datatable->result() as $row) {
                ?>
                <tr>
                <td class="text-center"><?=$no?></td>
                <td><?=$row->A?></td>
                <td><?=$row->B?></td>
                <td><?=$row->C?></td>
                <td><?=$row->D?></td>
                <td><?=$row->E?></td>
                <td><?=$row->F?></td>
                </tr>
            <?php
            $no++;
            }
            ?>
        </tbody>
        </table>
        </div>

<?=content_close_1()?>

