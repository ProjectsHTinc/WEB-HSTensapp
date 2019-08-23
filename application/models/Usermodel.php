<?php

Class Usermodel extends CI_Model
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

//#################### Payment Review ####################// 
	function user_details($user_id){
		$query = "SELECT
					*
				FROM
					institute_master A,
					institute_details B
				WHERE
					A.id = '$user_id' AND A.id = B.institute_master_id";
		$res = $this->db->query($query);
		$user_details = $res->result();
		return $user_details;
	}
//#################### Plan Details End ####################// 

//#################### Master Plans ####################//
	function checkmobile($phone,$user_id){
		$select="SELECT * FROM institute_master WHERE mobile='$phone' AND id !='$user_id'";
		$result=$this->db->query($select);
		 
		 if($result->num_rows()>0){
				echo "false";
		   }else{
				echo "true";
		 }
	}
//#################### Master Plans ####################//

//#################### Master Plans ####################//
	
	function checkemail($email,$user_id){
			$select="SELECT * FROM institute_master WHERE email='$email' AND id !='$user_id'";
			$result=$this->db->query($select);
			
			   if($result->num_rows()>0){
					echo "false";
				 }else{
				   echo "true";
			   }
	}
	
//#################### Master Plans ####################//

//#################### Master Plans ####################//
		   
	function update_profile($inst_name,$email,$phone,$contact_person,$person_designation,$user_id){
		  $update_query ="UPDATE institute_details SET institute_name='$inst_name',contact_person ='$contact_person',person_designation= '$person_designation'  WHERE institute_master_id='$user_id'";
		  $resultset_update=$this->db->query($update_query);
		  
		  $update_query ="UPDATE institute_master SET email='$email',mobile='$phone' WHERE id='$user_id'";
		  $resultset_update=$this->db->query($update_query);
		  
		  if($resultset_update){
			$data = array("status" => "success");
			return $data;
		  }else{
			$data = array("status" => "failed");
			return $data;
		  }

	}
 //#################### Master Plans ####################//
  
 //#################### Master Plans ####################//
		   
	function password_update($new_password,$user_id){
		  
		  $new_spassword = md5($new_password);
		  $update_query ="UPDATE institute_master SET password='$new_spassword' WHERE id='$user_id'";
		  $resultset_update=$this->db->query($update_query);
		  
		  if($resultset_update){
				$datas=$this->session->userdata();
				$this->session->unset_userdata($datas);
				$this->session->sess_destroy();
			$data = array("status" => "success");
			return $data;
		  }else{
			$data = array("status" => "failed");
			return $data;
		  }

	}
  //#################### Master Plans ####################// 
  
  
//#################### Master Plans ####################//
   function master_plans(){
		$user_id = $this->session->userdata('user_id');
		$inst_type = $this->session->userdata('inst_type');

		$query = "SELECT * FROM master_plans WHERE status='Active'";
		$res = $this->db->query($query);
		 
		$master_plans = $res->result();
		return $master_plans;
	}
	
//#################### Master Plans End ####################//
	
	
	
