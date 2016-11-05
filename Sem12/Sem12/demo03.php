<?php

$link = mysql_connect('localhost', 'eureka', 'admin');

if($link){
  echo 'Bien';
} else {
  echo 'Error';
}

$db = mysql_select_db('eurekabank');

if($db){
  echo 'Bien';
} else {
  echo 'Error';
}


?>

// Imprimir los resultados en HTML
<table>
  <tr>
    <th>CODIGO</th>
    <th>PATERNO</th>
    <th>MATERNO</th>
    <th>NOMBRE</th>
  </tr>

<?php

$paterno = $_GET["paterno"];
//$paterno = "' or '1' like '1";

$sql = "select chr_cliecodigo, vch_cliepaterno, "
        . "vch_cliematerno, vch_clienombre from cliente "
        . "where vch_cliepaterno like '$paterno%'";

$rs = mysql_query($sql);

echo "SQL: $sql <br/>";

while ($row = mysql_fetch_array($rs, MYSQL_ASSOC)) {
    echo "\n<tr>";
    foreach ($row as $col_value) {
        echo "<td>$col_value</td>";
    }
    echo "</tr>\n";
}
echo "</table>\n";

// Liberar resultados
mysql_free_result($rs);

// Cerrar la conexión
mysql_close($link);

?>

