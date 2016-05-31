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
        <title>Nueva Transaccion</title>
    </head>
    <body>
        <form action="realizarTransferencia.php" method="post">
            <select name="cboCuenta">
                <?php
                $d = new Data();
                $d->getCuentas();
                ?>
            </select>
            <input type="text" name="txtDestinatario">
            <input type="text" name="txtMonto"> <br>
            <input type="submit" name="btnRealizarTransaccion" value="Realizar Transaccion">
        </form>
    </body>
</html>
