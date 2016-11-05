<?php try {
  
  $dsn = 'mysql:host=localhost;dbname=eurekabank';
  $dbh = new PDO($dsn, 'eureka', 'admin');
  $dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  $dbh->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
  $dbh->setAttribute(PDO::ATTR_CASE, PDO::CASE_LOWER);
  
  $query = "select * from movimiento "
          . "where chr_cuencodigo = '00100001'";
  $stm = $dbh->query($query);
  
  while ($row = $stm->fetch()) {
    echo "{$row['dtt_movifecha']} - {$row['chr_tipocodigo']} – {$row['dec_moviimporte']}<br/>";
  } $dbh = null;
  
} catch (PDOException $e) {
  echo $e->getMessage();
} ?>

