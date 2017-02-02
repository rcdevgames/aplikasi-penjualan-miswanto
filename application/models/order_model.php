<?php

Class Order_model extends CI_Model {

    public function __construct() {
        parent::__construct();
    }

    public function all() {
        $this->db->join('pelanggan', 'id_pelanggan=pembeli_id');
        $data = $this->db->get('order');
        return $data->result_array();
    }

    public function find($id) {
        $this->db->where('id_order', 
            $this->encrypt->decode(
                urldecode(
                    str_replace('_', '%', $id)
                )
            ));
        $this->db->join('pelanggan', 'id_pelanggan=pembeli_id');
        $data = $this->db->get('order');
        return $data->row_array();
    }

    public function create($data = array()) {
        $this->db->insert('order', $data);
    }

    public function update($id, $data = array()) {
        $this->db->where('id_order', 
            $this->encrypt->decode(
                urldecode(
                    str_replace('_', '%', $id)
                )
            ));
        $this->db->update('order', $data);
    }

    public function delete($id) {
        $this->db->where('id_order', 
            $this->encrypt->decode(
                urldecode(
                    str_replace('_', '%', $id)
                )
            ));
        $this->db->delete('order');
    }

}