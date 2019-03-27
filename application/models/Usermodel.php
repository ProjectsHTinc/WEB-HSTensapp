<?php

Class Usermodel extends CI_Model
{
	  public function __construct()
	  {
		  parent::__construct();
	  }
  
   function user_plans($user_id){
	 $query="SELECT A.*,B.plan_name,B.no_of_users from user_plan_history A, plan_master B WHERE A.plan_id = B.id AND A.user_id='$user_id' AND A.status ='Live'";
	 $res=$this->db->query($query);
	 $user_plans = $res->result();
	 return $user_plans;
   }

   function user_inst_plans($inst_type){
		$query = "SELECT A.*,B.type_name FROM plan_master A, institute_type B WHERE A.plan_type = B.id AND A.plan_type = '$inst_type' AND A.status='Active'";
		$res = $this->db->query($query);
		$user_inst_plans = $res->result();
		return $user_inst_plans;
	}
	
	function user_select_plan($plan_id){
		$user_id = $this->session->userdata('user_id');
		
		$sQuery = "SELECT * FROM plan_master WHERE id = '$plan_id'";
		$sResult = $this->db->query($sQuery);
		foreach($sResult->result() as $srow){
		   $plan_name = $srow->plan_name ;
		   $no_of_users = $srow->no_of_users ;
		   $duration = $srow->duration ;
		   $pricing = $srow->pricing ;
		   $discount = $srow->discount ;
		   $total_amount = $pricing - $discount;
		}
		$sQuery = "SELECT * FROM user_details WHERE user_master_id = '$user_id'";
		$sResult = $this->db->query($sQuery);
		foreach($sResult->result() as $srow){
		   $institute_name = $srow->institute_name ;
		}
		$current_date = date("Y-m-d");
		$query = "INSERT INTO user_purchase_history(user_id,plan_id,purchase_date,purchase_amount,status,created_by,created_at) VALUES('$user_id','$plan_id','$current_date','$total_amount','Pending','$user_id',now())";
		$result = $this->db->query($query);
		$insert_id = $this->db->insert_id();
		if($result){
			$response = array("status" => "success","last_insert_id" =>$insert_id);
		}else{
			$response = array("status" => "failed");
		}
		return $response;
	}
	
	function purchase_details($purchase_id){
		$query = "SELECT A.*,B.plan_name,B.no_of_users,B.duration,C.institute_name FROM user_purchase_history A,plan_master B,user_details C WHERE A.plan_id = B.id AND A.user_id = C.user_master_id AND A.id = '$purchase_id'";
		$res = $this->db->query($query);
		$result = $res->result();
		return $result;
	}
	
	
	function checkout_demo($purchase_id,$order_id){
		$user_id = $this->session->userdata('user_id');
		$current_date = date('Y-m-d H:i:s');
		$startDate = time();
		$expiry_date = date('Y-m-d H:i:s', strtotime('+10 day', $startDate));
		
		$sQuery = "SELECT * FROM user_purchase_history WHERE id = '$purchase_id'";
		$sResult = $this->db->query($sQuery);
		foreach($sResult->result() as $srow){
		   $plan_id = $srow->plan_id ;
		   $user_id = $srow->user_id ;
		}
		
		$sQuery = "SELECT * FROM plan_master WHERE id = '$plan_id'";
		$sResult = $this->db->query($sQuery);
		foreach($sResult->result() as $srow){
		   //$plan_id = $srow->plan_id ;
		   $plan_type = $srow->plan_type ;
		   $no_of_users = $srow->no_of_users;
		   
		   if ($plan_type ==1){
			   $plan_type_name = "School";
		   } else if ($plan_type ==2){
			   $plan_type_name = "College";
		   } else {
			    $plan_type_name = "PIA";
		   }
		}

		$sQuery = "SELECT * FROM user_master WHERE id = '$user_id'";
		$sResult = $this->db->query($sQuery);
		foreach($sResult->result() as $srow){
		   $institute_code = $srow->institute_code ;
		}		
		$base_db =  "ensyfi_".$institute_code;
		$db_query = "CREATE DATABASE IF NOT EXISTS `".$base_db."`";
        $db_ex = $this->db->query($db_query);	
		
		$config = array();
		$config['hostname'] = "localhost";
		$config['username'] = "root";
		$config['password'] = "";
		$config['database'] = $base_db;
		$config['dbdriver'] = "mysql";
		$config['dbprefix'] = "";
		$config['pconnect'] = TRUE;
		$config['db_debug'] = TRUE;
		$config['cache_on'] = FALSE;
		$config['cachedir'] = "";
		$config['char_set'] = "utf8";
		$config['dbcollat'] = "utf8_general_ci";

		$CI =& get_instance();
		$CI->db_1 = $CI->load->database($config, TRUE);
		$CI->db_1 =& $CI->db_1;
 
		$temp_line = '';
		$lines = file($_SERVER["DOCUMENT_ROOT"]."/source/ens_app.sql"); 
		foreach ($lines as $line)
		{
			if (substr($line, 0, 2) == '--' || $line == '' || substr($line, 0, 1) == '#')
				continue;
			$temp_line .= $line;
			if (substr(trim($line), -1, 1) == ';')
			{
			    $this->db_1->query($temp_line);
				$temp_line = '';
			}
		}
		$this->db_1->close();	
		
				
		
		$query="UPDATE user_purchase_history SET status='Live',purchase_order_id = '$order_id' WHERE id = '$purchase_id'";
        $ex=$this->db->query($query);
		   
		$query = "INSERT INTO user_plan_history(user_id,plan_id,purchase_order_id,activated_date,expiry_date,status,created_by,created_at) VALUES('$user_id','$plan_id','$order_id','$current_date','$expiry_date','Live','$user_id',now())";
		$result = $this->db->query($query);
		
		$query = "INSERT INTO institute_dashboard(user_master_id,user_type_id,user_type,no_of_users,created_by,created_at) VALUES('$user_id','$plan_type','$plan_type_name','$no_of_users','$user_id',now())";
		$result = $this->db->query($query);
		
		redirect('/dashboard');
	}
	
	
	function user_plan_history($user_id){

		$sQuery="SELECT * from user_plan_history WHERE user_id='$user_id' AND status ='Live'";
		$sResult = $this->db->query($sQuery);
		foreach($sResult->result() as $srow){
		   $plan_id = $srow->plan_id ;
		}
		$inst_type =1;
		
		$query = "SELECT A.*,B.type_name FROM plan_master A, institute_type B WHERE A.plan_type = B.id AND A.plan_type = '$inst_type' AND A.id !='$plan_id'  AND A.status='Active'";
		$res = $this->db->query($query);
		$user_inst_plans = $res->result();
		return $user_inst_plans;

   }
}
?>
