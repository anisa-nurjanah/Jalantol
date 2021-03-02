<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ModelSpasial extends CI_Model{
    function get(){
        $data = $this->db->get('m_kecamatan');
        return $data;
    }
}