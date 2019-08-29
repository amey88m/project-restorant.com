<?php 

Sessions::session_auto_logon();


if(!isset($_POST["us"]) || !isset($_POST["up"]) || empty($_POST["us"]) || empty($_POST["up"])):
	http_response_code(404);
	exit;
endif;



// admin login check
if(isset($_SERVER["REQUEST_METHOD"]) == "POST"):
	
	if(isset($_POST["us"]) && isset($_POST["up"])):
				
		$db = new DB;
		$db->connection();
		


		if($_POST["us"] !== "admin"):
			print "<span style='color:#f02'>User name is not valide. Try admin</span>";
			exit();
		else:
			$userip 	= $_SERVER["REMOTE_ADDR"];
			$sql 		= "SELECT adminid FROM admin WHERE ip ='$userip' ";


			$result   	= $db->numRows($sql);
			$rowscount  = mysqli_num_rows($result);

			

			//check for user is exists
			if($rowscount >  0):

				// check for user name and password to login OR
				// check login credentials
				$sql = "SELECT adminid FROM admin WHERE password='{$_POST["up"]}' ";
				$result   	= $db->numRows($sql);
				$rowscount  = mysqli_num_rows($result);

				if($rowscount == 1):
					$result = $db->sql($sql);
					if(is_array($result)):
						foreach($result as $val):
							// 
						endforeach;
					endif;
					$_SESSION['uid'] 		 = $val['adminid'];
					$_SESSION['log_token']   = uniqid('', true);
					session_regenerate_id(true);
					print "orderform";
					exit();
				else:
					print "<span style='color:#f02'>wrong password.</span>";
				endif;
			else:
				$_SESSION['username'] = $_POST['us'];
				$_SESSION['logid'] 	  = uniqid('', true);
				$sql = "INSERT INTO admin(username,password,ip) VALUES('{$_POST['us']}','{$_POST['up']}','$userip')";
				$db->numRows($sql);
				print "<span style='color:#fff'>You are successfully login.</span>";
				exit();
			endif;
			
		endif;

	endif;

endif;



 ?>