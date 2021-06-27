<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Main extends CI_Controller
{

	public function index()
	{
		$data['judul'] = "Login Page";
		$this->load->view('login', $data);
	}

	public function dashboard()
	{
		$data['judul'] = "Dashboard";
		$this->load->view('templates/header', $data);
		$this->load->view('templates/navbar');
		$this->load->view('templates/sidebar');
		$this->load->view('admin/dashboard', $data);
		$this->load->view('templates/footer');
	}

	public function logout()
	{
		$params = array('userid', 'name', 'level');
		$this->session->unset_userdata($params);
		$this->session->set_flashdata('flash', 'Berhasil Logout, Terimakasih Sudah Menggunakan layanan kami.');
		redirect('admin');
	}

	public function cekLogin()
	{
		$password = $this->input->post('password');
		$username = $this->input->post('username');

		$this->db->select('*');
		$this->db->from('user');
		$this->db->where('username', $username);
		$get_username = $this->db->get();

		if ($get_username->num_rows() > 0) {
			$row = $get_username->row_array();
			if ($row['password'] == sha1($password)) {
				$params = array(
					'userid' => $row['user_id'],
					'name' => $row['name'],
					'level' => $row['level']
				);
				$this->session->set_userdata($params);
				$data = ['toast' => toast('success', 'Selamat Datang ' . $row['name'] . '!'), 'level' => $row['level']];
			} else {
				$data = ['toast' => toast('error', 'Password anda salah!'), 'level' => null];
			}
		} else {
			$data = ['toast' => toast('error', 'User Tidak Ditemukan!'), 'level' => null];
		}

		echo json_encode($data);
	}
}