//#################### First Time User Select Plan ####################//  	
	function user_request_plan($master_plan_id){
		$institute_master_id = $this->session->userdata('user_id');
		
		$sQuery = "SELECT * FROM institute_master A, institute_details B WHERE A.id = '$institute_master_id' AND A.id = B.institute_master_id";
		$sResult = $this->db->query($sQuery);
		foreach($sResult->result() as $row){
		   $institute_name = $row->institute_name;
		   $contact_person = $row->contact_person;
		   $institute_type_id = $row->institute_type;
		   $email = $row->email;
		   $mobile = $row->mobile;
		}
		
		$current_date = date('Y-m-d');
		$date = strtotime("+7 day");
		$expiry_day = date('Y-m-d', $date);

		$length = 6;    
		$random_string = substr(str_shuffle('0123456789ABCDEFGHIJKLMNOPQRSTUVWXYZ'),1,$length);
		$random_string = "abc123";
		$random_password = md5($random_string);

		$sQuery = "SELECT * FROM institute_plans WHERE master_plan_id = '$master_plan_id' AND institute_master_id = '$institute_master_id' AND status = 'Requested'";
		$sResult = $this->db->query($sQuery);
		
		if($sResult->num_rows()>0){
			$response = array("status" => "Already");
		} else {
			if ($master_plan_id ==1){
				$query = "INSERT INTO institute_plans(institute_master_id,institute_type_id,master_plan_id,notes,status,created_by,created_at) VALUES('$institute_master_id','$institute_type_id','$master_plan_id','Demo Plan','Active','$institute_master_id',now())";
				$result = $this->db->query($query);
				$institute_plan_id = $this->db->insert_id();
				
				$query = "INSERT INTO institute_plan_history(institute_master_id,institute_plan_id,master_plan_id,purchase_order_id,purchase_date,purchase_amount,purchase_notes,activated_date,expiry_date,status,created_by,created_at) VALUES('$institute_master_id','$institute_plan_id','$master_plan_id','','$current_date','','Demo Plan','$current_date','$expiry_day','Live','$institute_master_id',now())";
				$result = $this->db->query($query);
				
				//------------Connect demo DB ---------------//
				$this->db_second = $this->load->database('second', TRUE); 
				$query = "INSERT INTO edu_users(name,user_name,user_password,user_type,status) VALUES('$contact_person','$mobile','$random_password','1','Active')";
				$result = $this->db_second->query($query);
				$this->db_second->close();
				//------------Connect demo DB End---------------//
				
				$subject = "Ensyfi - Demo Login details";
				$htmlContent = "Hi ".$institute_name.", <br><br>Website URL : https://ensyfi.com/demo/ <br>Username : ".$mobile."<br>Password : ".$random_string."<br><br><br>Ensyfi";
				$this->sendMail($email,$subject,$htmlContent);

				$mobile_message = "Hi ".$institute_name.",\n Demo Login Details \n URL : https://ensyfi.com/demo/ \n User Name : ".$mobile." \n Password : ".$random_string."";
				$this->sendSMS($mobile,$mobile_message);
				
			} 
			else if ($master_plan_id ==2){
				$query = "INSERT INTO institute_plans(institute_master_id,institute_type_id,master_plan_id,notes,status,created_by,created_at) VALUES('$institute_master_id','$institute_type_id','$master_plan_id','Standard Plan','Requested','$institute_master_id',now())";
				$result = $this->db->query($query);
				$institute_plan_id = $this->db->insert_id();
				
				$query = "INSERT INTO institute_plan_history(institute_master_id,institute_plan_id,master_plan_id,purchase_notes,status,created_by,created_at) VALUES('$institute_master_id','$institute_plan_id','$master_plan_id','Standard Plan','Requested',' $institute_master_id ',now())";
				$result = $this->db->query($query);
				
				$subject = "Ensyfi";
				$htmlContent = "Hi ".$institute_name.", <br><br>Thanks for your Request.. We will contact you shortly<br><br><br>Ensyfi";
				$this->sendMail($email,$subject,$htmlContent);

				$mobile_message = "Hi ".$institute_name.",\n Thanks for your Request..\n We will contact you shortly";
				$this->sendSMS($mobile,$mobile_message);
			}
			else {
				$query = "INSERT INTO institute_plans(institute_master_id,institute_type_id,master_plan_id,notes,status,created_by,created_at) VALUES('$institute_master_id','$institute_type_id','$master_plan_id','Advanced Plan','Requested','$institute_master_id',now())";
				$result = $this->db->query($query);
				$institute_plan_id = $this->db->insert_id();
				
				$query = "INSERT INTO institute_plan_history(institute_master_id,institute_plan_id,master_plan_id,purchase_notes,status,created_by,created_at) VALUES('$institute_master_id','$institute_plan_id','$master_plan_id','Advanced Plan','Requested',' $institute_master_id ',now())";
				$result = $this->db->query($query);
				
				$subject = "Ensyfi";
				$htmlContent = "Hi ".$institute_name.", <br><br>Thanks for your Request.. We will contact you shortly<br><br><br>Ensyfi";
				$this->sendMail($email,$subject,$htmlContent);

				$mobile_message = "Hi ".$institute_name.",\n Thanks for your Request..\n We will contact you shortly";
				$this->sendSMS($mobile,$mobile_message);
				
			}
			$response = array("status" => "success");
		}


		return $response;
	}
	
