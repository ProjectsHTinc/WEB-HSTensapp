<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {


		function __construct() {
			 parent::__construct();


			    $this->load->helper('url');
			    $this->load->library('session');
					$this->load->model('centermodel');
	 }



	public function index()
	{
		$this->load->view('index');
	}

	public function register()
	{
		$this->load->view('site_header');
		$this->load->view('register');
		$this->load->view('site_footer');
	}
	public function login()
	{
		$this->load->view('site_header');
		$this->load->view('login');
		$this->load->view('site_footer');
	}
	public function dashboard()
	{
		$this->load->view('site_header');
		$this->load->view('dashboard');
		$this->load->view('site_footer');
	}



}
