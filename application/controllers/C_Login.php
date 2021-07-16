<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class C_Login extends CI_Controller {

	public function __construct(){
		parent::__construct();
        $this->load->model('M_Login');
	}

	public function index(){
		$this->load->view('headerLogin');
		$this->load->view('V_Login');
		$this->load->view('footer');
	}

    public function aksi_login(){
        $username=$this->input->post('username');
        $password=$this->input->post('password');

        $check=$this->M_Login->checkLogin($username, $password);

        if($check['username']){
            $this->session->set_flashdata('success','Login Berhasil ! Halo '.$check['nama_user']);
            $this->session->set_userdata($check);
            return redirect('C_User');
        }
        if($check['result']=="username"){
            $this->session->set_flashdata('error','Anda Belum Punya Akun');
            return redirect('C_Login');
        }
        if($check['result']=="password"){
            $this->session->set_flashdata('error','Password Anda Salah !!');
            return redirect('C_Login');
        }
        $this->session->set_flashdata('error','Terjadi Kesalahan !!');
        return redirect('C_Login');
    }

    public function logout(){
        $this->session->sess_destroy();
        $this->session->set_flashdata('success','Berhasil Logout!');
        return redirect('C_Login');
    }
}