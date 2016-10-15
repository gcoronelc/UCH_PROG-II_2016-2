<?php
class VentaModel {
  
  // Datos
  private $precio;
  private $cant;
  
  // Resultado
  private $importe;
  private $impuesto;
  private $total;
  
  function getPrecio() {
    return $this->precio;
  }

  function getCant() {
    return $this->cant;
  }

  function getImporte() {
    return $this->importe;
  }

  function getImpuesto() {
    return $this->impuesto;
  }

  function getTotal() {
    return $this->total;
  }

  function setPrecio($precio) {
    $this->precio = $precio;
  }

  function setCant($cant) {
    $this->cant = $cant;
  }

  function setImporte($importe) {
    $this->importe = $importe;
  }

  function setImpuesto($impuesto) {
    $this->impuesto = $impuesto;
  }

  function setTotal($total) {
    $this->total = $total;
  }


  
}

?>