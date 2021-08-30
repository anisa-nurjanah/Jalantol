<?php
if ($this->session->userdata('level') == 2) {
} else {
    $this->session->set_flashdata('error', 'Tidak Bisa Akses Harap Login Terlebih Dahulu.!');
    redirect(base_url('main'));
}
?>
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1><?= $judul ?></h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active"><?= $judul ?></li>
                    </ol>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                        <div class ="float-left">
                        <!-- <label class="control-label">Nama Jalan Tol : </label> -->
                                        <!-- <div class="col-md-4 col-sm-4"> -->
                                            <select class="form-control">
                                            <?php
                                                foreach($dataTol as $tol):
                                            ?>    
                                            <?php if ($tol['keterangan_tol'] === 't'): ?>
                                                <option><?= $tol['nama_jt'] ?></option> 												<?php endif; ?>        
                                            <?php
                                            endforeach;
                                            ?>
                                            </select>
                                        <!-- </div> -->
                        </div>
                            <div class="float-right">
                                <a href="javascript:void(0)" data-toggle="modal" data-target="#tambahDataSpasial_ramp" class="btn btn-primary"><i class="fas fa-plus"></i> Tambah Data</a>
                            </div>
                            <br>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body table-responsive">
                            <table class="table table-hover text-nowrap table-striped table-bordered" id="mytabledataspasial_ramp" width="100%" cellspacing="0">
                                <thead class="text-center">
                                    <tr>
                                        <th>No</th>
                                        <th>Kode Atribut</th>
                                        <th>GeoJSON</th>
                                        <th>Nama Spasial</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                </tbody>
                            </table>
                        </div>
                        <!-- /.card-body -->
                    </div>
                    <!-- /.card -->
                </div>
                <!-- /.col -->
            </div>
            <!-- /.row -->
        </div>
        <!-- /.container-fluid -->
    </section>
    <!-- /.content -->
</div>

<!-- Modal Form Tambah Layanan-->
<div class="modal fade" id="tambahDataSpasial_ramp" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-xl" role="document">
        <div class="modal-content">
            <div class="modal-header btn btn-dark ">
                <h5 class="modal-title" id="formModalLabel"><img src="<?= base_url('assets'); ?>/logopemda.png" width="40"><strong> Tambah Data Spasial</strong></h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form id="formaddspasial_ramp">
                <div class="modal-body">
                    <div class="form-group row">
                        <label for="colFormLabel" class="col-sm-2 col-form-label">Nama Jalan Tol</label>
                        <div class="col-sm-10">
                        <select class="form-control">
                            <?php
                                foreach($dataTol as $tol):
                            ?>    
                            <?php if ($tol['keterangan_tol'] === 't'): ?>
                            <option><?= $tol['nama_jt'] ?></option>                                               <?php endif; ?>        
                            <?php
                                endforeach;
                            ?>
                            </select>

                            
                        </div>
                    </div>
                    <?php
                    $this->db->select('kode_atribut');
                    $this->db->from('batasan_data');
                    $this->db->group_by('kode_atribut');
                    $this->db->order_by('kode_atribut', 'asc');
                    $get = $this->db->get()->result_array();
                    ?>
                    <div class="form-group row">
                        <label for="colFormLabel" class="col-sm-2 col-form-label">Jenis Atribut</label>
                        <div class="col-sm-10">
                            <select name="nama_atribut" class="form-control" required>
                                <option value="">Pilih Atribut</option>
                                <?php foreach ($get as $g) { ?>
                                    <option value="<?= $g['kode_atribut'] ?>"><?= $g['kode_atribut'] . '. ' . strtoupper($g['kode_atribut']) ?></option>
                                    <?php } ?>
                                <?php
                                    foreach($batasan as $batas):
                                ?>    
                                    <option><?= $batas['nama_atribut_batasan'] ?></option>        
                                <?php
                                    endforeach;
                                ?>
                            </select>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="colFormLabel" class="col-sm-2 col-form-label">File GeoJSON</label>
                        <div class="col-sm-10">
                            <input type="file" name="geojson_atribut" class="form-control" required>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="colFormLabel" class="col-sm-2 col-form-label">Nama Spasial</label>
                        <div class="col-sm-10">
                            <input type="text" name="nama_spasial" class="form-control" required>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Save</button>
                </div>
            </form>
        </div>
    </div>
</div>

<div class="modal fade" id="editDataSpasial_ramp" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-xl" role="document">
        <div class="modal-content">
            <div class="modal-header btn btn-dark ">
                <h5 class="modal-title" id="formModalLabel"><img src="<?= base_url('assets'); ?>/logopemda.png" width="40"><strong> Edit Data Spasial</strong></h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form id="formeditspasial_ramp">
                <div class="modal-body">
                    <div class="form-group row">
                        <label for="colFormLabel" class="col-sm-2 col-form-label">Nama Jalan Tol</label>
                        <div class="col-sm-10">
                            <select name="nama_tol" class="form-control" required>
                                <option value="BAKAUHENI - TERBANGGI BESAR">BAKAUHENI - TERBANGGI BESAR</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="colFormLabel" class="col-sm-2 col-form-label">Jenis Atribut</label>
                        <div class="col-sm-10">
                            <select name="nama_atribut" class="form-control" id="nama_atribut" required>
                                <option value="">Pilih Atribut</option>
                                <?php foreach ($get as $g) { ?>
                                    <option value="<?= $g['kode_atribut'] ?>"><?= $g['kode_atribut'] . '. ' . strtoupper($g['nama_atribut_batasan']) ?></option>
                                <?php } ?>
                            </select>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="colFormLabel" class="col-sm-2 col-form-label">File GeoJSON</label>
                        <div class="col-sm-10">
                            <input type="hidden" name="id_atribut" id="id_atribut" class="form-control" required>
                            <input type="file" name="geojson_atribut" id="geojson_atribut" class="form-control">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="colFormLabel" class="col-sm-2 col-form-label">Nama Spasial</label>
                        <div class="col-sm-10">
                            <input type="text" name="nama_spasial" id="nama_spasial" class="form-control" required>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Save</button>
                </div>
            </form>
        </div>
    </div>
</div>