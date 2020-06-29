<?php

Class Adminmodel extends CI_Model
{
  public function __construct()
  {
      parent::__construct();
  }

//#################### Email ####################//

	function sendMail($to,$subject,$email_message)
	{
		// Set content-type header for sending HTML email
		$headers = "MIME-Version: 1.0" . "\r\n";
		$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
		// Additional headers
		$headers .= 'From: ENSYFI<admin@ensyfi.com>' . "\r\n";
		mail($to,$subject,$email_message,$headers);
	}

//#################### Email End ####################//

//#################### SMS ####################//

	function sendSMS($user_mobile,$mobile_message)
	{
        //Your authentication key
          $authKey = "191431AStibz285a4f14b4";

          //Multiple mobiles numbers separated by comma
          $mobile = "$user_mobile";

          //Sender ID,While using route4 sender id should be 6 characters long.
          $senderId = "ENSYFI";

          //Your message to send, Add URL encoding here.
          $message = $mobile_message;

          //Define route
          $route = "transactional";

          //Prepare you post parameters
          $postData = array(
              'authkey' => $authKey,
              'mobiles' => $mobile,
              'message' => $message,
              'sender' => $senderId,
              'route' => $route
          );

          //API URL
          $url="https://control.msg91.com/api/sendhttp.php";

          // init the resource
          $ch = curl_init();
          curl_setopt_array($ch, array(
              CURLOPT_URL => $url,
              CURLOPT_RETURNTRANSFER => true,
              CURLOPT_POST => true,
              CURLOPT_POSTFIELDS => $postData
              //,CURLOPT_FOLLOWLOCATION => true
          ));


          //Ignore SSL certificate verification
          curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
          curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);


          //get response
          $output = curl_exec($ch);

          //Print error if any
          if(curl_errno($ch))
          {
              echo 'error:' . curl_error($ch);
          }

          curl_close($ch);
	}

//#################### SMS End ####################//

//#################### Notification ####################//

	function sendNotification($gcm_key,$Title,$Message,$mobiletype)
	{
		if ($mobiletype =='1'){

		    require_once 'assets/notification/Firebase.php';
            require_once 'assets/notification/Push.php';

            $device_token = explode(",", $gcm_key);
            $push = null;

//        //first check if the push has an image with it
		    $push = new Push(
					$Title,
					$Message,
					'http://heylaapp.com/assets/notification/images/events.jpg'
				);

// 			//if the push don't have an image give null in place of image
 			// $push = new Push(
 			// 		'HEYLA',
 			// 		'Hi Testing from maran',
 			// 		null
 			// 	);

    		//getting the push from push object
    		$mPushNotification = $push->getPush();

    		//creating firebase class object
    		$firebase = new Firebase();

    	foreach($device_token as $token) {
    		 $firebase->send(array($token),$mPushNotification);
    	}

		} else {

			$device_token = explode(",", $gcm_key);
			$passphrase = 'hs123';
		    $loction ='assets/notification/heylaapp.pem';

			$ctx = stream_context_create();
			stream_context_set_option($ctx, 'ssl', 'local_cert', $loction);
			stream_context_set_option($ctx, 'ssl', 'passphrase', $passphrase);

			// Open a connection to the APNS server
			$fp = stream_socket_client('ssl://gateway.sandbox.push.apple.com:2195', $err, $errstr, 60, STREAM_CLIENT_CONNECT|STREAM_CLIENT_PERSISTENT, $ctx);

			if (!$fp)
				exit("Failed to connect: $err $errstr" . PHP_EOL);

			$body['aps'] = array(
				'alert' => array(
					'body' => $Message,
					'action-loc-key' => 'Heyla App',
				),
				'badge' => 2,
				'sound' => 'assets/notification/oven.caf',
				);

			$payload = json_encode($body);

			foreach($device_token as $token) {

				// Build the binary notification
    			$msg = chr(0) . pack("n", 32) . pack("H*", str_replace(" ", "", $token)) . pack("n", strlen($payload)) . $payload;
        		$result = fwrite($fp, $msg, strlen($msg));
			}

				fclose($fp);
		}
	}

