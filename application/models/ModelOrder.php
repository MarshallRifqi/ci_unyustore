<?php
defined('BASEPATH') or exit('No direct script access allowed');

class ModelOrder extends CI_Model{

    public function inputData($data=null)
    {
        $this->db->insert('pembayaran', $data);
    }
    public function get_data($where = NULL){
        return $this->db->get_where('pembayaran', $where);
    }
}
