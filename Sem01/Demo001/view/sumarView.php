<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <h1>SUMAR</h1>
        <form method="post" action="../service/sumarService.php">
            <table>
                <tr>
                    <td>Número 1:</td>
                    <td><input type="text" name="num1"/></td>
                </tr>
                <tr>
                    <td>Número 2:</td>
                    <td><input type="text" name="num2"/></td>
                </tr>
            </table>
            <input type="submit" value="Procesar" />
        </form>
        <?php if( isset($suma) ) { ?>
            <h2>RESULTADO</h2>
            <p>Número 1: <?php echo $n1; ?></p>
            <p>Número 2: <?php echo $n2; ?></p>
            <p>Suma: <?php echo $suma; ?></p>
        <?php } ?>
        
    </body>
</html>
