<?php
	$nombre = $_POST['nombre'];
	$primerApellido = $_POST['primerApellido'];
	$segundoApellido = "-undefined-";
	if (isset($_POST['segundoApellido'])) $segundoApellido = $_POST['segundoApellido'];
	$from = $_POST['email'];
	$empresa = $_POST['empresa'];
	$mensaje = $_POST['mensaje'];
	$acepto = $_POST['acepto'];
	$message = 'nombre: '.$nombre."\nApellidos: ".$primerApellido." ".$segundoApellido."\ne-mail: ".$from."\nempresa: ".$empresa."\nmensaje: ".$mensaje;
	$subject = '[Web] Formulario de contacto recibido'; 
//	$message = 'From: ' . $_POST['name'] . "\n". 'Mensaje:' . $_POST['data']; 
	$headers = "From: ". $from . "\n";
	// MAIL():  string $to , string $subject , string $message [, string $additional_headers [, string $additional_parameters ]]
	if (mail ('cesaraj@nexocargo.com', $subject, $message, $headers)){
		header('Location: ../contacto.php?status=sent#contact');
	} else {
		header('Location: ../contacto.php?status=notsent#contact');
	}

    
?>