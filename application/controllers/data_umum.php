<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Data_Umum extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	
	public function _construct(){
		parent::_construct();
		$this->load->model('HotspotModel','Model');
		$this->load->model('ModelSpasial');
	}
	 public function index()
	{
		$datacontent['url']='data_umum';
		// $datacontent['ruas_tol']='BAKAUHENI - TERBANGGI BESAR';
		$datacontent['title']='Data Umum';
		// $datacontent['url']='data_umum';
		//$data['content']=$this->load->view('data_umum','$datacontent',TRUE);
		$data['content']=$this->load->view('data_umum/mapView','$datacontent',TRUE);
		$data['js']=$this->load->view('data_umum/js/mapJs','$datacontent',TRUE);
		// $data['ruas_tol']=$datacontent['ruas_tol'];
		$data['title']=$datacontent['title'];
		$this->load->view('layouts/html',$data);

	}


}
