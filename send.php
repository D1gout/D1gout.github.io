<?php 
	$fio = $_POST['fio'];
	$email = $_POST['email'];
	
	$fio = htmlspecialchars($fio);
	$email = htmlspecialchars($email);
	
	$fio = urlencode($fio);
	$email = urlencode($email);
	
	$fio = trim($fio);
	$email = trim($email);
	
	if (mail("fanolkon@gmail.com", 
		"Заказ с сайта", 
		"ФИО:".$fio."\n".
		"E-mail: ".$email,
		"From: fanolkon@icloud.com \r\n")
	){ 
		echo ("сообщение успешно отправлено"); 
	} else { 
		echo ("при отправке сообщения возникли ошибки"); 
	}

	?>