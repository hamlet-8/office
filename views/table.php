<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title></title>
	<link rel="stylesheet" type="text/css" href="assets/css/main.css">
	<link rel="stylesheet" type="text/css" href="assets/extensions/fontawesome/css/all.min.css">
	<script type="text/javascript" src="assets/extensions/jquery-min.js"></script>
	<script type="text/javascript" src="assets/js/script.js"></script>
</head>
<body>
	<a href="home"><div class="mid second_page"><i class="fas fa-arrow-left"></i></div></a>
	<div class='btns_data'>
		<div class="send_email">Send Email</div>
		<div class="download_pdf">Save</div>
		<!-- <form method="post" action="functions/pdf.php">
			<input class="download_pdf" type="submit" name="c">
		</form> -->
	</div>
	
	<table>
		<tr>
			<td class="all_choose_user"><i class="fas fa-check"></i></td>
			<td class="types_data">id</td>
			<td class="types_data">name</td>
			<td class="types_data">surname</td>
			<td class="types_data">age</td>
			<td class="types_data">position</td>
			<td class="types_data">sex</td>
			<td class="choose_delete"><i class="fas fa-trash"></i></td>
		</tr>
		<?=$tableDataa?>
		<?php 
			//$table -> get_table_data();
		?>
	</table>

	<!-- windows -->

	<div class="back"></div>
		<div class="window_send">
			<div class="window_send_text">
				Write your email
			</div>
			<div class="window_send_inp">
				<form method="post" action="functions/send_email.php">
					<input type="email" class='em' placeholder="Email">
					<br><br><br>
					<input class="window_sub" value="Send" type="submit" name="">
				</form>
			</div>


		</div>
		<div class='window_link_pdf'>
			<a href="http://localhost/office_oop_mvc/functions/file.pdf" target="_blank" class='window_link_pdf_a'>Litnk pdf</a>
		</div>
</body>
</html>