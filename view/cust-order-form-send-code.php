<script>
$(function(){
	$('.verify-code-btn').click(function(ev){
		ev.preventDefault();
		var $verify_code = $('.verify-code');
		if($verify_code.val() == 0){
			$verify_code.focus();
			return false;
		}else{
			customerorderform({cd:$verify_code.val()},'code-msg','cust-order-form-send-code-verify');
			$('.name').attr("disabled","true");
			$('.phone').attr("disabled","true");
			$('#send-code').attr("disabled","true");
		}
	});
});
</script>

<?php
Sessions::session_auto_logoff();
if(isset($_POST['name']) && isset($_POST['phone'])):
	## check for valid mobile number
	$reg_phone = '/^[0-9]{10}$/';
	if(!preg_match($reg_phone, $_POST['phone'])):
		print "<span class='text-danger mt-4 d-block'>Your mobile number is not valid...</span>";
		exit;
	endif;
	## Generate OTP to verify customer's contact number. ##
	$name  = strip_tags($_POST['name']);
	$phone = strip_tags($_POST['phone']);

	## Generate OTP-code from Textlocal ##
	$str = "EUQ8940248NVBDM9W4750XMSKDRYQASKJF8950433";
	$_str = str_shuffle($str);
	$_get_code = substr($_str, 0,5);
	$_SESSION['cd'] = $_get_code;
	$_SESSION['customer_name'] = $name;
	$_SESSION['customer_phone'] = $phone;
	setcookie('_get_c',$_get_code, time()+300);
	$msg = "<span style='color:green' class='mt-4 d-block'>code send successfully</span>";
	print $msg;
?>
<!-- form 2 -->
<form class="my-1" >	
	<div class="row">
		<div class="col-md-9">
			<input type="text" class="verify-code form-control" name="verify_cust_phone_code" placeholder="enter code">
		</div>
		<div class="col-md-3">
			<input type="submit" name="verify_code" class="verify-code-btn btn btn-default float-right my-1" style="border-radius: 0" value="verify code">
		</div>
		<div class="col-md-12 mt-4">
			<span id='code-msg' style="color:red"></span>
		</div>
	</div>
</form>
<div id="otpMessage"></div>
<?php endif ?>

