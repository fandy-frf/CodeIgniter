<?php
class Komentar extends CI_Controller{
	function add_komentar(){
		if($this->input->post('submit')){
			$this->load->model('mkomentar');
			$this->mkomentar->tambah();
			redirect('komentar/index');
		}
		$this->load->view('komentar_tambah');
	}

	function index(){
		$this->load->model('mkomentar');
		$data['hasil'] = $this->mkomentar->tampil();
		$this->load->view('komentar_tampil',$data);
	}
}
?>