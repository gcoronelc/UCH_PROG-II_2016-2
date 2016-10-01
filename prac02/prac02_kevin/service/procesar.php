<?php 

$tipo_credito=isset($_POST['combo-credito']) ? $_POST['combo-credito'] : "";
$importe=isset($_POST['importe']) ? $_POST['importe'] : 0 ;
$tiempo_meses=0;
$interes=0;

if($tipo_credito==1){
	$nombre="Credito Personal";
	$interes=0.04;
	$tiempo_meses=isset($_POST['combo-meses1']) ? $_POST['combo-meses1'] : 0;
}else if($tipo_credito==2){
	$nombre="Credito Empresarial";
	$interes=0.018;
	$tiempo_meses=isset($_POST['combo-meses2']) ? $_POST['combo-meses2'] : 0;
}
//fraccionando



echo '
	Tipo de Credito : '.$nombre.' <br>
	Importe : '.$importe.' <br>
	interes mensual : '.($interes*100).'% <br>
	Tiempo : '.$tiempo_meses.' meses<br>
	 <div class="divider"></div>
      <table>
        <thead>
          <tr>
              <th data-field="cuota">CUOTA</th>
              <th data-field="capital">CAPITAL</th>
              <th data-field="interes">INTERES</th>
              <th data-field="total">TOTAL</th>
          </tr>
        </thead>
        <tbody>
';

	$paga_mensual=$importe/$tiempo_meses;

for ($i=1; $i < $tiempo_meses+1 ; $i++) { 

	$interes_mensual=$importe*$interes;

	$total_pagar=$paga_mensual+$interes_mensual;

	echo '
	       <tr>
        	<td>'.$i.'</td>
            <td>'.$paga_mensual.'</td>
            <td>'.$interes_mensual.'</td>
            <td>'.$total_pagar.'</td>
          </tr>
	';

	$importe=$importe-$paga_mensual;

}

echo '
        </tbody>
      </table>
 ';

 ?>