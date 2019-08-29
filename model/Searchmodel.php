<?php 

/**
 * 
 */
class Searchmodel extends Model
{


	public static $items = Array();	





			public function searchResult()
			{

				Sessions::sessionlog();	

				if(empty($_POST['searchmenubtn']) | !isset($_POST['searchmenubtn'])):
					http_response_code(404);
					exit();
				endif;


				if(isset($_SERVER['REQUEST_METHOD']) == "POST"):

					if(isset($_POST['searchmenubtn'])):
						
						$_SESSION['filter_string'] = $_POST['search'];
						
						// connection
						$db = new DB;
						$db->connection();
						$start = 0;
						$limit = 2;
						$sql = "SELECT * FROM menu WHERE MATCH(name) AGAINST('{$_POST['search']}') LIMIT $start,$limit";

						$result 	= $db->numRows($sql);
						$rowscount  = mysqli_num_rows($result);
						
						if($rowscount == 0):
							Controller::loadError('search_result_error_danger_html');
							exit();
						else:
							Controller::loadError('search_result_error_success_html');
							Controller::loadHtml('search_table_static_html');

							$result = $db->sql($sql);
							if(is_array($result)):
								foreach($result as $val):

									print "
										<tr>
											<td>". $val['name'] ."</td>
											<td>". $val['offer'] ."</td>
											<td>". $val['discount'] ."</td>
											<td>". $val['cost'] ."</td>
											<td><img src='images/{$val['menu_img']}' alt='samosa food' title='samosa' height='40px'></td>
										</tr>";
								endforeach;
							endif;
						endif;
					endif;
				endif;			

			}	

	
}
 ?>