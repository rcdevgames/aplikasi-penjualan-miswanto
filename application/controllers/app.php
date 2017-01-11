<?php

Class App extends CI_Controller {

	public function __construct() {
		parent::__construct();
	}

	public function index() {
		$data = array(
			"title" => "Home",
			"container" => "pages/index"
		);
		$this->load->view('layouts/app', $data);
	}

	public function categories($katalog) {
		$data = array(
			"title" => $katalog,
			"container" => "pages/categories"
		);
		$this->load->view('layouts/app', $data);
	}

	public function product($katalog, $produk) {
		$data = array(
			"title" => $produk,
			"container" => "pages/product"
		);
		$this->load->view('layouts/app', $data);
	}

	public function login() {
		$data = array(
			"title" => "Login",
			"container" => "pages/login"
		);
		$this->load->view('layouts/app', $data);
	}
	
	public function action_to_login() {

	}

	public function register() {
		$data = array(
			"title" => "Register",
			"container" => "pages/register"
		);
		$this->load->view('layouts/app', $data);
	}

	public function action_to_register() {

	}

	public function shopping_cart() {
		$data = array(
			"title" => "Shopping Cart",
			"container" => "pages/shopping_cart"
		);
		$this->load->view('layouts/app', $data);
	}

	public function action_shopping_cart_push() {

	}

	public function checkout() {
		$data = array(
			"title" => "Checkout",
			"container" => "pages/checkout"
		);
		$this->load->view('layouts/app', $data);
	}

	public function action_to_checkout() {

	}

	public function checkout_billing_details() {
		$data = array(
			"title" => "Checkout",
			"container" => "pages/checkout_billing_details"
		);
		$this->load->view('layouts/app', $data);
	}

	public function action_to_checkout_billing_details() {

	}

	public function checkout_delivery_details() {
		$data = array(
			"title" => "Checkout",
			"container" => "pages/checkout_delivery_details"
		);
		$this->load->view('layouts/app', $data);
	}

	public function action_checkout_delivery_details() {

	}

	public function checkout_order_details() {
		$data = array(
			"title" => "Checkout",
			"container" => "pages/checkout_order_details"
		);
		$this->load->view('layouts/app', $data);
	}

	public function action_checkout_order_save() {

	}

	public function action_checkout_order_update() {

	}

	public function action_checkout_order_remove() {

	}

	public function my_account() {
		$data = array(
			"title" => "My Account",
			"container" => "pages/my_account"
		);
		$this->load->view('layouts/app', $data);
	}

	public function order_list() {
		$data = array(
			"title" => "Order List",
			"container" => "pages/order_list"
		);
		$this->load->view('layouts/app', $data);
	}

	public function edit_account() {
		$data = array(
			"title" => "Edit Account",
			"container" => "pages/edit_account"
		);
		$this->load->view('layouts/app', $data);
	}

	public function action_to_edit_account() {

	}

	public function change_password() {
		$data = array(
			"title" => "Change Password",
			"container" => "pages/change_password"
		);
		$this->load->view('layouts/app', $data);
	}

	public function action_to_change_password() {

	}

	public function logout() {
		session_destroy();
		redirect("/login");
	}

}
