<!DOCTYPE html>
<html>
	<head>
		<title>Security Code</title>
		<meta charset="utf-8">	
		<!-- CSS -->
		<link type="text/css" href="css/normalize.css" rel="stylesheet">
		<link type="text/css" href="css/style.css" rel="stylesheet">
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
			</nav>
		</header>

		<section>
			<div class="container mt-5">
				<div class="row justify-content-center">
					<div class="col-10 col-md-6 mt-5 mb-5 rounded c-resetPwd">
						<form action="php/php-pwdRequest.php" method="POST">

						    <div class="row justify-content-center">
							    <div class="col-12 col-md-8 mb-3 mt-3">
							      <label for="validationEmail" class="text-center font-weight-bold">Introduce tu dirección de correo electrónico o usuario.</label>
							        <input name="emailRequest" type="email" class="form-control" required>
							    </div>
						    </div>
	 
						    <div class="row justify-content-center mb-4">
						        <button class="btn btn-outline-primary" type="submit" name="sendResetPwd">Continuar</button>
						   	</div>

						</form>
	        </div>
	    	</div>	
			</div>
		</section>
		<!-- Optional JavaScript -->
		<!-- jQuery first, then Popper.js, then Bootstrap JS -->
		<script src="js/jquery-3.4.1.min.js"></script>
		<script src="js/bootstrap.min.js"></script> 		
	</body>
</html>