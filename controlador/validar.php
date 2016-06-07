<?php
    if(isset($_POST["btnIniciar"])){
        require_once "../bd/Data.php";

        $rut=$_POST["txtRut"];
        $pass=$_POST["txtPass"];

        $d= new Data();
        $idPrivilegio = $d->getPrivilegio($rut, $pass);
        $nombre = $d->getNombre($rut, $pass);

        session_start();
        $_SESSION["idPrivilegio"] = $idPrivilegio;
        $_SESSION["nombre"] = $nombre;
        $_SESSION["rut"]=$rut;

        header("location: ../menu.php");
    }else{
        header("location: ../index.php?m=1");
    }
?>