//#################### User Select Plan End ####################//  
 	
  	
//#################### Institute Plans ####################//
   function institute_plans(){
		$user_id = $this->session->userdata('user_id');
		$inst_type = $this->session->userdata('inst_type');

		$query = "SELECT
					A.id,
					C.plan_name,
					A.institute_master_id,
					A.master_plan_id,
					A.purchase_amount,
					A.activated_date,
					A.expiry_date,
					A.status
				FROM
					institute_plan_history A,
					master_plans C
				WHERE
					A.institute_master_id = '$user_id' AND A.master_plan_id = C.id ORDER BY A.id DESC";
		$res = $this->db->query($query);
		 
		$institute_plans = $res->result();
		return $institute_plans;
	}
	
//#################### Institute Plans End ####################//
	
	
//#################### Renew or Update Plans ####################//
   function renew_plans(){
		$user_id = $this->session->userdata('user_id');
		$inst_type = $this->session->userdata('inst_type');

		$query = "SELECT
					dm.id,
					dm.plan_name,
					dd.institute_master_id,
					dd.master_plan_id,
					dd.id AS institute_plan_id
				FROM
					master_plans AS dm
				LEFT JOIN institute_plans AS dd
				ON
					dm.id = dd.master_plan_id AND dd.institute_master_id = '$user_id'";
		$res = $this->db->query($query);
		 
		$renew_plans = $res->result();
		return $renew_plans;
	
   }
//#################### Renew or Update Plans End ####################//
	
		
//#################### Institute Renew or Update Plans ####################//
   function renew_request_plan($master_plan_id,$renew_type,$institute_plan_id){
		$inst_type = $this->session->userdata('inst_type');
		$institute_master_id = $this->session->userdata('user_id');

		$sQuery = "SELECT * FROM institute_master A, institute_details B WHERE A.id = '$institute_master_id' AND A.id = B.institute_master_id";
		$sResult = $this->db->query($sQuery);
			foreach($sResult->result() as $row){
			   $institute_name = $row->institute_name;
			   $contact_person = $row->contact_person;
			   $institute_type_id = $row->institute_type;
			   $email = $row->email;
			   $mobile = $row->mobile;
			}
			
			if ($master_plan_id =='2'){
				
					if ($renew_type == 'New') {
						$query = "INSERT INTO institute_plans(institute_master_id,institute_type_id,master_plan_id,notes,status,created_by,created_at) VALUES('$institute_master_id','$institute_type_id','$master_plan_id','Standard Plan','Requested','$institute_master_id',now())";
						$result = $this->db->query($query);
						$institute_plan_id = $this->db->insert_id();
					}
				
					$query = "INSERT INTO institute_plan_history(institute_master_id,institute_plan_id,master_plan_id,purchase_notes,status,created_by,created_at) VALUES('$institute_master_id','$institute_plan_id','$master_plan_id','Standard Plan','Requested','$institute_master_id ',now())";
					$result = $this->db->query($query);
					
				$subject = "Ensyfi";
				$htmlContent = "Hi ".$institute_name.", <br><br>Thanks for your Request.. We will contact you shortly<br><br><br>Ensyfi";
				$this->sendMail($email,$subject,$htmlContent);

				$mobile_message = "Hi ".$institute_name.",\n Thanks for your Request..\n We will contact you shortly";
				$this->sendSMS($mobile,$mobile_message);
			}
			else {
				if ($renew_type == 'New') {
					$query = "INSERT INTO institute_plans(institute_master_id,institute_type_id,master_plan_id,notes,status,created_by,created_at) VALUES('$institute_master_id','$institute_type_id','$master_plan_id','Advanced Plan','Requested','$institute_master_id',now())";
					$result = $this->db->query($query);
					$institute_plan_id = $this->db->insert_id();
				}
				
				$query = "INSERT INTO institute_plan_history(institute_master_id,institute_plan_id,master_plan_id,purchase_notes,status,created_by,created_at) VALUES('$institute_master_id','$institute_plan_id','$master_plan_id','Advanced Plan','Requested','$institute_master_id ',now())";
				$result = $this->db->query($query);
				
				$subject = "Ensyfi";
				$htmlContent = "Hi ".$institute_name.", <br><br>Thanks for your Request.. We will contact you shortly<br><br><br>Ensyfi";
				$this->sendMail($email,$subject,$htmlContent);

				$mobile_message = "Hi ".$institute_name.",\n Thanks for your Request..\n We will contact you shortly";
				$this->sendSMS($mobile,$mobile_message);
			}
			
			$response = array("status" => "success");

		return $response;
	}
	
