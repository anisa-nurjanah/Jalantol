<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Form_teknik extends CI_Controller {

	public function __construct(){
		parent:: __construct();
		// $this->load->model('ModelSpasial','Model');
	}

	public function index()
	{
		$datacontent['title']='Data Teknik';
		// $datacontent['datatable']=$this->Model->get();
		$data['content']=$this->load->view('datateknik/form_teknik',$datacontent,TRUE);
		$data['title']=$datacontent['title'];
		$this->load->view('layouts/html',$data);
	}
}
