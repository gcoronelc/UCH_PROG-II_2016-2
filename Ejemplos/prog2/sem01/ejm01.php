<!-- Author: Eric Gustavo Coronel Castillo -->
<!-- Blog: gcoronelc.blogspot.com -->

<!-- Este ejemplo ilustra el uso de etiquetas cortas. -->
<!-- Es necesario que sean habilitadas.               -->

<?

  header('Content-Type: text/html; charset=utf-8');
  echo "<h1>Conoce el Perú</h1>";
  echo "<h1>Visita Cusco</h1>";

  $destino2 = "Chiclayo";
?>
<h1>También visita <?= $destino2 ?></h1>