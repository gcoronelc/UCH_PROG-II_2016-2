<?php
include '../service/data.php';
?>
<!DOCTYPE html>
<html>
<head>
	<title>EUREKA BANK</title>
	<link rel="stylesheet" type="text/css" href="../css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="../css/style.css">
</head>
<body>
	<p class="integrantes">
		Integrantes:<br>
		CHAVEZ ARAMBURU, KARELY<br>
		PALOMO PINTO JAN<br>
		SANCHEZ TORRES DANIEL<br>
		VILLANQUE CORZO JORGE ENRIQUE
	</p>
	<h3>EUREKA BANK: Pr&eacute;stamos</h3>
	<fieldset class="col-md-4 col-md-offset-4" style="padding: 0 !important; position: relative;">
		<form id="form_prestamo" action="../service/proceso.php" method="post">
			<table class="table">
				<tr>
					<td>
						<select name="cbo_tipo_credito" onchange="form_prestamo.submit()" class="form-control">
							<option value="">TIPO DE CREDITO</option>
							<?php
							foreach ($tipo_credito as $id => $nombre)
							{
								echo '<option value="'.$id.'" '.
								(isset($tipo_credito_seleccionado) ? ($tipo_credito_seleccionado == $id ? 'selected' : '') : '')
								.'>'.$nombre.'</option>';
							}
							?>
						</select>
					</td>
				</tr>
				<tr>
					<td>
						<select name="cbo_tiempo" class="form-control">
							<option value="">TIEMPO EN MESES</option>
							<?php
							if(isset($tipo_credito_seleccionado))
							{
								if($tipo_credito_seleccionado != '')
								{
									$meses = $tiempo[$tipo_credito_seleccionado];
									foreach ($meses as $mes)
									{
										echo '<option value="'.$mes.'" '.
									(isset($tiempo_seleccionado) ? ($tiempo_seleccionado == $mes ? 'selected' : '') : '')
									.'>'.$mes.'</option>';
									}
								}
							}
							?>
						</select>
					</td>
				</tr>
				<tr>
					<td>
						<input type="text" name="monto" placeholder="MONTO" class="form-control" value="<?php echo isset($monto_ingresado) ? $monto_ingresado : ''; ?>">
					</td>
				</tr>
				<tr>
					<td>
						<input class="btn btn-success" type="submit" value="PROCESAR">
					</td>
				</tr>
			</table>
			<?php
			if (isset($mensaje))
			{
				if (count($mensaje) > 0)
				{
					echo '<div class="alert alert-danger">'.implode('<br>', $mensaje).'</div>';
				}
				else
				{
					?>
					<table class="table table-condensed">
						<tr>
							<td><b>TIPO DE CR&Eacute;DITO:</b></td>
							<td><?php echo $tipo_credito[$tipo_credito_seleccionado]; ?></td>
						</tr>
						<tr>
							<td><b>CAPITAL:</b></td>
							<td><?php echo $monto_ingresado; ?></td>
						</tr>
						<tr>
							<td><b>INTER&Eacute;S MENSUAL:</b></td>
							<td><?php echo $interes_mensual[$tipo_credito_seleccionado]; ?> %</td>
						</tr>
						<tr>
							<td><b>TIEMPO:</b></td>
							<td><?php echo $tiempo_seleccionado; ?> MESES</td>
						</tr>
					</table>
					<div style="padding: 10px;">
						<table class="table table-condensed table-bordered">
							<thead>
								<tr>
									<th>CUOTA</th>
									<th>CAPITAL</th>
									<th>INTERES</th>
									<th>TOTAL</th>
								</tr>
							</thead>
							<tbody>
								<?php
								$capital = $monto_ingresado / $tiempo_seleccionado;
								$deuda_restante = $monto_ingresado;
								$interes_porcentual = $interes_mensual[$tipo_credito_seleccionado];

								for ($i = 0; $i < $tiempo_seleccionado; $i++)
								{
									$interes_real = ($deuda_restante * $interes_porcentual) / 100;
									echo '<tr>
										<td>'.($i + 1).'</td>
										<td>'.number_format($capital, 2, '.', ',').'</td>
										<td>'.number_format($interes_real, 2, '.', ',').'</td>
										<td>'.number_format($interes_real + $capital, 2, '.', ',').'</td>
									</tr>';
									$deuda_restante -= $capital;
								}
								?>
							</tbody>
						</table>
					</div>
					<?php
				}
			}
			?>
		</form>
	</fieldset>
</body>
</html>