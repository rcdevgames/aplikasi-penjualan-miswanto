<?php

Class Orderkonfirm_model extends CI_Model {

    public function __construct() {
        parent::__construct();
    }

    public function all() {
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
        $data = $this->db->get('order');
        return $data->row_array();
    }

    public function count_unread() {
        $this->db->select('COUNT(*) AS total');
        $this->db->where('terbaca', 0);
        $data = $this->db->get('orderkonfirm');
        return $data;
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