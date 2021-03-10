<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Form_spasial extends CI_Controller {

	public function __construct(){
		parent:: __construct();
		// $this->load->model('ModelSpasial','Model');
	}

	public function index()
	{
		$datacontent['title']='Data Spasial';
		// $datacontent['datatable']=$this->Model->get();
		$data['content']=$this->load->view('dataspasial/form_spasial',$datacontent,TRUE);
		$data['title']=$datacontent['title'];
		$this->load->view('layouts/html',$data);
	}
}
