<?php

Class Katalog extends CI_Controller {

    public function __construct() {
        parent::__construct();
        if (!$this->session->userdata('is_login')) {
            redirect("/administrator/login");
        }
    }

    public function index() {
        $data = array(
            "title" => "Katalog",
            "navigation_active" => "katalog",
            "container" => "/administrator/katalog/index"
        );
        $this->load->view("/administrator/app", $data);
    }

    public function action_to_create() {

    }

    public function edit($id) {
        $data = array(
            "title" => "Katalog",
            "navigation_active" => "katalog",
            "container" => "/administrator/katalog/edit"
        );
        $this->load->view("/administrator/app", $data);
    }

    public function action_to_update($id) {

    }

    public function delete($id) {
        
    }

}