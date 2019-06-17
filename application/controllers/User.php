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
		 
//-------------------------------------------------//

	public function user_profile(){
		$datas = $this->session->userdata();
		$user_id = $this->session->userdata('user_id');
		$user_type = $this->session->userdata('user_type');
		
		//$datas['user_details'] = $this->usermodel->user_details($user_id);
		if($user_id !=''){
			$this->load->view('site_header');
			//$this->load->view('user_profile',$datas);
			$this->load->view('user_profile');
			$this->load->view('site_footer');
		 }else{
			 redirect('/login');
		 }
	}

//-------------------------------------------------//

//-------------------------------------------------//

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

//-------------------------------------------------//

	public function purchase_plan(){
		$datas = $this->session->userdata();
		$user_id = $this->session->userdata('user_id');
		$user_type = $this->session->userdata('user_type');
		$enc_purchase_id = $this->uri->segment(3);
		
		$purchase_id = base64_decode($enc_purchase_id);

		$datas['purchase_details'] = $this->usermodel->purchase_details($purchase_id);
		if($user_id !=''){
			$this->load->view('site_header');
			$this->load->view('purchase_details',$datas);
			$this->load->view('site_footer');
		 }else{
			 redirect('/login');
		 }
	}

//-------------------------------------------------//

	public function order_confirm($enc_purchase_id){
		$purchase_id = base64_decode($enc_purchase_id);
		
		$datas = $this->session->userdata();
		$user_id = $this->session->userdata('user_id');
		$user_type = $this->session->userdata('user_type');
		//$purchase_id = $this->uri->segment(3);
		
		$datas['purchase_details'] = $this->usermodel->order_confirm($purchase_id);
		
		if($user_id !=''){
			$this->load->view('site_header');
			$this->load->view('order_confirmation');
			$this->load->view('site_footer');
		 }else{
			 redirect('/login');
		 }
	}
	
//-------------------------------------------------//

//-------------------------------------------------//

	public function order_history(){
		$datas = $this->session->userdata();
		$user_id = $this->session->userdata('user_id');
		$user_type = $this->session->userdata('user_type');
		
		$datas['order_history'] = $this->usermodel->order_history($user_id);
		if($user_id !=''){
			$this->load->view('site_header');
			$this->load->view('order_history',$datas);
			$this->load->view('site_footer');
		 }else{
			 redirect('/login');
		 }
	}

//-------------------------------------------------//

//-------------------------------------------------//

	public function plan_history(){
		$datas = $this->session->userdata();
		$user_id = $this->session->userdata('user_id');
		$user_type = $this->session->userdata('user_type');
		
		$datas['plan_details'] = $this->usermodel->plan_details($user_id);
		if($user_id !=''){
			$this->load->view('site_header');
			$this->load->view('plan_history',$datas);
			$this->load->view('site_footer');
		 }else{
			 redirect('/login');
		 }
	}

//-------------------------------------------------//

	/* public function checkout_demo(){
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
	} */
	
	
	/* public function change_plan(){
		$datas = $this->session->userdata();
		$user_id = $this->session->userdata('user_id');
		$user_type = $this->session->userdata('user_type');
		$datas['user_plan_history'] = $this->usermodel->user_plan_history($user_id);
		if($user_id !=''){
			$this->load->view('site_header');
			$this->load->view('change_plan',$datas);
			$this->load->view('site_footer');
		 }else{
			 redirect('/login');
		 }
	} */
	
}
