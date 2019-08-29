<?php include_once "inc/header.inc.php" ?>
	<link rel="stylesheet" href="sass/admin.min.css">
<?php  Sessions::session_auto_logon() ?>
</head>
<body>

	<div class="admin-bg">
		<div class="admin-body">
			<div class="body-wrapper">
				<div class="container">
					<div class="row">
						<div class="col-md-6 offset-md-3">
							<h6 class="ad-title text-white text-left">Admin login </h6>
							<form method="POST" name="adminform" >
								<span class="user_res"></span>
								<input type="text" name="username" class="form-control username" placeholder="admin" >
								<input type="password" name="password" class="form-control password" placeholder="admin">
								<input type="submit" name="adminlogin" class="btn btn-success my-1" id="admsubmit" style="border-radius: 0">
							</form>
							<div id="result"></div>
						</div>
					</div>
				</div>
			</div>	
		</div>	
	</div>

<script src="src/jquery-1.11.1.js"></script>

<script id="029384">
$(function(){

	$('#admsubmit').click(function(ev){
		
		ev.preventDefault();
		let name 	 = $('.username').val();
		let password = $('.password').val();

		
			// check fileds
			if(name == 0){
				$('.username').focus();
				return false;
			}else if(password == 0 ){
				$('.password').focus();
				return false;
			}else{
				
				$.ajax({
					url : "admin-log",
					type: "POST",
					data: {us:$('.username').val(), up:$('.password').val()},
					success:function(data)
					{
						if(data === "orderform"){
							window.location.href = "orderform";
						}else{
						
							$('.user_res').html(data)
						
						}

					}
				});
			}
	})

});

document.getElementById('029384').innerHTML="";

</script>	
</body>
</html>