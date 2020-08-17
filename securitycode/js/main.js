//Mostrar Contraseña
function mostrarPassword(){
		var cambio = document.getElementById("txtPassword");
		if(cambio.type == "password"){
			cambio.type = "text";
			$('.icon').removeClass('fa fa-eye-slash').addClass('fa fa-eye');
		}else{
			cambio.type = "password";
			$('.icon').removeClass('fa fa-eye').addClass('fa fa-eye-slash');
		}
	} 
	
	$(document).ready(function () {
	//CheckBox mostrar contraseña
	$('#ShowPassword').click(function () {
		$('#Password').attr('type', $(this).is(':checked') ? 'text' : 'password');
	});
});
	
//Scroll en Index
$("#Contacto").on("click", function(){
    var posicion = $("#hastaContacto").offset().top;
    $("html, body").animate({
        scrollTop: posicion
    }, 2000); 
});


$("#Objetivo").on("click", function(){
    var posicion = $("#hastaObjetivo").offset().top;
    $("html, body").animate({
        scrollTop: posicion
    }, 2000); 
});