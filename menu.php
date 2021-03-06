<!DOCTYPE html>
<?php
    session_start();

    if(!isset($_SESSION["idPrivilegio"])){
        header("location: index.php?m=2");
    }else{
        $idPrivilegio=$_SESSION["idPrivilegio"];
        $nombre= $_SESSION["nombre"];
        $rut=$_SESSION["rut"];

        if($idPrivilegio==0){
            session_destroy();
            header("location: index.php?m=3");
        }
    }
?>

<html>
    <head>
        <meta charset="utf-8">
        <title></title>
    </head>
    <body>
        <h1>Bienvenido <?php echo $nombre ?> </h1>
        <?php
        require_once("bd/Data.php");
        $d = new Data();

        switch ($idPrivilegio) {
            case 1:
                $d->formularioCrear("controlador/registrar.php");
                $d->listarUsuarios();
                break;
            case 2:
                echo "<a href="historial.php"><h2>Ver historial</h2></a>";
                echo "<a href="formularioTransferencia.php"><h2>Realizar una transferencia</h2></a>";
                echo "<a href="formulacioTransaccion.php"><h2>Realizar un giro/deposito</h2></a>";
                break;
        }

        if(isset($_GET["m"])){
                $m=$_GET["m"];
                switch ($m) {
                    case 6:
                        echo "Debe hacer formulario realizar algun movimiento";
                        break;
                }
        }
        ?>

        <a href="controlador/cerrarSesion.php">Cerrar Sesion</a>
    </body>
</html>
