<?php

date_default_timezone_set('Asia/Kolkata');
$current_date = $date = date('Y-m-d');

	//$con = @mysql_connect("localhost","root","O+E7vVgBr#{}");
	$con = @mysql_connect("localhost","root","");
if ($con) {
		mysql_select_db('ensapp');
		//mysql_select_db('ensyfi_newsite');
    } else {
		die("Connection failed");
}

//#################### Email ####################//

	 function sendMail($to,$subject,$email_message)
	{
		// Set content-type header for sending HTML email
		$headers = "MIME-Version: 1.0" . "\r\n";
		$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
		// Additional headers
		$headers .= 'From: Heyla App<hello@heylaapp.com>' . "\r\n";
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
        $mobileNumber = "$Phoneno";
        
        //Sender ID,While using route4 sender id should be 6 characters long.
        $senderId = "HEYLAA";
        
        //Your message to send, Add URL encoding here.
        $message = urlencode($Message);
        
        //Define route 
        $route = "transactional";
        
        //Prepare you post parameters
        $postData = array(
            'authkey' => $authKey,
            'mobiles' => $mobileNumber,
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



//#################### Plan Expiry Check ####################//

		$sQuery = "SELECT * FROM institute_plan_history WHERE DATE_FORMAT(expiry_date,'%Y-%m-%d') <= DATE_FORMAT(now(), '%Y-%m-%d')";
        $objRs = mysql_query($sQuery);
        if (mysql_num_rows($objRs)> 0)
        	{
        		while ($row = mysql_fetch_array($objRs))
        		{
        		    $plan_id = trim($row['id']) ;
					$institute_master_id = trim($row['institute_master_id']) ;
					
					 $update_plan = "UPDATE institute_plan_history SET status = 'Expiry' WHERE id ='$plan_id'";
                     $objRs1 = mysql_query($update_plan);
					 
					 $update_plan = "UPDATE institute_master SET status = 'Inactive' WHERE id ='$institute_master_id'";
                     $objRs3 = mysql_query($update_plan);
					 
						$inst_details = "SELECT A.id,A.institute_code,A.email,A.mobile,A.email_verify,A.mobile_verify,B.* FROM institute_master A, institute_details B WHERE A.id = B.institute_master_id AND A.id = '$institute_master_id'";
						$objRs2 = mysql_query($inst_details);
						if (mysql_num_rows($objRs2)> 0)
						{
							while ($row2 = mysql_fetch_array($objRs2))
							{
								 $email = trim($row2['email']) ;
								 $mobile = trim($row2['mobile']) ;
								 $institute_name = trim($row2['institute_name']) ;
							}
							
						}
						$subject = "Ensyfi";
						$htmlContent = "Hi ".$institute_name.", <br><br>Your Plan Expired.";
						sendMail($email,$subject,$htmlContent);

						$mobile_message = "Hi ".$institute_name.", Your Plan Expired";
						sendSMS($mobile,$mobile_message);	

				}
			}

//#################### Plan Expiry Check end ####################//
?>