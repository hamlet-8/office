<?php 
	$db = new Controler();
	$sql = 'SELECT * FROM `users`';
	$query = $db -> query($sql);

	// function table() {
	// 	global $query;
	// 	foreach($query as $key => $value) {
	// 		echo "<tr> 
	// 			<td class='choose_user'><div class='ac'><i class='fas fa-check-circle'></i></div></td>
	// 			<td id=myId>".$value['id']."</td>
	// 			<td>".$value['name']."</td>
	// 			<td>".$value['surname']."</td>
	// 			<td>".$value['age']."</td>
	// 			<td>".$value['position']."</td>
	// 					<td>".$value['sex']."</td>
	// 			<td class='del'><i class='fas fa-user-minus'></i></td>
	// 		</tr>";
	// 	}
	// }
	echo 'Hey';
?>
