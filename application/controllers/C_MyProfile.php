<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class C_MyProfile extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->model('M_Register');
	}

	public function index(){
		$this->load->view('header');
		$this->load->view('sidenav');
		$this->load->view('V_MyProfile');
		$this->load->view('footer');
	}

	public function updateAccount()
	{
		$id_user = $this->session->userdata('id_user');
		$usernameAwal = $this->session->userdata('username');
		$username = $this->input->post('username');
		$nama_user = $this->input->post('nama_user');
		$password = $this->input->post('password');
		$password2 = $this->input->post('password2');

		if($usernameAwal == $username)
		{
			if($password != $password2)
			{
				$this->session->set_flashdata('error','Password Harus sama !');
				return redirect('C_MyProfile');
			}
	
			$data=array(
				'nama_user'=>$nama_user,
				'username'=>$username,
				'password'=>$password
			);
	
			$update = $this->M_Register->update($id_user,$data);
			if($update){
				$this->session->set_flashdata('success','Update Data Berhasil!');
				$dataAkun=array(
					'nama_user'=>$nama_user,
					'username'=>$username,
					'id'=>$id_user
				);
				$this->session->set_userdata($dataAkun);
				return redirect('C_MyProfile');
			}
	
			$this->session->set_flashdata('error','Update Gagal!');
			return redirect('C_MyProfile');
		}

		$checkUsername=$this->M_Register->checkUsername($username);
        if($checkUsername){
            $this->session->set_flashdata('error','Username sudah digunakan! Mohon coba username lain.');
            return redirect('C_MyProfile');
        }


	}
}