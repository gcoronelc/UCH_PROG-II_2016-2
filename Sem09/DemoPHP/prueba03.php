<?php
 include './service/VentaService.php';

 // Datos
 $venta["precio"] = 3456.78;
 $venta["cant"] = 10;
 
 // Proceso
 $service = new VentaService();
 $venta = $service->procesar2($venta);
 
 // Reporte
 echo "Precio: {$venta["precio"]}<br/>";
 echo "Cantidad: {$venta["cant"]}<br/>";
 echo "Importe: {$venta["importe"]}<br/>";
 echo "Impuesto: {$venta["impuesto"]}<br/>";
 echo "Total: {$venta["total"]}<br/>";
 
?>