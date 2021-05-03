<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ModelDashboard extends CI_Model{
    function get(){
        $data = $this->db->get('sheet1');
        return $data;
    }
}