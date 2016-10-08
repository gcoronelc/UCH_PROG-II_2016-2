$(document).ready(function(){


	$("#formulario_login").submit(function(e){
		e.preventDefault();
		var datos=$(this).serializeArray();
		$.ajax({
			type:"post",
			url:"login.php",
			data:datos
		}).done(function(respuesta){
				if(respuesta==1){
					$("#respuesta_login").html('<div class="alert alert-success" role="alert">Ingresaste!</div>');
				}else{
					$("#respuesta_login").html('<div class="alert alert-danger" role="alert">Usuario o contraseña incorrectos.</div>');
				}
		});
	});

	$("#formulario_nuevo").submit(function(e){
		e.preventDefault();
		var datos=$(this).serializeArray();
		$.ajax({
			type:"post",
			url:"nuevo.php",
			data:datos
		}).done(function(respuesta){
				if(respuesta==1){
					$("#respuesta_registro").html('<div class="alert alert-success" role="alert">Registrado exitosamente!</div>');
				}else if(respuesta==2){
					$("#respuesta_registro").html('<div class="alert alert-danger" role="alert">Ups! ocurrio un problema vuelve mas tarde.</div>');
				}else if(respuesta==3){
					$("#respuesta_registro").html('<div class="alert alert-info" role="alert">Usted ya se encuentra registrado.</div>');
				}else if(respuesta==4){
					$("#respuesta_registro").html('<div class="alert alert-warning" role="alert">Las contraseñas no coinciden.</div>');
				}else{
					alert(respuesta);
				}
		});
	});

});
