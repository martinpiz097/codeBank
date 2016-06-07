<?php
    if(!isset($_POST["btnRegistrar"])){
        require_once "..bd/Data.php";

        $nombre=$_POST["txtNombre"];
        $rut=$_POST["txtRut"];
        $pass=$_POST["txtPass"];
        $privilegio=$_POST["cboPrivilegio"]

        $d= new Data();
        $d->crearUsuario($nombre,$rut,$pass,$privilegio);

    }

    header("location: ../menu.php");
?>
