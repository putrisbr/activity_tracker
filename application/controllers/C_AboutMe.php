<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class C_AboutMe extends CI_Controller {

	public function __construct(){
		parent::__construct();
	}

	public function index(){
		$this->load->view('header');
		$this->load->view('sidenav');
		$this->load->view('V_AboutMe');
		$this->load->view('footer');
	}
}