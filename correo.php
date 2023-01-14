<?php 
if (isset($_POST['enviar'])) {
	if (!empty($_POST['name']) && !empty($_POST['email']) && !empty($_POST['subject']) 
		&& !empty($_POST['msg'])) {
		$name = $_POST['name'];
		$email = $_POST['email'];
		$subject = $_POST['subject'];
		$msg = $_POST['msg'];
		$header = "From: chrystian22morales@hotmail.com" . "\r\n";
		$header.= "Reply-To: chrystian22morales@hotmail.com" . "\r\n";
		$header.= "X-Mailer: PHP/". phpversion();
		$mail = mail($email, $subject, $msg, $header);
		if ($mail) {
			echo "<h4>Mensaje enviado exitosamente!</h4>";
		}
	}
}


 ?>