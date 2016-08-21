<!-- Author: Eric Gustavo Coronel Castillo -->
<!-- Blog: gcoronelc.blogspot.com -->

<?php header('Content-Type: text/html; charset=utf-8' ); ?>
<font face="Helvetica">
<?php
	$msg = "<b>¡Es libre el que vive según su elección!</b>";
	$obj = (object) $msg;
	echo($obj->scalar);
?>
</font>