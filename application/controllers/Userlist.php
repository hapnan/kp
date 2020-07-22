<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Userlist extends CI_Controller {

	function __construct()
	{
		parent::__construct();
		$this->load->helper('url');
		$this->load->model('server','ser',true);
		
	}

	public function index()
	{
		if (!isset($_SESSION)) {
			redirect('login','refresh');
		} else {
			$data['user'] = $this->db->get_where('users', ['id' => $this->session->userdata('id')])->row_array();
			$this->load->view('console/userlist', $data);
		}
		
		
		
	}
	public function ambildata()
	{
		$search = $this->input->post('search', true);

		if($search != null){
			$databaru = $this->ser->getuserlist($search)->result();
				
			echo json_encode($databaru);
		}else{
			$databaru = $this->ser->getuserlist($search)->result();
			echo json_encode($databaru);
		}
	}
	public function getdatabyid()
	{
		$data =  $this->input->post('id');
		
		$datauser = $this->ser->getuserlistid($data)->result();
			

		echo json_encode($datauser);
	}

	public function geteditor()
	{

		$data = 2;

		$datauser = $this->ser->geteditor($data)->result();

		echo json_encode($datauser);
	}
	public function updateuser($data)
	{
		# code...
	}
}
