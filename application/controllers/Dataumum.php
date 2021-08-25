<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Dataumum extends CI_Controller
{
    public function __construct() {
		parent::__construct();

		$this->load->model('ModelSpasial');
 }
    public function index()
    {
        $data['judul'] = "Data Umum";
        $data['dataTol'] = $this->ModelSpasial->datajalanTol();
        $this->load->view('templates/header', $data);
        $this->load->view('templates/navbar');
        $this->load->view('templates/sidebar');
        $this->load->view('admin/data_umum', $data);
        $this->load->view('templates/footer');
    }
}
