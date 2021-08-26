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

    public function requestHelper()
    {
        $url = $this->input->post('url');
        $curl = curl_init();
        curl_setopt_array($curl, array(
          CURLOPT_URL => $url,
          CURLOPT_RETURNTRANSFER => true,
          CURLOPT_ENCODING => '',
          CURLOPT_FOLLOWLOCATION => true,
          CURLOPT_CUSTOMREQUEST => 'GET',
          CURLOPT_HTTPHEADER => array(
            'Authorization: Basic '.AUTH_GEO,
            'Content-Type: application/json'
          ),
        ));

        $response = curl_exec($curl);

        curl_close($curl);
        header('Content-Type: application/json');
        echo $response;
    }
}
