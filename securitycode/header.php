<?php
	session_start();

?>

<!DOCTYPE html>
<html>
	<head>
		<title>Security Code</title>
		<meta charset="utf-8">	
		<!-- CSS -->
		<link type="text/css" href="css/normalize.css" rel="stylesheet">
		<link type="text/css" href="css/style.css" rel="stylesheet">
		<!-- Fuente -->
		<link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@100;300;400;500;600;700;800;900&display=swap" rel="stylesheet">
		<!-- Required meta tags -->   
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<!-- Bootstrap CSS -->
		<link rel="stylesheet" href="css/bootstrap.min.css">
		<!--Libreria icons-->
		<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous"> 


	</head>
	<body>
		<header>
			<nav class="navbar navbar-expand-lg navbar-light bg-light">
			  <a class="navbar-brand" href="index.php"><img src="img/icono.png"></a>
			  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>

			  <div class="collapse navbar-collapse" id="navbarSupportedContent">
			    <ul class="navbar-nav mr-auto">
			      <li class="nav-item active">
			        <a class="nav-link" href="index.php">Home</a>
			      </li>
			      <li class="nav-item" id="Objetivo">
			        <a class="nav-link" href="#">Nuestro Producto</a>
			      </li>
			      <!-- <li class="nav-item">
			        <a class="nav-link" href="#">Donde encontrarnos</a>
			      </li> -->
			      <li class="nav-item">
			      	<div id="Contacto">
			        	<a class="nav-link" href="#">Contacto</a>
			        </div>
			      </li>				      			      
			    </ul>
			    <form class="form-inline my-2 my-lg-0">
			      <a href="#Login" class="btn btn-outline-primary" data-toggle="modal"><i class="fa fa-user-circle fa-lg" aria-hidden="true"></i> Iniciar Seci&oacute;n</a>
			    </form>
			  </div>
			</nav>
		</header>

<div class="modal fade" id="Login">
	<div class="modal-dialog modal-md">
		<div class="modal-content ventanaE">
			<div class="modal-header">
				<h3 class="text-info">Iniciar Sesi&oacute;n</h3>
				<button type="button" class="close text-danger" data-dismiss="modal" aria-hidden="true">&times;</button>			
			</div>
			<div class="modal-body">
				<div class="container">
					<div class="row justify-content-center">
						<div class="col-md-10">
							<form action="php/php-login.php" method="POST">
								<div class="text-center">
									<img src="img/icono1.png">
								</div>
							  <input name="userLogin" class="form-control mt-4 mb-4" type="text" placeholder="Ingrese Usuario o E-mail" aria-label="Search">
								<div class="input-group">
									<input name="pwdLogin" id="txtPassword" type="password" class="form-control" placeholder="Ingrese Contrase&ntilde;a">
									<div class="input-group-append">
										<button id="show_password" class="btn btn-primary" type="button" onclick="mostrarPassword()"> <span class="fa fa-eye-slash icon"></span> </button>
									</div>
								</div>
							  <div class="text-center">
							  	<button type="submit" name="loginUser" class="btn btn-outline-primary mt-4" >Ingresar</button>
							  </div>
							</form>
						</div>
					</div>				
				</div>
			</div>
			<div class="modal-footer">
				<div class="container">				
					<div class="row justify-content-center">
						<div class="col-10">
							<div class="text-center">
								<a href="pwdRequest.php" target="_blank">Olvide mi contrase&ntilde;a</a>
							</div>	
						</div>	
					</div>
				</div>								
			</div>						
		</div>					
	</div>
</div>

<!-- 			      <li class="nav-item dropdown">
			        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
			          Dropdown
			        </a>
			        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
			          <a class="dropdown-item" href="#">Action</a>
			          <a class="dropdown-item" href="#">Another action</a>
			          <div class="dropdown-divider"></div>
			          <a class="dropdown-item" href="#">Something else here</a>
			        </div>
			      </li>
			      <li class="nav-item">
			        <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
			      </li> -->