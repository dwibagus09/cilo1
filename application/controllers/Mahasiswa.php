<?php 
    defined('BASEPATH') OR exit('No direct script access allowed');
    class Mahasiswa extends CI_Controller{
        function __construct(){
            parent::__construct();
            // $this->load->library('table');
            $this->load->model('Mahasiswa_model');
            
        }
		
		public function Api ()
		{
			$data = $this->Mahasiswa_model->getAll();
			echo json_encode($data->result_array());
		}
		
		public function ApiInsert()
		{
			$username = $this->input->post('username');
			$password = $this->input->post('password');
			$nama =  $this->input->post('nama');
			$grup = $this->input->post('grup');
			 $data = array(
                'username' => $username,
                'password' => $password,
                'nama' => $nama,
                'id_grup' => $grup
            );
			 $this->Mahasiswa_model->input_data($data,'tm_user');
			echo json_encode($array);
		}

        public function ApiDelete()
        {
            if($this->input->post('username')){
                $where = array('username' => $this->input->post('username'));
                if ($this->Mahasiswa_model->delete_data($where,'tm_user')){
                    $array = array('success' => true);
                } else {
                    $array = array('error' => true);
                }
                echo json_encode($array);
            }
        }
		
		public function ApiUpdate()
	{
			$username = $this->input->post('username');
			$password = $this->input->post('password');
			$nama =  $this->input->post('nama');
			$grup = $this->input->post('grup');
		if ($this->form_validation->run()) {
			$data = array(
                'username' => $username,
                'password' => $password,
                'nama' => $nama,
                'id_grup' => $grup
            );
			$this->Mahasiswa_model->save_edit_data($data,'tm_user');
			echo json_encode($array);
		
	}
		
        public function index(){
            // $data['Mahasiswa'] = $this->Mahasiswa_model->get_data();
            // $this->load->view('view_teslib',$data);
            $data['user'] = $this->Mahasiswa_model->getAll()->result();
            $this->template->tampil('crud/home_mahasiswa',$data);
        }
        function add(){
            $this->template->tampil('crud/tambah_mahasiswa');
        }
        public function input(){
            $username = $this->input->post('username');
            $password = $this->input->post('password');
            $nama = $this->input->post('nama');
            $grup = $this->input->post('grup');

            $data = array(
                'username' => $username,
                'password' => $password,
                'nama' => $nama,
                'id_grup' => $grup
            );
            $this->Mahasiswa_model->input_data($data,'tm_user');
            
            redirect('Mahasiswa',$data);
        }
		
		public function edit(){
		$id = $this->uri->segment(3);
		$data['list'] = $this->Mahasiswa_model->edit($id);
		$data['grup'] = $this->Mahasiswa_model->get_grup();
		$this->template->tampil('crud/edit_mahasiswa', $data);
	}
	
	public function save_edit(){
			$id     = $this->input->post('id');
			$username = $this->input->post('username');
            $password = $this->input->post('password');
            $nama = $this->input->post('nama');
            $grup = $this->input->post('grup');

            $data = array(
                'username' => $username,
                'password' => $password,
                'nama' => $nama,
                'id_grup' => $grup
            );
       
        $this->Mahasiswa_model->save_edit_data($id,$data);
    }
	
	function hapus()
	{
		$id = $this->uri->segment(3);
		$this->Mahasiswa_model->delete_data($id);
	}
    }
?>