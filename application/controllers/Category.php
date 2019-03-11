<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Category extends CI_Controller
{
	function __construct()
	{
		parent::__construct();
		$this->load->helper('url');
		$this->load->library('session');
		$this->load->model('trademodel');
	}

	// Class section
	public function view_cat()
	{
		$datas=$this->session->userdata();
		$user_id=$this->session->userdata('user_id');
		$user_type=$this->session->userdata('user_type');
		$datas['result'] = $this->trademodel->get_all_category();
		if($user_type==1){
		$this->load->view('admin/admin_header');
		$this->load->view('admin/category/view_category',$datas);
		$this->load->view('admin/admin_footer');
		}
		else{
		redirect('/');
		}
	}

	public function view_sub_cat()
	{
		$datas=$this->session->userdata();
		$user_id=$this->session->userdata('user_id');
		$user_type=$this->session->userdata('user_type');
		$datas['result'] = $this->trademodel->get_all_sub_category();
		if($user_type==1){
		$this->load->view('admin/admin_header');
		$this->load->view('admin/category/view_sub_category',$datas);
		$this->load->view('admin/admin_footer');
		}
		else{
		redirect('/');
		}
	}

	public function create_trade()
	{
		$datas=$this->session->userdata();
		$user_id=$this->session->userdata('user_id');
		$user_type=$this->session->userdata('user_type');
			if($user_type==3){
				$tradename=$this->input->post('trade_name');
				$status=$this->input->post('status');
				$res['res'] = $this->trademodel->add_trade($tradename,$status,$user_id);
				echo $res['res'];

			}else{
					redirect('/');
			}

	}

	public function edit_trade()
	{
		$datas=$this->session->userdata();
		$user_id=$this->session->userdata('user_id');
		$user_type=$this->session->userdata('user_type');
		if($user_type==3){
		$trade_id=$this->uri->segment(3);
		$datas['res'] = $this->trademodel->get_trade_id($trade_id);
		$datas['result'] = $this->trademodel->getall_trade($user_id);
	  $this->load->view('pia/pia_header');
		$this->load->view('pia/trade/edit_trade',$datas);
		$this->load->view('pia/pia_footer');
		}
		else{
		redirect('/');
		}
	}

	public function update_trade()
	{
		$datas=$this->session->userdata();
		$user_id=$this->session->userdata('user_id');
		$user_type=$this->session->userdata('user_type');
		if($user_type==3){
			$trade_name=$this->input->post('trade_name');
			$trade_id=$this->input->post('trade_id');
			$status=$this->input->post('status');
			$res['res'] = $this->trademodel->update_trade_details($trade_name,$trade_id,$status,$user_id);
			echo 	$res['res'];
		}else{
				redirect('/');
		}


	}

}
?>
