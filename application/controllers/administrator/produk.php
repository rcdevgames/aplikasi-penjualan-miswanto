<?php

Class Produk extends CI_Controller {

    public function __construct() {
        parent::__construct();
        if (!$this->session->userdata('is_login')) {
            redirect("/administrator/login");
        }
    }

    public function index() {
        $data = array(
            "title" => "Produk",
            "navigation_active" => "produk",
            "container" => "/administrator/produk/index"
        );
        $this->load->view("/administrator/app", $data);
    }

    public function show($id) {
        $data = array(
            "title" => "Produk",
            "navigation_active" => "produk",
            "container" => "/administrator/produk/show"
        );
        $this->load->view("/administrator/app", $data);
    }

    public function add() {
        $data = array(
            "title" => "Produk",
            "navigation_active" => "produk",
            "container" => "/administrator/produk/add"
        );
        $this->load->view("/administrator/app", $data);
    }

    public function action_to_create() {
        
    }

    public function edit($id) {
        $data = array(
            "title" => "Produk",
            "navigation_active" => "produk",
            "container" => "/administrator/produk/edit"
        );
        $this->load->view("/administrator/app", $data);
    }

    public function action_to_update($id) {
        
    }

    public function delete($id) {
        
    }

}