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
		$datacontent['url']='dataspasial';
		$datacontent['datatable']=$this->Model->get();
		$data['content']=$this->load->view('dataspasial/tabel_spasial',$datacontent,TRUE);
		$data['title']=$datacontent['title'];
		$this->load->view('layouts/html',$data);
	}
	public function form($parameter='',$id='')
	{
		$datacontent['url']='dataspasial';
		$datacontent['parameter']=$parameter;
		$datacontent['id']=$id;
		$datacontent['title']='Form Data Spasial';
		$data['content']=$this->load->view('dataspasial/form_spasial',$datacontent,TRUE);
		$data['title']=$datacontent['title'];
		$this->load->view('admin/layouts/html',$data);
	}


}
?>