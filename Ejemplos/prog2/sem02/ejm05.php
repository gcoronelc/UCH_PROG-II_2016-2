<!-- Author: Eric Gustavo Coronel Castillo -->
<!-- Blog: gcoronelc.blogspot.com -->

<?php
// Datos
$dt = $_POST["dt"]; // Días trabajados
$hd = $_POST["hd"]; // Horas por día
$ch = $_POST["ch"]; // Costo po hora
// Proceso
$total = $dt * $hd * $ch;
$ir = $total * 0.10;  # Impuesto a la renta
$neto = $total - $ir;
// Formatos
$ch = "S/. " . number_format($ch, 2, ".", ",");
$total = "S/. " . number_format($total, 2, ".", ",");
$ir = "S/. " . number_format($ir, 2, ".", ",");
$neto = "S/. " . number_format($neto, 2, ".", ",");
?>
<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<script>
			function boton_back(){
				document.location.href = "ejm04.html";
			}
		</script>
	</head>
	<body bgcolor="#D2EBF7">

		<h1>PROGRAMACION II</h1>
		<h1>GUSTAVO CORONEL CASTILLO</h1>
		<h2>gcoronelc.blogspot.com</h2>
		<hr/>

		<h1>Cálculo de Sueldo</h1>
		<table border=1 width=241>
			<tr>
				<th align=center colspan=2 border=0>Datos</th>
			</tr>
			<tr>
				<td width=53%><b>Días trabajados</b></td>
				<td width="47%"><?php echo($dt) ?></td>
			</tr>
			<tr>
				<td><b>Horas por día</b></td>
				<td><?php echo($hd) ?></td>
			</tr>
			<tr>
				<td><b>Costo por hora</b></td>
				<td><?php echo($ch) ?></td>
			</tr>
			<tr>
				<th align=center colspan=2 border=0>
					Resultado
				</th>
			</tr>
			<tr>
				<td><b>Total</b></td>
				<td><?php echo($total) ?></td>
			</tr>
			<tr>
				<td><b>Impuesto Renta</b></td>
				<td><?php echo($ir) ?></td>
			</tr>
			<tr>
				<td><b>Neto</b></td>
				<td><?php echo($neto) ?></td>
			</tr>
		</table>
		<input type="button" value="Retornar" onClick="boton_back()">
	</body>
</html>