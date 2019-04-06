<?php

Class Adminmodel extends CI_Model
{
  public function __construct()
  {
      parent::__construct();
      //$this->load->model('smsmodel');
  }

	function add_plan_details($plan_name,$institute_type,$plan_type,$no_of_users,$duration,$pricing,$discount,$notes){
		$query = "INSERT INTO plan_master(plan_name,institute_type,plan_type,no_of_users,notes,duration,pricing,discount,status) VALUES('$plan_name','$institute_type','$plan_type','$no_of_users','$notes','$duration','$pricing','$discount','Active')";
		$result = $this->db->query($query);
		if($result){
			$response = array("status" => "success");
		}else{
			$response = array("status" => "failed");
		}
		return $response;
	}

	function check_plan_name($plan_name,$institute_type){
		$select="SELECT * FROM plan_master Where plan_name='$plan_name'";
         //$select="SELECT * FROM plan_master Where plan_name='$plan_name' AND institute_type = '$institute_type'";
         $result=$this->db->query($select);
           if($result->num_rows()>0){
             echo "false";
             }else{
               echo "true";
           }
       }
	   
	function view_plan_details(){
		$query = "SELECT A.*,B.type_name FROM plan_master A, institute_type B WHERE A.institute_type = B.id";
		$res = $this->db->query($query);
		$result = $res->result();
		return $result;
	}

	function plan_details($plan_id){
		$query = "SELECT * FROM plan_master WHERE id = '$plan_id'";
		$res = $this->db->query($query);
		$result = $res->result();
		return $result;
	}

	function update_plan_details($user_id,$plan_id,$plan_name,$institute_type,$plan_type,$no_of_users,$duration,$pricing,$discount,$notes,$status){
		$query = "UPDATE `plan_master` SET `plan_name`='$plan_name',`institute_type`='$institute_type',`plan_type`='$plan_type',`no_of_users`='$no_of_users',`notes`='$notes',`duration`='$duration',`pricing`='$pricing',`discount`='$discount',`status`='$status',`updated_by`='$$user_id',`updated_at`=now() WHERE id ='$plan_id'";
		$res = $this->db->query($query);
		if($res) {
			$response = array("status" => "success");
		}else{
			$response = array("status" => "failed");
		}
		return $response;
	}

	function view_customers(){
		$query = "SELECT A.*,B.institute_name,B.contact_person FROM user_master A, user_details B WHERE A.id = B.user_master_id AND A.user_role = '2'";
		$res = $this->db->query($query);
		$result = $res->result();
		return $result;
	}
	
	function view_customer_details($customer_id){
		$query = "SELECT A.id,A.institute_code,A.email,A.mobile,A.email_verify,A.mobile_verify,B.* FROM user_master A, user_details B WHERE A.id = B.user_master_id AND A.id = '$customer_id'";
		$res = $this->db->query($query);
		$result = $res->result();
		return $result;
	}
	
	function view_customer_plans($customer_id){
		$query = "SELECT A.*,B.plan_name FROM user_plan_history A, plan_master B WHERE A.plan_id = B.id AND A.user_id = '$customer_id' ORDER BY A.id DESC";
		$res = $this->db->query($query);
		$result = $res->result();
		return $result;
	}
	
	function view_customer_purchase($customer_id){
		$query = "SELECT A.*,B.plan_name FROM user_purchase_history A, plan_master B WHERE A.plan_id = B.id AND A.user_id = '$customer_id' ORDER BY A.id DESC";
		$res = $this->db->query($query);
		$result = $res->result();
		return $result;
	}

}
?>
