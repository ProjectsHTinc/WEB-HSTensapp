<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {
		function __construct() {
			 parent::__construct();
			    $this->load->helper('url');
			    $this->load->library('session');
				$this->load->model('loginmodel');
				$this->load->model('usermodel');
	 }

	public function index()	{
		$this->load->view('index');
	}

	public function register(){
		$this->load->view('site_header');
		$this->load->view('register');
		$this->load->view('site_footer');
	}
	
	public function login(){
		$this->load->view('site_header');
		$this->load->view('login');
		$this->load->view('site_footer');
	}
	
	public function dashboard(){
		$data=$this->session->userdata();
		$user_id=$this->session->userdata('user_id');
		$inst_type=$this->session->userdata('inst_type');
		$user_type=$this->session->userdata('user_role');
		$data['user_plans']=$this->usermodel->user_plans($user_id);
		$data['user_inst_plans']=$this->usermodel->user_inst_plans($inst_type);
		//print_r($data);
		if($user_type=='1'){
			$this->load->view('admin/header');
			$this->load->view('admin/dashboard');
			$this->load->view('admin/footer');
		}else{
			$this->load->view('site_header');
			$this->load->view('dashboard',$data);
			$this->load->view('site_footer');
		}

	}

	public function check_login(){
		$password=md5($this->db->escape_str($this->input->post('password')));
		$email=$this->db->escape_str($this->input->post('email'));
		$data['res']=$this->loginmodel->check_login($email,$password);
		echo json_encode($data['res']);
	}
	public function check_otp(){
		$otp=$this->db->escape_str($this->input->post('otp'));
		$last_insert=$this->db->escape_str($this->input->post('last_insert'));
		$data['res']=$this->loginmodel->check_otp($otp,$last_insert);
		echo json_encode($data['res']);
	}

	public function get_register(){
		$name=$this->db->escape_str($this->input->post('name'));
		$password=md5($this->db->escape_str($this->input->post('password')));
		$email=$this->db->escape_str($this->input->post('email'));
		$phone=$this->db->escape_str($this->input->post('phone'));
		$username=$this->db->escape_str($this->input->post('username'));
		$data['res']=$this->loginmodel->get_register($name,$password,$email,$phone,$username);
		echo json_encode($data['res']);

	}
	public function get_ins_details(){
		$institute_code=$this->db->escape_str($this->input->post('institute_code'));
		$last_insert=$this->db->escape_str($this->input->post('last_insert'));
		$institute_name=$this->db->escape_str($this->input->post('institute_name'));
		$institute_type=$this->db->escape_str($this->input->post('institute_type'));
		$person_designation=$this->db->escape_str($this->input->post('person_designation'));
		$contact_person=$this->db->escape_str($this->input->post('contact_person'));
		$city=$this->db->escape_str($this->input->post('city'));
		$state=$this->db->escape_str($this->input->post('state'));
		$no_of_student=$this->db->escape_str($this->input->post('no_of_student'));
		$how_you_hear=$this->db->escape_str($this->input->post('how_you_hear'));
		$notes=$this->db->escape_str($this->input->post('notes'));
		$data['res']=$this->loginmodel->get_ins_details($institute_code,$last_insert,$institute_name,$institute_type,$person_designation,$contact_person,$city,$state,$no_of_student,$how_you_hear,$notes);
		echo json_encode($data['res']);
	}


	public function checkmobile(){
		$phone=$this->input->post('phone');
		$data=$this->loginmodel->checkmobile($phone);
	}
	
	public function checkemail(){
		$email=$this->input->post('email');
		$data=$this->loginmodel->checkemail($email);
	}

	public function check_ins_code(){
		$institute_code=$this->input->post('institute_code');
		$data=$this->loginmodel->check_ins_code($institute_code);
	}

	public function check_ins_name(){
		$institute_name=$this->input->post('institute_name');
		$data=$this->loginmodel->check_ins_name($institute_name);
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

	public function logout(){
		$datas=$this->session->userdata();
		$this->session->unset_userdata($datas);
		$this->session->sess_destroy();
		redirect('/');
	}


}
