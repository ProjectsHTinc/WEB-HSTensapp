<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Apimainmodel extends CI_Model {

    function __construct()
    {
        parent::__construct();
    }


//#################### Main Login ####################//
	public function chkInstitutecode($institute_code)
	{
		$sql = "SELECT A.institute_code,B.institute_name,B.institute_logo FROM institute_master A,institute_details B WHERE A.institute_code ='".$institute_code."' AND A.id = B.institute_master_id AND A.status='Active'";
		$user_result = $this->db->query($sql);
		$ress = $user_result->result();
		
		if($user_result->num_rows()>0)
		{
			$response = array("status" => "Success", "msg" => "Login Successfully", "userData" => $ress);
			return $response;
		} else {
			
			$response = array("status" => "Error", "msg" => "Invalid Institute Code");
			return $response;
		}
	}


//#################### Main Login End ####################//

}
?>
