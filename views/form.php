<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title></title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="assets/css/main.css">
	<link rel="stylesheet" type="text/css" href="assets/extensions/fontawesome/css/all.min.css">
	<script type="text/javascript" src="assets/extensions/jquery-min.js"></script>
	<script type="text/javascript" src="assets/js/script.js"></script>
</head>
<body>
	<div class='warning'>
		
	</div>
	<a href="data"><div class="mid first_page"><i class="fas fa-arrow-right"></i></div></a>
	<div id="data">
		<h1 class="text">Write your data, please.</h1>
		<form id="form_id" method="post" action="requests/send.php">
			<label for="name" class="name_l">name</label>
			<br>
			<input type="text" id="name" name="name">
			<br><br>
			<label for="surname" class="surname_l">surname</label>
			<br>
			<input type="text" id="surname" name="surname">
			<br><br>
			<label for="age" class="age_l">age</label>
			<br>
			<input type="number" id="age" name="age">
			<br><br>
			<label for="position">position</label>
			<select id="position" name="position">
				<option>worker</option>
				<option>manager</option>
				<option>supervisor</option>
				<option>brand manager</option>
				<option>director</option>
			</select>
			<br><br>
				<div class="rad">
					<span class="rad1">
						<input type="radio" id='male' name="sex" value="male">
						<label style="user-select: none;" for="male" class="maleLabel">male</label>

					</span>
					<span class="rad2">
						<input type="radio" id="female" name="sex" value="female">
						<label style="user-select: none;" for="female" class="femaleLabel">female</label>
					</span>
					
				</div>
				
				<dir class="check">
					<input type="checkbox" id="agree" name="agree" value="agree">
					<label style="user-select: none;" class="ag" for="agree">agree</label>
				</dir>
				<br><br>
				<input type="submit" value="Submit" class="sub" name="submit">
		</form>
	</div>
</body>
</html>