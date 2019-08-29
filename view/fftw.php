<?php 
	if(isset($_POST['fftitem'])):
		$db = new DB;
		$db->connection();
		$sql = "SELECT menu,yvd FROM fftw";

		$result = $db->sql($sql);
		if(is_array($result)):
			foreach($result as $val):
			?>

				<li class="fft-item">
					<span class="fftfooditem" draggable='true'><?php print $val['menu'] ?></span>
					<a href="#" class='yvd-link'><iframe width="260" height="60" src="<?php print $val['yvd'] ?>" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe></a>
				</li>
			
			<?php	
			endforeach;
		endif;
	endif;
?>
<script id="373EKE">
let items = document.querySelectorAll('.fftfooditem');
let ui_fftw_result = document.getElementById('fftw-result');

items.forEach((item)=> {
	item.addEventListener('dragstart', dragStart);
	item.addEventListener('dragend', dragEnd);
});

function dragStart() {
	setTimeout(()=> this.classList = 'hide selected',0);
}

function dragEnd() {
	items.forEach((item)=> {
		item.classList.remove('hide');
	});
}

ui_fftw_result.addEventListener('dragover', dragOver);
ui_fftw_result.addEventListener('dragleave', dragLeave);
ui_fftw_result.addEventListener('dragenter', dragEnter);
ui_fftw_result.addEventListener('drop', dragDrop);



function dragOver(e) {
	e.preventDefault();
}

function dragLeave(e) {
	e.preventDefault();
}

function dragEnter() {
	this.classList.add('fftw-div-selected-style');
}

function dragDrop() {
	items.forEach((item)=> {
		if(item.classList.contains('selected')) {
			ui_fftw_result.value = item.textContent;
			item.classList.remove('selected');
		}
	});
}
document.getElementById('373EKE').innerHTML = "";
</script>

<?php

if(empty($_POST['fft'])):
exit();
endif;

	if(isset($_POST['fft'])):
		
		$db = new DB;
		$db->connection();

		$fft = strip_tags($_POST['fft']);
		$fft = trim($fft);

		$sql = "SELECT 'menu,ingredients,hottodo' FROM fftw WHERE menu='$fft' ";
		$result 	= $db->numRows($sql);
		$rowscount  = mysqli_num_rows($result);
		if($rowscount == 0):
			?>
			<span>No item found please choose from box only!</span>
			<?php
			exit();
		else:
			$sql = "SELECT * FROM fftw WHERE menu='$fft' ";
			$result = $db->sql($sql);
			if(is_array($result)):
				foreach($result as $v):

					?>
						<span class="ingredients">Ingredients: <?php print $v['ingredients']; ?></span>
						<br><br>
						
							<?php  print $v['howtodo']; ?>
						
				<?php		
				endforeach;
			endif;
		endif;


	endif;

?>