//#################### Institute Renew or Update Plans End ####################//
	
	
	
	
//#################### Payment Review ####################// 
	function payment_review($plan_id){
		$query = "SELECT
					A.id,
					A.institute_master_id,
					C.institute_name,
					B.no_of_users,
					B.plan_duration,
					B.pricing,
					D.plan_name,
					A.status
				FROM
					institute_plan_history A,
					institute_plans B,
					institute_details C,
					master_plans D
				WHERE
					A.id = '$plan_id' AND A.institute_plan_id = B.id AND A.master_plan_id = D.id AND A.institute_master_id = C.institute_master_id";
		$res = $this->db->query($query);
		$result = $res->result();
		return $result;
	}
//#################### Plan Details End ####################// 
	
		
//#################### Folder Copy ####################// 
	
	function folder_copy($src, $dst){
		if(is_dir($src))
		{
			if(!is_dir($dst))
			{
				mkdir($dst, 0777, true);
			}
			$dir_items = array_diff(scandir($src), array('..', '.'));
			if(count($dir_items) > 0)
			{
				foreach($dir_items as $v)
				{
					$this->folder_copy(rtrim(rtrim($src, '/'), '\\').DIRECTORY_SEPARATOR.$v, rtrim(rtrim($dst, '/'), '\\').DIRECTORY_SEPARATOR.$v);
				}
			}
		}
		elseif(is_file($src))
		{
			copy($src, $dst);
		}
	}
//#################### Folder Copy End ####################// 


