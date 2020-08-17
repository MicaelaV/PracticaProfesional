<?php 
	require "header.php";
?>
<main>
	<div>
		<section>
			<!-- Titulo de la Empresa -->
			<div class="container-fluid">
				<div class="row align-items-center">
					<div class="col-12 col-sm-12 col-md-6 col-lg-7 text-center pt-5 pb-5 presentacion">
						<h1 class="titleIndex mt-5 mb-5 font-weight-light">SECURITY CODE</h1>
						<br><br>
						<div class="border border-light rounded mb-5">
							<span class="eslogan mb-5 pt-5 pb-5 font-weight-light">Nosotros tenemos la soluci&oacute;n para que tus tareas sean m&aacute;s sencillas</span>							
						</div>				
					</div>
				</div>
			</div>

	    <!-- inicio de card -->		
	    <div class="container-fluid text-center pt-2 pb-2 mb-3 titleCard">
	      <h1 class="display-6 font-weight-light text-info textInfo">Nuestros cuatros pilares de trabajo</h1>
	    </div>
	    <div class="container" id="hastaObjetivo">
	    	<div class="row">
		      <div class="card-deck">
		      	<div class="col-12 col-sm-6 col-md-6 col-lg-3">
			        <div class="card cardBlue mt-5 mb-5 pr-3 pl-3">
			          <div class="text-center">
			            <img src="img/WEB.png" alt="" class="cssimg img-fluid rounded-circle" height="200px" width="200px">
			          </div>
			          <div class="card-block text-center mt-2 mb-3">
			            <p class="card-text text-danger">ACCEDE DE FORMA MÓVIL Y VÍA WEB.</p>
			          </div>
			        </div>
			      </div>   
		        <div class="col-12 col-sm-6 col-md-6 col-lg-3">			      	      		
			        <div class="card cardRed mt-5 mb-5 pr-3 pl-3">
			          <div class="text-center">
			            <img src="img/INSTALACIONES.png" alt="" class="cssimg img-fluid rounded-circle" height="200px" width="200px">
			          </div>
			          <div class="card-block text-center mt-2 mb-3">
			            <p class="card-text text-info">REGISTRA Y BRINDA SEGUIMIENTO A LAS INSTALACIONES.</p>
			          </div>
			        </div>
			      </div>  
		        <div class="col-12 col-sm-6 col-md-6 col-lg-3">        
			        <div class="card cardBlue mt-5 mb-5 pr-3 pl-3">
			          <div class="text-center">
			            <img src="img/AGILIZA.png" alt="" class="cssimg img-fluid rounded-circle" height="200px" width="200px">
			          </div>
			          <div class="card-block text-center mt-2 mb-3">
			            <p class="card-text text-danger">AGILIZA EL TRABAJO DE LOS PREVENTORES.</p>
			          </div>
			        </div>
			      </div>  
						<div class="col-12 col-sm-6 col-md-6 col-lg-3">
			        <div class="card cardRed mt-5 mb-5 pr-3 pl-3">
			          <!-- <img class="card-img-top img-fluid" src="images/fondo-1.png" alt="Card image cap"> -->
			          <div class="text-center">
			            <img src="img/ALERTAS.png" alt="" class="cssimg img-fluid rounded-circle" height="200px" width="200px">
			          </div>
			          <div class="card-block text-center mt-2 mb-3">
								<!--<h4 class="card-title">Card title</h4> -->
			            <p class="card-text text-info">RECIBÍ ALERTAS DE EVENTOS IMPORTANTES.</p>
			          </div>
			        </div>								
						</div>       
		      </div>    		
	    	</div>
	    </div>
			<div class="container-fluid titleCard mt-4">
				<hr class="mt-2 mb-3 pt-4 pb-4">
			</div>

			<!-- Contacto-->		
			<div class="container-fluid ventanaE pt-4 mt-5">
				<div class="row">
					<div class="col-sm-5 mt-2 align-self-center text-center">

						<h1 class="font-weight-light m-3">Contacto</h1>

						<h6 class="font-weight-light">Email de contacto/N&uacute;mero de tel&eacute;fono de contacto</h6>

						<div class="row justify-content-center h-100">
							<div class="m-3">
				        <a href="https://www.instagram.com/"><i class="fab fa-instagram fa-2x"></i></a>
				      </div>
				      <div class="m-3">
				          <a href="https://twitter.com/"><i class="fab fa-twitter fa-2x"></i></a>
				      </div>
				      <div class="m-3">
				          <a href="https://www.facebook.com/"><i class="fab fa-facebook-f fa-2x"></i></a>
				      </div>
				    </div>   
					</div>
					<div class="col-sm-7 mt-2" id="hastaContacto">
						<form action="php/php-contactform.php" method="POST">
						    <div class="row justify-content-center">
							    <div class="col-sm-9 mb-3">
							      <label class="text-center font-weight-light">Nombre</label>
							      <input type="text" class="form-control" name="nombreContacto"  minlength="4" required>
						       </div>
						    </div>
						    <div class="row justify-content-center">
							    <div class="col-sm-9 mb-3">
							      <label class="text-center font-weight-light">Subject</label>
							        <input name="subjectContacto" type="text" class="form-control" required>

							    </div>
						    </div>						    
						    <div class="row justify-content-center">
							    <div class="col-sm-9 mb-3">
							      <label class="text-center font-weight-light">E-Mail</label>
							        <input name="mailContacto" type="email" class="form-control" required>

							    </div>
						    </div>
						     <!-- </div> --> 
						    <div class="row justify-content-center">
						        <div class="col-sm-9 mb-3">
						        	<label class="text-center font-weight-light">Consulta</label>
						        	<textarea id="message" class="form-control" name="messageContacto" cols="20" rows="5" class="form-control full-width border-box m-none" maxlength="255" required></textarea>
						        </div>
						    </div> 
						    <div class="row justify-content-center">
						        <button class="btn btn-outline-primary" type="submit" name="enviarConsulta">Enviar Consulta</button>
						   	</div> 
						</form>
			    </div>
			  </div>	
			</div>					
		</section>		
	</div>
</main>
<?php
	require "footer.php";
?>