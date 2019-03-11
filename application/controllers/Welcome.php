<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {


		function __construct() {
			 parent::__construct();


			    $this->load->helper('url');
			    $this->load->library('session');
					$this->load->model('centermodel');
						$this->load->model('loginmodel');
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

	public function get_register(){
		$name=$this->db->escape_str($this->input->post('name'));
		$password=$this->db->escape_str($this->input->post('password'));
		$email=$this->db->escape_str($this->input->post('email'));
		$phone=$this->db->escape_str($this->input->post('phone'));
		$username=$this->db->escape_str($this->input->post('username'));
		$data=$this->loginmodel->get_register($name,$password,$email,$phone,$username);


	}

	public function checkmobile(){
				$phone=$this->input->post('phone');
				$data=$this->loginmodel->checkmobile($phone);
	}
	public function checkemail(){
				$email=$this->input->post('email');
				$data=$this->loginmodel->checkemail($email);
	}
	public function emailverfiy(){
		$email = $this->uri->segment(3);
		$data['res']=$this->loginmodel->email_verify($email);
		if($data['res']['msg']=='verify'){
				$this->load->view('site_header');
				$this->load->view('email_verify',$data);
				$this->load->view('site_footer');
			}else{
				$this->load->view('site_header');
				$this->load->view('email_verify',$data);
				$this->load->view('site_footer');
		}

	}



}
