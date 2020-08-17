<?php
	if (isset($_POST["enviarConsulta"])) {
		$name = $_POST["nombreContacto"];
		$mailContacto = $_POST["mailContacto"];
		$subject = $_POST["subjectContacto"];
		$message = $_POST["messageContacto"];



		echo $name;
		echo $mail;
		echo $subject;
		echo $message;
		// die();

		//Crear el correo electrónico de recuperación de contraseña
		require_once('../PHPMailer-5.2-stable/PHPMailerAutoload.php');

		$mail = new PHPMailer();
		$mail -> isSMTP();
		$mail -> SMTPAuth = true; //variable booleanea
		$mail -> SMTPSecure = 'ssl';
		$mail -> Host = 'smtp.gmail.com';//servidor smtp de Gmail gratuito
		$mail -> Port = '465'; //puerto
		$mail -> isHTML();
		$mail -> Username = 'azizabijouterie@gmail.com'; //Gmail desde donde envio
		$mail -> Password = 'atrefuiio.15547'; //password
		$mail -> SetFrom('no-reply@hoecode.org');
		$mail -> Subject = $subject;
		$mail -> Body = '<p>Hemos recibido una consulta de '.$name.'. Su consulta es: '.$message.' su mail de contacto es: '.$mailContacto.'</p>';
		$mail -> AddAddress('azizabijouterie@gmail.com'); //A quien se enviara el mail

		$mail -> Send();
		header("Location: ../index.php?send=success");
		exit();
	}
	else{
		header("Location: ../index.php");
		exit();
	}
	

?>