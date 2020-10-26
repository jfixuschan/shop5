<?php 
	$connect = mysqli_connect("127.0.0.1", "root", "", "shop");
	
	$text_query_vstavit = "INSERT INTO shop(name, descr, img, price)
		VALUES ('{$_GET["name"]}', '{$_GET["descr"]}', '{$_GET["img"]}', '{$_GET["price"]}')";

	$zapros_vvoda = mysqli_query($connect, $text_query_vstavit);

	header('Location: index.php');
 ?>