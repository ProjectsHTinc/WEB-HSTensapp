<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Apimain extends CI_Controller {

	public function index()
	{
		$this->load->view('welcome_message');
	}

	function __construct()
    {
        parent::__construct();
		$this->load->model("apimainmodel");
		$this->load->helper("url");
		$this->load->library('session');
    }

	public function checkMethod()
	{
		$_SERVER['REQUEST_METHOD'];
		if($_SERVER['REQUEST_METHOD'] != 'POST')
		{
			$res = array();
			$res["scode"] = 203;
			$res["message"] = "Request Method not supported";

			echo json_encode($res);
			return FALSE;
		}
		return TRUE;
	}

	//-----------------------------------------------//

	public function chk_institute_code()
	{
	   $_POST = json_decode(file_get_contents("php://input"), TRUE);

		if(!$this->checkMethod())
		{
			return FALSE;
		}

		$institute_code = '';
		$institute_code = $this->input->post("institute_code");

		$data['result']=$this->apimainmodel->chkInstitutecode($institute_code);

		$response = $data['result'];
		echo json_encode($response);
	}

//-----------------------------------------------//

}
