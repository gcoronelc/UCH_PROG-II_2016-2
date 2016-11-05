<?php

$link = mysql_connect('localhost', 'eureka', 'admin');


$db = mysql_select_db('eurekabank');


$rs = mysql_query("select * from cliente");

// Mostrar los resultados
while ($row = mysql_fetch_array($rs, MYSQL_ASSOC)) {
    foreach ($row as $col_value) {
      print_r($row);
      echo "<br/>";
    }
}

// Liberar resultados
mysql_free_result($rs);

// Cerrar la conexión
mysql_close($link);

?>

