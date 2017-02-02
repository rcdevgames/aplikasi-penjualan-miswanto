<?php

Class Produk_model extends CI_Model {

    public function __construct() {
        parent::__construct();
    }

    public function all() {
        $this->db->join('katalog', 'id_katalog=katalog_id');
        $data = $this->db->get('produk');
        return $data->result_array();
    }

    public function find($id) {
        $this->db->where('id_produk', 
            $this->encrypt->decode(
                urldecode(
                    str_replace('_', '%', $id)
                )
            ));
        $this->db->join('katalog', 'id_katalog=katalog_id');
        $data = $this->db->get('produk');
        return $data->row_array();
    }

    public function where($data = array()) {

        foreach ($data as $k => $v) {
            $this->db->where($k, $v);
        }

        $this->db->join('katalog', 'id_katalog=katalog_id');
        $data = $this->db->get('produk');
        return $data->result_array();
    }

    public function create($data = array()) {
        $this->db->insert('produk', $data);
    }

    public function update($id, $data = array()) {
        $this->db->where('id_produk', 
            $this->encrypt->decode(
                urldecode(
                    str_replace('_', '%', $id)
                )
            ));
        $this->db->update('produk', $data);
    }

    public function delete() {
        $this->db->where('id_produk', 
            $this->encrypt->decode(
                urldecode(
                    str_replace('_', '%', $id)
                )
            ));
        $this->db->delete('produk');
    }

}