<!-- Author: Eric Gustavo Coronel Castillo -->
<!-- Blog: gcoronelc.blogspot.com -->

<?php header('Content-Type: text/html; charset=utf-8' ); ?>
<table width="200" border="1">
	<tr>
		<th align="center">Número</th>
		<th align="center">Cuadrado</th>
	</tr>
	<?php for($k=1;$k<=10;$k++){ ?>
		<tr>
			<td align="center"><?php echo( $k ) ?></td>
			<td align="center"><?php echo( $k * $k ) ?></td>
		</tr>
	<?php } ?>
</table>