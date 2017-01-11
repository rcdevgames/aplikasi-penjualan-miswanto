<?php

Class Login extends CI_Controller {

    public function __construct() {
        parent::__construct();
        if ($this->session->userdata('is_login')) {
            redirect('/administrator/index');
        }
    }

    public function index() {
        if (isset($_POST['login'])) {
            $this->action_to_login();
        }
        $this->load->view("/administrator/login");       
    }

    public function action_to_login() {
        $data_session = array(
            "is_login" => true
        );
        $this->session->set_userdata($data_session);
        redirect('/administrator/index');
    }

}