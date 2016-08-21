<!-- Author: Eric Gustavo Coronel Castillo -->
<!-- Blog: gcoronelc.blogspot.com -->

<?php
  header('Content-Type: text/html; charset=utf-8' );
  srand((double)microtime()*1000000);
  $nota = rand(0,20);
  echo("<h1>Nota: $nota</h1>");
?>
<?php if($nota<14) { ?>
	<h1>Estas Desaprobado.</h1>
<?php } else { ?>
	<h1>Felicitaciones Aprobaste.</h1>
<?php } ?>