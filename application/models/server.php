<?php 
	
	defined('BASEPATH') OR exit('No direct script access allowed');	
	class server extends CI_Model{

		function register($data){
			return $this->db->insert('users', $data);
		}

		public function getuserlist($data)
		{
			if ($data == null) {
				return	$this->db->get('users');
			} else {

				$this->db->like($data);
				$res = $this->db->get('users');
				return $res;
			}
			
		}
		public function getuserlistid($id)	
		{
			$this->db->select('*');
			$this->db->from('users');
			$this->db->where('id',$id);
			$query = $this->db->get();
			return $query;
		}

		public function getuser($id)	
		{
			$this->db->select('*');
			$this->db->from('users');
			$this->db->where('id', $id);
			$query = $this->db->get()->row_array();
			return $query;
		}
		public function getuserbyrole($role)
		{
			
		}

		public function getusername($username)
		{
			$this->db->where('username', $username);
			$query = $this->db->get('users')->row_array();
			
			return $query;
		}

		public function geteditor($data)
		{	
			$this->db->select('*');
			$this->db->from('users');
			$this->db->like('level', $data);
			$query = $this->db->get();
			return $query;
		}
		
	}

	
	
	