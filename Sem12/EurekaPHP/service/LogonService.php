<?php

class LogonService {

  public function validar($usuario, $clave) {
    $rec = null;
    $cn = null;
    try {

      $cn = AccesoDB::getConnection();

      $sql = "select chr_emplcodigo, vch_emplpaterno, vch_emplmaterno, 
        vch_emplnombre, vch_emplciudad, vch_empldireccion,
        vch_emplusuario from empleado 
        where vch_emplusuario = ? and vch_emplclave = ?";

      $stm = $cn->prepare($sql);
      $stm->execute(array($usuario, $clave));

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

}

?>