<?php
class VentaService {

  
  public function procesar(VentaModel $model){ 
    // Proceso
    $total = $model->getPrecio() * $model->getCant();
    $importe = $total / 1.18;
    $impuesto = $total - $importe;
    // Reporte
    $model->setImporte($importe);
    $model->setImpuesto($impuesto);
    $model->setTotal($total);
  }
  
  
  public function procesar2($arreglo) {
    $arreglo["total"] = $arreglo["precio"] * $arreglo["cant"];
    $arreglo["importe"] = $arreglo["total"] / 1.18;
    $arreglo["impuesto"] = $arreglo["total"] - $arreglo["importe"];
    return $arreglo;
  }
}
