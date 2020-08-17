<?php
	if (isset($_POST['sendResetPwd'])) {
		
		$selector = bin2hex(random_bytes(8));
		$token = random_bytes(32);

		$url = "http://localhost/securitycode/createnewpwd.php?selector=".$selector."&validator=".bin2hex($token);
		$caduca = date("U") + 3600;

		require 'php-conexion.php';

		$mailUser = $_POST['emailRequest'];

		if (empty($mailUser)) {
			header("Location: ../pwdRequest.php?error=empty");
			exit();
		} 
		else {
			$sql = "DELETE FROM resetpassword WHERE passwordResetEmail=?";
			$represent = mysqli_stmt_init($conexion);
			if (!mysqli_stmt_prepare($represent,$sql)) {
				echo "Error1";
				exit();
			}
			else{
				mysqli_stmt_bind_param($represent,"s",$mailUser);
				mysqli_stmt_execute($represent);
			}

			$sql ="INSERT INTO resetpassword(passwordResetEmail, passwordResetSelector, passwordResetToken, passwordResetExpires) VALUES (?,?,?,?)";

			if (!mysqli_stmt_prepare($represent,$sql)) {
				echo "Error2";
				exit();
			}
			else{
				$hashToken = password_hash($token, PASSWORD_DEFAULT);
				mysqli_stmt_bind_param($represent,"ssss",$mailUser,$selector,$hashToken,$caduca);
				mysqli_stmt_execute($represent);
			}
			mysqli_stmt_close($represent); //Cierra una sentencia preparada
			mysqli_close($conexion);//cierra conexion

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
			$mail -> Subject = 'Recuperar cuenta';
			$mail -> Body = '<p>Hemos recibido una solicitud de restablecimiento de contrase&ntilde;a de tu cuenta. '.$url.'</p>';
			$mail -> AddAddress($mailUser); //A quien se enviara el mail

			$mail -> Send();
			header("Location: ../pwdRequest.php?reset=success");
			exit();
		}

	}
	else {
		//Si el usuario accedio sin hacer click en el buttom nuevaCuenta
		header("Location: ../index.php");
		exit();
	}	
?>