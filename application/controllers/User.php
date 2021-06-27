<?php
defined('BASEPATH') or exit('No direct script access allowed');

class User extends CI_Controller
{
    public function index()
    {
        $data['judul'] = "Data User";
        $this->load->view('templates/header', $data);
        $this->load->view('templates/navbar');
        $this->load->view('templates/sidebar');
        $this->load->view('superadmin/user', $data);
        $this->load->view('templates/footer');
    }

    public function profile()
    {
        $this->db->select("*");
        $this->db->from('user');
        $this->db->where(["user.user_id" => $this->session->userdata("userid")]);
        $data['user'] = $this->db->get()->row_array();
        $data['judul'] = "Edit Profile User";

        $this->load->view('templates/header', $data);
        $this->load->view('templates/navbar');
        $this->load->view('templates/sidebar');
        $this->load->view('edit_profile', $data);
        $this->load->view('templates/footer');
    }

    public function edit_user_mine()
    {
        $upload_image = $_FILES['userfile']['name'];

        $user_id = $this->input->post('user_id');
        $username = $this->input->post('username');
        $password = $this->input->post('password');
        $repassword = $this->input->post('ulangi_password');

        $this->db->select('*');
        $this->db->from('user');
        $this->db->where('user_id', $this->session->userdata('userid'));
        $user = $this->db->get()->row_array();

        if ($upload_image) { // variabel true
            $config['allowed_types'] = 'jpg|jpeg|png';
            // $config['max_size']     = '8192';
            $config['upload_path'] = './assets/user/';
            $this->load->library('upload', $config);

            if ($this->upload->do_upload('userfile')) {
                $new_image = $this->upload->data('file_name');
                if ($password != null && $password == $repassword) {

                    $this->db->set("name", $this->input->post('name'));
                    $this->db->set('username', $username);
                    $this->db->set('password', sha1($this->input->post('password')));
                    $this->db->set('image', $new_image);
                } else {
                    $this->db->set("name", $this->input->post('name'));
                    $this->db->set('username', $username);
                    $this->db->set('image', $new_image);
                }
            } else {
                $this->session->set_flashdata('error', 'Foto Tidak Berhasil Di Upload');
                redirect(base_url('dashboard/profile'));
            }
        } else {
            if ($password != null && $password == $repassword) {
                $this->db->set("name", $this->input->post('name'));
                $this->db->set('username', $username);
                $this->db->set('password', sha1($this->input->post('password')));
            } else {
                $this->db->set("name", $this->input->post('name'));
                $this->db->set('username', $username);
            }
        }

        $this->db->where(["user_id" => $user_id]);
        $this->db->update("user");
        $this->session->set_flashdata('flash', 'Berhasil Ubah Profile');

        redirect(base_url('user/profile'));
    }

    public function get_user()
    {
        $this->datatables->select('user_id, name, username, level');
        $this->datatables->from('user');
        $this->datatables->where(['level!=' => 1]);
        $this->datatables->add_column(
            'aksi',
            '<span data-toggle="tooltip" data-placement="top" title="Edit user"><a href="javascript:void(0);" class="edit_record btn btn-sm btn-primary" data-id="$1" data-backdrop="static" data-keyboard="false">
                <i class="fas fa-edit"></i> </a> </span>
            <span data-toggle="tooltip" data-placement="top" title="Hapus user"><a href="javascript:void(0);" class="delete_record btn btn-sm btn-danger" data-id="$1" data-backdrop="static" data-keyboard="false">
                <i class="fas fa-trash"></i> </a> </span>',
            'user_id'
        );
        return print_r($this->datatables->generate());
    }

    public function tambah_user()
    {
        if ($this->input->post('password') != $this->input->post('ulangi_password')) {
            $data = toast('error', 'Password tidak sama, harap periksa kembali!');
            echo json_encode($data);
            die;
        }

        $data = [
            'name' => $this->input->post('nama_user'),
            'username' => $this->input->post('username'),
            'password' => sha1($this->input->post('password')),
            'level' => $this->input->post('level')
        ];

        $this->db->insert('user', $data);

        if ($this->db->affected_rows() > 0) {
            $data = toast('success', 'Berhasil Tambah Data User!');
        } else {
            $data = toast('error', 'Gagal Tambah Data User, Tidak Ada Perubahan!');
        }
        echo json_encode($data);
    }

    public function getuserbyid()
    {
        $user_id = $this->input->post('user_id');

        $data = $this->db->get_where('user', ['user_id' => $user_id])->row_array();

        echo json_encode($data);
    }

    public function edit_user()
    {
        if ($this->input->post('password')) {
            if ($this->input->post('password') != $this->input->post('ulangi_password')) {
                $data = toast('error', 'Password tidak sama, harap periksa kembali!');
                echo json_encode($data);
                die;
            } else {
                $password = sha1($this->input->post('password'));
            }
        } else {
            $user_id = $this->input->post('user_id');
            $user = $this->db->get_where('user', ['user_id' => $user_id])->row_array();

            $password = $user['password'];
        }

        $data = [
            'name' => $this->input->post('nama_user'),
            'username' => $this->input->post('username'),
            'password' => $password,
            'level' => $this->input->post('level')
        ];

        $this->db->update('user', $data, ['user_id' => $this->input->post('user_id')]);

        if ($this->db->affected_rows() > 0) {
            $data = toast('success', 'Berhasil Edit Data user!');
        } else {
            $data = toast('error', 'Gagal Edit Data user, Tidak Ada Perubahan!');
        }
        echo json_encode($data);
    }

    public function delete_user()
    {
        $user_id = $this->input->post('user_id');

        $this->db->delete('user', ['user_id' => $user_id]);

        if ($this->db->affected_rows() > 0) {
            $data = toast('success', 'Berhasil Hapus Data user!');
        } else {
            $data = toast('error', 'Gagal Hapus Data user, Tidak Ada Perubahan!');
        }
        echo json_encode($data);
    }
}
