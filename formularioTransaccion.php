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
        <title>Nueva transaccion</title>
    </head>
    <body>
        <form action="controlador/realizarTransaccion.php" method="post">
            <select name="cboTipo">
                <option value="1">Giro</option>
                <option value="2">Deposito</option>
            </select> <br>

            <!--Si se hace con cuentas
            <select name="cboCuenta">
                <?php
                //$d = new Data();
                //$d->getCuentas();
                ?>
            </select>
            -->

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
