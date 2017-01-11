<?php

Class Users extends CI_Controller {

    public function __construct() {
        parent::__construct();
        if (!$this->session->userdata('is_login')) {
            redirect("/administrator/login");
        }
    }

    public function index() {
        $data = array(
            "title" => "Users",
            "navigation_active" => "users",
            "container" => "/administrator/users/index"
        );
        $this->load->view("/administrator/app", $data);
    }

    public function show($id) {
        $data = array(
            "title" => "Users",
            "navigation_active" => "users",
            "container" => "/administrator/users/show"
        );
        $this->load->view("/administrator/app", $data);
    }

    public function add() {
        $data = array(
            "title" => "Users",
            "navigation_active" => "users",
            "container" => "/administrator/users/add"
        );
        $this->load->view("/administrator/app", $data);
    }

    public function action_to_create() {
        
    }

    public function edit($id) {
        $data = array(
            "title" => "Users",
            "navigation_active" => "users",
            "container" => "/administrator/users/edit"
        );
        $this->load->view("/administrator/app", $data);
    }

    public function action_to_update($id) {
        
    }

    public function delete($id) {
        
    }

}