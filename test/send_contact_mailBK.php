<?php
if(!empty($_POST["send"])) {
	$name = $_POST["userName"];
	$email = $_POST["userEmail"];
	$subject = $_POST["subject"];
	$content = $_POST["content"];

	$toEmail = "orlando.hdzcruz@gmail.com";
	$mailHeaders = "De: " . $name . "<". $email .">\r\n";
	if(mail($toEmail, $subject, $content, $mailHeaders)) {
	    $message = "Su Queja/Sugerencia ha sido enviada con éxito";
	    $type = "success";
	}
}
require_once "contact-view.php";
?>