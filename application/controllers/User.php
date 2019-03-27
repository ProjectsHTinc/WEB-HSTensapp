<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller {

	function __construct()
		 {
			parent::__construct();
			$this->load->helper('url');
			$this->load->library('session');
			$this->load->model('loginmodel');
			$this->load->model('usermodel');
		 }

	public function user_select_plan(){
		$datas = $this->session->userdata();
		$user_id = $this->session->userdata('user_id');
		$user_type = $this->session->userdata('user_type');
		if($user_id !=''){
				$plan_id = $this->input->post('plan_id');
				$datas['res']=$this->usermodel->user_select_plan($plan_id);
				echo json_encode($datas['res']);
		}else{
			 redirect('/login');
		}
	}

	public function payment_plan(){
		$datas = $this->session->userdata();
		$user_id = $this->session->userdata('user_id');
		$user_type = $this->session->userdata('user_type');
		$purchase_id = $this->uri->segment(3);
		$datas['purchase_details'] = $this->usermodel->purchase_details($purchase_id);
		if($user_id !=''){
			$this->load->view('site_header');
			$this->load->view('purchase_details',$datas);
			$this->load->view('site_footer');
		 }else{
			 redirect('/login');
		 }
	}
	
	public function checkout_demo(){
		$datas = $this->session->userdata();
		$user_id = $this->session->userdata('user_id');
		$user_type = $this->session->userdata('user_type');
		$purchase_id = $this->input->post('purchase_id');
		$order_id = $this->input->post('order_id');

		$datas['purchase_history'] = $this->usermodel->checkout_demo($purchase_id,$order_id);
		
		if($user_id !=''){
			$this->load->view('site_header');
			$this->load->view('purchase_history',$datas);
			$this->load->view('site_footer');
		 }else{
			 redirect('/login');
		 }
	}
	
	public function change_plan(){
		$datas = $this->session->userdata();
		$user_id = $this->session->userdata('user_id');
		$user_type = $this->session->userdata('user_type');
		//$purchase_id = $this->input->post('purchase_id');
		$datas['user_plan_history'] = $this->usermodel->user_plan_history($user_id);
		//print_r($datas);
		//exit;
		if($user_id !=''){
			$this->load->view('site_header');
			$this->load->view('change_plan',$datas);
			//$this->load->view('change_plan');
			$this->load->view('site_footer');
		 }else{
			 redirect('/login');
		 }
	}
	
}
