<?php 
function template($a=''){
    return base_url('assets/template/gentelella/'.$a);
}

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

function content_welcome($admin=''){
return ' <div class="row">
<div class="col-md-12 col-sm-12  ">
  <div class="x_panel">
      <h7>Selamat Datang '.$admin.' di Sistem Informasi Geografis Jalan Tol</h7>
  </div>
</div>
</div>';
}

function content_updated(){
return ' <div class="row">
<div class="col-md-12 col-sm-12  ">
  <div class="x_panel">
      <h7>Data Anda Berhasil diperbarui</h7>
  </div>
</div>
</div>';
}

function content_deleted(){
return ' <div class="row">
<div class="col-md-12 col-sm-12  ">
  <div class="x_panel">
      <h7>Data Anda Berhasil dihapus</h7>
  </div>
</div>
</div>';
}

function content_Added(){
return ' <div class="row">
<div class="col-md-12 col-sm-12  ">
  <div class="x_panel">
      <h7>Anda berhasil menambahkan data</h7>
  </div>
</div>
</div>';
}

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

function content_close(){
    return '
                </div>
            </div>
        </div>
    </div>
</div>

';
}

function content_main_1(){
return '
<div class="row">
  <div class="col-md-12 col-sm-12  ">
    <div class="x_panel">
      <div class="x_content">';
}

function content_close_1(){
    return '
</div>
</div>
</div>
</div>
</div>
</div>';
}

function assets($file=''){
  return base_url('assets/'.$file);
}

function upload($name='file',$types="images"){

  if ($types=='images'){
    $allowed_types='gif|jpg|png';
    $config['max_width']            = 1024;
    $config['max_height']           = 768;
  }
  elseif($types='geojson'){
    $allowed_types='geojson';
  }
  
  $CI =& get_instance();
  $config['upload_path']          = './assets/upload/geojson/';
  $config['allowed_types']        = $allowed_types;
  $config['max_size']             = 1000;

  $CI->load->library('upload', $config);

  if ( ! $CI->upload->do_upload($name))
  {
    $response['info']=false;
    $response['massage']=$CI->upload->display_errors();
  }
  else
  {
    $response['info']=true;
    $response['massage']='Sukses di unggah';
    $response['upload_data'] = $CI->upload->data();
  }
  return $response;
}



