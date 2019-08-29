<?php 
Sessions::session_auto_logoff();
$mtrand = mt_rand(); $unid = uniqid('', true); $genrate_token =  $unid.$mtrand; setcookie('js_tk', $genrate_token, time()+300); include_once "inc/header.inc.php" ?>

 	<link rel="stylesheet" href="sass/style2.min.css">	
 	<script src="src/jquery-1.11.1.js"></script>
	<script src="src/cust-order-form.js"></script>
 </head>
 <body>

 	<div class="container mt-5">
 		<div class="row">
 			<div class="col-md-7 offset-3">
 				<span>CUSTOMER's ORDER FORM.</span>
 				<a href="logout" title="logout Me">
 					<span class="float-right"><i class="fa fa-sign-out signout-i"></i></span>
 				</a>
 				<hr>
			</div>
		</div>	
		<div class="row">
			<div class="col-md-7 offset-3">
				<div id="customerorderform"></div>
 			</div>
 		</div>
 	</div>
	 
</body>
</html>

 