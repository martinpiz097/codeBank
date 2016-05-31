<?php
    require_once "Conexion.php";

    class Data{
        private $c;

        public function __construct(){
            $this->c = new Conexion(
                "localhost",
                "sesiones",
                "root",
                ""
            );
        }
?>
