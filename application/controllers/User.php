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
		
		$datas['user_details'] = $this->usermodel->user_details($user_id);

		if($user_id !=''){
			$this->load->view('site_header');
			$this->load->view('user_profile',$datas);
			$this->load->view('site_footer');
		 }else{
			 redirect('/login');
		 }
	}

//-------------------------------------------------//

	public function checkmobile(){
		
		$datas = $this->session->userdata();
		$user_id = $this->session->userdata('user_id');
		$user_type = $this->session->userdata('user_type');
		
		$phone=$this->input->post('phone');
		$data=$this->usermodel->checkmobile($phone,$user_id);
	}

//-------------------------------------------------//

	public function checkemail(){
		$datas = $this->session->userdata();
		$user_id = $this->session->userdata('user_id');
		$user_type = $this->session->userdata('user_type');
		
		$email=$this->input->post('email');
		$data=$this->usermodel->checkemail($email,$user_id);
	}
	
//-------------------------------------------------//

	public function update_profile(){
		$datas = $this->session->userdata();
		$user_id = $this->session->userdata('user_id');
		$user_type = $this->session->userdata('user_type');
		if($user_id !=''){
			$inst_name = $this->input->post('inst_name');
			$email = $this->input->post('email');
			$phone = $this->input->post('phone');
			$contact_person = $this->input->post('contact_person');
			$person_designation = $this->input->post('person_designation');			
			$datas['res']=$this->usermodel->update_profile($inst_name,$email,$phone,$contact_person,$person_designation,$user_id);
			echo json_encode($datas['res']);
		}else{
			 redirect('/login');
		}
	}
	
//-------------------------------------------------//

//-------------------------------------------------//

	public function change_password(){
		$datas = $this->session->userdata();
		$user_id = $this->session->userdata('user_id');
		$user_type = $this->session->userdata('user_type');
		
		$datas['user_details'] = $this->usermodel->user_details($user_id);

		if($user_id !=''){
			$this->load->view('site_header');
			$this->load->view('change_password',$datas);
			$this->load->view('site_footer');
		 }else{
			 redirect('/login');
		 }
	}

//-------------------------------------------------//

//-------------------------------------------------//

	public function password_update(){
		$datas = $this->session->userdata();
		$user_id = $this->session->userdata('user_id');
		$user_type = $this->session->userdata('user_type');
		if($user_id !=''){
			//$old_password = $this->input->post('old_password');
			$new_password = $this->input->post('new_password');
			$datas['res']=$this->usermodel->password_update($new_password,$user_id);
			echo json_encode($datas['res']);
		}else{
			 redirect('/login');
		}
	}
	
//-------------------------------------------------//


//-------------------------------------------------//
	public function user_request_plan(){
		$datas = $this->session->userdata();
		$user_id = $this->session->userdata('user_id');
		$user_type = $this->session->userdata('user_type');
		if($user_id !=''){
			$master_plan_id = $this->input->post('master_plan_id');
			$datas['res']=$this->usermodel->user_request_plan($master_plan_id);
			echo json_encode($datas['res']);
		}else{
			 redirect('/login');
		}
	}

//-------------------------------------------------//

//-------------------------------------------------//

	public function renew_plans(){
		$datas = $this->session->userdata();
		$user_id = $this->session->userdata('user_id');
		$user_type = $this->session->userdata('user_type');
		$datas['renew_plans'] = $this->usermodel->renew_plans();
		
		if($user_id !=''){
			$this->load->view('site_header');
			$this->load->view('renew_plan',$datas);
			$this->load->view('site_footer');
		 }else{
			 redirect('/login');
		 }
	}
//-------------------------------------------------//

//-------------------------------------------------//

	public function renew_request_plan(){
		$datas = $this->session->userdata();
		$user_id = $this->session->userdata('user_id');
		$user_type = $this->session->userdata('user_type');
		if($user_id !=''){
			$master_plan_id = $this->input->post('master_plan_id');
			$renew_type = $this->input->post('renew_type');
			$institute_plan_id = $this->input->post('institute_plan_id');
			$datas['res']=$this->usermodel->renew_request_plan($master_plan_id,$renew_type,$institute_plan_id);
			echo json_encode($datas['res']);
		}else{
			 redirect('/login');
		}
	}

//-------------------------------------------------//


//-------------------------------------------------//

	public function payment_review($plan_id){
		
		$plan_id = base64_decode($plan_id);
		
		$datas = $this->session->userdata();
		$user_id = $this->session->userdata('user_id');
		$user_type = $this->session->userdata('user_type');
		
		$datas['payment_details'] = $this->usermodel->payment_review($plan_id);

		if($user_id !=''){
			$this->load->view('site_header');
			$this->load->view('payment_review',$datas);
			$this->load->view('site_footer');
		 }else{
			 redirect('/login');
		 }	
	}

//-------------------------------------------------//

//-------------------------------------------------//

	public function order_confirm($enc_purchase_id){
		
		$purchase_id = base64_decode($enc_purchase_id);
		
		$datas = $this->session->userdata();
		$user_id = $this->session->userdata('user_id');
		$user_type = $this->session->userdata('user_type');
		
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

	public function activate_plan($enc_purchase_id){
		
		$purchase_id = base64_decode($enc_purchase_id);
		
		$datas = $this->session->userdata();
		$user_id = $this->session->userdata('user_id');
		$user_type = $this->session->userdata('user_type');
		
		if($user_id !=''){
			$datas['purchase_details'] = $this->usermodel->activate_plan($purchase_id);
			redirect('/dashboard');
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
		
		$datas['plan_history'] = $this->usermodel->plan_history($user_id);
		if($user_id !=''){
			$this->load->view('site_header');
			$this->load->view('plan_history',$datas);
			$this->load->view('site_footer');
		 }else{
			 redirect('/login');
		 }
	}
//-------------------------------------------------//
















//-------------------------------------------------//

	public function plan_expiry_check(){
		$datas['res']=$this->usermodel->plan_expiry_check();
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



	
}
