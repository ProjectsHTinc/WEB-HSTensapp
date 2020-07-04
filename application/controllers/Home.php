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

//-------------------------------------------------//	

	public function index()	{
		$this->load->view('index');
	}

//-------------------------------------------------//	

	public function register(){
		$this->load->view('site_header');
		$this->load->view('register');
		$this->load->view('site_footer');
	}

//-------------------------------------------------//	

	public function login(){
		$this->load->view('site_header');
		$this->load->view('login');
		$this->load->view('site_footer');
	}

//-------------------------------------------------//	

	public function dashboard(){
		
		$data=$this->session->userdata();
		$user_id=$this->session->userdata('user_id');
		$inst_type=$this->session->userdata('inst_type');
		$user_type=$this->session->userdata('user_role');
	

		if($user_type=='1'){
			 redirect('/admin/dashboard');
			
		}else if ($user_type=='2'){
			$data['master_plans']=$this->usermodel->master_plans();
			$data['institute_plans']=$this->usermodel->institute_plans();
		
			$this->load->view('site_header');
			$this->load->view('dashboard',$data);
			$this->load->view('site_footer');
		} else {
			 redirect('/login');
		}

	}

//-------------------------------------------------//	

	public function check_login(){
		$password = md5($this->db->escape_str($this->input->post('password')));
		$email=$this->db->escape_str($this->input->post('email'));
		$data['res']=$this->loginmodel->check_login($email,$password);
		echo json_encode($data['res']);
	}
	
	public function check_otp(){
		$otp=$this->db->escape_str($this->input->post('otp'));
		$last_insert=$this->db->escape_str($this->input->post('last_insert'));
		$last_insert_id=$this->db->escape_str($this->input->post('last_insert_id'));
		$data['res']=$this->loginmodel->check_otp($otp,$last_insert,$last_insert_id);
		echo json_encode($data['res']);
	}

//-------------------------------------------------//	

	/* public function check_school_code(){
		$school_id=$this->db->escape_str($this->input->post('school_id'));
		$data['res']=$this->loginmodel->check_school_code($school_id);
		echo json_encode($data['res']);
	} */
		
	public function get_register(){
		//$name=$this->db->escape_str($this->input->post('name'));
		
		$email=$this->db->escape_str($this->input->post('email'));
		$phone=$this->db->escape_str($this->input->post('phone'));
		$password=md5($this->db->escape_str($this->input->post('password')));
		//$username=$this->db->escape_str($this->input->post('username'));
		$data['res']=$this->loginmodel->get_register($email,$phone,$password);
		echo json_encode($data['res']);

	}

//-------------------------------------------------//	

	public function checkmobile(){
		$phone=$this->input->post('phone');
		$data=$this->loginmodel->checkmobile($phone);
	}

//-------------------------------------------------//	

	public function checkemail(){
		$email=$this->input->post('email');
		$data=$this->loginmodel->checkemail($email);
	}

//-------------------------------------------------//	

/* 	public function check_ins_code(){
		$institute_code=$this->input->post('institute_code');
		$data=$this->loginmodel->check_ins_code($institute_code);
	} */

//-------------------------------------------------//	

	public function check_ins_name(){
		$institute_name=$this->input->post('institute_name');
		$data=$this->loginmodel->check_ins_name($institute_name);
	}

//-------------------------------------------------//	

	public function get_ins_details(){
		$last_insert=$this->db->escape_str($this->input->post('last_insert'));
		$last_insert_id=$this->db->escape_str($this->input->post('last_insert_id'));
		$institute_name=$this->db->escape_str($this->input->post('institute_name'));
		$institute_type=$this->db->escape_str($this->input->post('institute_type'));
		$person_designation=$this->db->escape_str($this->input->post('person_designation'));
		$contact_person=$this->db->escape_str($this->input->post('contact_person'));
		$city=$this->db->escape_str($this->input->post('city'));
		$state=$this->db->escape_str($this->input->post('state'));
		$no_of_student=$this->db->escape_str($this->input->post('no_of_student'));
		$how_you_hear=$this->db->escape_str($this->input->post('how_you_hear'));
		$notes=$this->db->escape_str($this->input->post('notes'));
		
		$data['res']=$this->loginmodel->get_ins_details($last_insert_id,$last_insert,$institute_name,$institute_type,$person_designation,$contact_person,$city,$state,$no_of_student,$how_you_hear,$notes);
		echo json_encode($data['res']);
	}

//-------------------------------------------------//	

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

//-------------------------------------------------//	

	public function logout(){
		$datas=$this->session->userdata();
		$this->session->unset_userdata($datas);
		$this->session->sess_destroy();
		redirect('/');
	}
	
//-------------------------------------------------//	

//-------------------------------------------------//	

	public function plan_expiry_check(){
		$data['res']=$this->loginmodel->plan_expiry_check();
		//echo $data['res']['msg'];
	}
//-------------------------------------------------//	


}
