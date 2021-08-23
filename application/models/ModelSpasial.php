<?php
defined('BASEPATH') or exit('No direct script access allowed');

class ModelSpasial extends CI_Model
{
	
	function datajalanTol(){
		$data = $this->db->order_by("keterangan_tol", "desc")->get('daftar_tol')->result_array();
		return $data;
	}

	function batasan(){
		
		$this->db->select('nama_atribut_batasan');
		$this->db->distinct();
		$this->db->from('batasan_data');
		$data = $this->db->get();
		
		return $data->result_array();
	}
	function get()
	{
		$data = $this->db->get('m_spasial');
		return $data;
	}

	function get_where($where = null)
	{
		$data = $this->db->get_where('m_spasial', ['jenis_page' => $where]);
		return $data;
	}


	function insert($data = array())
	{
		$this->db->insert('m_spasial', $data);
		$info = '<div class="alert alert-success alert-dismissible">
	            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
	            <h4><i class="icon fa fa-check"></i> Sukses!</h4> Data Sukses Ditambah </div>';
		$this->session->set_flashdata('info', $info);
	}


	function update($data = array(), $where = array())
	{
		foreach ($where as $key => $value) {
			$this->db->where($key, $value);
		}
		$this->db->update('m_spasial', $data);
		$info = '<div class="alert alert-success alert-dismissible">
		                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
		                <h4><i class="icon fa fa-check"></i> Sukses!</h4> Data Sukses diubah </div>';
		$this->session->set_flashdata('info', $info);
	}


	function delete($where = array())
	{
		foreach ($where as $key => $value) {
			$this->db->where($key, $value);
		}
		$this->db->delete('m_spasial');
		$info = '<div class="alert alert-success alert-dismissible">
	            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
	            <h4><i class="icon fa fa-check"></i> Sukses!</h4> Data Sukses dihapus </div>';
		$this->session->set_flashdata('info', $info);
	}

	// public function get_daftartol() {
	// 	$this -> db -> select('nama_jt');
	// 	$result = $this -> db -> get('daftar_tol');
	// 	if ($result -> num_rows() > 0) {
	// 	   return $result->result_array();
	// 	}
	// 	else {
	// 	  return false;
	// 	} 
	// }
}
