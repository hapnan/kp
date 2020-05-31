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

		public function getjurnal($id)
		{
			if ($id==null) {
				return $this->db->get('data_journal');
				
			}else {
				$this->db->select('*');
				$this->db->from('data_journal');
				$this->db->where('id', $id);
				$query = $this->db->get();
				return $query;
			}
			
			
		}

		public function statusupdate($data)	
		{
			$id = $data['id'];
			$status = $data['status'];

			$this->db->set('status', $status);
			$this->db->where('id', $id);
			$this->db->update('data_journal');

		}

		public function getproceding($id)
		{
			if ($id==null) {
				return $this->db->get('data_proceeding');
				
			}else {
				$this->db->select('*');
				$this->db->from('data_proceeding');
				$this->db->where('id', $id);
				$query = $this->db->get();
				return $query;
			}	
		}
        

    }
    
    /* End of file ModelName.php */
    