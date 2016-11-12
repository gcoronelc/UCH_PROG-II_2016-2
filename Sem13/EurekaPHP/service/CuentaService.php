<?php
class CuentaService {
  
  function resumenPorSucursal() {
    $lista = null;
    $cn = null;
    try {

      $cn = AccesoDB::getConnection();

      $sql = "select 
                chr_sucucodigo sucursal, 
                sum( case when chr_monecodigo = '01'
                     then dec_cuensaldo else 0.0 end ) soles,
                sum( case when chr_monecodigo = '02'
                     then dec_cuensaldo else 0.0 end ) dolares
              from cuenta
              group by chr_sucucodigo";

      $stm = $cn->prepare($sql);
      $stm->execute();

      if ($stm->rowCount() == 0) {
        throw new Exception("Datos incorrectos.");
      }

      $lista = $stm->fetchAll();

      $stm = null;
    } catch (Exception $ex) {
      throw new Exception($ex->getMessage());
    } 
    
    return $lista;   
    
    
  }
  
  
  
  
  
  
}
