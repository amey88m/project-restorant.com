<?php 
Sessions::sessionlog();

$start 	 = 0;
$limit 	 = 1;
/*
0-1
1-1
2-1
*/



showmoredata($_POST['pg_no'],$limit);
function showmoredata($start,$limit)
{	

	if(empty($_POST['pg_no'])):
		http_response_code(404);
		exit();
	endif;

	
	if(isset($_POST['pg_no'])):
		if(!empty($_SESSION['filter_string'])):
			$db  = new DB;
			$db->connection();
			$query = "SELECT * FROM menu WHERE MATCH(name) AGAINST('{$_SESSION['filter_string']}') LIMIT $start,$limit";
			$result 	= $db->numRows($query);
			$rowscount  = mysqli_num_rows($result);

			if($rowscount === 0):
				exit;
			else:
				$result = $db->sql($query);	
				if(is_array($result)):
					?>
					<tr>
					<?php
					foreach($result as $val):
					print  "	
								<td>{$val['name']}</td>
								<td>{$val['offer']}</td>
								<td>{$val['discount']}</td>
								<td>{$val['cost']}</td>
								<td><img src='images/{$val['menu_img']}' alt='{$val['name']}' title='{$val['name']}' height='40px' style='margin-right:0' ></td>
							";
					endforeach;
					?>
					</tr>
					<?php
				endif;
			endif;
		endif;
	endif;


}

	

 ?>