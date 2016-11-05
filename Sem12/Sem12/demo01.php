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

$rs = mysql_query("select * from cliente");

// Imprimir los resultados en HTML
echo "<table>";
while ($row = mysql_fetch_array($rs, MYSQL_ASSOC)) {
    echo "<tr>";
    foreach ($row as $col_value) {
        echo "<td>$col_value</td>";
    }
    echo "</tr>";
}
echo "</table>\n";

// Liberar resultados
mysql_free_result($rs);

// Cerrar la conexión
mysql_close($link);

?>

