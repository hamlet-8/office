<?php  
	global $ROOT;

	class TableModel extends Controller{

		function get_table_data() {
			$html ="";
			$r = parent::select_data();
			foreach($r as $key => $value) {
				$html.= "<tr> 
					<td class='choose_user'><div class='ac'><i class='fas fa-check-circle'></i></div></td>
					<td id=myId>".$value['id']."</td>
					<td>".$value['name']."</td>
					<td>".$value['surname']."</td>
					<td>".$value['age']."</td>
					<td>".$value['position']."</td>
							<td>".$value['sex']."</td>
					<td class='del'><i class='fas fa-user-minus'></i></td>
				</tr>";
			}

			return $html;
			
		}
	}
	
	$table = new TableModel;
	$tableDataa = $table -> get_table_data();
	include_once('views/table.php');
?>