//#################### Notification End ####################//

	
	
//#################### Dashboard Section ####################//  	

	function Dashboard_datas(){
			
			$total_demo = "SELECT * FROM institute_plan_history WHERE master_plan_id = '1'";
			$total_demo_res = $this->db->query($total_demo);
			$total_demo = $total_demo_res->num_rows();
			
			$total_demo_live = "SELECT * FROM institute_plan_history WHERE master_plan_id = '1' AND status = 'Active'";
			$total_demo_live_res = $this->db->query($total_demo_live);
			$total_demo_live = $total_demo_live_res->num_rows();
			
			$total_demo_expiry = "SELECT * FROM institute_plan_history WHERE master_plan_id = '1' AND status = 'Expiry'";
			$total_demo_expiry_res = $this->db->query($total_demo_expiry);
			$total_demo_expiry = $total_demo_expiry_res->num_rows();
			
			
			$total_standard = "SELECT * FROM institute_plan_history WHERE master_plan_id = '2'";
			$total_standard_res = $this->db->query($total_standard);
			$total_standard = $total_standard_res->num_rows();
			
			$total_standard_assigned = "SELECT * FROM institute_plan_history WHERE master_plan_id = '2' AND status = 'Assigned'";
			$total_standard_assigned_res = $this->db->query($total_standard_assigned);
			$total_standard_assigned = $total_standard_assigned_res->num_rows();
			
			$total_standard_live = "SELECT * FROM institute_plan_history WHERE master_plan_id = '2' AND status = 'Live'";
			$total_standard_live_res = $this->db->query($total_standard_live);
			$total_standard_live = $total_standard_live_res->num_rows();
			
			$total_standard_expiry = "SELECT * FROM institute_plan_history WHERE master_plan_id = '2'  AND status = 'Expiry'";
			$total_standard_expiry_res = $this->db->query($total_standard_expiry);
			$total_standard_expiry = $total_standard_expiry_res->num_rows();
			
			$total_advanced = "SELECT * FROM institute_plan_history WHERE master_plan_id = '3'";
			$total_advanced_res = $this->db->query($total_advanced);
			$total_advanced = $total_advanced_res->num_rows();
			
			$total_advanced_assigned = "SELECT * FROM institute_plan_history WHERE master_plan_id = '3' AND status = 'Assigned'";
			$total_advanced_assigned_res = $this->db->query($total_advanced_assigned);
			$total_advanced_assigned = $total_advanced_assigned_res->num_rows();
			
			$total_advanced_live = "SELECT * FROM institute_plan_history WHERE master_plan_id = '3' AND status = 'Live'";
			$total_advanced_live_res = $this->db->query($total_advanced_live);
			$total_advanced_live = $total_advanced_live_res->num_rows();
			
			$total_advanced_expiry = "SELECT * FROM institute_plan_history WHERE master_plan_id = '3'  AND status = 'Expiry'";
			$total_advanced_expiry_res = $this->db->query($total_advanced_expiry);
			$total_advanced_expiry = $total_advanced_expiry_res->num_rows();
			
			$total_requested = "SELECT * FROM institute_plan_history WHERE status = 'Requested'";
			$total_requested_res = $this->db->query($total_requested);
			$total_requested = $total_requested_res->num_rows();
			
			$total_institutes = "SELECT * FROM institute_master WHERE user_role = '2'";
			$total_institutes_res = $this->db->query($total_institutes);
			$total_institutes = $total_institutes_res->num_rows();
			
			$total_expiry = "SELECT
									*
								FROM
									institute_plan_history
								WHERE
									expiry_date >= DATE(now())
								AND
									expiry_date <= DATE_ADD(DATE(now()), INTERVAL 15 DAY)";
			$total_expiry_res = $this->db->query($total_expiry);
			$total_expiry = $total_expiry_res->num_rows();
			
			
			
			$result  = array(
					"total_demo" => $total_demo,
					"total_demo_live" => $total_demo_live,
					"total_demo_expiry" => $total_demo_expiry,
					"total_requested" => $total_requested,
					"total_standard" => $total_standard,
					"total_standard_assigned" => $total_standard_assigned,
					"total_standard_live" => $total_standard_live,
					"total_standard_expiry" => $total_standard_expiry,
					"total_advanced" => $total_advanced,
					"total_advanced_assigned" => $total_advanced_assigned,
					"total_advanced_live" => $total_advanced_live,
					"total_advanced_expiry" => $total_advanced_expiry,
					"total_institutes" => $total_institutes,
					"total_expiry" => $total_expiry
				);
					
			return $result;
	}
	
