<?php
    defined('BASEPATH') OR exit('No direct script access allowed');

    class Journal extends CI_Controller
    {
        function __construct()
        {
            parent::__construct();
            $this->load->model('server','ser',true);
            $this->load->model('jurnal', 'jrl');
            
            
        }

        public function index()
        {
            if ($this->session->all_userdata()===null) {
                redirect('login');
                
            } else {
                $this->load->view('formjournal');
                
                
            }
            
            
        }

        public function uploud()
        {

            if ($this->session->all_userdata()!=null) {
                $data = [
                    'namajurnal' => htmlspecialchars($this->input->post('namajurnal',true)),
                    'jdl_publikasi' => htmlspecialchars($this->input->post('judulpublikasi',true)),
                    'jns_publikasi' => htmlspecialchars($this->input->post('jenispublikasi',true)),
                    'thn' => htmlspecialchars($this->input->post('tahunpublikasi',true)),
                    'issn' => htmlspecialchars($this->input->post('issnjurnal',true)),
                    'url' => htmlspecialchars($this->input->post('urljurnal',true)),
                    'volume' => htmlspecialchars($this->input->post('volumejurnal',true)),
                    'nomor' => htmlspecialchars($this->input->post('nomorjurnal',true)),
                    'halaman' => htmlspecialchars($this->input->post('halamanartikel',true)),
                    'indexscopus' => htmlspecialchars($this->input->post('indexscopus',true)),
                    'penulis' => htmlspecialchars($this->input->post('penuliske',true)),
                    'namadosen' => htmlspecialchars($this->input->post('namadosen',true)),
                    'nidn' => htmlspecialchars($this->input->post('nidndosen',true)),
                    'username' => $this->session->userdata('id')
                    
                ];
    
                $this->jrl->insertjurnal($data);
    
                
                redirect('console','refresh');
            } else {
                
                redirect('login','refresh');
                
            }
            
            
        }

        public function getjurnalbyid()
        {
            $id = $this->input->post('id');

            $data = $this->jrl->getjurnal($id)->result();

            echo json_encode($data);
        }

        public function getdosen()
        {
            $search = $this->input->post('dosen');
            $data = $this->jrl->getdosen($search);
            foreach($data as $row)
                $result[] = array(
                   'nama' => $row->nama,
                    'nidn' => $row->nidn,
                );
            echo json_encode($result);
        }

        public function updatejournal()
        {
            $data = [
                'editor' => $this->input->post('id'),
                'jurnalid' => $this->input->post('jurnalid')
            ];

            $this->jrl->jurnalupdate($data);

        }

        public function updatejurnalall($id)
        {
            $data = [
                'id' => $id,
                'namajurnal' => htmlspecialchars($this->input->post('namajurnal',true)),
                'jdl_publikasi' => htmlspecialchars($this->input->post('judulpublikasi',true)),
                'jns_publikasi' => htmlspecialchars($this->input->post('jenispublikasi',true)),
                'thn' => htmlspecialchars($this->input->post('tahunpublikasi',true)),
                'issn' => htmlspecialchars($this->input->post('issnjurnal',true)),
                'url' => htmlspecialchars($this->input->post('urljurnal',true)),
                'volume' => htmlspecialchars($this->input->post('volumejurnal',true)),
                'nomor' => htmlspecialchars($this->input->post('nomorjurnal',true)),
                'halaman' => htmlspecialchars($this->input->post('halamanartikel',true)),
                'indexscopus' => htmlspecialchars($this->input->post('indexscopus',true)),
                'penulis' => htmlspecialchars($this->input->post('penuliske',true)),
                'namadosen' => htmlspecialchars($this->input->post('namadosen',true)),
                'nidn' => htmlspecialchars($this->input->post('nidndosen',true)),
                'editor' => htmlspecialchars($this->input->post('editor'))
            ];

            
            $this->jrl->jurnalupdateall($data);
            
            redirect('console/details/', 'refresh', $id);
        }

        public function updatestatus()
        {
            $data = [
                'id' => $this->input->post('id'),
                'status' => $this->input->post('status')
            ];

            $this->jrl->statusupdate($data);
        }
        
    }
?>