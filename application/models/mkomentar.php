<?php
class Mkomentar extends CI_Model{
	function tambah(){
		$nama 	= $this->input->post('nama');
		$url 	= $this->input->post('url');
		$pesan	= $this->input->post('pesan');
		$data = array('nama'=> $nama, 
			'url' => $url, 
			'pesan' => $pesan);

		$this->db->insert('komentar',$data);
	}

	function tampil(){
		$tampil = $this->db->get('komentar');
		if($tampil->num_rows() > 0){
			foreach($tampil->result() as $data){
				$hasil[] = $data;
			}
			return $hasil;
		}
	}
}
?>