<?php 

	include_once('../libs/controller.php');
	
	$name = $_POST['name'];
	$surname = $_POST['surname'];
	$age = $_POST['age'];
	$position = $_POST['position'];
	$sex = $_POST['sex'];

	$sql = new Controller;
	$sql -> send_data($name, $surname, $age, $position, $sex);
	// header('location:../data.php');
?>