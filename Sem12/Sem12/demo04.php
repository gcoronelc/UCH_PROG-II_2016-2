<?php

$dsn = 'mysql:dbname=eurekabank;host=localhost';
$user = 'eureka';
$password = 'admin';

try {
  $dbh = new PDO($dsn, $user, $password);
  $dbh->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
  $dbh->setAttribute(PDO::ATTR_CASE, PDO::CASE_LOWER);
  $dbh->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
  
  $sql = "select CHR_EMPLCODIGO, vch_emplpaterno, "
          . "vch_emplmaterno, vch_emplnombre "
          . "from empleado";
  $stm = $dbh->query($sql);
  while ($row = $stm->fetch()) {
    
    print_r($row);
    echo "<hr/>";
    
    /*
    $texto = $row["chr_emplcodigo"] . " - " . 
            $row["vch_emplpaterno"] . " - " . 
            $row["vch_emplmaterno"] . " - " . 
            $row["vch_emplnombre"];
    echo("$texto<br>");
    */
  }
} catch (PDOException $e) {
  echo 'Falló la conexión: ' . $e->getMessage();
}
?>