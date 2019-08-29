<?php 

/**
 * 
 */
class Sessions
{
	


			public static function sessionlog()
			{
				session_save_path($_SERVER['DOCUMENT_ROOT'] . '/project-restorant.com/' . '/session/');
				session_start();
				session_id();
				session_regenerate_id(true);
			}


			public static function session_auto_logoff()
			{
				self::sessionlog();

				if(!isset($_SESSION['uid'] )):
					header('Location: admin');
					exit();
				endif;
			}


			public static function session_auto_logon()
			{
				self::sessionlog();
				if(isset($_SESSION['uid'] )):
					header('Location: orderform');
					exit();
				endif;
			}

		


}


 ?>