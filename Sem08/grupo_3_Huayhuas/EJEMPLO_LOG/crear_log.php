<?php 


class Log{

	function crear_log($cadena,$tipo,$usuario)
	{
		$archivo = fopen("log/log_".date("Y-m-d").".log", "a")or die ("Error al crear"); 

		fwrite($archivo, "[".date("Y-m-d H:i:s.u")." - ".$_SERVER['REMOTE_ADDR']." - ".$_SERVER['SERVER_NAME']." - ".$_SERVER['HTTP_USER_AGENT']." - $tipo : ".$cadena." - Usuario : ".$usuario." "."]\r\n");
		
		fclose($archivo);
	}

}
 ?>