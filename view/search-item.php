<?php include_once "inc/header.inc.php" ?>

<link rel="stylesheet" href="sass/style2.min.css">
<script src="js/jquery-1.11.1.js"></script>
<script>
	$(function(){
		$('.showmbtn').click(function(ev){
			ev.preventDefault();
			let counter = 1;
			$.ajax({
				url : "search_limit.php",
				type: "POST",
				data: {start:counter},
				success:function(data)
				{
					$('.lm-result').append(data);
				}
			})

		})
	});
</script>
</head>
	<body class="jumbotron">
 	

	<div class="body-wrapper">
		<div class="container">
			<div class="row">
				<div class="col-md-3"></div>
					<div class="col-md-7">
						<div class="card">
							<div class="card-header"></div>
							<div class="card-body">
								<table class="table table-striped">
									<thead>
										<tr>
											<th>name</th>
											<th>offer</th>
											<th>discount</th>
											<th>cost</th>
											<th>images</th>
										</tr>
									</thead>
									<tbody>
										<tr>
											<td></td>
											<td></td>
											<td></td>
											<td></td>
											<td></td>
										</tr>	
									</tbody>
								</table>
								
								<table  class="table table-striped">
									<tbody class="lm-result"></tbody>
								</table>
								<form method="POST">
									<input type="submit" name="showmore" value="show more" class="btn btn-success btn-sm float-right showmbtn">
								</form>
							</div>					
						<div class="card-footer">
							<span>order now: <i class="fa fa-phone"></i> 7517474481</span>
							<span class="float-right"><i class="fa fa-thumbs-o-up"></i> If you like please click to like</span><br>
							<span><i class="fa fa-envelope-o"></i> Email: amey88_designer@yahoo.com</span>

						</div>
					</div>
				</div>


					<div class="col-md-2"></div>
				</div>
			</div>
		</div>



<?php include_once "inc/footer.inc.php" ?>