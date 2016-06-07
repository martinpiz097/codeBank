<?php
    session_start();

    if(!isset($_SESSION["rut"])){
        header("location: index.php?m=3");
    }else{
        $rut=$_SESSION["rut"];

        require_once("bd/Data.php");
        $d = new Data();
        $d->getHistorial($rut);
    }
?>
