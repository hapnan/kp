<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Console extends CI_Controller {

	function __construct()
	{
		parent::__construct();
		$this->load->model('server','ser',true);
		$this->load->model('jurnal', 'jur', true);
	}

	public function index()
	{
		if ($this->session->userdata('logged_in')==true) 
		{
			
			$data['user'] = [
				'id' => $this->session->userdata('id'),
				'nama' => $this->session->userdata('nama'),
				'email' => $this->session->userdata('email'),
				'role'=> "User",
				'level' => $this->session->userdata('role')
			];
			
			$this->load->view('console/nav');
			$this->load->view('console/consoleuser', $data);
			$this->load->view('console/footer');
			
		} else {
			redirect('login');
		}
		
		
	}

	public function admin()
	{
		if ($this->session->userdata('logged_in')==true) {
			
			$data['user'] = [
				'id' => $this->session->userdata('id'),
				'nama' => $this->session->userdata('nama'),
				'email' => $this->session->userdata('email'),
				'role' => "Admin",
				'level' => $this->session->userdata('role')
			];
			
			
			$this->load->view('console/nav');
			$this->load->view('console/consoleadmin', $data);
			$this->load->view('console/footer');
		} else {
			redirect('login');
		}
		
	}
	public function editor()
	{
		if ($this->session->userdata('logged_in')) {
			
			$data['user'] = [
				'id' => $this->session->userdata('id'),
				'nama' => $this->session->userdata('nama'),
				'email' => $this->session->userdata('email'),
				'role' => "Editor",
				'level' => $this->session->userdata('role')
			];
			
			
			$this->load->view('console/nav');
			$this->load->view('console/consoleeditor', $data);
			$this->load->view('console/footer');
			
		} else {
			redirect('login');
		}
	}
	public function viewjurnal()
	{
		if ($this->session->userdata('role')==1) {
			$this->load->view('dataadminj');
		} else if($this->session->userdata('role')==2){
			$this->load->view('dataeditor');
		}else if ($this->session->userdata('role')==3) {
			$this->load->view('datauserj');
		}
		
	}
	public function dataadminj()
	{
		
		$this->load->view('console/dataadminj');
	}

	public function datajournal()
	{	
		if ($this->session->userdata('role')==1) {
			$data = [
				'id' => $this->session->userdata('id'),
				'role' => $this->session->userdata('role'),

			];
			$dataj = $this->jur->getjurnal($data)->result();

			echo json_encode($dataj);
			
		} else if ($this->session->userdata('role')==2) {
			$data = [
				'id' => $this->session->userdata('id'),
				'role' => $this->session->userdata('role'),

			];
			
			$dataj = $this->jur->getjurnal($data)->result();

			echo json_encode($dataj);
		}else if($this->session->userdata('role')==3){
			$data = [
				'id' => $this->session->userdata('id'),
				'role' => $this->session->userdata('role'),

			];
			
			$dataj = $this->jur->getjurnal($data)->result();

			echo json_encode($dataj);
		}
		
	}
	
	public function dataproceding()
	{	
		if ($this->session->userdata('role')==1) {
			$data = [
				'id' => $this->session->userdata('id'),
				'role' => $this->session->userdata('role'),

			];
			$datap = $this->jur->getproceding($data)->result();

			echo json_encode($datap);
			
		} else if ($this->session->userdata('role')==2) {
			$data = [
				'id' => $this->session->userdata('id'),
				'role' => $this->session->userdata('role'),

			];
			
			$datap = $this->jur->getproceding($data)->result();

			echo json_encode($datap);
		}else if($this->session->userdata('role')==3){
			$data = [
				'id' => $this->session->userdata('id'),
				'role' => $this->session->userdata('role'),

			];
			
			$datap = $this->jur->getproceding($data)->result();

			echo json_encode($datap);
		}
		
	}
	
	public function details($id)
	{

		
		$data = $this->jur->getjurnalbyid($id)->row_array();
		$role = $this->session->userdata('level');
		$editor = null;
		
		if ($data['editor']==0) {
			$editor = null;
		}else if ($data['editor']!=0) {
			$editor = $this->ser->getuser($data['editor']);
		}
		$search = 2;
		$dataeditor = $this->ser->geteditor($search)->row_array();
		
		$databaru['editor'] = [
			'id' => $dataeditor['id'],
			'nama' => $dataeditor['nama_user']
		];
		if($role==1){

		}else if($role == 2){

		}
		$databaru['user']= [
			'id' => $data['id'],
			'namajurnal' => $data['namajurnal'],
			'jdl_publikasi' => $data['jdl_publikasi'],
			'jns_publikasi' => $data['jns_publikasi'],
			'thn' => $data['thn'],
			'issn' => $data['issn'],
			'url' => $data['url'],
			'volume' => $data['volume'],
			'nomor' => $data['nomor'],
			'halaman' => $data['halaman'],
			'indexscopus' => $data['indexscopus'],
			'penulis' => $data['penulis'],
			'namadosen' => $data['namadosen'],
			'nidn' => $data['nidn'],
			'editor' => $editor['nama_user']
		];
		$this->load->view('console/detail', $databaru);

	}

	

}