//#################### Dashboard Section End ####################//  
	
	
//#################### Requested plans ####################// 
	function requested_plans(){
			$query = "SELECT
						A.id,
						E.id AS inst_id,
						C.institute_name,
						E.institute_code,
						C.contact_person,
						E.mobile,
						D.plan_name,
						A.status
					FROM
						institute_plan_history A,
						master_plans D,
						institute_details C,
						institute_master E
					WHERE
						A.status = 'Requested' AND A.master_plan_id = D.id AND A.institute_master_id = C.institute_master_id AND C.institute_master_id = E.id";
			$res = $this->db->query($query);
			$result = $res->result();
			return $result;
	}
//#################### Requested plans End ####################// 


//#################### Requested plans details ####################// 
	function requested_plan_details($plan_id){
		$query = "SELECT
						A.id,
						C.institute_name,
						D.plan_name,
						A.status
					FROM
						institute_plan_history A,
						institute_details C,
						master_plans D
					WHERE
					A.id = '$plan_id' AND A.status = 'Requested' AND A.master_plan_id = D.id AND A.institute_master_id = C.institute_master_id";
		$res = $this->db->query($query);
		$result = $res->result();
		return $result;
	}

//#################### Requested plans details End ####################// 


//#################### Assignes Plans ####################// 
	function update_assign_plan($plan_id,$no_of_users,$duration,$pricing,$notes,$user_id){
		
		$query = "SELECT
					A.id,
					A.institute_master_id,
					A.institute_plan_id,
					A.activated_date,
					A.expiry_date,
					C.institute_name,
					B.no_of_users,
					B.plan_duration,
					B.pricing,
					D.plan_name,
					A.status,
					E.mobile,
					E.email
				FROM
					institute_plan_history A,
					institute_plans B,
					institute_details C,
					master_plans D,
					institute_master E
				WHERE
					A.id = '$plan_id' AND A.institute_plan_id = B.id AND A.master_plan_id = D.id AND A.institute_master_id = C.institute_master_id AND C.institute_master_id = E.id";
		$res = $this->db->query($query);
		//$result = $res->result();
		foreach($res->result() as $srow){
				$institute_plan_id = $srow->institute_plan_id;
				$institute_name = $srow->institute_name ;
				$mobile = $srow->mobile;
				$email = $srow->email;
			}
		

		$query = "UPDATE `institute_plan_history` SET `status`='Assigned' WHERE id ='$plan_id'";
		$res = $this->db->query($query);
		
		$query = "UPDATE `institute_plans` SET `no_of_users`='$no_of_users',`plan_duration`='$duration',`pricing`='$pricing',`status`='Active',`updated_by`='$user_id',`updated_at`=now() WHERE id ='$institute_plan_id'";
		$res = $this->db->query($query);
		
		
		$subject = "Ensyfi - Plan Activated";
		$htmlContent = "Hi ".$institute_name.", <br><br>Your Plan is Assigned<br><br><br>Ensyfi";
		$this->sendMail($email,$subject,$htmlContent);

		$mobile_message = "Hi ".$institute_name.", Your Plan is Assigned. ";
		$this->sendSMS($mobile,$mobile_message);	
		
		
		if($res) {
			$response = array("status" => "success");
		}else{
			$response = array("status" => "failed");
		}
		return $response;
	}
	
