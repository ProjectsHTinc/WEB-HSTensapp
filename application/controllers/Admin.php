<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

	function __construct()
	{
		parent::__construct();
		$this->load->helper('url');
		$this->load->library('session');
		$this->load->model('adminmodel');
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
		$datas['result']=$this->adminmodel->view_plan_details();
		
		if($user_role=='1'){
			$this->load->view('admin/header');
			$this->load->view('admin/plans',$datas);
			$this->load->view('admin/footer');
		 }else{
			 redirect('/login');
		 }		
	}
	
	public function add_plan()
	{
		$user_data = $this->session->userdata();
		$user_id = $this->session->userdata('id');
		$user_role = $this->session->userdata('user_role');
		
		if($user_role=='1'){
			$this->load->view('admin/header');
			$this->load->view('admin/add_plan');
			$this->load->view('admin/footer');
		 }else{
			 redirect('/login');
		 }		
	}
	
	
	public function get_plan_details(){
			$plan_name=$this->db->escape_str($this->input->post('plan_name'));
			$institute_type=$this->db->escape_str($this->input->post('institute_type'));
			$plan_type=$this->db->escape_str($this->input->post('plan_type'));
			$no_of_users=$this->db->escape_str($this->input->post('no_of_users'));
			$duration=$this->db->escape_str($this->input->post('duration'));
			$pricing=$this->db->escape_str($this->input->post('pricing'));
			$discount=$this->db->escape_str($this->input->post('discount'));
			$notes=$this->db->escape_str($this->input->post('notes'));
			$data['res']=$this->adminmodel->add_plan_details($plan_name,$institute_type,$plan_type,$no_of_users,$duration,$pricing,$discount,$notes);
			echo json_encode($data['res']);
	}
	
	public function edit_plan($plan_id)
	{
		$plan_id = base64_decode($plan_id);
		$user_data = $this->session->userdata();
		$user_id = $this->session->userdata('id');
		$user_role = $this->session->userdata('user_role');
		$datas['plan_details'] = $this->adminmodel->plan_details($plan_id);
		
		if($user_role=='1'){
			$this->load->view('admin/header');
			$this->load->view('admin/edit_plan',$datas);
			$this->load->view('admin/footer');
		 }else{
			 redirect('/login');
		 }		
	}

	
	public function update_plan_details(){
			$user_id = $this->session->userdata('id');
			$plan_id=$this->db->escape_str($this->input->post('plan_id'));
			$plan_name=$this->db->escape_str($this->input->post('plan_name'));
			$institute_type=$this->db->escape_str($this->input->post('institute_type'));
			$plan_type=$this->db->escape_str($this->input->post('plan_type'));
			$no_of_users=$this->db->escape_str($this->input->post('no_of_users'));
			$duration=$this->db->escape_str($this->input->post('duration'));
			$pricing=$this->db->escape_str($this->input->post('pricing'));
			$discount=$this->db->escape_str($this->input->post('discount'));
			$notes=$this->db->escape_str($this->input->post('notes'));
			$status=$this->db->escape_str($this->input->post('status'));
			$data['res']=$this->adminmodel->update_plan_details($user_id,$plan_id,$plan_name,$institute_type,$plan_type,$no_of_users,$duration,$pricing,$discount,$notes,$status);
			echo json_encode($data['res']);
	}
	
	public function customers()
	{
		$user_data = $this->session->userdata();
		$user_id = $this->session->userdata('id');
		$user_role = $this->session->userdata('user_role');
		$datas['result']=$this->adminmodel->view_customers();
		
		if($user_role=='1'){
			$this->load->view('admin/header');
			$this->load->view('admin/customers',$datas);
			$this->load->view('admin/footer');
		 }else{
			 redirect('/login');
		 }		
	}

	public function view_customer($customer_id)
	{
		$customer_id = base64_decode($customer_id);
		$user_data = $this->session->userdata();
		$user_id = $this->session->userdata('id');
		$user_role = $this->session->userdata('user_role');
		$datas['customer_details'] = $this->adminmodel->view_customer_details($customer_id);
		$datas['plan_details'] = $this->adminmodel->view_customer_plans($customer_id);
		$datas['purchase_details'] = $this->adminmodel->view_customer_purchase($customer_id);
		
		if($user_role=='1'){
			$this->load->view('admin/header');
			$this->load->view('admin/view_customer',$datas);
			$this->load->view('admin/footer');
		 }else{
			 redirect('/login');
		 }		
	}
	
	}
