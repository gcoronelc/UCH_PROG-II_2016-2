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
  
  function getDataSucursal($codigo) {
    
    $rec = null;
    $cn = null;
    
    try {

      $cn = AccesoDB::getConnection();

      $sql = "select chr_sucucodigo, vch_sucunombre, 
              vch_sucuciudad, vch_sucudireccion, 
              int_sucucontcuenta from sucursal 
              where chr_sucucodigo = ? ";

      $stm = $cn->prepare($sql);
      $stm->execute(array($codigo));

      if ($stm->rowCount() == 0) {
        throw new Exception("Datos incorrectos.");
      }

      $rec = $stm->fetch();

      $stm = null;
      
    } catch (Exception $ex) {
      
      throw new Exception($ex->getMessage());
      
    }

    return $rec;
  }
  
  
  function getCboSucursales() {
    $lista = null;
    $cn = null;
    try {

      $cn = AccesoDB::getConnection();

      $sql = "select chr_sucucodigo cod, vch_sucunombre name
              from sucursal";

      $stm = $cn->prepare($sql);
      $stm->execute();

      $lista = $stm->fetchAll();

      $stm = null;
    } catch (Exception $ex) {
      throw new Exception($ex->getMessage());
    }

    return $lista;
  }

  
  function resumenPorTipoMov($sucursal, $moneda) {
    $lista = null;
    $cn = null;
    try {

      $cn = AccesoDB::getConnection();

      $sql = " SELECT TIPOCODIGO, TIPONOMBRE, 
                  COUNT(1) CANTMOV, SUM(moviimporte) IMPORTE 
               FROM V_MOVIMIENTO 
               WHERE SUCUCODIGO=? AND MONECODIGO=? 
               GROUP BY TIPOCODIGO, TIPONOMBRE";

      $stm = $cn->prepare($sql);
      $stm->execute(array($sucursal, $moneda));

      if ($stm->rowCount() == 0) {
        throw new Exception("No hay datos.");
      }

      $lista = $stm->fetchAll();

      $stm = null;
    } catch (Exception $ex) {
      throw new Exception($ex->getMessage());
    }

    return $lista;
  }
}
