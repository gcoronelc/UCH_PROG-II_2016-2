<?php 
include("conexion.php");
include("crear_log.php");
	$nombres= htmlentities(isset($_POST['nombres']) ? $_POST['nombres']:"");
	$usuario= htmlentities(isset($_POST['email']) ? $_POST['email']:"");
	$contrasena1= htmlentities(isset($_POST['contrasena1']) ? $_POST['contrasena1']:"");
	$contrasena2= htmlentities(isset($_POST['contrasena2']) ? $_POST['contrasena2']:"");

if($contrasena1==$contrasena2){

	$conexion=mysqli_connect($host,$user,$pass,$db) or die("Error en conexion");

	$consulta0="SELECT * FROM usuario WHERE email_usu='".$usuario."' ";
	$respuesta0=mysqli_query($conexion,$consulta0);
	$cant=mysqli_num_rows($respuesta0);
	if($cant==0){
		$consulta="INSERT INTO usuario VALUES(null,'".$nombres."','".$usuario."','".$contrasena1."')";
		$respuesta=mysqli_query($conexion,$consulta);
		if($respuesta){
			echo 1;

			$log=new log();
			$log->crear_log("Se registro un nuevo usuario","Registro",$usuario);

		}else{
			echo 2;
		}
	}else{
		echo 3;
	}

	mysqli_close($conexion);	


}else{
	echo 4;
}





 ?>