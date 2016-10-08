<?php 
include("conexion.php");
include("crear_log.php");

// function leerUsuario(){
	$usuario= htmlentities(isset($_POST['email']) ? $_POST['email']:"");
// 	return $usuario;
// }

// function leerContrasena(){
	$contrasena= htmlentities(isset($_POST['contrasena']) ? $_POST['contrasena']:"");
// 	return $contrasena;
// }

$conexion=mysqli_connect($host,$user,$pass,$db) or die("Error en conexion");
$consulta="SELECT * FROM usuario WHERE email_usu='".$usuario."' AND contrasena_usu='".$contrasena."'";
$respuesta=mysqli_query($conexion,$consulta);
$cant=mysqli_num_rows($respuesta);
if($cant>0){
	echo 1;

	$log=new log();
	$log->crear_log("Se Ingreso al sistema","Mensaje",$usuario);
}else{
	echo 2;

	$log=new log();
	$log->crear_log("Fallo la autenticacion","Alerta",$usuario);
}


mysqli_close($conexion);


 ?>