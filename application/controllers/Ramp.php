<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Ramp extends CI_Controller
{
    public function dataumum()
    {
        $data['judul'] = "Data Umum";
        $this->load->view('templates/header', $data);
        $this->load->view('templates/navbar');
        $this->load->view('templates/sidebar');
        $this->load->view('admin/ramp_data_umum', $data);
        $this->load->view('templates/footer');
    }

    public function dataspasial()
    {
        $data['judul'] = "Data Spasial";
        $this->load->view('templates/header', $data);
        $this->load->view('templates/navbar');
        $this->load->view('templates/sidebar');
        $this->load->view('admin/dataspasial_ramp', $data);
        $this->load->view('templates/footer');
    }

    public function datateknik()
    {
        $data['judul'] = "Formulir Data Teknik";
        $data['url'] = 'data_teknik';
        $this->load->view('templates/header', $data);
        $this->load->view('templates/navbar');
        $this->load->view('templates/sidebar');
        $this->load->view('admin/data_teknik_ramp', $data);
        $this->load->view('templates/footer');
    }

    public function view_map()
    {
        $id = $this->input->post('id');
        $data['where'] = $id;
        $this->load->view('admin/map_ramp', $data);
    }

    public function get_dataspasial()
    {
        $this->datatables->select('id_atribut, nama_atribut, batasan_data.nama_atribut_batasan, geojson_atribut, nama_spasial, jenis_page');
        $this->datatables->from('m_spasial');
        $this->datatables->join('batasan_data', 'batasan_data.kode_atribut=m_spasial.nama_atribut');
        $this->db->where(['jenis_page' => "ramp"]);
        $this->datatables->group_by('geojson_atribut');
        $this->datatables->add_column(
            'aksi',
            '<span data-toggle="tooltip" data-placement="top" title="Edit Data Spasial"><a href="javascript:void(0);" class="edit_record btn btn-sm btn-primary" data-id="$1" data-backdrop="static" data-keyboard="false">
            <i class="fas fa-edit"></i> </a> </span>
            <span data-toggle="tooltip" data-placement="top" title="Hapus Data Spasial"><a href="javascript:void(0);" class="delete_record btn btn-sm btn-danger" data-id="$1" data-backdrop="static" data-keyboard="false">
            <i class="fas fa-trash"></i> </a>',
            'id_atribut'
        );
        return print_r($this->datatables->generate());
    }

    public function tambah_dataspasial()
    {
        $upload_geojson = $_FILES['geojson_atribut']['name'];
        if ($upload_geojson) {
            $config['upload_path'] = './assets/geojson/';
            $config['allowed_types'] = '*';
            $config['max_size'] = 1000;
            $this->load->library('upload', $config);

            if ($this->upload->do_upload('geojson_atribut')) {

                $new_geojson = $this->upload->data('file_name'); // file name yaitu nama bawaan gambar

                $data = [
                    'nama_atribut' => $this->input->post('nama_atribut'),
                    'geojson_atribut' => $new_geojson,
                    'nama_spasial' => $this->input->post('nama_spasial'),
                    'jenis_page' => "ramp"
                ];

                $this->db->insert('m_spasial', $data);

                if ($this->db->affected_rows() > 0) {
                    $data = toast('success', 'Berhasil Tambah Data Spasial!');
                } else {
                    $data = toast('error', 'Gagal Tambah Data Spasial, Tidak Ada Perubahan!');
                }
            } else {
                $data = toast('error', 'Gagal Upload File!');
            }
        } else {
            $data = toast('error', 'Gagal Upload File! Harap masukkan file !');
        }

        echo json_encode($data);
    }

    public function getspasialbyid()
    {
        $id_atribut = $this->input->post('id_atribut');

        $data = $this->db->get_where('m_spasial', ['id_atribut' => $id_atribut])->row_array();

        echo json_encode($data);
    }

    public function edit_spasial()
    {
        $id_atribut = $this->input->post('id_atribut');
        $get = $this->db->get_where('m_spasial', ['id_atribut' => $id_atribut])->row_array();

        $upload_geojson = $_FILES['geojson_atribut']['name'];
        if ($upload_geojson) {
            $config['upload_path'] = './assets/geojson/';
            $config['allowed_types'] = '*';
            $config['max_size'] = 1000;
            $this->load->library('upload', $config);

            if ($this->upload->do_upload('geojson_atribut')) {

                $new_geojson = $this->upload->data('file_name'); // file name yaitu nama bawaan gambar

                unlink(FCPATH . 'assets/geojson/' . $get['geojson_atribut']);

                $data = [
                    'nama_atribut' => $this->input->post('nama_atribut'),
                    'geojson_atribut' => $new_geojson,
                    'nama_spasial' => $this->input->post('nama_spasial'),
                    'jenis_page' => "ramp",
                ];

                $this->db->update('m_spasial', $data, ['id_atribut' => $id_atribut]);

                if ($this->db->affected_rows() > 0) {
                    $data = toast('success', 'Berhasil Edit Data Spasial!');
                } else {
                    $data = toast('error', 'Gagal Edit Data Spasial, Tidak Ada Perubahan!');
                }
            } else {
                $data = toast('error', 'Gagal Upload File!');
            }
        } else {
            $data = [
                'nama_atribut' => $this->input->post('nama_atribut'),
                'nama_spasial' => $this->input->post('nama_spasial'),
                'jenis_page' => "ramp"
            ];

            $this->db->update('m_spasial', $data, ['id_atribut' => $id_atribut]);

            if ($this->db->affected_rows() > 0) {
                $data = toast('success', 'Berhasil Edit Data Spasial!');
            } else {
                $data = toast('error', 'Gagal Edit Data Spasial, Tidak Ada Perubahan!');
            }
        }

        echo json_encode($data);
    }

    public function delete_spasial()
    {
        $id_atribut = $this->input->post('id_atribut');
        $get = $this->db->get_where('m_spasial', ['id_atribut' => $id_atribut])->row_array();
        unlink(FCPATH . 'assets/geojson/' . $get['geojson_atribut']);

        $this->db->delete('m_spasial', ['id_atribut' => $id_atribut]);

        if ($this->db->affected_rows() > 0) {
            $data = toast('success', 'Berhasil Hapus Data Spasial!');
        } else {
            $data = toast('error', 'Gagal Hapus Data Spasial, Tidak Ada Perubahan!');
        }
        echo json_encode($data);
    }

    public function Form_new()
    {
        $data['judul'] = "Formulir Data Teknik";
        $this->load->view('templates/header', $data);
        $this->load->view('templates/navbar');
        $this->load->view('templates/sidebar');
        $this->load->view('admin/form_data_teknik_ramp', $data);
        $this->load->view('templates/footer');
    }

    public function addidentifikasi()
    {
        $get = $this->db->get_where('identifikasi', ['ruas_km' => $this->input->post('ruas_km')])->num_rows();
        if ($get > 0) {
            $data = toast('error', 'Maaf, Ruas KM sudah terdaftar.!');
            echo json_encode($data);
            die;
        }
        $data = [
            'ruas_km' => $this->input->post('ruas_km'),
            'ruas' => $this->input->post('ruas'),
            'seksi' => $this->input->post('seksi_ruas'),
            'sta_awal' => $this->input->post('sta_awal'),
            'sta_akhir' => $this->input->post('sta_akhir'),
            'x_awal' => $this->input->post('x_awal'),
            'y_awal' => $this->input->post('y_awal'),
            'z_awal' => $this->input->post('z_awal'),
            'deskripsi_awal' => $this->input->post('deskripsi_awal'),
            'x_akhir' => $this->input->post('x_akhir'),
            'y_akhir' => $this->input->post('y_akhir'),
            'z_akhir' => $this->input->post('z_akhir'),
            'deskripsi_akhir' => $this->input->post('deskripsi_akhir'),
            'tahun' => $this->input->post('tahun'),
            'provinsi' => $this->input->post('provinsi'),
            'kabupaten' => $this->input->post('kabupaten'),
            'kecamatan' => $this->input->post('kecamatan'),
            'desa' => $this->input->post('desa'),
            'jenis_page' => "ramp"
        ];

        $this->db->insert('identifikasi', $data);
        $data = toast('success', 'Selamat data berhasil tersimpan.!');
        echo json_encode($data);
    }

    public function get_identifikasi()
    {
        $ruas_km = $this->input->post('ruas_km');
        $this->datatables->select('id_identifikasi, ruas_km, ruas, seksi, sta_awal, sta_akhir, x_awal, y_awal, z_awal, deskripsi_awal, x_akhir, y_akhir, z_akhir, deskripsi_akhir, tahun, provinsi, kabupaten, kecamatan, desa, created_at_ident, jenis_page');
        $this->datatables->from('identifikasi');
        $this->db->where(['jenis_page' => "ramp"]);
        if ($ruas_km != "") {
            $this->db->where(['ruas_km' => $ruas_km]);
        }
        $this->datatables->add_column(
            'aksi',
            '<span data-toggle="tooltip" data-placement="top" title="Edit Mahasiswa"><a href="javascript:void(0);" class="edit_record btn btn-sm btn-primary mt-2" data-id="$1" data-backdrop="static" data-keyboard="false">
                <i class="fas fa-edit"></i> Edit </a> </span>
            <span data-toggle="tooltip" data-placement="top" title="Hapus Mahasiswa"><a href="javascript:void(0);" class="delete_record btn btn-sm btn-danger mt-2" data-id="$1" data-backdrop="static" data-keyboard="false">
                <i class="fas fa-trash"></i> Delete </a> </span>',
            'id_identifikasi'
        );
        return print_r($this->datatables->generate());
    }

    public function get_datateknik1()
    {
        $ruas_km = $this->input->post('ruas_km');
        $this->datatables->select('id_data_teknik_1, ruas_km, luas_lr, data_lr, nilai_lr, luas_pj, data_pj, nilai_pj, created_at_1, jenis_page');
        $this->datatables->from('data_teknik_1');
        $this->db->where(['jenis_page' => "ramp"]);
        if ($ruas_km != "") {
            $this->db->where(['ruas_km' => $ruas_km]);
        }
        $this->datatables->add_column(
            'aksi',
            '<span data-toggle="tooltip" data-placement="top" title="Edit Mahasiswa"><a href="javascript:void(0);" class="edit_record btn btn-sm btn-primary mt-2" data-id="$1" data-backdrop="static" data-keyboard="false">
                <i class="fas fa-edit"></i> Edit </a> </span>
            <span data-toggle="tooltip" data-placement="top" title="Hapus Mahasiswa"><a href="javascript:void(0);" class="delete_record btn btn-sm btn-danger mt-2" data-id="$1" data-backdrop="static" data-keyboard="false">
                <i class="fas fa-trash"></i> Delete </a> </span>',
            'id_data_teknik_1'
        );
        return print_r($this->datatables->generate());
    }

    public function get_datateknik2()
    {
        $ruas_km = $this->input->post('ruas_km');
        $this->datatables->select('id_data_teknik_2, ruas_km, lebar_lajur_1_ki, tebal_lajur_1_ki, jenis_lajur_1_ki, iri_lajur_1_ki, lebar_lajur_2_ki, tebal_lajur_2_ki, jenis_lajur_2_ki, iri_lajur_2_ki, lebar_lajur_2_ka, tebal_lajur_2_ka, jenis_lajur_2_ka, iri_lajur_2_ka, lebar_lajur_1_ka, tebal_lajur_1_ka, jenis_lajur_1_ka, iri_lajur_1_ka, lebar_lpa, tebal_lpa, jenis_lpa, lebar_lpb, tebal_lpb, jenis_lpb, created_at_2, jenis_page');
        $this->datatables->from('data_teknik_2');
        $this->db->where(['jenis_page' => "ramp"]);
        if ($ruas_km != "") {
            $this->db->where(['ruas_km' => $ruas_km]);
        }
        $this->datatables->add_column(
            'aksi',
            '<span data-toggle="tooltip" data-placement="top" title="Edit Mahasiswa"><a href="javascript:void(0);" class="edit_record btn btn-sm btn-primary mt-2" data-id="$1" data-backdrop="static" data-keyboard="false">
                <i class="fas fa-edit"></i> Edit </a> </span>
            <span data-toggle="tooltip" data-placement="top" title="Hapus Mahasiswa"><a href="javascript:void(0);" class="delete_record btn btn-sm btn-danger mt-2" data-id="$1" data-backdrop="static" data-keyboard="false">
                <i class="fas fa-trash"></i> Delete </a> </span>',
            'id_data_teknik_2'
        );
        return print_r($this->datatables->generate());
    }

    public function get_datateknik2median()
    {
        $ruas_km = $this->input->post('ruas_km');
        $this->datatables->select('id_data_teknik_2_median, ruas_km, tebal_median, lebar_median, jenis_median, kondisi_median, lebar_luar_ki, lebar_dalam_ki, lebar_luar_ka, lebar_dalam_ka, tebal_luar_ki, tebal_dalam_ki, tebal_luar_ka, tebal_dalam_ka,jenis_luar_ki, jenis_dalam_ki, jenis_luar_ka, jenis_dalam_ka,posisi_luar_ki, posisi_dalam_ki, posisi_luar_ka, posisi_dalam_ka, kondisi_luar_ki, kondisi_dalam_ki, kondisi_luar_ka, kondisi_dalam_ka, created_at_median, jenis_page');
        $this->datatables->from('data_teknik_2_median');
        $this->db->where(['jenis_page' => "ramp"]);
        if ($ruas_km != "") {
            $this->db->where(['ruas_km' => $ruas_km]);
        }
        $this->datatables->add_column(
            'aksi',
            '<span data-toggle="tooltip" data-placement="top" title="Edit Mahasiswa"><a href="javascript:void(0);" class="edit_record btn btn-sm btn-primary mt-2" data-id="$1" data-backdrop="static" data-keyboard="false">
                <i class="fas fa-edit"></i> Edit </a> </span>
            <span data-toggle="tooltip" data-placement="top" title="Hapus Mahasiswa"><a href="javascript:void(0);" class="delete_record btn btn-sm btn-danger mt-2" data-id="$1" data-backdrop="static" data-keyboard="false">
                <i class="fas fa-trash"></i> Delete </a> </span>',
            'id_data_teknik_2_median'
        );
        return print_r($this->datatables->generate());
    }

    public function get_datateknik3()
    {
        $ruas_km = $this->input->post('ruas_km');
        $this->datatables->select('id_data_teknik_3, ruas_km,gorong_jenis_material, gorong_ukuran_panjang, gorong_kondisi, saluran_jenis_material, saluran_ukuran_panjang, saluran_kondisi, manhole_jenis_material, manhole_ukuran_panjang, manhole_kondisi, created_at_3, jenis_page');
        $this->datatables->from('data_teknik_3');
        $this->db->where(['jenis_page' => "ramp"]);
        if ($ruas_km != "") {
            $this->db->where(['ruas_km' => $ruas_km]);
        }
        $this->datatables->add_column(
            'aksi',
            '<span data-toggle="tooltip" data-placement="top" title="Edit Mahasiswa"><a href="javascript:void(0);" class="edit_record btn btn-sm btn-primary mt-2" data-id="$1" data-backdrop="static" data-keyboard="false">
                <i class="fas fa-edit"></i> Edit </a> </span>
            <span data-toggle="tooltip" data-placement="top" title="Hapus Mahasiswa"><a href="javascript:void(0);" class="delete_record btn btn-sm btn-danger mt-2" data-id="$1" data-backdrop="static" data-keyboard="false">
                <i class="fas fa-trash"></i> Delete </a> </span>',
            'id_data_teknik_3'
        );
        return print_r($this->datatables->generate());
    }

    public function get_datateknik4()
    {
        $ruas_km = $this->input->post('ruas_km');
        $this->datatables->select('id_data_teknik_4, ruas_km, uraian, ki, mid, ka, created_at_4, jenis_page');
        $this->datatables->from('data_teknik_4');
        $this->db->where(['jenis_page' => "ramp"]);
        if ($ruas_km != "") {
            $this->db->where(['ruas_km' => $ruas_km]);
        }
        $this->datatables->add_column(
            'aksi',
            '<span data-toggle="tooltip" data-placement="top" title="Edit Mahasiswa"><a href="javascript:void(0);" class="edit_record btn btn-sm btn-primary mt-2" data-id="$1" data-backdrop="static" data-keyboard="false">
                <i class="fas fa-edit"></i> Edit </a> </span>
            <span data-toggle="tooltip" data-placement="top" title="Hapus Mahasiswa"><a href="javascript:void(0);" class="delete_record btn btn-sm btn-danger mt-2" data-id="$1" data-backdrop="static" data-keyboard="false">
                <i class="fas fa-trash"></i> Delete </a> </span>',
            'id_data_teknik_4'
        );
        return print_r($this->datatables->generate());
    }

    public function get_datateknik5()
    {
        $ruas_km = $this->input->post('ruas_km');
        $this->datatables->select('id_data_teknik_5, ruas_km, jenis_utilitas_prasarana, ki_prasarana, mid_prasarana, ka_prasarana, jenis_utilitas_sarana, ki_sarana, mid_sarana, ka_sarana, created_at_5, jenis_page');
        $this->datatables->from('data_teknik_5');
        $this->db->where(['jenis_page' => "ramp"]);
        if ($ruas_km != "") {
            $this->db->where(['ruas_km' => $ruas_km]);
        }
        $this->datatables->add_column(
            'aksi',
            '<span data-toggle="tooltip" data-placement="top" title="Edit Mahasiswa"><a href="javascript:void(0);" class="edit_record btn btn-sm btn-primary mt-2" data-id="$1" data-backdrop="static" data-keyboard="false">
                <i class="fas fa-edit"></i> Edit </a> </span>
            <span data-toggle="tooltip" data-placement="top" title="Hapus Mahasiswa"><a href="javascript:void(0);" class="delete_record btn btn-sm btn-danger mt-2" data-id="$1" data-backdrop="static" data-keyboard="false">
                <i class="fas fa-trash"></i> Delete </a> </span>',
            'id_data_teknik_5'
        );
        return print_r($this->datatables->generate());
    }

    public function get_datalainnya()
    {
        $ruas_km = $this->input->post('ruas_km');
        $this->datatables->select('id_data_lainnya, ruas_km, uraian, tanggal_pemanfaatan, nilai, created_at_lainnya, jenis_page');
        $this->datatables->from('data_lainnya');
        $this->db->where(['jenis_page' => "ramp"]);
        if ($ruas_km != "") {
            $this->db->where(['ruas_km' => $ruas_km]);
        }
        $this->datatables->add_column(
            'aksi',
            '<span data-toggle="tooltip" data-placement="top" title="Edit Mahasiswa"><a href="javascript:void(0);" class="edit_record btn btn-sm btn-primary mt-2" data-id="$1" data-backdrop="static" data-keyboard="false">
                <i class="fas fa-edit"></i> Edit </a> </span>
            <span data-toggle="tooltip" data-placement="top" title="Hapus Mahasiswa"><a href="javascript:void(0);" class="delete_record btn btn-sm btn-danger mt-2" data-id="$1" data-backdrop="static" data-keyboard="false">
                <i class="fas fa-trash"></i> Delete </a> </span>',
            'id_data_lainnya'
        );
        return print_r($this->datatables->generate());
    }

    public function get_datalintasan()
    {
        $ruas_km = $this->input->post('ruas_km');
        $this->datatables->select('id_lhr, ruas_km, lhr_ki_golongan_1, tarif_ki_golongan_1, lhr_ka_golongan_1, tarif_ka_golongan_1, lhr_ki_golongan_2, tarif_ki_golongan_2, lhr_ka_golongan_2, tarif_ka_golongan_2, lhr_ki_golongan_3, tarif_ki_golongan_3, lhr_ka_golongan_3, tarif_ka_golongan_3, lhr_ki_golongan_4, tarif_ki_golongan_4, lhr_ka_golongan_4, tarif_ka_golongan_4, lhr_ki_golongan_5, tarif_ki_golongan_5, lhr_ka_golongan_5, tarif_ka_golongan_5, lhr_ki_golongan_6, tarif_ki_golongan_6, lhr_ka_golongan_6, tarif_ka_golongan_6, created_at_lhr, jenis_page');
        $this->datatables->from('lhr');
        $this->db->where(['jenis_page' => "ramp"]);
        if ($ruas_km != "") {
            $this->db->where(['ruas_km' => $ruas_km]);
        }
        $this->datatables->add_column(
            'aksi',
            '<span data-toggle="tooltip" data-placement="top" title="Edit Mahasiswa"><a href="javascript:void(0);" class="edit_record btn btn-sm btn-primary mt-2" data-id="$1" data-backdrop="static" data-keyboard="false">
                <i class="fas fa-edit"></i> Edit </a> </span>
            <span data-toggle="tooltip" data-placement="top" title="Hapus Mahasiswa"><a href="javascript:void(0);" class="delete_record btn btn-sm btn-danger mt-2" data-id="$1" data-backdrop="static" data-keyboard="false">
                <i class="fas fa-trash"></i> Delete </a> </span>',
            'id_lhr'
        );
        return print_r($this->datatables->generate());
    }

    public function get_datageometrik()
    {
        $ruas_km = $this->input->post('ruas_km');
        $this->datatables->select('id_geometrik, ruas_km, lebar_rumija, gradien_kiri, gradien_kanan, cross_fall_kiri, cross_fall_kanan, superelevasi, radius, created_at_geometrik, jenis_page');
        $this->datatables->from('geometrik');
        $this->db->where(['jenis_page' => "ramp"]);
        if ($ruas_km != "") {
            $this->db->where(['ruas_km' => $ruas_km]);
        }
        $this->datatables->add_column(
            'aksi',
            '<span data-toggle="tooltip" data-placement="top" title="Edit Mahasiswa"><a href="javascript:void(0);" class="edit_record btn btn-sm btn-primary mt-2" data-id="$1" data-backdrop="static" data-keyboard="false">
                <i class="fas fa-edit"></i> Edit </a> </span>
            <span data-toggle="tooltip" data-placement="top" title="Hapus Mahasiswa"><a href="javascript:void(0);" class="delete_record btn btn-sm btn-danger mt-2" data-id="$1" data-backdrop="static" data-keyboard="false">
                <i class="fas fa-trash"></i> Delete </a> </span>',
            'id_geometrik'
        );
        return print_r($this->datatables->generate());
    }

    public function get_datalingkungan()
    {
        $ruas_km = $this->input->post('ruas_km');
        $this->datatables->select('id_data_lingkungan_jalan, ruas_km, terrain_kiri, terrain_kanan, tata_guna_lahan_kiri, tata_guna_lahan_kanan, underpass_km, underpass_x, underpass_y, overpass_km, overpass_x, overpass_y, created_at_lingkungan, jenis_page');
        $this->datatables->from('data_lingkungan_jalan');
        $this->db->where(['jenis_page' => "ramp"]);
        if ($ruas_km != "") {
            $this->db->where(['ruas_km' => $ruas_km]);
        }
        $this->datatables->add_column(
            'aksi',
            '<span data-toggle="tooltip" data-placement="top" title="Edit Mahasiswa"><a href="javascript:void(0);" class="edit_record btn btn-sm btn-primary mt-2" data-id="$1" data-backdrop="static" data-keyboard="false">
                <i class="fas fa-edit"></i> Edit </a> </span>
            <span data-toggle="tooltip" data-placement="top" title="Hapus Mahasiswa"><a href="javascript:void(0);" class="delete_record btn btn-sm btn-danger mt-2" data-id="$1" data-backdrop="static" data-keyboard="false">
                <i class="fas fa-trash"></i> Delete </a> </span>',
            'id_data_lingkungan_jalan'
        );
        return print_r($this->datatables->generate());
    }

    public function upload_excel()
    {
        include APPPATH . 'third_party/PHPExcel/PHPExcel.php';

        $config['upload_path']        = './assets/excel/';
        $config['allowed_types'] = 'xlsx|xls';
        $config['max_size'] = '10000';
        $config['encrypt_name'] = true;

        $this->load->library('upload', $config);

        if (!$this->upload->do_upload('file')) {

            //upload gagal
            $this->session->set_flashdata('error', 'Proses Import Excel gagal!');
            //redirect halaman
            redirect('Form_new_ramp');
        } else {
            $data_upload = $this->upload->data();

            $file = $this->upload->data('full_path');

            $excelreader     = new PHPExcel_Reader_Excel2007();
            $loadexcel         = $excelreader->load($file); // Load file yang telah diupload ke folder excel
            // $sheet             = $loadexcel->getActiveSheet()->toArray();
            $sheetCount = $loadexcel->getSheetCount();

            for ($i = 0; $i < $sheetCount; $i++) {
                if ($i == 0) {
                    $l = 1;
                } else if ($i == 1) {
                    $l = 2;
                } else if ($i == 2) {
                    $l = 3;
                } else if ($i == 3) {
                    $l = 2;
                } else if ($i == 4) {
                    $l = 2;
                } else if ($i == 5) {
                    $l = 1;
                } else if ($i == 6) {
                    $l = 2;
                } else if ($i == 7) {
                    $l = 1;
                } else if ($i == 8) {
                    $l = 2;
                } else if ($i == 9) {
                    $l = 1;
                } else if ($i == 10) {
                    $l = 2;
                }
                $sheet = $loadexcel->getSheet($i)->toArray();
                for ($j = $l; $j < count($sheet); $j++) {
                    if ($i == 0) {
                        if ($sheet[$j][0] != null) {
                            $data = [
                                'ruas_km' => $sheet[$j][0],
                                'ruas' => $sheet[$j][1],
                                'seksi' => $sheet[$j][2],
                                'sta_awal' => $sheet[$j][3],
                                'sta_akhir' => $sheet[$j][4],
                                'x_awal' => $sheet[$j][5],
                                'y_awal' => $sheet[$j][6],
                                'z_awal' => $sheet[$j][7],
                                'deskripsi_awal' => $sheet[$j][8],
                                'x_akhir' => $sheet[$j][9],
                                'y_akhir' => $sheet[$j][10],
                                'z_akhir' => $sheet[$j][11],
                                'deskripsi_akhir' => $sheet[$j][12],
                                'tahun' => $sheet[$j][13],
                                'provinsi' => $sheet[$j][14],
                                'kabupaten' => $sheet[$j][15],
                                'kecamatan' => $sheet[$j][16],
                                'desa' => $sheet[$j][17],
                                'jenis_page' => "ramp",
                            ];
                            $this->db->insert('identifikasi', $data);
                        }
                    }

                    if ($i == 1) {
                        if ($sheet[$j][0] != null) {
                            $data = [
                                'ruas_km' => $sheet[$j][0],
                                'luas_lr' => $sheet[$j][1],
                                'data_lr' => $sheet[$j][2],
                                'nilai_lr' => $sheet[$j][3],
                                'luas_pj' => $sheet[$j][4],
                                'data_pj' => $sheet[$j][5],
                                'nilai_pj' => $sheet[$j][6],
                                'jenis_page' => "ramp",
                            ];
                            $this->db->insert('data_teknik_1', $data);
                        }
                    }

                    if ($i == 2) {
                        if ($sheet[$j][0] != null) {
                            $data = [
                                'ruas_km' => $sheet[$j][0],
                                'lebar_lajur_1_ki' => $sheet[$j][1],
                                'tebal_lajur_1_ki' => $sheet[$j][2],
                                'jenis_lajur_1_ki' => $sheet[$j][3],
                                'iri_lajur_1_ki' => $sheet[$j][4],
                                'lebar_lajur_2_ki' => $sheet[$j][5],
                                'tebal_lajur_2_ki' => $sheet[$j][6],
                                'jenis_lajur_2_ki' => $sheet[$j][7],
                                'iri_lajur_2_ki' => $sheet[$j][8],
                                'lebar_lajur_2_ka' => $sheet[$j][9],
                                'tebal_lajur_2_ka' => $sheet[$j][10],
                                'jenis_lajur_2_ka' => $sheet[$j][11],
                                'iri_lajur_2_ka' => $sheet[$j][12],
                                'lebar_lajur_1_ka' => $sheet[$j][13],
                                'tebal_lajur_1_ka' => $sheet[$j][14],
                                'jenis_lajur_1_ka' => $sheet[$j][15],
                                'iri_lajur_1_ka' => $sheet[$j][16],
                                'lebar_lpa' => $sheet[$j][17],
                                'tebal_lpa' => $sheet[$j][18],
                                'jenis_lpa' => $sheet[$j][19],
                                'lebar_lpb' => $sheet[$j][20],
                                'tebal_lpb' => $sheet[$j][21],
                                'jenis_lpb' => $sheet[$j][22],
                                'jenis_page' => "ramp",
                            ];
                            $this->db->insert('data_teknik_2', $data);
                        }
                    }

                    if ($i == 3) {
                        if ($sheet[$j][0] != null) {
                            $data = [
                                'ruas_km' => $sheet[$j][0],
                                'tebal_median' => $sheet[$j][1],
                                'lebar_median' => $sheet[$j][2],
                                'jenis_median' => $sheet[$j][3],
                                'kondisi_median' => $sheet[$j][4],
                                'lebar_luar_ki' => $sheet[$j][5],
                                'lebar_dalam_ki' => $sheet[$j][6],
                                'lebar_luar_ka' => $sheet[$j][7],
                                'lebar_dalam_ka' => $sheet[$j][8],
                                'tebal_luar_ki' => $sheet[$j][9],
                                'tebal_dalam_ki' => $sheet[$j][10],
                                'tebal_luar_ka' => $sheet[$j][11],
                                'tebal_dalam_ka' => $sheet[$j][12],
                                'jenis_luar_ki' => $sheet[$j][13],
                                'jenis_dalam_ki' => $sheet[$j][14],
                                'jenis_luar_ka' => $sheet[$j][15],
                                'jenis_dalam_ka' => $sheet[$j][16],
                                'posisi_luar_ki' => $sheet[$j][17],
                                'posisi_dalam_ki' => $sheet[$j][18],
                                'posisi_luar_ka' => $sheet[$j][19],
                                'posisi_dalam_ka' => $sheet[$j][20],
                                'kondisi_luar_ki' => $sheet[$j][21],
                                'kondisi_dalam_ki' => $sheet[$j][22],
                                'kondisi_dalam_ka' => $sheet[$j][23],
                                'kondisi_luar_ka' => $sheet[$j][24],
                                'jenis_page' => "ramp",
                            ];
                            $this->db->insert('data_teknik_2_median', $data);
                        }
                    }

                    if ($i == 4) {
                        if ($sheet[$j][0] != null) {
                            $data = [
                                'ruas_km' => $sheet[$j][0],
                                'gorong_jenis_material' => $sheet[$j][1],
                                'gorong_ukuran_panjang' => $sheet[$j][2],
                                'gorong_kondisi' => $sheet[$j][3],
                                'saluran_jenis_material' => $sheet[$j][4],
                                'saluran_ukuran_panjang' => $sheet[$j][5],
                                'saluran_kondisi' => $sheet[$j][6],
                                'manhole_jenis_material' => $sheet[$j][7],
                                'manhole_ukuran_panjang' => $sheet[$j][8],
                                'manhole_kondisi' => $sheet[$j][9],
                                'jenis_page' => "ramp",
                            ];

                            $this->db->insert('data_teknik_3', $data);
                        }
                    }

                    if ($i == 5) {
                        if ($sheet[$j][0] != null) {
                            $data = [
                                'ruas_km' => $sheet[$j][0],
                                'uraian' => $sheet[$j][1],
                                'ki' => $sheet[$j][2],
                                'mid' => $sheet[$j][3],
                                'ka' => $sheet[$j][4],
                                'jenis_page' => "ramp",
                            ];
                            $this->db->insert('data_teknik_4', $data);
                        }
                    }

                    if ($i == 6) {
                        if ($sheet[$j][0] != null) {
                            $data = [
                                'ruas_km' => $sheet[$j][0],
                                'jenis_utilitas_prasarana' => $sheet[$j][1],
                                'ki_prasarana' => $sheet[$j][2],
                                'mid_prasarana' => $sheet[$j][3],
                                'ka_prasarana' => $sheet[$j][4],
                                'jenis_utilitas_sarana' => $sheet[$j][5],
                                'ki_sarana' => $sheet[$j][6],
                                'mid_sarana' => $sheet[$j][7],
                                'ka_sarana' => $sheet[$j][8],
                                'jenis_page' => "ramp",
                            ];

                            $this->db->insert('data_teknik_5', $data);
                        }
                    }

                    if ($i == 7) {
                        if ($sheet[$j][0] != null) {
                            $data = [
                                'ruas_km' => $sheet[$j][0],
                                'uraian' => $sheet[$j][1],
                                'tanggal_pemanfaatan' => $sheet[$j][2],
                                'nilai' => $sheet[$j][3],
                                'jenis_page' => "ramp",
                            ];
                            $this->db->insert('data_lainnya', $data);
                        }
                    }

                    if ($i == 8) {
                        if ($sheet[$j][0] != null) {
                            $data = [
                                'ruas_km' => $sheet[$j][0],
                                'lhr_ki_golongan_1' => $sheet[$j][1],
                                'tarif_ki_golongan_1' => $sheet[$j][2],
                                'lhr_ka_golongan_1' => $sheet[$j][3],
                                'tarif_ka_golongan_1' => $sheet[$j][4],
                                'lhr_ki_golongan_2' => $sheet[$j][5],
                                'tarif_ki_golongan_2' => $sheet[$j][6],
                                'lhr_ka_golongan_2' => $sheet[$j][7],
                                'tarif_ka_golongan_2' => $sheet[$j][8],
                                'lhr_ki_golongan_3' => $sheet[$j][9],
                                'tarif_ki_golongan_3' => $sheet[$j][10],
                                'lhr_ka_golongan_3' => $sheet[$j][11],
                                'tarif_ka_golongan_3' => $sheet[$j][12],
                                'lhr_ki_golongan_4' => $sheet[$j][13],
                                'tarif_ki_golongan_4' => $sheet[$j][14],
                                'lhr_ka_golongan_4' => $sheet[$j][15],
                                'tarif_ka_golongan_4' => $sheet[$j][16],
                                'lhr_ki_golongan_5' => $sheet[$j][17],
                                'tarif_ki_golongan_5' => $sheet[$j][18],
                                'lhr_ka_golongan_5' => $sheet[$j][19],
                                'tarif_ka_golongan_5' => $sheet[$j][20],
                                'lhr_ki_golongan_6' => $sheet[$j][21],
                                'tarif_ki_golongan_6' => $sheet[$j][22],
                                'lhr_ka_golongan_6' => $sheet[$j][23],
                                'tarif_ka_golongan_6' => $sheet[$j][24],
                                'jenis_page' => "ramp",
                            ];
                            $this->db->insert('lhr', $data);
                        }
                    }

                    if ($i == 9) {
                        if ($sheet[$j][0] != null) {
                            $data = [
                                'ruas_km' => $sheet[$j][0],
                                'lebar_rumija' => $sheet[$j][1],
                                'gradien_kiri' => $sheet[$j][2],
                                'gradien_kanan' => $sheet[$j][3],
                                'cross_fall_kiri' => $sheet[$j][4],
                                'cross_fall_kanan' => $sheet[$j][5],
                                'superelevasi' => $sheet[$j][6],
                                'radius' => $sheet[$j][7],
                                'jenis_page' => "ramp",
                            ];
                            $this->db->insert('geometrik', $data);
                        }
                    }

                    if ($i == 10) {
                        if ($sheet[$j][0] != null) {
                            $data = [
                                'ruas_km' => $sheet[$j][0],
                                'terrain_kiri' => $sheet[$j][1],
                                'terrain_kanan' => $sheet[$j][2],
                                'tata_guna_lahan_kiri' => $sheet[$j][3],
                                'tata_guna_lahan_kanan' => $sheet[$j][4],
                                'underpass_km' => $sheet[$j][5],
                                'underpass_x' => $sheet[$j][6],
                                'underpass_y' => $sheet[$j][7],
                                'overpass_km' => $sheet[$j][8],
                                'overpass_x' => $sheet[$j][9],
                                'overpass_y' => $sheet[$j][10],
                                'jenis_page' => "ramp",
                            ];
                            $this->db->insert('data_lingkungan_jalan', $data);
                        }
                    }
                }
            }

            unlink($file);

            $this->session->set_flashdata('flash', 'Import Excel Berhasil.');
            redirect('Form_new_ramp');
        }
    }

    public function pdf_datateknik($id)
    {
        if ($id != 0) {
            $data['identifikasi'] = $this->db->get_where('identifikasi', ['ruas_km' => $id, 'jenis_page' => "ramp"])->result_array();
            $data['data_teknik_1'] = $this->db->get_where('data_teknik_1', ['ruas_km' => $id, 'jenis_page' => "ramp"])->result_array();
            $data['data_teknik_2'] = $this->db->get_where('data_teknik_2', ['ruas_km' => $id, 'jenis_page' => "ramp"])->result_array();
            $data['data_teknik_2_median'] = $this->db->get_where('data_teknik_2_median', ['ruas_km' => $id, 'jenis_page' => "ramp"])->result_array();
            $data['data_teknik_3'] = $this->db->get_where('data_teknik_3', ['ruas_km' => $id, 'jenis_page' => "ramp"])->result_array();
            $data['data_teknik_4'] = $this->db->get_where('data_teknik_4', ['ruas_km' => $id, 'jenis_page' => "ramp"])->result_array();
            $data['data_teknik_5'] = $this->db->get_where('data_teknik_5', ['ruas_km' => $id, 'jenis_page' => "ramp"])->result_array();
            $data['data_lainnya'] = $this->db->get_where('data_lainnya', ['ruas_km' => $id, 'jenis_page' => "ramp"])->result_array();
            $data['lhr'] = $this->db->get_where('lhr', ['ruas_km' => $id, 'jenis_page' => "ramp"])->result_array();
            $data['geometrik'] = $this->db->get_where('geometrik', ['ruas_km' => $id, 'jenis_page' => "ramp"])->result_array();
            $data['data_lingkungan_jalan'] = $this->db->get_where('data_lingkungan_jalan', ['ruas_km' => $id, 'jenis_page' => "ramp"])->result_array();
        } else {
            $data['identifikasi'] = $this->db->get_where('identifikasi', ['jenis_page' => "ramp"])->result_array();
            $data['data_teknik_1'] = $this->db->get_where('data_teknik_1', ['jenis_page' => "ramp"])->result_array();
            $data['data_teknik_2'] = $this->db->get_where('data_teknik_2', ['jenis_page' => "ramp"])->result_array();
            $data['data_teknik_2_median'] = $this->db->get_where('data_teknik_2_median', ['jenis_page' => "ramp"])->result_array();
            $data['data_teknik_3'] = $this->db->get_where('data_teknik_3', ['jenis_page' => "ramp"])->result_array();
            $data['data_teknik_4'] = $this->db->get_where('data_teknik_4', ['jenis_page' => "ramp"])->result_array();
            $data['data_teknik_5'] = $this->db->get_where('data_teknik_5', ['jenis_page' => "ramp"])->result_array();
            $data['data_lainnya'] = $this->db->get_where('data_lainnya', ['jenis_page' => "ramp"])->result_array();
            $data['lhr'] = $this->db->get_where('lhr', ['jenis_page' => "ramp"])->result_array();
            $data['geometrik'] = $this->db->get_where('geometrik', ['jenis_page' => "ramp"])->result_array();
            $data['data_lingkungan_jalan'] = $this->db->get_where('data_lingkungan_jalan', ['jenis_page' => "ramp"])->result_array();
        }

        $data['judul'] = "PDF Data Teknik RAMP";

        $this->load->library('pdf');

        $this->pdf->setPaper('A4', 'portrait');
        ob_end_clean();
        $this->pdf->atch = array("Attachment" => FALSE);
        $this->pdf->filename = "Pdf_datateknik_ramp.pdf";
        $this->pdf->load_view1('admin/pdf_datateknik', $data);
    }

    public function print_datateknik($id)
    {
        if ($id != 0) {
            $data['identifikasi'] = $this->db->get_where('identifikasi', ['ruas_km' => $id, 'jenis_page' => "ramp"])->result_array();
            $data['data_teknik_1'] = $this->db->get_where('data_teknik_1', ['ruas_km' => $id, 'jenis_page' => "ramp"])->result_array();
            $data['data_teknik_2'] = $this->db->get_where('data_teknik_2', ['ruas_km' => $id, 'jenis_page' => "ramp"])->result_array();
            $data['data_teknik_2_median'] = $this->db->get_where('data_teknik_2_median', ['ruas_km' => $id, 'jenis_page' => "ramp"])->result_array();
            $data['data_teknik_3'] = $this->db->get_where('data_teknik_3', ['ruas_km' => $id, 'jenis_page' => "ramp"])->result_array();
            $data['data_teknik_4'] = $this->db->get_where('data_teknik_4', ['ruas_km' => $id, 'jenis_page' => "ramp"])->result_array();
            $data['data_teknik_5'] = $this->db->get_where('data_teknik_5', ['ruas_km' => $id, 'jenis_page' => "ramp"])->result_array();
            $data['data_lainnya'] = $this->db->get_where('data_lainnya', ['ruas_km' => $id, 'jenis_page' => "ramp"])->result_array();
            $data['lhr'] = $this->db->get_where('lhr', ['ruas_km' => $id, 'jenis_page' => "ramp"])->result_array();
            $data['geometrik'] = $this->db->get_where('geometrik', ['ruas_km' => $id, 'jenis_page' => "ramp"])->result_array();
            $data['data_lingkungan_jalan'] = $this->db->get_where('data_lingkungan_jalan', ['ruas_km' => $id, 'jenis_page' => "ramp"])->result_array();
        } else {
            $data['identifikasi'] = $this->db->get_where('identifikasi', ['jenis_page' => "ramp"])->result_array();
            $data['data_teknik_1'] = $this->db->get_where('data_teknik_1', ['jenis_page' => "ramp"])->result_array();
            $data['data_teknik_2'] = $this->db->get_where('data_teknik_2', ['jenis_page' => "ramp"])->result_array();
            $data['data_teknik_2_median'] = $this->db->get_where('data_teknik_2_median', ['jenis_page' => "ramp"])->result_array();
            $data['data_teknik_3'] = $this->db->get_where('data_teknik_3', ['jenis_page' => "ramp"])->result_array();
            $data['data_teknik_4'] = $this->db->get_where('data_teknik_4', ['jenis_page' => "ramp"])->result_array();
            $data['data_teknik_5'] = $this->db->get_where('data_teknik_5', ['jenis_page' => "ramp"])->result_array();
            $data['data_lainnya'] = $this->db->get_where('data_lainnya', ['jenis_page' => "ramp"])->result_array();
            $data['lhr'] = $this->db->get_where('lhr', ['jenis_page' => "ramp"])->result_array();
            $data['geometrik'] = $this->db->get_where('geometrik', ['jenis_page' => "ramp"])->result_array();
            $data['data_lingkungan_jalan'] = $this->db->get_where('data_lingkungan_jalan', ['jenis_page' => "ramp"])->result_array();
        }

        $data['judul'] = "PDF Data Teknik";

        $this->load->view('admin/print_datateknik', $data);
    }
}