//#################### Order Confirmation and Generation URL and DB for Users ####################// 

	function order_confirm($purchase_id){
	    
		$user_id = $this->session->userdata('user_id');
		$current_date = date('Y-m-d H:i:s');
		$startDate = time();
		
		$expiry_date = date('Y-m-d H:i:s', strtotime('+10 day', $startDate));

			$sQuery = "SELECT
			           A.purchase_order_id,
					   B.institute_type_id,
					   B.pricing,
					   B.no_of_users
					FROM
						institute_plan_history A,
						institute_plans B
					WHERE
						A.id = '$purchase_id' AND A.institute_plan_id = B.id";
			$sResult = $this->db->query($sQuery);
			
			foreach($sResult->result() as $srow){
			    $institute_type_id = $srow->institute_type_id;
			    $pricing = $srow->pricing ;
			    $orderid = $srow->purchase_order_id ;
			    $no_of_users = $srow->no_of_users ;
			    
    			   if ($institute_type_id ==1){
    			        $plan_type_name = "School";
    			   } else if ($institute_type_id ==2){
    				   $plan_type_name = "College";
    			   } else {
    					$plan_type_name = "PIA";
    			   }
			} 
	
		$sQuery = "SELECT A.id,A.institute_code,A.email,A.mobile,A.email_verify,A.mobile_verify,B.* FROM institute_master A, institute_details B WHERE A.id = B.institute_master_id AND A.id = '$user_id' ";
   		$sResult = $this->db->query($sQuery);
    		foreach($sResult->result() as $srow){
    		    $institute_code = $srow->institute_code;
			    $user_email = $srow->email;
			    $user_mobile  = $srow->mobile;
			    $institute_name  = $srow->institute_name;
    		}

        $sQuery = "SELECT * FROM  institute_master WHERE id = '$user_id' AND app_status ='1'";
		$sResult = $this->db->query($sQuery);
		
		if($sResult->num_rows()>0){
		    
				$query = "UPDATE institute_plan_history SET purchase_order_id = '$orderid', purchase_date = '$current_date',purchase_amount ='$pricing',status = 'Success' WHERE id = '$purchase_id'";
				$result = $this->db->query($query);
				
				$query = "UPDATE institute_dashboard SET no_of_users = '$no_of_users' WHERE user_master_id = '$user_id'";
				$result = $this->db->query($query);
			
				$subject = "Ensyfi";
				$htmlContent = "Hi ".$institute_name.", <br><br>Website URL : https://ensyfi.com/".$institute_code."/ <br>No of Users : ".$no_of_users."<br> Please Activate your plan in your login";
				$this->sendMail($user_email,$subject,$htmlContent);

				$mobile_message = "Hi ".$institute_name.", Plan successfully placed. Login details \n URL : https://ensyfi.com/".$institute_code."/ \n No of Users : ".$no_of_users."";
				$this->sendSMS($user_mobile,$mobile_message);	
			
				redirect('/dashboard');
           }else{

        		//#-------------DATABASE AND TABLE CREATION--------------#//
        		
        		$base_db =  "ensyfi_".$institute_code;
        		
        		$db_query = "CREATE DATABASE IF NOT EXISTS `".$base_db."`";
                $db_ex = $this->db->query($db_query);	
        		
        		$config = array();
        		$config['hostname'] = "localhost";
        		$config['username'] = "root";
        		$config['password'] = "O+E7vVgBr#{}";
        		$config['database'] = $base_db;
        		$config['dbdriver'] = "mysqli";
        		$config['dbprefix'] = "";
        		$config['pconnect'] = FALSE;
        		$config['db_debug'] = TRUE;
        		$config['cache_on'] = FALSE;
        		$config['cachedir'] = "";
        		$config['char_set'] = "utf8";
        		$config['dbcollat'] = "utf8_general_ci";
        
        
        		$CI =& get_instance();
        		$CI->db_1 = $CI->load->database($config, TRUE);
        		$CI->db_1 =& $CI->db_1;
         
        		$temp_line = '';
        		$lines = file($_SERVER["DOCUMENT_ROOT"]."/ensyfi_source_sql/ens_app.sql"); 
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
        
        		$query = "INSERT INTO edu_users(`user_id`, `school_id`, `name`, `user_name`, `user_password`, `user_pic`, `user_type`, `user_master_id`, `parent_id`, `teacher_id`, `student_id`, `created_date`, `updated_date`, `status`, `last_login_date`, `login_count`, `password_status`) VALUES
        (1, '$institute_code', '$institute_code', 'admin', '21232f297a57a5a743894a0e4a801fc3', '', 1, 1, 0, 0, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 'Active', '0000-00-00 00:00:00', 0, 1)";
        		$result = $this->db_1->query($query);
        		
        		$this->db_1->close();
        		
        		//#-------------DATABASE AND TABLE CREATION END--------------#//
        		
        		
        		
        		$src = $_SERVER["DOCUMENT_ROOT"]."/ensyfi_source_code";
        		$dst = $_SERVER["DOCUMENT_ROOT"]."/".$institute_code;
        		$this->folder_copy($src,$dst);
        
        		$dbFile = $_SERVER['DOCUMENT_ROOT'] . "/$institute_code/application/config/database.php";
        		$fDb = fopen($dbFile,"w");
$string = <<<MOD
<?php
defined('BASEPATH') OR exit('No direct script access allowed');
\$active_group = 'default';
\$query_builder = TRUE;
\$db['default'] = array(
	'dsn'	=> '',
	'hostname' => 'localhost',
	'username' => 'root',
	'password' => 'O+E7vVgBr#{}',
	'database' => '$base_db',
	'dbdriver' => 'mysqli',
	'dbprefix' => '',
	'pconnect' => FALSE,
	'db_debug' => (ENVIRONMENT !== 'production'),
	'cache_on' => FALSE,
	'cachedir' => '',
	'char_set' => 'utf8',
	'dbcollat' => 'utf8_general_ci',
	'swap_pre' => '',
	'encrypt' => FALSE,
	'compress' => FALSE,
	'stricton' => FALSE,
	'failover' => array(),
	'save_queries' => TRUE
);

\$db['second'] = array(
    'dsn'   => '',
    'hostname' => 'localhost',
    'username' => 'root',
    'password' => 'O+E7vVgBr#{}',
    'database' => 'ensyfi_newsite',
    'dbdriver' => 'mysqli',
    'dbprefix' => '',
    'pconnect' => FALSE,
    'db_debug' => (ENVIRONMENT !== 'production'),
    'cache_on' => FALSE,
    'cachedir' => '',
    'char_set' => 'utf8',
    'dbcollat' => 'utf8_general_ci',
    'swap_pre' => '',
    'encrypt' => FALSE,
    'compress' => FALSE,
    'stricton' => FALSE,
    'failover' => array(),
    'save_queries' => TRUE
);
MOD;

        		fwrite($fDb, $string);
        		fclose($fDb);
        		chmod($dbFile,0777);
        		
        		$base_url = "http://ensyfi.com/".$institute_code;
        
        		$conFile = $_SERVER['DOCUMENT_ROOT'] . "/$institute_code/application/config/config.php";
        		$fcon = fopen($conFile,"w");
$content = <<<POD
<?php
defined('BASEPATH') OR exit('No direct script access allowed');
\$config['base_url'] = '$base_url';
\$config['index_page'] = '';
\$config['uri_protocol'] = 'REQUEST_URI';
\$config['url_suffix'] = '';
\$config['language']	= 'english';
\$config['charset'] = 'UTF-8';
\$config['enable_hooks'] = FALSE;
\$config['subclass_prefix'] = 'MY_';
\$config['composer_autoload'] = FALSE;
\$config['permitted_uri_chars'] = 'a-z 0-9~%.:_\-';
\$config['allow_get_array'] = TRUE;
\$config['enable_query_strings'] = FALSE;
\$config['controller_trigger'] = 'c';
\$config['function_trigger'] = 'm';
\$config['directory_trigger'] = 'd';
\$config['log_threshold'] = 0;
\$config['log_path'] = '';
\$config['log_file_extension'] = '';
\$config['log_file_permissions'] = 0644;
\$config['log_date_format'] = 'Y-m-d H:i:s';
\$config['error_views_path'] = '';
\$config['cache_path'] = '';
\$config['cache_query_string'] = FALSE;
\$config['encryption_key'] = '';
\$config['sess_driver'] = 'files';
\$config['sess_cookie_name'] = 'ci_session';
\$config['sess_expiration'] = 7200;
\$config['sess_save_path'] = sys_get_temp_dir();
\$config['sess_match_ip'] = FALSE;
\$config['sess_time_to_update'] = 300;
\$config['sess_regenerate_destroy'] = FALSE;
\$config['cookie_prefix']	= '';
\$config['cookie_domain']	= '';
\$config['cookie_path']		= '/';
\$config['cookie_secure']	= FALSE;
\$config['cookie_httponly'] 	= FALSE;
\$config['standardize_newlines'] = FALSE;
\$config['global_xss_filtering'] = FALSE;
\$config['csrf_protection'] = FALSE;
\$config['csrf_token_name'] = 'csrf_test_name';
\$config['csrf_cookie_name'] = 'csrf_cookie_name';
\$config['csrf_expire'] = 7200;
\$config['csrf_regenerate'] = TRUE;
\$config['csrf_exclude_uris'] = array();
\$config['compress_output'] = FALSE;
\$config['time_reference'] = 'local';
\$config['rewrite_short_tags'] = FALSE;
\$config['proxy_ips'] = '';
POD;

        		fwrite($fcon, $content);
        		fclose($fcon);
        		chmod($conFile,0777);
        

        		$query = "UPDATE institute_plan_history SET purchase_order_id = '$orderid', purchase_date = '$current_date',purchase_amount ='$pricing', activated_date = '$current_date' ,expiry_date = '$expiry_date', status = 'Live' WHERE id = '$purchase_id'";
				$result = $this->db->query($query);
        		
        		$query = "INSERT INTO institute_dashboard(user_master_id,user_type_id,user_type,no_of_users,created_by,created_at) VALUES('$user_id','$institute_type_id','$plan_type_name','$no_of_users','$user_id',now())";
        		$result = $this->db->query($query);
        		
        	    $query = "UPDATE institute_master SET app_status = '1' WHERE id = '$user_id'";
        	    $result = $this->db->query($query);     	    
        	    
        	    $subject = "Ensyfi - Login details";
				$htmlContent = "Hi ".$institute_name.", <br><br>Website URL : https://ensyfi.com/".$institute_code."/ <br>No of Users : ".$no_of_users."<br>Username : admin<br>Password : admin<br><br><br>Ensyfi";
				$this->sendMail($user_email,$subject,$htmlContent);

				$mobile_message = "Hi ".$institute_name.", Plan successfully placed. Login details \n URL : https://ensyfi.com/".$institute_code."/ \n No of Users : ".$no_of_users."\n User Name : admin \n Password : admin";
				$this->sendSMS($user_mobile,$mobile_message);	
				
        		redirect('/dashboard');
           }    

		
	}
