<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {

	public function __construct(){
		parent:: __construct();
		$this->load->model('ModelDashboard','Model');
	}

	 public function index()
	{



		$datacontent['title']='Dashboard';
		$datacontent['url']='dashboardView';
		$datacontent['datatable']=$this->Model->get();
		$data['content']=$this->load->view('dashboardView',$datacontent,TRUE);
		$data['title']=$datacontent['title'];
		$this->load->view('layouts/html',$data);

	}

}
?>