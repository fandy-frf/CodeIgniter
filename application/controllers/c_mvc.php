<?php
Class C_Mvc extends CI_Controller{
	function index(){
		$this->load->model('m_mvc');
		$data['kalimat'] = $this->m_mvc->mvc();
		$this->load->view('v_mvc',$data);
	}
}

?>