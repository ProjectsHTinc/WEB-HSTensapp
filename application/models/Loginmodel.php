<?php

Class Loginmodel extends CI_Model
{

	  public function __construct()
	  {
		  parent::__construct();
		  //$this->load->model('smsmodel');
		  //$this->load->model('mailmodel');
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
          $authKey = "308533AMShxOBgKSt75df73187";

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


//-------------------------------------------------//	
	function check_login($email,$password)
	{
		  $query = "SELECT * FROM institute_master WHERE  email = '$email' OR mobile = '$email'";
		  $resultset = $this->db->query($query);
	  
			if($resultset->num_rows()==1){
				$pwdcheck = "SELECT * FROM institute_master WHERE (email='$email' OR mobile = '$email') AND password='$password'";
				$res = $this->db->query($pwdcheck);

				if($res->num_rows()==1){
					foreach($res->result() as $rows){

					 $institute_master_id = $rows->id;
					 $quer="SELECT * FROM institute_master WHERE id='$institute_master_id'";
					 $resultset = $this->db->query($quer);
					 $email_verify = $rows->email_verify;
					
					/*  if($email_verify=='N'){
					   $data= array("status" => "failed","msg" => "Your email is not verfied! Please contact admin");
					   return $data;
					 }  */
					 
					 $mobile_verify=$rows->mobile_verify;
					 if($mobile_verify=='N'){
					   $data= array("status" => "failed","msg" => "Your mobile number is not verfied! Please contact admin");
					   return $data;
					 }
				 
					 $detail_flag=$rows->detail_flag;
					 if($detail_flag=='0'){
					   $data= array("status" => "incomplete","msg" => "Fill the Insitute details","last_id"=>$rows->id);
					   return $data;
					 }
					 
					$status= $rows->status;

				 switch($status){
					case "Active":
					
					$sQuery = "SELECT * FROM institute_details WHERE institute_master_id = '$institute_master_id'";
					$sResult = $this->db->query($sQuery);
						foreach($sResult->result() as $srow){
						   $institute_type = $srow->institute_type ;
						}

					$sQuery = "SELECT * FROM institute_plan_history WHERE institute_master_id = '$institute_master_id' AND status = 'Live'";
					$sResultset = $this->db->query($sQuery);
					
					if($sResultset->num_rows()>0){
					foreach($sResultset->result() as $srow){
						   $expiry_date = $srow->expiry_date ;
						   $plan_id = $srow->id ;
					}
					$current_date = date("Y-m-d H:i:s"); ;
						
						if ($current_date >= $expiry_date){
							 $update_query = "UPDATE institute_plan_history SET status ='Expiry' WHERE institute_master_id='$plan_id'";
							 $resultset = $this->db->query($update_query);							 
						}
					}
					
					$data = array("email"=>$rows->email,"mobile"=>$rows->mobile,"msg"=>"success","detail_flag"=>$rows->detail_flag,"user_role"=>$rows->user_role,"status"=>"success","user_id"=>$rows->id,"inst_type"=>$institute_type);
					$this->session->set_userdata($data);

					return $data;

					case "Inactive":
							$data= array("status" => "failed","msg" => "Your Account Is De-Activated");
							return $data;
					  break;
					  }
				   }
				 }
				 else{
					$data= array("status" => "failed","msg" => "Invalid Mobile or Email or Password");
					return $data;
				 }
			 }
			else{
			  $data= array("status" => "failed","msg" => "Invalid Mobile or Email or Password");
			  return $data;

		}

	}

//-------------------------------------------------//	

	function get_register($email,$phone,$password){
			 
			 $digits = 6;
			 $otp=rand(pow(10, $digits-1), pow(10, $digits)-1);
			 $this->sendSMS($phone,$otp);
			 
			$sQuery = "SELECT * FROM `institute_master` ORDER BY id DESC LIMIT 1";
			$sResult = $this->db->query($sQuery);
			if($sResult->num_rows()>0){
				foreach($sResult->result() as $srow){
				   $old_institute_code = $srow->institute_code ;
				}
			}
			$institute_code = $old_institute_code +9;
			$enc_institute_code = base64_encode($institute_code);
			
			$query = "SELECT * FROM `institute_master` ORDER BY id DESC LIMIT 1 ";
			$resultset = $this->db->query($query);
			 
			$query = "INSERT INTO institute_master(institute_code,enc_institute_code,email,email_verify,mobile,mobile_otp,mobile_verify,password,user_role,status,detail_flag,created_at) VALUES('$institute_code','$enc_institute_code','$email','N','$phone','$otp','N','$password','2','Active','0',NOW())";
			$resultset = $this->db->query($query);
			$insert_id = $this->db->insert_id();
			 
			$query_2 = "INSERT INTO institute_details(institute_master_id,created_at,created_by) VALUES('$insert_id',NOW(),'$insert_id')";
			$resultset_2 = $this->db->query($query_2);

		  if($resultset_2){
				$encrypt_email = base64_encode($email);
				$subject = "Welcome to ENSYFI App";
				$htmlContent = '<html>
								<p>Dear Customer</p>
								<p>To allow us to confirm the validity of your email address, click this verification link. <a href="'.base_url().'home/emailverfiy/'.$encrypt_email.'" target="_blank">Verfiy  Here</a></center></p>
								<p>Ensyfi Team</p>
								</html>';
				$this->sendMail($email,$subject,$htmlContent);

				$data = array("status" => "success","last_id"=>$insert_id);
				return $data;
		  }else{
				$data = array("status" => "failed");
				return $data;
		  }
	}

//-------------------------------------------------//	

	function get_ins_details($last_insert,$institute_name,$institute_type,$person_designation,$contact_person,$city,$state,$no_of_student,$how_you_hear,$notes){
		  $update_query ="UPDATE institute_details SET institute_name='$institute_name',person_designation='$person_designation',contact_person='$contact_person',institute_type='$institute_type',city='$city',state='$state',no_of_student='$no_of_student',how_you_hear='$how_you_hear',notes='$notes',updated_by='$last_insert',updated_at=NOW()  WHERE institute_master_id='$last_insert'";
		  $resultset_2=$this->db->query($update_query);
		  
		  $update_query_2="UPDATE institute_master SET detail_flag='1',updated_by='$last_insert',updated_at=NOW() WHERE id='$last_insert'";
		  $resultset_update=$this->db->query($update_query_2);
		  
		  if($resultset_update){
			$data = array("status" => "success");
			return $data;
		  }else{
			$data = array("status" => "failed");
			return $data;
		  }

	}

//-------------------------------------------------//	

	function checkemail($email){
			$select="SELECT * FROM institute_master Where email='$email'";
			$result=$this->db->query($select);
			
			   if($result->num_rows()>0){
					echo "false";
				 }else{
				   echo "true";
			   }
	}

//-------------------------------------------------//	
	   
	function checkmobile($phone){
		$select="SELECT * FROM institute_master Where mobile='$phone'";
		$result=$this->db->query($select);
		 
		 if($result->num_rows()>0){
				echo "false";
		   }else{
				echo "true";
		 }
	}

//-------------------------------------------------//	
		   
	function check_ins_name($institute_name){
		$select="SELECT * FROM institute_details Where institute_name='$institute_name'";
		$result=$this->db->query($select);
	   
	   if($result->num_rows()>0){
				echo "false";
		 }else{
				echo "true";
	   }
	}

//-------------------------------------------------//	

	function check_otp($otp,$last_insert){
		$select="SELECT * FROM institute_master Where mobile_otp='$otp' AND id='$last_insert'";
		$result=$this->db->query($select);
	   
		if($result->num_rows()==1){
			$update="UPDATE institute_master SET mobile_verify='Y' WHERE id='$last_insert'";
			$result=$this->db->query($update);
			$data = array("status" => "success","last_id"=>$last_insert);
			return $data;
		 }else{
		   $data = array("status" => "failed","msg"=>"Invalid OTP");
		   return $data;
	   }
	}

//-------------------------------------------------//	

	function email_verify($email){

			$decrpty_email=base64_decode($email);
			$check_username="SELECT * FROM institute_master WHERE email='$decrpty_email'";
			$res=$this->db->query($check_username);
			
			if($res->num_rows()==1){
			foreach($res->result() as $rows){}
			 if($rows->email_verify=='Y'){
				$data=array("msg"=>"Email  has been Verified Already Thank You.");
				return $data;
			 }else{
			   $user_id=$rows->id;
			   $update="UPDATE institute_master SET email_verify='Y' WHERE id='$user_id'";
			   $result=$this->db->query($update);
			   
			   if($result){
					$data=array("msg"=>"verify");
					return $data;
			   }else{
					$data=array("msg"=>"Some Thing Went Wrong Please Contact Us");
					return $data;
			   }
			 }
			}else{
					$data=array("msg"=>"Some Thing Went Wrong Please Contact Us");
					return $data;
			}
	 }

//-------------------------------------------------//	






		  /*  function getuser($user_id){
			 $query="SELECT eu.* From edu_users as eu  WHERE eu.user_id='$user_id'";
			 $resultset=$this->db->query($query);
			 return $resultset->result();
		   }

		   function getadminuser($user_id){
			 $query="SELECT ep.*,eu.* From edu_users as eu left join edu_staff_details as ep on eu.institute_master_id=ep.id AND eu.user_type='1' OR eu.user_type='2' WHERE eu.user_id='$user_id'";
			 $resultset=$this->db->query($query);
			 return $resultset->result();
		   }

		   function password_update($new_password,$user_id){
				$pwd=md5($new_password);
				$query="UPDATE edu_users SET user_password='$pwd',	updated_date=NOW() WHERE user_id='$user_id'";
			   $ex=$this->db->query($query);
			   if($ex){
				 echo "success";
			   }else{
				 echo "failed";
			   }

		   }

		   function profile_update($pia_name,$pia_phone,$pia_email,$pia_address,$pia_id){
			 $id=base64_decode($pia_id)/98765;
			 $query="UPDATE edu_pia SET pia_address='$pia_address',pia_name='$pia_name',pia_phone='$pia_phone',pia_email='$pia_email' WHERE id='$id'";
			 $ex=$this->db->query($query);
			  if($ex){
				echo "success";
			  }else{
				  echo "failed";
			  }
		   }

		   function checkemail_edit($email,$staff_id){
			 $select="SELECT * FROM edu_pia Where pia_email='$email' AND id!='$staff_id'";
			 $result=$this->db->query($select);
			 if($result->num_rows()>0){
				echo "false";
			   }else{
				 echo "true";
			 }
		   }
		   function checkmobile_edit($mobile,$staff_id){
		   $select="SELECT * FROM edu_pia Where pia_phone='$mobile' AND id!='$staff_id'";
			 $result=$this->db->query($select);
			 if($result->num_rows()>0){
			   echo "false";
			   }else{
				 echo "true";
			 }
		   }
		   function checkmobile($phone){
		   $select="SELECT * FROM institute_master Where mobile='$phone'";
			 $result=$this->db->query($select);
			 if($result->num_rows()>0){
			   echo "false";
			   }else{
				 echo "true";
			 }
		   } */
		   
		   
		   
		   
		  /*  function check_ins_code($institute_code){
			 $select="SELECT * FROM institute_master Where institute_code='$institute_code'";
			   $result=$this->db->query($select);
			   if($result->num_rows()>0){
				 echo "false";
				 }else{
				   echo "true";
			   }
		   } */
		   
		   
		   
		   /* function check_school_code($school_id){
				$select = "SELECT * FROM user_master WHERE institute_code = '$school_id' AND status = 'Active' AND user_role = '2' AND detail_flag ='1' AND email_verify = 'Y' AND mobile_verify = 'Y'";
				$result = $this->db->query($select);
					if($result->num_rows()>0){
						//$data = array("status" => "success","school_url"=>"http://www.ensyfi.com/".$school_id);
						$data = array("status" => "success","school_url"=>"http://localhost/".$school_id);
					}else{
						$data = array("status" => "failed","msg"=>"Invalid School Code!..");
					}
				return $data;
		   }
		   
		   
		   function check_password_match($old_password,$user_id){
			 $pwd=md5($old_password);
			 $select="SELECT * FROM edu_users Where user_password='$pwd' AND user_id='$user_id'";
			   $result=$this->db->query($select);
			   if($result->num_rows()==0){
				 echo "false";
				 }else{
				   echo "true";
			   }
		   } 

			function forgot_email($forgot_email){
			 $query="SELECT pia_email,id,pia_name FROM edu_pia WHERE pia_email='$forgot_email'";
			 $result=$this->db->query($query);
			 if($result->num_rows()==0){
			   echo "Email Not found";
			 }else{
			foreach($result->result() as $row){}
				 $name= $row->pia_name;
				 $institute_master_id= $row->id;
				 $digits = 6;
				 $OTP = str_pad(rand(0, pow(10, $digits)-1), $digits, '0', STR_PAD_LEFT);
				 $reset_pwd=md5($OTP);
				 $reset="UPDATE edu_users SET user_password='$reset_pwd' WHERE user_type='3' AND institute_master_id='$institute_master_id'";
				 $result_pwd=$this->db->query($reset);
				 $query="SELECT * FROM edu_pia WHERE id='$institute_master_id'";
				 $resultset=$this->db->query($query);
				 foreach($resultset->result() as $rows){}
				 $email=$rows->pia_email;
				 $to=$email;
				 $subject = '"Password Reset"';
				 $htmlContent = '
				   <html>
				   <head>  <title></title>
				   </head>
				   <body>
				   <p>Hi  '.$name.'</p>
				   <center><p>Hi Your Account Password is Reset.Please Use Below Password to login</p></center>
					 <table cellspacing="0">

						   <tr>
							   <th>Password:</th><td>'.$OTP.'</td>
						   </tr>
						   <tr>
							   <th></th><td><a href="'.base_url() .'">Click here  to Login</a></td>
						   </tr>
					   </table>
				   </body>
				   </html>';

			   // Set content-type header for sending HTML email
			   $headers = "MIME-Version: 1.0" . "\r\n";
			   $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
			   // Additional headers
			   $headers .= 'From: happysanz<info@happysanz.com>' . "\r\n";
			   $sent= mail($to,$subject,$htmlContent,$headers);
			   if($sent){
				   echo "success";
			   }else{
				 echo "Somthing Went Wrong";
			   }
		 }

		   } */


}
?>
