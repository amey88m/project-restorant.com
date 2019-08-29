<?php 
Sessions::sessionlog();
session_regenerate_id(true);



session_unset();
session_destroy();
$_SESSION['uid'] = "";


if(empty($_SESSION['uid'])):
	header("Location: admin");
endif;
?>