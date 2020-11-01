<?php 
	$file = 'includes/db.php';
	if (file_exists($file)) {
		include_once($file);
	}else{
		include_once('../includes/db.php');
	}
	
	class Controller extends Database {
		
		function send_data($name, $surname, $age, $position, $sex) {

			$query = "INSERT INTO `users` SET `name`= '$name', `surname`='$surname', `age`='$age', `position`='$position', `sex`='$sex'";	
			parent::ex($query);
		}

		function select_data() {
			$query = "SELECT * FROM `users`";
			$row = parent::query($query);

			return $row;
		}

		function print_text() {
			$text_hello = 'Hello World!';

			return $text_hello;
		}


	}
?>