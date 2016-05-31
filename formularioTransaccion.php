<!DOCTYPE html>
<?php
    session_start();

    if(!isset($_SESSION["rut"])){
        header("location: index.php?m=2");
    }
?>

<html>
    <head>
        <meta charset="utf-8">
        <title>Nueva operacion</title>
    </head>
    <body>
        <form action="realizarTransaccion.php" method="post">
            <select name="cboTipo">
                <option value="1">Giro</option>
                <option value="2">Deposito</option>
            </select> <br>

            <select name="cboCuenta">
                <?php
                $d = new Data();
                $d->getCuenas();
                ?>
            </select>
            <input type="text" name="txtMonto"> <br>
            <input type="submit" name="btnRealizarTransaccion" value="Realizar Transaccion">
        </form>
    </body>
</html>
