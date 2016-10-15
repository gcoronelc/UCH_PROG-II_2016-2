<?php
include './Producto.php';


$p1 = new Producto();

$p1->setNombre("Televisor");
$p1->setPrecio(2450.0);
$p1->setStock(1000);

echo "Nombre: " . $p1->getNombre() . "<br/>";
echo "Precio: {$p1->getPrecio()}<br/>";
echo "Stock: {$p1->getStock()}<br/>";


?>