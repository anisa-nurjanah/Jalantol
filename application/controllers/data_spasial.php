<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Data_spasial extends CI_Controller {

	public function __construct(){
		parent:: __construct();
		$this->load->model('ModelSpasial','Model');
	}

	public function index()
	{
		$datacontent['title']='Data Spasial';
		$datacontent['url']='data_spasial';
		$datacontent['datatable']=$this->Model->get();
		$data['content']=$this->load->view('dataspasial/tabel_spasial',$datacontent,TRUE);
		$data['title']=$datacontent['title'];
		$this->load->view('layouts/html',$data);
	}
	public function form($parameter='',$id='')
	{
		$datacontent['url']='data_spasial';
		$datacontent['parameter']=$parameter;
		$datacontent['id']=$id;
		$datacontent['title']='Form Data Spasial';
		$data['content']=$this->load->view('dataspasial/form_spasial',$datacontent,TRUE);
		$data['title']=$datacontent['title'];
		$this->load->view('layouts/html',$data);
	}

	public function simpan()
	{
		if($this->input->post()){

			$data=[
				'id_atribut'=>$this->input->post('id_atribut'),
				'nama_atribut'=>$this->input->post('nama_atribut'),
			];

			if($_FILES['geojson_atribut']['name']!=''){
				$upload=upload('geojson_atribut','geojson');
				if($upload['info']==true){
					$data['geojson_atribut']=$upload['upload_data']['file_name'];
				}
				elseif($upload['info']==false){
					$info='<div class="alert alert-danger alert-dismissible">
					<button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
					<h4><i class="icon fa fa-ban"></i> Error!</h4> '.$upload['message'].' </div>';
					$this->session->set_flashdata('info', $info);
					redirect('data_spasial');
					exit();

				}
	
			}

			if($_POST['parameter']=="tambah"){
				$this->Model->insert($data);
			}
			else{
				$this->Model->update($data,['id_atribut'=>$this->input->post('id_atribut')]);
			}
		}
		redirect('data_spasial');
	}
	public function hapus($id=''){
		$this->db->where('id_atribut',$id);
		$get=$this->Model->get()->row();
		$geojson_spasial=$get->geojson_spasial;
		unlink('assets/unggah/geojson/'.$geojson_spasial);
		$this->Model->delete(["id_atribut"=>$id]);
		redirect('data_spasial');
	}


		


	


}
?>