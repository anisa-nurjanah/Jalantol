<?php
defined('BASEPATH') or exit('No direct script access allowed');

use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;

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
    
    public function __construct()
    {
        parent::__construct();
        $this->load->model('ModelTeknik', 'Model');
        $this->load->model('ModelSpasial');
    }

    public function index()
    {
    }

    public function getJalanTol()
    {
        $this->datatables->select('A, B, C, D, E, F');
        $this->datatables->from('sheet1');
        $this->db->where(['jenis_page' => "ramp"]);
        $this->datatables->add_column(
            'aksi',
            '<span data-toggle="tooltip" data-placement="top" title="Detail LKS"><a href="javascript:void(0);" class="detail_record btn btn-sm btn-success" data-id="$1" data-backdrop="static" data-keyboard="false">
                <i class="fas fa-info-circle"></i> </a> </span>',
            'A'
        );
        return print_r($this->datatables->generate());
    }

    public function getdatabyid()
    {
        $id = $this->input->post('id');
        $table = $this->input->post('table');
        $data = $this->db->get_where($table, ["id_$table" => $id])->row_array();
        $this->db->where(['jenis_page' => "ramp"]);

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

    public function delete_data()
    {
        $id = $this->input->post('id');
        $table = $this->input->post('table');
        $this->db->delete($table, ["id_$table" => $id]);
        $this->db->where(['jenis_page' => "ramp"]);

        $data = toast('success', 'Berhasil Hapus Data!');

        echo json_encode($data);
    }

    public function editidentifikasi()
    {
        $id_identifikasi = $this->input->post('id_identifikasi');
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

        $this->db->update('identifikasi', $data, ['id_identifikasi' => $id_identifikasi]);
        $data = toast('success', 'Selamat data berhasil diubah.!');
        echo json_encode($data);
    }

    public function editdatateknik1()
    {
        $id_data_teknik_1 = $this->input->post('id_data_teknik_1');
        $data = [
            'ruas_km' => $this->input->post('ruas_km'),
            'luas_lr' => $this->input->post('luas_lr'),
            'data_lr' => $this->input->post('data_lr'),
            'nilai_lr' => $this->input->post('nilai_lr'),
            'luas_pj' => $this->input->post('luas_pj'),
            'data_pj' => $this->input->post('data_pj'),
            'nilai_pj' => $this->input->post('nilai_pj'),
            'jenis_page' => "ramp"
        ];

        $this->db->update('data_teknik_1', $data, ['id_data_teknik_1' => $id_data_teknik_1]);
        $data = toast('success', 'Selamat data berhasil diubah.!');
        echo json_encode($data);
    }

    public function editdatateknik2()
    {
        $id_data_teknik_2 = $this->input->post('id_data_teknik_2');
        $data = [
            'ruas_km' => $this->input->post('ruas_km'),
            'lebar_lajur_1_ki' => $this->input->post('lebar_lajur_1_ki'),
            'tebal_lajur_1_ki' => $this->input->post('tebal_lajur_1_ki'),
            'jenis_lajur_1_ki' => $this->input->post('jenis_lajur_1_ki'),
            'iri_lajur_1_ki' => $this->input->post('iri_lajur_1_ki'),
            'lebar_lajur_2_ki' => $this->input->post('lebar_lajur_2_ki'),
            'tebal_lajur_2_ki' => $this->input->post('tebal_lajur_2_ki'),
            'jenis_lajur_2_ki' => $this->input->post('jenis_lajur_2_ki'),
            'iri_lajur_2_ki' => $this->input->post('iri_lajur_2_ki'),
            'lebar_lajur_2_ka' => $this->input->post('lebar_lajur_2_ka'),
            'tebal_lajur_2_ka' => $this->input->post('tebal_lajur_2_ka'),
            'jenis_lajur_2_ka' => $this->input->post('jenis_lajur_2_ka'),
            'iri_lajur_2_ka' => $this->input->post('iri_lajur_2_ka'),
            'lebar_lajur_1_ka' => $this->input->post('lebar_lajur_1_ka'),
            'tebal_lajur_1_ka' => $this->input->post('tebal_lajur_1_ka'),
            'jenis_lajur_1_ka' => $this->input->post('jenis_lajur_1_ka'),
            'iri_lajur_1_ka' => $this->input->post('iri_lajur_1_ka'),
            'lebar_lpa' => $this->input->post('lebar_lpa'),
            'tebal_lpa' => $this->input->post('tebal_lpa'),
            'jenis_lpa' => $this->input->post('jenis_lpa'),
            'lebar_lpb' => $this->input->post('lebar_lpb'),
            'tebal_lpb' => $this->input->post('tebal_lpb'),
            'jenis_lpb' => $this->input->post('jenis_lpb'),
            'jenis_page' => "ramp"
        ];

        $this->db->update('data_teknik_2', $data, ['id_data_teknik_2' => $id_data_teknik_2]);
        $data = toast('success', 'Selamat data berhasil diubah.!');
        echo json_encode($data);
    }

    public function editdatateknik2median()
    {
        $id_data_teknik_2_median = $this->input->post('id_data_teknik_2_median');
        $data = [
            'ruas_km' => $this->input->post('ruas_km'),
            'lebar_median' => $this->input->post('lebar_median'),
            'tebal_median' => $this->input->post('tebal_median'),
            'jenis_median' => $this->input->post('jenis_median'),
            'kondisi_median' => $this->input->post('kondisi_median'),
            'lebar_luar_ki' => $this->input->post('lebar_luar_ki'),
            'lebar_dalam_ki' => $this->input->post('lebar_dalam_ki'),
            'lebar_luar_ka' => $this->input->post('lebar_luar_ka'),
            'lebar_dalam_ka' => $this->input->post('lebar_dalam_ka'),
            'tebal_luar_ki' => $this->input->post('tebal_luar_ki'),
            'tebal_dalam_ki' => $this->input->post('tebal_dalam_ki'),
            'tebal_luar_ka' => $this->input->post('tebal_luar_ka'),
            'tebal_dalam_ka' => $this->input->post('tebal_dalam_ka'),
            'jenis_luar_ki' => $this->input->post('jenis_luar_ki'),
            'jenis_dalam_ki' => $this->input->post('jenis_dalam_ki'),
            'jenis_luar_ka' => $this->input->post('jenis_luar_ka'),
            'jenis_dalam_ka' => $this->input->post('jenis_dalam_ka'),
            'posisi_luar_ki' => $this->input->post('posisi_luar_ki'),
            'posisi_dalam_ki' => $this->input->post('posisi_dalam_ki'),
            'posisi_luar_ka' => $this->input->post('posisi_luar_ka'),
            'posisi_dalam_ka' => $this->input->post('posisi_dalam_ka'),
            'kondisi_luar_ki' => $this->input->post('kondisi_luar_ki'),
            'kondisi_dalam_ki' => $this->input->post('kondisi_dalam_ki'),
            'kondisi_luar_ka' => $this->input->post('kondisi_luar_ka'),
            'kondisi_dalam_ka' => $this->input->post('kondisi_dalam_ka'),
            'jenis_page' => "ramp"
        ];

        $this->db->update('data_teknik_2_median', $data, ['id_data_teknik_2_median' => $id_data_teknik_2_median]);
        $data = toast('success', 'Selamat data berhasil diubah.!');
        echo json_encode($data);
    }

    public function editdatateknik3()
    {
        $id_data_teknik_3 = $this->input->post('id_data_teknik_3');
        $data = [
            'ruas_km' => $this->input->post('ruas_km'),
            'gorong_jenis_material' => $this->input->post('gorong_jenis_material'),
            'gorong_ukuran_panjang' => $this->input->post('gorong_ukuran_panjang'),
            'gorong_kondisi' => $this->input->post('gorong_kondisi'),
            'saluran_jenis_material' => $this->input->post('saluran_jenis_material'),
            'saluran_ukuran_panjang' => $this->input->post('saluran_ukuran_panjang'),
            'saluran_kondisi' => $this->input->post('saluran_kondisi'),
            'manhole_jenis_material' => $this->input->post('manhole_jenis_material'),
            'manhole_ukuran_panjang' => $this->input->post('manhole_ukuran_panjang'),
            'manhole_kondisi' => $this->input->post('manhole_kondisi'),
            'jenis_page' => "ramp"
        ];

        $this->db->update('data_teknik_3', $data, ['id_data_teknik_3' => $id_data_teknik_3]);
        $data = toast('success', 'Selamat data berhasil diubah.!');
        echo json_encode($data);
    }

    public function editdatateknik4()
    {
        $id_data_teknik_4 = $this->input->post('id_data_teknik_4');
        $data = [
            'ruas_km' => $this->input->post('ruas_km'),
            'uraian' => $this->input->post('uraian'),
            'ki' => $this->input->post('ki'),
            'mid' => $this->input->post('mid'),
            'ka' => $this->input->post('ka'),
            'jenis_page' => "ramp"
        ];

        $this->db->update('data_teknik_4', $data, ['id_data_teknik_4' => $id_data_teknik_4]);
        $data = toast('success', 'Selamat data berhasil diubah.!');
        echo json_encode($data);
    }

    public function editdatateknik5()
    {
        $id_data_teknik_5 = $this->input->post('id_data_teknik_5');
        $data = [
            'ruas_km' => $this->input->post('ruas_km'),
            'jenis_utilitas_prasarana' => $this->input->post('jenis_utilitas_prasarana'),
            'ki_prasarana' => $this->input->post('ki_prasarana'),
            'mid_prasarana' => $this->input->post('mid_prasarana'),
            'ka_prasarana' => $this->input->post('ka_prasarana'),
            'jenis_utilitas_sarana' => $this->input->post('jenis_utilitas_sarana'),
            'ki_sarana' => $this->input->post('ki_sarana'),
            'mid_sarana' => $this->input->post('mid_sarana'),
            'ka_sarana' => $this->input->post('ka_sarana'),
            'jenis_page' => "ramp"
        ];

        $this->db->update('data_teknik_5', $data, ['id_data_teknik_5' => $id_data_teknik_5]);
        $data = toast('success', 'Selamat data berhasil diubah.!');
        echo json_encode($data);
    }

    public function editdatalainnya()
    {
        $id_data_lainnya = $this->input->post('id_data_lainnya');
        $data = [
            'ruas_km' => $this->input->post('ruas_km'),
            'uraian' => $this->input->post('uraian'),
            'tanggal_pemanfaatan' => $this->input->post('tanggal_pemanfaatan'),
            'nilai' => $this->input->post('nilai'),
            'jenis_page' => "ramp"
        ];

        $this->db->update('data_lainnya', $data, ['id_data_lainnya' => $id_data_lainnya]);
        $data = toast('success', 'Selamat data berhasil diubah.!');
        echo json_encode($data);
    }

    public function editlhr()
    {
        $id_lhr = $this->input->post('id_lhr');
        $data = [
            'ruas_km' => $this->input->post('ruas_km'),
            'lhr_ki_golongan_1' => $this->input->post('lhr_ki_golongan_1'),
            'tarif_ki_golongan_1' => $this->input->post('tarif_ki_golongan_1'),
            'lhr_ka_golongan_1' => $this->input->post('lhr_ka_golongan_1'),
            'tarif_ka_golongan_1' => $this->input->post('tarif_ka_golongan_1'),
            'lhr_ki_golongan_2' => $this->input->post('lhr_ki_golongan_2'),
            'tarif_ki_golongan_2' => $this->input->post('tarif_ki_golongan_2'),
            'lhr_ka_golongan_2' => $this->input->post('lhr_ka_golongan_2'),
            'tarif_ka_golongan_2' => $this->input->post('tarif_ka_golongan_2'),
            'lhr_ki_golongan_3' => $this->input->post('lhr_ki_golongan_3'),
            'tarif_ki_golongan_3' => $this->input->post('tarif_ki_golongan_3'),
            'lhr_ka_golongan_3' => $this->input->post('lhr_ka_golongan_3'),
            'tarif_ka_golongan_3' => $this->input->post('tarif_ka_golongan_3'),
            'lhr_ki_golongan_4' => $this->input->post('lhr_ki_golongan_4'),
            'tarif_ki_golongan_4' => $this->input->post('tarif_ki_golongan_4'),
            'lhr_ka_golongan_4' => $this->input->post('lhr_ka_golongan_4'),
            'tarif_ka_golongan_4' => $this->input->post('tarif_ka_golongan_4'),
            'lhr_ki_golongan_5' => $this->input->post('lhr_ki_golongan_5'),
            'tarif_ki_golongan_5' => $this->input->post('tarif_ki_golongan_5'),
            'lhr_ka_golongan_5' => $this->input->post('lhr_ka_golongan_5'),
            'tarif_ka_golongan_5' => $this->input->post('tarif_ka_golongan_5'),
            'lhr_ki_golongan_6' => $this->input->post('lhr_ki_golongan_6'),
            'tarif_ki_golongan_6' => $this->input->post('tarif_ki_golongan_6'),
            'lhr_ka_golongan_6' => $this->input->post('lhr_ka_golongan_6'),
            'tarif_ka_golongan_6' => $this->input->post('tarif_ka_golongan_6'),
            'jenis_page' => "ramp"
        ];

        $this->db->update('lhr', $data, ['id_lhr' => $id_lhr]);
        $data = toast('success', 'Selamat data berhasil diubah.!');
        echo json_encode($data);
    }

    public function editdatageometrik()
    {
        $id_geometrik = $this->input->post('id_geometrik');
        $data = [
            'ruas_km' => $this->input->post('ruas_km'),
            'lebar_rumija' => $this->input->post('lebar_rumija'),
            'gradien_kiri' => $this->input->post('gradien_kiri'),
            'gradien_kanan' => $this->input->post('gradien_kanan'),
            'cross_fall_kiri' => $this->input->post('cross_fall_kiri'),
            'cross_fall_kanan' => $this->input->post('cross_fall_kanan'),
            'superelevasi' => $this->input->post('superelevasi'),
            'radius' => $this->input->post('radius'),
            'jenis_page' => "ramp"
        ];

        $this->db->update('geometrik', $data, ['id_geometrik' => $id_geometrik]);
        $data = toast('success', 'Selamat data berhasil diubah.!');
        echo json_encode($data);
    }

    public function editdatalingkungan()
    {
        $id_data_lingkungan_jalan = $this->input->post('id_data_lingkungan_jalan');
        $data = [
            'ruas_km' => $this->input->post('ruas_km'),
            'terrain_kiri' => $this->input->post('terrain_kiri'),
            'terrain_kanan' => $this->input->post('terrain_kanan'),
            'tata_guna_lahan_kiri' => $this->input->post('tata_guna_lahan_kiri'),
            'tata_guna_lahan_kanan' => $this->input->post('tata_guna_lahan_kanan'),
            'underpass_km' => $this->input->post('underpass_km'),
            'underpass_x' => $this->input->post('underpass_x'),
            'underpass_y' => $this->input->post('underpass_y'),
            'overpass_km' => $this->input->post('overpass_km'),
            'overpass_x' => $this->input->post('overpass_x'),
            'overpass_y' => $this->input->post('overpass_y'),
            'jenis_page' => "ramp"
        ];

        $this->db->update('data_lingkungan_jalan', $data, ['id_data_lingkungan_jalan' => $id_data_lingkungan_jalan]);
        $data = toast('success', 'Selamat data berhasil diubah.!');
        echo json_encode($data);
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

    public function view_map()
    {
        $id = $this->input->post('id');
        $data['where'] = $id;
        $this->load->view('admin/map_ramp', $data);
    }

    public function dataspasial()
    {
        $data['judul'] = "Data Spasial";
        $data['dataTol'] = $this->ModelSpasial->datajalanTol();
        $data['batasan'] = $this->ModelSpasial->batasan();
        $this->load->view('templates/header', $data);
        $this->load->view('templates/navbar');
        $this->load->view('templates/sidebar');
        $this->load->view('admin/dataspasial_ramp', $data);
        $this->load->view('templates/footer');
        
    }

    public function get_dataspasial()
    {
        $this->datatables->select('id_atribut, nama_atribut, batasan_data.nama_atribut_batasan, geojson_atribut, nama_spasial, jenis_page');
        $this->datatables->from('m_spasial');
        $this->datatables->join('batasan_data', 'batasan_data.kode_atribut=m_spasial.nama_atribut');
        $this->db->where(['jenis_page' => "ramp"]);
        $this->db->distinct();
        $this->datatables->group_by('id_atribut, nama_atribut, batasan_data.nama_atribut_batasan, geojson_atribut, nama_spasial, jenis_page,batasan_data.kode_atribut,batasan_data.id_batasan_data, batasan_data.nama_atribut_batasan, batasan_data.nama_spasial_batasan, batasan_data.data_teknik, batasan_data.created_at_batasan,batasan_data.data_spasial');
        $this->datatables->add_column(
            'aksi',
            '<span data-toggle="tooltip" data-placement="top" title="Edit Data Spasial"><a href="javascript:void(0);" class="edit_record btn btn-sm btn-primary" data-id="$1" data-backdrop="static" data-keyboard="false">
            <i class="fas fa-edit"></i> </a></span>
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

                    // 'warna_atribut' => $this->input->post('warna_atribut')
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
                    'jenis_page' => "ramp"

                    // 'warna_atribut' => $this->input->post('warna_atribut')
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

                // 'warna_atribut' => $this->input->post('warna_atribut')
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
        $data['dataTol'] = $this->ModelSpasial->datajalanTol();
        $this->load->view('templates/header', $data);
        $this->load->view('templates/navbar');
        $this->load->view('templates/sidebar');
        $this->load->view('admin/form_data_teknik_ramp', $data);
        $this->load->view('templates/footer');
    }

    public function daftar_ruas(){
        $this->load->helper('url');
        $id = $this->input->post('ruas_km');
        $this->Model->update_ruas($id);
        if($this->input->post('ruas_km')){
            redirect('dataspasial');
        }
    }
    public function datateknik()
    {
        $data['judul'] = "Formulir Data Teknik";
        $data['url'] = 'data_teknik';
        $data['dataTol'] = $this->ModelSpasial->datajalanTol();
        // $data['datatable_seksi'] = $this->Model->get_segmen_seksi();
        // $data['datatable_ident'] = $this->Model->get_ident();
        // $data['datatable_d1'] = $this->Model->get_data1();
        // $data['datatable_d2b'] = $this->Model->get_data2_bahujalan();
        // $data['datatable_d2l'] = $this->Model->get_data2_lapis();
        // $data['datatable_d2m'] = $this->Model->get_data2_median();
        // $data['datatable_d3g'] = $this->Model->get_data3_gorong();
        // $data['datatable_d3p'] = $this->Model->get_data3_penahantanah();
        // $data['datatable_d3s'] = $this->Model->get_data3_saluran();
        // $data['datatable_d4'] = $this->Model->get_data4();
        // $data['datatable_d5b'] = $this->Model->get_data5_bangunan();
        // $data['datatable_d5pf'] = $this->Model->get_data5_publikfacility();
        // $data['datatable_dl'] = $this->Model->get_datalainnya();
        // $data['datatable_lhr'] = $this->Model->get_lintasharian();
        // $data['datatable_pg'] = $this->Model->get_petageometrik();
        // $data['datatable_dlj1'] = $this->Model->get_datalingkunganjalan1();
        // $data['datatable_dlj2'] = $this->Model->get_datalingkunganjalan2();
        $this->load->view('templates/header', $data);
        $this->load->view('templates/navbar');
        $this->load->view('templates/sidebar');
        $this->load->view('admin/data_teknik_ramp', $data);
        $this->load->view('templates/footer');
    }

    public function form()
    {
        $data['judul'] = "Formulir Data Teknik";
        $this->load->view('templates/header', $data);
        $this->load->view('templates/navbar');
        $this->load->view('templates/sidebar');
        $this->load->view('admin/form_teknik', $data);
        $this->load->view('templates/footer');
    }

    public function add_datateknik()
    {
        include APPPATH . 'third_party/PHPExcel/PHPExcel.php';

        $config['upload_path'] = './assets/excel/';
        $config['allowed_types'] = 'xlsx|xls';
        $config['max_size'] = '10000';
        $config['encrypt_name'] = true;

        $this->load->library('upload', $config);

        if (!$this->upload->do_upload('datateknik1')) {

            //upload gagal
            $this->session->set_flashdata('error', 'Proses Import Excel gagal!');
            //redirect halaman
            redirect('datateknik/form');
        } else {
            $data_upload = $this->upload->data();

            $file = $this->upload->data('full_path');

            $excelreader     = new PHPExcel_Reader_Excel2007();
            $loadexcel         = $excelreader->load($file); // Load file yang telah diupload ke folder excel
            $sheet             = $loadexcel->getActiveSheet()->toArray();
            $data = [];
            for ($i = 1; $i < count($sheet); $i++) {
                // if ($sheet[$i][0] != null) {
                $date = date_create($sheet[$i][1]);
                $tanggal = date_format($date, "Y-m-d");

                $data[] = [
                    'uraian' => $sheet[$i][0],
                    'luas' => $sheet[$i][1],
                    'data_perolehan' => $sheet[$i][2],
                    'nilai_perolehan' => $sheet[$i][3],
                    'jenis_page' => "ramp"
                ];
                // }
            }

            unlink($file);

            for ($i = 0; $i < count($data); $i++) {

                $data1 = [
                    'Uraian' => $data[$i]['uraian'],
                    'Luas' => $data[$i]['luas'],
                    'Data_Perolehan' => $data[$i]['data_perolehan'],
                    'Nilai_Perolehan' => $data[$i]['nilai_perolehan'],
                    'jenis_page' => "ramp"
                ];

                $this->db->insert('data1', $data1);
            }

            $this->session->set_flashdata('flash', 'Import Excel Berhasil.');
            redirect('datateknik/form');
        }
    }

    public function add_datateknik2()
    {
        include APPPATH . 'third_party/PHPExcel/PHPExcel.php';

        $config['upload_path']        = './assets/excel/';
        $config['allowed_types'] = 'xlsx|xls';
        $config['max_size'] = '10000';
        $config['encrypt_name'] = true;

        $this->load->library('upload', $config);

        if (!$this->upload->do_upload('datateknik2')) {

            //upload gagal
            $this->session->set_flashdata('error', 'Proses Import Excel gagal!');
            //redirect halaman
            redirect('datateknik/form');
        } else {
            $data_upload = $this->upload->data();

            $file = $this->upload->data('full_path');

            $excelreader     = new PHPExcel_Reader_Excel2007();
            $loadexcel         = $excelreader->load($file); // Load file yang telah diupload ke folder excel
            $sheet             = $loadexcel->getActiveSheet()->toArray();
            $data_lapisan = [];
            $data_median = [];
            $data_bahu = [];
            $data_tipe = [];
            for ($i = 2; $i < count($sheet); $i++) {

                if (!in_array($sheet[$i][0], $data_tipe, true)) {
                    array_push($data_tipe, $sheet[$i][0]);
                }

                $data_lapisan[] = [
                    'tipe_lapisan' => $sheet[$i][0],
                    'uraian' => $sheet[$i][1],
                    'ki_1' => $sheet[$i][2],
                    'ki_2' => $sheet[$i][3],
                    'ka_1' => $sheet[$i][4],
                    'ka_2' => $sheet[$i][5],
                    'jenis_page' => "ramp"
                ];

                $data_median[] = [
                    'uraian' => $sheet[$i][6],
                    'median' => $sheet[$i][7],
                    'jenis_page' => "ramp"
                ];

                $data_bahu[] = [
                    'uraian' => $sheet[$i][8],
                    'ki_dalam' => $sheet[$i][9],
                    'ki_luar' => $sheet[$i][10],
                    'ka_dalam' => $sheet[$i][11],
                    'ka_luar' => $sheet[$i][12],
                    'jenis_page' => "ramp"
                ];
            }

            unlink($file);

            for ($i = 0; $i < count($data_tipe); $i++) {
                $data_tplapis = [
                    'TipeLapis' => $data_tipe[$i]
                ];

                $this->db->insert('tipelapis', $data_tplapis);
            }

            for ($i = 0; $i < count($data_lapisan); $i++) {
                $get_lapis = $this->db->get_where('tipelapis', ['TipeLapis' => $data_lapisan[$i]['tipe_lapisan']])->row_array();
                $data1 = [
                    'Tipe_Lapis' => $get_lapis['idTipeLapis'],
                    'Uraian' => $data_lapisan[$i]['uraian'],
                    'KI_Jalur_1' => $data_lapisan[$i]['ki_1'],
                    'KI_Jalur_2' => $data_lapisan[$i]['ki_2'],
                    'KA_Jalur_1' => $data_lapisan[$i]['ka_1'],
                    'KA_Jalur_2' => $data_lapisan[$i]['ka_2'],
                    'jenis_page' => "ramp"
                ];
                if ($data_lapisan[$i]['tipe_lapisan'] != null) {
                    $this->db->insert('data2_lapis', $data1);
                }
            }

            for ($i = 0; $i < count($data_median); $i++) {

                $data1 = [
                    'Uraian' => $data_median[$i]['uraian'],
                    'Median' => $data_median[$i]['median'],
                    'jenis_page' => "ramp"
                ];
                if ($data_median[$i]['uraian'] != null) {
                    $this->db->insert('data2_median', $data1);
                }
            }

            for ($i = 0; $i < count($data_bahu); $i++) {

                $data1 = [
                    'Uraian' => $data_bahu[$i]['uraian'],
                    'KI_Dalam' => $data_bahu[$i]['ki_dalam'],
                    'KI_Luar' => $data_bahu[$i]['ki_luar'],
                    'KA_Dalam' => $data_bahu[$i]['ka_dalam'],
                    'KA_Luar' => $data_bahu[$i]['ka_luar'],
                    'jenis_page' => "ramp"
                ];
                if ($data_bahu[$i]['uraian'] != null) {
                    $this->db->insert('data2_bahujalan', $data1);
                }
            }

            $this->session->set_flashdata('flash', 'Import Excel Berhasil.');
            redirect('datateknik/form');
        }
    }

    public function add_datateknik3()
    {
        include APPPATH . 'third_party/PHPExcel/PHPExcel.php';

        $config['upload_path']        = './assets/excel/';
        $config['allowed_types'] = 'xlsx|xls';
        $config['max_size'] = '10000';
        $config['encrypt_name'] = true;

        $this->load->library('upload', $config);

        if (!$this->upload->do_upload('datateknik3')) {

            //upload gagal
            $this->session->set_flashdata('error', 'Proses Import Excel gagal!');
            //redirect halaman
            redirect('datateknik/form');
        } else {
            $data_upload = $this->upload->data();

            $file = $this->upload->data('full_path');

            $excelreader     = new PHPExcel_Reader_Excel2007();
            $loadexcel         = $excelreader->load($file); // Load file yang telah diupload ke folder excel
            $sheet             = $loadexcel->getActiveSheet()->toArray();
            $data_gorong = [];
            $data_saluran = [];
            $data_penahan = [];
            $jenis_bangunan = [];
            $jenis_saluran = [];
            for ($i = 1; $i < count($sheet); $i++) {

                if (!in_array($sheet[$i][19], $jenis_bangunan, true)) {
                    array_push($jenis_bangunan, $sheet[$i][19]);
                }
                if (!in_array($sheet[$i][5], $jenis_saluran, true)) {
                    array_push($jenis_saluran, $sheet[$i][5]);
                }

                $data_gorong[] = [
                    'uraian' => $sheet[$i][0],
                    'ke_1' => $sheet[$i][1],
                    'ke_2' => $sheet[$i][2],
                    'ke_3' => $sheet[$i][3],
                    'ke_4' => $sheet[$i][4],
                    'jenis_page' => "ramp"
                ];

                $data_saluran[] = [
                    'jenis_saluran' => $sheet[$i][5],
                    'uraian' => $sheet[$i][6],
                    'ke_1_ki' => $sheet[$i][7],
                    'ke_1_mid' => $sheet[$i][8],
                    'ke_1_ka' => $sheet[$i][9],
                    'ke_2_ki' => $sheet[$i][10],
                    'ke_2_mid' => $sheet[$i][11],
                    'ke_2_ka' => $sheet[$i][12],
                    'ke_3_ki' => $sheet[$i][13],
                    'ke_3_mid' => $sheet[$i][14],
                    'ke_3_ka' => $sheet[$i][15],
                    'ke_4_ki' => $sheet[$i][16],
                    'ke_4_mid' => $sheet[$i][17],
                    'ke_4_ka' => $sheet[$i][18],
                    'jenis_page' => "ramp"
                ];

                $data_penahan[] = [
                    'jenis_bangunan' => $sheet[$i][19],
                    'uraian' => $sheet[$i][20],
                    'ke_1_ki' => $sheet[$i][21],
                    'ke_1_ka' => $sheet[$i][22],
                    'ke_2_ki' => $sheet[$i][23],
                    'ke_2_ka' => $sheet[$i][24],
                    'ke_3_ki' => $sheet[$i][25],
                    'ke_3_ka' => $sheet[$i][26],
                    'ke_4_ki' => $sheet[$i][27],
                    'ke_4_ka' => $sheet[$i][28],
                    'jenis_page' => "ramp"
                ];
            }

            unlink($file);

            for ($i = 0; $i < count($jenis_bangunan); $i++) {
                $data_jenis_bangunan = [
                    'Jenis_Bangunan' => $jenis_bangunan[$i]
                ];

                if ($jenis_bangunan[$i] != null) {
                    $this->db->insert('jenisbangunan', $data_jenis_bangunan);
                }
            }

            for ($i = 0; $i < count($jenis_saluran); $i++) {
                $data_jenis_saluran = [
                    'Jenis_Saluran' => $jenis_saluran[$i]
                ];

                if ($jenis_saluran[$i] != null) {
                    $this->db->insert('jenissaluran', $data_jenis_saluran);
                }
            }

            for ($i = 0; $i < count($data_gorong); $i++) {

                $data1 = [
                    'Uraian' => $data_gorong[$i]['uraian'],
                    'Ke-1' => $data_gorong[$i]['ke_1'],
                    'Ke-2' => $data_gorong[$i]['ke_2'],
                    'Ke-3' => $data_gorong[$i]['ke_3'],
                    'Ke-4' => $data_gorong[$i]['ke_4'],
                ];
                if ($data_gorong[$i]['uraian'] != null) {
                    $this->db->insert('data3_gorong', $data1);
                }
            }

            for ($i = 0; $i < count($data_saluran); $i++) {
                $get_jenis = $this->db->get_where('jenissaluran', ['Jenis_Saluran' => $data_saluran[$i]['jenis_saluran']])->row_array();
                $data1 = [
                    'Jenis_Saluran' => $get_jenis['idJenisSaluran'],
                    'Uraian' => $data_saluran[$i]['uraian'],
                    'Ke_1_KI' => $data_saluran[$i]['ke_1_ki'],
                    'Ke_1_MID' => $data_saluran[$i]['ke_1_mid'],
                    'Ke_1_KA' => $data_saluran[$i]['ke_1_ka'],
                    'Ke_2_KI' => $data_saluran[$i]['ke_2_ki'],
                    'Ke_2_MID' => $data_saluran[$i]['ke_2_mid'],
                    'Ke_2_KA' => $data_saluran[$i]['ke_2_ka'],
                    'Ke_3_KI' => $data_saluran[$i]['ke_3_ki'],
                    'Ke_3_MID' => $data_saluran[$i]['ke_3_mid'],
                    'Ke_3_KA' => $data_saluran[$i]['ke_3_ka'],
                    'Ke_4_KI' => $data_saluran[$i]['ke_4_ki'],
                    'Ke_4_MID' => $data_saluran[$i]['ke_4_mid'],
                    'Ke_4_KA' => $data_saluran[$i]['ke_4_ka'],
                    'jenis_page' => "ramp"
                ];
                if ($data_saluran[$i]['jenis_saluran'] != null) {
                    $this->db->insert('data3_saluran', $data1);
                }
            }

            for ($i = 0; $i < count($data_penahan); $i++) {
                $get_jenis = $this->db->get_where('jenisbangunan', ['Jenis_Bangunan' => $data_penahan[$i]['jenis_bangunan']])->row_array();
                $data1 = [
                    'Jenis_Bangunan' => $get_jenis['idJenisBangunan'],
                    'Uraian' => $data_penahan[$i]['uraian'],
                    'Ke_1_KI' => $data_penahan[$i]['ke_1_ki'],
                    'Ke_1_KA' => $data_penahan[$i]['ke_1_ka'],
                    'Ke_2_KI' => $data_penahan[$i]['ke_2_ki'],
                    'Ke_2_KA' => $data_penahan[$i]['ke_2_ka'],
                    'Ke_3_KI' => $data_penahan[$i]['ke_3_ki'],
                    'Ke_3_KA' => $data_penahan[$i]['ke_3_ka'],
                    'Ke_4_KI' => $data_penahan[$i]['ke_4_ki'],
                    'Ke_4_KA' => $data_penahan[$i]['ke_4_ka'],
                    'jenis_page' => "ramp"
                ];
                if ($data_penahan[$i]['jenis_bangunan'] != null) {
                    $this->db->insert('data3_penahantanah', $data1);
                }
            }

            $this->session->set_flashdata('flash', 'Import Excel Berhasil.');
            redirect('datateknik/form');
        }
    }

    public function add_datateknik4()
    {
        include APPPATH . 'third_party/PHPExcel/PHPExcel.php';

        $config['upload_path']        = './assets/excel/';
        $config['allowed_types'] = 'xlsx|xls';
        $config['max_size'] = '10000';
        $config['encrypt_name'] = true;

        $this->load->library('upload', $config);

        if (!$this->upload->do_upload('datateknik4')) {

            //upload gagal
            $this->session->set_flashdata('error', 'Proses Import Excel gagal!');
            //redirect halaman
            redirect('datateknik/form');
        } else {
            $data_upload = $this->upload->data();

            $file = $this->upload->data('full_path');

            $excelreader     = new PHPExcel_Reader_Excel2007();
            $loadexcel         = $excelreader->load($file); // Load file yang telah diupload ke folder excel
            $sheet             = $loadexcel->getActiveSheet()->toArray();
            $data = [];
            for ($i = 1; $i < count($sheet); $i++) {

                $data[] = [
                    'uraian' => $sheet[$i][0],
                    'ki' => $sheet[$i][1],
                    'mid' => $sheet[$i][2],
                    'ka' => $sheet[$i][3],
                    'jenis_page' => "ramp"
                ];
                // }
            }

            unlink($file);

            for ($i = 0; $i < count($data); $i++) {

                $data1 = [
                    'Uraian' => $data[$i]['uraian'],
                    'KI' => $data[$i]['ki'],
                    'MID' => $data[$i]['mid'],
                    'KA' => $data[$i]['ka'],
                    'jenis_page' => "ramp"
                ];
                if ($data[$i]['uraian'] != null) {
                    $this->db->insert('data4', $data1);
                }
            }

            $this->session->set_flashdata('flash', 'Import Excel Berhasil.');
            redirect('datateknik/form');
        }
    }
    public function add_datateknik5()
    {
        include APPPATH . 'third_party/PHPExcel/PHPExcel.php';

        $config['upload_path']        = './assets/excel/';
        $config['allowed_types'] = 'xlsx|xls';
        $config['max_size'] = '10000';
        $config['encrypt_name'] = true;

        $this->load->library('upload', $config);

        if (!$this->upload->do_upload('datateknik5')) {

            //upload gagal
            $this->session->set_flashdata('error', 'Proses Import Excel gagal!');
            //redirect halaman
            redirect('datateknik/form');
        } else {
            $data_upload = $this->upload->data();

            $file = $this->upload->data('full_path');

            $excelreader     = new PHPExcel_Reader_Excel2007();
            $loadexcel         = $excelreader->load($file); // Load file yang telah diupload ke folder excel
            $sheet             = $loadexcel->getActiveSheet()->toArray();
            $data = [];
            $data2 = [];
            $jenis_sarana = [];
            for ($i = 1; $i < count($sheet); $i++) {
                if (!in_array($sheet[$i][0], $jenis_sarana, true)) {
                    array_push($jenis_sarana, $sheet[$i][0]);
                }

                $data[] = [
                    'jenis_sarana' => $sheet[$i][0],
                    'uraian' => $sheet[$i][1],
                    'ki' => $sheet[$i][2],
                    'mid' => $sheet[$i][3],
                    'ka' => $sheet[$i][4],
                    'jenis_page' => "ramp"
                ];

                $data2[] = [
                    'uraian' => $sheet[$i][5],
                    'luas_lahan' => $sheet[$i][6],
                    'luas_bangunan' => $sheet[$i][7],
                    'nilai_lahan' => $sheet[$i][8],
                    'nilai_bangunan' => $sheet[$i][9],
                    'jenis_page' => "ramp"
                ];
            }

            unlink($file);

            for ($i = 0; $i < count($jenis_sarana); $i++) {
                $data_jenis_sarana = [
                    'Jenis_Sarana' => $jenis_sarana[$i]
                ];

                if ($jenis_sarana[$i] != null) {
                    $this->db->insert('jenissarana', $data_jenis_sarana);
                }
            }

            for ($i = 0; $i < count($data); $i++) {
                $get_jenis = $this->db->get_where('jenissarana', ['Jenis_Sarana' => $data_penahan[$i]['jenis_sarana']])->row_array();
                $data1 = [
                    'Jenis_Sarana' => $get_jenis['idJenisSarana'],
                    'Uraian' => $data[$i]['uraian'],
                    'KI' => $data[$i]['ki'],
                    'MID' => $data[$i]['mid'],
                    'KA' => $data[$i]['ka'],
                    'jenis_page' => "ramp"
                ];
                if ($data[$i]['jenis_sarana'] != null) {
                    $this->db->insert('data5_publikfacility', $data1);
                }
            }

            for ($i = 0; $i < count($data2); $i++) {

                $data1 = [
                    'Uraian' => $data2[$i]['uraian'],
                    'Luas_Lahan' => $data2[$i]['luas_lahan'],
                    'Luas_Bangunan' => $data2[$i]['luas_bangunan'],
                    'Nilai_Lahan' => $data2[$i]['nilai_lahan'],
                    'Nilai_Bangunan' => $data2[$i]['nilai_bangunan'],
                    'jenis_page' => "ramp"
                ];
                if ($data2[$i]['uraian'] != null) {
                    $this->db->insert('data5_bangunan', $data1);
                }
            }

            $this->session->set_flashdata('flash', 'Import Excel Berhasil.');
            redirect('datateknik/form');
        }
    }

    public function add_datalainnya()
    {
        include APPPATH . 'third_party/PHPExcel/PHPExcel.php';

        $config['upload_path']        = './assets/excel/';
        $config['allowed_types'] = 'xlsx|xls';
        $config['max_size'] = '10000';
        $config['encrypt_name'] = true;

        $this->load->library('upload', $config);

        if (!$this->upload->do_upload('datalainnya')) {

            //upload gagal
            $this->session->set_flashdata('error', 'Proses Import Excel gagal!');
            //redirect halaman
            redirect('datateknik/form');
        } else {
            $data_upload = $this->upload->data();

            $file = $this->upload->data('full_path');

            $excelreader     = new PHPExcel_Reader_Excel2007();
            $loadexcel         = $excelreader->load($file); // Load file yang telah diupload ke folder excel
            $sheet             = $loadexcel->getActiveSheet()->toArray();
            $data = [];
            for ($i = 1; $i < count($sheet); $i++) {
                $data[] = [
                    'uraian' => $sheet[$i][0],
                    'tanggal_pemanfaatan' => $sheet[$i][1],
                    'nilai' => $sheet[$i][2],
                ];
            }

            unlink($file);

            for ($i = 0; $i < count($data); $i++) {

                $data1 = [
                    'Uraian' => $data[$i]['uraian'],
                    'Tanggal_Pemanfaatan' => $data[$i]['tanggal_pemanfaatan'],
                    'Nilai' => $data[$i]['nilai'],
                ];
                if ($data[$i]['uraian'] != null) {
                    $this->db->insert('datalainnya', $data1);
                }
            }

            $this->session->set_flashdata('flash', 'Import Excel Berhasil.');
            redirect('datateknik/form');
        }
    }

    public function lintasan_harian()
    {
        include APPPATH . 'third_party/PHPExcel/PHPExcel.php';

        $config['upload_path']        = './assets/excel/';
        $config['allowed_types'] = 'xlsx|xls';
        $config['max_size'] = '10000';
        $config['encrypt_name'] = true;

        $this->load->library('upload', $config);

        if (!$this->upload->do_upload('lintasan_harian')) {

            //upload gagal
            $this->session->set_flashdata('error', 'Proses Import Excel gagal!');
            //redirect halaman
            redirect('datateknik/form');
        } else {
            $data_upload = $this->upload->data();

            $file = $this->upload->data('full_path');

            $excelreader     = new PHPExcel_Reader_Excel2007();
            $loadexcel         = $excelreader->load($file); // Load file yang telah diupload ke folder excel
            $sheet             = $loadexcel->getActiveSheet()->toArray();
            $data = [];
            for ($i = 1; $i < count($sheet); $i++) {
                $data[] = [
                    'golongan' => $sheet[$i][0],
                    'lhr_ki' => $sheet[$i][1],
                    'tarif_ki' => $sheet[$i][2],
                    'lhr_ka' => $sheet[$i][3],
                    'tarif_ka' => $sheet[$i][4],
                    'jenis_page' => "ramp"
                ];
            }

            unlink($file);

            for ($i = 0; $i < count($data); $i++) {

                $data1 = [
                    'Golongan' => $data[$i]['golongan'],
                    'LHR_KI' => $data[$i]['lhr_ki'],
                    'Tarif_KI' => $data[$i]['tarif_ki'],
                    'LHR_KA' => $data[$i]['lhr_ka'],
                    'Tarif_KA' => $data[$i]['tarif_ka'],
                    'jenis_page' => "ramp"
                ];
                if ($data[$i]['golongan'] != null) {
                    $this->db->insert('lintasharian', $data1);
                }
            }

            $this->session->set_flashdata('flash', 'Import Excel Berhasil.');
            redirect('datateknik/form');
        }
    }

    public function data_geometrik()
    {
        include APPPATH . 'third_party/PHPExcel/PHPExcel.php';

        $config['upload_path']        = './assets/excel/';
        $config['allowed_types'] = 'xlsx|xls';
        $config['max_size'] = '10000';
        $config['encrypt_name'] = true;

        $this->load->library('upload', $config);

        if (!$this->upload->do_upload('data_geometrik')) {

            //upload gagal
            $this->session->set_flashdata('error', 'Proses Import Excel gagal!');
            //redirect halaman
            redirect('datateknik/form');
        } else {
            $data_upload = $this->upload->data();

            $file = $this->upload->data('full_path');

            $excelreader     = new PHPExcel_Reader_Excel2007();
            $loadexcel         = $excelreader->load($file); // Load file yang telah diupload ke folder excel
            $sheet             = $loadexcel->getActiveSheet()->toArray();
            $data = [];
            for ($i = 1; $i < count($sheet); $i++) {
                $data[] = [
                    'uraian' => $sheet[$i][0],
                    'tahun' => $sheet[$i][1],
                ];
            }

            unlink($file);

            for ($i = 0; $i < count($data); $i++) {

                $data1 = [
                    'Uraian' => $data[$i]['uraian'],
                    'Tahun' => $data[$i]['tahun'],
                ];
                if ($data[$i]['uraian'] != null) {
                    $this->db->insert('petageometrik', $data1);
                }
            }

            $this->session->set_flashdata('flash', 'Import Excel Berhasil.');
            redirect('datateknik/form');
        }
    }
    public function lingkungan_jalan()
    {
        include APPPATH . 'third_party/PHPExcel/PHPExcel.php';

        $config['upload_path']        = './assets/excel/';
        $config['allowed_types'] = 'xlsx|xls';
        $config['max_size'] = '10000';
        $config['encrypt_name'] = true;

        $this->load->library('upload', $config);

        if (!$this->upload->do_upload('lingkungan_jalan')) {

            //upload gagal
            $this->session->set_flashdata('error', 'Proses Import Excel gagal!');
            //redirect halaman
            redirect('datateknik/form');
        } else {
            $data_upload = $this->upload->data();

            $file = $this->upload->data('full_path');

            $excelreader     = new PHPExcel_Reader_Excel2007();
            $loadexcel         = $excelreader->load($file); // Load file yang telah diupload ke folder excel
            $sheet             = $loadexcel->getActiveSheet()->toArray();
            $data = [];
            for ($i = 1; $i < count($sheet); $i++) {
                $data[] = [
                    'jenis_lingkungan' => $sheet[$i][0],
                    'uraian' => $sheet[$i][1],
                    'tahun' => $sheet[$i][2],
                ];
            }

            unlink($file);

            for ($i = 0; $i < count($data); $i++) {

                $data1 = [
                    'Jenis_Lingkungan' => $data[$i]['jenis_lingkungan'],
                    'Uraian' => $data[$i]['uraian'],
                    'Tahun' => $data[$i]['tahun'],
                    'jenis_page' => "ramp"
                ];
                if ($data[$i]['jenis_lingkungan'] != null) {
                    if ($data[$i]['jenis_lingkungan'] == "TERRAIN" || $data[$i]['jenis_lingkungan'] == "TATA GUNA LAHAN") {
                        $this->db->insert('datalingkunganjalan1', $data1);
                    } else {
                        $this->db->insert('datalingkunganjalan2', $data1);
                    }
                }
            }

            $this->session->set_flashdata('flash', 'Import Excel Berhasil.');
            redirect('datateknik/form');
        }
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

    public function get_json_kelurahan()
    {
        $searchTerm = $this->input->post('searchTerm');
        $kecamatan = $this->input->post('kecamatan');

        $this->db->select('id, kelurahan, kecamatan, kabupaten, provinsi');
        $this->db->from('kecamatan');
        $this->db->like("kelurahan", $searchTerm);
        if ($kecamatan != "") {
            $this->db->where(['kecamatan' => $kecamatan]);
        }
        $this->db->group_by('kelurahan');
        $users = $this->db->get()->result_array();

        $data = array();
        foreach ($users as $user) {
            $data[] = array("id" => $user['kelurahan'], "text" => $user['kelurahan']);
        }

        echo json_encode($data);
    }

    public function get_json_kecamatan()
    {
        $searchTerm = $this->input->post('searchTerm');
        $kabupaten = $this->input->post('kabupaten');

        $this->db->select('id, kelurahan, kecamatan, kabupaten, provinsi');
        $this->db->from('kecamatan');
        $this->db->like("kecamatan", $searchTerm);
        if ($kabupaten != "") {
            $this->db->where(['kabupaten' => $kabupaten]);
        }
        $this->db->group_by('kecamatan');
        $users = $this->db->get()->result_array();

        $data = array();
        foreach ($users as $user) {
            $data[] = array("id" => $user['kecamatan'], "text" => $user['kecamatan']);
        }

        echo json_encode($data);
    }

    public function get_json_kabupaten()
    {
        $searchTerm = $this->input->post('searchTerm');
        $provinsi = $this->input->post('provinsi');

        $this->db->select('id, kelurahan, kecamatan, kabupaten, provinsi');
        $this->db->from('kecamatan');
        $this->db->like("kabupaten", $searchTerm);
        if ($provinsi != "") {
            $this->db->where(['provinsi' => $provinsi]);
        }
        $this->db->group_by('kabupaten');
        $users = $this->db->get()->result_array();

        $data = array();
        foreach ($users as $user) {
            $data[] = array("id" => $user['kabupaten'], "text" => $user['kabupaten']);
        }

        echo json_encode($data);
    }

    public function get_json_provinsi()
    {
        $searchTerm = $this->input->post('searchTerm');

        $this->db->select('id, kelurahan, kecamatan, kabupaten, provinsi');
        $this->db->from('kecamatan');
        $this->db->like("provinsi", $searchTerm);
        $this->db->group_by('provinsi');
        $users = $this->db->get()->result_array();

        $data = array();
        foreach ($users as $user) {
            $data[] = array("id" => $user['provinsi'], "text" => $user['provinsi']);
        }

        echo json_encode($data);
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
            'jenis_page' => "ramp",
        ];

        $this->db->insert('identifikasi', $data);
        $data = toast('success', 'Selamat data berhasil tersimpan.!');
        echo json_encode($data);
    }

    public function batasan()
    {

        $data['judul'] = "Data Batasan";
        $this->load->view('templates/header', $data);
        $this->load->view('templates/navbar');
        $this->load->view('templates/sidebar');
        $this->load->view('admin/batasan_data', $data);
        $this->load->view('templates/footer');
    }

    public function upload_excel_batasan()
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
                }
                $sheet = $loadexcel->getSheet($i)->toArray();
                for ($j = $l; $j < count($sheet); $j++) {
                    if ($i == 0) {
                        if ($sheet[$j][0] != null) {
                            $data = [
                                'data_spasial' => $sheet[$j][0],
                                'kode_atribut' => $sheet[$j][1],
                                'nama_atribut_batasan' => $sheet[$j][2],
                                'nama_spasial_batasan' => $sheet[$j][3],
                                'data_teknik' => $sheet[$j][4],
                                'jenis_page' => "ramp",
                            ];

                            $this->db->insert('batasan_data', $data);
                        }
                    }
                }
            }

            unlink($file);

            $this->session->set_flashdata('flash', 'Import Excel Berhasil.');
            redirect('jalantol/batasan');
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

        $data['judul'] = "PDF Data Teknik";

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

