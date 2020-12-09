<?php
	use PHPMailer\PHPMailer\PHPMailer;
	use PHPMailer\PHPMailer\Exception;

	require 'PHPMailer/src/PHPMailer.php';
	require 'PHPMailer/src/Exception.php';

	$mail = new PHPMailer(true);
	$mail -> CharSet = 'UTF-8';
	$mail -> setLanguge('ru', 'PHPMailer/language/');
	$mail -> IsHTML(true);
	 //От кого письмо 
	$mail -> setFrom('info@move.ua', 'Test');
	 // Кому отправить
	$mail -> addAddress('bugabos2703@gmail.com');
	 // Тема письма
	$mail -> Subject = 'Eto test';

	 //Тело письма 
	$body = '<h1> Eto testovoe pis`mo!</h1>'
	$body.='<p><strong>Name:</strong>'.$_POST['name'].'</p>';
	$body.='<p><strong>EMail:</strong>'.$_POST['email'].'</p>'; 

	 //Отправляем
	if(!$mail->send()) {
		$message = 'Error';
	} else {
		$message = 'Yes';
	}

	$response = [ 'message' => $message];

	header('Content-type: application/json');
	echo json_encode($response);
 ?>