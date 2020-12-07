<?php 
	$connect = mysqli_connect("127.0.0.1","root","","online_shop");
	$text_zaprosa_vstavit = "INSERT INTO shop (title, desk, img, price) 
	VALUES ('". $_GET["title"] ."', '". $_GET["desk"] ."',  '". $_GET["img"] ."',  '". $_GET["price"] ."' )";
	$zapros_new = mysqli_query($connect, $text_zaprosa_vstavit);
    
	header("Location: index.php");

 ?>