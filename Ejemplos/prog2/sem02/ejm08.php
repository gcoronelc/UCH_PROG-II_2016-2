<!-- Author: Eric Gustavo Coronel Castillo -->
<!-- Blog: gcoronelc.blogspot.com -->

<?php
$formulario = TRUE;
if( isset( $_REQUEST["control"] ) ){
	// Datos
	$base = $_REQUEST["base"];
	$altura = $_REQUEST["altura"];
	// Proceso
	$area = $base * $altura / 2;
	$formulario = FALSE;
}
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
			
		<h3>Calculo del Area de de Triangulo</h3>
		<?php if( $formulario ) { ?>
		<h3>Datos</h3>
		<form method="post" action="ejm08.php">
			<input type="hidden" name="control" value="12345">
			<table width="164">
				<tr>
					<td width="62">Base:</td>
					<td width="90">
						<input name="base" type="text" size="6" maxlength="6">
					</td>
				</tr>
				<tr>
					<td>Altura:</td>
					<td><input name="altura" type="text" size="6" maxlength="6"></td>
				</tr>
				<tr>
					<td colspan="2"><input type="submit" value="Calcular"></td>
				</tr>
			</table>
		</form>
		<?php } else { 	?>
		<h3>Resultado</h3>
		<table width="138">
			<tr>
				<td width="49">Base</td>
				<td width="77"><?php echo($base) ?></td>
			</tr>
			<tr>
				<td>Altura</td>
				<td><?php echo($altura) ?></td>
			</tr>
			<tr>
				<td>Area</td>
				<td><?php echo($area) ?></td>
			</tr>
		</table>
		<a href="ejm08.php">Nuevo Cálculo</a>
		<?php } ?>
	</body>
</html>