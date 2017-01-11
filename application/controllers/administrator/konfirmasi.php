<?php

Class Konfirmasi extends CI_Controller {

    public function __construct() {
        parent::__construct();
        if (!$this->session->userdata('is_login')) {
            redirect("/administrator/login");
        }
    }

    public function index() {
        $data = array(
            "title" => "Konfirmasi",
            "navigation_active" => "konfirmasi",
            "container" => "/administrator/konfirmasi/index"
        );
        $this->load->view("/administrator/app", $data);
    }

    public function show($id) {
        $data = array(
            "title" => "Order",
            "navigation_active" => "order",
            "container" => "/administrator/konfirmasi/show"
        );
        $this->load->view("/administrator/app", $data);
    }

    public function action_to_update($id) {
        
    }

    public function delete($id) {
        
    }

}