<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Console extends CI_Controller {

	function __construct()
	{
		parent::__construct();
		$this->load->model('server','ser',true);
		$this->load->model('jurnal', 'jur', true);
		$this->load->model('proceding','pcd', true);
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

	function get_ajaxj() {
        $list = $this->jur->get_datatables();
        $data = array();
		$no = @$_POST['start'];
		$button = "<?php echo base_url('')';'?>console/details/";
        foreach ($list as $item) {
			
            $no++;
            $row = [
				'no' => $no,
				'namajurnal' => $item['namajurnal'].'.',
				'jdl_publikasi' => $item['jdl_publikasi'],
				'jns_publikasi' => $item['jns_publikasi'],
				'thn' => $item['thn'],
				'issn' => $item['issn'],
				'linkjurnal' => '<a href="'.$item['url'].'" class="btn btn-link">link jurnal</a>',
				'details' => '<a href="details/'.$item['id'].'" class="btn btn-link">detail</a>',
				'action' => '<button class="btn btn-warning editor btn-block" id="editor" value="'.$item['id'].'"  data-toggle="modal" data-target="#modaleditor">Assign to Editors</button>
							<span></span><button class="btn btn-success editor mt-1" id="terima" value="'.$item['id'].'" data-toggle="modal" data-target="#modalterima">accept</button>
							<button class="btn btn-danger float-right editor mt-1" id="tolak" value="'.$item['id'].'" data-toggle="modal" data-target="#modaltolak">refuse</button>',
			];
			$data[] = $row;
		}
		
		
        $output = array(
                    "draw" => intval(@$_POST['draw']),
                    "recordsTotal" => $this->jur->count_all(),
                    "recordsFiltered" => $this->jur->count_filtered(),
                    "data" => $data,
                );
        // output to json format
        echo json_encode($output);
	}
	
	function get_ajaxp() {
        $list = $this->pcd->get_datatables();
        $data = array();
		$no = @$_POST['start'];
		$button = "<?php echo base_url('')';'?>console/details/";
        foreach ($list as $item) {
			
            $no++;
            $row = [
				'no' => $no,
				'nm_dsn' => $item['nm_dsn'].'.',
				'jdl_makalah' => $item['jdl_makalah'],
				'nm_forum' => $item['nm_forum'],
				'tgk_forum_ilm' => $item['tgk_forum_ilm'],
				'thn_pelaksanaan' => $item['thn_pelaksanaan'],
				'linkjurnal' => '<a href="'.$item['url_jurnal'].'" class="btn btn-link">link jurnal</a>',
				'details' => '<a href="details/'.$item['id'].'" class="btn btn-link">detail</a>',
				'action' => '<button class="btn btn-warning editor btn-block" id="editor" value="'.$item['id'].'"  data-toggle="modal" data-target="#modaleditor">Assign to Editors</button>
							<span></span><button class="btn btn-success editor mt-1" id="terima" value="'.$item['id'].'" data-toggle="modal" data-target="#modalterima">accept</button>
							<button class="btn btn-danger float-right editor mt-1" id="tolak" value="'.$item['id'].'" data-toggle="modal" data-target="#modaltolak">refuse</button>',
			];
			$data[] = $row;
		}
		
		
        $output = array(
                    "draw" => intval(@$_POST['draw']),
                    "recordsTotal" => $this->jur->count_all(),
                    "recordsFiltered" => $this->jur->count_filtered(),
                    "data" => $data,
                );
        // output to json format
        echo json_encode($output);
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
