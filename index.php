<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Enviar correo</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<form action="correo.php" method="POST">
		<input type="text" placeholder="Ingresar nombre" name="name" required="">
		<input type="email" placeholder="Ingresar email" name="email" required="">
		<input type="text" placeholder="Asunto" name="subject" required="">
		<textarea placeholder="Escriba su mensaje" name="msg" required=""></textarea>
		<input type="submit" value="Enviar" name="enviar">
	</form>	
</body>
</html>
