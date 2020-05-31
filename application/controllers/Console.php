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
			$id = null;
			$data = $this->jur->getjurnal($id)->result();

			echo json_encode($data);
			
		} else if ($this->session->userdata('role')==2) {
			$id = $this->session->userdata('id');
			$data = $this->jur->getjurnal($id)->result();

			echo json_encode($data);
		}else if($this->session->userdata('role')==3){
			$id = $this->session->userdata('id');
			$data = $this->jur->getjurnal($id)->result();

			echo json_encode($data);
		}
		
	}
	
	public function dataproceding()
	{	
		if ($this->session->userdata('role')==1) {
			$id = null;
			$data = $this->jur->getproceding($id)->result();

			echo json_encode($data);
			
		} else if ($this->session->userdata('role')==2) {
			$id = $this->session->userdata('id');
			$data = $this->jur->getjurnal($id)->result();

			echo json_encode($data);
		}else if($this->session->userdata('role')==3){
			$id = $this->session->userdata('id');
			$data = $this->jur->getjurnal($id)->result();

			echo json_encode($data);
		}
		
	}
	
	public function details($id)
	{

		
		$data = $this->jur->getjurnal($id)->row_array();
		
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

		$databaru['user']= [
			'id' => $data['id'],
			'jdl_makalah' => $data['jdl_makalah'],
			'nm_forum' => $data['nm_forum'],
			'tgk_forum_ilm' => $data['tgk_forum_ilm'],
			'thn_pelaksanaan' => $data['thn_pelaksanaan'],
			'url_jurnal' => $data['url_jurnal'],
			'ins_penyelenggara' => $data['ins_penyelenggara'],
			'wkt_dari' => $data['wkt_dari'],
			'wkt_sampai' => $data['wkt_sampai'],
			'tmp_pelaksanaan' => $data['tmp_pelaksanaan'],
			'sts_pemakaian' => $data['sts_pemakaian'],
			'nm_dsn' => $data['nm_dsn'],
			'nidn' => $data['nidn'],
			'prodi' => $data['prodi'],
			'editor' => $editor['nama_user']
		];
		$this->load->view('console/detail', $databaru);

	}

	

}
