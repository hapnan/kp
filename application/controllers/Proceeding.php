<?php
    defined('BASEPATH') OR exit('No direct script access allowed');

    class Proceeding extends CI_Controller
    {
        function __construct()
        {
            parent::__construct();
            $this->load->model('server','ser', true);
            
        }

        public function index()
        {
            $this->load->view('formproceeding');
        }
        public function uploud()
        {
            if (!isset($_SESSION)) {
                $data = [
                    'jdl_makalah' => $this->input->post('judulmakalah', true),
                    'nm_forum' => $this->input->post('namaforum' ,true),
                    'tgk_forum_ilm' => $this->input->post('tingkatforum', true),
                    'thn_pelaksanaan' => $this->input->post('tahunpelaksanaan' ,true),
                    'url_jurnal' => $this->input->post('urljurnal', true),
                    'ins_penyelenggara' => $this->input->post('institusipenyelenggara', true),
                    'wkt_dari' => $this->input->post('daritanggal', true),
                    'wkt_sampai' => $this->input->post('sampaitanggal', true),
                    'tmp_pelaksanaan' => $this->input->post('tempatpelaksanaan', true),
                    'sts_pemakaian' => $this->input->post('status', true),
                    'nm_dsn' => $this->input->post('namadosen', true),
                    'nidn' => $this->input->post('nidndosen', true),
                    'prodi' => $this->input->post('prodi', true),
                    'username' => $this->session->userdata('id'),
                ];
    
                $this->ser->insertproseding($data);
    
                
                redirect('console','refresh');
            } else {
                
                redirect('login','refresh');
                
            }
            
            
        }
    }
?>