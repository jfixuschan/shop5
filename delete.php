<?php 
	$connect = mysqli_connect("127.0.0.1","root","","shop");

	$text_zaprosa = "DELETE FROM shop WHERE id = '10'";

	mysqli_query($connect, $text_zaprosa_vstavit);
 ?>