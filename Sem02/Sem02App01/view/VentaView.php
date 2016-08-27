<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <link href="../css/estilos.css" rel="stylesheet" type="text/css"/>
        <title></title>
    </head>
    <body>
        <div class="egcc_page">
            <?php include '../util/cabecera.php'; ?>
            <h1>CALCULO DE VENTA</h1>
            <form method="post" action="../service/VentaService.php">
                <table>
                    <tr>
                        <td>Precio:</td>
                        <td><input type="text" name="precio"/></td>
                    </tr>
                    <tr>
                        <td>Cantidad:</td>
                        <td><input type="text" name="cant"/></td>
                    </tr>
                    <tr>
                        <td><input type="submit" value="Procesar"/></td>
                    </tr>
                </table>
            </form>
            
            <?php if( isset($total)){ ?>
            <h1>RESULTADO</h1>
            <table>
                <tr>
                    <td>Precio:</td>
                    <td><?php echo $precio; ?></td>
                </tr>
                <tr>
                    <td>Cantidad:</td>
                    <td><?php echo $cant; ?></td>
                </tr>
                <tr>
                    <td>Importe:</td>
                    <td><?php echo $importe; ?></td>
                </tr>
                <tr>
                    <td>Impuesto:</td>
                    <td><?php echo $impuesto; ?></td>
                </tr>
                <tr>
                    <td>Total:</td>
                    <td><?php echo $total; ?></td>
                </tr>
            </table>
            <?php } ?>
        </div>
    </body>
</html>
