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


//#################### SMS ####################//

	function sendSMS($Phoneno,$Message)
	{
        //Your authentication key
          $authKey = "191431AStibz285a4f14b4";

          //Multiple mobiles numbers separated by comma
          $mobileNumber = "$phone";

          //Sender ID,While using route4 sender id should be 6 characters long.
          $senderId = "ENSYFI";

          //Your message to send, Add URL encoding here.
          $message = $notes;

          //Define route
          $route = "transactional";

          //Prepare you post parameters
          $postData = array(
              'authkey' => $authKey,
              'mobiles' => $phone,
              'message' => $notes,
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
  
   function user_plans($user_id){
	 $query="SELECT A.*,B.plan_name,B.no_of_users from user_plan_history A, plan_master B WHERE A.plan_id = B.id AND A.user_id='$user_id' AND A.status ='Live'";
	 $res=$this->db->query($query);
	 $user_plans = $res->result();
	 return $user_plans;
   }

   function user_inst_plans($inst_type){
		$user_id = $this->session->userdata('user_id');
			
		$query = "SELECT A.*,B.type_name FROM plan_master A, institute_type B WHERE A.institute_type = B.id AND A.institute_type = '$inst_type' AND A.status='Active'";
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
		   $institute_type = $srow->institute_type ;
		   $no_of_users = $srow->no_of_users;
		   
		   if ($institute_type ==1){
			   $plan_type_name = "School";
		   } else if ($institute_type ==2){
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
		
		
		//#-------------DATABASE AND TABLE CREATION--------------#//
		
		$base_db =  "ensyfi_".$institute_code;
		
		$db_query = "CREATE DATABASE IF NOT EXISTS `".$base_db."`";
        $db_ex = $this->db->query($db_query);	
		
		$config = array();
		$config['hostname'] = "localhost";
		$config['username'] = "root";
		//$config['password'] = "O+E7vVgBr#{}";
		$config['password'] = "";
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

		$query = "INSERT INTO edu_users(`user_id`, `school_id`, `name`, `user_name`, `user_password`, `user_pic`, `user_type`, `user_master_id`, `parent_id`, `teacher_id`, `student_id`, `created_date`, `updated_date`, `status`, `last_login_date`, `login_count`, `password_status`) VALUES
(1, '$institute_code', '$institute_code', 'admin', '21232f297a57a5a743894a0e4a801fc3', '', 1, 1, 0, 0, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 'Active', '0000-00-00 00:00:00', 0, 1)";
		$result = $this->db_1->query($query);
		
		$this->db_1->close();
		
		//#-------------DATABASE AND TABLE CREATION END--------------#//
		
		
		
		$src = $_SERVER["DOCUMENT_ROOT"]."/ensyfi_source";
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
	'password' => '',
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
MOD;

		fwrite($fDb, $string);
		fclose($fDb);
		chmod($dbFile,0777);
		
		$base_url = "http://localhost/".$institute_code;
		//$base_url = "http://ensyfi.com/".$institute_code;

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
		

		$query="UPDATE user_purchase_history SET status='Live',purchase_order_id = '$order_id' WHERE id = '$purchase_id'";
        $ex=$this->db->query($query);
		   
		$query = "INSERT INTO user_plan_history(user_id,plan_id,purchase_order_id,activated_date,expiry_date,status,created_by,created_at) VALUES('$user_id','$plan_id','$order_id','$current_date','$expiry_date','Live','$user_id',now())";
		$result = $this->db->query($query);
		
		$query = "INSERT INTO institute_dashboard(user_master_id,user_type_id,user_type,no_of_users,created_by,created_at) VALUES('$user_id','$institute_type','$plan_type_name','$no_of_users','$user_id',now())";
		$result = $this->db->query($query);
		
		redirect('/dashboard');
	}
	
	
	function user_plan_history($user_id){

		$sQuery="SELECT * from user_plan_history A,plan_master B WHERE A.plan_id = B.id AND A.user_id='$user_id' AND A.status ='Live'";
		$sResult = $this->db->query($sQuery);
		foreach($sResult->result() as $srow){
		   $plan_id = $srow->plan_id ;
		   $inst_type = $srow->institute_type ;
		}
		
		$query = "SELECT A.*,B.type_name FROM plan_master A, institute_type B WHERE A.institute_type = B.id AND A.institute_type = '$inst_type' AND A.id !='$plan_id'  AND A.status='Active'";
		$res = $this->db->query($query);
		$user_inst_plans = $res->result();
		return $user_inst_plans;

   }
}
?>
