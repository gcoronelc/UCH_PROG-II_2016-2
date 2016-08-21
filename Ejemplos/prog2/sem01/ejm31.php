<!-- Author: Eric Gustavo Coronel Castillo -->
<!-- Blog: gcoronelc.blogspot.com -->

<?php header('Content-Type: text/html; charset=utf-8' ); ?>
<font face="Helvetica">
<?php
	$a = 15;
	echo( "\$a = " . ++$a . "<br>\n" );
	echo( "\$a = " . $a++ . "<br>\n" );
	echo( "\$a = " . $a );
?>
</font>