//#################### Order Confirmation End ####################// 
	
	
//#################### Activate Plan Details ####################// 
	function activate_plan($purchase_id){
		
		$user_id = $this->session->userdata('user_id');
		$current_date = date('Y-m-d H:i:s');
		$startDate = time();
		$expiry_date = date('Y-m-d H:i:s', strtotime('+30 day', $startDate));
		
		$query = "UPDATE institute_plan_history SET activated_date = '$current_date',expiry_date = '$expiry_date', status = 'Live' WHERE id = '$purchase_id'";
		$result = $this->db->query($query);
		
		
		$query = "UPDATE institute_plan_history SET status = 'Expiry' WHERE id != '$purchase_id'";
		$result = $this->db->query($query);
		
		
		$query = "SELECT
					A.id,
					A.institute_master_id,
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
					A.id = '$purchase_id' AND A.institute_plan_id = B.id AND A.master_plan_id = D.id AND A.institute_master_id = C.institute_master_id AND C.institute_master_id = E.id";
		$res = $this->db->query($query);
		$result = $res->result();
		foreach($result->result() as $srow){
				$institute_name = $srow->institute_name ;
				$mobile = $srow->mobile;
				$mobile = $srow->email;
			}
			
				$subject = "Ensyfi - Plan Activated";
				$htmlContent = "Hi ".$institute_name.", <br><br>Your Plan is activated<br><br><br>Ensyfi";
				$this->sendMail($user_email,$subject,$htmlContent);

				$mobile_message = "Hi ".$institute_name.", Plan Activated. ";
				$this->sendSMS($user_mobile,$mobile_message);	
				
		return $result;
	}
//#################### Activate Plan Details End ####################// 

	
//#################### Plan Details ####################// 
	function plan_history($user_id){
		$query = "SELECT A.*,B.plan_name FROM institute_plans A, master_plans B WHERE A.master_plan_id = B.id AND A.institute_master_id = '$user_id' ORDER BY A.id DESC";
		$res = $this->db->query($query);
		$result = $res->result();
		return $result;
	}
//#################### Plan Details End ####################// 
		








	//#################### Plan Expiry check ####################// 
	function plan_expiry_check(){
		$sQuery = "SELECT * FROM user_plan_history WHERE status = 'Live'";
		$sResult = $this->db->query($sQuery);
		$current_date = date('Y-m-d H:i:s');
		
		foreach($sResult->result() as $srow){
		    $plan_id = $srow->id ;
		    $expiry_date = $srow->expiry_date;

		    if($expiry_date > $current_date)
			{
			    $query = "UPDATE user_plan_history SET status ='Expiry'  WHERE id ='$plan_id'";
	        	$res = $this->db->query($query);
			}  
		}
	}
	//#################### Plan Expiry check End ####################//

	
}
?>
