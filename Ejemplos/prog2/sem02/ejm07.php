<!-- Author: Eric Gustavo Coronel Castillo -->
<!-- Blog: gcoronelc.blogspot.com -->

<?php
// Datos
$n1 = $_GET["N1"];
$n2 = $_GET["N2"];
// Proceso
$suma = $n1 + $n2;
?>
<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	</head>
	<body bgcolor="#D2EBF7">

		<h1>PROGRAMACION II</h1>
		<h1>GUSTAVO CORONEL CASTILLO</h1>
		<h2>gcoronelc.blogspot.com</h2>
		<hr/>
	
		<h1>Resultado</h1>
		<table width="168">
			<tr>
				<td width="66"><b>N1</b></td>
				<td width="135"><?php echo($n1) ?></td>
			</tr>
			<tr>
				<td><b>N2</b></td>
				<td><?php echo($n2) ?></td>
			</tr>
			<tr>
				<td><b>Suma</b></td>
				<td><?php echo($suma) ?></td>
			</tr>
		</table>
		<a href="ejm06.html">Nueva Suma</a>
	</body>
</html>