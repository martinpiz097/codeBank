<!DOCTYPE html>
<?php
    session_start();

    if(!isset($_SESSION["rut"])){
        header("location: index.php?m=4");
    }
?>


<html>
    <head>
        <meta charset="utf-8">
        <title>Nueva Transferencia</title>
    </head>
    <body>
        <!--Si se  hace con cuentas-->
        <form action="controlador/realizarTransferencia.php" method="post">

            <!---<select name="cboCuenta">
                <?php
                //$d = new Data();
                //$d->getCuentas();
                ?>
            </select>
            -->

            <input type="text" name="txtDestinatario">
            <input type="text" name="txtMonto"> <br>
            <input type="submit" name="btnRealizarTransaccion" value="Realizar Transaccion">
        </form>

        <?php
        if(isset($_GET["m"])){
                $m=$_GET["m"];
                switch ($m) {
                    case 0:
                        echo "<br>";
                        echo "No se ha podido realizar transaccion";
                        break;

                    case 1:
                        echo "<br>";
                        echo "Transaccion realizada exitosamente!";
                        break;
                }
        }
        ?>

        <a href="menu.php">Volver</a>
        <a href="cerrarSesion.php">Cerrar Sesion</a>
    </body>
</html>
