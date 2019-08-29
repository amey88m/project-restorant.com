<?php Sessions::session_auto_logoff() ?>

<script id="84921">
	$(function(){
		$('#send-code').click(function(e){
			e.preventDefault();
			var $name  = $('.name'); var $phone = $('.phone');
			$this = $(this);
			if($name.val() ==0){
				$name.focus();
				return false;
			}else if($phone.val() == 0){
				$phone.focus();
				return false;
			}else{
				customerorderform({name:$name.val(),phone:$phone.val()},'mobileotp','cust-order-form-send-code');	
			}
		});
	});
document.getElementById('84921').innerHTML="";
</script>
<?php
// Sessions::sessionlog();
# init order form #
if(isset($_POST['orderForm'])):
	?>
	<!-- form 1 -->
	<form method="POST">
		<div class="row">
			<div class="col-md-9">
				<input type="text" name="name" class="form-control name mb-1" placeholder="customer name">
				<input type="tel" name="phone"  class="form-control phone" placeholder="10 digits phone number">
			</div>
			<div class="col-md-3">
				<input type="submit" id="send-code" name="send_code" class="btn btn-info float-right my-1" style="border-radius: 0" >
			</div>
		</div>
	</form>
	<div id="mobileotp"></div>
	<?php
	exit;
endif;

?>