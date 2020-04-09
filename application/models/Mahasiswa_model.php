<?php 
    class Mahasiswa_model extends CI_Model{
        function getAll(){
            $this->db->select('*');
            $this->db->from('tm_user');
            $this->db->join('tm_grup','tm_user.id_grup = tm_grup.id_grup');
            $query = $this->db->get();
            return $query;
        }
        function input_data($data,$table){
            $this->db->insert($table,$data);
        }
		
		function edit($id)
	{
    $this->db->select('*');
    $this->db->from('tm_user');
    $this->db->where('id', $id);
    return $this->db->get()->row_array();
	}
	
	function get_grup(){
		$this->db->order_by('id_grup','ASC');
		return $this->db->from('tm_grup')->get()->result();
	}

	function save_edit_data($username, $data)
{
    $this->db->where('username', $username);
    $berhasil = $this->db->update('tm_user', $data);
    if($berhasil)
    {
        redirect('Mahasiswa?'.$id.'update=1','refresh');
    }
    else
    {
        redirect('Mahasiswa?'.$id.'update=2','refresh');
    }
}
	
	function delete_data($data)
{
    $this->db->where('username', $id);
    $berhasil = $this->db->delete('tm_user');
    if($berhasil)
       {
            redirect('Mahasiswa?'.$id.'delete=1','refresh');
       }
    else
       {
            redirect('Mahasiswa?'.$id.'?delete=2','refresh');
       }
}
        // public function get_data(){
        //     $data_mahasiswa = [["nama"=>"Kim Jefry","prodi"=>"MIF"],
        //     ["nama"=>"Jong Un","prodi"=>"TKK"],
        //     ["nama"=>"Budi Setiawan","prodi"=>"TIF"]
        // ];
        //     return $data_mahasiswa;
        // }
        // // public function get_data(){
        // //     $data_prodi = [["prodi"=>"MIF","Ket"=>"Manajemen Informatika"],
        // //     ["prodi"=>"TKK","Ket"=>"Teknik Komputer"],
        // //     ["prodi"=>"TIF","Ket"=>"Teknik Informatika"]
        // // ];
        // }
    }
?>