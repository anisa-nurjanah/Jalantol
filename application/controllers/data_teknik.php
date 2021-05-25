<?php
defined('BASEPATH') OR exit('No direct script access allowed');
require_once APPPATH . 'third_party/Spout/Autoloader/autoload.php';

use Box\Spout\Reader\Common\Creator\ReaderEntityFactory;

class Data_teknik extends CI_Controller {


	public function __construct(){
		parent:: __construct();
		$this->load->model('ModelTeknik','Model');
	}

	public function index()
	{
		$datacontent['title']='Data Teknik';
		$datacontent['url']='data_teknik';
		$datacontent['datatable_seksi']=$this->Model->get_segmen_seksi();
		$datacontent['datatable_ident']=$this->Model->get_ident();
		$datacontent['datatable_d1']=$this->Model->get_data1();
		$datacontent['datatable_d2b']=$this->Model->get_data2_bahujalan();
		$datacontent['datatable_d2l']=$this->Model->get_data2_lapis();
		$datacontent['datatable_d2m']=$this->Model->get_data2_median();
		$datacontent['datatable_d3g']=$this->Model->get_data3_gorong();
		$datacontent['datatable_d3p']=$this->Model->get_data3_penahantanah();
		$datacontent['datatable_d3s']=$this->Model->get_data3_saluran();
		$datacontent['datatable_d4']=$this->Model->get_data4();
		$datacontent['datatable_d5b']=$this->Model->get_data5_bangunan();
		$datacontent['datatable_d5pf']=$this->Model->get_data5_publikfacility();
		$datacontent['datatable_dl']=$this->Model->get_datalainnya();
		$datacontent['datatable_lhr']=$this->Model->get_lintasharian();
		$datacontent['datatable_pg']=$this->Model->get_petageometrik();
		$datacontent['datatable_dlj1']=$this->Model->get_datalingkunganjalan1();
		$datacontent['datatable_dlj2']=$this->Model->get_datalingkunganjalan2();
		$data['content']=$this->load->view('datateknik/data_teknik',$datacontent,TRUE);
		$data['title']=$datacontent['title'];
		$data['js']=$this->load->view('datateknik/js/mapJs','$datacontent',TRUE);
		$this->load->view('layouts/html',$data);
	}

	public function form($parameter='',$id='')
	{
		$datacontent['url']='data_teknik';
		$datacontent['parameter']=$parameter;
		$datacontent['id']=$id;
		$datacontent['title']='Form Data Teknik';
		$data['content']=$this->load->view('datateknik/form_teknik',$datacontent,TRUE);
		$data['title']=$datacontent['title'];
		$this->load->view('layouts/html',$data);
	}
	public function uploaddata(){
		$config['upload_path']='./uploads/';
		$config['allowed_types']='xlsx|xls';
		$config['file_name']='Data Teknik';
		$this->load->library('upload',$config);

	
		if($this->upload->do_upload('importdt1')){
			$file = $this->upload->data();
			$reader = ReaderEntityFactory :: createXLSXReader();

			$reader -> open ('uploads/'.$file['file_name']);
			foreach ($reader->getSheetIterator() as $sheet){
				$numRow = 1;
				foreach ($sheet->getRowIterator() as $row){
					if ($numRow > 1){
						$teknik1 = array(
							'Uraian' => $row->getCellAtIndex(1),
							'Luas' => $row->getCellAtIndex(2),
							'Data_Perolehan' => $row->getCellAtIndex(3),
							'Nilai_Perolehan' => $row->getCellAtIndex(4),
						);
					$this->Model->import_data($teknik1);
					}
					$numRow++;
				}
				$reader->close();
				unlink('uploads/'. $file['file_name']);
				$this->session->set_flashdata ('pesan','import data berhasil');
				redirect('data_teknik');
			
			
				// var_dump($teknik1);
				// die;
			}

		}
		else{
			echo "Error:" . $this->upload->display_errors();
		}
	}

}