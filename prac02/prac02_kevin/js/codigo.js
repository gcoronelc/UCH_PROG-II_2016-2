$(document).ready(function(){
	 $('select').material_select();
	$('.fixed-action-btn').openFAB();

	$("#formulario").click(function(){
		$("#cargar").load("view/formulario.php");
	});
	$("#listar").click(function(){
		$("#cargar").load("view/lista.php");
	});


	$("#formulario-eurekabank").submit(function(e){
		e.preventDefault();
		var datos=$(this).serializeArray();
		$.ajax({
			type:"post",
			url:"service/procesar.php",
			data:datos
		}).done(function(respuesta){
			// if(respuesta==1){
			// 	alert("Agregado con exito");
			// }else{
			// 	alert("Intentelo mas tarde Gracias!.")
			// }
			$("#cargar").html(" "+respuesta);
		});
	});

	$("#combo-credito").change(function(){
		var valor = $(this).val();
		if(valor==1){
			$("#combo-1").css({"display":"block"});
			$("#combo-2").css({"display":"none"});
		}else if(valor==2){
			$("#combo-1").css({"display":"none"});
			$("#combo-2").css({"display":"block"});
		}
	});



});
