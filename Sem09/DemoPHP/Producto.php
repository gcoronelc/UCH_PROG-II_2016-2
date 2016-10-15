<?php

class Producto {
  
  private $nombre;
  private $precio;
  private $stock;
  
  function getNombre() {
    return $this->nombre;
  }

  function getPrecio() {
    return $this->precio;
  }

  function getStock() {
    return $this->stock;
  }

  function setNombre($nombre) {
    $this->nombre = $nombre;
  }

  function setPrecio($precio) {
    $this->precio = $precio;
  }

  function setStock($stock) {
    $this->stock = $stock;
  }

}
