<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class C_Register extends CI_Controller {

	public function __construct(){
		parent::__construct();
        $this->load->model('M_Register');
	}

	public function index(){
		$this->load->view('headerLogin');
		$this->load->view('V_Register');
		$this->load->view('footer');
	}

    public function aksi_register(){
        $nama_user=$this->input->post('nama_user');
        $username=$this->input->post('username');
        $password=$this->input->post('password');

        $checkUsername=$this->M_Register->checkUsername($username);
        if($checkUsername){
            $this->session->set_flashdata('username','Username sudah digunakan! Mohon coba username lain.');
            return redirect('C_Register');
        }

        $data=array(
            'nama_user'=>$nama_user,
            'username'=>$username,
            'password'=>$password
        );

        $input=$this->M_Register->insertDataUser($data);
        if($input){
            $this->session->set_flashdata('success','Register Berhasil!');
            return redirect('C_Login');
        }

        $this->session->set_flashdata('error','Register Gagal!');
        return redirect('C_Register');
    }
}