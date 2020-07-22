<?php

    defined('BASEPATH') OR exit('No direct script access allowed');
    
    class jurnal extends CI_Model {
        public function getdosen($data)
		{	
			$this->db->select('*');
			$this->db->from('dosen');
			$this->db->like('nama', $data);
			$this->db->or_like('nidn', $data);
			$query = $this->db->get()->result();
			return $query;
		}

		public function insertjurnal($data)
		{
			return $this->db->insert('data_journal',$data);
		}

		public function insertproseding($data)
		{
			return $this->db->insert('data_proceeding', $data);
		}

		public function jurnalupdate($id)
		{
			$jurnalid = $id['jurnalid'];
			$editor = $id['editor'];

			$this->db->set('editor', $editor);
			$this->db->where('id', $jurnalid);
			$this->db->update('data_journal');
			
		}

		public function jurnalupdateall($data)
		{	
			$jurnalid = $data['id'];
			$this->db->where('id', $jurnalid);
			$this->db->update('data_journal', $data);
		}

		public function getjurnal($data)
		{
			$id = $data['id'];
			$role = $data['role'];
			if ($role==1) {
				return $this->db->get('data_journal');
				
			}else if ($role==2){
				$this->db->select('*');
				$this->db->from('data_journal');
				$this->db->where('editor', $id);
				$query = $this->db->get();
				return $query;
			}else if($role==3){
				$this->db->select('*');
				$this->db->from('data_journal');
				$this->db->where('username', $id);
				$query = $this->db->get();
				return $query;
			}
			
			
		}

		public function getjurnalbyid($id)
		{
			$this->db->select('*');
			$this->db->from('data_journal');
			$this->db->where('id', $id);
			$query = $this->db->get();
			return $query;
		}

		public function getprocedingbyid($id)
		{
			$this->db->select('*');
				$this->db->from('data_proceeding');
				$this->db->where('id', $id);
				$query = $this->db->get();
				return $query;
		}
		public function statusupdate($data)	
		{
			$id = $data['id'];
			$status = $data['status'];

			$this->db->set('status', $status);
			$this->db->where('id', $id);
			$this->db->update('data_journal');

		}
		

		public function getproceding($data)
		{
			if ($data['role']==1) {
				return $this->db->get('data_proceeding');
				
			}else if ($data['role']==2){
				$this->db->select('*');
				$this->db->from('data_proceeding');
				$this->db->where('editor', $data['id']);
				$query = $this->db->get();
				return $query;
			}else if($data['role']==3){
				$this->db->select('*');
				$this->db->from('data_proceeding');
				$this->db->where('username', $data['id']);
				$query = $this->db->get();
				return $query;
			}	
		}

		
        

    }
    
    /* End of file ModelName.php */
    