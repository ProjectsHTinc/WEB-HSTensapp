<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

	function __construct()
	{
		parent::__construct();
		$this->load->helper('url');
		$this->load->library('session');
		//$this->load->model('loginmodel');
	}

	public function dashboard()
	{
		$user_data = $this->session->userdata();
		$user_id = $this->session->userdata('id');
		$user_role = $this->session->userdata('user_role');
		if($user_role=='1'){
			$this->load->view('admin/header');
			$this->load->view('admin/dashboard');
			$this->load->view('admin/footer');
		 }else{
			 redirect('/login');
		 }		
	}


	public function plans()
	{
		$user_data = $this->session->userdata();
		$user_id = $this->session->userdata('id');
		$user_role = $this->session->userdata('user_role');
		if($user_role=='1'){
			$this->load->view('admin/header');
			$this->load->view('admin/plans');
			$this->load->view('admin/footer');
		 }else{
			 redirect('/login');
		 }		
	}
	
	
	public function customers()
	{
		$user_data = $this->session->userdata();
		$user_id = $this->session->userdata('id');
		$user_role = $this->session->userdata('user_role');
		if($user_role=='1'){
			$this->load->view('admin/header');
			$this->load->view('admin/customers');
			$this->load->view('admin/footer');
		 }else{
			 redirect('/login');
		 }		
	}

	
	
	}
