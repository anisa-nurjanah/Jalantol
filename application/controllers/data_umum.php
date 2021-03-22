<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Data_Umum extends CI_Controller {

	public function _construct(){
		parent::_construct();
		$this->load->model('HotspotModel','Model');
		$this->load->model('ModelSpasial');
	}
	public function index()
	{
		$datacontent['ruas_tol']='BAKAUHENI - TERBANGGI BESAR';
		$datacontent['title']='Data Umum';
		$datacontent['url']='data_umum';
		$data['content']=$this->load->view('data_umum','$datacontent',TRUE);
		$data['ruas_tol']=$datacontent['ruas_tol'];
		$this->load->view('layouts/html',$data);

	}


}
