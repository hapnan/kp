<?php
    defined('BASEPATH') OR exit('No direct script access allowed');

    class Login extends CI_Controller
    {
        function __construct()
        {   
            parent::__construct();
			$this->load->library('form_validation');
			$this->load->model('server');
			
        }

        public function index()
        {	
				$this->form_validation->set_rules('username', 'Username', 'trim|required');
				$this->form_validation->set_rules('password', 'Password', 'trim|required');
				if ($this->form_validation->run() == FALSE) {
					$this->load->view('nav');
					$this->load->view('login');
					$this->load->view('footer');
				}else{
					
						$username = $this->input->post('username',true);
						$password = $this->input->post('password',true);

						$user = $this->server->getusername($username);
					if(count($user)>0) {
						//jika user ada
						if (password_verify($password, $user['password'])) {
							$data = array(
								'id' => $user['id'],
								'nama' => $user['nama_user'],
								'email' => $user['email'],
								'role' => $user['level'],
								'logged_in' => TRUE,
							);
							$this->session->set_userdata($data);

							if ($user['level'] == 1) {
								redirect('console/admin','location');
							} else if($user['level'] == 2){
								redirect('console/editor','location');
							}else if($user['level'] == 3){
								redirect('console','location');
							}	
							
						} else {
							$this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
							password salah, silahkan hubungi admin</div>');
				
							//Loading View
							redirect('login','location');
						}
						
					} else {
						$this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
						User tidak ada, silahkan hubungi admin</div>');
				
						//Loading View
						redirect('login','location');
					}
					
					
				}
			
			
		}

		
		public function logout()	
		{
			$this->session->sess_destroy();
			redirect('Home');
				
		}
    }


?>
