<?php

    class estudiosModelo{
        private $conexion;
        private $estudios;

        public function __construct() {

            require_once("..\modelo\conectar.php");
            $this->conexion=conectar::conexion();
            $this->estudios=array();

        }

        public function get_estudios(){

            $consulta=$this->conexion->query("SELECT * FROM estudio");

            while ($fila=$consulta->fetch(PDO::FETCH_ASSOC)){

                $this->estudios[]=$fila;

            }
            return json_encode($this->estudios, JSON_UNESCAPED_UNICODE);
        }

    }

?>