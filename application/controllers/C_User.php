<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class C_User extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$data = $this->session->userdata['username'];
		if($data == ""){
			$this->session->set_flashdata('error','Mohon Untuk Login Terlebih Dahulu !');
			return redirect('C_Login');
		}
	}

	public function index(){
		$this->load->view('header');
		$this->load->view('sidenav');
		$this->load->view('User/HalamanUtama');
		$this->load->view('footer');
	}
}