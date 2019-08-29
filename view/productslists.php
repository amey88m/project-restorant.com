<script id="7428391">
let showitem = (function(){
		let target,
		items = document.querySelectorAll('.items'),
		btns  = document.querySelector('.btn-group');
	return{
		getTarget:function(e)
		{
			e = e || window.event;
			return e.target || e.SrcElement;
		},
		hideItem:function(t)
		{
			target = showitem.getTarget(t);
			if(t.target.matches('.close-i-item'))
				t.target.parentElement.parentElement.parentElement.parentElement.classList.add('d-none');
		}
	}	
})();
let items = document.getElementById('listitems');
items.addEventListener('click', showitem.hideItem, true );
document.getElementById('7428391').innerHTML="";
</script>

<?php 

	if(empty($_POST['item'])):
		http_response_code(404);
		exit();
	endif;

if(isset($_POST['item'])):
	
	$db = new DB;
	$db->connection();

	$q = "SELECT name FROM menu WHERE MATCH(name) AGAINST('{$_POST['item']}')";
	$result = $db->numRows($q);
	$rowscount = mysqli_num_rows($result);

	if(empty($rowscount)):
		print "<span style='color:red'>no match found for {$_POST['item']}.</span>";
		exit();
	endif;

	$sql = "SELECT name,offer,discount,cost FROM menu WHERE MATCH(name) AGAINST('{$_POST['item']}') ";


	$result = $db->sql($sql);
	$sr=1;
	if(is_array($result)):
		foreach($result as $val):
 ?>


 
<section class="items" >
	<div class="row">
		<span><?php print $sr; ?><a href="javascript:void(0)"><i class="fa fa-close close-i-item"></i></a></span>
	</div>
	<div class="row">
		<div class="col-md-12">
			<span>Item name:</span>
			<input type="text" name="menu_name" disabled="true" class="form-control" value="<?php print $val['name'] ?>">
			<span>Item offer:</span>
			<input type="text" name="menu_offer" disabled="true" class="form-control" value="<?php print $val['offer'] ?>">
			<span>Item discount:</span>
			<input type="text" name="menu_discount" disabled class="form-control" value="<?php print $val['discount'] ?>">
			<span>Item cost:</span>
			<input type="text" name="menu_cost" disabled class="form-control" value="<?php print $val['cost'] ?>">
		</div>
	</div>
</section>


<?php 
	$sr++;

		endforeach;
	endif;

endif;
 ?>
	




