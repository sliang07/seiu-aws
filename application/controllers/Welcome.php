<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	public function index()
	{
		$this->load->model('user');
		$userinfo = $this->user->get_info();
		$this->load->view('seiu_assessment',array(
			"userinfo" => $userinfo)
		);
	}
	public function prepareadd()
	{
		$this->load->model('user');
		$info = $this->input->post();
		$this->user->add($info);
		redirect('/');
	}
	public function preparesearch()
	{
		$this->load->model('user');
		$userinfo = $this->user->search($this->input->post());
		$this->load->view('partials/table_partial', array(
		'userinfo' => $userinfo)
		);
	}
}
