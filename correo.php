<?php 

/*if (isset($_POST['enviar'])) {
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
*/
 

$destinatario = 'chrystian22morales@hotmail.com';
$nombre = $_POST['name'];
$asunto = $_POST['subject'];
$email = $_POST['email'];
$mensaje = $_POST['msg'];

$header = "Enviado desde el correo";
$mensajeCompleto = $mensaje . "\nAtentamente: " . $nombre;

mail($destinatario, $asunto, $mensajeCompleto, $header);
echo "<script>alert('Correo enviado exitosamente')</script>";
echo "<script>setTimeout(\"location.href='index.php'\", 1000)</script>";




 ?>
