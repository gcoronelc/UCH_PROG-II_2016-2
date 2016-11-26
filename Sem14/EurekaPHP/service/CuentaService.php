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





/* 
 * Estructura del Registro: 
 *  $rec["cliente"] -> Código del cliente 
 *  $rec["empl"] -> Código del empleado 
 *  $rec["importe"] -> Importe de apertura 
 *  $rec["clave"] -> Clave de la cuenta 
 *  $rec["moneda"] -> Moneda 
 *  Retorna el código de la cuenta 
 */ 
function crearCuenta($rec) { 
  $pdo = null;
  try { 
    // Objeto Connection
    $pdo = AccesoDB::getConnection();
    // Iniciando la Tx
    $pdo->setAttribute(PDO::ATTR_AUTOCOMMIT, FALSE);
    $pdo->beginTransaction(); 
    // Leer la sucursal del empleado 
    $query = "select chr_sucucodigo from asignado "
            . "where chr_emplcodigo = ? "
            . "and dtt_asigfechabaja is null"; 
    $stm = $pdo->prepare($query); 
    $stm->execute(array($rec["empl"]));
    if( $stm->rowCount() == 0 ){
      throw new PDOException("Empleado no es válido"); 
    } 
    $row = $stm->fetch(); 
    $sucursal = $row['chr_sucucodigo']; 
    // Lectura del contador de cuenta de la sucursal 
    $query = "select int_sucucontcuenta as cont "
            . "from sucursal where chr_sucucodigo = ? "
            . "for update "; 
    $stm = $pdo->prepare($query); 
    $stm->execute( array( $sucursal ) ); 
    $row = $stm->fetch(); 
    $cont = $row["cont"] + 1; 
    $query = "update sucursal set int_sucucontcuenta = ? "
            . "where chr_sucucodigo = ?"; 
    $stm = $pdo->prepare($query); 
    $stm->execute( array( $cont, $sucursal ) ); 
    $codCuenta = $sucursal . str_pad("$cont", 5, "0", STR_PAD_LEFT); 
    // Insertar Cuenta 
    $query = "insert into cuenta(chr_cuencodigo,"
            . "chr_monecodigo,chr_sucucodigo, "
            . "chr_emplcreacuenta,chr_cliecodigo,"
            . "dec_cuensaldo,dtt_cuenfechacreacion, "
            . "vch_cuenestado,int_cuencontmov,"
            . "chr_cuenclave) "
            . "values(?,?,?,?,?,?, sysdate(),'ACTIVO',1,?)"; 
    $stm = $pdo->prepare($query); 
    $stm->bindParam(1,$codCuenta); 
    $stm->bindParam(2,$rec["moneda"]); 
    $stm->bindParam(3,$sucursal); 
    $stm->bindParam(4,$rec["empl"]); 
    $stm->bindParam(5,$rec["cliente"]); 
    $stm->bindParam(6,$rec["importe"]); 
    $stm->bindParam(7,$rec["clave"]); 
    $stm->execute(); 
    // Insertar Movimiento 
    $query = "insert into movimiento(chr_cuencodigo,"
            . "int_movinumero, dtt_movifecha,"
            . "chr_emplcodigo,chr_tipocodigo,"
            . "dec_moviimporte, chr_cuenreferencia) "
            . "values(?,1,sysdate(),?,'001',?,null)"; 
    $stm = $pdo->prepare($query); 
    $stm->bindParam(1,$codCuenta); 
    $stm->bindParam(2,$rec["empl"]); 
    $stm->bindParam(3,$rec["importe"]); 
    $stm->execute(); 
    // Confirmar Transacción 
    $pdo->commit(); 
    return $codCuenta; 
  } catch ( PDOException $e ) { 
    try { 
      $pdo->rollBack(); 
    } catch (Exception $exc) { } 
    throw $e; 
   } 
}



}
