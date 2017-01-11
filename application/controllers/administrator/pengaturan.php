<?php

Class Pengaturan extends CI_Controller {

    public function __construct() {
        parent::__construct();
        if (!$this->session->userdata('is_login')) {
            redirect("/administrator/login");
        }
    }

    public function index() {
        $data = array(
            "title" => "Pengaturan",
            "navigation_active" => "pengaturan",
            "container" => "/administrator/pengaturan/index"
        );
        $this->load->view("/administrator/app", $data);
    }    

    public function action_to_update($id) {
        
    }

}