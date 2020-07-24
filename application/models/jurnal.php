<?php

    defined('BASEPATH') OR exit('No direct script access allowed');
    
    class jurnal extends CI_Model {

		 // start datatables
		 var $column_order = array('id', 'namajurnal', null, null ,'thn', null, null); //set column field database for datatable orderable
		 var $column_search = array('namajurnal', 'thn', 'issn'); //set column field database for datatable searchable
		var $order = array('id' => 'asc'); // default order

		private function _get_datatables_query() {
			$this->db->select('data_journal.*,id, namajurnal, jdl_publikasi, jns_publikasi, thn, issn, url');
			$this->db->from('data_journal');
			$i = 0;
			 foreach ($this->column_search as $item) { // loop column
				 if(@$_POST['search']['value']) { // if datatable send POST for search
					if($i===0) { // first loop
						$this->db->group_start(); // open bracket. query Where with OR clause better with bracket. because maybe can combine with other WHERE with AND.
						$this->db->like($item, $_POST['search']['value']);
					} else {
						$this->db->or_like($item, $_POST['search']['value']);
					}
					 if(count($this->column_search) - 1 == $i) //last loop
						 $this->db->group_end(); //close bracket
				}
				$i++;
			}
			
			if(isset($_POST['order'])) { // here order processing
				$this->db->order_by($this->column_order[$_POST['order']['0']['column']], $_POST['order']['0']['dir']);
			}else if(isset($this->order)) {
				$order = $this->order;
				$this->db->order_by(key($order), $order[key($order)]);
			}
		}
		function get_datatables() {
			$this->_get_datatables_query();
			if(@$_POST['length'] != -1){
				$this->db->limit(@$_POST['length'], @$_POST['start']);
			}
			$query = $this->db->get();
			return $query->result();
		}
		function count_filtered() {
			$this->_get_datatables_query();
			$query = $this->db->get();
			return $query->num_rows();
		}
		function count_all() {
			$this->db->from('data_journal');
			return $this->db->count_all_results();
		}
		 // end datatables
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
    