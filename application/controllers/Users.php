<?php
class Users extends CI_controller {
	function __construct() {
        parent::__construct();
    }

	function index()
	{

		$this->load->model('User_model');
		$this->User_model->index();
		
	}

	function create_user()
	{
		//$this->load->view('user_create');
		$this->load->model('User_model');
		$this->User_model->create_user();
	}

}

