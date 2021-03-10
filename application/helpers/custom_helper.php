<?php 
function template($a=''){
    return base_url('assets/template/gentelella/'.$a);
}
?>

<?php
function content_open($title=''){
    return ' 
    <div class="right_col" role="main">
    <div class="">
      <div class="page-title">
        <div class="title_left">
          <h3>'.$title.'</h3>
        </div>  
        <div class="nav navbar-right panel_toolbox">
          <span class="btn btn-info">Tambah Kartu Leger Jalan Tol</span>
          
        </div>
      </div>
    <div class="clearfix"></div>';
}
?>

<?php
function content_welcome($admin=''){
return ' <div class="row">
<div class="col-md-12 col-sm-12  ">
  <div class="x_panel">
      <h7>Selamat Datang '.$admin.' di Sistem Informasi Geografis Jalan Tol</h7>
  </div>
</div>
</div>';
}
?>

<?php
function content_updated(){
return ' <div class="row">
<div class="col-md-12 col-sm-12  ">
  <div class="x_panel">
      <h7>Data Anda Berhasil diperbarui</h7>
  </div>
</div>
</div>';
}
?>

<?php
function content_deleted(){
return ' <div class="row">
<div class="col-md-12 col-sm-12  ">
  <div class="x_panel">
      <h7>Data Anda Berhasil dihapus</h7>
  </div>
</div>
</div>';
}
?>

<?php
function content_Added(){
return ' <div class="row">
<div class="col-md-12 col-sm-12  ">
  <div class="x_panel">
      <h7>Anda berhasil menambahkan data</h7>
  </div>
</div>
</div>';
}
?>

<?php
function content_main($title=''){
return '
<div class="row">
  <div class="col-md-12 col-sm-12  ">
    <div class="x_panel">
      <div class="x_title">
        <h2>'.$title.'</h2>

        <ul class="nav navbar-right panel_toolbox">
          <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
          </li>
        </ul>

        <div class="clearfix"></div>
      </div>
      <div class="x_content">';
}
?>

<?php
function content_umum($ruas_tol=''){
return '
<div class="row">
	<div class="col-md-12 col-sm-12 ">
		<div class="x_panel">
			<div class="x_title">
			<h2>RUAS '.$ruas_tol.'</h2>
					<ul class="nav navbar-right panel_toolbox">
            <li>
            <select class="form-control">
              <option>BAKAUHENI - TERBANGGI BESAR</option>
            </select>
            </li>
					</ul>
				<div class="clearfix">';
        
}
?>

<?php
function content_close(){
    return '
                </div>
            </div>
        </div>
    </div>
</div>

';
}
?>


<?php
function content_main_1(){
return '
<div class="row">
  <div class="col-md-12 col-sm-12  ">
    <div class="x_panel">
      <div class="x_content">';
}
?>

<?php
function content_close_1(){
    return '
</div>
</div>
</div>
</div>
</div>
</div>';
}
?>
