<?php

Class Pelanggan extends CI_Controller {

    public function __construct() {
        parent::__construct();
        if (!$this->session->userdata('is_login')) {
            redirect("/administrator/login");
        }
    }

    public function index() {
        $data = array(
            "title" => "Pelanggan",
            "navigation_active" => "pelanggan",
            "container" => "/administrator/pelanggan/index"
        );
        $this->load->view("/administrator/app", $data);
    }

    public function show($id) {
        $data = array(
            "title" => "Pelanggan",
            "navigation_active" => "pelanggan",
            "container" => "/administrator/pelanggan/show"
        );
        $this->load->view("/administrator/app", $data);
    }

    public function delete($id) {
        
    }

}