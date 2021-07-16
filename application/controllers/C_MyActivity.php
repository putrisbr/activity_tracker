<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class C_MyActivity extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->model('M_MyActivity');
	}

	public function index(){
		$data['activity'] = $this->M_MyActivity->getData();
		$this->load->view('header');
		$this->load->view('sidenav');
		$this->load->view('V_MyActivity',$data);
		$this->load->view('footer');
	}

	public function newActivity()
	{
		$activity_name = $this->input->post('activity_name');
		$desc = $this->input->post('desc');
		$time = $this->input->post('time');
		$time2 = $this->input->post('time2');
		$final_time = $time."-".$time2;
		$priority = $this->input->post('priority');
		$status = $this->input->post('status');

		$data = array(

			'id_detail' => 1,
			'activity' => $activity_name,
			'deskripsi' => $desc,
			'time' => $final_time,
			'priority' => $priority,
			'status' => $status
			
		);

		$input = $this->M_MyActivity->insert($data);
		if($input)
		{
			$this->session->set_flashdata('success','Activity Sudah Ditambahkan !');
			return redirect('C_MyActivity');
		}
		$this->session->set_flashdata('error','Terjadi Kesalahan !!');
		return redirect('C_MyActivity');
	}

	public function delete($id)
	{
		$delete = $this->M_MyActivity->delete($id);
		if($delete)
		{
			$this->session->set_flashdata('success','Activity Sudah Dihapus !');
			return redirect('C_MyActivity');
		}
		$this->session->set_flashdata('error','Terjadi Kesalahan !!');
		return redirect('C_MyActivity');
	}

	public function update($id)
	{
		$data['activity'] = $this->M_MyActivity->getDataById($id);
		$this->load->view('header');
		$this->load->view('sidenav');
		$this->load->view('V_MyActivityEdit',$data);
		$this->load->view('footer');
	}

	public function aksi_update()
	{
		$id = $this->input->post('id');
		$activity_name = $this->input->post('activity_name');
		$desc = $this->input->post('desc');
		$time = $this->input->post('time');
		$time2 = $this->input->post('time2');
		$final_time = $time."-".$time2;
		$priority = $this->input->post('priority');
		$status = $this->input->post('status');

		$data = array(

			'id_detail' => 1,
			'activity' => $activity_name,
			'deskripsi' => $desc,
			'time' => $final_time,
			'priority' => $priority,
			'status' => $status
			
		);

		$input = $this->M_MyActivity->update($id,$data);
		if($input)
		{
			$this->session->set_flashdata('success','Activity Sudah Diupdate !');
			return redirect('C_MyActivity');
		}
		$this->session->set_flashdata('error','Terjadi Kesalahan !!');
		return redirect('C_MyActivity');
	}
}