//#################### Assignes Plans End ####################// 


//#################### Delete Plans ####################// 
	function delete_request($plan_id){
		
		$sQuery = "SELECT B.id as ins_plan_id, B.status, A.id FROM institute_plan_history A, institute_plans B  WHERE A.id = '$plan_id' AND A.institute_plan_id = B.id";
		$sResult = $this->db->query($sQuery);	
			foreach($sResult->result() as $srow){
				$ins_plan_id = $srow->ins_plan_id ;
				$status = $srow->status;
			}
			
			$sQuery = "SELECT * from institute_plan_history WHERE institute_plan_id = '$ins_plan_id'";
			$sResult = $this->db->query($sQuery);
			
			 if($sResult->num_rows()==1){
				if ($status != 'Active') {
					$query = "DELETE FROM `institute_plans` WHERE `id` = '$ins_plan_id'";
					$result = $this->db->query($query);
				} 
			}
			
			$query = "DELETE FROM `institute_plan_history` WHERE `id` = '$plan_id'";
			$result = $this->db->query($query);
			
			$response = array("status" => "success");

		return $response;
	}

//#################### Delete Plans End ####################// 
	
//#################### List Customers ####################// 
	function view_customers(){
		$query = "SELECT A.*,B.institute_name,B.contact_person FROM institute_master A, institute_details B WHERE A.id = B.institute_master_id AND A.user_role = '2'";
		$res = $this->db->query($query);
		$result = $res->result();
		return $result;
	}
//#################### List Customers End ####################// 	
	
	
//#################### View customer details ####################// 	
	function view_customer_details($customer_id){
		$query = "SELECT A.id,A.institute_code,A.email,A.mobile,A.email_verify,A.mobile_verify,A.status as cust_status,B.* FROM institute_master A, institute_details B WHERE A.id = B.institute_master_id AND A.id = '$customer_id'";
		$res = $this->db->query($query);
		$result = $res->result();
		return $result;
	}

//#################### View customer details End ####################// 	


	function update_customer_details($user_id,$customer_id,$mobile,$status){
		
		//------------Connect demo DB ---------------//
			$this->db_second = $this->load->database('second', TRUE); 
			$query = "UPDATE `edu_users` SET `status`='$status',`updated_date`=now() WHERE user_name ='$mobile'";
			$res = $this->db_second->query($query);
			$this->db_second->close();
		//------------Connect demo DB End---------------//
				
				
		$query = "UPDATE `institute_master` SET `status`='$status',`updated_by`='$user_id',`updated_at`=now() WHERE id ='$customer_id'";
		$res = $this->db->query($query);
		if($res) {
			$response = array("status" => "success");
		}else{
			$response = array("status" => "failed");
		}
		return $response;
	}
	

//#################### View customer plans ####################// 
	function view_customer_plans($customer_id){
		$query = "SELECT
					A.*,
					B.plan_name
				FROM
					institute_plan_history A,
					master_plans B
				WHERE
					A.institute_master_id = '$customer_id' AND A.master_plan_id = B.id
				ORDER BY
					A.id
				DESC";
		$res = $this->db->query($query);
		$result = $res->result();
		return $result;
	}
//#################### View customer plans End ####################// 
	

//#################### List All Plans ####################// 
	function list_plans(){
		$query = "SELECT
					A.*,
					B.plan_name,
					C.institute_name
				FROM
					institute_plan_history A,
					master_plans B,
					institute_details C
				WHERE
					A.master_plan_id = B.id AND A.institute_master_id = C.institute_master_id AND (A.status !='Requested' OR A.status !='Assigned')
				ORDER BY
					A.id
				DESC";
		$res = $this->db->query($query);
		$result = $res->result();
		return $result;
	}
//#################### List All Plans End ####################// 	
	
	
	
	
	
	
	
	
	
	
	
	

	
	
	
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

	/* function view_customers(){
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
	} */

}
?>
