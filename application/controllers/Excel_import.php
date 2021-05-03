<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Excel_import extends CI_Controller {
	public function _construct(){
		parent::_construct();
		$this->load->model('Excel_import_model','Model');
        $this->load->library('excel');
	}
    public function index (){
        $data['content']=$this->load->view('datateknik/data_teknik',$datacontent,TRUE);
    }
}
?>