<?php

if (isset($_POST['loginUser'])) {
	require 'php-conexion.php';

	$mailUser = $_POST['userLogin'];
	$password = md5($_POST['pwdLogin']);

	echo "1";
	//Validamos campos vacios
	if (empty($mailUser) || empty($password)) {
		header("Location: ../index.php?error=emptyfields");
		echo "2";
		exit();
	}
	else {
		//Cosulta a la base
		$sql = "SELECT idUsuario, idGrupo, password FROM usuarios WHERE usuario=? OR mail=?;";
		$represent = mysqli_stmt_init($conexion);
		echo "3";
		
		if (!mysqli_stmt_prepare($represent,$sql)) {
			header("Location: ../index.php?error=sqlerror");
			exit();	
			echo "4";		
		}
		else {
			echo "5";
			mysqli_stmt_bind_param($represent,"ss",$mailUser,$mailUser);
			mysqli_stmt_execute($represent);
			$resultado = mysqli_stmt_get_result($represent); //Obtiene un conjunto de resultados de una sentencia preparada
			if ($row = mysqli_fetch_assoc($resultado)) {
				//Como uso MD5 debi modificar esta parte

				//mysqli_fetch_assoc Obtener una fila de resultado como un array asociativo
				//$passwordCheck = password_verify($password, $row['password']);//Primero password que ingresa user, segundo password que se trae de la base. password_verify Comprueba que la contraseña coincida con un hash
				//echo $passwordCheck;
				// if ($passwordCheck == false) {
				// 	//Si la password es incorrecta
				// 	header("Location: ../index.php?error=notexistuser");
				// 	exit();	
				// }
				// else if ($passwordCheck == true) {

				if ($password != $row['password']) {
					//Si la password es incorrecta
					header("Location: ../index.php?error=notexistuser");
					exit();	
				}
				else if ($password == $row['password']) {
					session_start();
					$_SESSION['idUsuario'] = $row['idUsuario'];
					$_SESSION['idGrupo'] = $row['idGrupo'];
					header("Location: ../index.php?login=success?idGrupo=".$_SESSION['idGrupo']);
					exit();					
				}
				else{
					//por si $passwordCheck no es true o false				
					header("Location: ../index.php?error=wrongpassword");
					exit();					
				}
			}	
			else {
				header("Location: ../index.php?error=notexistuser");
				exit();					
			}
		}
	}
}
else {
	header("Location: ../index.php");
	exit();
}
?>