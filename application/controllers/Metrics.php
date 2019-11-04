<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Metrics extends CI_Controller {


	var $url="https://ensyfi.com/admin/admin_api/ins_details.php/list_ins";
	var $main_url="https://ensyfi.com/";
	var $list_func_name="/apisuperadmin/get_user_count/";

	function __construct()
	{
		parent::__construct();
		$this->load->helper('url');
		$this->load->library('session');

	}

	public function index()
	{
		$data=$this->session->userdata();
		$user_id=$this->session->userdata('user_id');
		$inst_type=$this->session->userdata('inst_type');
		$user_type=$this->session->userdata('user_role');
		if($user_type=='1'){
			$this->load->view('admin/header');
			$this->load->view('admin/list_institute');
			$this->load->view('admin/footer');
		}else {
			 redirect('/login');
		}
	}


	public function list_institute(){
		$url = $this->url;
		$data['objectlist'] = file_get_contents($url);
		$str = $data['objectlist'];
		echo stripslashes($str);
	}



	public function list_staff(){
		$funct_name=$this->list_func_name;
	 	$main_url = $this->main_url;

		$ins_code=$this->input->post('ins_code');
		// echo $ins_url;
		$parm=2;

	  $parm_rul=$main_url.$ins_code.$funct_name;


    // Set up and execute the curl process
    $curl_handle = curl_init();
    curl_setopt($curl_handle, CURLOPT_URL, $parm_rul);
    curl_setopt($curl_handle, CURLOPT_POST, 1);
		// curl_setopt($curl_handle, CURLOPT_POSTFIELDS,$post);
		curl_setopt($curl_handle, CURLOPT_RETURNTRANSFER, true);
    $buffer = curl_exec($curl_handle);
    curl_close($curl_handle);
    $result = json_decode($buffer);
	  echo $livedata=json_encode($result);



	}





}
