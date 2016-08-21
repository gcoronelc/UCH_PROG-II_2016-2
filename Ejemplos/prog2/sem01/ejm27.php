<!-- Author: Eric Gustavo Coronel Castillo -->
<!-- Blog: gcoronelc.blogspot.com -->

<?php header('Content-Type: text/html; charset=utf-8' ); ?>
<font face="Helvetica">
<?php

	function msgError($file, $line, $message) {
		echo("<b>ERROR</b><br>");
		echo("<b>Archivo:</b> $file<br>");
		echo("<b>Linea:</b> $line<br>");
		echo("<b>Mensaje:</b> $message");
	}

	msgError(__FILE__,__LINE__, "Algo está mal!!!");
?>
</font>