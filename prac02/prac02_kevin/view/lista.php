<?php 
@session_start();
if (isset($_SESSION["carrito"])) {
	$carrito=$_SESSION['carrito'];
	echo '    <table>
        <thead>
          <tr>
              <th data-field="nombre">Nombre</th>
              <th data-field="precio">Precio</th>
              <th data-field="cantidad">Cantidad</th>
              <th data-field="cantidad">Importe</th>
          </tr>
        </thead>
        <tbody>';
	foreach ($carrito as $rec) {
		echo '<tr>
            <td>'.$rec['nombre'].'</td>
            <td>'.$rec['precio'].'</td>
            <td>'.$rec['cant'].'</td>
            <td>'.$rec['importe'].'</td>
          </tr>';
		}
	echo "  
        </tbody>
      </table>";

	}else{
		echo "carrito no existe";
	}



 ?>

  