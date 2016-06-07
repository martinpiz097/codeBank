<?php
if(isset($_POST["btnRealizarTransaccion"])){
    require_once "../bd/Data.php";

    $idUsuario=$S_SESSION["idUsuario"];
    $monto=$S_POST["txtMonto"];
    //$cuenta=$S_POST["cboCuenta"];
    $tipo=$_POST["cboTipo"];

    $d = new Data();
    if($d->isOperacionValida($idUsuario, $monto);){
        if($tipo==1){
            $d->addTransact($idusuario, -$monto);
        }elseif($tipo==2){
            $d->addTransact($idusuario, $monto);
        }

        header("location: ../formularioTransaccion.php?m=1"); //transaccion exitosaa
    }else{
        header("location: ../formularioTransaccion.php?m=0"); //transaccion fallida
    }
}


?>
