<?php
if(isset($_POST["btnRealizarTransaccion"])){
    require_once "../bd/Data.php";

    $idUsuario=$S_SESSION["idUsuario"];
    $monto=$S_POST["txtMonto"];
    $cuenta=$S_POST["cboCuenta"];
    $destinatario=$_POST["txtDestinatario"];

    $d = new Data();
    if($d->isOperacionValida($idUsuario, $monto);){
        $d->addTransact($tipo, $idusuario, $cuenta, $monto);
        header("location: ../menu.php?m=5"); //transaccion exitosaa
    }else{
        header("location: ../menu.php?m=6"); //transaccion fallida
    }
}


?>
