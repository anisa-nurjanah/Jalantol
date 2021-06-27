<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ModelTeknik extends CI_Model{
    function get_segmen_seksi(){
        $segmen_seksi = $this->db->get('segmen_seksi');
        return $segmen_seksi;
    }
    function get_ident(){
        $ident = $this->db->get('ident');
        return $ident;
    }
    function get_data1(){
        $data1 = $this->db->get('data1');
        return $data1;
    }
    function import_data($teknik1){
        $jumlah = count($teknik1);
        if($jumlah > 0){
            $this->db->replace('data1',$teknik1);
        }
    }
    function get_data2_bahujalan(){
        $data2_bahujalan = $this->db->get('data2_bahujalan');
        return $data2_bahujalan;
    }
    function get_data2_lapis(){
        $data2_lapis = $this->db->get('data2_lapis');
        return $data2_lapis;
    }
    function import_data2($teknik2_lapis){
        $jumlah = count($teknik2_lapis);
        if($jumlah > 0){
            $this->db->replace('data2_lapis',$teknik2_lapis);
            $this->db->replace('data2_lapis',$teknik2_lapis);
        }
    }
    function get_data2_median(){
        $data2_median = $this->db->get('data2_median');
        return $data2_median;
    }
    function get_data3_gorong(){
        $data3_gorong = $this->db->get('data3_gorong');
        return $data3_gorong;
    }
    function get_data3_penahantanah(){
        $data3_penahantanah = $this->db->get('data3_penahantanah');
        return $data3_penahantanah;
    }
    function get_data3_saluran(){
        $data3_saluran = $this->db->get('data3_saluran');
        return $data3_saluran;
    }
    function get_data4(){
        $data4 = $this->db->get('data4');
        return $data4;
    }
    function get_data5_bangunan(){
        $data5_bangunan = $this->db->get('data5_bangunan');
        return $data5_bangunan;
    }
    function get_data5_publikfacility(){
        $data5_publikfacility = $this->db->get('data5_publikfacility');
        return $data5_publikfacility;
    }
    function get_datalainnya(){
        $datalainnya = $this->db->get('datalainnya');
        return $datalainnya;
    }
    function get_lintasharian(){
        $lintasharian = $this->db->get('lintasharian');
        return $lintasharian;
    }
    function get_petageometrik(){
        $petageometrik = $this->db->get('petageometrik');
        return $petageometrik;
    }
    function get_datalingkunganjalan1(){
        $datalingkunganjalan1 = $this->db->get('datalingkunganjalan1');
        return $datalingkunganjalan1;
    }
    function get_datalingkunganjalan2(){
        $datalingkunganjalan2 = $this->db->get('datalingkunganjalan2');
        return $datalingkunganjalan2;
    }
}
?>