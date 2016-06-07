<?php
if(isset($_POST["btnRealizarTransaccion"])){
    require_once "../bd/Data.php";

    $idUsuario=$S_SESSION["idUsuario"];
    $monto=$S_POST["txtMonto"];
    //$cuenta=$S_POST["cboCuenta"];
    $destinatario=$_POST["txtDestinatario"];

    $d = new Data();
    if($d->isOperacionValida($idUsuario, $monto) and $d->existe($destinatario)){
        $d->addTransfer($idusuario, $destinatario, $monto);
        header("location: ../formularioTransferencia.php?m=1"); //transaccion exitosaa
    }else{
        header("location: ../formularioTransferencia.php?m=0"); //transaccion fallida
    }
}else{
        header("location: ../menu.php?m=6");
}


?>
