<?php
	$name=$_POST['name'];
	$email=$_POST['email'];
	$tel=$_POST['tel'];
	$to="baranovscaya@yandex.ru";


	$subject= "";
	$subject= "";
	$massage = "
	Имя: ".htmlspecialchars($name). "<br>
	Почта:".htmlspecialchars($email)."<br>
	Телефон:".htmlspecialchars($tel);
	$headers = "from: Секреты больших денег на своем предназначении  <no-reply@mysyte.ru>\r\nContent-type:text/html; charset=utf-8 \r\n";
	mail($to, $subject, $massage, $headers);
	header('Location: thanks.php');
	exit;

?>