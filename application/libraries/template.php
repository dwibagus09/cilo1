<?php
 class Template {
 protected $_ci;
function __construct() {
$this->_ci = &get_instance();
}
 function tampil($content, $data = NULL) {

// Bagian $data['head'] untuk memanggil file head.php dari folder
// Admin/_Template/
 // ['head'] data yang kita panggil dari file template.php dari folder
// Admin/_Template/
$data['head'] = $this->_ci->load->view('Admin/_Template/head', $data,TRUE);

// Bagian $data['topbar'] untuk memanggil file topbar.php dari folder
// Admin/_Template/
// ['topbar'] data yang kita panggil dari file template.php dari folder
// Admin/_Template/
$data['navbar'] = $this->_ci->load->view('Admin/_Template/navbar', $data,TRUE);
// Bagian $data['sidebar'] untuk memanggil file sidebar.php dari folder
// Admin/_Template/
// ['sidebae'] data yang kita panggil dari file template.php dari folder
// Admin/_Template/
$data['sidebar'] = $this->_ci->load->view('Admin/_Template/sidebar',$data, TRUE);
// ['isi'] data yang kita panggil dari file content.php dari folder
// Admin/_Template/
 $data['content'] = $this->_ci->load->view($content, $data, TRUE);
 $this->_ci->load->view($content, $data, TRUE);


// Bagian $data['content'] untuk memanggil file content.php dari folder
// Admin/_Template/
// ['content'] data yang kita panggil dari file template.php dari folder
// Admin/_Template/
//$data['content'] = $this->_ci->load->view('crud/tambah_mahasiswa', $data,TRUE);
// Bagian $data['footer'] untuk memanggil file footer.php dari folder
// Admin/_Template/
// ['footer'] data yang kita panggil dari file template.php dari folder
// Admin/_Template/
$data['footer'] = $this->_ci->load->view('Admin/_Template/footer', $data, TRUE);

// Bagian $data['template'] untuk menampilkan file template.php dari folder
// Admin/_Template/
// view('Admin/_Template/Template', $data, TRUE); untuk memanggil $data diatas
// seperti $data['head'], dll
echo $data['blank']= $this->_ci->load->view('Admin/_Template/blank',$data, TRUE); 
}}?>