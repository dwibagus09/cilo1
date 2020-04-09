<?php 
    class Sbadmin extends CI_Controller{
        function __construct(){
            parent::__construct();
            // $this->load->library('table');
            $this->load->model('Mahasiswa_model');
        }
        public function index(){
            $data['Mahasiswa'] = $this->Mahasiswa_model->get_data();
            $this->template->tampil('view_teslib',$data);
        }
    }
?>