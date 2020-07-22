<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Register extends CI_Controller {

	function __construct()
	{
		parent::__construct();
		$this->load->helper('url');
		$this->load->library('form_validation');
		$this->load->model('server');
	}

	public function index()
	{
	
			$data =[
				'nama_user' => htmlspecialchars($this->input->post('nama', true)),
				'alias' => htmlspecialchars($this->input->post('alias', true)),
				'username'=> htmlspecialchars($this->input->post('username', true)),
				'email'=> htmlspecialchars($this->input->post('email', true)),
				'password'=> password_hash($this->input->post('password'),PASSWORD_DEFAULT),
				'level' => $this->input->post('select', true)
			];

			$this->server->register($data);
	}
}
